<?php
require_once __DIR__ . '/includes/config.php';

$service = $SERVICES['it-consulting'];

$pageTitle = 'IT Consulting, Dedicated Developers & Training — Yukt IT Solutions';
$pageDesc = 'Strategic technical consulting, rapid MVP development for founders, dedicated developer pods, automated QA testing, corporate IT training, and legacy system modernization.';

$capabilities = [
    [
        'title' => 'Rapid MVP Development for Founders',
        'desc' => 'Transform product concepts into live, testable minimum viable products (MVPs) in 4 to 8 weeks, engineered with scalable clean code ready for investor demos.',
        'icon' => 'zap'
    ],
    [
        'title' => 'Technical Outsourcing & Staff Augmentation',
        'desc' => 'Seamlessly augment your internal team with vetted senior engineers, eliminating lengthy recruitment cycles and high permanent payroll liabilities.',
        'icon' => 'users'
    ],
    [
        'title' => 'Dedicated Developer Pods',
        'desc' => 'Full-time, dedicated full-stack, frontend (React/Next.js), backend (Laravel/Python/Node), or QA pods working exclusively in your Git repositories and daily standups.',
        'icon' => 'code'
    ],
    [
        'title' => 'Comprehensive QA & Automated Testing',
        'desc' => 'Unit testing, integration testing, end-to-end automation (Playwright/Jest), and vulnerability penetration tests to prevent costly production outages.',
        'icon' => 'shield-check'
    ],
    [
        'title' => 'Enterprise Technical Architecture Consulting',
        'desc' => 'Senior advisory on cloud topology, microservice decoupling, multi-region failover, database sharding, and high-concurrency bottleneck resolution.',
        'icon' => 'cpu'
    ],
    [
        'title' => 'Corporate IT Training & Upskilling',
        'desc' => 'Hands-on engineering workshops designed to upskill your internal teams in modern frameworks, Git workflows, Docker containerization, and AI tooling.',
        'icon' => 'briefcase'
    ],
    [
        'title' => 'Legacy System Modernization',
        'desc' => 'Safely refactor outdated legacy applications into maintainable modular services without operational downtime or data loss.',
        'icon' => 'layers'
    ],
    [
        'title' => 'SLA-Backed 24/7 Technical Maintenance',
        'desc' => 'Dedicated infrastructure monitoring, security patch management, automated snapshot backups, and rapid incident response under formal service agreements.',
        'icon' => 'lock'
    ]
];

$faqs = [
    [
        'q' => 'How quickly can a dedicated developer or engineering pod start?',
        'a' => 'Depending on your technology stack requirements, a vetted developer or cross-functional agile pod can be onboarded and active in your repository within 5 to 10 business days.'
    ],
    [
        'q' => 'How do you ensure transparency with dedicated developers?',
        'a' => 'Developers work directly within your communication channels (Slack, Teams), participate in daily standups, log commits to your Git branches, and track tasks via your Jira or ClickUp boards.'
    ],
    [
        'q' => 'What does an architectural audit entail?',
        'a' => 'We review your codebase, database queries, cloud infrastructure, and security configurations to produce a prioritized report highlighting performance bottlenecks, technical debt, and actionable remediation steps.'
    ]
];

require_once __DIR__ . '/includes/templates/service-detail.php';
