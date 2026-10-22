<?php
require_once __DIR__ . '/config.php';
require_once __DIR__ . '/components/icons.php';
require_once __DIR__ . '/components/button.php';
require_once __DIR__ . '/components/badge.php';

$activePage = $activePage ?? 'home';
$pageTitle = $pageTitle ?? (COMPANY_NAME . ' — Website Development, Custom Software & AI Automation');
$pageDesc = $pageDesc ?? 'YUKT IT SOLUTIONS is an Indian IT enterprise engineering high-performance websites, custom SaaS software, AI automation, e-commerce, and digital growth engines.';
$cssVersion = file_exists(__DIR__ . '/../assets/css/main.css') ? filemtime(__DIR__ . '/../assets/css/main.css') : time();

$currentScript = basename($_SERVER['PHP_SELF']);
$canonicalUrl = ($currentScript === 'index.php') ? COMPANY_URL . '/' : COMPANY_URL . '/' . $currentScript;
?>
<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo htmlspecialchars($pageTitle); ?></title>
  <meta name="description" content="<?php echo htmlspecialchars($pageDesc); ?>">
  <link rel="canonical" href="<?php echo htmlspecialchars($canonicalUrl); ?>">
  <meta name="robots" content="index, follow">
  <meta name="theme-color" content="#0B1220">
  
  <!-- Open Graph / Meta -->
  <meta property="og:type" content="website">
  <meta property="og:title" content="<?php echo htmlspecialchars($pageTitle); ?>">
  <meta property="og:description" content="<?php echo htmlspecialchars($pageDesc); ?>">
  <meta property="og:url" content="<?php echo htmlspecialchars($canonicalUrl); ?>">
  <meta property="og:site_name" content="<?php echo COMPANY_NAME; ?>">
  <meta property="og:image" content="<?php echo COMPANY_URL; ?>/assets/images/yukt-logo.svg">
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="<?php echo htmlspecialchars($pageTitle); ?>">
  <meta name="twitter:description" content="<?php echo htmlspecialchars($pageDesc); ?>">
  <meta name="twitter:image" content="<?php echo COMPANY_URL; ?>/assets/images/yukt-logo.svg">

  <!-- Favicon -->
  <link rel="icon" type="image/svg+xml" href="assets/images/favicon.svg">

  <!-- Typography Preconnect & DNS Prefetch -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="dns-prefetch" href="https://fonts.googleapis.com">
  <link rel="dns-prefetch" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=JetBrains+Mono:wght@400;500&display=swap" rel="stylesheet">

  <!-- Compiled Stylesheet (Tailwind CSS + Design System) -->
  <link rel="stylesheet" href="assets/css/main.css?v=<?php echo $cssVersion; ?>">

  <!-- Schema.org Organization & WebSite Structured Data -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@graph": [
      {
        "@type": "Organization",
        "@id": "<?php echo COMPANY_URL; ?>/#organization",
        "name": "<?php echo COMPANY_NAME; ?>",
        "legalName": "<?php echo COMPANY_LEGAL_NAME; ?>",
        "url": "<?php echo COMPANY_URL; ?>",
        "logo": "<?php echo COMPANY_URL; ?>/assets/images/yukt-logo.svg",
        "description": "<?php echo addslashes($pageDesc); ?>",
        "telephone": "<?php echo PHONE_NUMBER; ?>",
        "email": "<?php echo EMAIL_PRIMARY; ?>",
        "address": {
          "@type": "PostalAddress",
          "streetAddress": "Sector 62",
          "addressLocality": "Noida",
          "addressRegion": "NCR",
          "addressCountry": "IN"
        },
        "sameAs": [
          "<?php echo LINKEDIN_URL; ?>",
          "<?php echo TWITTER_URL; ?>"
        ]
      },
      {
        "@type": "WebSite",
        "@id": "<?php echo COMPANY_URL; ?>/#website",
        "url": "<?php echo COMPANY_URL; ?>",
        "name": "<?php echo COMPANY_NAME; ?>",
        "publisher": {
          "@id": "<?php echo COMPANY_URL; ?>/#organization"
        }
      }
    ]
  }
  </script>
