# State of AI Code Review 2026

What happens after an AI leaves a review comment on a pull request.

**Source:** Kodus production code-review pipeline · **Window:** Sep 2025 – Jun 2026 · **Snapshot:** 2026-06-08
**180,739** suggestions delivered to **530** organizations. **33.2%** became code.

---

## Key findings

- **1 in 3 suggestions earns a fix.** Of 180,739 delivered, 33.2% were implemented or adapted; 66.8% were ignored.
- **Most PRs pass clean.** Only 28% of the 140,662 reviewed PRs drew any finding; the flagged ones average 4.6.
- **The finding type barely moves the rate.** Performance 38.2%, bugs 34.5%, custom rules 31.3%, security 31.2% — a 7-point spread.
- **The language sets the ceiling.** Rust suggestions land at 60%, TypeScript at 34%. Compiled, strongly-typed languages cluster at the top.
- **SQL injection is still #1.** Prompt injection enters the top 12 vulnerability classes for the first time.
- **Custom rules behave like first-class signal,** not aspirational docs — 31.3% implementation, on par with bug findings.
- **Severity runs backwards.** Findings flagged *critical* are implemented least (30%); low/medium/high cluster at 34–35%.
- **Small PRs get ignored most,** not large ones. Implementation climbs from 24% (≤ 50 lines) to 37% (501–1,000), then dips.
- **Model barely separates from team.** Implementation by the model that ran the review runs from 30% (Kimi) to 60% (GLM); Gemini, the most common, sits at 41%. But the model a team picks tangles with the kind of team that picks it, so we rank nothing.
- **AI code review went mainstream.** Platform-wide, PRs doubled in size and merge times collapsed — but that's a new wave of smaller, faster-merging teams adopting, not existing teams changing how they ship.
- **AI-authored PRs draw 1.6× more findings — and get fixed more (42% vs 31%).** AI code violates a team's own codified rules 2.1× as often. By May 2026, ~30% of PRs openly declare AI in the loop.
- **Most critical flags ship unaddressed.** Of merged PRs that drew a critical or security flag, 71.8% merged with at least one left open — the gap between flag raised and action taken (not all of it unjustified).
- **Reviewing a PR costs about $1.50 in model spend** (~$4 per fix that lands) and ~500K input tokens, at common-model prices — and finishes in ~2.4 minutes.

---

## Methodology

- **Source.** Every record comes from the Kodus production pipeline (open-source AI code review across GitHub, GitLab, Bitbucket, Azure DevOps).
- **Window.** Suggestions on PRs created on or after 2025-09-01, the date the current label taxonomy stabilized, through the 2026-06-08 snapshot.
- **Scope.** Four finding types: bugs, security, performance, and custom rules. Older, deprecated finding categories are excluded.
- **"Implemented"** = the flagged lines changed on a later commit. *Full* = applied as written; *adapted* = kept in spirit, modified to fit. Measured from the post-PR diff, not opt-in feedback — silent ignores are counted.
- **Privacy.** No slice under 50 suggestions is published. Org, repo, and PR identifiers are never exposed. Sample text is screened for sensitive substrings.

---

## 1 · Implementation — the 33%

The engine reviewed **140,662** pull requests in the window. Only **28% drew a single finding** — the other 72% passed clean. That's **~129 findings per 100 PRs**, but they bunch up: a flagged PR averages 4.6.

How a delivered suggestion ends up.

| Outcome | Count | Share |
|---|---:|---:|
| Applied exactly (full) | 31,008 | 17.2% |
| Adapted to fit (partial) | 29,050 | 16.1% |
| Ignored | 120,681 | 66.8% |
| **Any implementation** | **60,058** | **33.2%** |

### By finding class

| Class | Delivered | Orgs | Full | Implemented or adapted |
|---|---:|---:|---:|---:|
| Performance | 4,713 | 268 | 19.6% | **38.2%** |
| Bugs | 100,014 | 497 | 18.6% | **34.5%** |
| Custom rules | 68,603 | 222 | 14.9% | **31.3%** |
| Security | 7,409 | 352 | 16.7% | **31.2%** |

### By language

Languages with ≥ 200 delivered suggestions and ≥ 5 organizations.

| Language | Delivered | Implemented or adapted |
|---|---:|---:|
| Rust | 471 | 59.7% |
| Elixir | 498 | 46.8% |
| Go | 3,264 | 45.4% |
| Vue | 2,968 | 43.7% |
| TSX | 834 | 41.5% |
| Python | 11,739 | 39.9% |
| Kotlin | 2,085 | 38.8% |
| CSS | 214 | 38.3% |
| PHP | 17,141 | 36.2% |
| Ruby | 11,102 | 35.5% |
| TypeScript | 71,507 | 33.8% |
| JavaScript | 12,196 | 33.4% |

