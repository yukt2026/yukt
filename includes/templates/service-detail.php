<?php
// ==========================================================================
// YUKT IT SOLUTIONS — Standardized Service Detail Page Template
// ==========================================================================

if (!isset($service) || empty($service)) {
    header('Location: services.php');
    exit;
}

$pageTitle = $pageTitle ?? ($service['title'] . ' Services — YUKT IT SOLUTIONS');
$pageDesc = $pageDesc ?? $service['desc'];
$activePage = 'services';

require_once __DIR__ . '/../header.php';
require_once __DIR__ . '/../components/section-header.php';
?>

<!-- ==========================================================================
     SERVICE DETAIL HERO & BREADCRUMBS (FUTURISTIC 3D BRAND THEME + ADVERT WAVE SHADER)
========================================================================== -->
<section class="advert-wave-hero relative pt-12 pb-14 sm:pt-16 sm:pb-20 lg:pt-20 lg:pb-24 bg-navy-950 bg-grid-dark text-white overflow-hidden border-b border-white/10">
  <div class="absolute top-1/4 left-1/4 w-[500px] h-[500px] bg-electric-500/15 rounded-full blur-[130px] pointer-events-none"></div>
  <div class="absolute bottom-10 right-10 w-[400px] h-[400px] bg-yukt-orange/15 rounded-full blur-[130px] pointer-events-none"></div>

  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-10 relative z-10">
    
    <!-- Breadcrumbs -->
    <nav class="flex items-center gap-2 text-xs font-mono text-slate-400 mb-6" aria-label="Breadcrumb">
      <a href="index.php" class="hover:text-white transition-colors">Home</a>
      <span>/</span>
      <a href="services.php" class="hover:text-white transition-colors">Services</a>
      <span>/</span>
      <span class="text-electric-400 font-semibold"><?php echo htmlspecialchars($service['title']); ?></span>
    </nav>

    <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 items-center">
      
      <!-- Left Column: Title & CTAs (7 Cols) -->
      <div class="lg:col-span-7 space-y-5 reveal-up">
        <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full text-xs font-mono uppercase tracking-widest <?php echo ($service['accent'] === 'orange') ? 'bg-yukt-orange/15 text-yukt-orangeDark border border-yukt-orange/30' : 'bg-electric-500/15 text-electric-400 border border-electric-400/30'; ?>">
          <span class="w-2 h-2 rounded-full <?php echo ($service['accent'] === 'orange') ? 'bg-yukt-orange' : 'bg-electric-400'; ?>"></span>
          <span><?php echo htmlspecialchars($service['badge']); ?></span>
        </div>

        <h1 class="font-display font-bold text-4xl sm:text-5xl lg:text-6xl text-white tracking-tight leading-[1.1]">
          <?php echo htmlspecialchars($service['title']); ?>
        </h1>

        <p class="text-lg text-electric-400 font-medium">
          <?php echo htmlspecialchars($service['tagline']); ?>
        </p>

        <p class="text-base text-slate-300 leading-relaxed max-w-2xl font-normal">
          <?php echo htmlspecialchars($service['desc']); ?>
        </p>

        <!-- CTA Buttons -->
        <div class="pt-3 flex flex-col sm:flex-row items-stretch sm:items-center gap-4">
          <button type="button" class="px-7 py-3.5 rounded-xl font-display font-semibold text-sm text-white bg-gradient-to-r from-electric-600 to-blue-700 hover:from-electric-500 hover:to-blue-600 transition-all open-quote-modal-btn shadow-lg shadow-electric-600/30 flex items-center justify-center gap-2" data-service="<?php echo htmlspecialchars($service['title']); ?>">
            <span>Get a Quote for <?php echo htmlspecialchars($service['short']); ?></span>
            <i data-lucide="arrow-right" class="w-4 h-4"></i>
          </button>
          <a href="<?php echo getWhatsAppUrl("Hi YUKT IT SOLUTIONS, I am interested in your {$service['title']} services."); ?>" target="_blank" rel="noopener noreferrer" class="px-7 py-3.5 rounded-xl font-display font-semibold text-sm text-white bg-gradient-to-r from-yukt-orange to-amber-600 hover:from-yukt-orangeLight hover:to-yukt-orange transition-all flex items-center justify-center gap-2 shadow-lg shadow-yukt-orange/25">
            <i data-lucide="message-circle" class="w-4 h-4"></i>
            <span>WhatsApp Scoping</span>
          </a>
        </div>

        <!-- Assurance Pills -->
        <div class="pt-3 flex flex-wrap items-center gap-y-2 gap-x-6 text-xs text-slate-400 font-mono">
          <span class="flex items-center gap-1.5">
            <i data-lucide="shield-check" class="w-4 h-4 text-emerald-400"></i>
            100% IP Transfer
          </span>
          <span class="flex items-center gap-1.5">
            <i data-lucide="lock" class="w-4 h-4 text-electric-400"></i>
            Confidential Mutual NDA
          </span>
          <span class="flex items-center gap-1.5">
            <i data-lucide="check-circle" class="w-4 h-4 text-yukt-orange"></i>
            Bi-Weekly Sprint Reviews
          </span>
        </div>
      </div>

      <!-- Right Column: Quick Scope Card with 3D Depth (5 Cols) -->
      <div class="lg:col-span-5 relative reveal-up">
        <div class="absolute -inset-1 bg-gradient-to-r from-electric-500/25 via-navy-900/40 to-yukt-orange/25 rounded-3xl blur-xl opacity-70"></div>
        <div class="relative glass-dark rounded-3xl p-6 sm:p-8 border border-white/15 shadow-2xl space-y-5 text-white">
          <div class="flex items-center gap-3 pb-4 border-b border-white/10">
            <div class="w-12 h-12 rounded-2xl <?php echo ($service['accent'] === 'orange') ? 'bg-yukt-orange/20 text-yukt-orange border border-yukt-orange/40' : 'bg-electric-500/20 text-electric-400 border border-electric-400/40'; ?> flex items-center justify-center flex-shrink-0">
              <i data-lucide="<?php echo $service['icon']; ?>" class="w-6 h-6"></i>
            </div>
            <div>
              <div class="text-xs font-mono uppercase tracking-wider text-slate-400">Capability Overview</div>
              <div class="text-base font-display font-bold text-white"><?php echo htmlspecialchars($service['short']); ?></div>
            </div>
          </div>

          <div class="space-y-2.5 text-xs font-mono text-slate-300">
            <div class="flex justify-between items-center py-1.5 border-b border-white/10">
              <span class="text-slate-400">Engagement Mode</span>
              <span class="font-semibold text-white">Agile Pod / Fixed Scope</span>
            </div>
            <div class="flex justify-between items-center py-1.5 border-b border-white/10">
              <span class="text-slate-400">Cadence</span>
              <span class="font-semibold text-white">2-Week Milestones</span>
            </div>
            <div class="flex justify-between items-center py-1.5 border-b border-white/10">
              <span class="text-slate-400">Code Ownership</span>
              <span class="font-semibold text-emerald-400">100% Client IP</span>
            </div>
            <div class="flex justify-between items-center py-1.5">
              <span class="text-slate-400">Engineering Hub</span>
              <span class="font-semibold text-white">NCR &amp; Bengaluru, India</span>
            </div>
          </div>

          <div class="pt-3 border-t border-white/10 space-y-2.5">
            <button type="button" class="w-full py-3 px-4 rounded-xl font-display font-semibold text-xs text-white bg-gradient-to-r from-electric-600 to-blue-700 hover:from-electric-500 hover:to-blue-600 transition-all open-quote-modal-btn shadow-md shadow-electric-600/25 flex items-center justify-center gap-2" data-service="<?php echo htmlspecialchars($service['title']); ?>">
              <span>Request Scoping Document</span>
              <i data-lucide="arrow-right" class="w-3.5 h-3.5"></i>
            </button>
            <a href="<?php echo getWhatsAppUrl("Hi YUKT IT SOLUTIONS, I would like to inquire about your {$service['title']} services."); ?>" target="_blank" rel="noopener noreferrer" class="w-full py-2.5 px-4 rounded-xl font-display font-semibold text-xs text-slate-200 bg-white/10 hover:bg-white/20 border border-white/10 flex items-center justify-center gap-2 transition-colors">
              <i data-lucide="message-circle" class="w-3.5 h-3.5 text-emerald-400"></i>
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
<section class="py-20 lg:py-28 bg-slate-50 text-slate-900 bg-grid-light border-b border-slate-200">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-10">
    
    <div class="max-w-3xl mx-auto text-center space-y-4 mb-14 reveal-up">
      <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-electric-500/10 border border-electric-500/20 text-electric-600 font-mono text-xs uppercase tracking-widest">
        <span>Detailed Capabilities</span>
      </div>
      <h2 class="font-display font-bold text-3xl sm:text-4xl lg:text-5xl tracking-tight text-slate-900">
        What We Build &amp; <span class="text-gradient-brand">Deliver</span>
      </h2>
      <p class="text-slate-600 text-base sm:text-lg">
        Comprehensive engineering and design solutions tailored to real-world business constraints with zero generic fluff.
      </p>
    </div>

    <!-- Sub-Offerings Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
      <?php if (!empty($capabilities)): ?>
        <?php foreach ($capabilities as $cap): ?>
          <div class="p-6 rounded-3xl border border-slate-200/90 bg-white hover:border-electric-500/40 hover:shadow-xl transition-all duration-300 reveal-up">
            <div class="w-11 h-11 rounded-2xl bg-electric-500/10 text-electric-600 flex items-center justify-center mb-4">
              <i data-lucide="<?php echo $cap['icon'] ?? 'check'; ?>" class="w-5 h-5"></i>
            </div>
            <h3 class="font-display font-bold text-lg sm:text-xl text-slate-900 mb-2"><?php echo htmlspecialchars($cap['title']); ?></h3>
            <p class="text-xs sm:text-sm text-slate-600 leading-relaxed font-normal">
              <?php echo htmlspecialchars($cap['desc']); ?>
            </p>
          </div>
        <?php endforeach; ?>
      <?php else: ?>
        <?php foreach ($service['features'] as $feature): ?>
          <div class="p-6 rounded-3xl border border-slate-200/90 bg-white hover:border-electric-500/40 hover:shadow-xl transition-all duration-300 reveal-up">
            <div class="w-11 h-11 rounded-2xl bg-electric-500/10 text-electric-600 flex items-center justify-center mb-4">
              <i data-lucide="check" class="w-5 h-5"></i>
            </div>
            <h3 class="font-display font-bold text-lg sm:text-xl text-slate-900 mb-2"><?php echo htmlspecialchars($feature); ?></h3>
            <p class="text-xs sm:text-sm text-slate-600 leading-relaxed font-normal">
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
<section class="py-20 lg:py-28 bg-white text-slate-900 border-b border-slate-200">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-10">
    
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-10">
      
      <!-- Deliverables Column -->
      <div class="bg-slate-50 border border-slate-200 rounded-3xl p-6 sm:p-8 shadow-sm reveal-up">
        <div class="flex items-center gap-3 mb-6">
          <div class="w-10 h-10 rounded-xl bg-electric-500/10 text-electric-600 flex items-center justify-center">
            <i data-lucide="file-text" class="w-5 h-5"></i>
          </div>
          <div>
            <div class="text-xs font-mono uppercase tracking-wider text-slate-400">Verifiable Output</div>
            <h3 class="font-display font-bold text-xl text-slate-900">What You Receive on Handover</h3>
          </div>
        </div>

        <ul class="space-y-3 text-xs sm:text-sm text-slate-700">
          <?php foreach ($service['deliverables'] as $deliv): ?>
            <li class="flex items-start gap-3 p-3 rounded-xl bg-white border border-slate-200">
              <span class="text-electric-600 flex-shrink-0 mt-0.5">
                <i data-lucide="check-circle" class="w-4 h-4"></i>
              </span>
              <span><?php echo htmlspecialchars($deliv); ?></span>
            </li>
          <?php endforeach; ?>
        </ul>
      </div>

      <!-- Business Benefits Column -->
      <div class="bg-slate-50 border border-slate-200 rounded-3xl p-6 sm:p-8 shadow-sm reveal-up">
        <div class="flex items-center gap-3 mb-6">
          <div class="w-10 h-10 rounded-xl bg-emerald-500/10 text-emerald-600 flex items-center justify-center">
            <i data-lucide="shield-check" class="w-5 h-5"></i>
          </div>
          <div>
            <div class="text-xs font-mono uppercase tracking-wider text-slate-400">Strategic Impact</div>
            <h3 class="font-display font-bold text-xl text-slate-900">Core Business Advantages</h3>
          </div>
        </div>

        <ul class="space-y-3 text-xs sm:text-sm text-slate-700">
          <?php foreach ($service['benefits'] as $benefit): ?>
            <li class="flex items-start gap-3 p-3 rounded-xl bg-white border border-slate-200">
              <span class="text-emerald-600 flex-shrink-0 mt-0.5">
                <i data-lucide="check" class="w-4 h-4"></i>
              </span>
              <span><?php echo htmlspecialchars($benefit); ?></span>
            </li>
          <?php endforeach; ?>
        </ul>
      </div>

    </div>

    <!-- Tech Stack Pill Ribbon -->
    <div class="mt-8 p-6 bg-slate-50 border border-slate-200 rounded-2xl flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4 reveal-up">
      <div class="flex flex-wrap items-center gap-2">
        <span class="text-xs font-mono font-bold text-slate-900 mr-2">TECHNOLOGY STACK:</span>
        <?php foreach ($service['technologies'] as $tech): ?>
          <span class="text-xs font-mono px-3 py-1 rounded-md bg-white text-slate-800 border border-slate-200">
            <?php echo htmlspecialchars($tech); ?>
          </span>
        <?php endforeach; ?>
      </div>
      <span class="text-xs font-mono text-slate-500">Audited &bull; Modern &bull; Production Tested</span>
    </div>

  </div>
