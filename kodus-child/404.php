<?php
get_header('kodus');

$requested_uri = isset($_SERVER['REQUEST_URI']) ? (string) $_SERVER['REQUEST_URI'] : '/';
$requested_path = (string) wp_parse_url($requested_uri, PHP_URL_PATH);
$decoded_path = rawurldecode($requested_path);
$normalized_path = trim($decoded_path, '/');

$raw_segments = array_values(array_filter(explode('/', strtolower($normalized_path))));
$detected_lang = 'pt';

if (!empty($raw_segments)) {
    $first_segment = $raw_segments[0];
    if ($first_segment === 'en') {
        $detected_lang = 'en';
    }
}

$segments = $raw_segments;
if (!empty($segments)) {
    $first_segment = $segments[0];
    if ($first_segment === 'en') {
        array_shift($segments);
    }
}

$lookup_text = str_replace(['-', '_'], ' ', implode(' ', $segments));
$normalize_text = static function ($value) {
    $value = strtolower(remove_accents((string) $value));
    $value = preg_replace('/[^a-z0-9]+/', ' ', $value);
    $value = preg_replace('/\s+/', ' ', (string) $value);
    return trim((string) $value);
};

$lookup_normalized = $normalize_text($lookup_text);
$lookup_tokens = array_values(array_filter(array_unique(explode(' ', $lookup_normalized)), static function ($token) {
    return strlen($token) >= 2;
}));

$keyword_score = static function ($keyword) use ($normalize_text, $lookup_normalized, $lookup_tokens) {
    $keyword_normalized = $normalize_text($keyword);
    if ($keyword_normalized === '' || $lookup_normalized === '') {
        return 0;
    }

    if (strlen($keyword_normalized) <= 3) {
        return in_array($keyword_normalized, $lookup_tokens, true) ? 2 : 0;
    }

    if (strpos($lookup_normalized, $keyword_normalized) !== false) {
        return 4;
    }

    $keyword_tokens = array_values(array_filter(explode(' ', $keyword_normalized)));
    $hits = 0;
    $long_hits = 0;
    foreach ($keyword_tokens as $token) {
        if (in_array($token, $lookup_tokens, true)) {
            $hits++;
            if (strlen($token) >= 4) {
                $long_hits++;
            }
        }
    }

    if ($hits === count($keyword_tokens) && $hits > 1) {
        return 3;
    }
    if ($hits > 0 && $long_hits > 0) {
        return 2;
    }
    if ($hits > 0) {
        return 1;
    }
    return 0;
};

$suggestion_catalog = [
    [
        'title' => 'Pricing',
        'url' => home_url('/pricing/'),
        'keywords' => ['pricing', 'plan', 'plans', 'price', 'subscription', 'preco', 'precos', 'valor', 'planos'],
    ],
    [
        'title' => 'Customers',
        'url' => home_url('/customers/'),
        'keywords' => ['customer', 'customers', 'case', 'cases', 'cliente', 'clientes', 'case study', 'brendi', 'lerian', 'notificacoes'],
    ],
    [
        'title' => 'ROI Calculator',
        'url' => home_url('/roi/'),
        'keywords' => ['roi', 'calculator', 'calc', 'return on investment', 'retorno', 'investment'],
    ],
    [
        'title' => 'AI Benchmark',
        'url' => home_url('/benchmark-ai-code-review/'),
        'keywords' => ['benchmark', 'bench', 'performance', 'comparison', 'comparativo', 'code review', 'review tools'],
    ],
    [
        'title' => 'Kodus vs CodeRabbit',
        'url' => home_url('/kodus-vs-coderabbit/'),
        'keywords' => ['coderabbit', 'vs', 'compare'],
    ],
    [
        'title' => 'Kodus vs BugBot',
        'url' => home_url('/kodus-vs-cursor-bugbot/'),
        'keywords' => ['bugbot', 'cursor'],
    ],
    [
        'title' => 'Kodus vs Copilot',
        'url' => home_url('/kodus-vs-github-copilot/'),
        'keywords' => ['copilot', 'github'],
    ],
    [
        'title' => 'Kodus vs Claude',
        'url' => home_url('/kodus-vs-claude/'),
        'keywords' => ['claude', 'anthropic'],
    ],
    [
        'title' => 'Blog',
        'url' => home_url('/en/insights-en/'),
        'keywords' => ['blog', 'insights', 'post', 'posts', 'article', 'articles', 'artigo', 'artigos', 'news'],
    ],
    [
        'title' => 'Documentation',
        'url' => 'https://docs.kodus.io/how_to_use/en/overview',
        'keywords' => ['docs', 'doc', 'documentation', 'guide', 'help'],
    ],
    [
        'title' => 'Security',
        'url' => 'https://docs.kodus.io/how_to_use/en/security/data_usage',
        'keywords' => ['security', 'secure', 'compliance', 'privacy'],
    ],
];

