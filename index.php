<?php
$activePage = 'home';
$pageTitle = 'YUKT IT SOLUTIONS — Technology That Moves Your Business Forward';
$pageDesc = 'YUKT IT SOLUTIONS engineers bespoke websites, custom software, autonomous AI automation agents, and digital growth engines for ambitious modern enterprises.';

require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/components/section-header.php';
require_once __DIR__ . '/includes/components/card-service.php';
?>

<!-- ==========================================================================
     HERO SECTION (COMPACT & ANIMATED STRIPE-INSPIRED CANVAS)
     Headline: “Technology That Moves Your Business Forward.”
     CTAs: “Discuss Your Project” & “Explore Our Services” + Instant WhatsApp Action
     Showcase: Layered UI Elements (Terminal Orchestrator, AI Telemetry, Commerce Rail)
========================================================================== -->
<section class="relative stripe-ambient-canvas pt-10 pb-12 sm:pt-14 sm:pb-16 lg:pt-16 lg:pb-20 border-b border-canvas-border overflow-hidden">
  <!-- Subtle Technical Grid Pattern -->
  <div class="absolute inset-0 bg-grid-pattern opacity-30 pointer-events-none"></div>

  <div class="container-custom relative z-10">
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-10 items-center">
      
      <!-- Left Column: Expressive Typography & CTAs (7 Cols) -->
      <div class="lg:col-span-7 space-y-4 sm:space-y-5">
        
        <!-- Live Status Eyebrow Pill with Pulse Animation -->
        <div class="animate-hero-fade inline-flex items-center gap-2 px-3 py-1 rounded-full text-xs font-semibold tracking-wide uppercase bg-electric-50 text-electric-700 border border-electric-200">
          <span class="w-2 h-2 rounded-full bg-emerald-500 animate-pulse"></span>
          <span>Indian Technology Studio &bull; Accepting Q4 Sprints</span>
        </div>

        <!-- Headline: 56–64px on Desktop with Stripe Gradient Text Shimmer -->
        <h1 class="animate-hero-fade animation-delay-150 text-4xl sm:text-5xl lg:text-[58px] font-bold text-navy-800 tracking-tight leading-[1.1]">
          Technology That Moves Your Business <span class="stripe-gradient-text">Forward.</span>
        </h1>

        <!-- Supporting Text: 18px Desktop Readability -->
        <p class="animate-hero-fade animation-delay-250 text-base sm:text-lg text-navy-500 leading-relaxed max-w-2xl font-normal">
          We engineer bespoke <strong class="text-navy-800 font-semibold">web applications</strong>, tailored <strong class="text-navy-800 font-semibold">enterprise software</strong>, autonomous <strong class="text-navy-800 font-semibold">AI automation agents</strong>, and high-ROI <strong class="text-navy-800 font-semibold">digital growth engines</strong>. Clean architecture, senior engineering pods, and zero template shortcuts.
        </p>

        <!-- CTA Action Buttons -->
        <div class="animate-hero-fade animation-delay-350 pt-1 flex flex-col sm:flex-row items-stretch sm:items-center gap-3.5">
          <button type="button" class="btn-primary-lg open-quote-modal-btn">
            <span>Discuss Your Project</span>
            <?php echo getIconSvg('arrow-right', 'w-4 h-4'); ?>
          </button>
          
          <a href="#services" class="btn-secondary-lg">
            <span>Explore Our Services</span>
          </a>

          <a href="<?php echo getWhatsAppUrl('Hi Yukt IT Solutions, I would like to discuss a project with your senior engineering team.'); ?>" target="_blank" rel="noopener noreferrer" class="inline-flex items-center justify-center gap-2 px-4 py-2.5 sm:py-3 text-xs sm:text-sm font-semibold text-emerald-700 bg-emerald-50 hover:bg-emerald-100 border border-emerald-200 rounded-lg transition-colors">
            <?php echo getIconSvg('whatsapp', 'w-4 h-4 text-emerald-600'); ?>
            <span>Chat on WhatsApp</span>
          </a>
        </div>

        <!-- Micro Assurance Indicators -->
        <div class="animate-hero-fade animation-delay-450 pt-4 flex flex-wrap items-center gap-y-2 gap-x-6 text-xs sm:text-sm text-navy-500 border-t border-canvas-border">
          <span class="flex items-center gap-1.5 font-medium">
            <?php echo getIconSvg('shield-check', 'w-4 h-4 text-emerald-600'); ?>
            <span>100% Client IP Ownership</span>
          </span>
          <span class="flex items-center gap-1.5 font-medium">
            <?php echo getIconSvg('check-circle', 'w-4 h-4 text-electric-600'); ?>
            <span>Bi-Weekly Agile Sprints</span>
          </span>
          <span class="flex items-center gap-1.5 font-medium">
            <?php echo getIconSvg('lock', 'w-4 h-4 text-brandOrange-500'); ?>
            <span>Strict NDA Safeguards</span>
          </span>
        </div>

      </div>

      <!-- Right Column: Stripe-Style Layered Product Showcase (5 Cols) -->
      <div class="lg:col-span-5 relative animate-hero-fade animation-delay-250 pt-4 lg:pt-0">
        
        <!-- Background Ambient Glow Behind Mockup -->
        <div class="absolute -inset-4 bg-gradient-to-tr from-electric-600/15 via-indigo-500/10 to-brandOrange-500/10 rounded-2xl filter blur-2xl opacity-70 -z-10"></div>

        <!-- Layer 1 (Base): High-Fidelity IDE & Microservices Orchestrator Window -->
        <div class="relative bg-navy-900 border border-slate-800 rounded-xl shadow-stripe-deep overflow-hidden">
          
          <!-- Terminal / Window Chrome Header -->
          <div class="flex items-center justify-between px-4 py-2.5 bg-navy-950 border-b border-slate-800 text-xs">
            <div class="flex items-center gap-2">
              <span class="w-2.5 h-2.5 rounded-full bg-rose-500/80"></span>
              <span class="w-2.5 h-2.5 rounded-full bg-amber-500/80"></span>
              <span class="w-2.5 h-2.5 rounded-full bg-emerald-500/80"></span>
              <span class="font-mono text-xs text-slate-400 ml-2">yukt.orchestrator.ts</span>
            </div>
            <span class="inline-flex items-center gap-1 text-[10px] font-mono text-emerald-400 bg-emerald-950/60 px-2 py-0.5 rounded border border-emerald-800/50">
              <span class="w-1.5 h-1.5 rounded-full bg-emerald-400 animate-pulse"></span>
              <span>active</span>
            </span>
          </div>

          <!-- Code Payload Body with Animated Blinking Cursor -->
          <div class="p-4 sm:p-5 font-mono text-xs sm:text-[13px] leading-relaxed text-slate-300 overflow-x-auto">
            <div class="text-slate-400">// Scalable business engineering stack</div>
            <div class="mt-0.5"><span class="text-purple-400">import</span> { <span class="text-blue-300">YuktEngine</span> } <span class="text-purple-400">from</span> <span class="text-emerald-300">'@yukt/core'</span>;</div>
            <div class="mt-1.5"><span class="text-purple-400">const</span> <span class="text-yellow-300">deployment</span> = <span class="text-purple-400">await</span> <span class="text-blue-300">YuktEngine</span>.<span class="text-blue-400">deploy</span>({</div>
            <div class="pl-3.5 text-slate-300">client: <span class="text-emerald-300">'Enterprise Growth'</span>,</div>
            <div class="pl-3.5 text-slate-300">architecture: [<span class="text-emerald-300">'Next.js'</span>, <span class="text-emerald-300">'Laravel'</span>],</div>
            <div class="pl-3.5 text-slate-300">automation: {</div>
            <div class="pl-7 text-slate-300">aiAgents: <span class="text-amber-300">'24/7 Operations'</span>,</div>
            <div class="pl-7 text-slate-300">whatsappWebhook: <span class="text-emerald-300">'+91 72176 45059'</span>,</div>
            <div class="pl-7 text-slate-300">paymentRails: <span class="text-emerald-300">'UPI &bull; Razorpay'</span></div>
            <div class="pl-3.5 text-slate-300">},</div>
            <div class="pl-3.5 text-slate-300">sla: <span class="text-yellow-300">99.98%</span>,</div>
            <div class="pl-3.5 text-slate-300">ipTransfer: <span class="text-purple-400">true</span></div>
            <div>});<span class="animate-cursor text-electric-400 font-bold ml-1">|</span></div>
          </div>

          <!-- Terminal Live CI/CD Build Status Ribbon -->
          <div class="px-4 py-2 bg-navy-950 border-t border-slate-800 text-[11px] font-mono text-slate-400 flex items-center justify-between">
            <div class="flex items-center gap-1.5">
              <span class="text-emerald-400">✓</span>
              <span>35 tests passed &bull; Zero downtime</span>
            </div>
            <span class="text-slate-500">18ms</span>
          </div>
        </div>

        <!-- Layer 2: Floating AI Automation & Live Webhook Glass Card (Top-Right Offset) -->
        <div class="hidden sm:block absolute -top-4 -right-3 lg:-right-5 w-60 stripe-card-glass shadow-stripe rounded-xl p-3 animate-float-slow z-20">
          <div class="flex items-center justify-between mb-1.5">
            <div class="flex items-center gap-1.5">
              <div class="w-5 h-5 rounded-md bg-electric-50 text-electric-600 flex items-center justify-center">
                <?php echo getIconSvg('sparkles', 'w-3 h-3 text-brandOrange-500'); ?>
              </div>
              <span class="text-xs font-bold text-navy-800">AI Workflow Agent</span>
            </div>
            <span class="inline-flex items-center gap-1 text-[10px] font-semibold text-emerald-700 bg-emerald-50 px-1.5 py-0.5 rounded-full border border-emerald-200">
              <span class="w-1.5 h-1.5 rounded-full bg-emerald-500 animate-pulse"></span>
              <span>Active</span>
            </span>
          </div>
          <p class="text-[11px] text-navy-500 leading-snug">
            Autonomous RAG parsing specs &amp; dispatching WhatsApp leads.
          </p>
          <div class="mt-2 pt-1.5 border-t border-canvas-border flex items-center justify-between text-[10px] text-navy-500">
            <span>Response Speed</span>
            <span class="font-bold text-navy-800 font-mono">&lt; 0.8s</span>
          </div>
        </div>

        <!-- Layer 3: Floating Indian Rails & Performance Glass Card (Bottom-Left Offset) -->
        <div class="hidden sm:block absolute -bottom-5 -left-3 lg:-left-5 w-60 stripe-card-glass shadow-stripe rounded-xl p-3 animate-float-reverse z-20">
          <div class="flex items-center justify-between mb-1.5">
            <div class="flex items-center gap-1.5">
              <div class="w-5 h-5 rounded-md bg-emerald-50 text-emerald-600 flex items-center justify-center">
                <?php echo getIconSvg('check-circle', 'w-3 h-3 text-emerald-600'); ?>
              </div>
              <span class="text-xs font-bold text-navy-800">Verified Outcomes</span>
            </div>
            <span class="text-[10px] font-semibold text-electric-700 bg-electric-50 px-1.5 py-0.5 rounded-full border border-electric-200">
              100% IP
            </span>
          </div>
          <div class="grid grid-cols-2 gap-1.5 text-center pt-0.5">
            <div class="p-1 rounded bg-canvas-subtle border border-canvas-border">
              <div class="text-[10px] text-navy-500">Web Vitals</div>
              <div class="text-xs font-bold text-navy-800">98 / 100</div>
            </div>
            <div class="p-1 rounded bg-canvas-subtle border border-canvas-border">
              <div class="text-[10px] text-navy-500">Uptime</div>
              <div class="text-xs font-bold text-emerald-600">99.98%</div>
            </div>
          </div>
        </div>

      </div>

    </div>
  </div>