### By severity

Severity runs backwards. The findings labeled *critical* are implemented **least**.

| Severity | Delivered | Full | Implemented or adapted |
|---|---:|---:|---:|
| Low | 2,497 | 17.8% | **35.2%** |
| High | 97,195 | 17.8% | 34.4% |
| Medium | 37,886 | 18.8% | 33.9% |
| Critical | 43,318 | 14.4% | **30.1%** |

Developers triage AI "critical" flags skeptically — more of them read as false-positive, not-exploitable-here, or too costly to act on. Severity barely predicts action, and what little signal there is points the wrong way.

### By PR size

The smallest PRs get the least action, not the largest.

| PR size (lines changed) | Delivered | Implemented or adapted |
|---|---:|---:|
| XS — ≤ 50 | 11,640 | **24.3%** |
| S — 51–200 | 18,690 | 30.5% |
| M — 201–500 | 22,226 | 35.7% |
| L — 501–1,000 | 21,036 | **36.6%** |
| XL — 1,000+ | 107,328 | 33.6% |

Implementation climbs with diff size, peaks at 500–1,000 lines, and dips only slightly for the largest PRs. Tiny PRs (hotfixes, dependency bumps) are where AI suggestions most often read as noise.

---

## 2 · Bugs

100,014 bug suggestions across 497 organizations. 34.5% earned a fix. The ten most common classes.

| # | Class | Severity | What it is |
|---|---|---|---|
| 01 | Null access on optional fields | high | Reading a nested field that may not exist — often a column added in a migration that older records still have null. |
| 02 | Race conditions | critical | Two requests for the same resource arrive at once and both think they're first. |
| 03 | Schema drift, create vs update | high | Two validators describe the same record but disagree on what's required. |
| 04 | Critical logic commented out | critical | A worker, cron, or middleware disabled during a refactor that never came back. |
| 05 | Async / await pattern abuse | high | Async called from sync, transactions committed twice, or blocking IO inside an async function. |
| 06 | Inverted boolean / off-by-one | high | A condition that evaluates the opposite of what was meant, common after an operator flip. |
| 07 | Hardcoded where dynamic required | medium | A session ID, model name, or environment value committed as a string literal. |
| 08 | Downstream breakage from schema change | high | Dropping a column or renaming a field while other code still expects the old shape. |
| 09 | Resource leaks | medium | Memory, file handles, timers, or listeners allocated and never released. |
| 10 | Database edge cases | medium | Queries that assume well-formed data: no duplicates, never empty, fits one row. |

---

## 3 · Vulnerabilities

7,409 security findings across 352 organizations. 31.2% earned a fix. Twelve classes — SQL injection still leads; prompt injection is new.

| # | Class | Severity | What it is |
|---|---|---|---|
| 01 | SQL injection | critical | Still the most common class. User input concatenated straight into SQL strings. |
| 02 | Path traversal | critical | Unsanitized URL parameters used to construct file paths. |
| 03 | Missing authorization | critical | Endpoints that lost their auth dependency during a refactor. |
| 04 | XSS via unescaped attributes | high | User-controlled values written into HTML attributes without escaping. |
| 05 | SSRF | high | URL parameters fed straight into outbound HTTP requests. |
| 06 | Hardcoded secrets in source | critical | Tokens, API keys, and credentials committed alongside code. |
| 07 | Open redirect | medium | Redirect helpers that block obvious schemes but miss protocol-relative URLs. |
| 08 | Sensitive data in logs | high | Raw error objects, internal IDs, or full payloads logged and never sanitized. |
| 09 | **Prompt injection** *(new in 2026)* | critical | System prompts that concatenate user-controlled strings without delimiters. |
| 10 | Default credentials | high | Services deployed with well-known default username/password. |
| 11 | Command injection | critical | User input passed unsanitized into shell commands. |
| 12 | PostMessage origin not validated | high | Window message listeners that process events from any origin. |

---

## 4 · Rules

9,916 review rules codified by 717 organizations (median 3 per org, mean 13.8; largest library 1,034). 68,603 rule-driven suggestions delivered at 31.3% implementation. The 20 most common rules, by distinct organizations adopting them.

