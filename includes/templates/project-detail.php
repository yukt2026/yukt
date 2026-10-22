<?php
// ==========================================================================
// YUKT IT SOLUTIONS — Standardized Project Detail Template
// ==========================================================================

if (!isset($project) || empty($project)) {
    header('Location: portfolio.php');
    exit;
}

$pageTitle = $pageTitle ?? ($project['title'] . ' — Architecture Case Study — Yukt IT Solutions');
$pageDesc = $pageDesc ?? $project['summary'];
$activePage = 'portfolio';

require_once __DIR__ . '/../header.php';
require_once __DIR__ . '/../components/section-header.php';
?>

<!-- ==========================================================================
     PROJECT DETAIL HERO & BREADCRUMBS
========================================================================== -->
<section class="bg-canvas-subtle border-b border-canvas-border py-14 lg:py-20 bg-grid-pattern relative">
  <div class="container-custom relative z-10">
    
    <!-- Breadcrumbs -->
    <nav class="flex items-center gap-2 text-xs text-slate-500 mb-6" aria-label="Breadcrumb">
      <a href="index.php" class="hover:text-electric-600 transition-colors">Home</a>
      <span>/</span>
      <a href="portfolio.php" class="hover:text-electric-600 transition-colors">Portfolio</a>
      <span>/</span>
      <span class="text-navy-900 font-semibold"><?php echo htmlspecialchars($project['title']); ?></span>
    </nav>

    <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 items-start">
      
      <!-- Left Column: Title & Overview (8 Cols) -->
      <div class="lg:col-span-8 space-y-5">
        <div class="flex flex-wrap items-center gap-3">
          <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-semibold bg-electric-50 text-electric-700 border border-electric-200">
            <span class="w-1.5 h-1.5 rounded-full bg-electric-600"></span>
            <?php echo htmlspecialchars($project['category']); ?>
          </span>
          <span class="text-xs font-mono font-medium text-brandOrange-700 bg-brandOrange-50 px-2.5 py-1 rounded border border-brandOrange-200">
            <?php echo htmlspecialchars($project['label']); ?>
          </span>
        </div>

        <h1 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-navy-900 tracking-tight leading-tight">
          <?php echo htmlspecialchars($project['title']); ?>
        </h1>

        <p class="text-lg text-navy-700 leading-relaxed font-normal">
          <?php echo htmlspecialchars($project['summary']); ?>
        </p>

        <!-- CTAs -->
        <div class="pt-2 flex flex-col sm:flex-row items-stretch sm:items-center gap-4">
          <button type="button" class="btn-primary-lg open-quote-modal-btn" data-service="<?php echo htmlspecialchars($project['category']); ?>">
            <span>Request Similar Architecture Scope</span>
            <?php echo getIconSvg('arrow-right', 'w-4 h-4'); ?>
          </button>
          <a href="<?php echo getWhatsAppUrl("Hi Yukt IT Solutions, I would like to discuss a project similar to " . $project['title'] . "."); ?>" target="_blank" rel="noopener noreferrer" class="btn-secondary-lg flex items-center justify-center gap-2">
            <?php echo getIconSvg('whatsapp', 'w-4 h-4 text-emerald-600'); ?>
            <span>WhatsApp Scoping</span>
          </a>
        </div>
      </div>

      <!-- Right Column: Meta Overview Card (4 Cols) -->
      <div class="lg:col-span-4">
        <div class="bg-white border border-canvas-border rounded-card p-6 shadow-card space-y-4 text-xs">
          <div class="text-xs font-bold uppercase tracking-wider text-slate-400 pb-2 border-b border-canvas-border">
            Technical Specification
          </div>

          <div>
            <span class="text-slate-400 block mb-1">Architecture Category:</span>
            <span class="font-bold text-navy-900 text-sm"><?php echo htmlspecialchars($project['category']); ?></span>
          </div>

          <div>
            <span class="text-slate-400 block mb-1">Delivery Cadence:</span>
            <span class="font-semibold text-navy-900">Agile Bi-Weekly Sprints</span>
          </div>

          <div>
            <span class="text-slate-400 block mb-1">Code Ownership:</span>
            <span class="font-semibold text-emerald-700">100% Client IP Transferred</span>
          </div>

          <div class="pt-2 border-t border-canvas-border">
            <span class="text-slate-400 block mb-2 font-mono">CORE TECHNOLOGIES:</span>
            <div class="flex flex-wrap gap-1.5">
              <?php foreach ($project['stack'] as $t): ?>
                <span class="px-2 py-0.5 rounded bg-canvas-muted text-navy-800 border border-canvas-border font-mono text-[11px]">
                  <?php echo htmlspecialchars($t); ?>
                </span>
              <?php endforeach; ?>
            </div>
          </div>
        </div>
      </div>

    </div>

  </div>
</section>


<!-- ==========================================================================
     PROBLEM, SOLUTION & ARCHITECTURE
