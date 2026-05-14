<?php
/**
 * Structured data enhancements for Kodus retro pages.
 */

function kodus_get_schema_logo_url() {
    return 'https://kodus.io/wp-content/uploads/2023/11/Kodus-ColoredBackground.png';
}

function kodus_get_schema_publisher_reference() {
    return [
        '@id' => home_url('/#organization'),
    ];
}

function kodus_get_schema_page_post_id() {
    if (is_front_page()) {
        return (int) get_option('page_on_front');
    }

    return (int) get_queried_object_id();
}

function kodus_get_schema_page_dates() {
    $post_id = kodus_get_schema_page_post_id();
    if (!$post_id) {
        return [
            'published' => '',
            'modified' => '',
        ];
    }

    return [
        'published' => get_post_time(DATE_W3C, true, $post_id),
        'modified' => get_post_modified_time(DATE_W3C, true, $post_id),
    ];
}

function kodus_get_schema_page_title() {
    $title = '';

    if (function_exists('kodus_get_current_page_meta_title')) {
        $title = trim((string) kodus_get_current_page_meta_title());
    }

    if ($title !== '') {
        return wp_strip_all_tags($title);
    }

    $post_id = kodus_get_schema_page_post_id();
    if (!$post_id) {
        return '';
    }

    return wp_strip_all_tags((string) get_the_title($post_id));
}

function kodus_get_schema_page_description() {
    if (function_exists('kodus_get_current_page_meta_description')) {
        $description = trim((string) kodus_get_current_page_meta_description());
        if ($description !== '') {
            return $description;
        }
    }

    return '';
}

function kodus_get_schema_text_things($items) {
    $things = [];

    foreach ($items as $item) {
        $name = trim((string) $item);
        if ($name === '') {
            continue;
        }

        $things[] = [
            '@type' => 'Thing',
            'name' => $name,
        ];
    }

    return $things;
}

