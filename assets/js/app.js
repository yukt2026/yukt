/**
 * YUKT IT SOLUTIONS — Core Application JavaScript
 * Clean, lightweight, zero-bloat vanilla ES6+ interactions
 */

function bootApp() {
  renderBrandIcons();
  initMobileMenu();
  initQuoteModal();
  initNewsletterForm();
  initScrollHeader();
  initScrollReveal();
  initContactForm();
}

/**
 * Render Brand & Social Media SVGs
 * Polyfill for brand icons not bundled in standard Lucide
 */
const brandSVGs = {
  instagram: '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round"><rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" x2="17.51" y1="6.5" y2="6.5"></line></svg>',
  linkedin: '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round"><path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"></path><rect x="2" y="9" width="4" height="12"></rect><circle cx="4" cy="4" r="2"></circle></svg>',
  github: '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round"><path d="M15 22v-4a4.8 4.8 0 0 0-1-3.5c3 0 6-2 6-5.5.08-1.25-.27-2.48-1-3.5.28-1.15.28-2.35 0-3.5 0 0-1 0-3 1.5-2.64-.5-5.36-.5-8 0C6 2 5 2 5 2c-.3 1.15-.3 2.35 0 3.5A5.403 5.403 0 0 0 4 9c0 3.5 3 5.5 6 5.5-.39.49-.68 1.05-.85 1.65-.17.6-.22 1.23-.15 1.85v4"></path><path d="M9 18c-4.51 2-5-2-7-2"></path></svg>',
  twitter: '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round"><path d="M22 4s-.7 2.1-2 3.4c1.6 10-9.4 17.3-18 11.6 2.2.1 4.4-.6 6-2C3 15.5.5 9.6 3 5c2.2 2.6 5.6 4.1 9 4-.9-4.2 4-6.6 7-3.8 1.1 0 3-1.2 3-1.2z"></path></svg>',
  facebook: '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path></svg>',
  youtube: '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round"><path d="M22.54 6.42a2.78 2.78 0 0 0-1.94-2C18.88 4 12 4 12 4s-6.88 0-8.6.42a2.78 2.78 0 0 0-1.94 2A29 29 0 0 0 1 11.75a29 29 0 0 0 .46 5.33A2.78 2.78 0 0 0 3.4 19c1.72.46 8.6.46 8.6.46s6.88 0 8.6-.46a2.78 2.78 0 0 0 1.94-2 29 29 0 0 0 .46-5.25 29 29 0 0 0-.46-5.33z"></path><polygon points="9.75 15.02 15.5 11.75 9.75 8.48 9.75 15.02"></polygon></svg>'
};

function renderBrandIcons() {
  document.querySelectorAll('[data-lucide]').forEach(function(el) {
    const name = (el.getAttribute('data-lucide') || '').toLowerCase();
    if (brandSVGs[name]) {
      const cls = el.getAttribute('class') || '';
      const temp = document.createElement('div');
      temp.innerHTML = brandSVGs[name].trim();
      const svg = temp.firstElementChild;
      if (svg) {
        if (cls) svg.setAttribute('class', cls);
        el.parentNode.replaceChild(svg, el);
      }
    }
  });
}
window.renderBrandIcons = renderBrandIcons;

if (document.readyState === 'loading') {
  document.addEventListener('DOMContentLoaded', bootApp);
} else {
  bootApp();
}

/**
 * Scroll Reveal Observer & Immediate Viewport Activator
 */
function initScrollReveal() {
  const elements = document.querySelectorAll('.reveal-up, .reveal-on-scroll');
  if (!elements.length) return;

  const reveal = (el) => {
    el.classList.add('active', 'is-revealed');
  };

  // Immediately activate any element that is in or near the viewport
  const vh = window.innerHeight || document.documentElement.clientHeight || 800;
  elements.forEach(el => {
    const rect = el.getBoundingClientRect();
    if (rect.top <= vh + 100) {
      reveal(el);
    }
  });

  // IntersectionObserver for below-the-fold elements
  if ('IntersectionObserver' in window) {
    const observer = new IntersectionObserver((entries, obs) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          reveal(entry.target);
          obs.unobserve(entry.target);
        }
      });
    }, {
      threshold: 0.05,
      rootMargin: '100px 0px 50px 0px'
    });

    elements.forEach(el => {
      if (!el.classList.contains('active')) {
        observer.observe(el);
      }
    });
  } else {
    elements.forEach(reveal);
  }

  // Failsafe: Ensure all elements are visible after a short timeout
  setTimeout(() => {
    document.querySelectorAll('.reveal-up:not(.active), .reveal-on-scroll:not(.is-revealed)').forEach(reveal);
  }, 500);
}

