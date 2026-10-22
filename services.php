<?php
$activePage = 'services';
$pageTitle = 'Services & Digital Capabilities — YUKT IT SOLUTIONS';
$pageDesc = 'Explore full-cycle technology and digital services by YUKT IT SOLUTIONS: Website Development, Custom Software, AI & Automation, Digital Marketing, AI Marketing, Branding, E-Commerce, and IT Consulting.';

require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/components/section-header.php';
require_once __DIR__ . '/includes/components/badge.php';
?>

<!-- ==========================================================================
     SERVICES OVERVIEW HERO (FUTURISTIC 3D BRAND THEME)
========================================================================== -->
<section class="relative pt-12 pb-14 sm:pt-16 sm:pb-20 lg:pt-20 lg:pb-24 bg-navy-950 bg-grid-dark text-white overflow-hidden border-b border-white/10">
  <div class="absolute top-1/4 left-1/4 w-[500px] h-[500px] bg-electric-500/15 rounded-full blur-[130px] pointer-events-none"></div>
  <div class="absolute bottom-10 right-10 w-[400px] h-[400px] bg-yukt-orange/15 rounded-full blur-[130px] pointer-events-none"></div>

  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-10 relative z-10">
    <div class="max-w-3xl space-y-5 reveal-up">
      <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-white/[0.05] border border-white/10 text-electric-400 font-mono text-xs uppercase tracking-widest">
        <span class="w-2 h-2 rounded-full bg-electric-400 animate-ping"></span>
        <span>Full-Cycle Digital Engineering</span>
      </div>
      <h1 class="font-display font-bold text-4xl sm:text-5xl lg:text-6xl text-white tracking-tight leading-[1.1]">
        Disciplined Capabilities for Growing <span class="text-gradient-electric">Enterprises.</span>
      </h1>
      <p class="text-base sm:text-lg text-slate-300 leading-relaxed font-normal">
        From sub-second web platforms and multi-tenant SaaS architectures to autonomous AI workflow agents and performance marketing, we engineer measurable business impact across 8 focused disciplines.
      </p>

      <!-- Quick Category Jump Navigation -->
      <div class="pt-4 border-t border-white/10">
        <div class="text-xs font-mono uppercase tracking-wider text-slate-400 mb-2.5">Jump to Capability</div>
        <div class="flex flex-wrap gap-2">
          <?php foreach ($SERVICES as $s): ?>
            <a href="#<?php echo $s['id']; ?>" class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-xl bg-white/[0.06] hover:bg-white/10 text-xs font-medium text-slate-200 hover:text-white border border-white/10 transition-all">
              <span class="w-1.5 h-1.5 rounded-full <?php echo ($s['accent'] === 'orange') ? 'bg-yukt-orange' : 'bg-electric-400'; ?>"></span>
              <span><?php echo htmlspecialchars($s['short']); ?></span>
            </a>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ==========================================================================
     CORE SERVICES DIRECTORY (ARCHITECTURAL CARDS)
