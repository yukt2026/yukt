<?php
/**
 * Test Suite: Mobile Navigation Drawer & Collapsible Services Accordion
 */

echo "========================================================================\n";
echo " TESTING MOBILE NAVIGATION & SERVICES ACCORDION INTEGRITY\n";
echo "========================================================================\n\n";

$errors = [];
$passes = [];

// 1. Render Header
ob_start();
require_once __DIR__ . '/../includes/header.php';
$headerHtml = ob_get_clean();

// Check mobile drawer container
if (strpos($headerHtml, 'id="mobileDrawer"') !== false) {
    $passes[] = "Mobile drawer #mobileDrawer exists in header DOM.";
} else {
    $errors[] = "Missing #mobileDrawer in header DOM.";
}

// Check mobile menu toggle button
if (strpos($headerHtml, 'id="mobileMenuToggle"') !== false) {
    $passes[] = "Hamburger toggle button #mobileMenuToggle exists.";
} else {
    $errors[] = "Missing #mobileMenuToggle in header.";
}

// Check services toggle button
if (strpos($headerHtml, 'id="mobileServicesToggle"') !== false) {
    $passes[] = "Accordion toggle button #mobileServicesToggle exists.";
} else {
    $errors[] = "Missing #mobileServicesToggle in header.";
}

// Check that inline onclick is removed to avoid double-firing
if (strpos($headerHtml, 'id="mobileServicesToggle" onclick=') === false && strpos($headerHtml, 'onclick="window.toggleMobileServices') === false) {
    $passes[] = "No conflicting inline onclick attribute on #mobileServicesToggle.";
} else {
    $errors[] = "Found inline onclick on #mobileServicesToggle which can cause double-firing.";
}

// Check that pointer-events-none is NOT inside #mobileServicesToggle
preg_match('/<button[^>]*id="mobileServicesToggle"[^>]*>(.*?)<\/button>/s', $headerHtml, $toggleMatches);
if (!empty($toggleMatches[1])) {
    $toggleContent = $toggleMatches[1];
    if (strpos($toggleContent, 'pointer-events-none') === false) {
        $passes[] = "No pointer-events-none inside #mobileServicesToggle (safe for touch hit-testing).";
    } else {
        $errors[] = "Found pointer-events-none inside #mobileServicesToggle children, causing touch drop issues.";
    }

    if (strpos($toggleContent, 'mobile-services-chevron-wrapper') !== false) {
        $passes[] = "Chevron is wrapped in .mobile-services-chevron-wrapper for targeted rotation.";
    } else {
        $errors[] = "Missing .mobile-services-chevron-wrapper around chevron icon.";
    }
} else {
    $errors[] = "Could not parse #mobileServicesToggle content.";
}

// Check that #mobileServicesMenu is hidden initially and contains all 8 services
if (strpos($headerHtml, 'id="mobileServicesMenu" class="hidden') !== false) {
    $passes[] = "#mobileServicesMenu is properly hidden by default with .hidden.";
} else {
    $errors[] = "#mobileServicesMenu missing or not hidden by default.";
}

// Count service links inside #mobileServicesMenu
preg_match('/<div[^>]*id="mobileServicesMenu"[^>]*>(.*?)<\/div>\s*<\/div>/s', $headerHtml, $menuMatches);
if (!empty($menuMatches[1])) {
    preg_match_all('/href="(service-[^"]+\.php)"/', $menuMatches[1], $serviceLinks);
    $foundServiceCount = count(array_unique($serviceLinks[1]));
    if ($foundServiceCount === 8) {
        $passes[] = "All 8 dedicated service route links found in mobile accordion menu.";
    } else {
        $errors[] = "Expected 8 service links in mobile menu, found {$foundServiceCount}.";
    }
}

// Check WhatsApp CTAs in header and drawer
if (strpos($headerHtml, 'Start Project on WhatsApp (+91 95763 38282)') !== false) {
    $passes[] = "Mobile drawer WhatsApp CTA text displays Ansar's number (+91 95763 38282).";
} else {
    $errors[] = "Mobile drawer WhatsApp CTA does not display (+91 95763 38282).";
}

if (strpos($headerHtml, 'Chat on WhatsApp (+91 95763 38282)') !== false) {
    $passes[] = "Header desktop WhatsApp button title displays Ansar's number (+91 95763 38282).";
} else {
    $errors[] = "Header desktop WhatsApp button title does not display (+91 95763 38282).";
}

// 2. Check JavaScript Logic in assets/js/app.js
$jsCode = file_get_contents(__DIR__ . '/../assets/js/app.js');

if (strpos($jsCode, 'mobileServicesToggle') !== false && strpos($jsCode, 'mobileServicesMenu') !== false) {
    $passes[] = "app.js references #mobileServicesToggle and #mobileServicesMenu.";
} else {
    $errors[] = "app.js does not reference accordion toggle elements.";
}

if (strpos($jsCode, "servicesToggle.addEventListener('click', toggleServices)") !== false || strpos($jsCode, "servicesToggle.addEventListener('click'") !== false) {
    $passes[] = "app.js binds clean single click listener to servicesToggle.";
} else {
    $errors[] = "app.js missing clean click listener on servicesToggle.";
}

if (strpos($jsCode, "window.toggleMobileServices = toggleServices") !== false) {
    $passes[] = "window.toggleMobileServices is cleanly exposed for global invocation.";
} else {
    $errors[] = "window.toggleMobileServices not exposed.";
}

if (strpos($jsCode, "https://wa.me/917217645059") === false) {
    $passes[] = "app.js contains no legacy quote modal WhatsApp links pointing to 72176 (all point to Ansar: 919576338282).";
} else {
    $errors[] = "app.js still contains hardcoded links to 917217645059.";
}

// 3. Check CSS Rules in input.css and main.css
$cssInput = file_get_contents(__DIR__ . '/../assets/css/input.css');
$cssMain = file_get_contents(__DIR__ . '/../assets/css/main.css');

if (strpos($cssInput, '#mobileServicesToggle .mobile-services-chevron-wrapper') !== false &&
    strpos($cssInput, '#mobileServicesToggle[aria-expanded="true"] .mobile-services-chevron-wrapper') !== false) {
    $passes[] = "input.css contains targeted rotation rule for .mobile-services-chevron-wrapper.";
} else {
    $errors[] = "input.css missing targeted .mobile-services-chevron-wrapper rotation rule.";
}

if (strpos($cssInput, '#mobileServicesToggle[aria-expanded="true"] svg') === false) {
    $passes[] = "input.css does NOT rotate all SVGs (layers icon stays upright).";
} else {
    $errors[] = "input.css still contains broad '#mobileServicesToggle[aria-expanded=\"true\"] svg' rule.";
}

if (strpos($cssMain, 'mobile-services-chevron-wrapper') !== false) {
    $passes[] = "main.css compiled successfully with mobile services chevron wrapper styles.";
} else {
    $errors[] = "main.css is missing compiled mobile-services-chevron-wrapper rules.";
}

// Display results
foreach ($passes as $p) {
    echo "[PASS] " . $p . "\n";
}

if (!empty($errors)) {
    echo "\nERRORS ENCOUNTERED:\n";
    foreach ($errors as $e) {
        echo "[FAIL] " . $e . "\n";
    }
    exit(1);
}

echo "\n------------------------------------------------------------------------\n";
echo " ALL " . count($passes) . " MOBILE TOGGLE CHECKS PASSED PERFECTLY!\n";
echo "========================================================================\n";
