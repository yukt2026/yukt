<?php
// ==========================================================================
// YUKT IT SOLUTIONS — Standardized Service Detail Page Template
// ==========================================================================

if (!isset($service) || empty($service)) {
    header('Location: services.php');
    exit;
}

$pageTitle = $pageTitle ?? ($service['title'] . ' Services — Yukt IT Solutions');
$pageDesc = $pageDesc ?? $service['desc'];
$activePage = 'services';

require_once __DIR__ . '/../header.php';
require_once __DIR__ . '/../components/section-header.php';
?>

<!-- ==========================================================================
     SERVICE DETAIL HERO & BREADCRUMBS (COMPACT & ANIMATED)
========================================================================== -->
<section class="stripe-ambient-canvas border-b border-canvas-border pt-10 pb-12 sm:pt-12 sm:pb-14 bg-grid-pattern relative">
  <div class="container-custom relative z-10">
    
    <!-- Breadcrumbs -->
    <nav class="flex items-center gap-2 text-xs text-slate-500 mb-6" aria-label="Breadcrumb">
      <a href="index.php" class="hover:text-electric-600 transition-colors">Home</a>
      <span>/</span>
      <a href="services.php" class="hover:text-electric-600 transition-colors">Services</a>
      <span>/</span>
      <span class="text-navy-900 font-semibold"><?php echo htmlspecialchars($service['title']); ?></span>
    </nav>

    <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 items-center">
      
      <!-- Left Column: Title & CTAs (7 Cols) -->
      <div class="lg:col-span-8 space-y-5">
        <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full text-xs font-semibold uppercase tracking-wider <?php echo ($service['accent'] === 'orange') ? 'bg-brandOrange-50 text-brandOrange-700 border border-brandOrange-200' : 'bg-electric-50 text-electric-700 border border-electric-200'; ?>">
          <span class="w-2 h-2 rounded-full <?php echo ($service['accent'] === 'orange') ? 'bg-brandOrange-600' : 'bg-electric-600'; ?>"></span>
          <span><?php echo htmlspecialchars($service['badge']); ?></span>
        </div>

        <h1 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-navy-900 tracking-tight leading-tight">
          <?php echo htmlspecialchars($service['title']); ?>
        </h1>

        <p class="text-lg text-electric-700 font-medium">
          <?php echo htmlspecialchars($service['tagline']); ?>
        </p>

        <p class="text-base text-navy-600 leading-relaxed max-w-2xl font-normal">
          <?php echo htmlspecialchars($service['desc']); ?>
        </p>

        <!-- CTA Buttons -->
        <div class="pt-3 flex flex-col sm:flex-row items-stretch sm:items-center gap-4">
          <button type="button" class="btn-primary-lg open-quote-modal-btn" data-service="<?php echo htmlspecialchars($service['title']); ?>">
            <span>Get a Quote for <?php echo htmlspecialchars($service['short']); ?></span>
            <?php echo getIconSvg('arrow-right', 'w-4 h-4'); ?>
          </button>
          <a href="<?php echo getWhatsAppUrl("Hi Yukt IT Solutions, I am interested in your {$service['title']} services."); ?>" target="_blank" rel="noopener noreferrer" class="btn-secondary-lg flex items-center gap-2">
            <?php echo getIconSvg('whatsapp', 'w-4 h-4 text-emerald-600'); ?>
            <span>WhatsApp Scoping</span>
          </a>
        </div>

        <!-- Assurance Pills -->
        <div class="pt-3 flex flex-wrap items-center gap-y-2 gap-x-6 text-xs text-slate-500">
          <span class="flex items-center gap-1.5 font-medium">
            <?php echo getIconSvg('shield-check', 'w-4 h-4 text-emerald-600'); ?>
            100% IP Transfer on Completion
          </span>
          <span class="flex items-center gap-1.5 font-medium">
            <?php echo getIconSvg('lock', 'w-4 h-4 text-electric-600'); ?>
            Confidential Mutual NDA
          </span>
          <span class="flex items-center gap-1.5 font-medium">
            <?php echo getIconSvg('check-circle', 'w-4 h-4 text-brandOrange-600'); ?>
            Bi-Weekly Sprint Reviews
          </span>
        </div>
      </div>

      <!-- Right Column: Quick Scope Card (4 Cols) -->
      <div class="lg:col-span-4">
        <div class="bg-white border border-canvas-border rounded-card p-6 sm:p-8 shadow-card">
          <div class="flex items-center gap-3 pb-4 border-b border-canvas-border">
            <div class="w-10 h-10 rounded-lg <?php echo ($service['accent'] === 'orange') ? 'bg-brandOrange-50 text-brandOrange-600' : 'bg-electric-50 text-electric-600'; ?> flex items-center justify-center flex-shrink-0">
              <?php echo getIconSvg($service['icon'], 'w-5 h-5'); ?>
            </div>
            <div>
              <div class="text-xs font-bold uppercase tracking-wider text-slate-400">Capability Overview</div>
              <div class="text-sm font-bold text-navy-900"><?php echo htmlspecialchars($service['short']); ?></div>
            </div>
          </div>

          <div class="py-4 space-y-3 text-xs text-navy-700">
            <div class="flex justify-between items-center py-1.5 border-b border-canvas-border/60">
              <span class="text-slate-500">Engagement Mode</span>
              <span class="font-semibold text-navy-900">Agile Sprint Pod / Fixed Scope</span>
            </div>
            <div class="flex justify-between items-center py-1.5 border-b border-canvas-border/60">
              <span class="text-slate-500">Cadence</span>
              <span class="font-semibold text-navy-900">2-Week Milestones</span>
            </div>
            <div class="flex justify-between items-center py-1.5 border-b border-canvas-border/60">
              <span class="text-slate-500">Code Ownership</span>
              <span class="font-semibold text-emerald-700">100% Client IP</span>
            </div>
            <div class="flex justify-between items-center py-1.5">
              <span class="text-slate-500">Engineering Hub</span>
              <span class="font-semibold text-navy-900">NCR &amp; Bengaluru, India</span>
            </div>
          </div>

          <div class="pt-4 border-t border-canvas-border space-y-2">
            <button type="button" class="btn-primary w-full py-2.5 open-quote-modal-btn" data-service="<?php echo htmlspecialchars($service['title']); ?>">
              <span>Request Scoping Document</span>
              <?php echo getIconSvg('arrow-right', 'w-4 h-4'); ?>
            </button>
            <a href="<?php echo getWhatsAppUrl("Hi Yukt IT Solutions, I would like to inquire about your {$service['title']} services."); ?>" target="_blank" rel="noopener noreferrer" class="btn-secondary w-full py-2 text-xs flex items-center justify-center gap-1.5 text-navy-700 hover:text-emerald-700 transition-colors">
              <?php echo getIconSvg('whatsapp', 'w-3.5 h-3.5 text-emerald-600'); ?>
              <span>Quick Chat on WhatsApp</span>
            </a>
          </div>
        </div>
      </div>

    </div>

  </div>
