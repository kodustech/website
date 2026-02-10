/* ========================================
   KODUS WEBSITE — JAVASCRIPT
   ======================================== */

document.addEventListener('DOMContentLoaded', () => {

  /* --- Mobile nav toggle --- */
  const hamburger = document.getElementById('navHamburger');
  const nav = document.querySelector('.nav');

  hamburger?.addEventListener('click', () => {
    nav.classList.toggle('nav--open');
  });

  /* --- Hero tabs (Git / Terminal) --- */
  const heroTabs = document.querySelectorAll('.hero__tab');
  const heroPanels = document.querySelectorAll('.hero__tab-panel');

  heroTabs.forEach(tab => {
    tab.addEventListener('click', () => {
      const target = tab.dataset.tab;

      heroTabs.forEach(t => t.classList.remove('hero__tab--active'));
      heroPanels.forEach(p => p.classList.remove('hero__tab-panel--active'));

      tab.classList.add('hero__tab--active');
      document.getElementById(`tab-${target}`)?.classList.add('hero__tab-panel--active');
    });
  });

  /* --- Copy terminal command --- */
  const copyBtn = document.getElementById('copyCmd');
  copyBtn?.addEventListener('click', () => {
    const code = document.querySelector('.hero__terminal-code')?.textContent;
    if (!code) return;
    navigator.clipboard.writeText(code.trim()).then(() => {
      copyBtn.classList.add('copied');
      copyBtn.innerHTML = '<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>';
      setTimeout(() => {
        copyBtn.classList.remove('copied');
        copyBtn.innerHTML = '<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="9" y="9" width="13" height="13" rx="2" ry="2"/><path d="M5 15H4a2 2 0 01-2-2V4a2 2 0 012-2h9a2 2 0 012 2v1"/></svg>';
      }, 2000);
    });
  });

  /* --- VCR carousel --- */
  const vcrSlides = [
    {
      icon: '&#9997;',
      type: 'Aesthetic',
      text: 'You want a poem in every pull request.',
      status: 'Unnecessary',
      author: 'G. Malinosqui',
      file: 'FILE_01.DAT',
      iconColor: '#C9BBF2',
    },
    {
      icon: '&#36;',
      type: 'Financial',
      text: 'You prefer bundled pricing and don\'t care what drives your AI bill.',
      status: 'Opaque',
      author: 'G. Malinosqui',
      file: 'FILE_02.DAT',
      iconColor: '#42BE65',
    },
    {
      icon: '&#128274;',
      type: 'Vendor',
      text: 'You want to be locked into a single model provider forever.',
      status: 'Limiting',
      author: 'G. Malinosqui',
      file: 'FILE_03.DAT',
      iconColor: '#FA5867',
    },
    {
      icon: '&#128227;',
      type: 'Noise',
      text: 'You enjoy 50 auto-generated comments on every pull request.',
      status: 'Counterproductive',
      author: 'G. Malinosqui',
      file: 'FILE_04.DAT',
      iconColor: '#FF8B40',
    },
  ];

  let currentSlide = 0;
  const vcrText = document.getElementById('vcrText');
  const vcrType = document.getElementById('vcrType');
  const vcrIcon = document.getElementById('vcrIcon');
  const vcrStatus = document.getElementById('vcrStatus');
  const vcrAuthor = document.getElementById('vcrAuthor');
  const vcrFile = document.getElementById('vcrFile');
  const vcrContent = document.getElementById('vcrContent');
  const vcrCats = document.querySelectorAll('.vcr__cat');
  const vcrBtns = document.querySelectorAll('.vcr__btn[data-slide]');

  function updateVcr(index) {
    if (!vcrText) return;
    currentSlide = index;
    const slide = vcrSlides[index];

    // Glitch transition
    vcrContent.style.opacity = '0';
    vcrContent.style.transform = 'translateX(4px)';

    setTimeout(() => {
      vcrIcon.innerHTML = slide.icon;
      vcrIcon.style.color = slide.iconColor;
      vcrType.textContent = `Type: ${slide.type}`;
      vcrText.textContent = slide.text;
      vcrStatus.textContent = `Status: ${slide.status}`;
      vcrAuthor.textContent = `Author: ${slide.author}`;
      vcrFile.textContent = slide.file;

      vcrContent.style.opacity = '1';
      vcrContent.style.transform = 'translateX(0)';
    }, 150);

    vcrCats.forEach((cat, i) => cat.classList.toggle('vcr__cat--active', i === index));
  }

  vcrCats.forEach(cat => {
    cat.addEventListener('click', () => updateVcr(parseInt(cat.dataset.slide)));
  });
  vcrBtns.forEach(btn => {
    btn.addEventListener('click', () => updateVcr(parseInt(btn.dataset.slide)));
  });

  // Auto-rotate every 5 seconds
  setInterval(() => {
    updateVcr((currentSlide + 1) % vcrSlides.length);
  }, 5000);

  /* --- Bug parallax on scroll --- */
  const bugs = document.querySelectorAll('.hero__bug');
  const bugBaseTransforms = [];
  bugs.forEach(bug => {
    bugBaseTransforms.push(bug.style.transform || '');
  });

  /* --- Header scroll effect + bug parallax --- */
  const header = document.getElementById('header');

  window.addEventListener('scroll', () => {
    const scrollY = window.scrollY;

    if (scrollY > 100) {
      header.style.borderBottomColor = 'var(--color-card-lv2)';
    } else {
      header.style.borderBottomColor = 'transparent';
    }

    // Parallax bugs
    bugs.forEach((bug, i) => {
      const speed = parseFloat(bug.dataset.speed) || 0.3;
      const y = scrollY * speed;
      bug.style.transform = `${bugBaseTransforms[i]} translateY(${y}px)`;
    });
  }, { passive: true });

  /* --- Fade-in on scroll --- */
  const observerOptions = {
    root: null,
    rootMargin: '0px 0px -80px 0px',
    threshold: 0.1,
  };

  const fadeObserver = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('is-visible');
        fadeObserver.unobserve(entry.target);
      }
    });
  }, observerOptions);

  document.querySelectorAll('.vcr, .cartridge, .basics__window, .retro-window, .vhs, .faq__terminal, .ask-llm__console')
    .forEach(el => {
      el.classList.add('fade-in');
      fadeObserver.observe(el);
    });

  /* --- VHS shelf carousel --- */
  const vhsShelf = document.getElementById('vhsShelf');
  const vhsTrack = document.getElementById('vhsTrack');
  const vhsPrev = document.getElementById('vhsPrev');
  const vhsNext = document.getElementById('vhsNext');
  const vhsCounterCurrent = document.getElementById('vhsCounterCurrent');
  const vhsCounterTotal = document.getElementById('vhsCounterTotal');

  if (vhsShelf && vhsTrack) {
    const vhsTapes = vhsShelf.querySelectorAll('.vhs');
    const tapeCount = vhsTapes.length;
    let vhsOffset = 0;

    if (vhsCounterTotal) {
      vhsCounterTotal.textContent = String(tapeCount).padStart(3, '0');
    }

    function getVisibleCount() {
      const trackWidth = vhsTrack.offsetWidth;
      const tapeWidth = vhsTapes[0]?.offsetWidth || 280;
      const gap = 20;
      return Math.max(1, Math.floor((trackWidth + gap) / (tapeWidth + gap)));
    }

    function updateVhsShelf() {
      const tapeWidth = vhsTapes[0]?.offsetWidth || 280;
      const gap = 20;
      const shift = vhsOffset * (tapeWidth + gap);
      vhsShelf.style.transform = `translateX(-${shift}px)`;
      if (vhsCounterCurrent) {
        vhsCounterCurrent.textContent = String(vhsOffset + 1).padStart(3, '0');
      }
    }

    vhsNext?.addEventListener('click', () => {
      const visible = getVisibleCount();
      const maxOffset = Math.max(0, tapeCount - visible);
      vhsOffset = Math.min(vhsOffset + 1, maxOffset);
      updateVhsShelf();
    });

    vhsPrev?.addEventListener('click', () => {
      vhsOffset = Math.max(vhsOffset - 1, 0);
      updateVhsShelf();
    });
  }

  /* --- Basics file tree --- */
  const basicsFeatures = [
    {
      file: 'arch_guard.mod',
      title: 'Architectural Guard',
      tag: 'FREE',
      desc: 'Enforces architectural patterns and prevents spaghetti code.',
      detail: 'Like a strict librarian for your codebase. This module scans every pull request to ensure it adheres to your defined architectural boundaries. It detects circular dependencies, illegal imports, and layer violations before they arise.',
    },
    {
      file: 'smart_review.mod',
      title: 'Smart Review',
      tag: 'CORE',
      desc: 'Context-aware code review that understands your intent.',
      detail: 'Goes beyond syntax checking. Smart Review reads the PR description, understands the intent behind the change, and provides feedback that actually matters — no generic "add a comment here" noise.',
    },
    {
      file: 'pr_summary.mod',
      title: 'PR Summary',
      tag: 'FREE',
      desc: 'Auto-generated summaries that save reviewers time.',
      detail: 'Every PR gets a concise, human-readable summary covering what changed, why, and what reviewers should focus on. It groups changes by concern and highlights risk areas so your team reviews faster.',
    },
    {
      file: 'auto_fix.mod',
      title: 'Auto Fix',
      tag: 'PRO',
      desc: 'One-click fixes for common code issues.',
      detail: 'When Kodus flags an issue, it also suggests a concrete fix. Click to apply — no copy-paste, no context switching. Supports formatting, import ordering, naming conventions, and simple refactors.',
    },
    {
      file: 'code_quality.mod',
      title: 'Code Quality',
      tag: 'CORE',
      desc: 'Tracks quality metrics across every pull request.',
      detail: 'Monitors complexity, duplication, test coverage deltas, and coding standards per PR. Over time it builds a health dashboard so you can spot trends before they become tech debt.',
    },
  ];

  const basicsTitle = document.getElementById('basicsTitle');
  const basicsTag = document.getElementById('basicsTag');
  const basicsDesc = document.getElementById('basicsDesc');
  const basicsDetailText = document.getElementById('basicsDetailText');
  const basicsTab = document.getElementById('basicsTab');
  const basicsFiles = document.querySelectorAll('.basics__tree-file');

  function updateBasics(index) {
    const feature = basicsFeatures[index];
    if (!feature || !basicsTitle) return;

    basicsFiles.forEach((f, i) => f.classList.toggle('basics__tree-file--active', i === index));
    basicsTab.textContent = feature.file;
    basicsTitle.textContent = feature.title;
    basicsTag.textContent = feature.tag;
    basicsDesc.textContent = feature.desc;
    basicsDetailText.textContent = feature.detail;
  }

  basicsFiles.forEach(file => {
    file.addEventListener('click', () => {
      updateBasics(parseInt(file.dataset.feature));
    });
  });

  /* --- FAQ accordion --- */
  document.querySelectorAll('.faq__question').forEach(btn => {
    btn.addEventListener('click', () => {
      const item = btn.closest('.faq__item');
      const wasOpen = item.classList.contains('faq__item--open');

      // Close all
      document.querySelectorAll('.faq__item--open').forEach(el => el.classList.remove('faq__item--open'));

      // Toggle clicked
      if (!wasOpen) item.classList.add('faq__item--open');
    });
  });

  /* --- Cartridge modals --- */
  const modalData = {
    'modal-free-tier': {
      title: 'Generous Free Tier',
      led: 'green',
      desc: 'Start reviewing code for free — no credit card, no catch. Our free tier gives you enough reviews to evaluate Kodus on real pull requests before committing. We believe you should try before you buy.',
    },
    'modal-agnostic': {
      title: 'Model Agnostic',
      led: 'blue',
      desc: 'Use Claude, GPT-4, Gemini, Llama, or any model you want. Kodus doesn\'t lock you into a single provider — bring your own API keys, switch models per repo, and always stay in control of cost and quality.',
    },
    'modal-markup': {
      title: 'Zero Markup',
      led: 'red',
      desc: 'We don\'t add markup on LLM calls. You pay the model provider directly at their listed price. No hidden fees, no per-seat multipliers on API costs. What you see is what you pay.',
    },
    'modal-configs': {
      title: 'Extensible Configs',
      led: 'blue',
      desc: 'Customize review rules, severity levels, ignore patterns, and architectural guards per repository. Configs live in your repo as code — version controlled, reviewable, and shareable across teams.',
    },
  };

  const overlay = document.getElementById('modalOverlay');
  const modalTitle = document.getElementById('modalTitle');
  const modalDesc = document.getElementById('modalDesc');
  const modalLed = document.getElementById('modalLed');
  const modalClose = document.getElementById('modalClose');

  function openModal(key) {
    const data = modalData[key];
    if (!data) return;
    modalTitle.textContent = data.title;
    modalDesc.textContent = data.desc;
    modalLed.className = `cartridge__led cartridge__led--${data.led}`;
    overlay.classList.add('is-open');
  }

  function closeModal() {
    overlay.classList.remove('is-open');
  }

  document.querySelectorAll('.cartridge[data-modal]').forEach(btn => {
    btn.addEventListener('click', () => openModal(btn.dataset.modal));
  });

  modalClose?.addEventListener('click', closeModal);
  overlay?.addEventListener('click', (e) => {
    if (e.target === overlay) closeModal();
  });
  document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape') closeModal();
  });
});