</section>

<!-- ==========================================================================
     FREQUENTLY ASKED QUESTIONS (FAQ)
========================================================================== -->
<?php if (!empty($faqs)): ?>
<section class="py-20 lg:py-28 bg-slate-50 text-slate-900 border-b border-slate-200">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-10">
    
    <div class="max-w-3xl mx-auto text-center space-y-4 mb-14 reveal-up">
      <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-electric-500/10 border border-electric-500/20 text-electric-600 font-mono text-xs uppercase tracking-widest">
        <span>Common Questions</span>
      </div>
      <h2 class="font-display font-bold text-3xl sm:text-4xl lg:text-5xl tracking-tight text-slate-900">
        Frequently Asked <span class="text-gradient-brand">Questions</span>
      </h2>
      <p class="text-slate-600 text-base sm:text-lg">
        Realistic insights into our scoping, sprint execution, code ownership, and timelines.
      </p>
    </div>

    <div class="max-w-3xl mx-auto space-y-4">
      <?php foreach ($faqs as $faq): ?>
        <div class="p-6 rounded-2xl border border-slate-200 bg-white hover:border-electric-400 transition-colors shadow-sm reveal-up">
          <h3 class="font-display font-bold text-base sm:text-lg text-slate-900 flex items-center gap-2.5">
            <span class="text-electric-600 font-mono font-bold">Q.</span>
            <span><?php echo htmlspecialchars($faq['q']); ?></span>
          </h3>
          <p class="text-xs sm:text-sm text-slate-600 mt-2.5 pl-6 leading-relaxed">
            <?php echo htmlspecialchars($faq['a']); ?>
          </p>
        </div>
      <?php endforeach; ?>
    </div>

  </div>
