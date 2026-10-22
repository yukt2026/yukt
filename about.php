<?php
$activePage = 'about';
$pageTitle = 'About Us — Yukt IT Solutions';
$pageDesc = 'Learn about Yukt IT Solutions: our Sanskrit engineering roots, mission, working principles, cohesive technology mesh, and verified engineering pod architecture.';

require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/components/section-header.php';
?>

<!-- ==========================================================================
     ABOUT HERO SECTION
========================================================================== -->
<section class="bg-canvas-subtle border-b border-canvas-border py-16 lg:py-20 bg-grid-pattern relative">
  <div class="container-custom relative z-10">
    <div class="max-w-3xl">
      <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full text-xs font-semibold uppercase tracking-wider bg-electric-50 text-electric-700 border border-electric-200 mb-4">
        <span class="w-2 h-2 rounded-full bg-electric-600"></span> Corporate Identity &amp; Philosophy
      </div>
      <h1 class="text-4xl sm:text-5xl lg:text-6xl font-extrabold text-navy-900 tracking-tight leading-tight">
        Engineering Clarity for Ambitious Enterprises.
      </h1>
      <p class="text-lg text-navy-600 mt-4 leading-relaxed font-normal">
        Founded on transparent agile execution, <strong class="text-navy-900">YUKT IT SOLUTIONS Private Limited</strong> is an Indian digital engineering studio bridging the gap between clean enterprise software, autonomous AI systems, and high-growth digital marketing.
      </p>

      <div class="pt-6 flex flex-wrap items-center gap-6 text-xs text-slate-500">
        <span class="flex items-center gap-2 font-medium">
          <span class="w-2 h-2 rounded-full bg-emerald-500"></span>
          Incorporated &bull; NCR &amp; Bengaluru Hubs
        </span>
        <span class="flex items-center gap-2 font-medium">
          <span class="w-2 h-2 rounded-full bg-electric-500"></span>
          Direct Senior Architecture
        </span>
        <span class="flex items-center gap-2 font-medium">
          <span class="w-2 h-2 rounded-full bg-brandOrange-500"></span>
          100% Client Code Ownership
        </span>
      </div>
    </div>
  </div>
</section>


<!-- ==========================================================================
     COMPANY INTRODUCTION & THE MEANING OF "YUKT"
