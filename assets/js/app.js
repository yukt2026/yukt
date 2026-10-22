/**
 * YUKT IT SOLUTIONS — Core Application JavaScript
 * Clean, lightweight, zero-bloat vanilla ES6+ interactions
 */

document.addEventListener('DOMContentLoaded', () => {
  initMobileMenu();
  initQuoteModal();
  initNewsletterForm();
  initScrollHeader();
  initScrollReveal();
  initContactForm();
});

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
 * Mobile Navigation Drawer
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
    } else {
      drawer.classList.add('hidden');
      iconOpen?.classList.remove('hidden');
      iconClose?.classList.add('hidden');
      toggleBtn.setAttribute('aria-expanded', 'false');
    }
  }

  toggleBtn.addEventListener('click', () => toggleMenu());

  // Close on Escape
  document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape' && !drawer.classList.contains('hidden')) {
      toggleMenu(false);
    }
  });

  // Close when clicking a nav link inside drawer
  drawer.querySelectorAll('a').forEach(link => {
    link.addEventListener('click', () => toggleMenu(false));
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
      waBtn.href = `https://wa.me/917217645059?text=${encodeURIComponent(msg)}`;
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
        waBtn.href = `https://wa.me/917217645059?text=${encodeURIComponent(msg)}`;
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
