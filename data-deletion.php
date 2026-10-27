<?php
$activePage = 'data-deletion';
$pageTitle = 'User Data Deletion Instructions & Request | YUKT IT SOLUTIONS';
$pageDesc = 'Official User Data Deletion Instructions & Self-Service Request Portal for Yukt IT Solutions Private Limited (yukt.online). Compliant with Meta Platform Terms, DPDP Act 2023, and GDPR.';
$canonicalUrl = 'https://yukt.online/data-deletion';
$breadcrumbName = 'Data Deletion Request';

require_once __DIR__ . '/includes/header.php';
?>

<!-- ==========================================================================
     HERO SECTION: FUTURISTIC 3D BRAND THEME + ADVERT WAVE SHADER
========================================================================== -->
<section class="advert-wave-hero relative pt-14 pb-14 sm:pt-20 sm:pb-20 lg:pt-24 lg:pb-24 bg-navy-950 bg-grid-dark text-white overflow-hidden border-b border-white/10">
  <div class="absolute top-1/4 left-1/4 w-[500px] h-[500px] bg-red-500/15 rounded-full blur-[130px] pointer-events-none"></div>
  <div class="absolute bottom-10 right-10 w-[400px] h-[400px] bg-electric-500/15 rounded-full blur-[130px] pointer-events-none"></div>

  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-10 relative z-10">
    <!-- Breadcrumb Bar -->
    <nav aria-label="Breadcrumb" class="mb-6">
      <ol class="flex items-center gap-2 text-xs font-mono text-slate-400">
        <li>
          <a href="index.php" class="hover:text-white transition-colors flex items-center gap-1">
            <i data-lucide="home" class="w-3.5 h-3.5"></i>
            <span>Home</span>
          </a>
        </li>
        <li><i data-lucide="chevron-right" class="w-3 h-3 text-slate-600"></i></li>
        <li>
          <a href="privacy-policy" class="hover:text-white transition-colors">Privacy Policy</a>
        </li>
        <li><i data-lucide="chevron-right" class="w-3 h-3 text-slate-600"></i></li>
        <li class="text-electric-400 font-medium">Data Deletion Request</li>
      </ol>
    </nav>

    <div class="max-w-3xl space-y-5 reveal-up">
      <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-white/[0.05] border border-white/10 text-electric-400 font-mono text-xs uppercase tracking-widest">
        <span class="w-2 h-2 rounded-full bg-red-400 animate-ping"></span>
        <span>Meta Platform Policy &bull; DPDP Act 2023 &bull; GDPR Article 17</span>
      </div>

      <h1 class="font-display font-bold text-4xl sm:text-5xl lg:text-6xl text-white tracking-tight leading-[1.1]">
        User Data <span class="text-gradient-electric">Deletion</span>
      </h1>

      <p class="text-base sm:text-lg text-slate-300 leading-relaxed font-normal">
        According to Meta Platform Policy, the Digital Personal Data Protection Act, 2023 (DPDP Act, India), and GDPR Article 17 (Right to Erasure), you have the absolute legal entitlement to request the irreversible deletion of your personal data held by <strong class="text-white font-semibold">Yukt IT Solutions Private Limited</strong> (<span class="text-electric-300 font-mono">yukt.online</span>).
      </p>

      <!-- Meta Bar -->
      <div class="pt-2 flex flex-wrap items-center gap-y-2 gap-x-6 text-xs text-slate-400 border-t border-white/10 font-mono">
        <span class="flex items-center gap-1.5">
          <i data-lucide="shield-alert" class="w-3.5 h-3.5 text-red-400"></i>
          <span>Self-Service Erasure Portal</span>
        </span>
        <span class="flex items-center gap-1.5">
          <i data-lucide="clock" class="w-3.5 h-3.5 text-electric-400"></i>
          <span>SLA: <strong>15 &ndash; 30 Calendar Days</strong></span>
        </span>
        <span class="flex items-center gap-1.5">
          <i data-lucide="check-circle" class="w-3.5 h-3.5 text-emerald-400"></i>
          <span>Automated Tracking Code</span>
        </span>
        <button onclick="window.print()" type="button" class="inline-flex items-center gap-1 text-slate-300 hover:text-white underline underline-offset-4 cursor-pointer">
          <i data-lucide="printer" class="w-3.5 h-3.5"></i>
          <span>Print Instructions</span>
        </button>
      </div>
    </div>
  </div>
</section>

<!-- ==========================================================================
     MAIN BODY & INTERACTIVE DELETION PORTAL
