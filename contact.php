<?php
$activePage = 'contact';
$pageTitle = 'Contact Us — Yukt IT Solutions';
$pageDesc = 'Get in touch with Yukt IT Solutions. Discuss your web development, custom software, AI automation, or digital marketing requirements with a senior solutions architect.';

require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/components/section-header.php';
?>

<!-- ==========================================================================
     CONTACT HERO
========================================================================== -->
<section class="bg-canvas-subtle border-b border-canvas-border py-16 lg:py-20 bg-grid-pattern relative">
  <div class="container-custom relative z-10">
    <div class="max-w-3xl">
      <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full text-xs font-semibold uppercase tracking-wider bg-electric-50 text-electric-700 border border-electric-200 mb-4">
        <span class="w-2 h-2 rounded-full bg-electric-600"></span> Direct Engineering Communication
      </div>
      <h1 class="text-4xl sm:text-5xl lg:text-6xl font-extrabold text-navy-900 tracking-tight leading-tight">
        Let’s Discuss Your Technical Roadmap.
      </h1>
      <p class="text-lg text-navy-600 mt-4 leading-relaxed font-normal">
        Connect directly with our senior solutions architecture team. We review your specifications, evaluate technical feasibility, and return a scoped proposal within 24 business hours.
      </p>

      <div class="pt-6 flex flex-wrap items-center gap-6 text-xs text-slate-500">
        <span class="flex items-center gap-2 font-medium">
          <span class="w-2 h-2 rounded-full bg-emerald-500"></span>
          Response within 24 Business Hours
        </span>
        <span class="flex items-center gap-2 font-medium">
          <span class="w-2 h-2 rounded-full bg-electric-500"></span>
          Mutual NDA Safeguards
        </span>
        <span class="flex items-center gap-2 font-medium">
          <span class="w-2 h-2 rounded-full bg-brandOrange-500"></span>
          Zero Sales Pressure
        </span>
      </div>
    </div>
  </div>
</section>


<!-- ==========================================================================
     MAIN CONTACT SECTION (FORM & DIRECT CHANNELS)