| # | Rule | Orgs |
|---|---|---:|
| 1 | Write a clear, scoped PR title | 55 |
| 2 | Prohibit hardcoded secrets | 41 |
| 3 | Always sanitize user inputs | 36 |
| 4 | Prevent hardcoded secrets | 34 |
| 5 | Avoid equality operators in loop termination conditions | 30 |
| 6 | Avoid using eval | 30 |
| 7 | Enforce TypeScript strict mode | 30 |
| 8 | Always validate JSON parsing | 28 |
| 9 | Enforce strict TypeScript configuration | 28 |
| 10 | Prevent SQL injection in queries | 26 |
| 11 | Avoid asynchronous operations in constructors | 25 |
| 12 | Mark unchanged variables as const | 25 |
| 13 | Ensure React list keys are stable between renders | 24 |
| 14 | Do not nest React components | 23 |
| 15 | Enable TypeScript strict mode | 22 |
| 16 | Do not export mutable variables | 21 |
| 17 | Do not ignore exceptions | 21 |
| 18 | Prevent SQL injection via string concatenation | 21 |
| 19 | React children should not be passed as props | 20 |
| 20 | Avoid building system commands from user input | 19 |

Each row appears verbatim or near-verbatim in at least three distinct organizations. Counts are distinct orgs, not total instances. Near-synonyms (e.g. "prohibit" vs "prevent hardcoded secrets") are kept separate as written.

---

## 5 · Models

The honest answer about models is a small one: **acceptance rates do differ by model — but the teams that pick each model aren't a random sample, so we can't tell whether the model or the team is what moves the number.** Attribution is by the model that *actually* ran each review, not the one a team configured — the two often disagree.

| Model family | Delivered | Implemented or adapted |
|---|---:|---:|
| GLM | 980 | **60%** |
| GPT | 952 | 55% |
| DeepSeek | 358 | 54% |
| Claude | 693 | 52% |
| Gemini | 44,324 | 41% |
| MiniMax | 813 | 32% |
| Kimi | 839 | 30% |

Gemini is what most teams run — it's the out-of-the-box default — so it carries nearly all the volume and lands **41%**. The minority who wire up a different model land both higher (GLM, GPT at 55–60%) and lower (Kimi, MiniMax at 30–32%).

**Read the gap as a team signal, not a model verdict.** Each non-Gemini family is 7–20 self-selected teams. A team that goes out of its way to swap in GLM is not the same team that leaves the default on — so "which model" tangles with "which team," and this data can't separate them. We rank nothing.

---

## 6 · The adoption wave

The pull requests flowing through the platform got bigger and merged faster over 17 months. But this isn't teams changing how they work — it's a changing cast of teams. The story here is *who* is adopting AI code review.