========================================================================== -->
<section class="section-padding bg-white border-b border-canvas-border">
  <div class="container-custom">
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
      
      <!-- Left Column: Sanskrit Roots & Story (6 Cols) -->
      <div class="lg:col-span-6 space-y-5">
        <span class="text-xs font-bold uppercase tracking-wider text-electric-600">Our Heritage &amp; Ethos</span>
        <h2 class="text-3xl sm:text-4xl font-extrabold text-navy-900 tracking-tight leading-tight">
          What does <span class="text-electric-600">“YUKT”</span> mean?
        </h2>
        
        <p class="text-base text-navy-700 leading-relaxed font-normal">
          Our name is derived from the classical Sanskrit word <strong class="text-navy-900 font-semibold font-serif text-lg">युक्त (Yukt)</strong> — meaning <em class="text-navy-900 font-medium">connected, equipped, skilled, and engineered with precision</em>.
        </p>

        <p class="text-base text-navy-600 leading-relaxed font-normal">
          In an industry often marred by bloated agencies, unvetted outsourcing chains, and fragile template shortcuts, Yukt was established to operate differently: as a focused, disciplined engineering pod where senior architects work directly with founders and technical leaders.
        </p>

        <p class="text-base text-navy-600 leading-relaxed font-normal">
          We believe that code quality and business velocity are not mutually exclusive. By pairing rigorous software architecture with modern agile release cadences, we deliver software that stands the test of transaction scale and time.
        </p>
      </div>

      <!-- Right Column: Visual Philosophy Card (6 Cols) -->
      <div class="lg:col-span-6">
        <div class="bg-canvas-subtle border border-canvas-border rounded-card p-8 lg:p-10 shadow-card space-y-6">
          <div class="flex items-center justify-between pb-4 border-b border-canvas-border">
            <span class="text-xs font-mono font-bold text-navy-900">YUKT IT SOLUTIONS ETHOS</span>
            <span class="text-xs font-mono text-electric-600 font-semibold">EST. 2021</span>
          </div>

          <!-- Vision Box -->
          <div class="space-y-2">
            <div class="text-xs font-bold uppercase tracking-wider text-slate-400 flex items-center gap-2">
              <span class="w-2 h-2 rounded bg-electric-600"></span>
              <span>Our Vision</span>
            </div>
            <h3 class="text-xl font-bold text-navy-900">To be the most dependable digital engineering partner for modern businesses.</h3>
            <p class="text-xs sm:text-sm text-navy-600 leading-relaxed font-normal">
              Empowering organizations in India and across the globe to compete, scale, and innovate through resilient software architecture, transparent operations, and zero vendor lock-in.
            </p>
          </div>

          <!-- Mission Box -->
          <div class="space-y-2 pt-4 border-t border-canvas-border">
            <div class="text-xs font-bold uppercase tracking-wider text-slate-400 flex items-center gap-2">
              <span class="w-2 h-2 rounded bg-brandOrange-500"></span>
              <span>Our Mission</span>
            </div>
            <h3 class="text-xl font-bold text-navy-900">Delivering high-speed platforms with 100% intellectual property ownership.</h3>
            <p class="text-xs sm:text-sm text-navy-600 leading-relaxed font-normal">
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
<section class="section-padding bg-canvas-subtle border-b border-canvas-border">
  <div class="container-custom">
    
    <?php echo renderSectionHeader(
      'Our Guiding Principles',
      'How We Approach Technology & Delivery',
      'Disciplined engineering practices that prioritize long-term system stability, maintainability, and measurable commercial outcomes.',
      true
    ); ?>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
      
      <!-- Principle 1 -->
      <div class="bg-white border border-canvas-border rounded-card p-6 sm:p-8 shadow-subtle hover:border-electric-300 hover:shadow-card transition-all">
        <div class="w-10 h-10 rounded-lg bg-electric-50 text-electric-600 border border-electric-200 flex items-center justify-center mb-4">
          <?php echo getIconSvg('cpu', 'w-5 h-5'); ?>
        </div>
        <div class="text-xs font-mono font-bold text-slate-400 mb-1">01 / ARCHITECTURE</div>
        <h3 class="text-lg font-bold text-navy-900">Senior Architecture First</h3>
        <p class="text-xs sm:text-sm text-navy-600 mt-2 leading-relaxed">
          Every project is scoped, structured, and reviewed by senior engineers. We never hand off mission-critical logic to unvetted third parties.
        </p>
      </div>

      <!-- Principle 2 -->
      <div class="bg-white border border-canvas-border rounded-card p-6 sm:p-8 shadow-subtle hover:border-brandOrange-300 hover:shadow-card transition-all">
        <div class="w-10 h-10 rounded-lg bg-brandOrange-50 text-brandOrange-600 border border-brandOrange-200 flex items-center justify-center mb-4">
          <?php echo getIconSvg('trending-up', 'w-5 h-5'); ?>
        </div>
        <div class="text-xs font-mono font-bold text-slate-400 mb-1">02 / VISIBILITY</div>
        <h3 class="text-lg font-bold text-navy-900">Agile Bi-Weekly Cadence</h3>
        <p class="text-xs sm:text-sm text-navy-600 mt-2 leading-relaxed">
          Two-week sprint cadences with live staging environment access, regular video reviews, and continuous Git commit transparency.
        </p>
      </div>

      <!-- Principle 3 -->
      <div class="bg-white border border-canvas-border rounded-card p-6 sm:p-8 shadow-subtle hover:border-electric-300 hover:shadow-card transition-all">
        <div class="w-10 h-10 rounded-lg bg-electric-50 text-electric-600 border border-electric-200 flex items-center justify-center mb-4">
          <?php echo getIconSvg('code', 'w-5 h-5'); ?>
        </div>
        <div class="text-xs font-mono font-bold text-slate-400 mb-1">03 / SUSTAINABILITY</div>
        <h3 class="text-lg font-bold text-navy-900">Clean Code Standards</h3>
        <p class="text-xs sm:text-sm text-navy-600 mt-2 leading-relaxed">
          We write modular, human-readable code following strict linting, automated testing, and comprehensive documentation to eliminate technical debt.
        </p>
      </div>

      <!-- Principle 4 -->
      <div class="bg-white border border-canvas-border rounded-card p-6 sm:p-8 shadow-subtle hover:border-emerald-300 hover:shadow-card transition-all">
        <div class="w-10 h-10 rounded-lg bg-emerald-50 text-emerald-600 border border-emerald-200 flex items-center justify-center mb-4">
          <?php echo getIconSvg('shield-check', 'w-5 h-5'); ?>
        </div>
        <div class="text-xs font-mono font-bold text-slate-400 mb-1">04 / AUTONOMY</div>
        <h3 class="text-lg font-bold text-navy-900">100% Client IP Ownership</h3>
        <p class="text-xs sm:text-sm text-navy-600 mt-2 leading-relaxed">
          You own everything we build. All Git repos, database schemas, Figma files, and server configurations are transferred upon milestone delivery.
        </p>
      </div>

    </div>

  </div>
