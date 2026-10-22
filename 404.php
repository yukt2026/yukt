<?php
// ==========================================================================
// YUKT IT SOLUTIONS — Custom 404 Not Found Page
// ==========================================================================

http_response_code(404);

$activePage = '404';
$pageTitle = '404 — Page Not Found | YUKT IT SOLUTIONS';
$pageDesc = 'The requested system coordinate or page could not be found. Explore YUKT IT SOLUTIONS services, client case studies, or contact our engineering pod directly.';

require_once __DIR__ . '/includes/header.php';
?>

<!-- ==========================================================================
     404 HERO / ERROR ROUTING DISPLAY (FUTURISTIC 3D BRAND THEME + ADVERT WAVE SHADER)
========================================================================== -->
<section class="advert-wave-hero relative pt-20 pb-20 sm:pt-28 sm:pb-28 lg:pt-36 lg:pb-36 bg-navy-950 bg-grid-dark text-white overflow-hidden min-h-[75vh] flex items-center">
  <!-- Glowing Ambient Accents -->
  <div class="absolute top-1/3 left-1/3 -translate-x-1/2 -translate-y-1/2 w-[450px] h-[450px] bg-electric-500/15 rounded-full blur-[140px] pointer-events-none"></div>
  <div class="absolute bottom-10 right-1/4 w-[400px] h-[400px] bg-yukt-orange/15 rounded-full blur-[140px] pointer-events-none"></div>

  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-10 relative z-10 w-full text-center">
    <div class="max-w-2xl mx-auto space-y-6 reveal-up">
      
      <!-- Status Badge -->
      <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-white/[0.05] border border-white/10 text-yukt-orange font-mono text-xs uppercase tracking-widest">
        <span class="w-2 h-2 rounded-full bg-yukt-orange animate-ping"></span>
        <span>HTTP 404 &bull; Routing Exception</span>
      </div>

      <!-- Large Glowing 404 Display -->
      <div class="font-display font-extrabold text-7xl sm:text-8xl lg:text-9xl tracking-tight leading-none text-transparent bg-clip-text bg-gradient-to-r from-electric-400 via-white to-yukt-orange select-none">
        404
      </div>

      <!-- Headline -->
      <h1 class="font-display font-bold text-2xl sm:text-3xl lg:text-4xl text-white tracking-tight">
        System Coordinate Not Found<span class="text-yukt-orange">.</span>
      </h1>

      <!-- Description -->
      <p class="text-sm sm:text-base text-slate-300 leading-relaxed max-w-lg mx-auto font-normal">
        The route you requested does not exist or has been restructured. Please verify the URL or navigate to one of our core operational hubs below.
      </p>

      <!-- Action Buttons -->
      <div class="pt-4 flex flex-col sm:flex-row items-center justify-center gap-3.5">
        <a 
          href="index.php" 
          class="w-full sm:w-auto inline-flex items-center justify-center gap-2 px-6 py-3.5 rounded-xl font-display font-semibold text-sm text-white bg-gradient-to-r from-electric-600 to-blue-700 hover:from-electric-500 hover:to-blue-600 shadow-xl shadow-electric-600/30 transition-all hover:-translate-y-0.5"
        >
          <i data-lucide="home" class="w-4 h-4"></i>
          <span>Return to Homepage</span>
        </a>

        <a 
          href="services.php" 
          class="w-full sm:w-auto inline-flex items-center justify-center gap-2 px-6 py-3.5 rounded-xl font-display font-semibold text-sm text-slate-200 bg-white/10 hover:bg-white/20 border border-white/10 transition-colors"
        >
          <i data-lucide="compass" class="w-4 h-4"></i>
          <span>Explore Services</span>
        </a>

        <a 
          href="<?php echo getWhatsAppUrl('Hi YUKT IT SOLUTIONS, I was browsing your website and encountered a 404 page.'); ?>" 
          target="_blank" 
          rel="noopener noreferrer" 
          class="w-full sm:w-auto inline-flex items-center justify-center gap-2 px-6 py-3.5 rounded-xl font-display font-semibold text-sm text-white bg-gradient-to-r from-yukt-orange to-amber-600 hover:from-yukt-orangeLight hover:to-yukt-orange shadow-lg shadow-yukt-orange/25 transition-all"
        >
          <i data-lucide="message-circle" class="w-4 h-4"></i>
          <span>WhatsApp Help</span>
        </a>
      </div>

    </div>

    <!-- Quick Navigation Cards Grid -->
    <div class="mt-16 pt-12 border-t border-white/10 max-w-4xl mx-auto">
      <div class="text-xs font-mono uppercase tracking-widest text-slate-400 mb-6 text-center">
        Explore Core Capabilities
      </div>
      <div class="grid grid-cols-2 sm:grid-cols-4 gap-3 text-left">
        <?php foreach (array_slice($SERVICES, 0, 4) as $s): ?>
          <a href="<?php echo htmlspecialchars($s['url']); ?>" class="p-3.5 rounded-xl bg-white/[0.03] border border-white/10 hover:border-electric-400/50 hover:bg-white/[0.06] transition-all group">
            <div class="w-7 h-7 rounded-lg bg-electric-500/10 text-electric-400 flex items-center justify-center mb-2 group-hover:scale-110 transition-transform">
              <i data-lucide="<?php echo $s['icon']; ?>" class="w-3.5 h-3.5"></i>
            </div>
            <div class="font-display font-semibold text-xs text-white group-hover:text-electric-400 transition-colors">
              <?php echo htmlspecialchars($s['short']); ?>
            </div>
          </a>
        <?php endforeach; ?>
      </div>
    </div>

  </div>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
