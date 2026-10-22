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
            <div class="w-9 h-9 rounded-xl bg-gradient-to-br from-electric-500 to-yukt-orange flex items-center justify-center text-white font-display font-bold">
              Y.
            </div>
            <span class="font-display font-bold text-lg text-white tracking-tight">YUKT IT SOLUTIONS</span>
          </div>
          <p class="text-sm text-slate-400 leading-relaxed max-w-sm">
            We build intelligent digital experiences, powerful software, and AI-driven solutions that help businesses grow faster.
          </p>
          <div class="pt-1 space-y-1.5 font-mono text-xs text-slate-300">
            <div class="flex items-center gap-2">
              <i data-lucide="globe" class="w-3.5 h-3.5 text-electric-400"></i>
              <a href="https://yukt.online" target="_blank" rel="noopener noreferrer" class="hover:text-white transition-colors">https://yukt.online</a>
            </div>
            <div class="flex items-center gap-2">
              <i data-lucide="phone" class="w-3.5 h-3.5 text-yukt-orange"></i>
              <a href="https://wa.me/917217645059?text=Hi%20YUKT%20IT%20SOLUTIONS%2C%20I%20want%20to%20discuss%20a%20project." target="_blank" rel="noopener noreferrer" class="hover:text-white transition-colors">WhatsApp: +91 7217645059</a>
            </div>
          </div>
        </div>

        <!-- Services Quick WhatsApp Links (5 Cols) -->
        <div class="lg:col-span-5 space-y-3">
          <div class="font-mono text-xs uppercase tracking-widest text-white">Direct Service Inquiries</div>
          <div class="grid grid-cols-1 sm:grid-cols-2 gap-2 text-xs sm:text-sm">
            <a href="https://wa.me/917217645059?text=Hi%20YUKT%20IT%20SOLUTIONS%2C%20I%27m%20interested%20in%20Website%20Development." target="_blank" rel="noopener noreferrer" class="hover:text-electric-400 transition-colors">Website Development</a>
            <a href="https://wa.me/917217645059?text=Hi%20YUKT%20IT%20SOLUTIONS%2C%20I%27m%20interested%20in%20Software%20%26%20App%20Development." target="_blank" rel="noopener noreferrer" class="hover:text-electric-400 transition-colors">Software &amp; App Development</a>
            <a href="https://wa.me/917217645059?text=Hi%20YUKT%20IT%20SOLUTIONS%2C%20I%27m%20interested%20in%20AI%20Automation%20solutions." target="_blank" rel="noopener noreferrer" class="hover:text-electric-400 transition-colors">AI Automation</a>
            <a href="https://wa.me/917217645059?text=Hi%20YUKT%20IT%20SOLUTIONS%2C%20I%27m%20interested%20in%20Digital%20Marketing%20services." target="_blank" rel="noopener noreferrer" class="hover:text-electric-400 transition-colors">Digital Marketing</a>
            <a href="https://wa.me/917217645059?text=Hi%20YUKT%20IT%20SOLUTIONS%2C%20I%27m%20interested%20in%20AI%20Marketing%20%26%20Creative%20Studio." target="_blank" rel="noopener noreferrer" class="hover:text-electric-400 transition-colors">AI Marketing &amp; Creative Studio</a>
            <a href="https://wa.me/917217645059?text=Hi%20YUKT%20IT%20SOLUTIONS%2C%20I%27m%20interested%20in%20IT%20Consulting%20%26%20Training." target="_blank" rel="noopener noreferrer" class="hover:text-electric-400 transition-colors">IT Consulting &amp; Training</a>
          </div>
        </div>

        <!-- Navigation & Action (3 Cols) -->
        <div class="lg:col-span-3 space-y-3">
          <div class="font-mono text-xs uppercase tracking-widest text-white">Navigation</div>
          <ul class="space-y-2 text-sm">
            <li><a href="index.php#hero" class="hover:text-white transition-colors">3D Hero Experience</a></li>
            <li><a href="index.php#services" class="hover:text-white transition-colors">Our Services</a></li>
            <li><a href="index.php#process" class="hover:text-white transition-colors">4-Stage Process</a></li>
            <li><a href="index.php#portfolio" class="hover:text-white transition-colors">Concept Portfolio</a></li>
            <li><a href="index.php#why-yukt" class="hover:text-white transition-colors">Why Choose YUKT</a></li>
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
      <p class="text-xs text-slate-300">Select a topic to chat immediately on WhatsApp (+91 7217645059):</p>
      <div class="space-y-1.5 text-xs">
        <a href="https://wa.me/917217645059?text=Hi%20YUKT%20IT%20SOLUTIONS%2C%20I%20want%20to%20discuss%20a%20project." target="_blank" rel="noopener noreferrer" class="block px-3 py-2 rounded-xl bg-white/5 hover:bg-electric-500/30 border border-white/10 transition-colors">
          🚀 Discuss a New Project
        </a>
        <a href="https://wa.me/917217645059?text=Hi%20YUKT%20IT%20SOLUTIONS%2C%20I%27m%20interested%20in%20Website%20or%20Software%20Development." target="_blank" rel="noopener noreferrer" class="block px-3 py-2 rounded-xl bg-white/5 hover:bg-electric-500/30 border border-white/10 transition-colors">
          💻 Website / Software Development
        </a>
        <a href="https://wa.me/917217645059?text=Hi%20YUKT%20IT%20SOLUTIONS%2C%20I%27m%20interested%20in%20AI%20Automation%20%26%20Marketing." target="_blank" rel="noopener noreferrer" class="block px-3 py-2 rounded-xl bg-white/5 hover:bg-electric-500/30 border border-white/10 transition-colors">
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
        href="https://wa.me/917217645059?text=Hi%20YUKT%20IT%20SOLUTIONS%2C%20I%20want%20to%20discuss%20a%20project."
        target="_blank"
        rel="noopener noreferrer"
        aria-label="Chat on WhatsApp with YUKT IT SOLUTIONS (+91 72176 45059)"
        class="w-14 h-14 rounded-2xl bg-gradient-to-br from-emerald-500 to-teal-600 hover:from-emerald-400 hover:to-emerald-500 text-white flex items-center justify-center shadow-2xl shadow-emerald-500/40 border border-emerald-300/40 transition-transform hover:scale-105"
      >
        <i data-lucide="message-circle" class="w-7 h-7"></i>
      </a>
    </div>
  </div>

  <!-- Reusable Quote Estimate Modal Component -->
  <?php require_once __DIR__ . '/components/modal-quote.php'; ?>

  <!-- App Core JavaScript -->
  <script src="assets/js/app.js"></script>

  <!-- Global Widget Handlers & Lucide Icon Renderer -->
  <script>
    if (window.lucide) {
      lucide.createIcons();
    }

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
