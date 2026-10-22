<?php
$activePage = 'portfolio';
$pageTitle = 'Portfolio & Architecture Case Studies — YUKT IT SOLUTIONS';
$pageDesc = 'Explore technical case studies and architectural reference blueprints engineered by YUKT IT SOLUTIONS across Websites, Software, AI, E-Commerce, and Marketing.';

require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/components/section-header.php';
?>

<!-- ==========================================================================
     PORTFOLIO HERO & CATEGORY FILTERS (FUTURISTIC 3D BRAND THEME)
========================================================================== -->
<section class="relative pt-12 pb-14 sm:pt-16 sm:pb-20 lg:pt-20 lg:pb-24 bg-navy-950 bg-grid-dark text-white overflow-hidden border-b border-white/10">
  <div class="absolute top-1/4 left-1/4 w-[500px] h-[500px] bg-electric-500/15 rounded-full blur-[130px] pointer-events-none"></div>
  <div class="absolute bottom-10 right-10 w-[400px] h-[400px] bg-yukt-orange/15 rounded-full blur-[130px] pointer-events-none"></div>

  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-10 relative z-10">
    <div class="max-w-3xl space-y-5 reveal-up">
      <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-white/[0.05] border border-white/10 text-electric-400 font-mono text-xs uppercase tracking-widest">
        <span class="w-2 h-2 rounded-full bg-electric-400 animate-ping"></span>
        <span>Verified Technical Blueprints</span>
      </div>
      <h1 class="font-display font-bold text-4xl sm:text-5xl lg:text-6xl text-white tracking-tight leading-[1.1]">
        Engineered Solutions &amp; System <span class="text-gradient-electric">Blueprints.</span>
      </h1>
      <p class="text-base sm:text-lg text-slate-300 leading-relaxed font-normal">
        Explore representative architectural blueprints, technical case studies, and engineering implementations across web platforms, custom SaaS systems, AI automation, and performance marketing.
      </p>

      <!-- Category Filter Tabs -->
      <div class="pt-4 border-t border-white/10 flex flex-wrap items-center gap-2" id="portfolioFilterNav" role="tablist">
        <button type="button" data-filter="all" class="portfolio-filter-btn px-4 py-2 rounded-xl text-xs font-semibold bg-electric-500 text-white shadow-md transition-all" role="tab" aria-selected="true">
          All Projects (<?php echo count($CASE_STUDIES); ?>)
        </button>
        <button type="button" data-filter="websites" class="portfolio-filter-btn px-4 py-2 rounded-xl text-xs font-semibold bg-white/[0.06] hover:bg-white/10 text-slate-300 hover:text-white border border-white/10 transition-all" role="tab" aria-selected="false">
          Websites
        </button>
        <button type="button" data-filter="software" class="portfolio-filter-btn px-4 py-2 rounded-xl text-xs font-semibold bg-white/[0.06] hover:bg-white/10 text-slate-300 hover:text-white border border-white/10 transition-all" role="tab" aria-selected="false">
          Software &amp; SaaS
        </button>
        <button type="button" data-filter="ai" class="portfolio-filter-btn px-4 py-2 rounded-xl text-xs font-semibold bg-white/[0.06] hover:bg-white/10 text-slate-300 hover:text-white border border-white/10 transition-all" role="tab" aria-selected="false">
          AI &amp; Automation
        </button>
        <button type="button" data-filter="ecommerce" class="portfolio-filter-btn px-4 py-2 rounded-xl text-xs font-semibold bg-white/[0.06] hover:bg-white/10 text-slate-300 hover:text-white border border-white/10 transition-all" role="tab" aria-selected="false">
          E-Commerce
        </button>
        <button type="button" data-filter="marketing" class="portfolio-filter-btn px-4 py-2 rounded-xl text-xs font-semibold bg-white/[0.06] hover:bg-white/10 text-slate-300 hover:text-white border border-white/10 transition-all" role="tab" aria-selected="false">
          Marketing
        </button>
      </div>

    </div>
  </div>
