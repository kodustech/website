<?php
/**
 * Structured data enhancements for Kodus retro pages.
 */

function kodus_get_schema_logo_url() {
    return 'https://kodus.io/wp-content/uploads/2023/11/Kodus-ColoredBackground.png';
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

    if ($template === 'page-pricing.php') {
        $schema['description'] = 'Pricing for Kodus, an open source and model-agnostic AI code review platform with BYOK support and zero markup on AI costs.';
    }

    if ($template === 'page-roi.php') {
        $schema['description'] = 'ROI calculator for Kodus to estimate time savings and engineering impact from automated AI code review.';
        $schema['featureList'] = [
            'ROI calculator for pull request review efficiency',
            'Estimate monthly review cost and time saved',
            'Evaluate the business impact of AI-assisted code review',
        ];
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

    $template = kodus_get_current_page_template();
    $schemas = [];

    if (kodus_is_primary_home() || $template === 'page-pricing.php' || $template === 'page-roi.php') {
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
