<?php
$activePage = 'terms';
$pageTitle = 'Terms & Conditions | YUKT IT SOLUTIONS - Service Agreement & Client Terms';
$pageDesc = 'Official Terms and Conditions of Yukt IT Solutions Private Limited (yukt.online). Comprehensive client agreement covering 100% code ownership, milestones, hypercare warranty, and IP.';
$canonicalUrl = 'https://yukt.online/terms';
$breadcrumbName = 'Terms & Conditions';

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
        <li class="text-electric-400 font-medium">Terms &amp; Conditions</li>
      </ol>
    </nav>

    <div class="max-w-3xl space-y-5 reveal-up">
      <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-white/[0.05] border border-white/10 text-electric-400 font-mono text-xs uppercase tracking-widest">
        <span class="w-2 h-2 rounded-full bg-yukt-orange animate-ping"></span>
        <span>Client Agreement &bull; Clear Commercials &amp; 100% Code Ownership</span>
      </div>

      <h1 class="font-display font-bold text-4xl sm:text-5xl lg:text-6xl text-white tracking-tight leading-[1.1]">
        Terms &amp; <span class="text-gradient-electric">Conditions</span>
      </h1>

      <p class="text-base sm:text-lg text-slate-300 leading-relaxed font-normal">
        These Terms and Conditions constitute a legally binding agreement between you and <strong class="text-white font-semibold">Yukt IT Solutions Private Limited</strong>. We believe in engineering clarity, milestone transparency, 100% client code ownership, and zero lock-in.
      </p>

      <!-- Terms Meta Bar -->
      <div class="pt-2 flex flex-wrap items-center gap-y-2 gap-x-6 text-xs text-slate-400 border-t border-white/10 font-mono">
        <span class="flex items-center gap-1.5">
          <i data-lucide="calendar" class="w-3.5 h-3.5 text-electric-400"></i>
          <span>Effective: <strong>October 26, 2026</strong></span>
        </span>
        <span class="flex items-center gap-1.5">
          <i data-lucide="code-2" class="w-3.5 h-3.5 text-emerald-400"></i>
          <span>Code Ownership: <strong>100% Client Owned</strong></span>
        </span>
        <span class="flex items-center gap-1.5">
          <i data-lucide="shield-check" class="w-3.5 h-3.5 text-yukt-orange"></i>
          <span>Warranty: <strong>30-Day Hypercare SLA</strong></span>
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
           LEFT SIDEBAR: TABLE OF CONTENTS & CONTRACT DESK (4 COLS)
      ===================================================================== -->
      <aside class="lg:col-span-4 space-y-6 lg:sticky lg:top-28">
        
        <!-- Table of Contents Container -->
        <div class="bg-white rounded-2xl p-6 border border-slate-200/90 shadow-sm space-y-4">
          <div class="flex items-center justify-between pb-3 border-b border-slate-100">
            <span class="font-display font-bold text-sm text-slate-900 flex items-center gap-2">
              <i data-lucide="file-text" class="w-4 h-4 text-electric-600"></i>
              Table of Contents
            </span>
            <span class="text-[10px] font-mono px-2 py-0.5 rounded-full bg-slate-100 text-slate-600 font-medium">17 Sections</span>
          </div>

          <nav class="space-y-1 text-xs font-medium text-slate-600 max-h-[460px] overflow-y-auto pr-1" aria-label="Terms of Service Sections">
            <a href="#term-1" class="block px-2.5 py-1.5 rounded-lg hover:bg-electric-50 hover:text-electric-700 transition-colors">1. Agreement &amp; Acceptance</a>
            <a href="#term-2" class="block px-2.5 py-1.5 rounded-lg hover:bg-electric-50 hover:text-electric-700 transition-colors">2. Scope of Services &amp; Pods</a>
            <a href="#term-3" class="block px-2.5 py-1.5 rounded-lg hover:bg-electric-50 hover:text-electric-700 transition-colors">3. SOW &amp; Change Requests</a>
            <a href="#term-4" class="block px-2.5 py-1.5 rounded-lg hover:bg-electric-50 hover:text-electric-700 transition-colors">4. Client Responsibilities</a>
            <a href="#term-5" class="block px-2.5 py-1.5 rounded-lg hover:bg-electric-50 hover:text-electric-700 transition-colors">5. IP &amp; 100% Code Ownership</a>
            <a href="#term-6" class="block px-2.5 py-1.5 rounded-lg hover:bg-electric-50 hover:text-electric-700 transition-colors">6. Commercials, Invoicing &amp; Tax</a>
            <a href="#term-7" class="block px-2.5 py-1.5 rounded-lg hover:bg-electric-50 hover:text-electric-700 transition-colors">7. Acceptance Testing (UAT)</a>
            <a href="#term-8" class="block px-2.5 py-1.5 rounded-lg hover:bg-electric-50 hover:text-electric-700 transition-colors">8. 30-Day Hypercare Warranty</a>
            <a href="#term-9" class="block px-2.5 py-1.5 rounded-lg hover:bg-electric-50 hover:text-electric-700 transition-colors">9. Cloud, APIs &amp; Third-Parties</a>
            <a href="#term-10" class="block px-2.5 py-1.5 rounded-lg hover:bg-electric-50 hover:text-electric-700 transition-colors">10. Mutual NDA &amp; Confidentiality</a>
            <a href="#term-11" class="block px-2.5 py-1.5 rounded-lg hover:bg-electric-50 hover:text-electric-700 transition-colors">11. AI Disclaimer &amp; Performance</a>
            <a href="#term-12" class="block px-2.5 py-1.5 rounded-lg hover:bg-electric-50 hover:text-electric-700 transition-colors">12. Limitation of Liability</a>
            <a href="#term-13" class="block px-2.5 py-1.5 rounded-lg hover:bg-electric-50 hover:text-electric-700 transition-colors">13. Indemnification</a>
            <a href="#term-14" class="block px-2.5 py-1.5 rounded-lg hover:bg-electric-50 hover:text-electric-700 transition-colors">14. Suspension &amp; Termination</a>
            <a href="#term-15" class="block px-2.5 py-1.5 rounded-lg hover:bg-electric-50 hover:text-electric-700 transition-colors">15. Governing Law &amp; Arbitration</a>
            <a href="#term-16" class="block px-2.5 py-1.5 rounded-lg hover:bg-electric-50 hover:text-electric-700 transition-colors">16. General Legal Provisions</a>
            <a href="#term-17" class="block px-2.5 py-1.5 rounded-lg hover:bg-electric-50 hover:text-electric-700 transition-colors">17. Legal Notices &amp; Contacts</a>
          </nav>
        </div>

        <!-- Engineering Pod Guarantees Card -->
        <div class="bg-gradient-to-br from-navy-950 to-navy-900 text-white rounded-2xl p-6 border border-white/10 shadow-lg space-y-4">
          <div class="flex items-center gap-2">
            <span class="w-2 h-2 rounded-full bg-yukt-orange"></span>
            <span class="font-mono text-xs uppercase tracking-wider text-yukt-orange font-semibold">Core Contract Principles</span>
          </div>
          <p class="text-xs text-slate-300 leading-relaxed">
            Every engagement at Yukt is governed by transparent milestones, senior developer delivery, continuous Git commits, and zero vendor lock-in.
          </p>
          <div class="pt-2 border-t border-white/10 flex flex-col gap-2 text-xs font-mono text-slate-300">
            <div class="flex items-center justify-between">
              <span class="text-slate-400">Git Handover:</span>
              <span class="text-emerald-400 font-semibold">Clean Repository Transfer</span>
            </div>
            <div class="flex items-center justify-between">
              <span class="text-slate-400">Sprint Cadence:</span>
              <span class="text-white font-semibold">1-2 Week Staging Demos</span>
            </div>
            <div class="flex items-center justify-between">
              <span class="text-slate-400">Post-Launch:</span>
              <span class="text-electric-400 font-semibold">30-Day Defect Warranty</span>
            </div>
          </div>
        </div>

        <!-- Direct Commercial Desk -->
        <div class="bg-white rounded-2xl p-6 border border-slate-200/90 shadow-sm space-y-4">
          <span class="font-display font-bold text-sm text-slate-900 block">Commercial &amp; SOW Desk</span>
          <p class="text-xs text-slate-600 leading-relaxed">
            Need a formal Master Services Agreement (MSA), custom Statement of Work (SOW), or bilaterally signed NDA? Contact our founding architects:
          </p>

          <div class="space-y-2 pt-1">
            <a href="mailto:sales@yukt.online" class="flex items-center gap-2 text-xs text-electric-600 hover:text-electric-700 font-semibold">
              <i data-lucide="mail" class="w-3.5 h-3.5"></i>
              <span>sales@yukt.online / legal@yukt.online</span>
            </a>
            <a href="<?php echo getWhatsAppUrl('Hi Ansar and Ranjeet, I would like to review a contract / SOW with Yukt.'); ?>" target="_blank" rel="noopener noreferrer" class="flex items-center gap-2 text-xs text-emerald-600 hover:text-emerald-700 font-semibold">
              <i data-lucide="message-circle" class="w-3.5 h-3.5"></i>
              <span>WhatsApp Contracts Desk (+91 82354 11806)</span>
            </a>
          </div>

          <div class="pt-3 border-t border-slate-100 text-[11px] text-slate-500 font-mono">
            <div>Office: Ram Datt Enclave, Uttam Nagar, Delhi - 110059</div>
          </div>
        </div>

      </aside>

      <!-- ====================================================================
           RIGHT MAIN CONTENT: FULL DETAILED TERMS OF SERVICE (8 COLS)
      ===================================================================== -->
      <article class="lg:col-span-8 bg-white rounded-3xl p-6 sm:p-10 lg:p-12 border border-slate-200/90 shadow-sm space-y-12 text-slate-700 leading-relaxed">

        <!-- Term 1 -->
        <section id="term-1" class="scroll-mt-28 space-y-4">
          <div class="flex items-center gap-2 text-xs font-mono font-semibold uppercase text-electric-600 tracking-wider">
            <span>Clause 01</span>
            <span class="w-1.5 h-1.5 rounded-full bg-electric-600"></span>
            <span>Binding Agreement</span>
          </div>
          <h2 class="font-display font-bold text-2xl sm:text-3xl text-slate-900 tracking-tight">
            1. Agreement &amp; Acceptance of Terms
          </h2>
          <p>
            These Terms and Conditions (<strong class="text-slate-900">"Terms"</strong>, <strong class="text-slate-900">"Agreement"</strong>) govern your access to and utilization of the website <a href="https://yukt.online" class="text-electric-600 hover:underline font-mono">https://yukt.online</a>, and constitute the foundational terms for all professional software engineering, web application development, mobile engineering, AI automation, and IT consulting services provided by <strong class="text-slate-900">Yukt IT Solutions Private Limited</strong> (operating as <strong class="text-slate-900">"YUKT"</strong>, <strong class="text-slate-900">"we"</strong>, <strong class="text-slate-900">"us"</strong>, or <strong class="text-slate-900">"our"</strong>).
          </p>
          <p>
            By browsing our website, requesting a project quotation, commissioning an engineering pod, executing a Statement of Work (SOW), or paying a milestone invoice, you (<strong class="text-slate-900">"Client"</strong>, <strong class="text-slate-900">"you"</strong>, or <strong class="text-slate-900">"your"</strong>) unconditionally agree to be bound by these Terms. If you represent an enterprise or corporate entity, you represent and warrant that you possess the requisite corporate authority to bind that entity to this Agreement.
          </p>
        </section>

        <!-- Term 2 -->
        <section id="term-2" class="scroll-mt-28 space-y-4">
          <div class="flex items-center gap-2 text-xs font-mono font-semibold uppercase text-electric-600 tracking-wider">
            <span>Clause 02</span>
            <span class="w-1.5 h-1.5 rounded-full bg-electric-600"></span>
            <span>Capabilities &amp; Models</span>
          </div>
          <h2 class="font-display font-bold text-2xl sm:text-3xl text-slate-900 tracking-tight">
            2. Scope of Services &amp; Engagement Models
          </h2>
          <p>
            Yukt IT Solutions delivers senior-led, full-stack digital engineering across eight core capabilities:
          </p>
          <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 text-xs pt-1">
            <div class="p-3 rounded-xl bg-slate-50 border border-slate-200">
              <strong class="text-slate-900 block mb-1">1. Custom Website Development</strong>
              High-performance corporate portals, interactive 3D WebGL experiences, Next.js / React platforms, headless architectures, and enterprise WordPress/PHP systems.
            </div>
            <div class="p-3 rounded-xl bg-slate-50 border border-slate-200">
              <strong class="text-slate-900 block mb-1">2. Custom Software &amp; Applications</strong>
              B2B SaaS platforms, cross-platform mobile apps (Flutter, React Native), high-throughput REST/GraphQL APIs, and microservices backends.
            </div>
            <div class="p-3 rounded-xl bg-slate-50 border border-slate-200">
              <strong class="text-slate-900 block mb-1">3. AI Automation &amp; Intelligent Bots</strong>
              Enterprise RAG (Retrieval-Augmented Generation) assistants, autonomous workflow agents, custom LLM fine-tuning, and robotic process automation (RPA).
            </div>
            <div class="p-3 rounded-xl bg-slate-50 border border-slate-200">
              <strong class="text-slate-900 block mb-1">4. E-Commerce Solutions</strong>
              Custom D2C storefronts, headless Shopify builds, WooCommerce scaling, multi-vendor marketplaces, and multi-currency payment gateway integrations.
            </div>
            <div class="p-3 rounded-xl bg-slate-50 border border-slate-200">
              <strong class="text-slate-900 block mb-1">5. Digital Marketing &amp; Technical SEO</strong>
              Search engine optimization, Google Ads management, high-ROAS Meta Ads performance funnels, and programmatic growth architecture.
            </div>
            <div class="p-3 rounded-xl bg-slate-50 border border-slate-200">
              <strong class="text-slate-900 block mb-1">6. Dedicated Engineering Pods &amp; Consulting</strong>
              Staff augmentation, senior technical architecture consulting, code audits, DevSecOps infrastructure automation, and CTO advisory.
            </div>
          </div>
          <p class="text-xs text-slate-600 pt-1">
            <strong>Engagement Models:</strong> Work is executed under: (a) <em>Fixed-Price Milestone Contracts</em> (defined specifications), (b) <em>Dedicated Monthly Engineering Pods</em> (agile sprint teams), or (c) <em>Time &amp; Materials (T&amp;M)</em> (exploratory research and continuous DevOps).
          </p>
        </section>

        <!-- Term 3 -->
        <section id="term-3" class="scroll-mt-28 space-y-4">
          <div class="flex items-center gap-2 text-xs font-mono font-semibold uppercase text-electric-600 tracking-wider">
            <span>Clause 03</span>
            <span class="w-1.5 h-1.5 rounded-full bg-electric-600"></span>
            <span>Specifications</span>
          </div>
          <h2 class="font-display font-bold text-2xl sm:text-3xl text-slate-900 tracking-tight">
            3. Statements of Work (SOW) &amp; Change Request Management
          </h2>
          <p>
            Every technical engagement is governed by a mutually agreed <strong class="text-slate-900">Statement of Work (SOW)</strong> or technical project proposal detailing the scope, milestones, deliverables, tech stack, and delivery schedule. In the event of any direct conflict between these general Terms and an executed SOW, the specific terms of the SOW shall prevail.
          </p>
          <div class="p-4 rounded-xl bg-slate-50 border border-slate-200 space-y-2 text-xs">
            <span class="font-bold text-slate-900 block">Formal Change Management Protocol:</span>
            <p>
              Any feature request, architectural alteration, or integration not explicitly enumerated in the signed SOW constitutes a <strong class="text-slate-900">"Change Request"</strong>. Yukt will evaluate the engineering impact and deliver a written Change Order specifying additional effort, timeline adjustments, and commercials. No change will be implemented without written client authorization (via email or signed addendum).
            </p>
          </div>
        </section>

        <!-- Term 4 -->
        <section id="term-4" class="scroll-mt-28 space-y-4">
          <div class="flex items-center gap-2 text-xs font-mono font-semibold uppercase text-electric-600 tracking-wider">
            <span>Clause 04</span>
            <span class="w-1.5 h-1.5 rounded-full bg-electric-600"></span>
            <span>Client Duties</span>
          </div>
          <h2 class="font-display font-bold text-2xl sm:text-3xl text-slate-900 tracking-tight">
            4. Client Responsibilities &amp; Single Point of Contact
          </h2>
          <p>Successful engineering delivery relies on timely collaboration. The Client agrees to:</p>
          <ul class="list-disc pl-5 space-y-2 text-sm">
            <li>
              <strong class="text-slate-900">Designate an Authorized SPOC:</strong> Appoint a single Single Point of Contact or Product Owner empowered to clarify specifications, review sprint staging builds, and sign off on milestones.
            </li>
            <li>
              <strong class="text-slate-900">Provision Requisite Assets Promptly:</strong> Provide branding kits, copywriting, vector assets, database schemas, third-party API credentials, domain names, and server access in a timely manner.
            </li>
            <li>
              <strong class="text-slate-900">Timely Staging Feedback:</strong> Review staging demos, GitHub pull requests, or UI prototypes within <strong>five (5) business days</strong> of delivery. Client delays automatically extend sprint delivery deadlines proportionally.
            </li>
          </ul>
        </section>

        <!-- Term 5 -->
        <section id="term-5" class="scroll-mt-28 space-y-4">
          <div class="flex items-center gap-2 text-xs font-mono font-semibold uppercase text-electric-600 tracking-wider">
            <span>Clause 05</span>
            <span class="w-1.5 h-1.5 rounded-full bg-electric-600"></span>
            <span>Intellectual Property</span>
          </div>
          <h2 class="font-display font-bold text-2xl sm:text-3xl text-slate-900 tracking-tight">
            5. Intellectual Property Rights &amp; 100% Client Code Ownership
          </h2>
          <div class="p-5 rounded-2xl bg-emerald-50/80 border border-emerald-200 space-y-2">
            <div class="flex items-center gap-2 font-display font-bold text-sm text-emerald-900">
              <i data-lucide="check-circle" class="w-4 h-4 text-emerald-600"></i>
              <span>The YUKT 100% Code Ownership Guarantee</span>
            </div>
            <p class="text-xs text-emerald-800 leading-relaxed">
              Upon receipt of <strong>100% full payment</strong> for the contracted milestone or project, <strong>all custom source code, unique design systems, database schemas, algorithms, and technical artifacts created specifically for the Client are unconditionally assigned, transferred, and vested exclusively in the Client</strong>. You receive complete Git repository ownership with zero ongoing royalties or vendor lock-in.
            </p>
          </div>

          <p class="text-sm pt-1">
            <strong>Open-Source Frameworks &amp; Third-Party Libraries:</strong> Software developed by Yukt may leverage world-class open-source libraries (e.g. React, Next.js, Vue, Tailwind CSS, Three.js, Laravel, Python packages). These components remain governed by their standard open-source licenses (MIT, Apache 2.0, BSD).
          </p>
          <p class="text-sm">
            <strong>Pre-Existing Tools &amp; Generic Boilerplates:</strong> Yukt retains ownership of our proprietary, reusable boilerplate utility modules, build scripts, and standard developer tools. We grant the Client an irrevocable, perpetual, royalty-free, worldwide license to utilize, modify, and distribute these tools strictly as integrated within the deliverable software.
          </p>
          <p class="text-xs text-slate-500">
            <strong>Portfolio Showcase Rights:</strong> Unless explicitly prohibited by a signed Non-Disclosure Agreement (NDA) or white-label contract, Yukt reserves the professional right to display screenshots of public designs, website URLs, and anonymized performance metrics in our portfolio and marketing materials.
          </p>
        </section>

        <!-- Term 6 -->
        <section id="term-6" class="scroll-mt-28 space-y-4">
          <div class="flex items-center gap-2 text-xs font-mono font-semibold uppercase text-electric-600 tracking-wider">
            <span>Clause 06</span>
            <span class="w-1.5 h-1.5 rounded-full bg-electric-600"></span>
            <span>Commercials &amp; Invoicing</span>
          </div>
          <h2 class="font-display font-bold text-2xl sm:text-3xl text-slate-900 tracking-tight">
            6. Commercial Terms, Invoicing &amp; Taxes
          </h2>
          <ul class="list-disc pl-5 space-y-2 text-sm">
            <li>
              <strong class="text-slate-900">Currency &amp; Payments:</strong> Domestic Indian invoices are billed in Indian Rupees (INR) via NEFT/RTGS, UPI, or Razorpay. International projects are billed in US Dollars (USD), Euros (EUR), or British Pounds (GBP) via international wire transfer (SWIFT) or Stripe.
            </li>
            <li>
              <strong class="text-slate-900">Statutory Taxes (GST):</strong> For Indian clients, Goods and Services Tax (GST @ 18%) is applied to all invoices in accordance with Government of India regulations. Valid tax invoices with GSTIN compliance are issued.
            </li>
            <li>
              <strong class="text-slate-900">Milestone Payment Structure:</strong> Standard fixed-price contracts operate on transparent milestone tranches (e.g., 30% upfront project initiation deposit, 40% upon staging alpha release, 30% upon final acceptance and production Git deployment).
            </li>
            <li>
              <strong class="text-slate-900">Payment Due Dates &amp; Suspension:</strong> Invoices are payable within <strong>seven (7) calendar days</strong> of issuance. Accounts overdue by more than fourteen (14) days may result in temporary suspension of active sprint development, staging server access, or CI/CD pipelines until resolved.
            </li>
          </ul>
        </section>

        <!-- Term 7 -->
        <section id="term-7" class="scroll-mt-28 space-y-4">
          <div class="flex items-center gap-2 text-xs font-mono font-semibold uppercase text-electric-600 tracking-wider">
            <span>Clause 07</span>
            <span class="w-1.5 h-1.5 rounded-full bg-electric-600"></span>
            <span>Delivery &amp; Sign-off</span>
          </div>
          <h2 class="font-display font-bold text-2xl sm:text-3xl text-slate-900 tracking-tight">
            7. User Acceptance Testing (UAT) &amp; Milestone Sign-off
          </h2>
          <p>
            Upon delivery of a milestone build or final production staging deployment, the Client has a formal <strong class="text-slate-900">User Acceptance Testing (UAT) window of ten (10) business days</strong> to test functionality against the approved SOW specifications.
          </p>
          <p class="text-sm">
            Any reproducible defects or deviations from the SOW submitted during this UAT window will be prioritized and resolved by Yukt at no extra charge. If the Client does not report any material non-conformities within the 10-day UAT period, or deploys the software into live commercial production, the milestone will be deemed formally accepted.
          </p>
        </section>

        <!-- Term 8 -->
        <section id="term-8" class="scroll-mt-28 space-y-4">
          <div class="flex items-center gap-2 text-xs font-mono font-semibold uppercase text-electric-600 tracking-wider">
            <span>Clause 08</span>
            <span class="w-1.5 h-1.5 rounded-full bg-electric-600"></span>
            <span>Warranty SLA</span>
          </div>
          <h2 class="font-display font-bold text-2xl sm:text-3xl text-slate-900 tracking-tight">
            8. 30-Day Complimentary Hypercare Warranty
          </h2>
          <div class="p-5 rounded-2xl bg-slate-50 border border-slate-200 space-y-3">
            <div class="flex items-center gap-2 font-display font-bold text-sm text-slate-900">
              <i data-lucide="shield" class="w-4 h-4 text-electric-600"></i>
              <span>Post-Launch Hypercare Protection</span>
            </div>
            <p class="text-xs text-slate-700 leading-relaxed">
              Yukt provides a <strong class="text-slate-900">thirty (30) calendar day complimentary hypercare warranty</strong> commencing immediately upon production deployment or final handover. During this period, our engineering pod will resolve any reproducible functional bugs, layout breaks, or deviations from the agreed SOW at zero additional fee.
            </p>
            <div class="pt-2 border-t border-slate-200 text-xs text-slate-600 space-y-1">
              <strong>Warranty Exclusions:</strong> The warranty does not cover: (a) defects arising from modifications made to the source code by the Client or third parties, (b) outages or upstream breaking API changes from external providers (AWS, payment gateways, Meta, OpenAI), or (c) new feature additions outside the original SOW. Extended SLA and DevOps support retainers are available following the 30-day hypercare period.
            </div>
          </div>
        </section>

        <!-- Term 9 -->
        <section id="term-9" class="scroll-mt-28 space-y-4">
          <div class="flex items-center gap-2 text-xs font-mono font-semibold uppercase text-electric-600 tracking-wider">
            <span>Clause 09</span>
            <span class="w-1.5 h-1.5 rounded-full bg-electric-600"></span>
            <span>Integrations</span>
          </div>
          <h2 class="font-display font-bold text-2xl sm:text-3xl text-slate-900 tracking-tight">
            9. Third-Party Services, Cloud Infrastructure &amp; APIs
          </h2>
          <p>
            Modern applications depend on third-party cloud infrastructure (AWS, DigitalOcean, Hostinger), payment gateways (Razorpay, Stripe), communication networks (WhatsApp Business, Twilio), and AI model APIs (OpenAI, Anthropic).
          </p>
          <p class="text-sm">
            Client is responsible for maintaining their own direct billing accounts with third-party vendors unless managed hosting is explicitly contracted under our SOW. Yukt is not legally liable for service interruptions, upstream downtime, rate limits, or price modifications enacted by independent third-party platforms.
          </p>
        </section>

        <!-- Term 10 -->
        <section id="term-10" class="scroll-mt-28 space-y-4">
          <div class="flex items-center gap-2 text-xs font-mono font-semibold uppercase text-electric-600 tracking-wider">
            <span>Clause 10</span>
            <span class="w-1.5 h-1.5 rounded-full bg-electric-600"></span>
            <span>Non-Disclosure</span>
          </div>
          <h2 class="font-display font-bold text-2xl sm:text-3xl text-slate-900 tracking-tight">
            10. Mutual Non-Disclosure &amp; Confidentiality
          </h2>
          <p>
            Both Yukt and the Client agree to hold all Confidential Information (including business processes, proprietary software, data models, financial figures, customer databases, and product roadmaps) in strict confidence. Neither party shall disclose Confidential Information to any third party without prior written authorization, exercising the same degree of care it uses for its own confidential assets (and in no case less than reasonable care).
          </p>
          <p class="text-xs text-slate-500">
            This confidentiality obligation survives termination of this Agreement for a duration of <strong>three (3) years</strong> following contract conclusion.
          </p>
        </section>

        <!-- Term 11 -->
        <section id="term-11" class="scroll-mt-28 space-y-4">
          <div class="flex items-center gap-2 text-xs font-mono font-semibold uppercase text-electric-600 tracking-wider">
            <span>Clause 11</span>
            <span class="w-1.5 h-1.5 rounded-full bg-electric-600"></span>
            <span>Disclaimers</span>
          </div>
          <h2 class="font-display font-bold text-2xl sm:text-3xl text-slate-900 tracking-tight">
            11. AI Disclaimers &amp; Marketing Performance Disclaimers
          </h2>
          <p class="text-sm">
            <strong class="text-slate-900">Artificial Intelligence &amp; LLM Automation:</strong> When building AI workflows, autonomous agents, and RAG architectures, the Client acknowledges that Large Language Models operate probabilistically. While Yukt builds rigorous deterministic validation layers, guardrails, and unit test suites, we cannot warrant that third-party AI models will produce 100% hallucination-free outputs under all edge-case prompts.
          </p>
          <p class="text-sm">
            <strong class="text-slate-900">SEO &amp; Ad Performance:</strong> For digital marketing and SEO engagements, Yukt executes industry-leading technical optimization and conversion strategies. However, because search engines (Google) and advertising algorithms (Meta, LinkedIn) undergo proprietary algorithm updates, Yukt does not guarantee specific organic ranking positions or guaranteed conversion multiples.
          </p>
        </section>

        <!-- Term 12 -->
        <section id="term-12" class="scroll-mt-28 space-y-4">
          <div class="flex items-center gap-2 text-xs font-mono font-semibold uppercase text-electric-600 tracking-wider">
            <span>Clause 12</span>
            <span class="w-1.5 h-1.5 rounded-full bg-electric-600"></span>
            <span>Cap on Liability</span>
          </div>
          <h2 class="font-display font-bold text-2xl sm:text-3xl text-slate-900 tracking-tight">
            12. Limitation of Liability
          </h2>
          <div class="p-4 rounded-xl bg-slate-50 border border-slate-200 space-y-2 text-xs">
            <p>
              To the maximum extent permitted by applicable law, in no event shall <strong class="text-slate-900">Yukt IT Solutions Private Limited</strong>, its directors (Ansar Ali Shah, Ranjeet), employees, or affiliates be liable for any indirect, incidental, punitive, special, or consequential damages, including loss of profits, goodwill, data corruption, or business interruption, arising out of or related to this Agreement.
            </p>
            <p class="font-semibold text-slate-900">
              The total cumulative liability of Yukt under any cause of action arising out of an executed Statement of Work shall be strictly capped at the total amount of fees actually paid by the Client to Yukt under that specific SOW in the three (3) months immediately preceding the event giving rise to liability.
            </p>
          </div>
        </section>

        <!-- Term 13 -->
        <section id="term-13" class="scroll-mt-28 space-y-4">
          <div class="flex items-center gap-2 text-xs font-mono font-semibold uppercase text-electric-600 tracking-wider">
            <span>Clause 13</span>
            <span class="w-1.5 h-1.5 rounded-full bg-electric-600"></span>
            <span>Legal Indemnity</span>
          </div>
          <h2 class="font-display font-bold text-2xl sm:text-3xl text-slate-900 tracking-tight">
            13. Indemnification
          </h2>
          <p class="text-sm">
            The Client agrees to defend, indemnify, and hold harmless Yukt IT Solutions and its officers against any third-party claims, liabilities, damages, and legal expenses arising from: (a) any materials, content, logos, or data provided by the Client that infringe upon the intellectual property or copyright of a third party, (b) the commercial operation of the Client's business or products built with the software, or (c) any violation of applicable laws by the Client.
          </p>
        </section>

        <!-- Term 14 -->
        <section id="term-14" class="scroll-mt-28 space-y-4">
          <div class="flex items-center gap-2 text-xs font-mono font-semibold uppercase text-electric-600 tracking-wider">
            <span>Clause 14</span>
            <span class="w-1.5 h-1.5 rounded-full bg-electric-600"></span>
            <span>Termination</span>
          </div>
          <h2 class="font-display font-bold text-2xl sm:text-3xl text-slate-900 tracking-tight">
            14. Suspension &amp; Termination
          </h2>
          <p class="text-sm">
            Either party may terminate an ongoing engagement: (a) for convenience upon giving <strong>fourteen (14) calendar days written notice</strong> to the other party, or (b) immediately if the other party commits a material breach and fails to remedy such breach within fourteen (14) days of receiving written notice.
          </p>
          <p class="text-sm">
            Upon termination, the Client shall promptly pay Yukt for all completed milestones, approved deliverables, and pro-rata engineering hours rendered up to the effective termination date. Upon complete settlement of outstanding invoices, Yukt will transfer all corresponding work-in-progress code repositories and design assets to the Client.
          </p>
        </section>

        <!-- Term 15 -->
        <section id="term-15" class="scroll-mt-28 space-y-4">
          <div class="flex items-center gap-2 text-xs font-mono font-semibold uppercase text-electric-600 tracking-wider">
            <span>Clause 15</span>
            <span class="w-1.5 h-1.5 rounded-full bg-electric-600"></span>
            <span>Jurisdiction</span>
          </div>
          <h2 class="font-display font-bold text-2xl sm:text-3xl text-slate-900 tracking-tight">
            15. Governing Law, Arbitration &amp; Dispute Resolution
          </h2>
          <p class="text-sm">
            This Agreement shall be governed by, construed, and interpreted in accordance with the substantive <strong class="text-slate-900">laws of the Republic of India</strong>, without regard to conflict of law principles.
          </p>
          <div class="space-y-2 text-xs pt-1">
            <div class="p-3.5 rounded-xl bg-slate-50 border border-slate-200">
              <strong class="text-slate-900 block mb-1">Amicable Senior Consultation:</strong>
              In the event of any disagreement, both parties agree to first engage in good-faith executive consultations between the Client's executive and Yukt Founding Partners (Ansar Ali Shah / Ranjeet) for a minimum period of thirty (30) business days.
            </div>
            <div class="p-3.5 rounded-xl bg-slate-50 border border-slate-200">
              <strong class="text-slate-900 block mb-1">Binding Arbitration:</strong>
              Any dispute remaining unresolved shall be finally settled by binding arbitration in accordance with the <strong>Arbitration and Conciliation Act, 1996 (India)</strong>, by a sole arbitrator mutually appointed by both parties. The seat and legal venue of arbitration shall be <strong class="text-slate-900">New Delhi, India</strong>, and proceedings shall be conducted in the English language.
            </div>
            <div class="p-3.5 rounded-xl bg-slate-50 border border-slate-200">
              <strong class="text-slate-900 block mb-1">Exclusive Judicial Jurisdiction:</strong>
              Subject to arbitration, the competent courts situated in <strong class="text-slate-900">New Delhi, India</strong> shall possess exclusive territorial and subject-matter jurisdiction.
            </div>
          </div>
        </section>

        <!-- Term 16 -->
        <section id="term-16" class="scroll-mt-28 space-y-4">
          <div class="flex items-center gap-2 text-xs font-mono font-semibold uppercase text-electric-600 tracking-wider">
            <span>Clause 16</span>
            <span class="w-1.5 h-1.5 rounded-full bg-electric-600"></span>
            <span>General Provisions</span>
          </div>
          <h2 class="font-display font-bold text-2xl sm:text-3xl text-slate-900 tracking-tight">
            16. Severability, Force Majeure &amp; Entire Agreement
          </h2>
          <ul class="list-disc pl-5 space-y-2 text-sm">
            <li>
              <strong class="text-slate-900">Severability:</strong> If any provision of these Terms is deemed unlawful or unenforceable by a court of competent jurisdiction, the remaining provisions shall remain in full force and effect.
            </li>
            <li>
              <strong class="text-slate-900">Force Majeure:</strong> Neither party shall be liable for delays or failures in performance resulting from causes beyond reasonable control, including natural disasters, acts of war, national telecommunication blackouts, or government restrictions.
            </li>
            <li>
              <strong class="text-slate-900">Entire Agreement:</strong> These Terms, together with any executed SOW and NDA, constitute the entire agreement between the parties regarding the subject matter, superseding all prior oral or written discussions.
            </li>
          </ul>
        </section>

        <!-- Term 17 -->
        <section id="term-17" class="scroll-mt-28 space-y-6 pt-4 border-t border-slate-200">
          <div class="flex items-center gap-2 text-xs font-mono font-semibold uppercase text-electric-600 tracking-wider">
            <span>Clause 17</span>
            <span class="w-1.5 h-1.5 rounded-full bg-electric-600"></span>
            <span>Notices Desk</span>
          </div>
          <h2 class="font-display font-bold text-2xl sm:text-3xl text-slate-900 tracking-tight">
            17. Legal Notices &amp; Commercial Inquiries
          </h2>
          <p>
            Formal legal notices, contract inquiries, and Master Services Agreement (MSA) requests should be dispatched to the official legal desk of Yukt IT Solutions:
          </p>

          <div class="p-6 rounded-2xl bg-slate-900 text-white space-y-4 border border-slate-800 shadow-xl">
            <div class="flex items-center justify-between pb-3 border-b border-white/10">
              <div>
                <span class="font-display font-bold text-base text-white">Yukt IT Solutions Private Limited</span>
                <span class="text-xs text-electric-400 block font-mono">Corporate Legal &amp; Contracts Desk</span>
              </div>
              <span class="text-[10px] font-mono px-2 py-0.5 rounded-full bg-electric-500/20 text-electric-400 border border-electric-500/30">Official Commercial Desk</span>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 text-xs font-mono text-slate-300">
              <div>
                <span class="text-slate-500 block text-[10px] uppercase">Official Website</span>
                <a href="https://yukt.online" class="text-white hover:text-electric-400">https://yukt.online</a>
              </div>
              <div>
                <span class="text-slate-500 block text-[10px] uppercase">Legal &amp; Contracts Email</span>
                <a href="mailto:legal@yukt.online" class="text-electric-400 hover:text-white underline">legal@yukt.online</a>
              </div>
              <div>
                <span class="text-slate-500 block text-[10px] uppercase">Founder &amp; Systems Architect</span>
                <span class="text-white">Ansar Ali Shah (+91 95763 38282)</span>
              </div>
              <div>
                <span class="text-slate-500 block text-[10px] uppercase">Co-Founder &amp; Solutions Architect</span>
                <span class="text-white">Ranjeet (+91 72176 45059)</span>
              </div>
              <div class="sm:col-span-2">
                <span class="text-slate-500 block text-[10px] uppercase">Headquarters / Registered Office</span>
                <span class="text-white">Block A, Ram Datt Enclave, Uttam Nagar, Delhi - 110059, India</span>
              </div>
            </div>

            <div class="pt-3 border-t border-white/10 flex items-center justify-between text-[11px] text-slate-400">
              <span>Working Hours: Mon &ndash; Sat, 9:30 AM &ndash; 7:30 PM IST</span>
              <span>Fast-Track Turnaround: 24 Hours</span>
            </div>
          </div>

          <div class="flex flex-col sm:flex-row items-center justify-between gap-4 pt-4 text-xs text-slate-500 border-t border-slate-200">
            <span>Need to review our data protection practices?</span>
            <a href="privacy-policy" class="px-5 py-2.5 rounded-xl font-display font-semibold text-xs text-white bg-navy-900 hover:bg-navy-800 transition-colors flex items-center gap-1.5">
              <span>Read Privacy Policy</span>
              <i data-lucide="arrow-right" class="w-3.5 h-3.5"></i>
            </a>
          </div>
        </section>

      </article>

    </div>
  </div>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
