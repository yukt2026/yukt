<?php
require_once __DIR__ . '/config.php';
require_once __DIR__ . '/components/icons.php';
require_once __DIR__ . '/components/button.php';
require_once __DIR__ . '/components/badge.php';

$activePage = $activePage ?? 'home';
$pageTitle = $pageTitle ?? (COMPANY_NAME . ' | Technology That Moves Your Business Forward');
$pageDesc = $pageDesc ?? 'YUKT IT SOLUTIONS builds intelligent digital experiences, powerful software, websites, and AI-driven solutions that help businesses grow faster.';
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
  <meta name="theme-color" content="#040914">
  
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

  <!-- Typography Preconnect & Google Fonts (Inter + JetBrains Mono + Plus Jakarta Sans + Space Grotesk) -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=JetBrains+Mono:wght@400;500;600&family=Plus+Jakarta+Sans:wght@400;500;600;700;800&family=Space+Grotesk:wght@500;600;700&display=swap" rel="stylesheet">

  <!-- Compiled Stylesheet (Tailwind CSS + Futuristic 3D Design Tokens) -->
  <link rel="stylesheet" href="assets/css/main.css?v=<?php echo $cssVersion; ?>">

  <!-- Lucide Icons -->
  <script src="https://unpkg.com/lucide@latest"></script>

  <!-- Three.js r128 -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js"></script>

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
<body class="bg-navy-950 text-slate-100 antialiased selection:bg-electric-500 selection:text-white flex flex-col min-h-screen">

  <!-- Accessible Skip Navigation -->
  <a href="#mainContent" class="sr-only focus:not-sr-only focus:fixed focus:top-3 focus:left-3 focus:z-50 focus:px-4 focus:py-2 focus:bg-electric-600 focus:text-white focus:rounded-btn">
    Skip to main content
  </a>

  <!-- ==========================================
       HEADER / GLASSMORPHISM NAVIGATION BAR
  =========================================== -->
  <header id="navbar" class="fixed top-0 left-0 right-0 z-50 transition-all duration-300 py-4 px-4 sm:px-6 lg:px-10">
    <div class="max-w-7xl mx-auto">
      <nav class="glass-dark rounded-2xl px-4 sm:px-6 py-3 flex items-center justify-between shadow-2xl shadow-black/40">
        
        <!-- Brand Logo Badge -->
        <a href="index.php" class="flex items-center gap-3 group focus:outline-none" aria-label="YUKT IT SOLUTIONS Home">
          <div class="relative w-10 h-10 rounded-xl bg-gradient-to-br from-electric-500 via-electric-600 to-yukt-orange p-[1.5px] shadow-lg shadow-electric-500/25 group-hover:scale-105 transition-transform">
            <div class="w-full h-full bg-navy-950 rounded-[10px] flex items-center justify-center relative overflow-hidden">
              <div class="absolute inset-0 bg-gradient-to-tr from-electric-500/20 to-yukt-orange/30 opacity-80"></div>
              <span class="font-display font-bold text-lg tracking-tighter text-white relative z-10">Y<span class="text-yukt-orange">.</span></span>
            </div>
          </div>
          <div class="flex flex-col">
            <div class="flex items-center gap-1.5">
              <span class="font-display font-bold text-base sm:text-lg tracking-tight text-white">YUKT</span>
              <span class="font-display font-semibold text-xs sm:text-sm tracking-widest uppercase text-electric-400">IT SOLUTIONS</span>
            </div>
            <span class="font-mono text-[10px] text-slate-400 tracking-wider hidden sm:inline">yukt.online</span>
          </div>
        </a>

        <!-- Desktop Navigation Links (with Glass Dropdown) -->
        <div class="hidden lg:flex items-center gap-1 bg-white/[0.03] border border-white/[0.06] rounded-xl px-2 py-1 relative">
          
          <!-- Services with Interactive Flyout Mega-Menu -->
          <div class="relative group/menu">
            <a 
              href="services.php" 
              class="px-3.5 py-2 rounded-lg text-sm font-medium transition-all inline-flex items-center gap-1.5 <?php echo ($activePage === 'services') ? 'text-white bg-white/10' : 'text-slate-300 hover:text-white hover:bg-white/[0.06]'; ?>"
            >
              <span>Services</span>
              <i data-lucide="chevron-down" class="w-3.5 h-3.5 text-slate-400 group-hover/menu:text-white transition-transform group-hover/menu:rotate-180"></i>
            </a>

            <!-- Dropdown Menu -->
            <div class="absolute top-full left-0 w-[680px] glass-dark rounded-2xl p-5 border border-white/15 shadow-2xl opacity-0 translate-y-2 pointer-events-none group-hover/menu:opacity-100 group-hover/menu:translate-y-0 group-hover/menu:pointer-events-auto transition-all duration-200 z-50">
              <div class="flex items-center justify-between pb-3 mb-3 border-b border-white/10 text-xs">
                <span class="font-mono uppercase tracking-wider text-slate-400">8 Core Capabilities</span>
                <div class="flex items-center gap-3">
                  <a href="index.php#services" class="text-electric-400 hover:text-electric-300 font-medium flex items-center gap-1">
                    <span>3D Showcase</span>
                    <i data-lucide="sparkles" class="w-3 h-3"></i>
                  </a>
                  <span class="text-slate-600">|</span>
                  <a href="services.php" class="text-yukt-orange hover:text-amber-400 font-semibold flex items-center gap-1">
                    <span>View All Services</span>
                    <i data-lucide="arrow-right" class="w-3 h-3"></i>
                  </a>
                </div>
              </div>
              <div class="grid grid-cols-2 gap-2 text-left">
                <?php foreach ($SERVICES as $s): ?>
                  <a href="<?php echo $s['url']; ?>" class="flex items-start gap-3 p-2.5 rounded-xl hover:bg-white/5 border border-transparent hover:border-white/10 transition-all group/item">
                    <div class="w-8 h-8 rounded-lg <?php echo ($s['accent'] === 'orange') ? 'bg-yukt-orange/20 text-yukt-orange border border-yukt-orange/30' : 'bg-electric-500/20 text-electric-400 border border-electric-400/30'; ?> flex items-center justify-center flex-shrink-0 mt-0.5">
                      <i data-lucide="<?php echo $s['icon']; ?>" class="w-4 h-4"></i>
                    </div>
                    <div>
                      <div class="text-xs font-semibold text-white group-hover/item:text-electric-400 transition-colors">
                        <?php echo htmlspecialchars($s['title']); ?>
                      </div>
                      <p class="text-[11px] text-slate-400 line-clamp-1 mt-0.5"><?php echo htmlspecialchars($s['tagline']); ?></p>
                    </div>
                  </a>
                <?php endforeach; ?>
              </div>
            </div>
          </div>

          <!-- 3D Process -->
          <a 
            href="<?php echo ($activePage === 'home') ? '#process' : 'index.php#process'; ?>" 
            class="px-3.5 py-2 rounded-lg text-sm font-medium text-slate-300 hover:text-white hover:bg-white/[0.06] transition-all"
          >
            3D Process
          </a>

          <!-- Portfolio / Case Studies -->
          <a 
            href="portfolio.php" 
            class="px-3.5 py-2 rounded-lg text-sm font-medium transition-all <?php echo ($activePage === 'portfolio') ? 'text-white bg-white/10' : 'text-slate-300 hover:text-white hover:bg-white/[0.06]'; ?>"
          >
            Portfolio
          </a>

          <!-- About Us -->
          <a 
            href="about.php" 
            class="px-3.5 py-2 rounded-lg text-sm font-medium transition-all <?php echo ($activePage === 'about') ? 'text-white bg-white/10' : 'text-slate-300 hover:text-white hover:bg-white/[0.06]'; ?>"
          >
            About
          </a>

          <!-- Why Choose YUKT -->
          <a 
            href="<?php echo ($activePage === 'home') ? '#why-yukt' : 'index.php#why-yukt'; ?>" 
            class="px-3.5 py-2 rounded-lg text-sm font-medium text-slate-300 hover:text-white hover:bg-white/[0.06] transition-all"
          >
            Why YUKT
          </a>

          <!-- Contact Page -->
          <a 
            href="contact.php" 
            class="px-3.5 py-2 rounded-lg text-sm font-medium transition-all <?php echo ($activePage === 'contact') ? 'text-white bg-white/10' : 'text-slate-300 hover:text-white hover:bg-white/[0.06]'; ?>"
          >
            Contact
          </a>

        </div>

        <!-- Right Action Button & Mobile Hamburger -->
        <div class="flex items-center gap-3">
          <!-- Get a Quote Button -->
          <button type="button" class="hidden sm:inline-flex items-center gap-1.5 px-3.5 py-2 rounded-xl text-xs font-semibold text-slate-200 bg-white/[0.06] hover:bg-white/10 border border-white/10 transition-all open-quote-modal-btn">
            <span>Get a Quote</span>
          </button>

          <!-- WhatsApp Primary Action Link -->
          <a 
            href="<?php echo getWhatsAppUrl('Hi YUKT IT SOLUTIONS, I want to discuss a project.'); ?>"
            target="_blank"
            rel="noopener noreferrer"
            class="hidden sm:inline-flex items-center gap-2.5 px-4 py-2 rounded-xl text-xs sm:text-sm font-semibold text-white bg-gradient-to-r from-electric-500 to-electric-600 bg-electric-600 hover:from-electric-400 hover:to-electric-500 border border-electric-400/30 shadow-lg shadow-electric-500/25 hover:shadow-electric-500/40 transition-all hover:-translate-y-0.5"
            title="Chat on WhatsApp (+91 72176 45059)"
          >
            <span class="w-2 h-2 rounded-full bg-emerald-400 animate-ping"></span>
            <span>WhatsApp Us</span>
            <i data-lucide="arrow-up-right" class="w-4 h-4"></i>
          </a>

          <!-- Mobile Menu Toggle Button -->
          <button 
            id="mobileMenuToggle" 
            type="button"
            aria-label="Toggle Menu"
            class="lg:hidden p-2.5 rounded-xl bg-white/[0.05] border border-white/10 text-slate-200 hover:text-white hover:bg-white/10 transition-colors"
          >
            <span id="menuIconOpen"><i data-lucide="menu" class="w-5 h-5"></i></span>
            <span id="menuIconClose" class="hidden"><i data-lucide="x" class="w-5 h-5"></i></span>
          </button>
        </div>
      </nav>

      <!-- Mobile Navigation Drawer -->
      <div id="mobileDrawer" class="hidden lg:hidden mt-2 glass-dark rounded-2xl p-5 border border-white/10 shadow-2xl">
        <div class="flex flex-col space-y-2">
          <a href="index.php" class="mobile-nav-link px-4 py-2.5 rounded-xl text-sm font-medium text-slate-200 hover:bg-white/10 flex items-center justify-between">
            <span>Home</span>
            <i data-lucide="chevron-right" class="w-4 h-4 text-electric-400"></i>
          </a>
          
          <div class="border-t border-b border-white/10 py-2.5 my-1">
            <div class="flex items-center justify-between px-4 mb-2">
              <a href="services.php" class="text-xs font-bold font-mono uppercase tracking-wider text-electric-400 hover:underline">
                Services (All 8 Disciplines) &rarr;
              </a>
              <a href="index.php#services" class="text-[11px] font-mono text-slate-400 hover:text-white">3D View</a>
            </div>
            <div class="grid grid-cols-1 gap-1 pl-4 pr-2">
              <?php foreach ($SERVICES as $s): ?>
                <a href="<?php echo $s['url']; ?>" class="flex items-center gap-2 py-1.5 text-xs text-slate-300 hover:text-electric-400">
                  <span class="w-1.5 h-1.5 rounded-full <?php echo ($s['accent'] === 'orange') ? 'bg-yukt-orange' : 'bg-electric-400'; ?>"></span>
                  <span><?php echo htmlspecialchars($s['title']); ?></span>
                </a>
              <?php endforeach; ?>
            </div>
          </div>

          <a href="<?php echo ($activePage === 'home') ? '#process' : 'index.php#process'; ?>" class="mobile-nav-link px-4 py-2.5 rounded-xl text-sm font-medium text-slate-200 hover:bg-white/10 flex items-center justify-between">
            <span>3D Execution Process</span>
            <i data-lucide="chevron-right" class="w-4 h-4 text-electric-400"></i>
          </a>
          <a href="portfolio.php" class="mobile-nav-link px-4 py-2.5 rounded-xl text-sm font-medium text-slate-200 hover:bg-white/10 flex items-center justify-between">
            <span>Portfolio &amp; Work</span>
            <i data-lucide="chevron-right" class="w-4 h-4 text-electric-400"></i>
          </a>
          <a href="about.php" class="mobile-nav-link px-4 py-2.5 rounded-xl text-sm font-medium text-slate-200 hover:bg-white/10 flex items-center justify-between">
            <span>About YUKT</span>
            <i data-lucide="chevron-right" class="w-4 h-4 text-electric-400"></i>
          </a>
          <a href="<?php echo ($activePage === 'home') ? '#why-yukt' : 'index.php#why-yukt'; ?>" class="mobile-nav-link px-4 py-2.5 rounded-xl text-sm font-medium text-slate-200 hover:bg-white/10 flex items-center justify-between">
            <span>Why Choose YUKT</span>
            <i data-lucide="chevron-right" class="w-4 h-4 text-electric-400"></i>
          </a>
          <a href="contact.php" class="mobile-nav-link px-4 py-2.5 rounded-xl text-sm font-medium text-slate-200 hover:bg-white/10 flex items-center justify-between">
            <span>Contact Us</span>
            <i data-lucide="chevron-right" class="w-4 h-4 text-electric-400"></i>
          </a>

          <div class="pt-3 border-t border-white/10 space-y-2">
            <button type="button" class="w-full py-3 px-4 rounded-xl font-semibold text-sm text-slate-200 bg-white/10 hover:bg-white/20 border border-white/10 transition-colors open-quote-modal-btn">
              Get a Project Quote
            </button>
            <a 
              href="<?php echo getWhatsAppUrl('Hi YUKT IT SOLUTIONS, I want to discuss a project.'); ?>"
              target="_blank"
              rel="noopener noreferrer"
              class="w-full py-3.5 px-4 rounded-xl font-semibold text-sm text-white bg-gradient-to-r from-yukt-orange to-amber-500 flex items-center justify-center gap-2 shadow-lg shadow-yukt-orange/25"
            >
              <i data-lucide="message-circle" class="w-4 h-4"></i>
              <span>Start Project on WhatsApp (+91 72176 45059)</span>
            </a>
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- Main Content Anchor -->
  <main id="mainContent" class="flex-grow <?php echo ($activePage === 'home') ? '' : 'pt-24 lg:pt-28'; ?>">