</section>


<!-- ==========================================================================
     TRUST INDICATORS & CONCISE COMPANY INTRODUCTION (COMPACT)
========================================================================== -->
<section id="about" class="section-padding bg-canvas-subtle border-b border-canvas-border scroll-mt-16">
  <div class="container-custom">
    
    <!-- Company Introduction Split -->
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-6 lg:gap-8 items-start mb-8 sm:mb-10 reveal-on-scroll">
      <div class="lg:col-span-5">
        <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full text-xs font-semibold uppercase tracking-wider bg-electric-50 text-electric-700 border border-electric-200 mb-2.5">
          <span class="w-1.5 h-1.5 rounded-full bg-electric-600"></span> About Yukt IT Solutions
        </div>
        <h2 class="text-3xl sm:text-4xl font-bold text-navy-800 tracking-tight leading-tight">
          An Indian digital engineering studio built on engineering clarity.
        </h2>
      </div>

      <div class="lg:col-span-7 space-y-3 text-base sm:text-lg text-navy-500 leading-relaxed font-normal">
        <p>
          Headquartered with development hubs in the National Capital Region (NCR) and Bengaluru, <strong class="text-navy-800 font-semibold">YUKT IT SOLUTIONS Private Limited</strong> provides technical architecture, bespoke software engineering, AI workflow automation, and digital branding to businesses in India and internationally.
        </p>
        <p>
          Our name, <em class="text-navy-800 font-medium">YUKT</em>, is rooted in the Sanskrit principle of being <span class="text-electric-700 font-medium">connected, equipped, and engineered with precision</span>. We reject the fragmented, bloated agency model in favor of a cohesive agile pod where engineers and product designers work hand-in-hand with your stakeholders.
        </p>
      </div>
    </div>

    <!-- Authentic Engineering Trust Pillars Grid (Compact & Animated) -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 sm:gap-6">
      <?php 
      $delays = ['reveal-delay-50', 'reveal-delay-100', 'reveal-delay-150', 'reveal-delay-200'];
      $idx = 0;
      foreach ($ENGINEERING_PILLARS as $pillar): 
        $delayClass = $delays[$idx % 4];
        $idx++;
      ?>
        <div class="bg-white border border-canvas-border rounded-xl p-5 sm:p-6 shadow-card hover:border-electric-300 hover:shadow-card-hover hover:-translate-y-1 transition-all duration-200 stripe-card-interactive reveal-on-scroll <?php echo $delayClass; ?>">
          <div class="w-9 h-9 rounded-lg <?php echo ($pillar['accent'] === 'orange') ? 'bg-brandOrange-50 text-brandOrange-600' : 'bg-electric-50 text-electric-600'; ?> flex items-center justify-center mb-3 transition-transform duration-200 hover:scale-105">
            <?php echo getIconSvg($pillar['icon'], 'w-4 h-4'); ?>
          </div>
          <h3 class="text-base font-bold text-navy-800"><?php echo htmlspecialchars($pillar['title']); ?></h3>
          <p class="text-sm text-navy-500 mt-1.5 leading-relaxed font-normal">
            <?php echo htmlspecialchars($pillar['desc']); ?>
          </p>
        </div>
      <?php endforeach; ?>
    </div>

  </div>
