<?php
$activePage = 'about';
$pageTitle = 'About Us — YUKT IT SOLUTIONS | Engineering Clarity for Ambitious Enterprises';
$pageDesc = 'Learn about YUKT IT SOLUTIONS: our Sanskrit engineering roots, mission, working principles, cohesive technology mesh, and verified engineering pod architecture.';

require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/components/section-header.php';
?>

<!-- ==========================================================================
     ABOUT HERO SECTION (FUTURISTIC 3D BRAND THEME + ADVERT WAVE SHADER)
========================================================================= -->
<section class="advert-wave-hero relative pt-14 pb-16 sm:pt-20 sm:pb-24 lg:pt-24 lg:pb-28 bg-navy-950 bg-grid-dark text-white overflow-hidden border-b border-white/10">
  <div class="absolute top-1/4 left-1/4 w-[500px] h-[500px] bg-electric-500/15 rounded-full blur-[130px] pointer-events-none"></div>
  <div class="absolute bottom-10 right-10 w-[400px] h-[400px] bg-yukt-orange/15 rounded-full blur-[130px] pointer-events-none"></div>

  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-10 relative z-10">
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-14 items-center">
      
      <!-- Left Column: High-Impact Copy & Actions (7 Cols) -->
      <div class="lg:col-span-7 space-y-6 reveal-up">
        <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-white/[0.05] border border-white/10 text-electric-400 font-mono text-xs uppercase tracking-widest">
          <span class="w-2 h-2 rounded-full bg-yukt-orange animate-ping"></span>
          <span>Corporate Identity &amp; Engineering Ethos</span>
        </div>
        
        <h1 class="font-display font-bold text-4xl sm:text-5xl lg:text-6xl text-white tracking-tight leading-[1.08]">
          Engineering Clarity for Ambitious <span class="text-gradient-electric">Enterprises.</span>
        </h1>
        
        <p class="text-base sm:text-lg text-slate-300 leading-relaxed font-normal max-w-2xl">
          Founded on transparent agile execution, <strong class="text-white font-semibold">YUKT IT SOLUTIONS Private Limited</strong> is an Indian digital engineering studio bridging the gap between clean enterprise software, autonomous AI systems, and high-growth digital marketing.
        </p>

        <!-- CTA Action Buttons -->
        <div class="flex flex-col sm:flex-row items-stretch sm:items-center gap-4 pt-1">
          <a href="#principles" class="px-7 py-3.5 rounded-xl font-display font-semibold text-sm text-white bg-gradient-to-r from-electric-600 to-blue-700 hover:from-electric-500 hover:to-blue-600 shadow-xl shadow-electric-600/30 transition-all flex items-center justify-center gap-2">
            <span>Explore Working Principles</span>
            <i data-lucide="arrow-down" class="w-4 h-4"></i>
          </a>
          <a href="<?php echo getWhatsAppUrl('Hi Ranjeet and Ansar, I would like to learn more about partnering with Yukt.'); ?>" target="_blank" rel="noopener noreferrer" class="px-7 py-3.5 rounded-xl font-display font-semibold text-sm text-white bg-gradient-to-r from-yukt-orange to-amber-600 hover:from-yukt-orangeLight hover:to-yukt-orange shadow-xl shadow-yukt-orange/25 transition-all flex items-center justify-center gap-2">
            <i data-lucide="message-circle" class="w-4 h-4"></i>
            <span>Talk to the Founders</span>
          </a>
        </div>

        <div class="pt-4 flex flex-wrap items-center gap-y-2 gap-x-6 text-xs text-slate-400 border-t border-white/10 font-mono">
          <span class="flex items-center gap-2">
            <span class="w-2 h-2 rounded-full bg-emerald-400"></span>
            NCR &amp; Bengaluru Hubs
          </span>
          <span class="flex items-center gap-2">
            <span class="w-2 h-2 rounded-full bg-electric-400"></span>
            Direct Senior Pods
          </span>
          <span class="flex items-center gap-2">
            <span class="w-2 h-2 rounded-full bg-yukt-orange"></span>
            100% Client Code Ownership
          </span>
        </div>
      </div>

      <!-- Right Column: 3D Perspective Floating UI Stage (5 Cols) -->
      <div class="lg:col-span-5 relative h-[380px] sm:h-[420px] w-full flex items-center justify-center reveal-up">
        
        <!-- Central Glowing Sanskrit Node -->
        <div class="relative w-44 h-44 rounded-full bg-gradient-to-tr from-yukt-orange/40 via-navy-900 to-electric-500/40 p-[2px] shadow-2xl shadow-yukt-orange/20 flex items-center justify-center animate-pulse">
          <div class="w-full h-full rounded-full bg-navy-950/90 backdrop-blur-md flex flex-col items-center justify-center text-center p-4">
            <span class="font-serif font-bold text-3xl text-white">युक्त</span>
            <span class="font-display font-semibold text-xs text-yukt-orange mt-1">YUKT IT</span>
            <span class="font-mono text-[9px] text-slate-400">Connected &bull; Unified</span>
          </div>
        </div>

        <!-- Floating Glass Card 1: Sanskrit Meaning (Top Left) -->
        <div class="absolute top-2 left-0 sm:-left-4 glass-pill rounded-2xl p-3.5 w-52 sm:w-56 animate-float-slow select-none border border-white/20 shadow-xl">
          <div class="flex items-center gap-2 mb-1">
            <span class="w-2 h-2 rounded-full bg-yukt-orange"></span>
            <span class="font-mono text-[10px] text-yukt-orange uppercase tracking-wider">Philosophical Root</span>
          </div>
          <div class="text-xs font-semibold text-white">Precision &amp; Synergy</div>
          <p class="text-[10px] text-slate-400 mt-0.5">Equipped with strategic technical mastery</p>
        </div>

        <!-- Floating Glass Card 2: Founders & Architects (Top Right) -->
        <div class="absolute top-20 right-0 sm:-right-4 glass-pill rounded-2xl p-3.5 w-48 sm:w-52 animate-float-delayed select-none border border-electric-400/30 shadow-xl">
          <div class="flex items-center gap-2 mb-1">
            <span class="w-2 h-2 rounded-full bg-electric-400"></span>
            <span class="font-mono text-[10px] text-electric-400 uppercase tracking-wider">Leadership Pod</span>
          </div>
          <div class="text-xs font-semibold text-white">Ranjeet &amp; Ansar</div>
          <p class="text-[10px] text-slate-400 mt-0.5">Zero account management fluff</p>
        </div>

        <!-- Floating Glass Card 3: 2-Week Agile Delivery (Bottom Left) -->
        <div class="absolute bottom-4 left-4 sm:left-2 glass-pill rounded-2xl p-3 w-48 sm:w-52 animate-float-slow select-none border border-emerald-400/30 shadow-xl">
          <div class="flex items-center gap-2">
            <i data-lucide="check-circle" class="w-4 h-4 text-emerald-400"></i>
            <div>
              <span class="font-mono text-[9px] text-slate-400 block">Sprint Execution</span>
              <span class="text-xs font-bold text-white">Continuous Git Staging</span>
            </div>
          </div>
        </div>

      </div>

    </div>
  </div>
