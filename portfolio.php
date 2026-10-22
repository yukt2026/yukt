<?php
$activePage = 'portfolio';
$pageTitle = 'Portfolio & Architecture Case Studies — Yukt IT Solutions';
$pageDesc = 'Explore technical case studies and architectural reference blueprints engineered by Yukt IT Solutions across Websites, Software, AI, E-Commerce, and Marketing.';

require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/components/section-header.php';
?>

<!-- ==========================================================================
     PORTFOLIO HERO & CATEGORY FILTERS (COMPACT & ANIMATED)
========================================================================== -->
<section class="stripe-ambient-canvas border-b border-canvas-border pt-10 pb-12 sm:pt-14 sm:pb-16 bg-grid-pattern relative">
  <div class="container-custom relative z-10">
    <div class="max-w-3xl animate-hero-fade">
      <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full text-xs font-semibold uppercase tracking-wider bg-electric-50 text-electric-700 border border-electric-200 mb-3">
        <span class="w-2 h-2 rounded-full bg-electric-600"></span> Verified Technical Blueprints
      </div>
      <h1 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-navy-800 tracking-tight leading-tight">
        Engineered Solutions &amp; System <span class="stripe-gradient-text">Blueprints.</span>
      </h1>
      <p class="text-base sm:text-lg text-navy-600 mt-3 leading-relaxed font-normal">
        Explore representative architectural blueprints, technical case studies, and engineering implementations across web platforms, custom SaaS systems, AI automation, and performance marketing.
      </p>

      <!-- Category Filter Tabs -->
      <div class="pt-6 flex flex-wrap items-center gap-2" id="portfolioFilterNav" role="tablist">
        <button type="button" data-filter="all" class="portfolio-filter-btn px-3.5 py-1.5 rounded-btn text-xs font-bold transition-all bg-navy-900 text-white shadow-xs" role="tab" aria-selected="true">
          All Projects (<?php echo count($CASE_STUDIES); ?>)
        </button>
        <button type="button" data-filter="websites" class="portfolio-filter-btn px-3.5 py-1.5 rounded-btn text-xs font-semibold transition-all bg-white text-navy-700 hover:text-navy-900 border border-canvas-border hover:border-slate-300" role="tab" aria-selected="false">
          Websites
        </button>
        <button type="button" data-filter="software" class="portfolio-filter-btn px-3.5 py-1.5 rounded-btn text-xs font-semibold transition-all bg-white text-navy-700 hover:text-navy-900 border border-canvas-border hover:border-slate-300" role="tab" aria-selected="false">
          Software &amp; SaaS
        </button>
        <button type="button" data-filter="ai" class="portfolio-filter-btn px-3.5 py-1.5 rounded-btn text-xs font-semibold transition-all bg-white text-navy-700 hover:text-navy-900 border border-canvas-border hover:border-slate-300" role="tab" aria-selected="false">
          AI &amp; Automation
        </button>
        <button type="button" data-filter="ecommerce" class="portfolio-filter-btn px-3.5 py-1.5 rounded-btn text-xs font-semibold transition-all bg-white text-navy-700 hover:text-navy-900 border border-canvas-border hover:border-slate-300" role="tab" aria-selected="false">
          E-Commerce
        </button>
        <button type="button" data-filter="marketing" class="portfolio-filter-btn px-3.5 py-1.5 rounded-btn text-xs font-semibold transition-all bg-white text-navy-700 hover:text-navy-900 border border-canvas-border hover:border-slate-300" role="tab" aria-selected="false">
          Marketing
        </button>
      </div>

    </div>
  </div>
</section>


<!-- ==========================================================================
     PORTFOLIO GRID (COMPACT)
