<?php
$activePage = 'design-system';
$pageTitle = 'Design System & Component Library — Yukt IT Solutions';
$pageDesc = 'Comprehensive design system, color tokens, typography scales, buttons, form controls, and reusable UI components for YUKT IT SOLUTIONS.';

require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/components/section-header.php';
require_once __DIR__ . '/includes/components/card-service.php';
?>

<!-- Design System Hero -->
<section class="bg-canvas-subtle border-b border-canvas-border py-16 lg:py-20 bg-grid-pattern relative">
  <div class="container-custom relative z-10">
    <div class="max-w-3xl">
      <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full text-xs font-semibold uppercase tracking-wider bg-electric-50 text-electric-700 border border-electric-200 mb-4">
        <span class="w-2 h-2 rounded-full bg-electric-600"></span> Design Specification v1.0
      </div>
      <h1 class="text-4xl sm:text-5xl lg:text-6xl font-extrabold text-navy-900 tracking-tight">
        YUKT Design System &amp; Component Library
      </h1>
      <p class="text-lg text-navy-600 mt-4 leading-relaxed">
        A minimalist, accessible, and high-performance design language engineered for <strong class="text-navy-900">YUKT IT SOLUTIONS (yukt.online)</strong>. Designed with clean off-white canvases, deep navy typography, electric blue precision lines, and subtle warm orange energy accents.
      </p>
      
      <div class="mt-8 flex flex-wrap gap-4 items-center">
        <?php echo renderButton('Test Live Quote Modal', null, 'primary', 'md', 'sparkles', 'left', 'open-quote-modal-btn'); ?>
        <?php echo renderButton('View Project Roadmap', 'assets/../#roadmap', 'secondary', 'md', 'arrow-right', 'right'); ?>
        <a href="#colors" class="text-xs font-semibold text-slate-500 hover:text-navy-900 px-3 py-2">Jump to Color Tokens &darr;</a>
      </div>
    </div>
  </div>
</section>