</section>


<!-- ==========================================================================
     FEATURED SERVICES SECTION (COMPACT)
========================================================================== -->
<section id="services" class="section-padding bg-white border-b border-canvas-border scroll-mt-16">
  <div class="container-custom">
    
    <!-- Section Header -->
    <?php echo renderSectionHeader(
      'Our Capabilities',
      'Engineered for Scale, Speed & Business Impact',
      'From modern web platforms and enterprise SaaS systems to autonomous AI agents, performance marketing, and creative branding, we deliver full-cycle digital transformation across 8 core disciplines.',
      true
    ); ?>

    <!-- Services Grid (Clean 3-Column Responsive Grid) -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5 lg:gap-6">
      <?php foreach ($SERVICES as $service): ?>
        <?php echo renderServiceCard($service, 'reveal-on-scroll'); ?>
      <?php endforeach; ?>

      <!-- 9th Complementary Architecture Block -->
      <div class="bg-navy-900 text-white rounded-xl p-6 sm:p-7 flex flex-col justify-between border border-slate-800 shadow-card hover:border-slate-700 hover:-translate-y-1 transition-all duration-200 reveal-on-scroll stripe-card-interactive">
        <div>
          <span class="inline-flex items-center gap-1.5 px-2.5 py-0.5 rounded-full text-xs font-semibold bg-navy-800 text-brandOrange-400 border border-slate-700 mb-3">
            <?php echo getIconSvg('sparkles', 'w-3 h-3 text-brandOrange-500'); ?> Need a Custom Stack?
          </span>
          <h3 class="text-lg sm:text-xl font-bold text-white">Have a unique enterprise requirement?</h3>
          <p class="text-sm text-slate-300 mt-2 leading-relaxed font-normal">
            We architect bespoke integrations, legacy system modernizations, and multi-cloud environments tailored precisely to your operational constraints.
          </p>
        </div>
        <div class="pt-5">
          <button type="button" class="btn-primary w-full py-2.5 open-quote-modal-btn">
            <span>Consult an Architect</span>
            <?php echo getIconSvg('arrow-right', 'w-4 h-4'); ?>
          </button>
        </div>
      </div>
    </div>

  </div>
</section>


<!-- ==========================================================================
     BUSINESS SOLUTIONS SECTION (COMPACT & ANIMATED)
