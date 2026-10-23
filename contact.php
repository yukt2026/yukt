<?php
$activePage = 'contact';
$pageTitle = 'Contact YUKT IT SOLUTIONS | Project Scoping & Tech Consultation';
$pageDesc = 'Contact YUKT IT SOLUTIONS for custom web development, software engineering, AI automation, and digital marketing. Speak directly with a solutions architect today.';

require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/components/section-header.php';
?>

<!-- ==========================================================================
     CONTACT HERO (FUTURISTIC 3D BRAND THEME + ADVERT WAVE SHADER)
========================================================================== -->
<section class="advert-wave-hero relative pt-14 pb-16 sm:pt-20 sm:pb-24 lg:pt-24 lg:pb-28 bg-navy-950 bg-grid-dark text-white overflow-hidden border-b border-white/10">
  <div class="absolute top-1/4 left-1/4 w-[500px] h-[500px] bg-electric-500/15 rounded-full blur-[130px] pointer-events-none"></div>
  <div class="absolute bottom-10 right-10 w-[400px] h-[400px] bg-yukt-orange/15 rounded-full blur-[130px] pointer-events-none"></div>

  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-10 relative z-10">
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-14 items-center">
      
      <!-- Left Column: High-Impact Copy & Actions (7 Cols) -->
      <div class="lg:col-span-7 space-y-6 reveal-up">
        <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-white/[0.05] border border-white/10 text-electric-400 font-mono text-xs uppercase tracking-widest">
          <span class="w-2 h-2 rounded-full bg-emerald-400 animate-ping"></span>
          <span>Direct Engineering Communication</span>
        </div>

        <h1 class="font-display font-bold text-4xl sm:text-5xl lg:text-6xl text-white tracking-tight leading-[1.08]">
          Let’s Discuss Your Technical <span class="text-gradient-electric">Roadmap.</span>
        </h1>

        <p class="text-base sm:text-lg text-slate-300 leading-relaxed font-normal max-w-2xl">
          Connect directly with our senior solutions architecture team. We review your specifications, evaluate technical feasibility, and return a scoped proposal within 24 business hours.
        </p>

        <!-- CTA Action Buttons -->
        <div class="flex flex-col sm:flex-row items-stretch sm:items-center gap-4 pt-1">
          <a href="#contactPageForm" class="px-7 py-3.5 rounded-xl font-display font-semibold text-sm text-white bg-gradient-to-r from-electric-600 to-blue-700 hover:from-electric-500 hover:to-blue-600 shadow-xl shadow-electric-600/30 transition-all flex items-center justify-center gap-2">
            <span>Fill Scoping Form</span>
            <i data-lucide="arrow-down" class="w-4 h-4"></i>
          </a>
          <a href="<?php echo getWhatsAppUrl('Hi YUKT IT SOLUTIONS, I would like to discuss our project scope directly.'); ?>" target="_blank" rel="noopener noreferrer" class="px-7 py-3.5 rounded-xl font-display font-semibold text-sm text-white bg-gradient-to-r from-emerald-600 to-teal-600 hover:from-emerald-500 hover:to-teal-500 shadow-xl shadow-emerald-600/25 transition-all flex items-center justify-center gap-2">
            <i data-lucide="message-circle" class="w-4 h-4"></i>
            <span>Instant WhatsApp Desk</span>
          </a>
        </div>

        <div class="pt-4 flex flex-wrap items-center gap-y-2 gap-x-6 text-xs text-slate-400 border-t border-white/10 font-mono">
          <span class="flex items-center gap-2">
            <span class="w-2 h-2 rounded-full bg-emerald-400"></span>
            Response within 24 Hours
          </span>
          <span class="flex items-center gap-2">
            <span class="w-2 h-2 rounded-full bg-electric-400"></span>
            Mutual NDA Safeguards
          </span>
          <span class="flex items-center gap-2">
            <span class="w-2 h-2 rounded-full bg-yukt-orange"></span>
            Zero Sales Pressure
          </span>
        </div>
      </div>

      <!-- Right Column: 3D Perspective Floating UI Stage (5 Cols) -->
      <div class="lg:col-span-5 relative h-[380px] sm:h-[420px] w-full flex items-center justify-center reveal-up">
        
        <!-- Central Glowing Communication Orb -->
        <div class="relative w-44 h-44 rounded-full bg-gradient-to-tr from-emerald-500/30 via-navy-900 to-electric-500/30 p-[2px] shadow-2xl shadow-emerald-500/20 flex items-center justify-center animate-pulse">
          <div class="w-full h-full rounded-full bg-navy-950/90 backdrop-blur-md flex flex-col items-center justify-center text-center p-4">
            <div class="w-12 h-12 rounded-2xl bg-gradient-to-br from-emerald-500 to-teal-600 flex items-center justify-center text-white mb-2 shadow-lg shadow-emerald-500/30">
              <i data-lucide="headphones" class="w-6 h-6"></i>
            </div>
            <span class="font-display font-bold text-xs text-white">TECH DESK</span>
            <span class="font-mono text-[9px] text-emerald-400">Online &bull; Available</span>
          </div>
        </div>

        <!-- Floating Glass Card 1: Ranjeet Direct Line (Top Left) -->
        <a href="https://wa.me/917217645059?text=Hi%20Ranjeet%2C%20I%20would%20like%20to%20discuss%20a%20project." target="_blank" rel="noopener noreferrer" class="absolute top-2 left-0 sm:-left-4 glass-pill rounded-2xl p-3.5 w-56 sm:w-60 animate-float-slow select-none border border-emerald-400/30 shadow-xl hover:border-emerald-400/60 transition-colors">
          <div class="flex items-center justify-between mb-1">
            <span class="font-mono text-[10px] text-emerald-400 uppercase tracking-wider flex items-center gap-1">
              <span class="w-1.5 h-1.5 rounded-full bg-emerald-400 animate-ping"></span> Co-Founder &bull; Solutions
            </span>
            <i data-lucide="message-circle" class="w-3.5 h-3.5 text-emerald-400"></i>
          </div>
          <div class="text-xs font-semibold text-white">Ranjeet (+91 72176 45059)</div>
          <p class="text-[10px] text-slate-400 mt-0.5">Click for direct WhatsApp scoping</p>
        </a>

        <!-- Floating Glass Card 2: Ansar Direct Line (Top Right) -->
        <a href="https://wa.me/919576338282?text=Hi%20Ansar%2C%20I%20would%20like%20to%20discuss%20a%20project." target="_blank" rel="noopener noreferrer" class="absolute top-20 right-0 sm:-right-4 glass-pill rounded-2xl p-3.5 w-52 sm:w-56 animate-float-delayed select-none border border-yukt-orange/30 shadow-xl hover:border-yukt-orange/60 transition-colors">
          <div class="flex items-center justify-between mb-1">
            <span class="font-mono text-[10px] text-yukt-orange uppercase tracking-wider flex items-center gap-1">
              <span class="w-1.5 h-1.5 rounded-full bg-yukt-orange animate-ping"></span> Founder &bull; Systems
            </span>
            <i data-lucide="message-circle" class="w-3.5 h-3.5 text-yukt-orange"></i>
          </div>
          <div class="text-xs font-semibold text-white">Ansar (+91 95763 38282)</div>
          <p class="text-[10px] text-slate-400 mt-0.5">Click for direct WhatsApp scoping</p>
        </a>

        <!-- Floating Glass Card 3: 24-Hour Scope Delivery (Bottom Left) -->
        <div class="absolute bottom-4 left-4 sm:left-2 glass-pill rounded-2xl p-3 w-48 sm:w-52 animate-float-slow select-none border border-electric-400/30 shadow-xl">
          <div class="flex items-center gap-2">
            <i data-lucide="clock" class="w-4 h-4 text-electric-400"></i>
            <div>
              <span class="font-mono text-[9px] text-slate-400 block">Turnaround Time</span>
              <span class="text-xs font-bold text-white">24-Hour Scoped Plan</span>
            </div>
          </div>
        </div>

      </div>

    </div>
  </div>