</section>

<!-- ==========================================================================
     COMPANY INTRODUCTION & THE MEANING OF "YUKT"
========================================================================== -->
<section class="py-20 lg:py-28 bg-slate-50 text-slate-900 bg-grid-light border-b border-slate-200">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-10">
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-14 items-center">
      
      <!-- Left Column: Sanskrit Roots & Story (6 Cols) -->
      <div class="lg:col-span-6 space-y-5 reveal-up">
        <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-electric-500/10 border border-electric-500/20 text-electric-600 font-mono text-xs uppercase tracking-widest">
          <span>Our Heritage &amp; Ethos</span>
        </div>
        <h2 class="font-display font-bold text-3xl sm:text-4xl text-slate-900 tracking-tight leading-tight">
          What does <span class="text-gradient-brand">“YUKT”</span> mean?
        </h2>
        
        <p class="text-base text-slate-700 leading-relaxed font-normal">
          Our name is derived from the classical Sanskrit word <strong class="text-slate-900 font-semibold font-serif text-lg">युक्त (Yukt)</strong> — meaning <em class="text-slate-900 font-medium">connected, equipped, skilled, and engineered with precision</em>.
        </p>

        <p class="text-sm sm:text-base text-slate-600 leading-relaxed font-normal">
          In an industry often marred by bloated agencies, unvetted outsourcing chains, and fragile template shortcuts, Yukt was established to operate differently: as a focused, disciplined engineering pod where senior architects work directly with founders and technical leaders.
        </p>

        <p class="text-sm sm:text-base text-slate-600 leading-relaxed font-normal">
          We believe that code quality and business velocity are not mutually exclusive. By pairing rigorous software architecture with modern agile release cadences, we deliver software that stands the test of transaction scale and time.
        </p>
      </div>

      <!-- Right Column: Visual Philosophy Card (6 Cols) -->
      <div class="lg:col-span-6 reveal-up">
        <div class="bg-white border border-slate-200/90 rounded-3xl p-7 sm:p-8 shadow-xl space-y-6">
          <div class="flex items-center justify-between pb-4 border-b border-slate-100">
            <span class="text-xs font-mono font-bold text-slate-900 uppercase tracking-wider">YUKT IT SOLUTIONS ETHOS</span>
            <span class="text-xs font-mono text-electric-600 font-semibold">EST. 2021</span>
          </div>

          <!-- Vision Box -->
          <div class="space-y-2">
            <div class="text-xs font-mono font-bold uppercase tracking-wider text-slate-400 flex items-center gap-2">
              <span class="w-2 h-2 rounded bg-electric-600"></span>
              <span>Our Vision</span>
            </div>
            <h3 class="font-display font-bold text-lg sm:text-xl text-slate-900">To be the most dependable digital engineering partner for modern businesses.</h3>
            <p class="text-xs sm:text-sm text-slate-600 leading-relaxed font-normal">
              Empowering organizations in India and across the globe to compete, scale, and innovate through resilient software architecture, transparent operations, and zero vendor lock-in.
            </p>
          </div>

          <!-- Mission Box -->
          <div class="space-y-2 pt-4 border-t border-slate-100">
            <div class="text-xs font-mono font-bold uppercase tracking-wider text-slate-400 flex items-center gap-2">
              <span class="w-2 h-2 rounded bg-yukt-orange"></span>
              <span>Our Mission</span>
            </div>
            <h3 class="font-display font-bold text-lg sm:text-xl text-slate-900">Delivering high-speed platforms with 100% intellectual property ownership.</h3>
            <p class="text-xs sm:text-sm text-slate-600 leading-relaxed font-normal">
              To design, engineer, and deploy secure web applications, custom enterprise systems, and autonomous AI agents while transferring full source code ownership and technical autonomy to our clients.
            </p>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- ==========================================================================
     WORKING PRINCIPLES & APPROACH TO TECHNOLOGY
