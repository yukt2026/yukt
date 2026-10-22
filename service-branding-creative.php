<?php
require_once __DIR__ . '/includes/config.php';

$service = $SERVICES['branding-creative'];

$pageTitle = 'Branding & Creative Design Services — Yukt IT Solutions';
$pageDesc = 'Bespoke logo design, comprehensive brand identity systems, human-centric UI/UX design in Figma, corporate brochures, graphics, promotional videos, and video editing.';

$capabilities = [
    [
        'title' => 'Distinctive Logo Design & Vector Marks',
        'desc' => 'Crafting memorable, scalable logos, emblems, and monograms that encapsulate your corporate philosophy and look sharp from 16px favicons to building signage.',
        'icon' => 'palette'
    ],
    [
        'title' => 'Comprehensive Brand Identity Systems',
        'desc' => 'End-to-end corporate visual language including primary and secondary color palettes, typography scales, spacing rules, and usage manuals.',
        'icon' => 'shield-check'
    ],
    [
        'title' => 'Human-Centric UI/UX Design',
        'desc' => 'Interactive wireframes, user flow mapping, and high-fidelity component libraries in Figma, engineered to make digital products intuitive and effortless to use.',
        'icon' => 'layers'
    ],
    [
        'title' => 'Corporate Brochures & Sales Decks',
        'desc' => 'Polished digital PDF brochures, investor pitch decks, and commercial collateral designed to command authority in high-stakes boardroom discussions.',
        'icon' => 'file-text'
    ],
    [
        'title' => 'Digital Marketing & Social Graphics',
        'desc' => 'Eye-catching social media asset kits, digital ad banners, and infographics that maintain strong visual consistency across all customer touchpoints.',
        'icon' => 'sparkles'
    ],
    [
        'title' => 'Promotional Brand Videos',
        'desc' => 'Concept ideation, storyboarding, scriptwriting, and production for high-impact brand introduction videos and product launch trailers.',
        'icon' => 'video'
    ],
    [
        'title' => 'Professional Video Editing & Motion',
        'desc' => 'Precision 4K post-production, color grading, sound engineering, dynamic kinetic typography, and motion graphic transitions for high engagement.',
        'icon' => 'zap'
    ]
];

$faqs = [
    [
        'q' => 'What formats do you provide for completed logo and branding work?',
        'a' => 'We supply industry-standard vector assets (AI, EPS, SVG) alongside web-optimized PNG, JPG, and monochrome formats, accompanied by a comprehensive Brand Guidelines Manual.'
    ],
    [
        'q' => 'Can we directly inspect and test UI/UX designs before development starts?',
        'a' => 'Yes. We share interactive Figma prototypes allowing you and your team to click through realistic screens, review responsive variants, and leave direct contextual feedback.'
    ],
    [
        'q' => 'Do you design with developer handoff in mind?',
        'a' => 'Always. Our Figma files are built using structured auto-layout, design tokens, and clear CSS properties so software engineers can implement them with pixel-perfect accuracy.'
    ]
];

require_once __DIR__ . '/includes/templates/service-detail.php';
