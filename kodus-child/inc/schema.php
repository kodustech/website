<?php
/**
 * Structured data enhancements for Kodus retro pages.
 */

function kodus_get_schema_logo_url() {
    return 'https://kodus.io/wp-content/uploads/2023/11/Kodus-ColoredBackground.png';
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
    // Keep software app markup only on pages that visibly show the matching reviews.
    return kodus_current_page_has_visible_software_reviews();
}

function kodus_get_software_application_schema() {
    $pricing_url = home_url('/pricing/');
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
        'publisher' => [
            '@id' => home_url('/#organization'),
        ],
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
                'name' => 'Teams',
                'price' => '10',
                'priceCurrency' => 'USD',
                'url' => $pricing_url,
                'description' => 'Teams plan starting at $10 per developer per month.',
            ],
        ],
    ];

    $template = kodus_get_current_page_template();

    if ($template === 'page-roi.php') {
        $schema['description'] = 'ROI calculator for Kodus to estimate time savings and engineering impact from automated AI code review.';
        $schema['featureList'] = [
            'ROI calculator for pull request review efficiency',
            'Estimate monthly review cost and time saved',
            'Evaluate the business impact of AI-assisted code review',
        ];
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

    foreach ($schemas as $schema) {
        echo '<script type="application/ld+json" class="kodus-schema">' . wp_json_encode(
            $schema,
            JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE
        ) . "</script>\n";
    }
}
add_action('wp_head', 'kodus_output_structured_data', 30);
