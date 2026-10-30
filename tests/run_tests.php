<?php
/**
 * YUKT IT SOLUTIONS — Automated Test Suite & Production Readiness Verification
 */

$baseUrl = 'http://localhost/yukt';
$results = [];
$totalTests = 0;
$passedTests = 0;

function logTest($name, $passed, $details = '') {
    global $results, $totalTests, $passedTests;
    $totalTests++;
    if ($passed) $passedTests++;
    $status = $passed ? "[PASS]" : "[FAIL]";
    $results[] = sprintf("%-7s %-50s %s", $status, $name, $details);
}

function fetchUrl($url, $options = []) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HEADER, true);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ch, CURLOPT_TIMEOUT, 10);
    
    if (!empty($options['post'])) {
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $options['post']);
    }

    $response = curl_exec($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    $headerSize = curl_getinfo($ch, CURLINFO_HEADER_SIZE);
    curl_close($ch);

    $header = substr($response, 0, $headerSize);
    $body = substr($response, $headerSize);

    return ['code' => $httpCode, 'header' => $header, 'body' => $body];
}

echo "========================================================================\n";
echo " YUKT IT SOLUTIONS — Automated Test Suite\n";
echo "========================================================================\n\n";

// -------------------------------------------------------------------------
// 1. Static Asset Verification
// -------------------------------------------------------------------------
echo "1. Checking Core Static Assets...\n";

$logoExists = file_exists(__DIR__ . '/../assets/images/yukt-logo.svg');
logTest('Static Asset: yukt-logo.svg', $logoExists, $logoExists ? 'Found' : 'Missing');

$faviconExists = file_exists(__DIR__ . '/../assets/images/favicon.svg');
logTest('Static Asset: favicon.svg', $faviconExists, $faviconExists ? 'Found' : 'Missing');

$cssFile = __DIR__ . '/../assets/css/main.css';
$cssValid = file_exists($cssFile) && filesize($cssFile) > 10000;
logTest('Static Asset: assets/css/main.css', $cssValid, filesize($cssFile) . ' bytes');

$jsFile = __DIR__ . '/../assets/js/app.js';
$jsValid = file_exists($jsFile) && filesize($jsFile) > 1000;
logTest('Static Asset: assets/js/app.js', $jsValid, filesize($jsFile) . ' bytes');

$robotsExists = file_exists(__DIR__ . '/../robots.txt');
logTest('SEO Asset: robots.txt', $robotsExists);

$sitemapExists = file_exists(__DIR__ . '/../sitemap.xml');
logTest('SEO Asset: sitemap.xml', $sitemapExists);

echo "\n2. Verifying HTTP Routes & Semantic SEO Integrity...\n";

// -------------------------------------------------------------------------
// 2. HTTP Routes & Semantic SEO
// -------------------------------------------------------------------------
$routes = [
    '/index.php' => 'Homepage',
    '/about.php' => 'About Us',
    '/services.php' => 'Services Hub',
    '/portfolio.php' => 'Portfolio Gallery',
    '/contact.php' => 'Contact Desk',
    '/design-system.php' => 'Design System Showcase',
    '/service-website-development.php' => 'Service: Web Dev',
    '/service-software-applications.php' => 'Service: Software Apps',
    '/service-ai-automation.php' => 'Service: AI Automation',
    '/service-digital-marketing.php' => 'Service: Digital Marketing',
    '/service-ai-marketing.php' => 'Service: AI Marketing',
    '/service-branding-creative.php' => 'Service: Branding',
    '/service-ecommerce-solutions.php' => 'Service: E-Commerce',
    '/service-it-consulting.php' => 'Service: IT Consulting',
    '/project-enterprise-saas.php' => 'Project: Enterprise SaaS',
    '/project-d2c-commerce.php' => 'Project: D2C Commerce',
    '/project-rag-assistant.php' => 'Project: RAG Assistant',
    '/project-corporate-portal.php' => 'Project: Corporate Portal',
    '/project-b2b-marketing.php' => 'Project: B2B Marketing',
    '/project-franchise-platform.php' => 'Project: Franchise Platform',
    '/service-catalogue.php' => 'Service Catalogue (140+ Services)',
    '/partner.php' => 'Partner Program Landing',
    '/partner-login.php' => 'Partner Portal Login',
    '/admin-partners.php' => 'Partner Admin Console',
    '/robots.txt' => 'Robots Crawl File',
    '/sitemap.xml' => 'XML Sitemap'
];

foreach ($routes as $path => $name) {
    $res = fetchUrl($baseUrl . $path);
    $isOk = ($res['code'] === 200);
    $hasTitle = strpos($res['body'], '<title>') !== false || strpos($path, '.txt') !== false || strpos($path, '.xml') !== false;
    $hasCanonical = strpos($res['body'], 'rel="canonical"') !== false || strpos($path, '.txt') !== false || strpos($path, '.xml') !== false;

    logTest("Route: $name ($path)", $isOk && $hasTitle, "HTTP " . $res['code']);
}