</head>
<body class="bg-white text-navy-800 antialiased selection:bg-electric-600 selection:text-white flex flex-col min-h-screen">

  <!-- Accessible Skip Navigation -->
  <a href="#mainContent" class="sr-only focus:not-sr-only focus:fixed focus:top-3 focus:left-3 focus:z-50 focus:px-4 focus:py-2 focus:bg-electric-600 focus:text-white focus:rounded-btn">
    Skip to main content
  </a>

  <!-- Top Utility Bar (Clean Minimalist Micro-Header) -->
  <div class="bg-navy-950 text-slate-300 text-xs py-2 border-b border-navy-900/60 hidden sm:block">
    <div class="container-custom flex items-center justify-between">
      <div class="flex items-center gap-6">
        <span class="flex items-center gap-2 text-slate-300">
          <span class="w-2 h-2 rounded-full bg-emerald-500 animate-pulse"></span>
          <span>Available for New Projects &amp; Sprints (Q4 2026)</span>
        </span>
        <span class="hidden md:inline-flex items-center gap-1.5 text-slate-400">
          <?php echo getIconSvg('clock', 'w-3.5 h-3.5 text-slate-400'); ?>
          <span><?php echo WORKING_HOURS; ?></span>
        </span>
      </div>
      <div class="flex items-center gap-5">
        <a href="mailto:<?php echo EMAIL_PRIMARY; ?>" class="hover:text-white transition-colors duration-150 flex items-center gap-1.5">
          <?php echo getIconSvg('mail', 'w-3.5 h-3.5 text-electric-400'); ?>
          <span><?php echo EMAIL_PRIMARY; ?></span>
        </a>
        <span class="text-navy-700">|</span>
        <a href="tel:<?php echo PHONE_RAW; ?>" class="hover:text-white transition-colors duration-150 flex items-center gap-1.5">
          <?php echo getIconSvg('phone', 'w-3.5 h-3.5 text-brandOrange-500'); ?>
          <span><?php echo PHONE_NUMBER; ?></span>
        </a>
        <span class="text-navy-700">|</span>
        <a href="<?php echo getWhatsAppUrl('Hi Yukt IT Solutions, I would like to discuss a project with your team.'); ?>" target="_blank" rel="noopener noreferrer" class="text-emerald-400 hover:text-emerald-300 transition-colors duration-150 flex items-center gap-1.5 font-medium">
          <?php echo getIconSvg('whatsapp', 'w-3.5 h-3.5 text-emerald-400'); ?>
          <span>WhatsApp Quick Chat</span>
          <?php echo getIconSvg('arrow-right', 'w-3 h-3'); ?>
        </a>
      </div>
    </div>
  </div>

  <!-- Primary Sticky Header Navigation -->
  <header class="sticky top-0 z-40 bg-white/95 backdrop-blur-md border-b border-canvas-border transition-all duration-200">
    <div class="container-custom">
      <div class="flex items-center justify-between h-16 sm:h-[70px]">
        
        <!-- Brand Logo -->
        <a href="index.php" class="flex items-center gap-3 group focus:outline-none focus:ring-2 focus:ring-electric-500 rounded-lg p-1 -ml-1">
          <img src="assets/images/yukt-logo.svg" alt="Yukt IT Solutions Logo" class="h-8 sm:h-9 w-auto" width="160" height="38">
        </a>

        <!-- Desktop Navigation Links -->
        <nav class="hidden lg:flex items-center gap-8" aria-label="Main Navigation">
          <?php foreach ($NAV_LINKS as $link): ?>
            <?php if (!empty($link['has_dropdown'])): ?>
              <!-- Services Dropdown with Flyout Menu -->
              <div class="relative group/menu">
                <button type="button" class="flex items-center gap-1.5 text-[15px] font-medium text-navy-800 group-hover/menu:text-electric-600 transition-colors py-2 focus:outline-none" aria-expanded="false">
                  <span><?php echo htmlspecialchars($link['label']); ?></span>
                  <?php echo getIconSvg('chevron-down', 'w-3.5 h-3.5 text-slate-400 group-hover/menu:text-electric-600 transition-transform duration-200 group-hover/menu:rotate-180'); ?>
                </button>

                <!-- Flyout Grid Menu -->
                <div class="absolute top-full left-1/2 -translate-x-1/2 w-[740px] bg-white border border-canvas-border rounded-xl shadow-xl p-6 opacity-0 translate-y-2 pointer-events-none group-hover/menu:opacity-100 group-hover/menu:translate-y-0 group-hover/menu:pointer-events-auto transition-all duration-200 z-50">
                  <div class="flex items-center justify-between pb-3 mb-4 border-b border-canvas-border">
                    <span class="text-xs font-semibold uppercase tracking-wider text-navy-800">Enterprise IT &amp; Creative Capabilities</span>
                    <a href="services.php" class="text-xs font-semibold text-electric-600 hover:text-electric-700 flex items-center gap-1">
                      <span>View All Services</span>
                      <?php echo getIconSvg('arrow-right', 'w-3 h-3'); ?>
                    </a>
                  </div>
                  <div class="grid grid-cols-2 gap-3">
                    <?php foreach ($SERVICES as $s): ?>
                      <a href="<?php echo $s['url']; ?>" class="flex items-start gap-3 p-3 rounded-lg hover:bg-canvas-subtle hover:border-canvas-border border border-transparent transition-all duration-150 group/item">
                        <div class="w-9 h-9 rounded-md <?php echo ($s['accent'] === 'orange') ? 'bg-brandOrange-50 text-brandOrange-600' : 'bg-electric-50 text-electric-600'; ?> flex items-center justify-center flex-shrink-0 mt-0.5 group-hover/item:scale-105 transition-transform">
                          <?php echo getIconSvg($s['icon'], 'w-4 h-4'); ?>
                        </div>
                        <div>
                          <div class="text-sm font-semibold text-navy-800 group-hover/item:text-electric-600 transition-colors flex items-center gap-1.5">
                            <span><?php echo htmlspecialchars($s['title']); ?></span>
                          </div>
                          <p class="text-xs text-navy-500 line-clamp-1 mt-0.5"><?php echo htmlspecialchars($s['tagline']); ?></p>
                        </div>
                      </a>
                    <?php endforeach; ?>
                  </div>
                </div>
              </div>
            <?php else: ?>
              <?php 
                $linkHref = $link['url'];
                if ($link['key'] === 'solutions' && $activePage === 'home') {
                  $linkHref = '#solutions';
                }
              ?>
              <a href="<?php echo $linkHref; ?>" class="text-[15px] font-medium transition-colors duration-150 relative py-1 <?php echo ($activePage === $link['key']) ? 'text-electric-600' : 'text-navy-700 hover:text-electric-600'; ?>">
                <?php echo htmlspecialchars($link['label']); ?>
                <?php if ($activePage === $link['key']): ?>
                  <span class="absolute bottom-0 left-0 right-0 h-[2px] bg-electric-600 rounded-full"></span>
                <?php endif; ?>
              </a>
            <?php endif; ?>
          <?php endforeach; ?>
        </nav>

        <!-- Right Action Button & Mobile Hamburger -->
        <div class="flex items-center gap-2.5 sm:gap-3">
          <!-- WhatsApp Quick Action CTA -->
          <a href="<?php echo getWhatsAppUrl('Hi Yukt IT Solutions, I would like to discuss a project with your team.'); ?>" target="_blank" rel="noopener noreferrer" class="hidden sm:inline-flex items-center gap-2 px-3.5 h-10 text-xs font-semibold rounded-lg bg-emerald-50 text-emerald-700 border border-emerald-200 hover:bg-emerald-100 hover:border-emerald-300 transition-all duration-150 shadow-subtle" title="Chat on WhatsApp (+91 72176 45059)">
            <?php echo getIconSvg('whatsapp', 'w-4 h-4 text-emerald-600'); ?>
            <span class="hidden md:inline">WhatsApp</span>
          </a>

          <!-- Prominent CTA Button (Triggers Quote Modal) -->
          <button type="button" class="btn-primary h-10 px-5 text-sm hidden sm:inline-flex open-quote-modal-btn">
            <span>Get a Quote</span>
            <?php echo getIconSvg('arrow-right', 'w-4 h-4'); ?>
          </button>

          <!-- Mobile Menu Toggle Button -->
          <button type="button" id="mobileMenuToggle" class="lg:hidden p-2 rounded-btn text-navy-800 hover:bg-slate-100 focus:outline-none focus:ring-2 focus:ring-electric-500" aria-label="Open mobile navigation menu" aria-expanded="false">
            <span id="menuIconOpen"><?php echo getIconSvg('menu', 'w-6 h-6'); ?></span>
            <span id="menuIconClose" class="hidden"><?php echo getIconSvg('x', 'w-6 h-6'); ?></span>
          </button>
        </div>

      </div>
    </div>

    <!-- Mobile Drawer Navigation -->
    <div id="mobileDrawer" class="lg:hidden fixed inset-x-0 top-16 sm:top-[70px] bg-white border-b border-canvas-border shadow-xl px-6 py-6 space-y-4 max-h-[calc(100vh-5rem)] overflow-y-auto hidden">
      <nav class="space-y-2">
        <a href="services.php" class="block py-2 text-base font-semibold <?php echo ($activePage === 'services') ? 'text-electric-600' : 'text-navy-900 hover:text-electric-600'; ?>">Services</a>
        
        <div class="py-2 border-t border-b border-canvas-border my-2">
          <div class="text-xs font-bold uppercase tracking-wider text-slate-500 mb-2">Our 8 Core Capabilities</div>
          <div class="grid grid-cols-1 gap-2 pl-2">
            <?php foreach ($SERVICES as $s): ?>
              <a href="<?php echo $s['url']; ?>" class="flex items-center gap-2.5 py-1.5 text-sm text-navy-700 hover:text-electric-600">
                <span class="w-1.5 h-1.5 rounded-full <?php echo ($s['accent'] === 'orange') ? 'bg-brandOrange-500' : 'bg-electric-600'; ?>"></span>
                <span><?php echo htmlspecialchars($s['title']); ?></span>
              </a>
            <?php endforeach; ?>
          </div>
        </div>

        <a href="<?php echo ($activePage === 'home') ? '#solutions' : 'index.php#solutions'; ?>" class="block py-2 text-base font-semibold text-navy-900 hover:text-electric-600">Solutions</a>
        <a href="portfolio.php" class="block py-2 text-base font-semibold <?php echo ($activePage === 'portfolio') ? 'text-electric-600' : 'text-navy-900 hover:text-electric-600'; ?>">Portfolio &amp; Work</a>
        <a href="about.php" class="block py-2 text-base font-semibold <?php echo ($activePage === 'about') ? 'text-electric-600' : 'text-navy-900 hover:text-electric-600'; ?>">About Us</a>
        <a href="contact.php" class="block py-2 text-base font-semibold <?php echo ($activePage === 'contact') ? 'text-electric-600' : 'text-navy-900 hover:text-electric-600'; ?>">Contact</a>
      </nav>

      <div class="pt-4 border-t border-canvas-border space-y-3">
        <button type="button" class="btn-primary w-full py-3 open-quote-modal-btn">
          <span>Get a Quote</span>
          <?php echo getIconSvg('arrow-right', 'w-4 h-4'); ?>
        </button>
        <a href="<?php echo getWhatsAppUrl('Hi Yukt IT Solutions, I would like to discuss a project with your team.'); ?>" target="_blank" rel="noopener noreferrer" class="btn-secondary w-full py-2.5 text-emerald-700 border-emerald-200 hover:bg-emerald-50 flex items-center justify-center gap-2">
          <?php echo getIconSvg('whatsapp', 'w-4 h-4 text-emerald-600'); ?>
          <span>Chat on WhatsApp</span>
        </a>
      </div>
    </div>
  </header>

  <!-- Main Content Anchor -->
  <main id="mainContent" class="flex-grow">