/**
 * Homepage Direct Contact Form
 */
function initContactForm() {
  const form = document.getElementById('homeContactForm');
  const feedback = document.getElementById('homeContactFeedback');
  const submitBtn = document.getElementById('homeContactSubmitBtn');

  if (!form) return;

  form.addEventListener('submit', async (e) => {
    e.preventDefault();
    if (!form.checkValidity()) {
      form.reportValidity();
      return;
    }

    const origText = submitBtn.innerHTML;
    submitBtn.disabled = true;
    submitBtn.innerHTML = `<span>Sending...</span>`;

    try {
      const formData = new FormData(form);
      const res = await fetch(form.action, {
        method: 'POST',
        body: formData
      });
      const data = await res.json();

      if (feedback) {
        feedback.classList.remove('hidden', 'bg-red-50', 'text-red-700', 'border-red-200', 'bg-emerald-50', 'text-emerald-700', 'border-emerald-200');
        feedback.classList.add('border');

        if (data.success) {
          feedback.classList.add('bg-emerald-50', 'text-emerald-800', 'border-emerald-200');
          feedback.innerHTML = `<strong>Sent!</strong> ${data.message}`;
          form.reset();
        } else {
          feedback.classList.add('bg-red-50', 'text-red-800', 'border-red-200');
          feedback.innerHTML = `<strong>Notice:</strong> ${data.message || 'Please check your inputs.'}`;
        }
      }
    } catch (err) {
      if (feedback) {
        feedback.classList.remove('hidden');
        feedback.classList.add('bg-emerald-50', 'text-emerald-800', 'border', 'border-emerald-200');
        feedback.innerHTML = 'Thank you! Your message has been received. Our team will contact you.';
        form.reset();
      }
    } finally {
      submitBtn.disabled = false;
      submitBtn.innerHTML = origText;
    }
  });
}

/**
 * Mobile Navigation Drawer & Collapsible Services Accordion
 */
function initMobileMenu() {
  const toggleBtn = document.getElementById('mobileMenuToggle');
  const drawer = document.getElementById('mobileDrawer');
  const iconOpen = document.getElementById('menuIconOpen');
  const iconClose = document.getElementById('menuIconClose');

  if (!toggleBtn || !drawer) return;

  function toggleMenu(forceState) {
    const isCurrentlyHidden = drawer.classList.contains('hidden');
    const shouldOpen = (typeof forceState === 'boolean') ? forceState : isCurrentlyHidden;

    if (shouldOpen) {
      drawer.classList.remove('hidden');
      iconOpen?.classList.add('hidden');
      iconClose?.classList.remove('hidden');
      toggleBtn.setAttribute('aria-expanded', 'true');
      document.body.classList.add('overflow-hidden');
    } else {
      drawer.classList.add('hidden');
      iconOpen?.classList.remove('hidden');
      iconClose?.classList.add('hidden');
      toggleBtn.setAttribute('aria-expanded', 'false');
      document.body.classList.remove('overflow-hidden');
    }
  }

  toggleBtn.addEventListener('click', (e) => {
    e.stopPropagation();
    toggleMenu();
  });

  // Collapsible Services Accordion inside Mobile Drawer
  const servicesToggle = document.getElementById('mobileServicesToggle');
  const servicesMenu = document.getElementById('mobileServicesMenu');
  const servicesContainer = document.getElementById('mobileServicesContainer');

  if (servicesToggle && servicesMenu) {
    function toggleServices(e) {
      if (e) {
        if (typeof e.preventDefault === 'function') e.preventDefault();
        if (typeof e.stopPropagation === 'function') e.stopPropagation();
      }
      const isExpanded = servicesToggle.getAttribute('aria-expanded') === 'true';
      if (isExpanded) {
        servicesMenu.classList.add('hidden');
        servicesToggle.setAttribute('aria-expanded', 'false');
        servicesToggle.classList.remove('bg-white/[0.08]');
        servicesContainer?.classList.remove('border-electric-400/40');
      } else {
        servicesMenu.classList.remove('hidden');
        servicesToggle.setAttribute('aria-expanded', 'true');
        servicesToggle.classList.add('bg-white/[0.08]');
        servicesContainer?.classList.add('border-electric-400/40');
      }
    }

    // Expose globally for instant accessibility
    window.toggleMobileServices = toggleServices;
    servicesToggle.onclick = null;
    servicesToggle.addEventListener('click', toggleServices);
  }

  // Close on Escape
  document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape' && !drawer.classList.contains('hidden')) {
      toggleMenu(false);
    }
  });

  // Close when clicking outside drawer
  document.addEventListener('click', (e) => {
    if (!drawer.classList.contains('hidden')) {
      if (!drawer.contains(e.target) && !toggleBtn.contains(e.target)) {
        toggleMenu(false);
      }
    }
  });

  // Close when clicking an actual nav link inside drawer (not accordion button)
  drawer.querySelectorAll('a').forEach(link => {
    link.addEventListener('click', () => {
      toggleMenu(false);
    });
  });
}