</section>


<!-- ==========================================================================
     THE COHESIVE TECH MESH
     Explaining how Web Dev, AI, Software & Marketing Work Together
========================================================================== -->
<section class="section-padding bg-white border-b border-canvas-border">
  <div class="container-custom">
    
    <?php echo renderSectionHeader(
      'Integrated Technology Mesh',
      'Why Web, Software, AI & Marketing Must Work Together',
      'Modern digital excellence fails when disciplines operate in silos. At Yukt, our capabilities form a unified, synchronized flywheel.',
      true
    ); ?>

    <div class="grid grid-cols-1 lg:grid-cols-4 gap-6 relative">
      
      <!-- Pillar 1: Web Development -->
      <div class="p-6 rounded-card border border-canvas-border bg-canvas-subtle hover:bg-white hover:border-electric-300 transition-all">
        <div class="w-10 h-10 rounded-lg bg-electric-50 text-electric-600 flex items-center justify-center mb-4">
          <?php echo getIconSvg('globe', 'w-5 h-5'); ?>
        </div>
        <div class="text-xs font-bold uppercase tracking-wider text-electric-600 mb-1">Layer 1: Interface</div>
        <h3 class="text-lg font-bold text-navy-900">Web Platforms</h3>
        <p class="text-xs sm:text-sm text-navy-600 mt-2 leading-relaxed">
          The high-speed, sub-second visual interface. Captures user interest, renders cleanly on all devices, and minimizes bounce rates.
        </p>
        <div class="mt-4 pt-3 border-t border-canvas-border text-[11px] font-mono text-slate-500">
          Role: Conversion &amp; Presentation
        </div>
      </div>

      <!-- Pillar 2: Custom Software -->
      <div class="p-6 rounded-card border border-canvas-border bg-canvas-subtle hover:bg-white hover:border-electric-300 transition-all">
        <div class="w-10 h-10 rounded-lg bg-navy-100 text-navy-800 flex items-center justify-center mb-4">
          <?php echo getIconSvg('cpu', 'w-5 h-5'); ?>
        </div>
        <div class="text-xs font-bold uppercase tracking-wider text-navy-800 mb-1">Layer 2: Engine</div>
        <h3 class="text-lg font-bold text-navy-900">Custom Software</h3>
        <p class="text-xs sm:text-sm text-navy-600 mt-2 leading-relaxed">
          The backend engine enforcing business rules, multi-tenant database integrity, role-based security, and microservice APIs.
        </p>
        <div class="mt-4 pt-3 border-t border-canvas-border text-[11px] font-mono text-slate-500">
          Role: Core Operations &amp; Logic
        </div>
      </div>

      <!-- Pillar 3: AI & Automation -->
      <div class="p-6 rounded-card border border-canvas-border bg-canvas-subtle hover:bg-white hover:border-brandOrange-300 transition-all">
        <div class="w-10 h-10 rounded-lg bg-brandOrange-50 text-brandOrange-600 flex items-center justify-center mb-4">
          <?php echo getIconSvg('sparkles', 'w-5 h-5'); ?>
        </div>
        <div class="text-xs font-bold uppercase tracking-wider text-brandOrange-600 mb-1">Layer 3: Velocity</div>
        <h3 class="text-lg font-bold text-navy-900">AI &amp; Automation</h3>
        <p class="text-xs sm:text-sm text-navy-600 mt-2 leading-relaxed">
          Injects intelligence into the stack. Automates document processing, handles customer queries 24/7, and scores leads algorithmically.
        </p>
        <div class="mt-4 pt-3 border-t border-canvas-border text-[11px] font-mono text-slate-500">
          Role: Efficiency &amp; Intelligence
        </div>
      </div>

      <!-- Pillar 4: Digital Growth -->
      <div class="p-6 rounded-card border border-canvas-border bg-canvas-subtle hover:bg-white hover:border-electric-300 transition-all">
        <div class="w-10 h-10 rounded-lg bg-electric-50 text-electric-600 flex items-center justify-center mb-4">
          <?php echo getIconSvg('trending-up', 'w-5 h-5'); ?>
        </div>
        <div class="text-xs font-bold uppercase tracking-wider text-electric-600 mb-1">Layer 4: Expansion</div>
        <h3 class="text-lg font-bold text-navy-900">Digital Marketing</h3>
        <p class="text-xs sm:text-sm text-navy-600 mt-2 leading-relaxed">
          Drives targeted audience acquisition, captures high-intent demand, and feeds real-time attribution data back into product optimization.
        </p>
        <div class="mt-4 pt-3 border-t border-canvas-border text-[11px] font-mono text-slate-500">
          Role: Demand &amp; Feedback Loop
        </div>
      </div>

    </div>

    <!-- Flywheel Narrative Card -->
    <div class="mt-8 p-6 sm:p-8 bg-canvas-subtle rounded-card border border-canvas-border flex flex-col sm:flex-row items-center justify-between gap-6">
      <div class="space-y-1">
        <div class="text-xs font-bold uppercase tracking-wider text-electric-600">The Studio Advantage</div>
        <h4 class="text-lg font-bold text-navy-900">Zero Hand-Off Friction Between Engineering &amp; Marketing</h4>
        <p class="text-xs sm:text-sm text-navy-600">When your software developers, UI designers, AI specialists, and performance marketers collaborate under one roof, features launch faster and marketing campaigns track with 100% data fidelity.</p>
      </div>
      <a href="services.php" class="btn-secondary flex-shrink-0">
        <span>Explore All 8 Disciplines</span>
        <?php echo getIconSvg('arrow-right', 'w-4 h-4'); ?>
      </a>
    </div>

  </div>