function kodus_get_visible_software_application_reviews() {
    return [
        [
            '@type' => 'Review',
            'author' => [
                '@type' => 'Person',
                'name' => 'David Barnett',
            ],
            'reviewBody' => 'Kodus helps us reflect our standards in PRs to share knowledge and raise our code quality. Kody catches some subtle issues and calls attention to them so reviews and authors can have a more effective review. I appreciate the flexibility to configure custom rules and integrations.',
            'reviewRating' => [
                '@type' => 'Rating',
                'ratingValue' => 5,
                'bestRating' => 5,
                'worstRating' => 1,
            ],
        ],
        [
            '@type' => 'Review',
            'author' => [
                '@type' => 'Person',
                'name' => 'André Diogo',
            ],
            'reviewBody' => 'Kodus fit like a glove for me. Before, I was buried in slow code reviews. Now, feedback happens way faster, and I can actually focus on other things.',
            'reviewRating' => [
                '@type' => 'Rating',
                'ratingValue' => 5,
                'bestRating' => 5,
                'worstRating' => 1,
            ],
        ],
        [
            '@type' => 'Review',
            'author' => [
                '@type' => 'Person',
                'name' => 'João H. Kersul',
            ],
            'reviewBody' => 'These days, Kodus is part of our daily review routine. It helps a lot with error handling and brings up suggestions that would often go unnoticed. This active listening and fast turnaround have made a real difference for our engineering team.',
            'reviewRating' => [
                '@type' => 'Rating',
                'ratingValue' => 5,
                'bestRating' => 5,
                'worstRating' => 1,
            ],
        ],
        [
            '@type' => 'Review',
            'author' => [
                '@type' => 'Person',
                'name' => 'Ricardo',
            ],
            'reviewBody' => 'Since we started using Kody, the dev experience has improved a lot. Time spent on code reviews dropped by around 30%, and the AI brings valuable insights on performance, security, and code optimization. One of the best parts is that we can tailor how it works for each project.',
            'reviewRating' => [
                '@type' => 'Rating',
                'ratingValue' => 5,
                'bestRating' => 5,
                'worstRating' => 1,
            ],
        ],
        [
            '@type' => 'Review',
            'author' => [
                '@type' => 'Person',
                'name' => 'Luiz Barrile',
            ],
            'reviewBody' => 'Kodus has become an essential part of our process at Lerian. By standardizing steps and automating checks, we\'ve gained more speed and consistency, while reducing rework and improving delivery quality.',
            'reviewRating' => [
                '@type' => 'Rating',
                'ratingValue' => 5,
                'bestRating' => 5,
                'worstRating' => 1,
            ],
        ],
        [
            '@type' => 'Review',
            'author' => [
                '@type' => 'Person',
                'name' => 'Raphael Sampaio',
            ],
            'reviewBody' => 'Kodus has been helping us save a lot of time on code reviews, while also providing key engineering productivity metrics. Since we started using the tool, our average review time has dropped from hours to minutes.',
            'reviewRating' => [
                '@type' => 'Rating',
                'ratingValue' => 5,
                'bestRating' => 5,
                'worstRating' => 1,
            ],
        ],
        [
            '@type' => 'Review',
            'author' => [
                '@type' => 'Person',
                'name' => 'Pedro Maia',
            ],
            'reviewBody' => 'We trained the team to use AI in day-to-day coding, and Kodus stepped in as our senior reviewer that never forgets anything. It doesn\'t replace human review, but it\'s now a required step: it ensures consistency and prevents repeat incidents.',
            'reviewRating' => [
                '@type' => 'Rating',
                'ratingValue' => 5,
                'bestRating' => 5,
                'worstRating' => 1,
            ],
        ],
        [
            '@type' => 'Review',
            'author' => [
                '@type' => 'Person',
                'name' => 'Jonathan Georgeu',
            ],
            'reviewBody' => 'Kodus has had a huge impact on our workflow by saving us valuable time during PR reviews. It consistently catches the small details that are easy to miss, and the ability to set up custom rules means we can align automated reviews with our own standards.',
            'reviewRating' => [
                '@type' => 'Rating',
                'ratingValue' => 5,
                'bestRating' => 5,
                'worstRating' => 1,
            ],
        ],
        [
            '@type' => 'Review',
            'author' => [
                '@type' => 'Person',
                'name' => 'Igor Duca',
            ],
            'reviewBody' => 'Kodus helped me move as fast as I ever could during my development days. It has never been so easy to ship reliable code and build real solutions.',
            'reviewRating' => [
                '@type' => 'Rating',
                'ratingValue' => 5,
                'bestRating' => 5,
                'worstRating' => 1,
            ],
        ],
    ];
}

function kodus_current_page_has_visible_software_reviews() {
    return kodus_is_primary_home() || kodus_get_current_page_template() === 'page-roi.php';
}

function kodus_should_output_software_application_schema() {
    $template = kodus_get_current_page_template();

    return kodus_is_primary_home() || in_array($template, ['page-roi.php', 'page-pricing.php'], true);
}

