  </main>

  <!-- ==========================================
       GLOBAL FOOTER (FUTURISTIC DARK NAVY THEME)
  =========================================== -->
  <footer class="bg-navy-950 border-t border-white/10 text-slate-400 py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-10">
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-12 gap-10 pb-12 border-b border-white/10">
        
        <!-- Brand Info (4 Cols) -->
        <div class="lg:col-span-4 space-y-4">
          <div class="flex items-center gap-3">
            <div class="h-11 px-3 py-1 rounded-xl bg-white shadow-lg flex items-center justify-center">
              <img src="assets/images/yukt-official-logo.png" alt="YUKT IT SOLUTIONS Official Logo" width="160" height="40" loading="lazy" decoding="async" class="h-8 w-auto object-contain">
            </div>
            <div>
              <span class="font-display font-bold text-lg text-white tracking-tight block">YUKT IT SOLUTIONS</span>
              <span class="font-mono text-[10px] text-slate-400">yukt.online &bull; Engineering Studio</span>
            </div>
          </div>
          <p class="text-sm text-slate-400 leading-relaxed max-w-sm">
            We build intelligent digital experiences, robust software systems, and AI-driven workflows that move businesses forward.
          </p>
          <div class="pt-2 space-y-2 font-mono text-xs text-slate-300">
            <div class="flex items-center gap-2">
              <i data-lucide="globe" class="w-3.5 h-3.5 text-electric-400"></i>
              <a href="https://yukt.online" target="_blank" rel="noopener noreferrer" class="hover:text-white transition-colors">https://yukt.online</a>
            </div>
            <div class="flex items-center gap-2">
              <i data-lucide="phone" class="w-3.5 h-3.5 text-yukt-orange"></i>
              <a href="https://wa.me/919576338282?text=Hi%20Ansar%2C%20I%20want%20to%20discuss%20a%20project%20with%20Yukt." target="_blank" rel="noopener noreferrer" class="hover:text-white transition-colors">Ansar: +91 95763 38282</a>
            </div>
            <div class="flex items-center gap-2">
              <i data-lucide="phone" class="w-3.5 h-3.5 text-electric-400"></i>
              <a href="https://wa.me/917217645059?text=Hi%20Ranjeet%2C%20I%20want%20to%20discuss%20a%20project%20with%20Yukt." target="_blank" rel="noopener noreferrer" class="hover:text-white transition-colors">Ranjeet: +91 72176 45059</a>
            </div>
          </div>

          <!-- Official Social Handles -->
          <div class="pt-3 flex items-center gap-3">
            <a href="<?php echo defined('INSTAGRAM_URL') ? INSTAGRAM_URL : 'https://www.instagram.com/yukt_officials'; ?>" target="_blank" rel="noopener noreferrer" class="w-8 h-8 rounded-lg bg-white/5 hover:bg-pink-600/30 border border-white/10 hover:border-pink-500/50 flex items-center justify-center text-pink-400 hover:text-white transition-all group" aria-label="Yukt Officials Instagram" title="Instagram">
              <?php echo getIconSvg('instagram', 'w-4 h-4 text-pink-400 group-hover:scale-110 transition-transform'); ?>
            </a>
            <a href="<?php echo defined('GITHUB_URL') ? GITHUB_URL : 'https://github.com/yukt2026'; ?>" target="_blank" rel="noopener noreferrer" class="w-8 h-8 rounded-lg bg-white/5 hover:bg-white/15 border border-white/10 hover:border-white/30 flex items-center justify-center text-white transition-all group" aria-label="Yukt GitHub Organization" title="GitHub">
              <?php echo getIconSvg('github', 'w-4 h-4 text-white group-hover:scale-110 transition-transform'); ?>
            </a>
            <a href="<?php echo defined('RANJEET_LINKEDIN') ? RANJEET_LINKEDIN : 'https://www.linkedin.com/in/ranjeet-m-079777262/'; ?>" target="_blank" rel="noopener noreferrer" class="w-8 h-8 rounded-lg bg-white/5 hover:bg-electric-600/30 border border-white/10 hover:border-electric-500/50 flex items-center justify-center text-electric-400 hover:text-white transition-all group" aria-label="Ranjeet LinkedIn Profile" title="Ranjeet (LinkedIn)">
              <?php echo getIconSvg('linkedin', 'w-4 h-4 text-electric-400 group-hover:scale-110 transition-transform'); ?>
            </a>
            <a href="<?php echo defined('ANSAR_LINKEDIN') ? ANSAR_LINKEDIN : 'https://www.linkedin.com/in/ansaralisahh'; ?>" target="_blank" rel="noopener noreferrer" class="w-8 h-8 rounded-lg bg-white/5 hover:bg-blue-600/30 border border-white/10 hover:border-blue-500/50 flex items-center justify-center text-blue-400 hover:text-white transition-all group" aria-label="Ansar LinkedIn Profile" title="Ansar (LinkedIn)">
              <?php echo getIconSvg('linkedin', 'w-4 h-4 text-blue-400 group-hover:scale-110 transition-transform'); ?>
            </a>
            <a href="<?php echo defined('TWITTER_URL') ? TWITTER_URL : 'https://twitter.com/yuktonline'; ?>" target="_blank" rel="noopener noreferrer" class="w-8 h-8 rounded-lg bg-white/5 hover:bg-sky-600/30 border border-white/10 hover:border-sky-500/50 flex items-center justify-center text-sky-400 hover:text-white transition-all group" aria-label="Yukt Twitter / X Profile" title="Twitter / X">
              <?php echo getIconSvg('twitter', 'w-4 h-4 text-sky-400 group-hover:scale-110 transition-transform'); ?>
            </a>
          </div>
        </div>

        <!-- Core Engineering Services (5 Cols) -->
        <div class="lg:col-span-5 space-y-3">
          <div class="font-mono text-xs uppercase tracking-widest text-white">Engineering Services</div>
          <div class="grid grid-cols-1 sm:grid-cols-2 gap-2.5 text-xs sm:text-sm">
            <a href="service-website-development.php" class="hover:text-electric-400 transition-colors flex items-center gap-1.5">
              <i data-lucide="chevron-right" class="w-3 h-3 text-slate-500"></i>
              <span>Website Development</span>
            </a>
            <a href="service-software-applications.php" class="hover:text-electric-400 transition-colors flex items-center gap-1.5">
              <i data-lucide="chevron-right" class="w-3 h-3 text-slate-500"></i>
              <span>Software &amp; Apps</span>
            </a>
            <a href="service-ai-automation.php" class="hover:text-electric-400 transition-colors flex items-center gap-1.5">
              <i data-lucide="chevron-right" class="w-3 h-3 text-slate-500"></i>
              <span>AI Automation &amp; Bots</span>
            </a>
            <a href="service-digital-marketing.php" class="hover:text-electric-400 transition-colors flex items-center gap-1.5">
              <i data-lucide="chevron-right" class="w-3 h-3 text-slate-500"></i>
              <span>Digital Marketing &amp; SEO</span>
            </a>
            <a href="service-ai-marketing.php" class="hover:text-electric-400 transition-colors flex items-center gap-1.5">
              <i data-lucide="chevron-right" class="w-3 h-3 text-slate-500"></i>
              <span>AI-Powered Marketing</span>
            </a>
            <a href="service-branding-creative.php" class="hover:text-electric-400 transition-colors flex items-center gap-1.5">
              <i data-lucide="chevron-right" class="w-3 h-3 text-slate-500"></i>
              <span>Branding &amp; UI/UX</span>
            </a>
            <a href="service-ecommerce-solutions.php" class="hover:text-electric-400 transition-colors flex items-center gap-1.5">
              <i data-lucide="chevron-right" class="w-3 h-3 text-slate-500"></i>
              <span>E-Commerce Solutions</span>
            </a>
            <a href="service-it-consulting.php" class="hover:text-electric-400 transition-colors flex items-center gap-1.5">
              <i data-lucide="chevron-right" class="w-3 h-3 text-slate-500"></i>
              <span>IT Consulting &amp; Pods</span>
            </a>
          </div>
        </div>

        <!-- Navigation & Action (3 Cols) -->
        <div class="lg:col-span-3 space-y-3">
          <div class="font-mono text-xs uppercase tracking-widest text-white">Company &amp; Work</div>
          <ul class="space-y-2 text-xs sm:text-sm">
            <li><a href="services.php" class="hover:text-white transition-colors">All Services Hub</a></li>
            <li><a href="about.php" class="hover:text-white transition-colors">About YUKT &amp; Founders</a></li>
            <li><a href="portfolio.php" class="hover:text-white transition-colors">Client Work &amp; Case Studies</a></li>
            <li><a href="contact.php" class="hover:text-white transition-colors">Contact &amp; Scoping Desk</a></li>
            <li><a href="index.php#services" class="hover:text-white transition-colors">3D Interactive Showcase</a></li>
          </ul>
        </div>

      </div>

      <div class="pt-8 flex flex-col sm:flex-row items-center justify-between gap-4 text-xs text-slate-500">
        <p>&copy; <?php echo date('Y'); ?> YUKT IT SOLUTIONS (yukt.online). All rights reserved.</p>
        <p class="font-mono">Engineered with Interactive 3D WebGL &bull; WhatsApp Lead Integration</p>
      </div>
    </div>
  </footer>

  <!-- ==========================================
       PERSISTENT FLOATING WHATSAPP WIDGET
  =========================================== -->
  <div class="fixed bottom-5 right-5 z-50 flex flex-col items-end gap-3" aria-label="WhatsApp Quick Contact">
    <!-- Expandable Quick-Service Menu -->
    <div id="floating-wa-menu" class="hidden glass-dark rounded-2xl p-4 w-72 border border-white/15 shadow-2xl text-white space-y-3">
      <div class="flex items-center justify-between border-b border-white/10 pb-2.5">
        <div class="flex items-center gap-2">
          <span class="w-2.5 h-2.5 rounded-full bg-emerald-400"></span>
          <span class="font-display font-bold text-xs">YUKT IT SOLUTIONS</span>
        </div>
        <button type="button" id="close-wa-menu" class="text-slate-400 hover:text-white" aria-label="Close Quick Chat Menu">
          <i data-lucide="x" class="w-4 h-4"></i>
        </button>
      </div>
      <p class="text-xs text-slate-300">Choose an engineering lead or topic to chat immediately:</p>
      <div class="space-y-1.5 text-xs">
        <a href="https://wa.me/919576338282?text=Hi%20Ansar%2C%20I%20would%20like%20to%20discuss%20a%20project%20with%20YUKT." target="_blank" rel="noopener noreferrer" class="flex items-center justify-between px-3 py-2 rounded-xl bg-white/5 hover:bg-electric-500/30 border border-white/10 transition-colors">
          <span class="flex items-center gap-1.5 font-medium">💬 Chat with Ansar (Founder)</span>
          <span class="text-[10px] text-slate-400 font-mono">+91 95763 38282</span>
        </a>
        <a href="https://wa.me/917217645059?text=Hi%20Ranjeet%2C%20I%20would%20like%20to%20discuss%20a%20project%20with%20YUKT." target="_blank" rel="noopener noreferrer" class="flex items-center justify-between px-3 py-2 rounded-xl bg-white/5 hover:bg-electric-500/30 border border-white/10 transition-colors">
          <span class="flex items-center gap-1.5 font-medium">💬 Chat with Ranjeet (Co-Founder)</span>
          <span class="text-[10px] text-slate-400 font-mono">+91 72176 45059</span>
        </a>
        <div class="pt-1 border-t border-white/10"></div>
        <a href="https://wa.me/919576338282?text=Hi%20YUKT%20IT%20SOLUTIONS%2C%20I%27m%20interested%20in%20Website%20or%20Software%20Development." target="_blank" rel="noopener noreferrer" class="block px-3 py-1.5 rounded-lg bg-white/5 hover:bg-white/10 text-slate-300 hover:text-white transition-colors">
          💻 Website / Software Development
        </a>
        <a href="https://wa.me/919576338282?text=Hi%20YUKT%20IT%20SOLUTIONS%2C%20I%27m%20interested%20in%20AI%20Automation%20%26%20Marketing." target="_blank" rel="noopener noreferrer" class="block px-3 py-1.5 rounded-lg bg-white/5 hover:bg-white/10 text-slate-300 hover:text-white transition-colors">
          🤖 AI Automation &amp; Digital Growth
        </a>
      </div>
    </div>

    <!-- Main Floating Button Group -->
    <div class="flex items-center gap-2">
      <button 
        type="button" 
        id="toggle-wa-menu-btn"
        class="hidden sm:flex items-center gap-2 px-3.5 py-2 rounded-full glass-dark text-xs font-medium text-white border border-white/15 hover:border-emerald-400/50 shadow-lg transition-all"
        aria-label="Open Quick Service Chat"
      >
        <span class="w-2 h-2 rounded-full bg-emerald-400 animate-ping"></span>
        <span>Quick Service Chat</span>
      </button>

      <a 
        href="https://wa.me/919576338282?text=Hi%20YUKT%20IT%20SOLUTIONS%2C%20I%20want%20to%20discuss%20a%20project."
        target="_blank"
        rel="noopener noreferrer"
        aria-label="Chat on WhatsApp with YUKT IT SOLUTIONS (+91 95763 38282)"
        class="w-14 h-14 rounded-2xl bg-gradient-to-br from-emerald-500 to-teal-600 hover:from-emerald-400 hover:to-emerald-500 text-white flex items-center justify-center shadow-2xl shadow-emerald-500/40 border border-emerald-300/40 transition-transform hover:scale-105"
      >
        <i data-lucide="message-circle" class="w-7 h-7"></i>
      </a>
    </div>
  </div>

  <!-- Reusable Quote Estimate Modal Component -->
  <?php require_once __DIR__ . '/components/modal-quote.php'; ?>

  <?php
  $waveFile = __DIR__ . '/../assets/js/advert-wave.js';
  $waveVersion = defined('APP_VERSION') ? APP_VERSION . '.' . (file_exists($waveFile) ? filemtime($waveFile) : time()) : time();
  $appFile = __DIR__ . '/../assets/js/app.js';
  $appVersion = defined('APP_VERSION') ? APP_VERSION . '.' . (file_exists($appFile) ? filemtime($appFile) : time()) : time();
  ?>
  <!-- Interactive 3D WebGL Wave Engine (AdvertResources Shader with Cache Busting) -->
  <script src="assets/js/advert-wave.js?v=<?php echo $waveVersion; ?>"></script>

  <!-- App Core JavaScript (with Dynamic Cache Busting) -->
  <script src="assets/js/app.js?v=<?php echo $appVersion; ?>"></script>

  <!-- Global Widget Handlers & Lucide Icon Renderer -->
  <script>
    (function() {
      // SVGs for brand / social media icons not bundled in standard Lucide
      const brandSVGs = {
        instagram: '<svg class="__CLS__" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round"><rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" x2="17.51" y1="6.5" y2="6.5"></line></svg>',
        linkedin: '<svg class="__CLS__" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round"><path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"></path><rect x="2" y="9" width="4" height="12"></rect><circle cx="4" cy="4" r="2"></circle></svg>',
        github: '<svg class="__CLS__" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round"><path d="M15 22v-4a4.8 4.8 0 0 0-1-3.5c3 0 6-2 6-5.5.08-1.25-.27-2.48-1-3.5.28-1.15.28-2.35 0-3.5 0 0-1 0-3 1.5-2.64-.5-5.36-.5-8 0C6 2 5 2 5 2c-.3 1.15-.3 2.35 0 3.5A5.403 5.403 0 0 0 4 9c0 3.5 3 5.5 6 5.5-.39.49-.68 1.05-.85 1.65-.17.6-.22 1.23-.15 1.85v4"></path><path d="M9 18c-4.51 2-5-2-7-2"></path></svg>',
        twitter: '<svg class="__CLS__" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round"><path d="M22 4s-.7 2.1-2 3.4c1.6 10-9.4 17.3-18 11.6 2.2.1 4.4-.6 6-2C3 15.5.5 9.6 3 5c2.2 2.6 5.6 4.1 9 4-.9-4.2 4-6.6 7-3.8 1.1 0 3-1.2 3-1.2z"></path></svg>',
        facebook: '<svg class="__CLS__" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path></svg>',
        youtube: '<svg class="__CLS__" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round"><path d="M22.54 6.42a2.78 2.78 0 0 0-1.94-2C18.88 4 12 4 12 4s-6.88 0-8.6.42a2.78 2.78 0 0 0-1.94 2A29 29 0 0 0 1 11.75a29 29 0 0 0 .46 5.33A2.78 2.78 0 0 0 3.4 19c1.72.46 8.6.46 8.6.46s6.88 0 8.6-.46a2.78 2.78 0 0 0 1.94-2 29 29 0 0 0 .46-5.25 29 29 0 0 0-.46-5.33z"></path><polygon points="9.75 15.02 15.5 11.75 9.75 8.48 9.75 15.02"></polygon></svg>'
      };

      function renderBrandIcons() {
        document.querySelectorAll('[data-lucide]').forEach(function(el) {
          const name = (el.getAttribute('data-lucide') || '').toLowerCase();
          if (brandSVGs[name]) {
            const cls = el.getAttribute('class') || '';
            const html = brandSVGs[name].replace('__CLS__', cls);
            const temp = document.createElement('div');
            temp.innerHTML = html.trim();
            const svg = temp.firstElementChild;
            if (svg) {
              el.parentNode.replaceChild(svg, el);
            }
          }
        });
      }

      window.renderBrandIcons = renderBrandIcons;
      renderBrandIcons();

      if (window.lucide) {
        lucide.createIcons();
      }
    })();

    const toggleWaMenuBtn = document.getElementById('toggle-wa-menu-btn');
    const closeWaMenuBtn = document.getElementById('close-wa-menu');
    const floatingWaMenu = document.getElementById('floating-wa-menu');

    if (toggleWaMenuBtn && floatingWaMenu) {
      toggleWaMenuBtn.addEventListener('click', () => {
        floatingWaMenu.classList.toggle('hidden');
      });
    }
    if (closeWaMenuBtn && floatingWaMenu) {
      closeWaMenuBtn.addEventListener('click', () => {
        floatingWaMenu.classList.add('hidden');
      });
    }
  </script>
</body>
</html>