</section>


<!-- ==========================================================================
     VERIFIED ORGANIZATIONAL STRUCTURE & ENGINEERING PODS
     Strict Rule: Include team information only when verified.
========================================================================== -->
<section class="section-padding bg-canvas-subtle border-b border-canvas-border">
  <div class="container-custom">
    
    <?php echo renderSectionHeader(
      'Our Organization',
      'The Agile Pod Delivery Architecture',
      'Verified organizational model: client engagements are led by dedicated, senior cross-functional pods located across our Indian development hubs.',
      true
    ); ?>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
      
      <div class="bg-white border border-canvas-border rounded-card p-6 shadow-subtle">
        <div class="w-10 h-10 rounded-lg bg-electric-50 text-electric-600 flex items-center justify-center mb-4">
          <?php echo getIconSvg('cpu', 'w-5 h-5'); ?>
        </div>
        <h3 class="text-base font-bold text-navy-900">Lead Solutions Architecture</h3>
        <p class="text-xs text-navy-600 mt-2 leading-relaxed">
          Oversees system design, microservice topology, database schemas, cloud infrastructure, and technical security compliance.
        </p>
        <div class="mt-4 pt-3 border-t border-canvas-border text-[11px] text-slate-400">
          Focus: High-concurrency &amp; Stability
        </div>
      </div>

      <div class="bg-white border border-canvas-border rounded-card p-6 shadow-subtle">
        <div class="w-10 h-10 rounded-lg bg-navy-100 text-navy-800 flex items-center justify-center mb-4">
          <?php echo getIconSvg('code', 'w-5 h-5'); ?>
        </div>
        <h3 class="text-base font-bold text-navy-900">Full-Stack &amp; Cloud Pod</h3>
        <p class="text-xs text-navy-600 mt-2 leading-relaxed">
          Specialized in React, Next.js, Laravel, PHP, Python, PostgreSQL, and Docker containerized cloud deployments.
        </p>
        <div class="mt-4 pt-3 border-t border-canvas-border text-[11px] text-slate-400">
          Focus: Clean Code &amp; CI/CD Pipelines
        </div>
      </div>

      <div class="bg-white border border-canvas-border rounded-card p-6 shadow-subtle">
        <div class="w-10 h-10 rounded-lg bg-brandOrange-50 text-brandOrange-600 flex items-center justify-center mb-4">
          <?php echo getIconSvg('sparkles', 'w-5 h-5'); ?>
        </div>
        <h3 class="text-base font-bold text-navy-900">AI &amp; Automation Pod</h3>
        <p class="text-xs text-navy-600 mt-2 leading-relaxed">
          Engineers vector embeddings, LangChain RAG pipelines, WhatsApp API bots, and intelligent optical document processing models.
        </p>
        <div class="mt-4 pt-3 border-t border-canvas-border text-[11px] text-slate-400">
          Focus: Zero-Hallucination AI Workflows
        </div>
      </div>

      <div class="bg-white border border-canvas-border rounded-card p-6 shadow-subtle">
        <div class="w-10 h-10 rounded-lg bg-electric-50 text-electric-600 flex items-center justify-center mb-4">
          <?php echo getIconSvg('palette', 'w-5 h-5'); ?>
        </div>
        <h3 class="text-base font-bold text-navy-900">UI/UX &amp; Growth Pod</h3>
        <p class="text-xs text-navy-600 mt-2 leading-relaxed">
          Figma component systems, user experience testing, conversion rate optimization (CRO), and server-side tracking analytics.
        </p>
        <div class="mt-4 pt-3 border-t border-canvas-border text-[11px] text-slate-400">
          Focus: Intuitive Interfaces &amp; Attribution
        </div>
      </div>

    </div>

    <!-- Verified Locations Strip -->
    <div class="mt-10 p-6 bg-white border border-canvas-border rounded-card flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4">
      <div class="flex items-center gap-3">
        <div class="w-9 h-9 rounded-md bg-electric-50 text-electric-600 flex items-center justify-center flex-shrink-0">
          <?php echo getIconSvg('map-pin', 'w-4 h-4'); ?>
        </div>
        <div>
          <div class="text-xs font-bold uppercase tracking-wider text-slate-400">Development Hubs</div>
          <div class="text-sm font-bold text-navy-900"><?php echo OFFICE_PRIMARY; ?> &bull; <?php echo OFFICE_SECONDARY; ?></div>
        </div>
      </div>
      <div class="text-xs text-slate-500">
        Operating Pan-India &bull; Delivering Globally
      </div>
    </div>

  </div>
