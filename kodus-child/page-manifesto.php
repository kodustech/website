<?php
/*
 * Template Name: Kodus Manifesto
 * Template Post Type: page
 */
?>
<?php get_header('kodus'); ?>

<main class="memo-page">
  <section class="memo-hero" aria-labelledby="memo-title">
    <div class="container">
      <div class="memo-hero__content">
        <p class="memo-kicker">investor memo</p>
        <h1 id="memo-title">The merge layer for AI-generated code</h1>
        <p class="memo-thesis">
          AI made code generation abundant. The bottleneck moves to code acceptance.
        </p>
        <p class="memo-lede">
          Developers will not standardize on one AI coding tool. They will use Cursor,
          Copilot, Claude Code, Codex, Gemini, internal agents, and self-hosted models.
          Companies still need one neutral place to decide what gets merged.
        </p>
      </div>
    </div>
  </section>

  <section class="memo-body" aria-label="Memo">
    <div class="container memo-layout">
      <aside class="memo-side" aria-label="Memo navigation">
        <p>in this memo</p>
        <nav>
          <a href="#market">market</a>
          <a href="#traction">traction</a>
          <a href="#category">category</a>
          <a href="#pr">pull request</a>
          <a href="#cursor">cursor</a>
          <a href="#labs">labs</a>
          <a href="#moat">moat</a>
          <a href="#team">team</a>
        </nav>
      </aside>

      <article class="memo-content">
        <section class="memo-section" id="market">
          <p class="memo-section__label">01 / what changed</p>
          <h2>Generation is fragmenting. Acceptance is becoming the control point.</h2>
          <p>
            The last generation of developer tools was organized around where code was written.
            The next one is being organized around where code is accepted. That shift matters
            because AI code does not come from a single place anymore.
          </p>
          <p>
            A Stack Overflow survey says 84% of developers use or plan to use AI tools in their
            development workflow. A Jellyfish survey reported that 48% use two or more AI coding
            tools, excluding general chat tools. The market is already multi-tool.
          </p>
          <p class="memo-source">
            Sources:
            <a href="https://survey.stackoverflow.co/2025/ai" target="_blank" rel="noopener">Stack Overflow 2025</a>,
            <a href="https://www.businessinsider.com/ai-coding-tools-popular-github-gemini-code-assist-cursor-q-2025-7" target="_blank" rel="noopener">Jellyfish survey</a>.
          </p>
        </section>

        <section class="memo-section" id="traction">
          <p class="memo-section__label">02 / traction</p>
          <h2>Early signal exists in both Cloud and self-hosted.</h2>
          <p>
            Cloud gives us measurable product usage. Self-hosted gives us distribution into
            teams that care about control enough to run the system themselves.
          </p>
          <dl class="memo-traction" aria-label="Traction evidence">
            <div>
              <dt>175k+</dt>
              <dd>Cloud PRs reviewed</dd>
            </div>
            <div>
              <dt>760+</dt>
              <dd>Cloud organizations</dd>
            </div>
            <div>
              <dt>130</dt>
              <dd>known self-hosted domains</dd>
            </div>
            <div>
              <dt>#12</dt>
              <dd>third-party code review ranking signal</dd>
            </div>
          </dl>
        </section>

        <section class="memo-section" id="category">
          <p class="memo-section__label">03 / the category</p>
          <h2>Review is the wedge. Code acceptance is the category.</h2>
          <p>
            Kodus starts with AI code review because review is already in the workflow.
            The deeper product is the layer around review: repo rules, model routing, severity
            tuning, developer feedback, audit history, and cost visibility.
          </p>
          <p>
            A review comment can be a feature. A merge policy that survives tool churn, model
            churn, and pricing churn is infrastructure.
          </p>
        </section>

        <section class="memo-section" id="pr">
          <p class="memo-section__label">04 / why the pull request</p>
          <h2>The pull request is where code becomes company software.</h2>
          <p>
            The editor is where code is created. The pull request is where the company accepts
            responsibility for it. That is where context, ownership, CI, policy, and audit already
            meet.
          </p>
          <p>
            Kodus sits at that boundary. It is independent from the editor, independent from the
            model provider, and close enough to production to matter.
          </p>
        </section>

        <section class="memo-section" id="cursor">
          <p class="memo-section__label">05 / why not cursor</p>
          <h2>Cursor owns creation. Kodus owns acceptance.</h2>
          <div class="memo-compare">
            <div>
              <strong>Cursor</strong>
              <span>editor</span>
              <span>individual workflow</span>
              <span>generation moment</span>
            </div>
            <div>
              <strong>Kodus</strong>
              <span>pull request</span>
              <span>team workflow</span>
              <span>merge moment</span>
            </div>
          </div>
          <p>
            Cursor can be the best place to write code and still not be the neutral place where
            every team decides what should merge. Kodus wins where the organization needs consistency
            across tools, repositories, platforms, and models.
          </p>
        </section>

        <section class="memo-section" id="labs">
          <p class="memo-section__label">06 / why not labs</p>
          <h2>Labs sell models. Teams need model neutrality.</h2>
          <p>
            The next model release does not commoditize Kodus. It makes the need sharper.
            Model quality, pricing, and availability will keep moving. Engineering teams should
            be able to route, compare, constrain, and replace models without rebuilding their
            review process.
          </p>
          <p>
            Kodus does not play the inference margin game. Teams bring their own provider, pay
            that provider directly, and keep the review workflow independent from model bundling.
          </p>
        </section>

        <section class="memo-section" id="moat">
          <p class="memo-section__label">07 / why this compounds</p>
          <h2>The moat is workflow ownership at the merge boundary.</h2>
          <ul class="memo-list">
            <li><strong>Policy memory.</strong> Repo rules, ignored findings, severity changes, and team preferences make review team-specific.</li>
            <li><strong>Model neutrality.</strong> Kodus can route by repo, language, risk, cost ceiling, and review type.</li>
            <li><strong>Distribution surface.</strong> Open source and self-hosted reach teams that will not send code to a black-box SaaS.</li>
            <li><strong>Economic alignment.</strong> Kodus wins by being useful, not by hiding inference margin.</li>
          </ul>
        </section>

        <section class="memo-section" id="team">
          <p class="memo-section__label">08 / why us</p>
          <h2>Built by engineers who lived the scaling problem.</h2>
          <p>
            We are three software engineers with more than 30 years of combined experience.
            We met in 2014 building software for one of the largest education platforms serving
            the Brazilian government. In 2017 we started EZ.devs, helped Brazilian scaleups build
            and manage engineering teams, scaled to roughly 100 people and about $2M in yearly
            revenue, then sold it to build an asset-light product company.
          </p>
          <p>
            After several pivots, the thesis became clear from our own work: AI can produce more
            code, but companies still need a durable system for deciding which code deserves to
            become production.
          </p>
        </section>

        <section class="memo-closing" aria-label="Closing belief">
          <p>We do not believe every team will use the same AI coding tool.</p>
          <p>We do not believe the model provider should own the merge decision.</p>
          <p>We believe the merge boundary becomes the control point for AI software.</p>
          <h2>Open source AI code review without vendor lock-in.</h2>
          <p class="memo-tagline">Full Control Over Model Choice and Costs.</p>
          <p class="memo-signature">Gabriel, Wellington, Junior / Kodus</p>
        </section>

        <p class="memo-footnote">
          Self-hosted users do not transmit telemetry by default. The self-hosted domain count is a conservative known signal and is intentionally kept separate from Cloud usage.
        </p>
      </article>
    </div>
  </section>
</main>

<?php get_footer('kodus'); ?>
