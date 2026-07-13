(function () {
  'use strict';

  var reduce = window.matchMedia && window.matchMedia('(prefers-reduced-motion: reduce)').matches;

  /* ---------- Product header scroll state ---------- */
  var header = document.querySelector('[data-aif-header]');
  if (header) {
    var onHeaderScroll = function () {
      header.classList.toggle('is-scrolled', window.scrollY > 12);
    };
    onHeaderScroll();
    window.addEventListener('scroll', onHeaderScroll, { passive: true });
  }

  /* ---------- Checklist ---------- */
  var checklist = document.querySelector('[data-aif-checklist]');
  if (checklist) {
    var inputs = Array.prototype.slice.call(checklist.querySelectorAll('input[type="checkbox"]'));
    var countEl = checklist.querySelector('[data-aif-count]');
    var resultEl = checklist.querySelector('[data-aif-result]');

    function updateChecklist() {
      var selected = inputs.filter(function (input) { return input.checked; }).length;
      if (countEl) countEl.textContent = String(selected);

      if (!resultEl) return;
      if (selected === 0) {
        resultEl.textContent = 'Select the signals you recognize.';
      } else if (selected === 1) {
        resultEl.textContent = 'One visible bottleneck. This is enough to define a focused assessment.';
      } else if (selected <= 3) {
        resultEl.textContent = selected + ' connected signals. Map the workflow before adding another AI tool.';
      } else {
        resultEl.textContent = selected + ' connected signals. Your team has an AI operating-system problem, not a tool problem.';
      }
    }

    inputs.forEach(function (input) {
      input.addEventListener('change', updateChecklist);
    });
  }

  /* ---------- Hero assessment flow ----------
   * Stages: current workflow → investigation → priorities → action plan
   */
  var flowRoot = document.querySelector('[data-aif-flow-root]');
  if (flowRoot) {
    var stages = Array.prototype.slice.call(flowRoot.querySelectorAll('[data-aif-flow-stage]'));
    var liveEl = flowRoot.querySelector('[data-aif-flow-live]');
    var msgEl = flowRoot.querySelector('[data-aif-flow-msg]');
    var dims = Array.prototype.slice.call(flowRoot.querySelectorAll('[data-aif-dim]'));
    var liveLabels = ['mapping', 'investigating', 'prioritizing', 'ready'];
    var step = 0;
    var dimStep = 0;
    var dimTimer = null;

    function clearDimPulse() {
      if (dimTimer) {
        clearInterval(dimTimer);
        dimTimer = null;
      }
      dims.forEach(function (d) { d.classList.remove('is-on'); });
      dimStep = 0;
    }

    function pulseDims() {
      if (!dims.length) return;
      clearDimPulse();
      dimTimer = setInterval(function () {
        dims.forEach(function (d, i) {
          d.classList.toggle('is-on', i <= dimStep);
        });
        dimStep = (dimStep + 1) % dims.length;
      }, 380);
    }

    function paintFlow() {
      stages.forEach(function (stage, i) {
        stage.classList.toggle('is-active', i === step);
        stage.classList.toggle('is-done', i < step);
      });
      if (liveEl) liveEl.textContent = liveLabels[step] || 'run';
      if (msgEl) {
        msgEl.textContent = step === 3
          ? 'A scorecard and plan for the next decision.'
          : 'Map the system. Prioritize the bottleneck.';
      }

      clearDimPulse();
      if (step === 1 && !reduce) pulseDims();
      if (step === 1 && reduce) {
        dims.forEach(function (d) { d.classList.add('is-on'); });
      }

      step = (step + 1) % Math.max(stages.length, 1);
    }

    paintFlow();
    if (!reduce) setInterval(paintFlow, 2200);
  }

  /* ---------- Timeline auto-advance on view ---------- */
  var timeline = document.querySelector('[data-aif-timeline]');
  if (timeline) {
    var items = Array.prototype.slice.call(timeline.querySelectorAll('.aif-timeline__item'));
    var tIndex = 0;
    var tTimer = null;

    function setTimeline(n) {
      tIndex = n;
      items.forEach(function (item, idx) {
        item.classList.toggle('is-active', idx === n);
      });
    }

    function startTimeline() {
      if (reduce || items.length < 2) return;
      stopTimeline();
      tTimer = setInterval(function () {
        setTimeline((tIndex + 1) % items.length);
      }, 2400);
    }

    function stopTimeline() {
      if (tTimer) {
        clearInterval(tTimer);
        tTimer = null;
      }
    }

    items.forEach(function (item, idx) {
      item.addEventListener('mouseenter', function () {
        stopTimeline();
        setTimeline(idx);
      });
      item.addEventListener('mouseleave', startTimeline);
    });

    if ('IntersectionObserver' in window) {
      var tObs = new IntersectionObserver(function (entries) {
        entries.forEach(function (entry) {
          if (entry.isIntersecting) startTimeline();
          else stopTimeline();
        });
      }, { threshold: 0.25 });
      tObs.observe(timeline);
    } else {
      startTimeline();
    }
  }
})();