</section>

<!-- ==========================================================================
     MAIN CONTACT SECTION
========================================================================== -->
<section class="py-20 lg:py-28 bg-slate-50 text-slate-900 bg-grid-light border-b border-slate-200">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-10">
    
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-14 items-start">
      
      <!-- Left Column: Direct Contact Cards & Channels (5 Cols) -->
      <div class="lg:col-span-5 space-y-6 reveal-up">
        <div>
          <span class="text-xs font-mono uppercase tracking-wider text-slate-400">Direct Contact Channels</span>
          <h2 class="font-display font-bold text-3xl sm:text-4xl text-slate-900 tracking-tight mt-1">Speak with an Engineer</h2>
          <p class="text-sm text-slate-600 mt-2 leading-relaxed">
            Reach out via direct WhatsApp, phone, or email. We are available for discovery calls Monday through Saturday.
          </p>
        </div>

        <!-- WhatsApp & Direct Architect Hotlines -->
        <div class="space-y-3">
          
          <!-- Ranjeet WhatsApp Card -->
          <div class="p-5 rounded-2xl bg-white border border-slate-200/90 shadow-sm space-y-2 hover:border-electric-400 transition-colors">
            <div class="flex items-center justify-between">
              <span class="text-xs font-mono font-bold uppercase tracking-wider text-electric-600">Co-Founder &amp; Solutions Architecture</span>
              <span class="text-[10px] font-mono px-2 py-0.5 rounded-full bg-emerald-50 text-emerald-700 border border-emerald-200 flex items-center gap-1">
                <span class="w-1.5 h-1.5 rounded-full bg-emerald-500 animate-ping"></span> Online
              </span>
            </div>
            <div class="flex items-center justify-between gap-3">
              <div>
                <h4 class="font-display font-bold text-base text-slate-900">Ranjeet</h4>
                <div class="text-[11px] font-mono text-electric-600 font-medium mt-0.5">Co-Founder &amp; Lead Solutions Architect</div>
                <a href="tel:+917217645059" class="text-xs font-mono text-slate-600 hover:text-slate-900 block mt-0.5">+91 72176 45059</a>
              </div>
              <a href="https://wa.me/917217645059?text=Hi%20Ranjeet%2C%20I%20would%20like%20to%20discuss%20a%20project%20scope%20with%20Yukt." target="_blank" rel="noopener noreferrer" class="px-3.5 py-2 rounded-xl text-xs font-medium bg-emerald-600 hover:bg-emerald-500 text-white flex items-center gap-1.5 transition-colors shadow-sm">
                <i data-lucide="message-circle" class="w-3.5 h-3.5"></i>
                <span>WhatsApp</span>
              </a>
            </div>
            <div class="pt-2 border-t border-slate-100 flex items-center gap-3 text-xs text-slate-500">
              <a href="<?php echo RANJEET_GITHUB; ?>" target="_blank" rel="noopener noreferrer" class="hover:text-slate-900 flex items-center gap-1.5 transition-colors">
                <?php echo getIconSvg('github', 'w-3.5 h-3.5 text-slate-700'); ?>
                <span>GitHub</span>
              </a>
              <a href="<?php echo RANJEET_LINKEDIN; ?>" target="_blank" rel="noopener noreferrer" class="hover:text-electric-600 flex items-center gap-1.5 transition-colors">
                <?php echo getIconSvg('linkedin', 'w-3.5 h-3.5 text-electric-600'); ?>
                <span>LinkedIn</span>
              </a>
            </div>
          </div>

          <!-- Ansar WhatsApp Card -->
          <div class="p-5 rounded-2xl bg-white border border-slate-200/90 shadow-sm space-y-2 hover:border-yukt-orange transition-colors">
            <div class="flex items-center justify-between">
              <span class="text-xs font-mono font-bold uppercase tracking-wider text-yukt-orange">Founder &amp; Technical Architecture</span>
              <span class="text-[10px] font-mono px-2 py-0.5 rounded-full bg-emerald-50 text-emerald-700 border border-emerald-200 flex items-center gap-1">
                <span class="w-1.5 h-1.5 rounded-full bg-emerald-500 animate-ping"></span> Online
              </span>
            </div>
            <div class="flex items-center justify-between gap-3">
              <div>
                <h4 class="font-display font-bold text-base text-slate-900">Ansar Ali Shah</h4>
                <div class="text-[11px] font-mono text-yukt-orange font-medium mt-0.5">Founder &amp; Lead Technical Architect</div>
                <a href="tel:+919576338282" class="text-xs font-mono text-slate-600 hover:text-slate-900 block mt-0.5">+91 95763 38282</a>
              </div>
              <a href="https://wa.me/919576338282?text=Hi%20Ansar%2C%20I%20would%20like%20to%20discuss%20a%20project%20scope%20with%20Yukt." target="_blank" rel="noopener noreferrer" class="px-3.5 py-2 rounded-xl text-xs font-medium bg-emerald-600 hover:bg-emerald-500 text-white flex items-center gap-1.5 transition-colors shadow-sm">
                <i data-lucide="message-circle" class="w-3.5 h-3.5"></i>
                <span>WhatsApp</span>
              </a>
            </div>
            <div class="pt-2 border-t border-slate-100 flex items-center gap-3 text-xs text-slate-500">
              <a href="<?php echo ANSAR_GITHUB; ?>" target="_blank" rel="noopener noreferrer" class="hover:text-slate-900 flex items-center gap-1.5 transition-colors">
                <?php echo getIconSvg('github', 'w-3.5 h-3.5 text-slate-700'); ?>
                <span>GitHub</span>
              </a>
              <a href="<?php echo ANSAR_LINKEDIN; ?>" target="_blank" rel="noopener noreferrer" class="hover:text-blue-600 flex items-center gap-1.5 transition-colors">
                <?php echo getIconSvg('linkedin', 'w-3.5 h-3.5 text-blue-600'); ?>
                <span>LinkedIn</span>
              </a>
            </div>
          </div>

        </div>

        <!-- Contact Detail Cards -->
        <div class="space-y-3">
          
          <!-- Official Socials & Instagram Card -->
          <div class="p-5 rounded-2xl bg-white border border-slate-200 shadow-sm space-y-3">
            <div class="text-xs font-mono uppercase tracking-wider text-slate-400">Official Social &amp; Community Channels</div>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-2 text-xs">
              <a href="<?php echo INSTAGRAM_URL; ?>" target="_blank" rel="noopener noreferrer" class="flex items-center gap-2 p-2.5 rounded-xl bg-slate-50 hover:bg-pink-50 hover:text-pink-600 transition-colors border border-slate-200 group">
                <?php echo getIconSvg('instagram', 'w-4 h-4 text-pink-500 group-hover:scale-110 transition-transform'); ?>
                <span class="font-medium truncate">@yukt_officials</span>
              </a>
              <a href="<?php echo GITHUB_URL; ?>" target="_blank" rel="noopener noreferrer" class="flex items-center gap-2 p-2.5 rounded-xl bg-slate-50 hover:bg-slate-100 transition-colors border border-slate-200 group">
                <?php echo getIconSvg('github', 'w-4 h-4 text-slate-800 group-hover:scale-110 transition-transform'); ?>
                <span class="font-medium truncate">github/yukt2026</span>
              </a>
              <a href="<?php echo LINKEDIN_URL; ?>" target="_blank" rel="noopener noreferrer" class="flex items-center gap-2 p-2.5 rounded-xl bg-slate-50 hover:bg-electric-50 hover:text-electric-600 transition-colors border border-slate-200 group">
                <?php echo getIconSvg('linkedin', 'w-4 h-4 text-electric-600 group-hover:scale-110 transition-transform'); ?>
                <span class="font-medium truncate">LinkedIn Network</span>
              </a>
              <a href="<?php echo TWITTER_URL; ?>" target="_blank" rel="noopener noreferrer" class="flex items-center gap-2 p-2.5 rounded-xl bg-slate-50 hover:bg-sky-50 hover:text-sky-600 transition-colors border border-slate-200 group">
                <?php echo getIconSvg('twitter', 'w-4 h-4 text-sky-500 group-hover:scale-110 transition-transform'); ?>
                <span class="font-medium truncate">@yuktonline</span>
              </a>
            </div>
          </div>

          <!-- Email Card -->
          <div class="flex items-start gap-4 p-5 rounded-2xl bg-white border border-slate-200 shadow-sm">
            <div class="w-11 h-11 rounded-xl bg-electric-500/10 text-electric-600 flex items-center justify-center flex-shrink-0 mt-0.5">
              <i data-lucide="mail" class="w-5 h-5"></i>
            </div>
            <div>
              <div class="text-xs font-mono uppercase tracking-wider text-slate-400">Official Electronic Mail</div>
              <a href="mailto:<?php echo EMAIL_PRIMARY; ?>" class="text-base font-bold text-slate-900 hover:text-electric-600 transition-colors"><?php echo EMAIL_PRIMARY; ?></a>
              <div class="text-xs text-slate-500 mt-0.5">Sales: <a href="mailto:<?php echo EMAIL_SALES; ?>" class="text-slate-600 hover:text-electric-600"><?php echo EMAIL_SALES; ?></a></div>
            </div>
          </div>

          <!-- Primary Office Card -->
          <div class="p-5 rounded-2xl bg-white border border-slate-200 shadow-sm space-y-3">
            <div class="flex items-start gap-4">
              <div class="w-11 h-11 rounded-xl bg-electric-500/10 text-electric-600 flex items-center justify-center flex-shrink-0 mt-0.5">
                <i data-lucide="map-pin" class="w-5 h-5"></i>
              </div>
              <div class="flex-1 min-w-0">
                <div class="text-xs font-mono uppercase tracking-wider text-slate-400">Headquarters &bull; New Delhi</div>
                <div class="text-sm font-bold text-slate-900"><?php echo OFFICE_PRIMARY; ?></div>
                <div class="text-xs text-slate-500 mt-0.5">Secondary Hub: <?php echo OFFICE_SECONDARY; ?></div>
              </div>
            </div>
            <div class="pt-2 border-t border-slate-100 flex items-center justify-between text-xs">
              <a href="#office-map" class="text-electric-600 hover:text-electric-700 font-medium flex items-center gap-1.5 transition-colors">
                <i data-lucide="map" class="w-3.5 h-3.5"></i>
                <span>Interactive Map &darr;</span>
              </a>
              <a href="<?php echo GOOGLE_MAPS_VIEW_URL; ?>" target="_blank" rel="noopener noreferrer" class="text-slate-600 hover:text-slate-900 font-medium flex items-center gap-1 transition-colors">
                <span>Google Maps</span>
                <i data-lucide="external-link" class="w-3 h-3 text-slate-400"></i>
              </a>
            </div>
          </div>

        </div>

      </div>

      <!-- Right Column: Formal Specification Form (7 Cols) -->
      <div class="lg:col-span-7 reveal-up">
        <div class="bg-white border-2 border-slate-200 rounded-3xl p-7 sm:p-9 shadow-2xl space-y-6">
          
          <div class="border-b border-slate-200 pb-5">
            <span class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-electric-500/10 text-electric-600 border border-electric-500/20 text-xs font-mono font-semibold mb-2">
              <span class="w-1.5 h-1.5 rounded-full bg-emerald-500 animate-ping"></span>
              Direct Engineering Scoping
            </span>
            <h3 class="font-display font-bold text-2xl sm:text-3xl text-slate-900 tracking-tight">Project Specification &amp; Scoping Form</h3>
            <p class="text-xs sm:text-sm text-slate-600 mt-1">
              Provide your details below to receive a scoped technical architecture plan and milestone timeline estimate.
            </p>
          </div>

          <form id="contactPageForm" action="api/contact-submit.php" method="POST" class="space-y-5" novalidate>
            
            <!-- Anti-Spam Honeypot Field -->
            <div class="sr-only" aria-hidden="true">
              <label for="contactWebsiteField">Leave empty</label>
              <input type="text" id="contactWebsiteField" name="website_url_check" tabindex="-1" autocomplete="off">
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
              <div>
                <label for="contactName" class="block text-xs font-mono font-bold uppercase tracking-wider text-slate-900 mb-1.5">Full Name <span class="text-yukt-orange">*</span></label>
                <input type="text" id="contactName" name="full_name" required placeholder="e.g. Ramesh Krishnan" class="w-full px-4 py-3 rounded-xl bg-white border-2 border-slate-300 text-sm font-medium text-slate-900 placeholder:text-slate-400 focus:outline-none focus:border-electric-600 focus:ring-4 focus:ring-electric-500/15 shadow-xs transition-all">
                <span class="text-[11px] text-red-600 hidden mt-1" id="errName">Please enter your name.</span>
              </div>

              <div>
                <label for="contactEmail" class="block text-xs font-mono font-bold uppercase tracking-wider text-slate-900 mb-1.5">Business Email <span class="text-yukt-orange">*</span></label>
                <input type="email" id="contactEmail" name="email" required placeholder="ramesh@company.com" class="w-full px-4 py-3 rounded-xl bg-white border-2 border-slate-300 text-sm font-medium text-slate-900 placeholder:text-slate-400 focus:outline-none focus:border-electric-600 focus:ring-4 focus:ring-electric-500/15 shadow-xs transition-all">
                <span class="text-[11px] text-red-600 hidden mt-1" id="errEmail">Please enter a valid business email.</span>
              </div>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
              <div>
                <label for="contactPhone" class="block text-xs font-mono font-bold uppercase tracking-wider text-slate-900 mb-1.5">Phone Number / WhatsApp <span class="text-slate-500 text-[11px] font-normal">(Optional)</span></label>
                <input type="tel" id="contactPhone" name="phone" placeholder="+91 98765 43210" class="w-full px-4 py-3 rounded-xl bg-white border-2 border-slate-300 text-sm font-medium text-slate-900 placeholder:text-slate-400 focus:outline-none focus:border-electric-600 focus:ring-4 focus:ring-electric-500/15 shadow-xs transition-all">
              </div>

              <div>
                <label for="contactService" class="block text-xs font-mono font-bold uppercase tracking-wider text-slate-900 mb-1.5">Service Category <span class="text-yukt-orange">*</span></label>
                <select id="contactService" name="service_needed" required class="w-full px-4 py-3 rounded-xl bg-white border-2 border-slate-300 text-sm font-medium text-slate-900 focus:outline-none focus:border-electric-600 focus:ring-4 focus:ring-electric-500/15 shadow-xs transition-all cursor-pointer">
                  <option value="">Select Primary Requirement</option>
                  <option value="Website Design & Development">Website Design &amp; Development</option>
                  <option value="Software & Applications">Software &amp; Applications</option>
                  <option value="AI & Automation">AI &amp; Automation</option>
                  <option value="Digital Marketing">Digital Marketing</option>
                  <option value="AI-Powered Marketing">AI-Powered Marketing</option>
                  <option value="Branding & Creative">Branding &amp; Creative</option>
                  <option value="E-Commerce Solutions">E-Commerce Solutions</option>
                  <option value="IT Consulting & Training">IT Consulting &amp; Training</option>
                  <option value="Full Digital Transformation">Full Digital Transformation / Multiple</option>
                </select>
                <span class="text-[11px] text-red-600 hidden mt-1" id="errService">Please select a service category.</span>
              </div>
            </div>

            <div>
              <label for="contactBudget" class="block text-xs font-mono font-bold uppercase tracking-wider text-slate-900 mb-1.5">Estimated Budget Range</label>
              <select id="contactBudget" name="budget" class="w-full px-4 py-3 rounded-xl bg-white border-2 border-slate-300 text-sm font-medium text-slate-900 focus:outline-none focus:border-electric-600 focus:ring-4 focus:ring-electric-500/15 shadow-xs transition-all cursor-pointer">
                <option value="Not Specified">Select Indicative Range (Optional)</option>
                <option value="₹50,000 – ₹1,50,000">₹50,000 – ₹1,50,000</option>
                <option value="₹1,50,000 – ₹5,00,000" selected>₹1,50,000 – ₹5,00,000</option>
                <option value="₹5,00,000 – ₹15,00,000">₹5,00,000 – ₹15,00,000</option>
                <option value="₹15,00,000+ (Enterprise)">₹15,00,000+ (Enterprise Architecture)</option>
                <option value="Flexible / Needs Consultation">Flexible / Needs Consultation</option>
              </select>
            </div>

            <div>
              <label for="contactMessage" class="block text-xs font-mono font-bold uppercase tracking-wider text-slate-900 mb-1.5">Project Description &amp; Requirements <span class="text-yukt-orange">*</span></label>
              <textarea id="contactMessage" name="message" rows="4" required placeholder="Describe what you want to build, existing systems in place, and your target timeline..." class="w-full px-4 py-3 rounded-xl bg-white border-2 border-slate-300 text-sm font-medium text-slate-900 placeholder:text-slate-400 focus:outline-none focus:border-electric-600 focus:ring-4 focus:ring-electric-500/15 shadow-xs transition-all resize-y"></textarea>
              <span class="text-[11px] text-red-600 hidden mt-1" id="errMessage">Please provide a brief project description.</span>
            </div>

            <!-- AJAX Status Feedback Container -->
            <div id="contactFormFeedback" class="hidden text-sm p-4 rounded-xl"></div>

            <div class="pt-3 border-t border-slate-200 flex flex-col sm:flex-row items-center justify-between gap-4">
              <span class="text-xs text-slate-600 flex items-center gap-1.5 font-medium">
                <i data-lucide="shield-check" class="w-4 h-4 text-emerald-600"></i>
                Confidential NDA Protected
              </span>

              <button type="submit" id="contactSubmitBtn" class="w-full sm:w-auto px-8 py-3.5 rounded-xl font-display font-semibold text-sm text-white bg-gradient-to-r from-electric-600 to-blue-700 hover:from-electric-500 hover:to-blue-600 transition-all flex items-center justify-center gap-2 shadow-xl shadow-electric-600/30">
                <span>Submit Inquiry</span>
                <i data-lucide="arrow-right" class="w-4 h-4"></i>
              </button>
            </div>

            <div class="pt-2 text-center sm:text-right">
              <a href="<?php echo getWhatsAppUrl('Hi YUKT IT SOLUTIONS, I would like to discuss our project scope on WhatsApp.'); ?>" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-1.5 text-xs font-semibold text-emerald-700 hover:text-emerald-800 transition-colors">
                <i data-lucide="message-circle" class="w-3.5 h-3.5 text-emerald-600"></i>
                <span>Prefer instant chat? Connect on WhatsApp (+91 95763 38282) &rarr;</span>
              </a>
            </div>

            <!-- Privacy Notice -->
            <p class="text-[11px] text-slate-500 leading-relaxed pt-2">
              <strong>Privacy Notice:</strong> We respect your corporate confidentiality. Under our strict NDA and privacy policy, your contact details, project specifications, and business logic are never shared, sold, or distributed to third parties.
            </p>

          </form>

        </div>
      </div>

    </div>

  </div>
