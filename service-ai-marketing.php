<?php
require_once __DIR__ . '/includes/config.php';

$service = $SERVICES['ai-marketing'];

$pageTitle = 'AI-Powered Marketing & AEO Optimization — Yukt IT Solutions';
$pageDesc = 'AI-assisted content production, algorithmic campaign automation, real-time lead qualification, Answer Engine Optimization (AEO for ChatGPT & Perplexity), and AI video ads.';

$capabilities = [
    [
        'title' => 'AI-Assisted Scalable Content Engines',
        'desc' => 'High-velocity production of brand-aligned articles, technical documentation, and social copy utilizing tailored LLM frameworks and editorial review.',
        'icon' => 'file-text'
    ],
    [
        'title' => 'Algorithmic Campaign Automation',
        'desc' => 'Automated bid adjustments, creative variant rotation, and budget allocation based on real-time ROAS benchmarks and conversion signals.',
        'icon' => 'bot'
    ],
    [
        'title' => 'Real-Time Lead Qualification & Scoring',
        'desc' => 'AI classifiers that analyze inbound inquiries, score intent based on company size and urgency, and instantly alert sales reps with actionable summaries.',
        'icon' => 'check-circle'
    ],
    [
        'title' => 'Dynamic Customer Segmentation',
        'desc' => 'Cluster customer databases into actionable behavioral cohorts based on transaction frequency, product affinity, and engagement frequency.',
        'icon' => 'users'
    ],
    [
        'title' => 'Answer Engine Optimization (AEO)',
        'desc' => 'Strategic optimization for conversational search engines (Perplexity AI, ChatGPT Search, Google Gemini, and SGE) to position your brand as the cited authority.',
        'icon' => 'sparkles'
    ],
    [
        'title' => 'Generative AI Video Ads',
        'desc' => 'Rapid generation of localized, avatar-driven, or concept video advertisements tailored for social feeds without traditional studio production overhead.',
        'icon' => 'video'
    ]
];

$faqs = [
    [
        'q' => 'What is Answer Engine Optimization (AEO) and why does it matter?',
        'a' => 'As users increasingly ask conversational questions to ChatGPT, Perplexity, and Google Gemini rather than clicking 10 blue links, AEO structures your content and technical entity schemas so these AI engines reference and cite your brand as the primary source.'
    ],
    [
        'q' => 'Does AI content hurt search rankings?',
        'a' => 'Search engines prioritize helpful, accurate, and original content regardless of how it was drafted. We combine AI drafting with rigorous human engineering and domain expert verification to deliver authoritative, ranking-ready content.'
    ],
    [
        'q' => 'How does automated lead scoring benefit our sales team?',
        'a' => 'Rather than spending hours sifting through spam or low-budget inquiries, your sales team is instantly routed pre-qualified prospects with synthesized background briefs.'
    ]
];

require_once __DIR__ . '/includes/templates/service-detail.php';
