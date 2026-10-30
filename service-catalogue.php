<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

$activePage = 'services';
$pageTitle = 'Digital Services Directory (140+ Services) | YUKT IT SOLUTIONS';
$pageDesc = 'Explore 140+ digital services across Website Development, Billing Software, Advanced Documents, Graphic Design, Digital Marketing, AI Automation and more.';

require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/services-catalogue-data.php';

// Helper for WhatsApp link
if (!function_exists('getCatalogueWhatsAppUrl')) {
    function getCatalogueWhatsAppUrl($serviceName, $catName = '') {
        $msg = "Namaste YUKT Team! Mujhe [{$serviceName}] service ke baare me janna hai. Kripya quotation aur timeline share karein.";
        return 'https://wa.me/918235411806?text=' . urlencode($msg);
    }
}
?>

<!-- LIGHT THEME MAIN CONTAINER -->
<div class="bg-slate-50 text-slate-800 font-sans selection:bg-yukt-orange selection:text-white pb-20 md:pb-12">

  <!-- ==========================================================================
       HERO SECTION: COMPACT, LIGHT, INFORMATIVE
  ========================================================================== -->
  <section class="relative pt-12 pb-6 sm:pt-16 sm:pb-8 bg-gradient-to-b from-white via-blue-50/25 to-slate-50 border-b border-slate-200 overflow-hidden">
    <!-- Ambient Glow -->
    <div class="absolute -top-20 left-1/2 -translate-x-1/2 w-[550px] h-[250px] bg-blue-100/50 rounded-full blur-3xl pointer-events-none"></div>

    <div class="max-w-7xl mx-auto px-3.5 sm:px-6 lg:px-8 relative z-10 text-center space-y-3">
      
      <!-- Announcement Pill -->
      <div class="inline-flex items-center gap-1.5 px-3.5 py-1 rounded-full bg-blue-50 border border-blue-200 text-blue-800 text-[10px] sm:text-xs font-semibold shadow-xs">
        <span class="w-2 h-2 rounded-full bg-blue-600 animate-pulse"></span>
        <span>YUKT Digital Service Directory &bull; 10 Strategic Categories &bull; 140+ Live Services</span>
      </div>

      <h1 class="text-2xl sm:text-4xl lg:text-4.5xl font-display font-extrabold text-slate-900 tracking-tight leading-[1.2]">
        सम्पूर्ण <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-600 via-indigo-600 to-yukt-orange">डिजिटल सर्विस डायरेक्टरी</span>
      </h1>

      <p class="max-w-3xl mx-auto text-xs sm:text-sm text-slate-600 leading-relaxed">
        साइबर कैफे, CSC केंद्र, कंप्यूटर दुकानों और व्यापारियों के लिए 140+ पेशेवर आईटी व डिजिटल सर्विसेज। किसी भी सर्विस को सर्च करें और सीधे WhatsApp पर कोटेशन पाएं:
      </p>

      <!-- Quick Action Buttons -->
      <div class="flex flex-wrap items-center justify-center gap-2 pt-1">
        <a 
          href="partner.php" 
          class="px-4 py-2 sm:px-5 sm:py-2.5 rounded-xl font-bold text-xs sm:text-sm text-white bg-blue-600 hover:bg-blue-500 shadow-sm transition-all flex items-center gap-1.5"
        >
          <i data-lucide="handshake" class="w-4 h-4"></i>
          <span>डिजिटल पार्टनर बनें (Join Partner Program)</span>
        </a>

        <a 
          href="https://wa.me/918235411806?text=Namaste%20YUKT!%20Mujhe%20complete%20service%20catalogue%20aur%20rate%20card%20chahiye." 
          target="_blank" 
          rel="noopener noreferrer" 
          class="px-4 py-2 sm:px-5 sm:py-2.5 rounded-xl font-bold text-xs sm:text-sm text-emerald-800 bg-emerald-50 hover:bg-emerald-100 border border-emerald-300 shadow-xs transition-all flex items-center gap-1.5"
        >
          <i data-lucide="message-circle" class="w-4 h-4 text-emerald-600"></i>
          <span>WhatsApp पर रेट कार्ड मंगवाएं</span>
        </a>
      </div>

    </div>
  </section>

  <!-- ==========================================================================
       SEARCH & FILTER CONTROLS (STICKY / HIGH USABILITY)
  ========================================================================== -->
  <section class="py-4 bg-white border-b border-slate-200 sticky top-14 sm:top-16 z-30 shadow-xs">
    <div class="max-w-7xl mx-auto px-3.5 sm:px-6 lg:px-8 space-y-3">
      
      <!-- Search Input Bar -->
      <div class="relative max-w-2xl mx-auto">
        <div class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none text-slate-400">
          <i data-lucide="search" class="w-4 h-4"></i>
        </div>
        <input 
          type="text" 
          id="dirSearchInput" 
          placeholder="सर्विस खोजें... (उदा. GST Billing, Resume, School ERP, Website, Logo, OCR...)" 
          class="w-full pl-10 pr-24 py-2.5 rounded-xl bg-slate-50 border border-slate-300 text-slate-900 placeholder-slate-400 text-xs sm:text-sm focus:border-blue-600 focus:bg-white focus:outline-none shadow-2xs transition-all"
        >
        <button 
          id="clearSearchBtn" 
          class="hidden absolute inset-y-0 right-0 pr-3.5 flex items-center text-xs font-semibold text-slate-400 hover:text-slate-600"
        >
          Clear ✕
        </button>
      </div>

      <!-- Horizontal Scrollable Category Filter Pills -->
      <div class="flex items-center gap-1.5 overflow-x-auto pb-1 scrollbar-none text-[11px] sm:text-xs">
        <button 
          class="cat-filter-btn active whitespace-nowrap px-3 py-1.5 rounded-full font-bold transition-all bg-blue-600 text-white shadow-xs" 
          data-category="all"
        >
          All Services (140+)
        </button>
        <?php foreach ($CATALOGUE_CATEGORIES as $catId => $cat): ?>
          <button 
            class="cat-filter-btn whitespace-nowrap px-3 py-1.5 rounded-full font-semibold transition-all bg-slate-100 text-slate-700 hover:bg-slate-200" 
            data-category="<?php echo htmlspecialchars($catId); ?>"
          >
            <?php echo htmlspecialchars($cat['short_name']); ?> (<?php echo (int)$cat['count']; ?>)
          </button>
        <?php endforeach; ?>
      </div>

      <!-- Result Counter & Quick Tag -->
      <div class="flex items-center justify-between text-[11px] text-slate-500 pt-0.5 border-t border-slate-100">
        <div>
          दिख रही हैं: <strong id="resultCount" class="text-blue-700 font-bold"><?php echo count($SERVICES_CATALOGUE); ?></strong> सर्विसेज
        </div>
        <div class="text-slate-400 hidden sm:block">
          क्लाइंट का आर्डर आते ही सीधे WhatsApp पर संपर्क करें
        </div>
      </div>

    </div>
  </section>

  <!-- ==========================================================================
       SERVICES GRID: EXACTLY 2 CARDS PER ROW EVERYWHERE
       "1 row me 2 card show ho text aur image proper mobile responsive karo"
  ========================================================================== -->
  <section class="py-6 sm:py-8">
    <div class="max-w-7xl mx-auto px-3.5 sm:px-6 lg:px-8">
      
      <!-- EXACT 2-COLUMNS GRID ON ALL VIEWPORTS (mobile, tablet, desktop) -->
      <div id="servicesGrid" class="grid grid-cols-2 gap-2.5 sm:gap-4 lg:gap-5">
        <?php 
        foreach ($SERVICES_CATALOGUE as $srv): 
          $catInfo = $CATALOGUE_CATEGORIES[$srv['category_id']] ?? null;
          $catName = $catInfo['short_name'] ?? 'General';
          $catLetter = $catInfo['letter'] ?? '';
          $isDoc = ($srv['category_id'] === 'advanced-documents');
          $searchHaystack = strtolower($srv['name'] . ' ' . $srv['short_desc'] . ' ' . implode(' ', $srv['tags'] ?? []) . ' ' . $catName);
        ?>
          <div 
            class="service-card-item rounded-xl sm:rounded-2xl <?php echo $isDoc ? 'bg-amber-50/60 border-amber-200 hover:border-amber-400' : 'bg-white border-slate-200 hover:border-blue-400'; ?> border p-2.5 sm:p-4 flex flex-col justify-between shadow-2xs hover:shadow-md transition-all space-y-2 sm:space-y-3"
            data-category="<?php echo htmlspecialchars($srv['category_id']); ?>"
            data-search="<?php echo htmlspecialchars($searchHaystack); ?>"
          >
            <div class="space-y-1.5 sm:space-y-2">
              
              <!-- Card Top: Category Badge + Icon -->
              <div class="flex items-center justify-between gap-1 pb-1.5 border-b border-slate-100">
                <span class="text-[8px] sm:text-[10px] font-bold px-2 py-0.5 rounded-full <?php echo $isDoc ? 'bg-amber-100 text-amber-900' : 'bg-blue-100 text-blue-800'; ?> truncate max-w-[120px] sm:max-w-none">
                  <?php echo htmlspecialchars($catName); ?>
                </span>
                
                <?php if (!empty($srv['popular'])): ?>
                  <span class="text-[7px] sm:text-[9px] font-bold px-1.5 py-0.2 rounded-full bg-emerald-100 text-emerald-800 shrink-0 font-mono">
                    ★ Popular
                  </span>
                <?php endif; ?>
              </div>

              <!-- Service Title -->
              <h3 class="text-xs sm:text-base font-bold text-slate-900 leading-tight line-clamp-2">
                <?php echo htmlspecialchars($srv['name']); ?>
              </h3>

              <!-- Description -->
              <p class="text-[10px] sm:text-xs text-slate-600 leading-snug line-clamp-2 sm:line-clamp-3">
                <?php echo htmlspecialchars($srv['short_desc']); ?>
              </p>

              <!-- Deliverable Tags (Responsive Mini Bullets) -->
              <?php if (!empty($srv['deliverables'])): ?>
                <div class="space-y-0.5 pt-1 text-[9px] sm:text-xs text-slate-700">
                  <?php foreach (array_slice($srv['deliverables'], 0, 3) as $del): ?>
                    <div class="flex items-center gap-1 truncate">
                      <i data-lucide="check" class="w-3 h-3 text-emerald-600 shrink-0"></i>
                      <span class="truncate"><?php echo htmlspecialchars($del); ?></span>
                    </div>
                  <?php endforeach; ?>
                </div>
              <?php endif; ?>

            </div>

            <!-- Card Bottom: Timeline & Direct WhatsApp CTA -->
            <div class="pt-2 border-t border-slate-100 space-y-1.5">
              <div class="flex items-center justify-between text-[9px] sm:text-[11px] text-slate-500 font-medium">
                <span>डिलीवरी समय:</span>
                <span class="font-bold text-slate-800 font-mono"><?php echo htmlspecialchars($srv['timeline'] ?? '2-5 Days'); ?></span>
              </div>

              <a 
                href="<?php echo getCatalogueWhatsAppUrl($srv['name'], $catName); ?>" 
                target="_blank" 
                rel="noopener noreferrer" 
                class="w-full py-1.5 sm:py-2 px-2 rounded-lg sm:rounded-xl bg-emerald-600 hover:bg-emerald-500 text-white font-bold text-[10px] sm:text-xs flex items-center justify-center gap-1 shadow-2xs transition-all text-center"
              >
                <i data-lucide="message-circle" class="w-3.5 h-3.5 shrink-0"></i>
                <span class="truncate">WhatsApp Enquiry</span>
              </a>
            </div>

          </div>
        <?php endforeach; ?>
      </div>

      <!-- No Results Feedback -->
      <div id="noResultsState" class="hidden text-center py-16 space-y-2">
        <div class="w-12 h-12 rounded-full bg-slate-100 text-slate-400 flex items-center justify-center mx-auto text-xl font-bold">
          ✕
        </div>
        <h3 class="text-base font-bold text-slate-800">कोई सर्विस नहीं मिली</h3>
        <p class="text-xs text-slate-500 max-w-sm mx-auto">
          कृपया कोई दूसरा कीवर्ड सर्च करें या किसी भी कस्टम सर्विस के लिए सीधे WhatsApp पर पूछें:
        </p>
        <a 
          href="https://wa.me/918235411806?text=Namaste%20YUKT!%20Mujhe%20ek%20custom%20service%20ke%20baare%20me%20puchna%20hai." 
          target="_blank" 
          class="inline-flex items-center gap-1.5 px-4 py-2 rounded-xl bg-emerald-600 text-white text-xs font-bold"
        >
          <i data-lucide="message-circle" class="w-3.5 h-3.5"></i>
          <span>Direct WhatsApp Helpline</span>
        </a>
      </div>

    </div>
  </section>

  <!-- ==========================================================================
       BOTTOM CTA BANNER: JOIN PARTNER PROGRAM
  ========================================================================== -->
  <section class="py-8 bg-gradient-to-r from-blue-900 via-indigo-900 to-slate-900 text-white">
    <div class="max-w-7xl mx-auto px-3.5 sm:px-6 lg:px-8 text-center space-y-3">
      <h2 class="text-xl sm:text-3xl font-display font-bold">
        अपनी दुकान से ये सभी 140+ सर्विसेज Provide करना चाहते हैं?
      </h2>
      <p class="text-xs sm:text-sm text-slate-200 max-w-2xl mx-auto">
        YUKT डिजिटल पार्टनर प्रोग्राम 100% फ्री है। कोई जॉइनिंग फीस नहीं। प्रोजेक्ट्स रेफर करें और हर काम पर 15% से 25% तक सीधा कमीशन पाएं!
      </p>
      <div class="flex flex-wrap items-center justify-center gap-2.5 pt-2">
        <a 
          href="partner.php#join" 
          class="px-5 py-2.5 rounded-xl bg-emerald-600 hover:bg-emerald-500 text-white font-bold text-xs sm:text-sm shadow-md transition-all flex items-center gap-2"
        >
          <i data-lucide="handshake" class="w-4 h-4"></i>
          <span>अभी फ्री पार्टनर बनें</span>
        </a>
        <a 
          href="partner.php" 
          class="px-5 py-2.5 rounded-xl bg-white hover:bg-slate-100 text-slate-900 font-bold text-xs sm:text-sm shadow-md transition-all flex items-center gap-2"
        >
          <i data-lucide="arrow-right" class="w-4 h-4 text-blue-600"></i>
          <span>पार्टनर प्रोग्राम डिटेल्स देखें</span>
        </a>
      </div>
    </div>
  </section>

