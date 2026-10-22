<?php
// ==========================================================================
// YUKT IT SOLUTIONS — Standardized Project Detail Template
// ==========================================================================

if (!isset($project) || empty($project)) {
    header('Location: portfolio.php');
    exit;
}

$pageTitle = $pageTitle ?? ($project['title'] . ' — Architecture Case Study — YUKT IT SOLUTIONS');
$pageDesc = $pageDesc ?? $project['summary'];
$activePage = 'portfolio';

require_once __DIR__ . '/../header.php';
require_once __DIR__ . '/../components/section-header.php';
?>

<!-- ==========================================================================
     PROJECT DETAIL HERO & BREADCRUMBS (FUTURISTIC 3D BRAND THEME)
========================================================================== -->
<section class="relative pt-12 pb-14 sm:pt-16 sm:pb-20 lg:pt-20 lg:pb-24 bg-navy-950 bg-grid-dark text-white overflow-hidden border-b border-white/10">
  <div class="absolute top-1/4 left-1/4 w-[500px] h-[500px] bg-electric-500/15 rounded-full blur-[130px] pointer-events-none"></div>
  <div class="absolute bottom-10 right-10 w-[400px] h-[400px] bg-yukt-orange/15 rounded-full blur-[130px] pointer-events-none"></div>

  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-10 relative z-10">
    
    <!-- Breadcrumbs -->
    <nav class="flex items-center gap-2 text-xs font-mono text-slate-400 mb-6" aria-label="Breadcrumb">
      <a href="index.php" class="hover:text-white transition-colors">Home</a>
      <span>/</span>
      <a href="portfolio.php" class="hover:text-white transition-colors">Portfolio</a>
      <span>/</span>
      <span class="text-electric-400 font-semibold"><?php echo htmlspecialchars($project['title']); ?></span>
    </nav>

    <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 items-start">
      
      <!-- Left Column: Title & Overview (8 Cols) -->
      <div class="lg:col-span-8 space-y-5 reveal-up">
        <div class="flex flex-wrap items-center gap-3">
          <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-mono uppercase bg-electric-500/15 text-electric-400 border border-electric-400/30">
            <span class="w-1.5 h-1.5 rounded-full bg-electric-400"></span>
            <?php echo htmlspecialchars($project['category']); ?>
          </span>
          <span class="text-xs font-mono font-medium text-yukt-orangeDark bg-yukt-orange/10 px-2.5 py-1 rounded-full border border-yukt-orange/20">
            <?php echo htmlspecialchars($project['label']); ?>
          </span>
        </div>

        <h1 class="font-display font-bold text-4xl sm:text-5xl lg:text-6xl text-white tracking-tight leading-[1.1]">
          <?php echo htmlspecialchars($project['title']); ?>
        </h1>

        <p class="text-lg text-slate-300 leading-relaxed font-normal">
          <?php echo htmlspecialchars($project['summary']); ?>
        </p>

        <!-- CTAs -->
        <div class="pt-2 flex flex-col sm:flex-row items-stretch sm:items-center gap-4">
          <button type="button" class="px-7 py-3.5 rounded-xl font-display font-semibold text-sm text-white bg-electric-500 hover:bg-electric-400 transition-all open-quote-modal-btn shadow-lg shadow-electric-500/25 flex items-center justify-center gap-2" data-service="<?php echo htmlspecialchars($project['category']); ?>">
            <span>Request Similar Architecture Scope</span>
            <i data-lucide="arrow-right" class="w-4 h-4"></i>
          </button>
          <a href="<?php echo getWhatsAppUrl("Hi YUKT IT SOLUTIONS, I would like to discuss a project similar to " . $project['title'] . "."); ?>" target="_blank" rel="noopener noreferrer" class="px-7 py-3.5 rounded-xl font-display font-semibold text-sm text-white bg-gradient-to-r from-yukt-orange to-amber-600 hover:from-yukt-orangeLight hover:to-yukt-orange transition-all flex items-center justify-center gap-2 shadow-lg shadow-yukt-orange/25">
            <i data-lucide="message-circle" class="w-4 h-4"></i>
            <span>WhatsApp Scoping</span>
          </a>
        </div>
      </div>

      <!-- Right Column: Meta Overview Card (4 Cols) -->
      <div class="lg:col-span-4 reveal-up">
        <div class="glass-dark rounded-3xl p-6 sm:p-7 border border-white/15 shadow-2xl space-y-4 text-xs font-mono text-white">
          <div class="text-xs font-mono uppercase tracking-wider text-slate-400 pb-2 border-b border-white/10">
            Technical Specification
          </div>

          <div>
            <span class="text-slate-400 block mb-1">Architecture Category:</span>
            <span class="font-display font-bold text-white text-sm"><?php echo htmlspecialchars($project['category']); ?></span>
          </div>

          <div>
            <span class="text-slate-400 block mb-1">Delivery Cadence:</span>
            <span class="font-semibold text-white">Agile Bi-Weekly Sprints</span>
          </div>

          <div>
            <span class="text-slate-400 block mb-1">Code Ownership:</span>
            <span class="font-semibold text-emerald-400">100% Client IP Transferred</span>
          </div>

          <div class="pt-2 border-t border-white/10">
            <span class="text-slate-400 block mb-2 font-mono">CORE TECHNOLOGIES:</span>
            <div class="flex flex-wrap gap-1.5">
              <?php foreach ($project['stack'] as $t): ?>
                <span class="px-2.5 py-1 rounded-md bg-white/10 text-slate-200 border border-white/15 font-mono text-[11px]">
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
<section class="py-20 lg:py-28 bg-slate-50 text-slate-900 bg-grid-light border-b border-slate-200">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-10">
    
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-14 items-start">
      
      <!-- Main Content (8 Cols) -->
      <div class="lg:col-span-8 space-y-12">
        
        <!-- The Problem -->
        <div class="bg-white border border-slate-200/90 rounded-3xl p-7 sm:p-9 shadow-lg space-y-4 reveal-up">
          <div class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-mono uppercase bg-rose-50 text-rose-700 border border-rose-200">
            <span>The Operational Bottleneck</span>
          </div>
          <h2 class="font-display font-bold text-2xl sm:text-3xl text-slate-900 tracking-tight">The Architectural Challenge</h2>
          <p class="text-base text-slate-700 leading-relaxed font-normal">
            <?php echo htmlspecialchars($project['problem']); ?>
          </p>
        </div>

        <!-- The Solution -->
        <div class="bg-white border border-slate-200/90 rounded-3xl p-7 sm:p-9 shadow-lg space-y-4 reveal-up">
          <div class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-mono uppercase bg-electric-500/10 text-electric-600 border border-electric-500/20">
            <span>Engineering Implementation</span>
          </div>
          <h2 class="font-display font-bold text-2xl sm:text-3xl text-slate-900 tracking-tight">The Technical Solution</h2>
          <p class="text-base text-slate-700 leading-relaxed font-normal">
            <?php echo htmlspecialchars($project['solution']); ?>
          </p>
        </div>

        <!-- Architectural Outcomes -->
        <div class="bg-white border border-slate-200/90 rounded-3xl p-7 sm:p-9 shadow-lg space-y-4 reveal-up">
          <div class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-mono uppercase bg-emerald-50 text-emerald-700 border border-emerald-200">
            <span>Verified Results</span>
          </div>
          <h2 class="font-display font-bold text-2xl sm:text-3xl text-slate-900 tracking-tight">Verifiable Architectural Outcomes</h2>
          
          <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 pt-2">
            <?php foreach ($project['outcomes'] as $outcome): ?>
              <div class="p-4 rounded-2xl bg-slate-50 border border-slate-200 flex items-start gap-3">
                <span class="text-emerald-600 flex-shrink-0 mt-0.5">
                  <i data-lucide="check-circle" class="w-5 h-5"></i>
                </span>
                <span class="text-xs sm:text-sm text-slate-800 font-medium"><?php echo htmlspecialchars($outcome); ?></span>
              </div>
            <?php endforeach; ?>
          </div>
        </div>

      </div>

      <!-- Right Sidebar: Architectural Pillars (4 Cols) -->
      <div class="lg:col-span-4 space-y-6">
        
        <div class="bg-white border border-slate-200 rounded-3xl p-6 shadow-sm space-y-4 reveal-up">
          <h3 class="font-display font-bold text-base text-slate-900 flex items-center gap-2">
            <i data-lucide="shield-check" class="w-5 h-5 text-emerald-600"></i>
            <span>Engineering Guarantees</span>
          </h3>
          <ul class="space-y-2.5 text-xs text-slate-600">
            <li class="flex items-start gap-2">
              <span class="text-electric-500 font-bold">&bull;</span>
              <span>100% intellectual property ownership transferred upon completion.</span>
            </li>
            <li class="flex items-start gap-2">
              <span class="text-electric-500 font-bold">&bull;</span>
              <span>Strict compliance with mutual Non-Disclosure Agreements (NDAs).</span>
            </li>
            <li class="flex items-start gap-2">
              <span class="text-electric-500 font-bold">&bull;</span>
              <span>Clean code documentation with zero unvetted third-party plugins.</span>
            </li>
          </ul>
        </div>

        <div class="glass-dark text-white rounded-3xl p-6 sm:p-7 border border-white/15 space-y-4 shadow-xl reveal-up">
          <h3 class="font-display font-bold text-base text-white">Need a similar solution?</h3>
          <p class="text-xs sm:text-sm text-slate-300 leading-relaxed font-normal">
            Our engineering team can evaluate your current infrastructure and provide an architectural blueprint with fixed sprint estimates.
          </p>
          <button type="button" class="w-full py-3 px-4 rounded-xl font-display font-semibold text-xs text-white bg-electric-500 hover:bg-electric-400 transition-all open-quote-modal-btn shadow-md shadow-electric-500/20 flex items-center justify-center gap-2" data-service="<?php echo htmlspecialchars($project['category']); ?>">
            <span>Request Scoping Call</span>
            <i data-lucide="arrow-right" class="w-4 h-4"></i>
          </button>
          <a href="<?php echo getWhatsAppUrl("Hi YUKT IT SOLUTIONS, I am interested in building a solution like " . $project['title'] . "."); ?>" target="_blank" rel="noopener noreferrer" class="w-full py-2.5 px-4 rounded-xl font-display font-semibold text-xs text-slate-200 bg-white/10 hover:bg-white/20 border border-white/10 flex items-center justify-center gap-2 transition-colors">
            <i data-lucide="message-circle" class="w-3.5 h-3.5 text-emerald-400"></i>
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
<section class="py-20 lg:py-28 bg-navy-950 border-t border-white/10 text-white relative overflow-hidden">
  <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[300px] bg-electric-500/15 rounded-full blur-[130px] pointer-events-none"></div>

  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-10 relative z-10">
    <div class="max-w-3xl mx-auto text-center space-y-6 reveal-up">
      <span class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-white/[0.05] border border-white/10 text-electric-400 font-mono text-xs uppercase tracking-widest">
        <span class="w-2 h-2 rounded-full bg-emerald-400"></span>
        <span>Transparent Scoping</span>
      </span>
      <h2 class="font-display font-bold text-3xl sm:text-4xl lg:text-5xl text-white tracking-tight">
        Ready to engineer your next digital platform?
      </h2>
      <p class="text-base sm:text-lg text-slate-300 max-w-2xl mx-auto font-normal leading-relaxed">
        Speak directly with a senior solutions architect. We review your requirements and return a scoped proposal within 24 hours.
      </p>
      <div class="pt-4 flex flex-col sm:flex-row items-center justify-center gap-4">
        <button type="button" class="px-7 py-3.5 rounded-xl font-display font-semibold text-sm text-white bg-electric-500 hover:bg-electric-400 transition-all open-quote-modal-btn shadow-lg shadow-electric-500/25" data-service="<?php echo htmlspecialchars($project['category']); ?>">
          <span>Get a Project Estimate</span>
        </button>
        <a href="<?php echo getWhatsAppUrl("Hi YUKT IT SOLUTIONS, I would like to discuss engineering a new digital platform."); ?>" target="_blank" rel="noopener noreferrer" class="px-7 py-3.5 rounded-xl font-display font-semibold text-sm text-white bg-gradient-to-r from-yukt-orange to-amber-600 hover:from-yukt-orangeLight hover:to-yukt-orange transition-all flex items-center justify-center gap-2 shadow-lg shadow-yukt-orange/25">
          <i data-lucide="message-circle" class="w-4 h-4"></i>
          <span>Chat on WhatsApp</span>
        </a>
      </div>
    </div>
  </div>
</section>

<?php require_once __DIR__ . '/../footer.php'; ?>
