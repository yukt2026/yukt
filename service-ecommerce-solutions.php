<?php
require_once __DIR__ . '/includes/config.php';

$service = $SERVICES['ecommerce-solutions'];

$pageTitle = 'E-Commerce Solutions & Storefront Engineering — Yukt IT Solutions';
$pageDesc = 'Custom Shopify Plus, WooCommerce, and headless commerce stores, multi-vendor marketplaces, Indian payment gateways (Razorpay, UPI), automated logistics, and AI shopping assistants.';

$capabilities = [
    [
        'title' => 'Custom Shopify & Shopify Plus',
        'desc' => 'High-velocity Shopify theme engineering, custom Liquid sections, private app development, and checkout customizations built for massive sale volumes.',
        'icon' => 'shopping-cart'
    ],
    [
        'title' => 'High-Speed WooCommerce Stores',
        'desc' => 'Scalable WooCommerce implementations on dedicated Redis-cached infrastructure, eliminating traditional WordPress bloat for sub-second speeds.',
        'icon' => 'globe'
    ],
    [
        'title' => 'Custom Laravel Commerce Engines',
        'desc' => 'Bespoke commerce platforms engineered with Laravel for unique pricing models, complex B2B wholesale tiers, and custom product configurators.',
        'icon' => 'cpu'
    ],
    [
        'title' => 'Multi-Vendor Marketplaces',
        'desc' => 'Marketplace architectures enabling multiple vendors to list products, manage individual seller portals, and receive automated commission splits.',
        'icon' => 'users'
    ],
    [
        'title' => 'Frictionless Payment Gateway Integrations',
        'desc' => 'Seamless checkout integrations with Razorpay, Cashfree, UPI 1-click checkout, credit/debit cards, net banking, and international Stripe processing.',
        'icon' => 'shield-check'
    ],
    [
        'title' => 'Automated Shipping & Logistics Sync',
        'desc' => 'Automated integration with Shiprocket, Delhivery, and Blue Dart for real-time shipping rate calculation, label printing, and live tracking webhooks.',
        'icon' => 'briefcase'
    ],
    [
        'title' => 'Real-Time Inventory & ERP Synchronization',
        'desc' => 'Prevent overselling with bi-directional inventory syncing between online storefronts, physical warehouses, and backend ERP software.',
        'icon' => 'database'
    ],
    [
        'title' => 'AI Shopping Assistants & Recommenders',
        'desc' => 'Conversational AI product recommendation bots that guide shoppers to the right catalog items based on preferences and cart contents.',
        'icon' => 'sparkles'
    ]
];

$faqs = [
    [
        'q' => 'Which platform should we choose: Shopify, WooCommerce, or Custom Laravel?',
        'a' => 'For standard D2C commerce, Shopify Plus is fast and reliable. For full content-commerce control without transaction fees, WooCommerce on modern hosting is ideal. For complex B2B rules or custom configurators, a bespoke Laravel platform provides complete architectural freedom.'
    ],
    [
        'q' => 'How do you optimize checkout conversion rates for Indian shoppers?',
        'a' => 'We integrate native UPI deep-links (Google Pay, PhonePe, Paytm), OTP-less authentication, automated address pre-filling, and Cash on Delivery (COD) verification modules to minimize drop-offs.'
    ],
    [
        'q' => 'Can you handle high traffic spikes during flash sales and festivals?',
        'a' => 'Yes. We implement edge caching, Redis session clustering, database query indexing, and CDN offloading to ensure your storefront stays responsive during peak promotional periods.'
    ]
];

require_once __DIR__ . '/includes/templates/service-detail.php';