========================================================================== -->
<section id="solutions" class="section-padding bg-canvas-subtle border-b border-canvas-border scroll-mt-16">
  <div class="container-custom">
    
    <!-- Section Header -->
    <?php echo renderSectionHeader(
      'Business Solutions',
      'Solving Concrete Operational Challenges',
      'How YUKT IT SOLUTIONS eliminates technical bottlenecks, automates high-overhead manual workflows, and unlocks predictable digital revenue.',
      true,
      'orange'
    ); ?>

    <!-- 4 High-Impact Business Solutions Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-5 sm:gap-6">
      
      <!-- Solution 1: Legacy Modernization & Scaling -->
      <div class="bg-white border border-canvas-border rounded-xl p-6 sm:p-7 shadow-card hover:border-electric-300 hover:shadow-card-hover transition-all duration-200 flex flex-col justify-between stripe-card-interactive reveal-on-scroll reveal-delay-50">
        <div class="space-y-3.5">
          <div class="flex items-center justify-between">
            <span class="w-9 h-9 rounded-lg bg-electric-50 text-electric-600 flex items-center justify-center font-bold">
              <?php echo getIconSvg('cpu', 'w-4 h-4'); ?>
            </span>
            <span class="text-xs font-semibold uppercase tracking-wider text-electric-700 bg-electric-50 px-2 py-0.5 rounded border border-electric-200">
              Enterprise Infrastructure
            </span>
          </div>

          <h3 class="text-xl sm:text-2xl font-bold text-navy-800">Modernizing Legacy Codebases &amp; Eliminating Downtime</h3>
          
          <div class="space-y-2 text-xs sm:text-sm">
            <div class="p-2.5 bg-red-50/60 rounded-lg border border-red-100 text-red-900">
              <strong class="font-semibold block text-red-800">The Problem:</strong>
              Monolithic architectures crash under high traffic surges, have high cloud server costs, and suffer from fragile releases that take weeks to deploy.
            </div>

            <div class="p-2.5 bg-emerald-50/60 rounded-lg border border-emerald-100 text-emerald-900">
              <strong class="font-semibold block text-emerald-800">Yukt Engineering Solution:</strong>
              Migration to decoupled modern frontends (Next.js/React), resilient backend microservices (Laravel/Node), containerization (Docker), and automated CI/CD staging pipelines.
            </div>
          </div>

          <div class="pt-1 flex flex-wrap items-center gap-3 text-xs font-medium text-navy-500">
            <span class="flex items-center gap-1">
              <span class="w-1.5 h-1.5 rounded-full bg-emerald-500"></span> 99.98% Uptime SLA
            </span>
            <span class="flex items-center gap-1">
              <span class="w-1.5 h-1.5 rounded-full bg-electric-500"></span> Sub-Second Vitals
            </span>
            <span class="flex items-center gap-1">
              <span class="w-1.5 h-1.5 rounded-full bg-brandOrange-500"></span> 100% IP Transfer
            </span>
          </div>
        </div>

        <div class="pt-4 border-t border-canvas-border mt-5 flex items-center justify-between">
          <a href="<?php echo getWhatsAppUrl('Hi Yukt IT Solutions, I would like to discuss modernizing our legacy software infrastructure.'); ?>" target="_blank" rel="noopener noreferrer" class="text-xs font-semibold text-emerald-700 hover:text-emerald-800 flex items-center gap-1.5">
            <?php echo getIconSvg('whatsapp', 'w-4 h-4 text-emerald-600'); ?>
            <span>Discuss on WhatsApp</span>
          </a>
          <button type="button" class="btn-primary py-2 px-3.5 text-xs open-quote-modal-btn" data-service="Software & Applications">
            <span>Request Scoping</span>
            <?php echo getIconSvg('arrow-right', 'w-3 h-3'); ?>
          </button>
        </div>
      </div>

      <!-- Solution 2: AI Workflows & Labor Automation -->
      <div class="bg-white border border-canvas-border rounded-xl p-6 sm:p-7 shadow-card hover:border-brandOrange-300 hover:shadow-card-hover transition-all duration-200 flex flex-col justify-between stripe-card-interactive reveal-on-scroll reveal-delay-100">
        <div class="space-y-3.5">
          <div class="flex items-center justify-between">
            <span class="w-9 h-9 rounded-lg bg-brandOrange-50 text-brandOrange-600 flex items-center justify-center font-bold">
              <?php echo getIconSvg('sparkles', 'w-4 h-4 text-brandOrange-500'); ?>
            </span>
            <span class="text-xs font-semibold uppercase tracking-wider text-brandOrange-700 bg-brandOrange-50 px-2 py-0.5 rounded border border-brandOrange-200">
              AI &amp; Autonomous Ops
            </span>
          </div>

          <h3 class="text-xl sm:text-2xl font-bold text-navy-800">Automating Repetitive Human Workflows with AI Agents</h3>
          
          <div class="space-y-2 text-xs sm:text-sm">
            <div class="p-2.5 bg-red-50/60 rounded-lg border border-red-100 text-red-900">
              <strong class="font-semibold block text-red-800">The Problem:</strong>
              Operations and customer support teams are overwhelmed by hundreds of repetitive tier-1 queries, leading to slow response times, lost leads, and high labor overhead.
            </div>

            <div class="p-2.5 bg-emerald-50/60 rounded-lg border border-emerald-100 text-emerald-900">
              <strong class="font-semibold block text-emerald-800">Yukt Engineering Solution:</strong>
              Proprietary RAG knowledge assistants, autonomous WhatsApp Business chatbots, LLM document parsing pipelines, and zero-hallucination verification safeguards.
            </div>
          </div>

          <div class="pt-1 flex flex-wrap items-center gap-3 text-xs font-medium text-navy-500">
            <span class="flex items-center gap-1">
              <span class="w-1.5 h-1.5 rounded-full bg-emerald-500"></span> 70%+ Auto Resolution
            </span>
            <span class="flex items-center gap-1">
              <span class="w-1.5 h-1.5 rounded-full bg-electric-500"></span> &lt; 60s Lead Response
            </span>
            <span class="flex items-center gap-1">
              <span class="w-1.5 h-1.5 rounded-full bg-brandOrange-500"></span> 40+ Hrs Saved / Wk
            </span>
          </div>
        </div>

        <div class="pt-4 border-t border-canvas-border mt-5 flex items-center justify-between">
          <a href="<?php echo getWhatsAppUrl('Hi Yukt IT Solutions, I would like to explore autonomous AI automation agents and WhatsApp workflows.'); ?>" target="_blank" rel="noopener noreferrer" class="text-xs font-semibold text-emerald-700 hover:text-emerald-800 flex items-center gap-1.5">
            <?php echo getIconSvg('whatsapp', 'w-4 h-4 text-emerald-600'); ?>
            <span>Discuss on WhatsApp</span>
          </a>
          <button type="button" class="btn-primary py-2 px-3.5 text-xs open-quote-modal-btn" data-service="AI & Automation">
            <span>Request Scoping</span>
            <?php echo getIconSvg('arrow-right', 'w-3 h-3'); ?>
          </button>
        </div>
      </div>

      <!-- Solution 3: E-Commerce Conversion & Payment Rails -->
      <div class="bg-white border border-canvas-border rounded-xl p-6 sm:p-7 shadow-card hover:border-electric-300 hover:shadow-card-hover transition-all duration-200 flex flex-col justify-between stripe-card-interactive reveal-on-scroll reveal-delay-150">
        <div class="space-y-3.5">
          <div class="flex items-center justify-between">
            <span class="w-9 h-9 rounded-lg bg-emerald-50 text-emerald-600 flex items-center justify-center font-bold">
              <?php echo getIconSvg('globe', 'w-4 h-4'); ?>
            </span>
            <span class="text-xs font-semibold uppercase tracking-wider text-emerald-700 bg-emerald-50 px-2 py-0.5 rounded border border-emerald-200">
              Commerce &amp; Payment Rails
            </span>
          </div>

          <h3 class="text-xl sm:text-2xl font-bold text-navy-800">Eliminating Cart Abandonment &amp; Stock Sync Errors</h3>
          
          <div class="space-y-2 text-xs sm:text-sm">
            <div class="p-2.5 bg-red-50/60 rounded-lg border border-red-100 text-red-900">
              <strong class="font-semibold block text-red-800">The Problem:</strong>
              Clunky multi-step checkout processes causing over 70% mobile drop-off, coupled with inventory mismatches between online stores and physical warehouses.
            </div>

            <div class="p-2.5 bg-emerald-50/60 rounded-lg border border-emerald-100 text-emerald-900">
              <strong class="font-semibold block text-emerald-800">Yukt Engineering Solution:</strong>
              Headless Shopify Plus &amp; custom stores with 1-click UPI &amp; Razorpay payment rails, automated warehouse webhook syncing (Shiprocket), and real-time inventory locks.
            </div>
          </div>

          <div class="pt-1 flex flex-wrap items-center gap-3 text-xs font-medium text-navy-500">
            <span class="flex items-center gap-1">
              <span class="w-1.5 h-1.5 rounded-full bg-emerald-500"></span> 1-Click UPI Checkout
            </span>
            <span class="flex items-center gap-1">
              <span class="w-1.5 h-1.5 rounded-full bg-electric-500"></span> Zero Overselling
            </span>
          </div>
        </div>

        <div class="pt-4 border-t border-canvas-border mt-5 flex items-center justify-between">
          <a href="<?php echo getWhatsAppUrl('Hi Yukt IT Solutions, I want to discuss scaling our e-commerce platform and Indian payment rails.'); ?>" target="_blank" rel="noopener noreferrer" class="text-xs font-semibold text-emerald-700 hover:text-emerald-800 flex items-center gap-1.5">
            <?php echo getIconSvg('whatsapp', 'w-4 h-4 text-emerald-600'); ?>
            <span>Discuss on WhatsApp</span>
          </a>
          <button type="button" class="btn-primary py-2 px-3.5 text-xs open-quote-modal-btn" data-service="E-Commerce Solutions">
            <span>Request Scoping</span>
            <?php echo getIconSvg('arrow-right', 'w-3 h-3'); ?>
          </button>
        </div>
      </div>

      <!-- Solution 4: B2B Growth & Server-Side Attribution -->
      <div class="bg-white border border-canvas-border rounded-xl p-6 sm:p-7 shadow-card hover:border-electric-300 hover:shadow-card-hover transition-all duration-200 flex flex-col justify-between stripe-card-interactive reveal-on-scroll reveal-delay-200">
        <div class="space-y-3.5">
          <div class="flex items-center justify-between">
            <span class="w-9 h-9 rounded-lg bg-slate-100 text-navy-700 flex items-center justify-center font-bold">
              <?php echo getIconSvg('trending-up', 'w-4 h-4'); ?>
            </span>
            <span class="text-xs font-semibold uppercase tracking-wider text-slate-700 bg-slate-100 px-2 py-0.5 rounded border border-slate-200">
              Growth &amp; Attribution
            </span>
          </div>

          <h3 class="text-xl sm:text-2xl font-bold text-navy-800">Ending Wasted Ad Spend with Server-Side Attribution</h3>
          
          <div class="space-y-2 text-xs sm:text-sm">
            <div class="p-2.5 bg-red-50/60 rounded-lg border border-red-100 text-red-900">
              <strong class="font-semibold block text-red-800">The Problem:</strong>
              Browser privacy updates and ad-blockers blind standard analytics by 30%+, while agencies burn budgets on unvetted, spam lead inquiries.
            </div>

            <div class="p-2.5 bg-emerald-50/60 rounded-lg border border-emerald-100 text-emerald-900">
              <strong class="font-semibold block text-emerald-800">Yukt Engineering Solution:</strong>
              Server-Side Conversions API (Meta CAPI &amp; GA4 Server GTM), precision B2B performance marketing (Google &amp; LinkedIn ABM), and instant WhatsApp lead qualification.
            </div>
          </div>

          <div class="pt-1 flex flex-wrap items-center gap-3 text-xs font-medium text-navy-500">
            <span class="flex items-center gap-1">
              <span class="w-1.5 h-1.5 rounded-full bg-emerald-500"></span> 100% Attribution Recovery
            </span>
            <span class="flex items-center gap-1">
              <span class="w-1.5 h-1.5 rounded-full bg-electric-500"></span> Verified Leads Only
            </span>
          </div>
        </div>

        <div class="pt-4 border-t border-canvas-border mt-5 flex items-center justify-between">
          <a href="<?php echo getWhatsAppUrl('Hi Yukt IT Solutions, I would like to discuss full-funnel digital marketing and server-side tracking.'); ?>" target="_blank" rel="noopener noreferrer" class="text-xs font-semibold text-emerald-700 hover:text-emerald-800 flex items-center gap-1.5">
            <?php echo getIconSvg('whatsapp', 'w-4 h-4 text-emerald-600'); ?>
            <span>Discuss on WhatsApp</span>
          </a>
          <button type="button" class="btn-primary py-2 px-3.5 text-xs open-quote-modal-btn" data-service="Digital Marketing">
            <span>Request Scoping</span>
            <?php echo getIconSvg('arrow-right', 'w-3 h-3'); ?>
          </button>
        </div>
      </div>

    </div>

  </div>