========================================================================== -->
<section class="section-padding bg-white border-b border-canvas-border">
  <div class="container-custom">
    
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-start">
      
      <!-- Left Column: Direct Contact Cards & Channels (5 Cols) -->
      <div class="lg:col-span-5 space-y-6">
        <div>
          <span class="text-xs font-bold uppercase tracking-wider text-slate-400">Direct Contact Channels</span>
          <h2 class="text-2xl sm:text-3xl font-extrabold text-navy-900 tracking-tight mt-1">Speak with an Engineer</h2>
          <p class="text-sm text-navy-600 mt-2 leading-relaxed">
            Reach out via phone, direct WhatsApp, or email. We are available for discovery calls Monday through Saturday.
          </p>
        </div>

        <!-- WhatsApp CTA Card (Prominent) -->
        <div class="p-6 rounded-card bg-emerald-50 border border-emerald-200 space-y-3">
          <div class="flex items-center gap-2 text-emerald-800 font-bold text-sm">
            <span class="w-2 h-2 rounded-full bg-emerald-600 animate-pulse"></span>
            <span>Instant Technical Scoping via WhatsApp</span>
          </div>
          <p class="text-xs text-emerald-700 leading-relaxed">
            Need an immediate scoping consultation? Chat directly with our solutions team on WhatsApp.
          </p>
          <a href="<?php echo getWhatsAppUrl('Hi Yukt IT Solutions, I would like to discuss our project scope and technical roadmap.'); ?>" target="_blank" rel="noopener noreferrer" class="btn bg-emerald-600 hover:bg-emerald-700 text-white w-full py-2.5 text-xs font-semibold shadow-xs flex items-center justify-center gap-2">
            <?php echo getIconSvg('whatsapp', 'w-4 h-4 text-white'); ?>
            <span>Open WhatsApp Conversation</span>
            <?php echo getIconSvg('arrow-right', 'w-3.5 h-3.5'); ?>
          </a>
        </div>

        <!-- Contact Detail Cards -->
        <div class="space-y-4">
          
          <!-- Phone Card -->
          <div class="flex items-start gap-3.5 p-4 rounded-card bg-canvas-subtle border border-canvas-border">
            <div class="w-10 h-10 rounded-lg bg-brandOrange-50 text-brandOrange-600 border border-brandOrange-200 flex items-center justify-center flex-shrink-0 mt-0.5">
              <?php echo getIconSvg('phone', 'w-5 h-5'); ?>
            </div>
            <div>
              <div class="text-xs font-bold uppercase tracking-wider text-slate-500">Phone &amp; Direct Line</div>
              <a href="tel:<?php echo PHONE_RAW; ?>" class="text-sm font-semibold text-navy-900 hover:text-electric-600 transition-colors"><?php echo PHONE_NUMBER; ?></a>
              <div class="text-xs text-slate-500 mt-0.5"><?php echo WORKING_HOURS; ?></div>
            </div>
          </div>

          <!-- Email Card -->
          <div class="flex items-start gap-3.5 p-4 rounded-card bg-canvas-subtle border border-canvas-border">
            <div class="w-10 h-10 rounded-lg bg-electric-50 text-electric-600 border border-electric-200 flex items-center justify-center flex-shrink-0 mt-0.5">
              <?php echo getIconSvg('mail', 'w-5 h-5'); ?>
            </div>
            <div>
              <div class="text-xs font-bold uppercase tracking-wider text-slate-500">Official Electronic Mail</div>
              <div class="space-y-0.5">
                <div>
                  <a href="mailto:<?php echo EMAIL_PRIMARY; ?>" class="text-sm font-semibold text-navy-900 hover:text-electric-600 transition-colors"><?php echo EMAIL_PRIMARY; ?></a>
                  <span class="text-[11px] text-slate-500 ml-1.5">(General Inquiries)</span>
                </div>
                <div>
                  <a href="mailto:<?php echo EMAIL_SALES; ?>" class="text-sm font-semibold text-navy-900 hover:text-electric-600 transition-colors"><?php echo EMAIL_SALES; ?></a>
                  <span class="text-[11px] text-slate-500 ml-1.5">(Commercial &amp; Scoping)</span>
                </div>
              </div>
            </div>
          </div>

          <!-- Locations Card -->
          <div class="flex items-start gap-3.5 p-4 rounded-card bg-canvas-subtle border border-canvas-border">
            <div class="w-10 h-10 rounded-lg bg-navy-100 text-navy-800 border border-navy-200 flex items-center justify-center flex-shrink-0 mt-0.5">
              <?php echo getIconSvg('map-pin', 'w-5 h-5'); ?>
            </div>
            <div>
              <div class="text-xs font-bold uppercase tracking-wider text-slate-500">Development Hubs</div>
              <div class="text-sm font-semibold text-navy-900"><?php echo OFFICE_PRIMARY; ?></div>
              <div class="text-xs text-slate-500"><?php echo OFFICE_SECONDARY; ?></div>
            </div>
          </div>

        </div>

      </div>

      <!-- Right Column: Professional Inquiry Form (7 Cols) -->
      <div class="lg:col-span-7">
        <div class="bg-white border border-canvas-border rounded-card p-6 sm:p-10 shadow-card">
          
          <div class="mb-6">
            <span class="text-xs font-bold uppercase tracking-wider text-electric-600">Confidential Scoping</span>
            <h3 class="text-2xl font-bold text-navy-900 mt-1">Submit Your Project Scope</h3>
            <p class="text-sm text-navy-600 mt-1">All submissions are reviewed under strict confidentiality. We do not share your details.</p>
          </div>

          <form id="contactPageForm" action="api/contact-submit.php" method="POST" class="space-y-4" novalidate>
            
            <!-- Anti-Spam Honeypot Field (Invisible to human users) -->
            <div class="hidden" aria-hidden="true">
              <label for="website_honey">Leave this field empty</label>
              <input type="text" id="website_honey" name="website_honey" tabindex="-1" autocomplete="off">
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
              <div>
                <label for="contactName" class="form-label">Full Name <span class="text-brandOrange-600">*</span></label>
                <input type="text" id="contactName" name="full_name" required placeholder="e.g. Ramesh Krishnan" class="form-input">
                <span class="text-[11px] text-red-600 hidden mt-1" id="errName">Please enter your name.</span>
              </div>

              <div>
                <label for="contactEmail" class="form-label">Business Email <span class="text-brandOrange-600">*</span></label>
                <input type="email" id="contactEmail" name="email" required placeholder="ramesh@company.com" class="form-input">
                <span class="text-[11px] text-red-600 hidden mt-1" id="errEmail">Please enter a valid business email.</span>
              </div>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
              <div>
                <label for="contactPhone" class="form-label">Phone Number / WhatsApp <span class="text-slate-400 text-[11px]">(Optional)</span></label>
                <input type="tel" id="contactPhone" name="phone" placeholder="+91 98765 43210" class="form-input">
              </div>

              <div>
                <label for="contactService" class="form-label">Service Category <span class="text-brandOrange-600">*</span></label>
                <select id="contactService" name="service_needed" required class="form-select">
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
              <label for="contactBudget" class="form-label">Estimated Budget Range</label>
              <select id="contactBudget" name="budget" class="form-select">
                <option value="Not Specified">Select Indicative Range (Optional)</option>
                <option value="₹50,000 – ₹1,50,000">₹50,000 – ₹1,50,000</option>
                <option value="₹1,50,000 – ₹5,00,000" selected>₹1,50,000 – ₹5,00,000</option>
                <option value="₹5,00,000 – ₹15,00,000">₹5,00,000 – ₹15,00,000</option>
                <option value="₹15,00,000+ (Enterprise)">₹15,00,000+ (Enterprise Architecture)</option>
                <option value="Flexible / Needs Consultation">Flexible / Needs Consultation</option>
              </select>
            </div>

            <div>
              <label for="contactMessage" class="form-label">Project Description &amp; Requirements <span class="text-brandOrange-600">*</span></label>
              <textarea id="contactMessage" name="message" rows="4" required placeholder="Describe what you want to build, existing systems in place, and your target timeline..." class="form-textarea"></textarea>
              <span class="text-[11px] text-red-600 hidden mt-1" id="errMessage">Please provide a brief project description.</span>
            </div>

            <!-- AJAX Status Feedback Container -->
            <div id="contactFormFeedback" class="hidden text-sm p-4 rounded-btn"></div>

            <div class="pt-3 border-t border-canvas-border flex flex-col sm:flex-row items-center justify-between gap-4">
              <span class="text-xs text-slate-500 flex items-center gap-1.5">
                <?php echo getIconSvg('shield-check', 'w-4 h-4 text-emerald-600'); ?>
                Confidential NDA Protected
              </span>

              <button type="submit" id="contactSubmitBtn" class="btn-primary w-full sm:w-auto px-8 py-3">
                <span>Submit Inquiry</span>
                <?php echo getIconSvg('arrow-right', 'w-4 h-4'); ?>
              </button>
            </div>

            <div class="pt-2 text-center sm:text-right">
              <a href="<?php echo getWhatsAppUrl('Hi Yukt IT Solutions, I would like to discuss our project scope on WhatsApp.'); ?>" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-1.5 text-xs font-medium text-emerald-700 hover:text-emerald-800 transition-colors">
                <?php echo getIconSvg('whatsapp', 'w-3.5 h-3.5 text-emerald-600'); ?>
                <span>Prefer instant chat? Connect on WhatsApp (+91 72176 45059) &rarr;</span>
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
     FREQUENTLY ASKED SCOPING QUESTIONS