</section>
<?php endif; ?>

<!-- ==========================================================================
     RELATED SERVICES (INTERNAL SEO LINKING & CROSS-DISCIPLINARY DISCOVERY)
========================================================================== -->
<section class="py-16 sm:py-20 bg-slate-100 text-slate-900 border-b border-slate-200">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-10">
    <div class="flex flex-col sm:flex-row sm:items-end justify-between gap-4 mb-10">
      <div>
        <span class="text-xs font-mono uppercase tracking-widest text-electric-600 font-semibold">Cross-Disciplinary Mesh</span>
        <h2 class="font-display font-bold text-2xl sm:text-3xl text-slate-900 tracking-tight mt-1">Related Engineering Services</h2>
      </div>
      <a href="services.php" class="inline-flex items-center gap-1.5 text-xs font-mono font-semibold text-electric-600 hover:text-electric-700 transition-colors">
        <span>View all 8 services</span>
        <i data-lucide="arrow-right" class="w-3.5 h-3.5"></i>
      </a>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
      <?php
      $relatedCount = 0;
      foreach ($SERVICES as $relKey => $relService):
        if ($relKey === $service['id']) continue;
        if ($relatedCount >= 3) break;
        $relatedCount++;
      ?>
        <a href="<?php echo htmlspecialchars($relService['url']); ?>" class="group block p-6 rounded-2xl bg-white border border-slate-200 hover:border-electric-500/50 hover:shadow-xl transition-all duration-300">
          <div class="flex items-center justify-between mb-4">
            <div class="w-10 h-10 rounded-xl bg-electric-500/10 text-electric-600 flex items-center justify-center group-hover:scale-110 transition-transform">
              <i data-lucide="<?php echo $relService['icon']; ?>" class="w-5 h-5"></i>
            </div>
            <span class="text-xs font-mono text-slate-400 group-hover:text-electric-600 transition-colors flex items-center gap-1">
              Explore <i data-lucide="chevron-right" class="w-3.5 h-3.5"></i>
            </span>
          </div>
          <h3 class="font-display font-bold text-lg text-slate-900 group-hover:text-electric-600 transition-colors mb-2">
            <?php echo htmlspecialchars($relService['title']); ?>
          </h3>
          <p class="text-xs text-slate-600 line-clamp-2 leading-relaxed">
            <?php echo htmlspecialchars($relService['tagline']); ?>
          </p>
        </a>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ==========================================================================
     CONSISTENT BOTTOM CTA BANNER
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
        Ready to engineer your <?php echo htmlspecialchars($service['short']); ?> solution?
      </h2>
      <p class="text-base sm:text-lg text-slate-300 max-w-2xl mx-auto font-normal leading-relaxed">
        Share your operational requirements or technical objectives. A senior solutions architect will review your project and return a scoped proposal within 24 hours.
      </p>
      <div class="pt-4 flex flex-col sm:flex-row items-center justify-center gap-4">
        <button type="button" class="px-7 py-3.5 rounded-xl font-display font-semibold text-sm text-white bg-electric-500 hover:bg-electric-400 transition-all open-quote-modal-btn shadow-lg shadow-electric-500/25" data-service="<?php echo htmlspecialchars($service['title']); ?>">
          <span>Get a Quote for <?php echo htmlspecialchars($service['short']); ?></span>
        </button>
        <a href="<?php echo getWhatsAppUrl("Hi YUKT IT SOLUTIONS, I am ready to discuss engineering our {$service['short']} solution."); ?>" target="_blank" rel="noopener noreferrer" class="px-7 py-3.5 rounded-xl font-display font-semibold text-sm text-white bg-gradient-to-r from-yukt-orange to-amber-600 hover:from-yukt-orangeLight hover:to-yukt-orange transition-all flex items-center justify-center gap-2 shadow-lg shadow-yukt-orange/25">
          <i data-lucide="message-circle" class="w-4 h-4"></i>
          <span>Chat on WhatsApp</span>
        </a>
      </div>
      <div class="pt-4 text-xs text-slate-400 flex items-center justify-center gap-6 font-mono">
        <span>&bull; Strict NDAs Honored</span>
        <span>&bull; 100% IP Transfer</span>
        <span>&bull; Bi-Weekly Sprint Demos</span>
      </div>
    </div>
  </div>
</section>

<?php require_once __DIR__ . '/../footer.php'; ?>