</section>


<!-- ==========================================================================
     STANDARDIZED BOTTOM CTA
========================================================================== -->
<section class="section-padding bg-navy-900 border-t border-slate-800 text-white">
  <div class="container-custom">
    <div class="max-w-3xl mx-auto text-center space-y-6">
      <span class="inline-flex items-center gap-2 px-3 py-1 rounded-full text-xs font-semibold uppercase tracking-wider bg-navy-800 text-electric-400 border border-slate-700">
        <span class="w-2 h-2 rounded-full bg-emerald-400"></span> Transparent Partnership
      </span>
      <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-white tracking-tight">
        Work with an engineering studio that values clarity.
      </h2>
      <p class="text-base sm:text-lg text-slate-300 max-w-2xl mx-auto font-normal leading-relaxed">
        Let’s review your architectural requirements, discuss feasibility, and map out a clean two-week sprint delivery roadmap.
      </p>
      <div class="pt-4 flex flex-col sm:flex-row items-center justify-center gap-4">
        <button type="button" class="btn-primary-lg open-quote-modal-btn">
          <span>Get a Project Estimate</span>
          <?php echo getIconSvg('arrow-right', 'w-4 h-4'); ?>
        </button>
        <a href="<?php echo getWhatsAppUrl('Hi Yukt IT Solutions, I would like to learn more about partnering with your engineering team.'); ?>" target="_blank" rel="noopener noreferrer" class="btn-secondary-lg text-navy-800 bg-white hover:bg-slate-100 flex items-center justify-center gap-2">
          <?php echo getIconSvg('whatsapp', 'w-4 h-4 text-emerald-600'); ?>
          <span>WhatsApp Consultation</span>
        </a>
      </div>
      <div class="pt-4 text-xs text-slate-400 flex items-center justify-center gap-6">
        <span>&bull; Strict NDAs Honored</span>
        <span>&bull; 100% IP Transfer</span>
        <span>&bull; Bi-Weekly Sprint Reviews</span>
      </div>
    </div>
  </div>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
