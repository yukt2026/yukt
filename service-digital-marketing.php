<?php
require_once __DIR__ . '/includes/config.php';

$service = $SERVICES['digital-marketing'];

$pageTitle = 'Digital Marketing & Growth Services — Yukt IT Solutions';
$pageDesc = 'Performance-driven YouTube Ads, Meta Ads, LinkedIn B2B marketing, social media management, automated email & WhatsApp campaigns, CRO, and server-side tracking.';

$capabilities = [
    [
        'title' => 'High-ROI YouTube Ad Campaigns',
        'desc' => 'Intent-targeted video ads across in-stream and search discovery, scripted and engineered to capture buyer attention and drive measurable direct response.',
        'icon' => 'video'
    ],
    [
        'title' => 'Meta (Facebook & Instagram) Ads',
        'desc' => 'Full-funnel customer acquisition campaigns utilizing custom audiences, Lookalikes, and dynamic creative testing to lower your cost-per-acquisition (CPA).',
        'icon' => 'trending-up'
    ],
    [
        'title' => 'LinkedIn B2B Lead Generation',
        'desc' => 'Account-Based Marketing (ABM) targeting high-level corporate decision-makers by job title, company size, and industry vertical.',
        'icon' => 'briefcase'
    ],
    [
        'title' => 'Strategic Social Media Management',
        'desc' => 'Consistent brand voice, content scheduling, and community engagement across LinkedIn, Twitter/X, and Instagram to foster organic authority.',
        'icon' => 'users'
    ],
    [
        'title' => 'Automated Email Marketing Drips',
        'desc' => 'Segmented lifecycle email flows including onboarding, abandoned cart recovery, retention campaigns, and transactional notifications.',
        'icon' => 'mail'
    ],
    [
        'title' => 'WhatsApp Business Marketing',
        'desc' => 'High-open-rate conversational marketing broadcasts, automated catalog promotions, and re-engagement messaging via the official WhatsApp Business API.',
        'icon' => 'phone'
    ],
    [
        'title' => 'Conversion Rate Optimization (CRO)',
        'desc' => 'Data-backed UX refinements, form friction audits, and A/B split testing on landing pages to convert a higher percentage of existing visitors.',
        'icon' => 'zap'
    ],
    [
        'title' => 'Server-Side Event Tracking (GA4 & CAPI)',
        'desc' => 'Bypass client-side ad-blockers and iOS privacy restrictions with server-to-server Conversions API (CAPI) and Google Analytics 4 implementations.',
        'icon' => 'shield-check'
    ]
];

$faqs = [
    [
        'q' => 'How do you measure marketing campaign success?',
        'a' => 'We measure success using verifiable business metrics: Return on Ad Spend (ROAS), Cost per Acquisition (CPA), qualified pipeline leads, and customer lifetime value (LTV)—not vanity impressions.'
    ],
    [
        'q' => 'Do you manage our ad accounts directly or through third parties?',
        'a' => 'You retain 100% ownership and administrative access to your advertising accounts (Google, Meta, LinkedIn). All payment rails and campaign history remain your corporate property.'
    ],
    [
        'q' => 'Why is server-side tracking (CAPI) essential?',
        'a' => 'Browser ad-blockers and privacy features often block 20% to 35% of client-side tracking pixels. Server-side CAPI sends conversion events directly from the server, giving ad algorithms complete data to optimize targeting.'
    ]
];

require_once __DIR__ . '/includes/templates/service-detail.php';
