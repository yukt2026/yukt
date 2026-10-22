<!-- Instant Project Quote & Consultation Modal -->
<div id="quoteModal" class="fixed inset-0 z-50 flex items-center justify-center p-4 sm:p-6 opacity-0 pointer-events-none transition-all duration-300" role="dialog" aria-modal="true" aria-labelledby="modalTitle">
    <!-- Backdrop with subtle blur -->
    <div id="modalBackdrop" class="absolute inset-0 bg-navy-950/60 backdrop-blur-sm transition-opacity duration-300"></div>

    <!-- Modal Dialog Window -->
    <div class="relative w-full max-w-xl bg-white border border-canvas-border rounded-xl shadow-2xl p-6 sm:p-8 overflow-y-auto max-h-[90vh] z-10 transform scale-95 transition-transform duration-300">
        <!-- Close Button -->
        <button type="button" id="closeQuoteModal" class="absolute top-5 right-5 text-slate-400 hover:text-navy-800 p-1.5 rounded-lg hover:bg-slate-100 transition-colors duration-150 focus:outline-none" aria-label="Close dialog">
            <?php echo getIconSvg('x', 'w-5 h-5'); ?>
        </button>

        <!-- Header -->
        <div class="mb-6">
          <span class="inline-flex items-center gap-1.5 px-2.5 py-0.5 rounded-full text-xs font-semibold bg-electric-50 text-electric-700 border border-electric-200 mb-2">
            <span class="w-1.5 h-1.5 rounded-full bg-electric-600"></span> Fast 24-Hour Scope &amp; Estimate
          </span>
          <h3 id="modalTitle" class="text-2xl font-bold text-navy-800">Request Project Scope &amp; Pricing</h3>
          <p class="text-sm text-navy-500 mt-1">Tell us what you are building. Our senior solutions architect will review and share a tailored roadmap with transparent estimates.</p>
        </div>

        <!-- Form -->
        <form id="quoteModalForm" action="api/quote-submit.php" method="POST" class="space-y-4">
            <!-- Anti-Spam Honeypot Trap -->
            <div class="hidden" aria-hidden="true">
                <label for="quote_honey">Leave this field blank</label>
                <input type="text" id="quote_honey" name="quote_honey" tabindex="-1" autocomplete="off">
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                <div>
                    <label for="quoteName" class="form-label">Your Name <span class="text-brandOrange-600">*</span></label>
                    <input type="text" id="quoteName" name="client_name" required placeholder="e.g. Rahul Sharma" class="form-input">
                </div>
                <div>
                    <label for="quoteEmail" class="form-label">Business Email <span class="text-brandOrange-600">*</span></label>
                    <input type="email" id="quoteEmail" name="client_email" required placeholder="rahul@company.com" class="form-input">
                </div>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                <div>
                    <label for="quotePhone" class="form-label">Phone / WhatsApp</label>
                    <input type="tel" id="quotePhone" name="client_phone" placeholder="+91 98765 43210" class="form-input">
                </div>
                <div>
                    <label for="quoteService" class="form-label">Service Focus <span class="text-brandOrange-600">*</span></label>
                    <select id="quoteService" name="project_type" required class="form-select">
                        <option value="">Select Service Area</option>
                        <option value="Website Design & Development">Website Design &amp; Development</option>
                        <option value="Software & Applications">Software &amp; Applications</option>
                        <option value="AI & Automation">AI &amp; Automation</option>
                        <option value="Digital Marketing">Digital Marketing</option>
                        <option value="AI-Powered Marketing">AI-Powered Marketing</option>
                        <option value="Branding & Creative">Branding &amp; Creative</option>
                        <option value="E-Commerce Solutions">E-Commerce Solutions</option>
                        <option value="IT Consulting & Training">IT Consulting &amp; Training</option>
                        <option value="Full Digital Transformation">Full Digital Suite / Multiple</option>
                    </select>
                </div>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                <div>
                    <label for="quoteBudget" class="form-label">Estimated Budget</label>
                    <select id="quoteBudget" name="estimated_budget" class="form-select">
                        <option value="₹50k - ₹1.5 Lakh">₹50,000 – ₹1,50,000</option>
                        <option value="₹1.5 Lakh - ₹5 Lakh" selected>₹1,50,000 – ₹5,00,000</option>
                        <option value="₹5 Lakh - ₹15 Lakh">₹5,00,000 – ₹15,00,000</option>
                        <option value="₹15 Lakh+ / Enterprise">₹15,00,000+ (Enterprise)</option>
                        <option value="Flexible / Needs Advisory">Flexible / Needs Advisory</option>
                    </select>
                </div>
                <div>
                    <label for="quoteTimeline" class="form-label">Target Timeline</label>
                    <select id="quoteTimeline" name="timeline" class="form-select">
                        <option value="Immediate (< 1 month)">Immediate (&lt; 1 month)</option>
                        <option value="1 to 3 months" selected>1 to 3 months</option>
                        <option value="3 to 6 months">3 to 6 months</option>
                        <option value="Flexible Roadmap">Flexible Roadmap</option>
                    </select>
                </div>
            </div>

            <div>
                <label for="quoteDetails" class="form-label">Project Objectives &amp; Requirements</label>
                <textarea id="quoteDetails" name="details" rows="3" placeholder="Briefly describe your objectives, current tech stack, or specific features needed..." class="form-textarea"></textarea>
            </div>

            <!-- Status Feedback Container -->
            <div id="quoteModalFeedback" class="hidden text-sm p-3 rounded-btn"></div>

            <div class="pt-2 flex flex-col sm:flex-row items-center justify-between gap-3 border-t border-canvas-border mt-4">
                <span class="text-xs text-slate-500 flex items-center gap-1.5">
                    <?php echo getIconSvg('shield-check', 'w-4 h-4 text-emerald-600'); ?>
                    NDAs honored. 100% confidential.
                </span>
                <button type="submit" id="quoteModalSubmitBtn" class="btn-primary w-full sm:w-auto px-6 py-2.5">
                    <span>Submit &amp; Get Estimate</span>
                    <?php echo getIconSvg('arrow-right', 'w-4 h-4'); ?>
                </button>
            </div>

            <div class="pt-3 border-t border-canvas-border text-center">
                <a id="quoteModalWhatsAppBtn" href="<?php echo getWhatsAppUrl('Hi Yukt IT Solutions, I would like to request an instant project scope and pricing estimate.'); ?>" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-2 text-xs font-semibold text-emerald-700 hover:text-emerald-800 transition-colors">
                    <?php echo getIconSvg('whatsapp', 'w-4 h-4 text-emerald-600'); ?>
                    <span>Prefer an instant chat? Connect directly on WhatsApp (+91 72176 45059) &rarr;</span>
                </a>
            </div>
        </form>
    </div>
</div>