</section>


<!-- ==========================================================================
     PORTFOLIO & ARCHITECTURAL CASE STUDIES SECTION (COMPACT & ANIMATED)
========================================================================== -->
<section id="portfolio" class="section-padding bg-white border-b border-canvas-border scroll-mt-16">
  <div class="container-custom">
    
    <!-- Section Header -->
    <?php echo renderSectionHeader(
      'Selected Portfolio',
      'Real System Implementations & Blueprints',
      'Examine concrete architectural deliverables and technical case studies engineered by Yukt across enterprise SaaS, e-commerce, AI assistants, and multi-location platforms.',
      true
    ); ?>

    <!-- Case Studies / Blueprint Grid (Clean 3-Column Responsive Grid) -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5 lg:gap-6">
      <?php 
      $delays = ['reveal-delay-50', 'reveal-delay-100', 'reveal-delay-150', 'reveal-delay-200', 'reveal-delay-250', 'reveal-delay-300'];
      $idx = 0;
      foreach ($CASE_STUDIES as $case): 
        $delayClass = $delays[$idx % 6];
        $idx++;
      ?>
        <article class="bg-white border border-canvas-border rounded-xl p-5 sm:p-6.5 flex flex-col justify-between hover:border-electric-300 hover:shadow-card-hover hover:-translate-y-1 transition-all duration-200 stripe-card-interactive reveal-on-scroll <?php echo $delayClass; ?>">
          <div>
            <!-- Blueprint Category & Label Tag -->
            <div class="flex items-center justify-between mb-3">
              <span class="text-xs font-semibold text-electric-700 bg-electric-50 px-2 py-0.5 rounded-full border border-electric-200">
                <?php echo htmlspecialchars($case['badge'] ?? $case['category']); ?>
              </span>
              <span class="text-xs text-navy-500 font-medium"><?php echo htmlspecialchars($case['category']); ?></span>
            </div>

            <h3 class="text-lg sm:text-xl font-bold text-navy-800">
              <a href="<?php echo htmlspecialchars($case['url']); ?>" class="hover:text-electric-600 transition-colors">
                <?php echo htmlspecialchars($case['title']); ?>
              </a>
            </h3>

            <p class="text-sm text-navy-500 mt-2 leading-relaxed font-normal">
              <?php echo htmlspecialchars($case['summary'] ?? $case['desc']); ?>
            </p>

            <!-- Tech Stack Tags -->
            <div class="pt-4">
              <div class="text-[11px] font-semibold uppercase tracking-wider text-navy-500 mb-1.5">Architectural Stack</div>
              <div class="flex flex-wrap gap-1.5">
                <?php foreach ($case['stack'] as $tech): ?>
                  <span class="text-[11px] font-mono px-2 py-0.5 rounded bg-canvas-subtle text-navy-700 border border-canvas-border">
                    <?php echo htmlspecialchars($tech); ?>
                  </span>
                <?php endforeach; ?>
              </div>
            </div>
          </div>

          <!-- Bottom Action Buttons -->
          <div class="pt-4 border-t border-canvas-border mt-5 flex items-center justify-between">
            <a href="<?php echo htmlspecialchars($case['url']); ?>" class="text-xs font-semibold text-electric-600 hover:text-electric-700 flex items-center gap-1">
              <span>View Case Study</span>
              <?php echo getIconSvg('arrow-right', 'w-3 h-3'); ?>
            </a>
            
            <a href="<?php echo getWhatsAppUrl('Hi Yukt IT Solutions, I reviewed the ' . $case['title'] . ' case study and would like to scope a similar project.'); ?>" target="_blank" rel="noopener noreferrer" class="text-xs font-semibold text-emerald-700 hover:text-emerald-800 flex items-center gap-1">
              <?php echo getIconSvg('whatsapp', 'w-3.5 h-3.5 text-emerald-600'); ?>
              <span>WhatsApp</span>
            </a>
          </div>
        </article>
      <?php endforeach; ?>
    </div>

    <!-- View All Work CTA (Compact) -->
    <div class="text-center pt-6 sm:pt-8">
      <a href="portfolio.php" class="btn-secondary px-6 py-2.5">
        <span>Explore All Portfolio Case Studies &rarr;</span>
      </a>
    </div>

  </div>
