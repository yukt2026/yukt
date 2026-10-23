<?php
// ==========================================================================
// YUKT IT SOLUTIONS (yukt.online) — Global Configuration
// ==========================================================================

if (!defined('COMPANY_NAME')) {
    // Core Brand Identity
    define('COMPANY_NAME', 'Yukt IT Solutions');
    define('COMPANY_LEGAL_NAME', 'Yukt IT Solutions Private Limited');
    define('COMPANY_SHORT', 'YUKT');
    define('COMPANY_TAGLINE', 'Technology That Moves Your Business Forward');
    define('COMPANY_DOMAIN', 'yukt.online');
    define('COMPANY_URL', 'https://yukt.online');
    define('COMPANY_ESTABLISHED', '2021');
    define('APP_VERSION', '2.5.0');

    // Contact & Location (Indian IT Powerhouse)
    define('PHONE_NUMBER', '+91 95763 38282');
    define('PHONE_RAW', '919576338282');
    define('PHONE_SECONDARY', '+91 72176 45059');
    define('PHONE_SECONDARY_RAW', '917217645059');
    define('PHONE_ANSAR', '+91 95763 38282');
    define('PHONE_ANSAR_RAW', '919576338282');
    define('PHONE_RANJEET', '+91 72176 45059');
    define('PHONE_RANJEET_RAW', '917217645059');

    define('WHATSAPP_NUMBER', '919576338282');
    define('WHATSAPP_FORMATTED', '+91 95763 38282');
    define('WHATSAPP_BASE_URL', 'https://wa.me/919576338282');
    define('WHATSAPP_URL', 'https://wa.me/919576338282?text=Hi%20Yukt%20IT%20Solutions%2C%20I%20would%20like%20to%20discuss%20a%20project.');
    define('WHATSAPP_ANSAR_URL', 'https://wa.me/919576338282?text=Hi%20Ansar%2C%20I%20would%20like%20to%20discuss%20a%20project%20with%20Yukt%20IT%20Solutions.');
    define('WHATSAPP_RANJEET_URL', 'https://wa.me/917217645059?text=Hi%20Ranjeet%2C%20I%20would%20like%20to%20discuss%20a%20project%20with%20Yukt%20IT%20Solutions.');

    define('EMAIL_PRIMARY', 'contact@yukt.online');
    define('EMAIL_SALES', 'sales@yukt.online');
    define('EMAIL_SUPPORT', 'support@yukt.online');
    define('OFFICE_PRIMARY', 'Sector 62, Noida, NCR, India');
    define('OFFICE_SECONDARY', 'HSR Layout, Bengaluru, Karnataka, India');
    define('WORKING_HOURS', 'Mon – Sat: 9:30 AM – 7:30 PM IST');
    define('GOOGLE_MAPS_EMBED_SRC', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3502.2383772372173!2d77.06746019999997!3d28.622616899999993!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d05241482afc1%3A0x64a7da1df8947b30!2sYukt%20IT%20Solutions!5e0!3m2!1shi!2sin!4v1792762605037!5m2!1shi!2sin');
    define('GOOGLE_MAPS_VIEW_URL', 'https://www.google.com/maps/place/Yukt+IT+Solutions/@28.6226169,77.0674602,17z');

    // Helper function to generate tailored WhatsApp URLs with prefilled messages (Default: Ansar Ali Shah)
    if (!function_exists('getWhatsAppUrl')) {
        function getWhatsAppUrl($message = '', $rawPhone = '919576338282') {
            $base = 'https://wa.me/' . $rawPhone;
            if (!empty($message)) {
                return $base . '?text=' . rawurlencode($message);
            }
            return $base . '?text=' . rawurlencode('Hi Yukt IT Solutions, I would like to discuss a project.');
        }
    }

    // Social & Professional Profiles
    define('LINKEDIN_URL', 'https://www.linkedin.com/in/ranjeet-m-079777262/?isSelfProfile=true');
    define('GITHUB_URL', 'https://github.com/yukt2026');
    define('INSTAGRAM_URL', 'https://www.instagram.com/yukt_officials?psln=MWo3bndtb3JhMmN2dQ==');
    define('TWITTER_URL', 'https://twitter.com/yuktonline');

    // Leadership Specific Profile Links
    define('RANJEET_GITHUB', 'https://github.com/yukt2026');
    define('RANJEET_LINKEDIN', 'https://www.linkedin.com/in/ranjeet-m-079777262/?isSelfProfile=true');
    define('ANSAR_GITHUB', 'https://github.com/ansaralisahh');
    define('ANSAR_LINKEDIN', 'https://www.linkedin.com/in/ansaralisahh');

    // Verified Engineering Leadership Pod (Ansar Ali Shah: Founder, Ranjeet: Co-Founder)
    $LEADERSHIP_TEAM = [
        [
            'name' => 'Ansar Ali Shah',
            'role' => 'Founder & Lead Technical Architect',
            'focus' => 'Web Applications, High-Performance Backends & Systems',
            'phone' => '+91 95763 38282',
            'phone_raw' => '919576338282',
            'whatsapp_url' => 'https://wa.me/919576338282?text=' . rawurlencode('Hi Ansar, I would like to discuss a project with Yukt IT Solutions.'),
            'github' => 'https://github.com/ansaralisahh',
            'linkedin' => 'https://www.linkedin.com/in/ansaralisahh',
            'avatar_initials' => 'AS'
        ],
        [
            'name' => 'Ranjeet',
            'role' => 'Co-Founder & Lead Solutions Architect',
            'focus' => 'Cloud Systems, Full-Stack Architecture & AI Integration',
            'phone' => '+91 72176 45059',
            'phone_raw' => '917217645059',
            'whatsapp_url' => 'https://wa.me/917217645059?text=' . rawurlencode('Hi Ranjeet, I would like to discuss a project with Yukt IT Solutions.'),
            'github' => 'https://github.com/yukt2026',
            'linkedin' => 'https://www.linkedin.com/in/ranjeet-m-079777262/?isSelfProfile=true',
            'avatar_initials' => 'RM'
        ]
    ];

    // Engineering Pillars & Quality Commitments (Authentic Principles, No Invented Statistics)
    $ENGINEERING_PILLARS = [
        [
            'title' => '100% IP Transfer',
            'desc' => 'Complete source code, Figma design files, and database schemas are handed over with full intellectual property ownership upon milestone completion.',
            'icon' => 'shield-check',
            'accent' => 'blue'
        ],
        [
            'title' => 'Bi-Weekly Agile Sprints',
            'desc' => 'Continuous visibility via staging environments, automated Git deployments, and transparent sprint reviews with your team.',
            'icon' => 'trending-up',
            'accent' => 'orange'
        ],
        [
            'title' => 'Strict NDA & Data Security',
            'desc' => 'Ironclad mutual non-disclosure agreements and enterprise data security protocols protect your proprietary business logic and client data.',
            'icon' => 'lock',
            'accent' => 'blue'
        ],
        [
            'title' => 'Direct Senior Architecture',
            'desc' => 'Every system is architected and code-reviewed directly by senior full-stack specialists, avoiding hand-offs to unvetted third parties.',
            'icon' => 'cpu',
            'accent' => 'orange'
        ]
    ];

    // ==========================================================================
    // 8 Core IT & Creative Services Catalog
    // ==========================================================================
    $SERVICES = [
        // 1. Website Design & Development
        'website-development' => [
            'id' => 'website-development',
            'title' => 'Website Design & Development',
            'short' => 'Web Design & Dev',
            'tagline' => 'High-Performance, Scalable & Modern Web Architecture',
            'desc' => 'We engineer bespoke corporate websites, e-commerce storefronts, high-converting landing pages, and responsive web applications using modern frameworks including React, Next.js, Laravel, PHP, and WordPress, paired with website redesigns and ongoing technical maintenance.',
            'icon' => 'globe',
            'accent' => 'electric',
            'badge' => 'Core Specialization',
            'features' => [
                'Corporate Websites & Enterprise Portals',
                'Custom React & Next.js Single Page and SSR Apps',
                'Modular Laravel & Secure PHP Backend Architecture',
                'High-Speed WordPress & Headless CMS Engineering',
                'High-Converting Landing Pages & Lead Funnels',
                'Full Responsive UI/UX Design for Mobile, Tablet & Desktop',
                'Modern Website Redesign & Code Refactoring',
                'Proactive Security Patching & Ongoing Maintenance SLAs'
            ],
            'deliverables' => [
                'Production-ready, audited source code in your Git repository',
                'Responsive layouts tested across mobile, tablet, and desktop',
                'Sub-second Core Web Vitals optimization (>90 score)',
                'Content management system (CMS) with customized admin controls',
                'SEO-ready semantic structure, OpenGraph tags & XML sitemap'
            ],
            'benefits' => [
                'Fast load speeds that improve visitor retention and conversions',
                'Clean, modular codebase with zero proprietary vendor lock-in',
                'Accessible, mobile-friendly interface designed for all screens',
                'Direct ownership of all design assets and source files'
            ],
            'technologies' => ['React', 'Next.js', 'Laravel', 'PHP', 'WordPress', 'Tailwind CSS', 'Node.js', 'MySQL'],
            'url' => 'service-website-development.php'
        ],

        // 2. Software & Applications
        'software-applications' => [
            'id' => 'software-applications',
            'title' => 'Software & Applications',
            'short' => 'Software & Apps',
            'tagline' => 'Custom Enterprise Software, Multi-Tenant SaaS & Mobile Platforms',
            'desc' => 'End-to-end custom software solutions built to automate mission-critical operations. We build bespoke CRM systems, enterprise ERPs, scalable SaaS platforms, mobile applications, admin panels, franchise portals, RESTful APIs, logistics software, and complex database migrations.',
            'icon' => 'cpu',
            'accent' => 'navy',
            'badge' => 'Enterprise Ready',
            'features' => [
                'Custom CRM & Pipeline Management Systems',
                'Enterprise ERP & Resource Planning Software',
                'Multi-Tenant SaaS Product Architectures & Billing',
                'Cross-Platform Mobile Apps (iOS & Android)',
                'Granular Role-Based Admin Panels & Dashboards',
                'Multi-Branch & Franchise Management Platforms',
                'Secure RESTful & GraphQL Microservice APIs',
                'Logistics, Fleet & Supply Chain Tracking Systems',
                'Zero-Downtime Legacy Database Migration & Refactoring'
            ],
            'deliverables' => [
                'End-to-end software architecture blueprint and entity relationship diagrams',
                'Fully documented REST / GraphQL APIs with Swagger/Postman specs',
                'Cross-platform mobile builds ready for App Store and Google Play',
                'Docker containerization files and automated CI/CD deployment scripts',
                'Role-based access control (RBAC) and audit logging module'
            ],
            'benefits' => [
                'Elimination of recurring per-user third-party SaaS software fees',
                'Centralized business data with zero operational silos',
                'Hardened enterprise security tailored to internal compliance needs',
                'High concurrency architecture designed to scale with your transaction volume'
            ],
            'technologies' => ['Laravel', 'Python', 'Node.js', 'React Native', 'Flutter', 'PostgreSQL', 'MySQL', 'Docker', 'AWS'],
            'url' => 'service-software-applications.php'
        ],

        // 3. AI & Automation
        'ai-automation' => [
            'id' => 'ai-automation',
            'title' => 'AI & Automation',
            'short' => 'AI & Automation',
            'tagline' => 'Autonomous Agents, LLM Integrations & Intelligent Workflows',
            'desc' => 'Harness cutting-edge Artificial Intelligence to eliminate manual bottlenecks. We build custom AI chatbots, WhatsApp business automation bots, autonomous task agents, optical document and invoice processing, LLM integrations, RAG internal knowledge assistants, voice bots, predictive analytics, and bespoke AI API integrations.',
            'icon' => 'sparkles',
            'accent' => 'orange',
            'badge' => 'Next-Gen Intelligence',
            'features' => [
                'Conversational AI Chatbots with Custom Personas',
                'Official WhatsApp Business API Automation & Chatbots',
                'Autonomous Multi-Step Business Execution Agents',
                'Intelligent Optical Document & Invoice Processing (OCR/Vision)',
                'Proprietary LLM Integrations (OpenAI, Claude, Llama 3)',
                'RAG (Retrieval-Augmented Generation) Knowledge Assistants',
                'Real-Time Conversational Voice AI Assistants',
                'Predictive Analytics & Anomaly Detection Engines',
                'Custom API Glue & Zapier/Make Automation Pipelines'
            ],
            'deliverables' => [
                'Indexed vector knowledge base with zero-hallucination semantic retrieval',
                'Trained and prompt-engineered LLM pipelines with guardrails',
                'Meta-approved WhatsApp Business webhook integration and message templates',
                'Real-time analytics dashboard tracking token usage, latency, and resolutions',
                'Full deployment documentation and internal team onboarding'
            ],
            'benefits' => [
                'Instant 24/7 customer support and automated lead qualification',
                'Up to 80% reduction in manual document entry and invoice verification',
                'Grounded answers sourced strictly from your approved internal documents',
                'Scalable throughput without scaling human administrative headcount'
            ],
            'technologies' => ['OpenAI API', 'Claude API', 'LangChain', 'LlamaIndex', 'Python', 'FastAPI', 'Pinecone', 'pgvector'],
            'url' => 'service-ai-automation.php'
        ],

        // 4. Digital Marketing
        'digital-marketing' => [
            'id' => 'digital-marketing',
            'title' => 'Digital Marketing',
            'short' => 'Digital Marketing',
            'tagline' => 'High-Intent Acquisition, Performance Ads & Conversion Tracking',
            'desc' => 'Drive measurable revenue growth through structured digital campaigns. We manage high-converting YouTube Ads, Meta (Facebook & Instagram) campaigns, LinkedIn B2B lead generation, active social media management, automated email marketing, WhatsApp Business marketing, conversion rate optimization (CRO), and server-side tracking.',
            'icon' => 'trending-up',
            'accent' => 'electric',
            'badge' => 'Performance ROI',
            'features' => [
                'High-Impact YouTube Video Ad Campaigns',
                'Targeted Meta Ads (Facebook & Instagram Lead Generation)',
                'LinkedIn B2B Account-Based Marketing (ABM) Campaigns',
                'Strategic Social Media Management & Creative Curation',
                'Automated Email Marketing & Retention Drip Workflows',
                'WhatsApp Business Conversational Broadcasts & Drips',
                'Conversion Rate Optimization (CRO) & Heatmap Auditing',
                'Server-Side Event Tracking (GA4 & Meta Conversions API)'
            ],
            'deliverables' => [
                'Target audience research and competitive positioning matrix',
                'Multi-variant ad creatives, copy frameworks, and video storyboards',
                'Configured GA4, Meta CAPI, and Google Tag Manager tracking setups',
                'Automated email and WhatsApp nurture sequences',
                'Transparent weekly dashboard reporting actual acquisition metrics'
            ],
            'benefits' => [
                'Predictable customer acquisition costs (CAC) with clear attribution',
                'Elimination of tracking blind spots caused by browser privacy blockers',
                'Direct engagement through high-open-rate channels like WhatsApp and Email',
                'Systematic continuous testing to lower cost-per-lead over time'
            ],
            'technologies' => ['Google Ads', 'Meta Ads Manager', 'LinkedIn Campaign Manager', 'GA4', 'Meta CAPI', 'Klaviyo', 'GTM'],
            'url' => 'service-digital-marketing.php'
        ],

        // 5. AI-Powered Marketing
        'ai-marketing' => [
            'id' => 'ai-marketing',
            'title' => 'AI-Powered Marketing',
            'short' => 'AI Marketing',
            'tagline' => 'Generative Content, AEO Search & Algorithmic Campaign Automation',
            'desc' => 'Elevate your growth strategy with algorithmic marketing systems. We deploy AI-assisted multi-format content engines, end-to-end campaign automation, predictive lead qualification and scoring, dynamic customer segmentation, Answer Engine Optimization (AEO for ChatGPT, Perplexity, and Gemini), and generative AI video ads.',
            'icon' => 'bot',
            'accent' => 'orange',
            'badge' => 'Algorithmic Growth',
            'features' => [
                'AI-Assisted Scalable Multi-Channel Content Production',
                'Algorithmic Multi-Platform Campaign Automation',
                'Predictive Real-Time Lead Qualification & Scoring',
                'Dynamic Behavioral Customer Segmentation & RFM Models',
                'Answer Engine Optimization (AEO for Perplexity, ChatGPT & Gemini)',
                'Generative AI Video Ads & Personalized Avatars',
                'Automated Social Publishing & Smart Scheduling Bots',
                'Automated Competitor Ad & Messaging Intelligence'
            ],
            'deliverables' => [
                'Custom AI content model fine-tuned to your brand voice and vocabulary',
                'AEO technical audit, knowledge graph schema, and entity citations',
                'Automated lead routing webhook synced to your CRM',
                'Synthetic AI video ad creative assets in horizontal and vertical formats',
                'Structured data implementation for conversational search discovery'
            ],
            'benefits' => [
                '10x acceleration in marketing creative velocity without team burnout',
                'First-mover advantage in AI-driven search engines (AEO/SGE)',
                'Sales teams focus only on pre-qualified, high-intent opportunities',
                'Hyper-personalized messaging tailored to specific customer cohorts'
            ],
            'technologies' => ['Custom LLM Prompts', 'Python', 'Make.com', 'Zapier', 'Schema.org', 'HeyGen/Synthesia APIs'],
            'url' => 'service-ai-marketing.php'
        ],

        // 6. Branding & Creative
        'branding-creative' => [
            'id' => 'branding-creative',
            'title' => 'Branding & Creative',
            'short' => 'Branding & Creative',
            'tagline' => 'Distinctive Brand Identities, Intuitive UI/UX & High-Impact Media',
            'desc' => 'Transform your market presence with compelling visual design. We craft distinctive logo designs, comprehensive corporate brand identities, intuitive web and mobile UI/UX interfaces, print and digital brochures, marketing collateral, promotional brand videos, and professional video editing.',
            'icon' => 'palette',
            'accent' => 'navy',
            'badge' => 'Human-Centric Design',
            'features' => [
                'Distinctive Logo Design & Vector Emblem Crafting',
                'Comprehensive Corporate Brand Identity & Positioning',
                'Interactive Web & Mobile App UI/UX Design in Figma',
                'Corporate Brochures, Sales Decks & Investor Pitch Decks',
                'Digital Marketing Creatives, Banners & Social Asset Kits',
                'Promotional Brand Videos & Explainer Concept Animations',
                'High-Resolution Video Editing, Color Grading & Audio Mixing',
                'Comprehensive Digital Brand Guidelines Manual'
            ],
            'deliverables' => [
                'Master vector logo suite (SVG, AI, EPS, high-res PNG, monochrome)',
                'Brand stylebook with typography rules, color formulas, and spacing guidelines',
                'Figma prototype file with structured component library and design tokens',
                'Print-ready PDF brochures, business stationery, and presentation decks',
                'Rendered 4K promotional video assets with source project files'
            ],
            'benefits' => [
                'Immediate visual authority and trust when presenting to prospects or investors',
                'Frictionless user experience that guides users smoothly toward conversion',
                'Consistent aesthetic across web, print, video, and social channels',
                'Reusable design system that speeds up future product feature releases'
            ],
            'technologies' => ['Figma', 'Adobe Illustrator', 'Adobe Photoshop', 'After Effects', 'Premiere Pro', 'DaVinci Resolve'],
            'url' => 'service-branding-creative.php'
        ],

        // 7. E-commerce Solutions
        'ecommerce-solutions' => [
            'id' => 'ecommerce-solutions',
            'title' => 'E-Commerce Solutions',
            'short' => 'E-Commerce Solutions',
            'tagline' => 'High-Converting Online Storefronts, Seamless Checkouts & Fulfillment',
            'desc' => 'Build high-velocity online shopping experiences engineered for conversion. We design custom Shopify and Shopify Plus storefronts, WooCommerce setups, custom PHP/Laravel stores, multi-vendor marketplace platforms, Indian and global payment gateways (Razorpay, UPI, Cashfree, Stripe), shipping and logistics integration, real-time inventory automation, and AI shopping assistants.',
            'icon' => 'shopping-cart',
            'accent' => 'electric',
            'badge' => 'High Conversion',
            'features' => [
                'Custom Shopify & Shopify Plus Theme Development',
                'High-Speed WooCommerce Store Architectures',
                'Bespoke Headless & Laravel Commerce Platforms',
                'Multi-Vendor Marketplace Infrastructure',
                'Frictionless Indian Payment Integrations (UPI, Cards, NetBanking, COD)',
                'Automated Logistics & Courier Syncing (Shiprocket, Delhivery)',
                'Multi-Channel Real-Time Inventory & ERP Synchronization',
                'AI Shopping Assistants & Conversational Product Recommenders'
            ],
            'deliverables' => [
                'Fully tested and responsive e-commerce storefront with custom styling',
                'Live payment gateway certification with automated webhooks and refund workflows',
                'Integrated logistics middleware with real-time tracking generation',
                'Optimized checkout funnel designed for low drop-off rates',
                'Staff administration guide for order processing and inventory management'
            ],
            'benefits' => [
                'Frictionless 1-click mobile checkout built for Indian consumer expectations',
                'Sub-second catalog search and dynamic faceted category filtering',
                'Automated dispatch and order status notifications reducing customer queries',
                'Scalable infrastructure tested to handle high-traffic festival sales'
            ],
            'technologies' => ['Shopify Plus', 'WooCommerce', 'Laravel', 'Razorpay', 'Cashfree', 'Shiprocket', 'Stripe', 'Tailwind CSS'],
            'url' => 'service-ecommerce-solutions.php'
        ],

        // 8. IT Consulting & Training
        'it-consulting' => [
            'id' => 'it-consulting',
            'title' => 'IT Consulting & Training',
            'short' => 'IT Consulting & Training',
            'tagline' => 'Strategic Technical Advisory, Dedicated Developer Pods & Upskilling',
            'desc' => 'Navigate complex technology decisions with veteran engineering guidance. We provide rapid MVP development for startups, technical outsourcing, dedicated developer pods (Full-Stack, React, Laravel, Python), QA and automated testing, system architecture consulting, corporate IT training and developer upskilling, legacy system modernization, and ongoing maintenance SLAs.',
            'icon' => 'users',
            'accent' => 'orange',
            'badge' => 'Strategic Advisory',
            'features' => [
                'Rapid MVP Engineering for Startups & Founders',
                'Technical Outsourcing & Flexible Team Augmentation',
                'Dedicated Full-Stack Developer Pods (React, Laravel, Python)',
                'Comprehensive QA, Penetration Testing & Automated Test Suites',
                'Enterprise Technical Architecture & Cloud Infrastructure Consulting',
                'Corporate IT Training & Hands-On Engineering Workshops',
                'Legacy System Modernization & Cloud Migration Roadmaps',
                'SLA-Backed 24/7 Technical Maintenance & Incident Response'
            ],
            'deliverables' => [
                'In-depth architectural assessment and technical debt audit report',
                'Vetted dedicated developers with direct Git commit access and daily standups',
                'Automated testing suites (Unit, Integration, E2E) with coverage metrics',
                'Custom corporate training modules and curriculum documentation',
                'Formal Service Level Agreement (SLA) with guaranteed response times'
            ],
            'benefits' => [
                'Launch new product iterations in weeks rather than waiting months for recruitment',
                'Mitigate costly architectural mistakes prior to significant capital deployment',
                'Senior technical leadership on demand without permanent executive overhead',
                'Upskilled in-house development team equipped with modern engineering practices'
            ],
            'technologies' => ['Agile Scrum', 'Jira', 'Docker', 'Kubernetes', 'Jest', 'PHPUnit', 'AWS', 'Git CI/CD'],
            'url' => 'service-it-consulting.php'
        ]
    ];

    // Navigation Links (Matching Stripe-Style Minimalist Sticky Nav)
    $NAV_LINKS = [
        [
            'label' => 'Services', 
            'url' => 'services.php', 
            'key' => 'services',
            'has_dropdown' => true
        ],
        [
            'label' => 'Solutions', 
            'url' => 'index.php#solutions', 
            'key' => 'solutions'
        ],
        [
            'label' => 'About', 
            'url' => 'about.php', 
            'key' => 'about'
        ],
        [
            'label' => 'Portfolio', 
            'url' => 'portfolio.php', 
            'key' => 'portfolio'
        ],
        [
            'label' => 'Contact', 
            'url' => 'contact.php', 
            'key' => 'contact'
        ]
    ];

    // Clearly Labeled Representative Case Studies / Architecture Blueprints
    // Covering Websites, Software, AI, E-Commerce, and Marketing categories
    $CASE_STUDIES = [
        [
            'id' => 'enterprise-saas',
            'title' => 'Enterprise Multi-Tenant SaaS Platform',
            'category' => 'Software',
            'category_slug' => 'software',
            'label' => '[Architecture Case Study]',
            'summary' => 'Multi-tenant cloud architecture engineered for subscription management, tenant database isolation, and automated billing.',
            'problem' => 'Fragmented user access and high operating costs from disjointed legacy systems across disparate operational departments.',
            'solution' => 'Engineered a modular Laravel backend with PostgreSQL tenant isolation, Vue.js reactive frontend, Docker containerization, and AWS auto-scaling.',
            'outcomes' => [
                'Zero cross-tenant data leakage with isolated schema architecture',
                'Sub-100ms API response times across high-frequency endpoints',
                'Automated recurring billing and subscription lifecycle webhooks',
                '100% intellectual property ownership transferred to client'
            ],
            'stack' => ['Laravel', 'Vue.js', 'PostgreSQL', 'Docker', 'AWS', 'Redis'],
            'badge' => 'SaaS Architecture',
            'url' => 'project-enterprise-saas.php'
        ],
        [
            'id' => 'd2c-commerce',
            'title' => 'Headless D2C Commerce & Logistics Hub',
            'category' => 'E-commerce',
            'category_slug' => 'ecommerce',
            'label' => '[Architecture Case Study]',
            'summary' => 'Headless storefront integrated with Indian payment rails (UPI, Razorpay) and automated warehouse dispatch syncing.',
            'problem' => 'Cart abandonment caused by multi-step checkouts and stock sync errors between online stores and offline warehouse facilities.',
            'solution' => 'Implemented a headless Shopify Plus architecture with custom Node.js middleware syncing orders with Shiprocket and enabling 1-click UPI checkout.',
            'outcomes' => [
                'Frictionless 1-click mobile checkout built for Indian consumer habits',
                'Automated warehouse dispatch and live tracking generation via webhooks',
                'Sub-second catalog browsing and dynamic faceted filtering',
                'Zero inventory overselling during high-traffic promotional events'
            ],
            'stack' => ['Shopify Plus', 'Node.js', 'Razorpay', 'Shiprocket', 'Tailwind CSS'],
            'badge' => 'Omnichannel Commerce',
            'url' => 'project-d2c-commerce.php'
        ],
        [
            'id' => 'rag-assistant',
            'title' => 'Autonomous RAG Operations & Knowledge Agent',
            'category' => 'AI',
            'category_slug' => 'ai',
            'label' => '[Architecture Case Study]',
            'summary' => 'Vector-indexed retrieval-augmented generation assistant connected to internal docs, resolving tier-1 inquiries and syncing tickets.',
            'problem' => 'Senior engineering and support teams overloaded with repetitive technical questions, resulting in slow turnaround times for urgent issues.',
            'solution' => 'Built a proprietary RAG pipeline using LangChain, pgvector, and Claude API to index internal technical manuals and resolve tier-1 queries with source citations.',
            'outcomes' => [
                'Autonomous resolution of over 70% of standard technical inquiries',
                'Zero-hallucination constraint with verified document citations',
                'Automatic escalation to human engineers for complex edge cases',
                'Enterprise-grade data security with zero public model training'
            ],
            'stack' => ['Python', 'FastAPI', 'LangChain', 'pgvector', 'Claude API', 'Docker'],
            'badge' => 'Intelligent Agent',
            'url' => 'project-rag-assistant.php'
        ],
        [
            'id' => 'corporate-portal',
            'title' => 'Modern Corporate Web Portal & Headless CMS',
            'category' => 'Websites',
            'category_slug' => 'websites',
            'label' => '[Architecture Case Study]',
            'summary' => 'High-performance corporate digital presence engineered with Next.js, headless CMS, and sub-second Core Web Vitals.',
            'problem' => 'Slow legacy website on bloated CMS causing high bounce rates, poor mobile readability, and security vulnerabilities.',
            'solution' => 'Engineered a modern Next.js server-rendered web application with Tailwind CSS, decoupled headless CMS for marketing updates, and automated staging CI/CD.',
            'outcomes' => [
                'Google Core Web Vitals mobile and desktop scores exceeding 95',
                'Zero render-blocking scripts with optimized responsive images',
                'Marketing team can edit content independently without developer intervention',
                'Hardened static edge deployment resistant to DDoS attacks'
            ],
            'stack' => ['Next.js', 'React', 'Tailwind CSS', 'Headless CMS', 'Vercel / Cloudflare'],
            'badge' => 'Web Architecture',
            'url' => 'project-corporate-portal.php'
        ],
        [
            'id' => 'b2b-marketing',
            'title' => 'Full-Funnel B2B Acquisition & Server-Side Tracking',
            'category' => 'Marketing',
            'category_slug' => 'marketing',
            'label' => '[Architecture Case Study]',
            'summary' => 'LinkedIn ABM and Google Ads acquisition pipeline backed by GA4 server-side Conversions API (CAPI).',
            'problem' => 'Ad tracking blind spots from browser privacy blockers and wasted ad spend on unvetted, unqualified lead inquiries.',
            'solution' => 'Built a server-side Conversions API (CAPI) infrastructure integrated with GA4, paired with high-intent LinkedIn ABM campaigns and automated lead scoring.',
            'outcomes' => [
                'Full data attribution recovery with server-to-server conversion events',
                'Elimination of lead leakage through instant automated WhatsApp and email routing',
                'High-intent qualified pipeline replacing unvetted form spam',
                'Weekly transparent acquisition dashboard tracking true ROAS'
            ],
            'stack' => ['Google Ads', 'Meta CAPI', 'LinkedIn ABM', 'GA4', 'Server GTM', 'HubSpot'],
            'badge' => 'Performance Marketing',
            'url' => 'project-b2b-marketing.php'
        ],
        [
            'id' => 'franchise-platform',
            'title' => 'Franchise Operations & Branch Analytics Suite',
            'category' => 'Software',
            'category_slug' => 'software',
            'label' => '[Architecture Case Study]',
            'summary' => 'Centralized multi-location operational software with real-time stock sync and localized manager dashboards.',
            'problem' => 'Manual reconciliation errors and delayed inventory visibility across 25+ distributed retail branch locations.',
            'solution' => 'Developed a centralized Laravel & React operations platform allowing headquarters real-time stock monitoring while giving branch managers isolated access.',
            'outcomes' => [
                'Real-time centralized inventory visibility across all regional hubs',
                'Automated branch reorder requests when thresholds are breached',
                'Role-based permissions ensuring store managers see only local branch data',
                'Significant reduction in manual spreadsheet reconciliation overhead'
            ],
            'stack' => ['Laravel', 'React', 'MySQL', 'Redis', 'Tailwind CSS', 'Docker'],
            'badge' => 'Enterprise Operations',
            'url' => 'project-franchise-platform.php'
        ]
    ];

    // 42 Live Client Production Deployments & Commercial Portals
    $LIVE_CLIENT_PORTFOLIO = [
        [
            'domain' => 'bettersupplytrading.com',
            'name' => 'Better Supply Trading',
            'category' => 'B2B & Industrial Trading',
            'tag' => 'B2B Trading',
            'url' => 'https://bettersupplytrading.com',
            'status' => 'Live Production'
        ],
        [
            'domain' => 'techeracomputer.com',
            'name' => 'TechEra Computer Education',
            'category' => 'Education & Academy',
            'tag' => 'EdTech',
            'url' => 'https://techeracomputer.com',
            'status' => 'Live Production'
        ],
        [
            'domain' => 'fsaludoclub.com',
            'name' => 'Fsaludo Club',
            'category' => 'Lifestyle & Wellness',
            'tag' => 'Lifestyle',
            'url' => 'https://fsaludoclub.com',
            'status' => 'Live Production'
        ],
        [
            'domain' => 'thedesertiron.com',
            'name' => 'The Desert Iron',
            'category' => 'Fitness & Athletic Apparel',
            'tag' => 'E-Commerce',
            'url' => 'https://thedesertiron.com',
            'status' => 'Live Production'
        ],
        [
            'domain' => 'game.foundida.com',
            'name' => 'Foundida Games',
            'category' => 'Interactive Gaming & Web App',
            'tag' => 'Web App',
            'url' => 'https://game.foundida.com',
            'status' => 'Live Production'
        ],
        [
            'domain' => 'onestallcargo.com',
            'name' => 'One Stall Cargo',
            'category' => 'Logistics & Cargo Transport',
            'tag' => 'Logistics',
            'url' => 'https://onestallcargo.com',
            'status' => 'Live Production'
        ],
        [
            'domain' => 'indinursery.in',
            'name' => 'Indi Nursery',
            'category' => 'Horticulture & Plant Nursery',
            'tag' => 'E-Commerce',
            'url' => 'https://indinursery.in',
            'status' => 'Live Production'
        ],
        [
            'domain' => 'muskaninteriors.in',
            'name' => 'Muskan Interiors',
            'category' => 'Interior Design & Architecture',
            'tag' => 'Architecture',
            'url' => 'https://muskaninteriors.in',
            'status' => 'Live Production'
        ],
        [
            'domain' => 'zenvixalaboratories.com',
            'name' => 'Zenvixa Laboratories',
            'category' => 'Pharma & Medical Laboratories',
            'tag' => 'Pharma',
            'url' => 'https://zenvixalaboratories.com',
            'status' => 'Live Production'
        ],
        [
            'domain' => 'kavexcourier.in',
            'name' => 'Kavex Courier Express',
            'category' => 'Courier & Express Logistics',
            'tag' => 'Logistics',
            'url' => 'https://kavexcourier.in',
            'status' => 'Live Production'
        ],
        [
            'domain' => 'ebigcart.in',
            'name' => 'EBigCart Online Shopping',
            'category' => 'Multi-Category Retail Store',
            'tag' => 'E-Commerce',
            'url' => 'https://ebigcart.in',
            'status' => 'Live Production'
        ],
        [
            'domain' => 'relievephysiotherapy.in',
            'name' => 'Relieve Physiotherapy',
            'category' => 'Clinical Healthcare & Rehab',
            'tag' => 'Healthcare',
            'url' => 'https://relievephysiotherapy.in',
            'status' => 'Live Production'
        ],
        [
            'domain' => 'sainmatrimony.in',
            'name' => 'Sain Matrimony',
            'category' => 'Matrimonial Matchmaking Hub',
            'tag' => 'Web Portal',
            'url' => 'https://sainmatrimony.in',
            'status' => 'Live Production'
        ],
        [
            'domain' => 'mediskyindia.com',
            'name' => 'Medisky India',
            'category' => 'Medical Equipment & Supply',
            'tag' => 'Healthcare',
            'url' => 'https://mediskyindia.com',
            'status' => 'Live Production'
        ],
        [
            'domain' => 'rakeshvermaartist.com',
            'name' => 'Rakesh Verma Artist',
            'category' => 'Fine Art & Creative Gallery',
            'tag' => 'Portfolio',
            'url' => 'https://rakeshvermaartist.com',
            'status' => 'Live Production'
        ],
        [
            'domain' => 'mahadevtractor.com',
            'name' => 'Mahadev Tractor & Agro',
            'category' => 'Agro Machinery & Equipment',
            'tag' => 'Automotive',
            'url' => 'https://mahadevtractor.com',
            'status' => 'Live Production'
        ],
        [
            'domain' => 'raipurtaxi.com',
            'name' => 'Raipur Taxi Services',
            'category' => 'Cab Booking & Travel Services',
            'tag' => 'Travel',
            'url' => 'https://raipurtaxi.com',
            'status' => 'Live Production'
        ],
        [
            'domain' => 'brainmindbehaviour.com',
            'name' => 'Brain Mind Behaviour',
            'category' => 'Neuroscience & Mental Health',
            'tag' => 'Healthcare',
            'url' => 'https://brainmindbehaviour.com',
            'status' => 'Live Production'
        ],
        [
            'domain' => 'gurutmafin.com',
            'name' => 'Gurutma Financial Services',
            'category' => 'Wealth & Financial Advisory',
            'tag' => 'Fintech',
            'url' => 'https://gurutmafin.com',
            'status' => 'Live Production'
        ],
        [
            'domain' => 'ranisahab.com',
            'name' => 'Rani Sahab Couture',
            'category' => 'Ethnic Wear & Fashion Brand',
            'tag' => 'E-Commerce',
            'url' => 'https://ranisahab.com',
            'status' => 'Live Production'
        ],
        [
            'domain' => 'bhavikafoundation.in',
            'name' => 'Bhavika Foundation',
            'category' => 'Non-Profit Social Welfare',
            'tag' => 'NGO',
            'url' => 'https://bhavikafoundation.in',
            'status' => 'Live Production'
        ],
        [
            'domain' => 'scan2freight.com',
            'name' => 'Scan2Freight Logistics',
            'category' => 'Digital Freight & Cargo Tech',
            'tag' => 'Logistics SaaS',
            'url' => 'https://scan2freight.com',
            'status' => 'Live Production'
        ],
        [
            'domain' => 'norvastore.in',
            'name' => 'Norva Store',
            'category' => 'Modern Retail & Lifestyle Store',
            'tag' => 'E-Commerce',
            'url' => 'https://norvastore.in',
            'status' => 'Live Production'
        ],
        [
            'domain' => 'hotelmidwaymalari.in',
            'name' => 'Hotel Midway Malari',
            'category' => 'Resort & Mountain Hospitality',
            'tag' => 'Hospitality',
            'url' => 'https://hotelmidwaymalari.in',
            'status' => 'Live Production'
        ],
        [
            'domain' => 'jaibhawanifrutscompany.in',
            'name' => 'Jai Bhawani Fruits Co.',
            'category' => 'Wholesale Fresh Produce & Agro',
            'tag' => 'Agro Wholesale',
            'url' => 'https://jaibhawanifrutscompany.in',
            'status' => 'Live Production'
        ],
        [
            'domain' => 'dasgold.in',
            'name' => 'Das Gold & Ornaments',
            'category' => 'Jewellery & Precious Metals',
            'tag' => 'Luxury Retail',
            'url' => 'https://dasgold.in',
            'status' => 'Live Production'
        ],
        [
            'domain' => 'ijari.in',
            'name' => 'IJARI Research Journal',
            'category' => 'Academic Publishing & Journal',
            'tag' => 'Publishing',
            'url' => 'https://ijari.in',
            'status' => 'Live Production'
        ],
        [
            'domain' => 'advertresources.com',
            'name' => 'Advert Resources',
            'category' => 'Digital Media & Ad Solutions',
            'tag' => 'Digital Media',
            'url' => 'https://advertresources.com',
            'status' => 'Live Production'
        ],
        [
            'domain' => 'aadhivarahaservices.com',
            'name' => 'Aadhivaraha Services',
            'category' => 'Corporate Facility Management',
            'tag' => 'Corporate',
            'url' => 'https://aadhivarahaservices.com',
            'status' => 'Live Production'
        ],
        [
            'domain' => 'mpwaindia.org',
            'name' => 'MPWA India',
            'category' => 'Industry Welfare Association',
            'tag' => 'Association',
            'url' => 'https://mpwaindia.org',
            'status' => 'Live Production'
        ],
        [
            'domain' => 'mykalyani.in',
            'name' => 'MyKalyani City Portal',
            'category' => 'Hyperlocal Community Portal',
            'tag' => 'Web Portal',
            'url' => 'https://mykalyani.in',
            'status' => 'Live Production'
        ],
        [
            'domain' => 'vedicbotanica.com',
            'name' => 'Vedic Botanica',
            'category' => 'Ayurvedic & Herbal Wellness',
            'tag' => 'E-Commerce',
            'url' => 'https://vedicbotanica.com',
            'status' => 'Live Production'
        ],
        [
            'domain' => 'revoxon.com',
            'name' => 'Revoxon Polymer Tech',
            'category' => 'Industrial Materials & Polymers',
            'tag' => 'Industrial',
            'url' => 'https://revoxon.com',
            'status' => 'Live Production'
        ],
        [
            'domain' => 'topdarascoutandguides.in',
            'name' => 'Topdara Scouts & Guides',
            'category' => 'Youth Leadership & Scouting',
            'tag' => 'Education',
            'url' => 'https://topdarascoutandguides.in',
            'status' => 'Live Production'
        ],
        [
            'domain' => 'zorentradingservices.com',
            'name' => 'Zoren Trading Services',
            'category' => 'Import-Export & Global Trade',
            'tag' => 'B2B Trade',
            'url' => 'https://zorentradingservices.com',
            'status' => 'Live Production'
        ],
        [
            'domain' => 'revoxonpipes.com',
            'name' => 'Revoxon Pipes & Fittings',
            'category' => 'Piping & Civil Infrastructure',
            'tag' => 'Manufacturing',
            'url' => 'https://revoxonpipes.com',
            'status' => 'Live Production'
        ],
        [
            'domain' => 'vivektech.online',
            'name' => 'VivekTech Solutions',
            'category' => 'Cloud & IT Software Services',
            'tag' => 'IT Services',
            'url' => 'https://vivektech.online',
            'status' => 'Live Production'
        ],
        [
            'domain' => 'foundida.in',
            'name' => 'Foundida India',
            'category' => 'Brand Strategy & Growth Studio',
            'tag' => 'Agency',
            'url' => 'https://foundida.in',
            'status' => 'Live Production'
        ],
        [
            'domain' => 'retrust.store',
            'name' => 'ReTrust Electronics',
            'category' => 'Consumer Tech & Gadget Store',
            'tag' => 'E-Commerce',
            'url' => 'https://retrust.store',
            'status' => 'Live Production'
        ],
        [
            'domain' => 'foundida.com',
            'name' => 'Foundida Global',
            'category' => 'Enterprise Web & Media Platform',
            'tag' => 'Web Platform',
            'url' => 'https://foundida.com',
            'status' => 'Live Production'
        ],
        [
            'domain' => 'ecocraftersindia.com',
            'name' => 'Eco Crafters India',
            'category' => 'Handcrafted Sustainable Goods',
            'tag' => 'Sustainable',
            'url' => 'https://ecocraftersindia.com',
            'status' => 'Live Production'
        ],
        [
            'domain' => 'patrkarmediaparishad.in',
            'name' => 'Patrkar Media Parishad',
            'category' => 'National Media & Press Council',
            'tag' => 'Media & Press',
            'url' => 'https://patrkarmediaparishad.in',
            'status' => 'Live Production'
        ],
    ];
}