========================================================================== -->
<section class="py-20 lg:py-28 bg-navy-950 text-white bg-grid-dark border-b border-white/10">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-10">
    
    <div class="max-w-3xl mx-auto text-center space-y-4 mb-14 reveal-up">
      <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-white/[0.05] border border-white/10 text-electric-400 font-mono text-xs uppercase tracking-widest">
        <i data-lucide="shield-check" class="w-3.5 h-3.5 text-yukt-orange"></i>
        <span>Our Guiding Principles</span>
      </div>
      <h2 class="font-display font-bold text-3xl sm:text-4xl lg:text-5xl tracking-tight text-white">
        How We Approach <span class="text-gradient-electric">Technology &amp; Delivery</span>
      </h2>
      <p class="text-slate-400 text-base sm:text-lg">
        Disciplined engineering practices that prioritize long-term system stability, maintainability, and measurable commercial outcomes.
      </p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-5">
      
      <!-- Principle 1 -->
      <div class="glass-dark rounded-2xl p-6 border border-white/10 hover:border-electric-400/50 transition-all group reveal-up">
        <div class="w-11 h-11 rounded-xl bg-electric-500/15 border border-electric-400/30 flex items-center justify-center text-electric-400 mb-4 group-hover:scale-110 transition-transform">
          <i data-lucide="cpu" class="w-5 h-5"></i>
        </div>
        <div class="text-xs font-mono text-slate-400 mb-1">01 / ARCHITECTURE</div>
        <h3 class="font-display font-bold text-lg text-white mb-2">Senior Architecture First</h3>
        <p class="text-xs sm:text-sm text-slate-400 leading-relaxed">
          Every project is scoped, structured, and reviewed by senior engineers. We never hand off mission-critical logic to unvetted third parties.
        </p>
      </div>

      <!-- Principle 2 -->
      <div class="glass-dark rounded-2xl p-6 border border-white/10 hover:border-yukt-orange/50 transition-all group reveal-up">
        <div class="w-11 h-11 rounded-xl bg-yukt-orange/15 border border-yukt-orange/30 flex items-center justify-center text-yukt-orange mb-4 group-hover:scale-110 transition-transform">
          <i data-lucide="trending-up" class="w-5 h-5"></i>
        </div>
        <div class="text-xs font-mono text-slate-400 mb-1">02 / VISIBILITY</div>
        <h3 class="font-display font-bold text-lg text-white mb-2">Agile Bi-Weekly Cadence</h3>
        <p class="text-xs sm:text-sm text-slate-400 leading-relaxed">
          Two-week sprint cadences with live staging environment access, regular video reviews, and continuous Git commit transparency.
        </p>
      </div>

      <!-- Principle 3 -->
      <div class="glass-dark rounded-2xl p-6 border border-white/10 hover:border-electric-400/50 transition-all group reveal-up">
        <div class="w-11 h-11 rounded-xl bg-electric-500/15 border border-electric-400/30 flex items-center justify-center text-electric-400 mb-4 group-hover:scale-110 transition-transform">
          <i data-lucide="code" class="w-5 h-5"></i>
        </div>
        <div class="text-xs font-mono text-slate-400 mb-1">03 / SUSTAINABILITY</div>
        <h3 class="font-display font-bold text-lg text-white mb-2">Clean Code Standards</h3>
        <p class="text-xs sm:text-sm text-slate-400 leading-relaxed">
          We write modular, human-readable code following strict linting, automated testing, and comprehensive documentation to eliminate technical debt.
        </p>
      </div>

      <!-- Principle 4 -->
      <div class="glass-dark rounded-2xl p-6 border border-white/10 hover:border-emerald-400/50 transition-all group reveal-up">
        <div class="w-11 h-11 rounded-xl bg-emerald-500/15 border border-emerald-400/30 flex items-center justify-center text-emerald-400 mb-4 group-hover:scale-110 transition-transform">
          <i data-lucide="shield-check" class="w-5 h-5"></i>
        </div>
        <div class="text-xs font-mono text-slate-400 mb-1">04 / AUTONOMY</div>
        <h3 class="font-display font-bold text-lg text-white mb-2">100% Client IP Ownership</h3>
        <p class="text-xs sm:text-sm text-slate-400 leading-relaxed">
          You own everything we build. All Git repos, database schemas, Figma files, and server configurations are transferred upon milestone delivery.
        </p>
      </div>

    </div>
  </div>