========================================================================== -->
<section class="section-padding bg-canvas-subtle">
  <div class="container-custom">
    
    <?php echo renderSectionHeader(
      'Scoping Process',
      'What Happens After You Submit?',
      'Clear, predictable steps from initial inquiry to sprint kick-off.',
      true
    ); ?>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 max-w-5xl mx-auto">
      
      <div class="bg-white border border-canvas-border rounded-card p-6">
        <div class="w-8 h-8 rounded bg-electric-50 text-electric-600 font-mono font-bold flex items-center justify-center text-sm mb-3">1</div>
        <h4 class="text-base font-bold text-navy-900">Senior Architect Review</h4>
        <p class="text-xs text-navy-600 mt-2 leading-relaxed">
          Your submission is reviewed by a senior solutions architect who evaluates requirements, stack compatibility, and timeline feasibility.
        </p>
      </div>

      <div class="bg-white border border-canvas-border rounded-card p-6">
        <div class="w-8 h-8 rounded bg-brandOrange-50 text-brandOrange-600 font-mono font-bold flex items-center justify-center text-sm mb-3">2</div>
        <h4 class="text-base font-bold text-navy-900">Discovery Video Call</h4>
        <p class="text-xs text-navy-600 mt-2 leading-relaxed">
          We schedule a focused 30-minute discovery call to align on technical constraints, deliverables, and commercial expectations.
        </p>
      </div>

      <div class="bg-white border border-canvas-border rounded-card p-6">
        <div class="w-8 h-8 rounded bg-emerald-50 text-emerald-600 font-mono font-bold flex items-center justify-center text-sm mb-3">3</div>
        <h4 class="text-base font-bold text-navy-900">Sprint Roadmap &amp; Scope</h4>
        <p class="text-xs text-navy-600 mt-2 leading-relaxed">
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