**Analysis window: Jan 2025 – May 2026** (PR metadata doesn't depend on the suggestion engine, so it reaches further back than the rest of the report). Median per merged PR, by month opened.

| | Jan 2025 | May 2026 | Change |
|---|---:|---:|---:|
| PR size (lines changed) | 73 | 154 | **+111%** |
| Time to merge (open → close) | 18.9h | 1.6h | **−92%** |

128,879 merged PRs. Size = additions + deletions; medians, not means (lockfile and generated-file diffs distort the mean).

**These curves are composition, not behavior.** The population isn't fixed: active teams grew from ~48 to ~338 per quarter, so the mix at the end is almost entirely newer arrivals. Hold the same teams fixed across the window (a balanced panel present at both ends) and both trends flatten — a given team's PR size and merge time barely move.

So the movement traces the **adoption curve**. Through 2025, AI code review was an early-adopter tool — larger orgs with longer review cycles. Through 2026 it went mainstream, and the teams arriving are smaller, faster-merging shops. That shift in *who shows up* is what bends the average, not any team speeding up. (What review changes *for* a team is the earlier chapters — what gets caught, and what gets fixed.)

---

## 7 · AI-authored code

When the author is an AI, the review looks different. We split PRs by whether their commits credit an AI assistant as co-author — Claude, Copilot, Cursor, Devin, or Codex — versus none. **22,743** PRs in the window are declared AI-coauthored (13.6%) — and that share is climbing fast.

### Which assistant

Of the declared AI-coauthored PRs, by the tool named in the trailer:

| Assistant | PRs | Share |
|---|---:|---:|
| Claude | 19,358 | 85% |
| Cursor | 2,977 | 13% |
| Copilot | 826 | 3.6% |
| Devin / Codex | 78 | 0.3% |

Shares sum above 100% — a few PRs carry more than one assistant's trailer. This reflects the tools Kodus customers reach for, not the market at large.

### Adoption

Declared AI-coauthored share of all PRs (by month opened):

| | Sep '25 | Dec '25 | Feb '26 | Mar '26 | Apr '26 | May '26 |
|---|---:|---:|---:|---:|---:|---:|
| AI-coauthored | 0.8% | 4.3% | 10.1% | 17.1% | 21.2% | **29.9%** |

By May 2026, nearly one in three pull requests openly declares AI in the loop — a floor, since many tools' trailers get squashed or stripped.

### What's different about AI PRs

| | AI-coauthored | Human-only |
|---|---:|---:|
| Median PR size (lines changed) | **275** | 107 |
| Findings per PR | **~2.0** | ~1.3 |
| Implemented or adapted | **42.3%** | 31.1% |
| Share of findings flagged critical | 18.7% | 25.2% |

Three things move at once. AI PRs are **2.6× larger**, draw **~1.6× more findings per PR**, and — the surprise — those findings are **implemented more often** (42% vs 31%). The severity mix tilts the other way: AI code throws proportionally fewer critical flags and more low-and-medium ones (style, readability, convention), echoing what others have found about AI code quality.

### By finding class

Findings per 100 PRs, and the rate each is implemented, by author.

| Class | Per 100 PRs (AI / human) | Implemented (AI / human) |
|---|---:|---:|
| Bugs | 95 / 72 | 44.2% / 32.5% |
| Custom rules | 95 / 45 | 40.1% / 28.5% |
| Security | 7.1 / 5.2 | 42.3% / 29.4% |
| Performance | 4.9 / 3.3 | 47.7% / 36.1% |

AI code draws more findings in **every** class and is fixed more in **every** class — the effect is broad, not a single-category artifact. The widest gap is custom rules: **AI-written code violates a team's own codified conventions 2.1× as often as human code.** It writes working code that doesn't know the house style.

**Caveats.** "AI-coauthored" means *declared* via a commit trailer — teams that strip the trailer land in the human bucket, so this is a conservative floor and the human group is contaminated with undeclared AI. This is association, not causation: teams that lean on AI authoring may differ in other ways. The larger-PR effect ties into [§6, the adoption wave](#6--the-adoption-wave) — part of the platform-wide PR growth is the rise of these AI PRs.

---

## 8 · Merged anyway

A flagged bug only matters if someone acts on it before the code ships. Often no one does. Of the **13,609** merged PRs that drew a critical-severity or security flag, **71.8% merged with at least one of those flags still unaddressed.**

At the level of individual flags, on PRs that went on to merge:

| Flag | Raised | Shipped unaddressed | Rate |
|---|---:|---:|---:|
| Security | 4,387 | 2,636 | **60%** |
| Critical severity | 29,680 | 19,066 | **64%** |

**This is not 71.8% of teams shipping live vulnerabilities.** "Unaddressed" folds in false positives, won't-fixes, and risks a team saw and consciously accepted — the figure is the gap between *flag raised* and *action taken*, not a count of exploits in production. But it is a wide gap, and it squares with §1: critical is the severity developers act on least.

One bright spot, consistent with §7: the gap is *narrower* on AI-written code. Human-only PRs merged over a critical or security flag **74%** of the time; AI-coauthored PRs, **58%**. Teams reviewing the AI's code close its critical flags more often than they close flags on their own.

---

## 9 · Economics

What it costs, in compute and time, to run the reviewer. **Snapshot: May 2026** (one representative month).

| Metric | Value |
|---|---:|
| Input tokens consumed | 14.3 billion |
| Output tokens produced | 1.0 billion |
| LLM calls | 211,892 |
| Input tokens per PR | ~470,000 |

**Latency.** A single LLM call returns in 13.3s at the median, 66.5s at p95. A full review (all stages) finishes in ~2.4 minutes on average, with a p90 of ~7 minutes.

The reviewer is input-heavy: it reads the whole changed file plus retrieved context on every call, so input tokens outnumber output ~14 to 1. A PR is re-reviewed two to three times as it's pushed to.

### Cost

At the price of the most common model — Gemini 3.1 Pro, $2.00 / $12.00 per million input/output tokens — the May 2026 volume works out to:

| Per | Gemini 3.1 Pro (default) | Gemini 2.5 Pro | Flash-tier |
|---|---:|---:|---:|
| PR reviewed | ~$1.50 | ~$1.00 | ~$0.10 |
| Fix that lands | ~$4.10 | ~$2.80 | ~$0.30 |

Cost tracks the model: a frontier model runs ~15× a flash one for the same review, and BYOK orgs pick their own point on that curve. Either way the unit is cents-to-dollars per PR — the expensive resource is the engineering time it saves, not the inference. (List prices; actual BYOK spend varies by contract.)

---

## Citation

> State of AI Code Review (2026-Q2). Research by Kodus. https://stateofcodereview.com

Reuse with attribution under [CC BY 4.0](https://creativecommons.org/licenses/by/4.0/). Refreshed quarterly. Methodology and SQL queries: [github.com/kodustech/stateofcodereview.com](https://github.com/kodustech/stateofcodereview.com).