========================================================================== -->
<section class="py-16 sm:py-20 lg:py-24 bg-slate-50 text-slate-900 bg-grid-light border-b border-slate-200" id="mainContent">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-10">
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-12 items-start">

      <!-- ====================================================================
           LEFT SIDEBAR: TOC & PRIVACY OFFICER CONTACT (4 COLS)
      ===================================================================== -->
      <aside class="lg:col-span-4 space-y-6 lg:sticky lg:top-28">
        
        <!-- Quick Nav Container -->
        <div class="bg-white rounded-2xl p-6 border border-slate-200/90 shadow-sm space-y-4">
          <div class="flex items-center justify-between pb-3 border-b border-slate-100">
            <span class="font-display font-bold text-sm text-slate-900 flex items-center gap-2">
              <i data-lucide="trash-2" class="w-4 h-4 text-red-600"></i>
              Deletion Guide
            </span>
            <span class="text-[10px] font-mono px-2 py-0.5 rounded-full bg-slate-100 text-slate-600 font-medium">6 Steps</span>
          </div>

          <nav class="space-y-1 text-xs font-medium text-slate-600" aria-label="Deletion Guide Navigation">
            <a href="#request-form" class="block px-2.5 py-1.5 rounded-lg bg-electric-50 text-electric-700 font-semibold transition-colors">1. Instant Deletion Request Form</a>
            <a href="#meta-instructions" class="block px-2.5 py-1.5 rounded-lg hover:bg-slate-100 hover:text-slate-900 transition-colors">2. Facebook / Meta App Instructions</a>
            <a href="#whatsapp-instructions" class="block px-2.5 py-1.5 rounded-lg hover:bg-slate-100 hover:text-slate-900 transition-colors">3. WhatsApp Chat &amp; Lead Deletion</a>
            <a href="#data-scope" class="block px-2.5 py-1.5 rounded-lg hover:bg-slate-100 hover:text-slate-900 transition-colors">4. Data Categories &amp; Retention Matrix</a>
            <a href="#processing-timeline" class="block px-2.5 py-1.5 rounded-lg hover:bg-slate-100 hover:text-slate-900 transition-colors">5. Verification &amp; SLA Timeline</a>
            <a href="#dpo-desk" class="block px-2.5 py-1.5 rounded-lg hover:bg-slate-100 hover:text-slate-900 transition-colors">6. Data Protection Officer (DPO)</a>
          </nav>
        </div>

        <!-- Meta Compliance Verification Card -->
        <div class="bg-gradient-to-br from-navy-950 to-navy-900 text-white rounded-2xl p-6 border border-white/10 shadow-lg space-y-4">
          <div class="flex items-center gap-2">
            <span class="w-2 h-2 rounded-full bg-emerald-400"></span>
            <span class="font-mono text-xs uppercase tracking-wider text-emerald-400 font-semibold">Meta Policy Certified</span>
          </div>
          <p class="text-xs text-slate-300 leading-relaxed">
            This page provides official User Data Deletion Request Instructions in compliance with Section 4.a of the <strong>Meta Platform Terms</strong> for Facebook Login, Instagram Graph API, and WhatsApp Business API integrations.
          </p>
          <div class="pt-2 border-t border-white/10 flex flex-col gap-2 text-xs font-mono text-slate-300">
            <div class="flex items-center justify-between">
              <span class="text-slate-400">Callback Type:</span>
              <span class="text-white font-semibold">Instructions &amp; Webhook</span>
            </div>
            <div class="flex items-center justify-between">
              <span class="text-slate-400">Identity Check:</span>
              <span class="text-electric-400 font-semibold">Dual-Factor Verification</span>
            </div>
            <div class="flex items-center justify-between">
              <span class="text-slate-400">Purge Confirmation:</span>
              <span class="text-emerald-400 font-semibold">Digital Certificate</span>
            </div>
          </div>
        </div>

        <!-- Privacy Desk Card -->
        <div class="bg-white rounded-2xl p-6 border border-slate-200/90 shadow-sm space-y-4">
          <span class="font-display font-bold text-sm text-slate-900 block">Direct DPO Hotline</span>
          <p class="text-xs text-slate-600 leading-relaxed">
            Prefer direct human communication? You can submit your deletion request via email or WhatsApp directly to our leadership:
          </p>

          <div class="space-y-2 pt-1">
            <a href="mailto:privacy@yukt.online?subject=%5BDATA%20DELETION%20REQUEST%5D%20Urgent%20Erasure%20Notice" class="flex items-center gap-2 text-xs text-electric-600 hover:text-electric-700 font-semibold">
              <i data-lucide="mail" class="w-3.5 h-3.5"></i>
              <span>privacy@yukt.online</span>
            </a>
            <a href="<?php echo getWhatsAppUrl('Hi Ranjeet, I am submitting a formal Data Deletion Request under DPDP Act / GDPR for my records.'); ?>" target="_blank" rel="noopener noreferrer" class="flex items-center gap-2 text-xs text-emerald-600 hover:text-emerald-700 font-semibold">
              <i data-lucide="message-circle" class="w-3.5 h-3.5"></i>
              <span>WhatsApp Deletion Desk (+91 72176 45059)</span>
            </a>
          </div>

          <div class="pt-3 border-t border-slate-100 text-[11px] text-slate-500 font-mono">
            <div>Office: Ram Datt Enclave, Uttam Nagar, Delhi - 110059</div>
          </div>
        </div>

      </aside>

      <!-- ====================================================================
           RIGHT MAIN CONTENT: INTERACTIVE FORM + DETAILED INSTRUCTIONS (8 COLS)
      ===================================================================== -->
      <article class="lg:col-span-8 space-y-12 text-slate-700 leading-relaxed">

        <!-- ================================================================
             SECTION 1: INTERACTIVE DATA DELETION REQUEST FORM
        ================================================================= -->
        <section id="request-form" class="scroll-mt-28 bg-white rounded-3xl p-6 sm:p-10 border border-slate-200/90 shadow-sm space-y-6">
          <div class="flex items-center gap-2 text-xs font-mono font-semibold uppercase text-electric-600 tracking-wider">
            <span>Section 01</span>
            <span class="w-1.5 h-1.5 rounded-full bg-electric-600"></span>
            <span>Self-Service Portal</span>
          </div>

          <h2 class="font-display font-bold text-2xl sm:text-3xl text-slate-900 tracking-tight">
            1. Submit an Instant Data Deletion Request
          </h2>

          <p class="text-sm">
            Fill out the official request form below to initiate the permanent erasure of your personal records from our systems. Upon submission, an automated Tracking ID will be generated to track your deletion progress.
          </p>

          <!-- Form Notification Message Box -->
          <div id="deletion-alert" class="hidden p-4 rounded-2xl text-xs font-mono transition-all"></div>

          <!-- The Form -->
          <form id="data-deletion-form" class="space-y-5 pt-2" method="POST" action="api/data-deletion-submit.php">
            <!-- Anti-spam Honeypot -->
            <input type="text" name="website_honey" class="hidden" tabindex="-1" autocomplete="off">

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
              <!-- Full Name -->
              <div>
                <label for="requester_name" class="block text-xs font-semibold text-slate-900 mb-1.5">
                  Full Name / Business Name <span class="text-red-500">*</span>
                </label>
                <input 
                  type="text" 
                  id="requester_name" 
                  name="requester_name" 
                  required 
                  placeholder="e.g. Rahul Sharma / Enterprise Corp" 
                  class="w-full px-4 py-2.5 rounded-xl border border-slate-200 bg-slate-50 text-slate-900 text-sm focus:bg-white focus:outline-none focus:ring-2 focus:ring-electric-500 transition-all"
                >
              </div>

              <!-- Associated Email -->
              <div>
                <label for="email" class="block text-xs font-semibold text-slate-900 mb-1.5">
                  Associated Email Address <span class="text-red-500">*</span>
                </label>
                <input 
                  type="email" 
                  id="email" 
                  name="email" 
                  required 
                  placeholder="name@company.com" 
                  class="w-full px-4 py-2.5 rounded-xl border border-slate-200 bg-slate-50 text-slate-900 text-sm focus:bg-white focus:outline-none focus:ring-2 focus:ring-electric-500 transition-all"
                >
              </div>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
              <!-- Phone / WhatsApp -->
              <div>
                <label for="phone" class="block text-xs font-semibold text-slate-900 mb-1.5">
                  Phone / WhatsApp Number (Optional)
                </label>
                <input 
                  type="tel" 
                  id="phone" 
                  name="phone" 
                  placeholder="+91 98765 43210" 
                  class="w-full px-4 py-2.5 rounded-xl border border-slate-200 bg-slate-50 text-slate-900 text-sm focus:bg-white focus:outline-none focus:ring-2 focus:ring-electric-500 transition-all"
                >
              </div>

              <!-- Interaction Type -->
              <div>
                <label for="interaction_type" class="block text-xs font-semibold text-slate-900 mb-1.5">
                  Interaction Channel
                </label>
                <select 
                  id="interaction_type" 
                  name="interaction_type" 
                  class="w-full px-4 py-2.5 rounded-xl border border-slate-200 bg-slate-50 text-slate-900 text-sm focus:bg-white focus:outline-none focus:ring-2 focus:ring-electric-500 transition-all"
                >
                  <option value="Website Inquiry / Contact Form">Website Inquiry / Contact Form</option>
                  <option value="WhatsApp Business Chat / Lead">WhatsApp Business Chat / Lead</option>
                  <option value="Meta / Facebook App Integration">Meta / Facebook App Integration</option>
                  <option value="Quote Calculator Submission">Quote Calculator Submission</option>
                  <option value="Client Staging Portal / Sandbox Access">Client Staging Portal / Sandbox Access</option>
                  <option value="Other / All Channels">Other / All Channels</option>
                </select>
              </div>
            </div>

            <!-- Deletion Scope -->
            <div>
              <label for="deletion_scope" class="block text-xs font-semibold text-slate-900 mb-1.5">
                Scope of Requested Erasure
              </label>
              <select 
                id="deletion_scope" 
                name="deletion_scope" 
                class="w-full px-4 py-2.5 rounded-xl border border-slate-200 bg-slate-50 text-slate-900 text-sm focus:bg-white focus:outline-none focus:ring-2 focus:ring-electric-500 transition-all"
              >
                <option value="All Personal Data & Communications">Complete Erasure (All Personal Data, Chats &amp; Contact Records)</option>
                <option value="Marketing & Inquiries Only">Inquiries &amp; Marketing Communications Only</option>
                <option value="Staging Credentials & Sandbox DB">Staging Credentials &amp; Test Sandbox Data</option>
                <option value="WhatsApp Chat History">WhatsApp Chat &amp; Phone Association Only</option>
              </select>
            </div>

            <!-- Additional Notes / Reason -->
            <div>
              <label for="notes" class="block text-xs font-semibold text-slate-900 mb-1.5">
                Additional Verification Details or Specific URLs (Optional)
              </label>
              <textarea 
                id="notes" 
                name="notes" 
                rows="3" 
                placeholder="Include any specific project reference, approximate dates of communication, or Facebook User ID..."
                class="w-full px-4 py-2.5 rounded-xl border border-slate-200 bg-slate-50 text-slate-900 text-sm focus:bg-white focus:outline-none focus:ring-2 focus:ring-electric-500 transition-all"
              ></textarea>
            </div>

            <!-- Legal Checkbox -->
            <div class="flex items-start gap-2.5 pt-1">
              <input 
                type="checkbox" 
                id="verify_auth" 
                required 
                class="mt-1 w-4 h-4 rounded text-electric-600 focus:ring-electric-500 border-slate-300"
              >
              <label for="verify_auth" class="text-xs text-slate-600 leading-relaxed">
                I hereby declare that I am the authorized owner of the specified email address/phone number and request Yukt IT Solutions to permanently erase these records in accordance with applicable data privacy laws.
              </label>
            </div>

            <!-- Submit Button -->
            <div class="pt-2">
              <button 
                type="submit" 
                id="submit-deletion-btn"
                class="w-full sm:w-auto px-8 py-3.5 rounded-xl font-display font-semibold text-sm text-white bg-gradient-to-r from-red-600 to-rose-700 hover:from-red-500 hover:to-rose-600 shadow-xl shadow-red-600/25 transition-all flex items-center justify-center gap-2 cursor-pointer"
              >
                <i data-lucide="trash-2" class="w-4 h-4"></i>
                <span>Submit Formal Data Deletion Request</span>
              </button>
            </div>
          </form>
        </section>

        <!-- ================================================================
             SECTION 2: META / FACEBOOK APP USERS INSTRUCTIONS
        ================================================================= -->
        <section id="meta-instructions" class="scroll-mt-28 bg-white rounded-3xl p-6 sm:p-10 border border-slate-200/90 shadow-sm space-y-6">
          <div class="flex items-center gap-2 text-xs font-mono font-semibold uppercase text-electric-600 tracking-wider">
            <span>Section 02</span>
            <span class="w-1.5 h-1.5 rounded-full bg-electric-600"></span>
            <span>Meta Platform Compliance</span>
          </div>

          <h2 class="font-display font-bold text-2xl sm:text-3xl text-slate-900 tracking-tight">
            2. Facebook &amp; Meta Platform User Instructions
          </h2>

          <p class="text-sm">
            If you have authorized a Yukt IT Solutions app or Facebook Login integration, you can remove your activities and initiate an automated data deletion request directly from your Facebook account settings. Follow these official steps:
          </p>

          <!-- Step-by-Step Cards -->
          <div class="space-y-3 pt-2">
            
            <!-- Step 1 -->
            <div class="p-4 rounded-2xl bg-slate-50 border border-slate-200 flex items-start gap-4 text-xs">
              <div class="w-8 h-8 rounded-xl bg-electric-600 text-white font-mono font-bold flex items-center justify-center flex-shrink-0">
                1
              </div>
              <div class="space-y-1">
                <span class="font-bold text-slate-900 block text-sm">Open Facebook Settings &amp; Privacy</span>
                <p class="text-slate-600">
                  Log into your Facebook account, click your profile picture in the top-right corner, select <strong class="text-slate-900">Settings &amp; Privacy</strong>, and then click <strong class="text-slate-900">Settings</strong>.
                </p>
              </div>
            </div>

            <!-- Step 2 -->
            <div class="p-4 rounded-2xl bg-slate-50 border border-slate-200 flex items-start gap-4 text-xs">
              <div class="w-8 h-8 rounded-xl bg-electric-600 text-white font-mono font-bold flex items-center justify-center flex-shrink-0">
                2
              </div>
              <div class="space-y-1">
                <span class="font-bold text-slate-900 block text-sm">Navigate to "Apps and Websites"</span>
                <p class="text-slate-600">
                  In the left-hand navigation menu, scroll down to the <em>Permissions</em> section and click on <strong class="text-slate-900">Apps and Websites</strong> to view all active connected applications.
                </p>
              </div>
            </div>

            <!-- Step 3 -->
            <div class="p-4 rounded-2xl bg-slate-50 border border-slate-200 flex items-start gap-4 text-xs">
              <div class="w-8 h-8 rounded-xl bg-electric-600 text-white font-mono font-bold flex items-center justify-center flex-shrink-0">
                3
              </div>
              <div class="space-y-1">
                <span class="font-bold text-slate-900 block text-sm">Select Yukt App &amp; Click Remove</span>
                <p class="text-slate-600">
                  Locate <strong class="text-slate-900">Yukt IT Solutions</strong> in your active apps list, check the checkbox or click the app details, and click the blue <strong class="text-slate-900">Remove</strong> button.
                </p>
              </div>
            </div>

            <!-- Step 4 -->
            <div class="p-4 rounded-2xl bg-slate-50 border border-slate-200 flex items-start gap-4 text-xs">
              <div class="w-8 h-8 rounded-xl bg-emerald-600 text-white font-mono font-bold flex items-center justify-center flex-shrink-0">
                4
              </div>
              <div class="space-y-1">
                <span class="font-bold text-slate-900 block text-sm">Trigger Automated Deletion Request Callback</span>
                <p class="text-slate-600">
                  Switch to the <strong class="text-slate-900">Removed</strong> tab in your Apps and Websites dashboard, find <strong>Yukt IT Solutions</strong>, and click <strong class="text-slate-900">Send Request</strong>. Facebook will immediately transmit an encrypted signed deletion callback to our servers.
                </p>
              </div>
            </div>

          </div>

          <div class="p-4 rounded-xl bg-emerald-50 border border-emerald-200 text-xs text-emerald-800 flex items-start gap-2.5">
            <i data-lucide="check-circle" class="w-4 h-4 text-emerald-600 flex-shrink-0 mt-0.5"></i>
            <div>
              <strong>Instant Webhook Processing:</strong> Our backend endpoint listens for Meta's signed deauthorization webhooks, immediately disassociates your Facebook User ID, and flags all corresponding interaction records for complete purging.
            </div>
          </div>
        </section>

        <!-- ================================================================
             SECTION 3: WHATSAPP CHAT & LEAD DELETION
        ================================================================= -->
        <section id="whatsapp-instructions" class="scroll-mt-28 bg-white rounded-3xl p-6 sm:p-10 border border-slate-200/90 shadow-sm space-y-6">
          <div class="flex items-center gap-2 text-xs font-mono font-semibold uppercase text-electric-600 tracking-wider">
            <span>Section 03</span>
            <span class="w-1.5 h-1.5 rounded-full bg-electric-600"></span>
            <span>WhatsApp Business API</span>
          </div>

          <h2 class="font-display font-bold text-2xl sm:text-3xl text-slate-900 tracking-tight">
            3. WhatsApp Chat &amp; Lead Deletion Instructions
          </h2>

          <p class="text-sm">
            For users who have initiated technical conversations via our persistent WhatsApp floating desk or WhatsApp Business numbers, you can request immediate purging through any of these three frictionless channels:
          </p>

          <div class="grid grid-cols-1 sm:grid-cols-3 gap-3 text-xs pt-1">
            <div class="p-4 rounded-xl bg-slate-50 border border-slate-200 space-y-2">
              <span class="font-bold text-slate-900 block">Keyword Command</span>
              <p class="text-slate-600">Text <code>"DELETE MY DATA"</code> or <code>"DATA PURGE"</code> directly in our WhatsApp chat thread.</p>
            </div>
            <div class="p-4 rounded-xl bg-slate-50 border border-slate-200 space-y-2">
              <span class="font-bold text-slate-900 block">Founder Hotline</span>
              <p class="text-slate-600">Directly contact Founder Ansar Ali Shah (+91 95763 38282) or Ranjeet (+91 72176 45059).</p>
            </div>
            <div class="p-4 rounded-xl bg-slate-50 border border-slate-200 space-y-2">
              <span class="font-bold text-slate-900 block">Purge Window</span>
              <p class="text-slate-600">All local CRM leads and phone number records are completely scrubbed within <strong>72 hours</strong>.</p>
            </div>
          </div>

          <div class="pt-2">
            <a href="https://wa.me/918235411806?text=DELETE%20MY%20DATA%3A%20Please%20erase%20all%20my%20contact%20and%20chat%20records%20from%20Yukt." target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-2 px-5 py-2.5 rounded-xl font-display font-semibold text-xs text-white bg-emerald-600 hover:bg-emerald-500 transition-colors">
              <i data-lucide="message-circle" class="w-4 h-4"></i>
              <span>Send One-Click WhatsApp Deletion Command</span>
            </a>
          </div>
        </section>

        <!-- ================================================================
             SECTION 4: DATA CATEGORIES & STATUTORY RETENTION MATRIX
        ================================================================= -->
        <section id="data-scope" class="scroll-mt-28 bg-white rounded-3xl p-6 sm:p-10 border border-slate-200/90 shadow-sm space-y-6">
          <div class="flex items-center gap-2 text-xs font-mono font-semibold uppercase text-electric-600 tracking-wider">
            <span>Section 04</span>
            <span class="w-1.5 h-1.5 rounded-full bg-electric-600"></span>
            <span>Data Eligibility Matrix</span>
          </div>

          <h2 class="font-display font-bold text-2xl sm:text-3xl text-slate-900 tracking-tight">
            4. Categories of Data Eligible for Deletion vs. Statutory Retention
          </h2>

          <p class="text-sm">
            To provide total transparency, the following matrix delineates which records are immediately purged upon request, and which statutory records must be retained under Indian Companies Act and Tax Laws:
          </p>

          <div class="overflow-x-auto pt-2">
            <table class="w-full text-xs text-left border border-slate-200 rounded-xl overflow-hidden">
              <thead class="bg-slate-100 text-slate-900 font-mono uppercase tracking-wider">
                <tr>
                  <th class="p-3 border-b border-slate-200">Data Category</th>
                  <th class="p-3 border-b border-slate-200">Examples</th>
                  <th class="p-3 border-b border-slate-200">Purge Action</th>
                  <th class="p-3 border-b border-slate-200">Standard Timeline</th>
                </tr>
              </thead>
              <tbody class="divide-y divide-slate-200">
                <tr class="bg-emerald-50/40">
                  <td class="p-3 font-semibold text-slate-900">Inquiries &amp; Leads</td>
                  <td class="p-3">Name, email, phone, budget, message</td>
                  <td class="p-3 text-emerald-700 font-semibold">Irrevocable Purge</td>
                  <td class="p-3 font-mono">15 &ndash; 30 Days</td>
                </tr>
                <tr class="bg-emerald-50/40">
                  <td class="p-3 font-semibold text-slate-900">WhatsApp Records</td>
                  <td class="p-3">Chat history, shared PDF specs, phone number</td>
                  <td class="p-3 text-emerald-700 font-semibold">Irrevocable Purge</td>
                  <td class="p-3 font-mono">72 Hours &ndash; 15 Days</td>
                </tr>
                <tr class="bg-emerald-50/40">
                  <td class="p-3 font-semibold text-slate-900">Staging Credentials</td>
                  <td class="p-3">Test database accounts, staging SSH tokens</td>
                  <td class="p-3 text-emerald-700 font-semibold">Immediate Revocation</td>
                  <td class="p-3 font-mono">24 &ndash; 48 Hours</td>
                </tr>
                <tr class="bg-amber-50/40">
                  <td class="p-3 font-semibold text-slate-900">Tax Invoices (Statutory)</td>
                  <td class="p-3">GST invoices, corporate receipts, bank logs</td>
                  <td class="p-3 text-amber-700 font-semibold">Statutory Retention</td>
                  <td class="p-3 font-mono">8 Years (Mandated by Indian Tax Law)</td>
                </tr>
                <tr class="bg-slate-50">
                  <td class="p-3 font-semibold text-slate-900">Client Source Code</td>
                  <td class="p-3">Private GitHub repositories, production code</td>
                  <td class="p-3 text-slate-700 font-semibold">Client SOW Protocol</td>
                  <td class="p-3 font-mono">Handed over to Client</td>
                </tr>
              </tbody>
            </table>
          </div>
        </section>

        <!-- ================================================================
             SECTION 5: VERIFICATION & SLA TIMELINE
        ================================================================= -->
        <section id="processing-timeline" class="scroll-mt-28 bg-white rounded-3xl p-6 sm:p-10 border border-slate-200/90 shadow-sm space-y-6">
          <div class="flex items-center gap-2 text-xs font-mono font-semibold uppercase text-electric-600 tracking-wider">
            <span>Section 05</span>
            <span class="w-1.5 h-1.5 rounded-full bg-electric-600"></span>
            <span>Lifecycle &amp; Verification</span>
          </div>

          <h2 class="font-display font-bold text-2xl sm:text-3xl text-slate-900 tracking-tight">
            5. Verification Process &amp; SLA Milestones
          </h2>

          <p class="text-sm">
            To prevent unauthorized, fraudulent, or malicious data deletion requests, every request follows an audited four-stage lifecycle:
          </p>

          <div class="grid grid-cols-1 sm:grid-cols-4 gap-3 text-xs pt-1 font-mono">
            <div class="p-4 rounded-2xl bg-slate-50 border border-slate-200 space-y-1">
              <span class="text-electric-600 font-bold block text-sm">Stage 1</span>
              <strong class="text-slate-900 block font-sans">Automated Ticket</strong>
              <p class="text-slate-500 font-sans text-[11px]">System generates unique Tracking ID within 24 hours.</p>
            </div>
            <div class="p-4 rounded-2xl bg-slate-50 border border-slate-200 space-y-1">
              <span class="text-electric-600 font-bold block text-sm">Stage 2</span>
              <strong class="text-slate-900 block font-sans">Identity Verification</strong>
              <p class="text-slate-500 font-sans text-[11px]">Confirmation ping sent to requester's email.</p>
            </div>
            <div class="p-4 rounded-2xl bg-slate-50 border border-slate-200 space-y-1">
              <span class="text-electric-600 font-bold block text-sm">Stage 3</span>
              <strong class="text-slate-900 block font-sans">Database Scrubbing</strong>
              <p class="text-slate-500 font-sans text-[11px]">Relational tables, CRM records &amp; backups purged.</p>
            </div>
            <div class="p-4 rounded-2xl bg-slate-50 border border-slate-200 space-y-1">
              <span class="text-emerald-600 font-bold block text-sm">Stage 4</span>
              <strong class="text-slate-900 block font-sans">Formal Confirmation</strong>
              <p class="text-slate-500 font-sans text-[11px]">Certificate of Deletion dispatched to requester.</p>
            </div>
          </div>
        </section>

        <!-- ================================================================
             SECTION 6: STATUTORY GRIEVANCE & DPO DESK
        ================================================================= -->
        <section id="dpo-desk" class="scroll-mt-28 space-y-6 pt-4 border-t border-slate-200">
          <div class="flex items-center gap-2 text-xs font-mono font-semibold uppercase text-electric-600 tracking-wider">
            <span>Section 06</span>
            <span class="w-1.5 h-1.5 rounded-full bg-electric-600"></span>
            <span>Statutory Officer</span>
          </div>

          <h2 class="font-display font-bold text-2xl sm:text-3xl text-slate-900 tracking-tight">
            6. Statutory Grievance &amp; Data Protection Officer Contact
          </h2>

          <p class="text-sm">
            In accordance with the Digital Personal Data Protection Act, 2023, and Rule 5(9) of the Information Technology Rules, 2011, inquiries regarding data deletion and erasure should be directed to our designated Data Protection Officer:
          </p>

          <div class="p-6 rounded-2xl bg-slate-900 text-white space-y-4 border border-slate-800 shadow-xl">
            <div class="flex items-center justify-between pb-3 border-b border-white/10">
              <div>
                <span class="font-display font-bold text-base text-white">Ranjeet</span>
                <span class="text-xs text-electric-400 block font-mono">Co-Founder &amp; Data Protection Officer</span>
              </div>
              <span class="text-[10px] font-mono px-2 py-0.5 rounded-full bg-red-500/20 text-red-400 border border-red-500/30">Data Erasure Authority</span>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 text-xs font-mono text-slate-300">
              <div>
                <span class="text-slate-500 block text-[10px] uppercase">Corporate Entity</span>
                <span class="text-white font-semibold">Yukt IT Solutions Private Limited</span>
              </div>
              <div>
                <span class="text-slate-500 block text-[10px] uppercase">Official Deletion Email</span>
                <a href="mailto:privacy@yukt.online" class="text-electric-400 hover:text-white underline">privacy@yukt.online</a>
              </div>
              <div>
                <span class="text-slate-500 block text-[10px] uppercase">DPO Direct Phone</span>
                <a href="tel:+917217645059" class="text-white hover:text-electric-400">+91 72176 45059</a>
              </div>
              <div>
                <span class="text-slate-500 block text-[10px] uppercase">Lead Technical Architect</span>
                <span class="text-white">Ansar Ali Shah (+91 95763 38282)</span>
              </div>
              <div class="sm:col-span-2">
                <span class="text-slate-500 block text-[10px] uppercase">Registered Office</span>
                <span class="text-white">Block A, Ram Datt Enclave, Uttam Nagar, Delhi - 110059, India</span>
              </div>
            </div>

            <div class="pt-3 border-t border-white/10 flex items-center justify-between text-[11px] text-slate-400">
              <span>Statutory Acknowledgment: Within 48 Hours</span>
              <span>Final Resolution: Within 15 &ndash; 30 Days</span>
            </div>
          </div>

          <!-- Bottom Navigation Links -->
          <div class="flex flex-col sm:flex-row items-center justify-between gap-4 pt-4 text-xs text-slate-500 border-t border-slate-200">
            <span>Explore our full legal agreements:</span>
            <div class="flex items-center gap-3">
              <a href="privacy-policy" class="hover:text-electric-600 underline">Privacy Policy</a>
              <span>&bull;</span>
              <a href="terms" class="hover:text-electric-600 underline">Terms of Service</a>
            </div>
          </div>
        </section>

      </article>

    </div>
  </div>