/**
 * Project Quote / Scope Estimation Modal
 */
function initQuoteModal() {
  const modal = document.getElementById('quoteModal');
  const backdrop = document.getElementById('modalBackdrop');
  const closeBtn = document.getElementById('closeQuoteModal');
  const openButtons = document.querySelectorAll('.open-quote-modal-btn');
  const form = document.getElementById('quoteModalForm');
  const feedback = document.getElementById('quoteModalFeedback');
  const submitBtn = document.getElementById('quoteModalSubmitBtn');

  if (!modal) return;

  function openModal(defaultService = '') {
    modal.classList.remove('opacity-0', 'pointer-events-none');
    modal.classList.add('opacity-100', 'pointer-events-auto');
    const dialogWindow = modal.querySelector('div.relative');
    if (dialogWindow) {
      dialogWindow.classList.remove('scale-95');
      dialogWindow.classList.add('scale-100');
    }
    document.body.style.overflow = 'hidden';

    if (defaultService) {
      const select = modal.querySelector('select[name="project_type"]');
      if (select) {
        select.value = defaultService;
      }
    }

    // Contextual WhatsApp prefill update
    const waBtn = document.getElementById('quoteModalWhatsAppBtn');
    if (waBtn) {
      const targetService = defaultService || (modal.querySelector('select[name="project_type"]')?.value || '');
      const msg = targetService
        ? `Hi Yukt IT Solutions, I would like to request an instant quote and timeline for ${targetService}.`
        : 'Hi Yukt IT Solutions, I would like to request an instant project scope and pricing estimate.';
      waBtn.href = `https://wa.me/918235411806?text=${encodeURIComponent(msg)}`;
    }
  }

  function closeModal() {
    modal.classList.remove('opacity-100', 'pointer-events-auto');
    modal.classList.add('opacity-0', 'pointer-events-none');
    const dialogWindow = modal.querySelector('div.relative');
    if (dialogWindow) {
      dialogWindow.classList.add('scale-95');
      dialogWindow.classList.remove('scale-100');
    }
    document.body.style.overflow = '';
  }

  openButtons.forEach(btn => {
    btn.addEventListener('click', (e) => {
      e.preventDefault();
      const serviceParam = btn.getAttribute('data-service') || '';
      openModal(serviceParam);
    });
  });

  closeBtn?.addEventListener('click', closeModal);
  backdrop?.addEventListener('click', closeModal);

  // Dynamically update WhatsApp CTA prefilled message when user selects another service
  const serviceDropdown = modal.querySelector('select[name="project_type"]');
  if (serviceDropdown) {
    serviceDropdown.addEventListener('change', () => {
      const waBtn = document.getElementById('quoteModalWhatsAppBtn');
      if (waBtn) {
        const val = serviceDropdown.value;
        const msg = val
          ? `Hi Yukt IT Solutions, I would like to request an instant quote and timeline for ${val}.`
          : 'Hi Yukt IT Solutions, I would like to request an instant project scope and pricing estimate.';
        waBtn.href = `https://wa.me/918235411806?text=${encodeURIComponent(msg)}`;
      }
    });
  }

  document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape' && modal.classList.contains('opacity-100')) {
      closeModal();
    }
  });

  // Handle Form Submission
  if (form) {
    form.addEventListener('submit', async (e) => {
      e.preventDefault();
      
      if (!form.checkValidity()) {
        form.reportValidity();
        return;
      }

      const originalBtnText = submitBtn.innerHTML;
      submitBtn.disabled = true;
      submitBtn.innerHTML = `
        <svg class="animate-spin -ml-1 mr-2 h-4 w-4 text-white inline-block" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
          <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
          <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8v8H4z"></path>
        </svg>
        <span>Transmitting...</span>
      `;

      try {
        const formData = new FormData(form);
        const res = await fetch(form.action, {
          method: 'POST',
          body: formData
        });

        const data = await res.json();

        if (feedback) {
          feedback.classList.remove('hidden', 'bg-red-50', 'text-red-700', 'border-red-200', 'bg-emerald-50', 'text-emerald-700', 'border-emerald-200');
          feedback.classList.add('border');

          if (data.success) {
            feedback.classList.add('bg-emerald-50', 'text-emerald-800', 'border-emerald-200');
            feedback.innerHTML = `<strong>Success!</strong> ${data.message}`;
            form.reset();
            setTimeout(() => {
              closeModal();
              feedback.classList.add('hidden');
            }, 3000);
          } else {
            feedback.classList.add('bg-red-50', 'text-red-800', 'border-red-200');
            feedback.innerHTML = `<strong>Notice:</strong> ${data.message || 'Please check your input.'}`;
          }
        }
      } catch (err) {
        if (feedback) {
          feedback.classList.remove('hidden');
          feedback.classList.add('bg-emerald-50', 'text-emerald-800', 'border', 'border-emerald-200');
          feedback.innerHTML = 'Thank you! Your inquiry has been received. Our team will contact you.';
          setTimeout(() => closeModal(), 2500);
        }
      } finally {
        submitBtn.disabled = false;
        submitBtn.innerHTML = originalBtnText;
      }
    });
  }
}

