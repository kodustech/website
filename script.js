/* ========================================
   KODUS WEBSITE — JAVASCRIPT
   ======================================== */

document.addEventListener('DOMContentLoaded', () => {

  /* --- GitHub stars (real-time) --- */
  fetch('https://api.github.com/repos/kodustech/kodus-ai')
    .then(res => res.json())
    .then(data => {
      const el = document.getElementById('ghStars');
      if (el && typeof data.stargazers_count === 'number') {
        el.textContent = data.stargazers_count.toLocaleString();
      }
    })
    .catch(() => {});

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
      file: 'FILE_01.DAT',
      iconColor: '#C9BBF2',
      image: 'assets/img/kody-poeta.png',
    },
    {
      icon: '&#36;',
      type: 'Financial',
      text: 'You prefer bundled pricing and don\'t care what drives your AI bill.',
      status: 'Opaque',
      file: 'FILE_02.DAT',
      iconColor: '#42BE65',
      image: 'assets/img/kody-money.png',
    },
    {
      icon: '&#128274;',
      type: 'Vendor',
      text: 'You want to be locked into a single model provider forever.',
      status: 'Limiting',
      file: 'FILE_03.DAT',
      iconColor: '#FA5867',
      image: 'assets/img/kody-good-vibes.png',
    },
    {
      icon: '&#128227;',
      type: 'Noise',
      text: 'You enjoy 50 auto-generated comments on every pull request.',
      status: 'Counterproductive',
      file: 'FILE_04.DAT',
      iconColor: '#FF8B40',
      image: 'assets/img/kody-noise.png',
    },
  ];

  let currentSlide = 0;
  const vcrText = document.getElementById('vcrText');
  const vcrType = document.getElementById('vcrType');
  const vcrIcon = document.getElementById('vcrIcon');
  const vcrStatus = document.getElementById('vcrStatus');
  const vcrFile = document.getElementById('vcrFile');
  const vcrContent = document.getElementById('vcrContent');
  const vcrImage = document.getElementById('vcrImage');
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
      // Icon removed
      vcrText.textContent = slide.text;
      vcrFile.textContent = slide.file;

      if (slide.image) {
        vcrImage.src = slide.image;
        vcrImage.style.display = 'block';
      } else {
        vcrImage.style.display = 'none';
        vcrImage.src = '';
      }

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
  const bugs = document.querySelectorAll('.site-bug');
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
      title: 'Codebase Context',
      // tag: 'FREE', // Removed
      file: 'codebase_context.mod',
      desc: 'Deep understanding of your entire project structure and logic.',
      detail: 'Kodus doesn\'t just look at the diff. It analyzes your entire repository to understand dependencies, architectural patterns, and business logic, providing reviews that truly understand the context of your changes.',
    },
    {
      title: 'You set the rules',
      // tag: 'CONTROL', // Removed
      file: 'set_rules.mod',
      desc: 'Teams define their own review standards.',
      detail: 'Create custom review guidelines in plain language or use rules from the built-in library. Reviews consistently follow the standards defined by your team.',
    },
    {
      title: 'Rule Sync',
      // tag: 'SYNC', // Removed
      file: 'sync_rule.mod',
      desc: 'Sync your rules straight from the IDE.',
      detail: 'Kody automatically detects rule files from popular AI tools such as Cursor, Copilot, Claude, Windsurf, and others to keep the same review standards your team already follows.',
    },
    {
      title: 'Bring your business context',
      // tag: 'EXTENSIBLE', // Removed
      file: 'plugins_mcps.mod',
      desc: 'Extend functionality with Model Context Protocol servers.',
      detail: 'Connect tools like Jira, Notion, or Linear so Kody can understand specs, tasks, and requirements while reviewing your code.',
    },
    {
      title: 'Track technical debt',
      // tag: 'INSIGHTS', // Removed
      file: 'technical_debt.mod',
      desc: 'Monitor and manage technical debt over time.',
      detail: 'Kodus automatically turns unimplemented suggestions into issues, helping your team visualize and reduce technical debt over time.',
    },
    {
      title: 'Accelerate your delivery',
      // tag: 'OVERVIEW', // Removed
      file: 'cockpit.mod',
      desc: 'Centralized dashboard for all your repository insights.',
      detail: 'Monitor deploy frequency, cycle time, bug ratio and PR sizes to keep your team shipping fast — and safely.',
    },
    {
      title: 'Privacy & Security',
      // tag: 'ENTERPRISE', // Removed
      file: 'privacy_security.mod',
      desc: 'Enterprise-grade security ensuring your code stays safe.',
      detail: 'Source code is never stored and is never used to train models. All data is encrypted in transit and at rest. Kodus supports SOC 2 compliance and offers self-hosted runners, so your IP can remain entirely within your own infrastructure.',
    }
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
    // basicsTag.textContent = feature.tag; // Removed
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