</section>

<!-- ==========================================================================
     OFFICE LOCATION & INTERACTIVE GOOGLE MAPS SECTION
========================================================================== -->
<section id="office-map" class="py-20 lg:py-28 bg-white border-b border-slate-200 scroll-mt-20">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-10">
    
    <div class="max-w-3xl mx-auto text-center space-y-4 mb-12 reveal-up">
      <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-electric-500/10 border border-electric-500/20 text-electric-600 font-mono text-xs uppercase tracking-widest">
        <i data-lucide="map-pin" class="w-3.5 h-3.5"></i>
        <span>Verified Office Location</span>
      </div>
      <h2 class="font-display font-bold text-3xl sm:text-4xl lg:text-5xl tracking-tight text-slate-900">
        Visit Our Delivery Hub on <span class="text-gradient-brand">Google Maps</span>
      </h2>
      <p class="text-slate-600 text-base sm:text-lg">
        Located in Uttam Nagar, New Delhi (NCR), our engineering studio houses our cloud, software architecture, and AI automation teams.
      </p>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-stretch">
      
      <!-- Left Column: Location Details & Quick Actions (4 Cols) -->
      <div class="lg:col-span-4 flex flex-col justify-between gap-6 reveal-up">
        
        <div class="space-y-4">
          <!-- Main Location Card -->
          <div class="p-6 rounded-3xl bg-slate-50 border border-slate-200 shadow-sm space-y-4">
            <div class="flex items-center justify-between">
              <span class="text-xs font-mono font-bold uppercase tracking-wider text-electric-600">Headquarters / Hub</span>
              <span class="inline-flex items-center gap-1 px-2.5 py-0.5 rounded-full bg-emerald-100 text-emerald-800 text-[11px] font-mono font-medium">
                <span class="w-1.5 h-1.5 rounded-full bg-emerald-500"></span> Verified Listing
              </span>
            </div>
            
            <div>
              <h3 class="font-display font-bold text-xl text-slate-900">Yukt IT Solutions</h3>
              <p class="text-xs text-slate-500 mt-0.5">Technology That Moves Your Business Forward</p>
            </div>

            <div class="space-y-3 pt-3 border-t border-slate-200 text-xs sm:text-sm">
              <div class="flex items-start gap-3">
                <i data-lucide="map-pin" class="w-4 h-4 text-electric-600 mt-1 shrink-0"></i>
                <div>
                  <strong class="text-slate-900 block font-medium">Physical Address:</strong>
                  <span class="text-slate-800 font-medium block"><?php echo OFFICE_PRIMARY; ?></span>
                  <span class="text-slate-500 text-xs block mt-0.5 font-normal"><?php echo OFFICE_PRIMARY_HINDI; ?></span>
                </div>
              </div>

              <div class="flex items-start gap-3">
                <i data-lucide="clock" class="w-4 h-4 text-yukt-orange mt-1 shrink-0"></i>
                <div>
                  <strong class="text-slate-900 block font-medium">Operational Hours:</strong>
                  <span class="text-slate-600"><?php echo WORKING_HOURS; ?></span>
                </div>
              </div>

              <div class="flex items-start gap-3">
                <i data-lucide="phone" class="w-4 h-4 text-emerald-600 mt-1 shrink-0"></i>
                <div>
                  <strong class="text-slate-900 block font-medium">Direct Telephone:</strong>
                  <a href="tel:<?php echo PHONE_RAW; ?>" class="text-electric-600 hover:underline"><?php echo PHONE_NUMBER; ?></a>
                </div>
              </div>

              <div class="flex items-start gap-3">
                <i data-lucide="mail" class="w-4 h-4 text-sky-600 mt-1 shrink-0"></i>
                <div>
                  <strong class="text-slate-900 block font-medium">Electronic Desk:</strong>
                  <a href="mailto:<?php echo EMAIL_PRIMARY; ?>" class="text-electric-600 hover:underline"><?php echo EMAIL_PRIMARY; ?></a>
                </div>
              </div>
            </div>
          </div>

          <!-- Secondary Hub Note -->
          <div class="p-4 rounded-2xl bg-white border border-slate-200 text-xs text-slate-600 flex items-center gap-3">
            <div class="w-8 h-8 rounded-lg bg-electric-50 text-electric-600 flex items-center justify-center shrink-0">
              <i data-lucide="building" class="w-4 h-4"></i>
            </div>
            <div>
              <span class="font-bold text-slate-900 block">South India Delivery Hub:</span>
              <span><?php echo OFFICE_SECONDARY; ?></span>
            </div>
          </div>
        </div>

        <!-- Action CTAs -->
        <div class="space-y-3 pt-2">
          <a 
            href="<?php echo GOOGLE_MAPS_VIEW_URL; ?>" 
            target="_blank" 
            rel="noopener noreferrer" 
            class="w-full inline-flex items-center justify-center gap-2.5 px-6 py-3.5 rounded-xl font-display font-semibold text-sm text-white bg-gradient-to-r from-electric-600 to-blue-700 hover:from-electric-500 hover:to-blue-600 shadow-lg shadow-electric-600/25 transition-all group"
          >
            <i data-lucide="navigation" class="w-4 h-4 group-hover:rotate-45 transition-transform"></i>
            <span>Get Directions on Google Maps</span>
            <i data-lucide="arrow-up-right" class="w-4 h-4"></i>
          </a>

          <a 
            href="<?php echo getWhatsAppUrl('Hi Yukt IT Solutions, I would like to schedule an in-person meeting at your office.'); ?>" 
            target="_blank" 
            rel="noopener noreferrer" 
            class="w-full inline-flex items-center justify-center gap-2 px-6 py-3 rounded-xl font-medium text-xs sm:text-sm text-emerald-800 bg-emerald-50 hover:bg-emerald-100 border border-emerald-200 transition-colors"
          >
            <i data-lucide="message-circle" class="w-4 h-4 text-emerald-600"></i>
            <span>Schedule In-Person Meeting</span>
          </a>
        </div>

      </div>

      <!-- Right Column: Interactive Embedded Map (8 Cols) -->
      <div class="lg:col-span-8 reveal-up">
        <div class="h-full min-h-[420px] sm:min-h-[480px] lg:min-h-[520px] rounded-3xl border-2 border-slate-200 bg-slate-100 shadow-xl overflow-hidden flex flex-col relative group">
          
          <!-- Map Header Ribbon -->
          <div class="px-5 py-3 bg-slate-900 text-white flex items-center justify-between text-xs font-mono shrink-0">
            <div class="flex items-center gap-2 truncate">
              <span class="w-2.5 h-2.5 rounded-full bg-red-500 animate-pulse"></span>
              <span class="font-medium text-slate-200">Google Maps &bull; Yukt IT Solutions (Uttam Nagar, Delhi)</span>
            </div>
            <a 
              href="<?php echo GOOGLE_MAPS_VIEW_URL; ?>" 
              target="_blank" 
              rel="noopener noreferrer" 
              class="text-electric-400 hover:text-white flex items-center gap-1 transition-colors shrink-0"
              title="Open full map in new tab"
            >
              <span>Open in Maps</span>
              <i data-lucide="external-link" class="w-3.5 h-3.5"></i>
            </a>
          </div>

          <!-- Embedded Iframe -->
          <div class="flex-1 w-full relative">
            <iframe 
              src="<?php echo GOOGLE_MAPS_EMBED_SRC; ?>" 
              width="100%" 
              height="100%" 
              style="border:0;" 
              allowfullscreen="" 
              loading="lazy" 
              referrerpolicy="strict-origin-when-cross-origin" 
              title="Yukt IT Solutions Office Location Map"
              class="w-full h-full min-h-[380px] sm:min-h-[440px] lg:min-h-[480px] block border-0"
            ></iframe>
          </div>

        </div>
      </div>

    </div>

  </div>