</section>


<!-- ==========================================================================
     CORE SUB-CAPABILITIES DEEP-DIVE
========================================================================== -->
<section class="section-padding bg-white border-b border-canvas-border">
  <div class="container-custom">
    
    <?php echo renderSectionHeader(
      'Detailed Capabilities',
      'What We Build & Deliver',
      'Comprehensive engineering and design solutions tailored to real-world business constraints with zero generic fluff.',
      true
    ); ?>

    <!-- Sub-Offerings Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
      <?php if (!empty($capabilities)): ?>
        <?php foreach ($capabilities as $cap): ?>
          <div class="p-6 rounded-card border border-canvas-border bg-white hover:border-electric-300 hover:shadow-card transition-all duration-200">
            <div class="w-10 h-10 rounded-lg bg-electric-50 text-electric-600 border border-electric-200 flex items-center justify-center mb-4">
              <?php echo getIconSvg($cap['icon'] ?? 'check', 'w-5 h-5'); ?>
            </div>
            <h3 class="text-lg font-bold text-navy-900"><?php echo htmlspecialchars($cap['title']); ?></h3>
            <p class="text-xs sm:text-sm text-navy-600 mt-2.5 leading-relaxed font-normal">
              <?php echo htmlspecialchars($cap['desc']); ?>
            </p>
          </div>
        <?php endforeach; ?>
      <?php else: ?>
        <?php foreach ($service['features'] as $feature): ?>
          <div class="p-6 rounded-card border border-canvas-border bg-white hover:border-electric-300 hover:shadow-card transition-all duration-200">
            <div class="w-10 h-10 rounded-lg bg-electric-50 text-electric-600 border border-electric-200 flex items-center justify-center mb-4">
              <?php echo getIconSvg('check', 'w-5 h-5'); ?>
            </div>
            <h3 class="text-lg font-bold text-navy-900"><?php echo htmlspecialchars($feature); ?></h3>
            <p class="text-xs sm:text-sm text-navy-600 mt-2.5 leading-relaxed font-normal">
              Engineered with production-grade standards, full mobile responsiveness, and clean documentation.
            </p>
          </div>
        <?php endforeach; ?>
      <?php endif; ?>
    </div>

  </div>