</section>

<!-- ==========================================================================
     THE COHESIVE TECH MESH
========================================================================== -->
<section class="py-20 lg:py-28 bg-white text-slate-900 bg-grid-light border-b border-slate-200">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-10">
    
    <div class="max-w-3xl mx-auto text-center space-y-4 mb-14 reveal-up">
      <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-electric-500/10 border border-electric-500/20 text-electric-600 font-mono text-xs uppercase tracking-widest">
        <span>Integrated Technology Mesh</span>
      </div>
      <h2 class="font-display font-bold text-3xl sm:text-4xl lg:text-5xl tracking-tight text-slate-900">
        Why Web, Software, AI &amp; Marketing <span class="text-gradient-brand">Work Together</span>
      </h2>
      <p class="text-slate-600 text-base sm:text-lg">
        Modern digital excellence fails when disciplines operate in silos. At Yukt, our capabilities form a unified, synchronized flywheel.
      </p>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
      
      <!-- Pillar 1: Web Development -->
      <div class="p-6 rounded-3xl bg-slate-50 border border-slate-200 hover:border-electric-500 hover:shadow-xl transition-all group reveal-up">
        <div class="w-11 h-11 rounded-xl bg-electric-500/10 text-electric-600 flex items-center justify-center mb-4 group-hover:scale-110 transition-transform">
          <i data-lucide="globe" class="w-5 h-5"></i>
        </div>
        <div class="text-xs font-mono uppercase tracking-wider text-electric-600 mb-1">Layer 1: Interface</div>
        <h3 class="font-display font-bold text-lg text-slate-900 mb-2">Web Platforms</h3>
        <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
          The high-speed, sub-second visual interface. Captures user interest, renders cleanly on all devices, and minimizes bounce rates.
        </p>
        <div class="mt-4 pt-3 border-t border-slate-200 text-[11px] font-mono text-slate-500">
          Role: Conversion &amp; Presentation
        </div>
      </div>

      <!-- Pillar 2: Custom Software -->
      <div class="p-6 rounded-3xl bg-slate-50 border border-slate-200 hover:border-electric-500 hover:shadow-xl transition-all group reveal-up">
        <div class="w-11 h-11 rounded-xl bg-navy-800 text-white flex items-center justify-center mb-4 group-hover:scale-110 transition-transform">
          <i data-lucide="cpu" class="w-5 h-5"></i>
        </div>
        <div class="text-xs font-mono uppercase tracking-wider text-slate-800 mb-1">Layer 2: Engine</div>
        <h3 class="font-display font-bold text-lg text-slate-900 mb-2">Custom Software</h3>
        <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
          The backend engine enforcing business rules, multi-tenant database integrity, role-based security, and microservice APIs.
        </p>
        <div class="mt-4 pt-3 border-t border-slate-200 text-[11px] font-mono text-slate-500">
          Role: Core Operations &amp; Logic
        </div>
      </div>

      <!-- Pillar 3: AI & Automation -->
      <div class="p-6 rounded-3xl bg-slate-50 border border-slate-200 hover:border-yukt-orange hover:shadow-xl transition-all group reveal-up">
        <div class="w-11 h-11 rounded-xl bg-yukt-orange/15 text-yukt-orange flex items-center justify-center mb-4 group-hover:scale-110 transition-transform">
          <i data-lucide="bot" class="w-5 h-5"></i>
        </div>
        <div class="text-xs font-mono uppercase tracking-wider text-yukt-orange mb-1">Layer 3: Velocity</div>
        <h3 class="font-display font-bold text-lg text-slate-900 mb-2">AI &amp; Automation</h3>
        <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
          Injects intelligence into the stack. Automates document processing, handles customer queries 24/7, and scores leads algorithmically.
        </p>
        <div class="mt-4 pt-3 border-t border-slate-200 text-[11px] font-mono text-slate-500">
          Role: Efficiency &amp; Intelligence
        </div>
      </div>

      <!-- Pillar 4: Digital Growth -->
      <div class="p-6 rounded-3xl bg-slate-50 border border-slate-200 hover:border-emerald-500 hover:shadow-xl transition-all group reveal-up">
        <div class="w-11 h-11 rounded-xl bg-emerald-500/15 text-emerald-600 flex items-center justify-center mb-4 group-hover:scale-110 transition-transform">
          <i data-lucide="trending-up" class="w-5 h-5"></i>
        </div>
        <div class="text-xs font-mono uppercase tracking-wider text-emerald-600 mb-1">Layer 4: Expansion</div>
        <h3 class="font-display font-bold text-lg text-slate-900 mb-2">Digital Marketing</h3>
        <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
          Drives targeted audience acquisition, captures high-intent demand, and feeds real-time attribution data back into product optimization.
        </p>
        <div class="mt-4 pt-3 border-t border-slate-200 text-[11px] font-mono text-slate-500">
          Role: Demand &amp; Feedback Loop
        </div>
      </div>

    </div>

    <!-- Flywheel Narrative Card -->
    <div class="mt-10 p-6 sm:p-8 bg-slate-900 text-white rounded-3xl border border-slate-800 flex flex-col sm:flex-row items-center justify-between gap-6 reveal-up">
      <div class="space-y-1">
        <div class="text-xs font-mono uppercase tracking-wider text-electric-400">The Studio Advantage</div>
        <h4 class="font-display font-bold text-lg sm:text-xl text-white">Zero Hand-Off Friction Between Engineering &amp; Marketing</h4>
        <p class="text-xs sm:text-sm text-slate-300">When your software developers, UI designers, AI specialists, and performance marketers collaborate under one roof, features launch faster and marketing campaigns track with 100% data fidelity.</p>
      </div>
      <a href="services.php" class="px-5 py-3 rounded-xl font-display font-semibold text-xs sm:text-sm text-white bg-electric-500 hover:bg-electric-400 transition-all flex items-center gap-2 flex-shrink-0 shadow-lg shadow-electric-500/25">
        <span>Explore All 8 Disciplines</span>
        <i data-lucide="arrow-right" class="w-4 h-4"></i>
      </a>
    </div>

  </div>