$matched_suggestions_scored = [];
if ($lookup_normalized !== '') {
    foreach ($suggestion_catalog as $index => $entry) {
        $best_score = 0;
        foreach ($entry['keywords'] as $keyword) {
            $score = $keyword_score($keyword);
            if ($score > $best_score) {
                $best_score = $score;
            }
        }
        if ($best_score > 0) {
            $matched_suggestions_scored[] = [
                'title' => $entry['title'],
                'url' => $entry['url'],
                'score' => $best_score,
                'index' => $index,
            ];
        }
    }
}

$matched_suggestions = [];
if (!empty($matched_suggestions_scored)) {
    usort($matched_suggestions_scored, static function ($a, $b) {
        if ($a['score'] === $b['score']) {
            return $a['index'] <=> $b['index'];
        }
        return $b['score'] <=> $a['score'];
    });

    foreach ($matched_suggestions_scored as $entry) {
        $matched_suggestions[] = [
            'title' => $entry['title'],
            'url' => $entry['url'],
        ];
    }
}

$search_suggestions = [];
if ($lookup_normalized !== '') {
    // Posts first (article intent), following URL language when available.
    $post_args = [
        'post_type' => 'post',
        'post_status' => 'publish',
        'posts_per_page' => 4,
        's' => $lookup_text,
        'orderby' => 'date',
        'order' => 'DESC',
        'no_found_rows' => true,
        'ignore_sticky_posts' => true,
    ];
    if (function_exists('pll_default_language') && in_array($detected_lang, ['pt', 'en'], true)) {
        $post_args['lang'] = $detected_lang;
    }

    $post_query = new WP_Query($post_args);
    if ($post_query->have_posts()) {
        while ($post_query->have_posts()) {
            if (count($search_suggestions) >= 4) {
                break;
            }
            $post_query->the_post();
            $search_suggestions[] = [
                'title' => get_the_title(),
                'url' => get_permalink(),
            ];
        }
    }
    wp_reset_postdata();

    // Then pages (kept broad; still useful as fallback).
    if (count($search_suggestions) < 4) {
        $page_query = new WP_Query([
            'post_type' => 'page',
            'post_status' => 'publish',
            'posts_per_page' => 4,
            's' => $lookup_text,
            'orderby' => 'date',
            'order' => 'DESC',
            'no_found_rows' => true,
        ]);

        if ($page_query->have_posts()) {
            while ($page_query->have_posts()) {
                if (count($search_suggestions) >= 4) {
                    break;
                }
                $page_query->the_post();
                $search_suggestions[] = [
                    'title' => get_the_title(),
                    'url' => get_permalink(),
                ];
            }
        }
        wp_reset_postdata();
    }
}

$prefer_search_terms = [
    'code review',
    'code',
    'review',
    'artigo',
    'artigos',
    'article',
    'posts',
    'blog',
    'insights',
    'guide',
    'guia',
    'tutorial',
    'how to',
    'como',
    'pull request',
    'pr',
];

$prefer_search = false;
foreach ($prefer_search_terms as $term) {
    if ($keyword_score($term) >= 2) {
        $prefer_search = true;
        break;
    }
}

$suggestions = [];
if ($prefer_search) {
    $suggestions = array_merge($search_suggestions, $matched_suggestions);
} else {
    $suggestions = array_merge($matched_suggestions, $search_suggestions);
}

$blog_default_url = home_url('/en/insights-en/');
$posts_page_id = (int) get_option('page_for_posts');
if ($posts_page_id > 0) {
    $blog_page_id = $posts_page_id;
    if (function_exists('pll_get_post')) {
        $translated_page_id = pll_get_post($posts_page_id, $detected_lang);
        if (!empty($translated_page_id)) {
            $blog_page_id = (int) $translated_page_id;
        }
    }
    $blog_permalink = get_permalink($blog_page_id);
    if (is_string($blog_permalink) && $blog_permalink !== '') {
        $blog_default_url = $blog_permalink;
    }
}