// Test 404 Error Page Handling
$res404 = fetchUrl($baseUrl . '/404.php');
$is404Ok = ($res404['code'] === 404);
$has404NoIndex = strpos($res404['body'], 'content="noindex, nofollow"') !== false;
$has404Title = strpos($res404['body'], '404') !== false;
logTest("Route: Custom 404 Page (/404.php)", $is404Ok && $has404NoIndex && $has404Title, "HTTP " . $res404['code'] . " (noindex, nofollow verified)");

echo "\n3. Testing Database & API Validation Endpoints...\n";

// -------------------------------------------------------------------------
// 3. API & Database Integrity Testing
// -------------------------------------------------------------------------
require_once __DIR__ . '/../includes/db.php';

// Test 3A: Valid Contact Submission
$contactData = [
    'full_name' => 'QA Automated Test User',
    'email' => 'qa.test@yukt.online',
    'phone' => '+91 99999 88888',
    'service_needed' => 'Website Design & Development',
    'budget' => '₹1,50,000 – ₹5,00,000',
    'message' => 'Automated QA suite integration test payload.'
];
$res = fetchUrl($baseUrl . '/api/contact-submit.php', ['post' => $contactData]);
$contactJson = json_decode($res['body'], true);
$contactValid = ($res['code'] === 200 && !empty($contactJson['success']));
logTest('API: Valid Contact Form Submission', $contactValid, $contactJson['message'] ?? '');

// Verify DB Insertion
$dbContactCount = 0;
if ($pdo) {
    $stmt = $pdo->prepare("SELECT COUNT(*) FROM inquiries WHERE email = :email");
    $stmt->execute([':email' => 'qa.test@yukt.online']);
    $dbContactCount = $stmt->fetchColumn();
}
logTest('DB: Contact Inquiries Table Record Exists', $dbContactCount > 0, "Found $dbContactCount row(s)");

// Test 3B: Anti-Spam Honeypot Trapping
$spamData = [
    'website_honey' => 'http://malicious-bot-url.com',
    'full_name' => 'Spam Bot Trigger',
    'email' => 'spambot@automated-crawler.com',
    'message' => 'Cryptocurrency SEO scam message.'
];
$resSpam = fetchUrl($baseUrl . '/api/contact-submit.php', ['post' => $spamData]);
$dbSpamCount = 0;
if ($pdo) {
    $stmt = $pdo->prepare("SELECT COUNT(*) FROM inquiries WHERE email = :email");
    $stmt->execute([':email' => 'spambot@automated-crawler.com']);
    $dbSpamCount = $stmt->fetchColumn();
}
logTest('Security: Honeypot Traps Bot (0 DB Rows Inserted)', ($dbSpamCount === 0), "Honeypot filtered successfully");

// Test 3C: Invalid Email Rejection
$invalidEmailData = [
    'full_name' => 'Invalid Email Tester',
    'email' => 'not-a-valid-email-string',
    'message' => 'Testing email regex validation rejection.'
];
$resInvalid = fetchUrl($baseUrl . '/api/contact-submit.php', ['post' => $invalidEmailData]);
logTest('Validation: Invalid Email Rejection (HTTP 400)', ($resInvalid['code'] === 400));

// Test 3D: Valid Quote Request Submission
$quoteData = [
    'client_name' => 'QA Quote Requester',
    'client_email' => 'quote.qa@yukt.online',
    'client_phone' => '+91 99999 77777',
    'project_type' => 'Custom Software / SaaS',
    'estimated_budget' => '₹5,00,000 – ₹15,00,000',
    'timeline' => '1 to 3 months',
    'details' => 'Testing quote modal persistence in database.'
];
$resQuote = fetchUrl($baseUrl . '/api/quote-submit.php', ['post' => $quoteData]);
$quoteJson = json_decode($resQuote['body'], true);
$quoteValid = ($resQuote['code'] === 200 && !empty($quoteJson['success']));
logTest('API: Valid Quote Request Modal Submission', $quoteValid);

$dbQuoteCount = 0;
if ($pdo) {
    $stmt = $pdo->prepare("SELECT COUNT(*) FROM quote_requests WHERE client_email = :email");
    $stmt->execute([':email' => 'quote.qa@yukt.online']);
    $dbQuoteCount = $stmt->fetchColumn();
}
logTest('DB: Quote Requests Table Record Exists', $dbQuoteCount > 0, "Found $dbQuoteCount row(s)");