========================================================================== -->
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-10 py-16 sm:py-20 space-y-8 sm:space-y-10">

  <?php 
  $serviceNum = 1;
  foreach ($SERVICES as $serviceKey => $service): 
  ?>
    <section id="<?php echo $service['id']; ?>" class="scroll-mt-28 bg-white border border-slate-200/90 rounded-3xl p-6 sm:p-9 shadow-xl hover:border-electric-500/40 hover:shadow-2xl transition-all duration-300 reveal-up">
      
      <!-- Category Header Row -->
      <div class="flex flex-col lg:flex-row lg:items-start lg:justify-between gap-5 pb-6 border-b border-slate-100">
        <div class="flex items-start gap-4">
          <div class="w-14 h-14 rounded-2xl <?php echo ($service['accent'] === 'orange') ? 'bg-yukt-orange/15 text-yukt-orange border border-yukt-orange/30' : 'bg-electric-500/15 text-electric-600 border border-electric-500/30'; ?> flex items-center justify-center flex-shrink-0 mt-0.5">
            <i data-lucide="<?php echo $service['icon']; ?>" class="w-7 h-7"></i>
          </div>
          <div>
            <div class="flex items-center gap-3 mb-1.5">
              <span class="text-xs font-mono font-bold text-slate-400">0<?php echo $serviceNum++; ?></span>
              <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-mono font-medium <?php echo ($service['accent'] === 'orange') ? 'bg-yukt-orange/10 text-yukt-orangeDark border border-yukt-orange/20' : 'bg-electric-500/10 text-electric-700 border border-electric-500/20'; ?>">
                <?php echo htmlspecialchars($service['badge']); ?>
              </span>
            </div>
            <h2 class="font-display font-bold text-2xl sm:text-3xl text-slate-900 tracking-tight">
              <a href="<?php echo $service['url']; ?>" class="hover:text-electric-600 transition-colors">
                <?php echo htmlspecialchars($service['title']); ?>
              </a>
            </h2>
            <p class="text-xs sm:text-sm font-medium text-slate-500 mt-1"><?php echo htmlspecialchars($service['tagline']); ?></p>
          </div>
        </div>

        <!-- Quick Action Buttons -->
        <div class="flex items-center gap-2.5 flex-shrink-0">
          <a href="<?php echo getWhatsAppUrl('Hi YUKT IT SOLUTIONS, I would like to scope a project for ' . $service['title'] . '.'); ?>" target="_blank" rel="noopener noreferrer" class="hidden sm:inline-flex items-center gap-2 px-3.5 py-2.5 text-xs font-semibold rounded-xl bg-emerald-50 text-emerald-700 border border-emerald-200 hover:bg-emerald-100 transition-colors">
            <i data-lucide="message-circle" class="w-4 h-4 text-emerald-600"></i>
            <span>WhatsApp</span>
          </a>
          <button type="button" class="px-4 py-2.5 rounded-xl font-display font-semibold text-xs text-white bg-electric-500 hover:bg-electric-400 transition-colors flex items-center gap-1.5 open-quote-modal-btn shadow-md shadow-electric-500/20" data-service="<?php echo htmlspecialchars($service['title']); ?>">
            <span>Get Quote</span>
            <i data-lucide="arrow-right" class="w-3.5 h-3.5"></i>
          </button>
          <a href="<?php echo $service['url']; ?>" class="px-4 py-2.5 rounded-xl font-display font-semibold text-xs text-slate-700 bg-slate-100 hover:bg-slate-200 border border-slate-200 transition-colors">
            <span>Explore Details</span>
          </a>
        </div>
      </div>

      <!-- Description -->
      <p class="text-base text-slate-600 mt-6 leading-relaxed max-w-4xl font-normal">
        <?php echo htmlspecialchars($service['desc']); ?>
      </p>

      <!-- Scope & Sub-offerings Grid -->
      <div class="mt-8 pt-6 border-t border-slate-100">
        <div class="text-xs font-mono uppercase tracking-wider text-slate-400 mb-3.5">Capabilities &amp; Specializations</div>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-3">
          <?php foreach ($service['features'] as $feature): ?>
            <div class="flex items-start gap-2.5 p-3 rounded-xl bg-slate-50 border border-slate-200 text-xs sm:text-sm text-slate-800">
              <span class="text-electric-600 flex-shrink-0 mt-0.5">
                <i data-lucide="check" class="w-4 h-4"></i>
              </span>
              <span><?php echo htmlspecialchars($feature); ?></span>
            </div>
          <?php endforeach; ?>
        </div>
      </div>

      <!-- Deliverables & Benefits Split -->
      <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mt-6 pt-6 border-t border-slate-100">
        
        <!-- Deliverables -->
        <div class="p-5 rounded-2xl bg-slate-50 border border-slate-200">
          <div class="text-xs font-mono uppercase tracking-wider text-slate-900 mb-3 flex items-center gap-1.5 font-bold">
            <i data-lucide="file-text" class="w-4 h-4 text-electric-600"></i>
            <span>What You Receive (Tangible Deliverables)</span>
          </div>
          <ul class="space-y-2 text-xs sm:text-sm text-slate-600">
            <?php foreach ($service['deliverables'] as $deliv): ?>
              <li class="flex items-start gap-2">
                <span class="text-electric-500 font-bold">&bull;</span>
                <span><?php echo htmlspecialchars($deliv); ?></span>
              </li>
            <?php endforeach; ?>
          </ul>
        </div>

        <!-- Benefits -->
        <div class="p-5 rounded-2xl bg-slate-50 border border-slate-200">
          <div class="text-xs font-mono uppercase tracking-wider text-slate-900 mb-3 flex items-center gap-1.5 font-bold">
            <i data-lucide="shield-check" class="w-4 h-4 text-emerald-600"></i>
            <span>Core Business Advantages</span>
          </div>
          <ul class="space-y-2 text-xs sm:text-sm text-slate-600">
            <?php foreach ($service['benefits'] as $benefit): ?>
              <li class="flex items-start gap-2">
                <span class="text-emerald-500 font-bold">&bull;</span>
                <span><?php echo htmlspecialchars($benefit); ?></span>
              </li>
            <?php endforeach; ?>
          </ul>
        </div>

      </div>

      <!-- Tech Stack & Direct Link Strip -->
      <div class="mt-6 pt-4 border-t border-slate-100 flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4">
        <div class="flex flex-wrap items-center gap-1.5">
          <span class="text-xs font-mono text-slate-400 mr-2">TECH STACK:</span>
          <?php foreach ($service['technologies'] as $tech): ?>
            <span class="text-xs font-mono px-2 py-0.5 rounded-md bg-slate-100 text-slate-700 border border-slate-200">
              <?php echo htmlspecialchars($tech); ?>
            </span>
          <?php endforeach; ?>
        </div>

        <a href="<?php echo $service['url']; ?>" class="inline-flex items-center gap-1.5 text-xs font-bold text-electric-600 hover:text-yukt-orange transition-colors">
          <span>Read Full <?php echo htmlspecialchars($service['title']); ?> Overview</span>
          <i data-lucide="arrow-right" class="w-3.5 h-3.5"></i>
        </a>
      </div>

    </section>
  <?php endforeach; ?>