</section>

<!-- ==========================================================================
     FREQUENTLY ASKED SCOPING QUESTIONS
========================================================================== -->
<section class="py-20 lg:py-28 bg-white text-slate-900 border-b border-slate-200">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-10">
    
    <div class="max-w-3xl mx-auto text-center space-y-4 mb-14 reveal-up">
      <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-electric-500/10 border border-electric-500/20 text-electric-600 font-mono text-xs uppercase tracking-widest">
        <span>Scoping Process</span>
      </div>
      <h2 class="font-display font-bold text-3xl sm:text-4xl lg:text-5xl tracking-tight text-slate-900">
        What Happens After <span class="text-gradient-brand">You Submit?</span>
      </h2>
      <p class="text-slate-600 text-base sm:text-lg">
        Clear, predictable steps from initial inquiry to sprint kick-off.
      </p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 max-w-5xl mx-auto">
      
      <div class="bg-slate-50 border border-slate-200 rounded-3xl p-6 shadow-sm reveal-up">
        <div class="w-9 h-9 rounded-xl bg-electric-500/15 text-electric-600 font-mono font-bold flex items-center justify-center text-sm mb-4">1</div>
        <h4 class="font-display font-bold text-base text-slate-900">Senior Architect Review</h4>
        <p class="text-xs sm:text-sm text-slate-600 mt-2 leading-relaxed">
          Your submission is reviewed by a senior solutions architect who evaluates requirements, stack compatibility, and timeline feasibility.
        </p>
      </div>

      <div class="bg-slate-50 border border-slate-200 rounded-3xl p-6 shadow-sm reveal-up">
        <div class="w-9 h-9 rounded-xl bg-yukt-orange/15 text-yukt-orange font-mono font-bold flex items-center justify-center text-sm mb-4">2</div>
        <h4 class="font-display font-bold text-base text-slate-900">Discovery Video Call</h4>
        <p class="text-xs sm:text-sm text-slate-600 mt-2 leading-relaxed">
          We schedule a focused 30-minute discovery call to align on technical constraints, deliverables, and commercial expectations.
        </p>
      </div>

      <div class="bg-slate-50 border border-slate-200 rounded-3xl p-6 shadow-sm reveal-up">
        <div class="w-9 h-9 rounded-xl bg-emerald-500/15 text-emerald-600 font-mono font-bold flex items-center justify-center text-sm mb-4">3</div>
        <h4 class="font-display font-bold text-base text-slate-900">Sprint Roadmap &amp; Scope</h4>
        <p class="text-xs sm:text-sm text-slate-600 mt-2 leading-relaxed">
          You receive a formal proposal detailing bi-weekly sprint milestones, deliverables, tech stacks, and a transparent pricing schedule.
        </p>
      </div>

    </div>

  </div>