function kodus_get_software_application_schema() {
    $template = kodus_get_current_page_template();
    $pricing_url = home_url('/pricing/');
    $page_url = kodus_get_current_page_permalink();
    $schema = [
        '@context' => 'https://schema.org',
        '@type' => 'SoftwareApplication',
        '@id' => home_url('/#software-application'),
        'name' => 'Kodus',
        'url' => home_url('/'),
        'inLanguage' => 'en-US',
        'applicationCategory' => 'DeveloperApplication',
        'operatingSystem' => 'Web',
        'description' => 'Open source AI code review platform for pull requests, code quality, security, engineering standards, and team-specific review workflows.',
        'image' => kodus_get_schema_logo_url(),
        'publisher' => kodus_get_schema_publisher_reference(),
        'offers' => [
            [
                '@type' => 'Offer',
                'name' => 'Community',
                'price' => '0',
                'priceCurrency' => 'USD',
                'url' => $pricing_url,
                'description' => 'Free community plan for indie developers, students, and small teams using their own API keys.',
            ],
            [
                '@type' => 'Offer',
                'name' => 'Teams Monthly',
                'price' => '10',
                'priceCurrency' => 'USD',
                'url' => $pricing_url,
                'description' => 'Teams plan billed monthly at $10 per developer per month.',
            ],
            [
                '@type' => 'Offer',
                'name' => 'Teams Annual',
                'price' => '8',
                'priceCurrency' => 'USD',
                'url' => $pricing_url,
                'description' => 'Teams plan billed annually at an effective rate of $8 per developer per month.',
            ],
            [
                '@type' => 'Offer',
                'name' => 'Enterprise',
                'url' => $pricing_url,
                'description' => 'Custom enterprise setup for organizations that need SSO, compliance, and dedicated support.',
            ],
        ],
    ];

    if ($template === 'page-roi.php') {
        $schema['description'] = 'ROI calculator for Kodus to estimate time savings and engineering impact from automated AI code review.';
        $schema['featureList'] = [
            'ROI calculator for pull request review efficiency',
            'Estimate monthly review cost and time saved',
            'Evaluate the business impact of AI-assisted code review',
        ];
    }

    if ($template === 'page-pricing.php') {
        $schema['description'] = 'Pricing plans for Kodus, the open source AI code review platform, including Community, Teams, and Enterprise options.';
        $schema['mainEntityOfPage'] = $page_url;
    }

    if (kodus_current_page_has_visible_software_reviews()) {
        $schema['review'] = kodus_get_visible_software_application_reviews();
    }

    return $schema;
}

function kodus_get_home_faq_schema() {
    return [
        '@context' => 'https://schema.org',
        '@type' => 'FAQPage',
        '@id' => home_url('/#faq'),
        'inLanguage' => 'en-US',
        'mainEntity' => [
            [
                '@type' => 'Question',
                'name' => 'Which AI models are supported?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Kodus is model agnostic. You can use Claude, GPT-4, Gemini, Llama, or any OpenAI-compatible endpoint.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'Can I restrict the permissions Kodus uses?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Yes, you have full control over the permissions you grant. Kodus operates with the minimum access required to keep your code secure.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'Will I be charged for all developers in my organization?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'No, you decide who is included in the Kodus team and will only be charged for those users. You have full control over team management and billing.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'Do you train your AI model with my code or data?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'No, Kodus does not train its models with customer data. Your data is processed securely and is never used to improve or retrain our AI.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'How does Kodus compare to CodeRabbit?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Kodus is open source, model agnostic, and charges zero markup on LLM costs. With Kodus you control the model, the cost, and the rules.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'What Git providers are supported?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Kodus supports GitHub, GitLab, Bitbucket, and Azure DevOps, integrating at the pull request level with existing review workflows.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'What does zero markup mean?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Kodus does not add margin on top of LLM API calls. You pay the model provider directly, and Kodus monetizes through the platform subscription.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'Do you store my source code?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'No, Kodus does not store your source code. Processing happens in real time and no part of your repository is saved on Kodus servers.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'How does Kodus access my repositories?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Kodus integrates through your Git provider with controlled permissions and accesses pull request data using the minimum scope required for review workflows.',
                ],
            ],
        ],
    ];
}

function kodus_get_article_schema_templates() {
    return [
        'page-benchmark.php',
        'page-kodus-vs-coderabbit.php',
        'page-kodus-vs-bugbot.php',
        'page-kodus-vs-github.php',
        'page-kodus-vs-claude.php',
        'page-self-hosted-ai-code-review.php',
        'page-byo-llm-code-review.php',
        'page-policy-as-code-review.php',
    ];
}

function kodus_should_output_article_schema() {
    return in_array(kodus_get_current_page_template(), kodus_get_article_schema_templates(), true);
}

