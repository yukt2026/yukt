<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

$activePage = 'partner';
$pageTitle = 'YUKT Digital Partner Program | अपनी दुकान से IT Services Provide Karein';
$pageDesc = 'Cyber Cafe, CSC Centre, Jan Seva Kendra aur Computer Dukan ke liye YUKT Digital Partner Program. Zero Investment me Website, Billing Software aur Document Services provide karein.';

// Capture referral code if passed
$refCodeInput = $_GET['ref'] ?? $_SESSION['yukt_ref'] ?? $_COOKIE['yukt_ref'] ?? '';
$refCodeInput = preg_replace('/[^a-zA-Z0-9_-]/', '', $refCodeInput);

require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/services-catalogue-data.php';
?>

<style>
  @media (max-width: 767px) {
    /* Hide circular floating WhatsApp widget on mobile to prevent overlapping cards or bottom sticky bar */
    .fixed.bottom-6.right-6,
    [aria-label*="WhatsApp with YUKT"] {
      display: none !important;
    }
  }
</style>

<!-- LIGHT THEME COMPACT MAIN CONTAINER -->
<div class="bg-slate-50 text-slate-800 font-sans selection:bg-yukt-orange selection:text-white pb-20 md:pb-10">

  <!-- ==========================================================================
       SECTION 1: HERO SECTION (COMPACT, LIGHT, 16:9 BANNER)
  ========================================================================== -->
  <section class="relative pt-12 pb-5 sm:pt-16 sm:pb-8 lg:pt-16 lg:pb-8 bg-gradient-to-b from-white via-blue-50/20 to-slate-50 border-b border-slate-200 overflow-hidden">
    <!-- Ambient Light Glows -->
    <div class="absolute -top-20 left-1/2 -translate-x-1/2 w-[550px] h-[250px] bg-blue-100/50 rounded-full blur-3xl pointer-events-none"></div>

    <div class="max-w-7xl mx-auto px-3.5 sm:px-6 lg:px-8 relative z-10">
      
      <!-- Top Announcement Pill -->
      <div class="flex justify-center mb-2.5 sm:mb-3">
        <div class="inline-flex items-center gap-1.5 px-3 py-0.5 rounded-full bg-emerald-50 border border-emerald-300 text-emerald-800 text-[10px] sm:text-xs font-semibold shadow-xs">
          <span class="w-2 h-2 rounded-full bg-emerald-500 animate-pulse"></span>
          <span>Official YUKT Digital Partner Program &bull; 100% Free Joining &bull; Zero Investment</span>
        </div>
      </div>

      <div class="grid grid-cols-1 lg:grid-cols-12 gap-4 lg:gap-8 items-center">
        
        <!-- Left: Punchy Headline & Value Props (7 Cols) -->
        <div class="lg:col-span-7 space-y-3 sm:space-y-4 text-center lg:text-left">
          
          <h1 class="text-2xl sm:text-3xl lg:text-4xl font-display font-extrabold text-slate-900 tracking-tight leading-[1.2]">
            अपनी दुकान को बनाएं <br class="hidden sm:inline">
            <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-600 via-indigo-600 to-yukt-orange">Full IT Solutions Hub</span>
            <span class="text-slate-800 block text-lg sm:text-2xl font-bold mt-0.5">बिना ₹1 खर्च किए!</span>
          </h1>

          <!-- Simple Message Box -->
          <div class="p-3 sm:p-3.5 rounded-xl bg-white border border-slate-200 shadow-xs text-slate-700 text-xs sm:text-sm leading-relaxed text-left">
            <p class="font-medium text-slate-800">
              <span class="text-yukt-orange font-bold">💡</span> 
              "Cyber Cafe, CSC, Jan Seva Kendra aur Computer Dukan ke liye sunahara mauka. Apni dukan se <strong class="text-blue-700">Website</strong>, <strong class="text-blue-700">Billing Software</strong>, <strong class="text-blue-700">Resume / Document Typing</strong> provide karein. Pura technical kaam YUKT karega — aur 15% se 25% commission seedha aapke Bank/UPI me aayega!"
            </p>
          </div>

          <!-- 4 Core Trust Badges (Compact 4-Col Grid) -->
          <div class="grid grid-cols-2 sm:grid-cols-4 gap-2 pt-0.5">
            <div class="p-2 sm:p-2.5 rounded-xl bg-white border border-slate-200 text-center shadow-xs">
              <div class="text-[9px] sm:text-[10px] text-slate-500 font-medium">Upfront Kharch</div>
              <div class="text-xs sm:text-base font-bold text-emerald-600">₹0 (Free)</div>
              <div class="text-[8px] sm:text-[9px] text-slate-400">Zero Investment</div>
            </div>

            <div class="p-2 sm:p-2.5 rounded-xl bg-white border border-slate-200 text-center shadow-xs">
              <div class="text-[9px] sm:text-[10px] text-slate-500 font-medium">Aapka Munafa</div>
              <div class="text-xs sm:text-base font-bold text-yukt-orange">15% – 25%</div>
              <div class="text-[8px] sm:text-[9px] text-slate-400">Per Project</div>
            </div>

            <div class="p-2 sm:p-2.5 rounded-xl bg-white border border-slate-200 text-center shadow-xs">
              <div class="text-[9px] sm:text-[10px] text-slate-500 font-medium">Services Menu</div>
              <div class="text-xs sm:text-base font-bold text-blue-600">140+ Services</div>
              <div class="text-[8px] sm:text-[9px] text-slate-400">Ready To Sell</div>
            </div>

            <div class="p-2 sm:p-2.5 rounded-xl bg-white border border-slate-200 text-center shadow-xs">
              <div class="text-[9px] sm:text-[10px] text-slate-500 font-medium">Technical Kaam</div>
              <div class="text-xs sm:text-base font-bold text-indigo-600">100% YUKT</div>
              <div class="text-[8px] sm:text-[9px] text-slate-400">No Coding Needed</div>
            </div>
          </div>

          <!-- Dual Instant Action Buttons (WhatsApp & Call) -->
          <div class="flex flex-col sm:flex-row items-stretch sm:items-center justify-center lg:justify-start gap-2 pt-0.5">
            
            <!-- WhatsApp Chat Button (Primary) -->
            <a 
              href="<?php echo getWhatsAppUrl('Namaste YUKT Team! Mujhe YUKT Digital Business Partner Program me judna hai. Kripya details share karein.'); ?>" 
              target="_blank" 
              rel="noopener noreferrer" 
              class="px-4 py-2.5 sm:px-5 sm:py-3 rounded-xl font-bold text-xs sm:text-sm text-white bg-emerald-600 hover:bg-emerald-500 shadow-md shadow-emerald-600/20 transition-all flex items-center justify-center gap-1.5 text-center"
            >
              <i data-lucide="message-circle" class="w-4 h-4"></i>
              <span>WhatsApp Par Baat Karein</span>
            </a>

            <!-- Direct Call Button -->
            <a 
              href="tel:+918235411806" 
              class="px-4 py-2.5 sm:px-5 sm:py-3 rounded-xl font-bold text-xs sm:text-sm text-slate-800 bg-white hover:bg-slate-100 border border-slate-300 shadow-xs transition-all flex items-center justify-center gap-1.5 text-center"
            >
              <i data-lucide="phone-call" class="w-4 h-4 text-blue-600"></i>
              <span>Call Karein: +91 82354 11806</span>
            </a>

          </div>

          <!-- Trust Subtext -->
          <div class="flex flex-wrap items-center justify-center lg:justify-start gap-2.5 text-[10px] sm:text-[11px] text-slate-500">
            <span class="flex items-center gap-1"><i data-lucide="check" class="w-3.5 h-3.5 text-emerald-500"></i> Free Shop Marketing Poster</span>
            <span class="flex items-center gap-1"><i data-lucide="check" class="w-3.5 h-3.5 text-emerald-500"></i> Direct UPI / Bank Payout</span>
            <span class="flex items-center gap-1"><i data-lucide="check" class="w-3.5 h-3.5 text-emerald-500"></i> White-Label Support</span>
          </div>

        </div>

        <!-- Right: Proper 16:9 High-Res Banner Visual (5 Cols) -->
        <div class="lg:col-span-5">
          <div class="relative bg-white p-2 sm:p-2.5 rounded-2xl border border-slate-200 shadow-md overflow-hidden">
            
            <!-- 16:9 Banner Image Container -->
            <div class="relative rounded-xl overflow-hidden aspect-[16/9] sm:aspect-[16/10] bg-slate-100">
              <img 
                src="assets/images/partner-hero-banner.jpg" 
                alt="YUKT Digital Partner Program - Authorized Common Service Centre and Cyber Cafe IT Hub" 
                class="w-full h-full object-cover object-center transform hover:scale-102 transition-transform duration-300"
                loading="eager"
              >
              
              <!-- Floating Live Badge Overlay -->
              <div class="absolute top-2 left-2 bg-white/95 backdrop-blur-md px-2 py-0.5 rounded-full shadow-xs border border-slate-100 flex items-center gap-1 text-[9px] sm:text-[10px] font-bold text-slate-800">
                <span class="w-1.5 h-1.5 rounded-full bg-emerald-500 animate-ping"></span>
                <span>YUKT Authorized Partner Hub</span>
              </div>

              <!-- Floating Revenue Badge Overlay -->
              <div class="absolute bottom-2 right-2 bg-slate-900/90 backdrop-blur-md text-white px-2 py-1 rounded-lg shadow-md border border-white/20 text-[9px] sm:text-[10px]">
                <span class="text-slate-300 block text-[8px] sm:text-[9px]">Extra Monthly Income</span>
                <strong class="text-emerald-400 text-[11px] sm:text-xs font-bold">₹15,000 – ₹50,000+</strong>
              </div>
            </div>

            <!-- Quick Links under Banner -->
            <div class="pt-1.5 px-1 flex items-center justify-between text-[10px] sm:text-[11px] text-slate-500">
              <span class="font-medium text-slate-700 truncate">Cyber Cafe &bull; CSC &bull; Kendra</span>
              <div class="flex items-center gap-1.5 shrink-0 ml-2">
                <a href="#services-list" class="text-blue-600 hover:text-blue-700 font-semibold flex items-center gap-0.5">
                  <span>10 Services</span>
                </a>
                <span>&bull;</span>
                <a href="#directory" class="text-emerald-600 hover:text-emerald-700 font-semibold flex items-center gap-0.5">
                  <span>140+ Directory</span>
                  <i data-lucide="arrow-down" class="w-3 h-3"></i>
                </a>
              </div>
            </div>

          </div>
        </div>

      </div>

    </div>
  </section>

  <!-- ==========================================================================
       SECTION 2: HOW IT WORKS (COMPACT 3 STEPS IN HINDI)
  ========================================================================== -->
  <section class="py-5 sm:py-7 bg-white border-b border-slate-200">
    <div class="max-w-7xl mx-auto px-3.5 sm:px-6 lg:px-8">
      
      <div class="text-center max-w-2xl mx-auto mb-3.5 sm:mb-5 space-y-0.5">
        <span class="px-2 py-0.5 rounded-full text-[9px] sm:text-[10px] font-bold uppercase tracking-wider bg-blue-50 text-blue-700 border border-blue-200">
          3 Simple Steps
        </span>
        <h2 class="text-lg sm:text-2xl font-display font-extrabold text-slate-900 tracking-tight">
          यह पार्टनरशिप कैसे काम करती है?
        </h2>
        <p class="text-[11px] sm:text-xs text-slate-600">
          आपको कोई कोडिंग नहीं करनी है — बस 3 आसान स्टेप्स में काम होगा:
        </p>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-3 gap-2.5 sm:gap-4">
        
        <!-- Step 1 Card -->
        <div class="p-3 sm:p-4 rounded-xl bg-slate-50 border border-slate-200 hover:border-blue-300 transition-all space-y-1.5 text-left">
          <div class="flex items-center gap-2">
            <div class="w-7 h-7 sm:w-8 sm:h-8 rounded-lg bg-blue-600 text-white font-display font-bold text-xs sm:text-sm flex items-center justify-center shrink-0">
              1
            </div>
            <h3 class="text-xs sm:text-sm font-bold text-slate-900">कस्टमर से बात करें</h3>
          </div>
          <p class="text-[11px] sm:text-xs text-slate-600 leading-relaxed">
            दुकान पर आने वाले ग्राहक से पूछें — <strong>Website, GST Billing, Resume, Typing, या Logo</strong> बनवाना है?
          </p>
          <div class="text-[10px] sm:text-[11px] font-semibold text-blue-700 flex items-center gap-1 pt-0.5">
            <i data-lucide="check" class="w-3 h-3 text-blue-600"></i>
            <span>फ्री पोस्टर देखकर ग्राहक खुद पूछेंगे</span>
          </div>
        </div>

        <!-- Step 2 Card -->
        <div class="p-3 sm:p-4 rounded-xl bg-slate-50 border border-slate-200 hover:border-yukt-orange transition-all space-y-1.5 text-left">
          <div class="flex items-center gap-2">
            <div class="w-7 h-7 sm:w-8 sm:h-8 rounded-lg bg-yukt-orange text-white font-display font-bold text-xs sm:text-sm flex items-center justify-center shrink-0">
              2
            </div>
            <h3 class="text-xs sm:text-sm font-bold text-slate-900">YUKT को WhatsApp करें</h3>
          </div>
          <p class="text-[11px] sm:text-xs text-slate-600 leading-relaxed">
            कस्टमर का नाम, नंबर और जरूरत हमारे <strong>WhatsApp (+91 82354 11806)</strong> पर भेज दें या कॉल पर बात करवा दें।
          </p>
          <div class="text-[10px] sm:text-[11px] font-semibold text-yukt-orange flex items-center gap-1 pt-0.5">
            <i data-lucide="check" class="w-3 h-3 text-yukt-orange"></i>
            <span>कोटेशन और डीलिंग YUKT टीम करेगी</span>
          </div>
        </div>

        <!-- Step 3 Card -->
        <div class="p-3 sm:p-4 rounded-xl bg-emerald-50/70 border border-emerald-200 hover:border-emerald-300 transition-all space-y-1.5 text-left">
          <div class="flex items-center gap-2">
            <div class="w-7 h-7 sm:w-8 sm:h-8 rounded-lg bg-emerald-600 text-white font-display font-bold text-xs sm:text-sm flex items-center justify-center shrink-0">
              3
            </div>
            <h3 class="text-xs sm:text-sm font-bold text-slate-900">काम पूरा &bull; सीधा कमीशन</h3>
          </div>
          <p class="text-[11px] sm:text-xs text-slate-600 leading-relaxed">
            YUKT टीम प्रोजेक्ट डिलीवर करेगी और आपका <strong>15% से 25% कमीशन</strong> तुरंत आपके <strong>Bank या UPI</strong> में आ जाएगा!
          </p>
          <div class="text-[10px] sm:text-[11px] font-semibold text-emerald-700 flex items-center gap-1 pt-0.5">
            <i data-lucide="check" class="w-3 h-3 text-emerald-600"></i>
            <span>सुरक्षित व पारदर्शी भुगतान</span>
          </div>
        </div>

      </div>

    </div>
  </section>

  <!-- ==========================================================================
       SECTION 3: WHO CAN JOIN? (COMPACT 2-COL MOBILE / 6-COL DESKTOP)
  ========================================================================== -->
  <section class="py-4 sm:py-6 bg-slate-50 border-b border-slate-200">
    <div class="max-w-7xl mx-auto px-3.5 sm:px-6 lg:px-8">
      
      <div class="text-center max-w-2xl mx-auto mb-3 sm:mb-4 space-y-0.5">
        <span class="px-2 py-0.5 rounded-full text-[9px] sm:text-[10px] font-bold uppercase tracking-wider bg-orange-50 text-yukt-orange border border-orange-200">
          Target Partners
        </span>
        <h2 class="text-lg sm:text-2xl font-display font-extrabold text-slate-900 tracking-tight">
          कौन-कौन पार्टनर बन सकता है?
        </h2>
      </div>

      <!-- Compact Grid: 2 Cards per row on Mobile, 6 on Desktop -->
      <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-2 sm:gap-2.5">
        
        <div class="p-2 sm:p-2.5 rounded-xl bg-white border border-slate-200 shadow-xs flex flex-col items-center text-center space-y-1">
          <div class="w-8 h-8 rounded-lg bg-blue-100 text-blue-700 flex items-center justify-center">
            <i data-lucide="monitor" class="w-4 h-4"></i>
          </div>
          <h3 class="text-[11px] sm:text-xs font-bold text-slate-900 leading-snug">Cyber Cafe &amp; Kendra</h3>
          <p class="text-[9px] sm:text-[10px] text-slate-500">Website, Resume, Typing</p>
        </div>

        <div class="p-2 sm:p-2.5 rounded-xl bg-white border border-slate-200 shadow-xs flex flex-col items-center text-center space-y-1">
          <div class="w-8 h-8 rounded-lg bg-emerald-100 text-emerald-700 flex items-center justify-center">
            <i data-lucide="building" class="w-4 h-4"></i>
          </div>
          <h3 class="text-[11px] sm:text-xs font-bold text-slate-900 leading-snug">CSC &amp; Jan Seva Kendra</h3>
          <p class="text-[9px] sm:text-[10px] text-slate-500">GST Billing, Software</p>
        </div>

        <div class="p-2 sm:p-2.5 rounded-xl bg-white border border-slate-200 shadow-xs flex flex-col items-center text-center space-y-1">
          <div class="w-8 h-8 rounded-lg bg-orange-100 text-yukt-orange flex items-center justify-center">
            <i data-lucide="printer" class="w-4 h-4"></i>
          </div>
          <h3 class="text-[11px] sm:text-xs font-bold text-slate-900 leading-snug">Printing &amp; Hardware</h3>
          <p class="text-[9px] sm:text-[10px] text-slate-500">Logo, Banner, Flex</p>
        </div>

        <div class="p-2 sm:p-2.5 rounded-xl bg-white border border-slate-200 shadow-xs flex flex-col items-center text-center space-y-1">
          <div class="w-8 h-8 rounded-lg bg-indigo-100 text-indigo-700 flex items-center justify-center">
            <i data-lucide="copy" class="w-4 h-4"></i>
          </div>
          <h3 class="text-[11px] sm:text-xs font-bold text-slate-900 leading-snug">Photocopy Shop</h3>
          <p class="text-[9px] sm:text-[10px] text-slate-500">PDF, Typing, OCR</p>
        </div>

        <div class="p-2 sm:p-2.5 rounded-xl bg-white border border-slate-200 shadow-xs flex flex-col items-center text-center space-y-1">
          <div class="w-8 h-8 rounded-lg bg-purple-100 text-purple-700 flex items-center justify-center">
            <i data-lucide="laptop" class="w-4 h-4"></i>
          </div>
          <h3 class="text-[11px] sm:text-xs font-bold text-slate-900 leading-snug">Freelancers</h3>
          <p class="text-[9px] sm:text-[10px] text-slate-500">App, Dev Outsource</p>
        </div>

        <div class="p-2 sm:p-2.5 rounded-xl bg-white border border-slate-200 shadow-xs flex flex-col items-center text-center space-y-1">
          <div class="w-8 h-8 rounded-lg bg-amber-100 text-amber-800 flex items-center justify-center">
            <i data-lucide="users" class="w-4 h-4"></i>
          </div>
          <h3 class="text-[11px] sm:text-xs font-bold text-slate-900 leading-snug">Students &amp; Agents</h3>
          <p class="text-[9px] sm:text-[10px] text-slate-500">School, Local Referral</p>
        </div>

      </div>

    </div>
  </section>

  <!-- ==========================================================================
       SECTION 4: CORE SERVICES SHOWCASE (EXACTLY 2 CARDS PER ROW EVERYWHERE)
       "mobile view me thoda gap de do" -> Generous spacing, clean layout, no truncations!
  ========================================================================== -->
  <section id="services-list" class="py-6 sm:py-10 bg-white border-b border-slate-200 scroll-mt-16">
    <div class="max-w-7xl mx-auto px-3.5 sm:px-6 lg:px-8">
      
      <!-- Section Header with Clear Bottom Margin / Gap -->
      <div class="text-center max-w-2xl mx-auto space-y-1.5 mb-5 sm:mb-7">
        <span class="px-2.5 py-0.5 rounded-full text-[9px] sm:text-[10px] font-bold uppercase tracking-wider bg-emerald-50 text-emerald-800 border border-emerald-300">
          10 Strategic Categories
        </span>
        <h2 class="text-xl sm:text-2xl lg:text-3xl font-display font-extrabold text-slate-900 tracking-tight">
          आप अपनी दुकान से ये 10 Services Provide कर सकते हैं
        </h2>
        <p class="text-xs sm:text-sm text-slate-600">
          हर सर्विस के लिए सीधे WhatsApp पर इन्क्वायरी भेजें:
        </p>
      </div>

      <!-- EXACTLY 2 CARDS PER ROW GRID (GENEROUS BREATHING GAP ON MOBILE) -->
      <div class="grid grid-cols-2 gap-3.5 sm:gap-5 lg:gap-6 mt-4 sm:mt-6">
        
        <!-- ==========================================
             CARD 1: WEBSITE & WEB DEVELOPMENT
        ========================================== -->
        <div class="rounded-2xl bg-slate-50 border border-slate-200 p-3 sm:p-4.5 flex flex-col justify-between hover:border-blue-400 hover:shadow-md transition-all space-y-3">
          <div class="space-y-2">
            
            <!-- Top Row: Icon + Badge with Generous Spacing -->
            <div class="flex items-center justify-between pb-2 border-b border-slate-200/80">
              <div class="w-8 h-8 sm:w-10 sm:h-10 rounded-xl bg-blue-600 text-white flex items-center justify-center shrink-0 shadow-2xs">
                <i data-lucide="globe" class="w-4 h-4 sm:w-5 sm:h-5"></i>
              </div>
              <span class="text-[9px] sm:text-[10px] font-bold px-2 py-0.5 rounded-full bg-blue-100 text-blue-800 font-mono shrink-0">
                16 Services
              </span>
            </div>

            <!-- Full Width Title & Hindi Subtitle (No Truncation) -->
            <div class="space-y-0.5">
              <h3 class="text-xs sm:text-base font-bold text-slate-900 leading-snug">
                1. Website Development
              </h3>
              <p class="text-[10px] sm:text-xs font-semibold text-blue-700 leading-tight">
                वेबसाइट बनवायें (दुकान, स्कूल)
              </p>
            </div>

            <!-- Description -->
            <p class="text-[10px] sm:text-xs text-slate-600 leading-relaxed line-clamp-2 sm:line-clamp-none">
              लोकल बिज़नेस, स्कूल, कॉलेज, हॉस्पिटल, होटल और ई-कॉमर्स स्टोर के लिए हाई-स्पीड मोबाइल फ्रेंडली वेबसाइट्स।
            </p>

            <!-- Key Offerings Bullets -->
            <div class="space-y-1 text-[9.5px] sm:text-xs text-slate-700 pt-0.5">
              <div class="flex items-center gap-1.5"><i data-lucide="check" class="w-3 h-3 text-blue-600 shrink-0"></i><span class="truncate">Shop &amp; Business Website</span></div>
              <div class="flex items-center gap-1.5"><i data-lucide="check" class="w-3 h-3 text-blue-600 shrink-0"></i><span class="truncate">School &amp; Coaching Portal</span></div>
              <div class="flex items-center gap-1.5"><i data-lucide="check" class="w-3 h-3 text-blue-600 shrink-0"></i><span class="truncate">Hospital &amp; Clinic Website</span></div>
              <div class="flex items-center gap-1.5"><i data-lucide="check" class="w-3 h-3 text-blue-600 shrink-0"></i><span class="truncate">E-Commerce Online Store</span></div>
            </div>
          </div>

          <!-- Bottom Action -->
          <div class="pt-2.5 border-t border-slate-200 space-y-1.5">
            <div class="flex items-center justify-between text-[9.5px] sm:text-xs font-semibold">
              <span class="text-slate-500">कमीशन:</span>
              <span class="text-emerald-700 font-bold font-mono text-[10px] sm:text-xs">₹1,500 – ₹10,000+</span>
            </div>
            <a 
              href="<?php echo getWhatsAppUrl('Hi YUKT, mujhe Website Development partnership ke baare me janna hai. Mere paas website banwane ka client hai.'); ?>" 
              target="_blank" 
              rel="noopener noreferrer" 
              class="w-full py-2 sm:py-2.5 px-2 rounded-xl bg-emerald-600 hover:bg-emerald-500 text-white font-bold text-[10.5px] sm:text-xs flex items-center justify-center gap-1.5 shadow-xs transition-all text-center"
            >
              <i data-lucide="message-circle" class="w-3.5 h-3.5 shrink-0"></i>
              <span>WhatsApp Enquiry</span>
            </a>
          </div>
        </div>

        <!-- ==========================================
             CARD 2: SOFTWARE & GST BILLING
        ========================================== -->
        <div class="rounded-2xl bg-slate-50 border border-slate-200 p-3 sm:p-4.5 flex flex-col justify-between hover:border-yukt-orange hover:shadow-md transition-all space-y-3">
          <div class="space-y-2">
            
            <!-- Top Row: Icon + Badge with Generous Spacing -->
            <div class="flex items-center justify-between pb-2 border-b border-slate-200/80">
              <div class="w-8 h-8 sm:w-10 sm:h-10 rounded-xl bg-yukt-orange text-white flex items-center justify-center shrink-0 shadow-2xs">
                <i data-lucide="cpu" class="w-4 h-4 sm:w-5 sm:h-5"></i>
              </div>
              <span class="text-[9px] sm:text-[10px] font-bold px-2 py-0.5 rounded-full bg-orange-100 text-orange-800 font-mono shrink-0">
                16 Services
              </span>
            </div>

            <!-- Full Width Title & Hindi Subtitle (No Truncation) -->
            <div class="space-y-0.5">
              <h3 class="text-xs sm:text-base font-bold text-slate-900 leading-snug">
                2. Software &amp; GST Billing
              </h3>
              <p class="text-[10px] sm:text-xs font-semibold text-yukt-orange leading-tight">
                दुकान का बिलिंग सॉफ्टवेयर
              </p>
            </div>

            <!-- Description -->
            <p class="text-[10px] sm:text-xs text-slate-600 leading-relaxed line-clamp-2 sm:line-clamp-none">
              किराना दुकान, मेडिकल स्टोर, कपड़ों की दुकान, रेस्टोरेंट और शोरूम के लिए आसान GST इनवॉइस बिलिंग व स्टॉक सॉफ्टवेयर।
            </p>

            <!-- Key Offerings Bullets -->
            <div class="space-y-1 text-[9.5px] sm:text-xs text-slate-700 pt-0.5">
              <div class="flex items-center gap-1.5"><i data-lucide="check" class="w-3 h-3 text-yukt-orange shrink-0"></i><span class="truncate">Retail &amp; Kirana Shop GST POS</span></div>
              <div class="flex items-center gap-1.5"><i data-lucide="check" class="w-3 h-3 text-yukt-orange shrink-0"></i><span class="truncate">Stock &amp; Inventory Management</span></div>
              <div class="flex items-center gap-1.5"><i data-lucide="check" class="w-3 h-3 text-yukt-orange shrink-0"></i><span class="truncate">Medical &amp; Pharmacy Software</span></div>
              <div class="flex items-center gap-1.5"><i data-lucide="check" class="w-3 h-3 text-yukt-orange shrink-0"></i><span class="truncate">Hotel &amp; Restaurant Table Billing</span></div>
            </div>
          </div>

          <!-- Bottom Action -->
          <div class="pt-2.5 border-t border-slate-200 space-y-1.5">
            <div class="flex items-center justify-between text-[9.5px] sm:text-xs font-semibold">
              <span class="text-slate-500">कमीशन:</span>
              <span class="text-emerald-700 font-bold font-mono text-[10px] sm:text-xs">₹2,000 – ₹20,000+</span>
            </div>
            <a 
              href="<?php echo getWhatsAppUrl('Hi YUKT, mujhe GST Billing & Shop Software partnership ke baare me janna hai. Client ko software chahiye.'); ?>" 
              target="_blank" 
              rel="noopener noreferrer" 
              class="w-full py-2 sm:py-2.5 px-2 rounded-xl bg-emerald-600 hover:bg-emerald-500 text-white font-bold text-[10.5px] sm:text-xs flex items-center justify-center gap-1.5 shadow-xs transition-all text-center"
            >
              <i data-lucide="message-circle" class="w-3.5 h-3.5 shrink-0"></i>
              <span>WhatsApp Enquiry</span>
            </a>
          </div>
        </div>

        <!-- ==========================================
             CARD 3: ADVANCED DOCUMENT SERVICES (CSC SPECIAL)
        ========================================== -->
        <div class="rounded-2xl bg-amber-50/70 border border-amber-300 p-3 sm:p-4.5 flex flex-col justify-between hover:border-amber-400 hover:shadow-md transition-all space-y-3">
          <div class="space-y-2">
            
            <!-- Top Row: Icon + Badge with Generous Spacing -->
            <div class="flex items-center justify-between pb-2 border-b border-amber-200/80">
              <div class="w-8 h-8 sm:w-10 sm:h-10 rounded-xl bg-amber-600 text-white flex items-center justify-center shrink-0 shadow-2xs">
                <i data-lucide="file-text" class="w-4 h-4 sm:w-5 sm:h-5"></i>
              </div>
              <span class="text-[9px] sm:text-[10px] font-bold px-2 py-0.5 rounded-full bg-amber-200 text-amber-900 font-mono shrink-0">
                CSC Special
              </span>
            </div>

            <!-- Full Width Title & Hindi Subtitle (No Truncation) -->
            <div class="space-y-0.5">
              <h3 class="text-xs sm:text-base font-bold text-slate-900 leading-snug">
                3. Document Services
              </h3>
              <p class="text-[10px] sm:text-xs font-semibold text-amber-800 leading-tight">
                रिज्यूमे, टाइपिंग व OCR
              </p>
            </div>

            <!-- Description -->
            <p class="text-[10px] sm:text-xs text-slate-600 leading-relaxed line-clamp-2 sm:line-clamp-none">
              साइबर कैफे पर चलने वाले काम: जॉब के लिए प्रोफेशनल रिज्यूमे, हिंदी/इंग्लिश टाइपिंग, बैंक लोन प्रोजेक्ट रिपोर्ट व OCR।
            </p>

            <!-- Key Offerings Bullets -->
            <div class="space-y-1 text-[9.5px] sm:text-xs text-slate-700 pt-0.5">
              <div class="flex items-center gap-1.5"><i data-lucide="check" class="w-3 h-3 text-amber-600 shrink-0"></i><span class="truncate">ATS Job Resume / CV Creation</span></div>
              <div class="flex items-center gap-1.5"><i data-lucide="check" class="w-3 h-3 text-amber-600 shrink-0"></i><span class="truncate">Fast Hindi &amp; English Typing</span></div>
              <div class="flex items-center gap-1.5"><i data-lucide="check" class="w-3 h-3 text-amber-600 shrink-0"></i><span class="truncate">Scanned to Word / OCR</span></div>
              <div class="flex items-center gap-1.5"><i data-lucide="check" class="w-3 h-3 text-amber-600 shrink-0"></i><span class="truncate">Bank Loan Project Reports</span></div>
            </div>

            <!-- Disclaimer note -->
            <div class="p-1.5 rounded-lg bg-white border border-amber-200 text-[8.5px] sm:text-[10px] text-amber-900 leading-tight">
              <strong>नोट:</strong> फॉर्मेटिंग व ड्राफ्टिंग सहायता; कानूनी सलाह नहीं।
            </div>
          </div>

          <!-- Bottom Action -->
          <div class="pt-2.5 border-t border-amber-200/80 space-y-1.5">
            <div class="flex items-center justify-between text-[9.5px] sm:text-xs font-semibold">
              <span class="text-slate-500">कमीशन:</span>
              <span class="text-emerald-700 font-bold font-mono text-[10px] sm:text-xs">₹200 – ₹3,000+</span>
            </div>
            <a 
              href="<?php echo getWhatsAppUrl('Hi YUKT, mujhe Advanced Document Services (Resume, Typing, Project Report, OCR) partnership ke baare me janna hai.'); ?>" 
              target="_blank" 
              rel="noopener noreferrer" 
              class="w-full py-2 sm:py-2.5 px-2 rounded-xl bg-emerald-600 hover:bg-emerald-500 text-white font-bold text-[10.5px] sm:text-xs flex items-center justify-center gap-1.5 shadow-xs transition-all text-center"
            >
              <i data-lucide="message-circle" class="w-3.5 h-3.5 shrink-0"></i>
              <span>WhatsApp Enquiry</span>
            </a>
          </div>
        </div>

        <!-- ==========================================
             CARD 4: GRAPHIC DESIGN & PRINTING
        ========================================== -->
        <div class="rounded-2xl bg-slate-50 border border-slate-200 p-3 sm:p-4.5 flex flex-col justify-between hover:border-purple-400 hover:shadow-md transition-all space-y-3">
          <div class="space-y-2">
            
            <!-- Top Row: Icon + Badge with Generous Spacing -->
            <div class="flex items-center justify-between pb-2 border-b border-slate-200/80">
              <div class="w-8 h-8 sm:w-10 sm:h-10 rounded-xl bg-purple-600 text-white flex items-center justify-center shrink-0 shadow-2xs">
                <i data-lucide="palette" class="w-4 h-4 sm:w-5 sm:h-5"></i>
              </div>
              <span class="text-[9px] sm:text-[10px] font-bold px-2 py-0.5 rounded-full bg-purple-100 text-purple-800 font-mono shrink-0">
                16 Services
              </span>
            </div>

            <!-- Full Width Title & Hindi Subtitle (No Truncation) -->
            <div class="space-y-0.5">
              <h3 class="text-xs sm:text-base font-bold text-slate-900 leading-snug">
                4. Graphic Design &amp; Print
              </h3>
              <p class="text-[10px] sm:text-xs font-semibold text-purple-700 leading-tight">
                लोगो, बैनर व कार्ड डिजाइन
              </p>
            </div>

            <!-- Description -->
            <p class="text-[10px] sm:text-xs text-slate-600 leading-relaxed line-clamp-2 sm:line-clamp-none">
              दुकानदार और नए व्यापारियों के लिए प्रोफेशनल बिज़नेस लोगो, फ्लेक्स बैनर, पम्पलेट, ब्रोशर व विजिटिंग कार्ड डिजाइन।
            </p>

            <!-- Key Offerings Bullets -->
            <div class="space-y-1 text-[9.5px] sm:text-xs text-slate-700 pt-0.5">
              <div class="flex items-center gap-1.5"><i data-lucide="check" class="w-3 h-3 text-purple-600 shrink-0"></i><span class="truncate">Professional Business Logo</span></div>
              <div class="flex items-center gap-1.5"><i data-lucide="check" class="w-3 h-3 text-purple-600 shrink-0"></i><span class="truncate">Shop Flex Banner &amp; Hoarding</span></div>
              <div class="flex items-center gap-1.5"><i data-lucide="check" class="w-3 h-3 text-purple-600 shrink-0"></i><span class="truncate">Visiting Card &amp; Letterhead</span></div>
              <div class="flex items-center gap-1.5"><i data-lucide="check" class="w-3 h-3 text-purple-600 shrink-0"></i><span class="truncate">Social Media Ad Posters</span></div>
            </div>
          </div>

          <!-- Bottom Action -->
          <div class="pt-2.5 border-t border-slate-200 space-y-1.5">
            <div class="flex items-center justify-between text-[9.5px] sm:text-xs font-semibold">
              <span class="text-slate-500">कमीशन:</span>
              <span class="text-emerald-700 font-bold font-mono text-[10px] sm:text-xs">₹500 – ₹4,000+</span>
            </div>
            <a 
              href="<?php echo getWhatsAppUrl('Hi YUKT, mujhe Graphic Design (Logo, Flex Banner, Visiting Card) partnership ke baare me janna hai.'); ?>" 
              target="_blank" 
              rel="noopener noreferrer" 
              class="w-full py-2 sm:py-2.5 px-2 rounded-xl bg-emerald-600 hover:bg-emerald-500 text-white font-bold text-[10.5px] sm:text-xs flex items-center justify-center gap-1.5 shadow-xs transition-all text-center"
            >
              <i data-lucide="message-circle" class="w-3.5 h-3.5 shrink-0"></i>
              <span>WhatsApp Enquiry</span>
            </a>
          </div>
        </div>

        <!-- ==========================================
             CARD 5: GOOGLE MAPS & LOCAL MARKETING
        ========================================== -->
        <div class="rounded-2xl bg-slate-50 border border-slate-200 p-3 sm:p-4.5 flex flex-col justify-between hover:border-red-400 hover:shadow-md transition-all space-y-3">
          <div class="space-y-2">
            
            <!-- Top Row: Icon + Badge with Generous Spacing -->
            <div class="flex items-center justify-between pb-2 border-b border-slate-200/80">
              <div class="w-8 h-8 sm:w-10 sm:h-10 rounded-xl bg-red-600 text-white flex items-center justify-center shrink-0 shadow-2xs">
                <i data-lucide="map-pin" class="w-4 h-4 sm:w-5 sm:h-5"></i>
              </div>
              <span class="text-[9px] sm:text-[10px] font-bold px-2 py-0.5 rounded-full bg-red-100 text-red-800 font-mono shrink-0">
                16 Services
              </span>
            </div>

            <!-- Full Width Title & Hindi Subtitle (No Truncation) -->
            <div class="space-y-0.5">
              <h3 class="text-xs sm:text-base font-bold text-slate-900 leading-snug">
                5. Google Maps &amp; Ads
              </h3>
              <p class="text-[10px] sm:text-xs font-semibold text-red-700 leading-tight">
                Google Maps टॉप लिस्टिंग
              </p>
            </div>

            <!-- Description -->
            <p class="text-[10px] sm:text-xs text-slate-600 leading-relaxed line-clamp-2 sm:line-clamp-none">
              स्थानीय दुकानों व क्लिनिक को Google Search और Google Maps पर टॉप लिस्टिंग करवाएं। Facebook व Instagram Ads से नए ग्राहक लाएं।
            </p>

            <!-- Key Offerings Bullets -->
            <div class="space-y-1 text-[9.5px] sm:text-xs text-slate-700 pt-0.5">
              <div class="flex items-center gap-1.5"><i data-lucide="check" class="w-3 h-3 text-red-600 shrink-0"></i><span class="truncate">Google Business Profile Setup</span></div>
              <div class="flex items-center gap-1.5"><i data-lucide="check" class="w-3 h-3 text-red-600 shrink-0"></i><span class="truncate">Local Maps Top 3 Ranking</span></div>
              <div class="flex items-center gap-1.5"><i data-lucide="check" class="w-3 h-3 text-red-600 shrink-0"></i><span class="truncate">Facebook &amp; Instagram Ads</span></div>
              <div class="flex items-center gap-1.5"><i data-lucide="check" class="w-3 h-3 text-red-600 shrink-0"></i><span class="truncate">WhatsApp Bulk Promotion</span></div>
            </div>
          </div>

          <!-- Bottom Action -->
          <div class="pt-2.5 border-t border-slate-200 space-y-1.5">
            <div class="flex items-center justify-between text-[9.5px] sm:text-xs font-semibold">
              <span class="text-slate-500">कमीशन:</span>
              <span class="text-emerald-700 font-bold font-mono text-[10px] sm:text-xs">₹1,000 – ₹8,000+</span>
            </div>
            <a 
              href="<?php echo getWhatsAppUrl('Hi YUKT, mujhe Google Business Profile / Local Marketing partnership ke baare me janna hai. Shop listing client hai.'); ?>" 
              target="_blank" 
              rel="noopener noreferrer" 
              class="w-full py-2 sm:py-2.5 px-2 rounded-xl bg-emerald-600 hover:bg-emerald-500 text-white font-bold text-[10.5px] sm:text-xs flex items-center justify-center gap-1.5 shadow-xs transition-all text-center"
            >
              <i data-lucide="message-circle" class="w-3.5 h-3.5 shrink-0"></i>
              <span>WhatsApp Enquiry</span>
            </a>
          </div>
        </div>

        <!-- ==========================================
             CARD 6: WHATSAPP BOT & AI AUTOMATION
        ========================================== -->
        <div class="rounded-2xl bg-slate-50 border border-slate-200 p-3 sm:p-4.5 flex flex-col justify-between hover:border-emerald-500 hover:shadow-md transition-all space-y-3">
          <div class="space-y-2">
            
            <!-- Top Row: Icon + Badge with Generous Spacing -->
            <div class="flex items-center justify-between pb-2 border-b border-slate-200/80">
              <div class="w-8 h-8 sm:w-10 sm:h-10 rounded-xl bg-emerald-600 text-white flex items-center justify-center shrink-0 shadow-2xs">
                <i data-lucide="bot" class="w-4 h-4 sm:w-5 sm:h-5"></i>
              </div>
              <span class="text-[9px] sm:text-[10px] font-bold px-2 py-0.5 rounded-full bg-emerald-100 text-emerald-800 font-mono shrink-0">
                14 Services
              </span>
            </div>

            <!-- Full Width Title & Hindi Subtitle (No Truncation) -->
            <div class="space-y-0.5">
              <h3 class="text-xs sm:text-base font-bold text-slate-900 leading-snug">
                6. WhatsApp Bot &amp; AI
              </h3>
              <p class="text-[10px] sm:text-xs font-semibold text-emerald-700 leading-tight">
                24/7 ऑटो रिप्लाई बॉट
              </p>
            </div>

            <!-- Description -->
            <p class="text-[10px] sm:text-xs text-slate-600 leading-relaxed line-clamp-2 sm:line-clamp-none">
              दुकानदार, डॉक्टर व कोचिंग के लिए ऑटोमैटिक व्हाट्सएप बॉट जो कस्टमर के मैसेज आते ही रेट लिस्ट व इंक्वायरी का रिप्लाई देता है।
            </p>

            <!-- Key Offerings Bullets -->
            <div class="space-y-1 text-[9.5px] sm:text-xs text-slate-700 pt-0.5">
              <div class="flex items-center gap-1.5"><i data-lucide="check" class="w-3 h-3 text-emerald-600 shrink-0"></i><span class="truncate">WhatsApp 24/7 Auto-Reply Bot</span></div>
              <div class="flex items-center gap-1.5"><i data-lucide="check" class="w-3 h-3 text-emerald-600 shrink-0"></i><span class="truncate">Order &amp; Booking Bot</span></div>
              <div class="flex items-center gap-1.5"><i data-lucide="check" class="w-3 h-3 text-emerald-600 shrink-0"></i><span class="truncate">Auto Invoices on WhatsApp</span></div>
              <div class="flex items-center gap-1.5"><i data-lucide="check" class="w-3 h-3 text-emerald-600 shrink-0"></i><span class="truncate">AI Customer Support</span></div>
            </div>
          </div>

          <!-- Bottom Action -->
          <div class="pt-2.5 border-t border-slate-200 space-y-1.5">
            <div class="flex items-center justify-between text-[9.5px] sm:text-xs font-semibold">
              <span class="text-slate-500">कमीशन:</span>
              <span class="text-emerald-700 font-bold font-mono text-[10px] sm:text-xs">₹2,000 – ₹15,000+</span>
            </div>
            <a 
              href="<?php echo getWhatsAppUrl('Hi YUKT, mujhe WhatsApp Chatbot & AI Automation partnership ke baare me janna hai.'); ?>" 
              target="_blank" 
              rel="noopener noreferrer" 
              class="w-full py-2 sm:py-2.5 px-2 rounded-xl bg-emerald-600 hover:bg-emerald-500 text-white font-bold text-[10.5px] sm:text-xs flex items-center justify-center gap-1.5 shadow-xs transition-all text-center"
            >
              <i data-lucide="message-circle" class="w-3.5 h-3.5 shrink-0"></i>
              <span>WhatsApp Enquiry</span>
            </a>
          </div>
        </div>

        <!-- ==========================================
             CARD 7: MOBILE APP DEVELOPMENT
        ========================================== -->
        <div class="rounded-2xl bg-slate-50 border border-slate-200 p-3 sm:p-4.5 flex flex-col justify-between hover:border-indigo-400 hover:shadow-md transition-all space-y-3">
          <div class="space-y-2">
            
            <!-- Top Row: Icon + Badge with Generous Spacing -->
            <div class="flex items-center justify-between pb-2 border-b border-slate-200/80">
              <div class="w-8 h-8 sm:w-10 sm:h-10 rounded-xl bg-indigo-600 text-white flex items-center justify-center shrink-0 shadow-2xs">
                <i data-lucide="smartphone" class="w-4 h-4 sm:w-5 sm:h-5"></i>
              </div>
              <span class="text-[9px] sm:text-[10px] font-bold px-2 py-0.5 rounded-full bg-indigo-100 text-indigo-800 font-mono shrink-0">
                10 Services
              </span>
            </div>

            <!-- Full Width Title & Hindi Subtitle (No Truncation) -->
            <div class="space-y-0.5">
              <h3 class="text-xs sm:text-base font-bold text-slate-900 leading-snug">
                7. Mobile App Dev
              </h3>
              <p class="text-[10px] sm:text-xs font-semibold text-indigo-700 leading-tight">
                एंड्रॉयड व iOS मोबाइल ऐप
              </p>
            </div>

            <!-- Description -->
            <p class="text-[10px] sm:text-xs text-slate-600 leading-relaxed line-clamp-2 sm:line-clamp-none">
              लोकल दुकानों, डिलीवरी सर्विस, स्कूल और कोचिंग के लिए कस्टम एंड्रॉयड मोबाइल ऐप जो Google Play Store पर लाइव होता है।
            </p>

            <!-- Key Offerings Bullets -->
            <div class="space-y-1 text-[9.5px] sm:text-xs text-slate-700 pt-0.5">
              <div class="flex items-center gap-1.5"><i data-lucide="check" class="w-3 h-3 text-indigo-600 shrink-0"></i><span class="truncate">Android App for Businesses</span></div>
              <div class="flex items-center gap-1.5"><i data-lucide="check" class="w-3 h-3 text-indigo-600 shrink-0"></i><span class="truncate">Order &amp; Delivery Apps</span></div>
              <div class="flex items-center gap-1.5"><i data-lucide="check" class="w-3 h-3 text-indigo-600 shrink-0"></i><span class="truncate">School &amp; Coaching Apps</span></div>
              <div class="flex items-center gap-1.5"><i data-lucide="check" class="w-3 h-3 text-indigo-600 shrink-0"></i><span class="truncate">Google Play Store Publishing</span></div>
            </div>
          </div>

          <!-- Bottom Action -->
          <div class="pt-2.5 border-t border-slate-200 space-y-1.5">
            <div class="flex items-center justify-between text-[9.5px] sm:text-xs font-semibold">
              <span class="text-slate-500">कमीशन:</span>
              <span class="text-emerald-700 font-bold font-mono text-[10px] sm:text-xs">₹5,000 – ₹25,000+</span>
            </div>
            <a 
              href="<?php echo getWhatsAppUrl('Hi YUKT, mujhe Mobile App Development partnership ke baare me janna hai. Client ko Android app banwana hai.'); ?>" 
              target="_blank" 
              rel="noopener noreferrer" 
              class="w-full py-2 sm:py-2.5 px-2 rounded-xl bg-emerald-600 hover:bg-emerald-500 text-white font-bold text-[10.5px] sm:text-xs flex items-center justify-center gap-1.5 shadow-xs transition-all text-center"
            >
              <i data-lucide="message-circle" class="w-3.5 h-3.5 shrink-0"></i>
              <span>WhatsApp Enquiry</span>
            </a>
          </div>
        </div>

        <!-- ==========================================
             CARD 8: SCHOOL & COACHING TECH
        ========================================== -->
        <div class="rounded-2xl bg-slate-50 border border-slate-200 p-3 sm:p-4.5 flex flex-col justify-between hover:border-teal-400 hover:shadow-md transition-all space-y-3">
          <div class="space-y-2">
            
            <!-- Top Row: Icon + Badge with Generous Spacing -->
            <div class="flex items-center justify-between pb-2 border-b border-slate-200/80">
              <div class="w-8 h-8 sm:w-10 sm:h-10 rounded-xl bg-teal-600 text-white flex items-center justify-center shrink-0 shadow-2xs">
                <i data-lucide="graduation-cap" class="w-4 h-4 sm:w-5 sm:h-5"></i>
              </div>
              <span class="text-[9px] sm:text-[10px] font-bold px-2 py-0.5 rounded-full bg-teal-100 text-teal-800 font-mono shrink-0">
                10 Services
              </span>
            </div>

            <!-- Full Width Title & Hindi Subtitle (No Truncation) -->
            <div class="space-y-0.5">
              <h3 class="text-xs sm:text-base font-bold text-slate-900 leading-snug">
                8. School &amp; Coaching
              </h3>
              <p class="text-[10px] sm:text-xs font-semibold text-teal-700 leading-tight">
                स्कूल सॉफ्टवेयर व पोर्टल
              </p>
            </div>

            <!-- Description -->
            <p class="text-[10px] sm:text-xs text-slate-600 leading-relaxed line-clamp-2 sm:line-clamp-none">
              स्कूलों और कोचिंग सेंटरों के लिए फीस मैनेजमेंट, स्टूडेंट अटेंडेंस, ऑनलाइन एडमिशन, रिजल्ट और पैरेंट SMS सिस्टम।
            </p>

            <!-- Key Offerings Bullets -->
            <div class="space-y-1 text-[9.5px] sm:text-xs text-slate-700 pt-0.5">
              <div class="flex items-center gap-1.5"><i data-lucide="check" class="w-3 h-3 text-teal-600 shrink-0"></i><span class="truncate">Complete School ERP Software</span></div>
              <div class="flex items-center gap-1.5"><i data-lucide="check" class="w-3 h-3 text-teal-600 shrink-0"></i><span class="truncate">Fee Collection &amp; Receipts</span></div>
              <div class="flex items-center gap-1.5"><i data-lucide="check" class="w-3 h-3 text-teal-600 shrink-0"></i><span class="truncate">Attendance &amp; Parent SMS</span></div>
              <div class="flex items-center gap-1.5"><i data-lucide="check" class="w-3 h-3 text-teal-600 shrink-0"></i><span class="truncate">Online Admission &amp; ID Cards</span></div>
            </div>
          </div>

          <!-- Bottom Action -->
          <div class="pt-2.5 border-t border-slate-200 space-y-1.5">
            <div class="flex items-center justify-between text-[9.5px] sm:text-xs font-semibold">
              <span class="text-slate-500">कमीशन:</span>
              <span class="text-emerald-700 font-bold font-mono text-[10px] sm:text-xs">₹4,000 – ₹20,000+</span>
            </div>
            <a 
              href="<?php echo getWhatsAppUrl('Hi YUKT, mujhe School & Coaching Software partnership ke baare me janna hai. Mere contact me school/coaching hai.'); ?>" 
              target="_blank" 
              rel="noopener noreferrer" 
              class="w-full py-2 sm:py-2.5 px-2 rounded-xl bg-emerald-600 hover:bg-emerald-500 text-white font-bold text-[10.5px] sm:text-xs flex items-center justify-center gap-1.5 shadow-xs transition-all text-center"
            >
              <i data-lucide="message-circle" class="w-3.5 h-3.5 shrink-0"></i>
              <span>WhatsApp Enquiry</span>
            </a>
          </div>
        </div>

        <!-- ==========================================
             CARD 9: IT & DOMAIN HOSTING
        ========================================== -->
        <div class="rounded-2xl bg-slate-50 border border-slate-200 p-3 sm:p-4.5 flex flex-col justify-between hover:border-cyan-400 hover:shadow-md transition-all space-y-3">
          <div class="space-y-2">
            
            <!-- Top Row: Icon + Badge with Generous Spacing -->
            <div class="flex items-center justify-between pb-2 border-b border-slate-200/80">
              <div class="w-8 h-8 sm:w-10 sm:h-10 rounded-xl bg-cyan-700 text-white flex items-center justify-center shrink-0 shadow-2xs">
                <i data-lucide="server" class="w-4 h-4 sm:w-5 sm:h-5"></i>
              </div>
              <span class="text-[9px] sm:text-[10px] font-bold px-2 py-0.5 rounded-full bg-cyan-100 text-cyan-800 font-mono shrink-0">
                16 Services
              </span>
            </div>

            <!-- Full Width Title & Hindi Subtitle (No Truncation) -->
            <div class="space-y-0.5">
              <h3 class="text-xs sm:text-base font-bold text-slate-900 leading-snug">
                9. IT, Domain &amp; Hosting
              </h3>
              <p class="text-[10px] sm:text-xs font-semibold text-cyan-800 leading-tight">
                डोमेन, होस्टिंग व बिजनेस ईमेल
              </p>
            </div>

            <!-- Description -->
            <p class="text-[10px] sm:text-xs text-slate-600 leading-relaxed line-clamp-2 sm:line-clamp-none">
              कंपनी व व्यापारियों के लिए .com / .in डोमेन बुक करना, बिजनेस ईमेल (info@company.com), वेब होस्टिंग व SSL।
            </p>

            <!-- Key Offerings Bullets -->
            <div class="space-y-1 text-[9.5px] sm:text-xs text-slate-700 pt-0.5">
              <div class="flex items-center gap-1.5"><i data-lucide="check" class="w-3 h-3 text-cyan-700 shrink-0"></i><span class="truncate">.COM / .IN Domain Registration</span></div>
              <div class="flex items-center gap-1.5"><i data-lucide="check" class="w-3 h-3 text-cyan-700 shrink-0"></i><span class="truncate">Professional Business Email</span></div>
              <div class="flex items-center gap-1.5"><i data-lucide="check" class="w-3 h-3 text-cyan-700 shrink-0"></i><span class="truncate">High-Speed Cloud Hosting</span></div>
              <div class="flex items-center gap-1.5"><i data-lucide="check" class="w-3 h-3 text-cyan-700 shrink-0"></i><span class="truncate">SSL Security &amp; Maintenance</span></div>
            </div>
          </div>

          <!-- Bottom Action -->
          <div class="pt-2.5 border-t border-slate-200 space-y-1.5">
            <div class="flex items-center justify-between text-[9.5px] sm:text-xs font-semibold">
              <span class="text-slate-500">कमीशन:</span>
              <span class="text-emerald-700 font-bold font-mono text-[10px] sm:text-xs">₹500 – ₹5,000+</span>
            </div>
            <a 
              href="<?php echo getWhatsAppUrl('Hi YUKT, mujhe Domain, Hosting & Business Email partnership ke baare me janna hai.'); ?>" 
              target="_blank" 
              rel="noopener noreferrer" 
              class="w-full py-2 sm:py-2.5 px-2 rounded-xl bg-emerald-600 hover:bg-emerald-500 text-white font-bold text-[10.5px] sm:text-xs flex items-center justify-center gap-1.5 shadow-xs transition-all text-center"
            >
              <i data-lucide="message-circle" class="w-3.5 h-3.5 shrink-0"></i>
              <span>WhatsApp Enquiry</span>
            </a>
          </div>
        </div>

        <!-- ==========================================
             CARD 10: COMPLETE SHOP DIGITALIZATION
        ========================================== -->
        <div class="rounded-2xl bg-slate-50 border border-slate-200 p-3 sm:p-4.5 flex flex-col justify-between hover:border-emerald-400 hover:shadow-md transition-all space-y-3">
          <div class="space-y-2">
            
            <!-- Top Row: Icon + Badge with Generous Spacing -->
            <div class="flex items-center justify-between pb-2 border-b border-slate-200/80">
              <div class="w-8 h-8 sm:w-10 sm:h-10 rounded-xl bg-emerald-700 text-white flex items-center justify-center shrink-0 shadow-2xs">
                <i data-lucide="qr-code" class="w-4 h-4 sm:w-5 sm:h-5"></i>
              </div>
              <span class="text-[9px] sm:text-[10px] font-bold px-2 py-0.5 rounded-full bg-emerald-100 text-emerald-800 font-mono shrink-0">
                12 Services
              </span>
            </div>

            <!-- Full Width Title & Hindi Subtitle (No Truncation) -->
            <div class="space-y-0.5">
              <h3 class="text-xs sm:text-base font-bold text-slate-900 leading-snug">
                10. Shop Digitalization
              </h3>
              <p class="text-[10px] sm:text-xs font-semibold text-emerald-800 leading-tight">
                दुकान का संपूर्ण डिजिटल सेटअप
              </p>
            </div>

            <!-- Description -->
            <p class="text-[10px] sm:text-xs text-slate-600 leading-relaxed line-clamp-2 sm:line-clamp-none">
              किसी भी सामान्य दुकान को फुल डिजिटल बनाएं: QR कोड स्टैंड, डिजिटल रेट कार्ड कैटलॉग व WhatsApp बिजनेस कैटलॉग।
            </p>

            <!-- Key Offerings Bullets -->
            <div class="space-y-1 text-[9.5px] sm:text-xs text-slate-700 pt-0.5">
              <div class="flex items-center gap-1.5"><i data-lucide="check" class="w-3 h-3 text-emerald-700 shrink-0"></i><span class="truncate">All-in-One Digital Store Setup</span></div>
              <div class="flex items-center gap-1.5"><i data-lucide="check" class="w-3 h-3 text-emerald-700 shrink-0"></i><span class="truncate">Digital PDF Product Catalogue</span></div>
              <div class="flex items-center gap-1.5"><i data-lucide="check" class="w-3 h-3 text-emerald-700 shrink-0"></i><span class="truncate">Branded QR Standee Design</span></div>
              <div class="flex items-center gap-1.5"><i data-lucide="check" class="w-3 h-3 text-emerald-700 shrink-0"></i><span class="truncate">WhatsApp Business Shop</span></div>
            </div>
          </div>

          <!-- Bottom Action -->
          <div class="pt-2.5 border-t border-slate-200 space-y-1.5">
            <div class="flex items-center justify-between text-[9.5px] sm:text-xs font-semibold">
              <span class="text-slate-500">कमीशन:</span>
              <span class="text-emerald-700 font-bold font-mono text-[10px] sm:text-xs">₹1,500 – ₹8,000+</span>
            </div>
            <a 
              href="<?php echo getWhatsAppUrl('Hi YUKT, mujhe Complete Shop Digitalization partnership ke baare me janna hai. Local shop ko digital banana hai.'); ?>" 
              target="_blank" 
              rel="noopener noreferrer" 
              class="w-full py-2 sm:py-2.5 px-2 rounded-xl bg-emerald-600 hover:bg-emerald-500 text-white font-bold text-[10.5px] sm:text-xs flex items-center justify-center gap-1.5 shadow-xs transition-all text-center"
            >
              <i data-lucide="message-circle" class="w-3.5 h-3.5 shrink-0"></i>
              <span>WhatsApp Enquiry</span>
            </a>
          </div>
        </div>

      </div>

      <!-- Complete 140+ Services Direct Quick Jump -->
      <div class="text-center pt-3 sm:pt-4">
        <a 
          href="#directory" 
          class="inline-flex items-center gap-1.5 px-4 py-2 sm:px-6 sm:py-2.5 rounded-xl bg-blue-50 hover:bg-blue-100 border border-blue-300 text-blue-800 font-bold text-[11px] sm:text-xs shadow-xs transition-all"
        >
          <i data-lucide="search" class="w-4 h-4 text-blue-600"></i>
          <span>नीचे सम्पूर्ण 140+ सर्विसेज डायरेक्टरी में खोजें &darr;</span>
        </a>
      </div>

    </div>
  </section>

  <!-- ==========================================================================
       SECTION 4B: INTERACTIVE 140+ SERVICES DIRECTORY EXPLORER
       "directory wala section dikh na raha hai partner wale me"
  ========================================================================== -->
  <section id="directory" class="py-6 sm:py-10 bg-slate-100/70 border-b border-slate-200 scroll-mt-16">
    <div class="max-w-7xl mx-auto px-3.5 sm:px-6 lg:px-8 space-y-4 sm:space-y-6">
      
      <!-- Section Header -->
      <div class="text-center max-w-2xl mx-auto space-y-1.5 mb-2 sm:mb-4">
        <span class="px-2.5 py-0.5 rounded-full text-[9px] sm:text-[10px] font-bold uppercase tracking-wider bg-blue-50 text-blue-800 border border-blue-200">
          Complete Catalogue Explorer
        </span>
        <h2 class="text-xl sm:text-2xl lg:text-3xl font-display font-extrabold text-slate-900 tracking-tight">
          सम्पूर्ण 140+ डिजिटल सर्विसेज डायरेक्टरी
        </h2>
        <p class="text-xs sm:text-sm text-slate-600">
          नीचे कोई भी सर्विस सर्च करें या कैटेगरी चुनकर सभी सर्विसेज देखें — हर सर्विस के लिए डायरेक्ट WhatsApp इन्क्वायरी उपलब्ध है:
        </p>
      </div>

      <!-- Search & Category Filter Controls -->
      <div class="max-w-2xl mx-auto space-y-2.5">
        <div class="relative">
          <div class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none text-slate-400">
            <i data-lucide="search" class="w-4 h-4"></i>
          </div>
          <input 
            type="text" 
            id="partnerDirSearch" 
            placeholder="सर्विस खोजें... (उदा. GST Billing, Resume, School ERP, Website, Flex, OCR...)" 
            class="w-full pl-10 pr-20 py-2.5 rounded-xl bg-white border border-slate-300 text-slate-900 placeholder-slate-400 text-xs sm:text-sm focus:border-blue-600 focus:outline-none shadow-2xs transition-all"
          >
          <button 
            id="clearPartnerDirBtn" 
            class="hidden absolute inset-y-0 right-0 pr-3.5 flex items-center text-xs font-semibold text-slate-400 hover:text-slate-600"
          >
            Clear ✕
          </button>
        </div>

        <!-- Filter Pills -->
        <div class="flex items-center gap-1.5 overflow-x-auto pb-1 scrollbar-none text-[10.5px] sm:text-xs">
          <button class="pdir-cat-btn active whitespace-nowrap px-3 py-1.5 rounded-full font-bold bg-blue-600 text-white shadow-xs" data-category="all">
            All (140+)
          </button>
          <button class="pdir-cat-btn whitespace-nowrap px-3 py-1.5 rounded-full font-medium bg-white text-slate-700 border border-slate-200 hover:bg-slate-100" data-category="web-dev">
            Web Dev (16)
          </button>
          <button class="pdir-cat-btn whitespace-nowrap px-3 py-1.5 rounded-full font-medium bg-white text-slate-700 border border-slate-200 hover:bg-slate-100" data-category="software-automation">
            Software &amp; GST (16)
          </button>
          <button class="pdir-cat-btn whitespace-nowrap px-3 py-1.5 rounded-full font-medium bg-white text-slate-700 border border-slate-200 hover:bg-slate-100" data-category="advanced-documents">
            Documents &amp; OCR (48)
          </button>
          <button class="pdir-cat-btn whitespace-nowrap px-3 py-1.5 rounded-full font-medium bg-white text-slate-700 border border-slate-200 hover:bg-slate-100" data-category="graphic-design">
            Graphic Design (16)
          </button>
          <button class="pdir-cat-btn whitespace-nowrap px-3 py-1.5 rounded-full font-medium bg-white text-slate-700 border border-slate-200 hover:bg-slate-100" data-category="digital-marketing">
            Marketing &amp; SEO (16)
          </button>
          <button class="pdir-cat-btn whitespace-nowrap px-3 py-1.5 rounded-full font-medium bg-white text-slate-700 border border-slate-200 hover:bg-slate-100" data-category="ai-automation">
            AI &amp; WhatsApp (14)
          </button>
          <button class="pdir-cat-btn whitespace-nowrap px-3 py-1.5 rounded-full font-medium bg-white text-slate-700 border border-slate-200 hover:bg-slate-100" data-category="mobile-apps">
            Mobile Apps (10)
          </button>
        </div>

        <div class="flex items-center justify-between text-[11px] text-slate-500 pt-0.5">
          <span>दिख रही हैं: <strong id="pdirCount" class="text-blue-700 font-bold"><?php echo count($SERVICES_CATALOGUE); ?></strong> सर्विसेज</span>
          <a href="service-catalogue.php" class="text-blue-600 hover:text-blue-700 font-semibold flex items-center gap-1">
            <span>फुलस्क्रीन डायरेक्टरी पेज</span>
            <i data-lucide="external-link" class="w-3.5 h-3.5"></i>
          </a>
        </div>
      </div>

      <!-- Services Grid: EXACT 2 CARDS PER ROW WITH GENEROUS BREATHING GAP -->
      <div id="partnerServicesGrid" class="grid grid-cols-2 gap-3 sm:gap-4.5 max-h-[650px] overflow-y-auto p-2 sm:p-3 border border-slate-200 rounded-2xl bg-white shadow-2xs mt-3 sm:mt-4">
        <?php foreach ($SERVICES_CATALOGUE as $srv): 
          $catInfo = $CATALOGUE_CATEGORIES[$srv['category_id']] ?? null;
          $catName = $catInfo['short_name'] ?? 'General';
          $isDoc = ($srv['category_id'] === 'advanced-documents');
          $searchHaystack = strtolower($srv['name'] . ' ' . $srv['short_desc'] . ' ' . implode(' ', $srv['tags'] ?? []) . ' ' . $catName);
        ?>
          <div 
            class="pdir-item rounded-xl <?php echo $isDoc ? 'bg-amber-50/50 border-amber-200' : 'bg-slate-50 border-slate-200'; ?> border p-2.5 sm:p-3.5 flex flex-col justify-between hover:border-blue-400 transition-all space-y-2"
            data-category="<?php echo htmlspecialchars($srv['category_id']); ?>"
            data-search="<?php echo htmlspecialchars($searchHaystack); ?>"
          >
            <div class="space-y-1.5">
              <div class="flex items-center justify-between gap-1">
                <span class="text-[8.5px] sm:text-[9.5px] font-bold px-2 py-0.5 rounded-full <?php echo $isDoc ? 'bg-amber-100 text-amber-900' : 'bg-blue-100 text-blue-800'; ?> truncate">
                  <?php echo htmlspecialchars($catName); ?>
                </span>
                <span class="text-[8.5px] text-slate-400 font-mono"><?php echo htmlspecialchars($srv['timeline'] ?? '2-5D'); ?></span>
              </div>
              <h4 class="text-xs sm:text-sm font-bold text-slate-900 leading-snug">
                <?php echo htmlspecialchars($srv['name']); ?>
              </h4>
              <p class="text-[10px] sm:text-xs text-slate-500 leading-relaxed line-clamp-2">
                <?php echo htmlspecialchars($srv['short_desc']); ?>
              </p>
            </div>

            <a 
              href="<?php echo getWhatsAppUrl('Namaste YUKT! Mujhe [' . $srv['name'] . '] service me interest hai. Details aur partner quotation bhejein.'); ?>" 
              target="_blank" 
              rel="noopener noreferrer" 
              class="w-full py-1.5 sm:py-2 px-2 rounded-lg bg-emerald-600 hover:bg-emerald-500 text-white font-bold text-[10px] sm:text-xs flex items-center justify-center gap-1 shadow-2xs transition-all text-center"
            >
              <i data-lucide="message-circle" class="w-3.5 h-3.5 shrink-0"></i>
              <span class="truncate">WhatsApp Enquiry</span>
            </a>
          </div>
        <?php endforeach; ?>
      </div>

      <!-- No Match State -->
      <div id="noPdirResults" class="hidden text-center py-8 space-y-1.5 bg-white rounded-xl border border-slate-200">
        <p class="text-xs font-bold text-slate-700">कोई सर्विस नहीं मिली</p>
        <p class="text-[10px] text-slate-500">कृपया कोई दूसरा कीवर्ड सर्च करें या सीधे WhatsApp पर पूछें:</p>
        <a 
          href="<?php echo getWhatsAppUrl('Namaste YUKT! Mujhe custom service ke baare me puchna hai.'); ?>" 
          target="_blank" 
          class="inline-flex items-center gap-1 px-3 py-1.5 rounded-lg bg-emerald-600 text-white text-[10px] font-bold"
        >
          <i data-lucide="message-circle" class="w-3 h-3"></i>
          <span>WhatsApp Helpline</span>
        </a>
      </div>

    </div>
  </section>

  <!-- ==========================================================================
       SECTION 5: FREE SHOP POSTER & MARKETING KIT BANNER (COMPACT)
  ========================================================================== -->
  <section class="py-6 sm:py-8 bg-gradient-to-r from-blue-900 via-indigo-900 to-slate-900 text-white">
    <div class="max-w-7xl mx-auto px-3.5 sm:px-6 lg:px-8">
      <div class="grid grid-cols-1 lg:grid-cols-12 gap-4 sm:gap-6 items-center">
        
        <div class="lg:col-span-8 space-y-2 text-center lg:text-left">
          <div class="inline-flex items-center gap-1.5 px-2.5 py-0.5 rounded-full bg-white/10 text-emerald-400 text-[10px] sm:text-[11px] font-semibold border border-white/15">
            <i data-lucide="gift" class="w-3 h-3"></i>
            <span>पार्टनर्स के लिए 100% फ्री मार्केटिंग किट</span>
          </div>
          
          <h2 class="text-lg sm:text-2xl lg:text-3xl font-display font-bold text-white tracking-tight">
            आपकी दुकान के लिए Free Printable Shop Poster &amp; Rate Card!
          </h2>
          
          <p class="text-[11px] sm:text-xs text-slate-200 leading-relaxed max-w-2xl">
            अपनी दुकान के काउंटर या शीशे पर लगाने के लिए पोस्टर हम आपको प्रोवाइड करेंगे — <strong>"यहाँ वेबसाइट, बिलिंग सॉफ्टवेयर और डॉक्यूमेंट्स का काम होता है"</strong>। इसे देखकर ग्राहक खुद पूछेंगे और आपको नए ऑर्डर्स मिलेंगे!
          </p>

          <div class="flex flex-wrap items-center justify-center lg:justify-start gap-2.5 pt-0.5 text-[10px] sm:text-[11px] text-slate-300">
            <span class="flex items-center gap-1"><i data-lucide="check" class="w-3 h-3 text-emerald-400"></i> A3/A4 Ready Printable PDF</span>
            <span class="flex items-center gap-1"><i data-lucide="check" class="w-3 h-3 text-emerald-400"></i> WhatsApp Status Creatives</span>
            <span class="flex items-center gap-1"><i data-lucide="check" class="w-3 h-3 text-emerald-400"></i> Hindi Customer Rate Card</span>
          </div>
        </div>

        <div class="lg:col-span-4 flex flex-col sm:flex-row lg:flex-col items-center justify-center gap-2">
          <a 
            href="brochure/partner-poster-template.html" 
            target="_blank" 
            class="w-full sm:w-auto px-4 py-2 sm:px-5 sm:py-2.5 rounded-xl font-bold text-xs text-slate-900 bg-white hover:bg-slate-100 shadow-md transition-all flex items-center justify-center gap-1.5"
          >
            <i data-lucide="eye" class="w-4 h-4 text-blue-600"></i>
            <span>पोस्टर का सैंपल देखें (Printable)</span>
          </a>

          <a 
            href="<?php echo getWhatsAppUrl('Namaste YUKT Team! Mujhe meri dukan ke liye Free Partner Poster aur Rate Card WhatsApp par chahiye.'); ?>" 
            target="_blank" 
            rel="noopener noreferrer" 
            class="w-full sm:w-auto px-4 py-2 sm:px-5 sm:py-2.5 rounded-xl font-bold text-xs text-white bg-emerald-600 hover:bg-emerald-500 shadow-md transition-all flex items-center justify-center gap-1.5"
          >
            <i data-lucide="message-circle" class="w-4 h-4"></i>
            <span>WhatsApp पर पोस्टर मंगवाएं</span>
          </a>
        </div>

      </div>
    </div>
  </section>

  <!-- ==========================================================================
       SECTION 6: QUICK CALLBACK FORM & DIRECT WHATSAPP DESK (COMPACT)
  ========================================================================== -->
  <section id="join" class="py-6 sm:py-9 bg-white border-b border-slate-200 scroll-mt-16">
    <div class="max-w-3xl mx-auto px-3.5 sm:px-6 lg:px-8">
      
      <div class="text-center space-y-0.5 mb-4 sm:mb-5">
        <span class="px-2 py-0.5 rounded-full text-[9px] sm:text-[10px] font-bold uppercase tracking-wider bg-emerald-50 text-emerald-800 border border-emerald-300">
          Fast Onboarding
        </span>
        <h2 class="text-lg sm:text-2xl font-display font-extrabold text-slate-900 tracking-tight">
          पार्टनर बनने के लिए अपना नंबर दर्ज करें
        </h2>
        <p class="text-[11px] sm:text-xs text-slate-600">
          फॉर्म सबमिट करते ही डायरेक्ट WhatsApp कनेक्ट होगा और टीम 10 मिनट में कॉल करेगी:
        </p>
      </div>

      <!-- Clean Compact Form Card -->
      <div class="bg-slate-50 border border-slate-200 rounded-2xl p-3.5 sm:p-6 shadow-xs">
        
        <div id="quickLeadFeedback" class="hidden p-2.5 rounded-xl mb-3 text-xs"></div>

        <form id="quickLeadForm" class="space-y-3">
          <!-- Honeypot -->
          <div class="hidden" aria-hidden="true">
            <input type="text" name="partner_honey" tabindex="-1" autocomplete="off">
          </div>

          <div class="grid grid-cols-1 sm:grid-cols-2 gap-2.5">
            
            <div>
              <label class="block text-[10px] sm:text-[11px] font-bold uppercase tracking-wider text-slate-700 mb-0.5">
                आपका नाम (Full Name) <span class="text-red-500">*</span>
              </label>
              <input 
                type="text" 
                name="full_name" 
                required 
                placeholder="उदा. रमेश कुमार" 
                class="w-full px-3 py-2 rounded-xl bg-white border border-slate-300 text-slate-900 placeholder-slate-400 text-xs sm:text-sm focus:border-blue-600 focus:outline-none shadow-2xs"
              >
            </div>

            <div>
              <label class="block text-[10px] sm:text-[11px] font-bold uppercase tracking-wider text-slate-700 mb-0.5">
                मोबाइल नंबर (WhatsApp Number) <span class="text-red-500">*</span>
              </label>
              <input 
                type="tel" 
                name="phone" 
                required 
                placeholder="उदा. 9876543210" 
                class="w-full px-3 py-2 rounded-xl bg-white border border-slate-300 text-slate-900 placeholder-slate-400 text-xs sm:text-sm focus:border-blue-600 focus:outline-none shadow-2xs"
              >
            </div>

            <div>
              <label class="block text-[10px] sm:text-[11px] font-bold uppercase tracking-wider text-slate-700 mb-0.5">
                दुकान का नाम (Shop Name)
              </label>
              <input 
                type="text" 
                name="shop_name" 
                placeholder="उदा. वर्मा साइबर कैफे" 
                class="w-full px-3 py-2 rounded-xl bg-white border border-slate-300 text-slate-900 placeholder-slate-400 text-xs sm:text-sm focus:border-blue-600 focus:outline-none shadow-2xs"
              >
            </div>

            <div>
              <label class="block text-[10px] sm:text-[11px] font-bold uppercase tracking-wider text-slate-700 mb-0.5">
                शहर / गाँव (City / Village)
              </label>
              <input 
                type="text" 
                name="city" 
                placeholder="उदा. पटना, वाराणसी, दानापुर" 
                class="w-full px-3 py-2 rounded-xl bg-white border border-slate-300 text-slate-900 placeholder-slate-400 text-xs sm:text-sm focus:border-blue-600 focus:outline-none shadow-2xs"
              >
            </div>

          </div>

          <div class="grid grid-cols-1 sm:grid-cols-2 gap-2.5">
            
            <div>
              <label class="block text-[10px] sm:text-[11px] font-bold uppercase tracking-wider text-slate-700 mb-0.5">
                दुकान का प्रकार (Business Type)
              </label>
              <select 
                name="business_type" 
                class="w-full px-3 py-2 rounded-xl bg-white border border-slate-300 text-slate-900 text-xs sm:text-sm focus:border-blue-600 focus:outline-none shadow-2xs"
              >
                <option value="Cyber Cafe">Cyber Cafe / Online Center</option>
                <option value="CSC Centre">CSC Centre / Jan Seva Kendra</option>
                <option value="Computer Shop">Computer &amp; Hardware Shop</option>
                <option value="Printing Shop">Photocopy &amp; Printing Shop</option>
                <option value="Freelancer">Freelancer / Individual</option>
                <option value="Other">Other Business</option>
              </select>
            </div>

            <div>
              <label class="block text-[10px] sm:text-[11px] font-bold uppercase tracking-wider text-slate-700 mb-0.5">
                रुचि वाली सर्विस (Interested Service)
              </label>
              <select 
                name="service" 
                class="w-full px-3 py-2 rounded-xl bg-white border border-slate-300 text-slate-900 text-xs sm:text-sm focus:border-blue-600 focus:outline-none shadow-2xs"
              >
                <option value="All Services">सभी 10 सर्विसेज (All Services)</option>
                <option value="Website Development">Website Development</option>
                <option value="GST Billing & Software">Software &amp; GST Billing</option>
                <option value="Document & Typing">Advanced Document &amp; Resume Typing</option>
                <option value="Graphic Design">Graphic Design &amp; Flex Banner</option>
                <option value="Google Business Profile">Google Maps &amp; Local Marketing</option>
                <option value="School Software">School &amp; Coaching Software</option>
              </select>
            </div>

          </div>

          <button 
            type="submit" 
            id="quickLeadBtn" 
            class="w-full py-2.5 sm:py-3 rounded-xl font-display font-bold text-xs sm:text-sm text-white bg-emerald-600 hover:bg-emerald-500 shadow-md shadow-emerald-600/20 transition-all flex items-center justify-center gap-1.5"
          >
            <i data-lucide="message-circle" class="w-4 h-4"></i>
            <span>WhatsApp पर पार्टनर बनें (Request Call / Chat)</span>
          </button>

        </form>

        <!-- Direct Hotlines for Instant Calling -->
        <div class="mt-4 pt-3 border-t border-slate-200 text-center space-y-1.5">
          <p class="text-[10px] sm:text-[11px] font-semibold text-slate-500 uppercase tracking-wider">
            या सीधे फ़ोन करके अभी बात करें:
          </p>
          <div class="flex flex-wrap items-center justify-center gap-1.5 sm:gap-3 text-[11px] sm:text-xs font-bold text-slate-800">
            <a href="tel:+918235411806" class="hover:text-blue-600 flex items-center gap-1 px-2.5 py-1 rounded-lg bg-white border border-slate-200 shadow-2xs">
              <i data-lucide="phone" class="w-3.5 h-3.5 text-emerald-600"></i>
              <span>हेल्पलाइन: +91 82354 11806</span>
            </a>
            <a href="tel:+919576338282" class="hover:text-blue-600 flex items-center gap-1 px-2.5 py-1 rounded-lg bg-white border border-slate-200 shadow-2xs">
              <i data-lucide="user" class="w-3.5 h-3.5 text-blue-600"></i>
              <span>अंसार: +91 95763 38282</span>
            </a>
            <a href="tel:+917217645059" class="hover:text-blue-600 flex items-center gap-1 px-2.5 py-1 rounded-lg bg-white border border-slate-200 shadow-2xs">
              <i data-lucide="user-check" class="w-3.5 h-3.5 text-yukt-orange"></i>
              <span>रंजीत: +91 72176 45059</span>
            </a>
          </div>
        </div>

      </div>

    </div>
  </section>

  <!-- ==========================================================================
       SECTION 7: FREQUENTLY ASKED QUESTIONS (COMPACT FAQ)
  ========================================================================== -->
  <section class="py-5 sm:py-8 bg-slate-50 border-b border-slate-200">
    <div class="max-w-3xl mx-auto px-3.5 sm:px-6 lg:px-8 space-y-3 sm:space-y-4">
      
      <div class="text-center space-y-0.5">
        <span class="px-2 py-0.5 rounded-full text-[9px] sm:text-[10px] font-bold uppercase tracking-wider bg-blue-50 text-blue-700 border border-blue-200">
          FAQ
        </span>
        <h2 class="text-lg sm:text-2xl font-display font-extrabold text-slate-900 tracking-tight">
          अक्सर पूछे जाने वाले सवाल
        </h2>
      </div>

      <div class="space-y-2">
        
        <details class="group p-3 sm:p-3.5 rounded-xl bg-white border border-slate-200 shadow-2xs open:border-blue-400 transition-all">
          <summary class="font-bold text-xs sm:text-sm text-slate-900 cursor-pointer list-none flex items-center justify-between">
            <span>क्या मुझे कंप्यूटर कोडिंग या टेक्निकल नॉलेज होना जरूरी है?</span>
            <i data-lucide="chevron-down" class="w-4 h-4 text-slate-400 group-open:rotate-180 transition-transform shrink-0 ml-2"></i>
          </summary>
          <p class="text-[11px] sm:text-xs text-slate-600 mt-1.5 leading-relaxed">
            <strong>बिल्कुल नहीं!</strong> आपको कोई कोडिंग सीखने की जरूरत नहीं है। आपकी दुकान पर जो भी ग्राहक आता है, बस उनसे जानकारी लें। पूरा टेक्निकल काम YUKT के सीनियर इंजीनियर्स और डेवलपर्स करेंगे।
          </p>
        </details>

        <details class="group p-3 sm:p-3.5 rounded-xl bg-white border border-slate-200 shadow-2xs open:border-blue-400 transition-all">
          <summary class="font-bold text-xs sm:text-sm text-slate-900 cursor-pointer list-none flex items-center justify-between">
            <span>पार्टनर बनने के लिए क्या कोई फीस या चार्ज देना होगा?</span>
            <i data-lucide="chevron-down" class="w-4 h-4 text-slate-400 group-open:rotate-180 transition-transform shrink-0 ml-2"></i>
          </summary>
          <p class="text-[11px] sm:text-xs text-slate-600 mt-1.5 leading-relaxed">
            <strong>नहीं!</strong> YUKT पार्टनर प्रोग्राम 100% फ्री है (Zero Investment)। कोई भी जॉइनिंग फीस या सिक्योरिटी डिपॉजिट नहीं है।
          </p>
        </details>

        <details class="group p-3 sm:p-3.5 rounded-xl bg-white border border-slate-200 shadow-2xs open:border-blue-400 transition-all">
          <summary class="font-bold text-xs sm:text-sm text-slate-900 cursor-pointer list-none flex items-center justify-between">
            <span>कमीशन का पैसा कब और कैसे मिलेगा?</span>
            <i data-lucide="chevron-down" class="w-4 h-4 text-slate-400 group-open:rotate-180 transition-transform shrink-0 ml-2"></i>
          </summary>
          <p class="text-[11px] sm:text-xs text-slate-600 mt-1.5 leading-relaxed">
            हर प्रोजेक्ट पर आपको 15% से 25% तक कमीशन मिलता है। कस्टमर का पेमेंट क्लियर होते ही आपका कमीशन सीधे आपके <strong>Bank Account या Google Pay / PhonePe / UPI</strong> पर भेज दिया जाता है।
          </p>
        </details>

        <details class="group p-3 sm:p-3.5 rounded-xl bg-white border border-slate-200 shadow-2xs open:border-blue-400 transition-all">
          <summary class="font-bold text-xs sm:text-sm text-slate-900 cursor-pointer list-none flex items-center justify-between">
            <span>क्या मैं अपनी दुकान के नाम से यह सर्विस दे सकता हूँ (White-Label)?</span>
            <i data-lucide="chevron-down" class="w-4 h-4 text-slate-400 group-open:rotate-180 transition-transform shrink-0 ml-2"></i>
          </summary>
          <p class="text-[11px] sm:text-xs text-slate-600 mt-1.5 leading-relaxed">
            <strong>हाँ, बिल्कुल!</strong> आप अपने कस्टमर को अपनी ही दुकान के नाम से सर्विस दे सकते हैं। अगर क्लाइंट से टेक्निकल बात करनी हो तो हमारी टीम आपके प्रतिनिधि बनकर बात करेगी।
          </p>
        </details>

        <details class="group p-3 sm:p-3.5 rounded-xl bg-white border border-slate-200 shadow-2xs open:border-blue-400 transition-all">
          <summary class="font-bold text-xs sm:text-sm text-slate-900 cursor-pointer list-none flex items-center justify-between">
            <span>मेरी दुकान के लिए पोस्टर कैसे मिलेगा?</span>
            <i data-lucide="chevron-down" class="w-4 h-4 text-slate-400 group-open:rotate-180 transition-transform shrink-0 ml-2"></i>
          </summary>
          <p class="text-[11px] sm:text-xs text-slate-600 mt-1.5 leading-relaxed">
            आप हमें WhatsApp पर अपनी दुकान का नाम और पता भेजें। हम तुरंत आपकी दुकान के नाम वाला हाई-क्वालिटी प्रिंटेबल PDF पोस्टर भेज देंगे जिसे आप अपनी दुकान पर लगा सकते हैं।
          </p>
        </details>

      </div>

    </div>
  </section>