</section>

<!-- ==========================================================================
     PORTFOLIO GRID (ARCHITECTURAL CARDS)
========================================================================== -->
<section class="py-20 lg:py-28 bg-slate-50 text-slate-900 bg-grid-light border-b border-slate-200">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-10">
    
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-8" id="portfolioGrid">
      <?php foreach ($CASE_STUDIES as $case): ?>
        <article class="portfolio-item bg-white border border-slate-200/90 rounded-3xl p-6 sm:p-7 flex flex-col justify-between hover:border-electric-500/40 hover:shadow-2xl transition-all duration-300 reveal-up" data-category="<?php echo $case['category_slug']; ?>">
          
          <div>
            <!-- Header Tag Strip -->
            <div class="flex items-center justify-between mb-4">
              <span class="text-[11px] font-mono font-medium text-yukt-orangeDark bg-yukt-orange/10 px-2.5 py-0.5 rounded-full border border-yukt-orange/20">
                <?php echo htmlspecialchars($case['label']); ?>
              </span>
              <span class="text-xs font-mono font-semibold text-slate-400"><?php echo htmlspecialchars($case['category']); ?></span>
            </div>

            <!-- Title & Summary -->
            <h3 class="font-display font-bold text-xl sm:text-2xl text-slate-900 hover:text-electric-600 transition-colors">
              <a href="<?php echo $case['url']; ?>">
                <?php echo htmlspecialchars($case['title']); ?>
              </a>
            </h3>

            <p class="text-xs sm:text-sm text-slate-600 mt-2.5 leading-relaxed font-normal">
              <?php echo htmlspecialchars($case['summary']); ?>
            </p>

            <!-- Problem / Challenge snippet -->
            <div class="mt-4 pt-3 border-t border-slate-100 text-xs text-slate-600">
              <strong class="text-slate-900 font-semibold block mb-0.5 font-mono text-[11px] uppercase tracking-wider text-slate-500">Architectural Challenge:</strong>
              <p class="line-clamp-2"><?php echo htmlspecialchars($case['problem']); ?></p>
            </div>

            <!-- Tech Stack Pills -->
            <div class="mt-4 pt-3 border-t border-slate-100">
              <div class="flex flex-wrap gap-1.5">
                <?php foreach ($case['stack'] as $t): ?>
                  <span class="text-[11px] font-mono px-2 py-0.5 rounded-md bg-slate-100 text-slate-700 border border-slate-200">
                    <?php echo htmlspecialchars($t); ?>
                  </span>
                <?php endforeach; ?>
              </div>
            </div>
          </div>

          <!-- Bottom Action -->
          <div class="pt-5 border-t border-slate-100 mt-6 flex items-center justify-between">
            <span class="text-xs font-mono text-slate-400">Technical Case Study</span>
            <a href="<?php echo $case['url']; ?>" class="inline-flex items-center gap-1.5 text-xs font-bold text-electric-600 hover:text-yukt-orange transition-colors">
              <span>View Case Study</span>
              <i data-lucide="arrow-right" class="w-3.5 h-3.5"></i>
            </a>
          </div>

        </article>
      <?php endforeach; ?>
    </div>

    <!-- Empty State Container (If filter has 0 items) -->
    <div id="portfolioEmptyState" class="hidden text-center py-16">
      <div class="w-12 h-12 rounded-full bg-slate-100 text-slate-400 flex items-center justify-center mx-auto mb-3">
        <i data-lucide="sparkles" class="w-6 h-6"></i>
      </div>
      <h3 class="font-display font-bold text-lg text-slate-900">No case studies in this category yet</h3>
      <p class="text-xs text-slate-500 mt-1">We are actively documenting new reference implementations.</p>
    </div>

  </div>
</section>

<!-- ==========================================================================
     STANDARDIZED BOTTOM CTA
