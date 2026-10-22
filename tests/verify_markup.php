<?php
$routes = [
    "http://localhost/yukt/index.php",
    "http://localhost/yukt/about.php",
    "http://localhost/yukt/services.php",
    "http://localhost/yukt/portfolio.php",
    "http://localhost/yukt/contact.php",
    "http://localhost/yukt/design-system.php"
];

$errors = [];

foreach ($routes as $url) {
    $html = @file_get_contents($url);
    if (!$html) {
        $errors[] = "Failed to load: $url";
        continue;
    }
    
    // Check for broken HTML tags or unclosed tags
    if (substr_count($html, '<html') !== 1 || substr_count($html, '</html>') !== 1) {
        $errors[] = "Malformed <html> in $url";
    }
    if (substr_count($html, '<body') !== 1 || substr_count($html, '</body>') !== 1) {
        $errors[] = "Malformed <body> in $url";
    }
    
    // Check for font link Inter
    if (strpos($html, 'family=Inter') === false) {
        $errors[] = "Missing Inter font on $url";
    }

    // Check for primary blue accent usage #2563EB / text-electric-600 / bg-electric-600
    if (strpos($html, 'bg-electric-600') === false) {
        $errors[] = "Missing primary accent CTA on $url";
    }
}

if (empty($errors)) {
    echo "MARKUP VERIFICATION SUCCESSFUL: All tested routes render standard HTML5 with Inter font and primary blue accent.\n";
} else {
    echo "ERRORS DETECTED:\n" . implode("\n", $errors) . "\n";
}