</div>

<!-- ==========================================================================
     STICKY MOBILE BOTTOM BAR (HIGH CONVERSION ON SMARTPHONES)
========================================================================== -->
<div class="fixed bottom-0 left-0 right-0 z-50 md:hidden bg-white/95 backdrop-blur-md border-t border-slate-200 px-3 py-2 shadow-2xl flex items-center gap-2">
  <!-- WhatsApp Button (Green) -->
  <a 
    href="<?php echo getWhatsAppUrl('Namaste YUKT Team! Mujhe Digital Partner Program ke baare me janna hai.'); ?>" 
    target="_blank" 
    rel="noopener noreferrer" 
    class="flex-1 py-2 px-3 rounded-xl bg-emerald-600 hover:bg-emerald-500 text-white font-bold text-xs flex items-center justify-center gap-1.5 shadow-md shadow-emerald-600/30 text-center"
  >
    <i data-lucide="message-circle" class="w-4 h-4"></i>
    <span>WhatsApp Chat</span>
  </a>

  <!-- Phone Call Button (Blue) -->
  <a 
    href="tel:+918235411806" 
    class="flex-1 py-2 px-3 rounded-xl bg-blue-600 hover:bg-blue-500 text-white font-bold text-xs flex items-center justify-center gap-1.5 shadow-md shadow-blue-600/30 text-center"
  >
    <i data-lucide="phone-call" class="w-4 h-4"></i>
    <span>कॉल करें (Call)</span>
  </a>