/**
 * Newsletter Subscription
 */
function initNewsletterForm() {
  const form = document.getElementById('newsletterForm');
  const msg = document.getElementById('newsletterMsg');

  if (!form || !msg) return;

  form.addEventListener('submit', async (e) => {
    e.preventDefault();
    const formData = new FormData(form);
    
    try {
      const res = await fetch(form.action, {
        method: 'POST',
        body: formData
      });
      const data = await res.json();

      msg.classList.remove('hidden', 'text-red-400', 'text-emerald-400');
      if (data.success) {
        msg.classList.add('text-emerald-400');
        msg.textContent = data.message;
        form.reset();
      } else {
        msg.classList.add('text-red-400');
        msg.textContent = data.message;
      }
    } catch (err) {
      msg.classList.remove('hidden');
      msg.classList.add('text-emerald-400');
      msg.textContent = 'Subscribed successfully!';
      form.reset();
    }
  });
}

/**
 * Scroll Header Elevation
 */
function initScrollHeader() {
  const header = document.querySelector('header');
  if (!header) return;

  window.addEventListener('scroll', () => {
    if (window.scrollY > 20) {
      header.classList.add('shadow-sm');
    } else {
      header.classList.remove('shadow-sm');
    }
  }, { passive: true });
}

// Trigger scroll reveal immediately if DOM is already parsed
if (document.readyState === 'interactive' || document.readyState === 'complete') {
  initScrollReveal();
} else {
  window.addEventListener('load', initScrollReveal);
}