</section>


<!-- ==========================================================================
     CLEAN PROCESS SECTION (COMPACT & ANIMATED)
========================================================================== -->
<section class="section-padding bg-canvas-subtle border-b border-canvas-border">
  <div class="container-custom">
    
    <!-- Section Header -->
    <?php echo renderSectionHeader(
      'Our Delivery Framework',
      'A Disciplined 4-Stage Engineering Process',
      'Clear milestones, rapid two-week sprint cadences, and continuous staging visibility from initial scoping to production launch.',
      true
    ); ?>

    <!-- 4-Stage Connected Process Flow -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 sm:gap-6">
      
      <!-- Stage 01: Discover -->
      <div class="bg-white border border-canvas-border rounded-xl p-5 sm:p-6 relative hover:border-electric-300 hover:shadow-card-hover hover:-translate-y-1 transition-all duration-200 stripe-card-interactive reveal-on-scroll reveal-delay-50 flex flex-col justify-between">
        <div>
          <div class="flex items-center justify-between mb-3">
            <span class="text-2xl sm:text-3xl font-extrabold text-electric-600 font-mono">01</span>
            <span class="text-xs uppercase tracking-wider font-semibold text-navy-500">Stage One</span>
          </div>
          <h3 class="text-base sm:text-lg font-bold text-navy-800">Discover</h3>
          <p class="text-sm text-navy-500 mt-1.5 leading-relaxed font-normal">
            Comprehensive requirements audit, technical feasibility assessment, architecture roadmap, and sprint backlog definition.
          </p>
        </div>
        <div class="mt-4 pt-2.5 border-t border-canvas-border text-xs text-navy-700 font-medium">
          Deliverable: Scope &amp; Timeline
        </div>
      </div>

      <!-- Stage 02: Design -->
      <div class="bg-white border border-canvas-border rounded-xl p-5 sm:p-6 relative hover:border-brandOrange-300 hover:shadow-card-hover hover:-translate-y-1 transition-all duration-200 stripe-card-interactive reveal-on-scroll reveal-delay-100 flex flex-col justify-between">
        <div>
          <div class="flex items-center justify-between mb-3">
            <span class="text-2xl sm:text-3xl font-extrabold text-brandOrange-500 font-mono">02</span>
            <span class="text-xs uppercase tracking-wider font-semibold text-navy-500">Stage Two</span>
          </div>
          <h3 class="text-base sm:text-lg font-bold text-navy-800">Design</h3>
          <p class="text-sm text-navy-500 mt-1.5 leading-relaxed font-normal">
            Human-centric UI/UX wireframes, Figma interactive component systems, responsive design specs, and database entity schemas.
          </p>
        </div>
        <div class="mt-4 pt-2.5 border-t border-canvas-border text-xs text-navy-700 font-medium">
          Deliverable: Prototype &amp; Design System
        </div>
      </div>

      <!-- Stage 03: Develop -->
      <div class="bg-white border border-canvas-border rounded-xl p-5 sm:p-6 relative hover:border-electric-300 hover:shadow-card-hover hover:-translate-y-1 transition-all duration-200 stripe-card-interactive reveal-on-scroll reveal-delay-150 flex flex-col justify-between">
        <div>
          <div class="flex items-center justify-between mb-3">
            <span class="text-2xl sm:text-3xl font-extrabold text-electric-600 font-mono">03</span>
            <span class="text-xs uppercase tracking-wider font-semibold text-navy-500">Stage Three</span>
          </div>
          <h3 class="text-base sm:text-lg font-bold text-navy-800">Develop</h3>
          <p class="text-sm text-navy-500 mt-1.5 leading-relaxed font-normal">
            Agile bi-weekly sprint engineering, clean code implementation, automated testing, staging URL deployment, and peer code reviews.
          </p>
        </div>
        <div class="mt-4 pt-2.5 border-t border-canvas-border text-xs text-navy-700 font-medium">
          Deliverable: Staging Builds &amp; Reviews
        </div>
      </div>

      <!-- Stage 04: Launch & Scale -->
      <div class="bg-white border border-canvas-border rounded-xl p-5 sm:p-6 relative hover:border-emerald-300 hover:shadow-card-hover hover:-translate-y-1 transition-all duration-200 stripe-card-interactive reveal-on-scroll reveal-delay-200 flex flex-col justify-between">
        <div>
          <div class="flex items-center justify-between mb-3">
            <span class="text-2xl sm:text-3xl font-extrabold text-emerald-600 font-mono">04</span>
            <span class="text-xs uppercase tracking-wider font-semibold text-navy-500">Stage Four</span>
          </div>
          <h3 class="text-base sm:text-lg font-bold text-navy-800">Launch &amp; Scale</h3>
          <p class="text-sm text-navy-500 mt-1.5 leading-relaxed font-normal">
            Zero-downtime production deployment, Core Web Vitals audit, security hardening, complete IP handover, and ongoing support.
          </p>
        </div>
        <div class="mt-4 pt-2.5 border-t border-canvas-border text-xs text-navy-700 font-medium">
          Deliverable: Production Handover
        </div>
      </div>

    </div>

  </div>