$default_suggestions = [
    ['title' => 'Homepage', 'url' => home_url('/')],
    ['title' => 'Pricing', 'url' => home_url('/pricing/')],
    ['title' => 'Customers', 'url' => home_url('/customers/')],
    ['title' => 'Blog', 'url' => $blog_default_url],
];

foreach ($default_suggestions as $entry) {
    $suggestions[] = $entry;
}

$unique_suggestions = [];
$seen_urls = [];
foreach ($suggestions as $entry) {
    if (isset($seen_urls[$entry['url']])) {
        continue;
    }
    $seen_urls[$entry['url']] = true;
    $unique_suggestions[] = $entry;
    if (count($unique_suggestions) >= 4) {
        break;
    }
}

$requested_label = $normalized_path !== '' ? '/' . trim($normalized_path, '/') : '';
?>

<style>
  .error-404-hero {
    position: relative;
    overflow: hidden;
  }

  .error-404-bugs {
    position: absolute;
    inset: 0;
    pointer-events: none;
    z-index: 0;
  }

  .error-404-bug {
    position: absolute;
    color: rgba(68, 68, 95, 0.85);
    opacity: 0.72;
    animation: error-bug-float var(--dur, 10s) ease-in-out var(--delay, 0s) infinite;
  }

  .error-404-bug--reverse {
    animation-name: error-bug-float-rev;
  }

  .error-404-hero .hero__container {
    position: relative;
    z-index: 1;
  }

  @keyframes error-bug-float {
    0% { transform: translate3d(0, 0, 0) rotate(0deg); }
    50% { transform: translate3d(18px, -14px, 0) rotate(6deg); }
    100% { transform: translate3d(-12px, 10px, 0) rotate(-4deg); }
  }

  @keyframes error-bug-float-rev {
    0% { transform: translate3d(0, 0, 0) rotate(0deg); }
    50% { transform: translate3d(-16px, 12px, 0) rotate(-5deg); }
    100% { transform: translate3d(10px, -10px, 0) rotate(4deg); }
  }

  .error-404-suggest-intro {
    margin: 0;
    font-size: 1rem;
  }

  .error-404-suggest-links {
    margin-top: 14px;
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 10px;
  }

  .error-404-suggest-link {
    font-family: var(--font-mono);
    font-size: 0.72rem;
    text-transform: uppercase;
    letter-spacing: 0.4px;
    padding: 8px 12px;
    border: 1px solid var(--color-card-lv3);
    border-radius: 6px;
    background: var(--color-card-lv2);
    color: var(--color-text-muted);
    transition: all 0.15s ease;
  }

  .error-404-suggest-link:hover {
    color: var(--color-text);
    border-color: var(--color-primary);
    background: var(--color-primary-dark);
  }
</style>