function kodus_get_article_schema_about() {
    $template = kodus_get_current_page_template();

    $about_map = [
        'page-benchmark.php' => ['AI code review', 'Benchmarking', 'Kodus', 'CodeRabbit', 'GitHub Copilot', 'Cursor'],
        'page-kodus-vs-coderabbit.php' => ['Kodus', 'CodeRabbit', 'AI code review'],
        'page-kodus-vs-bugbot.php' => ['Kodus', 'Cursor BugBot', 'AI code review'],
        'page-kodus-vs-github.php' => ['Kodus', 'GitHub Copilot', 'AI code review'],
        'page-kodus-vs-claude.php' => ['Kodus', 'Claude Code', 'AI code review'],
        'page-self-hosted-ai-code-review.php' => ['Kodus', 'AI code review', 'Self-hosted', 'Open source', 'AGPLv3'],
        'page-byo-llm-code-review.php' => ['Kodus', 'AI code review', 'BYO LLM', 'Model agnostic', 'Open source'],
        'page-policy-as-code-review.php' => ['Kodus', 'AI code review', 'Policy as code', 'Custom rules', 'Open source'],
    ];

    return $about_map[$template] ?? [];
}

function kodus_get_article_schema() {
    $page_url = kodus_get_current_page_permalink();
    $page_dates = kodus_get_schema_page_dates();
    $schema = [
        '@context' => 'https://schema.org',
        '@type' => 'Article',
        '@id' => $page_url . '#article',
        'headline' => kodus_get_schema_page_title(),
        'description' => kodus_get_schema_page_description(),
        'url' => $page_url,
        'mainEntityOfPage' => $page_url,
        'inLanguage' => 'en-US',
        'author' => kodus_get_schema_publisher_reference(),
        'publisher' => kodus_get_schema_publisher_reference(),
        'image' => kodus_get_schema_logo_url(),
    ];

    if ($page_dates['published'] !== '') {
        $schema['datePublished'] = $page_dates['published'];
    }

    if ($page_dates['modified'] !== '') {
        $schema['dateModified'] = $page_dates['modified'];
    }

    $about = kodus_get_schema_text_things(kodus_get_article_schema_about());
    if (!empty($about)) {
        $schema['about'] = $about;
    }

    return $schema;
}

function kodus_should_output_collection_page_schema() {
    return kodus_get_current_page_template() === 'page-customers.php';
}

function kodus_get_customers_collection_schema() {
    $page_url = kodus_get_current_page_permalink();

    return [
        '@context' => 'https://schema.org',
        '@type' => 'CollectionPage',
        '@id' => $page_url . '#collection-page',
        'name' => kodus_get_schema_page_title(),
        'description' => kodus_get_schema_page_description(),
        'url' => $page_url,
        'inLanguage' => 'en-US',
        'mainEntity' => [
            '@type' => 'ItemList',
            'name' => 'Kodus customer case studies',
            'itemListElement' => [
                [
                    '@type' => 'ListItem',
                    'position' => 1,
                    'url' => home_url('/case-brendi/'),
                    'name' => 'Brendi Case Study',
                ],
                [
                    '@type' => 'ListItem',
                    'position' => 2,
                    'url' => home_url('/case-lerian/'),
                    'name' => 'Lerian Case Study',
                ],
                [
                    '@type' => 'ListItem',
                    'position' => 3,
                    'url' => home_url('/case-notificacoes/'),
                    'name' => 'Notificações Inteligentes Case Study',
                ],
            ],
        ],
        'about' => kodus_get_schema_text_things([
            'Customer stories',
            'Case studies',
            'AI code review',
            'Engineering teams',
        ]),
    ];
}

function kodus_output_structured_data() {
    if (is_admin() || is_feed()) {
        return;
    }

    $schemas = [];

    if (kodus_should_output_software_application_schema()) {
        $schemas[] = kodus_get_software_application_schema();
    }

    if (kodus_is_primary_home()) {
        $schemas[] = kodus_get_home_faq_schema();
    }

    if (kodus_should_output_article_schema()) {
        $schemas[] = kodus_get_article_schema();
    }

    if (kodus_should_output_collection_page_schema()) {
        $schemas[] = kodus_get_customers_collection_schema();
    }

    foreach ($schemas as $schema) {
        echo '<script type="application/ld+json" class="kodus-schema">' . wp_json_encode(
            $schema,
            JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE
        ) . "</script>\n";
    }
}
add_action('wp_head', 'kodus_output_structured_data', 30);
