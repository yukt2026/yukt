<?php
// Prevent aggressive browser/proxy caching for dynamic HTML/PHP pages
if (!headers_sent()) {
    header("Cache-Control: no-cache, no-store, must-revalidate, max-age=0, post-check=0, pre-check=0");
    header("Pragma: no-cache");
    header("Expires: Wed, 11 Jan 1984 05:00:00 GMT");
}

require_once __DIR__ . '/config.php';
require_once __DIR__ . '/db.php';
require_once __DIR__ . '/components/icons.php';
require_once __DIR__ . '/components/button.php';
require_once __DIR__ . '/components/badge.php';

if (session_status() === PHP_SESSION_NONE && !headers_sent()) {
    session_start();
}

// Global Partner Referral Tracking
if (!empty($_GET['ref'])) {
    $cleanRef = preg_replace('/[^a-zA-Z0-9_-]/', '', $_GET['ref']);
    if (!empty($cleanRef)) {
        $_SESSION['yukt_ref'] = $cleanRef;
        if (!headers_sent()) {
            setcookie('yukt_ref', $cleanRef, time() + (30 * 86400), '/');
        }
        if (!isset($_SESSION['yukt_ref_logged']) && isset($pdo) && $pdo) {
            try {
                $refLogStmt = $pdo->prepare("
                    INSERT INTO partner_referrals (partner_code, visitor_ip, user_agent, landing_page, conversion_status)
                    VALUES (:code, :ip, :ua, :page, 'visited')
                ");
                $refLogStmt->execute([
                    ':code' => $cleanRef,
                    ':ip' => $_SERVER['REMOTE_ADDR'] ?? '',
                    ':ua' => mb_substr($_SERVER['HTTP_USER_AGENT'] ?? '', 0, 500),
                    ':page' => mb_substr($_SERVER['REQUEST_URI'] ?? '', 0, 255)
                ]);
                $_SESSION['yukt_ref_logged'] = true;
            } catch (Exception $e) {
                // silent
            }
        }
    }
}

$activePage = $activePage ?? 'home';
$pageTitle = $pageTitle ?? (COMPANY_NAME . ' | Technology That Moves Your Business Forward');
$pageDesc = $pageDesc ?? 'YUKT IT SOLUTIONS builds intelligent digital experiences, powerful software, websites, and AI-driven solutions that help businesses grow faster.';
$cssVersion = defined('APP_VERSION') ? APP_VERSION . '.' . (file_exists(__DIR__ . '/../assets/css/main.css') ? filemtime(__DIR__ . '/../assets/css/main.css') : time()) : time();

$currentScript = basename($_SERVER['PHP_SELF']);
if (!isset($canonicalUrl)) {
    $canonicalUrl = ($currentScript === 'index.php') ? COMPANY_URL . '/' : COMPANY_URL . '/' . $currentScript;
}
?>
<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <!-- Cache Control Directives (Ensures Browsers Always Pull Fresh Updates) -->
  <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">
  <meta http-equiv="Pragma" content="no-cache">
  <meta http-equiv="Expires" content="0">

  <title><?php echo htmlspecialchars($pageTitle); ?></title>
  <meta name="description" content="<?php echo htmlspecialchars($pageDesc); ?>">
  <link rel="canonical" href="<?php echo htmlspecialchars($canonicalUrl); ?>">
<?php if ($activePage === '404'): ?>
  <meta name="robots" content="noindex, nofollow">
<?php else: ?>
  <meta name="robots" content="index, follow">
<?php endif; ?>
  <meta name="theme-color" content="#040914">
  
  <!-- Open Graph / Meta -->
  <meta property="og:type" content="website">
  <meta property="og:title" content="<?php echo htmlspecialchars($pageTitle); ?>">
  <meta property="og:description" content="<?php echo htmlspecialchars($pageDesc); ?>">
  <meta property="og:url" content="<?php echo htmlspecialchars($canonicalUrl); ?>">
  <meta property="og:site_name" content="<?php echo COMPANY_NAME; ?>">
  <meta property="og:image" content="<?php echo COMPANY_URL; ?>/assets/images/yukt-official-logo.png">
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="<?php echo htmlspecialchars($pageTitle); ?>">
  <meta name="twitter:description" content="<?php echo htmlspecialchars($pageDesc); ?>">
  <meta name="twitter:image" content="<?php echo COMPANY_URL; ?>/assets/images/yukt-official-logo.png">
  <meta name="google-site-verification" content="oqPPOWfWv2kCTwMmT7xGdUBhuG_xoGckejq0ypIVJbE" />
  <!-- Favicon -->
  <link rel="icon" type="image/svg+xml" href="assets/images/favicon.svg">

  <!-- Typography Preconnect & Google Fonts (Inter + JetBrains Mono + Plus Jakarta Sans + Space Grotesk) -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=JetBrains+Mono:wght@400;500;600&family=Plus+Jakarta+Sans:wght@400;500;600;700;800&family=Space+Grotesk:wght@500;600;700&display=swap" rel="stylesheet">

  <!-- Compiled Stylesheet (Tailwind CSS + Futuristic 3D Design Tokens) -->
  <link rel="stylesheet" href="assets/css/main.css?v=<?php echo $cssVersion; ?>">

  <noscript>
    <style>
      .reveal-up, .reveal-on-scroll { opacity: 1 !important; transform: none !important; }
    </style>
  </noscript>

  <!-- Lucide Icons -->
  <script src="https://unpkg.com/lucide@latest"></script>

  <!-- Three.js r128 -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js"></script>

<?php
// Build Dynamic Schema.org Graph
$schemaGraph = [
    [
        "@type" => "Organization",
        "@id" => COMPANY_URL . "/#organization",
        "name" => COMPANY_NAME,
        "legalName" => COMPANY_LEGAL_NAME,
        "url" => COMPANY_URL,
        "logo" => COMPANY_URL . "/assets/images/yukt-official-logo.png",
        "description" => $pageDesc,
        "telephone" => PHONE_NUMBER,
        "email" => EMAIL_PRIMARY,
        "hasMap" => GOOGLE_MAPS_VIEW_URL,
        "address" => [
            "@type" => "PostalAddress",
            "streetAddress" => "Block A, Ram Datt Enclave, Uttam Nagar",
            "addressLocality" => "New Delhi",
            "addressRegion" => "Delhi",
            "postalCode" => "110059",
            "addressCountry" => "IN"
        ],
        "sameAs" => [
            LINKEDIN_URL,
            TWITTER_URL,
            GITHUB_URL,
            INSTAGRAM_URL
        ],
        "founder" => [
            [
                "@type" => "Person",
                "name" => "Ansar Ali Shah",
                "jobTitle" => "Founder & Lead Technical Architect",
                "sameAs" => ANSAR_LINKEDIN
            ],
            [
                "@type" => "Person",
                "name" => "Ranjeet",
                "jobTitle" => "Co-Founder & Lead Solutions Architect",
                "sameAs" => RANJEET_LINKEDIN
            ]
        ],
        "contactPoint" => [
            [
                "@type" => "ContactPoint",
                "telephone" => PHONE_NUMBER,
                "contactType" => "sales",
                "areaServed" => ["IN", "US", "GB", "AE"],
                "availableLanguage" => ["English", "Hindi"]
            ]
        ]
    ],
    [
        "@type" => "WebSite",
        "@id" => COMPANY_URL . "/#website",
        "url" => COMPANY_URL,
        "name" => COMPANY_NAME,
        "publisher" => [
            "@id" => COMPANY_URL . "/#organization"
        ]
    ]
];

// Breadcrumbs Schema (for all indexable subpages)
if ($currentScript !== 'index.php' && $activePage !== '404') {
    $breadcrumbItems = [
        [
            "@type" => "ListItem",
            "position" => 1,
            "name" => "Home",
            "item" => COMPANY_URL . "/"
        ]
    ];
    if (isset($service) && !empty($service)) {
        $breadcrumbItems[] = [
            "@type" => "ListItem",
            "position" => 2,
            "name" => "Services",
            "item" => COMPANY_URL . "/services.php"
        ];
        $breadcrumbItems[] = [
            "@type" => "ListItem",
            "position" => 3,
            "name" => $service['title'],
            "item" => $canonicalUrl
        ];
    } elseif (isset($project) && !empty($project)) {
        $breadcrumbItems[] = [
            "@type" => "ListItem",
            "position" => 2,
            "name" => "Portfolio",
            "item" => COMPANY_URL . "/portfolio.php"
        ];
        $breadcrumbItems[] = [
            "@type" => "ListItem",
            "position" => 3,
            "name" => $project['title'],
            "item" => $canonicalUrl
        ];
    } else {
        $breadcrumbTitle = $breadcrumbName ?? ucwords(str_replace('-', ' ', $activePage));
        $breadcrumbItems[] = [
            "@type" => "ListItem",
            "position" => 2,
            "name" => $breadcrumbTitle,
            "item" => $canonicalUrl
        ];
    }
    $schemaGraph[] = [
        "@type" => "BreadcrumbList",
        "@id" => $canonicalUrl . "/#breadcrumb",
        "itemListElement" => $breadcrumbItems
    ];
}

// Service Schema (for dedicated service pages)
if (isset($service) && !empty($service)) {
    $schemaGraph[] = [
        "@type" => "Service",
        "@id" => $canonicalUrl . "/#service",
        "name" => $service['title'],
        "serviceType" => $service['tagline'],
        "description" => $service['desc'],
        "provider" => [
            "@id" => COMPANY_URL . "/#organization"
        ],
        "areaServed" => [
            ["@type" => "Country", "name" => "India"],
            ["@type" => "Country", "name" => "United States"],
            ["@type" => "Country", "name" => "United Kingdom"],
            ["@type" => "Country", "name" => "United Arab Emirates"]
        ]
    ];
}

// FAQPage Schema (when FAQs exist on the page)
if (!empty($faqs) && is_array($faqs)) {
    $schemaGraph[] = [
        "@type" => "FAQPage",
        "@id" => $canonicalUrl . "/#faq",
        "mainEntity" => array_map(function($faq) {
            return [
                "@type" => "Question",
                "name" => $faq['q'],
                "acceptedAnswer" => [
                    "@type" => "Answer",
                    "text" => $faq['a']
                ]
            ];
        }, $faqs)
    ];
}
?>
  <!-- Schema.org Organization, WebSite, Breadcrumb, Service & FAQ Structured Data -->
  <script type="application/ld+json">
  <?php echo json_encode(["@context" => "https://schema.org", "@graph" => $schemaGraph], JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE); ?>
  </script>
</head>
<body class="bg-navy-950 text-slate-100 antialiased selection:bg-electric-500 selection:text-white flex flex-col min-h-screen">

  <!-- Accessible Skip Navigation -->
  <a href="#mainContent" class="sr-only focus:not-sr-only focus:fixed focus:top-3 focus:left-3 focus:z-50 focus:px-4 focus:py-2 focus:bg-electric-600 focus:text-white focus:rounded-btn">
    Skip to main content
  </a>

  <!-- ==========================================
       HEADER / GLASSMORPHISM NAVIGATION BAR
  =========================================== -->
  <header id="navbar" class="fixed top-0 left-0 right-0 z-50 transition-all duration-300 py-2 sm:py-3 px-2.5 sm:px-5 lg:px-8">
    <div class="max-w-7xl mx-auto relative">
      <nav class="navbar-container rounded-2xl px-2.5 sm:px-5 lg:px-6 py-2 sm:py-2.5 flex items-center justify-between shadow-2xl shadow-black/50 border border-white/15 flex-nowrap">
        
        <!-- Brand Logo Badge -->
        <a href="index.php" class="flex items-center gap-2 sm:gap-2.5 group focus:outline-none flex-shrink-0" aria-label="YUKT IT SOLUTIONS Home">
          <div class="h-8.5 sm:h-10 px-2 sm:px-2.5 py-1 rounded-xl bg-white shadow-md shadow-black/40 flex items-center justify-center group-hover:scale-105 transition-transform border border-white/40 flex-shrink-0">
            <img src="assets/images/yukt-official-logo.png" alt="YUKT IT SOLUTIONS Official Logo" width="160" height="40" class="h-5 sm:h-7 w-auto object-contain flex-shrink-0">
          </div>
          <div class="flex flex-col leading-none">
            <div class="flex items-center gap-1 sm:gap-1.5 whitespace-nowrap">
              <span class="font-display font-bold text-sm sm:text-base lg:text-lg tracking-tight text-white">YUKT</span>
              <span class="font-display font-semibold text-[10px] sm:text-xs lg:text-sm tracking-wider sm:tracking-widest uppercase text-electric-400">IT SOLUTIONS</span>
            </div>
            <span class="font-mono text-[9px] sm:text-[10px] text-slate-400 tracking-wider hidden sm:inline mt-0.5">yukt.online</span>
          </div>
        </a>

        <!-- Desktop Navigation Links (Visible on >= 1280px Desktop) -->
        <div class="hidden xl:flex items-center gap-0.5 2xl:gap-1 bg-white/[0.03] border border-white/[0.06] rounded-xl px-1.5 py-1 relative flex-shrink-0 whitespace-nowrap">
          
          <!-- Services with Interactive Flyout Mega-Menu -->
          <div class="relative group/menu flex-shrink-0">
            <a 
              href="services.php" 
              class="px-2.5 2xl:px-3 py-1.5 rounded-lg text-xs 2xl:text-sm font-medium transition-all inline-flex items-center gap-1 whitespace-nowrap <?php echo ($activePage === 'services') ? 'text-white bg-white/10' : 'text-slate-300 hover:text-white hover:bg-white/[0.06]'; ?>"
            >
              <span>Services</span>
              <i data-lucide="chevron-down" class="w-3.5 h-3.5 text-slate-400 group-hover/menu:text-white transition-transform group-hover/menu:rotate-180"></i>
            </a>

            <!-- Dropdown Menu Container with Hover Bridge & 100% Solid Opaque Panel -->
            <div class="absolute top-full left-0 pt-2 opacity-0 translate-y-2 pointer-events-none group-hover/menu:opacity-100 group-hover/menu:translate-y-0 group-hover/menu:pointer-events-auto transition-all duration-200 z-50">
              <div class="w-[680px] dropdown-mega-panel rounded-2xl p-5 shadow-2xl shadow-black/95 text-white">
                <div class="flex items-center justify-between pb-3 mb-3 border-b border-white/10 text-xs">
                  <span class="font-mono uppercase tracking-wider text-slate-300 font-semibold">8 Core Capabilities</span>
                  <a href="partner.php" class="text-yukt-orange hover:text-amber-400 font-semibold flex items-center gap-1.5 transition-colors">
                    <i data-lucide="store" class="w-3.5 h-3.5"></i>
                    <span>Partner Program Hub</span>
                  </a>
                </div>
                <div class="grid grid-cols-2 gap-2 text-left">
                  <?php foreach ($SERVICES as $s): ?>
                    <a href="<?php echo $s['url']; ?>" class="dropdown-item-card flex items-start gap-3 p-3 rounded-xl transition-all group/item">
                      <div class="w-9 h-9 rounded-xl <?php echo ($s['accent'] === 'orange') ? 'bg-yukt-orange/20 text-yukt-orange border border-yukt-orange/30' : 'bg-electric-500/20 text-electric-400 border border-electric-400/30'; ?> flex items-center justify-center flex-shrink-0 mt-0.5">
                        <i data-lucide="<?php echo $s['icon']; ?>" class="w-4 h-4"></i>
                      </div>
                      <div class="min-w-0">
                        <div class="text-xs font-semibold text-white group-hover/item:text-electric-400 transition-colors">
                          <?php echo htmlspecialchars($s['title']); ?>
                        </div>
                        <p class="text-[11px] text-slate-300 line-clamp-1 mt-0.5 font-normal"><?php echo htmlspecialchars($s['tagline']); ?></p>
                      </div>
                    </a>
                  <?php endforeach; ?>
                </div>
              </div>
            </div>
          </div>

          <!-- Partner Program Hub -->
          <?php if (isset($_SESSION['partner_id'])): ?>
            <a 
              href="partner-dashboard.php" 
              class="px-2.5 py-1.5 rounded-lg text-xs 2xl:text-sm font-semibold transition-all text-white bg-electric-600 hover:bg-electric-500 border border-electric-400/30 shadow-md shadow-electric-600/20 flex items-center gap-1.5 whitespace-nowrap flex-shrink-0"
            >
              <i data-lucide="layout-dashboard" class="w-3.5 h-3.5"></i>
              <span>Dashboard</span>
            </a>
          <?php else: ?>
            <a 
              href="partner.php" 
              class="px-2 2xl:px-2.5 py-1.5 rounded-lg text-xs 2xl:text-sm font-medium transition-all whitespace-nowrap flex-shrink-0 <?php echo ($activePage === 'partner') ? 'text-white bg-white/10' : 'text-slate-300 hover:text-white hover:bg-white/[0.06]'; ?> flex items-center gap-1.5"
            >
              <span class="w-1.5 h-1.5 rounded-full bg-yukt-orange animate-pulse"></span>
              <span>Partner Hub</span>
            </a>
          <?php endif; ?>

          <!-- 3D Process -->
          <a 
            href="<?php echo ($activePage === 'home') ? '#process' : 'index.php#process'; ?>" 
            class="px-2 2xl:px-2.5 py-1.5 rounded-lg text-xs 2xl:text-sm font-medium text-slate-300 hover:text-white hover:bg-white/[0.06] transition-all whitespace-nowrap flex-shrink-0"
          >
            3D Process
          </a>

          <!-- Portfolio / Case Studies -->
          <a 
            href="portfolio.php" 
            class="px-2 2xl:px-2.5 py-1.5 rounded-lg text-xs 2xl:text-sm font-medium transition-all whitespace-nowrap flex-shrink-0 <?php echo ($activePage === 'portfolio') ? 'text-white bg-white/10' : 'text-slate-300 hover:text-white hover:bg-white/[0.06]'; ?>"
          >
            Portfolio
          </a>

          <!-- About Us -->
          <a 
            href="about.php" 
            class="px-2 2xl:px-2.5 py-1.5 rounded-lg text-xs 2xl:text-sm font-medium transition-all whitespace-nowrap flex-shrink-0 <?php echo ($activePage === 'about') ? 'text-white bg-white/10' : 'text-slate-300 hover:text-white hover:bg-white/[0.06]'; ?>"
          >
            About
          </a>

          <!-- Why Choose YUKT -->
          <a 
            href="<?php echo ($activePage === 'home') ? '#why-yukt' : 'index.php#why-yukt'; ?>" 
            class="px-2 2xl:px-2.5 py-1.5 rounded-lg text-xs 2xl:text-sm font-medium text-slate-300 hover:text-white hover:bg-white/[0.06] transition-all whitespace-nowrap flex-shrink-0"
          >
            Why YUKT
          </a>

          <!-- Contact Page -->
          <a 
            href="contact.php" 
            class="px-2 2xl:px-2.5 py-1.5 rounded-lg text-xs 2xl:text-sm font-medium transition-all whitespace-nowrap flex-shrink-0 <?php echo ($activePage === 'contact') ? 'text-white bg-white/10' : 'text-slate-300 hover:text-white hover:bg-white/[0.06]'; ?>"
          >
            Contact
          </a>

        </div>

        <!-- Right Action Buttons & Mobile Hamburger -->
        <div class="flex items-center gap-1.5 sm:gap-2.5 flex-shrink-0 flex-nowrap">
          
          <!-- Quick Quote Modal Trigger (Commented out as requested) -->
          <!--
          <button type="button" class="hidden md:inline-flex items-center gap-1.5 px-3 py-1.5 lg:px-3.5 lg:py-2 rounded-xl text-xs font-semibold text-slate-200 bg-white/[0.06] hover:bg-white/10 border border-white/10 transition-all open-quote-modal-btn whitespace-nowrap flex-shrink-0">
            <span>Get a Quote</span>
          </button>
          -->

          <!-- WhatsApp Primary Action Link (Tablet & Desktop: >= 640px) -->
          <a 
            href="<?php echo getWhatsAppUrl('Hi YUKT IT SOLUTIONS, I want to discuss a project.'); ?>"
            target="_blank"
            rel="noopener noreferrer"
            class="hidden sm:inline-flex items-center gap-2 px-3 py-1.5 lg:px-4 lg:py-2 rounded-xl text-xs sm:text-sm font-semibold text-white bg-gradient-to-r from-electric-500 to-electric-600 bg-electric-600 hover:from-electric-400 hover:to-electric-500 border border-electric-400/30 shadow-lg shadow-electric-500/25 transition-all whitespace-nowrap flex-shrink-0"
            title="Chat on WhatsApp (+91 82354 11806)"
          >
            <span class="w-2 h-2 rounded-full bg-emerald-400 animate-ping"></span>
            <span>WhatsApp Us</span>
            <i data-lucide="arrow-up-right" class="w-3.5 h-3.5"></i>
          </a>

          <!-- Quick Mobile WhatsApp Button (< 640px phones) -->
          <a 
            href="<?php echo getWhatsAppUrl('Hi YUKT IT SOLUTIONS, I want to discuss a project.'); ?>"
            target="_blank"
            rel="noopener noreferrer"
            class="inline-flex sm:hidden items-center gap-1.5 px-2.5 py-1.5 rounded-lg text-xs font-bold text-white bg-emerald-600 hover:bg-emerald-500 shadow-md shadow-emerald-600/30 transition-all flex-shrink-0 whitespace-nowrap"
            title="Chat on WhatsApp (+91 82354 11806)"
          >
            <i data-lucide="message-circle" class="w-3.5 h-3.5"></i>
            <span class="text-[11px]">WhatsApp</span>
          </a>

          <!-- Mobile Menu Toggle Button (Visible on < 1280px) -->
          <button 
            id="mobileMenuToggle" 
            type="button"
            aria-label="Toggle Menu"
            class="xl:hidden p-2 sm:p-2.5 rounded-xl bg-white/[0.08] border border-white/15 text-slate-200 hover:text-white hover:bg-white/15 active:scale-95 transition-all flex-shrink-0 flex items-center justify-center"
          >
            <span id="menuIconOpen"><i data-lucide="menu" class="w-5 h-5"></i></span>
            <span id="menuIconClose" class="hidden"><i data-lucide="x" class="w-5 h-5"></i></span>
          </button>
        </div>
      </nav>

      <!-- Mobile Drawer Backdrop Overlay -->
      <div id="mobileDrawerBackdrop" class="fixed inset-0 bg-black/75 backdrop-blur-sm z-40 hidden transition-opacity duration-300 xl:hidden"></div>

      <!-- Mobile Navigation Drawer with Responsive Max Height & Smooth Scrolling -->
      <div 
        id="mobileDrawer" 
        class="hidden xl:hidden mt-2 dropdown-mega-panel rounded-2xl p-4 sm:p-5 shadow-2xl shadow-black/95 max-h-[calc(100dvh-5.5rem)] overflow-y-auto overscroll-contain border border-white/15 relative z-50"
        style="-webkit-overflow-scrolling: touch;"
      >
      >
        <div class="flex flex-col space-y-1.5">
          <!-- Home Link -->
          <a href="index.php" class="mobile-nav-link px-3.5 py-2.5 rounded-xl text-sm font-medium <?php echo ($activePage === 'home') ? 'text-white bg-white/10' : 'text-slate-200 hover:bg-white/5'; ?> flex items-center justify-between transition-colors">
            <span class="flex items-center gap-2.5">
              <i data-lucide="home" class="w-4 h-4 text-electric-400"></i>
              <span>Home</span>
            </span>
            <i data-lucide="chevron-right" class="w-4 h-4 text-slate-500"></i>
          </a>
          
          <!-- Collapsible Services Accordion Section -->
          <div id="mobileServicesContainer" class="rounded-xl overflow-hidden bg-white/[0.03] border border-white/10 transition-all">
            <button 
              type="button" 
              id="mobileServicesToggle"
              class="w-full px-3.5 py-3 text-sm font-medium text-slate-200 hover:text-white hover:bg-white/5 active:bg-white/10 flex items-center justify-between transition-all cursor-pointer select-none group focus:outline-none"
              aria-expanded="false"
              aria-controls="mobileServicesMenu"
            >
              <span class="flex items-center gap-2.5">
                <i data-lucide="layers" class="w-4 h-4 text-electric-400 group-hover:scale-110 transition-transform"></i>
                <span class="font-semibold text-white">Services</span>
                <span class="text-[10px] font-mono px-2 py-0.5 rounded-full bg-electric-500/15 text-electric-400 border border-electric-400/25">8 Disciplines</span>
              </span>
              <span class="mobile-services-chevron-wrapper p-1 rounded-lg bg-white/5 text-slate-300 transition-transform duration-300 inline-flex items-center justify-center">
                <i data-lucide="chevron-down" id="mobileServicesChevron" class="w-4 h-4"></i>
              </span>
            </button>
            
            <!-- Collapsible Submenu (Hidden by default, toggled via JS) -->
            <div id="mobileServicesMenu" class="hidden px-2 pb-3 space-y-1 border-t border-white/10 pt-2.5 bg-black/30">
              <div class="flex items-center justify-between px-3 py-1.5 text-[11px] font-mono border-b border-white/5 mb-1.5 pb-2">
                <a href="services.php" class="text-yukt-orange hover:text-amber-400 font-semibold flex items-center gap-1.5 transition-colors">
                  <i data-lucide="arrow-right-circle" class="w-3.5 h-3.5"></i>
                  <span>All 8 Services Overview &rarr;</span>
                </a>
                <a href="index.php#services" class="text-slate-400 hover:text-white flex items-center gap-1 transition-colors">
                  <i data-lucide="sparkles" class="w-3 h-3 text-electric-400"></i>
                  <span>3D View</span>
                </a>
              </div>
              <div class="grid grid-cols-1 gap-1">
                <?php foreach ($SERVICES as $s): ?>
                  <a href="<?php echo $s['url']; ?>" class="flex items-center justify-between px-3 py-2.5 rounded-xl text-xs text-slate-300 hover:text-white hover:bg-white/10 active:bg-white/15 transition-all group">
                    <span class="flex items-center gap-2.5 truncate">
                      <span class="w-2 h-2 rounded-full <?php echo ($s['accent'] === 'orange') ? 'bg-yukt-orange' : 'bg-electric-400'; ?> shrink-0 group-hover:scale-125 transition-transform"></span>
                      <span class="font-medium truncate"><?php echo htmlspecialchars($s['title']); ?></span>
                    </span>
                    <i data-lucide="arrow-right" class="w-3 h-3 text-slate-500 group-hover:text-white group-hover:translate-x-0.5 transition-all shrink-0"></i>
                  </a>
                <?php endforeach; ?>
              </div>
            </div>
          </div>

          <!-- Digital Partner Program Link -->
          <?php if (isset($_SESSION['partner_id'])): ?>
            <a href="partner-dashboard.php" class="mobile-nav-link px-3.5 py-2.5 rounded-xl text-sm font-semibold text-emerald-300 bg-emerald-500/10 border border-emerald-400/20 flex items-center justify-between transition-colors">
              <span class="flex items-center gap-2.5">
                <i data-lucide="layout-dashboard" class="w-4 h-4 text-emerald-400"></i>
                <span>Partner Dashboard</span>
              </span>
              <i data-lucide="arrow-right" class="w-4 h-4 text-emerald-400"></i>
            </a>
          <?php else: ?>
            <a href="partner.php" class="mobile-nav-link px-3.5 py-2.5 rounded-xl text-sm font-medium <?php echo ($activePage === 'partner') ? 'text-white bg-white/10' : 'text-slate-200 hover:bg-white/5'; ?> flex items-center justify-between transition-colors">
              <span class="flex items-center gap-2.5">
                <i data-lucide="store" class="w-4 h-4 text-yukt-orange"></i>
                <span>Digital Partner Program</span>
                <span class="text-[10px] font-mono px-1.5 py-0.5 rounded-full bg-yukt-orange/20 text-yukt-orange border border-yukt-orange/30">Earn 15-25%</span>
              </span>
              <i data-lucide="chevron-right" class="w-4 h-4 text-slate-500"></i>
            </a>
          <?php endif; ?>

          <!-- 3D Execution Process -->
          <a href="<?php echo ($activePage === 'home') ? '#process' : 'index.php#process'; ?>" class="mobile-nav-link px-3.5 py-2.5 rounded-xl text-sm font-medium text-slate-200 hover:bg-white/5 flex items-center justify-between transition-colors">
            <span class="flex items-center gap-2.5">
              <i data-lucide="cpu" class="w-4 h-4 text-electric-400"></i>
              <span>3D Execution Process</span>
            </span>
            <i data-lucide="chevron-right" class="w-4 h-4 text-slate-500"></i>
          </a>

          <!-- Portfolio & Work -->
          <a href="portfolio.php" class="mobile-nav-link px-3.5 py-2.5 rounded-xl text-sm font-medium <?php echo ($activePage === 'portfolio') ? 'text-white bg-white/10' : 'text-slate-200 hover:bg-white/5'; ?> flex items-center justify-between transition-colors">
            <span class="flex items-center gap-2.5">
              <i data-lucide="briefcase" class="w-4 h-4 text-electric-400"></i>
              <span>Portfolio &amp; Work</span>
              <span class="text-[10px] font-mono px-1.5 py-0.5 rounded bg-emerald-500/20 text-emerald-300 border border-emerald-400/30">42+ Live</span>
            </span>
            <i data-lucide="chevron-right" class="w-4 h-4 text-slate-500"></i>
          </a>

          <!-- About YUKT -->
          <a href="about.php" class="mobile-nav-link px-3.5 py-2.5 rounded-xl text-sm font-medium <?php echo ($activePage === 'about') ? 'text-white bg-white/10' : 'text-slate-200 hover:bg-white/5'; ?> flex items-center justify-between transition-colors">
            <span class="flex items-center gap-2.5">
              <i data-lucide="info" class="w-4 h-4 text-electric-400"></i>
              <span>About YUKT</span>
            </span>
            <i data-lucide="chevron-right" class="w-4 h-4 text-slate-500"></i>
          </a>

          <!-- Why Choose YUKT -->
          <a href="<?php echo ($activePage === 'home') ? '#why-yukt' : 'index.php#why-yukt'; ?>" class="mobile-nav-link px-3.5 py-2.5 rounded-xl text-sm font-medium text-slate-200 hover:bg-white/5 flex items-center justify-between transition-colors">
            <span class="flex items-center gap-2.5">
              <i data-lucide="shield-check" class="w-4 h-4 text-electric-400"></i>
              <span>Why Choose YUKT</span>
            </span>
            <i data-lucide="chevron-right" class="w-4 h-4 text-slate-500"></i>
          </a>

          <!-- Contact Us -->
          <a href="contact.php" class="mobile-nav-link px-3.5 py-2.5 rounded-xl text-sm font-medium <?php echo ($activePage === 'contact') ? 'text-white bg-white/10' : 'text-slate-200 hover:bg-white/5'; ?> flex items-center justify-between transition-colors">
            <span class="flex items-center gap-2.5">
              <i data-lucide="phone-call" class="w-4 h-4 text-electric-400"></i>
              <span>Contact Us</span>
            </span>
            <i data-lucide="chevron-right" class="w-4 h-4 text-slate-500"></i>
          </a>

          <!-- Bottom Action Buttons -->
          <div class="pt-3 border-t border-white/10 space-y-2.5 mt-1">
            <!-- Get a Quote Modal Trigger (Commented out as requested) -->
            <!--
            <button type="button" class="w-full py-3 px-4 rounded-xl font-display font-semibold text-xs sm:text-sm text-slate-200 bg-white/10 hover:bg-white/20 border border-white/15 transition-all flex items-center justify-center gap-2 open-quote-modal-btn">
              <span>Get a Project Scope Quote</span>
              <i data-lucide="arrow-right" class="w-3.5 h-3.5 text-electric-400"></i>
            </button>
            -->
            <a 
              href="<?php echo getWhatsAppUrl('Hi YUKT IT SOLUTIONS, I want to discuss a project.'); ?>"
              target="_blank"
              rel="noopener noreferrer"
              class="w-full py-3.5 px-4 rounded-xl font-display font-semibold text-xs sm:text-sm text-white bg-gradient-to-r from-yukt-orange to-amber-600 hover:from-yukt-orangeLight hover:to-yukt-orange flex items-center justify-center gap-2 shadow-xl shadow-yukt-orange/30 border border-amber-400/30 transition-all active:scale-[0.98]"
            >
              <i data-lucide="message-circle" class="w-4 h-4"></i>
              <span>Start Project on WhatsApp (+91 82354 11806)</span>
            </a>
            <a 
              href="tel:+918235411806"
              class="w-full py-2.5 px-4 rounded-xl font-display font-semibold text-xs text-slate-300 hover:text-white bg-white/5 hover:bg-white/10 flex items-center justify-center gap-2 border border-white/10 transition-all"
            >
              <i data-lucide="phone" class="w-3.5 h-3.5 text-blue-400"></i>
              <span>Call Helpline (+91 82354 11806)</span>
            </a>
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- Main Content Anchor -->
  <main id="mainContent" class="flex-grow <?php echo ($activePage === 'home') ? '' : 'pt-24 lg:pt-28'; ?>">
