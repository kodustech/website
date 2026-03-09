/**
 * Kodus Dev Mode — Full-screen Terminal
 *
 * Toggle: click ">_" fab  |  Ctrl+Shift+K  |  type "exit"
 * 100% client-side, zero SEO impact.
 */
(function () {
  'use strict';

  /* ═══════════════════════════════════════════════════════
     DATA
     ═══════════════════════════════════════════════════════ */

  var PAGES = {
    home:         { path: '/',                          desc: 'Landing page' },
    pricing:      { path: '/pricing/',                  desc: 'Plans & pricing' },
    customers:    { path: '/customers/',                desc: 'Customer stories' },
    blog:         { path: '/en/insights-en/',           desc: 'Blog / Insights' },
    roi:          { path: '/roi/',                      desc: 'ROI calculator' },
    benchmark:    { path: '/benchmark-ai-code-review/', desc: 'AI code review benchmark' },
    docs:         { path: 'https://docs.kodus.io/how_to_use/en/overview', desc: 'Documentation', external: true },
    changelog:    { path: '/changelog-en/',             desc: 'Release changelog' },
    rules:        { path: '/code-review-rules/',        desc: 'Kody Rules library' },
    security:     { path: 'https://docs.kodus.io/how_to_use/en/security/data_usage', desc: 'Security & data usage', external: true },
    discord:      { path: 'https://discord.gg/TFZBRk9fT6', desc: 'Community Discord', external: true },
    github:       { path: 'https://github.com/kodustech/kodus-ai', desc: 'GitHub repo', external: true },
    login:        { path: 'https://app.kodus.io/sign-in',  desc: 'Sign in', external: true },
    signup:       { path: 'https://app.kodus.io/sign-up',  desc: 'Start free trial', external: true },
    'vs-coderabbit': { path: '/kodus-vs-coderabbit/',   desc: 'Kodus vs CodeRabbit' },
    'vs-bugbot':     { path: '/kodus-vs-cursor-bugbot/', desc: 'Kodus vs BugBot' },
    'vs-copilot':    { path: '/kodus-vs-github-copilot/',desc: 'Kodus vs GitHub Copilot' },
    'vs-claude':     { path: '/kodus-vs-claude/',        desc: 'Kodus vs Claude' },
    'case-brendi':       { path: '/case-brendi/',        desc: 'Case study — Brendi' },
    'case-lerian':       { path: '/case-lerian/',        desc: 'Case study — Lerian' },
    'case-notificacoes': { path: '/case-notificacoes/',  desc: 'Case study — Notificacoes Inteligentes' },
    privacy:      { path: '/privacy-policy/',            desc: 'Privacy policy' },
    terms:        { path: '/terms-of-use/',              desc: 'Terms of use' },
  };

  var ASCII_LOGO = [
    ' _  __         _           ',
    '| |/ /___   __| |_   _ ___ ',
    "| ' // _ \\ / _` | | | / __|",
    '| . \\ (_) | (_| | |_| \\__ \\',
    '|_|\\_\\___/ \\__,_|\\__,_|___/',
  ].join('\n');

  var WELCOME = [
    '',
    '<span class="ascii">' + ASCII_LOGO + '</span>',
    '',
    '<span class="g">Kodus Dev Mode</span> <span class="d">v1.0.0</span>',
    '<span class="d">The Open Source Alternative to CodeRabbit</span>',
    '',
    '<span class="d">Type</span> <span class="c">help</span> <span class="d">to see available commands.</span>',
    '<span class="d">Press</span> <span class="c">Esc</span> <span class="d">or type</span> <span class="c">exit</span> <span class="d">to leave.</span>',
    '',
  ].join('\n');

  /* ═══════════════════════════════════════════════════════
     STATE
     ═══════════════════════════════════════════════════════ */
  var termEl  = null;
  var inputEl = null;
  var outEl   = null;
  var fabEl   = null;
  var hist    = [];
  var histIdx = -1;
  var isOpen  = false;

  /* ═══════════════════════════════════════════════════════
     CSS
     ═══════════════════════════════════════════════════════ */
  function injectCSS() {
    if (document.getElementById('kt-css')) return;
    var s = document.createElement('style');
    s.id = 'kt-css';
    s.textContent =
      '#kt-fab{' +
        'position:fixed;bottom:24px;right:24px;z-index:999998;' +
        'width:48px;height:48px;border-radius:12px;border:1px solid #30304B;' +
        'background:#181825;color:#F8B76D;cursor:pointer;' +
        'font-family:"JetBrains Mono",monospace;font-size:16px;font-weight:700;' +
        'display:flex;align-items:center;justify-content:center;' +
        'box-shadow:0 4px 24px rgba(0,0,0,0.5);transition:all .2s ease;' +
      '}' +
      '#kt-fab:hover{background:#202032;border-color:#F8B76D;transform:scale(1.08);}' +
      '#kt-fab.active{background:#F8B76D;color:#101019;border-color:#F8B76D;}' +
      '#kt-term{' +
        'position:fixed;inset:0;z-index:999999;background:#0a0a0f;' +
        'font-family:"JetBrains Mono","Fira Code","SF Mono",monospace;' +
        'display:flex;flex-direction:column;' +
        'opacity:0;transform:scale(0.98);' +
        'transition:opacity .15s ease,transform .15s ease;pointer-events:none;' +
      '}' +
      '#kt-term.open{opacity:1;transform:scale(1);pointer-events:auto;}' +
      '#kt-term::before{' +
        'content:"";position:absolute;inset:0;z-index:1;pointer-events:none;' +
        'background:repeating-linear-gradient(0deg,rgba(0,0,0,0) 0px,rgba(0,0,0,0) 2px,rgba(0,0,0,0.08) 2px,rgba(0,0,0,0.08) 4px);' +
      '}' +
      '#kt-term::after{' +
        'content:"";position:absolute;inset:0;z-index:2;pointer-events:none;' +
        'background:radial-gradient(ellipse at center,transparent 60%,rgba(0,0,0,0.5) 100%);' +
      '}' +
      '#kt-bar{' +
        'position:relative;z-index:3;display:flex;align-items:center;justify-content:space-between;' +
        'padding:12px 24px;background:rgba(16,16,25,0.9);border-bottom:1px solid #1a1a2e;flex-shrink:0;' +
      '}' +
      '#kt-bar-left{display:flex;align-items:center;gap:8px;}' +
      '#kt-bar-dots{display:flex;gap:6px;}' +
      '#kt-bar-dots span{width:12px;height:12px;border-radius:50%;display:block;}' +
      '#kt-bar-dots .r{background:#ff5f57;}#kt-bar-dots .y{background:#febc2e;}#kt-bar-dots .g{background:#28c840;}' +
      '#kt-bar-title{color:#555;font-size:12px;margin-left:12px;}' +
      '#kt-bar-close{' +
        'background:none;border:1px solid #2a2a3e;border-radius:6px;' +
        'color:#666;cursor:pointer;font-family:inherit;font-size:11px;' +
        'padding:4px 12px;transition:all .15s ease;' +
      '}' +
      '#kt-bar-close:hover{color:#F8B76D;border-color:#F8B76D;}' +
      '#kt-out{' +
        'position:relative;z-index:3;flex:1;overflow-y:auto;padding:24px 32px;' +
        'color:#b0b0c0;font-size:14px;line-height:1.7;white-space:pre-wrap;word-wrap:break-word;' +
        'scrollbar-width:thin;scrollbar-color:#1a1a2e transparent;' +
      '}' +
      '#kt-out::-webkit-scrollbar{width:6px;}' +
      '#kt-out::-webkit-scrollbar-track{background:transparent;}' +
      '#kt-out::-webkit-scrollbar-thumb{background:#1a1a2e;border-radius:3px;}' +
      '#kt-out .ascii{color:#F8B76D;font-size:13px;line-height:1.3;}' +
      '#kt-out .p{color:#F8B76D;}' +
      '#kt-out .c{color:#C9BBF2;}' +
      '#kt-out .g{color:#28c840;}' +
      '#kt-out .e{color:#ff5f57;}' +
      '#kt-out .d{color:#555;}' +
      '#kt-out .w{color:#e0e0e8;}' +
      '#kt-out .h{color:#F8B76D;font-weight:600;}' +
      '#kt-out .cyan{color:#5af;}' +
      '#kt-out .bar-fill{color:#F8B76D;}' +
      '#kt-out .bar-empty{color:#1a1a2e;}' +
      '#kt-out .tbl-border{color:#30304B;}' +
      '#kt-out .tbl-head{color:#C9BBF2;font-weight:600;}' +
      '#kt-input-row{' +
        'position:relative;z-index:3;display:flex;align-items:center;gap:0;' +
        'padding:16px 32px 24px;flex-shrink:0;background:rgba(10,10,15,0.6);' +
      '}' +
      '#kt-prompt{color:#F8B76D;font-size:14px;font-weight:700;margin-right:10px;flex-shrink:0;white-space:pre;}' +
      '#kt-input{' +
        'flex:1;background:transparent;border:none;outline:none;' +
        'color:#e0e0e8;font-family:inherit;font-size:14px;caret-color:#F8B76D;' +
      '}' +
      '#kt-input::placeholder{color:#333;}' +
      '@keyframes kt-flicker{0%{opacity:0.2;}5%{opacity:0.8;}10%{opacity:0.3;}15%{opacity:0.9;}20%{opacity:1;}}' +
      '#kt-term.flicker{animation:kt-flicker .3s ease;}' +
      '@media(max-width:600px){' +
        '#kt-out{padding:16px;font-size:11px;}' +
        '#kt-input-row{padding:12px 16px 16px;}' +
        '#kt-fab{bottom:16px;right:16px;width:42px;height:42px;font-size:14px;}' +
      '}';
    document.head.appendChild(s);
  }

  /* ═══════════════════════════════════════════════════════
     DOM
     ═══════════════════════════════════════════════════════ */
  function createFab() {
    if (fabEl) return;
    injectCSS();
    fabEl = document.createElement('button');
    fabEl.id = 'kt-fab';
    fabEl.innerHTML = '&gt;_';
    fabEl.title = 'Toggle Dev Mode (Ctrl+Shift+K)';
    fabEl.addEventListener('click', function () { toggle(); });
    document.body.appendChild(fabEl);
  }

  function createTerminal() {
    if (termEl) return;
    injectCSS();
    termEl = document.createElement('div');
    termEl.id = 'kt-term';
    termEl.innerHTML =
      '<div id="kt-bar">' +
        '<div id="kt-bar-left">' +
          '<div id="kt-bar-dots"><span class="r"></span><span class="y"></span><span class="g"></span></div>' +
          '<span id="kt-bar-title">kodus@dev ~ </span>' +
        '</div>' +
        '<button id="kt-bar-close">ESC to close</button>' +
      '</div>' +
      '<div id="kt-out"></div>' +
      '<div id="kt-input-row">' +
        '<span id="kt-prompt">kodus@dev:~$</span>' +
        '<input id="kt-input" type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false">' +
      '</div>';
    document.body.appendChild(termEl);
    outEl   = document.getElementById('kt-out');
    inputEl = document.getElementById('kt-input');
    document.getElementById('kt-bar-close').addEventListener('click', close);
    termEl.addEventListener('click', function (e) {
      if (e.target.tagName !== 'INPUT' && e.target.tagName !== 'BUTTON') inputEl.focus();
    });
    inputEl.addEventListener('keydown', onKey);
  }

  function onKey(e) {
    if (e.key === 'Enter') {
      var cmd = inputEl.value.trim();
      if (cmd) { hist.unshift(cmd); histIdx = -1; exec(cmd); }
      inputEl.value = '';
    } else if (e.key === 'ArrowUp') {
      e.preventDefault();
      if (histIdx < hist.length - 1) { histIdx++; inputEl.value = hist[histIdx]; }
    } else if (e.key === 'ArrowDown') {
      e.preventDefault();
      if (histIdx > 0) { histIdx--; inputEl.value = hist[histIdx]; }
      else { histIdx = -1; inputEl.value = ''; }
    } else if (e.key === 'Escape') { close(); }
    else if (e.key === 'Tab') { e.preventDefault(); autocomplete(); }
    else if (e.key === 'l' && e.ctrlKey) { e.preventDefault(); outEl.innerHTML = ''; }
  }

  /* ═══════════════════════════════════════════════════════
     PRINT HELPERS
     ═══════════════════════════════════════════════════════ */
  function print(text) {
    var div = document.createElement('div');
    div.innerHTML = text;
    outEl.appendChild(div);
    outEl.scrollTop = outEl.scrollHeight;
  }

  function printCmd(cmd) {
    print('<span class="p">kodus@dev:~$</span> <span class="c">' + esc(cmd) + '</span>');
  }

  function printWelcome() { print(WELCOME); }

  /* ── Table builder ─────────────────────────────── */
  function tblRow(cols, widths, cls) {
    cls = cls || '';
    var out = '<span class="tbl-border">│</span>';
    for (var i = 0; i < cols.length; i++) {
      var content = cols[i];
      var visLen = stripTags(content).length;
      var w = widths[i];
      var pad = w - visLen;
      if (pad < 0) pad = 0;
      var cell = content + repeat(' ', pad);
      out += ' ' + (cls ? '<span class="' + cls + '">' + cell + '</span>' : cell) + ' <span class="tbl-border">│</span>';
    }
    return out;
  }

  function tblSep(widths) {
    var out = '<span class="tbl-border">├';
    for (var i = 0; i < widths.length; i++) {
      out += repeat('─', widths[i] + 2);
      out += (i < widths.length - 1) ? '┼' : '┤';
    }
    out += '</span>';
    return out;
  }

  function tblTop(widths) {
    var out = '<span class="tbl-border">┌';
    for (var i = 0; i < widths.length; i++) {
      out += repeat('─', widths[i] + 2);
      out += (i < widths.length - 1) ? '┬' : '┐';
    }
    out += '</span>';
    return out;
  }

  function tblBot(widths) {
    var out = '<span class="tbl-border">└';
    for (var i = 0; i < widths.length; i++) {
      out += repeat('─', widths[i] + 2);
      out += (i < widths.length - 1) ? '┴' : '┘';
    }
    out += '</span>';
    return out;
  }

  /* ── Progress bar ──────────────────────────────── */
  function bar(pct, width) {
    width = width || 20;
    var filled = Math.round(pct / 100 * width);
    return '<span class="bar-fill">' + repeat('█', filled) + '</span><span class="bar-empty">' + repeat('░', width - filled) + '</span>';
  }

  /* ═══════════════════════════════════════════════════════
     COMMANDS
     ═══════════════════════════════════════════════════════ */
  function exec(raw) {
    printCmd(raw);
    var parts = raw.split(/\s+/);
    var cmd   = parts[0].toLowerCase();
    var arg   = parts.slice(1).join(' ').toLowerCase();
    var fn    = COMMANDS[cmd];
    if (fn) { fn(arg, parts); }
    else { print('<span class="e">command not found: ' + esc(cmd) + '</span>\n<span class="d">type "help" for available commands</span>'); }
  }

  var COMMANDS = {};

  /* ── help ─────────────────────────────────────── */
  COMMANDS.help = function () {
    print([
      '',
      '<span class="w">NAVIGATION</span>',
      '  <span class="c">ls</span>                <span class="d">list all pages</span>',
      '  <span class="c">cd</span> <span class="d">&lt;page&gt;</span>         <span class="d">navigate to page</span>',
      '  <span class="c">open</span> <span class="d">&lt;page&gt;</span>       <span class="d">open in new tab</span>',
      '  <span class="c">grep</span> <span class="d">&lt;query&gt;</span>      <span class="d">search pages</span>',
      '  <span class="c">pwd</span>               <span class="d">current path</span>',
      '',
      '<span class="w">CONTENT</span>',
      '  <span class="c">pricing</span>           <span class="d">show plans & pricing table</span>',
      '  <span class="c">benchmark</span>         <span class="d">AI code review benchmark results</span>',
      '  <span class="c">roi</span> <span class="d">[devs] [rate]</span>  <span class="d">calculate ROI  (e.g. roi 50 50)</span>',
      '  <span class="c">customers</span>         <span class="d">customer stats & testimonials</span>',
      '  <span class="c">features</span>          <span class="d">key Kodus features</span>',
      '  <span class="c">cases</span>             <span class="d">case studies summary</span>',
      '  <span class="c">compare</span> <span class="d">&lt;tool&gt;</span>    <span class="d">compare vs coderabbit|bugbot|copilot|claude</span>',
      '',
      '<span class="w">OTHER</span>',
      '  <span class="c">whoami</span>            <span class="d">about Kodus</span>',
      '  <span class="c">clear</span>             <span class="d">clear screen (Ctrl+L)</span>',
      '  <span class="c">exit</span>              <span class="d">close terminal</span>',
      '',
      '<span class="d">  Tab = autocomplete  |  ↑↓ = history</span>',
      '',
    ].join('\n'));
  };

  /* ── ls ───────────────────────────────────────── */
  COMMANDS.ls = function () {
    var keys = Object.keys(PAGES).sort();
    var lines = [''];
    for (var i = 0; i < keys.length; i++) {
      var p = PAGES[keys[i]];
      var tag = p.external ? ' <span class="d">[ext]</span>' : '';
      lines.push('  <span class="h">' + padR(keys[i], 22) + '</span><span class="d">' + esc(p.desc) + '</span>' + tag);
    }
    lines.push('');
    print(lines.join('\n'));
  };

  /* ── cd / open ────────────────────────────────── */
  COMMANDS.cd = COMMANDS.open = function (arg, parts) {
    var cmd = parts[0].toLowerCase();
    if (!arg) { print('<span class="e">usage: ' + cmd + ' &lt;page&gt;</span>'); return; }
    var pg = findPage(arg);
    if (!pg) { print('<span class="e">page not found: ' + esc(arg) + '</span>\n<span class="d">try: ls</span>'); return; }
    var url = pg.external ? pg.path : (location.origin + pg.path);
    if (cmd === 'open' || pg.external) {
      window.open(url, '_blank');
      print('<span class="g">opened</span> <span class="d">' + esc(url) + '</span>');
    } else {
      print('<span class="g">navigating...</span> <span class="d">' + esc(pg.path) + '</span>');
      setTimeout(function () { location.href = url; }, 300);
    }
  };

  /* ── pwd ──────────────────────────────────────── */
  COMMANDS.pwd = function () {
    print('<span class="w">' + esc(location.pathname) + '</span>');
  };

  /* ── grep / search / find ─────────────────────── */
  COMMANDS.grep = COMMANDS.search = COMMANDS.find = function (arg) {
    if (!arg) { print('<span class="e">usage: grep &lt;query&gt;</span>'); return; }
    var res = [];
    var keys = Object.keys(PAGES);
    for (var i = 0; i < keys.length; i++) {
      var p = PAGES[keys[i]];
      if (keys[i].indexOf(arg) !== -1 || p.desc.toLowerCase().indexOf(arg) !== -1)
        res.push('  <span class="h">' + padR(keys[i], 22) + '</span><span class="d">' + esc(p.desc) + '</span>');
    }
    print(res.length ? '\n' + res.join('\n') + '\n' : '<span class="d">no results for "' + esc(arg) + '"</span>');
  };

  /* ── whoami ───────────────────────────────────── */
  COMMANDS.whoami = function () {
    print([
      '',
      '<span class="h">Kodus</span> <span class="d">— The Open Source Alternative to CodeRabbit</span>',
      '',
      '<span class="d">Kody is an AI code reviewer that learns your team\'s</span>',
      '<span class="d">workflow and delivers precise reviews on quality,</span>',
      '<span class="d">security, and performance.</span>',
      '',
      '  <span class="d">repo    </span> <span class="c">github.com/kodustech/kodus-ai</span>',
      '  <span class="d">discord </span> <span class="c">discord.gg/TFZBRk9fT6</span>',
      '  <span class="d">docs    </span> <span class="c">docs.kodus.io</span>',
      '',
    ].join('\n'));
  };

  /* ── pricing ──────────────────────────────────── */
  COMMANDS.pricing = function () {
    var w = [18, 24, 24, 22];
    print([
      '',
      '<span class="w">PRICING PLANS</span>',
      '',
      tblTop(w),
      tblRow(['', 'Community', 'Teams', 'Enterprise'], w, 'tbl-head'),
      tblSep(w),
      tblRow(['Price',        '<span class="g">Free</span>', '<span class="cyan">$10/dev/mo</span>', 'Custom'], w),
      tblRow(['Annual',       '—', '<span class="cyan">$8/dev/mo</span> (save 20%)', 'Custom'], w),
      tblRow(['Hosting',      'Self-hosted / Hosted', 'Hosted by Kodus', 'Hosted / Self-hosted'], w),
      tblRow(['PRs',          'Unlimited', 'Unlimited', 'Unlimited'], w),
      tblRow(['Users',        'Unlimited', 'Unlimited', 'Unlimited'], w),
      tblRow(['Kody Rules',   '10 max', 'Unlimited', 'Unlimited'], w),
      tblRow(['Plugins',      '3 max', 'Unlimited', 'Unlimited'], w),
      tblRow(['Metrics',      '—', '<span class="g">✓</span> Cockpit', '<span class="g">✓</span> Cockpit'], w),
      tblRow(['SSO / RBAC',   '—', '—', '<span class="g">✓</span>'], w),
      tblRow(['Support',      'Discord', 'Email', 'Dedicated + Discord'], w),
      tblBot(w),
      '',
      '<span class="w">TOKEN COSTS</span> <span class="d">(BYOK — you pay AI provider directly, zero markup)</span>',
      '',
      '  <span class="d">Model                 Est. cost / 30 devs</span>',
      '  <span class="h">Sonnet 4.5</span>            <span class="cyan">~$270/mo</span> <span class="d">highest quality</span>',
      '  <span class="h">Gemini Pro</span>            <span class="cyan">~$150/mo</span> <span class="d">best balance</span> <span class="g">★ recommended</span>',
      '  <span class="h">ChatGPT 5.1</span>           <span class="cyan">~$150/mo</span> <span class="d">best balance</span>',
      '  <span class="h">Haiku 4.5</span>             <span class="cyan">~$75/mo</span>  <span class="d">lowest cost</span>',
      '  <span class="h">Gemini Flash</span>          <span class="cyan">~$45/mo</span>  <span class="d">lowest cost</span>',
      '',
      '<span class="d">  Type</span> <span class="c">cd pricing</span> <span class="d">to visit the full pricing page.</span>',
      '',
    ].join('\n'));
  };

  /* ── benchmark ────────────────────────────────── */
  COMMANDS.benchmark = function () {
    var tools = [
      { name: 'Kodus',          overall: 79, critical: 69, high: 81, medium: 89 },
      { name: 'Cursor',         overall: 58, critical: 62, high: 50, medium: 67 },
      { name: 'GitHub Copilot', overall: 53, critical: 54, high: 38, medium: 78 },
      { name: 'CodeRabbit',     overall: 39, critical: 38, high: 31, medium: 56 },
    ];

    var lines = [
      '',
      '<span class="w">AI CODE REVIEW BENCHMARK</span> <span class="d">— 38 PRs across 5 open-source projects</span>',
      '',
      '<span class="w">OVERALL DETECTION RATE</span>',
      '',
    ];
    for (var i = 0; i < tools.length; i++) {
      var t = tools[i];
      lines.push(
        '  ' + padR(t.name, 18) + bar(t.overall, 30) + ' <span class="w">' + t.overall + '%</span>'
      );
    }

    lines.push('');
    lines.push('<span class="w">BY SEVERITY</span>');
    lines.push('');

    var w = [18, 14, 14, 14];
    lines.push(tblTop(w));
    lines.push(tblRow(['Tool', 'Critical (13)', 'High (16)', 'Medium (9)'], w, 'tbl-head'));
    lines.push(tblSep(w));
    for (var j = 0; j < tools.length; j++) {
      var t = tools[j];
      var isTop = j === 0;
      var cl = isTop ? 'g' : 'w';
      lines.push(tblRow([
        '<span class="' + cl + '">' + t.name + '</span>',
        '<span class="' + cl + '">' + t.critical + '%</span>',
        '<span class="' + cl + '">' + t.high + '%</span>',
        '<span class="' + cl + '">' + t.medium + '%</span>',
      ], w));
    }
    lines.push(tblBot(w));
    lines.push('');
    lines.push('<span class="d">  Projects: Sentry (Python), Cal.com (TypeScript), Grafana (Go),</span>');
    lines.push('<span class="d">            Discourse (Ruby), Keycloak (Java)</span>');
    lines.push('');
    lines.push('<span class="d">  Type</span> <span class="c">cd benchmark</span> <span class="d">for full details per PR.</span>');
    lines.push('');

    print(lines.join('\n'));
  };

  /* ── roi ──────────────────────────────────────── */
  COMMANDS.roi = function (arg) {
    var parts = arg ? arg.split(/\s+/) : [];
    var devs = parseInt(parts[0], 10) || 30;
    var rate = parseInt(parts[1], 10) || 50;
    var minPerPR = 30;
    var prsPerDev = 10;

    var totalPRs       = devs * prsPerDev;
    var hoursReview    = totalPRs * minPerPR / 60;
    var currentCost    = hoursReview * rate;
    var savedPct       = 0.6; // 60% time saved
    var savedHours     = hoursReview * savedPct;
    var savedMoney     = savedHours * rate;
    var kodusCost      = devs * 10;
    var netSaved       = savedMoney - kodusCost;
    var roiX           = netSaved > 0 ? Math.round(netSaved / kodusCost) : 0;

    print([
      '',
      '<span class="w">ROI CALCULATOR</span>',
      '',
      '  <span class="d">Developers:</span>       <span class="h">' + devs + '</span>',
      '  <span class="d">Hourly rate:</span>      <span class="h">$' + rate + '</span>',
      '  <span class="d">Avg min/PR:</span>       <span class="h">' + minPerPR + ' min</span>',
      '  <span class="d">PRs/dev/month:</span>    <span class="h">' + prsPerDev + '</span>',
      '',
      '<span class="tbl-border">  ─────────────────────────────────────</span>',
      '',
      '  <span class="d">Monthly PRs:</span>            <span class="w">' + totalPRs + '</span>',
      '  <span class="d">Hours on reviews:</span>       <span class="w">' + hoursReview.toFixed(0) + ' hrs</span>',
      '  <span class="d">Current review cost:</span>    <span class="e">$' + fmt(currentCost) + '/mo</span>',
      '',
      '  <span class="d">Time saved (60%):</span>       <span class="g">' + savedHours.toFixed(0) + ' hrs</span>',
      '  <span class="d">Money saved:</span>            <span class="g">$' + fmt(savedMoney) + '/mo</span>',
      '  <span class="d">Kodus license:</span>          <span class="cyan">$' + fmt(kodusCost) + '/mo</span>',
      '',
      '  <span class="w">Net savings:</span>            <span class="g">$' + fmt(netSaved) + '/mo</span>',
      '  <span class="w">Estimated ROI:</span>          <span class="g">' + roiX + 'x</span>',
      '',
      '<span class="d">  Usage: roi &lt;devs&gt; &lt;hourly_rate&gt;  (e.g. roi 100 75)</span>',
      '',
    ].join('\n'));
  };

  /* ── customers ────────────────────────────────── */
  COMMANDS.customers = function () {
    var companies = [
      'Purple Metrics', 'R10', 'Sommus', 'Ikatec', 'Maino', 'Open Co',
      'Rocket.Chat', 'Vixting', 'Seeds', 'Pilar', 'Asksuite', 'Mecanizou',
      'Doji', 'Lecom', 'Up Estate', 'Cred Aluga', 'Brendi', 'Origen',
    ];

    var testimonials = [
      { who: 'Leonardo Maia',    co: 'Conta Voltz',   text: 'Review time dropped 40%, production bugs halved.' },
      { who: 'Andre Diogo',      co: 'Brendi',        text: 'Faster feedback, can focus on other things.' },
      { who: 'Joao H. Kersul',   co: 'Doji',          text: 'Error handling, unnoticed suggestions, fast turnaround.' },
      { who: 'Ricardo',          co: 'Ikatec',        text: 'Review time down 30%, insights on performance/security.' },
      { who: 'Luiz Barrile',     co: 'Lerian',        text: 'More speed and consistency, reduced rework.' },
      { who: 'Raphael Sampaio',  co: 'Pilar',         text: 'Review time from hours to minutes.' },
      { who: 'Pedro Maia',       co: 'Notificacoes',  text: 'Senior reviewer that never forgets, ensures consistency.' },
      { who: 'Jonathan Georgeu', co: 'Origen',        text: 'Catches small details, custom rules align with standards.' },
    ];

    var lines = [
      '',
      '<span class="w">CUSTOMERS</span> <span class="d">— Teams shipping with Kody</span>',
      '',
      '<span class="w">STATS</span>',
      '  <span class="h">+10M</span>    <span class="d">lines of code reviewed</span>',
      '  <span class="h">+1,000</span>  <span class="d">teams using Kody</span>',
      '  <span class="h">+12</span>     <span class="d">countries</span>',
      '',
      '<span class="w">COMPANIES</span>',
      '  <span class="d">' + companies.join(' · ') + '</span>',
      '',
      '<span class="w">TESTIMONIALS</span>',
      '',
    ];

    for (var i = 0; i < testimonials.length; i++) {
      var t = testimonials[i];
      lines.push('  <span class="d">"</span><span class="w">' + t.text + '</span><span class="d">"</span>');
      lines.push('  <span class="d">— ' + t.who + ' @ </span><span class="h">' + t.co + '</span>');
      lines.push('');
    }
    print(lines.join('\n'));
  };

  /* ── features ─────────────────────────────────── */
  COMMANDS.features = function () {
    print([
      '',
      '<span class="w">KEY FEATURES</span>',
      '',
      '  <span class="g">▸</span> <span class="h">Codebase Context</span>      <span class="d">Learns your project structure, workflows, standards</span>',
      '  <span class="g">▸</span> <span class="h">Custom Rules</span>          <span class="d">Define guidelines in plain language, 10+ built-in rules</span>',
      '  <span class="g">▸</span> <span class="h">Sync Existing Rules</span>   <span class="d">Auto-imports from Cursor, Copilot, Claude, Windsurf</span>',
      '  <span class="g">▸</span> <span class="h">Business Context</span>      <span class="d">MCP servers connect Jira, Notion, Linear</span>',
      '  <span class="g">▸</span> <span class="h">Technical Debt</span>        <span class="d">Auto-tracks suggestions as issues, visualize over time</span>',
      '  <span class="g">▸</span> <span class="h">Cockpit Dashboard</span>     <span class="d">Deploy frequency, cycle time, bug ratio, PR sizes</span>',
      '  <span class="g">▸</span> <span class="h">Privacy & Security</span>    <span class="d">Code never stored, never trains models, SOC 2, E2E encrypted</span>',
      '',
      '<span class="w">WHY TEAMS CHOOSE KODUS</span>',
      '',
      '  <span class="g">▸</span> <span class="h">Generous Free Tier</span>    <span class="d">Full platform access at no cost</span>',
      '  <span class="g">▸</span> <span class="h">Model Agnostic</span>        <span class="d">Anthropic, DeepSeek, Gemini, OpenAI, Grok, Meta</span>',
      '  <span class="g">▸</span> <span class="h">Zero Markup</span>           <span class="d">No markup on AI costs — BYOK</span>',
      '  <span class="g">▸</span> <span class="h">Flexible Config</span>       <span class="d">Custom rules and settings per repo</span>',
      '',
    ].join('\n'));
  };

  /* ── cases ────────────────────────────────────── */
  COMMANDS.cases = function () {
    print([
      '',
      '<span class="w">CASE STUDIES</span>',
      '',
      '<span class="tbl-border">  ┌─────────────────────────────────────────────────────────────────┐</span>',
      '<span class="tbl-border">  │</span> <span class="h">BRN-01 — Brendi</span>                                                <span class="tbl-border">│</span>',
      '<span class="tbl-border">  │</span>                                                                 <span class="tbl-border">│</span>',
      '<span class="tbl-border">  │</span>  <span class="d">Problem:</span>  <span class="w">Review bottleneck. Seniors clearing queues, not coding.</span> <span class="tbl-border">│</span>',
      '<span class="tbl-border">  │</span>  <span class="d">Solution:</span> <span class="w">Kody runs team rules to catch obvious fixes early.</span>    <span class="tbl-border">│</span>',
      '<span class="tbl-border">  │</span>  <span class="d">Impact:</span>   <span class="g">~70% less time on reviews. 125h → 40h/week.</span>         <span class="tbl-border">│</span>',
      '<span class="tbl-border">  └─────────────────────────────────────────────────────────────────┘</span>',
      '',
      '<span class="tbl-border">  ┌─────────────────────────────────────────────────────────────────┐</span>',
      '<span class="tbl-border">  │</span> <span class="h">LER-01 — Lerian</span>                                                <span class="tbl-border">│</span>',
      '<span class="tbl-border">  │</span>                                                                 <span class="tbl-border">│</span>',
      '<span class="tbl-border">  │</span>  <span class="d">Problem:</span>  <span class="w">Inconsistent reviews, rework cycles slowing delivery.</span> <span class="tbl-border">│</span>',
      '<span class="tbl-border">  │</span>  <span class="d">Solution:</span> <span class="w">Automated consistency with custom Kody rules.</span>        <span class="tbl-border">│</span>',
      '<span class="tbl-border">  │</span>  <span class="d">Impact:</span>   <span class="g">More speed, consistency, reduced rework.</span>             <span class="tbl-border">│</span>',
      '<span class="tbl-border">  └─────────────────────────────────────────────────────────────────┘</span>',
      '',
      '<span class="tbl-border">  ┌─────────────────────────────────────────────────────────────────┐</span>',
      '<span class="tbl-border">  │</span> <span class="h">NOT-01 — Notificacoes Inteligentes</span>                             <span class="tbl-border">│</span>',
      '<span class="tbl-border">  │</span>                                                                 <span class="tbl-border">│</span>',
      '<span class="tbl-border">  │</span>  <span class="d">Problem:</span>  <span class="w">Need for a reviewer that never forgets standards.</span>     <span class="tbl-border">│</span>',
      '<span class="tbl-border">  │</span>  <span class="d">Solution:</span> <span class="w">Kody as always-on senior reviewer.</span>                   <span class="tbl-border">│</span>',
      '<span class="tbl-border">  │</span>  <span class="d">Impact:</span>   <span class="g">Consistency guaranteed across all PRs.</span>               <span class="tbl-border">│</span>',
      '<span class="tbl-border">  └─────────────────────────────────────────────────────────────────┘</span>',
      '',
      '<span class="d">  Type</span> <span class="c">cd case-brendi</span><span class="d">,</span> <span class="c">cd case-lerian</span><span class="d">, or</span> <span class="c">cd case-notificacoes</span> <span class="d">for full story.</span>',
      '',
    ].join('\n'));
  };

  /* ── compare ──────────────────────────────────── */
  COMMANDS.compare = function (arg) {
    var data = {
      coderabbit: { name: 'CodeRabbit', overall: 39, price: '$19/dev/mo', oss: 'No',  byok: 'No',  page: 'vs-coderabbit' },
      bugbot:     { name: 'Cursor BugBot', overall: 58, price: 'Included w/ Cursor', oss: 'No',  byok: 'No',  page: 'vs-bugbot' },
      copilot:    { name: 'GitHub Copilot', overall: 53, price: '$10-39/user/mo', oss: 'No',  byok: 'No',  page: 'vs-copilot' },
      claude:     { name: 'Claude Code',    overall: null, price: 'API pricing', oss: 'No',  byok: 'Yes', page: 'vs-claude' },
    };

    if (!arg || !data[arg]) {
      print([
        '<span class="d">Usage: compare &lt;tool&gt;</span>',
        '',
        '  <span class="c">compare coderabbit</span>',
        '  <span class="c">compare bugbot</span>',
        '  <span class="c">compare copilot</span>',
        '  <span class="c">compare claude</span>',
      ].join('\n'));
      return;
    }

    var d = data[arg];
    var w = [18, 20, 20];
    var lines = [
      '',
      '<span class="w">KODUS vs ' + d.name.toUpperCase() + '</span>',
      '',
      tblTop(w),
      tblRow(['', 'Kodus', d.name], w, 'tbl-head'),
      tblSep(w),
      tblRow(['Price',           '<span class="g">Free / $10/dev/mo</span>', d.price], w),
      tblRow(['Open Source',     '<span class="g">Yes</span>', d.oss], w),
      tblRow(['BYOK',            '<span class="g">Yes</span>', d.byok], w),
      tblRow(['Zero Markup',     '<span class="g">Yes</span>', 'No'], w),
      tblRow(['Custom Rules',    '<span class="g">Yes</span>', 'Limited'], w),
    ];

    if (d.overall !== null) {
      lines.push(
        tblRow(['Benchmark Score', '<span class="g">79%</span>', d.overall + '%'], w)
      );
    }

    lines.push(tblBot(w));
    lines.push('');
    lines.push('<span class="d">  Type</span> <span class="c">cd ' + d.page + '</span> <span class="d">for full comparison.</span>');
    lines.push('');

    print(lines.join('\n'));
  };

  /* ── clear / exit ─────────────────────────────── */
  COMMANDS.clear = function () { outEl.innerHTML = ''; };
  COMMANDS.exit = COMMANDS.quit = COMMANDS.q = function () { close(); };

  /* ═══════════════════════════════════════════════════════
     AUTOCOMPLETE
     ═══════════════════════════════════════════════════════ */
  function autocomplete() {
    var val   = inputEl.value.trim();
    var parts = val.split(/\s+/);
    var allCmds = Object.keys(COMMANDS).concat(['ls','cd','open','grep','pwd']);
    // dedupe
    var seen = {}; var cmds = [];
    for (var i = 0; i < allCmds.length; i++) {
      if (!seen[allCmds[i]]) { seen[allCmds[i]] = 1; cmds.push(allCmds[i]); }
    }

    if (parts.length <= 1) {
      var m = cmds.filter(function (c) { return c.indexOf(parts[0].toLowerCase()) === 0; });
      if (m.length === 1) inputEl.value = m[0] + ' ';
      else if (m.length > 1) print('<span class="d">' + m.join('  ') + '</span>');
      return;
    }

    // page name / compare tool autocomplete
    var cmd0 = parts[0].toLowerCase();
    var pfx = parts.slice(1).join(' ').toLowerCase();

    if (cmd0 === 'compare') {
      var tools = ['coderabbit','bugbot','copilot','claude'];
      var m = tools.filter(function (t) { return t.indexOf(pfx) === 0; });
      if (m.length === 1) inputEl.value = parts[0] + ' ' + m[0];
      else if (m.length > 1) print('<span class="d">' + m.join('  ') + '</span>');
      return;
    }

    var ks = Object.keys(PAGES);
    var m = ks.filter(function (k) { return k.indexOf(pfx) === 0; });
    if (m.length === 1) inputEl.value = parts[0] + ' ' + m[0];
    else if (m.length > 1) print('<span class="d">' + m.join('  ') + '</span>');
  }

  /* ═══════════════════════════════════════════════════════
     HELPERS
     ═══════════════════════════════════════════════════════ */
  function findPage(name) {
    if (PAGES[name]) return PAGES[name];
    var ks = Object.keys(PAGES);
    for (var i = 0; i < ks.length; i++) { if (ks[i].indexOf(name) === 0) return PAGES[ks[i]]; }
    return null;
  }

  function esc(s) {
    var d = document.createElement('div');
    d.appendChild(document.createTextNode(s));
    return d.innerHTML;
  }

  function padR(s, n) {
    var plain = stripTags(s);
    var pad = n - plain.length;
    return pad > 0 ? s + repeat(' ', pad) : s;
  }

  function repeat(ch, n) { return n > 0 ? new Array(n + 1).join(ch) : ''; }

  function stripTags(s) { return s.replace(/<[^>]*>/g, ''); }

  function fmt(n) {
    return Math.round(n).toString().replace(/\B(?=(\d{3})+(?!\d))/g, ',');
  }

  /* ═══════════════════════════════════════════════════════
     OPEN / CLOSE
     ═══════════════════════════════════════════════════════ */
  function open() {
    if (isOpen) return;
    createTerminal();
    isOpen = true;
    termEl.offsetHeight;
    termEl.classList.add('open', 'flicker');
    setTimeout(function () { termEl.classList.remove('flicker'); }, 350);
    if (fabEl) fabEl.classList.add('active');
    inputEl.focus();
    document.body.style.overflow = 'hidden';
    if (outEl.childNodes.length === 0) printWelcome();
  }

  function close() {
    if (!isOpen) return;
    isOpen = false;
    termEl.classList.remove('open');
    if (fabEl) fabEl.classList.remove('active');
    document.body.style.overflow = '';
  }

  function toggle() { isOpen ? close() : open(); }

  /* ═══════════════════════════════════════════════════════
     KEYBOARD
     ═══════════════════════════════════════════════════════ */
  document.addEventListener('keydown', function (e) {
    if (e.ctrlKey && e.shiftKey && (e.key === 'K' || e.key === 'k')) { e.preventDefault(); toggle(); }
    if (e.key === 'Escape' && isOpen) close();
  });

  /* ═══════════════════════════════════════════════════════
     INIT
     ═══════════════════════════════════════════════════════ */
  if (document.readyState === 'loading') document.addEventListener('DOMContentLoaded', createFab);
  else createFab();
})();