========================================================================== -->
<section class="section-padding bg-white border-b border-canvas-border">
  <div class="container-custom">
    
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5 sm:gap-6" id="portfolioGrid">
      <?php foreach ($CASE_STUDIES as $case): ?>
        <article class="portfolio-item bg-white border border-canvas-border rounded-xl p-5 sm:p-6 flex flex-col justify-between hover:border-electric-300 hover:shadow-card-hover transition-all duration-300 stripe-card-interactive reveal-on-scroll" data-category="<?php echo $case['category_slug']; ?>">
          
          <div>
            <!-- Header Tag Strip -->
            <div class="flex items-center justify-between mb-4">
              <span class="text-[11px] font-mono font-medium text-brandOrange-700 bg-brandOrange-50 px-2 py-0.5 rounded border border-brandOrange-200">
                <?php echo htmlspecialchars($case['label']); ?>
              </span>
              <span class="text-xs font-semibold text-slate-500"><?php echo htmlspecialchars($case['category']); ?></span>
            </div>

            <!-- Title & Summary -->
            <h3 class="text-xl font-bold text-navy-900 hover:text-electric-600 transition-colors">
              <a href="<?php echo $case['url']; ?>">
                <?php echo htmlspecialchars($case['title']); ?>
              </a>
            </h3>

            <p class="text-xs sm:text-sm text-navy-600 mt-2.5 leading-relaxed font-normal">
              <?php echo htmlspecialchars($case['summary']); ?>
            </p>

            <!-- Problem / Challenge snippet -->
            <div class="mt-4 pt-3 border-t border-canvas-border/70 text-xs text-slate-600">
              <strong class="text-navy-900 font-semibold block mb-0.5">Architectural Challenge:</strong>
              <p class="line-clamp-2"><?php echo htmlspecialchars($case['problem']); ?></p>
            </div>

            <!-- Tech Stack Pills -->
            <div class="mt-4 pt-3 border-t border-canvas-border/70">
              <div class="flex flex-wrap gap-1.5">
                <?php foreach ($case['stack'] as $t): ?>
                  <span class="text-[11px] font-mono px-2 py-0.5 rounded bg-canvas-muted text-navy-800 border border-canvas-border">
                    <?php echo htmlspecialchars($t); ?>
                  </span>
                <?php endforeach; ?>
              </div>
            </div>
          </div>

          <!-- Bottom Action -->
          <div class="pt-6 border-t border-canvas-border mt-6 flex items-center justify-between">
            <span class="text-xs text-slate-400">Technical Case Study</span>
            <a href="<?php echo $case['url']; ?>" class="inline-flex items-center gap-1.5 text-xs font-bold text-electric-600 hover:text-electric-700 focus:outline-none">
              <span>View Case Study</span>
              <?php echo getIconSvg('arrow-right', 'w-3.5 h-3.5'); ?>
            </a>
          </div>

        </article>
      <?php endforeach; ?>
    </div>

    <!-- Empty State Container (If filter has 0 items) -->
    <div id="portfolioEmptyState" class="hidden text-center py-16">
      <div class="w-12 h-12 rounded-full bg-slate-100 text-slate-400 flex items-center justify-center mx-auto mb-3">
        <?php echo getIconSvg('sparkles', 'w-6 h-6'); ?>
      </div>
      <h3 class="text-lg font-bold text-navy-900">No case studies in this category yet</h3>
      <p class="text-xs text-slate-500 mt-1">We are actively documenting new reference implementations.</p>
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
        <span class="w-2 h-2 rounded-full bg-emerald-400"></span> Custom Engineering
      </span>
      <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-white tracking-tight">
        Have a complex engineering challenge?
      </h2>
      <p class="text-base sm:text-lg text-slate-300 max-w-2xl mx-auto font-normal leading-relaxed">
        Let’s review your system requirements. Our senior solutions architects can design a tailored technical blueprint with transparent milestone sprint estimates.
      </p>
      <div class="pt-4 flex flex-col sm:flex-row items-center justify-center gap-4">
        <button type="button" class="btn-primary-lg open-quote-modal-btn">
          <span>Get a Scoped Estimate</span>
          <?php echo getIconSvg('arrow-right', 'w-4 h-4'); ?>
        </button>
        <a href="<?php echo getWhatsAppUrl('Hi Yukt IT Solutions, I reviewed your portfolio and would like to discuss a project.'); ?>" target="_blank" rel="noopener noreferrer" class="btn-secondary-lg text-navy-800 bg-white hover:bg-slate-100 flex items-center justify-center gap-2">
          <?php echo getIconSvg('whatsapp', 'w-4 h-4 text-emerald-600'); ?>
          <span>Chat on WhatsApp</span>
        </a>
      </div>
      <div class="pt-4 text-xs text-slate-400 flex items-center justify-center gap-6">
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
        b.classList.remove('bg-navy-900', 'text-white', 'shadow-xs');
        b.classList.add('bg-white', 'text-navy-700', 'border', 'border-canvas-border');
        b.setAttribute('aria-selected', 'false');
      });
      btn.classList.remove('bg-white', 'text-navy-700', 'border', 'border-canvas-border');
      btn.classList.add('bg-navy-900', 'text-white', 'shadow-xs');
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
