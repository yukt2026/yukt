<?php
require_once __DIR__ . '/includes/config.php';

$service = $SERVICES['software-applications'];

$pageTitle = 'Software & Applications Development — Yukt IT Solutions';
$pageDesc = 'Custom enterprise software, bespoke CRM/ERP systems, multi-tenant SaaS platforms, mobile apps, admin panels, franchise portals, APIs, and database migrations.';

$capabilities = [
    [
        'title' => 'Custom CRM Systems',
        'desc' => 'Bespoke customer relationship management systems built around your specific sales pipeline, quotation workflows, and field sales stages.',
        'icon' => 'users'
    ],
    [
        'title' => 'Enterprise ERP Platforms',
        'desc' => 'Unified enterprise resource planning modules connecting procurement, billing, inventory, HRMS, and multi-departmental operations.',
        'icon' => 'layers'
    ],
    [
        'title' => 'Multi-Tenant SaaS Products',
        'desc' => 'Scalable subscription software platforms featuring tenant isolation, recurring billing webhooks, custom roles, and metered usage tracking.',
        'icon' => 'cpu'
    ],
    [
        'title' => 'iOS & Android Mobile Apps',
        'desc' => 'Cross-platform mobile applications engineered in React Native and Flutter with native performance, offline caching, and push notifications.',
        'icon' => 'bot'
    ],
    [
        'title' => 'Granular Admin Panels & Portals',
        'desc' => 'Internal operations dashboards with role-based access control (RBAC), multi-factor authentication, and comprehensive audit logs.',
        'icon' => 'shield-check'
    ],
    [
        'title' => 'Franchise & Branch Management',
        'desc' => 'Centralized operational software allowing multi-location enterprises to manage branch inventory, local pricing, sales targets, and staff permissions.',
        'icon' => 'globe'
    ],
    [
        'title' => 'RESTful & GraphQL API Engineering',
        'desc' => 'Documented, rate-limited, and secure microservice endpoints enabling seamless data exchange across third-party applications and services.',
        'icon' => 'code'
    ],
    [
        'title' => 'Logistics & Fleet Tracking Software',
        'desc' => 'Specialized dispatch, route optimization, vehicle tracking, warehouse inventory, and automated manifest generation tools.',
        'icon' => 'briefcase'
    ],
    [
        'title' => 'Zero-Downtime Database Migration',
        'desc' => 'Secure migration of legacy relational data to modern database engines (PostgreSQL/MySQL) with verified data parity and schema refactoring.',
        'icon' => 'database'
    ]
];

$faqs = [
    [
        'q' => 'Can custom software replace our expensive per-seat SaaS subscriptions?',
        'a' => 'Yes. By building custom proprietary software, your business eliminates recurring per-seat licensing fees while tailoring the exact operational workflows your team needs.'
    ],
    [
        'q' => 'How do you handle security and sensitive corporate data?',
        'a' => 'We enforce strict role-based access control (RBAC), encrypted database connections, sanitized input validation, parameterised queries to prevent SQL injections, and encrypted rest/transit states.'
    ],
    [
        'q' => 'What cloud environments do you deploy to?',
        'a' => 'We deploy to AWS, Google Cloud Platform, Microsoft Azure, and dedicated bare-metal Linux servers with Docker containerization and automated CI/CD pipelines.'
    ]
];

require_once __DIR__ . '/includes/templates/service-detail.php';
