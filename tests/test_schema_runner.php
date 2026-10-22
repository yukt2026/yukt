<?php
$routes = [
    'index.php',
    'services.php',
    'about.php',
    'portfolio.php',
    'contact.php',
    'service-website-development.php',
    'service-software-applications.php',
    'service-ai-automation.php',
    'service-digital-marketing.php',
    'service-ai-marketing.php',
    'service-branding-creative.php',
    'service-ecommerce-solutions.php',
    'service-it-consulting.php',
    'project-enterprise-saas.php',
    'project-d2c-commerce.php',
    'project-rag-assistant.php',
    'project-corporate-portal.php',
    'project-b2b-marketing.php',
    'project-franchise-platform.php',
    '404.php'
];

$passCount = 0;

foreach ($routes as $route) {
    $filePath = __DIR__ . '/../' . $route;
    $output = shell_exec('php ' . escapeshellarg($filePath));
    
    if (preg_match('#<script type="application/ld\+json">(.*?)</script>#s', $output, $matches)) {
        $json = trim($matches[1]);
        $decoded = json_decode($json, true);
        if ($decoded !== null) {
            $types = [];
            foreach ($decoded['@graph'] as $node) {
                $types[] = $node['@type'];
            }
            echo "[PASS] " . str_pad($route, 35) . " Schemas: " . implode(', ', $types) . "\n";
            $passCount++;
        } else {
            echo "[FAIL] " . str_pad($route, 35) . " Invalid JSON: " . json_last_error_msg() . "\n";
        }
    } else {
        echo "[FAIL] " . str_pad($route, 35) . " Missing application/ld+json tag\n";
    }
}

echo "\nResult: $passCount / " . count($routes) . " routes passed schema verification.\n";
if ($passCount === count($routes)) {
    exit(0);
} else {
    exit(1);
}