</section>


<!-- ==========================================================================
     TANGIBLE DELIVERABLES & BUSINESS ADVANTAGES
========================================================================== -->
<section class="section-padding bg-canvas-subtle border-b border-canvas-border">
  <div class="container-custom">
    
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-10">
      
      <!-- Deliverables Column -->
      <div class="bg-white border border-canvas-border rounded-card p-6 sm:p-8 shadow-subtle">
        <div class="flex items-center gap-2 mb-6">
          <div class="w-8 h-8 rounded bg-electric-50 text-electric-600 flex items-center justify-center">
            <?php echo getIconSvg('file-text', 'w-4 h-4'); ?>
          </div>
          <div>
            <div class="text-xs font-bold uppercase tracking-wider text-slate-400">Verifiable Output</div>
            <h3 class="text-xl font-bold text-navy-900">What You Receive on Handover</h3>
          </div>
        </div>

        <ul class="space-y-3.5 text-xs sm:text-sm text-navy-700">
          <?php foreach ($service['deliverables'] as $deliv): ?>
            <li class="flex items-start gap-3 p-3 rounded-lg bg-canvas-subtle border border-canvas-border/70">
              <span class="text-electric-600 flex-shrink-0 mt-0.5">
                <?php echo getIconSvg('check-circle', 'w-4 h-4'); ?>
              </span>
              <span><?php echo htmlspecialchars($deliv); ?></span>
            </li>
          <?php endforeach; ?>
        </ul>
      </div>

      <!-- Business Benefits Column -->
      <div class="bg-white border border-canvas-border rounded-card p-6 sm:p-8 shadow-subtle">
        <div class="flex items-center gap-2 mb-6">
          <div class="w-8 h-8 rounded bg-emerald-50 text-emerald-600 flex items-center justify-center">
            <?php echo getIconSvg('shield-check', 'w-4 h-4'); ?>
          </div>
          <div>
            <div class="text-xs font-bold uppercase tracking-wider text-slate-400">Strategic Impact</div>
            <h3 class="text-xl font-bold text-navy-900">Core Business Advantages</h3>
          </div>
        </div>

        <ul class="space-y-3.5 text-xs sm:text-sm text-navy-700">
          <?php foreach ($service['benefits'] as $benefit): ?>
            <li class="flex items-start gap-3 p-3 rounded-lg bg-canvas-subtle border border-canvas-border/70">
              <span class="text-emerald-600 flex-shrink-0 mt-0.5">
                <?php echo getIconSvg('check', 'w-4 h-4'); ?>
              </span>
              <span><?php echo htmlspecialchars($benefit); ?></span>
            </li>
          <?php endforeach; ?>
        </ul>
      </div>

    </div>

    <!-- Tech Stack Pill Ribbon -->
    <div class="mt-8 p-6 bg-white border border-canvas-border rounded-card flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4">
      <div class="flex flex-wrap items-center gap-2">
        <span class="text-xs font-mono font-bold text-navy-900 mr-2">TECHNOLOGY STACK:</span>
        <?php foreach ($service['technologies'] as $tech): ?>
          <span class="text-xs font-mono px-3 py-1 rounded bg-canvas-muted text-navy-800 border border-canvas-border">
            <?php echo htmlspecialchars($tech); ?>
          </span>
        <?php endforeach; ?>
      </div>
      <span class="text-xs text-slate-500">Audited &bull; Modern &bull; Production Tested</span>
    </div>

  </div>
