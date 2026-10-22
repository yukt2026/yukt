<?php
$activePage = 'services';
$pageTitle = 'Services & Digital Capabilities — Yukt IT Solutions';
$pageDesc = 'Explore full-cycle technology and digital services by Yukt IT Solutions: Website Development, Custom Software, AI & Automation, Digital Marketing, AI Marketing, Branding, E-Commerce, and IT Consulting.';

require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/components/section-header.php';
require_once __DIR__ . '/includes/components/badge.php';
?>

<!-- ==========================================================================
     SERVICES OVERVIEW HERO
========================================================================== -->
<section class="bg-canvas-subtle border-b border-canvas-border py-16 lg:py-20 bg-grid-pattern relative">
  <div class="container-custom relative z-10">
    <div class="max-w-3xl">
      <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full text-xs font-semibold uppercase tracking-wider bg-electric-50 text-electric-700 border border-electric-200 mb-4">
        <span class="w-2 h-2 rounded-full bg-electric-600"></span> Full-Cycle Digital Engineering
      </div>
      <h1 class="text-4xl sm:text-5xl lg:text-6xl font-extrabold text-navy-900 tracking-tight leading-tight">
        Disciplined Capabilities for Growing Enterprises.
      </h1>
      <p class="text-lg text-navy-600 mt-4 leading-relaxed font-normal">
        From sub-second web platforms and multi-tenant SaaS architectures to autonomous AI workflow agents and performance marketing, we engineer measurable business impact across 8 focused disciplines.
      </p>

      <!-- Quick Category Jump Navigation -->
      <div class="pt-8">
        <div class="text-xs font-bold uppercase tracking-wider text-slate-400 mb-3">Jump to Capability</div>
        <div class="flex flex-wrap gap-2">
          <?php foreach ($SERVICES as $s): ?>
            <a href="#<?php echo $s['id']; ?>" class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-btn bg-white hover:bg-electric-50 text-xs font-semibold text-navy-800 hover:text-electric-600 border border-canvas-border hover:border-electric-200 shadow-xs transition-all">
              <span class="w-1.5 h-1.5 rounded-full <?php echo ($s['accent'] === 'orange') ? 'bg-brandOrange-500' : 'bg-electric-600'; ?>"></span>
              <span><?php echo htmlspecialchars($s['short']); ?></span>
            </a>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- ==========================================================================
     CORE SERVICES DIRECTORY (ALL 8 CATEGORIES)