========================================================================== -->
<section class="py-20 lg:py-28 bg-navy-950 text-white border-t border-white/10 relative overflow-hidden">
  <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[300px] bg-electric-500/15 rounded-full blur-[130px] pointer-events-none"></div>

  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-10 relative z-10">
    <div class="max-w-3xl mx-auto text-center space-y-6 reveal-up">
      <span class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-white/[0.05] border border-white/10 text-electric-400 font-mono text-xs uppercase tracking-widest">
        <span class="w-2 h-2 rounded-full bg-emerald-400"></span>
        <span>Custom Engineering</span>
      </span>
      <h2 class="font-display font-bold text-3xl sm:text-4xl lg:text-5xl text-white tracking-tight">
        Have a complex engineering challenge?
      </h2>
      <p class="text-base sm:text-lg text-slate-300 max-w-2xl mx-auto font-normal leading-relaxed">
        Let’s review your system requirements. Our senior solutions architects can design a tailored technical blueprint with transparent milestone sprint estimates.
      </p>
      <div class="pt-4 flex flex-col sm:flex-row items-center justify-center gap-4">
        <button type="button" class="px-7 py-3.5 rounded-xl font-display font-semibold text-sm text-white bg-electric-500 hover:bg-electric-400 transition-all open-quote-modal-btn shadow-lg shadow-electric-500/25">
          <span>Get a Scoped Estimate</span>
        </button>
        <a href="<?php echo getWhatsAppUrl('Hi YUKT IT SOLUTIONS, I reviewed your portfolio and would like to discuss a project.'); ?>" target="_blank" rel="noopener noreferrer" class="px-7 py-3.5 rounded-xl font-display font-semibold text-sm text-white bg-gradient-to-r from-yukt-orange to-amber-600 hover:from-yukt-orangeLight hover:to-yukt-orange transition-all flex items-center justify-center gap-2 shadow-lg shadow-yukt-orange/25">
          <i data-lucide="message-circle" class="w-4 h-4"></i>
          <span>Chat on WhatsApp</span>
        </a>
      </div>
      <div class="pt-4 text-xs text-slate-400 flex items-center justify-center gap-6 font-mono">
        <span>&bull; Strict NDAs Honored</span>
        <span>&bull; 100% IP Transfer</span>
        <span>&bull; Direct Senior Pods</span>
      </div>
    </div>
  </div>
</section>

<!-- Portfolio Filter Vanilla JS Script -->
<script>
document.addEventListener('DOMContentLoaded', () => {
  const filterBtns = document.querySelectorAll('.portfolio-filter-btn');
  const items = document.querySelectorAll('.portfolio-item');
  const emptyState = document.getElementById('portfolioEmptyState');

  filterBtns.forEach(btn => {
    btn.addEventListener('click', () => {
      const filter = btn.getAttribute('data-filter');

      // Update button visual states
      filterBtns.forEach(b => {
        b.className = 'portfolio-filter-btn px-4 py-2 rounded-xl text-xs font-semibold bg-white/[0.06] hover:bg-white/10 text-slate-300 hover:text-white border border-white/10 transition-all';
        b.setAttribute('aria-selected', 'false');
      });
      btn.className = 'portfolio-filter-btn px-4 py-2 rounded-xl text-xs font-semibold bg-electric-500 text-white shadow-md transition-all';
      btn.setAttribute('aria-selected', 'true');

      // Filter gallery cards
      let visibleCount = 0;
      items.forEach(item => {
        const itemCategory = item.getAttribute('data-category');
        if (filter === 'all' || itemCategory === filter) {
          item.classList.remove('hidden');
          visibleCount++;
        } else {
          item.classList.add('hidden');
        }
      });

      // Handle empty state
      if (emptyState) {
        if (visibleCount === 0) {
          emptyState.classList.remove('hidden');
        } else {
          emptyState.classList.add('hidden');
        }
      }
    });
  });
});
</script>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
