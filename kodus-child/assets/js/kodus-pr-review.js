/* ════════════════════════════════════════════════════════════════
   PR REVIEW DEMO (home section)
   The marketing site is just the entry point — the actual review screen
   lives on the "try" front-end at {TRY}/r/<id>, which handles BOTH:
     • <slug>  → frozen featured snapshot (instant, cached, no job)
     • <jobId> → live review (enqueued from the paste-a-PR input)

   So this script never renders a review itself. It:
     1) lists featured PRs as cards → click navigates to {TRY}/r/<slug>
     2) enqueues a live review (POST /cli/public/review-pr) → navigates
        to {TRY}/r/<jobId>, surfacing typed errors inline before handoff.

   API base + try base are injected via wp_localize_script as
   window.kodusPrReview.{apiUrl,tryUrl}. CORS on the API is open.
   ════════════════════════════════════════════════════════════════ */
(function () {
  'use strict';

  var cfg = window.kodusPrReview || {};
  var API = (cfg.apiUrl || 'http://localhost:3001').replace(/\/+$/, '');
  var TRY = (cfg.tryUrl || 'http://localhost:3002').replace(/\/+$/, '');
  var SIGNUP = 'https://app.kodus.io/sign-up';

  var root = document.querySelector('[data-pr-console]');
  if (!root) return;

  var section      = document.getElementById('pr-review');
  var form         = section.querySelector('[data-pr-form]');
  var input        = section.querySelector('[data-pr-input]');
  var submitBtn    = section.querySelector('[data-pr-submit]');
  var errorEl      = section.querySelector('[data-pr-error]');
  var statusEl     = section.querySelector('[data-pr-status]');
  var featuredWrap = section.querySelector('[data-pr-featured]');

  // ── Helpers ──────────────────────────────────────────────────
  function unwrap(body) {
    // Success responses are wrapped { data, statusCode, type }; errors may be
    // flat or wrapped. Always prefer .data when present.
    return (body && typeof body === 'object' && 'data' in body) ? body.data : body;
  }

  function esc(s) {
    return String(s == null ? '' : s)
      .replace(/&/g, '&amp;').replace(/</g, '&lt;').replace(/>/g, '&gt;')
      .replace(/"/g, '&quot;').replace(/'/g, '&#39;');
  }

  function fingerprint() {
    var KEY = 'kodus_pr_fp';
    try {
      var fp = localStorage.getItem(KEY);
      if (!fp) {
        fp = (window.crypto && crypto.randomUUID)
          ? crypto.randomUUID()
          : 'fp-' + Math.random().toString(36).slice(2) + Date.now().toString(36);
        localStorage.setItem(KEY, fp);
      }
      return fp;
    } catch (e) {
      return 'fp-' + Math.random().toString(36).slice(2) + Date.now().toString(36);
    }
  }

  function gotoReview(id) {
    window.location.href = TRY + '/r/' + encodeURIComponent(id);
  }

  function setStatus(text, state) {
    if (!statusEl) return;
    statusEl.innerHTML = '&#9679; ' + esc(text);
    if (state) statusEl.setAttribute('data-state', state);
    else statusEl.removeAttribute('data-state');
  }

  function showError(html) { errorEl.innerHTML = html; errorEl.hidden = false; }
  function clearError() { errorEl.hidden = true; errorEl.innerHTML = ''; }

  function setBusy(busy) {
    submitBtn.disabled = busy;
    submitBtn.textContent = busy ? 'Reviewing…' : 'Run review';
  }

  // ── Featured grid ────────────────────────────────────────────
  function loadFeatured() {
    fetch(API + '/cli/public/featured-reviews', { headers: { Accept: 'application/json' } })
      .then(function (r) { return r.json(); })
      .then(function (body) {
        var data = unwrap(body) || {};
        var items = data.items || [];
        if (!items.length) { hideFeatured(); return; }
        items.sort(function (a, b) {
          return (a.sortOrder == null ? 999 : a.sortOrder) - (b.sortOrder == null ? 999 : b.sortOrder);
        });
        featuredWrap.innerHTML = items.map(featuredCard).join('');
        Array.prototype.forEach.call(featuredWrap.querySelectorAll('[data-slug]'), function (el) {
          el.addEventListener('click', function () { gotoReview(el.getAttribute('data-slug')); });
        });
      })
      .catch(function () { hideFeatured(); });
  }

  function hideFeatured() {
    var wrap = document.querySelector('[data-pr-featured-wrap]');
    if (wrap) wrap.hidden = true;
  }

  function featuredCard(item) {
    var pr = item.pr || {};
    var tags = (item.tags || []).slice(0, 4)
      .map(function (t) { return '<span class="pr-review__tag">' + esc(t) + '</span>'; }).join('');
    var title = item.highlight || pr.title || (pr.owner + '/' + pr.repo);
    return '' +
      '<button type="button" class="pr-review__card" data-slug="' + esc(item.slug) + '">' +
        '<span class="pr-review__card-repo"><b>' + esc(pr.owner) + '/' + esc(pr.repo) + '</b> #' + esc(pr.prNumber) + '</span>' +
        '<span class="pr-review__card-title">' + esc(title) + '</span>' +
        '<span class="pr-review__card-meta">' +
          '<span class="pr-review__badge pr-review__badge--issues">' + esc(item.issuesCount || 0) + ' findings</span>' +
          '<span class="pr-review__card-tags">' + tags + '</span>' +
        '</span>' +
      '</button>';
  }

  // ── Live review (enqueue → hand off to try) ──────────────────
  var ERROR_COPY = {
    invalid_url:   "That doesn't look like a public GitHub PR URL. Expected something like https://github.com/owner/repo/pull/123.",
    requires_auth: 'This PR is private or not found. ' +
      '<a href="' + SIGNUP + '" target="_blank" rel="noopener noreferrer">Sign up and connect GitHub</a> to review private PRs.',
    too_large:     'This PR exceeds the free-demo cap (10k changed lines / 80 files). ' +
      '<a href="' + SIGNUP + '" target="_blank" rel="noopener noreferrer">Sign up</a> to review bigger PRs.',
    upstream_error:'GitHub hiccuped while fetching this PR. Please try again in a moment.'
  };

  function handleEnqueueError(status, body) {
    var d = unwrap(body) || {};
    var code = d.code;
    if (status === 429 || code === 'rate_limited') {
      var when = d.resetAt ? new Date(d.resetAt) : null;
      var whenTxt = when && !isNaN(when.getTime())
        ? ' Try again after ' + when.toLocaleTimeString([], { hour: '2-digit', minute: '2-digit' }) + '.'
        : '';
      showError("You've used your free reviews for now." + whenTxt +
        ' <a href="' + SIGNUP + '" target="_blank" rel="noopener noreferrer">Sign up</a> for unlimited reviews.');
      return;
    }
    showError(ERROR_COPY[code] || (d.message ? esc(d.message) : 'Something went wrong. Please try again.'));
  }

  function submitLive(prUrl) {
    clearError();
    setBusy(true);
    setStatus('ENQUEUING', 'working');

    fetch(API + '/cli/public/review-pr', {
      method: 'POST',
      headers: { 'Content-Type': 'application/json', Accept: 'application/json' },
      body: JSON.stringify({ prUrl: prUrl, fingerprint: fingerprint() })
    })
      .then(function (r) {
        return r.json().then(function (body) { return { status: r.status, body: body }; });
      })
      .then(function (res) {
        if (res.status !== 202) {
          setStatus('ERROR', 'error');
          setBusy(false);
          handleEnqueueError(res.status, res.body);
          return;
        }
        var d = unwrap(res.body) || {};
        if (!d.jobId) {
          setStatus('ERROR', 'error');
          setBusy(false);
          showError('Something went wrong starting the review. Please try again.');
          return;
        }
        setStatus('OPENING REVIEW', 'working');
        gotoReview(d.jobId);
      })
      .catch(function () {
        setStatus('ERROR', 'error');
        setBusy(false);
        showError('Network error reaching the review service. Please try again.');
      });
  }

  // Basic client-side guard before we even hit the API.
  function looksLikePrUrl(v) {
    return /^https?:\/\/github\.com\/[^\/\s]+\/[^\/\s]+\/pull\/\d+/i.test(v.trim());
  }

  // ── Wire up ──────────────────────────────────────────────────
  form.addEventListener('submit', function (e) {
    e.preventDefault();
    var v = input.value.trim();
    clearError();
    if (!v) { showError('Paste a public GitHub PR URL first.'); return; }
    if (!looksLikePrUrl(v)) { showError(ERROR_COPY.invalid_url); return; }
    submitLive(v);
  });

  loadFeatured();
})();