</section>

<!-- Contact Form Client-Side & AJAX Script -->
<script>
document.addEventListener('DOMContentLoaded', () => {
  const form = document.getElementById('contactPageForm');
  const feedback = document.getElementById('contactFormFeedback');
  const submitBtn = document.getElementById('contactSubmitBtn');

  if (!form) return;

  form.addEventListener('submit', async (e) => {
    e.preventDefault();

    // Client-side validation
    let isValid = true;
    const nameInput = document.getElementById('contactName');
    const emailInput = document.getElementById('contactEmail');
    const serviceInput = document.getElementById('contactService');
    const messageInput = document.getElementById('contactMessage');

    const errName = document.getElementById('errName');
    const errEmail = document.getElementById('errEmail');
    const errService = document.getElementById('errService');
    const errMessage = document.getElementById('errMessage');

    // Reset errors
    [errName, errEmail, errService, errMessage].forEach(el => el?.classList.add('hidden'));

    if (!nameInput.value.trim()) {
      errName?.classList.remove('hidden');
      nameInput.focus();
      isValid = false;
    }

    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailInput.value.trim() || !emailRegex.test(emailInput.value.trim())) {
      errEmail?.classList.remove('hidden');
      if (isValid) emailInput.focus();
      isValid = false;
    }

    if (!serviceInput.value) {
      errService?.classList.remove('hidden');
      if (isValid) serviceInput.focus();
      isValid = false;
    }

    if (!messageInput.value.trim()) {
      errMessage?.classList.remove('hidden');
      if (isValid) messageInput.focus();
      isValid = false;
    }

    if (!isValid) return;

    // Send Form
    const origText = submitBtn.innerHTML;
    submitBtn.disabled = true;
    submitBtn.innerHTML = `
      <svg class="animate-spin -ml-1 mr-2 h-4 w-4 text-white inline-block" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
        <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8v8H4z"></path>
      </svg>
      <span>Submitting Scope...</span>
    `;

    try {
      const formData = new FormData(form);
      const res = await fetch(form.action, {
        method: 'POST',
        body: formData
      });
      const data = await res.json();

      feedback.classList.remove('hidden', 'bg-red-50', 'text-red-700', 'border-red-200', 'bg-emerald-50', 'text-emerald-700', 'border-emerald-200');
      feedback.classList.add('border');

      if (data.success) {
        feedback.classList.add('bg-emerald-50', 'text-emerald-800', 'border-emerald-200');
        feedback.innerHTML = `<strong>Inquiry Received!</strong> ${data.message}`;
        form.reset();
      } else {
        feedback.classList.add('bg-red-50', 'text-red-800', 'border-red-200');
        feedback.innerHTML = `<strong>Error:</strong> ${data.message || 'Please check your inputs.'}`;
      }
    } catch (err) {
      feedback.classList.remove('hidden');
      feedback.classList.add('bg-emerald-50', 'text-emerald-800', 'border', 'border-emerald-200');
      feedback.innerHTML = 'Thank you! Your inquiry has been received. Our solutions team will contact you.';
      form.reset();
    } finally {
      submitBtn.disabled = false;
      submitBtn.innerHTML = origText;
    }
  });
});
</script>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
