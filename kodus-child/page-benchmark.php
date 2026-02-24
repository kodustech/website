<?php
/*
 * Template Name: Kodus Benchmark
 * Template Post Type: page
 */
?>
<?php get_header('kodus'); ?>

<main>

    <!-- ========== HERO ========== -->
    <section class="bench__hero">
      <div class="container">
        <h1 class="section-title">AI Code Review <span class="highlight">Benchmark</span></h1>
        <p class="bench__hero-sub">We evaluated Kody and other AI code review tools on the same PRs across five open-source projects. The goal is to give you a clear picture of how each tool performs in real reviews.</p>
      </div>
    </section>

    <!-- ========== METHODOLOGY (Industrial Frame) ========== -->
    <section class="bench__method">
      <div class="container">
        <div class="bench__frame">
          <!-- Screws -->
          <span class="bench__screw bench__screw--tl"></span>
          <span class="bench__screw bench__screw--tr"></span>
          <span class="bench__screw bench__screw--bl"></span>
          <span class="bench__screw bench__screw--br"></span>

          <!-- Header bar -->
          <div class="bench__frame-header">
            <div class="bench__frame-brand">
              <span class="bench__frame-logo">KODUS</span>
              <span class="bench__frame-sub">// BENCHMARK ANALYZER</span>
            </div>
            <div class="bench__frame-status">
              <span class="bench__led bench__led--green"></span>
              <span class="bench__frame-status-text">SCAN_COMPLETE [v1.0]</span>
            </div>
          </div>

          <!-- Content grid -->
          <div class="bench__method-grid">
            <!-- Left: methodology text -->
            <div class="bench__method-text">
              <div class="bench__label-bar">
                <span class="bench__label-bar-text">METHODOLOGY</span>
              </div>
              <p>We selected nine pull requests from five large, actively maintained open-source repositories. Each PR contained at least one real, documented issue — a bug, a security vulnerability, or a performance concern that was later confirmed by the project maintainers.</p>
              <p>We then ran four AI code review tools on each PR under identical conditions: same diff, same context window, default configuration. No tool received any hints or custom rules.</p>
              <p>A finding was counted as a hit only if the tool flagged the specific issue that the PR was known to contain. Generic style or formatting comments were ignored.</p>
            </div>

            <!-- Right: repos in monitor screen -->
            <div class="bench__repos-panel">
              <div class="bench__label-bar">
                <span class="bench__label-bar-text">REPOSITORIES ANALYZED</span>
              </div>
              <div class="bench__monitor">
                <div class="bench__monitor-screen">
                  <ul class="bench__repo-list">
                    <li><span class="bench__repo-bullet">&#9654;</span> <a href="https://github.com/getsentry/sentry" target="_blank" rel="noopener">getsentry/sentry</a></li>
                    <li><span class="bench__repo-bullet">&#9654;</span> <a href="https://github.com/calcom/cal.com" target="_blank" rel="noopener">calcom/cal.com</a></li>
                    <li><span class="bench__repo-bullet">&#9654;</span> <a href="https://github.com/grafana/grafana" target="_blank" rel="noopener">grafana/grafana</a></li>
                    <li><span class="bench__repo-bullet">&#9654;</span> <a href="https://github.com/discourse/discourse" target="_blank" rel="noopener">discourse/discourse</a></li>
                    <li><span class="bench__repo-bullet">&#9654;</span> <a href="https://github.com/keycloak/keycloak" target="_blank" rel="noopener">keycloak/keycloak</a></li>
                  </ul>
                  <!-- Scanlines -->
                  <div class="bench__scanlines"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- ========== TL;DR (Terminal Window) ========== -->
    <section class="bench__tldr">
      <div class="container">
        <div class="bench__terminal">
          <!-- Terminal bar -->
          <div class="bench__terminal-bar">
            <div class="bench__terminal-dots">
              <span class="bench__dot bench__dot--red"></span>
              <span class="bench__dot bench__dot--yellow"></span>
              <span class="bench__dot bench__dot--green"></span>
            </div>
            <span class="bench__terminal-title">benchmark_summary.sh</span>
            <span class="bench__terminal-status">&#9679; DONE</span>
          </div>

          <!-- Terminal body -->
          <div class="bench__terminal-body">
            <div class="bench__terminal-line">
              <span class="bench__prompt">$</span>
              <span class="bench__cmd">cat results/tldr.txt</span>
            </div>

            <div class="bench__tldr-output">
              <div class="bench__tldr-row">
                <span class="bench__sev bench__sev--critical">CRITICAL</span>
                <span class="bench__tldr-text">Kodus detected 69% of critical issues (9/13). Cursor came second at 62%.</span>
              </div>
              <div class="bench__tldr-row">
                <span class="bench__sev bench__sev--high">HIGH</span>
                <span class="bench__tldr-text">Kodus led high-severity detection at 81% (13/16). CodeRabbit detected only 31%.</span>
              </div>
              <div class="bench__tldr-row">
                <span class="bench__sev bench__sev--medium">MEDIUM</span>
                <span class="bench__tldr-text">Kodus caught 89% of medium issues (8/9). GitHub Copilot came second at 78%.</span>
              </div>
              <div class="bench__tldr-row">
                <span class="bench__tldr-highlight">&#9733;</span>
                <span class="bench__tldr-text"><strong>Overall:</strong> Kodus was the most consistent tool across 38 PRs, catching <strong>30/38 known issues (79%)</strong> across every severity level.</span>
              </div>
            </div>

            <div class="bench__terminal-line bench__terminal-line--end">
              <span class="bench__prompt">$</span>
              <span class="bench__cursor">&#9608;</span>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- ========== PERFORMANCE CHARTS (Monitor Frame) ========== -->
    <section class="bench__charts">
      <div class="container">
        <h2 class="section-title">Overall Performance</h2>

        <div class="bench__charts-frame">
          <div class="bench__charts-bar">
            <div class="bench__terminal-dots">
              <span class="bench__dot bench__dot--red"></span>
              <span class="bench__dot bench__dot--yellow"></span>
              <span class="bench__dot bench__dot--green"></span>
            </div>
            <span class="bench__charts-bar-title">PERF_ANALYSIS.DAT</span>
            <span class="bench__charts-bar-status">38 PRs ANALYZED</span>
          </div>

          <div class="bench__charts-screen">
            <!-- Overall -->
            <div class="bench__chart-group">
              <h3 class="bench__chart-label">Overall — Issues Detected (38 PRs)</h3>
              <div class="bench__bar-row">
                <span class="bench__bar-name">Kodus</span>
                <div class="bench__bar-track"><div class="bench__bar bench__bar--kodus" style="width: 79%;"><span class="bench__bar-val">30 / 38</span></div></div>
                <span class="bench__bar-pct">79%</span>
              </div>
              <div class="bench__bar-row">
                <span class="bench__bar-name">Cursor</span>
                <div class="bench__bar-track"><div class="bench__bar bench__bar--other" style="width: 58%;"><span class="bench__bar-val">22 / 38</span></div></div>
                <span class="bench__bar-pct">58%</span>
              </div>
              <div class="bench__bar-row">
                <span class="bench__bar-name">GitHub Copilot</span>
                <div class="bench__bar-track"><div class="bench__bar bench__bar--other" style="width: 53%;"><span class="bench__bar-val">20 / 38</span></div></div>
                <span class="bench__bar-pct">53%</span>
              </div>
              <div class="bench__bar-row">
                <span class="bench__bar-name">CodeRabbit</span>
                <div class="bench__bar-track"><div class="bench__bar bench__bar--other" style="width: 39%;"><span class="bench__bar-val">15 / 38</span></div></div>
                <span class="bench__bar-pct">39%</span>
              </div>
            </div>

            <!-- Critical -->
            <div class="bench__chart-group">
              <h3 class="bench__chart-label">Critical Severity (13 PRs)</h3>
              <div class="bench__bar-row">
                <span class="bench__bar-name">Kodus</span>
                <div class="bench__bar-track"><div class="bench__bar bench__bar--kodus" style="width: 69%;"><span class="bench__bar-val">9 / 13</span></div></div>
                <span class="bench__bar-pct">69%</span>
              </div>
              <div class="bench__bar-row">
                <span class="bench__bar-name">Cursor</span>
                <div class="bench__bar-track"><div class="bench__bar bench__bar--other" style="width: 62%;"><span class="bench__bar-val">8 / 13</span></div></div>
                <span class="bench__bar-pct">62%</span>
              </div>
              <div class="bench__bar-row">
                <span class="bench__bar-name">GitHub Copilot</span>
                <div class="bench__bar-track"><div class="bench__bar bench__bar--other" style="width: 54%;"><span class="bench__bar-val">7 / 13</span></div></div>
                <span class="bench__bar-pct">54%</span>
              </div>
              <div class="bench__bar-row">
                <span class="bench__bar-name">CodeRabbit</span>
                <div class="bench__bar-track"><div class="bench__bar bench__bar--other" style="width: 38%;"><span class="bench__bar-val">5 / 13</span></div></div>
                <span class="bench__bar-pct">38%</span>
              </div>
            </div>

            <!-- High -->
            <div class="bench__chart-group">
              <h3 class="bench__chart-label">High Severity (16 PRs)</h3>
              <div class="bench__bar-row">
                <span class="bench__bar-name">Kodus</span>
                <div class="bench__bar-track"><div class="bench__bar bench__bar--kodus" style="width: 81%;"><span class="bench__bar-val">13 / 16</span></div></div>
                <span class="bench__bar-pct">81%</span>
              </div>
              <div class="bench__bar-row">
                <span class="bench__bar-name">Cursor</span>
                <div class="bench__bar-track"><div class="bench__bar bench__bar--other" style="width: 50%;"><span class="bench__bar-val">8 / 16</span></div></div>
                <span class="bench__bar-pct">50%</span>
              </div>
              <div class="bench__bar-row">
                <span class="bench__bar-name">GitHub Copilot</span>
                <div class="bench__bar-track"><div class="bench__bar bench__bar--other" style="width: 38%;"><span class="bench__bar-val">6 / 16</span></div></div>
                <span class="bench__bar-pct">38%</span>
              </div>
              <div class="bench__bar-row">
                <span class="bench__bar-name">CodeRabbit</span>
                <div class="bench__bar-track"><div class="bench__bar bench__bar--other" style="width: 31%;"><span class="bench__bar-val">5 / 16</span></div></div>
                <span class="bench__bar-pct">31%</span>
              </div>
            </div>

            <!-- Medium -->
            <div class="bench__chart-group">
              <h3 class="bench__chart-label">Medium Severity (9 PRs)</h3>
              <div class="bench__bar-row">
                <span class="bench__bar-name">Kodus</span>
                <div class="bench__bar-track"><div class="bench__bar bench__bar--kodus" style="width: 89%;"><span class="bench__bar-val">8 / 9</span></div></div>
                <span class="bench__bar-pct">89%</span>
              </div>
              <div class="bench__bar-row">
                <span class="bench__bar-name">GitHub Copilot</span>
                <div class="bench__bar-track"><div class="bench__bar bench__bar--other" style="width: 78%;"><span class="bench__bar-val">7 / 9</span></div></div>
                <span class="bench__bar-pct">78%</span>
              </div>
              <div class="bench__bar-row">
                <span class="bench__bar-name">Cursor</span>
                <div class="bench__bar-track"><div class="bench__bar bench__bar--other" style="width: 67%;"><span class="bench__bar-val">6 / 9</span></div></div>
                <span class="bench__bar-pct">67%</span>
              </div>
              <div class="bench__bar-row">
                <span class="bench__bar-name">CodeRabbit</span>
                <div class="bench__bar-track"><div class="bench__bar bench__bar--other" style="width: 56%;"><span class="bench__bar-val">5 / 9</span></div></div>
                <span class="bench__bar-pct">56%</span>
              </div>
            </div>

            <div class="bench__scanlines"></div>
          </div>
        </div>
      </div>
    </section>

    <!-- ========== DETAILED RESULTS (Tabbed) ========== -->
    <section class="bench__table-section">
      <div class="container">
        <h2 class="section-title">Detailed Results</h2>

        <!-- Tabs -->
        <div class="bench__tabs">
          <button type="button" class="bench__tab bench__tab--active" data-tab="sentry">Sentry <span class="bench__tab-lang">PYTHON</span></button>
          <button type="button" class="bench__tab" data-tab="calcom">Cal.com <span class="bench__tab-lang">TYPESCRIPT</span></button>
          <button type="button" class="bench__tab" data-tab="grafana">Grafana <span class="bench__tab-lang">GO</span></button>
          <button type="button" class="bench__tab" data-tab="discourse">Discourse <span class="bench__tab-lang">RUBY</span></button>
          <button type="button" class="bench__tab" data-tab="keycloak">Keycloak <span class="bench__tab-lang">JAVA</span></button>
        </div>

        <!-- ===== Sentry ===== -->
        <div class="bench__tab-panel bench__tab-panel--active" id="tab-sentry">
          <div class="bench__table-frame">
            <div class="bench__charts-bar">
              <div class="bench__terminal-dots">
                <span class="bench__dot bench__dot--red"></span>
                <span class="bench__dot bench__dot--yellow"></span>
                <span class="bench__dot bench__dot--green"></span>
              </div>
              <span class="bench__charts-bar-title">SENTRY_REPORT.CSV</span>
              <span class="bench__charts-bar-status">9 RECORDS</span>
            </div>
            <div class="bench__table-wrap">
              <table class="bench__table">
                <thead>
                  <tr>
                    <th class="bench__th-issue">PR / Bug</th>
                    <th class="bench__th-sev">Severity</th>
                    <th>Kodus</th>
                    <th>CodeRabbit</th>
                    <th>GitHub Copilot</th>
                    <th>Cursor</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="bench__td-issue"><strong>Replays Self-Serve Bulk Delete System</strong><span class="bench__td-desc">Breaking changes in error response format</span></td>
                    <td><span class="bench__sev bench__sev--critical">CRITICAL</span></td>
                    <td class="bench__td-check"><a href="https://github.com/edvaldofreitas/sentry-kodus-review/pull/10" target="_blank" rel="noopener" class="bench__td-link"><span class="bench__miss">&#10005;</span></a></td>
                    <td class="bench__td-check"><a href="https://github.com/ai-code-review-evaluation/sentry-cursor/pull/5" target="_blank" rel="noopener" class="bench__td-link"><span class="bench__miss">&#10005;</span></a></td>
                    <td class="bench__td-check"><a href="https://github.com/ai-code-review-evaluation/sentry-copilot/pull/4" target="_blank" rel="noopener" class="bench__td-link"><span class="bench__miss">&#10005;</span></a></td>
                    <td class="bench__td-check"><a href="https://github.com/ai-code-review-evaluation/sentry-cursor/pull/5" target="_blank" rel="noopener" class="bench__td-link"><span class="bench__miss">&#10005;</span></a></td>
                  </tr>
                  <tr>
                    <td class="bench__td-issue"><strong>GitHub OAuth Security Enhancement</strong><span class="bench__td-desc">Null reference if github_authenticated_user state is missing</span></td>
                    <td><span class="bench__sev bench__sev--critical">CRITICAL</span></td>
                    <td class="bench__td-check"><a href="https://github.com/edvaldofreitas/sentry-kodus-review/pull/9" target="_blank" rel="noopener" class="bench__td-link"><span class="bench__hit">&#10003;</span></a></td>
                    <td class="bench__td-check"><a href="https://github.com/ai-code-review-evaluation/sentry-coderabbit/pull/4" target="_blank" rel="noopener" class="bench__td-link"><span class="bench__miss">&#10005;</span></a></td>
                    <td class="bench__td-check"><a href="https://github.com/ai-code-review-evaluation/sentry-copilot/pull/3" target="_blank" rel="noopener" class="bench__td-link"><span class="bench__hit">&#10003;</span></a></td>
                    <td class="bench__td-check"><a href="https://github.com/ai-code-review-evaluation/sentry-cursor/pull/4" target="_blank" rel="noopener" class="bench__td-link"><span class="bench__hit">&#10003;</span></a></td>
                  </tr>
                  <tr>
                    <td class="bench__td-issue"><strong>Optimize spans buffer insertion with eviction during insert</strong><span class="bench__td-desc">Negative offset cursor manipulation bypasses pagination boundaries</span></td>
                    <td><span class="bench__sev bench__sev--critical">CRITICAL</span></td>
                    <td class="bench__td-check"><a href="https://github.com/kodustech/sentry-kodus/pull/7" target="_blank" rel="noopener" class="bench__td-link"><span class="bench__hit">&#10003;</span></a></td>
                    <td class="bench__td-check"><a href="https://github.com/ai-code-review-evaluation/sentry-coderabbit/pull/2" target="_blank" rel="noopener" class="bench__td-link"><span class="bench__hit">&#10003;</span></a></td>
                    <td class="bench__td-check"><a href="https://github.com/ai-code-review-evaluation/sentry-copilot/pull/10" target="_blank" rel="noopener" class="bench__td-link"><span class="bench__miss">&#10005;</span></a></td>
                    <td class="bench__td-check"><a href="https://github.com/ai-code-review-evaluation/sentry-cursor/pull/2" target="_blank" rel="noopener" class="bench__td-link"><span class="bench__hit">&#10003;</span></a></td>
                  </tr>
                  <tr>
                    <td class="bench__td-issue"><strong>Enhanced Pagination Performance for High-Volume Audit Logs</strong><span class="bench__td-desc">Importing non-existent OptimizedCursorPaginator</span></td>
                    <td><span class="bench__sev bench__sev--high">HIGH</span></td>
                    <td class="bench__td-check"><a href="https://github.com/edvaldofreitas/sentry-kodus-review/pull/1" target="_blank" rel="noopener" class="bench__td-link"><span class="bench__miss">&#10005;</span></a></td>
                    <td class="bench__td-check"><a href="https://github.com/ai-code-review-evaluation/sentry-coderabbit/pull/1" target="_blank" rel="noopener" class="bench__td-link"><span class="bench__miss">&#10005;</span></a></td>
                    <td class="bench__td-check"><a href="https://github.com/ai-code-review-evaluation/sentry-copilot/pull/1" target="_blank" rel="noopener" class="bench__td-link"><span class="bench__miss">&#10005;</span></a></td>
                    <td class="bench__td-check"><a href="https://github.com/ai-code-review-evaluation/sentry-cursor/pull/1" target="_blank" rel="noopener" class="bench__td-link"><span class="bench__miss">&#10005;</span></a></td>
                  </tr>
                  <tr>
                    <td class="bench__td-issue"><strong>Reorganize incident creation / issue occurrence logic</strong><span class="bench__td-desc">Using stale config variable instead of updated one</span></td>
                    <td><span class="bench__sev bench__sev--high">HIGH</span></td>
                    <td class="bench__td-check"><a href="https://github.com/edvaldofreitas/sentry-kodus/pull/27" target="_blank" rel="noopener" class="bench__td-link"><span class="bench__hit">&#10003;</span></a></td>
                    <td class="bench__td-check"><a href="https://github.com/ai-code-review-evaluation/sentry-coderabbit/pull/9" target="_blank" rel="noopener" class="bench__td-link"><span class="bench__hit">&#10003;</span></a></td>
                    <td class="bench__td-check"><a href="https://github.com/ai-code-review-evaluation/sentry-copilot/pull/7" target="_blank" rel="noopener" class="bench__td-link"><span class="bench__miss">&#10005;</span></a></td>
                    <td class="bench__td-check"><a href="https://github.com/ai-code-review-evaluation/sentry-cursor/pull/8" target="_blank" rel="noopener" class="bench__td-link"><span class="bench__miss">&#10005;</span></a></td>
                  </tr>
                  <tr>
                    <td class="bench__td-issue"><strong>Add ability to use queues to manage parallelism</strong><span class="bench__td-desc">Invalid queue.ShutDown exception handling</span></td>
                    <td><span class="bench__sev bench__sev--high">HIGH</span></td>
                    <td class="bench__td-check"><a href="https://github.com/edvaldofreitas/sentry-kodus-review/pull/12" target="_blank" rel="noopener" class="bench__td-link"><span class="bench__hit">&#10003;</span></a></td>
                    <td class="bench__td-check"><a href="https://github.com/ai-code-review-evaluation/sentry-coderabbit/pull/9" target="_blank" rel="noopener" class="bench__td-link"><span class="bench__miss">&#10005;</span></a></td>
                    <td class="bench__td-check"><a href="https://github.com/ai-code-review-evaluation/sentry-copilot/pull/9" target="_blank" rel="noopener" class="bench__td-link"><span class="bench__hit">&#10003;</span></a></td>
                    <td class="bench__td-check"><a href="https://github.com/ai-code-review-evaluation/sentry-cursor/pull/9" target="_blank" rel="noopener" class="bench__td-link"><span class="bench__miss">&#10005;</span></a></td>
                  </tr>
                  <tr>
                    <td class="bench__td-issue"><strong>Add hook for producing occurrences from the stateful detector</strong><span class="bench__td-desc">Incomplete implementation (only contains pass)</span></td>
                    <td><span class="bench__sev bench__sev--high">HIGH</span></td>
                    <td class="bench__td-check"><a href="https://github.com/edvaldofreitas/sentry-kodus-review/pull/13" target="_blank" rel="noopener" class="bench__td-link"><span class="bench__hit">&#10003;</span></a></td>
                    <td class="bench__td-check"><a href="https://github.com/ai-code-review-evaluation/sentry-coderabbit/pull/10" target="_blank" rel="noopener" class="bench__td-link"><span class="bench__miss">&#10005;</span></a></td>
                    <td class="bench__td-check"><a href="https://github.com/ai-code-review-evaluation/sentry-copilot/pull/9" target="_blank" rel="noopener" class="bench__td-link"><span class="bench__miss">&#10005;</span></a></td>
                    <td class="bench__td-check"><a href="https://github.com/ai-code-review-evaluation/sentry-cursor/pull/10" target="_blank" rel="noopener" class="bench__td-link"><span class="bench__hit">&#10003;</span></a></td>
                  </tr>
                  <tr>
                    <td class="bench__td-issue"><strong>Span Buffer Multiprocess Enhancement with Health Monitoring</strong><span class="bench__td-desc">Inconsistent metric tagging with &#x27;shard&#x27; and &#x27;shards&#x27;</span></td>
                    <td><span class="bench__sev bench__sev--medium">MEDIUM</span></td>
                    <td class="bench__td-check"><a href="https://github.com/kodustech/sentry-kodus/pull/9" target="_blank" rel="noopener" class="bench__td-link"><span class="bench__hit">&#10003;</span></a></td>
                    <td class="bench__td-check"><a href="https://github.com/ai-code-review-evaluation/sentry-coderabbit/pull/6" target="_blank" rel="noopener" class="bench__td-link"><span class="bench__miss">&#10005;</span></a></td>
                    <td class="bench__td-check"><a href="https://github.com/ai-code-review-evaluation/sentry-copilot/pull/5" target="_blank" rel="noopener" class="bench__td-link"><span class="bench__hit">&#10003;</span></a></td>
                    <td class="bench__td-check"><a href="https://github.com/ai-code-review-evaluation/sentry-cursor/pull/6" target="_blank" rel="noopener" class="bench__td-link"><span class="bench__miss">&#10005;</span></a></td>
                  </tr>
                  <tr>
                    <td class="bench__td-issue"><strong>Implement cross-system issue synchronization</strong><span class="bench__td-desc">Shared mutable default in dataclass timestamp</span></td>
                    <td><span class="bench__sev bench__sev--medium">MEDIUM</span></td>
                    <td class="bench__td-check"><a href="https://github.com/edvaldofreitas/sentry-kodus-review/pull/18" target="_blank" rel="noopener" class="bench__td-link"><span class="bench__hit">&#10003;</span></a></td>
                    <td class="bench__td-check"><a href="https://github.com/ai-code-review-evaluation/sentry-coderabbit/pull/7" target="_blank" rel="noopener" class="bench__td-link"><span class="bench__hit">&#10003;</span></a></td>
                    <td class="bench__td-check"><a href="https://github.com/ai-code-review-evaluation/sentry-copilot/pull/6" target="_blank" rel="noopener" class="bench__td-link"><span class="bench__hit">&#10003;</span></a></td>
                    <td class="bench__td-check"><a href="https://github.com/ai-code-review-evaluation/sentry-cursor/pull/7" target="_blank" rel="noopener" class="bench__td-link"><span class="bench__hit">&#10003;</span></a></td>
                  </tr>
                </tbody>
                <tfoot>
                  <tr class="bench__totals">
                    <td><strong>Total</strong></td>
                    <td></td>
                    <td><strong class="bench__total--kodus">7 / 9</strong></td>
                    <td><strong>3 / 9</strong></td>
                    <td><strong>4 / 9</strong></td>
                    <td><strong>4 / 9</strong></td>
                  </tr>
                </tfoot>
              </table>
            </div>
          </div>
        </div>

        <!-- ===== Cal.com ===== -->
        <div class="bench__tab-panel" id="tab-calcom">
          <div class="bench__table-frame">
            <div class="bench__charts-bar">
              <div class="bench__terminal-dots">
                <span class="bench__dot bench__dot--red"></span>
                <span class="bench__dot bench__dot--yellow"></span>
                <span class="bench__dot bench__dot--green"></span>
              </div>
              <span class="bench__charts-bar-title">CALCOM_REPORT.CSV</span>
              <span class="bench__charts-bar-status">8 RECORDS</span>
            </div>
            <div class="bench__table-wrap">
              <table class="bench__table">
                <thead>
                  <tr>
                    <th class="bench__th-issue">PR / Bug</th>
                    <th class="bench__th-sev">Severity</th>
                    <th>Kodus</th>
                    <th>CodeRabbit</th>
                    <th>GitHub Copilot</th>
                    <th>Cursor</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="bench__td-issue"><strong>feat: 2fa backup codes</strong><span class="bench__td-desc">Backup codes not invalidated after use</span></td>
                    <td><span class="bench__sev bench__sev--critical">CRITICAL</span></td>
                    <td class="bench__td-check"><a href="https://github.com/edvaldofreitas/cal.com-kodus/pull/6" target="_blank" rel="noopener" class="bench__td-link"><span class="bench__miss">&#10005;</span></a></td>
                    <td class="bench__td-check"><a href="https://github.com/ai-code-review-evaluation/cal.com-coderabbit/pull/3" target="_blank" rel="noopener" class="bench__td-link"><span class="bench__hit">&#10003;</span></a></td>
                    <td class="bench__td-check"><a href="https://github.com/ai-code-review-evaluation/cal.com-copilot/pull/3" target="_blank" rel="noopener" class="bench__td-link"><span class="bench__miss">&#10005;</span></a></td>
                    <td class="bench__td-check"><a href="https://github.com/ai-code-review-evaluation/cal.com-cursor/pull/3" target="_blank" rel="noopener" class="bench__td-link"><span class="bench__miss">&#10005;</span></a></td>
                  </tr>
                  <tr>
                    <td class="bench__td-issue"><strong>fix: handle collective multiple host on destinationCalendar</strong><span class="bench__td-desc">Null reference error if array is empty</span></td>
                    <td><span class="bench__sev bench__sev--medium">MEDIUM</span></td>
                    <td class="bench__td-check"><a href="https://github.com/edvaldofreitas/cal.com-kodus/pull/14" target="_blank" rel="noopener" class="bench__td-link"><span class="bench__hit">&#10003;</span></a></td>
                    <td class="bench__td-check"><a href="https://github.com/ai-code-review-evaluation/cal.com-coderabbit/pull/4" target="_blank" rel="noopener" class="bench__td-link"><span class="bench__miss">&#10005;</span></a></td>
                    <td class="bench__td-check"><a href="https://github.com/ai-code-review-evaluation/cal.com-copilot/pull/4" target="_blank" rel="noopener" class="bench__td-link"><span class="bench__hit">&#10003;</span></a></td>
                    <td class="bench__td-check"><a href="https://github.com/ai-code-review-evaluation/cal.com-cursor/pull/4" target="_blank" rel="noopener" class="bench__td-link"><span class="bench__hit">&#10003;</span></a></td>
                  </tr>
                  <tr>
                    <td class="bench__td-issue"><strong>feat: convert InsightsBookingService to use Prisma.sql raw queries</strong><span class="bench__td-desc">Potential SQL injection risk in raw SQL query construction</span></td>
                    <td><span class="bench__sev bench__sev--critical">CRITICAL</span></td>
                    <td class="bench__td-check"><a href="https://github.com/edvaldofreitas/cal.com-kodus/pull/8" target="_blank" rel="noopener" class="bench__td-link"><span class="bench__miss">&#10005;</span></a></td>
                    <td class="bench__td-check"><a href="https://github.com/ai-code-review-evaluation/cal.com-coderabbit/pull/5" target="_blank" rel="noopener" class="bench__td-link"><span class="bench__miss">&#10005;</span></a></td>
                    <td class="bench__td-check"><a href="https://github.com/ai-code-review-evaluation/cal.com-copilot/pull/5" target="_blank" rel="noopener" class="bench__td-link"><span class="bench__hit">&#10003;</span></a></td>
                    <td class="bench__td-check"><a href="https://github.com/ai-code-review-evaluation/cal.com-cursor/pull/5" target="_blank" rel="noopener" class="bench__td-link"><span class="bench__miss">&#10005;</span></a></td>
                  </tr>
                  <tr>
                    <td class="bench__td-issue"><strong>Comprehensive workflow reminder management for booking lifecycle events</strong><span class="bench__td-desc">Missing database cleanup when immediateDelete is true</span></td>
                    <td><span class="bench__sev bench__sev--high">HIGH</span></td>
                    <td class="bench__td-check"><a href="https://github.com/edvaldofreitas/cal.com-kodus/pull/9" target="_blank" rel="noopener" class="bench__td-link"><span class="bench__hit">&#10003;</span></a></td>
                    <td class="bench__td-check"><a href="https://github.com/ai-code-review-evaluation/cal.com-coderabbit/pull/6" target="_blank" rel="noopener" class="bench__td-link"><span class="bench__miss">&#10005;</span></a></td>
                    <td class="bench__td-check"><a href="https://github.com/ai-code-review-evaluation/cal.com-copilot/pull/6" target="_blank" rel="noopener" class="bench__td-link"><span class="bench__miss">&#10005;</span></a></td>
                    <td class="bench__td-check"><a href="https://github.com/ai-code-review-evaluation/cal.com-cursor/pull/6" target="_blank" rel="noopener" class="bench__td-link"><span class="bench__hit">&#10003;</span></a></td>
                  </tr>
                  <tr>
                    <td class="bench__td-issue"><strong>Advanced date override handling and timezone compatibility improvements</strong><span class="bench__td-desc">Incorrect end time calculation using slotStartTime instead of slotEndTime</span></td>
                    <td><span class="bench__sev bench__sev--medium">MEDIUM</span></td>
                    <td class="bench__td-check"><a href="https://github.com/edvaldofreitas/cal.com-kodus/pull/10" target="_blank" rel="noopener" class="bench__td-link"><span class="bench__hit">&#10003;</span></a></td>
                    <td class="bench__td-check"><a href="https://github.com/ai-code-review-evaluation/cal.com-coderabbit/pull/7" target="_blank" rel="noopener" class="bench__td-link"><span class="bench__hit">&#10003;</span></a></td>
                    <td class="bench__td-check"><a href="https://github.com/ai-code-review-evaluation/cal.com-copilot/pull/7" target="_blank" rel="noopener" class="bench__td-link"><span class="bench__hit">&#10003;</span></a></td>
                    <td class="bench__td-check"><a href="https://github.com/ai-code-review-evaluation/cal.com-cursor/pull/7" target="_blank" rel="noopener" class="bench__td-link"><span class="bench__miss">&#10005;</span></a></td>
                  </tr>
                  <tr>
                    <td class="bench__td-issue"><strong>OAuth credential sync and app integration enhancements</strong><span class="bench__td-desc">Timing attack vulnerability using direct string comparison</span></td>
                    <td><span class="bench__sev bench__sev--critical">CRITICAL</span></td>
                    <td class="bench__td-check"><a href="https://github.com/kodustech/cal.com-kodus/pull/1" target="_blank" rel="noopener" class="bench__td-link"><span class="bench__hit">&#10003;</span></a></td>
                    <td class="bench__td-check"><a href="https://github.com/ai-code-review-evaluation/cal.com-coderabbit/pull/8" target="_blank" rel="noopener" class="bench__td-link"><span class="bench__miss">&#10005;</span></a></td>
                    <td class="bench__td-check"><a href="https://github.com/ai-code-review-evaluation/cal.com-copilot/pull/8" target="_blank" rel="noopener" class="bench__td-link"><span class="bench__miss">&#10005;</span></a></td>
                    <td class="bench__td-check"><a href="https://github.com/ai-code-review-evaluation/cal.com-cursor/pull/8" target="_blank" rel="noopener" class="bench__td-link"><span class="bench__miss">&#10005;</span></a></td>
                  </tr>
                  <tr>
                    <td class="bench__td-issue"><strong>SMS workflow reminder retry count tracking</strong><span class="bench__td-desc">OR condition causes deletion of all workflow reminders</span></td>
                    <td><span class="bench__sev bench__sev--high">HIGH</span></td>
                    <td class="bench__td-check"><a href="https://github.com/edvaldofreitas/cal.com-kodus/pull/12" target="_blank" rel="noopener" class="bench__td-link"><span class="bench__hit">&#10003;</span></a></td>
                    <td class="bench__td-check"><a href="https://github.com/ai-code-review-evaluation/cal.com-coderabbit/pull/9" target="_blank" rel="noopener" class="bench__td-link"><span class="bench__hit">&#10003;</span></a></td>
                    <td class="bench__td-check"><a href="https://github.com/ai-code-review-evaluation/cal.com-copilot/pull/9" target="_blank" rel="noopener" class="bench__td-link"><span class="bench__hit">&#10003;</span></a></td>
                    <td class="bench__td-check"><a href="https://github.com/ai-code-review-evaluation/cal.com-cursor/pull/9" target="_blank" rel="noopener" class="bench__td-link"><span class="bench__hit">&#10003;</span></a></td>
                  </tr>
                  <tr>
                    <td class="bench__td-issue"><strong>Add guest management functionality to existing bookings</strong><span class="bench__td-desc">Case sensitivity bypass in email blacklist</span></td>
                    <td><span class="bench__sev bench__sev--high">HIGH</span></td>
                    <td class="bench__td-check"><a href="https://github.com/edvaldofreitas/cal.com-kodus/pull/13" target="_blank" rel="noopener" class="bench__td-link"><span class="bench__miss">&#10005;</span></a></td>
                    <td class="bench__td-check"><a href="https://github.com/ai-code-review-evaluation/cal.com-coderabbit/pull/10" target="_blank" rel="noopener" class="bench__td-link"><span class="bench__miss">&#10005;</span></a></td>
                    <td class="bench__td-check"><a href="https://github.com/ai-code-review-evaluation/cal.com-copilot/pull/10" target="_blank" rel="noopener" class="bench__td-link"><span class="bench__hit">&#10003;</span></a></td>
                    <td class="bench__td-check"><a href="https://github.com/ai-code-review-evaluation/cal.com-cursor/pull/10" target="_blank" rel="noopener" class="bench__td-link"><span class="bench__miss">&#10005;</span></a></td>
                  </tr>
                </tbody>
                <tfoot>
                  <tr class="bench__totals">
                    <td><strong>Total</strong></td>
                    <td></td>
                    <td><strong class="bench__total--kodus">5 / 8</strong></td>
                    <td><strong>3 / 8</strong></td>
                    <td><strong>5 / 8</strong></td>
                    <td><strong>3 / 8</strong></td>
                  </tr>
                </tfoot>
              </table>
            </div>
          </div>
        </div>

        <!-- ===== Grafana ===== -->
        <div class="bench__tab-panel" id="tab-grafana">
          <div class="bench__table-frame">
            <div class="bench__charts-bar">
              <div class="bench__terminal-dots">
                <span class="bench__dot bench__dot--red"></span>
                <span class="bench__dot bench__dot--yellow"></span>
                <span class="bench__dot bench__dot--green"></span>
              </div>
              <span class="bench__charts-bar-title">GRAFANA_REPORT.CSV</span>
              <span class="bench__charts-bar-status">8 RECORDS</span>
            </div>
            <div class="bench__table-wrap">
              <table class="bench__table">
                <thead>
                  <tr>
                    <th class="bench__th-issue">PR / Bug</th>
                    <th class="bench__th-sev">Severity</th>
                    <th>Kodus</th>
                    <th>CodeRabbit</th>
                    <th>GitHub Copilot</th>
                    <th>Cursor</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="bench__td-issue"><strong>Advanced SQL Analytics Framework</strong><span class="bench__td-desc">enableSqlExpressions function always returns false, disabling SQL functionality</span></td>
                    <td><span class="bench__sev bench__sev--critical">CRITICAL</span></td>
                    <td class="bench__td-check"><a href="https://github.com/edvaldofreitas/grafana-kodus/pull/14" target="_blank" rel="noopener" class="bench__td-link"><span class="bench__hit">&#10003;</span></a></td>
                    <td class="bench__td-check"><a href="https://github.com/ai-code-review-evaluation/grafana-coderabbit/pull/9" target="_blank" rel="noopener" class="bench__td-link"><span class="bench__hit">&#10003;</span></a></td>
                    <td class="bench__td-check"><a href="https://github.com/ai-code-review-evaluation/grafana-copilot/pull/9" target="_blank" rel="noopener" class="bench__td-link"><span class="bench__hit">&#10003;</span></a></td>
                    <td class="bench__td-check"><a href="https://github.com/ai-code-review-evaluation/grafana-cursor/pull/9" target="_blank" rel="noopener" class="bench__td-link"><span class="bench__hit">&#10003;</span></a></td>
                  </tr>
                  <tr>
                    <td class="bench__td-issue"><strong>Unified Storage Performance Optimizations</strong><span class="bench__td-desc">Race condition in cache locking</span></td>
                    <td><span class="bench__sev bench__sev--high">HIGH</span></td>
                    <td class="bench__td-check"><a href="https://github.com/edvaldofreitas/grafana-kodus/pull/15" target="_blank" rel="noopener" class="bench__td-link"><span class="bench__hit">&#10003;</span></a></td>
                    <td class="bench__td-check"><a href="https://github.com/ai-code-review-evaluation/grafana-coderabbit/pull/10" target="_blank" rel="noopener" class="bench__td-link"><span class="bench__miss">&#10005;</span></a></td>
                    <td class="bench__td-check"><a href="https://github.com/ai-code-review-evaluation/grafana-copilot/pull/10" target="_blank" rel="noopener" class="bench__td-link"><span class="bench__miss">&#10005;</span></a></td>
                    <td class="bench__td-check"><a href="https://github.com/ai-code-review-evaluation/grafana-cursor/pull/10" target="_blank" rel="noopener" class="bench__td-link"><span class="bench__hit">&#10003;</span></a></td>
                  </tr>
                  <tr>
                    <td class="bench__td-issue"><strong>Notification Rule Processing Engine</strong><span class="bench__td-desc">Missing key prop causing React rendering issues</span></td>
                    <td><span class="bench__sev bench__sev--medium">MEDIUM</span></td>
                    <td class="bench__td-check"><a href="https://github.com/edvaldofreitas/grafana-kodus/pull/11" target="_blank" rel="noopener" class="bench__td-link"><span class="bench__hit">&#10003;</span></a></td>
                    <td class="bench__td-check"><a href="https://github.com/ai-code-review-evaluation/grafana-coderabbit/pull/5" target="_blank" rel="noopener" class="bench__td-link"><span class="bench__hit">&#10003;</span></a></td>
                    <td class="bench__td-check"><a href="https://github.com/ai-code-review-evaluation/grafana-copilot/pull/5" target="_blank" rel="noopener" class="bench__td-link"><span class="bench__miss">&#10005;</span></a></td>
                    <td class="bench__td-check"><a href="https://github.com/ai-code-review-evaluation/grafana-cursor/pull/5" target="_blank" rel="noopener" class="bench__td-link"><span class="bench__hit">&#10003;</span></a></td>
                  </tr>
                  <tr>
                    <td class="bench__td-issue"><strong>Advanced Query Processing Architecture</strong><span class="bench__td-desc">Double interpolation risk</span></td>
                    <td><span class="bench__sev bench__sev--critical">CRITICAL</span></td>
                    <td class="bench__td-check"><a href="https://github.com/kodustech/grafana-kodus/pull/1" target="_blank" rel="noopener" class="bench__td-link"><span class="bench__hit">&#10003;</span></a></td>
                    <td class="bench__td-check"><a href="https://github.com/ai-code-review-evaluation/grafana-coderabbit/pull/4" target="_blank" rel="noopener" class="bench__td-link"><span class="bench__miss">&#10005;</span></a></td>
                    <td class="bench__td-check"><a href="https://github.com/ai-code-review-evaluation/grafana-copilot/pull/4" target="_blank" rel="noopener" class="bench__td-link"><span class="bench__hit">&#10003;</span></a></td>
                    <td class="bench__td-check"><a href="https://github.com/ai-code-review-evaluation/grafana-cursor/pull/4" target="_blank" rel="noopener" class="bench__td-link"><span class="bench__hit">&#10003;</span></a></td>
                  </tr>
                  <tr>
                    <td class="bench__td-issue"><strong>Dual Storage Architecture</strong><span class="bench__td-desc">Incorrect metrics recording methods causing misleading performance tracking</span></td>
                    <td><span class="bench__sev bench__sev--medium">MEDIUM</span></td>
                    <td class="bench__td-check"><a href="https://github.com/edvaldofreitas/grafana-kodus/pull/12" target="_blank" rel="noopener" class="bench__td-link"><span class="bench__hit">&#10003;</span></a></td>
                    <td class="bench__td-check"><a href="https://github.com/ai-code-review-evaluation/grafana-coderabbit/pull/6" target="_blank" rel="noopener" class="bench__td-link"><span class="bench__hit">&#10003;</span></a></td>
                    <td class="bench__td-check"><a href="https://github.com/ai-code-review-evaluation/grafana-copilot/pull/6" target="_blank" rel="noopener" class="bench__td-link"><span class="bench__hit">&#10003;</span></a></td>
                    <td class="bench__td-check"><a href="https://github.com/ai-code-review-evaluation/grafana-cursor/pull/6" target="_blank" rel="noopener" class="bench__td-link"><span class="bench__hit">&#10003;</span></a></td>
                  </tr>
                  <tr>
                    <td class="bench__td-issue"><strong>Frontend Asset Optimization</strong><span class="bench__td-desc">Deadlock potential during concurrent annotation deletion operations</span></td>
                    <td><span class="bench__sev bench__sev--high">HIGH</span></td>
                    <td class="bench__td-check"><a href="https://github.com/edvaldofreitas/grafana-kodus/pull/13" target="_blank" rel="noopener" class="bench__td-link"><span class="bench__miss">&#10005;</span></a></td>
                    <td class="bench__td-check"><a href="https://github.com/ai-code-review-evaluation/grafana-coderabbit/pull/8" target="_blank" rel="noopener" class="bench__td-link"><span class="bench__hit">&#10003;</span></a></td>
                    <td class="bench__td-check"><a href="https://github.com/ai-code-review-evaluation/grafana-copilot/pull/8" target="_blank" rel="noopener" class="bench__td-link"><span class="bench__hit">&#10003;</span></a></td>
                    <td class="bench__td-check"><a href="https://github.com/ai-code-review-evaluation/grafana-cursor/pull/8" target="_blank" rel="noopener" class="bench__td-link"><span class="bench__hit">&#10003;</span></a></td>
                  </tr>
                  <tr>
                    <td class="bench__td-issue"><strong>AuthZService: improve authz caching</strong><span class="bench__td-desc">Cache entries without expiration causing permanent permission denials</span></td>
                    <td><span class="bench__sev bench__sev--high">HIGH</span></td>
                    <td class="bench__td-check"><a href="https://github.com/edvaldofreitas/grafana-kodus/pull/8" target="_blank" rel="noopener" class="bench__td-link"><span class="bench__hit">&#10003;</span></a></td>
                    <td class="bench__td-check"><a href="https://github.com/ai-code-review-evaluation/grafana-coderabbit/pull/2" target="_blank" rel="noopener" class="bench__td-link"><span class="bench__miss">&#10005;</span></a></td>
                    <td class="bench__td-check"><a href="https://github.com/ai-code-review-evaluation/grafana-copilot/pull/2" target="_blank" rel="noopener" class="bench__td-link"><span class="bench__miss">&#10005;</span></a></td>
                    <td class="bench__td-check"><a href="https://github.com/ai-code-review-evaluation/grafana-cursor/pull/2" target="_blank" rel="noopener" class="bench__td-link"><span class="bench__hit">&#10003;</span></a></td>
                  </tr>
                  <tr>
                    <td class="bench__td-issue"><strong>Anonymous: Add configurable device limit</strong><span class="bench__td-desc">Race condition in CreateOrUpdateDevice method</span></td>
                    <td><span class="bench__sev bench__sev--high">HIGH</span></td>
                    <td class="bench__td-check"><a href="https://github.com/edvaldofreitas/grafana-kodus/pull/7" target="_blank" rel="noopener" class="bench__td-link"><span class="bench__hit">&#10003;</span></a></td>
                    <td class="bench__td-check"><a href="https://github.com/ai-code-review-evaluation/grafana-coderabbit/pull/1" target="_blank" rel="noopener" class="bench__td-link"><span class="bench__miss">&#10005;</span></a></td>
                    <td class="bench__td-check"><a href="https://github.com/ai-code-review-evaluation/grafana-copilot/pull/1" target="_blank" rel="noopener" class="bench__td-link"><span class="bench__miss">&#10005;</span></a></td>
                    <td class="bench__td-check"><a href="https://github.com/ai-code-review-evaluation/grafana-cursor/pull/1" target="_blank" rel="noopener" class="bench__td-link"><span class="bench__miss">&#10005;</span></a></td>
                  </tr>
                </tbody>
                <tfoot>
                  <tr class="bench__totals">
                    <td><strong>Total</strong></td>
                    <td></td>
                    <td><strong class="bench__total--kodus">7 / 8</strong></td>
                    <td><strong>4 / 8</strong></td>
                    <td><strong>4 / 8</strong></td>
                    <td><strong>7 / 8</strong></td>
                  </tr>
                </tfoot>
              </table>
            </div>
          </div>
        </div>

        <!-- ===== Discourse ===== -->
        <div class="bench__tab-panel" id="tab-discourse">
          <div class="bench__table-frame">
            <div class="bench__charts-bar">
              <div class="bench__terminal-dots">
                <span class="bench__dot bench__dot--red"></span>
                <span class="bench__dot bench__dot--yellow"></span>
                <span class="bench__dot bench__dot--green"></span>
              </div>
              <span class="bench__charts-bar-title">DISCOURSE_REPORT.CSV</span>
              <span class="bench__charts-bar-status">8 RECORDS</span>
            </div>
            <div class="bench__table-wrap">
              <table class="bench__table">
                <thead>
                  <tr>
                    <th class="bench__th-issue">PR / Bug</th>
                    <th class="bench__th-sev">Severity</th>
                    <th>Kodus</th>
                    <th>CodeRabbit</th>
                    <th>GitHub Copilot</th>
                    <th>Cursor</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="bench__td-issue"><strong>FEATURE: automatically downsize large images</strong><span class="bench__td-desc">Method overwriting causing parameter mismatch</span></td>
                    <td><span class="bench__sev bench__sev--medium">MEDIUM</span></td>
                    <td class="bench__td-check"><a href="https://github.com/edvaldofreitas/discourse-kodus/pull/1" target="_blank" rel="noopener" class="bench__td-link"><span class="bench__hit">&#10003;</span></a></td>
                    <td class="bench__td-check"><a href="https://github.com/ai-code-review-evaluation/discourse-coderabbit/pull/1" target="_blank" rel="noopener" class="bench__td-link"><span class="bench__hit">&#10003;</span></a></td>
                    <td class="bench__td-check"><a href="https://github.com/ai-code-review-evaluation/discourse-copilot/pull/1" target="_blank" rel="noopener" class="bench__td-link"><span class="bench__hit">&#10003;</span></a></td>
                    <td class="bench__td-check"><a href="https://github.com/ai-code-review-evaluation/discourse-cursor/pull/1" target="_blank" rel="noopener" class="bench__td-link"><span class="bench__hit">&#10003;</span></a></td>
                  </tr>
                  <tr>
                    <td class="bench__td-issue"><strong>FEATURE: per-topic unsubscribe option in emails</strong><span class="bench__td-desc">Nil reference non-existent TopicUser</span></td>
                    <td><span class="bench__sev bench__sev--high">HIGH</span></td>
                    <td class="bench__td-check"><a href="https://github.com/edvaldofreitas/discourse-kodus/pull/2" target="_blank" rel="noopener" class="bench__td-link"><span class="bench__hit">&#10003;</span></a></td>
                    <td class="bench__td-check"><a href="https://github.com/ai-code-review-evaluation/discourse-coderabbit/pull/2" target="_blank" rel="noopener" class="bench__td-link"><span class="bench__hit">&#10003;</span></a></td>
                    <td class="bench__td-check"><a href="https://github.com/ai-code-review-evaluation/discourse-copilot/pull/2" target="_blank" rel="noopener" class="bench__td-link"><span class="bench__hit">&#10003;</span></a></td>
                    <td class="bench__td-check"><a href="https://github.com/ai-code-review-evaluation/discourse-cursor/pull/2" target="_blank" rel="noopener" class="bench__td-link"><span class="bench__hit">&#10003;</span></a></td>
                  </tr>
                  <tr>
                    <td class="bench__td-issue"><strong>Add comprehensive email validation for blocked users</strong><span class="bench__td-desc">BlockedEmail.should_block? modifies DB during read</span></td>
                    <td><span class="bench__sev bench__sev--critical">CRITICAL</span></td>
                    <td class="bench__td-check"><a href="https://github.com/edvaldofreitas/discourse-kodus/pull/3" target="_blank" rel="noopener" class="bench__td-link"><span class="bench__hit">&#10003;</span></a></td>
                    <td class="bench__td-check"><a href="https://github.com/ai-code-review-evaluation/discourse-coderabbit/pull/3" target="_blank" rel="noopener" class="bench__td-link"><span class="bench__miss">&#10005;</span></a></td>
                    <td class="bench__td-check"><a href="https://github.com/ai-code-review-evaluation/discourse-copilot/pull/3" target="_blank" rel="noopener" class="bench__td-link"><span class="bench__miss">&#10005;</span></a></td>
                    <td class="bench__td-check"><a href="https://github.com/ai-code-review-evaluation/discourse-cursor/pull/3" target="_blank" rel="noopener" class="bench__td-link"><span class="bench__hit">&#10003;</span></a></td>
                  </tr>
                  <tr>
                    <td class="bench__td-issue"><strong>Enhance embed URL handling and validation system</strong><span class="bench__td-desc">SSRF vulnerability using open(url) without validation</span></td>
                    <td><span class="bench__sev bench__sev--critical">CRITICAL</span></td>
                    <td class="bench__td-check"><a href="https://github.com/kodustech/discourse-kodus/pull/1" target="_blank" rel="noopener" class="bench__td-link"><span class="bench__hit">&#10003;</span></a></td>
                    <td class="bench__td-check"><a href="https://github.com/ai-code-review-evaluation/discourse-coderabbit/pull/4" target="_blank" rel="noopener" class="bench__td-link"><span class="bench__hit">&#10003;</span></a></td>
                    <td class="bench__td-check"><a href="https://github.com/ai-code-review-evaluation/discourse-copilot/pull/4" target="_blank" rel="noopener" class="bench__td-link"><span class="bench__hit">&#10003;</span></a></td>
                    <td class="bench__td-check"><a href="https://github.com/ai-code-review-evaluation/discourse-cursor/pull/4" target="_blank" rel="noopener" class="bench__td-link"><span class="bench__hit">&#10003;</span></a></td>
                  </tr>
                  <tr>
                    <td class="bench__td-issue"><strong>UX: show complete URL path if website domain is same as instance domain</strong><span class="bench__td-desc">String mutation with &lt;&lt; operator</span></td>
                    <td><span class="bench__sev bench__sev--medium">MEDIUM</span></td>
                    <td class="bench__td-check"><a href="https://github.com/edvaldofreitas/discourse-kodus/pull/5" target="_blank" rel="noopener" class="bench__td-link"><span class="bench__hit">&#10003;</span></a></td>
                    <td class="bench__td-check"><a href="https://github.com/ai-code-review-evaluation/discourse-coderabbit/pull/6" target="_blank" rel="noopener" class="bench__td-link"><span class="bench__miss">&#10005;</span></a></td>
                    <td class="bench__td-check"><a href="https://github.com/ai-code-review-evaluation/discourse-copilot/pull/6" target="_blank" rel="noopener" class="bench__td-link"><span class="bench__hit">&#10003;</span></a></td>
                    <td class="bench__td-check"><a href="https://github.com/ai-code-review-evaluation/discourse-cursor/pull/6" target="_blank" rel="noopener" class="bench__td-link"><span class="bench__hit">&#10003;</span></a></td>
                  </tr>
                  <tr>
                    <td class="bench__td-issue"><strong>FIX: proper handling of group memberships</strong><span class="bench__td-desc">Race conditions in async member loading</span></td>
                    <td><span class="bench__sev bench__sev--high">HIGH</span></td>
                    <td class="bench__td-check"><a href="https://github.com/edvaldofreitas/discourse-kodus/pull/6" target="_blank" rel="noopener" class="bench__td-link"><span class="bench__hit">&#10003;</span></a></td>
                    <td class="bench__td-check"><a href="https://github.com/ai-code-review-evaluation/discourse-coderabbit/pull/8" target="_blank" rel="noopener" class="bench__td-link"><span class="bench__miss">&#10005;</span></a></td>
                    <td class="bench__td-check"><a href="https://github.com/ai-code-review-evaluation/discourse-copilot/pull/8" target="_blank" rel="noopener" class="bench__td-link"><span class="bench__miss">&#10005;</span></a></td>
                    <td class="bench__td-check"><a href="https://github.com/ai-code-review-evaluation/discourse-cursor/pull/8" target="_blank" rel="noopener" class="bench__td-link"><span class="bench__miss">&#10005;</span></a></td>
                  </tr>
                  <tr>
                    <td class="bench__td-issue"><strong>FEATURE: Localization fallbacks (server-side)</strong><span class="bench__td-desc">Thread-safety issue with lazy @loaded_locales</span></td>
                    <td><span class="bench__sev bench__sev--high">HIGH</span></td>
                    <td class="bench__td-check"><a href="https://github.com/edvaldofreitas/discourse-kodus/pull/7" target="_blank" rel="noopener" class="bench__td-link"><span class="bench__hit">&#10003;</span></a></td>
                    <td class="bench__td-check"><a href="https://github.com/ai-code-review-evaluation/discourse-coderabbit/pull/9" target="_blank" rel="noopener" class="bench__td-link"><span class="bench__miss">&#10005;</span></a></td>
                    <td class="bench__td-check"><a href="https://github.com/ai-code-review-evaluation/discourse-copilot/pull/9" target="_blank" rel="noopener" class="bench__td-link"><span class="bench__hit">&#10003;</span></a></td>
                    <td class="bench__td-check"><a href="https://github.com/ai-code-review-evaluation/discourse-cursor/pull/9" target="_blank" rel="noopener" class="bench__td-link"><span class="bench__miss">&#10005;</span></a></td>
                  </tr>
                  <tr>
                    <td class="bench__td-issue"><strong>FEATURE: Can edit category/host relationships for embedding</strong><span class="bench__td-desc">NoMethodError before_validation in EmbeddableHost</span></td>
                    <td><span class="bench__sev bench__sev--critical">CRITICAL</span></td>
                    <td class="bench__td-check"><a href="https://github.com/edvaldofreitas/discourse-kodus/pull/8" target="_blank" rel="noopener" class="bench__td-link"><span class="bench__hit">&#10003;</span></a></td>
                    <td class="bench__td-check"><a href="https://github.com/ai-code-review-evaluation/discourse-coderabbit/pull/10" target="_blank" rel="noopener" class="bench__td-link"><span class="bench__miss">&#10005;</span></a></td>
                    <td class="bench__td-check"><a href="https://github.com/ai-code-review-evaluation/discourse-copilot/pull/10" target="_blank" rel="noopener" class="bench__td-link"><span class="bench__hit">&#10003;</span></a></td>
                    <td class="bench__td-check"><a href="https://github.com/ai-code-review-evaluation/discourse-cursor/pull/10" target="_blank" rel="noopener" class="bench__td-link"><span class="bench__hit">&#10003;</span></a></td>
                  </tr>
                </tbody>
                <tfoot>
                  <tr class="bench__totals">
                    <td><strong>Total</strong></td>
                    <td></td>
                    <td><strong class="bench__total--kodus">8 / 8</strong></td>
                    <td><strong>3 / 8</strong></td>
                    <td><strong>6 / 8</strong></td>
                    <td><strong>6 / 8</strong></td>
                  </tr>
                </tfoot>
              </table>
            </div>
          </div>
        </div>

        <!-- ===== Keycloak ===== -->
        <div class="bench__tab-panel" id="tab-keycloak">
          <div class="bench__table-frame">
            <div class="bench__charts-bar">
              <div class="bench__terminal-dots">
                <span class="bench__dot bench__dot--red"></span>
                <span class="bench__dot bench__dot--yellow"></span>
                <span class="bench__dot bench__dot--green"></span>
              </div>
              <span class="bench__charts-bar-title">KEYCLOAK_REPORT.CSV</span>
              <span class="bench__charts-bar-status">5 RECORDS</span>
            </div>
            <div class="bench__table-wrap">
              <table class="bench__table">
                <thead>
                  <tr>
                    <th class="bench__th-issue">PR / Bug</th>
                    <th class="bench__th-sev">Severity</th>
                    <th>Kodus</th>
                    <th>CodeRabbit</th>
                    <th>GitHub Copilot</th>
                    <th>Cursor</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="bench__td-issue"><strong>Add AuthzClientCryptoProvider for authorization client cryptographic operations</strong><span class="bench__td-desc">Returns wrong provider (default keystore instead of BouncyCastle)</span></td>
                    <td><span class="bench__sev bench__sev--high">HIGH</span></td>
                    <td class="bench__td-check"><a href="https://github.com/edvaldofreitas/keycloak-kodus/pull/3" target="_blank" rel="noopener" class="bench__td-link"><span class="bench__hit">&#10003;</span></a></td>
                    <td class="bench__td-check"><a href="https://github.com/ai-code-review-evaluation/keycloak-coderabbit/pull/3" target="_blank" rel="noopener" class="bench__td-link"><span class="bench__hit">&#10003;</span></a></td>
                    <td class="bench__td-check"><a href="https://github.com/ai-code-review-evaluation/keycloak-copilot/pull/3" target="_blank" rel="noopener" class="bench__td-link"><span class="bench__miss">&#10005;</span></a></td>
                    <td class="bench__td-check"><a href="https://github.com/ai-code-review-evaluation/keycloak-cursor/pull/3" target="_blank" rel="noopener" class="bench__td-link"><span class="bench__miss">&#10005;</span></a></td>
                  </tr>
                  <tr>
                    <td class="bench__td-issue"><strong>Fixing Re-authentication with passkeys</strong><span class="bench__td-desc">ConditionalPasskeysEnabled() called without UserModel parameter</span></td>
                    <td><span class="bench__sev bench__sev--medium">MEDIUM</span></td>
                    <td class="bench__td-check"><a href="https://github.com/edvaldofreitas/keycloak-kodus/pull/1" target="_blank" rel="noopener" class="bench__td-link"><span class="bench__miss">&#10005;</span></a></td>
                    <td class="bench__td-check"><a href="https://github.com/ai-code-review-evaluation/keycloak-coderabbit/pull/1" target="_blank" rel="noopener" class="bench__td-link"><span class="bench__miss">&#10005;</span></a></td>
                    <td class="bench__td-check"><a href="https://github.com/ai-code-review-evaluation/keycloak-copilot/pull/1" target="_blank" rel="noopener" class="bench__td-link"><span class="bench__miss">&#10005;</span></a></td>
                    <td class="bench__td-check"><a href="https://github.com/ai-code-review-evaluation/keycloak-cursor/pull/1" target="_blank" rel="noopener" class="bench__td-link"><span class="bench__miss">&#10005;</span></a></td>
                  </tr>
                  <tr>
                    <td class="bench__td-issue"><strong>Add Client resource type and scopes to authorization schema</strong><span class="bench__td-desc">Inconsistent feature flag bug causing orphaned permissions</span></td>
                    <td><span class="bench__sev bench__sev--high">HIGH</span></td>
                    <td class="bench__td-check"><a href="https://github.com/edvaldofreitas/keycloak-kodus/pull/5" target="_blank" rel="noopener" class="bench__td-link"><span class="bench__hit">&#10003;</span></a></td>
                    <td class="bench__td-check"><a href="https://github.com/ai-code-review-evaluation/keycloak-coderabbit/pull/5" target="_blank" rel="noopener" class="bench__td-link"><span class="bench__miss">&#10005;</span></a></td>
                    <td class="bench__td-check"><a href="https://github.com/ai-code-review-evaluation/keycloak-copilot/pull/5" target="_blank" rel="noopener" class="bench__td-link"><span class="bench__miss">&#10005;</span></a></td>
                    <td class="bench__td-check"><a href="https://github.com/ai-code-review-evaluation/keycloak-cursor/pull/5" target="_blank" rel="noopener" class="bench__td-link"><span class="bench__hit">&#10003;</span></a></td>
                  </tr>
                  <tr>
                    <td class="bench__td-issue"><strong>Implement access token context encoding framework</strong><span class="bench__td-desc">Wrong parameter in null check (grantType vs. rawTokenId)</span></td>
                    <td><span class="bench__sev bench__sev--critical">CRITICAL</span></td>
                    <td class="bench__td-check"><a href="https://github.com/edvaldofreitas/keycloak-kodus/pull/6" target="_blank" rel="noopener" class="bench__td-link"><span class="bench__hit">&#10003;</span></a></td>
                    <td class="bench__td-check"><a href="https://github.com/ai-code-review-evaluation/keycloak-coderabbit/pull/8" target="_blank" rel="noopener" class="bench__td-link"><span class="bench__hit">&#10003;</span></a></td>
                    <td class="bench__td-check"><a href="https://github.com/ai-code-review-evaluation/keycloak-copilot/pull/8" target="_blank" rel="noopener" class="bench__td-link"><span class="bench__hit">&#10003;</span></a></td>
                    <td class="bench__td-check"><a href="https://github.com/ai-code-review-evaluation/keycloak-cursor/pull/8" target="_blank" rel="noopener" class="bench__td-link"><span class="bench__hit">&#10003;</span></a></td>
                  </tr>
                  <tr>
                    <td class="bench__td-issue"><strong>Add caching support for IdentityProviderStorageProvider .getForLogin operations</strong><span class="bench__td-desc">Recursive caching call using session instead of delegate</span></td>
                    <td><span class="bench__sev bench__sev--critical">CRITICAL</span></td>
                    <td class="bench__td-check"><a href="https://github.com/edvaldofreitas/keycloak-kodus/pull/2" target="_blank" rel="noopener" class="bench__td-link"><span class="bench__miss">&#10005;</span></a></td>
                    <td class="bench__td-check"><span class="bench__miss">&#10005;</span></td>
                    <td class="bench__td-check"><a href="https://github.com/ai-code-review-evaluation/keycloak-copilot/pull/2" target="_blank" rel="noopener" class="bench__td-link"><span class="bench__miss">&#10005;</span></a></td>
                    <td class="bench__td-check"><a href="https://github.com/ai-code-review-evaluation/keycloak-cursor/pull/2" target="_blank" rel="noopener" class="bench__td-link"><span class="bench__miss">&#10005;</span></a></td>
                  </tr>
                </tbody>
                <tfoot>
                  <tr class="bench__totals">
                    <td><strong>Total</strong></td>
                    <td></td>
                    <td><strong class="bench__total--kodus">3 / 5</strong></td>
                    <td><strong>2 / 5</strong></td>
                    <td><strong>1 / 5</strong></td>
                    <td><strong>2 / 5</strong></td>
                  </tr>
                </tfoot>
              </table>
            </div>
          </div>
        </div>


      </div>
    </section>

    <!-- ========== CTA ========== -->
    <section class="roi-cta">
      <div class="container">
        <div class="pixel-cta">
          <div class="pixel-cta__window">
            <div class="pixel-cta__bar">
              <span class="pixel-cta__bar-text">BENCHMARK_CTA.EXE</span>
            </div>
            <div class="pixel-cta__content">
              <div class="pixel-cta__media">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/kody-review.webp" alt="Kody Review" class="pixel-cta__kody">
              </div>
              <div class="pixel-cta__copy">
                <h2 class="pixel-cta__title">Don't take our word for it.<br>Try Kody on your next PR.</h2>
                <p class="pixel-cta__desc">Spin it up in under 2 minutes — cloud or self-hosted, no credit card.</p>
                <div class="pixel-cta__actions">
                  <a href="https://github.com/kodustech/kodus-ai" class="btn btn--outline-light pixel-cta__btn">
                    <svg width="20" height="20" viewBox="0 0 16 16" fill="currentColor" style="margin-right: 8px;"><path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.013 8.013 0 0016 8c0-4.42-3.58-8-8-8z"/></svg>
                    DEPLOY
                  </a>
                  <a href="https://app.kodus.io/sign-up" class="btn btn--primary pixel-cta__btn">
                    START FREE TRIAL
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

  </main>

<?php get_footer('kodus'); ?>