========================================================================== -->
<section class="section-padding bg-white border-b border-canvas-border">
  <div class="container-custom">
    
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-start">
      
      <!-- Main Content (8 Cols) -->
      <div class="lg:col-span-8 space-y-12">
        
        <!-- The Problem -->
        <div class="space-y-4">
          <div class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-semibold bg-red-50 text-red-700 border border-red-200">
            <span>The Operational Bottleneck</span>
          </div>
          <h2 class="text-2xl sm:text-3xl font-extrabold text-navy-900 tracking-tight">The Architectural Challenge</h2>
          <p class="text-base text-navy-700 leading-relaxed font-normal">
            <?php echo htmlspecialchars($project['problem']); ?>
          </p>
        </div>

        <!-- The Solution -->
        <div class="space-y-4 pt-8 border-t border-canvas-border">
          <div class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-semibold bg-electric-50 text-electric-700 border border-electric-200">
            <span>Engineering Implementation</span>
          </div>
          <h2 class="text-2xl sm:text-3xl font-extrabold text-navy-900 tracking-tight">The Technical Solution</h2>
          <p class="text-base text-navy-700 leading-relaxed font-normal">
            <?php echo htmlspecialchars($project['solution']); ?>
          </p>
        </div>

        <!-- Architectural Outcomes (No Fabricated Metrics) -->
        <div class="space-y-4 pt-8 border-t border-canvas-border">
          <div class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-semibold bg-emerald-50 text-emerald-700 border border-emerald-200">
            <span>Verified Results</span>
          </div>
          <h2 class="text-2xl sm:text-3xl font-extrabold text-navy-900 tracking-tight">Verifiable Architectural Outcomes</h2>
          
          <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 pt-2">
            <?php foreach ($project['outcomes'] as $outcome): ?>
              <div class="p-4 rounded-lg bg-canvas-subtle border border-canvas-border flex items-start gap-3">
                <span class="text-emerald-600 flex-shrink-0 mt-0.5">
                  <?php echo getIconSvg('check-circle', 'w-4 h-4'); ?>
                </span>
                <span class="text-xs sm:text-sm text-navy-800 font-medium"><?php echo htmlspecialchars($outcome); ?></span>
              </div>
            <?php endforeach; ?>
          </div>
        </div>

      </div>

      <!-- Right Sidebar: Architectural Pillars (4 Cols) -->
      <div class="lg:col-span-4 space-y-6">
        
        <div class="bg-canvas-subtle border border-canvas-border rounded-card p-6 space-y-4">
          <h3 class="text-base font-bold text-navy-900 flex items-center gap-2">
            <?php echo getIconSvg('shield-check', 'w-4 h-4 text-emerald-600'); ?>
            Engineering Guarantees
          </h3>
          <ul class="space-y-2.5 text-xs text-navy-600">
            <li class="flex items-start gap-2">
              <span class="text-slate-400">&bull;</span>
              <span>100% intellectual property ownership transferred upon completion.</span>
            </li>
            <li class="flex items-start gap-2">
              <span class="text-slate-400">&bull;</span>
              <span>Strict compliance with mutual Non-Disclosure Agreements (NDAs).</span>
            </li>
            <li class="flex items-start gap-2">
              <span class="text-slate-400">&bull;</span>
              <span>Clean code documentation with zero unvetted third-party plugins.</span>
            </li>
          </ul>
        </div>

        <div class="bg-navy-900 text-white rounded-xl p-6 sm:p-7 border border-slate-800 space-y-4">
          <h3 class="text-base font-bold text-white">Need a similar solution?</h3>
          <p class="text-xs sm:text-sm text-slate-300 leading-relaxed font-normal">
            Our engineering team can evaluate your current infrastructure and provide an architectural blueprint with fixed sprint estimates.
          </p>
          <button type="button" class="btn-primary w-full py-2.5 open-quote-modal-btn" data-service="<?php echo htmlspecialchars($project['category']); ?>">
            <span>Request Scoping Call</span>
            <?php echo getIconSvg('arrow-right', 'w-4 h-4'); ?>
          </button>
          <a href="<?php echo getWhatsAppUrl("Hi Yukt IT Solutions, I am interested in building a solution like " . $project['title'] . "."); ?>" target="_blank" rel="noopener noreferrer" class="btn-secondary w-full py-2 text-xs flex items-center justify-center gap-1.5 text-navy-800 bg-white hover:bg-slate-100 transition-colors">
            <?php echo getIconSvg('whatsapp', 'w-3.5 h-3.5 text-emerald-600'); ?>
            <span>Direct WhatsApp Inquiry</span>
          </a>
        </div>

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
        <span class="w-2 h-2 rounded-full bg-emerald-400"></span> Transparent Scoping
      </span>
      <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-white tracking-tight">
        Ready to engineer your next digital platform?
      </h2>
      <p class="text-base sm:text-lg text-slate-300 max-w-2xl mx-auto font-normal leading-relaxed">
        Speak directly with a senior solutions architect. We review your requirements and return a scoped proposal within 24 hours.
      </p>
      <div class="pt-4 flex flex-col sm:flex-row items-center justify-center gap-4">
        <button type="button" class="btn-primary-lg open-quote-modal-btn" data-service="<?php echo htmlspecialchars($project['category']); ?>">
          <span>Get a Project Estimate</span>
          <?php echo getIconSvg('arrow-right', 'w-4 h-4'); ?>
        </button>
        <a href="<?php echo getWhatsAppUrl("Hi Yukt IT Solutions, I would like to discuss engineering a new digital platform."); ?>" target="_blank" rel="noopener noreferrer" class="btn-secondary-lg text-navy-800 bg-white hover:bg-slate-100 flex items-center justify-center gap-2">
          <?php echo getIconSvg('whatsapp', 'w-4 h-4 text-emerald-600'); ?>
          <span>Chat on WhatsApp</span>
        </a>
      </div>
    </div>
  </div>
</section>

<?php require_once __DIR__ . '/../footer.php'; ?>
