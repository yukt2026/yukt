<?php
// ==========================================================================
// YUKT IT SOLUTIONS — Comprehensive Digital Services Catalogue (Master Data)
// 10 Strategic Categories | 140+ Professional Services
// ==========================================================================

if (!defined('YUKT_SERVICE_CATALOGUE_LOADED')) {
    define('YUKT_SERVICE_CATALOGUE_LOADED', true);

    $CATALOGUE_CATEGORIES = [
        'web-dev' => [
            'id' => 'web-dev',
            'letter' => 'A',
            'name' => 'Website & Web Development',
            'short_name' => 'Web Development',
            'tagline' => 'High-Performance Modern Web Platforms & Custom Web Apps',
            'icon' => 'globe',
            'badge' => 'High Demand',
            'accent' => 'electric',
            'gradient' => 'from-blue-600 to-cyan-500',
            'description' => 'From responsive business websites to dynamic custom web portals and online stores engineered for speed, conversions, and reliability.',
            'count' => 16,
        ],
        'software-automation' => [
            'id' => 'software-automation',
            'letter' => 'B',
            'name' => 'Software & Business Automation',
            'short_name' => 'Software & ERP',
            'tagline' => 'Bespoke Business Software, Billing, POS & ERP Systems',
            'icon' => 'cpu',
            'badge' => 'High Margin',
            'accent' => 'navy',
            'gradient' => 'from-slate-700 to-indigo-900',
            'description' => 'End-to-end custom business software that eliminates paperwork, tracks inventory, manages billing, and automates multi-branch operations.',
            'count' => 16,
        ],
        'advanced-documents' => [
            'id' => 'advanced-documents',
            'letter' => 'C',
            'name' => 'Advanced Document & Digital Document Services',
            'short_name' => 'Advanced Documents',
            'tagline' => 'Creation, Formatting, OCR & Corporate Documentation',
            'icon' => 'file-text',
            'badge' => 'Top Footfall',
            'accent' => 'orange',
            'gradient' => 'from-amber-500 to-orange-600',
            'description' => 'Dedicated documentation desk for Cyber Cafes, CSC centres, job seekers, and businesses. Professional formatting, layout design, resumes, and business reports.',
            'legal_disclaimer' => 'IMPORTANT LEGAL NOTICE: All legal document and agreement services are drafting and formatting assistance only and do not replace legal advice from qualified legal professionals. YUKT does not claim legal validity or guaranteed government approval.',
            'count' => 48,
        ],
        'graphic-design' => [
            'id' => 'graphic-design',
            'letter' => 'D',
            'name' => 'Graphic Design & Branding',
            'short_name' => 'Design & Branding',
            'tagline' => 'Visual Identity, Marketing Collaterals & Social Media Creatives',
            'icon' => 'palette',
            'badge' => 'Creative',
            'accent' => 'electric',
            'gradient' => 'from-violet-600 to-fuchsia-500',
            'description' => 'Eye-catching visual designs, corporate logos, print-ready marketing materials, and high-engagement social media creatives tailored for businesses.',
            'count' => 16,
        ],
        'digital-marketing' => [
            'id' => 'digital-marketing',
            'letter' => 'E',
            'name' => 'Digital Marketing & SEO',
            'short_name' => 'Marketing & SEO',
            'tagline' => 'Local SEO, Google Ads, Meta Ads & Targeted Lead Generation',
            'icon' => 'trending-up',
            'badge' => 'ROI Focused',
            'accent' => 'electric',
            'gradient' => 'from-emerald-600 to-teal-500',
            'description' => 'Data-driven growth marketing to get businesses found on Google, attract local customers, generate leads, and dominate social media.',
            'count' => 16,
        ],
        'ai-automation' => [
            'id' => 'ai-automation',
            'letter' => 'F',
            'name' => 'AI & Automation Services',
            'short_name' => 'AI & Workflows',
            'tagline' => 'Intelligent Chatbots, WhatsApp Automation & AI Calling Agents',
            'icon' => 'bot',
            'badge' => 'Next-Gen',
            'accent' => 'orange',
            'gradient' => 'from-rose-500 to-orange-500',
            'description' => 'Deploy smart AI agents, automated WhatsApp bots, voice calling agents, and automated data processing pipelines for modern enterprises.',
            'count' => 14,
        ],
        'mobile-apps' => [
            'id' => 'mobile-apps',
            'letter' => 'G',
            'name' => 'Mobile App Development',
            'short_name' => 'Mobile Apps',
            'tagline' => 'Native & Cross-Platform Android & iOS Mobile Applications',
            'icon' => 'smartphone',
            'badge' => 'Enterprise',
            'accent' => 'electric',
            'gradient' => 'from-sky-500 to-blue-700',
            'description' => 'User-friendly mobile apps published on Google Play and Apple App Store for commerce, schools, service bookings, and logistics.',
            'count' => 10,
        ],
        'it-technical' => [
            'id' => 'it-technical',
            'letter' => 'H',
            'name' => 'IT & Technical Services',
            'short_name' => 'IT & Cloud',
            'tagline' => 'Hosting, Domain, Cloud Servers, Security & Remote Tech Support',
            'icon' => 'server',
            'badge' => 'Infrastructure',
            'accent' => 'navy',
            'gradient' => 'from-slate-700 to-slate-900',
            'description' => 'Reliable technical backend support including domain registration, secure hosting, Google Workspace, SSL, server configuration, and troubleshooting.',
            'count' => 16,
        ],
        'business-digitalization' => [
            'id' => 'business-digitalization',
            'letter' => 'I',
            'name' => 'Business Digitalization',
            'short_name' => 'Digital Business',
            'tagline' => 'Transform Traditional Offline Stores into Digital Powerhouses',
            'icon' => 'store',
            'badge' => 'Local Business',
            'accent' => 'orange',
            'gradient' => 'from-amber-600 to-yellow-500',
            'description' => 'Complete digital setup for local shops, clinics, traders, and retail stores: Google Maps, WhatsApp catalog, QR payments, and appointment setups.',
            'count' => 12,
        ],
        'education-technology' => [
            'id' => 'education-technology',
            'letter' => 'J',
            'name' => 'Education & Training Technology',
            'short_name' => 'EdTech & Schools',
            'tagline' => 'School & Coaching Websites, LMS, Exam & Fee Systems',
            'icon' => 'graduation-cap',
            'badge' => 'High Footfall',
            'accent' => 'electric',
            'gradient' => 'from-indigo-600 to-blue-600',
            'description' => 'Turnkey digital platforms for schools, colleges, institutes, and private coaches with student portals, online tests, and fee collection.',
            'count' => 10,
        ]
    ];

    // ==========================================================================
    // ALL 140+ INDIVIDUAL SERVICES
    // ==========================================================================
    $SERVICES_CATALOGUE = [

        // ----------------------------------------------------------------------
        // CATEGORY A: WEBSITE & WEB DEVELOPMENT (16 Services)
        // ----------------------------------------------------------------------
        [
            'id' => 'web-business-website',
            'category_id' => 'web-dev',
            'name' => 'Business Website Development',
            'icon' => 'globe',
            'short_desc' => 'Professional, high-converting responsive website tailored for local businesses, enterprises, and service providers with mobile optimization.',
            'deliverables' => ['5-10 Custom Pages', 'Mobile Responsive', 'Lead Capture Form', 'Google Maps Embed', 'SEO Basics'],
            'timeline' => '4-7 Days',
            'popular' => true,
            'tags' => ['business', 'corporate', 'website', 'responsive', 'commercial']
        ],
        [
            'id' => 'web-corporate-website',
            'category_id' => 'web-dev',
            'name' => 'Corporate Website',
            'icon' => 'briefcase',
            'short_desc' => 'Modern corporate digital presence featuring executive leadership, investor relations, multi-service breakdowns, and high-trust aesthetics.',
            'deliverables' => ['Bespoke UI Design', 'Multi-level Navigation', 'Career & Press Portals', 'Sub-second Load Speeds'],
            'timeline' => '7-12 Days',
            'popular' => false,
            'tags' => ['corporate', 'enterprise', 'brand', 'company']
        ],
        [
            'id' => 'web-portfolio-website',
            'category_id' => 'web-dev',
            'name' => 'Portfolio Website',
            'icon' => 'user-check',
            'short_desc' => 'Sleek personal portfolios for doctors, lawyers, architects, designers, photographers, consultants, and independent specialists.',
            'deliverables' => ['Work Gallery Showcase', 'Client Testimonials', 'Direct WhatsApp Button', 'Downloadable Resume / Bio'],
            'timeline' => '3-5 Days',
            'popular' => true,
            'tags' => ['portfolio', 'freelancer', 'artist', 'doctor', 'consultant']
        ],
        [
            'id' => 'web-ecommerce-website',
            'category_id' => 'web-dev',
            'name' => 'E-commerce Website',
            'icon' => 'shopping-cart',
            'short_desc' => 'Online retail storefront with catalog management, product variants, shopping cart, UPI & card checkout, and automated invoice printing.',
            'deliverables' => ['Razorpay / UPI Payment Gateway', 'Order Tracking', 'Admin Product Dashboard', 'Shipping Courier Sync'],
            'timeline' => '7-14 Days',
            'popular' => true,
            'tags' => ['ecommerce', 'online store', 'shopping', 'payments', 'retail']
        ],
        [
            'id' => 'web-educational-website',
            'category_id' => 'web-dev',
            'name' => 'Educational Website',
            'icon' => 'book-open',
            'short_desc' => 'Engaging website for tuition hubs, training academies, and online tutors featuring course syllabi, notices, and registration forms.',
            'deliverables' => ['Course Listings', 'Online Enquiry Funnel', 'Student Notice Board', 'Photo & Video Gallery'],
            'timeline' => '5-8 Days',
            'popular' => false,
            'tags' => ['education', 'academy', 'training', 'classes']
        ],
        [
            'id' => 'web-school-college-website',
            'category_id' => 'web-dev',
            'name' => 'School & College Website',
            'icon' => 'graduation-cap',
            'short_desc' => 'Official compliant portal for private/public schools and colleges featuring mandatory disclosures, admissions, and faculty info.',
            'deliverables' => ['Mandatory Disclosure Desk', 'Online Admission Application', 'Principal Message & Faculty', 'Downloadable Forms'],
            'timeline' => '7-12 Days',
            'popular' => true,
            'tags' => ['school', 'college', 'institution', 'admissions']
        ],
        [
            'id' => 'web-hospital-clinic-website',
            'category_id' => 'web-dev',
            'name' => 'Hospital & Clinic Website',
            'icon' => 'activity',
            'short_desc' => 'Medical center portal featuring doctor specialties, OPD timing schedules, patient enquiry forms, and emergency contact highlights.',
            'deliverables' => ['Doctor Schedule Matrix', 'Appointment Request Form', 'OPD / Emergency Highlights', 'Google Maps Location'],
            'timeline' => '5-9 Days',
            'popular' => false,
            'tags' => ['hospital', 'clinic', 'doctor', 'healthcare', 'medical']
        ],
        [
            'id' => 'web-real-estate-website',
            'category_id' => 'web-dev',
            'name' => 'Real Estate Website',
            'icon' => 'home',
            'short_desc' => 'Property dealer and builder portal displaying residential, commercial listings, floor plans, video walkthroughs, and lead forms.',
            'deliverables' => ['Property Filter by Budget/BHK', 'Interactive Location Map', 'Floor Plans & Brochure PDF', 'Direct WhatsApp Enquiry'],
            'timeline' => '6-10 Days',
            'popular' => true,
            'tags' => ['real estate', 'property', 'plots', 'apartments', 'builder']
        ],
        [
            'id' => 'web-restaurant-website',
            'category_id' => 'web-dev',
            'name' => 'Restaurant Website',
            'icon' => 'coffee',
            'short_desc' => 'Appetizing online showcase for restaurants, cafes, and sweet shops with digital visual menus, table booking, and direct delivery links.',
            'deliverables' => ['Digital Menu with Photos & Prices', 'Table Reservation System', 'Zomato / Swiggy Links', 'Special Offer Banners'],
            'timeline' => '3-6 Days',
            'popular' => false,
            'tags' => ['restaurant', 'cafe', 'food', 'menu', 'dining']
        ],
        [
            'id' => 'web-travel-tourism-website',
            'category_id' => 'web-dev',
            'name' => 'Travel & Tourism Website',
            'icon' => 'compass',
            'short_desc' => 'Exciting portal for tour operators, taxi services, and travel agencies with itinerary displays, package bookings, and vehicle showcases.',
            'deliverables' => ['Tour Package Itineraries', 'Taxi Booking / Price Calculator', 'Customer Reviews', 'Instant WhatsApp Booking'],
            'timeline' => '5-9 Days',
            'popular' => false,
            'tags' => ['travel', 'tourism', 'taxi', 'tours', 'hotel']
        ],
        [
            'id' => 'web-landing-page',
            'category_id' => 'web-dev',
            'name' => 'Landing Page Development',
            'icon' => 'target',
            'short_desc' => 'Ultra-fast, high-converting single page built specifically for Google Ads, Meta Ads, product launches, and festival campaigns.',
            'deliverables' => ['Conversion-Optimized Layout', 'Sticky WhatsApp CTA', 'Zero Distraction Flow', 'Sub-second Loading Speed'],
            'timeline' => '2-4 Days',
            'popular' => true,
            'tags' => ['landing page', 'ads', 'leads', 'conversions', 'sales funnel']
        ],
        [
            'id' => 'web-custom-applications',
            'category_id' => 'web-dev',
            'name' => 'Custom Web Applications',
            'icon' => 'terminal',
            'short_desc' => 'Tailor-made web portals with custom database logic, multi-user role management, customer self-service portals, and cloud sync.',
            'deliverables' => ['Role-Based Access Control', 'Custom SQL Database', 'REST API Middleware', 'Security Hardening'],
            'timeline' => '12-25 Days',
            'popular' => false,
            'tags' => ['web application', 'portal', 'custom', 'database', 'system']
        ],
        [
            'id' => 'web-website-redesign',
            'category_id' => 'web-dev',
            'name' => 'Website Redesign',
            'icon' => 'refresh-cw',
            'short_desc' => 'Modernize outdated, slow, or non-mobile-friendly websites into sleek, lightning-fast platforms with cutting-edge UI/UX aesthetics.',
            'deliverables' => ['Full UI Refactor', 'Mobile Responsive Rewrite', 'Retain Existing SEO Rankings', 'Speed Boost to 90+ Score'],
            'timeline' => '4-8 Days',
            'popular' => true,
            'tags' => ['redesign', 'upgrade', 'modernize', 'mobile friendly']
        ],
        [
            'id' => 'web-website-maintenance',
            'category_id' => 'web-dev',
            'name' => 'Website Maintenance',
            'icon' => 'tool',
            'short_desc' => 'Monthly technical upkeep, plugin updates, security scans, uptime monitoring, bug fixes, and minor text/image updates.',
            'deliverables' => ['Weekly Full Backups', 'Security Patching', 'Speed Checks', 'Dedicated Support Hours'],
            'timeline' => 'Monthly SLA',
            'popular' => false,
            'tags' => ['maintenance', 'support', 'updates', 'sla', 'security']
        ],
        [
            'id' => 'web-speed-optimization',
            'category_id' => 'web-dev',
            'name' => 'Website Speed Optimization',
            'icon' => 'zap',
            'short_desc' => 'Drastically speed up slow WordPress or custom sites to achieve 90+ Google PageSpeed and sub-second load times.',
            'deliverables' => ['Image Compression & WebP', 'CSS/JS Minification', 'Browser Caching Setup', 'Core Web Vitals Audit'],
            'timeline' => '2-3 Days',
            'popular' => true,
            'tags' => ['speed', 'pagespeed', 'performance', 'optimization']
        ],
        [
            'id' => 'web-domain-hosting-assistance',
            'category_id' => 'web-dev',
            'name' => 'Domain & Hosting Assistance',
            'icon' => 'hard-drive',
            'short_desc' => 'Guidance and setup for purchasing .in, .com, .org domains, connecting DNS records, configuring cPanel, and SSL setup.',
            'deliverables' => ['Domain Registration Support', 'Cloud/Shared Hosting Setup', 'DNS & Nameserver Config', 'Free Lifetime SSL'],
            'timeline' => '24 Hours',
            'popular' => false,
            'tags' => ['domain', 'hosting', 'dns', 'cpanel', 'ssl']
        ],

        // ----------------------------------------------------------------------
        // CATEGORY B: SOFTWARE & BUSINESS AUTOMATION (16 Services)
        // ----------------------------------------------------------------------
        [
            'id' => 'soft-billing-software',
            'category_id' => 'software-automation',
            'name' => 'Billing Software',
            'icon' => 'receipt',
            'short_desc' => 'Simple, fast GST and non-GST billing software for retail shops, wholesalers, and service businesses with instant thermal/A4 invoice printing.',
            'deliverables' => ['GST & Composition Tax Rules', 'Thermal 2"/3" & A4 Prints', 'Barcode Scanner Support', 'Customer Balance Ledger'],
            'timeline' => '3-7 Days',
            'popular' => true,
            'tags' => ['billing', 'invoice', 'gst', 'retail', 'accounting']
        ],
        [
            'id' => 'soft-inventory-management',
            'category_id' => 'software-automation',
            'name' => 'Inventory Management',
            'icon' => 'package',
            'short_desc' => 'Real-time stock tracking, low stock SMS/email alerts, batch number and expiry date tracking, and supplier purchase orders.',
            'deliverables' => ['Stock In/Out Tracking', 'Low Stock Warning', 'Batch & Expiry Dates', 'Supplier Management'],
            'timeline' => '5-10 Days',
            'popular' => true,
            'tags' => ['inventory', 'stock', 'warehouse', 'supplies']
        ],
        [
            'id' => 'soft-pos-software',
            'category_id' => 'software-automation',
            'name' => 'POS Software',
            'icon' => 'monitor',
            'short_desc' => 'Point of Sale (POS) system for retail outlets, supermarkets, and restaurants with touch screen compatibility and fast checkout.',
            'deliverables' => ['Cash Drawer & Barcode Sync', 'Multiple Payment Splits', 'End of Day Cash Count', 'Offline/Online Mode'],
            'timeline' => '5-10 Days',
            'popular' => true,
            'tags' => ['pos', 'point of sale', 'counter', 'supermarket', 'billing']
        ],
        [
            'id' => 'soft-crm-software',
            'category_id' => 'software-automation',
            'name' => 'CRM Software',
            'icon' => 'users',
            'short_desc' => 'Customer Relationship Management system to track leads from call, WhatsApp, and Facebook, assign sales reps, and close deals.',
            'deliverables' => ['Lead Pipeline Stages', 'Call/Follow-up Reminders', 'WhatsApp Integration', 'Sales Performance Analytics'],
            'timeline' => '7-14 Days',
            'popular' => true,
            'tags' => ['crm', 'leads', 'sales', 'customer management', 'pipeline']
        ],
        [
            'id' => 'soft-erp-solutions',
            'category_id' => 'software-automation',
            'name' => 'ERP Solutions',
            'icon' => 'layers',
            'short_desc' => 'Integrated Enterprise Resource Planning covering sales, inventory, accounts, payroll, and manufacturing in one central system.',
            'deliverables' => ['Multi-Department Sync', 'Role-Based Dashboard', 'Custom Business Workflows', 'Automated Financial Reports'],
            'timeline' => '15-30 Days',
            'popular' => false,
            'tags' => ['erp', 'enterprise', 'integrated', 'manufacturing', 'accounts']
        ],
        [
            'id' => 'soft-school-management',
            'category_id' => 'software-automation',
            'name' => 'School Management Software',
            'icon' => 'graduation-cap',
            'short_desc' => 'All-in-one school ERP covering student admissions, ID card generation, fee collection with receipts, attendance, and report cards.',
            'deliverables' => ['Fee Due SMS Reminders', 'Report Card Generator', 'Student & Parent Login', 'Staff Attendance Register'],
            'timeline' => '7-15 Days',
            'popular' => true,
            'tags' => ['school software', 'school erp', 'fees', 'report card', 'admissions']
        ],
        [
            'id' => 'soft-coaching-management',
            'category_id' => 'software-automation',
            'name' => 'Coaching Management Software',
            'icon' => 'award',
            'short_desc' => 'Tailored software for competitive coaching centers and tuition institutes with batch scheduling, test series marks, and fee tracking.',
            'deliverables' => ['Batch Wise Attendance', 'Monthly Fee Due Lists', 'Test Score SMS to Parents', 'Study Material Portal'],
            'timeline' => '5-10 Days',
            'popular' => true,
            'tags' => ['coaching', 'tuition', 'batches', 'fees', 'institute']
        ],
        [
            'id' => 'soft-hospital-management',
            'category_id' => 'software-automation',
            'name' => 'Hospital Management Software',
            'icon' => 'activity',
            'short_desc' => 'Hospital and clinic software with OPD token generation, IPD bed management, digital prescription printing, and lab report billing.',
            'deliverables' => ['OPD / IPD Records', 'Doctor Digital Prescription', 'Pharmacy & Lab Sync', 'Discharge Summary Builder'],
            'timeline' => '10-20 Days',
            'popular' => false,
            'tags' => ['hospital software', 'clinic software', 'opd', 'ipd', 'prescription']
        ],
        [
            'id' => 'soft-hotel-management',
            'category_id' => 'software-automation',
            'name' => 'Hotel Management Software',
            'icon' => 'home',
            'short_desc' => 'Hotel & resort reservation software with room availability grid, guest check-in/check-out, food billing, and government ID capture.',
            'deliverables' => ['Room Tariff & Booking Calendar', 'Guest ID Scanner & Record', 'Kitchen Order Ticket (KOT)', 'GST Invoice Generation'],
            'timeline' => '6-12 Days',
            'popular' => false,
            'tags' => ['hotel', 'resort', 'guest house', 'booking', 'room management']
        ],
        [
            'id' => 'soft-courier-logistics',
            'category_id' => 'software-automation',
            'name' => 'Courier & Logistics Software',
            'icon' => 'truck',
            'short_desc' => 'Airway bill (AWB) generation, barcode tracking, parcel hub dispatching, delivery boy app integration, and consignment tracking.',
            'deliverables' => ['Barcode AWB Printing', 'Consignment Status Tracking', 'Driver / Delivery App Sync', 'Branch Reconciliation'],
            'timeline' => '10-20 Days',
            'popular' => false,
            'tags' => ['courier', 'logistics', 'awb', 'dispatch', 'tracking']
        ],
        [
            'id' => 'soft-hr-payroll',
            'category_id' => 'software-automation',
            'name' => 'HR & Payroll Software',
            'icon' => 'credit-card',
            'short_desc' => 'Employee attendance biometric sync, leave calculations, automated salary slip generation with PF/ESI deductions, and bonus payouts.',
            'deliverables' => ['1-Click Salary Slip PDF', 'Biometric Machine Sync', 'Leave & Holiday Calendar', 'PF / ESIC Calculation Sheet'],
            'timeline' => '6-12 Days',
            'popular' => true,
            'tags' => ['hr', 'payroll', 'salary', 'attendance', 'leaves']
        ],
        [
            'id' => 'soft-accounting-solutions',
            'category_id' => 'software-automation',
            'name' => 'Accounting Management Solutions',
            'icon' => 'dollar-sign',
            'short_desc' => 'Simplified double-entry bookkeeping, ledger accounts, cash flow statements, profit & loss, and trial balance generation.',
            'deliverables' => ['Voucher Entry (Payment/Receipt)', 'Customer & Supplier Ledgers', 'P&L and Balance Sheet', 'Bank Reconciliation'],
            'timeline' => '7-14 Days',
            'popular' => false,
            'tags' => ['accounting', 'ledger', 'balance sheet', 'bookkeeping']
        ],
        [
            'id' => 'soft-appointment-management',
            'category_id' => 'software-automation',
            'name' => 'Appointment Management',
            'icon' => 'calendar',
            'short_desc' => 'Smart online & counter booking calendar for salons, lawyers, consultants, and clinics with automated WhatsApp confirmations.',
            'deliverables' => ['Real-Time Time Slot Grid', 'WhatsApp / SMS Reminders', 'Advance Token Collection', 'Staff Allocation'],
            'timeline' => '4-8 Days',
            'popular' => true,
            'tags' => ['appointment', 'booking', 'slots', 'salon', 'clinic']
        ],
        [
            'id' => 'soft-customer-management',
            'category_id' => 'software-automation',
            'name' => 'Customer Management',
            'icon' => 'heart',
            'short_desc' => 'Loyalty points system, customer purchase history, birthday/anniversary greeting automations, and targeted promotion blasts.',
            'deliverables' => ['Loyalty Points Calculator', 'Customer Lifetime Spending', 'Automated Birthday Discounts', 'WhatsApp Promo Integration'],
            'timeline' => '4-7 Days',
            'popular' => false,
            'tags' => ['customer', 'loyalty', 'membership', 'retention']
        ],
        [
            'id' => 'soft-business-dashboard',
            'category_id' => 'software-automation',
            'name' => 'Business Dashboard',
            'icon' => 'pie-chart',
            'short_desc' => 'Visual live reporting dashboard displaying daily sales, top products, pending payments, expense breakdown, and team KPIs.',
            'deliverables' => ['Real-Time Sales Charts', 'Pending Dues Highlight', 'Mobile Friendly View', 'Export to Excel / PDF'],
            'timeline' => '5-9 Days',
            'popular' => true,
            'tags' => ['dashboard', 'analytics', 'reports', 'charts', 'kpi']
        ],
        [
            'id' => 'soft-custom-software',
            'category_id' => 'software-automation',
            'name' => 'Custom Software Development',
            'icon' => 'code',
            'short_desc' => 'Tailored desktop, web, or cloud software created strictly according to specific proprietary business workflows and protocols.',
            'deliverables' => ['Full Requirements Scoping', 'Modular Source Code Ownership', 'Zero Monthly SaaS Licensing', 'Hands-On Staff Training'],
            'timeline' => '15-40 Days',
            'popular' => true,
            'tags' => ['custom software', 'bespoke', 'tailored', 'desktop', 'cloud']
        ],

        // ----------------------------------------------------------------------
        // CATEGORY C: ADVANCED DOCUMENT SERVICES (48 Services in 3 Subgroups)
        // ----------------------------------------------------------------------
        // C1: DOCUMENT CREATION (15 Services)
        [
            'id' => 'doc-resume-cv-creation',
            'category_id' => 'advanced-documents',
            'subgroup' => 'Document Creation',
            'name' => 'Professional Resume / CV Creation',
            'icon' => 'file-text',
            'short_desc' => 'Modern ATS-friendly resume and curriculum vitae design tailored for freshers, experienced professionals, and government job applicants.',
            'deliverables' => ['ATS Friendly Keyword Layout', 'Editable MS Word + PDF', 'Clean Modern Typography', 'Custom Section Arrangement'],
            'timeline' => '24-48 Hours',
            'popular' => true,
            'tags' => ['resume', 'cv', 'curriculum vitae', 'job application', 'ats friendly']
        ],
        [
            'id' => 'doc-cover-letter',
            'category_id' => 'advanced-documents',
            'subgroup' => 'Document Creation',
            'name' => 'Cover Letter Creation',
            'icon' => 'mail',
            'short_desc' => 'Compelling, job-specific cover letters that capture recruiter attention, showcase relevant qualifications, and match the resume aesthetic.',
            'deliverables' => ['Targeted Role Customization', 'Word & PDF Formats', 'Matching Visual Letterhead'],
            'timeline' => '24 Hours',
            'popular' => false,
            'tags' => ['cover letter', 'job letter', 'hiring', 'application']
        ],
        [
            'id' => 'doc-professional-bio',
            'category_id' => 'advanced-documents',
            'subgroup' => 'Document Creation',
            'name' => 'Professional Bio & Profile',
            'icon' => 'user',
            'short_desc' => 'Polished executive bio and speaker profile for business founders, corporate leaders, doctors, consultants, and public speakers.',
            'deliverables' => ['Short Bio (150 words)', 'Full Story Profile (500 words)', 'Designed One-Pager Sheet'],
            'timeline' => '24-48 Hours',
            'popular' => false,
            'tags' => ['bio', 'executive profile', 'speaker bio', 'founder bio']
        ],
        [
            'id' => 'doc-business-proposal',
            'category_id' => 'advanced-documents',
            'subgroup' => 'Document Creation',
            'name' => 'Business Proposal',
            'icon' => 'briefcase',
            'short_desc' => 'High-impact commercial proposals structured with problem statement, methodology, timelines, commercial scope, and terms.',
            'deliverables' => ['Branded Cover Page', 'Pricing Table Formatting', 'Deliverables Timeline Chart', 'Digital Signature Block'],
            'timeline' => '2-4 Days',
            'popular' => true,
            'tags' => ['proposal', 'business proposal', 'client pitch', 'b2b']
        ],
        [
            'id' => 'doc-project-report',
            'category_id' => 'advanced-documents',
            'subgroup' => 'Document Creation',
            'name' => 'Project Report',
            'icon' => 'book',
            'short_desc' => 'Detailed project reports for academic submissions, college degrees, bank financing, MSME loans, and corporate reviews.',
            'deliverables' => ['Executive Summary', 'Financial Projections / Charts', 'Table of Contents & Citations', 'Bound-Ready PDF & Word'],
            'timeline' => '3-5 Days',
            'popular' => true,
            'tags' => ['project report', 'bank loan report', 'academic report', 'msme']
        ],
        [
            'id' => 'doc-company-profile',
            'category_id' => 'advanced-documents',
            'subgroup' => 'Document Creation',
            'name' => 'Company Profile',
            'icon' => 'award',
            'short_desc' => 'Comprehensive multi-page corporate profile detailing mission, services, achievements, leadership, clients, and contact information.',
            'deliverables' => ['4 to 12 Designed Pages', 'High-Res Print & Web PDF', 'Visual Infographics', 'Editable Source Template'],
            'timeline' => '3-6 Days',
            'popular' => true,
            'tags' => ['company profile', 'corporate brochure', 'brand profile']
        ],
        [
            'id' => 'doc-business-plan',
            'category_id' => 'advanced-documents',
            'subgroup' => 'Document Creation',
            'name' => 'Business Plan Documentation',
            'icon' => 'trending-up',
            'short_desc' => 'Formal investor-ready business plan documentation detailing market opportunity, business model, operating plan, and financials.',
            'deliverables' => ['Market Analysis Section', 'Revenue Model Breakdown', '3-Year Financial Forecast Table', 'Executive Deck'],
            'timeline' => '4-7 Days',
            'popular' => false,
            'tags' => ['business plan', 'startup plan', 'investor pitch', 'funding']
        ],
        [
            'id' => 'doc-product-catalogue',
            'category_id' => 'advanced-documents',
            'subgroup' => 'Document Creation',
            'name' => 'Product Catalogue',
            'icon' => 'grid',
            'short_desc' => 'Structured digital & print product catalog with high-res product photos, descriptions, specifications, SKUs, and pricing.',
            'deliverables' => ['Category Wise Index', 'Clickable WhatsApp Links', 'Print Ready CMYK + Web PDF', 'Product Spec Sheets'],
            'timeline' => '3-6 Days',
            'popular' => true,
            'tags' => ['catalogue', 'product catalog', 'wholesale', 'retail list']
        ],
        [
            'id' => 'doc-company-brochure',
            'category_id' => 'advanced-documents',
            'subgroup' => 'Document Creation',
            'name' => 'Company Brochure',
            'icon' => 'layout',
            'short_desc' => 'Bi-fold or tri-fold brochure documentation designed to introduce company services concisely at exhibitions and customer meetings.',
            'deliverables' => ['Bi-Fold / Tri-Fold Layout', 'Print Ready CMYK Margins', 'Compelling Marketing Copy', 'Web Optimized Version'],
            'timeline' => '2-4 Days',
            'popular' => false,
            'tags' => ['brochure', 'tri-fold', 'pamphlet', 'marketing document']
        ],
        [
            'id' => 'doc-business-presentation',
            'category_id' => 'advanced-documents',
            'subgroup' => 'Document Creation',
            'name' => 'Business Presentation',
            'icon' => 'monitor',
            'short_desc' => 'Custom PowerPoint and Google Slides presentations designed for client sales pitches, investor meetings, and corporate reviews.',
            'deliverables' => ['10-20 Designed Slides', 'Custom Iconography & Charts', 'Editable PPTX + PDF', 'Slide Master Template'],
            'timeline' => '2-4 Days',
            'popular' => true,
            'tags' => ['presentation', 'ppt', 'pitch deck', 'powerpoint', 'slides']
        ],
        [
            'id' => 'doc-quotation-invoice-templates',
            'category_id' => 'advanced-documents',
            'subgroup' => 'Document Creation',
            'name' => 'Quotation & Invoice Templates',
            'icon' => 'file-check',
            'short_desc' => 'Custom branded quotation and tax invoice templates in Word, Excel, and fillable PDF with auto-calculating GST sums.',
            'deliverables' => ['Auto-Sum Excel Formats', 'Branded Word Header/Footer', 'Fillable PDF Version', 'Print Ready Margins'],
            'timeline' => '24-48 Hours',
            'popular' => true,
            'tags' => ['quotation template', 'invoice template', 'bill template', 'gst bill']
        ],
        [
            'id' => 'doc-official-business-letters',
            'category_id' => 'advanced-documents',
            'subgroup' => 'Document Creation',
            'name' => 'Official Business Letters',
            'icon' => 'mail',
            'short_desc' => 'Formal corporate correspondence including partnership proposals, inquiry letters, vendor requests, and bank intimations.',
            'deliverables' => ['Grammar & Tone Scrutiny', 'Official Letterhead Formatting', 'Editable Word File'],
            'timeline' => '24 Hours',
            'popular' => false,
            'tags' => ['business letter', 'formal letter', 'correspondence', 'official']
        ],
        [
            'id' => 'doc-application-drafting',
            'category_id' => 'advanced-documents',
            'subgroup' => 'Document Creation',
            'name' => 'Professional Application Drafting',
            'icon' => 'edit-3',
            'short_desc' => 'Assistance drafting formal applications to government bodies, municipal departments, banks, universities, and utility providers.',
            'deliverables' => ['Accurate Departmental Tone', 'Document Checklist Attached', 'Word & Printable PDF'],
            'timeline' => '24-48 Hours',
            'popular' => true,
            'tags' => ['application', 'government application', 'formal request', 'drafting']
        ],
        [
            'id' => 'doc-sop-documentation',
            'category_id' => 'advanced-documents',
            'subgroup' => 'Document Creation',
            'name' => 'SOP Documentation',
            'icon' => 'check-square',
            'short_desc' => 'Standard Operating Procedure (SOP) manuals detailing operational protocols, staff duties, quality checks, and safety rules.',
            'deliverables' => ['Step-by-Step Flowcharts', 'Role Responsibility Matrix', 'Checklists & Audit Forms'],
            'timeline' => '4-8 Days',
            'popular' => false,
            'tags' => ['sop', 'standard operating procedure', 'process manual', 'protocols']
        ],
        [
            'id' => 'doc-user-manuals',
            'category_id' => 'advanced-documents',
            'subgroup' => 'Document Creation',
            'name' => 'User Manuals',
            'icon' => 'help-circle',
            'short_desc' => 'Comprehensive illustrated instruction guides and technical user manuals for hardware products, software apps, and appliances.',
            'deliverables' => ['Diagrammatic Explanations', 'Troubleshooting Section', 'FAQ & Warranty Notes'],
            'timeline' => '5-10 Days',
            'popular' => false,
            'tags' => ['user manual', 'guide', 'instructions', 'product guide']
        ],

        // C2: DOCUMENT FORMATTING (18 Services)
        [
            'id' => 'doc-word-formatting',
            'category_id' => 'advanced-documents',
            'subgroup' => 'Document Formatting',
            'name' => 'MS Word Document Formatting',
            'icon' => 'file-text',
            'short_desc' => 'Transform messy Word files into beautifully aligned documents with consistent heading styles, table styling, and margins.',
            'deliverables' => ['Automatic Table of Contents', 'Header & Footer Page Numbers', 'Consistent Typography', 'Aligned Spacing'],
            'timeline' => '24 Hours',
            'popular' => true,
            'tags' => ['word formatting', 'ms word', 'page layout', 'alignment']
        ],
        [
            'id' => 'doc-pdf-formatting',
            'category_id' => 'advanced-documents',
            'subgroup' => 'Document Formatting',
            'name' => 'PDF Formatting',
            'icon' => 'file',
            'short_desc' => 'Fine-tuning margins, bleed, orientations (portrait/landscape), page numbers, and bookmarks in complex multi-page PDF documents.',
            'deliverables' => ['Uniform Orientation', 'Clickable Bookmarks', 'Page Number Insertion', 'High DPI Output'],
            'timeline' => '24 Hours',
            'popular' => false,
            'tags' => ['pdf formatting', 'pdf layout', 'bookmarks', 'page numbers']
        ],
        [
            'id' => 'doc-pdf-editing',
            'category_id' => 'advanced-documents',
            'subgroup' => 'Document Formatting',
            'name' => 'PDF Editing',
            'icon' => 'edit-2',
            'short_desc' => 'Direct text editing, date corrections, logo replacements, and section revisions in existing PDF documents without source files.',
            'deliverables' => ['Font Matching Text Edit', 'Image & Signature Replacement', 'Clean Re-Export'],
            'timeline' => '24 Hours',
            'popular' => true,
            'tags' => ['pdf edit', 'edit pdf', 'text correction', 'modify pdf']
        ],
        [
            'id' => 'doc-pdf-conversion',
            'category_id' => 'advanced-documents',
            'subgroup' => 'Document Formatting',
            'name' => 'PDF Conversion',
            'icon' => 'repeat',
            'short_desc' => 'High-fidelity conversion between PDF, Word, Excel, PowerPoint, Text, and HTML while preserving tables and formatting.',
            'deliverables' => ['Retained Tables & Margins', 'Editable Destination File', 'Zero Missing Fonts'],
            'timeline' => 'Same Day',
            'popular' => true,
            'tags' => ['pdf conversion', 'convert pdf', 'format change']
        ],
        [
            'id' => 'doc-pdf-compression',
            'category_id' => 'advanced-documents',
            'subgroup' => 'Document Formatting',
            'name' => 'PDF Compression',
            'icon' => 'minimize-2',
            'short_desc' => 'Reduce heavy PDF file sizes to under 100KB, 200KB, 500KB or 1MB for portal uploads (UPSC, SSC, tenders, banks) without blurring text.',
            'deliverables' => ['Exact Target File Size Compliance', 'Crisp Readable Text', 'Instant Delivery'],
            'timeline' => 'Same Day',
            'popular' => true,
            'tags' => ['pdf compress', 'reduce pdf size', 'online upload', 'ssc', 'upsc']
        ],
        [
            'id' => 'doc-pdf-merging-splitting',
            'category_id' => 'advanced-documents',
            'subgroup' => 'Document Formatting',
            'name' => 'PDF Merging & Splitting',
            'icon' => 'git-merge',
            'short_desc' => 'Combine dozens of separate certificates and bills into one organized master PDF, or extract specific pages cleanly.',
            'deliverables' => ['Custom Page Sequence', 'Single Unified PDF File', 'Individual Extracted Pages'],
            'timeline' => 'Same Day',
            'popular' => true,
            'tags' => ['pdf merge', 'split pdf', 'combine certificates', 'reorder pages']
        ],
        [
            'id' => 'doc-pdf-to-word',
            'category_id' => 'advanced-documents',
            'subgroup' => 'Document Formatting',
            'name' => 'PDF to Word',
            'icon' => 'file-plus',
            'short_desc' => 'Flawless conversion of complex multi-column PDFs into fully editable Microsoft Word (.docx) files with matching formatting.',
            'deliverables' => ['100% Editable Text & Tables', 'Proper Heading Hierarchy', 'Editable Embedded Graphics'],
            'timeline' => '24 Hours',
            'popular' => true,
            'tags' => ['pdf to word', 'docx conversion', 'editable word']
        ],
        [
            'id' => 'doc-word-to-pdf',
            'category_id' => 'advanced-documents',
            'subgroup' => 'Document Formatting',
            'name' => 'Word to PDF',
            'icon' => 'file-minus',
            'short_desc' => 'Professional print-ready and web-ready PDF generation with embedded fonts, clickable hyperlinks, and standard color profiles.',
            'deliverables' => ['Embedded Vector Fonts', 'Clickable Links Preserved', 'Universal Device Rendering'],
            'timeline' => 'Same Day',
            'popular' => false,
            'tags' => ['word to pdf', 'export pdf', 'print ready']
        ],
        [
            'id' => 'doc-excel-formatting',
            'category_id' => 'advanced-documents',
            'subgroup' => 'Document Formatting',
            'name' => 'Excel Formatting',
            'icon' => 'table',
            'short_desc' => 'Clean, professional spreadsheet design with color-coded headers, currency symbols, borders, freeze panes, and print area setups.',
            'deliverables' => ['A4 / Landscape Print Fit', 'Conditional Formatting Rules', 'Formula Protection', 'Professional Color Palette'],
            'timeline' => '24 Hours',
            'popular' => true,
            'tags' => ['excel formatting', 'spreadsheet styling', 'excel layout']
        ],
        [
            'id' => 'doc-excel-data-cleaning',
            'category_id' => 'advanced-documents',
            'subgroup' => 'Document Formatting',
            'name' => 'Excel Data Cleaning',
            'icon' => 'filter',
            'short_desc' => 'Deduplication, phone number standardization, address splitting, date formatting, and correction of messy raw customer records.',
            'deliverables' => ['Duplicate Removal', 'Standardized 10-Digit Mobile Numbers', 'Proper Case Names', 'Clean Column Mapping'],
            'timeline' => '24-48 Hours',
            'popular' => true,
            'tags' => ['data cleaning', 'excel cleanup', 'deduplication', 'contact cleaning']
        ],
        [
            'id' => 'doc-excel-reports',
            'category_id' => 'advanced-documents',
            'subgroup' => 'Document Formatting',
            'name' => 'Excel Reports',
            'icon' => 'bar-chart-2',
            'short_desc' => 'Automated Pivot Tables, VLOOKUP / XLOOKUP formulas, interactive drop-down filters, and summary charts for executive reviews.',
            'deliverables' => ['Automated Calculation Formulas', 'Dynamic Pivot Summaries', 'Executive Visual Charts'],
            'timeline' => '24-48 Hours',
            'popular' => false,
            'tags' => ['excel reports', 'pivot table', 'vlookup', 'summary sheets']
        ],
        [
            'id' => 'doc-ppt-design',
            'category_id' => 'advanced-documents',
            'subgroup' => 'Document Formatting',
            'name' => 'PowerPoint Presentation Design',
            'icon' => 'sliders',
            'short_desc' => 'Visual enhancement of dull, text-heavy PowerPoint slides with sleek infographics, clean icons, bold typography, and transitions.',
            'deliverables' => ['Modern Slide Redesign', 'Custom Vector Icons', 'High Impact Visual Hierarchy'],
            'timeline' => '2-3 Days',
            'popular' => true,
            'tags' => ['ppt design', 'slide redesign', 'infographics', 'powerpoint']
        ],
        [
            'id' => 'doc-document-translation',
            'category_id' => 'advanced-documents',
            'subgroup' => 'Document Formatting',
            'name' => 'Document Translation',
            'icon' => 'globe',
            'short_desc' => 'Accurate human translation and localized formatting between English, Hindi, and regional Indian languages for letters, ads, and guides.',
            'deliverables' => ['Contextual Meaning Accuracy', 'Retained Formatting & Tables', 'Proofread Final Draft'],
            'timeline' => '24-48 Hours',
            'popular' => true,
            'tags' => ['translation', 'hindi to english', 'english to hindi', 'regional']
        ],
        [
            'id' => 'doc-document-typing',
            'category_id' => 'advanced-documents',
            'subgroup' => 'Document Formatting',
            'name' => 'Document Typing',
            'icon' => 'keyboard',
            'short_desc' => 'Fast, accurate typing service for handwritten manuscripts, college notes, court papers, and old books in Hindi and English with zero errors.',
            'deliverables' => ['Hindi (Mangal/Kruti Dev) & English', '99.9% Typo-Free Proofreading', 'Word & PDF Formats'],
            'timeline' => '24-48 Hours',
            'popular' => true,
            'tags' => ['typing', 'data entry', 'manuscript typing', 'hindi typing']
        ],
        [
            'id' => 'doc-scanned-to-text',
            'category_id' => 'advanced-documents',
            'subgroup' => 'Document Formatting',
            'name' => 'Scanned Document to Editable Text',
            'icon' => 'file-text',
            'short_desc' => 'Convert physical paper scans, old deeds, or photo documents into cleanly typed, fully editable Microsoft Word text documents.',
            'deliverables' => ['Clean Text Extraction', 'Table Reconstruction', 'Grammar Check & Alignment'],
            'timeline' => '24 Hours',
            'popular' => true,
            'tags' => ['scanned to text', 'paper to word', 'scan conversion']
        ],
        [
            'id' => 'doc-ocr-services',
            'category_id' => 'advanced-documents',
            'subgroup' => 'Document Formatting',
            'name' => 'OCR Services',
            'icon' => 'search',
            'short_desc' => 'High-accuracy Optical Character Recognition (OCR) converting non-searchable image PDFs and receipts into searchable text documents.',
            'deliverables' => ['Searchable PDF (Text behind image)', 'Extracted Text in Word/Excel', 'Batch Processing Available'],
            'timeline' => '24 Hours',
            'popular' => false,
            'tags' => ['ocr', 'optical character recognition', 'searchable pdf']
        ],
        [
            'id' => 'doc-image-to-pdf',
            'category_id' => 'advanced-documents',
            'subgroup' => 'Document Formatting',
            'name' => 'Image to PDF',
            'icon' => 'image',
            'short_desc' => 'Convert multiple mobile photos, JPGs, and PNGs of documents into a single straightened, cleaned, and properly cropped A4 PDF.',
            'deliverables' => ['Color Correction & Shadow Removal', 'Straightened Angles', 'Uniform A4 Ratio'],
            'timeline' => 'Same Day',
            'popular' => true,
            'tags' => ['image to pdf', 'jpg to pdf', 'photo scan', 'document clean']
        ],
        [
            'id' => 'doc-layout-design',
            'category_id' => 'advanced-documents',
            'subgroup' => 'Document Formatting',
            'name' => 'Professional Document Layout Design',
            'icon' => 'layout',
            'short_desc' => 'Publishing-grade page layout for magazines, annual reports, handbooks, whitepapers, and books using Adobe InDesign and Word.',
            'deliverables' => ['Print Margin Grids & Bleeds', 'Typography Pairing Rules', 'High-Res Vector Output'],
            'timeline' => '3-6 Days',
            'popular' => false,
            'tags' => ['layout design', 'indesign', 'desktop publishing', 'dtp', 'annual report']
        ],

        // C3: BUSINESS & CORPORATE DOCUMENTATION (15 Services)
        [
            'id' => 'doc-company-profile-corp',
            'category_id' => 'advanced-documents',
            'subgroup' => 'Business & Corporate Documentation',
            'name' => 'Company Profile',
            'icon' => 'briefcase',
            'short_desc' => 'Formal corporate introduction document crafted with corporate governance notes, capability statements, and compliance credentials.',
            'deliverables' => ['Corporate Structure Chart', 'Quality & Safety Commitments', 'Client Reference Highlights'],
            'timeline' => '3-5 Days',
            'popular' => true,
            'tags' => ['corporate profile', 'company profile', 'credentials']
        ],
        [
            'id' => 'doc-business-agreements',
            'category_id' => 'advanced-documents',
            'subgroup' => 'Business & Corporate Documentation',
            'name' => 'Business Agreements – formatting & drafting assistance',
            'icon' => 'file-text',
            'short_desc' => 'Drafting and formatting assistance for general commercial contracts, distribution agreements, and vendor memoranda. (Non-legal drafting aid).',
            'deliverables' => ['Standard Commercial Clauses', 'Custom Scope & Payment Terms', 'Defined Notice Periods'],
            'timeline' => '2-3 Days',
            'popular' => true,
            'tags' => ['business agreement', 'contract draft', 'vendor agreement', 'mou']
        ],
        [
            'id' => 'doc-service-agreements',
            'category_id' => 'advanced-documents',
            'subgroup' => 'Business & Corporate Documentation',
            'name' => 'Service Agreements – drafting assistance',
            'icon' => 'check-circle',
            'short_desc' => 'Master Services Agreement (MSA) and Service Level Agreement (SLA) drafting assistance outlining deliverable scopes and payment schedules.',
            'deliverables' => ['Scope of Work Annexure', 'Milestone Payment Clauses', 'IP Ownership Clarification'],
            'timeline' => '2-3 Days',
            'popular' => true,
            'tags' => ['service agreement', 'msa', 'sla', 'contract drafting']
        ],
        [
            'id' => 'doc-nda-preparation',
            'category_id' => 'advanced-documents',
            'subgroup' => 'Business & Corporate Documentation',
            'name' => 'NDA Document Preparation Assistance',
            'icon' => 'lock',
            'short_desc' => 'Unilateral and mutual Non-Disclosure Agreement (NDA) formatting assistance to protect trade secrets and sensitive discussions.',
            'deliverables' => ['Mutual & One-Way Formats', 'Defined Confidential Information Bounds', 'Duration & Remedies Clauses'],
            'timeline' => '24 Hours',
            'popular' => true,
            'tags' => ['nda', 'non disclosure', 'confidentiality', 'agreement']
        ],
        [
            'id' => 'doc-employment-offer-letter',
            'category_id' => 'advanced-documents',
            'subgroup' => 'Business & Corporate Documentation',
            'name' => 'Employment Offer Letter',
            'icon' => 'user-plus',
            'short_desc' => 'Standard formal job offer letters including role designation, CTC breakdown, joining date, and initial acceptance formalities.',
            'deliverables' => ['CTC & Allowance Annexure', 'Probation Conditions', 'Acceptance Counter-Sign Slip'],
            'timeline' => '24 Hours',
            'popular' => true,
            'tags' => ['offer letter', 'employment offer', 'job letter', 'hr document']
        ],
        [
            'id' => 'doc-appointment-letter',
            'category_id' => 'advanced-documents',
            'subgroup' => 'Business & Corporate Documentation',
            'name' => 'Appointment Letter',
            'icon' => 'check-square',
            'short_desc' => 'Comprehensive employee appointment contract detailing working hours, code of conduct, leave policies, and termination terms.',
            'deliverables' => ['Detailed Employment Terms', 'Confidentiality Undertaking', 'Official Letterhead Formatting'],
            'timeline' => '24 Hours',
            'popular' => true,
            'tags' => ['appointment letter', 'joining letter', 'employment contract']
        ],
        [
            'id' => 'doc-experience-letter',
            'category_id' => 'advanced-documents',
            'subgroup' => 'Business & Corporate Documentation',
            'name' => 'Experience Letter',
            'icon' => 'award',
            'short_desc' => 'Official service certificate acknowledging an employee’s tenure, primary responsibilities, and exemplary performance.',
            'deliverables' => ['Tenure Verification', 'Role Designation', 'Letterhead Alignment'],
            'timeline' => '24 Hours',
            'popular' => true,
            'tags' => ['experience letter', 'service certificate', 'relieving letter']
        ],
        [
            'id' => 'doc-relieving-letter',
            'category_id' => 'advanced-documents',
            'subgroup' => 'Business & Corporate Documentation',
            'name' => 'Relieving Letter',
            'icon' => 'user-minus',
            'short_desc' => 'Formal relieving acknowledgment letter confirming that employee dues are cleared and the employee is relieved from duties.',
            'deliverables' => ['No Dues Clearance Notation', 'Official Relief Date', 'Authorized Signatory Layout'],
            'timeline' => '24 Hours',
            'popular' => false,
            'tags' => ['relieving letter', 'exit document', 'no dues']
        ],
        [
            'id' => 'doc-hr-policy',
            'category_id' => 'advanced-documents',
            'subgroup' => 'Business & Corporate Documentation',
            'name' => 'HR Policy Documentation',
            'icon' => 'shield',
            'short_desc' => 'Documentation covering workplace attendance, leaves, dress code, harassment policy (POSH basics), performance appraisals, and IT usage.',
            'deliverables' => ['Leave Policy Structure', 'Disciplinary Workflow', 'Workplace Conduct Rules'],
            'timeline' => '3-5 Days',
            'popular' => false,
            'tags' => ['hr policy', 'company policy', 'workplace rules', 'posh']
        ],
        [
            'id' => 'doc-employee-handbook',
            'category_id' => 'advanced-documents',
            'subgroup' => 'Business & Corporate Documentation',
            'name' => 'Employee Handbook',
            'icon' => 'book-open',
            'short_desc' => 'Engaging welcome handbook for new employees covering company culture, core values, perks, benefits, and office directory.',
            'deliverables' => ['Onboarding Roadmaps', 'Leave & Expense Guidelines', 'FAQ for New Joiners'],
            'timeline' => '4-7 Days',
            'popular' => false,
            'tags' => ['employee handbook', 'staff guide', 'onboarding document']
        ],
        [
            'id' => 'doc-business-policy-docs',
            'category_id' => 'advanced-documents',
            'subgroup' => 'Business & Corporate Documentation',
            'name' => 'Business Policy Documents',
            'icon' => 'file-text',
            'short_desc' => 'Official website and corporate operational policies including Privacy Policy, Terms of Service, Refund Policy, and Shipping Policy.',
            'deliverables' => ['Website Compliance Ready', 'Tailored Business Model Rules', 'Payment Gateway Approved Copy'],
            'timeline' => '24-48 Hours',
            'popular' => true,
            'tags' => ['privacy policy', 'terms and conditions', 'refund policy', 'shipping policy']
        ],
        [
            'id' => 'doc-tender-documentation',
            'category_id' => 'advanced-documents',
            'subgroup' => 'Business & Corporate Documentation',
            'name' => 'Tender Documentation Assistance',
            'icon' => 'clipboard',
            'short_desc' => 'Compilation, indexing, page-numbering, and formatting assistance for GeM portal, state tenders, and government bids.',
            'deliverables' => ['Tender Checklist Verification', 'Index & Bookmark Layout', 'Clean PDF Size Optimizations for GeM'],
            'timeline' => '2-4 Days',
            'popular' => true,
            'tags' => ['tender', 'gem portal', 'government bid', 'tender compilation']
        ],
        [
            'id' => 'doc-technical-documentation',
            'category_id' => 'advanced-documents',
            'subgroup' => 'Business & Corporate Documentation',
            'name' => 'Technical Documentation',
            'icon' => 'cpu',
            'short_desc' => 'Structured architectural blueprints, software documentation, API specs, and technical system specifications.',
            'deliverables' => ['System Architecture Diagrams', 'API Parameter Guides', 'Data Flow Diagrams'],
            'timeline' => '4-8 Days',
            'popular' => false,
            'tags' => ['technical documentation', 'software manual', 'api specs']
        ],
        [
            'id' => 'doc-process-documentation',
            'category_id' => 'advanced-documents',
            'subgroup' => 'Business & Corporate Documentation',
            'name' => 'Process Documentation',
            'icon' => 'git-branch',
            'short_desc' => 'Step-by-step documentation of manufacturing, customer service, or retail operations for franchise expansion and employee training.',
            'deliverables' => ['Process Flowcharts', 'Action Step Checkpoints', 'Quality Verification Criteria'],
            'timeline' => '3-6 Days',
            'popular' => false,
            'tags' => ['process documentation', 'workflows', 'franchise manual']
        ],
        [
            'id' => 'doc-sop-manuals-corp',
            'category_id' => 'advanced-documents',
            'subgroup' => 'Business & Corporate Documentation',
            'name' => 'SOP Manuals',
            'icon' => 'check-square',
            'short_desc' => 'Comprehensive standard operating manuals for businesses to standardize daily shop, kitchen, or branch operations.',
            'deliverables' => ['Daily Opening / Closing SOP', 'Emergency Incident Response', 'Quality Audit Templates'],
            'timeline' => '4-7 Days',
            'popular' => false,
            'tags' => ['sop manual', 'operations guide', 'retail sop']
        ],

        // ----------------------------------------------------------------------
        // CATEGORY D: GRAPHIC DESIGN & BRANDING (16 Services)
        // ----------------------------------------------------------------------
        [
            'id' => 'design-logo-design',
            'category_id' => 'graphic-design',
            'name' => 'Logo Design',
            'icon' => 'pen-tool',
            'short_desc' => 'Distinctive, memorable vector logo design delivered in all required formats (AI, EPS, SVG, PNG, PDF) with full copyright transfer.',
            'deliverables' => ['3-4 Unique Concepts', 'Vector Master Files (SVG, EPS, AI)', 'High-Res Transparent PNGs', 'Monochrome & Color Variations'],
            'timeline' => '2-4 Days',
            'popular' => true,
            'tags' => ['logo', 'logo design', 'branding', 'vector', 'emblem']
        ],
        [
            'id' => 'design-business-card',
            'category_id' => 'graphic-design',
            'name' => 'Business Card',
            'icon' => 'credit-card',
            'short_desc' => 'Modern, premium visiting cards with QR codes linking to WhatsApp, website, or digital contact vCard.',
            'deliverables' => ['Double-Sided Design', 'Print-Ready CMYK 300DPI', 'Embedded QR Code', 'Editable Master File'],
            'timeline' => '24 Hours',
            'popular' => true,
            'tags' => ['business card', 'visiting card', 'stationery', 'qr card']
        ],
        [
            'id' => 'design-letterhead-design',
            'category_id' => 'graphic-design',
            'name' => 'Letterhead Design',
            'icon' => 'file-text',
            'short_desc' => 'Official company letterhead delivered as print-ready PDF and editable Microsoft Word template for daily billing and correspondence.',
            'deliverables' => ['Print-Ready PDF with Bleeds', 'Editable MS Word Letterhead', 'Header & Footer Margins'],
            'timeline' => '24 Hours',
            'popular' => false,
            'tags' => ['letterhead', 'stationery', 'corporate identity', 'word letterhead']
        ],
        [
            'id' => 'design-visiting-card',
            'category_id' => 'graphic-design',
            'name' => 'Visiting Card',
            'icon' => 'user-check',
            'short_desc' => 'Specialized visiting card layouts for local merchants, contractors, doctors, and agents with clear contact callouts.',
            'deliverables' => ['Standard & Square Card Sizes', 'Spot UV / Foil Guideline Layer', 'High Resolution CMYK'],
            'timeline' => '24 Hours',
            'popular' => false,
            'tags' => ['visiting card', 'card printing', 'merchant card']
        ],
        [
            'id' => 'design-company-profile-design',
            'category_id' => 'graphic-design',
            'name' => 'Company Profile Design',
            'icon' => 'layout',
            'short_desc' => 'Magazine-grade visual design for company profiles, annual reviews, and investor pitch presentations.',
            'deliverables' => ['Creative Multi-Page Layout', 'Custom Infographics & Icons', 'Print & Web Optimized Files'],
            'timeline' => '3-6 Days',
            'popular' => true,
            'tags' => ['profile design', 'magazine layout', 'brochure design']
        ],
        [
            'id' => 'design-brochure-design',
            'category_id' => 'graphic-design',
            'name' => 'Brochure Design',
            'icon' => 'book-open',
            'short_desc' => 'Eye-catching bi-fold, tri-fold, and booklet brochures engineered to explain services and products clearly.',
            'deliverables' => ['Bi-Fold / Tri-Fold Options', 'Print-Ready Bleed & Trim Marks', 'High Impact Visual Sections'],
            'timeline' => '2-4 Days',
            'popular' => true,
            'tags' => ['brochure design', 'tri-fold brochure', 'pamphlet', 'leaflet']
        ],
        [
            'id' => 'design-product-catalogue',
            'category_id' => 'graphic-design',
            'name' => 'Product Catalogue',
            'icon' => 'grid',
            'short_desc' => 'Stunning catalog layouts displaying products with crisp photography, specs, pricing, and QR codes for instant ordering.',
            'deliverables' => ['Grid / Modern Showcases', 'Clickable PDF Hyperlinks', 'Color Accurate CMYK Print Files'],
            'timeline' => '3-7 Days',
            'popular' => false,
            'tags' => ['catalogue design', 'lookbook', 'product design']
        ],
        [
            'id' => 'design-social-media-creatives',
            'category_id' => 'graphic-design',
            'name' => 'Social Media Creatives',
            'icon' => 'share-2',
            'short_desc' => 'High-engagement graphics for Instagram, Facebook, LinkedIn, and WhatsApp statuses tailored to your brand identity.',
            'deliverables' => ['Monthly Creative Packs (10-30 Posts)', 'Festival & Promotional Themes', 'High Resolution 1080x1080 & 1080x1920'],
            'timeline' => '2-3 Days',
            'popular' => true,
            'tags' => ['social media design', 'instagram post', 'facebook post', 'creatives']
        ],
        [
            'id' => 'design-instagram-posts',
            'category_id' => 'graphic-design',
            'name' => 'Instagram Posts',
            'icon' => 'instagram',
            'short_desc' => 'Trendy Instagram square posts, carousel slides, and story graphics that boost followers, likes, and inquiries.',
            'deliverables' => ['Single Posts & Multi-Slide Carousels', 'Story Formats (9:16)', 'Brand-Consistent Color Palette'],
            'timeline' => '24-48 Hours',
            'popular' => true,
            'tags' => ['instagram', 'carousels', 'reels cover', 'stories']
        ],
        [
            'id' => 'design-facebook-ads-creatives',
            'category_id' => 'graphic-design',
            'name' => 'Facebook Ads Creatives',
            'icon' => 'facebook',
            'short_desc' => 'High-converting ad banners engineered according to Meta ad guidelines (clean text ratio, bold hooks, clear CTAs).',
            'deliverables' => ['Feed & Story Aspect Ratios', 'A/B Testing Variants', 'Click-Focused Visual Hooks'],
            'timeline' => '24-48 Hours',
            'popular' => true,
            'tags' => ['facebook ads', 'ad creatives', 'meta ads', 'banners']
        ],
        [
            'id' => 'design-youtube-thumbnails',
            'category_id' => 'graphic-design',
            'name' => 'YouTube Thumbnails',
            'icon' => 'video',
            'short_desc' => 'Click-through-rate (CTR) boosting thumbnails with expressive face cutouts, bold text, and high contrast colors.',
            'deliverables' => ['1280x720 HD Resolution', 'High CTR Visual Design', 'Fast 12-24 Hour Turnaround'],
            'timeline' => '24 Hours',
            'popular' => true,
            'tags' => ['youtube', 'thumbnail', 'video thumbnail', 'ctr']
        ],
        [
            'id' => 'design-promotional-banners',
            'category_id' => 'graphic-design',
            'name' => 'Promotional Banners',
            'icon' => 'flag',
            'short_desc' => 'Website hero sliders, festival offer banners, sale announcements, and email newsletter headers.',
            'deliverables' => ['Web Optimized PNG / WebP', 'Mobile & Desktop Dimensions', 'Editable Source PSD/Figma'],
            'timeline' => '24 Hours',
            'popular' => false,
            'tags' => ['banners', 'web banner', 'hero banner', 'promotions']
        ],
        [
            'id' => 'design-marketing-posters',
            'category_id' => 'graphic-design',
            'name' => 'Marketing Posters',
            'icon' => 'image',
            'short_desc' => 'Large-format printable posters and standees for shopfronts, events, coaching admissions, and exhibitions.',
            'deliverables' => ['A3, A2, & Standee (6x3 ft) Sizes', 'High-Res CMYK Vector Formats', 'Bold Legible Typography'],
            'timeline' => '24-48 Hours',
            'popular' => true,
            'tags' => ['poster', 'standee', 'banner printing', 'flex design']
        ],
        [
            'id' => 'design-brand-identity',
            'category_id' => 'graphic-design',
            'name' => 'Brand Identity Design',
            'icon' => 'compass',
            'short_desc' => 'Complete corporate visual identity guidelines: primary & secondary logos, typography rules, color palettes, and stationery.',
            'deliverables' => ['Brand Style Guide PDF', 'Color Codes (HEX, RGB, CMYK, Pantone)', 'Typography Font Files', 'Stationery Mockups'],
            'timeline' => '5-10 Days',
            'popular' => false,
            'tags' => ['brand identity', 'style guide', 'corporate identity', 'branding']
        ],
        [
            'id' => 'design-packaging-design',
            'category_id' => 'graphic-design',
            'name' => 'Packaging Design',
            'icon' => 'package',
            'short_desc' => 'Product box packaging, pouch labels, bottle stickers, and carton designs compliant with barcode and FSSAI standards.',
            'deliverables' => ['Die-Line Cut Alignment', '3D Photorealistic Mockup', 'Print-Ready Separation Layers'],
            'timeline' => '4-8 Days',
            'popular' => false,
            'tags' => ['packaging', 'box design', 'label design', 'pouch']
        ],
        [
            'id' => 'design-certificate-design',
            'category_id' => 'graphic-design',
            'name' => 'Certificate Design',
            'icon' => 'award',
            'short_desc' => 'Prestigious completion certificates, seminar awards, and sports appreciation certificates for schools and training institutes.',
            'deliverables' => ['Print Ready A4 Size', 'Gold Foil & Security Border Themes', 'Editable Name/Date Template in Word'],
            'timeline' => '24 Hours',
            'popular' => true,
            'tags' => ['certificate', 'award', 'diploma', 'training certificate']
        ],

        // ----------------------------------------------------------------------
        // CATEGORY E: DIGITAL MARKETING & SEO (16 Services)
        // ----------------------------------------------------------------------
        [
            'id' => 'mkt-seo-services',
            'category_id' => 'digital-marketing',
            'name' => 'SEO Services',
            'icon' => 'search',
            'short_desc' => 'Comprehensive Search Engine Optimization to rank websites on page 1 of Google for high-intent business keywords.',
            'deliverables' => ['Keyword Research & Competitor Gap Analysis', 'On-Page Optimization', 'High-Authority Backlink Building', 'Monthly Ranking Progress Reports'],
            'timeline' => 'Monthly Retainer',
            'popular' => true,
            'tags' => ['seo', 'search engine optimization', 'google ranking', 'organic traffic']
        ],
        [
            'id' => 'mkt-local-seo',
            'category_id' => 'digital-marketing',
            'name' => 'Local SEO',
            'icon' => 'map-pin',
            'short_desc' => 'Rank local businesses in the Google Maps "Local 3-Pack" when nearby customers search "near me" on mobile devices.',
            'deliverables' => ['Google Business Profile Optimization', 'Local Citations & Directory Listings', 'Geo-Tagged Photo Uploads', 'Review Generation Strategy'],
            'timeline' => 'Monthly Retainer',
            'popular' => true,
            'tags' => ['local seo', 'near me', 'google maps', 'local business']
        ],
        [
            'id' => 'mkt-gmb-setup',
            'category_id' => 'digital-marketing',
            'name' => 'Google Business Profile Setup',
            'icon' => 'map',
            'short_desc' => 'Official creation, verification assistance, category selection, business hours, and photos setup on Google Maps.',
            'deliverables' => ['Profile Verification Assistance', 'Complete Business Information Fill', 'Product & Service Catalog Upload', 'QR Code for Customer Reviews'],
            'timeline' => '2-5 Days',
            'popular' => true,
            'tags' => ['google business profile', 'gmb', 'google map listing', 'verification']
        ],
        [
            'id' => 'mkt-google-ads',
            'category_id' => 'digital-marketing',
            'name' => 'Google Ads',
            'icon' => 'target',
            'short_desc' => 'High-ROI Google Search & Display ad campaigns to capture urgent customer calls and inquiries immediately.',
            'deliverables' => ['Negative Keyword Filtering', 'Ad Copywriting & Extensions', 'Conversion Tracking Setup', 'Daily Bid Optimization'],
            'timeline' => 'Campaign Based',
            'popular' => true,
            'tags' => ['google ads', 'ppc', 'search ads', 'adwords', 'pay per click']
        ],
        [
            'id' => 'mkt-meta-ads',
            'category_id' => 'digital-marketing',
            'name' => 'Meta Ads',
            'icon' => 'layers',
            'short_desc' => 'Facebook and Instagram sponsored ad funnels with precise demographic, interest, and geographic radius targeting.',
            'deliverables' => ['Audience Persona Building', 'Custom Lead Generation Forms', 'Pixel & CAPI Server Tracking', 'Weekly Performance Reports'],
            'timeline' => 'Campaign Based',
            'popular' => true,
            'tags' => ['meta ads', 'facebook ads', 'instagram ads', 'lead ads']
        ],
        [
            'id' => 'mkt-instagram-marketing',
            'category_id' => 'digital-marketing',
            'name' => 'Instagram Marketing',
            'icon' => 'instagram',
            'short_desc' => 'Grow an active, engaged follower base through viral Reels, trend participation, hashtag strategies, and direct DM outreach.',
            'deliverables' => ['Reels Scripting & Video Editing', 'Bio & Story Highlight Optimization', 'Hashtag Matrix', 'DM Lead Nurturing'],
            'timeline' => 'Monthly Retainer',
            'popular' => true,
            'tags' => ['instagram growth', 'reels', 'followers', 'instagram marketing']
        ],
        [
            'id' => 'mkt-facebook-marketing',
            'category_id' => 'digital-marketing',
            'name' => 'Facebook Marketing',
            'icon' => 'facebook',
            'short_desc' => 'Manage business pages, community groups, event promotions, and customer reviews to maintain an active digital footprint.',
            'deliverables' => ['Page Management & Moderation', 'Weekly Scheduled Posts', 'Community Engagement', 'Review Management'],
            'timeline' => 'Monthly Retainer',
            'popular' => false,
            'tags' => ['facebook', 'facebook page', 'community', 'social media']
        ],
        [
            'id' => 'mkt-social-media-management',
            'category_id' => 'digital-marketing',
            'name' => 'Social Media Management',
            'icon' => 'share-2',
            'short_desc' => 'Full-service handling of all social channels: content calendar, creative design, copywriting, posting, and comment replies.',
            'deliverables' => ['Multi-Platform Content Calendar', '15-30 Custom Graphic Posts / Month', 'Audience Interaction & Replies', 'Monthly Analytics Deck'],
            'timeline' => 'Monthly Retainer',
            'popular' => true,
            'tags' => ['smm', 'social media management', 'content calendar']
        ],
        [
            'id' => 'mkt-content-writing',
            'category_id' => 'digital-marketing',
            'name' => 'Content Writing',
            'icon' => 'file-text',
            'short_desc' => 'Professional, plagiarism-free written content for company brochures, case studies, press releases, and marketing documents.',
            'deliverables' => ['100% Original Plagiarism Free', 'SEO Friendly Keyword Inclusion', 'Compelling Brand Voice'],
            'timeline' => '2-4 Days',
            'popular' => false,
            'tags' => ['content writing', 'copywriting', 'articles', 'brand voice']
        ],
        [
            'id' => 'mkt-blog-writing',
            'category_id' => 'digital-marketing',
            'name' => 'Blog Writing',
            'icon' => 'edit-3',
            'short_desc' => 'Informative, well-researched blog posts optimized to answer user queries and attract organic search visitors to websites.',
            'deliverables' => ['800-1500 Word In-Depth Posts', 'Internal Linking Strategy', 'Featured Image Included', 'Meta Title & Description'],
            'timeline' => '2-3 Days',
            'popular' => false,
            'tags' => ['blog writing', 'articles', 'seo blogs', 'organic traffic']
        ],
        [
            'id' => 'mkt-website-content',
            'category_id' => 'digital-marketing',
            'name' => 'Website Content',
            'icon' => 'layout',
            'short_desc' => 'High-converting copy for Home, About, Services, and Landing Pages that clearly conveys value and drives visitors to take action.',
            'deliverables' => ['Page-Wise Content Mapping', 'Engaging Value Propositions', 'Action-Oriented CTAs'],
            'timeline' => '3-5 Days',
            'popular' => true,
            'tags' => ['website copy', 'landing page copy', 'value proposition']
        ],
        [
            'id' => 'mkt-lead-generation',
            'category_id' => 'digital-marketing',
            'name' => 'Lead Generation',
            'icon' => 'filter',
            'short_desc' => 'Dedicated B2B and B2C lead generation campaigns that deliver verified phone numbers and names of genuine prospects.',
            'deliverables' => ['Qualified Phone / WhatsApp Leads', 'Real-Time CRM & Sheet Sync', 'Zero Junk Lead Guarantee Rules'],
            'timeline' => 'Campaign Based',
            'popular' => true,
            'tags' => ['lead generation', 'b2b leads', 'customer acquisition']
        ],
        [
            'id' => 'mkt-email-marketing',
            'category_id' => 'digital-marketing',
            'name' => 'Email Marketing',
            'icon' => 'mail',
            'short_desc' => 'Automated email newsletter campaigns, welcome drips, and festival promotional broadcasts with high inbox delivery rates.',
            'deliverables' => ['HTML Email Template Design', 'Spam Score Optimization', 'Automated Welcome Series', 'Open & Click Tracking'],
            'timeline' => 'Campaign Based',
            'popular' => false,
            'tags' => ['email marketing', 'newsletter', 'drip campaign']
        ],
        [
            'id' => 'mkt-whatsapp-marketing-setup',
            'category_id' => 'digital-marketing',
            'name' => 'WhatsApp Marketing Setup',
            'icon' => 'message-circle',
            'short_desc' => 'Setup of Official WhatsApp Business API, green tick verification guidance, automated welcome greetings, and promotional broadcasts.',
            'deliverables' => ['WhatsApp Business API Registration', 'Pre-Approved Message Templates', 'Automated Quick Replies', 'Broadcast List Setup'],
            'timeline' => '3-7 Days',
            'popular' => true,
            'tags' => ['whatsapp marketing', 'whatsapp api', 'broadcasts', 'meta api']
        ],
        [
            'id' => 'mkt-orm-services',
            'category_id' => 'digital-marketing',
            'name' => 'Online Reputation Management',
            'icon' => 'shield-check',
            'short_desc' => 'Protect and elevate brand reputation by actively generating positive 5-star Google reviews and mitigating negative feedback.',
            'deliverables' => ['Review Generation Funnels', 'Negative Feedback Resolution System', 'Google Profile Defense'],
            'timeline' => 'Monthly Retainer',
            'popular' => false,
            'tags' => ['orm', 'reputation', 'google reviews', 'brand trust']
        ],
        [
            'id' => 'mkt-marketing-strategy',
            'category_id' => 'digital-marketing',
            'name' => 'Marketing Strategy',
            'icon' => 'compass',
            'short_desc' => 'Tailored 90-day comprehensive digital growth roadmap covering budget allocation, channel selection, and customer acquisition targets.',
            'deliverables' => ['Competitive Positioning Matrix', 'Channel Budget Allocation Model', 'Target Milestone KPIs'],
            'timeline' => '5-7 Days',
            'popular' => false,
            'tags' => ['marketing strategy', 'consulting', 'growth roadmap']
        ],

        // ----------------------------------------------------------------------
        // CATEGORY F: AI & AUTOMATION SERVICES (14 Services)
        // ----------------------------------------------------------------------
        [
            'id' => 'ai-chatbot-development',
            'category_id' => 'ai-automation',
            'name' => 'AI Chatbot Development',
            'icon' => 'bot',
            'short_desc' => 'Smart website chatbot trained on proprietary company documents to answer visitor questions 24/7 and collect contact info.',
            'deliverables' => ['Zero Hallucination Document Retrieval', 'Custom Brand Tone & Voice', 'Lead Capture to Email/WhatsApp', 'Embed Code for Any Website'],
            'timeline' => '4-8 Days',
            'popular' => true,
            'tags' => ['ai chatbot', 'website bot', 'rag', 'smart assistant']
        ],
        [
            'id' => 'ai-whatsapp-chatbot',
            'category_id' => 'ai-automation',
            'name' => 'WhatsApp Chatbot',
            'icon' => 'message-square',
            'short_desc' => 'Interactive conversational WhatsApp bot that shares product catalogs, books appointments, answers FAQs, and takes orders automatically.',
            'deliverables' => ['Official WhatsApp Cloud API Sync', 'Interactive Buttons & Lists Menu', 'Auto Fallback to Human Agent', 'Webhook Data Storage'],
            'timeline' => '5-10 Days',
            'popular' => true,
            'tags' => ['whatsapp chatbot', 'whatsapp bot', 'automation', 'instant reply']
        ],
        [
            'id' => 'ai-calling-agent',
            'category_id' => 'ai-automation',
            'name' => 'AI Calling Agent',
            'icon' => 'phone-call',
            'short_desc' => 'Autonomous voice AI assistant that places and answers phone calls in human-sounding Hindi and English for appointment confirmations and lead follow-ups.',
            'deliverables' => ['Natural Human-Sounding Voice', 'Hindi / Hinglish / English Models', 'Real-Time Call Transcript & Summary', 'CRM Auto-Update'],
            'timeline' => '7-14 Days',
            'popular' => true,
            'tags' => ['ai calling', 'voice bot', 'telecalling', 'ai phone agent']
        ],
        [
            'id' => 'ai-customer-support',
            'category_id' => 'ai-automation',
            'name' => 'AI Customer Support',
            'icon' => 'headphones',
            'short_desc' => 'Multi-channel AI ticketing and support agent that resolves tier-1 customer inquiries across email, chat, and WhatsApp instantaneously.',
            'deliverables' => ['Ticket Auto-Resolution & Tagging', 'Escalation to Human Staff', 'Support Knowledge Base Training'],
            'timeline' => '7-12 Days',
            'popular' => false,
            'tags' => ['customer support', 'support bot', 'ticket resolution']
        ],
        [
            'id' => 'ai-lead-management',
            'category_id' => 'ai-automation',
            'name' => 'AI Lead Management',
            'icon' => 'filter',
            'short_desc' => 'Instantly qualify leads the second they enter from Facebook or Google, assign predictive intent scores, and alert sales reps via WhatsApp.',
            'deliverables' => ['Sub-30-Second Lead Response Time', 'Automated Intent Scoring (Hot/Warm/Cold)', 'WhatsApp Instant Alert to Owner'],
            'timeline' => '3-7 Days',
            'popular' => true,
            'tags' => ['lead management', 'lead scoring', 'instant alert']
        ],
        [
            'id' => 'ai-workflow-automation',
            'category_id' => 'ai-automation',
            'name' => 'Workflow Automation',
            'icon' => 'cpu',
            'short_desc' => 'Connect disparate software (Google Sheets, WhatsApp, Gmail, Razorpay, Tally) to run automatically without manual copy-paste work.',
            'deliverables' => ['Automated Zapier / Make.com Pipelines', 'Custom Webhooks & Triggers', 'Zero Data Entry Errors'],
            'timeline' => '3-6 Days',
            'popular' => true,
            'tags' => ['workflow automation', 'make', 'zapier', 'no code', 'integration']
        ],
        [
            'id' => 'ai-bpa-services',
            'category_id' => 'ai-automation',
            'name' => 'Business Process Automation',
            'icon' => 'refresh-cw',
            'short_desc' => 'End-to-end automation of complex routine tasks: invoice approvals, onboarding checklists, customer renewal reminders, and payment receipts.',
            'deliverables' => ['Custom Business Logic Scripts', 'Daily Automated Email Reports', 'Role Approval Chains'],
            'timeline' => '7-15 Days',
            'popular' => false,
            'tags' => ['business automation', 'process automation', 'bpa']
        ],
        [
            'id' => 'ai-content-solutions',
            'category_id' => 'ai-automation',
            'name' => 'AI Content Generation Solutions',
            'icon' => 'edit',
            'short_desc' => 'Deploy custom AI prompt pipelines that generate hundreds of product descriptions, social posts, and email drafts aligned to brand guidelines.',
            'deliverables' => ['Brand Guardrailed LLM Templates', 'Batch Content Generator', 'CSV / Excel Export'],
            'timeline' => '4-8 Days',
            'popular' => false,
            'tags' => ['ai content', 'generative ai', 'batch content']
        ],
        [
            'id' => 'ai-document-processing',
            'category_id' => 'ai-automation',
            'name' => 'AI Document Processing',
            'icon' => 'file-text',
            'short_desc' => 'Automatically extract key details (invoice number, GSTIN, line items, totals) from scanned bills and PDFs into structured Excel or database records.',
            'deliverables' => ['99%+ Extraction Accuracy', 'Automated Excel Export', 'Human-in-the-Loop Verification Desk'],
            'timeline' => '5-10 Days',
            'popular' => true,
            'tags' => ['document processing', 'invoice extraction', 'ai parsing']
        ],
        [
            'id' => 'ai-ocr-automation',
            'category_id' => 'ai-automation',
            'name' => 'OCR Automation',
            'icon' => 'maximize',
            'short_desc' => 'Automated reading of government IDs (Aadhaar, PAN, Driving License, Cheques) to speed up KYC registration and customer onboarding.',
            'deliverables' => ['Instant Name & ID Extraction', 'Masking Sensitive Digits', 'API Integration for Web & Mobile'],
            'timeline' => '5-12 Days',
            'popular' => true,
            'tags' => ['ocr automation', 'kyc', 'pan', 'aadhaar', 'id verification']
        ],
        [
            'id' => 'ai-powered-crm',
            'category_id' => 'ai-automation',
            'name' => 'AI-powered CRM',
            'icon' => 'users',
            'short_desc' => 'Next-gen customer database that auto-summarizes calls, suggests next best actions, and drafts personalized follow-up emails automatically.',
            'deliverables' => ['AI Meeting & Call Summarizer', 'Smart Follow-up Suggestions', 'Churn Risk Alerts'],
            'timeline' => '8-16 Days',
            'popular' => false,
            'tags' => ['ai crm', 'smart crm', 'sales automation']
        ],
        [
            'id' => 'ai-custom-integration',
            'category_id' => 'ai-automation',
            'name' => 'Custom AI Integration',
            'icon' => 'code',
            'short_desc' => 'Embed state-of-the-art AI models (OpenAI GPT-4o, Anthropic Claude, Google Gemini, Llama 3) directly into existing company applications.',
            'deliverables' => ['Secure API Key Management', 'Optimized Latency & Token Caching', 'Custom System Prompts & Guardrails'],
            'timeline' => '6-14 Days',
            'popular' => false,
            'tags' => ['ai integration', 'openai', 'gemini', 'claude', 'api']
        ],
        [
            'id' => 'ai-api-integration',
            'category_id' => 'ai-automation',
            'name' => 'API Integration',
            'icon' => 'sliders',
            'short_desc' => 'Connect external payment gateways, courier APIs (Shiprocket), SMS gateways (Msg91), and WhatsApp webhooks into one central pipeline.',
            'deliverables' => ['Webhook Handlers & Fallbacks', 'Secure Token Refresh', 'Comprehensive API Documentation'],
            'timeline' => '3-7 Days',
            'popular' => true,
            'tags' => ['api integration', 'webhooks', 'rest api', 'third party']
        ],
        [
            'id' => 'ai-business-assistants',
            'category_id' => 'ai-automation',
            'name' => 'AI Business Assistants',
            'icon' => 'zap',
            'short_desc' => 'Private internal digital executive assistant that answers founder questions regarding revenue, pending bills, and staff logs via voice or WhatsApp.',
            'deliverables' => ['WhatsApp-Based Query Desk', 'Connected to Internal Database', 'Instant Daily KPI Digest'],
            'timeline' => '7-14 Days',
            'popular' => true,
            'tags' => ['ai assistant', 'founder assistant', 'executive bot']
        ],

        // ----------------------------------------------------------------------
        // CATEGORY G: MOBILE APP DEVELOPMENT (10 Services)
        // ----------------------------------------------------------------------
        [
            'id' => 'app-android-development',
            'category_id' => 'mobile-apps',
            'name' => 'Android App Development',
            'icon' => 'smartphone',
            'short_desc' => 'High-performance native and cross-platform Android mobile applications published directly to the Google Play Store.',
            'deliverables' => ['Google Play Store Submission', 'Offline Data Caching', 'Push Notification Engine', 'Firebase Analytics'],
            'timeline' => '15-30 Days',
            'popular' => true,
            'tags' => ['android app', 'play store', 'apk', 'mobile development']
        ],
        [
            'id' => 'app-ios-development',
            'category_id' => 'mobile-apps',
            'name' => 'iOS App Development',
            'icon' => 'phone',
            'short_desc' => 'Premium, fluid iPhone & iPad applications crafted in accordance with Apple Human Interface Guidelines and App Store approval rules.',
            'deliverables' => ['Apple App Store Approval Guidance', 'Fluid 60FPS Animations', 'Apple Pay & In-App Purchase Support'],
            'timeline' => '20-35 Days',
            'popular' => false,
            'tags' => ['ios app', 'iphone', 'apple app store', 'swift', 'flutter']
        ],
        [
            'id' => 'app-business-applications',
            'category_id' => 'mobile-apps',
            'name' => 'Business Mobile Applications',
            'icon' => 'briefcase',
            'short_desc' => 'Custom mobile apps for field staff, sales agents, meter readers, and branch managers with GPS attendance and offline form submission.',
            'deliverables' => ['Live GPS Location Tracking', 'Offline Data Storage & Auto-Sync', 'Role-Based Authentication'],
            'timeline' => '14-25 Days',
            'popular' => true,
            'tags' => ['business app', 'field app', 'gps attendance', 'sales app']
        ],
        [
            'id' => 'app-ecommerce-apps',
            'category_id' => 'mobile-apps',
            'name' => 'E-commerce Apps',
            'icon' => 'shopping-bag',
            'short_desc' => 'Dedicated customer shopping apps with 1-click UPI checkout, push notification sale alerts, and live order tracking.',
            'deliverables' => ['Frictionless 1-Click Checkout', 'Push Notifications for Abandoned Carts', 'Synchronized Web & App Inventory'],
            'timeline' => '15-30 Days',
            'popular' => true,
            'tags' => ['ecommerce app', 'shopping app', 'mobile store']
        ],
        [
            'id' => 'app-school-apps',
            'category_id' => 'mobile-apps',
            'name' => 'School Apps',
            'icon' => 'graduation-cap',
            'short_desc' => 'Parent & student mobile apps for daily homework updates, attendance notifications, fee receipts, and digital report cards.',
            'deliverables' => ['Parent Push Alerts', 'Fee Payment Gateway Inside App', 'Bus GPS Live Tracking Option'],
            'timeline' => '12-25 Days',
            'popular' => true,
            'tags' => ['school app', 'parent portal', 'homework app', 'education']
        ],
        [
            'id' => 'app-delivery-apps',
            'category_id' => 'mobile-apps',
            'name' => 'Delivery Apps',
            'icon' => 'truck',
            'short_desc' => 'Driver & delivery boy mobile applications with turn-by-turn Google Maps navigation, order pickup verification, and OTP delivery.',
            'deliverables' => ['Google Maps Routing Integration', 'Customer OTP Verification', 'Cash on Delivery (COD) Accounting'],
            'timeline' => '15-28 Days',
            'popular' => false,
            'tags' => ['delivery app', 'driver app', 'order dispatch', 'courier']
        ],
        [
            'id' => 'app-booking-apps',
            'category_id' => 'mobile-apps',
            'name' => 'Booking Apps',
            'icon' => 'calendar',
            'short_desc' => 'Customer appointment and service booking apps for taxi fleets, home maintenance, beauty salons, and consultation clinics.',
            'deliverables' => ['Real-Time Availability Calendar', 'Token Deposit Collection', 'Cancellation & Rescheduling Workflows'],
            'timeline' => '14-25 Days',
            'popular' => false,
            'tags' => ['booking app', 'taxi app', 'service booking', 'salon app']
        ],
        [
            'id' => 'app-customer-apps',
            'category_id' => 'mobile-apps',
            'name' => 'Customer Apps',
            'icon' => 'heart',
            'short_desc' => 'Customer self-service mobile applications for subscription recharges, reward redemption, warranty claims, and ticket raising.',
            'deliverables' => ['Digital Loyalty Card / Barcode', 'In-App Live Chat Support', 'Profile & Address Management'],
            'timeline' => '12-20 Days',
            'popular' => false,
            'tags' => ['customer app', 'loyalty app', 'membership app']
        ],
        [
            'id' => 'app-admin-applications',
            'category_id' => 'mobile-apps',
            'name' => 'Admin Applications',
            'icon' => 'sliders',
            'short_desc' => 'Mobile management app for business owners to view live sales, approve staff leaves, and manage inventory from anywhere.',
            'deliverables' => ['Executive Metric Dashboards', 'Push Alerts for Big Orders', 'Staff Permission Controls'],
            'timeline' => '10-20 Days',
            'popular' => true,
            'tags' => ['admin app', 'owner app', 'dashboard app', 'management']
        ],
        [
            'id' => 'app-maintenance',
            'category_id' => 'mobile-apps',
            'name' => 'App Maintenance',
            'icon' => 'tool',
            'short_desc' => 'Continuous mobile OS compatibility updates (Android 14+, iOS 18+), bug resolutions, crash monitoring, and API maintenance.',
            'deliverables' => ['SDK & Policy Upgrades', 'Crashlytics Monitoring', 'Performance Optimization'],
            'timeline' => 'Monthly Retainer',
            'popular' => false,
            'tags' => ['app maintenance', 'bug fix', 'os update', 'support']
        ],

        // ----------------------------------------------------------------------
        // CATEGORY H: IT & TECHNICAL SERVICES (16 Services)
        // ----------------------------------------------------------------------
        [
            'id' => 'it-domain-registration',
            'category_id' => 'it-technical',
            'name' => 'Domain Registration Assistance',
            'icon' => 'globe',
            'short_desc' => 'Help selecting and securing premium .in, .com, .org, or .co.in domains under the client’s own direct account ownership.',
            'deliverables' => ['Brand Name Search & Selection', 'WHOIS Privacy Protection Guidance', '100% Client Ownership Guarantee'],
            'timeline' => '24 Hours',
            'popular' => true,
            'tags' => ['domain registration', 'dot in', 'dot com', 'domain buy']
        ],
        [
            'id' => 'it-web-hosting',
            'category_id' => 'it-technical',
            'name' => 'Web Hosting',
            'icon' => 'server',
            'short_desc' => 'Ultra-fast, NVMe SSD cloud web hosting with 99.9% uptime, daily automated backups, and isolated cPanel environments.',
            'deliverables' => ['NVMe SSD High Speed Storage', 'Free Lifetime AutoSSL', 'Daily Automated Backups', 'cPanel Control Access'],
            'timeline' => '24 Hours',
            'popular' => true,
            'tags' => ['web hosting', 'cloud hosting', 'cpanel', 'ssd hosting']
        ],
        [
            'id' => 'it-business-email-setup',
            'category_id' => 'it-technical',
            'name' => 'Business Email Setup',
            'icon' => 'mail',
            'short_desc' => 'Custom branded email addresses (e.g. name@company.com) with SPF, DKIM, and DMARC records configured for 100% inbox delivery.',
            'deliverables' => ['SPF / DKIM / DMARC Authentication', 'Outlook & Mobile Sync Setup', 'Spam & Anti-Virus Filtering'],
            'timeline' => '24 Hours',
            'popular' => true,
            'tags' => ['business email', 'custom email', 'spf dkim', 'mail setup']
        ],
        [
            'id' => 'it-google-workspace-setup',
            'category_id' => 'it-technical',
            'name' => 'Google Workspace Setup',
            'icon' => 'cloud',
            'short_desc' => 'Official setup and migration to Google Workspace (Gmail, Google Drive, Docs, Meet) for corporate teams.',
            'deliverables' => ['Domain MX Record Verification', 'User Account Provisioning', 'Legacy Mailbox Migration', 'Team Drive Organization'],
            'timeline' => '24-48 Hours',
            'popular' => true,
            'tags' => ['google workspace', 'gsuite', 'gmail business', 'google drive']
        ],
        [
            'id' => 'it-ssl-configuration',
            'category_id' => 'it-technical',
            'name' => 'SSL Configuration',
            'icon' => 'lock',
            'short_desc' => 'Installation of SSL certificates to turn HTTP into HTTPS, eliminate browser "Not Secure" warnings, and encrypt traffic.',
            'deliverables' => ['Green Padlock Installation', 'Force HTTPS Redirection', 'Fix Mixed Content Warnings'],
            'timeline' => '24 Hours',
            'popular' => true,
            'tags' => ['ssl', 'https', 'security certificate', 'padlock']
        ],
        [
            'id' => 'it-website-migration',
            'category_id' => 'it-technical',
            'name' => 'Website Migration',
            'icon' => 'truck',
            'short_desc' => 'Zero-downtime transfer of websites, databases, and emails from slow legacy hosts (GoDaddy, Hostinger, Bluehost) to modern cloud servers.',
            'deliverables' => ['Zero Business Downtime', 'Complete Database & File Transfer', 'Post-Migration Integrity Verification'],
            'timeline' => '24-48 Hours',
            'popular' => true,
            'tags' => ['website migration', 'server migration', 'cpanel transfer']
        ],
        [
            'id' => 'it-website-backup',
            'category_id' => 'it-technical',
            'name' => 'Website Backup',
            'icon' => 'save',
            'short_desc' => 'Automated off-site backup system preserving source code and databases on secure cloud storage (AWS S3) for disaster recovery.',
            'deliverables' => ['Daily / Weekly Automated Backups', 'Encrypted Cloud Storage', '1-Click Disaster Restoration Blueprint'],
            'timeline' => '24 Hours',
            'popular' => false,
            'tags' => ['backup', 'website backup', 'disaster recovery', 'cloud backup']
        ],
        [
            'id' => 'it-database-management',
            'category_id' => 'it-technical',
            'name' => 'Database Management',
            'icon' => 'database',
            'short_desc' => 'MySQL, PostgreSQL, and SQL Server database optimization, indexing slow queries, table repair, and data archiving.',
            'deliverables' => ['Slow Query Optimization', 'Database Indexing & Defragmentation', 'Automated Daily Dump Scripts'],
            'timeline' => '2-4 Days',
            'popular' => false,
            'tags' => ['database', 'mysql', 'sql optimization', 'postgresql']
        ],
        [
            'id' => 'it-api-integration',
            'category_id' => 'it-technical',
            'name' => 'API Integration',
            'icon' => 'link',
            'short_desc' => 'Custom API scripting connecting billing software to bank portals, e-way bill portals, GST portals, or SMS notification gateways.',
            'deliverables' => ['RESTful Webhook Implementation', 'Error Logging & Retry Mechanisms', 'Security Token Encryption'],
            'timeline' => '3-6 Days',
            'popular' => false,
            'tags' => ['api integration', 'webhooks', 'gst api', 'banking api']
        ],
        [
            'id' => 'it-server-configuration',
            'category_id' => 'it-technical',
            'name' => 'Server Configuration',
            'icon' => 'terminal',
            'short_desc' => 'Linux server (Ubuntu/CentOS/AlmaLinux) setup with Nginx/Apache, PHP-FPM, MySQL, firewall rules, and SSH key hardening.',
            'deliverables' => ['LEMP / LAMP Stack Optimization', 'UFW Firewall & Fail2ban Defense', 'PHP OpCache Configuration'],
            'timeline' => '24-48 Hours',
            'popular' => false,
            'tags' => ['server setup', 'linux', 'vps', 'nginx', 'ubuntu']
        ],
        [
            'id' => 'it-security-hardening',
            'category_id' => 'it-technical',
            'name' => 'Website Security Hardening',
            'icon' => 'shield',
            'short_desc' => 'Removal of malware/redirect viruses, brute force protection, anti-spam recaptcha setup, and Cloudflare DDoS mitigation.',
            'deliverables' => ['Malware & Backdoor Cleanup', 'Cloudflare WAF / DDoS Protection', 'Admin Login Protection & 2FA'],
            'timeline' => '24-48 Hours',
            'popular' => true,
            'tags' => ['website security', 'malware removal', 'hacked site fix', 'cloudflare']
        ],
        [
            'id' => 'it-technical-support',
            'category_id' => 'it-technical',
            'name' => 'Technical Support',
            'icon' => 'headphones',
            'short_desc' => 'On-demand technical assistance for resolving website bugs, email delivery issues, database connection errors, and DNS conflicts.',
            'deliverables' => ['Direct Developer Hotline', 'Fast Issue Triage & Root Cause Fix', 'Ticket Resolution Log'],
            'timeline' => 'On-Demand',
            'popular' => true,
            'tags' => ['tech support', 'website fix', 'bug resolution', 'help desk']
        ],
        [
            'id' => 'it-troubleshooting',
            'category_id' => 'it-technical',
            'name' => 'Website Troubleshooting',
            'icon' => 'alert-triangle',
            'short_desc' => 'Emergency troubleshooting for 500 Internal Server Errors, "Error Establishing Database Connection", and white screen of death.',
            'deliverables' => ['Immediate Emergency Response', 'Server Error Log Inspection', 'Restoration of Site Functionality'],
            'timeline' => 'Immediate / 2-6 Hours',
            'popular' => true,
            'tags' => ['troubleshooting', 'error 500', 'white screen', 'emergency fix']
        ],
        [
            'id' => 'it-software-installation',
            'category_id' => 'it-technical',
            'name' => 'Software Installation Assistance',
            'icon' => 'download',
            'short_desc' => 'Guidance and setup assistance for installing accounting software, CRM desktop clients, printers, scanners, and drivers.',
            'deliverables' => ['Driver Verification', 'Clean Setup Without Bloatware', 'Testing with Test Prints & Runs'],
            'timeline' => 'Same Day',
            'popular' => false,
            'tags' => ['software install', 'printer setup', 'drivers', 'installation']
        ],
        [
            'id' => 'it-remote-assistance',
            'category_id' => 'it-technical',
            'name' => 'Remote Technical Assistance',
            'icon' => 'monitor',
            'short_desc' => 'Remote desktop troubleshooting (via AnyDesk, TeamViewer) to resolve computer errors, printer stalls, and software glitches on shop PCs.',
            'deliverables' => ['Encrypted Remote Connection', 'Direct Operator Screen Guidance', 'Zero Physical Visit Delay'],
            'timeline' => 'Within 1 Hour',
            'popular' => true,
            'tags' => ['remote support', 'anydesk', 'teamviewer', 'pc fix']
        ],
        [
            'id' => 'it-consulting',
            'category_id' => 'it-technical',
            'name' => 'IT Consulting',
            'icon' => 'users',
            'short_desc' => 'Strategic advisory on choosing the right tech stack, cloud providers, ERP systems, and hardware infrastructure for business scaling.',
            'deliverables' => ['Technology Audit Report', 'Vendor Cost-Benefit Comparison', 'Phased Implementation Roadmap'],
            'timeline' => '2-5 Days',
            'popular' => false,
            'tags' => ['it consulting', 'technology advisory', 'infrastructure planning']
        ],

        // ----------------------------------------------------------------------
        // CATEGORY I: BUSINESS DIGITALIZATION (12 Services)
        // ----------------------------------------------------------------------
        [
            'id' => 'biz-digital-business-setup',
            'category_id' => 'business-digitalization',
            'name' => 'Digital Business Setup',
            'icon' => 'store',
            'short_desc' => 'Complete digital launchpad for traditional shops: domain, website, Google Maps, WhatsApp Business, digital payment QR, and email.',
            'deliverables' => ['Turnkey 7-Day Digital Launch', 'Branded Visual Collaterals', 'Google Maps Verification', 'Hands-On Shop Owner Onboarding'],
            'timeline' => '5-7 Days',
            'popular' => true,
            'tags' => ['digital setup', 'shop digitization', 'business launch', 'turnkey']
        ],
        [
            'id' => 'biz-online-store-setup',
            'category_id' => 'business-digitalization',
            'name' => 'Online Store Setup',
            'icon' => 'shopping-cart',
            'short_desc' => 'Transform a physical grocery, clothing, electronics, or hardware store into an online shopping portal taking orders 24/7.',
            'deliverables' => ['Product Catalog Upload (Up to 50 items)', 'Direct UPI / Razorpay Payments', 'Automated WhatsApp Order Alerts'],
            'timeline' => '5-8 Days',
            'popular' => true,
            'tags' => ['online store', 'ecommerce setup', 'digital dukaan']
        ],
        [
            'id' => 'biz-gmb-digital',
            'category_id' => 'business-digitalization',
            'name' => 'Google Business Profile',
            'icon' => 'map-pin',
            'short_desc' => 'Full setup and local ranking optimization to ensure walk-in customers find your shop address, phone number, and opening hours on Google.',
            'deliverables' => ['Location Pin Fine-Tuning', 'Shopfront & Product Photos', 'Service Offerings Checklist', 'Review Invitation Link'],
            'timeline' => '2-4 Days',
            'popular' => true,
            'tags' => ['google profile', 'shop on maps', 'local presence']
        ],
        [
            'id' => 'biz-digital-catalogue',
            'category_id' => 'business-digitalization',
            'name' => 'Digital Catalogue',
            'icon' => 'book-open',
            'short_desc' => 'Mobile-optimized interactive product menu that customers can browse by scanning a table/counter QR code or via WhatsApp.',
            'deliverables' => ['Mobile-Friendly Flipbook / Web View', 'Direct "Order on WhatsApp" Button', 'Instant Updates Without Re-Printing'],
            'timeline' => '2-4 Days',
            'popular' => true,
            'tags' => ['digital catalog', 'qr menu', 'product catalog']
        ],
        [
            'id' => 'biz-qr-code-solutions',
            'category_id' => 'business-digitalization',
            'name' => 'QR Code Solutions',
            'icon' => 'grid',
            'short_desc' => 'Custom branded QR codes (with business logo and colors) for UPI payments, Google Reviews, Wi-Fi login, and digital menus.',
            'deliverables' => ['Logo-Embedded Vector QR Codes', 'High-Res Counter Standee Printable PDF', 'Dynamic Link Management'],
            'timeline' => '24 Hours',
            'popular' => true,
            'tags' => ['qr code', 'branded qr', 'payment qr', 'review qr']
        ],
        [
            'id' => 'biz-whatsapp-business-setup',
            'category_id' => 'business-digitalization',
            'name' => 'WhatsApp Business Setup',
            'icon' => 'message-circle',
            'short_desc' => 'Setup of professional WhatsApp Business app with verified profile, product catalog, automated greeting, and quick reply shortcuts.',
            'deliverables' => ['Verified Business Profile', 'Product & Price Showcase', 'Automated Away & Greeting Messages', 'Labels for Customer Stages'],
            'timeline' => '24-48 Hours',
            'popular' => true,
            'tags' => ['whatsapp business', 'business profile', 'catalog', 'auto reply']
        ],
        [
            'id' => 'biz-online-appointment-system',
            'category_id' => 'business-digitalization',
            'name' => 'Online Appointment System',
            'icon' => 'calendar',
            'short_desc' => 'Digital appointment calendar allowing clients to book consultation slots online, pay advance tokens, and get WhatsApp reminders.',
            'deliverables' => ['Custom Booking Website / Link', 'Google Calendar Sync', 'Advance Token Collection Integration'],
            'timeline' => '3-6 Days',
            'popular' => false,
            'tags' => ['appointment system', 'online booking', 'calendar']
        ],
        [
            'id' => 'biz-customer-feedback-system',
            'category_id' => 'business-digitalization',
            'name' => 'Customer Feedback System',
            'icon' => 'star',
            'short_desc' => 'QR-based customer rating system that routes 5-star reviews to Google Maps while directing constructive complaints to management privately.',
            'deliverables' => ['QR Standee Design for Billing Counter', 'Smart Review Routing Filter', 'Negative Feedback SMS Alert'],
            'timeline' => '2-4 Days',
            'popular' => true,
            'tags' => ['customer feedback', 'reviews', 'google rating', 'qr feedback']
        ],
        [
            'id' => 'biz-digital-payment-integration',
            'category_id' => 'business-digitalization',
            'name' => 'Digital Payment Integration',
            'icon' => 'credit-card',
            'short_desc' => 'Setup and integration of Indian payment gateways (Razorpay, Cashfree, Paytm Business, PhonePe PG) for instant UPI & card settlements.',
            'deliverables' => ['Payment Gateway Onboarding Support', 'API Sync to Website / Software', 'Automated Payment Webhook'],
            'timeline' => '2-5 Days',
            'popular' => true,
            'tags' => ['payment integration', 'razorpay', 'upi', 'gateway setup']
        ],
        [
            'id' => 'biz-business-automation',
            'category_id' => 'business-digitalization',
            'name' => 'Business Automation',
            'icon' => 'cpu',
            'short_desc' => 'Eliminate manual paperwork by connecting billing to inventory, customer reminders, and accountant reports automatically.',
            'deliverables' => ['Audit of Repetitive Bottlenecks', 'Automated SMS / WhatsApp Receipts', 'End-of-Day Sales Summary to Owner'],
            'timeline' => '4-8 Days',
            'popular' => false,
            'tags' => ['automation', 'efficiency', 'paperless']
        ],
        [
            'id' => 'biz-lead-management-system',
            'category_id' => 'business-digitalization',
            'name' => 'Lead Management System',
            'icon' => 'filter',
            'short_desc' => 'Simple lead tracking app for local businesses to ensure zero prospective customers are forgotten or missed by sales staff.',
            'deliverables' => ['Mobile-Friendly Lead Entry', 'Daily Follow-up Reminders', 'Conversion Win/Loss Insights'],
            'timeline' => '3-6 Days',
            'popular' => false,
            'tags' => ['lead tracker', 'sales pipeline', 'follow up']
        ],
        [
            'id' => 'biz-online-booking-system',
            'category_id' => 'business-digitalization',
            'name' => 'Online Booking System',
            'icon' => 'clock',
            'short_desc' => 'Reservation engine for banquet halls, photography studios, party venues, and rental equipment with advance payment collection.',
            'deliverables' => ['Date Availability Calendar', 'Booking Advance Payment', 'Automated Confirmation Slip PDF'],
            'timeline' => '4-8 Days',
            'popular' => false,
            'tags' => ['booking system', 'banquet booking', 'hall reservation']
        ],

        // ----------------------------------------------------------------------
        // CATEGORY J: EDUCATION & TRAINING TECHNOLOGY (10 Services)
        // ----------------------------------------------------------------------
        [
            'id' => 'edu-school-website',
            'category_id' => 'education-technology',
            'name' => 'School Website',
            'icon' => 'globe',
            'short_desc' => 'CBSE / ICSE / State Board compliant official school portal with academic calendar, online fee desk, gallery, and principal message.',
            'deliverables' => ['Board Compliance Disclosures', 'Online Admission Enquiry', 'Notice Board & Downloads Section', 'Mobile-Friendly Responsive UI'],
            'timeline' => '6-10 Days',
            'popular' => true,
            'tags' => ['school website', 'cbse portal', 'education website']
        ],
        [
            'id' => 'edu-coaching-website',
            'category_id' => 'education-technology',
            'name' => 'Coaching Website',
            'icon' => 'award',
            'short_desc' => 'Lead-generating website for IIT-JEE, NEET, UPSC, SSC, and computer coaching centers with topper testimonials and demo registration.',
            'deliverables' => ['Batch Details & Timetables', 'Topper Gallery & Results', 'Free Demo Class Booking Funnel', 'WhatsApp Instant Enquiry'],
            'timeline' => '4-8 Days',
            'popular' => true,
            'tags' => ['coaching website', 'iit jee', 'neet', 'tuition center']
        ],
        [
            'id' => 'edu-lms-development',
            'category_id' => 'education-technology',
            'name' => 'LMS Development',
            'icon' => 'book-open',
            'short_desc' => 'Learning Management System (LMS) with video courses, PDF lecture notes, quiz modules, student progress tracking, and certificates.',
            'deliverables' => ['Video Piracy Protection / DRM', 'Student Login & Progress Bar', 'Automated Quiz & Certificate', 'Payment Gateway Integration'],
            'timeline' => '12-25 Days',
            'popular' => true,
            'tags' => ['lms', 'learning management system', 'online course', 'video portal']
        ],
        [
            'id' => 'edu-online-examination-system',
            'category_id' => 'education-technology',
            'name' => 'Online Examination System',
            'icon' => 'check-circle',
            'short_desc' => 'Computer-based test (CBT) portal simulating NTA/TCS-iON patterns with question banks, countdown timer, and instant rank cards.',
            'deliverables' => ['Multiple Choice (MCQ) & Subjective', 'Negative Marking & Countdown Timer', 'Instant Scorecard & Solutions', 'Negative Tab Switch Warning'],
            'timeline' => '10-20 Days',
            'popular' => true,
            'tags' => ['online exam', 'cbt test', 'mock test', 'test series']
        ],
        [
            'id' => 'edu-student-management',
            'category_id' => 'education-technology',
            'name' => 'Student Management Software',
            'icon' => 'users',
            'short_desc' => 'Complete digital register of student bio-data, parent contacts, roll numbers, admission documents, and academic history.',
            'deliverables' => ['Digital Student Dossier', 'Document Archive (Aadhaar, Transfer Cert)', 'Roll Number / Section Allocation'],
            'timeline' => '5-10 Days',
            'popular' => false,
            'tags' => ['student management', 'student records', 'admissions register']
        ],
        [
            'id' => 'edu-attendance-management',
            'category_id' => 'education-technology',
            'name' => 'Attendance Management',
            'icon' => 'user-check',
            'short_desc' => 'Biometric fingerprint, RFID card, or teacher mobile app attendance marking with instant SMS/WhatsApp alerts to parents of absentees.',
            'deliverables' => ['RFID / Biometric Machine Sync', 'Absentee SMS Alert to Parents', 'Monthly Attendance Percentage Sheet'],
            'timeline' => '5-9 Days',
            'popular' => true,
            'tags' => ['attendance', 'biometric', 'rfid', 'parent sms']
        ],
        [
            'id' => 'edu-fee-management',
            'category_id' => 'education-technology',
            'name' => 'Fee Management',
            'icon' => 'credit-card',
            'short_desc' => 'Automated monthly/quarterly fee counter software with printable fee receipts, fine calculation, online UPI payment, and due lists.',
            'deliverables' => ['Thermal / A4 Printed Fee Receipts', 'Defaulter Due List with 1-Click SMS', 'Online Fee Payment via UPI/Cards'],
            'timeline' => '5-10 Days',
            'popular' => true,
            'tags' => ['fee management', 'fee collection', 'receipt printer', 'school fees']
        ],
        [
            'id' => 'edu-online-admission-system',
            'category_id' => 'education-technology',
            'name' => 'Online Admission System',
            'icon' => 'clipboard',
            'short_desc' => 'Paperless online admission portal with application form filling, document upload, registration fee payment, and merit list generator.',
            'deliverables' => ['Online Form with Document Uploads', 'Admission Fee Payment Gateway', 'Merit List Generation Filter'],
            'timeline' => '6-12 Days',
            'popular' => false,
            'tags' => ['online admission', 'admission form', 'paperless admission']
        ],
        [
            'id' => 'edu-mobile-apps',
            'category_id' => 'education-technology',
            'name' => 'Educational Mobile Apps',
            'icon' => 'smartphone',
            'short_desc' => 'Branded mobile app for your school or coaching institute on Google Play Store featuring recorded lectures, study material, and notices.',
            'deliverables' => ['Published on Google Play Store', 'Push Notification Noticeboard', 'Offline Video Viewing Option'],
            'timeline' => '14-25 Days',
            'popular' => true,
            'tags' => ['education app', 'school app', 'coaching app']
        ],
        [
            'id' => 'edu-digital-learning-solutions',
            'category_id' => 'education-technology',
            'name' => 'Digital Learning Solutions',
            'icon' => 'monitor',
            'short_desc' => 'Smart classroom interactive panel software, animated digital content integration, and teacher presentation tools.',
            'deliverables' => ['Smart Board Compatibility', 'Curriculum Mapping Guidance', 'Teacher Training Documentation'],
            'timeline' => '7-15 Days',
            'popular' => false,
            'tags' => ['smart classroom', 'digital learning', 'smart board', 'elearning']
        ]
    ];

    // Helper: Retrieve all categories
    function getCatalogueCategories() {
        global $CATALOGUE_CATEGORIES;
        return $CATALOGUE_CATEGORIES;
    }

    // Helper: Retrieve all services or filter by category
    function getCatalogueServices($category_id = null) {
        global $SERVICES_CATALOGUE;
        if ($category_id === null || $category_id === 'all') {
            return $SERVICES_CATALOGUE;
        }
        return array_values(array_filter($SERVICES_CATALOGUE, function($item) use ($category_id) {
            return $item['category_id'] === $category_id;
        }));
    }

    // Helper: Find service by id
    function findCatalogueServiceById($id) {
        global $SERVICES_CATALOGUE;
        foreach ($SERVICES_CATALOGUE as $service) {
            if ($service['id'] === $id) {
                return $service;
            }
        }
        return null;
    }

    // Helper: Total services count
    function getCatalogueTotalServicesCount() {
        global $SERVICES_CATALOGUE;
        return count($SERVICES_CATALOGUE);
    }
}