</section>

<!-- ==========================================================================
     VERIFIED ORGANIZATIONAL STRUCTURE & ENGINEERING PODS
========================================================================== -->
<section class="py-20 lg:py-28 bg-slate-50 text-slate-900 bg-grid-light border-b border-slate-200">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-10">
    
    <div class="max-w-3xl mx-auto text-center space-y-4 mb-14 reveal-up">
      <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-electric-500/10 border border-electric-500/20 text-electric-600 font-mono text-xs uppercase tracking-widest">
        <span>Our Organization</span>
      </div>
      <h2 class="font-display font-bold text-3xl sm:text-4xl lg:text-5xl tracking-tight text-slate-900">
        The Agile Pod <span class="text-gradient-brand">Delivery Architecture</span>
      </h2>
      <p class="text-slate-600 text-base sm:text-lg">
        Verified organizational model: client engagements are led by dedicated, senior cross-functional pods located across our Indian development hubs.
      </p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
      
      <div class="bg-white border border-slate-200/90 rounded-2xl p-6 shadow-md hover:shadow-xl transition-all reveal-up">
        <div class="w-10 h-10 rounded-xl bg-electric-50 text-electric-600 flex items-center justify-center mb-4">
          <i data-lucide="cpu" class="w-5 h-5"></i>
        </div>
        <h3 class="font-display font-bold text-base text-slate-900">Lead Solutions Architecture</h3>
        <p class="text-xs text-slate-600 mt-2 leading-relaxed">
          Oversees system design, microservice topology, database schemas, cloud infrastructure, and technical security compliance.
        </p>
        <div class="mt-4 pt-3 border-t border-slate-100 text-[11px] font-mono text-slate-400">
          Focus: High-concurrency &amp; Stability
        </div>
      </div>

      <div class="bg-white border border-slate-200/90 rounded-2xl p-6 shadow-md hover:shadow-xl transition-all reveal-up">
        <div class="w-10 h-10 rounded-xl bg-navy-800 text-white flex items-center justify-center mb-4">
          <i data-lucide="code" class="w-5 h-5"></i>
        </div>
        <h3 class="font-display font-bold text-base text-slate-900">Full-Stack &amp; Cloud Pod</h3>
        <p class="text-xs text-slate-600 mt-2 leading-relaxed">
          Specialized in React, Next.js, Laravel, PHP, Python, PostgreSQL, and Docker containerized cloud deployments.
        </p>
        <div class="mt-4 pt-3 border-t border-slate-100 text-[11px] font-mono text-slate-400">
          Focus: Clean Code &amp; CI/CD Pipelines
        </div>
      </div>

      <div class="bg-white border border-slate-200/90 rounded-2xl p-6 shadow-md hover:shadow-xl transition-all reveal-up">
        <div class="w-10 h-10 rounded-xl bg-yukt-orange/15 text-yukt-orange flex items-center justify-center mb-4">
          <i data-lucide="sparkles" class="w-5 h-5"></i>
        </div>
        <h3 class="font-display font-bold text-base text-slate-900">AI &amp; Automation Pod</h3>
        <p class="text-xs text-slate-600 mt-2 leading-relaxed">
          Engineers vector embeddings, LangChain RAG pipelines, WhatsApp API bots, and intelligent optical document processing models.
        </p>
        <div class="mt-4 pt-3 border-t border-slate-100 text-[11px] font-mono text-slate-400">
          Focus: Zero-Hallucination AI Workflows
        </div>
      </div>

      <div class="bg-white border border-slate-200/90 rounded-2xl p-6 shadow-md hover:shadow-xl transition-all reveal-up">
        <div class="w-10 h-10 rounded-xl bg-electric-50 text-electric-600 flex items-center justify-center mb-4">
          <i data-lucide="palette" class="w-5 h-5"></i>
        </div>
        <h3 class="font-display font-bold text-base text-slate-900">UI/UX &amp; Growth Pod</h3>
        <p class="text-xs text-slate-600 mt-2 leading-relaxed">
          Figma component systems, user experience testing, conversion rate optimization (CRO), and server-side tracking analytics.
        </p>
        <div class="mt-4 pt-3 border-t border-slate-100 text-[11px] font-mono text-slate-400">
          Focus: Intuitive Interfaces &amp; Attribution
        </div>
      </div>

    </div>

    <!-- Verified Locations Strip -->
    <div class="mt-10 p-6 bg-white border border-slate-200 rounded-2xl flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4 shadow-sm reveal-up">
      <div class="flex items-center gap-3">
        <div class="w-10 h-10 rounded-xl bg-electric-500/10 text-electric-600 flex items-center justify-center flex-shrink-0">
          <i data-lucide="map-pin" class="w-5 h-5"></i>
        </div>
        <div>
          <div class="text-xs font-mono uppercase tracking-wider text-slate-400">Development Hubs</div>
          <div class="text-sm font-bold text-slate-900"><?php echo OFFICE_PRIMARY; ?> &bull; <?php echo OFFICE_SECONDARY; ?></div>
        </div>
      </div>
      <div class="text-xs font-mono text-slate-500">
        Operating Pan-India &bull; Delivering Globally
      </div>
    </div>

    <!-- Verified Leadership & Core Technical Architects -->
    <div class="mt-16 reveal-up">
      <div class="max-w-3xl mx-auto text-center space-y-3 mb-10">
        <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-electric-500/10 border border-electric-500/20 text-electric-600 font-mono text-xs uppercase tracking-widest">
          <i data-lucide="shield-check" class="w-3.5 h-3.5"></i>
          <span>Verified Leadership</span>
        </div>
        <h3 class="font-display font-bold text-2xl sm:text-3xl lg:text-4xl text-slate-900">
          Meet the <span class="text-gradient-brand">Technical Architects</span> Behind Yukt
        </h3>
        <p class="text-sm text-slate-600 max-w-2xl mx-auto">
          Direct senior engineering access without junior hand-offs or middlemen. Connect directly with the architects who design and deploy your solutions.
        </p>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-4xl mx-auto">
        <!-- Ranjeet Card -->
        <div class="bg-navy-950 border border-white/10 rounded-2xl p-6 sm:p-8 text-white relative overflow-hidden shadow-xl group hover:border-electric-500/50 transition-all">
          <div class="absolute -top-16 -right-16 w-40 h-40 bg-electric-500/15 rounded-full blur-3xl pointer-events-none"></div>
          
          <div class="flex items-start justify-between gap-4 relative z-10">
            <div class="flex items-center gap-4">
              <div class="w-16 h-16 rounded-2xl bg-gradient-to-br from-electric-600 to-blue-700 flex items-center justify-center text-white font-display font-bold text-2xl shadow-lg shadow-electric-600/30">
                RM
              </div>
              <div>
                <h4 class="font-display font-bold text-xl text-white">Ranjeet</h4>
                <div class="text-xs font-mono text-electric-400 mt-0.5">Co-Founder &amp; Lead Solutions Architect</div>
                <div class="text-xs text-slate-400 mt-1">Cloud Systems &bull; Full-Stack Architecture &bull; AI Pipelines</div>
              </div>
            </div>
          </div>

          <div class="mt-6 pt-5 border-t border-white/10 space-y-2.5 text-xs relative z-10">
            <div class="flex items-center justify-between">
              <span class="text-slate-400 font-mono">Direct Line:</span>
              <a href="tel:+917217645059" class="font-mono text-slate-200 hover:text-white transition-colors">+91 72176 45059</a>
            </div>
            <div class="flex items-center justify-between">
              <span class="text-slate-400 font-mono">WhatsApp Desk:</span>
              <a href="https://wa.me/917217645059?text=Hi%20Ranjeet%2C%20I%20would%20like%20to%20discuss%20a%20project%20with%20Yukt." target="_blank" rel="noopener noreferrer" class="text-emerald-400 hover:text-emerald-300 font-mono flex items-center gap-1">
                <i data-lucide="message-circle" class="w-3.5 h-3.5"></i>
                <span>Direct WhatsApp &rarr;</span>
              </a>
            </div>
          </div>

          <div class="mt-5 pt-4 border-t border-white/10 flex flex-wrap items-center gap-3 relative z-10">
            <a href="https://github.com/yukt2026" target="_blank" rel="noopener noreferrer" class="px-3 py-1.5 rounded-lg bg-white/5 hover:bg-white/15 border border-white/10 flex items-center gap-2 text-xs text-slate-300 hover:text-white transition-colors">
              <i data-lucide="github" class="w-3.5 h-3.5"></i>
              <span>github.com/yukt2026</span>
            </a>
            <a href="https://www.linkedin.com/in/ranjeet-m-079777262/?isSelfProfile=true" target="_blank" rel="noopener noreferrer" class="px-3 py-1.5 rounded-lg bg-white/5 hover:bg-electric-500/20 border border-white/10 flex items-center gap-2 text-xs text-slate-300 hover:text-white transition-colors">
              <i data-lucide="linkedin" class="w-3.5 h-3.5 text-electric-400"></i>
              <span>LinkedIn Profile</span>
            </a>
          </div>
        </div>

        <!-- Ansar Card -->
        <div class="bg-navy-950 border border-white/10 rounded-2xl p-6 sm:p-8 text-white relative overflow-hidden shadow-xl group hover:border-yukt-orange/50 transition-all">
          <div class="absolute -top-16 -right-16 w-40 h-40 bg-yukt-orange/15 rounded-full blur-3xl pointer-events-none"></div>
          
          <div class="flex items-start justify-between gap-4 relative z-10">
            <div class="flex items-center gap-4">
              <div class="w-16 h-16 rounded-2xl bg-gradient-to-br from-yukt-orange to-amber-600 flex items-center justify-center text-white font-display font-bold text-2xl shadow-lg shadow-yukt-orange/30">
                AS
              </div>
              <div>
                <h4 class="font-display font-bold text-xl text-white">Ansar Ali Shah</h4>
                <div class="text-xs font-mono text-yukt-orange mt-0.5">Co-Founder &amp; Lead Technical Architect</div>
                <div class="text-xs text-slate-400 mt-1">Web Applications &bull; High-Performance Backends &bull; DevOps</div>
              </div>
            </div>
          </div>

          <div class="mt-6 pt-5 border-t border-white/10 space-y-2.5 text-xs relative z-10">
            <div class="flex items-center justify-between">
              <span class="text-slate-400 font-mono">Direct Line:</span>
              <a href="tel:+919576338282" class="font-mono text-slate-200 hover:text-white transition-colors">+91 95763 38282</a>
            </div>
            <div class="flex items-center justify-between">
              <span class="text-slate-400 font-mono">WhatsApp Desk:</span>
              <a href="https://wa.me/919576338282?text=Hi%20Ansar%2C%20I%20would%20like%20to%20discuss%20a%20project%20with%20Yukt." target="_blank" rel="noopener noreferrer" class="text-emerald-400 hover:text-emerald-300 font-mono flex items-center gap-1">
                <i data-lucide="message-circle" class="w-3.5 h-3.5"></i>
                <span>Direct WhatsApp &rarr;</span>
              </a>
            </div>
          </div>

          <div class="mt-5 pt-4 border-t border-white/10 flex flex-wrap items-center gap-3 relative z-10">
            <a href="https://github.com/ansaralisahh" target="_blank" rel="noopener noreferrer" class="px-3 py-1.5 rounded-lg bg-white/5 hover:bg-white/15 border border-white/10 flex items-center gap-2 text-xs text-slate-300 hover:text-white transition-colors">
              <i data-lucide="github" class="w-3.5 h-3.5"></i>
              <span>github.com/ansaralisahh</span>
            </a>
            <a href="https://www.linkedin.com/in/ansaralisahh" target="_blank" rel="noopener noreferrer" class="px-3 py-1.5 rounded-lg bg-white/5 hover:bg-blue-500/20 border border-white/10 flex items-center gap-2 text-xs text-slate-300 hover:text-white transition-colors">
              <i data-lucide="linkedin" class="w-3.5 h-3.5 text-blue-400"></i>
              <span>LinkedIn Profile</span>
            </a>
          </div>
        </div>
      </div>
    </div>

  </div>
