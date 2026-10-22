<?php
$activePage = 'home';
$pageTitle = 'YUKT IT SOLUTIONS | Website Development, Software & AI Solutions';
$pageDesc = 'YUKT IT SOLUTIONS builds modern websites, custom software, mobile apps, AI automation, and digital marketing solutions to help businesses grow.';

require_once __DIR__ . '/includes/header.php';
?>

  <!-- ==========================================
       SECTION 1: FULL-SCREEN INTERACTIVE 3D HERO (WITH ADVERT WAVE SHADER)
  =========================================== -->
  <section id="hero" class="advert-wave-hero relative pt-20 pb-12 sm:pt-24 sm:pb-16 lg:pt-28 lg:pb-20 lg:min-h-[calc(100vh-4.5rem)] lg:flex lg:items-center overflow-hidden bg-navy-950 bg-grid-dark">
    <!-- Ambient Lighting Glows Behind 3D Visual -->
    <div class="absolute top-1/3 left-1/4 -translate-x-1/2 -translate-y-1/2 w-[350px] sm:w-[500px] h-[350px] sm:h-[500px] bg-electric-500/18 rounded-full blur-[120px] pointer-events-none"></div>
    <div class="absolute top-1/2 right-10 sm:right-1/4 translate-x-1/4 -translate-y-1/2 w-[320px] sm:w-[480px] h-[320px] sm:h-[480px] bg-gradient-to-tr from-electric-600/20 via-cyan-500/15 to-yukt-orange/20 rounded-full blur-[130px] pointer-events-none"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-10 w-full relative z-10 pt-2 pb-6 sm:py-6 lg:py-8">
      <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 sm:gap-10 lg:gap-8 xl:gap-12 items-center">
        
        <!-- Left Column: High-Impact Copy & Actions (7 Cols on large screens) -->
        <div class="lg:col-span-7 space-y-5 sm:space-y-6 text-left z-20 reveal-up">
          <!-- Compact Eyebrow Badge -->
          <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-white/[0.04] border border-white/10 backdrop-blur-md max-w-full">
            <span class="relative flex h-2 w-2 shrink-0">
              <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-yukt-orange opacity-75"></span>
              <span class="relative inline-flex rounded-full h-2 w-2 bg-yukt-orange"></span>
            </span>
            <span class="font-mono text-[11px] sm:text-xs uppercase tracking-wider text-slate-300 truncate">
              Next-Gen Digital Engineering
            </span>
            <span class="hidden sm:inline-block w-1 h-1 rounded-full bg-slate-500"></span>
            <span class="hidden sm:inline-block font-mono text-[11px] text-electric-400 font-medium">
              YUKT IT SOLUTIONS
            </span>
          </div>

          <!-- Main Headline with Responsive Fluid Clamp -->
          <h1 class="font-display font-bold tracking-tight text-white leading-[1.08] text-[clamp(2.15rem,6.8vw,3.75rem)] sm:text-[clamp(2.5rem,5.5vw,3.75rem)] lg:text-5xl xl:text-6xl max-w-2xl">
            Technology That Moves Your <span class="bg-gradient-to-r from-electric-400 via-cyan-400 to-electric-500 bg-clip-text text-transparent">Business Forward</span><span class="text-yukt-orange">.</span>
          </h1>

          <!-- Supporting Description -->
          <p class="text-sm sm:text-base lg:text-lg text-slate-300/95 max-w-xl leading-relaxed font-normal">
            We build intelligent digital experiences, powerful software, and AI-driven solutions that help businesses grow faster.
          </p>

          <!-- Primary & Secondary CTA Buttons -->
          <div class="flex flex-col sm:flex-row items-stretch sm:items-center gap-3 sm:gap-4 pt-1 w-full sm:w-auto">
            <a 
              href="#services"
              class="inline-flex items-center justify-center gap-2.5 px-6 py-3.5 sm:py-3.5 rounded-xl font-display font-semibold text-sm text-white bg-gradient-to-r from-electric-600 via-electric-500 to-blue-700 hover:from-electric-500 hover:to-blue-600 shadow-xl shadow-electric-600/30 border border-electric-400/40 transition-all duration-200 hover:-translate-y-0.5 active:translate-y-0 focus:outline-none focus:ring-2 focus:ring-electric-400 group w-full sm:w-auto"
            >
              <span>Explore Our Services</span>
              <i data-lucide="compass" class="w-4 h-4 group-hover:rotate-45 transition-transform duration-300"></i>
            </a>

            <a 
              href="<?php echo getWhatsAppUrl('Hi YUKT IT SOLUTIONS, I want to discuss a project.'); ?>"
              target="_blank"
              rel="noopener noreferrer"
              class="inline-flex items-center justify-center gap-2.5 px-6 py-3.5 sm:py-3.5 rounded-xl font-display font-semibold text-sm text-white bg-gradient-to-r from-yukt-orange to-amber-600 hover:from-yukt-orangeLight hover:to-yukt-orange shadow-xl shadow-yukt-orange/25 border border-amber-400/40 transition-all duration-200 hover:-translate-y-0.5 active:translate-y-0 focus:outline-none focus:ring-2 focus:ring-yukt-orange group w-full sm:w-auto"
            >
              <i data-lucide="message-square-dot" class="w-4 h-4 text-white"></i>
              <span>Start Project — WhatsApp</span>
              <i data-lucide="arrow-up-right" class="w-4 h-4 group-hover:translate-x-0.5 group-hover:-translate-y-0.5 transition-transform"></i>
            </a>
          </div>

          <!-- Interactive Capability Tags -->
          <div class="pt-3 border-t border-white/10 flex flex-wrap items-center gap-2 text-xs">
            <span class="font-mono uppercase tracking-wider text-[11px] text-slate-400 mr-1 hidden sm:inline">Capabilities:</span>
            <span class="px-2.5 py-1 rounded-lg bg-white/[0.04] border border-white/[0.08] text-slate-300 font-mono text-[11px] flex items-center gap-1.5 hover:bg-white/[0.08] transition-colors">
              <i data-lucide="globe" class="w-3.5 h-3.5 text-electric-400"></i> Web &amp; SaaS
            </span>
            <span class="px-2.5 py-1 rounded-lg bg-white/[0.04] border border-white/[0.08] text-slate-300 font-mono text-[11px] flex items-center gap-1.5 hover:bg-white/[0.08] transition-colors">
              <i data-lucide="cpu" class="w-3.5 h-3.5 text-yukt-orange"></i> AI Automation
            </span>
            <span class="px-2.5 py-1 rounded-lg bg-white/[0.04] border border-white/[0.08] text-slate-300 font-mono text-[11px] flex items-center gap-1.5 hover:bg-white/[0.08] transition-colors">
              <i data-lucide="smartphone" class="w-3.5 h-3.5 text-emerald-400"></i> Custom Apps
            </span>
            <span class="px-2.5 py-1 rounded-lg bg-white/[0.04] border border-white/[0.08] text-slate-300 font-mono text-[11px] flex items-center gap-1.5 hover:bg-white/[0.08] transition-colors">
              <i data-lucide="trending-up" class="w-3.5 h-3.5 text-cyan-400"></i> Digital Growth
            </span>
          </div>
        </div>

        <!-- Right Column: Interactive Three.js 3D Stage + Floating Glass UI Panels (5 Cols) -->
        <div class="lg:col-span-5 relative w-full flex items-center justify-center reveal-up">
          <!-- 3D Stage Container with Responsive Proportional Height -->
          <div class="relative w-full h-[310px] xs:h-[350px] sm:h-[420px] md:h-[480px] lg:h-[520px] xl:h-[560px] flex items-center justify-center">
            
            <!-- Ambient Glow Behind 3D Object -->
            <div class="absolute inset-4 bg-gradient-to-tr from-electric-500/20 via-cyan-400/10 to-yukt-orange/15 rounded-full blur-2xl pointer-events-none opacity-80"></div>

            <!-- 3D WebGL Canvas Container -->
            <div id="hero-canvas-container" class="w-full h-full relative rounded-3xl overflow-hidden cursor-grab active:cursor-grabbing">
              <canvas id="hero-3d-canvas" class="w-full h-full block"></canvas>

              <!-- Static Fallback if WebGL is disabled -->
              <div id="webgl-fallback" class="hidden absolute inset-0 flex items-center justify-center bg-navy-900/90 rounded-3xl border border-white/10 p-6 text-center">
                <div class="space-y-3">
                  <div class="w-16 h-16 mx-auto rounded-2xl bg-gradient-to-br from-electric-500 to-yukt-orange flex items-center justify-center shadow-lg">
                    <i data-lucide="box" class="w-8 h-8 text-white"></i>
                  </div>
                  <p class="font-display font-semibold text-white text-sm">YUKT 3D Core Engine</p>
                  <p class="text-xs text-slate-400">Interactive architectural preview mode active.</p>
                </div>
              </div>
            </div>

            <!-- Floating Card 1: Web Architecture (Tucked top-left, doesn't block center) -->
            <div class="hero-float-card absolute top-1 left-1 sm:top-3 sm:left-0 lg:top-6 lg:-left-6 xl:-left-10 z-20 glass-pill rounded-xl sm:rounded-2xl p-2 sm:p-3.5 w-36 xs:w-42 sm:w-50 lg:w-56 animate-float-slow pointer-events-none select-none border border-white/20 shadow-xl">
              <div class="flex items-center justify-between mb-1 sm:mb-2">
                <span class="font-mono text-[9px] sm:text-[10px] uppercase tracking-wider text-electric-400 flex items-center gap-1 font-semibold">
                  <span class="w-1.5 h-1.5 rounded-full bg-electric-400"></span> Architecture
                </span>
                <i data-lucide="layout" class="w-3 h-3 sm:w-3.5 sm:h-3.5 text-slate-400"></i>
              </div>
              <div class="text-[11px] sm:text-xs font-semibold text-white mb-1 truncate">Web &amp; SaaS Platforms</div>
              <div class="w-full bg-white/10 h-1 sm:h-1.5 rounded-full overflow-hidden">
                <div class="bg-gradient-to-r from-electric-400 to-cyan-400 h-full w-[94%] rounded-full"></div>
              </div>
            </div>

            <!-- Floating Card 2: AI Automation (Tucked top-right, doesn't block center) -->
            <div class="hero-float-card absolute top-1 right-1 sm:top-4 sm:right-0 lg:top-8 lg:-right-6 xl:-right-10 z-20 glass-pill rounded-xl sm:rounded-2xl p-2 sm:p-3.5 w-36 xs:w-42 sm:w-48 lg:w-52 animate-float-delayed pointer-events-none select-none border border-yukt-orange/40 shadow-xl">
              <div class="flex items-center gap-2 sm:gap-2.5">
                <div class="w-6 h-6 sm:w-8 sm:h-8 rounded-lg bg-yukt-orange/20 border border-yukt-orange/40 flex items-center justify-center text-yukt-orange shrink-0">
                  <i data-lucide="bot" class="w-3.5 h-3.5 sm:w-4 sm:h-4"></i>
                </div>
                <div class="min-w-0">
                  <div class="font-mono text-[8px] sm:text-[9px] text-yukt-orange uppercase font-semibold">Autonomous RAG</div>
                  <div class="text-[11px] sm:text-xs font-semibold text-white truncate">AI Agent Workflows</div>
                </div>
              </div>
            </div>

            <!-- Floating Card 3: Enterprise Telemetry (Desktop Only to keep mobile globe clear) -->
            <div class="hero-float-card hidden lg:block absolute lg:bottom-12 lg:-left-6 xl:-left-10 z-20 glass-pill rounded-2xl p-3.5 w-56 xl:w-60 animate-float-delayed pointer-events-none select-none border border-emerald-400/30 shadow-xl">
              <div class="flex items-center justify-between">
                <div class="flex items-center gap-2.5">
                  <div class="w-8 h-8 rounded-lg bg-emerald-500/20 border border-emerald-400/30 flex items-center justify-center text-emerald-400 shrink-0">
                    <i data-lucide="trending-up" class="w-4 h-4"></i>
                  </div>
                  <div>
                    <div class="text-[11px] font-semibold text-white">Full-Stack Delivery</div>
                    <div class="font-mono text-[10px] text-slate-400">Sub-100ms Latency</div>
                  </div>
                </div>
                <span class="px-2 py-0.5 rounded bg-emerald-500/20 text-emerald-300 font-mono text-[10px] font-bold">100% IP</span>
              </div>
            </div>

            <!-- Interactive 3D Scene Mode Switcher Toolbar (Bottom Center of 3D Stage) -->
            <div class="absolute bottom-2 left-1/2 -translate-x-1/2 z-30 glass-dark px-2 sm:px-2.5 py-1.5 rounded-xl border border-white/15 flex items-center gap-1 sm:gap-1.5 shadow-xl">
              <span class="font-mono text-[9px] sm:text-[10px] text-slate-400 px-1.5 hidden xs:inline uppercase">3D CORE:</span>
              <button type="button" data-hero-mode="orbit" class="hero-mode-btn px-2 sm:px-2.5 py-1 rounded-lg font-mono text-[10px] sm:text-[11px] bg-electric-500 text-white font-medium transition-all active:scale-95">
                Orbit
              </button>
              <button type="button" data-hero-mode="exploded" class="hero-mode-btn px-2 sm:px-2.5 py-1 rounded-lg font-mono text-[10px] sm:text-[11px] text-slate-300 hover:text-white hover:bg-white/10 transition-all active:scale-95">
                Expand
              </button>
              <button type="button" data-hero-mode="pulse" class="hero-mode-btn px-2 sm:px-2.5 py-1 rounded-lg font-mono text-[10px] sm:text-[11px] text-slate-300 hover:text-white hover:bg-white/10 transition-all active:scale-95">
                Overdrive
              </button>
            </div>

          </div>
        </div>
      </div>
    </div>

    <!-- Seamless Section Transition Bridge into Slate-50 -->
    <div class="absolute bottom-0 left-0 right-0 h-8 sm:h-12 overflow-hidden pointer-events-none z-20">
      <svg class="w-full h-full text-slate-50" viewBox="0 0 1440 48" fill="none" preserveAspectRatio="none">
        <path d="M0,48 L1440,48 L1440,16 C1080,40 360,0 0,24 Z" fill="currentColor"/>
      </svg>
    </div>
  </section>

  <!-- ==========================================
       SECTION 2: SERVICES SECTION (LIGHT ARCHITECTURAL THEME)
  =========================================== -->
  <section id="services" class="relative pt-10 pb-20 sm:pt-14 sm:pb-24 lg:py-28 bg-slate-50 text-slate-900 bg-grid-light overflow-hidden">
    <!-- Subtle Top Ambient Glow -->
    <div class="absolute top-0 right-1/4 w-96 h-96 bg-electric-400/10 rounded-full blur-3xl pointer-events-none"></div>
    <div class="absolute bottom-10 left-10 w-96 h-96 bg-yukt-orange/10 rounded-full blur-3xl pointer-events-none"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-10 relative z-10">
      <!-- Section Header -->
      <div class="max-w-3xl mx-auto text-center space-y-4 mb-14 lg:mb-16 reveal-up">
        <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-electric-500/10 border border-electric-500/20 text-electric-600 font-mono text-xs uppercase tracking-widest">
          <i data-lucide="layers" class="w-3.5 h-3.5"></i>
          <span>8 Core Technical Disciplines</span>
        </div>
        <h2 class="font-display font-bold text-3xl sm:text-4xl lg:text-5xl tracking-tight text-slate-900">
          Solutions Engineered for <span class="text-gradient-brand">Exponential Growth</span>
        </h2>
        <p class="text-slate-600 text-base sm:text-lg leading-relaxed">
          Every digital product we craft combines modern software architecture, intelligent automation, and high-converting visual design. Click any capability to explore its architecture and live deliverables.
        </p>
      </div>

      <!-- 8 Interactive 3D-Tilt Service Cards Grid -->
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 sm:gap-7" id="services-grid">

        <!-- Service 1: Website Development -->
        <article class="tilt-card spotlight-card group bg-white rounded-3xl p-6 sm:p-7 border border-slate-200/90 shadow-xl shadow-slate-900/[0.04] hover:shadow-2xl hover:shadow-electric-500/10 hover:border-electric-500/40 transition-all flex flex-col justify-between">
          <div class="tilt-card-inner space-y-5 relative z-10">
            <div class="flex items-center justify-between">
              <a href="service-website-development.php" class="w-13 h-13 sm:w-14 sm:h-14 rounded-2xl bg-gradient-to-br from-electric-500 to-blue-700 text-white flex items-center justify-center shadow-lg shadow-electric-500/30 group-hover:scale-110 group-hover:rotate-3 transition-transform duration-300" aria-label="Website Development Overview">
                <i data-lucide="globe" class="w-6 h-6 sm:w-7 sm:h-7"></i>
              </a>
              <span class="font-mono text-xs font-semibold text-slate-400 group-hover:text-electric-500 transition-colors">01 / WEB</span>
            </div>

            <div>
              <h3 class="font-display font-bold text-lg sm:text-xl text-slate-900 mb-2 group-hover:text-electric-600 transition-colors">
                <a href="service-website-development.php" class="hover:underline">Website Development</a>
              </h3>
              <p class="text-slate-600 text-xs sm:text-sm leading-relaxed">
                Modern, fast, responsive business websites, portals, and web applications.
              </p>
            </div>

            <!-- Interactive Mini Preview Graphic -->
            <a href="service-website-development.php" class="block p-3 rounded-2xl bg-slate-900 text-white border border-slate-800 space-y-2 overflow-hidden hover:border-electric-500/40 transition-colors" title="View Website Development Details">
              <div class="flex items-center justify-between text-[11px] font-mono text-slate-400">
                <span class="flex items-center gap-1.5">
                  <span class="w-1.5 h-1.5 rounded-full bg-emerald-400"></span> SSR / Edge Ready
                </span>
                <span class="text-electric-400 font-medium">Explore &rarr;</span>
              </div>
              <div class="grid grid-cols-3 gap-1.5 pt-0.5">
                <div class="h-6 rounded bg-white/10 group-hover:bg-electric-500/30 transition-colors"></div>
                <div class="h-6 rounded bg-white/5 group-hover:bg-yukt-orange/30 transition-colors"></div>
                <div class="h-6 rounded bg-white/10 group-hover:bg-emerald-500/30 transition-colors"></div>
              </div>
            </a>
          </div>

          <div class="pt-5 mt-5 border-t border-slate-100 relative z-10 flex items-center justify-between gap-2">
            <a 
              href="service-website-development.php"
              class="inline-flex items-center gap-1.5 text-xs font-bold text-electric-600 hover:text-yukt-orange transition-colors group/link"
            >
              <span>Explore</span>
              <i data-lucide="arrow-right" class="w-3.5 h-3.5 group-hover/link:translate-x-1 transition-transform"></i>
            </a>
            <a 
              href="<?php echo getWhatsAppUrl('Hi YUKT IT SOLUTIONS, I\'m interested in Website Development.'); ?>"
              target="_blank"
              rel="noopener noreferrer"
              class="px-2.5 py-1.5 rounded-xl bg-emerald-50 hover:bg-emerald-100 text-emerald-700 border border-emerald-200 text-xs font-mono font-medium flex items-center gap-1.5 transition-colors"
              title="Inquire on WhatsApp"
            >
              <i data-lucide="message-circle" class="w-3.5 h-3.5 text-emerald-600"></i>
              <span>WhatsApp</span>
            </a>
          </div>
        </article>

        <!-- Service 2: Software & App Development -->
        <article class="tilt-card spotlight-card group bg-white rounded-3xl p-6 sm:p-7 border border-slate-200/90 shadow-xl shadow-slate-900/[0.04] hover:shadow-2xl hover:shadow-electric-500/10 hover:border-electric-500/40 transition-all flex flex-col justify-between">
          <div class="tilt-card-inner space-y-5 relative z-10">
            <div class="flex items-center justify-between">
              <a href="service-software-applications.php" class="w-13 h-13 sm:w-14 sm:h-14 rounded-2xl bg-gradient-to-br from-indigo-600 to-electric-500 text-white flex items-center justify-center shadow-lg shadow-indigo-500/30 group-hover:scale-110 group-hover:-rotate-3 transition-transform duration-300" aria-label="Software & Apps Overview">
                <i data-lucide="code-2" class="w-6 h-6 sm:w-7 sm:h-7"></i>
              </a>
              <span class="font-mono text-xs font-semibold text-slate-400 group-hover:text-electric-500 transition-colors">02 / APPS</span>
            </div>

            <div>
              <h3 class="font-display font-bold text-lg sm:text-xl text-slate-900 mb-2 group-hover:text-electric-600 transition-colors">
                <a href="service-software-applications.php" class="hover:underline">Software &amp; Apps</a>
              </h3>
              <p class="text-slate-600 text-xs sm:text-sm leading-relaxed">
                Custom software, mobile apps, dashboards, SaaS platforms, and enterprise ERPs.
              </p>
            </div>

            <!-- Interactive Mini Preview Graphic -->
            <a href="service-software-applications.php" class="block p-3 rounded-2xl bg-slate-900 text-white border border-slate-800 space-y-2 overflow-hidden hover:border-electric-500/40 transition-colors" title="View Software & App Development Details">
              <div class="flex items-center justify-between text-[11px] font-mono text-slate-400">
                <span>Cross-Platform &bull; Cloud</span>
                <span class="text-amber-400 font-medium">Explore &rarr;</span>
              </div>
              <div class="flex items-center gap-2 pt-0.5">
                <div class="flex-1 h-2 rounded-full bg-white/10 overflow-hidden">
                  <div class="h-full w-4/5 bg-gradient-to-r from-indigo-400 to-electric-400 group-hover:w-full transition-all duration-500"></div>
                </div>
                <span class="font-mono text-[10px] text-electric-400">API v2</span>
              </div>
            </a>
          </div>

          <div class="pt-5 mt-5 border-t border-slate-100 relative z-10 flex items-center justify-between gap-2">
            <a 
              href="service-software-applications.php"
              class="inline-flex items-center gap-1.5 text-xs font-bold text-electric-600 hover:text-yukt-orange transition-colors group/link"
            >
              <span>Explore</span>
              <i data-lucide="arrow-right" class="w-3.5 h-3.5 group-hover/link:translate-x-1 transition-transform"></i>
            </a>
            <a 
              href="<?php echo getWhatsAppUrl('Hi YUKT IT SOLUTIONS, I\'m interested in Software & App Development.'); ?>"
              target="_blank"
              rel="noopener noreferrer"
              class="px-2.5 py-1.5 rounded-xl bg-emerald-50 hover:bg-emerald-100 text-emerald-700 border border-emerald-200 text-xs font-mono font-medium flex items-center gap-1.5 transition-colors"
              title="Inquire on WhatsApp"
            >
              <i data-lucide="message-circle" class="w-3.5 h-3.5 text-emerald-600"></i>
              <span>WhatsApp</span>
            </a>
          </div>
        </article>

        <!-- Service 3: AI Automation -->
        <article class="tilt-card spotlight-card group bg-white rounded-3xl p-6 sm:p-7 border border-slate-200/90 shadow-xl shadow-slate-900/[0.04] hover:shadow-2xl hover:shadow-yukt-orange/15 hover:border-yukt-orange/50 transition-all flex flex-col justify-between">
          <div class="tilt-card-inner space-y-5 relative z-10">
            <div class="flex items-center justify-between">
              <a href="service-ai-automation.php" class="w-13 h-13 sm:w-14 sm:h-14 rounded-2xl bg-gradient-to-br from-yukt-orange to-amber-500 text-white flex items-center justify-center shadow-lg shadow-yukt-orange/30 group-hover:scale-110 group-hover:rotate-6 transition-transform duration-300" aria-label="AI Automation Overview">
                <i data-lucide="bot" class="w-6 h-6 sm:w-7 sm:h-7"></i>
              </a>
              <span class="font-mono text-xs font-semibold text-yukt-orange">03 / AI SYSTEMS</span>
            </div>

            <div>
              <h3 class="font-display font-bold text-lg sm:text-xl text-slate-900 mb-2 group-hover:text-yukt-orange transition-colors">
                <a href="service-ai-automation.php" class="hover:underline">AI Automation</a>
              </h3>
              <p class="text-slate-600 text-xs sm:text-sm leading-relaxed">
                Intelligent workflows, LLM agents, AI chatbots, and business automation.
              </p>
            </div>

            <!-- Interactive Mini Preview Graphic -->
            <a href="service-ai-automation.php" class="block p-3 rounded-2xl bg-slate-900 text-white border border-slate-800 space-y-2 overflow-hidden hover:border-yukt-orange/40 transition-colors" title="View AI Automation Details">
              <div class="flex items-center justify-between text-[11px] font-mono text-slate-400">
                <span class="text-yukt-orangeLight">LLM Agents &amp; Webhooks</span>
                <span class="text-emerald-400 font-medium">Explore &rarr;</span>
              </div>
              <div class="flex items-center justify-between gap-1 pt-0.5">
                <span class="px-2 py-0.5 rounded bg-white/10 font-mono text-[10px]">Trigger</span>
                <i data-lucide="arrow-right" class="w-3 h-3 text-yukt-orange"></i>
                <span class="px-2 py-0.5 rounded bg-yukt-orange/20 border border-yukt-orange/40 text-yukt-orangeLight font-mono text-[10px]">AI Agent</span>
                <i data-lucide="arrow-right" class="w-3 h-3 text-yukt-orange"></i>
                <span class="px-2 py-0.5 rounded bg-emerald-500/20 text-emerald-300 font-mono text-[10px]">Run</span>
              </div>
            </a>
          </div>

          <div class="pt-5 mt-5 border-t border-slate-100 relative z-10 flex items-center justify-between gap-2">
            <a 
              href="service-ai-automation.php"
              class="inline-flex items-center gap-1.5 text-xs font-bold text-yukt-orange hover:text-amber-600 transition-colors group/link"
            >
              <span>Explore</span>
              <i data-lucide="arrow-right" class="w-3.5 h-3.5 group-hover/link:translate-x-1 transition-transform"></i>
            </a>
            <a 
              href="<?php echo getWhatsAppUrl('Hi YUKT IT SOLUTIONS, I\'m interested in AI Automation solutions.'); ?>"
              target="_blank"
              rel="noopener noreferrer"
              class="px-2.5 py-1.5 rounded-xl bg-emerald-50 hover:bg-emerald-100 text-emerald-700 border border-emerald-200 text-xs font-mono font-medium flex items-center gap-1.5 transition-colors"
              title="Inquire on WhatsApp"
            >
              <i data-lucide="message-circle" class="w-3.5 h-3.5 text-emerald-600"></i>
              <span>WhatsApp</span>
            </a>
          </div>
        </article>

        <!-- Service 4: Digital Marketing -->
        <article class="tilt-card spotlight-card group bg-white rounded-3xl p-6 sm:p-7 border border-slate-200/90 shadow-xl shadow-slate-900/[0.04] hover:shadow-2xl hover:shadow-emerald-500/10 hover:border-emerald-500/40 transition-all flex flex-col justify-between">
          <div class="tilt-card-inner space-y-5 relative z-10">
            <div class="flex items-center justify-between">
              <a href="service-digital-marketing.php" class="w-13 h-13 sm:w-14 sm:h-14 rounded-2xl bg-gradient-to-br from-emerald-500 to-teal-600 text-white flex items-center justify-center shadow-lg shadow-emerald-500/30 group-hover:scale-110 group-hover:rotate-3 transition-transform duration-300" aria-label="Digital Marketing Overview">
                <i data-lucide="trending-up" class="w-6 h-6 sm:w-7 sm:h-7"></i>
              </a>
              <span class="font-mono text-xs font-semibold text-slate-400 group-hover:text-emerald-600 transition-colors">04 / GROWTH</span>
            </div>

            <div>
              <h3 class="font-display font-bold text-lg sm:text-xl text-slate-900 mb-2 group-hover:text-emerald-600 transition-colors">
                <a href="service-digital-marketing.php" class="hover:underline">Digital Marketing</a>
              </h3>
              <p class="text-slate-600 text-xs sm:text-sm leading-relaxed">
                SEO, high-ROI paid performance ads, lead funnels, and conversion optimization.
              </p>
            </div>

            <!-- Interactive Mini Preview Graphic -->
            <a href="service-digital-marketing.php" class="block p-3 rounded-2xl bg-slate-900 text-white border border-slate-800 space-y-2 overflow-hidden hover:border-emerald-500/40 transition-colors" title="View Digital Marketing Details">
              <div class="flex items-center justify-between text-[11px] font-mono text-slate-400">
                <span>Acquisition Funnels</span>
                <span class="text-emerald-400 font-medium">Explore &rarr;</span>
              </div>
              <div class="flex items-end gap-1.5 h-6 pt-0.5">
                <div class="flex-1 bg-white/10 h-2.5 rounded-sm"></div>
                <div class="flex-1 bg-white/20 h-3.5 rounded-sm"></div>
                <div class="flex-1 bg-electric-500/50 h-5 rounded-sm"></div>
                <div class="flex-1 bg-emerald-400 h-6 rounded-sm"></div>
              </div>
            </a>
          </div>

          <div class="pt-5 mt-5 border-t border-slate-100 relative z-10 flex items-center justify-between gap-2">
            <a 
              href="service-digital-marketing.php"
              class="inline-flex items-center gap-1.5 text-xs font-bold text-electric-600 hover:text-yukt-orange transition-colors group/link"
            >
              <span>Explore</span>
              <i data-lucide="arrow-right" class="w-3.5 h-3.5 group-hover/link:translate-x-1 transition-transform"></i>
            </a>
            <a 
              href="<?php echo getWhatsAppUrl('Hi YUKT IT SOLUTIONS, I\'m interested in Digital Marketing services.'); ?>"
              target="_blank"
              rel="noopener noreferrer"
              class="px-2.5 py-1.5 rounded-xl bg-emerald-50 hover:bg-emerald-100 text-emerald-700 border border-emerald-200 text-xs font-mono font-medium flex items-center gap-1.5 transition-colors"
              title="Inquire on WhatsApp"
            >
              <i data-lucide="message-circle" class="w-3.5 h-3.5 text-emerald-600"></i>
              <span>WhatsApp</span>
            </a>
          </div>
        </article>

        <!-- Service 5: AI Marketing & Creative Studio -->
        <article class="tilt-card spotlight-card group bg-white rounded-3xl p-6 sm:p-7 border border-slate-200/90 shadow-xl shadow-slate-900/[0.04] hover:shadow-2xl hover:shadow-purple-500/10 hover:border-purple-500/40 transition-all flex flex-col justify-between">
          <div class="tilt-card-inner space-y-5 relative z-10">
            <div class="flex items-center justify-between">
              <a href="service-ai-marketing.php" class="w-13 h-13 sm:w-14 sm:h-14 rounded-2xl bg-gradient-to-br from-purple-600 via-fuchsia-600 to-yukt-orange text-white flex items-center justify-center shadow-lg shadow-purple-500/30 group-hover:scale-110 group-hover:-rotate-3 transition-transform duration-300" aria-label="AI Marketing Overview">
                <i data-lucide="sparkles" class="w-6 h-6 sm:w-7 sm:h-7"></i>
              </a>
              <span class="font-mono text-xs font-semibold text-slate-400 group-hover:text-purple-600 transition-colors">05 / STUDIO</span>
            </div>

            <div>
              <h3 class="font-display font-bold text-lg sm:text-xl text-slate-900 mb-2 group-hover:text-purple-600 transition-colors">
                <a href="service-ai-marketing.php" class="hover:underline">AI Marketing Studio</a>
              </h3>
              <p class="text-slate-600 text-xs sm:text-sm leading-relaxed">
                AI-assisted marketing, graphics, 4K video rendering, and multi-channel creative.
              </p>
            </div>

            <!-- Interactive Mini Preview Graphic -->
            <a href="service-ai-marketing.php" class="block p-3 rounded-2xl bg-slate-900 text-white border border-slate-800 space-y-2 overflow-hidden hover:border-purple-500/40 transition-colors" title="View AI Marketing Studio Details">
              <div class="flex items-center justify-between text-[11px] font-mono text-slate-400">
                <span>Generative Media Engine</span>
                <span class="text-fuchsia-400 font-medium">Explore &rarr;</span>
              </div>
              <div class="h-6 rounded-lg bg-gradient-to-r from-purple-500/30 via-fuchsia-500/30 to-yukt-orange/30 border border-white/10 flex items-center px-2.5 justify-between">
                <span class="font-mono text-[10px] text-white">Render Pipeline</span>
                <i data-lucide="play" class="w-3 h-3 text-yukt-orange fill-yukt-orange"></i>
              </div>
            </a>
          </div>

          <div class="pt-5 mt-5 border-t border-slate-100 relative z-10 flex items-center justify-between gap-2">
            <a 
              href="service-ai-marketing.php"
              class="inline-flex items-center gap-1.5 text-xs font-bold text-electric-600 hover:text-yukt-orange transition-colors group/link"
            >
              <span>Explore</span>
              <i data-lucide="arrow-right" class="w-3.5 h-3.5 group-hover/link:translate-x-1 transition-transform"></i>
            </a>
            <a 
              href="<?php echo getWhatsAppUrl('Hi YUKT IT SOLUTIONS, I\'m interested in AI Marketing & Creative Studio.'); ?>"
              target="_blank"
              rel="noopener noreferrer"
              class="px-2.5 py-1.5 rounded-xl bg-emerald-50 hover:bg-emerald-100 text-emerald-700 border border-emerald-200 text-xs font-mono font-medium flex items-center gap-1.5 transition-colors"
              title="Inquire on WhatsApp"
            >
              <i data-lucide="message-circle" class="w-3.5 h-3.5 text-emerald-600"></i>
              <span>WhatsApp</span>
            </a>
          </div>
        </article>

        <!-- Service 6: IT Consulting & Training -->
        <article class="tilt-card spotlight-card group bg-white rounded-3xl p-6 sm:p-7 border border-slate-200/90 shadow-xl shadow-slate-900/[0.04] hover:shadow-2xl hover:shadow-electric-500/10 hover:border-electric-500/40 transition-all flex flex-col justify-between">
          <div class="tilt-card-inner space-y-5 relative z-10">
            <div class="flex items-center justify-between">
              <a href="service-it-consulting.php" class="w-13 h-13 sm:w-14 sm:h-14 rounded-2xl bg-gradient-to-br from-sky-500 to-navy-800 text-white flex items-center justify-center shadow-lg shadow-sky-500/30 group-hover:scale-110 group-hover:rotate-3 transition-transform duration-300" aria-label="IT Consulting Overview">
                <i data-lucide="graduation-cap" class="w-6 h-6 sm:w-7 sm:h-7"></i>
              </a>
              <span class="font-mono text-xs font-semibold text-slate-400 group-hover:text-sky-600 transition-colors">06 / ADVISORY</span>
            </div>

            <div>
              <h3 class="font-display font-bold text-lg sm:text-xl text-slate-900 mb-2 group-hover:text-electric-600 transition-colors">
                <a href="service-it-consulting.php" class="hover:underline">IT Consulting &amp; Training</a>
              </h3>
              <p class="text-slate-600 text-xs sm:text-sm leading-relaxed">
                Technology consulting, cloud architecture audits, and specialized engineering training.
              </p>
            </div>

            <!-- Interactive Mini Preview Graphic -->
            <a href="service-it-consulting.php" class="block p-3 rounded-2xl bg-slate-900 text-white border border-slate-800 space-y-2 overflow-hidden hover:border-electric-500/40 transition-colors" title="View IT Consulting Details">
              <div class="flex items-center justify-between text-[11px] font-mono text-slate-400">
                <span>Architecture &bull; Roadmaps</span>
                <span class="text-sky-400 font-medium">Explore &rarr;</span>
              </div>
              <div class="flex items-center gap-1.5 pt-0.5 font-mono text-[10px] text-slate-300">
                <span class="px-1.5 py-0.5 rounded bg-white/10">Audit</span>
                <span>&rarr;</span>
                <span class="px-1.5 py-0.5 rounded bg-sky-500/20 text-sky-300">Scale</span>
                <span>&rarr;</span>
                <span class="px-1.5 py-0.5 rounded bg-emerald-500/20 text-emerald-300">Train</span>
              </div>
            </a>
          </div>

          <div class="pt-5 mt-5 border-t border-slate-100 relative z-10 flex items-center justify-between gap-2">
            <a 
              href="service-it-consulting.php"
              class="inline-flex items-center gap-1.5 text-xs font-bold text-electric-600 hover:text-yukt-orange transition-colors group/link"
            >
              <span>Explore</span>
              <i data-lucide="arrow-right" class="w-3.5 h-3.5 group-hover/link:translate-x-1 transition-transform"></i>
            </a>
            <a 
              href="<?php echo getWhatsAppUrl('Hi YUKT IT SOLUTIONS, I\'m interested in IT Consulting & Training.'); ?>"
              target="_blank"
              rel="noopener noreferrer"
              class="px-2.5 py-1.5 rounded-xl bg-emerald-50 hover:bg-emerald-100 text-emerald-700 border border-emerald-200 text-xs font-mono font-medium flex items-center gap-1.5 transition-colors"
              title="Inquire on WhatsApp"
            >
              <i data-lucide="message-circle" class="w-3.5 h-3.5 text-emerald-600"></i>
              <span>WhatsApp</span>
            </a>
          </div>
        </article>

        <!-- Service 7: E-Commerce Solutions -->
        <article class="tilt-card spotlight-card group bg-white rounded-3xl p-6 sm:p-7 border border-slate-200/90 shadow-xl shadow-slate-900/[0.04] hover:shadow-2xl hover:shadow-emerald-500/10 hover:border-emerald-500/40 transition-all flex flex-col justify-between">
          <div class="tilt-card-inner space-y-5 relative z-10">
            <div class="flex items-center justify-between">
              <a href="service-ecommerce-solutions.php" class="w-13 h-13 sm:w-14 sm:h-14 rounded-2xl bg-gradient-to-br from-emerald-600 to-teal-700 text-white flex items-center justify-center shadow-lg shadow-emerald-600/30 group-hover:scale-110 group-hover:rotate-3 transition-transform duration-300" aria-label="E-Commerce Solutions Overview">
                <i data-lucide="shopping-bag" class="w-6 h-6 sm:w-7 sm:h-7"></i>
              </a>
              <span class="font-mono text-xs font-semibold text-emerald-600">07 / COMMERCE</span>
            </div>

            <div>
              <h3 class="font-display font-bold text-lg sm:text-xl text-slate-900 mb-2 group-hover:text-emerald-600 transition-colors">
                <a href="service-ecommerce-solutions.php" class="hover:underline">E-Commerce Solutions</a>
              </h3>
              <p class="text-slate-600 text-xs sm:text-sm leading-relaxed">
                High-conversion online stores, frictionless checkouts, Shopify, WooCommerce &amp; headless.
              </p>
            </div>

            <!-- Interactive Mini Preview Graphic -->
            <a href="service-ecommerce-solutions.php" class="block p-3 rounded-2xl bg-slate-900 text-white border border-slate-800 space-y-2 overflow-hidden hover:border-emerald-500/40 transition-colors" title="View E-Commerce Details">
              <div class="flex items-center justify-between text-[11px] font-mono text-slate-400">
                <span>Razorpay &bull; Stripe &bull; POS</span>
                <span class="text-emerald-400 font-medium">Explore &rarr;</span>
              </div>
              <div class="flex items-center justify-between gap-1 pt-0.5 font-mono text-[10px]">
                <span class="px-2 py-0.5 rounded bg-emerald-500/20 text-emerald-300">Fast Store</span>
                <i data-lucide="arrow-right" class="w-3 h-3 text-emerald-400"></i>
                <span class="px-2 py-0.5 rounded bg-white/10 text-slate-200">Zero Drop-off</span>
              </div>
            </a>
          </div>

          <div class="pt-5 mt-5 border-t border-slate-100 relative z-10 flex items-center justify-between gap-2">
            <a 
              href="service-ecommerce-solutions.php"
              class="inline-flex items-center gap-1.5 text-xs font-bold text-electric-600 hover:text-yukt-orange transition-colors group/link"
            >
              <span>Explore</span>
              <i data-lucide="arrow-right" class="w-3.5 h-3.5 group-hover/link:translate-x-1 transition-transform"></i>
            </a>
            <a 
              href="<?php echo getWhatsAppUrl('Hi YUKT IT SOLUTIONS, I\'m interested in E-Commerce Solutions.'); ?>"
              target="_blank"
              rel="noopener noreferrer"
              class="px-2.5 py-1.5 rounded-xl bg-emerald-50 hover:bg-emerald-100 text-emerald-700 border border-emerald-200 text-xs font-mono font-medium flex items-center gap-1.5 transition-colors"
              title="Inquire on WhatsApp"
            >
              <i data-lucide="message-circle" class="w-3.5 h-3.5 text-emerald-600"></i>
              <span>WhatsApp</span>
            </a>
          </div>
        </article>

        <!-- Service 8: Branding & Creative -->
        <article class="tilt-card spotlight-card group bg-white rounded-3xl p-6 sm:p-7 border border-slate-200/90 shadow-xl shadow-slate-900/[0.04] hover:shadow-2xl hover:shadow-yukt-orange/15 hover:border-yukt-orange/50 transition-all flex flex-col justify-between">
          <div class="tilt-card-inner space-y-5 relative z-10">
            <div class="flex items-center justify-between">
              <a href="service-branding-creative.php" class="w-13 h-13 sm:w-14 sm:h-14 rounded-2xl bg-gradient-to-br from-yukt-orange to-rose-600 text-white flex items-center justify-center shadow-lg shadow-yukt-orange/30 group-hover:scale-110 group-hover:-rotate-3 transition-transform duration-300" aria-label="Branding & Creative Overview">
                <i data-lucide="palette" class="w-6 h-6 sm:w-7 sm:h-7"></i>
              </a>
              <span class="font-mono text-xs font-semibold text-yukt-orange">08 / IDENTITY</span>
            </div>

            <div>
              <h3 class="font-display font-bold text-lg sm:text-xl text-slate-900 mb-2 group-hover:text-yukt-orange transition-colors">
                <a href="service-branding-creative.php" class="hover:underline">Branding &amp; Creative</a>
              </h3>
              <p class="text-slate-600 text-xs sm:text-sm leading-relaxed">
                Brand strategy, logo design, scalable design systems, and digital brand collateral.
              </p>
            </div>

            <!-- Interactive Mini Preview Graphic -->
            <a href="service-branding-creative.php" class="block p-3 rounded-2xl bg-slate-900 text-white border border-slate-800 space-y-2 overflow-hidden hover:border-yukt-orange/40 transition-colors" title="View Branding & Creative Details">
              <div class="flex items-center justify-between text-[11px] font-mono text-slate-400">
                <span>Design System &bull; Assets</span>
                <span class="text-yukt-orange font-medium">Explore &rarr;</span>
              </div>
              <div class="flex items-center gap-2 pt-1">
                <div class="w-3.5 h-3.5 rounded-full bg-electric-500"></div>
                <div class="w-3.5 h-3.5 rounded-full bg-yukt-orange"></div>
                <div class="w-3.5 h-3.5 rounded-full bg-emerald-400"></div>
                <div class="w-3.5 h-3.5 rounded-full bg-fuchsia-500"></div>
                <div class="flex-1 h-1.5 rounded-full bg-white/10"></div>
              </div>
            </a>
          </div>

          <div class="pt-5 mt-5 border-t border-slate-100 relative z-10 flex items-center justify-between gap-2">
            <a 
              href="service-branding-creative.php"
              class="inline-flex items-center gap-1.5 text-xs font-bold text-yukt-orange hover:text-amber-600 transition-colors group/link"
            >
              <span>Explore</span>
              <i data-lucide="arrow-right" class="w-3.5 h-3.5 group-hover/link:translate-x-1 transition-transform"></i>
            </a>
            <a 
              href="<?php echo getWhatsAppUrl('Hi YUKT IT SOLUTIONS, I\'m interested in Branding & Creative.'); ?>"
              target="_blank"
              rel="noopener noreferrer"
              class="px-2.5 py-1.5 rounded-xl bg-emerald-50 hover:bg-emerald-100 text-emerald-700 border border-emerald-200 text-xs font-mono font-medium flex items-center gap-1.5 transition-colors"
              title="Inquire on WhatsApp"
            >
              <i data-lucide="message-circle" class="w-3.5 h-3.5 text-emerald-600"></i>
              <span>WhatsApp</span>
            </a>
          </div>
        </article>

      </div>

      <!-- Bottom Capabilities Strip -->
      <div class="mt-12 p-6 sm:p-8 rounded-3xl bg-navy-950 text-white border border-white/10 flex flex-col md:flex-row items-center justify-between gap-6 reveal-up">
        <div class="space-y-1 text-center md:text-left">
          <div class="text-xs font-mono uppercase tracking-wider text-electric-400">Full-Stack Digital Engineering</div>
          <h4 class="font-display font-bold text-lg sm:text-xl text-white">Need an integrated multi-discipline solution?</h4>
          <p class="text-xs sm:text-sm text-slate-300 max-w-2xl">
            We provide synchronized engineering pods spanning software, web platforms, AI automation, and digital performance.
          </p>
        </div>
        <div class="flex flex-col sm:flex-row items-center gap-3 w-full md:w-auto flex-shrink-0">
          <a href="services.php" class="w-full sm:w-auto px-5 py-3 rounded-xl font-display font-semibold text-xs sm:text-sm text-white bg-electric-500 hover:bg-electric-400 transition-all flex items-center justify-center gap-2 shadow-lg shadow-electric-500/25">
            <span>View All 8 Disciplines</span>
            <i data-lucide="arrow-right" class="w-4 h-4"></i>
          </a>
          <button type="button" class="open-quote-modal-btn w-full sm:w-auto px-5 py-3 rounded-xl font-display font-semibold text-xs sm:text-sm text-slate-200 bg-white/10 hover:bg-white/15 border border-white/15 transition-all flex items-center justify-center gap-2">
            <i data-lucide="calculator" class="w-4 h-4 text-yukt-orange"></i>
            <span>Instant Project Estimator</span>
          </button>
        </div>
      </div>

    </div>
  </section>

  <!-- ==========================================
       SECTION 3: INTERACTIVE 3D PROCESS SECTION
       “From Vision to Digital Reality”
  =========================================== -->
  <section id="process" class="relative py-24 lg:py-32 bg-navy-950 text-white bg-grid-dark overflow-hidden">
    <!-- Ambient Lighting -->
    <div class="absolute top-1/3 left-10 w-96 h-96 bg-electric-500/15 rounded-full blur-[130px] pointer-events-none"></div>
    <div class="absolute bottom-10 right-10 w-96 h-96 bg-yukt-orange/15 rounded-full blur-[130px] pointer-events-none"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-10 relative z-10">
      <!-- Header -->
      <div class="max-w-3xl mx-auto text-center space-y-4 mb-16 reveal-up">
        <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-white/[0.05] border border-white/10 text-electric-400 font-mono text-xs uppercase tracking-widest">
          <i data-lucide="git-branch" class="w-3.5 h-3.5 text-yukt-orange"></i>
          <span>Interactive Execution Pipeline</span>
        </div>
        <h2 class="font-display font-bold text-3xl sm:text-4xl lg:text-5xl tracking-tight">
          From Vision to <span class="text-gradient-electric">Digital Reality</span>
        </h2>
        <p class="text-slate-400 text-base sm:text-lg">
          Select any stage below to inspect our engineering workflow and watch the 3D neural node transform in real time.
        </p>
      </div>

      <!-- Glowing Node Progress Track -->
      <div class="relative max-w-4xl mx-auto mb-14">
        <div class="h-1.5 w-full bg-white/10 rounded-full overflow-hidden">
          <div id="process-progress-bar" class="h-full bg-gradient-to-r from-electric-500 via-electric-400 to-yukt-orange w-1/4 transition-all duration-500 rounded-full"></div>
        </div>
        <div class="grid grid-cols-4 gap-2 -mt-4">
          <button type="button" data-stage="0" class="process-node-btn group flex flex-col items-center focus:outline-none">
            <span class="w-7 h-7 rounded-full bg-electric-500 border-4 border-navy-950 shadow-lg shadow-electric-500/50 flex items-center justify-center font-mono text-[11px] font-bold text-white transition-transform scale-125">1</span>
            <span class="mt-2 font-display text-xs sm:text-sm font-semibold text-white">Discover</span>
          </button>
          <button type="button" data-stage="1" class="process-node-btn group flex flex-col items-center focus:outline-none">
            <span class="w-7 h-7 rounded-full bg-navy-800 border-2 border-white/20 flex items-center justify-center font-mono text-[11px] font-bold text-slate-400 transition-transform">2</span>
            <span class="mt-2 font-display text-xs sm:text-sm font-semibold text-slate-400">Design</span>
          </button>
          <button type="button" data-stage="2" class="process-node-btn group flex flex-col items-center focus:outline-none">
            <span class="w-7 h-7 rounded-full bg-navy-800 border-2 border-white/20 flex items-center justify-center font-mono text-[11px] font-bold text-slate-400 transition-transform">3</span>
            <span class="mt-2 font-display text-xs sm:text-sm font-semibold text-slate-400">Develop</span>
          </button>
          <button type="button" data-stage="3" class="process-node-btn group flex flex-col items-center focus:outline-none">
            <span class="w-7 h-7 rounded-full bg-navy-800 border-2 border-white/20 flex items-center justify-center font-mono text-[11px] font-bold text-slate-400 transition-transform">4</span>
            <span class="mt-2 font-display text-xs sm:text-sm font-semibold text-slate-400">Launch &amp; Grow</span>
          </button>
        </div>
      </div>

      <!-- Main Interactive Process Grid: Left 4 Stages + Right 3D Morphing Visualizer -->
      <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-10 items-center">
        
        <!-- Left Column: 4 Interactive Stage Cards (7 Cols) -->
        <div class="lg:col-span-7 grid grid-cols-1 sm:grid-cols-2 gap-4">
          
          <!-- Stage 01: Discover -->
          <div data-stage-card="0" class="process-stage-card cursor-pointer rounded-2xl p-6 glass-dark border-electric-500/60 bg-electric-500/[0.08] transition-all duration-300">
            <div class="flex items-center justify-between mb-4">
              <span class="px-2.5 py-1 rounded-md bg-electric-500/20 text-electric-400 font-mono text-xs font-semibold">STAGE 01</span>
              <i data-lucide="compass" class="w-5 h-5 text-electric-400"></i>
            </div>
            <h3 class="font-display font-bold text-xl text-white mb-2">Discover</h3>
            <p class="text-slate-300 text-sm leading-relaxed mb-4">
              Understand the business and goals.
            </p>
            <ul class="space-y-1.5 text-xs text-slate-400 font-mono">
              <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-electric-400"></span> Technical Feasibility &amp; Scope</li>
              <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-electric-400"></span> Audience &amp; Workflow Mapping</li>
            </ul>
          </div>

          <!-- Stage 02: Design -->
          <div data-stage-card="1" class="process-stage-card cursor-pointer rounded-2xl p-6 glass-dark hover:border-white/25 transition-all duration-300">
            <div class="flex items-center justify-between mb-4">
              <span class="px-2.5 py-1 rounded-md bg-white/10 text-slate-300 font-mono text-xs font-semibold">STAGE 02</span>
              <i data-lucide="pen-tool" class="w-5 h-5 text-yukt-orange"></i>
            </div>
            <h3 class="font-display font-bold text-xl text-white mb-2">Design</h3>
            <p class="text-slate-300 text-sm leading-relaxed mb-4">
              Create the user experience and visual direction.
            </p>
            <ul class="space-y-1.5 text-xs text-slate-400 font-mono">
              <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-yukt-orange"></span> Interactive Wireframes &amp; UI Systems</li>
              <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-yukt-orange"></span> 3D Motion &amp; Conversion Architecture</li>
            </ul>
          </div>

          <!-- Stage 03: Develop -->
          <div data-stage-card="2" class="process-stage-card cursor-pointer rounded-2xl p-6 glass-dark hover:border-white/25 transition-all duration-300">
            <div class="flex items-center justify-between mb-4">
              <span class="px-2.5 py-1 rounded-md bg-white/10 text-slate-300 font-mono text-xs font-semibold">STAGE 03</span>
              <i data-lucide="terminal" class="w-5 h-5 text-emerald-400"></i>
            </div>
            <h3 class="font-display font-bold text-xl text-white mb-2">Develop</h3>
            <p class="text-slate-300 text-sm leading-relaxed mb-4">
              Build reliable digital solutions.
            </p>
            <ul class="space-y-1.5 text-xs text-slate-400 font-mono">
              <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-emerald-400"></span> Clean Full-Stack &amp; API Engineering</li>
              <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-emerald-400"></span> AI Automation &amp; Security Audits</li>
            </ul>
          </div>

          <!-- Stage 04: Launch & Grow -->
          <div data-stage-card="3" class="process-stage-card cursor-pointer rounded-2xl p-6 glass-dark hover:border-white/25 transition-all duration-300">
            <div class="flex items-center justify-between mb-4">
              <span class="px-2.5 py-1 rounded-md bg-white/10 text-slate-300 font-mono text-xs font-semibold">STAGE 04</span>
              <i data-lucide="rocket" class="w-5 h-5 text-purple-400"></i>
            </div>
            <h3 class="font-display font-bold text-xl text-white mb-2">Launch &amp; Grow</h3>
            <p class="text-slate-300 text-sm leading-relaxed mb-4">
              Deploy, optimize, and scale.
            </p>
            <ul class="space-y-1.5 text-xs text-slate-400 font-mono">
              <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-purple-400"></span> Cloud Deployment &amp; Performance Tuning</li>
              <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-purple-400"></span> Continuous Growth &amp; Support</li>
            </ul>
          </div>

        </div>

        <!-- Right Column: Interactive 3D Stage Visualizer Canvas (5 Cols) -->
        <div class="lg:col-span-5">
          <div class="glass-dark rounded-3xl p-6 border border-white/10 relative overflow-hidden">
            <div class="flex items-center justify-between mb-3">
              <div>
                <span id="process-3d-badge" class="font-mono text-xs uppercase tracking-widest text-electric-400">STAGE 01 // DISCOVER</span>
                <h4 id="process-3d-title" class="font-display font-bold text-lg text-white">Goal &amp; Architecture Mapping</h4>
              </div>
              <span class="w-2.5 h-2.5 rounded-full bg-emerald-400 animate-pulse"></span>
            </div>

            <!-- 3D Process Canvas -->
            <div id="process-canvas-wrapper" class="w-full h-[290px] sm:h-[320px] rounded-2xl bg-navy-950/80 border border-white/5 relative overflow-hidden">
              <canvas id="process-3d-canvas" class="w-full h-full block"></canvas>
            </div>

            <p id="process-3d-desc" class="mt-4 text-xs sm:text-sm text-slate-300 leading-relaxed">
              We analyze your business model, target audience, and operational bottlenecks to craft a clear technical blueprint.
            </p>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- ==========================================
       SECTION 4: FEATURED WORK / CONCEPT PORTFOLIO
  =========================================== -->
  <section id="portfolio" class="relative py-24 lg:py-32 bg-white text-slate-900 bg-grid-light overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-10 relative z-10">
      
      <!-- Section Header with Transparent Concept Labeling -->
      <div class="flex flex-col lg:flex-row lg:items-end justify-between gap-6 mb-12 reveal-up">
        <div class="space-y-3 max-w-2xl">
          <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-yukt-orange/10 border border-yukt-orange/25 text-yukt-orangeDark font-mono text-xs uppercase tracking-widest">
            <i data-lucide="layers-3" class="w-3.5 h-3.5"></i>
            <span>Interactive Concept Showcase &amp; Capabilities</span>
          </div>
          <h2 class="font-display font-bold text-3xl sm:text-4xl lg:text-5xl tracking-tight text-slate-900">
            Featured <span class="text-gradient-brand">Digital Architecture</span>
          </h2>
          <p class="text-slate-600 text-base sm:text-lg">
            Explore interactive concept previews demonstrating how YUKT IT SOLUTIONS engineers modern interfaces, AI automation dashboards, and digital campaigns.
          </p>
        </div>

        <!-- Category Filter Pills -->
        <div class="flex flex-wrap gap-2" id="portfolio-filters">
          <button type="button" data-filter="all" class="portfolio-filter-btn px-4 py-2 rounded-xl text-xs font-semibold bg-slate-900 text-white shadow-md transition-all">
            All Previews (6)
          </button>
          <button type="button" data-filter="web-ecom" class="portfolio-filter-btn px-4 py-2 rounded-xl text-xs font-semibold bg-slate-100 text-slate-700 hover:bg-slate-200 transition-all">
            Web &amp; E-Commerce
          </button>
          <button type="button" data-filter="saas-ai" class="portfolio-filter-btn px-4 py-2 rounded-xl text-xs font-semibold bg-slate-100 text-slate-700 hover:bg-slate-200 transition-all">
            SaaS &amp; AI Systems
          </button>
          <button type="button" data-filter="mobile-growth" class="portfolio-filter-btn px-4 py-2 rounded-xl text-xs font-semibold bg-slate-100 text-slate-700 hover:bg-slate-200 transition-all">
            Mobile &amp; Growth
          </button>
        </div>
      </div>

      <!-- Interactive 3D Perspective Portfolio Cards Grid -->
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8" id="portfolio-grid">

        <!-- Concept 1: Business Websites -->
        <div data-category="web-ecom" class="portfolio-item perspective-stage group bg-slate-50 rounded-3xl p-6 border border-slate-200/90 hover:border-electric-500/40 shadow-lg hover:shadow-2xl transition-all flex flex-col justify-between">
          <div>
            <!-- Top Meta Badge -->
            <div class="flex items-center justify-between mb-4">
              <span class="px-2.5 py-1 rounded-md bg-electric-500/10 text-electric-600 font-mono text-[11px] font-semibold">CONCEPT ARCHITECTURE</span>
              <span class="font-mono text-xs text-slate-400">Business Website</span>
            </div>

            <!-- 3D Floating Browser Window Mockup -->
            <div class="device-3d-frame rounded-2xl bg-navy-950 border border-slate-800 shadow-2xl overflow-hidden mb-6">
              <div class="px-3 py-2 bg-navy-900 border-b border-white/10 flex items-center justify-between">
                <div class="flex items-center gap-1.5">
                  <span class="w-2.5 h-2.5 rounded-full bg-rose-500"></span>
                  <span class="w-2.5 h-2.5 rounded-full bg-amber-400"></span>
                  <span class="w-2.5 h-2.5 rounded-full bg-emerald-400"></span>
                </div>
                <span class="font-mono text-[10px] text-slate-400">enterprise.yukt.concept</span>
                <i data-lucide="external-link" class="w-3 h-3 text-slate-500"></i>
              </div>
              <div class="p-4 space-y-3 bg-gradient-to-br from-navy-950 via-navy-900 to-electric-600/20">
                <div class="w-2/3 h-4 rounded bg-gradient-to-r from-white to-electric-400"></div>
                <div class="w-1/2 h-2.5 rounded bg-white/30"></div>
                <div class="grid grid-cols-3 gap-2 pt-2">
                  <div class="h-14 rounded-lg bg-white/5 border border-white/10 p-2 flex flex-col justify-between">
                    <span class="w-4 h-4 rounded bg-electric-500/40"></span>
                    <span class="w-full h-1.5 rounded bg-white/20"></span>
                  </div>
                  <div class="h-14 rounded-lg bg-white/5 border border-white/10 p-2 flex flex-col justify-between">
                    <span class="w-4 h-4 rounded bg-yukt-orange/40"></span>
                    <span class="w-full h-1.5 rounded bg-white/20"></span>
                  </div>
                  <div class="h-14 rounded-lg bg-white/5 border border-white/10 p-2 flex flex-col justify-between">
                    <span class="w-4 h-4 rounded bg-emerald-500/40"></span>
                    <span class="w-full h-1.5 rounded bg-white/20"></span>
                  </div>
                </div>
              </div>
            </div>

            <h3 class="font-display font-bold text-xl text-slate-900 mb-2">Next-Gen Corporate Web Portal</h3>
            <p class="text-slate-600 text-sm leading-relaxed">
              High-converting corporate web architecture featuring interactive 3D product storytelling, sub-second page loads, and multilingual SEO structure.
            </p>
          </div>

          <div class="pt-5 mt-5 border-t border-slate-200/80 flex items-center justify-between">
            <button type="button" data-preview-idx="0" class="preview-modal-btn text-xs font-mono font-semibold text-slate-700 hover:text-electric-600 flex items-center gap-1.5">
              <i data-lucide="maximize-2" class="w-3.5 h-3.5"></i> Inspect Interactive UI
            </button>
            <a 
              href="<?php echo getWhatsAppUrl('Hi YUKT IT SOLUTIONS, I want to build a Business Website like your Corporate Web Portal concept.'); ?>"
              target="_blank"
              rel="noopener noreferrer"
              class="text-xs font-semibold text-electric-600 hover:text-yukt-orange flex items-center gap-1"
            >
              <span>Build Similar</span>
              <i data-lucide="arrow-up-right" class="w-3.5 h-3.5"></i>
            </a>
          </div>
        </div>

        <!-- Concept 2: E-commerce Platforms -->
        <div data-category="web-ecom" class="portfolio-item perspective-stage group bg-slate-50 rounded-3xl p-6 border border-slate-200/90 hover:border-electric-500/40 shadow-lg hover:shadow-2xl transition-all flex flex-col justify-between">
          <div>
            <div class="flex items-center justify-between mb-4">
              <span class="px-2.5 py-1 rounded-md bg-yukt-orange/10 text-yukt-orangeDark font-mono text-[11px] font-semibold">CONCEPT ARCHITECTURE</span>
              <span class="font-mono text-xs text-slate-400">E-Commerce Platform</span>
            </div>

            <!-- 3D Floating Storefront Mockup -->
            <div class="device-3d-frame rounded-2xl bg-navy-950 border border-slate-800 shadow-2xl overflow-hidden mb-6">
              <div class="px-3 py-2 bg-navy-900 border-b border-white/10 flex items-center justify-between">
                <div class="flex items-center gap-1.5">
                  <span class="w-2.5 h-2.5 rounded-full bg-rose-500"></span>
                  <span class="w-2.5 h-2.5 rounded-full bg-amber-400"></span>
                  <span class="w-2.5 h-2.5 rounded-full bg-emerald-400"></span>
                </div>
                <span class="font-mono text-[10px] text-slate-400">commerce.yukt.concept</span>
                <i data-lucide="shopping-bag" class="w-3 h-3 text-yukt-orange"></i>
              </div>
              <div class="p-4 space-y-3 bg-gradient-to-br from-navy-950 via-navy-900 to-yukt-orange/20">
                <div class="flex items-center justify-between">
                  <div class="w-1/2 h-3.5 rounded bg-white/80"></div>
                  <span class="px-2 py-0.5 rounded bg-yukt-orange text-[10px] font-mono text-white">Fast Checkout</span>
                </div>
                <div class="grid grid-cols-2 gap-2.5 pt-1">
                  <div class="h-20 rounded-xl bg-white/5 border border-white/10 p-2.5 flex flex-col justify-between">
                    <div class="w-full h-8 rounded bg-gradient-to-r from-yukt-orange/30 to-amber-500/20"></div>
                    <div class="flex justify-between items-center">
                      <span class="w-10 h-2 rounded bg-white/40"></span>
                      <span class="w-4 h-4 rounded-full bg-yukt-orange"></span>
                    </div>
                  </div>
                  <div class="h-20 rounded-xl bg-white/5 border border-white/10 p-2.5 flex flex-col justify-between">
                    <div class="w-full h-8 rounded bg-gradient-to-r from-electric-500/30 to-cyan-500/20"></div>
                    <div class="flex justify-between items-center">
                      <span class="w-10 h-2 rounded bg-white/40"></span>
                      <span class="w-4 h-4 rounded-full bg-electric-500"></span>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <h3 class="font-display font-bold text-xl text-slate-900 mb-2">Headless E-Commerce Storefront</h3>
            <p class="text-slate-600 text-sm leading-relaxed">
              Custom omnichannel commerce system with real-time inventory sync, instant search filtering, and streamlined payment gateway integration.
            </p>
          </div>

          <div class="pt-5 mt-5 border-t border-slate-200/80 flex items-center justify-between">
            <button type="button" data-preview-idx="1" class="preview-modal-btn text-xs font-mono font-semibold text-slate-700 hover:text-electric-600 flex items-center gap-1.5">
              <i data-lucide="maximize-2" class="w-3.5 h-3.5"></i> Inspect Interactive UI
            </button>
            <a 
              href="<?php echo getWhatsAppUrl('Hi YUKT IT SOLUTIONS, I want to build an E-commerce Platform.'); ?>"
              target="_blank"
              rel="noopener noreferrer"
              class="text-xs font-semibold text-electric-600 hover:text-yukt-orange flex items-center gap-1"
            >
              <span>Build Similar</span>
              <i data-lucide="arrow-up-right" class="w-3.5 h-3.5"></i>
            </a>
          </div>
        </div>

        <!-- Concept 3: SaaS Dashboards -->
        <div data-category="saas-ai" class="portfolio-item perspective-stage group bg-slate-50 rounded-3xl p-6 border border-slate-200/90 hover:border-electric-500/40 shadow-lg hover:shadow-2xl transition-all flex flex-col justify-between">
          <div>
            <div class="flex items-center justify-between mb-4">
              <span class="px-2.5 py-1 rounded-md bg-indigo-500/10 text-indigo-600 font-mono text-[11px] font-semibold">CONCEPT ARCHITECTURE</span>
              <span class="font-mono text-xs text-slate-400">SaaS Dashboard</span>
            </div>

            <!-- 3D Floating SaaS Mockup -->
            <div class="device-3d-frame rounded-2xl bg-navy-950 border border-slate-800 shadow-2xl overflow-hidden mb-6">
              <div class="px-3 py-2 bg-navy-900 border-b border-white/10 flex items-center justify-between">
                <div class="flex items-center gap-1.5">
                  <span class="w-2.5 h-2.5 rounded-full bg-rose-500"></span>
                  <span class="w-2.5 h-2.5 rounded-full bg-amber-400"></span>
                  <span class="w-2.5 h-2.5 rounded-full bg-emerald-400"></span>
                </div>
                <span class="font-mono text-[10px] text-slate-400">analytics.yukt.concept</span>
                <i data-lucide="bar-chart-2" class="w-3 h-3 text-electric-400"></i>
              </div>
              <div class="p-4 space-y-3 bg-gradient-to-br from-navy-950 via-navy-900 to-indigo-600/20">
                <div class="grid grid-cols-3 gap-2">
                  <div class="p-2 rounded-lg bg-white/5 border border-white/10">
                    <div class="text-[9px] font-mono text-slate-400">THROUGHPUT</div>
                    <div class="text-xs font-bold text-emerald-400 font-mono">REALTIME</div>
                  </div>
                  <div class="p-2 rounded-lg bg-white/5 border border-white/10">
                    <div class="text-[9px] font-mono text-slate-400">LATENCY</div>
                    <div class="text-xs font-bold text-electric-400 font-mono">LOW-MS</div>
                  </div>
                  <div class="p-2 rounded-lg bg-white/5 border border-white/10">
                    <div class="text-[9px] font-mono text-slate-400">CLUSTERS</div>
                    <div class="text-xs font-bold text-yukt-orange font-mono">ACTIVE</div>
                  </div>
                </div>
                <div class="h-14 rounded-lg bg-white/5 border border-white/10 p-2 flex items-end gap-1.5">
                  <div class="flex-1 bg-electric-500/40 h-5 rounded-sm"></div>
                  <div class="flex-1 bg-electric-500/60 h-8 rounded-sm"></div>
                  <div class="flex-1 bg-electric-400 h-10 rounded-sm"></div>
                  <div class="flex-1 bg-yukt-orange h-9 rounded-sm"></div>
                  <div class="flex-1 bg-emerald-400 h-11 rounded-sm"></div>
                </div>
              </div>
            </div>

            <h3 class="font-display font-bold text-xl text-slate-900 mb-2">Enterprise BI &amp; SaaS Control Center</h3>
            <p class="text-slate-600 text-sm leading-relaxed">
              Role-based executive command dashboard with real-time data visualization, automated reporting exports, and multi-tenant architecture.
            </p>
          </div>

          <div class="pt-5 mt-5 border-t border-slate-200/80 flex items-center justify-between">
            <button type="button" data-preview-idx="2" class="preview-modal-btn text-xs font-mono font-semibold text-slate-700 hover:text-electric-600 flex items-center gap-1.5">
              <i data-lucide="maximize-2" class="w-3.5 h-3.5"></i> Inspect Interactive UI
            </button>
            <a 
              href="<?php echo getWhatsAppUrl('Hi YUKT IT SOLUTIONS, I want to build a custom SaaS Dashboard or Software Platform.'); ?>"
              target="_blank"
              rel="noopener noreferrer"
              class="text-xs font-semibold text-electric-600 hover:text-yukt-orange flex items-center gap-1"
            >
              <span>Build Similar</span>
              <i data-lucide="arrow-up-right" class="w-3.5 h-3.5"></i>
            </a>
          </div>
        </div>

        <!-- Concept 4: AI Automation Systems -->
        <div data-category="saas-ai" class="portfolio-item perspective-stage group bg-slate-50 rounded-3xl p-6 border border-slate-200/90 hover:border-yukt-orange/50 shadow-lg hover:shadow-2xl transition-all flex flex-col justify-between">
          <div>
            <div class="flex items-center justify-between mb-4">
              <span class="px-2.5 py-1 rounded-md bg-yukt-orange/15 text-yukt-orangeDark font-mono text-[11px] font-semibold">CONCEPT ARCHITECTURE</span>
              <span class="font-mono text-xs text-slate-400">AI Automation</span>
            </div>

            <!-- 3D Floating AI Pipeline Mockup -->
            <div class="device-3d-frame rounded-2xl bg-navy-950 border border-slate-800 shadow-2xl overflow-hidden mb-6">
              <div class="px-3 py-2 bg-navy-900 border-b border-white/10 flex items-center justify-between">
                <div class="flex items-center gap-1.5">
                  <span class="w-2.5 h-2.5 rounded-full bg-rose-500"></span>
                  <span class="w-2.5 h-2.5 rounded-full bg-amber-400"></span>
                  <span class="w-2.5 h-2.5 rounded-full bg-emerald-400"></span>
                </div>
                <span class="font-mono text-[10px] text-slate-400">ai-agent.yukt.concept</span>
                <i data-lucide="cpu" class="w-3 h-3 text-yukt-orange"></i>
              </div>
              <div class="p-4 space-y-3 bg-gradient-to-br from-navy-950 via-navy-900 to-yukt-orange/25">
                <div class="flex items-center justify-between text-[10px] font-mono text-yukt-orangeLight">
                  <span>WORKFLOW ORCHESTRATOR</span>
                  <span>AUTONOMOUS</span>
                </div>
                <div class="flex items-center justify-between gap-2 py-3">
                  <div class="px-2.5 py-2 rounded-lg bg-white/10 border border-white/15 font-mono text-[10px] text-white">WhatsApp / CRM</div>
                  <div class="flex-1 h-0.5 bg-gradient-to-r from-electric-400 to-yukt-orange"></div>
                  <div class="px-2.5 py-2 rounded-lg bg-yukt-orange/30 border border-yukt-orange text-[10px] font-mono text-white">AI Agent</div>
                  <div class="flex-1 h-0.5 bg-gradient-to-r from-yukt-orange to-emerald-400"></div>
                  <div class="px-2.5 py-2 rounded-lg bg-emerald-500/20 border border-emerald-400/40 text-[10px] font-mono text-emerald-300">Action</div>
                </div>
              </div>
            </div>

            <h3 class="font-display font-bold text-xl text-slate-900 mb-2">Autonomous AI Support &amp; Lead Engine</h3>
            <p class="text-slate-600 text-sm leading-relaxed">
              Intelligent multi-agent workflow connecting customer chat, document knowledge bases, and automated CRM pipeline updates.
            </p>
          </div>

          <div class="pt-5 mt-5 border-t border-slate-200/80 flex items-center justify-between">
            <button type="button" data-preview-idx="3" class="preview-modal-btn text-xs font-mono font-semibold text-slate-700 hover:text-electric-600 flex items-center gap-1.5">
              <i data-lucide="maximize-2" class="w-3.5 h-3.5"></i> Inspect Interactive UI
            </button>
            <a 
              href="<?php echo getWhatsAppUrl('Hi YUKT IT SOLUTIONS, I want to build an AI Automation System.'); ?>"
              target="_blank"
              rel="noopener noreferrer"
              class="text-xs font-semibold text-electric-600 hover:text-yukt-orange flex items-center gap-1"
            >
              <span>Build Similar</span>
              <i data-lucide="arrow-up-right" class="w-3.5 h-3.5"></i>
            </a>
          </div>
        </div>

        <!-- Concept 5: Mobile Applications -->
        <div data-category="mobile-growth" class="portfolio-item perspective-stage group bg-slate-50 rounded-3xl p-6 border border-slate-200/90 hover:border-electric-500/40 shadow-lg hover:shadow-2xl transition-all flex flex-col justify-between">
          <div>
            <div class="flex items-center justify-between mb-4">
              <span class="px-2.5 py-1 rounded-md bg-emerald-500/10 text-emerald-700 font-mono text-[11px] font-semibold">CONCEPT ARCHITECTURE</span>
              <span class="font-mono text-xs text-slate-400">Mobile Application</span>
            </div>

            <!-- 3D Floating Mobile Device Mockup -->
            <div class="device-3d-frame rounded-2xl bg-navy-950 border border-slate-800 shadow-2xl overflow-hidden mb-6">
              <div class="px-3 py-2 bg-navy-900 border-b border-white/10 flex items-center justify-between">
                <span class="font-mono text-[10px] text-emerald-400">iOS &amp; Android Native Feel</span>
                <i data-lucide="smartphone" class="w-3.5 h-3.5 text-slate-400"></i>
              </div>
              <div class="p-4 bg-gradient-to-br from-navy-950 via-navy-900 to-emerald-600/20 flex items-center justify-center">
                <div class="w-44 rounded-2xl bg-navy-900 border border-white/15 p-3 space-y-2 shadow-inner">
                  <div class="w-10 h-1 mx-auto rounded-full bg-white/20"></div>
                  <div class="h-10 rounded-xl bg-gradient-to-r from-electric-500 to-emerald-400 p-2 flex items-center justify-between">
                    <span class="font-mono text-[9px] text-white font-bold">YUKT MOBILE</span>
                    <span class="w-3 h-3 rounded-full bg-white/30"></span>
                  </div>
                  <div class="grid grid-cols-2 gap-1.5">
                    <div class="h-8 rounded-lg bg-white/5 border border-white/10"></div>
                    <div class="h-8 rounded-lg bg-white/5 border border-white/10"></div>
                  </div>
                </div>
              </div>
            </div>

            <h3 class="font-display font-bold text-xl text-slate-900 mb-2">On-Demand Service &amp; Booking App</h3>
            <p class="text-slate-600 text-sm leading-relaxed">
              Sleek mobile application concept with real-time order tracking, push notifications, biometric login, and offline-first sync.
            </p>
          </div>

          <div class="pt-5 mt-5 border-t border-slate-200/80 flex items-center justify-between">
            <button type="button" data-preview-idx="4" class="preview-modal-btn text-xs font-mono font-semibold text-slate-700 hover:text-electric-600 flex items-center gap-1.5">
              <i data-lucide="maximize-2" class="w-3.5 h-3.5"></i> Inspect Interactive UI
            </button>
            <a 
              href="<?php echo getWhatsAppUrl('Hi YUKT IT SOLUTIONS, I want to build a Mobile Application.'); ?>"
              target="_blank"
              rel="noopener noreferrer"
              class="text-xs font-semibold text-electric-600 hover:text-yukt-orange flex items-center gap-1"
            >
              <span>Build Similar</span>
              <i data-lucide="arrow-up-right" class="w-3.5 h-3.5"></i>
            </a>
          </div>
        </div>

        <!-- Concept 6: Digital Marketing Campaigns -->
        <div data-category="mobile-growth" class="portfolio-item perspective-stage group bg-slate-50 rounded-3xl p-6 border border-slate-200/90 hover:border-purple-500/40 shadow-lg hover:shadow-2xl transition-all flex flex-col justify-between">
          <div>
            <div class="flex items-center justify-between mb-4">
              <span class="px-2.5 py-1 rounded-md bg-purple-500/10 text-purple-700 font-mono text-[11px] font-semibold">CONCEPT ARCHITECTURE</span>
              <span class="font-mono text-xs text-slate-400">Growth Campaign</span>
            </div>

            <!-- 3D Floating Campaign Studio Mockup -->
            <div class="device-3d-frame rounded-2xl bg-navy-950 border border-slate-800 shadow-2xl overflow-hidden mb-6">
              <div class="px-3 py-2 bg-navy-900 border-b border-white/10 flex items-center justify-between">
                <span class="font-mono text-[10px] text-purple-400">growth-studio.yukt.concept</span>
                <i data-lucide="megaphone" class="w-3.5 h-3.5 text-yukt-orange"></i>
              </div>
              <div class="p-4 space-y-3 bg-gradient-to-br from-navy-950 via-navy-900 to-purple-600/20">
                <div class="flex items-center justify-between">
                  <span class="font-mono text-[10px] text-slate-300">MULTI-CHANNEL FUNNEL</span>
                  <span class="px-2 py-0.5 rounded bg-purple-500/30 text-purple-300 font-mono text-[9px]">AI CREATIVE</span>
                </div>
                <div class="space-y-1.5 pt-1">
                  <div class="w-full h-4 rounded bg-gradient-to-r from-electric-500 to-purple-500 flex items-center px-2 text-[9px] font-mono text-white">Search &amp; Social Discovery</div>
                  <div class="w-4/5 mx-auto h-4 rounded bg-gradient-to-r from-purple-500 to-yukt-orange flex items-center px-2 text-[9px] font-mono text-white">Interactive Landing Experience</div>
                  <div class="w-3/5 mx-auto h-4 rounded bg-emerald-500 flex items-center justify-center text-[9px] font-mono text-navy-950 font-bold">Direct WhatsApp Lead</div>
                </div>
              </div>
            </div>

            <h3 class="font-display font-bold text-xl text-slate-900 mb-2">Full-Funnel Growth &amp; Creative Campaign</h3>
            <p class="text-slate-600 text-sm leading-relaxed">
              Integrated SEO, paid media, and AI-assisted video creative system engineered to capture qualified leads directly into your sales pipeline.
            </p>
          </div>

          <div class="pt-5 mt-5 border-t border-slate-200/80 flex items-center justify-between">
            <button type="button" data-preview-idx="5" class="preview-modal-btn text-xs font-mono font-semibold text-slate-700 hover:text-electric-600 flex items-center gap-1.5">
              <i data-lucide="maximize-2" class="w-3.5 h-3.5"></i> Inspect Interactive UI
            </button>
            <a 
              href="<?php echo getWhatsAppUrl('Hi YUKT IT SOLUTIONS, I want to launch a Digital Marketing & AI Creative Campaign.'); ?>"
              target="_blank"
              rel="noopener noreferrer"
              class="text-xs font-semibold text-electric-600 hover:text-yukt-orange flex items-center gap-1"
            >
              <span>Build Similar</span>
              <i data-lucide="arrow-up-right" class="w-3.5 h-3.5"></i>
            </a>
          </div>
        </div>

      </div>

      <!-- 42+ Live Production Client Deployments Preview Banner -->
      <div class="mt-14 p-8 rounded-3xl bg-slate-50 border border-slate-200/90 shadow-md reveal-up">
        <div class="flex flex-col lg:flex-row items-start lg:items-center justify-between gap-6">
          <div class="space-y-2 max-w-2xl">
            <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-emerald-50 text-emerald-700 border border-emerald-200 text-xs font-mono font-semibold">
              <span class="w-2 h-2 rounded-full bg-emerald-500 animate-ping"></span>
              <span>42+ Live Production Websites Deployed</span>
            </div>
            <h3 class="font-display font-bold text-2xl text-slate-900 tracking-tight">
              Looking for Real-World Client Work?
            </h3>
            <p class="text-sm text-slate-600 leading-relaxed">
              Explore our live production registry of 42+ active commercial client websites across E-Commerce, Logistics, Healthcare, B2B Trading, and Corporate Portals.
            </p>
          </div>
          <div class="flex flex-wrap items-center gap-3 flex-shrink-0">
            <a href="portfolio.php#live-registry" class="px-6 py-3 rounded-xl font-display font-semibold text-xs sm:text-sm text-white bg-slate-900 hover:bg-electric-600 transition-colors shadow-md flex items-center gap-2">
              <span>View 42+ Live Client Websites</span>
              <i data-lucide="arrow-right" class="w-4 h-4"></i>
            </a>
          </div>
        </div>

        <!-- Featured Live Domain Badges Preview -->
        <div class="mt-6 pt-5 border-t border-slate-200 flex flex-wrap items-center gap-2">
          <span class="text-xs font-mono text-slate-500 mr-2">Featured Live Deployments:</span>
          <?php 
          $sampleDomains = ['bettersupplytrading.com', 'onestallcargo.com', 'kavexcourier.in', 'zenvixalaboratories.com', 'norvastore.in', 'scan2freight.com', 'muskaninteriors.in', 'mediskyindia.com'];
          foreach ($sampleDomains as $sd): ?>
            <a href="https://<?php echo $sd; ?>" target="_blank" rel="noopener noreferrer" class="px-2.5 py-1 rounded-lg bg-white border border-slate-200 text-xs font-mono text-slate-700 hover:text-electric-600 hover:border-electric-400 transition-colors inline-flex items-center gap-1 shadow-xs">
              <span class="w-1.5 h-1.5 rounded-full bg-emerald-500"></span>
              <span><?php echo $sd; ?></span>
              <i data-lucide="external-link" class="w-3 h-3 text-slate-400"></i>
            </a>
          <?php endforeach; ?>
        </div>
      </div>

    </div>
  </section>

  <!-- ==========================================
       SECTION 5: WHY CHOOSE YUKT IT SOLUTIONS?
  =========================================== -->
  <section id="why-yukt" class="relative py-24 lg:py-32 bg-navy-950 text-white bg-grid-dark overflow-hidden">
    <!-- Subtle 3D Geometric Background Accents -->
    <div class="absolute -top-24 right-1/3 w-96 h-96 bg-electric-500/10 rounded-full blur-[120px] pointer-events-none"></div>
    <div class="absolute bottom-0 left-1/4 w-96 h-96 bg-yukt-orange/10 rounded-full blur-[120px] pointer-events-none"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-10 relative z-10">
      <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-start">
        
        <!-- Left Sticky Intro Column (5 Cols) -->
        <div class="lg:col-span-5 space-y-6 reveal-up">
          <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-white/[0.05] border border-white/10 text-yukt-orange font-mono text-xs uppercase tracking-widest">
            <i data-lucide="shield-check" class="w-3.5 h-3.5"></i>
            <span>The YUKT Advantage</span>
          </div>

          <h2 class="font-display font-bold text-3xl sm:text-4xl lg:text-5xl leading-tight tracking-tight">
            Why Partner With <span class="text-gradient-electric">YUKT IT SOLUTIONS?</span>
          </h2>

          <p class="text-slate-300 text-base sm:text-lg leading-relaxed">
            We bridge the gap between creative digital agency craftsmanship and rigorous software engineering—delivering solutions built around real commercial outcomes.
          </p>

          <!-- Decorative 3D-inspired Architecture Card -->
          <div class="p-6 rounded-3xl glass-dark border border-white/10 space-y-4">
            <div class="flex items-center gap-3">
              <div class="w-11 h-11 rounded-xl bg-gradient-to-br from-electric-500 to-yukt-orange flex items-center justify-center text-white font-display font-bold">
                3D
              </div>
              <div>
                <div class="font-display font-semibold text-white">Direct Engineering Communication</div>
                <div class="font-mono text-xs text-slate-400">Zero bloated layers &bull; Fast execution</div>
              </div>
            </div>
            <p class="text-xs sm:text-sm text-slate-300 leading-relaxed">
              Connect straight with our technical architects and creative strategists on WhatsApp for transparent milestones and rapid iterations.
            </p>
          </div>
        </div>

        <!-- Right 6 Core Pillars Grid (7 Cols) -->
        <div class="lg:col-span-7 grid grid-cols-1 sm:grid-cols-2 gap-5">
          
          <!-- Pillar 1 -->
          <div class="glass-dark rounded-2xl p-6 border border-white/10 hover:border-electric-400/50 transition-all group">
            <div class="w-11 h-11 rounded-xl bg-electric-500/15 border border-electric-400/30 flex items-center justify-center text-electric-400 mb-4 group-hover:scale-110 transition-transform">
              <i data-lucide="target" class="w-5 h-5"></i>
            </div>
            <h3 class="font-display font-bold text-lg text-white mb-2">Business-Focused Solutions</h3>
            <p class="text-sm text-slate-400 leading-relaxed">
              Every line of code and interface component is aligned with your customer acquisition, operational efficiency, and revenue goals.
            </p>
          </div>

          <!-- Pillar 2 -->
          <div class="glass-dark rounded-2xl p-6 border border-white/10 hover:border-electric-400/50 transition-all group">
            <div class="w-11 h-11 rounded-xl bg-yukt-orange/15 border border-yukt-orange/30 flex items-center justify-center text-yukt-orange mb-4 group-hover:scale-110 transition-transform">
              <i data-lucide="cpu" class="w-5 h-5"></i>
            </div>
            <h3 class="font-display font-bold text-lg text-white mb-2">Modern Technology</h3>
            <p class="text-sm text-slate-400 leading-relaxed">
              We build with future-ready web frameworks, cloud-native APIs, interactive 3D WebGL graphics, and secure databases.
            </p>
          </div>

          <!-- Pillar 3 -->
          <div class="glass-dark rounded-2xl p-6 border border-white/10 hover:border-electric-400/50 transition-all group">
            <div class="w-11 h-11 rounded-xl bg-emerald-500/15 border border-emerald-400/30 flex items-center justify-center text-emerald-400 mb-4 group-hover:scale-110 transition-transform">
              <i data-lucide="smartphone" class="w-5 h-5"></i>
            </div>
            <h3 class="font-display font-bold text-lg text-white mb-2">Responsive Design</h3>
            <p class="text-sm text-slate-400 leading-relaxed">
              Fluid, mobile-first layouts and touch-optimized interactions that look and perform flawlessly across smartphones, tablets, and desktops.
            </p>
          </div>

          <!-- Pillar 4 -->
          <div class="glass-dark rounded-2xl p-6 border border-white/10 hover:border-electric-400/50 transition-all group">
            <div class="w-11 h-11 rounded-xl bg-sky-500/15 border border-sky-400/30 flex items-center justify-center text-sky-400 mb-4 group-hover:scale-110 transition-transform">
              <i data-lucide="zap" class="w-5 h-5"></i>
            </div>
            <h3 class="font-display font-bold text-lg text-white mb-2">Performance and Scalability</h3>
            <p class="text-sm text-slate-400 leading-relaxed">
              Optimized assets, clean modular codebases, and scalable infrastructure built to grow smoothly alongside your user base.
            </p>
          </div>

          <!-- Pillar 5 -->
          <div class="glass-dark rounded-2xl p-6 border border-white/10 hover:border-yukt-orange/50 transition-all group">
            <div class="w-11 h-11 rounded-xl bg-purple-500/15 border border-purple-400/30 flex items-center justify-center text-purple-400 mb-4 group-hover:scale-110 transition-transform">
              <i data-lucide="sparkles" class="w-5 h-5"></i>
            </div>
            <h3 class="font-display font-bold text-lg text-white mb-2">AI-Powered Innovation</h3>
            <p class="text-sm text-slate-400 leading-relaxed">
              Practical integration of AI chatbots, intelligent workflows, and generative media to save time and amplify your competitive edge.
            </p>
          </div>

          <!-- Pillar 6 -->
          <div class="glass-dark rounded-2xl p-6 border border-white/10 hover:border-electric-400/50 transition-all group">
            <div class="w-11 h-11 rounded-xl bg-amber-500/15 border border-amber-400/30 flex items-center justify-center text-amber-400 mb-4 group-hover:scale-110 transition-transform">
              <i data-lucide="life-buoy" class="w-5 h-5"></i>
            </div>
            <h3 class="font-display font-bold text-lg text-white mb-2">Ongoing Technical Support</h3>
            <p class="text-sm text-slate-400 leading-relaxed">
              Dedicated post-launch maintenance, security updates, performance monitoring, and team training whenever you need us.
            </p>
          </div>

        </div>
      </div>
    </div>
  </section>

  <!-- ==========================================
       SECTION 6: VERIFIED LEADERSHIP & FOUNDERS
       “Meet the Technical Architects Behind Yukt”
  =========================================== -->
  <section id="leadership" class="relative py-20 lg:py-28 bg-navy-950 text-white bg-grid-dark border-t border-white/10 overflow-hidden">
    <!-- Ambient Lighting Glows Behind Cards -->
    <div class="absolute top-1/4 left-1/4 w-96 h-96 bg-electric-500/15 rounded-full blur-[130px] pointer-events-none"></div>
    <div class="absolute bottom-10 right-10 w-96 h-96 bg-yukt-orange/15 rounded-full blur-[130px] pointer-events-none"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-10 relative z-10">
      
      <div class="max-w-3xl mx-auto text-center space-y-3 mb-14 reveal-up">
        <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-white/[0.05] border border-white/10 text-electric-400 font-mono text-xs uppercase tracking-widest">
          <i data-lucide="shield-check" class="w-3.5 h-3.5 text-yukt-orange"></i>
          <span>Verified Leadership</span>
        </div>
        <h2 class="font-display font-bold text-3xl sm:text-4xl lg:text-5xl tracking-tight text-white">
          Meet the <span class="bg-gradient-to-r from-electric-400 via-cyan-400 to-electric-500 bg-clip-text text-transparent">Technical Architects</span> Behind Yukt
        </h2>
        <p class="text-sm sm:text-base text-slate-300 max-w-2xl mx-auto leading-relaxed">
          Direct senior engineering access without junior hand-offs or middlemen. Connect directly with the Founders and lead architects who design and deploy your solutions.
        </p>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-4xl mx-auto">
        <!-- Ansar Card (Founder) -->
        <div class="bg-navy-900/90 border border-white/15 rounded-3xl p-6 sm:p-8 text-white relative overflow-hidden shadow-2xl group hover:border-yukt-orange/60 transition-all reveal-up">
          <div class="absolute -top-16 -right-16 w-40 h-40 bg-yukt-orange/20 rounded-full blur-3xl pointer-events-none"></div>
          
          <div class="flex items-start justify-between gap-4 relative z-10">
            <div class="flex items-center gap-4">
              <div class="w-16 h-16 rounded-2xl bg-gradient-to-br from-yukt-orange to-amber-600 flex items-center justify-center text-white font-display font-bold text-2xl shadow-lg shadow-yukt-orange/30 group-hover:scale-105 transition-transform">
                AS
              </div>
              <div>
                <div class="flex items-center gap-2">
                  <h3 class="font-display font-bold text-xl sm:text-2xl text-white">Ansar Ali Shah</h3>
                  <span class="px-2.5 py-0.5 rounded-full text-[10px] font-mono font-semibold uppercase tracking-wider bg-yukt-orange/20 text-amber-300 border border-yukt-orange/30">Founder</span>
                </div>
                <div class="text-xs font-mono text-yukt-orange mt-0.5">Founder &amp; Lead Technical Architect</div>
                <div class="text-xs text-slate-300 mt-1">Web Applications &bull; High-Performance Backends &bull; DevOps</div>
              </div>
            </div>
          </div>

          <div class="mt-6 pt-5 border-t border-white/10 space-y-2.5 text-xs sm:text-sm relative z-10">
            <div class="flex items-center justify-between">
              <span class="text-slate-400 font-mono text-xs">Direct Line:</span>
              <a href="tel:+919576338282" class="font-mono text-slate-200 hover:text-white transition-colors font-medium">+91 95763 38282</a>
            </div>
            <div class="flex items-center justify-between">
              <span class="text-slate-400 font-mono text-xs">WhatsApp Desk:</span>
              <a href="https://wa.me/919576338282?text=Hi%20Ansar%2C%20I%20would%20like%20to%20discuss%20a%20project%20with%20Yukt." target="_blank" rel="noopener noreferrer" class="text-emerald-400 hover:text-emerald-300 font-mono text-xs flex items-center gap-1 font-semibold">
                <i data-lucide="message-circle" class="w-3.5 h-3.5"></i>
                <span>Direct WhatsApp &rarr;</span>
              </a>
            </div>
          </div>

          <div class="mt-5 pt-4 border-t border-white/10 flex flex-wrap items-center gap-2.5 relative z-10">
            <a href="https://github.com/ansaralisahh" target="_blank" rel="noopener noreferrer" class="px-3 py-1.5 rounded-xl bg-white/5 hover:bg-white/15 border border-white/10 flex items-center gap-2 text-xs text-slate-300 hover:text-white transition-colors">
              <i data-lucide="github" class="w-3.5 h-3.5 text-white"></i>
              <span class="font-mono">github.com/ansaralisahh</span>
            </a>
            <a href="https://www.linkedin.com/in/ansaralisahh" target="_blank" rel="noopener noreferrer" class="px-3 py-1.5 rounded-xl bg-white/5 hover:bg-blue-500/20 border border-white/10 flex items-center gap-2 text-xs text-slate-300 hover:text-white transition-colors">
              <i data-lucide="linkedin" class="w-3.5 h-3.5 text-blue-400"></i>
              <span>LinkedIn Profile</span>
            </a>
          </div>
        </div>

        <!-- Ranjeet Card (Co-Founder) -->
        <div class="bg-navy-900/90 border border-white/15 rounded-3xl p-6 sm:p-8 text-white relative overflow-hidden shadow-2xl group hover:border-electric-400/60 transition-all reveal-up">
          <div class="absolute -top-16 -right-16 w-40 h-40 bg-electric-500/20 rounded-full blur-3xl pointer-events-none"></div>
          
          <div class="flex items-start justify-between gap-4 relative z-10">
            <div class="flex items-center gap-4">
              <div class="w-16 h-16 rounded-2xl bg-gradient-to-br from-electric-600 to-blue-700 flex items-center justify-center text-white font-display font-bold text-2xl shadow-lg shadow-electric-600/30 group-hover:scale-105 transition-transform">
                RM
              </div>
              <div>
                <div class="flex items-center gap-2">
                  <h3 class="font-display font-bold text-xl sm:text-2xl text-white">Ranjeet</h3>
                  <span class="px-2.5 py-0.5 rounded-full text-[10px] font-mono font-semibold uppercase tracking-wider bg-electric-500/20 text-electric-300 border border-electric-400/30">Co-Founder</span>
                </div>
                <div class="text-xs font-mono text-electric-400 mt-0.5">Co-Founder &amp; Lead Solutions Architect</div>
                <div class="text-xs text-slate-300 mt-1">Cloud Systems &bull; Full-Stack Architecture &bull; AI Pipelines</div>
              </div>
            </div>
          </div>

          <div class="mt-6 pt-5 border-t border-white/10 space-y-2.5 text-xs sm:text-sm relative z-10">
            <div class="flex items-center justify-between">
              <span class="text-slate-400 font-mono text-xs">Direct Line:</span>
              <a href="tel:+917217645059" class="font-mono text-slate-200 hover:text-white transition-colors font-medium">+91 72176 45059</a>
            </div>
            <div class="flex items-center justify-between">
              <span class="text-slate-400 font-mono text-xs">WhatsApp Desk:</span>
              <a href="https://wa.me/917217645059?text=Hi%20Ranjeet%2C%20I%20would%20like%20to%20discuss%20a%20project%20with%20Yukt." target="_blank" rel="noopener noreferrer" class="text-emerald-400 hover:text-emerald-300 font-mono text-xs flex items-center gap-1 font-semibold">
                <i data-lucide="message-circle" class="w-3.5 h-3.5"></i>
                <span>Direct WhatsApp &rarr;</span>
              </a>
            </div>
          </div>

          <div class="mt-5 pt-4 border-t border-white/10 flex flex-wrap items-center gap-2.5 relative z-10">
            <a href="https://github.com/yukt2026" target="_blank" rel="noopener noreferrer" class="px-3 py-1.5 rounded-xl bg-white/5 hover:bg-white/15 border border-white/10 flex items-center gap-2 text-xs text-slate-300 hover:text-white transition-colors">
              <i data-lucide="github" class="w-3.5 h-3.5 text-white"></i>
              <span class="font-mono">github.com/yukt2026</span>
            </a>
            <a href="https://www.linkedin.com/in/ranjeet-m-079777262/?isSelfProfile=true" target="_blank" rel="noopener noreferrer" class="px-3 py-1.5 rounded-xl bg-white/5 hover:bg-electric-500/20 border border-white/10 flex items-center gap-2 text-xs text-slate-300 hover:text-white transition-colors">
              <i data-lucide="linkedin" class="w-3.5 h-3.5 text-electric-400"></i>
              <span>LinkedIn Profile</span>
            </a>
          </div>
        </div>
      </div>

    </div>
  </section>

  <!-- ==========================================
       SECTION 7: CONTACT SECTION — WHATSAPP LEAD GENERATION
  =========================================== -->
  <section id="contact" class="relative py-24 lg:py-32 bg-gradient-to-b from-navy-950 via-navy-900 to-navy-950 text-white overflow-hidden">
    <!-- Dramatic Spotlight Glows -->
    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[700px] h-[350px] bg-gradient-to-r from-electric-500/25 via-electric-400/15 to-yukt-orange/25 rounded-full blur-[140px] pointer-events-none"></div>

    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-10 relative z-10">
      <div class="glass-dark rounded-[32px] p-8 sm:p-12 lg:p-16 border border-white/15 shadow-2xl relative overflow-hidden">
        
        <!-- Top Decorative Corner Accent -->
        <div class="absolute -top-24 -right-24 w-56 h-56 rounded-full bg-gradient-to-br from-electric-500/30 to-yukt-orange/30 blur-2xl pointer-events-none"></div>

        <div class="text-center max-w-2xl mx-auto space-y-5 mb-10">
          <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-emerald-500/10 border border-emerald-400/30 text-emerald-300 font-mono text-xs uppercase tracking-widest">
            <span class="w-2 h-2 rounded-full bg-emerald-400 animate-ping"></span>
            <span>Instant WhatsApp Consultation &bull; +91 95763 38282</span>
          </div>

          <h2 class="font-display font-bold text-4xl sm:text-5xl lg:text-6xl tracking-tight text-white">
            Have an Idea? <span class="text-gradient-electric">Let’s Build It.</span>
          </h2>

          <p class="text-slate-300 text-base sm:text-lg leading-relaxed">
            Tell us what you want to build. Let’s turn your idea into a powerful digital solution.
          </p>
        </div>

        <!-- Primary Direct WhatsApp CTA Button -->
        <div class="flex flex-col sm:flex-row items-center justify-center gap-4 mb-12">
          <a 
            href="<?php echo getWhatsAppUrl('Hi YUKT IT SOLUTIONS, I want to discuss a project.'); ?>"
            target="_blank"
            rel="noopener noreferrer"
            class="w-full sm:w-auto inline-flex items-center justify-center gap-3 px-8 py-5 rounded-2xl font-display font-bold text-base sm:text-lg text-white bg-gradient-to-r from-yukt-orange via-amber-500 to-yukt-orange hover:from-yukt-orangeLight hover:to-amber-400 shadow-2xl shadow-yukt-orange/30 border border-amber-300/40 transition-all duration-300 hover:-translate-y-1 group"
          >
            <i data-lucide="message-circle" class="w-6 h-6"></i>
            <span>Discuss Your Project on WhatsApp</span>
            <i data-lucide="arrow-up-right" class="w-5 h-5 group-hover:translate-x-0.5 group-hover:-translate-y-0.5 transition-transform"></i>
          </a>
        </div>

        <!-- Interactive Custom WhatsApp Message Builder -->
        <div class="pt-10 border-t border-white/10">
          <div class="flex items-center justify-between flex-wrap gap-2 mb-4">
            <span class="font-mono text-xs uppercase tracking-wider text-slate-400">
              Optional: Customize Your Project Brief Before Opening WhatsApp
            </span>
            <span class="font-mono text-xs text-electric-400">Direct-to-Engineer Chat</span>
          </div>

          <!-- Selectable Service Pills -->
          <div class="flex flex-wrap gap-2 mb-5" id="wa-service-pills">
            <button type="button" data-service-pill="Website Development" class="wa-pill px-3.5 py-2 rounded-xl text-xs font-medium bg-white/[0.06] hover:bg-white/10 border border-white/10 text-slate-200 transition-all">
              + Website Development
            </button>
            <button type="button" data-service-pill="Software &amp; Mobile App" class="wa-pill px-3.5 py-2 rounded-xl text-xs font-medium bg-white/[0.06] hover:bg-white/10 border border-white/10 text-slate-200 transition-all">
              + Software &amp; App Development
            </button>
            <button type="button" data-service-pill="AI Automation" class="wa-pill px-3.5 py-2 rounded-xl text-xs font-medium bg-white/[0.06] hover:bg-white/10 border border-white/10 text-slate-200 transition-all">
              + AI Automation
            </button>
            <button type="button" data-service-pill="Digital Marketing" class="wa-pill px-3.5 py-2 rounded-xl text-xs font-medium bg-white/[0.06] hover:bg-white/10 border border-white/10 text-slate-200 transition-all">
              + Digital Marketing
            </button>
            <button type="button" data-service-pill="AI Creative Studio" class="wa-pill px-3.5 py-2 rounded-xl text-xs font-medium bg-white/[0.06] hover:bg-white/10 border border-white/10 text-slate-200 transition-all">
              + AI Marketing &amp; Creative Studio
            </button>
            <button type="button" data-service-pill="IT Consulting &amp; Training" class="wa-pill px-3.5 py-2 rounded-xl text-xs font-medium bg-white/[0.06] hover:bg-white/10 border border-white/10 text-slate-200 transition-all">
              + IT Consulting &amp; Training
            </button>
          </div>

          <div class="flex flex-col sm:flex-row gap-3">
            <label for="wa-custom-note" class="sr-only">Brief project description</label>
            <input 
              id="wa-custom-note" 
              type="text" 
              placeholder="Briefly describe your idea or timeline (e.g., E-commerce app with AI chatbot)..." 
              class="flex-1 px-4 py-3.5 rounded-xl bg-navy-950/90 border border-white/15 text-sm text-white placeholder-slate-500 focus:outline-none focus:border-electric-400"
            />
            <button 
              id="wa-custom-send-btn" 
              type="button"
              class="px-6 py-3.5 rounded-xl font-display font-semibold text-sm text-white bg-electric-500 hover:bg-electric-400 transition-colors flex items-center justify-center gap-2 shrink-0 shadow-lg shadow-electric-500/25"
            >
              <span>Launch Custom Chat</span>
              <i data-lucide="send" class="w-4 h-4"></i>
            </button>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- ==========================================
       INTERACTIVE CONCEPT PREVIEW MODAL
  =========================================== -->
  <div id="portfolio-modal" class="fixed inset-0 z-50 hidden items-center justify-center p-4 bg-navy-950/80 backdrop-blur-md">
    <div class="glass-dark rounded-3xl max-w-2xl w-full p-6 sm:p-8 border border-white/15 shadow-2xl space-y-5 text-white">
      <div class="flex items-center justify-between border-b border-white/10 pb-4">
        <div>
          <span id="modal-category" class="font-mono text-xs text-electric-400 uppercase">CONCEPT ARCHITECTURE PREVIEW</span>
          <h3 id="modal-title" class="font-display font-bold text-2xl mt-0.5">Concept Title</h3>
        </div>
        <button type="button" id="close-modal-btn" class="p-2 rounded-xl bg-white/5 hover:bg-white/10 text-slate-300" aria-label="Close Preview Modal">
          <i data-lucide="x" class="w-5 h-5"></i>
        </button>
      </div>

      <p id="modal-desc" class="text-slate-300 text-sm sm:text-base leading-relaxed"></p>

      <div class="p-4 rounded-2xl bg-navy-950/90 border border-white/10 space-y-2">
        <div class="font-mono text-xs text-yukt-orange uppercase">Key Architectural Highlights:</div>
        <ul id="modal-highlights" class="grid grid-cols-1 sm:grid-cols-2 gap-2 text-xs sm:text-sm text-slate-300 font-mono"></ul>
      </div>

      <div class="flex flex-col sm:flex-row items-center justify-between gap-3 pt-2">
        <span class="text-xs text-slate-400 font-mono">Illustrative Concept &bull; Customizable for Your Brand</span>
        <a 
          id="modal-wa-link"
          href="<?php echo getWhatsAppUrl('Hi YUKT IT SOLUTIONS, I want to discuss a project.'); ?>"
          target="_blank"
          rel="noopener noreferrer"
          class="w-full sm:w-auto px-6 py-3 rounded-xl font-display font-semibold text-sm text-white bg-gradient-to-r from-electric-500 to-yukt-orange flex items-center justify-center gap-2 shadow-lg"
        >
          <span>Request This Architecture on WhatsApp</span>
          <i data-lucide="arrow-up-right" class="w-4 h-4"></i>
        </a>
      </div>
    </div>
  </div>

  <!-- ==========================================
       APPLICATION LOGIC & THREE.JS 3D SCENES
  =========================================== -->
  <script>
    // Initialize Lucide icons
    if (window.lucide) {
      lucide.createIcons();
    }

    /* -----------------------------------------------------------
       1. SCROLL REVEAL & 3D TILT CARDS
    ----------------------------------------------------------- */
    const revealElements = document.querySelectorAll('.reveal-up');
    const revealObserver = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('active');
        }
      });
    }, { threshold: 0.12 });
    revealElements.forEach(el => revealObserver.observe(el));

    // 3D Perspective Tilt + Spotlight effect on Service Cards
    const tiltCards = document.querySelectorAll('.tilt-card');
    tiltCards.forEach(card => {
      card.addEventListener('mousemove', (e) => {
        const rect = card.getBoundingClientRect();
        const x = e.clientX - rect.left;
        const y = e.clientY - rect.top;
        const centerX = rect.width / 2;
        const centerY = rect.height / 2;

        const rotateX = ((y - centerY) / centerY) * -6;
        const rotateY = ((x - centerX) / centerX) * 6;

        card.style.transform = `perspective(1000px) rotateX(${rotateX}deg) rotateY(${rotateY}deg) translateY(-4px)`;
        card.style.setProperty('--mouse-x', `${x}px`);
        card.style.setProperty('--mouse-y', `${y}px`);
      });

      card.addEventListener('mouseleave', () => {
        card.style.transform = 'perspective(1000px) rotateX(0deg) rotateY(0deg) translateY(0px)';
      });
    });

    /* -----------------------------------------------------------
       2. HERO THREE.JS INTERACTIVE 3D SCENE
    ----------------------------------------------------------- */
    function initHero3DScene() {
      const container = document.getElementById('hero-canvas-container');
      const canvas = document.getElementById('hero-3d-canvas');
      const fallback = document.getElementById('webgl-fallback');
      if (!container || !canvas || typeof THREE === 'undefined') {
        if (fallback) fallback.classList.remove('hidden');
        return;
      }

      let renderer;
      try {
        renderer = new THREE.WebGLRenderer({
          canvas: canvas,
          antialias: true,
          alpha: true,
          powerPreference: 'high-performance'
        });
      } catch (err) {
        if (fallback) fallback.classList.remove('hidden');
        return;
      }

      const width = container.clientWidth || 500;
      const height = container.clientHeight || 500;
      renderer.setSize(width, height);
      renderer.setPixelRatio(Math.min(window.devicePixelRatio, 2));

      const scene = new THREE.Scene();
      const camera = new THREE.PerspectiveCamera(45, width / height, 0.1, 100);
      camera.position.set(0, 0, 7.2);

      // Main Group
      const coreGroup = new THREE.Group();
      scene.add(coreGroup);

      // Lighting (Electric Blue + YUKT Orange + White Rim)
      const ambientLight = new THREE.AmbientLight(0xffffff, 0.65);
      scene.add(ambientLight);

      const blueLight = new THREE.PointLight(0x0066ff, 3.2, 20);
      blueLight.position.set(4, 3, 4);
      scene.add(blueLight);

      const orangeLight = new THREE.PointLight(0xff6b00, 2.8, 20);
      orangeLight.position.set(-4, -3, 3);
      scene.add(orangeLight);

      const cyanLight = new THREE.DirectionalLight(0x38bdf8, 1.4);
      cyanLight.position.set(0, 5, -4);
      scene.add(cyanLight);

      // 1. Inner Futuristic Metallic/Glass Core (Icosahedron)
      const innerGeo = new THREE.IcosahedronGeometry(1.35, 1);
      const innerMat = new THREE.MeshStandardMaterial({
        color: 0x0b1938,
        roughness: 0.2,
        metalness: 0.85,
        flatShading: true
      });
      const innerCore = new THREE.Mesh(innerGeo, innerMat);
      coreGroup.add(innerCore);

      // 2. Glowing Wireframe Exoskeleton
      const wireGeo = new THREE.IcosahedronGeometry(1.62, 1);
      const wireMat = new THREE.MeshBasicMaterial({
        color: 0x38bdf8,
        wireframe: true,
        transparent: true,
        opacity: 0.42
      });
      const wireCage = new THREE.Mesh(wireGeo, wireMat);
      coreGroup.add(wireCage);

      // 3. Orbital Gyroscopic Rings (Electric Blue & Brand Orange)
      const ring1Geo = new THREE.TorusGeometry(2.25, 0.025, 16, 100);
      const ring1Mat = new THREE.MeshStandardMaterial({
        color: 0x0066ff,
        emissive: 0x0044aa,
        roughness: 0.2,
        metalness: 0.8
      });
      const ring1 = new THREE.Mesh(ring1Geo, ring1Mat);
      ring1.rotation.x = Math.PI / 3;
      coreGroup.add(ring1);

      const ring2Geo = new THREE.TorusGeometry(2.65, 0.02, 16, 100);
      const ring2Mat = new THREE.MeshStandardMaterial({
        color: 0xff6b00,
        emissive: 0x993d00,
        roughness: 0.3,
        metalness: 0.7
      });
      const ring2 = new THREE.Mesh(ring2Geo, ring2Mat);
      ring2.rotation.y = Math.PI / 4;
      ring2.rotation.x = -Math.PI / 5;
      coreGroup.add(ring2);

      // 4. Orbiting Satellite Nodes (Representing 6 Services)
      const satellitesGroup = new THREE.Group();
      coreGroup.add(satellitesGroup);
      const satellites = [];
      const satGeo = new THREE.OctahedronGeometry(0.16, 0);

      for (let i = 0; i < 6; i++) {
        const isOrange = i % 2 === 1;
        const satMat = new THREE.MeshStandardMaterial({
          color: isOrange ? 0xff6b00 : 0x38bdf8,
          emissive: isOrange ? 0xff6b00 : 0x0066ff,
          emissiveIntensity: 0.5,
          roughness: 0.2,
          metalness: 0.8
        });
        const mesh = new THREE.Mesh(satGeo, satMat);
        const angle = (i / 6) * Math.PI * 2;
        const radius = 2.45;
        mesh.position.set(
          Math.cos(angle) * radius,
          Math.sin(angle * 2) * 0.7,
          Math.sin(angle) * radius
        );
        satellitesGroup.add(mesh);
        satellites.push({ mesh, baseAngle: angle, baseRadius: radius });
      }

      // 5. Ambient Starfield / Particle Cloud
      const particleCount = window.innerWidth < 768 ? 90 : 180;
      const particleGeo = new THREE.BufferGeometry();
      const positions = new Float32Array(particleCount * 3);
      for (let i = 0; i < particleCount * 3; i++) {
        positions[i] = (Math.random() - 0.5) * 11;
      }
      particleGeo.setAttribute('position', new THREE.BufferAttribute(positions, 3));
      const particleMat = new THREE.PointsMaterial({
        color: 0x38bdf8,
        size: 0.045,
        transparent: true,
        opacity: 0.75
      });
      const particles = new THREE.Points(particleGeo, particleMat);
      scene.add(particles);

      // Mouse & Touch Parallax Interaction
      let targetX = 0;
      let targetY = 0;
      let isDragging = false;
      let prevX = 0;
      let prevY = 0;

      window.addEventListener('mousemove', (e) => {
        const normX = (e.clientX / window.innerWidth) - 0.5;
        const normY = (e.clientY / window.innerHeight) - 0.5;
        targetX = normX * 0.9;
        targetY = normY * 0.9;
      });

      container.addEventListener('mousedown', (e) => {
        isDragging = true;
        prevX = e.clientX;
        prevY = e.clientY;
      });
      window.addEventListener('mouseup', () => { isDragging = false; });
      window.addEventListener('mousemove', (e) => {
        if (!isDragging) return;
        const dx = e.clientX - prevX;
        const dy = e.clientY - prevY;
        coreGroup.rotation.y += dx * 0.008;
        coreGroup.rotation.x += dy * 0.008;
        prevX = e.clientX;
        prevY = e.clientY;
      });

      // Touch rotation support
      container.addEventListener('touchstart', (e) => {
        if (e.touches.length === 1) {
          isDragging = true;
          prevX = e.touches[0].clientX;
          prevY = e.touches[0].clientY;
        }
      }, { passive: true });
      window.addEventListener('touchend', () => { isDragging = false; });
      container.addEventListener('touchmove', (e) => {
        if (!isDragging || e.touches.length !== 1) return;
        const dx = e.touches[0].clientX - prevX;
        const dy = e.touches[0].clientY - prevY;
        coreGroup.rotation.y += dx * 0.008;
        coreGroup.rotation.x += dy * 0.008;
        prevX = e.touches[0].clientX;
        prevY = e.touches[0].clientY;
      }, { passive: true });

      // Mode Switcher Buttons (Orbit / Expand / Overdrive)
      let currentMode = 'orbit';
      let targetScale = 1;
      let speedMultiplier = 1;

      document.querySelectorAll('.hero-mode-btn').forEach(btn => {
        btn.addEventListener('click', () => {
          currentMode = btn.getAttribute('data-hero-mode');
          document.querySelectorAll('.hero-mode-btn').forEach(b => {
            b.className = 'hero-mode-btn px-2 sm:px-2.5 py-1 rounded-lg font-mono text-[10px] sm:text-[11px] text-slate-300 hover:text-white hover:bg-white/10 transition-all active:scale-95';
          });
          btn.className = 'hero-mode-btn px-2 sm:px-2.5 py-1 rounded-lg font-mono text-[10px] sm:text-[11px] bg-electric-500 text-white font-medium transition-all active:scale-95';

          if (currentMode === 'orbit') {
            targetScale = 1;
            speedMultiplier = 1;
          } else if (currentMode === 'exploded') {
            targetScale = 1.25;
            speedMultiplier = 0.65;
          } else if (currentMode === 'pulse') {
            targetScale = 1.08;
            speedMultiplier = 2.6;
          }
        });
      });

      // Adaptive Camera Distance & Responsive Resize
      function updateCamera() {
        const w = container.clientWidth || 500;
        const h = container.clientHeight || 500;
        camera.aspect = w / h;
        if (w < 400) {
          camera.position.z = 7.8;
        } else if (w < 640) {
          camera.position.z = 7.5;
        } else {
          camera.position.z = 7.2;
        }
        camera.updateProjectionMatrix();
        renderer.setSize(w, h);
      }
      updateCamera();

      window.addEventListener('resize', updateCamera, { passive: true });
      if (window.ResizeObserver) {
        new ResizeObserver(updateCamera).observe(container);
      }

      // Respect prefers-reduced-motion
      if (window.matchMedia && window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
        speedMultiplier = 0.15;
      }

      // Animation Loop
      let clock = new THREE.Clock();
      function animateHero() {
        requestAnimationFrame(animateHero);
        const elapsed = clock.getElapsedTime();

        // Smooth scale interpolation
        wireCage.scale.lerp(new THREE.Vector3(targetScale, targetScale, targetScale), 0.06);

        // Core & Cage Rotation
        innerCore.rotation.y += 0.004 * speedMultiplier;
        innerCore.rotation.x += 0.002 * speedMultiplier;
        wireCage.rotation.y -= 0.003 * speedMultiplier;

        // Gyro Rings
        ring1.rotation.z += 0.006 * speedMultiplier;
        ring2.rotation.y -= 0.005 * speedMultiplier;

        // Orbiting Satellites
        satellites.forEach((sat, idx) => {
          const angle = sat.baseAngle + elapsed * 0.45 * speedMultiplier;
          const r = currentMode === 'exploded' ? sat.baseRadius * 1.2 : sat.baseRadius;
          sat.mesh.position.x = Math.cos(angle) * r;
          sat.mesh.position.z = Math.sin(angle) * r;
          sat.mesh.position.y = Math.sin(angle * 2 + idx) * 0.65;
          sat.mesh.rotation.y += 0.03;
        });

        // Gentle mouse parallax
        coreGroup.rotation.y += (targetX - coreGroup.rotation.y) * 0.04;
        coreGroup.rotation.x += (targetY - coreGroup.rotation.x) * 0.04;

        particles.rotation.y = elapsed * 0.03;

        renderer.render(scene, camera);
      }

      animateHero();
    }

    /* -----------------------------------------------------------
       3. INTERACTIVE 3D PROCESS SECTION VISUALIZER
    ----------------------------------------------------------- */
    const processStageData = [
      {
        badge: 'STAGE 01 // DISCOVER',
        title: 'Understand the Business & Goals',
        desc: 'We deep-dive into your business model, target audience, and operational workflows to define a clear technical roadmap.',
        color: 0x0066ff,
        progress: '25%'
      },
      {
        badge: 'STAGE 02 // DESIGN',
        title: 'User Experience & Visual Direction',
        desc: 'We craft high-converting UI systems, interactive prototypes, and futuristic 3D brand visuals tailored to your customers.',
        color: 0xff6b00,
        progress: '50%'
      },
      {
        badge: 'STAGE 03 // DEVELOP',
        title: 'Build Reliable Digital Solutions',
        desc: 'Our engineers build fast, secure web platforms, custom software, and AI automation pipelines using modern architectures.',
        color: 0x10b981,
        progress: '75%'
      },
      {
        badge: 'STAGE 04 // LAUNCH & GROW',
        title: 'Deploy, Optimize, and Scale',
        desc: 'We launch with rigorous performance optimization, analytics telemetry, and ongoing technical & marketing growth support.',
        color: 0xa855f7,
        progress: '100%'
      }
    ];

    let updateProcess3DStage = null;

    function initProcess3DScene() {
      const wrapper = document.getElementById('process-canvas-wrapper');
      const canvas = document.getElementById('process-3d-canvas');
      if (!wrapper || !canvas || typeof THREE === 'undefined') return;

      let renderer;
      try {
        renderer = new THREE.WebGLRenderer({ canvas, antialias: true, alpha: true });
      } catch (e) {
        return;
      }

      const w = wrapper.clientWidth || 400;
      const h = wrapper.clientHeight || 300;
      renderer.setSize(w, h);
      renderer.setPixelRatio(Math.min(window.devicePixelRatio, 2));

      const scene = new THREE.Scene();
      const camera = new THREE.PerspectiveCamera(45, w / h, 0.1, 50);
      camera.position.set(0, 0, 4.8);

      const ambient = new THREE.AmbientLight(0xffffff, 0.7);
      scene.add(ambient);

      const pointLight = new THREE.PointLight(0x0066ff, 3, 15);
      pointLight.position.set(3, 3, 4);
      scene.add(pointLight);

      const accentLight = new THREE.PointLight(0xff6b00, 2, 15);
      accentLight.position.set(-3, -2, 3);
      scene.add(accentLight);

      const stageGeometries = [
        new THREE.OctahedronGeometry(1.25, 0),          // Stage 1: Discover
        new THREE.TorusKnotGeometry(0.8, 0.25, 80, 16), // Stage 2: Design
        new THREE.IcosahedronGeometry(1.25, 1),         // Stage 3: Develop
        new THREE.DodecahedronGeometry(1.3, 1)          // Stage 4: Launch & Grow
      ];

      const meshMat = new THREE.MeshStandardMaterial({
        color: 0x0066ff,
        roughness: 0.2,
        metalness: 0.8,
        wireframe: false,
        flatShading: true
      });
      const stageMesh = new THREE.Mesh(stageGeometries[0], meshMat);
      scene.add(stageMesh);

      const outerWireMat = new THREE.MeshBasicMaterial({
        color: 0x38bdf8,
        wireframe: true,
        transparent: true,
        opacity: 0.35
      });
      const outerWire = new THREE.Mesh(stageGeometries[0], outerWireMat);
      outerWire.scale.set(1.2, 1.2, 1.2);
      scene.add(outerWire);

      updateProcess3DStage = function(stageIdx) {
        const info = processStageData[stageIdx];
        if (!info) return;
        stageMesh.geometry = stageGeometries[stageIdx];
        outerWire.geometry = stageGeometries[stageIdx];
        meshMat.color.setHex(info.color);
        pointLight.color.setHex(info.color);
        stageMesh.scale.set(0.75, 0.75, 0.75);
      };

      window.addEventListener('resize', () => {
        const nw = wrapper.clientWidth || 400;
        const nh = wrapper.clientHeight || 300;
        camera.aspect = nw / nh;
        camera.updateProjectionMatrix();
        renderer.setSize(nw, nh);
      });

      function animateProcess() {
        requestAnimationFrame(animateProcess);
        stageMesh.rotation.y += 0.008;
        stageMesh.rotation.x += 0.005;
        outerWire.rotation.y -= 0.005;
        stageMesh.scale.lerp(new THREE.Vector3(1, 1, 1), 0.08);
        renderer.render(scene, camera);
      }
      animateProcess();
    }

    // Bind Process Stage UI Selection
    function selectProcessStage(index) {
      const data = processStageData[index];
      if (!data) return;

      document.getElementById('process-3d-badge').textContent = data.badge;
      document.getElementById('process-3d-title').textContent = data.title;
      document.getElementById('process-3d-desc').textContent = data.desc;
      document.getElementById('process-progress-bar').style.width = data.progress;

      // Update Cards
      document.querySelectorAll('.process-stage-card').forEach((card, idx) => {
        if (idx === index) {
          card.classList.add('border-electric-500/60', 'bg-electric-500/[0.08]');
        } else {
          card.classList.remove('border-electric-500/60', 'bg-electric-500/[0.08]');
        }
      });

      // Update Top Nodes
      document.querySelectorAll('.process-node-btn').forEach((btn, idx) => {
        const circle = btn.querySelector('span:first-child');
        const label = btn.querySelector('span:last-child');
        if (idx <= index) {
          circle.className = 'w-7 h-7 rounded-full bg-electric-500 border-4 border-navy-950 shadow-lg shadow-electric-500/50 flex items-center justify-center font-mono text-[11px] font-bold text-white transition-transform scale-125';
          label.className = 'mt-2 font-display text-xs sm:text-sm font-semibold text-white';
        } else {
          circle.className = 'w-7 h-7 rounded-full bg-navy-800 border-2 border-white/20 flex items-center justify-center font-mono text-[11px] font-bold text-slate-400 transition-transform';
          label.className = 'mt-2 font-display text-xs sm:text-sm font-semibold text-slate-400';
        }
      });

      if (updateProcess3DStage) updateProcess3DStage(index);
    }

    document.querySelectorAll('.process-stage-card').forEach(card => {
      card.addEventListener('click', () => {
        selectProcessStage(parseInt(card.getAttribute('data-stage-card'), 10));
      });
    });
    document.querySelectorAll('.process-node-btn').forEach(btn => {
      btn.addEventListener('click', () => {
        selectProcessStage(parseInt(btn.getAttribute('data-stage'), 10));
      });
    });

    /* -----------------------------------------------------------
       4. PORTFOLIO FILTERING & INTERACTIVE MODAL
    ----------------------------------------------------------- */
    const filterBtns = document.querySelectorAll('.portfolio-filter-btn');
    const portfolioItems = document.querySelectorAll('.portfolio-item');

    filterBtns.forEach(btn => {
      btn.addEventListener('click', () => {
        const filter = btn.getAttribute('data-filter');

        filterBtns.forEach(b => {
          b.className = 'portfolio-filter-btn px-4 py-2 rounded-xl text-xs font-semibold bg-slate-100 text-slate-700 hover:bg-slate-200 transition-all';
        });
        btn.className = 'portfolio-filter-btn px-4 py-2 rounded-xl text-xs font-semibold bg-slate-900 text-white shadow-md transition-all';

        portfolioItems.forEach(item => {
          if (filter === 'all' || item.getAttribute('data-category') === filter) {
            item.classList.remove('hidden');
            item.classList.add('flex');
          } else {
            item.classList.add('hidden');
            item.classList.remove('flex');
          }
        });
      });
    });

    // Concept Modal Data
    const conceptModalData = [
      {
        category: 'CONCEPT ARCHITECTURE // BUSINESS WEBSITE',
        title: 'Next-Gen Corporate Web Portal',
        desc: 'Designed for high-growth enterprises seeking an unforgettable digital presence. Combines interactive 3D WebGL storytelling, ultra-fast page transitions, and direct WhatsApp & CRM lead capture.',
        highlights: ['✓ Interactive 3D Hero Visuals', '✓ Mobile-First Responsive Grid', '✓ Technical SEO & Schema Ready', '✓ Direct WhatsApp Lead Funnels'],
        waText: 'Hi YUKT IT SOLUTIONS, I want to discuss building a Business Website like your Corporate Web Portal concept.'
      },
      {
        category: 'CONCEPT ARCHITECTURE // E-COMMERCE PLATFORM',
        title: 'Headless E-Commerce Storefront',
        desc: 'Engineered for high conversion rates and effortless product discovery. Features instant category filtering, streamlined checkout flows, and automated WhatsApp order notifications.',
        highlights: ['✓ Sub-Second Product Filtering', '✓ Multi-Currency & Payment Ready', '✓ Automated Inventory Sync', '✓ WhatsApp Cart Recovery'],
        waText: 'Hi YUKT IT SOLUTIONS, I want to discuss building an E-Commerce Platform.'
      },
      {
        category: 'CONCEPT ARCHITECTURE // SAAS DASHBOARD',
        title: 'Enterprise BI & SaaS Control Center',
        desc: 'A modular software interface concept for SaaS products and internal business operations, featuring real-time telemetry charts, role-based access control, and automated reporting.',
        highlights: ['✓ Real-Time Data Visualization', '✓ Role-Based Access Permissions', '✓ Dark & Light Theme Architecture', '✓ Custom API & Webhook Integrations'],
        waText: 'Hi YUKT IT SOLUTIONS, I want to discuss building a custom SaaS Dashboard or Software Platform.'
      },
      {
        category: 'CONCEPT ARCHITECTURE // AI AUTOMATION',
        title: 'Autonomous AI Support & Lead Engine',
        desc: 'An end-to-end AI workflow system that qualifies incoming inquiries 24/7, answers complex product questions using your company knowledge base, and routes hot leads to your team.',
        highlights: ['✓ Custom LLM Knowledge Retrieval', '✓ WhatsApp & Web Chat Integration', '✓ Automated CRM Pipeline Sync', '✓ 24/7 Instant Lead Qualification'],
        waText: 'Hi YUKT IT SOLUTIONS, I want to discuss implementing an AI Automation System.'
      },
      {
        category: 'CONCEPT ARCHITECTURE // MOBILE APPLICATION',
        title: 'On-Demand Service & Booking App',
        desc: 'Cross-platform mobile application concept for iOS and Android featuring smooth native animations, live order status tracking, push notifications, and secure payments.',
        highlights: ['✓ iOS & Android Native Experience', '✓ Real-Time Status & GPS Tracking', '✓ Push Notifications & Alerts', '✓ Secure Cloud Backend API'],
        waText: 'Hi YUKT IT SOLUTIONS, I want to discuss building a Mobile Application.'
      },
      {
        category: 'CONCEPT ARCHITECTURE // DIGITAL MARKETING',
        title: 'Full-Funnel Growth & Creative Campaign',
        desc: 'Combines high-converting landing pages, SEO authority building, paid ad campaigns, and AI-assisted video creatives to generate consistent, qualified business inquiries.',
        highlights: ['✓ Search & Social Ad Funnels', '✓ AI-Assisted Video & Ad Creatives', '✓ Conversion Rate Optimization', '✓ Direct WhatsApp Lead Attribution'],
        waText: 'Hi YUKT IT SOLUTIONS, I want to discuss a Digital Marketing & AI Creative Campaign.'
      }
    ];

    const portfolioModal = document.getElementById('portfolio-modal');
    const closeModalBtn = document.getElementById('close-modal-btn');

    document.querySelectorAll('.preview-modal-btn').forEach(btn => {
      btn.addEventListener('click', () => {
        const idx = parseInt(btn.getAttribute('data-preview-idx'), 10);
        const item = conceptModalData[idx];
        if (!item) return;

        document.getElementById('modal-category').textContent = item.category;
        document.getElementById('modal-title').textContent = item.title;
        document.getElementById('modal-desc').textContent = item.desc;

        const listEl = document.getElementById('modal-highlights');
        listEl.innerHTML = item.highlights.map(h => `<li class="text-slate-300">${h}</li>`).join('');

        document.getElementById('modal-wa-link').href = `https://wa.me/919576338282?text=${encodeURIComponent(item.waText)}`;

        portfolioModal.classList.remove('hidden');
        portfolioModal.classList.add('flex');
      });
    });

    if (closeModalBtn) {
      closeModalBtn.addEventListener('click', () => {
        portfolioModal.classList.add('hidden');
        portfolioModal.classList.remove('flex');
      });
    }
    if (portfolioModal) {
      portfolioModal.addEventListener('click', (e) => {
        if (e.target === portfolioModal) {
          portfolioModal.classList.add('hidden');
          portfolioModal.classList.remove('flex');
        }
      });
    }

    /* -----------------------------------------------------------
       5. INTERACTIVE WHATSAPP PROJECT CONFIGURATOR
    ----------------------------------------------------------- */
    const selectedServices = new Set();
    const servicePills = document.querySelectorAll('.wa-pill');

    servicePills.forEach(pill => {
      pill.addEventListener('click', () => {
        const serviceName = pill.getAttribute('data-service-pill');
        if (selectedServices.has(serviceName)) {
          selectedServices.delete(serviceName);
          pill.className = 'wa-pill px-3.5 py-2 rounded-xl text-xs font-medium bg-white/[0.06] hover:bg-white/10 border border-white/10 text-slate-200 transition-all';
        } else {
          selectedServices.add(serviceName);
          pill.className = 'wa-pill px-3.5 py-2 rounded-xl text-xs font-medium bg-electric-500 text-white border border-electric-400 shadow-md shadow-electric-500/25 transition-all';
        }
      });
    });

    const customSendBtn = document.getElementById('wa-custom-send-btn');
    const customNoteInput = document.getElementById('wa-custom-note');

    if (customSendBtn) {
      customSendBtn.addEventListener('click', () => {
        const servicesList = Array.from(selectedServices);
        const note = customNoteInput ? customNoteInput.value.trim() : '';

        let message = 'Hi YUKT IT SOLUTIONS, I want to discuss a project.';
        if (servicesList.length > 0) {
          message += ` Services needed: ${servicesList.join(', ')}.`;
        }
        if (note) {
          message += ` Project details: ${note}`;
        }

        const waUrl = `https://wa.me/919576338282?text=${encodeURIComponent(message)}`;
        window.open(waUrl, '_blank', 'noopener,noreferrer');
      });
    }

    /* -----------------------------------------------------------
       6. START 3D SCENES ON LOAD
    ----------------------------------------------------------- */
    window.addEventListener('load', function () {
      initHero3DScene();
      initProcess3DScene();
    });
  </script>

<?php
require_once __DIR__ . '/includes/footer.php';
?>