</section>


<!-- ==========================================================================
     INTERACTIVE PROJECT COST & TIMELINE CALCULATOR (COMPACT)
========================================================================== -->
<section class="section-padding bg-white border-b border-canvas-border">
  <div class="container-custom">
    
    <div class="bg-canvas-subtle border border-canvas-border rounded-xl p-6 sm:p-8 shadow-card max-w-4xl mx-auto reveal-on-scroll">
      <div class="text-center max-w-2xl mx-auto mb-6 sm:mb-8">
        <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-semibold uppercase tracking-wider bg-electric-50 text-electric-700 border border-electric-200 mb-2">
          <?php echo getIconSvg('sparkles', 'w-3.5 h-3.5 text-brandOrange-500'); ?> Transparent Scoping Tool
        </span>
        <h2 class="text-2xl sm:text-3xl font-bold text-navy-800 tracking-tight">Interactive Project Scope Estimator</h2>
        <p class="text-sm sm:text-base text-navy-500 mt-1.5">Explore indicative timeline and delivery phases based on your service focus.</p>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-3 gap-3.5 mb-6">
        <label class="cursor-pointer">
          <input type="radio" name="estimatorType" value="web" checked class="peer sr-only">
          <div class="p-3.5 rounded-lg border border-canvas-border bg-white peer-checked:border-electric-600 peer-checked:bg-electric-50/50 transition-all text-center">
            <div class="text-sm font-bold text-navy-800">Modern Web Platform</div>
            <div class="text-xs text-navy-500 mt-0.5">Next.js / React / Laravel</div>
          </div>
        </label>

        <label class="cursor-pointer">
          <input type="radio" name="estimatorType" value="software" class="peer sr-only">
          <div class="p-3.5 rounded-lg border border-canvas-border bg-white peer-checked:border-electric-600 peer-checked:bg-electric-50/50 transition-all text-center">
            <div class="text-sm font-bold text-navy-800">Custom SaaS / ERP</div>
            <div class="text-xs text-navy-500 mt-0.5">Multi-tenant Cloud System</div>
          </div>
        </label>

        <label class="cursor-pointer">
          <input type="radio" name="estimatorType" value="ai" class="peer sr-only">
          <div class="p-3.5 rounded-lg border border-canvas-border bg-white peer-checked:border-electric-600 peer-checked:bg-electric-50/50 transition-all text-center">
            <div class="text-sm font-bold text-navy-800">AI Automation Pod</div>
            <div class="text-xs text-navy-500 mt-0.5">LLM Workflows &amp; Agents</div>
          </div>
        </label>
      </div>

      <!-- Scope Preview Card -->
      <div class="p-4 sm:p-5 bg-white rounded-xl border border-canvas-border flex flex-col sm:flex-row items-center justify-between gap-4">
        <div>
          <div class="text-xs font-semibold uppercase tracking-wider text-navy-500">Indicative Timeline</div>
          <div class="text-lg sm:text-xl font-bold text-navy-800 mt-0.5 flex items-center gap-2">
            <span id="estTimeline">3 to 6 Weeks</span>
            <span class="text-xs font-normal text-navy-500">(2 – 4 Agile Sprints)</span>
          </div>
          <div class="text-xs text-navy-500 mt-0.5">Includes Discovery, Figma Design System, Staging Builds &amp; IP Handover.</div>
        </div>

        <button type="button" class="btn-primary flex-shrink-0 open-quote-modal-btn" data-service="Website Design & Development">
          <span>Get Official Written Proposal</span>
          <?php echo getIconSvg('arrow-right', 'w-4 h-4'); ?>
        </button>
      </div>
    </div>

  </div>
</section>


<!-- ==========================================================================
     FINAL CTA & DIRECT CONTACT SECTION (COMPACT & ANIMATED)