</section>

<!-- ==========================================================================
     CLIENT-SIDE AJAX SCRIPT FOR INSTANT FORM SUBMISSION
========================================================================== -->
<script>
document.addEventListener('DOMContentLoaded', function () {
  const form = document.getElementById('data-deletion-form');
  const alertBox = document.getElementById('deletion-alert');
  const submitBtn = document.getElementById('submit-deletion-btn');

  if (form) {
    form.addEventListener('submit', function (e) {
      e.preventDefault();

      if (submitBtn) {
        submitBtn.disabled = true;
        submitBtn.innerHTML = '<span class="inline-block animate-spin mr-2">&#9696;</span> Logging Request...';
      }

      const formData = new FormData(form);

      fetch('api/data-deletion-submit.php', {
        method: 'POST',
        body: formData,
        headers: {
          'X-Requested-With': 'XMLHttpRequest'
        }
      })
      .then(res => res.json())
      .then(data => {
        alertBox.classList.remove('hidden', 'bg-red-50', 'text-red-800', 'border-red-200', 'bg-emerald-50', 'text-emerald-800', 'border-emerald-200');
        
        if (data.success) {
          alertBox.classList.add('bg-emerald-50', 'text-emerald-800', 'border', 'border-emerald-200');
          alertBox.innerHTML = `
            <div class="space-y-2">
              <div class="font-bold text-sm flex items-center gap-2">
                <span>&#10004; Request Successfully Logged</span>
                <span class="px-2 py-0.5 rounded bg-emerald-200 text-emerald-900 font-mono text-[11px]">${data.tracking_code}</span>
              </div>
              <p class="text-xs leading-relaxed">${data.message}</p>
              <p class="text-[11px] text-emerald-700">Please save your Tracking Code <strong>${data.tracking_code}</strong> for future status verification.</p>
            </div>
          `;
          form.reset();
        } else {
          alertBox.classList.add('bg-red-50', 'text-red-800', 'border', 'border-red-200');
          alertBox.innerHTML = `<strong>Error:</strong> ${data.message || 'An error occurred while submitting your request.'}`;
        }
        alertBox.scrollIntoView({ behavior: 'smooth', block: 'center' });
      })
      .catch(err => {
        alertBox.classList.remove('hidden');
        alertBox.classList.add('bg-red-50', 'text-red-800', 'border', 'border-red-200');
        alertBox.innerHTML = '<strong>Connection Error:</strong> Could not connect to the server. Please email privacy@yukt.online directly.';
      })
      .finally(() => {
        if (submitBtn) {
          submitBtn.disabled = false;
          submitBtn.innerHTML = '<i data-lucide="trash-2" class="w-4 h-4"></i><span>Submit Formal Data Deletion Request</span>';
          if (window.lucide) { window.lucide.createIcons(); }
        }
      });
    });
  }
});
</script>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