========================================================================== -->
<div class="container-custom py-16 space-y-16">

  <?php 
  $serviceNum = 1;
  foreach ($SERVICES as $serviceKey => $service): 
  ?>
    <section id="<?php echo $service['id']; ?>" class="scroll-mt-28 bg-white border border-canvas-border rounded-xl p-7 sm:p-10 shadow-card hover:border-electric-300 hover:shadow-card-hover transition-all duration-200">
      
      <!-- Category Header Row -->
      <div class="flex flex-col lg:flex-row lg:items-start lg:justify-between gap-6 pb-8 border-b border-canvas-border">
        <div class="flex items-start gap-4">
          <div class="w-14 h-14 rounded-xl <?php echo ($service['accent'] === 'orange') ? 'bg-brandOrange-50 text-brandOrange-600' : 'bg-electric-50 text-electric-600'; ?> flex items-center justify-center flex-shrink-0">
            <?php echo getIconSvg($service['icon'], 'w-7 h-7'); ?>
          </div>
          <div>
            <div class="flex items-center gap-3 mb-1">
              <span class="text-xs font-mono font-bold text-slate-400">0<?php echo $serviceNum++; ?></span>
              <span class="inline-flex items-center px-2.5 py-0.5 rounded text-xs font-medium <?php echo ($service['accent'] === 'orange') ? 'bg-brandOrange-50 text-brandOrange-700 border border-brandOrange-200' : 'bg-electric-50 text-electric-700 border border-electric-200'; ?>">
                <?php echo htmlspecialchars($service['badge']); ?>
              </span>
            </div>
            <h2 class="text-2xl sm:text-3xl font-bold text-navy-800 tracking-tight">
              <a href="<?php echo $service['url']; ?>" class="hover:text-electric-600 transition-colors">
                <?php echo htmlspecialchars($service['title']); ?>
              </a>
            </h2>
            <p class="text-sm font-medium text-navy-500 mt-1"><?php echo htmlspecialchars($service['tagline']); ?></p>
          </div>
        </div>

        <!-- Quick Action Buttons -->
        <div class="flex items-center gap-3 flex-shrink-0">
          <button type="button" class="btn-primary open-quote-modal-btn" data-service="<?php echo htmlspecialchars($service['title']); ?>">
            <span>Get a Quote</span>
            <?php echo getIconSvg('arrow-right', 'w-4 h-4'); ?>
          </button>
          <a href="<?php echo $service['url']; ?>" class="btn-secondary">
            <span>Explore Details</span>
          </a>
        </div>
      </div>

      <!-- Description -->
      <p class="text-base text-navy-600 mt-6 leading-relaxed max-w-4xl font-normal">
        <?php echo htmlspecialchars($service['desc']); ?>
      </p>

      <!-- Scope & Sub-offerings Grid -->
      <div class="mt-8 pt-6 border-t border-canvas-border">
        <div class="text-xs font-bold uppercase tracking-wider text-slate-400 mb-3">Capabilities &amp; Specializations</div>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-3">
          <?php foreach ($service['features'] as $feature): ?>
            <div class="flex items-start gap-2 p-3 rounded-lg bg-canvas-subtle border border-canvas-border/80 text-xs sm:text-sm text-navy-800">
              <span class="text-electric-600 flex-shrink-0 mt-0.5">
                <?php echo getIconSvg('check', 'w-3.5 h-3.5'); ?>
              </span>
              <span><?php echo htmlspecialchars($feature); ?></span>
            </div>
          <?php endforeach; ?>
        </div>
      </div>

      <!-- Deliverables & Benefits Split -->
      <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mt-6 pt-6 border-t border-canvas-border">
        
        <!-- Deliverables -->
        <div class="p-5 rounded-lg bg-white border border-canvas-border">
          <div class="text-xs font-bold uppercase tracking-wider text-navy-900 mb-3 flex items-center gap-1.5">
            <?php echo getIconSvg('file-text', 'w-4 h-4 text-electric-600'); ?>
            <span>What You Receive (Tangible Deliverables)</span>
          </div>
          <ul class="space-y-2 text-xs sm:text-sm text-navy-600">
            <?php foreach ($service['deliverables'] as $deliv): ?>
              <li class="flex items-start gap-2">
                <span class="text-slate-400 mt-1">&bull;</span>
                <span><?php echo htmlspecialchars($deliv); ?></span>
              </li>
            <?php endforeach; ?>
          </ul>
        </div>

        <!-- Benefits -->
        <div class="p-5 rounded-lg bg-white border border-canvas-border">
          <div class="text-xs font-bold uppercase tracking-wider text-navy-900 mb-3 flex items-center gap-1.5">
            <?php echo getIconSvg('shield-check', 'w-4 h-4 text-emerald-600'); ?>
            <span>Core Business Advantages</span>
          </div>
          <ul class="space-y-2 text-xs sm:text-sm text-navy-600">
            <?php foreach ($service['benefits'] as $benefit): ?>
              <li class="flex items-start gap-2">
                <span class="text-slate-400 mt-1">&bull;</span>
                <span><?php echo htmlspecialchars($benefit); ?></span>
              </li>
            <?php endforeach; ?>
          </ul>
        </div>

      </div>

      <!-- Tech Stack & Direct Link Strip -->
      <div class="mt-6 pt-4 border-t border-canvas-border flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4">
        <div class="flex flex-wrap items-center gap-1.5">
          <span class="text-xs font-mono text-slate-400 mr-2">TECH STACK:</span>
          <?php foreach ($service['technologies'] as $tech): ?>
            <span class="text-xs font-mono px-2 py-0.5 rounded bg-canvas-muted text-navy-800 border border-canvas-border">
              <?php echo htmlspecialchars($tech); ?>
            </span>
          <?php endforeach; ?>
        </div>

        <a href="<?php echo $service['url']; ?>" class="inline-flex items-center gap-1.5 text-xs font-bold text-electric-600 hover:text-electric-700">
          <span>Read Full <?php echo htmlspecialchars($service['title']); ?> Overview</span>
          <?php echo getIconSvg('arrow-right', 'w-3.5 h-3.5'); ?>
        </a>
      </div>

    </section>
  <?php endforeach; ?>

</div>


<!-- ==========================================================================
     STANDARDIZED CONSISTENT BOTTOM CTA BANNER
========================================================================== -->
<section class="section-padding bg-navy-900 text-white border-t border-slate-800">
  <div class="container-custom">
    <div class="max-w-3xl mx-auto text-center space-y-6">
      <span class="inline-flex items-center gap-2 px-3 py-1 rounded-full text-xs font-semibold uppercase tracking-wider bg-navy-800 text-electric-400 border border-slate-700">
        <span class="w-2 h-2 rounded-full bg-emerald-400"></span> Transparent Scoping
      </span>
      <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-white tracking-tight">
        Ready to map your technical roadmap?
      </h2>
      <p class="text-base sm:text-lg text-slate-300 max-w-2xl mx-auto font-normal leading-relaxed">
        Speak directly with a senior solutions architect. We review your requirements and return a clear scope proposal with sprint milestones within 24 hours.
      </p>
      <div class="pt-4 flex flex-col sm:flex-row items-center justify-center gap-4">
        <button type="button" class="btn-primary-lg open-quote-modal-btn">
          <span>Get a Free Project Estimate</span>
          <?php echo getIconSvg('arrow-right', 'w-4 h-4'); ?>
        </button>
        <a href="<?php echo getWhatsAppUrl('Hi Yukt IT Solutions, I would like to inquire about your engineering services.'); ?>" target="_blank" rel="noopener noreferrer" class="btn-secondary-lg text-navy-800 bg-white hover:bg-slate-100 flex items-center justify-center gap-2">
          <?php echo getIconSvg('whatsapp', 'w-4 h-4 text-emerald-600'); ?>
          <span>WhatsApp Scoping</span>
        </a>
      </div>
      <div class="pt-4 text-xs text-slate-400 flex items-center justify-center gap-6">
        <span>&bull; Strict NDAs Honored</span>
        <span>&bull; 100% IP Transfer</span>
        <span>&bull; No Lock-In Contracts</span>
      </div>
    </div>
  </div>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
