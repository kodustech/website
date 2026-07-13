(function () {
  'use strict';

  var reduce = window.matchMedia && window.matchMedia('(prefers-reduced-motion: reduce)').matches;

  /* ---------- Product header scroll state ---------- */
  var mqaHeader = document.querySelector('[data-mqa-header]');
  if (mqaHeader) {
    var onHeaderScroll = function () {
      mqaHeader.classList.toggle('is-scrolled', window.scrollY > 12);
    };
    onHeaderScroll();
    window.addEventListener('scroll', onHeaderScroll, { passive: true });
  }

  /* ---------- Checklist ---------- */
  var checklist = document.querySelector('[data-mqa-checklist]');
  if (checklist) {
    var inputs = Array.prototype.slice.call(checklist.querySelectorAll('input[type="checkbox"]'));
    var countEl = checklist.querySelector('[data-mqa-count]');
    var resultEl = checklist.querySelector('[data-mqa-result]');

    function updateChecklist() {
      var selected = inputs.filter(function (input) { return input.checked; }).length;
      if (countEl) countEl.textContent = String(selected);

      if (!resultEl) return;
      if (selected === 0) {
        resultEl.textContent = 'Select the problems your team is dealing with.';
      } else if (selected === 1) {
        resultEl.textContent = 'This may be a focused workflow problem your team can fix internally.';
      } else if (selected <= 3) {
        resultEl.textContent = 'There is likely a small set of critical flows worth protecting first.';
      } else {
        resultEl.textContent = 'Your release process is probably carrying more QA work than the team can absorb.';
      }
    }

    inputs.forEach(function (input) {
      input.addEventListener('change', updateChecklist);
    });
  }

  /* ---------- Hero CI panel cycle ---------- */
  var ci = document.querySelector('[data-mqa-ci]');
  if (ci && !reduce) {
    var rows = Array.prototype.slice.call(ci.querySelectorAll('[data-mqa-ci-row]'));
    var status = ci.querySelector('[data-mqa-ci-status]');
    var step = 0;

    function paintCi() {
      // pattern: 0 pass, 1 pass, 2 run, 3 wait, 4 wait → rotate which is running
      var runIndex = 1 + (step % Math.max(rows.length - 1, 1));
      var passUntil = runIndex;
      var labels = ['12s', '28s', '41s', '19s', '33s'];

      rows.forEach(function (row, i) {
        row.classList.remove('mqa-ci-row--pass', 'mqa-ci-row--run', 'mqa-ci-row--wait', 'mqa-ci-row--fail');
        var meta = row.querySelector('.mqa-ci-meta');
        if (i < passUntil) {
          row.classList.add('mqa-ci-row--pass');
          if (meta) meta.textContent = labels[i] || 'ok';
        } else if (i === passUntil) {
          row.classList.add('mqa-ci-row--run');
          if (meta) meta.textContent = '…';
        } else {
          row.classList.add('mqa-ci-row--wait');
          if (meta) meta.textContent = 'queued';
        }
      });

      if (status) {
        status.textContent = passUntil + ' / ' + rows.length + ' green · triage watching failures';
      }

      step += 1;
    }

    paintCi();
    setInterval(paintCi, 2200);
  }

  /* ---------- Timeline auto-advance on view ---------- */
  var timeline = document.querySelector('[data-mqa-timeline]');
  if (timeline) {
    var items = Array.prototype.slice.call(timeline.querySelectorAll('.mqa-timeline__item'));
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

  /* ---------- Deliverables demos ---------- */
  var deliverables = document.querySelector('[data-mqa-deliverables]');
  if (deliverables && !reduce) {
    /* Flow steps */
    var flow = deliverables.querySelector('[data-mqa-flow]');
    if (flow) {
      var steps = Array.prototype.slice.call(flow.querySelectorAll('.mqa-flow__step'));
      var f = 0;
      setInterval(function () {
        steps.forEach(function (s, i) {
          s.classList.toggle('is-on', i <= f);
        });
        f = (f + 1) % steps.length;
      }, 1100);
    }

    /* Status chips */
    var statusBox = deliverables.querySelector('[data-mqa-status]');
    if (statusBox) {
      var chips = Array.prototype.slice.call(statusBox.querySelectorAll('span'));
      var c = 0;
      setInterval(function () {
        chips.forEach(function (chip, i) {
          chip.classList.toggle('is-on', i === c);
        });
        c = (c + 1) % chips.length;
      }, 1400);
    }
  }

  /* ---------- Squashable bugs ----------
   * Outer .mqa-bug keeps parallax transform (kodus-retro.js).
   * Inner .mqa-bug__sprite owns the squash animation — no transform fight.
   */
  var bugsRoot = document.querySelector('[data-mqa-bugs]');
  var toast = document.querySelector('[data-mqa-bug-toast]');
  var toastTimer = null;

  if (bugsRoot) {
    var bugs = Array.prototype.slice.call(bugsRoot.querySelectorAll('.mqa-bug'));
    var remaining = bugs.length;

    function showToast(message, isClear) {
      if (!toast) return;
      var mark = toast.querySelector('[data-mqa-bug-toast-mark]');
      var text = toast.querySelector('[data-mqa-bug-toast-text]');
      if (mark) mark.textContent = isClear ? '✓' : '>';
      if (text) text.textContent = message;
      toast.hidden = false;
      toast.classList.toggle('is-clear', !!isClear);
      toast.classList.remove('is-on');
      void toast.offsetWidth;
      toast.classList.add('is-on');
      if (toastTimer) clearTimeout(toastTimer);
      toastTimer = setTimeout(function () {
        toast.classList.remove('is-on');
      }, isClear ? 2600 : 1600);
    }

    function squashBug(bug) {
      if (!bug || bug.classList.contains('is-squashed') || bug.classList.contains('is-gone')) {
        return;
      }

      var sprite = bug.querySelector('.mqa-bug__sprite');

      bug.classList.add('is-squashed');
      bug.setAttribute('aria-hidden', 'true');
      bug.tabIndex = -1;
      bug.disabled = true;
      remaining -= 1;

      if (remaining <= 0) {
        showToast('all clear — ship it', true);
      } else {
        // Quiet counter: only show every few kills + last ones
        if (remaining <= 2 || remaining % 2 === 0) {
          showToast(remaining + ' remaining', false);
        }
      }

      var removed = false;
      var remove = function () {
        if (removed) return;
        removed = true;
        bug.classList.add('is-gone');
        if (bug.parentNode) bug.parentNode.removeChild(bug);
      };

      if (reduce) {
        remove();
        return;
      }

      // Wait for the sprite animation (not the ring on ::after)
      if (sprite) {
        sprite.addEventListener('animationend', function onEnd(event) {
          if (event.animationName && event.animationName.indexOf('mqa-bug-squash') === -1) {
            return;
          }
          sprite.removeEventListener('animationend', onEnd);
          remove();
        });
      }
      setTimeout(remove, 700);
    }

    bugsRoot.addEventListener('click', function (event) {
      var bug = event.target.closest ? event.target.closest('.mqa-bug') : null;
      if (!bug || !bugsRoot.contains(bug)) return;
      event.preventDefault();
      event.stopPropagation();
      squashBug(bug);
    }, true);

    bugs.forEach(function (bug) {
      bug.addEventListener('keydown', function (event) {
        if (event.key === 'Enter' || event.key === ' ') {
          event.preventDefault();
          squashBug(bug);
        }
      });
    });
  }
})();