<main>
  <section class="hero error-404-hero" style="padding-top:120px;padding-bottom:40px;">
    <div class="error-404-bugs" aria-hidden="true">
      <svg class="error-404-bug" style="top:7%;left:4%;width:18px;--dur:8s;--delay:-2s;" viewBox="0 0 11 8" shape-rendering="crispEdges"><use href="#bug-shape"/></svg>
      <svg class="error-404-bug error-404-bug--reverse" style="top:11%;left:17%;width:30px;--dur:11s;--delay:-1s;" viewBox="0 0 11 8" shape-rendering="crispEdges"><use href="#bug-shape" transform="translate(11,0) scale(-1,1)"/></svg>
      <svg class="error-404-bug" style="top:20%;right:9%;width:22px;--dur:9s;--delay:-3s;" viewBox="0 0 11 8" shape-rendering="crispEdges"><use href="#bug-shape"/></svg>
      <svg class="error-404-bug error-404-bug--reverse" style="top:28%;left:7%;width:36px;--dur:12s;--delay:-4s;" viewBox="0 0 11 8" shape-rendering="crispEdges"><use href="#bug-shape"/></svg>
      <svg class="error-404-bug" style="top:34%;right:18%;width:16px;--dur:7.5s;--delay:-2.5s;" viewBox="0 0 11 8" shape-rendering="crispEdges"><use href="#bug-shape"/></svg>
      <svg class="error-404-bug error-404-bug--reverse" style="top:43%;right:4%;width:40px;--dur:13s;--delay:-5s;" viewBox="0 0 11 8" shape-rendering="crispEdges"><use href="#bug-shape" transform="translate(11,0) scale(-1,1)"/></svg>
      <svg class="error-404-bug" style="top:51%;left:3%;width:26px;--dur:8.8s;--delay:-1.5s;" viewBox="0 0 11 8" shape-rendering="crispEdges"><use href="#bug-shape"/></svg>
      <svg class="error-404-bug error-404-bug--reverse" style="top:56%;left:21%;width:19px;--dur:10.5s;--delay:-3.8s;" viewBox="0 0 11 8" shape-rendering="crispEdges"><use href="#bug-shape"/></svg>
      <svg class="error-404-bug" style="top:63%;right:26%;width:34px;--dur:12.8s;--delay:-2.2s;" viewBox="0 0 11 8" shape-rendering="crispEdges"><use href="#bug-shape"/></svg>
      <svg class="error-404-bug error-404-bug--reverse" style="top:71%;right:10%;width:24px;--dur:9.4s;--delay:-4.2s;" viewBox="0 0 11 8" shape-rendering="crispEdges"><use href="#bug-shape"/></svg>
      <svg class="error-404-bug" style="top:79%;left:10%;width:31px;--dur:11.4s;--delay:-6s;" viewBox="0 0 11 8" shape-rendering="crispEdges"><use href="#bug-shape" transform="translate(11,0) scale(-1,1)"/></svg>
      <svg class="error-404-bug error-404-bug--reverse" style="top:84%;left:29%;width:17px;--dur:8.2s;--delay:-2.7s;" viewBox="0 0 11 8" shape-rendering="crispEdges"><use href="#bug-shape"/></svg>
      <svg class="error-404-bug" style="top:88%;right:30%;width:27px;--dur:10.8s;--delay:-1.9s;" viewBox="0 0 11 8" shape-rendering="crispEdges"><use href="#bug-shape"/></svg>
      <svg class="error-404-bug error-404-bug--reverse" style="top:92%;right:6%;width:21px;--dur:9.7s;--delay:-3.3s;" viewBox="0 0 11 8" shape-rendering="crispEdges"><use href="#bug-shape"/></svg>
    </div>

    <div class="container hero__container">
      <img
        src="<?php echo esc_url(get_stylesheet_directory_uri() . '/assets/img/kody-404.png'); ?>"
        alt="Error 404"
        width="840"
        height="590"
        loading="eager"
        fetchpriority="high"
        decoding="async"
        style="width:min(420px,82vw);margin:0 auto 16px;display:block;"
      >

      <p class="hero__subtitle" style="margin-top:12px;margin-bottom:0;">
        The page you requested was not found.<br>
        It may have been moved, renamed, or removed.
      </p>

      <div class="hero__clients" style="margin:24px auto 0;max-width:700px;">
        <div class="retro-window">
          <div class="retro-window__bar">
            <span class="retro-window__bar-title">error_report.log</span>
            <div class="retro-window__bar-btns">
              <span class="retro-window__bar-btn">&#9472;</span>
              <span class="retro-window__bar-btn">&#9633;</span>
              <span class="retro-window__bar-btn">&times;</span>
            </div>
          </div>
          <div class="window-bar">
            <span class="window-dot"></span>
            <span class="window-dot"></span>
            <span class="window-dot"></span>
            <span class="window-bar__title">
              request://<?php echo esc_html($requested_label !== '' ? trim($requested_label, '/') : 'unknown-route'); ?>
            </span>
            <span class="window-bar__file">STATUS: 404</span>
          </div>
          <div class="retro-window__body" style="padding:14px 0;">
            <div class="container">
              <p class="hero__subtitle error-404-suggest-intro">
                <?php if ($requested_label !== '') : ?>
                  Were you looking for <strong><?php echo esc_html($requested_label); ?></strong>? These pages may help:
                <?php else : ?>
                  Here are some helpful pages you can open next:
                <?php endif; ?>
              </p>
              <div class="error-404-suggest-links">
                <?php foreach ($unique_suggestions as $entry) : ?>
                  <a class="error-404-suggest-link" href="<?php echo esc_url($entry['url']); ?>">
                    <?php echo esc_html($entry['title']); ?>
                  </a>
                <?php endforeach; ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>

<?php get_footer('kodus'); ?>