</div>

<!-- Client-side Fast Live Search & Category Filter Script -->
<script>
document.addEventListener('DOMContentLoaded', function() {
  const searchInput = document.getElementById('dirSearchInput');
  const clearBtn = document.getElementById('clearSearchBtn');
  const filterBtns = document.querySelectorAll('.cat-filter-btn');
  const cardItems = document.querySelectorAll('.service-card-item');
  const resultCount = document.getElementById('resultCount');
  const noResultsState = document.getElementById('noResultsState');

  let activeCategory = 'all';
  let searchTerm = '';

  function applyFilters() {
    let visibleCount = 0;
    const query = searchTerm.toLowerCase().trim();

    cardItems.forEach(card => {
      const cardCategory = card.getAttribute('data-category');
      const cardSearchText = card.getAttribute('data-search') || '';

      const matchesCat = (activeCategory === 'all' || cardCategory === activeCategory);
      const matchesSearch = !query || cardSearchText.includes(query);

      if (matchesCat && matchesSearch) {
        card.style.display = '';
        visibleCount++;
      } else {
        card.style.display = 'none';
      }
    });

    resultCount.textContent = visibleCount;
    if (visibleCount === 0) {
      noResultsState.classList.remove('hidden');
    } else {
      noResultsState.classList.add('hidden');
    }
  }

  // Search input event
  searchInput.addEventListener('input', function() {
    searchTerm = this.value;
    clearBtn.classList.toggle('hidden', !searchTerm);
    applyFilters();
  });

  // Clear search
  clearBtn.addEventListener('click', function() {
    searchInput.value = '';
    searchTerm = '';
    clearBtn.classList.add('hidden');
    searchInput.focus();
    applyFilters();
  });

  // Category filter buttons
  filterBtns.forEach(btn => {
    btn.addEventListener('click', function() {
      filterBtns.forEach(b => {
        b.classList.remove('active', 'bg-blue-600', 'text-white', 'shadow-xs');
        b.classList.add('bg-slate-100', 'text-slate-700');
      });
      this.classList.add('active', 'bg-blue-600', 'text-white', 'shadow-xs');
      this.classList.remove('bg-slate-100', 'text-slate-700');

      activeCategory = this.getAttribute('data-category');
      applyFilters();
    });
  });
});
</script>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