</section>


<!-- ==========================================================================
     FREQUENTLY ASKED QUESTIONS (FAQ)
========================================================================== -->
<?php if (!empty($faqs)): ?>
<section class="section-padding bg-white border-b border-canvas-border">
  <div class="container-custom">
    
    <?php echo renderSectionHeader(
      'Common Questions',
      'Frequently Asked Questions',
      'Realistic insights into our scoping, sprint execution, code ownership, and timelines.',
      true
    ); ?>

    <div class="max-w-3xl mx-auto space-y-4">
      <?php foreach ($faqs as $faq): ?>
        <div class="p-6 rounded-card border border-canvas-border bg-canvas-subtle hover:bg-white transition-colors">
          <h4 class="text-base font-bold text-navy-900 flex items-center gap-2.5">
            <span class="text-electric-600 font-mono font-bold">Q.</span>
            <span><?php echo htmlspecialchars($faq['q']); ?></span>
          </h4>
          <p class="text-xs sm:text-sm text-navy-600 mt-2.5 pl-6 leading-relaxed">
            <?php echo htmlspecialchars($faq['a']); ?>
          </p>
        </div>
      <?php endforeach; ?>
    </div>

  </div>
</section>
<?php endif; ?>


<!-- ==========================================================================
     CONSISTENT BOTTOM CTA BANNER
========================================================================== -->
<section class="section-padding bg-navy-900 border-t border-slate-800 text-white">
  <div class="container-custom">
    <div class="max-w-3xl mx-auto text-center space-y-6">
      <span class="inline-flex items-center gap-2 px-3 py-1 rounded-full text-xs font-semibold uppercase tracking-wider bg-navy-800 text-electric-400 border border-slate-700">
        <span class="w-2 h-2 rounded-full bg-emerald-400"></span> Transparent Scoping
      </span>
      <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-white tracking-tight">
        Ready to engineer your <?php echo htmlspecialchars($service['short']); ?> solution?
      </h2>
      <p class="text-base sm:text-lg text-slate-300 max-w-2xl mx-auto font-normal leading-relaxed">
        Share your operational requirements or technical objectives. A senior solutions architect will review your project and return a scoped proposal within 24 hours.
      </p>
      <div class="pt-4 flex flex-col sm:flex-row items-center justify-center gap-4">
        <button type="button" class="btn-primary-lg open-quote-modal-btn" data-service="<?php echo htmlspecialchars($service['title']); ?>">
          <span>Get a Quote for <?php echo htmlspecialchars($service['short']); ?></span>
          <?php echo getIconSvg('arrow-right', 'w-4 h-4'); ?>
        </button>
        <a href="<?php echo getWhatsAppUrl("Hi Yukt IT Solutions, I am ready to discuss engineering our {$service['short']} solution."); ?>" target="_blank" rel="noopener noreferrer" class="btn-secondary-lg text-navy-800 bg-white hover:bg-slate-100 flex items-center gap-2">
          <?php echo getIconSvg('whatsapp', 'w-4 h-4 text-emerald-600'); ?>
          <span>Chat on WhatsApp</span>
        </a>
      </div>
      <div class="pt-4 text-xs text-slate-400 flex items-center justify-center gap-6">
        <span>&bull; Strict NDAs Honored</span>
        <span>&bull; 100% IP Transfer</span>
        <span>&bull; Bi-Weekly Sprint Demos</span>
      </div>
    </div>
  </div>
</section>

<?php require_once __DIR__ . '/../footer.php'; ?>
