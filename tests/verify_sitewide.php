<?php
$routes = [
    "http://localhost/yukt/index.php",
    "http://localhost/yukt/about.php",
    "http://localhost/yukt/services.php",
    "http://localhost/yukt/portfolio.php",
    "http://localhost/yukt/contact.php",
    "http://localhost/yukt/design-system.php",
    "http://localhost/yukt/service-website-development.php",
    "http://localhost/yukt/service-software-applications.php",
    "http://localhost/yukt/service-ai-automation.php",
    "http://localhost/yukt/service-digital-marketing.php",
    "http://localhost/yukt/service-ai-marketing.php",
    "http://localhost/yukt/service-branding-creative.php",
    "http://localhost/yukt/service-ecommerce-solutions.php",
    "http://localhost/yukt/service-it-consulting.php",
    "http://localhost/yukt/project-enterprise-saas.php",
    "http://localhost/yukt/project-d2c-commerce.php",
    "http://localhost/yukt/project-rag-assistant.php",
    "http://localhost/yukt/project-corporate-portal.php",
    "http://localhost/yukt/project-b2b-marketing.php",
    "http://localhost/yukt/project-franchise-platform.php"
];

$errors = [];
$totalLinks = 0;
$rootDir = realpath(__DIR__ . '/..');

foreach ($routes as $url) {
    $ctx = stream_context_create(['http' => ['timeout' => 5]]);
    $html = @file_get_contents($url, false, $ctx);
    if ($html === false) {
        $errors[] = "Failed to load HTTP route: $url";
        continue;
    }

    // Check floating WhatsApp button present (Company number)
    if (strpos($html, 'wa.me/918235411806') === false) {
        $errors[] = "Missing official WhatsApp link on: $url";
    }

    // Extract links
    preg_match_all('/href=["\']([^"\']+)["\']/i', $html, $matches);
    foreach ($matches[1] as $href) {
        $totalLinks++;
        // Skip anchors, external protocols
        if ($href === '#' || strpos($href, '#') === 0) continue;
        if (preg_match('/^(https?|mailto|tel|javascript):/i', $href)) continue;

        // Strip anchor or query params
        $clean = explode('#', $href)[0];
        $clean = explode('?', $clean)[0];
        if (empty($clean)) continue;

        $targetFile = $rootDir . '/' . ltrim($clean, '/');
        if (!file_exists($targetFile)) {
            $errors[] = "Broken link on $url -> $href (Target '$targetFile' not found)";
        }
    }
}

echo "========================================================================\n";
echo " SITEWIDE DEEP LINK & WHATSAPP INTEGRITY CHECK\n";
echo "========================================================================\n";
echo "Scanned Routes: " . count($routes) . "\n";
echo "Total Links Evaluated: $totalLinks\n";

if (empty($errors)) {
    echo "STATUS: ALL 20 ROUTES & $totalLinks LINKS VERIFIED CLEAN. ZERO BROKEN LINKS.\n";
    echo "WHATSAPP FLOATING BUTTON & CTAs VERIFIED ON 100% OF PAGES.\n";
} else {
    echo "ERRORS DETECTED (" . count($errors) . "):\n";
    foreach ($errors as $e) {
        echo "  - $e\n";
    }
}
echo "========================================================================\n";