</div>

<!-- Fast Lead Form AJAX Submission & Directory Filter Scripts -->
<script>
document.getElementById('quickLeadForm')?.addEventListener('submit', function(e) {
  e.preventDefault();
  const form = this;
  const btn = document.getElementById('quickLeadBtn');
  const feedback = document.getElementById('quickLeadFeedback');
  const formData = new FormData(form);

  btn.disabled = true;
  btn.innerHTML = '<span>Requesting...</span>';
  feedback.className = 'hidden';

  fetch('api/partner-quick-lead.php', {
    method: 'POST',
    body: formData
  })
  .then(res => res.json())
  .then(data => {
    btn.disabled = false;
    btn.innerHTML = '<i data-lucide="message-circle" class="w-4 h-4"></i><span>WhatsApp पर पार्टनर बनें (Request Call / Chat)</span>';
    if (window.lucide) window.lucide.createIcons();

    if (data.success) {
      feedback.className = 'p-2.5 rounded-xl mb-3 text-xs bg-emerald-100 border border-emerald-300 text-emerald-900 block font-medium';
      feedback.textContent = data.message;
      
      // Auto open WhatsApp with prefilled message
      if (data.whatsapp_url) {
        setTimeout(() => {
          window.open(data.whatsapp_url, '_blank');
        }, 600);
      }
      form.reset();
    } else {
      feedback.className = 'p-2.5 rounded-xl mb-3 text-xs bg-red-100 border border-red-300 text-red-900 block font-medium';
      feedback.textContent = data.message || 'Error sending request. Please call or WhatsApp us directly.';
    }
  })
  .catch(err => {
    btn.disabled = false;
    btn.innerHTML = '<i data-lucide="message-circle" class="w-4 h-4"></i><span>WhatsApp पर पार्टनर बनें (Request Call / Chat)</span>';
    if (window.lucide) window.lucide.createIcons();
    feedback.className = 'p-2.5 rounded-xl mb-3 text-xs bg-emerald-100 border border-emerald-300 text-emerald-900 block font-medium';
    feedback.textContent = 'Aapki request receive ho gayi hai! Direct WhatsApp par chat karne ke liye neeche button par click karein.';
  });
});

