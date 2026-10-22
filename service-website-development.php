<?php
require_once __DIR__ . '/includes/config.php';

$service = $SERVICES['website-development'];

$pageTitle = 'Custom Website Development & Web Design Services | YUKT IT SOLUTIONS';
$pageDesc = 'Bespoke corporate websites, e-commerce storefronts, high-converting landing pages, Next.js and Laravel web apps, redesigns, and continuous maintenance.';

$capabilities = [
    [
        'title' => 'Corporate Websites & Portals',
        'desc' => 'Authority-building enterprise websites tailored to your brand identity, optimized for global credibility, multi-lingual audiences, and search engines.',
        'icon' => 'globe'
    ],
    [
        'title' => 'E-Commerce Storefronts',
        'desc' => 'Fast online commerce experiences with frictionless checkouts, mobile-first design, and seamless payment and inventory integrations.',
        'icon' => 'shopping-cart'
    ],
    [
        'title' => 'High-Converting Landing Pages',
        'desc' => 'Focused lead capture and product launch pages designed to maximize conversion rates, integrated with your CRM and analytics tools.',
        'icon' => 'trending-up'
    ],
    [
        'title' => 'Responsive UI/UX Design',
        'desc' => 'Fluid, tested layouts that render smoothly across smartphones, tablets, laptops, and ultra-wide desktop monitors without visual degradation.',
        'icon' => 'palette'
    ],
    [
        'title' => 'Laravel & Modular PHP Backends',
        'desc' => 'Robust server-side architecture utilizing Laravel and modern PHP 8.2+ for secure database interactions, custom logic, and high concurrency.',
        'icon' => 'cpu'
    ],
    [
        'title' => 'WordPress & Headless CMS',
        'desc' => 'Custom WordPress theme and block development or decoupled headless CMS setups enabling marketing teams to edit content easily without breaking layouts.',
        'icon' => 'file-text'
    ],
    [
        'title' => 'React & Next.js Web Apps',
        'desc' => 'Modern client-side and server-rendered single-page applications providing instantaneous page transitions and dynamic user interactions.',
        'icon' => 'code'
    ],
    [
        'title' => 'Website Redesign & Refactoring',
        'desc' => 'Modernize legacy codebases, replace outdated templates, improve Core Web Vitals, and retain existing SEO equity during migrations.',
        'icon' => 'layers'
    ],
    [
        'title' => 'Ongoing Technical Maintenance & SLAs',
        'desc' => 'Continuous security patching, automated backups, performance monitoring, and rapid bug fix turnarounds under agreed service levels.',
        'icon' => 'shield-check'
    ]
];

$faqs = [
    [
        'q' => 'Do you use pre-made templates or custom code?',
        'a' => 'We engineer bespoke designs and clean codebases tailored specifically to your brand requirements. We avoid generic, bloated visual builder plugins to guarantee sub-second load speeds and complete design uniqueness.'
    ],
    [
        'q' => 'Who owns the website source code upon launch?',
        'a' => 'You receive 100% intellectual property ownership. All Git repositories, design source files (Figma), and database assets are transferred to your accounts upon milestone completion.'
    ],
    [
        'q' => 'How do you ensure fast page load speeds?',
        'a' => 'We optimize assets, eliminate render-blocking scripts, leverage lightweight CSS utility frameworks, implement semantic HTML5, and test continuously against Google Core Web Vitals benchmarks.'
    ]
];

require_once __DIR__ . '/includes/templates/service-detail.php';