// Test 3E: Newsletter Subscription
$newsData = ['email' => 'newsletter.qa@yukt.online'];
$resNews = fetchUrl($baseUrl . '/api/newsletter-submit.php', ['post' => $newsData]);
$newsJson = json_decode($resNews['body'], true);
$newsValid = ($resNews['code'] === 200 && !empty($newsJson['success']));
logTest('API: Newsletter Subscription Endpoint', $newsValid);

// Test 3F: Partner Registration System API
$partnerTestData = [
    'full_name' => 'QA Cyber Cafe Partner',
    'email' => 'partner.qa@yukt.online',
    'phone' => '+91 98888 77777',
    'whatsapp' => '+91 98888 77777',
    'password' => 'secret1234',
    'confirm_password' => 'secret1234',
    'shop_name' => 'QA Digital Jan Seva Kendra',
    'business_type' => 'Cyber Cafe',
    'state' => 'Delhi',
    'district' => 'New Delhi',
    'city' => 'Uttam Nagar',
    'address' => 'Shop 14, Main Market, Uttam Nagar',
    'experience_years' => '3 to 5 years',
    'preferred_language' => 'Hinglish',
    'interested_services' => ['Website & Web Development', 'Advanced Document Services', 'Software & Billing Solutions'],
    'terms' => '1'
];
$resPartner = fetchUrl($baseUrl . '/api/partner-register.php', ['post' => $partnerTestData]);
$partnerJson = json_decode($resPartner['body'], true);
$partnerValid = ($resPartner['code'] === 200 && !empty($partnerJson['success']) && !empty($partnerJson['partner_code']));
logTest('API: Partner Registration & ID Generation', $partnerValid, "Partner ID: " . ($partnerJson['partner_code'] ?? 'None'));

// Verify Partner DB Record & Initial Status 'pending_verification'
$dbPartnerStatus = '';
$dbPartnerCode = '';
if ($pdo) {
    $stmt = $pdo->prepare("SELECT partner_code, status FROM partners WHERE email = :email LIMIT 1");
    $stmt->execute([':email' => 'partner.qa@yukt.online']);
    $pRow = $stmt->fetch();
    if ($pRow) {
        $dbPartnerCode = $pRow['partner_code'];
        $dbPartnerStatus = $pRow['status'];
    }
}
$isPartnerPending = ($dbPartnerStatus === 'pending_verification');
logTest('DB: Partner Saved with Status "pending_verification"', $isPartnerPending, "Status: $dbPartnerStatus");

// Test 3G: Duplicate Partner Email Rejection
$resDupPartner = fetchUrl($baseUrl . '/api/partner-register.php', ['post' => $partnerTestData]);
logTest('Validation: Duplicate Partner Rejection (HTTP 400)', ($resDupPartner['code'] === 400));

// Test 3H: Anti-Spam Honeypot on Partner Registration
$spamPartnerData = $partnerTestData;
$spamPartnerData['email'] = 'spampartner@bot.com';
$spamPartnerData['partner_honey'] = 'bot_detected';
$resPartnerSpam = fetchUrl($baseUrl . '/api/partner-register.php', ['post' => $spamPartnerData]);
$dbPartnerSpamCount = 0;
if ($pdo) {
    $stmt = $pdo->prepare("SELECT COUNT(*) FROM partners WHERE email = :email");
    $stmt->execute([':email' => 'spampartner@bot.com']);
    $dbPartnerSpamCount = $stmt->fetchColumn();
}
logTest('Security: Partner Honeypot Traps Bot (0 DB Rows)', ($dbPartnerSpamCount === 0));

// Clean up QA test rows
if ($pdo) {
    $pdo->exec("DELETE FROM inquiries WHERE email IN ('qa.test@yukt.online', 'spambot@automated-crawler.com')");
    $pdo->exec("DELETE FROM quote_requests WHERE client_email = 'quote.qa@yukt.online'");
    $pdo->exec("DELETE FROM newsletter_subscribers WHERE email = 'newsletter.qa@yukt.online'");
    $pdo->exec("DELETE FROM partners WHERE email IN ('partner.qa@yukt.online', 'spampartner@bot.com')");
}

// -------------------------------------------------------------------------
// Summary Report
// -------------------------------------------------------------------------
echo "\n========================================================================\n";
echo " TEST EXECUTION RESULTS:\n";
echo "========================================================================\n";
foreach ($results as $line) {
    echo $line . "\n";
}

echo "\n------------------------------------------------------------------------\n";
echo " Total Tests: $totalTests | Passed: $passedTests | Failed: " . ($totalTests - $passedTests) . "\n";
if ($passedTests === $totalTests) {
    echo " STATUS: 100% PRODUCTION READY — ALL SYSTEMS PASSED.\n";
} else {
    echo " STATUS: ISSUES DETECTED. REVIEW FAILED TESTS ABOVE.\n";
}
echo "========================================================================\n";