</section>

<!-- ==========================================================================
     STANDARDIZED BOTTOM CTA
========================================================================== -->
<section class="py-20 lg:py-28 bg-navy-950 border-t border-white/10 text-white relative overflow-hidden">
  <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[300px] bg-electric-500/15 rounded-full blur-[130px] pointer-events-none"></div>

  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-10 relative z-10">
    <div class="max-w-3xl mx-auto text-center space-y-6 reveal-up">
      <span class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-white/[0.05] border border-white/10 text-electric-400 font-mono text-xs uppercase tracking-widest">
        <span class="w-2 h-2 rounded-full bg-emerald-400"></span>
        <span>Transparent Partnership</span>
      </span>
      <h2 class="font-display font-bold text-3xl sm:text-4xl lg:text-5xl text-white tracking-tight">
        Work with an engineering studio that values clarity.
      </h2>
      <p class="text-base sm:text-lg text-slate-300 max-w-2xl mx-auto font-normal leading-relaxed">
        Let’s review your architectural requirements, discuss feasibility, and map out a clean two-week sprint delivery roadmap.
      </p>
      <div class="pt-4 flex flex-col sm:flex-row items-center justify-center gap-4">
        <button type="button" class="px-7 py-3.5 rounded-xl font-display font-semibold text-sm text-white bg-electric-500 hover:bg-electric-400 transition-all open-quote-modal-btn shadow-lg shadow-electric-500/25">
          <span>Get a Project Estimate</span>
        </button>
        <a href="<?php echo getWhatsAppUrl('Hi Yukt IT Solutions, I would like to learn more about partnering with your engineering team.'); ?>" target="_blank" rel="noopener noreferrer" class="px-7 py-3.5 rounded-xl font-display font-semibold text-sm text-white bg-gradient-to-r from-yukt-orange to-amber-600 hover:from-yukt-orangeLight hover:to-yukt-orange transition-all flex items-center justify-center gap-2 shadow-lg shadow-yukt-orange/25">
          <i data-lucide="message-circle" class="w-4 h-4"></i>
          <span>WhatsApp Consultation</span>
        </a>
      </div>
      <div class="pt-4 text-xs text-slate-400 flex items-center justify-center gap-6 font-mono">
        <span>&bull; Strict NDAs Honored</span>
        <span>&bull; 100% IP Transfer</span>
        <span>&bull; Bi-Weekly Sprint Reviews</span>
      </div>
    </div>
  </div>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
