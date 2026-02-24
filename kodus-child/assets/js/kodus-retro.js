/* ========================================
   KODUS WEBSITE — JAVASCRIPT
   ======================================== */

document.addEventListener('DOMContentLoaded', () => {

  /* --- GitHub stars (cached via WP) --- */
  const el = document.getElementById('ghStars');
  if (el && typeof kodusData !== 'undefined' && kodusData.ghStars > 0) {
    el.textContent = Number(kodusData.ghStars).toLocaleString();
  }

  /* --- Mobile nav toggle --- */
  const hamburger = document.getElementById('navHamburger');
  const nav = document.querySelector('.nav');

  hamburger?.addEventListener('click', () => {
    nav.classList.toggle('nav--open');
    // Position actions below links
    if (nav.classList.contains('nav--open')) {
      requestAnimationFrame(() => {
        const links = nav.querySelector('.nav__links');
        const actions = nav.querySelector('.nav__actions');
        if (links && actions) {
          actions.style.top = (links.offsetTop + links.offsetHeight) + 'px';
        }
      });
    }
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

  /* --- Benchmark tabs (Detailed Results) --- */
  document.querySelectorAll('.bench__table-section').forEach(section => {
    const tabs = section.querySelectorAll('.bench__tab');
    const panels = section.querySelectorAll('.bench__tab-panel');
    if (!tabs.length || !panels.length) return;

    tabs.forEach(tab => {
      tab.addEventListener('click', (event) => {
        event.preventDefault();
        const targetId = `tab-${tab.dataset.tab}`;
        const targetPanel = section.querySelector(`#${targetId}`);
        if (!targetPanel) return;

        tabs.forEach(t => t.classList.remove('bench__tab--active'));
        panels.forEach(p => p.classList.remove('bench__tab-panel--active'));

        tab.classList.add('bench__tab--active');
        targetPanel.classList.add('bench__tab-panel--active');
      });
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
      image: '/wp-content/themes/kodus-child/assets/img/kody-poeta.webp',
    },
    {
      icon: '&#36;',
      type: 'Financial',
      text: 'You prefer bundled pricing and don\'t care what drives your AI bill.',
      status: 'Opaque',
      file: 'FILE_02.DAT',
      iconColor: '#42BE65',
      image: '/wp-content/themes/kodus-child/assets/img/kody-money.webp',
    },
    {
      icon: '&#128274;',
      type: 'Vendor',
      text: 'You want to be locked into a single model provider forever.',
      status: 'Limiting',
      file: 'FILE_03.DAT',
      iconColor: '#FA5867',
      image: '/wp-content/themes/kodus-child/assets/img/kody-good-vibes.webp',
    },
    {
      icon: '&#128227;',
      type: 'Noise',
      text: 'You enjoy 50 auto-generated comments on every pull request.',
      status: 'Counterproductive',
      file: 'FILE_04.DAT',
      iconColor: '#FF8B40',
      image: '/wp-content/themes/kodus-child/assets/img/kody-noise.webp',
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
  let vcrAutoRotateId = null;

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

  function stopVcrAutoRotate() {
    if (vcrAutoRotateId !== null) {
      clearInterval(vcrAutoRotateId);
      vcrAutoRotateId = null;
    }
  }

  vcrCats.forEach(cat => {
    cat.addEventListener('click', () => {
      stopVcrAutoRotate();
      updateVcr(parseInt(cat.dataset.slide, 10));
    });
  });
  vcrBtns.forEach(btn => {
    btn.addEventListener('click', () => {
      stopVcrAutoRotate();
      updateVcr(parseInt(btn.dataset.slide, 10));
    });
  });

  // Auto-rotate every 5 seconds
  vcrAutoRotateId = setInterval(() => {
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

  document.querySelectorAll('.vcr, .cartridge, .basics__window, .retro-window, .vhs, .faq__terminal, .ask-llm__console, .hero__kody-paws, .pricing__card, .token-info__cartridge, .calculator__window, .roi-hero__window, .roi__window, .cases__card, .roi-testimonials__card, .roi-cta__window, .cust-featured__card, .cust-cases__card, .cust-cases__full, .cust-map__wrap, .pixel-cta')
    .forEach(el => {
      el.classList.add('fade-in');
      fadeObserver.observe(el);
    });

  /* --- Chat Case Study: Scroll-triggered message reveal --- */
  const chatThread = document.querySelector('.chat__thread');
  if (chatThread) {
    const chatObserver = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('is-visible');
          chatObserver.unobserve(entry.target);
        }
      });
    }, { root: null, rootMargin: '0px 0px -40px 0px', threshold: 0.1 });

    chatThread.querySelectorAll('.chat__msg, .chat__system, .chat__metrics').forEach(el => {
      chatObserver.observe(el);
    });

    /* --- Count-up animation on metric values --- */
    const metricObserver = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (!entry.isIntersecting) return;
        entry.target.querySelectorAll('[data-countup]').forEach(valueEl => {
          if (valueEl.dataset.counted) return;
          valueEl.dataset.counted = '1';

          const target = parseInt(valueEl.dataset.countup, 10);
          if (target === 0) return;
          const raw = valueEl.textContent.trim();
          const suffix = raw.replace(/^\d+/, '');
          const duration = 1200;
          const start = performance.now();
          valueEl.textContent = '0' + suffix;

          function tick(now) {
            const elapsed = now - start;
            const progress = Math.min(elapsed / duration, 1);
            const eased = 1 - Math.pow(1 - progress, 3);
            const current = Math.round(target * eased);
            valueEl.textContent = current + suffix;
            if (progress < 1) requestAnimationFrame(tick);
          }
          requestAnimationFrame(tick);
        });
        metricObserver.unobserve(entry.target);
      });
    }, { threshold: 0.5 });

    chatThread.querySelectorAll('.chat__metrics').forEach(el => metricObserver.observe(el));
  }

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

    function getMaxOffset() {
      const visible = getVisibleCount();
      return Math.max(0, tapeCount - visible);
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
      const maxOffset = getMaxOffset();
      vhsOffset = vhsOffset >= maxOffset ? 0 : vhsOffset + 1;
      updateVhsShelf();
    });

    vhsPrev?.addEventListener('click', () => {
      const maxOffset = getMaxOffset();
      vhsOffset = vhsOffset <= 0 ? maxOffset : vhsOffset - 1;
      updateVhsShelf();
    });

    window.addEventListener('resize', () => {
      const maxOffset = getMaxOffset();
      if (vhsOffset > maxOffset) {
        vhsOffset = maxOffset;
      }
      updateVhsShelf();
    });
  }

  /* --- Basics file tree --- */
  const basicsFeatures = [
    {
      title: 'Learns from your context',
      // tag: 'FREE', // Removed
      file: 'codebase_context.mod',
      desc: 'Deep understanding of your entire project structure and logic.',
      detail: 'Kody analyzes your team’s workflows, coding standards and Architecture to understand your unique needs and provide tailored reviews.',
      video: '/wp-content/themes/kodus-child/assets/img/context.webm',
    },
    {
      title: 'You set the rules',
      // tag: 'CONTROL', // Removed
      file: 'set_rules.mod',
      desc: 'Teams define their own review standards.',
      detail: 'Create custom review guidelines in plain language or use rules from the built-in library. Reviews consistently follow the standards defined by your team.',
      video: 'https://kodus.io/wp-content/uploads/2026/02/1111.mp4',
    },
    {
      title: 'Sync Your Existing Rules',
      // tag: 'SYNC', // Removed
      file: 'rule_sync.mod',
      desc: 'Keep the standards you already use. No rework.',
      detail: 'Kody automatically detects rule files from tools like Cursor, Copilot, Claude, and Windsurf — so your reviews stay consistent.',
      html: `
        <div class="rule-sync-animation" style="position: relative; width: 100%; height: 320px; display: flex; justify-content: center; align-items: center; background: transparent; overflow: hidden; opacity: 0; animation: fade-in-anim 0.3s forwards;">
          
          <!-- Connecting lines (Retro Circuit Style) -->
          <svg viewBox="0 0 100 100" preserveAspectRatio="none" style="position: absolute; inset: 0; width: 100%; height: 100%; pointer-events: none; z-index: 1;">
            
            <!-- Static Circuit Lines (Background) -->
            <g class="circuit-lines">
              <!-- Left Top to Center -->
              <path d="M28 20 H 38 V 45 H 44" class="flow-path" />
              <!-- Left Mid to Center -->
              <path d="M28 50 H 44" class="flow-path" />
              <!-- Left Bot to Center -->
              <path d="M28 80 H 38 V 55 H 44" class="flow-path" />
              
              <!-- Right Top to Center -->
              <path d="M72 20 H 62 V 45 H 56" class="flow-path" />
              <!-- Right Mid to Center -->
              <path d="M72 50 H 56" class="flow-path" />
              <!-- Right Bot to Center -->
              <path d="M72 80 H 62 V 55 H 56" class="flow-path" />
            </g>

            <!-- Animated Data Packets (Squares) -->
            <g class="data-packets">
              <!-- Left Packets -->
              <rect width="3" height="3" class="data-packet">
                <animateMotion dur="2s" repeatCount="indefinite" path="M28 20 H 38 V 45 H 44" calcMode="discrete" keyPoints="0;0.2;0.4;0.6;0.8;1" keyTimes="0;0.2;0.4;0.6;0.8;1" />
              </rect>
              <rect width="3" height="3" class="data-packet">
                <animateMotion dur="2s" begin="0.5s" repeatCount="indefinite" path="M28 50 H 44" calcMode="discrete" keyPoints="0;0.2;0.4;0.6;0.8;1" keyTimes="0;0.2;0.4;0.6;0.8;1" />
              </rect>
              <rect width="3" height="3" class="data-packet">
                <animateMotion dur="2s" begin="1s" repeatCount="indefinite" path="M28 80 H 38 V 55 H 44" calcMode="discrete" keyPoints="0;0.2;0.4;0.6;0.8;1" keyTimes="0;0.2;0.4;0.6;0.8;1" />
              </rect>

              <!-- Right Packets -->
              <rect width="3" height="3" class="data-packet">
                <animateMotion dur="2s" begin="0.2s" repeatCount="indefinite" path="M72 20 H 62 V 45 H 56" calcMode="discrete" keyPoints="0;0.2;0.4;0.6;0.8;1" keyTimes="0;0.2;0.4;0.6;0.8;1" />
              </rect>
              <rect width="3" height="3" class="data-packet">
                <animateMotion dur="2s" begin="0.7s" repeatCount="indefinite" path="M72 50 H 56" calcMode="discrete" keyPoints="0;0.2;0.4;0.6;0.8;1" keyTimes="0;0.2;0.4;0.6;0.8;1" />
              </rect>
              <rect width="3" height="3" class="data-packet">
                <animateMotion dur="2s" begin="1.2s" repeatCount="indefinite" path="M72 80 H 62 V 55 H 56" calcMode="discrete" keyPoints="0;0.2;0.4;0.6;0.8;1" keyTimes="0;0.2;0.4;0.6;0.8;1" />
              </rect>
            </g>
          </svg>

          <!-- Center: Kody Box -->
          <div style="position: absolute; left: 50%; top: 50%; transform: translate(-50%, -50%) scale(1.1); z-index: 10;">
            <img src="/wp-content/themes/kodus-child/assets/img/kody-box.webp" alt="Kody Box" class="kody-box" style="width: 140px; height: auto;">
          </div>
          
          <!-- Left side tools column -->
          <div style="position: absolute; left: 22%; top: 0; bottom: 0; display: flex; flex-direction: column; justify-content: space-between; padding: 30px 0; z-index: 5; width: 50px; align-items: center; transform: scale(1.1);">
            <div class="tool-icon tool-left"><img src="/wp-content/themes/kodus-child/assets/img/kilo.webp" alt="Kiln"></div>
            <div class="tool-icon tool-left"><img src="/wp-content/themes/kodus-child/assets/img/copilot.webp" alt="Copilot"></div>
            <div class="tool-icon tool-left"><img src="/wp-content/themes/kodus-child/assets/img/cursor.webp" alt="Cursor"></div>
          </div>

          <!-- Right side tools column -->
          <div style="position: absolute; right: 22%; top: 0; bottom: 0; display: flex; flex-direction: column; justify-content: space-between; padding: 30px 0; z-index: 5; width: 50px; align-items: center; transform: scale(1.1);">
            <div class="tool-icon tool-right"><img src="/wp-content/themes/kodus-child/assets/img/claude.webp" alt="Claude"></div>
            <div class="tool-icon tool-right"><img src="/wp-content/themes/kodus-child/assets/img/openai.webp" alt="OpenAI"></div>
            <div class="tool-icon tool-right"><img src="/wp-content/themes/kodus-child/assets/img/cline.webp" alt="Cline"></div>
          </div>
        </div>
      `
    },
    {
      title: 'Bring your business context',
      // tag: 'EXTENSIBLE', // Removed
      file: 'plugins_mcps.mod',
      desc: 'Extend functionality with Model Context Protocol servers.',
      detail: 'Connect tools like Jira, Notion, or Linear so Kody can understand specs, tasks, and requirements while reviewing your code.',
      video: '/wp-content/themes/kodus-child/assets/img/plugins.webm',
    },
    {
      title: 'Track technical debt',
      // tag: 'INSIGHTS', // Removed
      file: 'technical_debt.mod',
      desc: 'Monitor and manage technical debt over time.',
      detail: 'Kodus automatically turns unimplemented suggestions into issues, helping your team visualize and reduce technical debt over time.',
      video: '/wp-content/themes/kodus-child/assets/img/issues.webm',
    },
    {
      title: 'Accelerate your delivery',
      tag: 'OVERVIEW',
      file: 'cockpit.mod',
      desc: 'A centralized dashboard for your engineering insights.',
      detail: 'Monitor deploy frequency, cycle time, bug ratio and PR sizes to keep your team shipping fast — and safely.',
      image: '/wp-content/themes/kodus-child/assets/img/cockpit.webp',
    },
    {
      title: 'Privacy & Security',
      // tag: 'ENTERPRISE', // Removed
      file: 'privacy_security.mod',
      desc: 'Enterprise-grade security ensuring your code stays safe.',
      detail: 'Source code is never stored and is never used to train models. All data is encrypted in transit and at rest. Kodus supports SOC 2 compliance and offers self-hosted runners, so your IP can remain entirely within your own infrastructure.',
      html: `
        <div class="security-anim" style="width: 100%; height: 320px; position: relative; overflow: hidden; background: transparent;">
          
          <!-- Pixel Clouds (CSS) -->
          <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; pointer-events: none;">
            <div class="pixel-cloud" style="top: 15%; left: 15%; --s: 1.5; animation: float-cloud 30s linear infinite;"></div>
            <div class="pixel-cloud" style="top: 30%; left: 75%; --s: 1.2; opacity: 0.5; animation: float-cloud 45s linear infinite reverse;"></div>
            <div class="pixel-cloud" style="top: 10%; left: 55%; --s: 1; opacity: 0.4; animation: float-cloud 60s linear infinite;"></div>
          </div>

          <!-- Castle (Layer 1 - Background) -->
          <img src="/wp-content/themes/kodus-child/assets/img/castle.webp" alt="Castle" style="width: 280px; height: auto; image-rendering: pixelated; position: absolute; bottom: 60px; left: 50%; transform: translateX(-50%); z-index: 1; filter: drop-shadow(0 10px 20px rgba(0,0,0,0.6));">
          
          <!-- Kody Guard (Layer 2 - Foreground) -->
          <img src="/wp-content/themes/kodus-child/assets/img/kody-guard.webp" alt="Kody Guard" style="width: 130px; height: auto; image-rendering: pixelated; position: absolute; z-index: 2; bottom: 20px; left: 50%; transform: translateX(-50%); filter: drop-shadow(0 5px 15px rgba(0,0,0,0.8));">
        </div>
      `
    }
  ];

  const basicsTab = document.getElementById('basicsTab');
  const basicsFiles = document.querySelectorAll('.basics__tree-file');

  function loadBasicsPanelVideos(index) {
    const panel = document.getElementById(`basics-panel-${index}`);
    if (!panel) return;

    panel.querySelectorAll('video.basics__deferred-video[data-src]').forEach(video => {
      if (video.dataset.loaded === '1') return;
      const source = video.dataset.src;
      if (!source) return;

      video.src = source;
      video.dataset.loaded = '1';
      video.load();

      if (video.autoplay) {
        const playPromise = video.play();
        if (playPromise && typeof playPromise.catch === 'function') {
          playPromise.catch(() => {});
        }
      }
    });
  }

  function updateBasics(index) {
    const feature = basicsFeatures[index];
    if (!feature || !basicsTab) return;

    basicsFiles.forEach((f, i) => f.classList.toggle('basics__tree-file--active', i === index));
    basicsTab.textContent = feature.file;

    // Sync mobile tabs
    const mobileTabsInView = document.querySelectorAll('.basics__mobile-tab');
    mobileTabsInView.forEach((t, i) => {
      t.classList.toggle('basics__mobile-tab--active', i === index);
    });

    // Keep active tab visible when nav is horizontally scrollable on mobile.
    const activeMobileTab = mobileTabsInView[index];
    if (activeMobileTab && window.matchMedia('(max-width: 1024px)').matches) {
      activeMobileTab.scrollIntoView({
        block: 'nearest',
        inline: 'center',
        behavior: 'smooth',
      });
    }

    // Toggle visibility of panels
    document.querySelectorAll('.basics__panel').forEach((panel, i) => {
      if (i === index) {
        panel.style.display = 'block';
      } else {
        panel.style.display = 'none';
      }
    });

    loadBasicsPanelVideos(index);
  }

  basicsFiles.forEach(file => {
    file.addEventListener('click', () => {
      updateBasics(parseInt(file.dataset.feature));
    });
  });

  // Mobile feature tabs
  const mobileTabs = document.querySelectorAll('.basics__mobile-tab');
  mobileTabs.forEach(tab => {
    tab.addEventListener('click', () => {
      mobileTabs.forEach(t => t.classList.remove('basics__mobile-tab--active'));
      tab.classList.add('basics__mobile-tab--active');
      updateBasics(parseInt(tab.dataset.feature));
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
      desc: 'Even on the free plan, we deliver complete and reliable reviews.\n\nYou use Kody with your own API key and get access to the full review experience.\n\nYou get:\n• The same deep analysis\n• The same understanding of context\n• The same quality standards\n• No PR limits\n• No user limits\n\nOn the free plan, Kody reviews your PRs at the highest level we know how to deliver.<div style="display: flex; gap: 12px; margin-top: 24px; justify-content: center;"><img src="/wp-content/themes/kodus-child/assets/img/coracao.webp" style="width: 24px; height: 24px; image-rendering: pixelated;"><img src="/wp-content/themes/kodus-child/assets/img/coracao.webp" style="width: 24px; height: 24px; image-rendering: pixelated;"><img src="/wp-content/themes/kodus-child/assets/img/coracao.webp" style="width: 24px; height: 24px; image-rendering: pixelated;"><img src="/wp-content/themes/kodus-child/assets/img/coracao.webp" style="width: 24px; height: 24px; image-rendering: pixelated;"></div>',
    },
    'modal-agnostic': {
      title: 'Model-Agnostic',
      led: 'blue',
      desc: 'Run Kody with your own API keys and choose the model that makes the most sense for your team (OpenAI, Gemini, Claude, etc.).\n\nYou can set a primary model and a fallback to avoid interruptions in your review workflow.\n\nWe believe model control should be yours. Every team is different, and AI should adapt to your process — not the other way around.<div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 16px; margin-top: 24px; justify-items: center;"><img src="/wp-content/themes/kodus-child/assets/img/anthropic.webp" style="width: 50px; height: 50px; object-fit: contain;"><img src="/wp-content/themes/kodus-child/assets/img/claude-ai.webp" style="width: 50px; height: 50px; object-fit: contain;"><img src="/wp-content/themes/kodus-child/assets/img/deepsek.webp" style="width: 50px; height: 50px; object-fit: contain;"><img src="/wp-content/themes/kodus-child/assets/img/gemini.webp" style="width: 50px; height: 50px; object-fit: contain;"><img src="/wp-content/themes/kodus-child/assets/img/glm.webp" style="width: 50px; height: 50px; object-fit: contain;"><img src="/wp-content/themes/kodus-child/assets/img/meta.webp" style="width: 50px; height: 50px; object-fit: contain;"><img src="/wp-content/themes/kodus-child/assets/img/open-ai.webp" style="width: 50px; height: 50px; object-fit: contain;"><img src="/wp-content/themes/kodus-child/assets/img/grok.webp" style="width: 50px; height: 50px; object-fit: contain;"></div>',
    },
    'modal-zero-markup': {
      title: 'Zero Markup',
      led: 'red',
      desc: 'We don’t add any margin on LLM calls. You pay for tokens directly to your provider.\n\n• No hidden fees\n• No token limits\n• No billing surprises\n\nOn the Team plan, the $10 per user is strictly for platform infrastructure.\n\nWe don’t interfere with your AI spending.\n\nYou stay within your provider’s limits — what you use is what you pay.<div style="display: flex; justify-content: center; margin-top: -8px;"><img src="/wp-content/themes/kodus-child/assets/img/plaquinha.webp" style="width: 140px; height: auto; image-rendering: pixelated;"></div>',
    },
    'modal-configs': {
      title: 'Flexible Configuration',
      led: 'blue',
      desc: 'Kody adapts to how your team works.\n\nYou define the rules, severity levels, and where they apply — globally, per repository, or per directory.\n\nYou can also adjust the focus of reviews, the type of feedback Kody prioritizes, and how it communicates in pull requests.\n\nOn top of that, you can add more context to reviews using integrations and data from your own environment.\n\nThis way, critical projects, legacy services, and new initiatives can follow different policies, all within the same organization.<div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 16px; margin-top: 24px; justify-items: center;"><img src="/wp-content/themes/kodus-child/assets/img/tool1.webp" style="width: 50px; height: 50px; object-fit: contain; image-rendering: pixelated;"><img src="/wp-content/themes/kodus-child/assets/img/tool2.webp" style="width: 50px; height: 50px; object-fit: contain; image-rendering: pixelated;"><img src="/wp-content/themes/kodus-child/assets/img/tool3.webp" style="width: 50px; height: 50px; object-fit: contain; image-rendering: pixelated;"><img src="/wp-content/themes/kodus-child/assets/img/tool4.webp" style="width: 50px; height: 50px; object-fit: contain; image-rendering: pixelated;"><img src="/wp-content/themes/kodus-child/assets/img/tool5.webp" style="width: 50px; height: 50px; object-fit: contain; image-rendering: pixelated;"><img src="/wp-content/themes/kodus-child/assets/img/tool6.webp" style="width: 50px; height: 50px; object-fit: contain; image-rendering: pixelated;"><img src="/wp-content/themes/kodus-child/assets/img/tool7.webp" style="width: 50px; height: 50px; object-fit: contain; image-rendering: pixelated;"><img src="/wp-content/themes/kodus-child/assets/img/tool8.webp" style="width: 50px; height: 50px; object-fit: contain; image-rendering: pixelated;"></div>',
    },
  };

  const overlay = document.getElementById('modalOverlay');
  const modalContent = document.getElementById('modalContent');
  const modalTitle = document.getElementById('modalTitle');
  const modalDesc = document.getElementById('modalDesc');
  const modalClose = document.getElementById('modalClose');
  let modalScrollY = 0;

  function lockModalScroll() {
    if (document.body.classList.contains('modal-open')) return;
    modalScrollY = window.scrollY || window.pageYOffset || 0;
    document.body.style.top = `-${modalScrollY}px`;
    document.body.classList.add('modal-open');
  }

  function unlockModalScroll() {
    if (!document.body.classList.contains('modal-open')) return;
    document.body.classList.remove('modal-open');
    document.body.style.top = '';
    window.scrollTo(0, modalScrollY);
  }

  function openModal(key) {
    const data = modalData[key];
    if (!data) return;
    modalTitle.textContent = data.title;
    // Use innerHTML to allow HTML tags like <br> and <ul>
    modalDesc.innerHTML = data.desc.replace(/\n/g, '<br>');
    overlay.classList.add('is-open');
    overlay.setAttribute('aria-hidden', 'false');
    lockModalScroll();
    if (modalContent) modalContent.scrollTop = 0;
  }

  function closeModal() {
    overlay.classList.remove('is-open');
    overlay.setAttribute('aria-hidden', 'true');
    unlockModalScroll();
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

  /* --- Pricing toggle (Monthly / Annual) --- */
  const pricingSwitch = document.getElementById('pricingSwitch');
  const pricingLabels = document.querySelectorAll('.pricing__toggle-label');
  const dynamicPrices = document.querySelectorAll('.pricing__price-value--dynamic');

  function setPricingPeriod(annual) {
    if (!pricingSwitch) return;

    pricingSwitch.classList.toggle('pricing__switch--annual', annual);

    pricingLabels.forEach(label => {
      const isAnnual = label.dataset.period === 'annual';
      const isMonthly = label.dataset.period === 'monthly';
      label.classList.toggle('pricing__toggle-label--active', annual ? isAnnual : isMonthly);
    });

    dynamicPrices.forEach(el => {
      const target = annual ? el.dataset.annual : el.dataset.monthly;
      el.style.opacity = '0';
      setTimeout(() => {
        el.textContent = target;
        el.style.opacity = '1';
      }, 200);
    });
  }

  pricingSwitch?.addEventListener('click', () => {
    const isAnnual = pricingSwitch.classList.contains('pricing__switch--annual');
    setPricingPeriod(!isAnnual);
  });

  pricingLabels.forEach(label => {
    label.addEventListener('click', () => {
      setPricingPeriod(label.dataset.period === 'annual');
    });
  });

  /* --- Pricing Calculator --- */
  const calcSlider = document.getElementById('calcSlider');
  const calcDevCount = document.getElementById('calcDevCount');
  const calcModels = document.getElementById('calcModels');
  const priorityBtns = document.querySelectorAll('.calculator__priority');
  const sliderMarks = document.querySelectorAll('.calculator__slider-marks span');

  // LLM cost per dev per month for each model
  const modelCosts = {
    'sonnet':       { llmPerDev: 9,   name: 'Sonnet 4.5' },
    'gemini-pro':   { llmPerDev: 5,   name: 'Gemini Pro' },
    'chatgpt':      { llmPerDev: 5,   name: 'ChatGPT 5.1' },
    'haiku':        { llmPerDev: 2.5, name: 'Haiku 4.5' },
    'gemini-flash': { llmPerDev: 1.5, name: 'Gemini Flash' },
  };

  const kodusPerDev = 10;

  // Which models are recommended per priority
  const recommended = {
    quality: ['sonnet'],
    balance: ['gemini-pro', 'chatgpt'],
    cost:    ['haiku', 'gemini-flash'],
  };

  let currentPriority = 'balance';

  function updateCalculator() {
    if (!calcSlider || !calcModels) return;
    const devs = parseInt(calcSlider.value);
    if (calcDevCount) calcDevCount.textContent = devs;

    // Update slider fill via CSS gradient
    const pct = ((devs - 1) / (1000 - 1)) * 100;
    calcSlider.style.background = `linear-gradient(to right, var(--color-primary) 0%, var(--color-primary) ${pct}%, var(--color-card-lv3) ${pct}%)`;

    const cards = calcModels.querySelectorAll('.calculator__model');
    const recs = recommended[currentPriority] || [];

    cards.forEach(card => {
      const key = card.dataset.model;
      const cost = modelCosts[key];
      if (!cost) return;

      const llmTotal = cost.llmPerDev * devs;
      const licenseTotal = kodusPerDev * devs;
      const total = llmTotal + licenseTotal;

      card.querySelector('.calculator__llm-total').textContent = `$${llmTotal.toLocaleString()}`;
      card.querySelector('.calculator__per-dev').textContent = `($${cost.llmPerDev}/dev)`;

      const licensePerDevEls = card.querySelectorAll('.calculator__per-dev');
      if (licensePerDevEls[1]) licensePerDevEls[1].textContent = `($${kodusPerDev}/dev)`;
      card.querySelector('.calculator__license-total').textContent = `$${licenseTotal.toLocaleString()}`;
      card.querySelector('.calculator__model-total-value').textContent = `$${total.toLocaleString()}`;

      // Recommended state
      const isRec = recs.includes(key);
      card.classList.toggle('calculator__model--recommended', isRec);

      let recEl = card.querySelector('.calculator__model-recommended');
      if (isRec && !recEl) {
        recEl = document.createElement('span');
        recEl.className = 'calculator__model-recommended';
        recEl.innerHTML = '&#10003; Recommended for you';
        card.appendChild(recEl);
      } else if (!isRec && recEl) {
        recEl.remove();
      }
    });
  }

  calcSlider?.addEventListener('input', updateCalculator);

  sliderMarks.forEach(mark => {
    mark.addEventListener('click', () => {
      if (!calcSlider) return;
      calcSlider.value = mark.dataset.val;
      updateCalculator();
    });
  });

  priorityBtns.forEach(btn => {
    btn.addEventListener('click', () => {
      priorityBtns.forEach(b => b.classList.remove('calculator__priority--active'));
      btn.classList.add('calculator__priority--active');
      currentPriority = btn.dataset.priority;
      updateCalculator();
    });
  });

  // Initial render
  updateCalculator();

  /* --- ROI Calculator --- */
  const roiDevs = document.getElementById('roiDevs');
  const roiRate = document.getElementById('roiRate');
  const roiTime = document.getElementById('roiTime');
  const roiDevsValue = document.getElementById('roiDevsValue');
  const roiRateValue = document.getElementById('roiRateValue');
  const roiTimeValue = document.getElementById('roiTimeValue');
  const roiPRs = document.getElementById('roiPRs');
  const roiHours = document.getElementById('roiHours');
  const roiCost = document.getElementById('roiCost');
  const roiROI = document.getElementById('roiROI');
  const roiUnitsValue = document.querySelector('.roi__monitor-units'); // Class selector based on recent HTML
  const roiStepButtons = document.querySelectorAll('.roi__step');

  function updateSliderFill(slider) {
    if (!slider) return;
    const pct = ((slider.value - slider.min) / (slider.max - slider.min)) * 100;
    slider.style.background = `linear-gradient(to right, #555566 0%, #555566 ${pct}%, #1A1A2E ${pct}%)`;
  }

  function updateROI() {
    if (!roiDevs || !roiRate || !roiTime) return;

    const devs = parseInt(roiDevs.value);
    const rate = parseInt(roiRate.value);
    const time = parseInt(roiTime.value);

    // Display inputs
    if (roiDevsValue) roiDevsValue.textContent = devs;
    if (roiRateValue) roiRateValue.textContent = `${rate}`;
    if (roiTimeValue) roiTimeValue.textContent = time;
    if (roiUnitsValue) roiUnitsValue.textContent = `UNITS: ${devs}`;

    // --- Calculations based on user logic ---
    // Constants
    const prsPerDev = 10;
    const kodusCostPerDev = 12;

    // Formulas
    const monthlyPRs = devs * prsPerDev;
    const hoursSpent = (monthlyPRs * time) / 60;
    const currentReviewCost = hoursSpent * rate;
    const kodusCost = devs * kodusCostPerDev;
    
    // Savings & ROI
    const savings = currentReviewCost - kodusCost;
    // ROI = Savings / Kodus Cost (rounded)
    // Avoid division by zero
    const roi = kodusCost > 0 ? Math.round(savings / kodusCost) : 0;

    const formatWithBreaks = (value) => value.toLocaleString().replace(/,/g, ',<wbr>');

    // Display results
    if (roiPRs) roiPRs.innerHTML = `${formatWithBreaks(monthlyPRs)}`;
    if (roiHours) roiHours.innerHTML = `${formatWithBreaks(Math.round(hoursSpent))}h`;
    if (roiCost) roiCost.innerHTML = `$${formatWithBreaks(Math.round(currentReviewCost))}`;
    if (roiROI) roiROI.textContent = `${roi}x`;

    // Update slider fills
    updateSliderFill(roiDevs);
    updateSliderFill(roiRate);
    updateSliderFill(roiTime);
  }

  [roiDevs, roiRate, roiTime].forEach(slider => {
    slider?.addEventListener('input', updateROI);
  });

  roiStepButtons.forEach(btn => {
    btn.addEventListener('click', () => {
      const targetId = btn.dataset.target;
      const step = parseInt(btn.dataset.step || '1', 10);
      const slider = targetId ? document.getElementById(targetId) : null;
      if (!slider) return;

      const min = parseInt(slider.min, 10);
      const max = parseInt(slider.max, 10);
      const current = parseInt(slider.value, 10);
      const next = Math.min(max, Math.max(min, current + step));
      slider.value = next;
      updateROI(); // Recalculate
    });
  });

  // Initial render
  updateROI();
});

  /* --- Dossier Station (ROI Page) --- */
  document.addEventListener('DOMContentLoaded', () => {
    const dossierTabs = document.querySelectorAll('.dossier__tab');
    const dossierTitle = document.getElementById('dossierTitle');
    const dossierRefId = document.getElementById('dossierRefId');
    const dossierDiagnosis = document.getElementById('dossierDiagnosis');
    const dossierDesc = document.getElementById('dossierDesc');
    const dossierImpact = document.getElementById('dossierImpact');
    const dossierImage = document.getElementById('dossierImage');
    const dossierRecLabel = document.getElementById('dossierRecLabel');
    const dossierBtn = document.getElementById('dossierBtn');

    if (dossierTitle) {
      dossierTitle.classList.toggle('dossier__client-name--accented', /[\u00C0-\u017F]/.test(dossierTitle.textContent || ''));
    }

    const dossierData = {
      brendi: {
        title: 'BRENDI',
        refId: 'BRN-01',
        diagnosis: ['Review Backlog', 'Manual Checks', 'Slow Feedback', 'Auto PR Prechecks'],
        desc: 'At Brendi, reviews became a bottleneck. PRs stayed open. The queue grew early in the day. Senior engineers started their mornings clearing pending reviews instead of writing code. A big part of the time went into obvious fixes that showed up in almost every PR. Kody stepped into the flow to catch those issues early, running the team\'s rules automatically.',
        impact: 'About 70 percent less time spent on reviews per week. From 125 hours down to around 40. Less waiting. Less context switching. More time to focus on what actually moves the product.',
        image: '/wp-content/themes/kodus-child/assets/img/logos_new/brendi1.webp',
        imageClass: '',
        link: '/case-brendi/'
      },
      lerian: {
        title: 'LERIAN',
        refId: 'LER-02',
        diagnosis: ['Review Queue', 'Repeated Comments', 'Manual Checks', 'Auto PR Feedback'],
        desc: 'At Lerian, the problem was simple. Reviews were taking too much time because too much of the work was repetitive. The same adjustments showed up in PR after PR. Formatting. Team conventions. Basic rules. Kody stepped into the PR flow to catch those things early, applying the team\'s own rules and giving feedback right away.',
        impact: 'About 60 percent less time spent on reviews per week. From around 100 hours down to about 40. Less queue. Less rework. More time for work that actually matters.',
        image: '/wp-content/themes/kodus-child/assets/img/logos_new/lerian1.webp',
        imageClass: '',
        link: '/case-lerian/'
      },
      notificacoes: {
        title: 'NOTIFICAÇÕES INTELIGENTES',
        refId: 'NTF-03',
        diagnosis: ['Review Noise', 'Repeated Comments', 'Rule Gaps', 'Consistency Enforcement'],
        desc: 'At Notificações Inteligentes, reviews started to get too noisy. The same comments showed up in PR after PR. Formatting. Team standards. Basic rules. Each reviewer had a different approach and many things ended up being fixed more than once. The turning point was creating custom rules inside Kody, aligned with the team\'s workflow, and combining them with the ready to use Kody Rules library. This stopped the same issues from repeating across PRs and made the review process much more consistent day to day.',
        impact: 'Less rework, less back and forth in PRs, and more predictable feedback. The team kept moving fast without sacrificing quality.',
        image: '/wp-content/themes/kodus-child/assets/img/logos_new/notifica1.webp',
        imageClass: 'dossier__visual-img--notifica',
        link: '/case-notificacoes/'
      }
    };

    dossierTabs.forEach(tab => {
      tab.addEventListener('click', () => {
        // Active state
        dossierTabs.forEach(t => t.classList.remove('dossier__tab--active'));
        tab.classList.add('dossier__tab--active');

        // Update content
        const key = tab.dataset.case;
        const data = dossierData[key];
        if (!data) return;

        // Simple fade effect
        const contentElements = [dossierTitle, dossierRefId, dossierDiagnosis, dossierDesc, dossierImpact, dossierImage, dossierRecLabel, dossierBtn];
        contentElements.forEach(el => { if(el) el.style.opacity = '0'; });

        setTimeout(() => {
          if (dossierTitle) {
            dossierTitle.textContent = data.title;
            dossierTitle.classList.toggle('dossier__client-name--accented', /[\u00C0-\u017F]/.test(data.title));
          }
          if (dossierRefId) dossierRefId.textContent = data.refId;
          if (dossierDiagnosis) {
            dossierDiagnosis.innerHTML = data.diagnosis.map(tag => '<span class="dossier__tag">' + tag + '</span>').join('');
          }
          if (dossierDesc) dossierDesc.textContent = data.desc;
          if (dossierImpact) dossierImpact.textContent = data.impact;
          if (dossierImage) {
            dossierImage.src = data.image;
            dossierImage.classList.remove('dossier__visual-img--notifica');
            if (data.imageClass) dossierImage.classList.add(data.imageClass);
          }
          if (dossierRecLabel) dossierRecLabel.textContent = `REC // ${key}.case`;
          if (dossierBtn) {
            dossierBtn.href = data.link;
            dossierBtn.textContent = 'VIEW_FULL_CASE_DATA';
          }
          
          contentElements.forEach(el => { if(el) el.style.opacity = '1'; });
        }, 200);
      });
    });
  });

  /* --- Customers Page: Pixel World Map --- */
  document.addEventListener('DOMContentLoaded', () => {
    const pixelGroup = document.getElementById('custMapPixels');
    if (!pixelGroup) return;

    const svgNS = 'http://www.w3.org/2000/svg';
    const svg = pixelGroup.ownerSVGElement;
    if (!svg) return;

    const cell = 8;
    const width = 1000;
    const height = 500;
    const cols = Math.floor(width / cell);
    const rows = Math.floor(height / cell);
    const tones = ['#353D5D', '#3C4567', '#465074'];
    const coastTone = '#505B83';

    // Original world silhouettes converted to pixel grid.
    const pathData = [
      'M120,60 L180,55 L220,70 L260,65 L280,80 L290,120 L280,140 L260,160 L240,180 L230,200 L225,220 L240,240 L210,250 L190,230 L170,240 L150,230 L140,210 L130,195 L120,180 L100,170 L90,150 L95,130 L100,110 L110,90 Z',
      'M220,280 L250,270 L280,280 L300,310 L310,340 L305,370 L290,400 L270,420 L250,440 L240,430 L235,410 L230,380 L225,350 L215,320 L210,300 Z',
      'M430,70 L460,65 L490,70 L510,80 L520,100 L510,120 L500,130 L480,140 L460,135 L440,130 L430,120 L425,100 L430,85 Z',
      'M440,170 L470,160 L510,170 L530,200 L540,240 L535,280 L520,320 L500,350 L480,370 L460,360 L445,330 L435,300 L430,260 L435,220 L440,190 Z',
      'M520,55 L580,50 L640,55 L700,60 L750,70 L790,90 L810,110 L800,140 L780,160 L750,170 L720,175 L690,170 L660,160 L630,155 L600,150 L570,140 L550,125 L530,110 L520,90 Z',
      'M620,170 L660,180 L680,200 L690,230 L680,260 L660,270 L640,260 L625,240 L620,210 L615,190 Z',
      'M750,320 L800,310 L840,320 L860,340 L850,370 L830,390 L800,395 L770,385 L755,360 L750,340 Z',
      'M700,270 L730,265 L760,270 L780,280 L770,290 L740,295 L710,290 L700,280 Z'
    ];

    pixelGroup.textContent = '';

    // Paths must be in the DOM for isPointInFill() to work across browsers
    const hitGroup = document.createElementNS(svgNS, 'g');
    hitGroup.style.display = 'none';
    svg.appendChild(hitGroup);

    const paths = pathData.map(d => {
      const p = document.createElementNS(svgNS, 'path');
      p.setAttribute('d', d);
      hitGroup.appendChild(p);
      return p;
    });

    const grid = Array.from({ length: rows }, () => Array(cols).fill(false));
    const pt = svg.createSVGPoint();

    for (let y = 0; y < rows; y++) {
      for (let x = 0; x < cols; x++) {
        pt.x = (x * cell) + (cell / 2);
        pt.y = (y * cell) + (cell / 2);
        if (paths.some(path => path.isPointInFill(pt))) {
          grid[y][x] = true;
        }
      }
    }

    svg.removeChild(hitGroup);

    const isLand = (x, y) => (x >= 0 && x < cols && y >= 0 && y < rows && grid[y][x]);

    for (let y = 0; y < rows; y++) {
      for (let x = 0; x < cols; x++) {
        if (!grid[y][x]) continue;
        const edge = !isLand(x - 1, y) || !isLand(x + 1, y) || !isLand(x, y - 1) || !isLand(x, y + 1);
        const toneIdx = (x + y) % tones.length;
        const rect = document.createElementNS(svgNS, 'rect');
        rect.setAttribute('x', String(x * cell));
        rect.setAttribute('y', String(y * cell));
        rect.setAttribute('width', String(cell));
        rect.setAttribute('height', String(cell));
        rect.setAttribute('fill', edge ? coastTone : tones[toneIdx]);
        pixelGroup.appendChild(rect);
      }
    }
  });