<!-- Main Design System Explorer -->
<div class="container-custom py-16 space-y-24">

  <!-- 1. Color Palette Tokens -->
  <section id="colors" class="scroll-mt-28">
    <?php echo renderSectionHeader('Foundational Tokens', 'Brand Color Architecture', 'Mathematically balanced color tokens optimized for AA/AAA accessibility on clean white and off-white surfaces.', false); ?>

    <!-- Color Categories -->
    <div class="space-y-10">
      
      <!-- Primary Navy Scale -->
      <div>
        <h3 class="text-lg font-bold text-navy-900 mb-3 flex items-center gap-2">
          <span class="w-3 h-3 rounded bg-navy-900"></span>
          Deep Navy &amp; Neutral Typography Scale
        </h3>
        <p class="text-xs text-navy-600 mb-4">The foundational anchor for high-legibility minimalist aesthetic. Eliminates harsh pure blacks in favor of rich deep slate-navy tones (#111827 primary, #0B1220 dark sections, #64748B secondary).</p>
        <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-6 gap-3">
          <div class="p-3 bg-white border border-canvas-border rounded-lg shadow-xs">
            <div class="h-16 rounded-md bg-[#0B1220] mb-2 flex items-end p-1.5"><span class="text-[10px] text-white/80 font-mono">#0B1220</span></div>
            <div class="text-xs font-bold text-navy-900">navy-900</div>
            <div class="text-[11px] text-slate-500">Dark Sections / Footer</div>
          </div>
          <div class="p-3 bg-white border border-canvas-border rounded-lg shadow-xs">
            <div class="h-16 rounded-md bg-[#111827] mb-2 flex items-end p-1.5"><span class="text-[10px] text-white/80 font-mono">#111827</span></div>
            <div class="text-xs font-bold text-navy-900">navy-800</div>
            <div class="text-[11px] text-slate-500">Headings &amp; Body</div>
          </div>
          <div class="p-3 bg-white border border-canvas-border rounded-lg shadow-xs">
            <div class="h-16 rounded-md bg-[#334155] mb-2 flex items-end p-1.5"><span class="text-[10px] text-white/80 font-mono">#334155</span></div>
            <div class="text-xs font-bold text-navy-900">navy-600</div>
            <div class="text-[11px] text-slate-500">Medium Contrast</div>
          </div>
          <div class="p-3 bg-white border border-canvas-border rounded-lg shadow-xs">
            <div class="h-16 rounded-md bg-[#64748B] mb-2 flex items-end p-1.5"><span class="text-[10px] text-white/80 font-mono">#64748B</span></div>
            <div class="text-xs font-bold text-navy-900">navy-500</div>
            <div class="text-[11px] text-slate-500">Secondary Text</div>
          </div>
          <div class="p-3 bg-white border border-canvas-border rounded-lg shadow-xs">
            <div class="h-16 rounded-md bg-[#E5E7EB] mb-2 flex items-end p-1.5"><span class="text-[10px] text-navy-900 font-mono">#E5E7EB</span></div>
            <div class="text-xs font-bold text-navy-900">canvas-border</div>
            <div class="text-[11px] text-slate-500">Precision Borders</div>
          </div>
          <div class="p-3 bg-white border border-canvas-border rounded-lg shadow-xs">
            <div class="h-16 rounded-md bg-[#F7F9FC] border border-slate-200 mb-2 flex items-end p-1.5"><span class="text-[10px] text-navy-900 font-mono">#F7F9FC</span></div>
            <div class="text-xs font-bold text-navy-900">canvas-subtle</div>
            <div class="text-[11px] text-slate-500">Alternate Background</div>
          </div>
        </div>
      </div>

      <!-- Electric Blue Accent -->
      <div>
        <h3 class="text-lg font-bold text-navy-900 mb-3 flex items-center gap-2">
          <span class="w-3 h-3 rounded bg-electric-600"></span>
          Primary Accent Scale (#2563EB)
        </h3>
        <p class="text-xs text-navy-600 mb-4">Linear &amp; Stripe-inspired primary accent color for high-clarity CTAs, active indicators, and interactive links.</p>
        <div class="grid grid-cols-2 sm:grid-cols-4 gap-3">
          <div class="p-3 bg-white border border-canvas-border rounded-lg shadow-xs">
            <div class="h-16 rounded-md bg-[#2563EB] mb-2 flex items-end p-1.5"><span class="text-[10px] text-white font-mono">#2563EB</span></div>
            <div class="text-xs font-bold text-navy-900">electric-600</div>
            <div class="text-[11px] text-slate-500">Primary Brand Accent</div>
          </div>
          <div class="p-3 bg-white border border-canvas-border rounded-lg shadow-xs">
            <div class="h-16 rounded-md bg-[#1D4ED8] mb-2 flex items-end p-1.5"><span class="text-[10px] text-white font-mono">#1D4ED8</span></div>
            <div class="text-xs font-bold text-navy-900">electric-700</div>
            <div class="text-[11px] text-slate-500">Button Hover State</div>
          </div>
          <div class="p-3 bg-white border border-canvas-border rounded-lg shadow-xs">
            <div class="h-16 rounded-md bg-[#93C5FD] mb-2 flex items-end p-1.5"><span class="text-[10px] text-navy-900 font-mono">#93C5FD</span></div>
            <div class="text-xs font-bold text-navy-900">electric-300</div>
            <div class="text-[11px] text-slate-500">Card Focus / Borders</div>
          </div>
          <div class="p-3 bg-white border border-canvas-border rounded-lg shadow-xs">
            <div class="h-16 rounded-md bg-[#EFF6FF] border border-blue-100 mb-2 flex items-end p-1.5"><span class="text-[10px] text-blue-900 font-mono">#EFF6FF</span></div>
            <div class="text-xs font-bold text-navy-900">electric-50</div>
            <div class="text-[11px] text-slate-500">Soft Surface / Badge</div>
          </div>
        </div>
      </div>

      <!-- Subtle Warm Orange Accent -->
      <div>
        <h3 class="text-lg font-bold text-navy-900 mb-3 flex items-center gap-2">
          <span class="w-3 h-3 rounded bg-brandOrange-500"></span>
          Subtle Warm Orange Secondary Accent Scale (#F97316)
        </h3>
        <p class="text-xs text-navy-600 mb-4">Derived from the warm spark node in the Yukt logo mark. Used sparingly for high-impact callouts, conversion sparks, and notifications.</p>
        <div class="grid grid-cols-2 sm:grid-cols-4 gap-3">
          <div class="p-3 bg-white border border-canvas-border rounded-lg shadow-xs">
            <div class="h-16 rounded-md bg-[#F97316] mb-2 flex items-end p-1.5"><span class="text-[10px] text-white font-mono">#F97316</span></div>
            <div class="text-xs font-bold text-navy-900">orange-500</div>
            <div class="text-[11px] text-slate-500">Logo Spark / Accent</div>
          </div>
          <div class="p-3 bg-white border border-canvas-border rounded-lg shadow-xs">
            <div class="h-16 rounded-md bg-[#EA580C] mb-2 flex items-end p-1.5"><span class="text-[10px] text-white font-mono">#EA580C</span></div>
            <div class="text-xs font-bold text-navy-900">orange-600</div>
            <div class="text-[11px] text-slate-500">Hover State</div>
          </div>
          <div class="p-3 bg-white border border-canvas-border rounded-lg shadow-xs">
            <div class="h-16 rounded-md bg-[#FED7AA] mb-2 flex items-end p-1.5"><span class="text-[10px] text-orange-950 font-mono">#FED7AA</span></div>
            <div class="text-xs font-bold text-navy-900">orange-200</div>
            <div class="text-[11px] text-slate-500">Badge Border</div>
          </div>
          <div class="p-3 bg-white border border-canvas-border rounded-lg shadow-xs">
            <div class="h-16 rounded-md bg-[#FFF7ED] border border-orange-100 mb-2 flex items-end p-1.5"><span class="text-[10px] text-orange-900 font-mono">#FFF7ED</span></div>
            <div class="text-xs font-bold text-navy-900">orange-50</div>
            <div class="text-[11px] text-slate-500">Pill Background</div>
          </div>
        </div>
      </div>

    </div>
  </section>

  <!-- 2. Typography Hierarchy -->
  <section id="typography" class="scroll-mt-28">
    <?php echo renderSectionHeader('Type Hierarchy', 'Inter Modern Sans Typography', 'Engineered with Inter for high-density clarity, optical legibility, and modern technology aesthetics.', false); ?>

    <div class="bg-white border border-canvas-border rounded-card p-6 sm:p-8 space-y-8 divide-y divide-canvas-border">
      
      <div class="pt-2">
        <div class="text-xs font-mono text-slate-400 mb-1">Display 1 — 56px / ExtraBold (800) / Tracking -0.03em</div>
        <div class="text-4xl sm:text-5xl lg:text-6xl font-extrabold text-navy-900 tracking-tight leading-tight">
          Empowering Enterprises with AI &amp; Software
        </div>
      </div>

      <div class="pt-6">
        <div class="text-xs font-mono text-slate-400 mb-1">Heading 1 (H1) — 44px / Bold (700) / Tracking -0.025em</div>
        <h1 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-navy-900 tracking-tight">
          High-Velocity Website &amp; Web App Engineering
        </h1>
      </div>

      <div class="pt-6">
        <div class="text-xs font-mono text-slate-400 mb-1">Heading 2 (H2) — 32px / Bold (700)</div>
        <h2 class="text-2xl sm:text-3xl font-bold text-navy-900">
          Tailored Cloud Systems &amp; Autonomous Workflows
        </h2>
      </div>

      <div class="pt-6">
        <div class="text-xs font-mono text-slate-400 mb-1">Heading 3 (H3) — 24px / SemiBold (600)</div>
        <h3 class="text-xl sm:text-2xl font-semibold text-navy-900">
          Full-Stack Agile Delivery with Transparent Sprint Milestones
        </h3>
      </div>

      <div class="pt-6">
        <div class="text-xs font-mono text-slate-400 mb-1">Body Text Large — 18px / Regular (400)</div>
        <p class="text-lg text-navy-600 leading-relaxed max-w-3xl">
          At Yukt IT Solutions, we bridge the gap between creative visual excellence and hardened enterprise architecture. Every line of code is optimized for Core Web Vitals, maximum security, and frictionless scalability.
        </p>
      </div>

      <div class="pt-6">
        <div class="text-xs font-mono text-slate-400 mb-1">Body Text Base &amp; Inline Links — 15px / Regular (400)</div>
        <p class="text-sm text-navy-700 leading-relaxed max-w-3xl">
          We combine human ingenuity with state-of-the-art tooling. From custom ERP platforms to high-converting D2C Shopify stores, our team provides <a href="#" class="text-electric-600 font-semibold underline underline-offset-4 hover:text-electric-700">100% intellectual property ownership</a> and post-launch maintenance warranties.
        </p>
      </div>

      <div class="pt-6">
        <div class="text-xs font-mono text-slate-400 mb-1">Monospace / Code / API Spec — JetBrains Mono</div>
        <div class="p-3 bg-canvas-muted rounded-md text-xs font-mono text-navy-800 border border-canvas-border">
          curl -X POST https://api.yukt.online/v1/projects/estimate -H "Authorization: Bearer yukt_sec_token"
        </div>
      </div>

    </div>
  </section>

  <!-- 3. Button Component Matrix -->
  <section id="buttons" class="scroll-mt-28">
    <?php echo renderSectionHeader('Actions & Micro-Interactions', 'Button Component Variants', 'Accessible, tactile buttons with refined hover elevations and electric glow states.', false); ?>

    <div class="bg-white border border-canvas-border rounded-card p-6 sm:p-8 space-y-8">
      <!-- Variants Row -->
      <div>
        <div class="text-xs font-bold uppercase tracking-wider text-slate-400 mb-4">Semantic Variants</div>
        <div class="flex flex-wrap gap-4 items-center">
          <?php echo renderButton('Primary Action', null, 'primary', 'md', 'arrow-right', 'right'); ?>
          <?php echo renderButton('Secondary Action', null, 'secondary', 'md', 'globe', 'left'); ?>
          <?php echo renderButton('High Priority / Accent', null, 'accent', 'md', 'sparkles', 'left'); ?>
          <?php echo renderButton('Ghost Button', null, 'ghost', 'md'); ?>
          <?php echo renderButton('Outline Button', null, 'outline', 'md', 'arrow-right', 'right'); ?>
        </div>
      </div>

      <!-- Sizes Row -->
      <div class="pt-6 border-t border-canvas-border">
        <div class="text-xs font-bold uppercase tracking-wider text-slate-400 mb-4">Button Sizing Scale</div>
        <div class="flex flex-wrap items-center gap-4">
          <?php echo renderButton('Small Button', null, 'primary', 'sm', 'check', 'left'); ?>
          <?php echo renderButton('Medium (Default)', null, 'primary', 'md', 'check', 'left'); ?>
          <?php echo renderButton('Large Hero CTA', null, 'primary', 'lg', 'arrow-right', 'right'); ?>
        </div>
      </div>

      <!-- Dark Background Surface Preview -->
      <div class="pt-6 border-t border-canvas-border">
        <div class="text-xs font-bold uppercase tracking-wider text-slate-400 mb-4">Buttons on Dark Surfaces (Footer / Dark Banners)</div>
        <div class="p-6 bg-navy-950 rounded-card flex flex-wrap gap-4 items-center">
          <?php echo renderButton('Primary on Dark', null, 'primary', 'md'); ?>
          <?php echo renderButton('White Button', null, 'white', 'md', 'arrow-right', 'right'); ?>
          <?php echo renderButton('Accent Spark', null, 'accent', 'md', 'zap', 'left'); ?>
          <button type="button" class="btn text-slate-300 hover:text-white hover:bg-navy-900 px-4 py-2 text-sm">Ghost on Dark</button>
        </div>
      </div>
    </div>
  </section>

  <!-- 4. Badges & Status Indicators -->
  <section id="badges" class="scroll-mt-28">
    <?php echo renderSectionHeader('Status & Categorization', 'Badges & Micro-Pills', 'Compact visual tags for service specializations, tech stacks, and delivery statuses.', false); ?>

    <div class="bg-white border border-canvas-border rounded-card p-6 sm:p-8 flex flex-wrap gap-3 items-center">
      <?php echo renderBadge('Electric Blue', 'blue', 'sparkles'); ?>
      <?php echo renderBadge('Orange Accent', 'orange', 'zap'); ?>
      <?php echo renderBadge('Enterprise Navy', 'navy', 'cpu'); ?>
      <?php echo renderBadge('Active Status (99.4%)', 'emerald', 'check-circle'); ?>
      <?php echo renderBadge('Neutral Slate', 'slate'); ?>
      <?php echo renderBadge('React / Next.js', 'blue', 'code'); ?>
      <?php echo renderBadge('Laravel & PHP', 'orange', 'cpu'); ?>
      <?php echo renderBadge('AI Automation', 'orange', 'sparkles'); ?>
    </div>
  </section>

  <!-- 5. Form Controls & Inputs -->
  <section id="forms" class="scroll-mt-28">
    <?php echo renderSectionHeader('Data Collection', 'Form Inputs & Interactive Fields', 'Clean, high-contrast input controls with electric blue focus rings and accessible labels.', false); ?>

    <div class="bg-white border border-canvas-border rounded-card p-6 sm:p-8">
      <form class="grid grid-cols-1 md:grid-cols-2 gap-6" onsubmit="event.preventDefault(); alert('Demo form submission');">
        <div>
          <label for="demoName" class="form-label">Full Name <span class="text-brandOrange-600">*</span></label>
          <input type="text" id="demoName" placeholder="e.g. Vikram Malhotra" class="form-input">
          <span class="text-[11px] text-slate-500 mt-1 block">Your official business or personal name.</span>
        </div>

        <div>
          <label for="demoEmail" class="form-label">Business Email <span class="text-brandOrange-600">*</span></label>
          <input type="email" id="demoEmail" placeholder="vikram@enterprise.com" class="form-input">
          <span class="text-[11px] text-slate-500 mt-1 block">We never share your email with third parties.</span>
        </div>

        <div>
          <label for="demoSelect" class="form-label">Select Service Area</label>
          <select id="demoSelect" class="form-select">
            <option>Website Development (Next.js / Laravel)</option>
            <option>Custom Software &amp; SaaS Systems</option>
            <option>AI Automation &amp; Intelligent Bots</option>
            <option>Digital Marketing &amp; SEO Growth</option>
            <option>Graphic &amp; UI/UX Product Design</option>
            <option>Branding &amp; Corporate Identity</option>
            <option>E-Commerce Solutions (Shopify / Woo)</option>
          </select>
        </div>

        <div>
          <label for="demoBudget" class="form-label">Estimated Project Budget</label>
          <select id="demoBudget" class="form-select">
            <option>₹50,000 – ₹1,50,000</option>
            <option selected>₹1,50,000 – ₹5,00,000</option>
            <option>₹5,00,000 – ₹15,00,000</option>
            <option>₹15,00,000+ (Enterprise Architecture)</option>
          </select>
        </div>

        <div class="md:col-span-2">
          <label for="demoMessage" class="form-label">Project Scope Description</label>
          <textarea id="demoMessage" rows="3" placeholder="Outline your deliverables, existing stack, and expected launch date..." class="form-textarea"></textarea>
        </div>

        <div class="md:col-span-2 flex items-center justify-between pt-2">
          <label class="flex items-center gap-2 cursor-pointer text-xs text-navy-700">
            <input type="checkbox" checked class="w-4 h-4 text-electric-600 rounded border-canvas-border focus:ring-electric-500">
            <span>Send me quarterly Indian tech trends &amp; architecture case studies</span>
          </label>
          <button type="submit" class="btn-primary">
            <span>Submit Sample Form</span>
            <?php echo getIconSvg('arrow-right', 'w-4 h-4'); ?>
          </button>
        </div>
      </form>
    </div>
  </section>

  <!-- 6. Card Architecture & Service Component Sample -->
  <section id="cards" class="scroll-mt-28">
    <?php echo renderSectionHeader('Grid & Containment', 'Modular Card Components', 'Minimalist card variants with hairline borders, generous padding, and hover elevation states.', false); ?>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
      
      <!-- Standard Service Card 1 -->
      <?php echo renderServiceCard($SERVICES['web-development']); ?>

      <!-- Standard Service Card 2 (Orange Accent) -->
      <?php echo renderServiceCard($SERVICES['ai-automation']); ?>

      <!-- Standard Service Card 3 -->
      <?php echo renderServiceCard($SERVICES['custom-software']); ?>

    </div>

    <!-- Metric / Stats Cards Row -->
    <div class="mt-8 grid grid-cols-2 lg:grid-cols-4 gap-4 sm:gap-6">
      <?php foreach ($COMPANY_STATS as $stat): ?>
        <div class="bg-white border border-canvas-border rounded-card p-6 shadow-subtle hover:border-electric-200 transition-colors">
          <div class="text-3xl sm:text-4xl font-extrabold text-navy-900 tracking-tight flex items-baseline gap-1">
            <span><?php echo $stat['value']; ?></span>
            <span class="w-1.5 h-1.5 rounded-full bg-electric-600"></span>
          </div>
          <div class="text-sm font-bold text-navy-800 mt-2"><?php echo $stat['label']; ?></div>
          <div class="text-xs text-slate-500 mt-0.5"><?php echo $stat['sub']; ?></div>
        </div>
      <?php endforeach; ?>
    </div>
  </section>

  <!-- 7. Interactive Modal Demo Trigger Section -->
  <section class="bg-navy-950 text-white rounded-card p-8 sm:p-12 relative overflow-hidden">
    <div class="relative z-10 max-w-2xl">
      <span class="inline-flex items-center gap-1.5 px-2.5 py-0.5 rounded-full text-xs font-semibold bg-navy-900 text-electric-400 border border-navy-800 mb-3">
        <?php echo getIconSvg('sparkles', 'w-3 h-3 text-brandOrange-500'); ?>
        Interactive UI Component
      </span>
      <h2 class="text-2xl sm:text-3xl font-extrabold text-white tracking-tight">Ready to test the Quote Modal?</h2>
      <p class="text-sm text-slate-300 mt-2 leading-relaxed">
        The quote modal is a reusable global component wired directly to MySQL with instant validation and async submission.
      </p>
      <div class="mt-6 flex flex-wrap gap-4">
        <button type="button" class="btn-primary open-quote-modal-btn" data-service="Full Digital Transformation">
          <span>Trigger Interactive Modal</span>
          <?php echo getIconSvg('arrow-right', 'w-4 h-4'); ?>
        </button>
        <a href="index.php" class="btn-secondary text-navy-900">
          <span>Go to Homepage</span>
        </a>
      </div>
    </div>
  </section>

</div>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
