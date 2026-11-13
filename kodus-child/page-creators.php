<?php
/*
 * Template Name: Kodus Creator Program
 * Template Post Type: page
 */
?>
<?php get_header('kodus'); ?>


  <main>

    <!-- ========== HERO ========== -->
    <section class="cr-hero">
      <div class="container cr-hero__grid">
        <div>
          <span class="cr-hero__eyebrow">Kodus creator program</span>
          <h1 class="cr-hero__title">Get paid to post about <span class="highlight">Kodus</span></h1>
          <p class="cr-hero__subtitle">Write about AI code review on X or LinkedIn. You earn for every organic impression your posts get, and 20% of every subscription you bring in for the first 12 months.</p>
          <div class="cr-hero__ctas">
            <a href="https://tally.so/r/QoeaVY" class="btn btn--primary" target="_blank" rel="noopener">Apply</a>
            <a href="#how" class="btn btn--outline-light">How it works</a>
          </div>
          <div class="cr-hero__stats">
            <div><span class="cr-stat__value">$100</span><span class="cr-stat__label">per 20k impressions</span></div>
            <div><span class="cr-stat__value">20%</span><span class="cr-stat__label">of revenue for 12 months</span></div>
            <div><span class="cr-stat__value">0</span><span class="cr-stat__label">follower minimum</span></div>
          </div>
        </div>
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/kody-money.webp" alt="Kody holding cash" class="cr-hero__kody">
      </div>
    </section>

    <!-- ========== HOW IT WORKS ========== -->
    <section class="cr-section" id="how">
      <div class="container">
        <h2 class="section-title">How it works</h2>
        <p class="cr-section__lead">No follower minimum. Apply, get approved, post, send us the numbers, get paid.</p>

        <div class="cr-steps">
          <div class="cr-window">
            <div class="cr-window__bar"><span class="cr-window__dots"></span><span class="cr-window__title">step_01.sh</span></div>
            <div class="cr-window__body">
              <span class="cr-step__num">01</span>
              <h3 class="cr-step__title">Apply</h3>
              <p class="cr-step__text">Fill out the form and, if approved, we'll invite you to our private Discord channel with the Kodus team. There, you'll get your personalized link so we can track signups from your referrals, plus 30 days of free access to try Kodus on your own repos.</p>
            </div>
          </div>
          <div class="cr-window">
            <div class="cr-window__bar"><span class="cr-window__dots"></span><span class="cr-window__title">step_02.sh</span></div>
            <div class="cr-window__body">
              <span class="cr-step__num">02</span>
              <h3 class="cr-step__title">Post</h3>
              <p class="cr-step__text">Write about Kodus on X or LinkedIn, tag @kodustech and add your link. Your words, no review from us.</p>
            </div>
          </div>
          <div class="cr-window">
            <div class="cr-window__bar"><span class="cr-window__dots"></span><span class="cr-window__title">step_03.sh</span></div>
            <div class="cr-window__body">
              <span class="cr-step__num">03</span>
              <h3 class="cr-step__title">Claim</h3>
              <p class="cr-step__text">At the end of the month, send us the links to every post you published about Kodus and screenshots of their analytics.</p>
            </div>
          </div>
          <div class="cr-window">
            <div class="cr-window__bar"><span class="cr-window__dots"></span><span class="cr-window__title">step_04.sh</span></div>
            <div class="cr-window__body">
              <span class="cr-step__num">04</span>
              <h3 class="cr-step__title">Get paid</h3>
              <p class="cr-step__text">We review the numbers at the end of each month and send payouts within 5 days. Referral commissions are included in the next monthly payout once 30 days have passed since the customer's payment, to account for possible refunds.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- ========== REWARDS ========== -->
    <section class="cr-section" id="rewards">
      <div class="container">
        <h2 class="section-title">Three ways to earn</h2>
        <p class="cr-section__lead">Earn based on the reach of your posts and the signups that turn into paying customers.</p>

        <div class="cr-rewards">
          <div class="cr-window">
            <div class="cr-window__bar"><span class="cr-window__dots"></span><span class="cr-window__title">impressions.exe</span><span class="cr-window__badge">MONTHLY</span></div>
            <div class="cr-window__body">
              <h3 class="cr-reward__name">Impressions</h3>
              <div class="cr-reward__price">$100</div>
              <span class="cr-reward__unit">per 20,000 organic impressions</span>
              <ul class="cr-list">
                <li>Impressions from all your posts during the month are added together.</li>
                <li>Up to 3 blocks per month, which means $300 for 60,000 impressions.</li>
                <li>Posts dedicated entirely to Kodus count at 100%.</li>
                <li>Comparisons and tool lists count at 50%.</li>
              </ul>
            </div>
          </div>

          <div class="cr-window">
            <div class="cr-window__bar"><span class="cr-window__dots"></span><span class="cr-window__title">referrals.exe</span><span class="cr-window__badge">12 MONTHS</span></div>
            <div class="cr-window__body">
              <h3 class="cr-reward__name">Referrals</h3>
              <div class="cr-reward__price">20%</div>
              <span class="cr-reward__unit">of what each customer pays during their first 12 months</span>
              <ul class="cr-list">
                <li>Counts any team whose first payment happens within 90 days of clicking your link. After that, the customer doesn't count.</li>
                <li>You earn commissions for up to 12 months, as long as the customer keeps paying.</li>
                <li>Any additional seats they purchase during those 12 months count too.</li>
                <li>No monthly commission cap.</li>
                <li>Each payment waits 30 days, then goes into the next monthly payout, closed on the last day of the month.</li>
              </ul>
            </div>
          </div>

          <div class="cr-window">
            <div class="cr-window__bar"><span class="cr-window__dots"></span><span class="cr-window__title">leaderboard.exe</span><span class="cr-window__badge">TOP 3</span></div>
            <div class="cr-window__body">
              <h3 class="cr-reward__name">Leaderboard</h3>
              <div class="cr-reward__price">+20%</div>
              <span class="cr-reward__unit">bonus on your referral commissions for the month</span>
              <ul class="cr-list">
                <li>Ranked by the number of paying customers who came through your link.</li>
                <li>A customer counts in the month they subscribe.</li>
                <li>Rankings reset every month.</li>
              </ul>
            </div>
          </div>
        </div>

      </div>
    </section>

    <!-- ========== WHAT TO POST ========== -->
    <section class="cr-section" id="rules">
      <div class="container">
        <h2 class="section-title">What to post</h2>
        <p class="cr-section__lead">You can post only about Kodus or include it in comparisons and tool lists. What you say and how you say it is up to you. After all, you know your audience better than we do.</p>

        <div class="cr-window">
          <div class="cr-window__bar"><span class="cr-window__dots"></span><span class="cr-window__title">post_types.md</span></div>
          <div class="cr-window__body">
            <table class="cr-types">
              <thead>
                <tr><th>Type</th><th>Example</th><th>Impressions counted</th></tr>
              </thead>
              <tbody>
                <tr><td>Dedicated post</td><td>A post only about Kodus: your experience, a feature you tried or a real code review</td><td>100%</td></tr>
                <tr><td>Comparison</td><td>Kodus compared with another code review tool</td><td>50%</td></tr>
                <tr><td>Tool list</td><td>A list of AI code review tools that includes Kodus</td><td>50%</td></tr>
              </tbody>
            </table>
          </div>
        </div>
        <p class="cr-example"><strong>Example:</strong> in one month you publish three posts with 10k impressions each. The dedicated post counts 10k, the comparison counts 5k and the tool list counts 5k.<br>In total, that's <strong>20k counted impressions, worth $100.</strong></p>
        <div class="cr-rules">
          <div class="cr-window">
            <div class="cr-window__bar"><span class="cr-window__dots"></span><span class="cr-window__title">allowed.txt</span></div>
            <div class="cr-window__body">
              <h3>The rules</h3>
              <ul class="cr-list">
                <li>Your audience should primarily be developers, engineering leads, or people who work in software.</li>
                <li>Tag @kodustech in your posts.</li>
                <li>To avoid spam, leave at least 2 days between posts about Kodus on the same platform.</li>
                <li>Include your personalized link so we can track signups.</li>
              </ul>
            </div>
          </div>
          <div class="cr-window">
            <div class="cr-window__bar"><span class="cr-window__dots"></span><span class="cr-window__title">not_paid.txt</span></div>
            <div class="cr-window__body">
              <h3>What doesn't get paid</h3>
              <ul class="cr-list cr-list--x">
                <li>Posts from accounts that don't primarily reach developers.</li>
                <li>Posts published before you joined the program.</li>
                <li>Paid or boosted impressions. Only organic reach counts.</li>
                <li>Reposted content you've already submitted for payment.</li>
                <li>False claims about other tools.</li>
                <li>Bought engagement or bot-generated comments.</li>
                <li>Fake or duplicate signups, or paying for an account yourself to climb the leaderboard. These don't count and may disqualify you from the monthly bonus.</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- ========== JOIN ========== -->
    <section class="cr-section" id="join">
      <div class="container">
        <h2 class="section-title">Apply</h2>
        <p class="cr-section__lead">It takes a minute. We review every application and reply by email.</p>

        <div class="cr-join-cta">
          <a href="https://tally.so/r/QoeaVY" class="btn btn--primary btn--lg" target="_blank" rel="noopener">Become a partner</a>
          <p class="cr-form__note">Only posts published after you're approved count, so wait for your link before you post.</p>
        </div>
      </div>
    </section>

    <!-- ========== FAQ ========== -->
    <section class="faq" id="faq-creators">
      <div class="container">
        <h2 class="section-title">FAQ</h2>

        <div class="faq__terminal">
          <div class="faq__bar">
            <div class="faq__bar-dots">
              <span class="faq__dot faq__dot--red"></span>
              <span class="faq__dot faq__dot--yellow"></span>
              <span class="faq__dot faq__dot--green"></span>
            </div>
            <span class="faq__bar-title">kodus-creators-faq(1)</span>
            <span class="faq__bar-status">bash</span>
          </div>

          <div class="faq__body">
            <div class="faq__man-header">
              <span class="faq__man-section">KODUS-CREATORS(1)</span>
              <span class="faq__man-center">Kodus Manual</span>
              <span class="faq__man-section">KODUS-CREATORS(1)</span>
            </div>

            <div class="faq__list">
              <div class="faq__item">
                <button class="faq__question">
                  <span class="faq__prompt">$</span>
                  <span class="faq__question-text">kodus --help "How do I get paid?"</span>
                  <span class="faq__toggle">+</span>
                </button>
                <div class="faq__answer">
                  <p>At the end of each month, fill in the claim form with the link to every post you published about Kodus, plus screenshots of their X or LinkedIn analytics. Anything else that shows the numbers helps too. We pay within 5 days.</p>
                  <p>Every 20k impressions is $100, up to 3 blocks per month. That caps the month at $300, or 60k impressions. Impressions that don't complete a block don't carry over: if your month closes at 50k, you get $200.</p>
                  <p>Each post goes into one claim only, in the month you published it or the next one. That way a post from the last days of the month still gets its full reach.</p>
                </div>
              </div>

              <div class="faq__item">
                <button class="faq__question">
                  <span class="faq__prompt">$</span>
                  <span class="faq__question-text">kodus --help "How does the 20% commission work?"</span>
                  <span class="faq__toggle">+</span>
                </button>
                <div class="faq__answer">
                  <p>When a team signs up through your link and starts a paid plan, you get 20% of what they pay us for their first 12 months. If they add seats in that period, those count too.</p>
                  <p>A team on a monthly plan earns you 20% of every payment. A team on an annual plan earns you 20% of the full annual payment at once.</p>
                  <p>Each customer payment waits 30 days, which covers refunds. After that, the commission goes into the next monthly payout, which closes on the last day of the month.</p>
                  <p>If a customer gets a refund, the commission on that payment is not paid.</p>
                </div>
              </div>

              <div class="faq__item">
                <button class="faq__question">
                  <span class="faq__prompt">$</span>
                  <span class="faq__question-text">kodus --help "Do I get access to Kodus?"</span>
                  <span class="faq__toggle">+</span>
                </button>
                <div class="faq__answer">
                  <p>Yes. Once we approve your application, you get 30 days of the Kodus Teams plan, starting on the day you're approved. Use it on your own repos to see real reviews and get material for your posts.</p>
                </div>
              </div>

              <div class="faq__item">
                <button class="faq__question">
                  <span class="faq__prompt">$</span>
                  <span class="faq__question-text">kodus --help "Do I need a minimum number of followers?"</span>
                  <span class="faq__toggle">+</span>
                </button>
                <div class="faq__answer">
                  <p>No. You get paid for impressions, so a small account with a good post earns the same rate as a big one. What matters is who follows you: your audience has to be developers, engineering leads or people who build software.</p>
                </div>
              </div>

              <div class="faq__item">
                <button class="faq__question">
                  <span class="faq__prompt">$</span>
                  <span class="faq__question-text">kodus --help "Do you approve my post before I publish it?"</span>
                  <span class="faq__toggle">+</span>
                </button>
                <div class="faq__answer">
                  <p>No. You write what you think, in your own voice. We only check impressions and the rules when you claim a payout.</p>
                </div>
              </div>

              <div class="faq__item">
                <button class="faq__question">
                  <span class="faq__prompt">$</span>
                  <span class="faq__question-text">kodus --help "Can I mention other code review tools?"</span>
                  <span class="faq__toggle">+</span>
                </button>
                <div class="faq__answer">
                  <p>Yes. Comparisons and tool lists are welcome and count at 50% of impressions. Keep what you say about other tools accurate.</p>
                </div>
              </div>

              <div class="faq__item">
                <button class="faq__question">
                  <span class="faq__prompt">$</span>
                  <span class="faq__question-text">kodus --help "How do you know a signup came from me?"</span>
                  <span class="faq__toggle">+</span>
                </button>
                <div class="faq__answer">
                  <p>Your link carries an ID that is yours. When someone visits Kodus for the first time through your link and makes their first payment within 90 days, they count for you. If they had already visited Kodus before, it counts for wherever they came from first.</p>
                  <p>That only works if your link is in the post. A post without it still earns impressions, but signups from it can't be traced to you.</p>
                </div>
              </div>

              <div class="faq__item">
                <button class="faq__question">
                  <span class="faq__prompt">$</span>
                  <span class="faq__question-text">kodus --help "What happens if a lot of creators join?"</span>
                  <span class="faq__toggle">+</span>
                </button>
                <div class="faq__answer">
                  <p>Nothing changes for you. Every creator gets $100 per 20k counted impressions, up to $300 a month, no matter how many people join.</p>
                </div>
              </div>

              <div class="faq__item">
                <button class="faq__question">
                  <span class="faq__prompt">$</span>
                  <span class="faq__question-text">kodus --help "Can I refer my own company?"</span>
                  <span class="faq__toggle">+</span>
                </button>
                <div class="faq__answer">
                  <p>No. Referrals of yourself or your employer, and of teams already talking to us or already on a trial, don't earn commission.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

  </main>

<?php get_footer('kodus'); ?>
