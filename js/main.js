/* Manila Exhibition and Event Contractor - interactions */

(() => {
  const $ = (sel, ctx = document) => ctx.querySelector(sel);
  const $$ = (sel, ctx = document) => Array.from(ctx.querySelectorAll(sel));

  const yearEl = $('[data-year]');
  if (yearEl) yearEl.textContent = new Date().getFullYear();

  const header = $('[data-header]');
  const setHeaderState = () => {
    if (!header) return;
    header.classList.toggle('is-scrolled', window.scrollY > 40);
  };
  setHeaderState();
  window.addEventListener('scroll', setHeaderState, { passive: true });

  const menuToggle = $('[data-menu-toggle]');
  const primaryNav = $('[data-primary-nav]');
  if (menuToggle && primaryNav) {
    menuToggle.addEventListener('click', () => {
      const open = primaryNav.classList.toggle('is-open');
      menuToggle.setAttribute('aria-expanded', String(open));
      document.body.classList.toggle('menu-open', open);
    });

    primaryNav.addEventListener('click', (e) => {
      if (e.target.tagName === 'A' && primaryNav.classList.contains('is-open')) {
        primaryNav.classList.remove('is-open');
        menuToggle.setAttribute('aria-expanded', 'false');
        document.body.classList.remove('menu-open');
      }
    });
  }

  const revealEls = $$('.reveal, .reveal-stagger');
  if ('IntersectionObserver' in window) {
    const io = new IntersectionObserver((entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          entry.target.classList.add('is-visible');
          io.unobserve(entry.target);
        }
      });
    }, { rootMargin: '0px 0px -8% 0px', threshold: 0.05 });

    revealEls.forEach((el) => io.observe(el));
  } else {
    revealEls.forEach((el) => el.classList.add('is-visible'));
  }

  const filterBtns = $$('.filter-btn');
  const galleryItems = $$('[data-gallery-item]');
  filterBtns.forEach((btn) => {
    btn.addEventListener('click', () => {
      const filter = btn.dataset.filter;
      filterBtns.forEach((b) => {
        const active = b === btn;
        b.classList.toggle('is-active', active);
        b.setAttribute('aria-pressed', String(active));
      });

      galleryItems.forEach((item) => {
        const cats = (item.dataset.category || '').split(/\s+/);
        const show = filter === 'all' || cats.includes(filter);
        item.classList.toggle('is-hidden', !show);
      });
    });
  });

  const lightbox = $('[data-lightbox]');
  const lbImage = $('[data-lightbox-image]');
  const lbTag = $('[data-lightbox-tag]');
  const lbTitle = $('[data-lightbox-title]');
  const lbDescription = $('[data-lightbox-description]');
  const lbCounter = $('[data-lightbox-counter]');
  const lbClose = $('[data-lightbox-close]');
  const lbPrev = $('[data-lightbox-prev]');
  const lbNext = $('[data-lightbox-next]');
  const lbStage = $('.lightbox-stage');

  let lbItems = [];
  let lbIndex = 0;
  let lastFocusedElement = null;

  const itemFromElement = (item) => {
    const img = item.matches('img') ? item : item.querySelector('img');
    return {
      src: img ? img.src : '',
      alt: img ? (img.alt || '') : '',
      tag: item.dataset.tag || 'Project',
      title: item.dataset.title || 'Project',
      description: item.dataset.description || ''
    };
  };

  const visibleGalleryItems = () => galleryItems.filter((it) => !it.classList.contains('is-hidden'));

  const refreshLbItems = () => {
    lbItems = visibleGalleryItems().map(itemFromElement);
  };

  const refreshProjectItems = (project) => {
    const projectImages = $$(`[data-project-image][data-project="${project}"]`);
    lbItems = projectImages.map(itemFromElement);
  };

  const showLbAt = (index) => {
    if (!lbItems.length) return;
    lbIndex = ((index % lbItems.length) + lbItems.length) % lbItems.length;
    const item = lbItems[lbIndex];

    if (lbImage) {
      lbImage.src = item.src;
      lbImage.alt = item.alt;
    }
    if (lbTag) lbTag.textContent = item.tag;
    if (lbTitle) lbTitle.textContent = item.title;
    if (lbDescription) lbDescription.textContent = item.description;
    if (lbCounter) {
      lbCounter.textContent = `${String(lbIndex + 1).padStart(2, '0')} / ${String(lbItems.length).padStart(2, '0')}`;
    }
  };

  const openLightbox = () => {
    if (!lightbox || !lbItems.length) return;
    lastFocusedElement = document.activeElement;
    lightbox.classList.add('is-open');
    lightbox.setAttribute('aria-hidden', 'false');
    document.body.classList.add('lightbox-open');
    if (lbClose) lbClose.focus({ preventScroll: true });
  };

  const openLb = (item) => {
    refreshLbItems();
    const idx = visibleGalleryItems().indexOf(item);
    if (idx === -1) return;
    showLbAt(idx);
    openLightbox();
  };

  const openProjectLb = (project, fallbackEl) => {
    refreshProjectItems(project);
    if (!lbItems.length && fallbackEl) lbItems = [itemFromElement(fallbackEl)];
    showLbAt(0);
    openLightbox();
  };

  const closeLb = () => {
    if (!lightbox) return;
    lightbox.classList.remove('is-open');
    lightbox.setAttribute('aria-hidden', 'true');
    document.body.classList.remove('lightbox-open');
    if (lastFocusedElement && typeof lastFocusedElement.focus === 'function') {
      lastFocusedElement.focus({ preventScroll: true });
    }
  };

  galleryItems.forEach((item) => {
    item.setAttribute('role', 'button');
    item.setAttribute('aria-label', `Open ${item.dataset.title || 'project'} image preview`);
    item.addEventListener('click', () => openLb(item));
    item.tabIndex = 0;
    item.addEventListener('keydown', (e) => {
      if (e.key === 'Enter' || e.key === ' ') {
        e.preventDefault();
        openLb(item);
      }
    });
  });

  $$('[data-featured-project]').forEach((item) => {
    item.addEventListener('click', () => openProjectLb(item.dataset.project, item));
  });

  if (lbClose) lbClose.addEventListener('click', closeLb);
  if (lbPrev) lbPrev.addEventListener('click', () => showLbAt(lbIndex - 1));
  if (lbNext) lbNext.addEventListener('click', () => showLbAt(lbIndex + 1));
  if (lightbox) {
    lightbox.addEventListener('click', (e) => {
      if (e.target === lightbox || e.target === lbStage) closeLb();
    });
  }

  document.addEventListener('keydown', (e) => {
    if (!lightbox || !lightbox.classList.contains('is-open')) return;
    if (e.key === 'Escape') closeLb();
    if (e.key === 'ArrowLeft') showLbAt(lbIndex - 1);
    if (e.key === 'ArrowRight') showLbAt(lbIndex + 1);
  });

  const faqItems = $$('[data-faq-item]');
  faqItems.forEach((item) => {
    const trigger = item.querySelector('[data-faq-trigger]');
    if (!trigger) return;

    trigger.addEventListener('click', () => {
      const expanded = item.getAttribute('aria-expanded') === 'true';
      faqItems.forEach((other) => {
        if (other !== item) other.setAttribute('aria-expanded', 'false');
      });
      item.setAttribute('aria-expanded', String(!expanded));
    });
  });

  const quoteForms = $$('[data-quote-form]');
  quoteForms.forEach((form) => {
    const status = $('[data-form-status]', form);
    const submit = form.querySelector('[type="submit"]');
    const defaultSubmitText = submit ? submit.textContent : '';

    const setStatus = (message, type) => {
      if (!status) return;
      status.textContent = message;
      status.hidden = false;
      status.classList.toggle('is-success', type === 'success');
      status.classList.toggle('is-error', type === 'error');
    };

    form.addEventListener('submit', async (e) => {
      e.preventDefault();
      const required = form.querySelectorAll('[required]');
      let firstInvalid = null;
      let valid = true;

      required.forEach((field) => {
        const ok = field.value.trim() !== '';
        field.setAttribute('aria-invalid', String(!ok));
        if (!ok) {
          valid = false;
          if (!firstInvalid) firstInvalid = field;
        }
      });

      const email = form.querySelector('input[type="email"]');
      if (email && email.value.trim()) {
        const emailOk = /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email.value.trim());
        email.setAttribute('aria-invalid', String(!emailOk));
        if (!emailOk) {
          valid = false;
          if (!firstInvalid) firstInvalid = email;
        }
      }

      if (!valid) {
        setStatus('Please complete the required fields.', 'error');
        if (firstInvalid) firstInvalid.focus();
        return;
      }

      const endpoint = form.dataset.ajaxAction || (window.ManilaExhibitionForm && window.ManilaExhibitionForm.ajaxUrl) || form.action;
      const config = window.ManilaExhibitionForm || {};
      const parseJsonResponse = async (response) => {
        const rawText = await response.text();
        const cleanText = rawText.trim().replace(/^\uFEFF/, '');

        try {
          return JSON.parse(cleanText);
        } catch (err) {
          throw new Error(config.errorMessage || 'Sorry, the inquiry could not be sent. Please email admin@manilaexhibition.com directly.');
        }
      };

      if (submit) {
        submit.disabled = true;
        submit.textContent = 'Preparing...';
      }

      try {
        const noncePayload = new FormData();
        noncePayload.set('action', config.nonceAction || 'manila_project_inquiry_nonce');
        noncePayload.set('manila_ajax', '1');

        const nonceResponse = await fetch(endpoint, {
          method: 'POST',
          body: noncePayload,
          credentials: 'same-origin',
          cache: 'no-store',
          headers: {
            'X-Requested-With': 'XMLHttpRequest'
          }
        });
        const nonceResult = await parseJsonResponse(nonceResponse);

        if (!nonceResponse.ok || !nonceResult.success || !nonceResult.data || !nonceResult.data.nonce) {
          throw new Error(config.errorMessage || 'Sorry, the inquiry could not be sent. Please email admin@manilaexhibition.com directly.');
        }

        const nonceField = form.querySelector(`[name="${config.nonceField || 'manila_project_inquiry_nonce'}"]`);
        if (nonceField) nonceField.value = nonceResult.data.nonce;

        const payload = new FormData(form);
        payload.set('action', config.inquiryAction || 'manila_project_inquiry');
        payload.set('manila_ajax', '1');

        if (submit) submit.textContent = 'Sending...';

        const response = await fetch(endpoint, {
          method: 'POST',
          body: payload,
          credentials: 'same-origin',
          cache: 'no-store',
          headers: {
            'X-Requested-With': 'XMLHttpRequest'
          }
        });

        const result = await parseJsonResponse(response);

        if (!response.ok || !result.success) {
          throw new Error((result.data && result.data.message) || config.errorMessage || 'Sorry, the inquiry could not be sent. Please email admin@manilaexhibition.com directly.');
        }

        setStatus((result.data && result.data.message) || config.successMessage || 'Thank you for reaching out. Your inquiry has been received. Our team will review your project details and contact you within 1 to 2 business days to discuss your requirements, timeline, and next steps.', 'success');
        form.reset();
      } catch (err) {
        setStatus(err.message || config.errorMessage || 'Sorry, the inquiry could not be sent. Please email admin@manilaexhibition.com directly.', 'error');
      } finally {
        if (submit) {
          submit.disabled = false;
          submit.textContent = defaultSubmitText;
        }
      }
    });

    form.querySelectorAll('input, select, textarea').forEach((field) => {
      field.addEventListener('input', () => {
        if (field.value.trim()) field.setAttribute('aria-invalid', 'false');
      });
    });
  });
})();
