<?php
$activePage = 'privacy-policy';
$pageTitle = 'Privacy Policy | YUKT IT SOLUTIONS - Data Protection & Compliance';
$pageDesc = 'Official Privacy Policy of Yukt IT Solutions Private Limited (yukt.online). Comprehensive overview of data collection, DPDP Act 2023, GDPR, confidentiality, and security practices.';
$canonicalUrl = 'https://yukt.online/privacy-policy';
$breadcrumbName = 'Privacy Policy';

require_once __DIR__ . '/includes/header.php';
?>

<!-- ==========================================================================
     HERO SECTION: FUTURISTIC 3D BRAND THEME + ADVERT WAVE SHADER
========================================================================== -->
<section class="advert-wave-hero relative pt-14 pb-14 sm:pt-20 sm:pb-20 lg:pt-24 lg:pb-24 bg-navy-950 bg-grid-dark text-white overflow-hidden border-b border-white/10">
  <div class="absolute top-1/4 left-1/4 w-[500px] h-[500px] bg-electric-500/15 rounded-full blur-[130px] pointer-events-none"></div>
  <div class="absolute bottom-10 right-10 w-[400px] h-[400px] bg-yukt-orange/15 rounded-full blur-[130px] pointer-events-none"></div>

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
        <li class="text-electric-400 font-medium">Privacy Policy</li>
      </ol>
    </nav>

    <div class="max-w-3xl space-y-5 reveal-up">
      <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-white/[0.05] border border-white/10 text-electric-400 font-mono text-xs uppercase tracking-widest">
        <span class="w-2 h-2 rounded-full bg-emerald-400 animate-ping"></span>
        <span>Regulatory Compliance &bull; DPDP Act &amp; GDPR Ready</span>
      </div>

      <h1 class="font-display font-bold text-4xl sm:text-5xl lg:text-6xl text-white tracking-tight leading-[1.1]">
        Privacy <span class="text-gradient-electric">Policy</span>
      </h1>

      <p class="text-base sm:text-lg text-slate-300 leading-relaxed font-normal">
        At <strong class="text-white font-semibold">Yukt IT Solutions Private Limited</strong> (operating as <strong class="text-white font-semibold">YUKT IT SOLUTIONS</strong>, <span class="text-electric-300 font-mono">yukt.online</span>), your privacy, confidentiality, and data integrity are central to our software engineering ethos. This policy governs how we collect, store, process, and protect your information.
      </p>

      <!-- Policy Meta Bar -->
      <div class="pt-2 flex flex-wrap items-center gap-y-2 gap-x-6 text-xs text-slate-400 border-t border-white/10 font-mono">
        <span class="flex items-center gap-1.5">
          <i data-lucide="calendar" class="w-3.5 h-3.5 text-electric-400"></i>
          <span>Effective: <strong>October 26, 2026</strong></span>
        </span>
        <span class="flex items-center gap-1.5">
          <i data-lucide="shield-check" class="w-3.5 h-3.5 text-emerald-400"></i>
          <span>Governing Law: <strong>Republic of India</strong></span>
        </span>
        <span class="flex items-center gap-1.5">
          <i data-lucide="lock" class="w-3.5 h-3.5 text-yukt-orange"></i>
          <span>Zero Personal Data Sale</span>
        </span>
        <button onclick="window.print()" type="button" class="inline-flex items-center gap-1 text-slate-300 hover:text-white underline underline-offset-4 cursor-pointer">
          <i data-lucide="printer" class="w-3.5 h-3.5"></i>
          <span>Print / Save PDF</span>
        </button>
      </div>
    </div>
  </div>
</section>

<!-- ==========================================================================
     MAIN BODY & STICKY NAVIGATION LAYOUT