========================================================================== -->
<section id="contact" class="section-padding bg-canvas-subtle scroll-mt-16">
  <div class="container-custom">
    
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-10 items-start">
      
      <!-- Left Column: Contact Intro & Direct Details (5 Cols) -->
      <div class="lg:col-span-5 space-y-4 sm:space-y-5 reveal-on-scroll">
        <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full text-xs font-semibold uppercase tracking-wider bg-electric-50 text-electric-700 border border-electric-200">
          <span class="w-1.5 h-1.5 rounded-full bg-electric-600"></span> Start Your Project
        </div>

        <h2 class="text-3xl sm:text-4xl font-bold text-navy-800 tracking-tight leading-tight">
          Let’s build something exceptional together.
        </h2>

        <p class="text-base text-navy-500 leading-relaxed font-normal">
          Whether you are launching a greenfield digital product, automating workflows with AI, or scaling your enterprise software, our team is ready to map your technical roadmap.
        </p>

        <!-- Direct Contact Info Cards (Compact) -->
        <div class="space-y-3 pt-1">
          
          <div class="flex items-start gap-3 p-3.5 rounded-xl bg-white border border-canvas-border shadow-subtle stripe-card-interactive">
            <div class="w-9 h-9 rounded-lg bg-electric-50 text-electric-600 border border-electric-200 flex items-center justify-center flex-shrink-0 mt-0.5">
              <?php echo getIconSvg('mail', 'w-4 h-4'); ?>
            </div>
            <div>
              <div class="text-xs font-semibold uppercase tracking-wider text-navy-500">Official Inquiries</div>
              <a href="mailto:<?php echo EMAIL_PRIMARY; ?>" class="text-sm font-semibold text-navy-800 hover:text-electric-600 transition-colors"><?php echo EMAIL_PRIMARY; ?></a>
              <div class="text-xs text-navy-500">Response within 24 business hours</div>
            </div>
          </div>

          <div class="flex items-start gap-3 p-3.5 rounded-xl bg-white border border-canvas-border shadow-subtle stripe-card-interactive">
            <div class="w-9 h-9 rounded-lg bg-emerald-50 text-emerald-600 border border-emerald-200 flex items-center justify-center flex-shrink-0 mt-0.5">
              <?php echo getIconSvg('whatsapp', 'w-4 h-4'); ?>
            </div>
            <div>
              <div class="text-xs font-semibold uppercase tracking-wider text-navy-500">Call / WhatsApp Support</div>
              <a href="<?php echo getWhatsAppUrl('Hi Yukt IT Solutions, I would like to discuss a project.'); ?>" target="_blank" rel="noopener noreferrer" class="text-sm font-semibold text-navy-800 hover:text-emerald-600 transition-colors"><?php echo WHATSAPP_FORMATTED; ?></a>
              <div class="text-xs text-navy-500"><?php echo WORKING_HOURS; ?> &bull; <a href="<?php echo getWhatsAppUrl('Hi Yukt IT Solutions, I would like to discuss a project.'); ?>" target="_blank" rel="noopener noreferrer" class="text-emerald-700 font-semibold hover:underline">Chat on WhatsApp &rarr;</a></div>
            </div>
          </div>

          <div class="flex items-start gap-3 p-3.5 rounded-xl bg-white border border-canvas-border shadow-subtle stripe-card-interactive">
            <div class="w-9 h-9 rounded-lg bg-navy-100 text-navy-800 border border-navy-200 flex items-center justify-center flex-shrink-0 mt-0.5">
              <?php echo getIconSvg('map-pin', 'w-4 h-4'); ?>
            </div>
            <div>
              <div class="text-xs font-semibold uppercase tracking-wider text-navy-500">Development Hubs</div>
              <div class="text-sm font-semibold text-navy-800"><?php echo OFFICE_PRIMARY; ?></div>
              <div class="text-xs text-navy-500"><?php echo OFFICE_SECONDARY; ?></div>
            </div>
          </div>

        </div>
      </div>

      <!-- Right Column: Direct Inquiry Form (7 Cols) (Compact) -->
      <div class="lg:col-span-7 reveal-on-scroll reveal-delay-100">
        <div class="bg-white border border-canvas-border rounded-xl p-6 sm:p-8 shadow-card">
          <div class="mb-5">
            <h3 class="text-xl sm:text-2xl font-bold text-navy-800">Send an Inquiry</h3>
            <p class="text-xs sm:text-sm text-navy-500 mt-1">Fill out the form below. A senior solutions specialist will review and respond directly.</p>
          </div>

          <form id="homeContactForm" action="api/contact-submit.php" method="POST" class="space-y-3.5">
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-3.5">
              <div>
                <label for="fullName" class="form-label">Full Name <span class="text-brandOrange-600">*</span></label>
                <input type="text" id="fullName" name="full_name" required placeholder="e.g. Aditi Rao" class="form-input">
              </div>
              <div>
                <label for="contactEmail" class="form-label">Email Address <span class="text-brandOrange-600">*</span></label>
                <input type="email" id="contactEmail" name="email" required placeholder="aditi@company.com" class="form-input">
              </div>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-3.5">
              <div>
                <label for="contactPhone" class="form-label">Phone / WhatsApp</label>
                <input type="tel" id="contactPhone" name="phone" placeholder="+91 98765 43210" class="form-input">
              </div>
              <div>
                <label for="contactService" class="form-label">Service Needed <span class="text-brandOrange-600">*</span></label>
                <select id="contactService" name="service_needed" required class="form-select">
                  <option value="">Select Service Area</option>
                  <option value="Website Design & Development">Website Design &amp; Development</option>
                  <option value="Software & Applications">Software &amp; Applications</option>
                  <option value="AI & Automation">AI &amp; Automation</option>
                  <option value="Digital Marketing">Digital Marketing</option>
                  <option value="AI-Powered Marketing">AI-Powered Marketing</option>
                  <option value="Branding & Creative">Branding &amp; Creative</option>
                  <option value="E-Commerce Solutions">E-Commerce Solutions</option>
                  <option value="IT Consulting & Training">IT Consulting &amp; Training</option>
                  <option value="Full Digital Transformation">Full Digital Suite / Multiple</option>
                </select>
              </div>
            </div>

            <div>
              <label for="contactBudget" class="form-label">Estimated Budget (Optional)</label>
              <select id="contactBudget" name="budget" class="form-select">
                <option value="Not Disclosed">Select Indicative Range</option>
                <option value="₹50,000 – ₹1,50,000">₹50,000 – ₹1,50,000</option>
                <option value="₹1,50,000 – ₹5,00,000">₹1,50,000 – ₹5,00,000</option>
                <option value="₹5,00,000 – ₹15,00,000">₹5,00,000 – ₹15,00,000</option>
                <option value="₹15,00,000+ (Enterprise)">₹15,00,000+ (Enterprise Architecture)</option>
              </select>
            </div>

            <div>
              <label for="contactMessage" class="form-label">Tell Us About Your Project <span class="text-brandOrange-600">*</span></label>
              <textarea id="contactMessage" name="message" rows="3" required placeholder="Share your objectives, current challenges, or technical requirements..." class="form-textarea"></textarea>
            </div>

            <!-- AJAX Status Feedback Container -->
            <div id="homeContactFeedback" class="hidden text-sm p-3 rounded-btn"></div>

            <div class="pt-1 flex flex-col sm:flex-row items-center justify-between gap-3">
              <span class="text-xs text-navy-500 flex items-center gap-1.5">
                <?php echo getIconSvg('lock', 'w-3.5 h-3.5 text-emerald-600'); ?>
                Strict Non-Disclosure Protected
              </span>
              <button type="submit" id="homeContactSubmitBtn" class="btn-primary w-full sm:w-auto px-6 py-2.5">
                <span>Submit Inquiry</span>
                <?php echo getIconSvg('arrow-right', 'w-4 h-4'); ?>
              </button>
            </div>

            <div class="pt-1 text-center sm:text-right">
              <a href="<?php echo getWhatsAppUrl('Hi Yukt IT Solutions, I would like to submit a project inquiry.'); ?>" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-1.5 text-xs font-medium text-emerald-700 hover:text-emerald-800 transition-colors">
                <?php echo getIconSvg('whatsapp', 'w-3.5 h-3.5 text-emerald-600'); ?>
                <span>Prefer instant messaging? Connect on WhatsApp (+91 72176 45059) &rarr;</span>
              </a>
            </div>
          </form>
        </div>
      </div>

    </div>

  </div>
</section>

<!-- Lightweight Interactive Script for Scoping Radio Buttons -->
<script>
document.querySelectorAll('input[name="estimatorType"]').forEach(radio => {
  radio.addEventListener('change', (e) => {
    const val = e.target.value;
    const est = document.getElementById('estTimeline');
    if (!est) return;
    if (val === 'web') {
      est.textContent = '3 to 6 Weeks';
    } else if (val === 'software') {
      est.textContent = '8 to 14 Weeks';
    } else if (val === 'ai') {
      est.textContent = '4 to 8 Weeks';
    }
  });
});
</script>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
