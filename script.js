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

  document.querySelectorAll('.vcr, .cartridge, .basics__window, .retro-window, .vhs, .faq__terminal, .ask-llm__console, .hero__kody-paws')
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
      title: 'Learns from your context',
      // tag: 'FREE', // Removed
      file: 'codebase_context.mod',
      desc: 'Deep understanding of your entire project structure and logic.',
      detail: 'Kody analyzes your team’s workflows, coding standards and Architecture to understand your unique needs and provide tailored reviews.',
      video: 'assets/img/context.webm',
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
            <img src="assets/img/kody-box.png" alt="Kody Box" class="kody-box" style="width: 140px; height: auto;">
          </div>
          
          <!-- Left side tools column -->
          <div style="position: absolute; left: 22%; top: 0; bottom: 0; display: flex; flex-direction: column; justify-content: space-between; padding: 30px 0; z-index: 5; width: 50px; align-items: center; transform: scale(1.1);">
            <div class="tool-icon tool-left"><img src="assets/img/kilo.png" alt="Kiln"></div>
            <div class="tool-icon tool-left"><img src="assets/img/copilot.png" alt="Copilot"></div>
            <div class="tool-icon tool-left"><img src="assets/img/cursor.png" alt="Cursor"></div>
          </div>

          <!-- Right side tools column -->
          <div style="position: absolute; right: 22%; top: 0; bottom: 0; display: flex; flex-direction: column; justify-content: space-between; padding: 30px 0; z-index: 5; width: 50px; align-items: center; transform: scale(1.1);">
            <div class="tool-icon tool-right"><img src="assets/img/claude.png" alt="Claude"></div>
            <div class="tool-icon tool-right"><img src="assets/img/openai.png" alt="OpenAI"></div>
            <div class="tool-icon tool-right"><img src="assets/img/cline.png" alt="Cline"></div>
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
      video: 'assets/img/plugins.webm',
    },
    {
      title: 'Track technical debt',
      // tag: 'INSIGHTS', // Removed
      file: 'technical_debt.mod',
      desc: 'Monitor and manage technical debt over time.',
      detail: 'Kodus automatically turns unimplemented suggestions into issues, helping your team visualize and reduce technical debt over time.',
      video: 'assets/img/issues.webm',
    },
    {
      title: 'Accelerate your delivery',
      tag: 'OVERVIEW',
      file: 'cockpit.mod',
      desc: 'A centralized dashboard for your engineering insights.',
      detail: 'Monitor deploy frequency, cycle time, bug ratio and PR sizes to keep your team shipping fast — and safely.',
      image: 'assets/img/cockpit.png',
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
          <img src="assets/img/castle.png" alt="Castle" style="width: 280px; height: auto; image-rendering: pixelated; position: absolute; bottom: 60px; left: 50%; transform: translateX(-50%); z-index: 1; filter: drop-shadow(0 10px 20px rgba(0,0,0,0.6));">
          
          <!-- Kody Guard (Layer 2 - Foreground) -->
          <img src="assets/img/kody-guard.png" alt="Kody Guard" style="width: 130px; height: auto; image-rendering: pixelated; position: absolute; z-index: 2; bottom: 20px; left: 50%; transform: translateX(-50%); filter: drop-shadow(0 5px 15px rgba(0,0,0,0.8));">
        </div>
      `
    }
  ];

  const basicsTab = document.getElementById('basicsTab');
  const basicsFiles = document.querySelectorAll('.basics__tree-file');

  function updateBasics(index) {
    const feature = basicsFeatures[index];
    if (!feature || !basicsTab) return;

    basicsFiles.forEach((f, i) => f.classList.toggle('basics__tree-file--active', i === index));
    basicsTab.textContent = feature.file;

    // Toggle visibility of panels
    document.querySelectorAll('.basics__panel').forEach((panel, i) => {
      if (i === index) {
        panel.style.display = 'block';
      } else {
        panel.style.display = 'none';
      }
    });
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
      desc: 'Even on the free plan, we deliver complete and reliable reviews.\n\nYou use Kody with your own API key and get access to the full review experience.\n\nYou get:\n• The same deep analysis\n• The same understanding of context\n• The same quality standards\n• No PR limits\n• No user limits\n\nOn the free plan, Kody reviews your PRs at the highest level we know how to deliver.<div style="display: flex; gap: 12px; margin-top: 24px; justify-content: center;"><img src="assets/img/coracao.png" style="width: 24px; height: 24px; image-rendering: pixelated;"><img src="assets/img/coracao.png" style="width: 24px; height: 24px; image-rendering: pixelated;"><img src="assets/img/coracao.png" style="width: 24px; height: 24px; image-rendering: pixelated;"><img src="assets/img/coracao.png" style="width: 24px; height: 24px; image-rendering: pixelated;"></div>',
    },
    'modal-agnostic': {
      title: 'Model-Agnostic',
      led: 'blue',
      desc: 'Run Kody with your own API keys and choose the model that makes the most sense for your team (OpenAI, Gemini, Claude, etc.).\n\nYou can set a primary model and a fallback to avoid interruptions in your review workflow.\n\nWe believe model control should be yours. Every team is different, and AI should adapt to your process — not the other way around.<div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 16px; margin-top: 24px; justify-items: center;"><img src="assets/img/anthropic.png" style="width: 50px; height: 50px; object-fit: contain;"><img src="assets/img/claude-ai.png" style="width: 50px; height: 50px; object-fit: contain;"><img src="assets/img/deepsek.png" style="width: 50px; height: 50px; object-fit: contain;"><img src="assets/img/gemini.png" style="width: 50px; height: 50px; object-fit: contain;"><img src="assets/img/glm.png" style="width: 50px; height: 50px; object-fit: contain;"><img src="assets/img/meta.png" style="width: 50px; height: 50px; object-fit: contain;"><img src="assets/img/open-ai.png" style="width: 50px; height: 50px; object-fit: contain;"><img src="assets/img/grok.png" style="width: 50px; height: 50px; object-fit: contain;"></div>',
    },
    'modal-zero-markup': {
      title: 'Zero Markup',
      led: 'red',
      desc: 'We don’t add any margin on LLM calls. You pay for tokens directly to your provider.\n\n• No hidden fees\n• No token limits\n• No billing surprises\n\nOn the Team plan, the $10 per user is strictly for platform infrastructure.\n\nWe don’t interfere with your AI spending.\n\nYou stay within your provider’s limits — what you use is what you pay.<div style="display: flex; justify-content: center; margin-top: -8px;"><img src="assets/img/plaquinha.png" style="width: 140px; height: auto; image-rendering: pixelated;"></div>',
    },
    'modal-configs': {
      title: 'Flexible Configuration',
      led: 'blue',
      desc: 'Kody adapts to how your team works.\n\nYou define the rules, severity levels, and where they apply — globally, per repository, or per directory.\n\nYou can also adjust the focus of reviews, the type of feedback Kody prioritizes, and how it communicates in pull requests.\n\nOn top of that, you can add more context to reviews using integrations and data from your own environment.\n\nThis way, critical projects, legacy services, and new initiatives can follow different policies, all within the same organization.<div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 16px; margin-top: 24px; justify-items: center;"><img src="assets/img/tool1.png" style="width: 50px; height: 50px; object-fit: contain; image-rendering: pixelated;"><img src="assets/img/tool2.png" style="width: 50px; height: 50px; object-fit: contain; image-rendering: pixelated;"><img src="assets/img/tool3.png" style="width: 50px; height: 50px; object-fit: contain; image-rendering: pixelated;"><img src="assets/img/tool4.png" style="width: 50px; height: 50px; object-fit: contain; image-rendering: pixelated;"><img src="assets/img/tool5.png" style="width: 50px; height: 50px; object-fit: contain; image-rendering: pixelated;"><img src="assets/img/tool6.png" style="width: 50px; height: 50px; object-fit: contain; image-rendering: pixelated;"><img src="assets/img/tool7.png" style="width: 50px; height: 50px; object-fit: contain; image-rendering: pixelated;"><img src="assets/img/tool8.png" style="width: 50px; height: 50px; object-fit: contain; image-rendering: pixelated;"></div>',
    },
  };

  const overlay = document.getElementById('modalOverlay');
  const modalTitle = document.getElementById('modalTitle');
  const modalDesc = document.getElementById('modalDesc');
  // const modalLed = document.getElementById('modalLed'); // Removed
  const modalClose = document.getElementById('modalClose');

  function openModal(key) {
    const data = modalData[key];
    if (!data) return;
    modalTitle.textContent = data.title;
    // Use innerHTML to allow HTML tags like <br> and <ul>
    modalDesc.innerHTML = data.desc.replace(/\n/g, '<br>');
    // if (modalLed) {
    //   modalLed.className = `cartridge__led cartridge__led--${data.led}`;
    // }
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