========================================================================== -->
<section class="py-16 sm:py-20 lg:py-24 bg-slate-50 text-slate-900 bg-grid-light border-b border-slate-200" id="mainContent">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-10">
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-12 items-start">

      <!-- ====================================================================
           LEFT SIDEBAR: TABLE OF CONTENTS & QUICK CONTACT (4 COLS)
      ===================================================================== -->
      <aside class="lg:col-span-4 space-y-6 lg:sticky lg:top-28">
        
        <!-- Table of Contents Container -->
        <div class="bg-white rounded-2xl p-6 border border-slate-200/90 shadow-sm space-y-4">
          <div class="flex items-center justify-between pb-3 border-b border-slate-100">
            <span class="font-display font-bold text-sm text-slate-900 flex items-center gap-2">
              <i data-lucide="list" class="w-4 h-4 text-electric-600"></i>
              Table of Contents
            </span>
            <span class="text-[10px] font-mono px-2 py-0.5 rounded-full bg-slate-100 text-slate-600 font-medium">15 Sections</span>
          </div>

          <nav class="space-y-1 text-xs font-medium text-slate-600 max-h-[460px] overflow-y-auto pr-1" aria-label="Privacy Policy Sections">
            <a href="#section-1" class="block px-2.5 py-1.5 rounded-lg hover:bg-electric-50 hover:text-electric-700 transition-colors">1. Corporate Identity &amp; Scope</a>
            <a href="#section-2" class="block px-2.5 py-1.5 rounded-lg hover:bg-electric-50 hover:text-electric-700 transition-colors">2. Legal Frameworks &amp; Compliance</a>
            <a href="#section-3" class="block px-2.5 py-1.5 rounded-lg hover:bg-electric-50 hover:text-electric-700 transition-colors">3. Information We Collect</a>
            <a href="#section-4" class="block px-2.5 py-1.5 rounded-lg hover:bg-electric-50 hover:text-electric-700 transition-colors">4. WebGL 3D Shader Telemetry</a>
            <a href="#section-5" class="block px-2.5 py-1.5 rounded-lg hover:bg-electric-50 hover:text-electric-700 transition-colors">5. Lawful Grounds for Processing</a>
            <a href="#section-6" class="block px-2.5 py-1.5 rounded-lg hover:bg-electric-50 hover:text-electric-700 transition-colors">6. How We Utilize Your Data</a>
            <a href="#section-7" class="block px-2.5 py-1.5 rounded-lg hover:bg-electric-50 hover:text-electric-700 transition-colors">7. Cookies &amp; Local Storage</a>
            <a href="#section-8" class="block px-2.5 py-1.5 rounded-lg hover:bg-electric-50 hover:text-electric-700 transition-colors">8. Non-Sale &amp; Sub-Processors</a>
            <a href="#section-9" class="block px-2.5 py-1.5 rounded-lg hover:bg-electric-50 hover:text-electric-700 transition-colors">9. Client Code &amp; NDA Isolation</a>
            <a href="#section-10" class="block px-2.5 py-1.5 rounded-lg hover:bg-electric-50 hover:text-electric-700 transition-colors">10. Data Retention &amp; Purging</a>
            <a href="#section-11" class="block px-2.5 py-1.5 rounded-lg hover:bg-electric-50 hover:text-electric-700 transition-colors">11. International Transfers</a>
            <a href="#section-12" class="block px-2.5 py-1.5 rounded-lg hover:bg-electric-50 hover:text-electric-700 transition-colors">12. Security Infrastructure</a>
            <a href="#section-13" class="block px-2.5 py-1.5 rounded-lg hover:bg-electric-50 hover:text-electric-700 transition-colors">13. Your Statutory Rights</a>
            <a href="#section-14" class="block px-2.5 py-1.5 rounded-lg hover:bg-electric-50 hover:text-electric-700 transition-colors">14. Children's Privacy Notice</a>
            <a href="#section-15" class="block px-2.5 py-1.5 rounded-lg hover:bg-electric-50 hover:text-electric-700 transition-colors">15. Grievance Officer &amp; Contacts</a>
          </nav>
        </div>

        <!-- Quick Summary Badge Card -->
        <div class="bg-gradient-to-br from-navy-950 to-navy-900 text-white rounded-2xl p-6 border border-white/10 shadow-lg space-y-4">
          <div class="flex items-center gap-2">
            <span class="w-2 h-2 rounded-full bg-emerald-400"></span>
            <span class="font-mono text-xs uppercase tracking-wider text-emerald-400 font-semibold">Privacy Pledge</span>
          </div>
          <p class="text-xs text-slate-300 leading-relaxed">
            We operate under a strict <strong class="text-white">Zero Data Monetization</strong> model. We never sell, rent, or trade your contact details, project specifications, or proprietary source code to advertisers or third parties.
          </p>
          <div class="pt-2 border-t border-white/10 flex flex-col gap-2 text-xs font-mono text-slate-300">
            <div class="flex items-center justify-between">
              <span class="text-slate-400">Data Encryption:</span>
              <span class="text-emerald-400 font-semibold">TLS 1.3 / AES-256</span>
            </div>
            <div class="flex items-center justify-between">
              <span class="text-slate-400">Code Ownership:</span>
              <span class="text-white font-semibold">100% Client Owned</span>
            </div>
            <div class="flex items-center justify-between">
              <span class="text-slate-400">NDA Enforced:</span>
              <span class="text-electric-400 font-semibold">Pre-Discovery Ready</span>
            </div>
          </div>
        </div>

        <!-- Contact & Grievance Desk -->
        <div class="bg-white rounded-2xl p-6 border border-slate-200/90 shadow-sm space-y-4">
          <span class="font-display font-bold text-sm text-slate-900 block">Data Protection Desk</span>
          <p class="text-xs text-slate-600 leading-relaxed">
            Have questions about your data or wish to exercise your rights under the DPDP Act or GDPR? Contact our designated privacy team directly:
          </p>

          <div class="space-y-2 pt-1">
            <a href="mailto:privacy@yukt.online" class="flex items-center gap-2 text-xs text-electric-600 hover:text-electric-700 font-semibold">
              <i data-lucide="mail" class="w-3.5 h-3.5"></i>
              <span>privacy@yukt.online</span>
            </a>
            <a href="<?php echo getWhatsAppUrl('Hi Ranjeet, I have a data privacy / compliance inquiry regarding Yukt.'); ?>" target="_blank" rel="noopener noreferrer" class="flex items-center gap-2 text-xs text-emerald-600 hover:text-emerald-700 font-semibold">
              <i data-lucide="message-circle" class="w-3.5 h-3.5"></i>
              <span>WhatsApp Privacy Desk (+91 72176 45059)</span>
            </a>
          </div>

          <div class="pt-3 border-t border-slate-100 text-[11px] text-slate-500 font-mono">
            <div>Office: Ram Datt Enclave, Uttam Nagar, Delhi - 110059</div>
          </div>
        </div>

      </aside>

      <!-- ====================================================================
           RIGHT MAIN CONTENT: FULL DETAILED LEGAL POLICY (8 COLS)
      ===================================================================== -->
      <article class="lg:col-span-8 bg-white rounded-3xl p-6 sm:p-10 lg:p-12 border border-slate-200/90 shadow-sm space-y-12 text-slate-700 leading-relaxed">

        <!-- Section 1 -->
        <section id="section-1" class="scroll-mt-28 space-y-4">
          <div class="flex items-center gap-2 text-xs font-mono font-semibold uppercase text-electric-600 tracking-wider">
            <span>Section 01</span>
            <span class="w-1.5 h-1.5 rounded-full bg-electric-600"></span>
            <span>Corporate Identity</span>
          </div>
          <h2 class="font-display font-bold text-2xl sm:text-3xl text-slate-900 tracking-tight">
            1. Corporate Identity &amp; Scope of this Policy
          </h2>
          <p>
            This Privacy Policy applies to the official web properties, portals, subdomains, software applications, client staging environments, and digital engineering services owned and operated by <strong class="text-slate-900">Yukt IT Solutions Private Limited</strong> (herein referred to as <strong class="text-slate-900">"YUKT"</strong>, <strong class="text-slate-900">"Company"</strong>, <strong class="text-slate-900">"we"</strong>, <strong class="text-slate-900">"us"</strong>, or <strong class="text-slate-900">"our"</strong>), accessible primarily through our primary domain <a href="https://yukt.online" class="text-electric-600 hover:underline font-mono">https://yukt.online</a>.
          </p>
          <p>
            By accessing our website, requesting a project scope, engaging in technical consultations, entering into Statements of Work (SOW), or commissioning our engineering pods for website development, custom software engineering, AI automation, or IT consulting, you acknowledge that you have read, understood, and consented to the data practices described in this document.
          </p>
          <div class="p-4 rounded-xl bg-slate-50 border border-slate-200 text-xs font-mono space-y-1 text-slate-600">
            <div><strong>Corporate Entity:</strong> Yukt IT Solutions Private Limited</div>
            <div><strong>Brand Identity:</strong> YUKT IT SOLUTIONS (yukt.online)</div>
            <div><strong>Registered Office:</strong> Block A, Ram Datt Enclave, Uttam Nagar, Delhi - 110059, India</div>
            <div><strong>Secondary Engineering Hub:</strong> HSR Layout, Bengaluru, Karnataka, India</div>
            <div><strong>Official Email:</strong> contact@yukt.online | support@yukt.online</div>
          </div>
        </section>

        <!-- Section 2 -->
        <section id="section-2" class="scroll-mt-28 space-y-4">
          <div class="flex items-center gap-2 text-xs font-mono font-semibold uppercase text-electric-600 tracking-wider">
            <span>Section 02</span>
            <span class="w-1.5 h-1.5 rounded-full bg-electric-600"></span>
            <span>Statutory Governance</span>
          </div>
          <h2 class="font-display font-bold text-2xl sm:text-3xl text-slate-900 tracking-tight">
            2. Legal Frameworks &amp; Regulatory Compliance
          </h2>
          <p>
            As an Indian digital engineering enterprise serving domestic enterprises as well as clients across the United States, the European Union, the United Kingdom, and the Middle East, our data processing architecture complies with the highest standards of international and Indian data protection laws, including:
          </p>
          <ul class="list-disc pl-5 space-y-2 text-sm">
            <li>
              <strong class="text-slate-900">The Digital Personal Data Protection Act, 2023 (DPDP Act, India):</strong> Ensuring strict purpose limitation, transparency, lawful grounds, robust security safeguards, and straightforward user rights redressal.
            </li>
            <li>
              <strong class="text-slate-900">The Information Technology Act, 2000 &amp; SPDI Rules, 2011 (India):</strong> Complying with Section 43A and reasonable security practices and procedures for Sensitive Personal Data or Information.
            </li>
            <li>
              <strong class="text-slate-900">General Data Protection Regulation (EU/UK GDPR):</strong> Upholding data minimization, legality, explicit consent protocols, and Standard Contractual Clauses (SCCs) for international clients.
            </li>
            <li>
              <strong class="text-slate-900">California Consumer Privacy Act (CCPA / CPRA):</strong> Providing California residents with complete visibility and rights over non-monetized data processing.
            </li>
          </ul>
        </section>

        <!-- Section 3 -->
        <section id="section-3" class="scroll-mt-28 space-y-4">
          <div class="flex items-center gap-2 text-xs font-mono font-semibold uppercase text-electric-600 tracking-wider">
            <span>Section 03</span>
            <span class="w-1.5 h-1.5 rounded-full bg-electric-600"></span>
            <span>Data Ingestion</span>
          </div>
          <h2 class="font-display font-bold text-2xl sm:text-3xl text-slate-900 tracking-tight">
            3. Information We Collect
          </h2>
          <p>
            We adhere strictly to the principle of <strong class="text-slate-900">Data Minimization</strong>. We only collect personal and technical information that is strictly necessary to assess your project requirements, communicate engineering deliverables, and guarantee secure site performance.
          </p>

          <div class="overflow-x-auto pt-2">
            <table class="w-full text-xs text-left border border-slate-200 rounded-xl overflow-hidden">
              <thead class="bg-slate-100 text-slate-900 font-mono uppercase tracking-wider">
                <tr>
                  <th class="p-3 border-b border-slate-200">Category</th>
                  <th class="p-3 border-b border-slate-200">Data Elements</th>
                  <th class="p-3 border-b border-slate-200">Collection Purpose</th>
                </tr>
              </thead>
              <tbody class="divide-y divide-slate-200">
                <tr>
                  <td class="p-3 font-semibold text-slate-900">Direct Inquiries</td>
                  <td class="p-3">Full Name, Business Email, WhatsApp / Phone Number, Company Name, Country</td>
                  <td class="p-3">Responding to scoping inquiries, scheduling discovery calls with Founders (Ansar/Ranjeet).</td>
                </tr>
                <tr>
                  <td class="p-3 font-semibold text-slate-900">Project Scoping</td>
                  <td class="p-3">Estimated Budget Range, Project Timeline, Technical Specs, Architectural RFCs, Wireframes</td>
                  <td class="p-3">Preparing formal proposals, feasibility reports, sprint breakdowns, and Statements of Work.</td>
                </tr>
                <tr>
                  <td class="p-3 font-semibold text-slate-900">Automated Technical</td>
                  <td class="p-3">IP Address, Browser Type &amp; Version, Operating System, Screen Resolution, Referring URL</td>
                  <td class="p-3">Network security, DDoS prevention, rate limiting, and optimizing rendering across devices.</td>
                </tr>
                <tr>
                  <td class="p-3 font-semibold text-slate-900">Commercial Records</td>
                  <td class="p-3">Billing Address, GSTIN / Tax ID, Bank Remittance Details, Invoicing Logs</td>
                  <td class="p-3">Tax compliance under Indian GST Laws, milestone invoice generation, financial audits.</td>
                </tr>
              </tbody>
            </table>
          </div>
        </section>

        <!-- Section 4 -->
        <section id="section-4" class="scroll-mt-28 space-y-4">
          <div class="flex items-center gap-2 text-xs font-mono font-semibold uppercase text-electric-600 tracking-wider">
            <span>Section 04</span>
            <span class="w-1.5 h-1.5 rounded-full bg-electric-600"></span>
            <span>Interactive 3D Engine</span>
          </div>
          <h2 class="font-display font-bold text-2xl sm:text-3xl text-slate-900 tracking-tight">
            4. WebGL, Three.js &amp; 3D Shader Telemetry
          </h2>
          <p>
            The YUKT digital platform features interactive WebGL particle wave shaders powered by Three.js and custom GLSL vertex/fragment shaders.
          </p>
          <div class="p-5 rounded-2xl bg-electric-50/70 border border-electric-200 space-y-2">
            <div class="flex items-center gap-2 font-display font-bold text-sm text-electric-900">
              <i data-lucide="cpu" class="w-4 h-4 text-electric-600"></i>
              <span>Hardware &amp; Graphics Rendering Policy</span>
            </div>
            <p class="text-xs text-electric-800 leading-relaxed">
              Our 3D shaders inspect local client capabilities (e.g. WebGL context availability, device pixel ratio, and rendering frame rates) strictly in-memory inside your local web browser. This diagnostic is used <strong>solely to adjust particle count and prevent battery drain</strong> on low-power devices. We <strong class="underline">do not</strong> perform persistent hardware fingerprinting, store GPU identifiers on our servers, or build behavioral cross-site profiles.
            </p>
          </div>
        </section>

        <!-- Section 5 -->
        <section id="section-5" class="scroll-mt-28 space-y-4">
          <div class="flex items-center gap-2 text-xs font-mono font-semibold uppercase text-electric-600 tracking-wider">
            <span>Section 05</span>
            <span class="w-1.5 h-1.5 rounded-full bg-electric-600"></span>
            <span>Lawful Processing</span>
          </div>
          <h2 class="font-display font-bold text-2xl sm:text-3xl text-slate-900 tracking-tight">
            5. Lawful Grounds for Processing
          </h2>
          <p>
            Under Section 6 of the DPDP Act 2023 and Article 6 of the GDPR, we process your data under the following legitimate legal bases:
          </p>
          <ul class="list-disc pl-5 space-y-2 text-sm">
            <li>
              <strong class="text-slate-900">Consent:</strong> When you voluntarily submit your contact details via our inquiry forms, quote estimate calculator, or click our WhatsApp direct links.
            </li>
            <li>
              <strong class="text-slate-900">Contractual Necessity:</strong> To fulfill our obligations under software development contracts, Git repository handovers, cloud deployments, and ongoing support SLAs.
            </li>
            <li>
              <strong class="text-slate-900">Legal Compliance:</strong> To adhere to mandatory tax filing, Goods and Services Tax (GST) reporting, corporate statutory registers, and regulatory requests from competent legal authorities.
            </li>
            <li>
              <strong class="text-slate-900">Legitimate Interests:</strong> To protect our IT infrastructure against malicious cyberattacks, enforce our intellectual property rights, and ensure unbroken platform uptime.
            </li>
          </ul>
        </section>

        <!-- Section 6 -->
        <section id="section-6" class="scroll-mt-28 space-y-4">
          <div class="flex items-center gap-2 text-xs font-mono font-semibold uppercase text-electric-600 tracking-wider">
            <span>Section 06</span>
            <span class="w-1.5 h-1.5 rounded-full bg-electric-600"></span>
            <span>Data Utilization</span>
          </div>
          <h2 class="font-display font-bold text-2xl sm:text-3xl text-slate-900 tracking-tight">
            6. How We Utilize Your Data
          </h2>
          <p>Your information is employed exclusively for direct engineering and commercial interactions, specifically:</p>
          <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 pt-1 text-xs">
            <div class="p-3.5 rounded-xl bg-slate-50 border border-slate-200">
              <span class="font-bold text-slate-900 block mb-1">Architecture &amp; Scoping</span>
              Evaluating tech stacks, drafting project milestones, system diagrams, and delivering 24-hour turnaround quotes.
            </div>
            <div class="p-3.5 rounded-xl bg-slate-50 border border-slate-200">
              <span class="font-bold text-slate-900 block mb-1">Sprint Collaboration</span>
              Setting up private staging servers, Git branches, weekly demos, and milestone sign-offs.
            </div>
            <div class="p-3.5 rounded-xl bg-slate-50 border border-slate-200">
              <span class="font-bold text-slate-900 block mb-1">Commercial Billing</span>
              Issuing valid GST invoices, payment confirmations, and milestone acceptance receipts.
            </div>
            <div class="p-3.5 rounded-xl bg-slate-50 border border-slate-200">
              <span class="font-bold text-slate-900 block mb-1">DevSecOps &amp; Support</span>
              Providing post-launch hypercare bug fixing, server security patches, and SLA monitoring.
            </div>
          </div>
        </section>

        <!-- Section 7 -->
        <section id="section-7" class="scroll-mt-28 space-y-4">
          <div class="flex items-center gap-2 text-xs font-mono font-semibold uppercase text-electric-600 tracking-wider">
            <span>Section 07</span>
            <span class="w-1.5 h-1.5 rounded-full bg-electric-600"></span>
            <span>Cookies &amp; Storage</span>
          </div>
          <h2 class="font-display font-bold text-2xl sm:text-3xl text-slate-900 tracking-tight">
            7. Cookies &amp; Local Storage Policy
          </h2>
          <p>
            We maintain an uncluttered, privacy-first cookie policy. Our website uses minimal first-party cookies and browser local storage strictly for essential operational purposes:
          </p>
          <ul class="list-disc pl-5 space-y-2 text-sm">
            <li>
              <strong class="text-slate-900">Strictly Necessary Cookies:</strong> Cryptographic CSRF session tokens that authenticate form submissions and prevent cross-site request forgery attacks.
            </li>
            <li>
              <strong class="text-slate-900">Local Storage Tokens:</strong> Storing client-side UI states, such as whether you have toggled the floating WhatsApp quick-service menu or dismissed a notification badge.
            </li>
            <li>
              <strong class="text-slate-900">No Third-Party Retargeting Pixels:</strong> We do not deploy invasive third-party tracking pixels (such as cross-web ad spyware) that monitor your personal browsing habits outside yukt.online.
            </li>
          </ul>
          <p class="text-xs text-slate-500">
            You can configure your browser to block or delete cookies at any time. If you disable cookies, all core informational sections of yukt.online will continue functioning smoothly.
          </p>
        </section>

        <!-- Section 8 -->
        <section id="section-8" class="scroll-mt-28 space-y-4">
          <div class="flex items-center gap-2 text-xs font-mono font-semibold uppercase text-electric-600 tracking-wider">
            <span>Section 08</span>
            <span class="w-1.5 h-1.5 rounded-full bg-electric-600"></span>
            <span>Sub-Processors</span>
          </div>
          <h2 class="font-display font-bold text-2xl sm:text-3xl text-slate-900 tracking-tight">
            8. Non-Sale &amp; Trusted Sub-Processors
          </h2>
          <p class="font-semibold text-slate-900">
            Yukt IT Solutions does not sell, license, lease, or distribute your personal data or project confidential material to any third party for commercial gain.
          </p>
          <p>
            To deliver our high-availability cloud infrastructure and real-time communications, we partner with industry-standard, SOC 2 and ISO 27001 certified sub-processors:
          </p>
          <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 text-xs">
            <div class="p-3 rounded-xl border border-slate-200">
              <strong class="text-slate-900 block">Cloud Hosting &amp; Compute</strong>
              AWS (Amazon Web Services), DigitalOcean, Hostinger for secure containerized staging and production servers.
            </div>
            <div class="p-3 rounded-xl border border-slate-200">
              <strong class="text-slate-900 block">Communication Infrastructure</strong>
              Meta WhatsApp Business Cloud API &amp; Google Workspace for secure enterprise communication.
            </div>
            <div class="p-3 rounded-xl border border-slate-200">
              <strong class="text-slate-900 block">Version Control &amp; CI/CD</strong>
              GitHub Enterprise for private repository hosting, automated testing pipelines, and encrypted code delivery.
            </div>
            <div class="p-3 rounded-xl border border-slate-200">
              <strong class="text-slate-900 block">Statutory Disclosure</strong>
              We disclose records solely when required by a legally binding court order or authorized Indian law enforcement agency.
            </div>
          </div>
        </section>

        <!-- Section 9 -->
        <section id="section-9" class="scroll-mt-28 space-y-4">
          <div class="flex items-center gap-2 text-xs font-mono font-semibold uppercase text-electric-600 tracking-wider">
            <span>Section 09</span>
            <span class="w-1.5 h-1.5 rounded-full bg-electric-600"></span>
            <span>Confidentiality &amp; NDA</span>
          </div>
          <h2 class="font-display font-bold text-2xl sm:text-3xl text-slate-900 tracking-tight">
            9. Client Code, Data Isolation &amp; Mutual NDA
          </h2>
          <p>
            When you engage Yukt to develop custom software, mobile applications, or proprietary AI agents, you frequently entrust us with sensitive business logic, database schemas, and API credentials. We implement bank-grade confidentiality controls:
          </p>
          <div class="space-y-3 pt-1">
            <div class="flex items-start gap-3 p-3.5 rounded-xl bg-slate-50 border border-slate-200 text-xs">
              <i data-lucide="file-check-2" class="w-4 h-4 text-emerald-600 flex-shrink-0 mt-0.5"></i>
              <div>
                <strong class="text-slate-900 block">Pre-Discovery Mutual NDA:</strong>
                We execute bilateral Non-Disclosure Agreements (NDAs) prior to receiving proprietary codebases, data dumps, or technical specifications.
              </div>
            </div>
            <div class="flex items-start gap-3 p-3.5 rounded-xl bg-slate-50 border border-slate-200 text-xs">
              <i data-lucide="git-branch" class="w-4 h-4 text-electric-600 flex-shrink-0 mt-0.5"></i>
              <div>
                <strong class="text-slate-900 block">Isolated Git Repositories:</strong>
                Every client project is housed in dedicated, access-restricted private repositories. No client code is ever commingled with other accounts.
              </div>
            </div>
            <div class="flex items-start gap-3 p-3.5 rounded-xl bg-slate-50 border border-slate-200 text-xs">
              <i data-lucide="bot" class="w-4 h-4 text-yukt-orange flex-shrink-0 mt-0.5"></i>
              <div>
                <strong class="text-slate-900 block">AI Zero Data Training Guarantee:</strong>
                When developing RAG pipelines, LLM automations, or custom AI agents, we utilize commercial enterprise API endpoints (e.g. OpenAI Enterprise, Anthropic, AWS Bedrock) where prompts, data embeddings, and client documents are <span class="underline">never</span> used to train foundation models.
              </div>
            </div>
          </div>
        </section>

        <!-- Section 10 -->
        <section id="section-10" class="scroll-mt-28 space-y-4">
          <div class="flex items-center gap-2 text-xs font-mono font-semibold uppercase text-electric-600 tracking-wider">
            <span>Section 10</span>
            <span class="w-1.5 h-1.5 rounded-full bg-electric-600"></span>
            <span>Lifecycle &amp; Purging</span>
          </div>
          <h2 class="font-display font-bold text-2xl sm:text-3xl text-slate-900 tracking-tight">
            10. Data Retention &amp; Secure Purging
          </h2>
          <p>
            We retain your data only for as long as necessary to fulfill the purposes outlined in this policy or to comply with statutory statutory retention mandates:
          </p>
          <ul class="list-disc pl-5 space-y-2 text-sm">
            <li><strong class="text-slate-900">Unconverted Inquiries:</strong> Contact messages and scoping submissions that do not convert into active client contracts are securely purged within 12 months.</li>
            <li><strong class="text-slate-900">Active Client Project Code:</strong> Kept in active staging and backup environments during development and throughout the agreed 30-day hypercare warranty period. Following final handover and settlement, code backups are archived or deleted as per the client's written SOW instructions.</li>
            <li><strong class="text-slate-900">Tax &amp; Accounting Records:</strong> Invoices, milestone payment receipts, and contract agreements are retained for 8 years as mandated under the Indian Companies Act and Income Tax / GST legislation.</li>
          </ul>
        </section>

        <!-- Section 11 -->
        <section id="section-11" class="scroll-mt-28 space-y-4">
          <div class="flex items-center gap-2 text-xs font-mono font-semibold uppercase text-electric-600 tracking-wider">
            <span>Section 11</span>
            <span class="w-1.5 h-1.5 rounded-full bg-electric-600"></span>
            <span>Cross-Border Transfers</span>
          </div>
          <h2 class="font-display font-bold text-2xl sm:text-3xl text-slate-900 tracking-tight">
            11. International Transfers &amp; Data Residency
          </h2>
          <p>
            Our core development infrastructure is located in India, with primary server nodes distributed across ISO-certified data centers in the Asia-Pacific region (AWS ap-south-1 Mumbai, DigitalOcean Bangalore).
          </p>
          <p>
            For clients located in the EU, UK, or US who mandate local data residency, our engineering pods can deploy and manage code, database clusters, and cloud workloads exclusively within your sovereign VPCs (e.g., AWS eu-central-1 Frankfurt or us-east-1 N. Virginia), ensuring full jurisdictional compliance with local data sovereignty mandates.
          </p>
        </section>

        <!-- Section 12 -->
        <section id="section-12" class="scroll-mt-28 space-y-4">
          <div class="flex items-center gap-2 text-xs font-mono font-semibold uppercase text-electric-600 tracking-wider">
            <span>Section 12</span>
            <span class="w-1.5 h-1.5 rounded-full bg-electric-600"></span>
            <span>Security Architecture</span>
          </div>
          <h2 class="font-display font-bold text-2xl sm:text-3xl text-slate-900 tracking-tight">
            12. Technical &amp; Organizational Security Measures
          </h2>
          <p>
            Yukt implements rigorous defense-in-depth security controls to safeguard data against unauthorized access, alteration, disclosure, or accidental destruction:
          </p>
          <div class="grid grid-cols-1 sm:grid-cols-3 gap-3 pt-1 text-center font-mono">
            <div class="p-4 rounded-xl bg-slate-50 border border-slate-200">
              <div class="text-electric-600 font-bold text-lg">TLS 1.3</div>
              <div class="text-[11px] text-slate-500 mt-1">End-to-End Transport Layer Encryption</div>
            </div>
            <div class="p-4 rounded-xl bg-slate-50 border border-slate-200">
              <div class="text-emerald-600 font-bold text-lg">ED25519</div>
              <div class="text-[11px] text-slate-500 mt-1">SSH Key-Only Server Administration</div>
            </div>
            <div class="p-4 rounded-xl bg-slate-50 border border-slate-200">
              <div class="text-yukt-orange font-bold text-lg">2FA / MFA</div>
              <div class="text-[11px] text-slate-500 mt-1">Mandatory on all Staging &amp; Git Portals</div>
            </div>
          </div>
          <p class="text-xs text-slate-500">
            Our Apache web servers operate with hardened security response headers including <code>X-Content-Type-Options: nosniff</code>, <code>X-Frame-Options: SAMEORIGIN</code>, <code>X-XSS-Protection</code>, and strict <code>Referrer-Policy</code>.
          </p>
        </section>

        <!-- Section 13 -->
        <section id="section-13" class="scroll-mt-28 space-y-4">
          <div class="flex items-center gap-2 text-xs font-mono font-semibold uppercase text-electric-600 tracking-wider">
            <span>Section 13</span>
            <span class="w-1.5 h-1.5 rounded-full bg-electric-600"></span>
            <span>Your Legal Entitlements</span>
          </div>
          <h2 class="font-display font-bold text-2xl sm:text-3xl text-slate-900 tracking-tight">
            13. Your Statutory Rights as a Data Principal
          </h2>
          <p>
            Whether governed by the Indian DPDP Act 2023 or global data regulations (GDPR/CCPA), you retain comprehensive legal rights over your personal data:
          </p>
          <div class="space-y-2 text-xs">
            <div class="p-3 rounded-xl bg-slate-50 border border-slate-200 flex items-start gap-2">
              <span class="font-bold text-slate-900 min-w-32">&bull; Right to Access:</span>
              <span>Request a digital summary of all personal data held about you by Yukt IT Solutions.</span>
            </div>
            <div class="p-3 rounded-xl bg-slate-50 border border-slate-200 flex items-start gap-2">
              <span class="font-bold text-slate-900 min-w-32">&bull; Right to Rectify:</span>
              <span>Request prompt correction of incomplete, outdated, or inaccurate personal information.</span>
            </div>
            <div class="p-3 rounded-xl bg-slate-50 border border-slate-200 flex items-start gap-2">
              <span class="font-bold text-slate-900 min-w-32">&bull; Right to Erasure:</span>
              <span>Request the total deletion of your personal data, subject only to ongoing statutory tax obligations.</span>
            </div>
            <div class="p-3 rounded-xl bg-slate-50 border border-slate-200 flex items-start gap-2">
              <span class="font-bold text-slate-900 min-w-32">&bull; Withdraw Consent:</span>
              <span>Revoke your consent for communication at any time with immediate effect.</span>
            </div>
            <div class="p-3 rounded-xl bg-slate-50 border border-slate-200 flex items-start gap-2">
              <span class="font-bold text-slate-900 min-w-32">&bull; Nominate / Redress:</span>
              <span>Exercise your statutory right to nominate a representative and access our Grievance Redressal mechanism.</span>
            </div>
          </div>
          <p class="text-xs text-slate-600">
            To exercise any of these rights, email us at <a href="mailto:privacy@yukt.online" class="text-electric-600 font-semibold hover:underline">privacy@yukt.online</a>. We acknowledge receipt within 48 hours and process all valid requests within 30 calendar days at zero charge.
          </p>
        </section>

        <!-- Section 14 -->
        <section id="section-14" class="scroll-mt-28 space-y-4">
          <div class="flex items-center gap-2 text-xs font-mono font-semibold uppercase text-electric-600 tracking-wider">
            <span>Section 14</span>
            <span class="w-1.5 h-1.5 rounded-full bg-electric-600"></span>
            <span>Audience Protection</span>
          </div>
          <h2 class="font-display font-bold text-2xl sm:text-3xl text-slate-900 tracking-tight">
            14. Children's Privacy Notice
          </h2>
          <p>
            The services, websites, and technical deliverables engineered by Yukt IT Solutions are intended exclusively for commercial enterprises, founders, and adult professionals aged 18 years and above. We do not knowingly solicit or collect personal information from individuals under the age of 18. If we become aware that personal information of a minor has been mistakenly collected, we take immediate steps to delete such data from our databases.
          </p>
        </section>

        <!-- Section 15 -->
        <section id="section-15" class="scroll-mt-28 space-y-6 pt-4 border-t border-slate-200">
          <div class="flex items-center gap-2 text-xs font-mono font-semibold uppercase text-electric-600 tracking-wider">
            <span>Section 15</span>
            <span class="w-1.5 h-1.5 rounded-full bg-electric-600"></span>
            <span>Statutory Grievance</span>
          </div>
          <h2 class="font-display font-bold text-2xl sm:text-3xl text-slate-900 tracking-tight">
            15. Statutory Grievance Redressal &amp; Contact Information
          </h2>
          <p>
            In compliance with Rule 5(9) of the Information Technology (Reasonable Security Practices and Procedures and Sensitive Personal Data or Information) Rules, 2011, and the Digital Personal Data Protection Act, 2023, the details of our designated <strong class="text-slate-900">Grievance Officer</strong> are provided below:
          </p>

          <div class="p-6 rounded-2xl bg-slate-900 text-white space-y-4 border border-slate-800 shadow-xl">
            <div class="flex items-center justify-between pb-3 border-b border-white/10">
              <div>
                <span class="font-display font-bold text-base text-white">Ranjeet</span>
                <span class="text-xs text-electric-400 block font-mono">Designated Grievance Officer &amp; Co-Founder</span>
              </div>
              <span class="text-[10px] font-mono px-2 py-0.5 rounded-full bg-emerald-500/20 text-emerald-400 border border-emerald-500/30">Official Statutory Desk</span>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 text-xs font-mono text-slate-300">
              <div>
                <span class="text-slate-500 block text-[10px] uppercase">Corporate Entity</span>
                <span class="text-white font-semibold">Yukt IT Solutions Private Limited</span>
              </div>
              <div>
                <span class="text-slate-500 block text-[10px] uppercase">Direct Grievance Email</span>
                <a href="mailto:privacy@yukt.online" class="text-electric-400 hover:text-white underline">privacy@yukt.online</a>
              </div>
              <div>
                <span class="text-slate-500 block text-[10px] uppercase">Direct Grievance Phone</span>
                <a href="tel:+917217645059" class="text-white hover:text-electric-400">+91 72176 45059</a>
              </div>
              <div>
                <span class="text-slate-500 block text-[10px] uppercase">Founder &amp; Architecture Lead</span>
                <span class="text-white">Ansar Ali Shah (+91 95763 38282)</span>
              </div>
              <div class="sm:col-span-2">
                <span class="text-slate-500 block text-[10px] uppercase">Postal Physical Address</span>
                <span class="text-white">Block A, Ram Datt Enclave, Uttam Nagar, Delhi - 110059, India</span>
              </div>
            </div>

            <div class="pt-3 border-t border-white/10 flex items-center justify-between text-[11px] text-slate-400">
              <span>SLA: Grievance Acknowledged within 48 Hours</span>
              <span>Resolution: Within 30 Business Days</span>
            </div>
          </div>

          <div class="flex flex-col sm:flex-row items-center justify-between gap-4 pt-4 text-xs text-slate-500 border-t border-slate-200">
            <span>Looking for our commercial terms?</span>
            <a href="terms" class="px-5 py-2.5 rounded-xl font-display font-semibold text-xs text-white bg-navy-900 hover:bg-navy-800 transition-colors flex items-center gap-1.5">
              <span>Read Terms &amp; Conditions</span>
              <i data-lucide="arrow-right" class="w-3.5 h-3.5"></i>
            </a>
          </div>
        </section>

      </article>

    </div>
  </div>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