// Partner Directory Live Filter Script
document.addEventListener('DOMContentLoaded', function() {
  const pdirSearch = document.getElementById('partnerDirSearch');
  const clearPdirBtn = document.getElementById('clearPartnerDirBtn');
  const pdirCatBtns = document.querySelectorAll('.pdir-cat-btn');
  const pdirItems = document.querySelectorAll('.pdir-item');
  const pdirCount = document.getElementById('pdirCount');
  const noPdirResults = document.getElementById('noPdirResults');

  let activeCat = 'all';
  let searchVal = '';

  function filterPdir() {
    let count = 0;
    const q = searchVal.toLowerCase().trim();

    pdirItems.forEach(item => {
      const cat = item.getAttribute('data-category');
      const text = item.getAttribute('data-search') || '';

      const matchCat = (activeCat === 'all' || cat === activeCat);
      const matchSearch = !q || text.includes(q);

      if (matchCat && matchSearch) {
        item.style.display = '';
        count++;
      } else {
        item.style.display = 'none';
      }
    });

    if (pdirCount) pdirCount.textContent = count;
    if (noPdirResults) {
      noPdirResults.classList.toggle('hidden', count > 0);
    }
  }

  pdirSearch?.addEventListener('input', function() {
    searchVal = this.value;
    clearPdirBtn?.classList.toggle('hidden', !searchVal);
    filterPdir();
  });

  clearPdirBtn?.addEventListener('click', function() {
    pdirSearch.value = '';
    searchVal = '';
    clearPdirBtn.classList.add('hidden');
    pdirSearch.focus();
    filterPdir();
  });

  pdirCatBtns.forEach(btn => {
    btn.addEventListener('click', function() {
      pdirCatBtns.forEach(b => {
        b.classList.remove('active', 'bg-blue-600', 'text-white', 'shadow-xs');
        b.classList.add('bg-white', 'text-slate-700');
      });
      this.classList.add('active', 'bg-blue-600', 'text-white', 'shadow-xs');
      this.classList.remove('bg-white', 'text-slate-700');

      activeCat = this.getAttribute('data-category');
      filterPdir();
    });
  });
});
</script>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
