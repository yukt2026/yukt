<?php
$activePage = 'contact';
$pageTitle = 'Contact Us — YUKT IT SOLUTIONS | Direct Engineering Consultation';
$pageDesc = 'Get in touch with YUKT IT SOLUTIONS. Discuss your web development, custom software, AI automation, or digital marketing requirements directly with a senior solutions architect.';

require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/components/section-header.php';
?>

<!-- ==========================================================================
     CONTACT HERO (FUTURISTIC 3D BRAND THEME)
========================================================================== -->
<section class="relative pt-12 pb-14 sm:pt-16 sm:pb-20 lg:pt-20 lg:pb-24 bg-navy-950 bg-grid-dark text-white overflow-hidden border-b border-white/10">
  <div class="absolute top-1/4 left-1/4 w-[500px] h-[500px] bg-electric-500/15 rounded-full blur-[130px] pointer-events-none"></div>
  <div class="absolute bottom-10 right-10 w-[400px] h-[400px] bg-yukt-orange/15 rounded-full blur-[130px] pointer-events-none"></div>

  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-10 relative z-10">
    <div class="max-w-3xl space-y-5 reveal-up">
      <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-white/[0.05] border border-white/10 text-electric-400 font-mono text-xs uppercase tracking-widest">
        <span class="w-2 h-2 rounded-full bg-emerald-400 animate-ping"></span>
        <span>Direct Engineering Communication</span>
      </div>
      <h1 class="font-display font-bold text-4xl sm:text-5xl lg:text-6xl text-white tracking-tight leading-[1.1]">
        Let’s Discuss Your Technical <span class="text-gradient-electric">Roadmap.</span>
      </h1>
      <p class="text-base sm:text-lg text-slate-300 leading-relaxed font-normal">
        Connect directly with our senior solutions architecture team. We review your specifications, evaluate technical feasibility, and return a scoped proposal within 24 business hours.
      </p>

      <div class="pt-4 flex flex-wrap items-center gap-5 text-xs text-slate-400 border-t border-white/10">
        <span class="flex items-center gap-2 font-medium">
          <span class="w-2 h-2 rounded-full bg-emerald-400"></span>
          Response within 24 Hours
        </span>
        <span class="flex items-center gap-2 font-medium">
          <span class="w-2 h-2 rounded-full bg-electric-400"></span>
          Mutual NDA Safeguards
        </span>
        <span class="flex items-center gap-2 font-medium">
          <span class="w-2 h-2 rounded-full bg-yukt-orange"></span>
          Zero Sales Pressure
        </span>
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

        <!-- WhatsApp Primary Card -->
        <div class="p-6 rounded-3xl bg-emerald-50 border border-emerald-200 shadow-md space-y-3">
          <div class="flex items-center gap-2 text-emerald-800 font-bold text-sm">
            <span class="w-2.5 h-2.5 rounded-full bg-emerald-500 animate-ping"></span>
            <span>Instant Technical Scoping via WhatsApp</span>
          </div>
          <p class="text-xs text-emerald-700 leading-relaxed">
            Need an immediate scoping consultation? Chat directly with our solutions team on WhatsApp for fast response times.
          </p>
          <a href="<?php echo getWhatsAppUrl('Hi YUKT IT SOLUTIONS, I would like to discuss our project scope and technical roadmap.'); ?>" target="_blank" rel="noopener noreferrer" class="w-full py-3 px-4 rounded-xl font-display font-semibold text-xs sm:text-sm text-white bg-gradient-to-r from-emerald-600 to-teal-600 hover:from-emerald-500 hover:to-teal-500 flex items-center justify-center gap-2 shadow-md shadow-emerald-600/20 transition-all">
            <i data-lucide="message-circle" class="w-4 h-4"></i>
            <span>Open WhatsApp Conversation (+91 72176 45059)</span>
            <i data-lucide="arrow-up-right" class="w-4 h-4"></i>
          </a>
        </div>

        <!-- Contact Detail Cards -->
        <div class="space-y-3">
          
          <!-- Phone Card -->
          <div class="flex items-start gap-4 p-5 rounded-2xl bg-white border border-slate-200 shadow-sm">
            <div class="w-11 h-11 rounded-xl bg-yukt-orange/15 text-yukt-orange flex items-center justify-center flex-shrink-0 mt-0.5">
              <i data-lucide="phone" class="w-5 h-5"></i>
            </div>
            <div>
              <div class="text-xs font-mono uppercase tracking-wider text-slate-400">Phone &amp; Direct Line</div>
              <a href="tel:<?php echo PHONE_RAW; ?>" class="text-base font-bold text-slate-900 hover:text-electric-600 transition-colors"><?php echo PHONE_NUMBER; ?></a>
              <div class="text-xs text-slate-500 mt-0.5"><?php echo WORKING_HOURS; ?></div>
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
          <div class="flex items-start gap-4 p-5 rounded-2xl bg-white border border-slate-200 shadow-sm">
            <div class="w-11 h-11 rounded-xl bg-electric-500/10 text-electric-600 flex items-center justify-center flex-shrink-0 mt-0.5">
              <i data-lucide="map-pin" class="w-5 h-5"></i>
            </div>
            <div>
              <div class="text-xs font-mono uppercase tracking-wider text-slate-400">Primary Delivery Hub (NCR)</div>
              <div class="text-sm font-bold text-slate-900"><?php echo OFFICE_PRIMARY; ?></div>
              <div class="text-xs text-slate-500 mt-0.5">Secondary Hub: <?php echo OFFICE_SECONDARY; ?></div>
            </div>
          </div>

        </div>

      </div>

      <!-- Right Column: Formal Specification Form (7 Cols) -->
      <div class="lg:col-span-7 reveal-up">
        <div class="bg-white border border-slate-200/90 rounded-3xl p-7 sm:p-9 shadow-xl space-y-6">
          
          <div class="border-b border-slate-100 pb-5">
            <h3 class="font-display font-bold text-2xl text-slate-900">Project Specification &amp; Scoping Form</h3>
            <p class="text-xs sm:text-sm text-slate-500 mt-1">
              Provide your details below to receive a scoped technical architecture plan and timeline estimate.
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
                <label for="contactName" class="block text-xs font-mono uppercase tracking-wider text-slate-700 mb-1.5">Full Name <span class="text-yukt-orange">*</span></label>
                <input type="text" id="contactName" name="full_name" required placeholder="e.g. Ramesh Krishnan" class="w-full px-4 py-3 rounded-xl bg-slate-50 border border-slate-200 text-sm text-slate-900 placeholder-slate-400 focus:outline-none focus:border-electric-500 focus:bg-white transition-all">
                <span class="text-[11px] text-red-600 hidden mt-1" id="errName">Please enter your name.</span>
              </div>

              <div>
                <label for="contactEmail" class="block text-xs font-mono uppercase tracking-wider text-slate-700 mb-1.5">Business Email <span class="text-yukt-orange">*</span></label>
                <input type="email" id="contactEmail" name="email" required placeholder="ramesh@company.com" class="w-full px-4 py-3 rounded-xl bg-slate-50 border border-slate-200 text-sm text-slate-900 placeholder-slate-400 focus:outline-none focus:border-electric-500 focus:bg-white transition-all">
                <span class="text-[11px] text-red-600 hidden mt-1" id="errEmail">Please enter a valid business email.</span>
              </div>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
              <div>
                <label for="contactPhone" class="block text-xs font-mono uppercase tracking-wider text-slate-700 mb-1.5">Phone Number / WhatsApp <span class="text-slate-400 text-[11px]">(Optional)</span></label>
                <input type="tel" id="contactPhone" name="phone" placeholder="+91 98765 43210" class="w-full px-4 py-3 rounded-xl bg-slate-50 border border-slate-200 text-sm text-slate-900 placeholder-slate-400 focus:outline-none focus:border-electric-500 focus:bg-white transition-all">
              </div>

              <div>
                <label for="contactService" class="block text-xs font-mono uppercase tracking-wider text-slate-700 mb-1.5">Service Category <span class="text-yukt-orange">*</span></label>
                <select id="contactService" name="service_needed" required class="w-full px-4 py-3 rounded-xl bg-slate-50 border border-slate-200 text-sm text-slate-900 focus:outline-none focus:border-electric-500 focus:bg-white transition-all">
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
              <label for="contactBudget" class="block text-xs font-mono uppercase tracking-wider text-slate-700 mb-1.5">Estimated Budget Range</label>
              <select id="contactBudget" name="budget" class="w-full px-4 py-3 rounded-xl bg-slate-50 border border-slate-200 text-sm text-slate-900 focus:outline-none focus:border-electric-500 focus:bg-white transition-all">
                <option value="Not Specified">Select Indicative Range (Optional)</option>
                <option value="₹50,000 – ₹1,50,000">₹50,000 – ₹1,50,000</option>
                <option value="₹1,50,000 – ₹5,00,000" selected>₹1,50,000 – ₹5,00,000</option>
                <option value="₹5,00,000 – ₹15,00,000">₹5,00,000 – ₹15,00,000</option>
                <option value="₹15,00,000+ (Enterprise)">₹15,00,000+ (Enterprise Architecture)</option>
                <option value="Flexible / Needs Consultation">Flexible / Needs Consultation</option>
              </select>
            </div>

            <div>
              <label for="contactMessage" class="block text-xs font-mono uppercase tracking-wider text-slate-700 mb-1.5">Project Description &amp; Requirements <span class="text-yukt-orange">*</span></label>
              <textarea id="contactMessage" name="message" rows="4" required placeholder="Describe what you want to build, existing systems in place, and your target timeline..." class="w-full px-4 py-3 rounded-xl bg-slate-50 border border-slate-200 text-sm text-slate-900 placeholder-slate-400 focus:outline-none focus:border-electric-500 focus:bg-white transition-all"></textarea>
              <span class="text-[11px] text-red-600 hidden mt-1" id="errMessage">Please provide a brief project description.</span>
            </div>

            <!-- AJAX Status Feedback Container -->
            <div id="contactFormFeedback" class="hidden text-sm p-4 rounded-xl"></div>

            <div class="pt-3 border-t border-slate-100 flex flex-col sm:flex-row items-center justify-between gap-4">
              <span class="text-xs text-slate-500 flex items-center gap-1.5">
                <i data-lucide="shield-check" class="w-4 h-4 text-emerald-600"></i>
                Confidential NDA Protected
              </span>

              <button type="submit" id="contactSubmitBtn" class="w-full sm:w-auto px-8 py-3.5 rounded-xl font-display font-semibold text-sm text-white bg-electric-500 hover:bg-electric-400 transition-all flex items-center justify-center gap-2 shadow-lg shadow-electric-500/25">
                <span>Submit Inquiry</span>
                <i data-lucide="arrow-right" class="w-4 h-4"></i>
              </button>
            </div>

            <div class="pt-2 text-center sm:text-right">
              <a href="<?php echo getWhatsAppUrl('Hi YUKT IT SOLUTIONS, I would like to discuss our project scope on WhatsApp.'); ?>" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-1.5 text-xs font-semibold text-emerald-700 hover:text-emerald-800 transition-colors">
                <i data-lucide="message-circle" class="w-3.5 h-3.5 text-emerald-600"></i>
                <span>Prefer instant chat? Connect on WhatsApp (+91 72176 45059) &rarr;</span>
              </a>
            </div>

            <!-- Privacy Notice -->
            <p class="text-[11px] text-slate-400 leading-relaxed pt-2">
              <strong>Privacy Notice:</strong> We respect your corporate confidentiality. Under our strict NDA and privacy policy, your contact details, project specifications, and business logic are never shared, sold, or distributed to third parties.
            </p>

          </form>

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