</div>

<!-- ==========================================================================
     STANDARDIZED CONSISTENT BOTTOM CTA BANNER
========================================================================== -->
<section class="py-20 lg:py-28 bg-navy-950 text-white border-t border-white/10 relative overflow-hidden">
  <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[300px] bg-electric-500/15 rounded-full blur-[130px] pointer-events-none"></div>

  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-10 relative z-10">
    <div class="max-w-3xl mx-auto text-center space-y-6 reveal-up">
      <span class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-white/[0.05] border border-white/10 text-electric-400 font-mono text-xs uppercase tracking-widest">
        <span class="w-2 h-2 rounded-full bg-emerald-400"></span>
        <span>Transparent Scoping</span>
      </span>
      <h2 class="font-display font-bold text-3xl sm:text-4xl lg:text-5xl text-white tracking-tight">
        Ready to map your technical roadmap?
      </h2>
      <p class="text-base sm:text-lg text-slate-300 max-w-2xl mx-auto font-normal leading-relaxed">
        Speak directly with a senior solutions architect. We review your requirements and return a clear scope proposal with sprint milestones within 24 hours.
      </p>
      <div class="pt-4 flex flex-col sm:flex-row items-center justify-center gap-4">
        <button type="button" class="px-7 py-3.5 rounded-xl font-display font-semibold text-sm text-white bg-electric-500 hover:bg-electric-400 transition-all open-quote-modal-btn shadow-lg shadow-electric-500/25">
          <span>Get a Free Project Estimate</span>
        </button>
        <a href="<?php echo getWhatsAppUrl('Hi YUKT IT SOLUTIONS, I would like to inquire about your engineering services.'); ?>" target="_blank" rel="noopener noreferrer" class="px-7 py-3.5 rounded-xl font-display font-semibold text-sm text-white bg-gradient-to-r from-yukt-orange to-amber-600 hover:from-yukt-orangeLight hover:to-yukt-orange transition-all flex items-center justify-center gap-2 shadow-lg shadow-yukt-orange/25">
          <i data-lucide="message-circle" class="w-4 h-4"></i>
          <span>WhatsApp Scoping</span>
        </a>
      </div>
      <div class="pt-4 text-xs text-slate-400 flex items-center justify-center gap-6 font-mono">
        <span>&bull; Strict NDAs Honored</span>
        <span>&bull; 100% IP Transfer</span>
        <span>&bull; No Lock-In Contracts</span>
      </div>
    </div>
  </div>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
