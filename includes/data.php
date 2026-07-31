<?php
/**
 * Shared content + helpers for the whole Nexora site.
 * Included by every page before includes/header.php.
 */

$brand = 'NEXORA';

// label => file (used to build nav + highlight active page)
$nav_links = [
    'Home'      => 'index.php',
    'Features'  => 'features.php',
    'Solutions' => 'solutions.php',
    'Pricing'   => 'pricing.php',
    'Resources' => 'resources.php',
    'Company'   => 'company.php',
];

$trusted_by = [
    ['name' => 'Discord'],
    ['name' => 'Notion'],
    ['name' => 'OpenAI'],
    ['name' => 'Webflow'],
    ['name' => 'Linear'],
];

$features = [
    ['icon' => 'cloud',  'title' => 'Lightning Fast',    'desc' => 'Optimized for speed and performance at every scale.'],
    ['icon' => 'shield', 'title' => 'Enterprise Secure',  'desc' => 'Bank-level security to keep your data safe and compliant.'],
    ['icon' => 'bars',   'title' => 'Highly Scalable',    'desc' => 'Built to grow with your business without limits.'],
    ['icon' => 'puzzle', 'title' => 'Easy Integration',   'desc' => 'Seamlessly connect with your favorite tools and workflows.'],
];

// Extended feature set used on the dedicated Features page
$features_full = array_merge($features, [
    ['icon' => 'layers',   'title' => 'Smart Workflows',    'desc' => 'Automate repetitive tasks with visual, no-code workflow builders.'],
    ['icon' => 'bolt',     'title' => 'Real-time Analytics', 'desc' => 'Track every metric that matters with live dashboards.'],
    ['icon' => 'userplus', 'title' => 'Team Collaboration',  'desc' => 'Invite teammates, assign roles, and work together in real time.'],
    ['icon' => 'rocket',   'title' => 'Instant Deployment',  'desc' => 'Ship updates in seconds with zero-downtime deploys.'],
]);

$stats = [
    ['icon' => 'users',    'value' => '+1200',  'label' => 'Active Customers',       'sub' => 'in 60+ Countries'],
    ['icon' => 'smile',    'value' => '+98%',   'label' => 'Customer Satisfaction',  'sub' => 'Trusted by Thousands'],
    ['icon' => 'bolt',     'value' => '+50M',   'label' => 'Transactions Processed', 'sub' => 'Every Single Day'],
    ['icon' => 'shieldck', 'value' => '+99.9%', 'label' => 'System Uptime',          'sub' => 'Reliable & Always On'],
];

$steps = [
    ['num' => 1, 'icon' => 'userplus', 'title' => 'Create Account',      'desc' => 'Sign up in seconds and set up your workspace.'],
    ['num' => 2, 'icon' => 'layers',   'title' => 'Connect & Configure', 'desc' => 'Integrate your tools and customize everything to your needs.'],
    ['num' => 3, 'icon' => 'rocket',   'title' => 'Launch & Grow',       'desc' => 'Go live and scale your business with confidence.'],
];

$plans = [
    [
        'name' => 'Starter', 'tagline' => 'Perfect for individuals',
        'price' => 19, 'highlight' => false,
        'features' => ['Up to 5 Projects', 'Basic Analytics', 'Community Support', '1GB Storage'],
        'cta' => 'Get Started', 'link' => 'signup.php',
    ],
    [
        'name' => 'Pro', 'tagline' => 'For growing businesses',
        'price' => 49, 'highlight' => true, 'badge' => 'Most Popular',
        'features' => ['Unlimited Projects', 'Advanced Analytics', 'Priority Support', '20GB Storage', 'Custom Integrations'],
        'cta' => 'Get Started', 'link' => 'signup.php',
    ],
    [
        'name' => 'Enterprise', 'tagline' => 'For large organizations',
        'price' => null, 'highlight' => false,
        'features' => ['Everything in Pro', 'Dedicated Support', 'SLA & Uptime Guarantee', 'Custom Solutions'],
        'cta' => 'Contact Sales', 'link' => 'contact.php',
    ],
];

$faqs = [
    ['q' => 'Can I change plans later?', 'a' => 'Yes, you can upgrade or downgrade your plan at any time from your account settings — changes apply immediately.'],
    ['q' => 'Is there a free trial?', 'a' => 'Every plan includes a 14-day free trial with full access. No credit card required to start.'],
    ['q' => 'What payment methods do you accept?', 'a' => 'We accept all major credit cards, PayPal, and bank transfers for annual Enterprise plans.'],
    ['q' => 'Do you offer refunds?', 'a' => 'Yes, we offer a 30-day money-back guarantee on all paid plans, no questions asked.'],
];

$testimonials = [
    ['quote' => 'Nexora has completely transformed the way we build and scale our products. It\'s fast, reliable, and simply amazing.', 'name' => 'Sarah Johnson', 'role' => 'CTO, TechVision', 'initials' => 'SJ'],
    ['quote' => 'The best platform we\'ve used so far. Incredible performance, great support, and super easy to use.', 'name' => 'Michael Chen', 'role' => 'Founder, InnovateX', 'initials' => 'MC'],
    ['quote' => 'From day one, Nexora helped us save time and focus on what matters most — growing our business.', 'name' => 'Emily Rodriguez', 'role' => 'Product Manager, GrowthHub', 'initials' => 'ER'],
];

$blog_posts = [
    ['tag' => 'Productivity', 'date' => 'May 12, 2024', 'title' => '10 Productivity Tips to Supercharge Your Workflow', 'excerpt' => 'Small changes to your daily routine that compound into major gains for you and your team.'],
    ['tag' => 'Development',  'date' => 'May 8, 2024',  'title' => 'How to Build Scalable Apps with Modern Architecture', 'excerpt' => 'A practical guide to designing systems that grow gracefully with your user base.'],
    ['tag' => 'Security',     'date' => 'May 5, 2024',  'title' => 'Best Practices to Keep Your Data Secure in 2024', 'excerpt' => 'From access control to encryption, the essentials every team should have in place.'],
    ['tag' => 'Business',     'date' => 'Apr 28, 2024', 'title' => 'Choosing the Right Pricing Model for Your SaaS', 'excerpt' => 'A breakdown of flat-rate, usage-based, and tiered pricing — and when to use each.'],
    ['tag' => 'Productivity', 'date' => 'Apr 20, 2024', 'title' => 'Async Work: How Distributed Teams Stay in Sync', 'excerpt' => 'Communication patterns that keep remote teams aligned without endless meetings.'],
    ['tag' => 'Development',  'date' => 'Apr 14, 2024', 'title' => 'A Deep Dive into API Rate Limiting Strategies', 'excerpt' => 'Token buckets, sliding windows, and how to pick the right strategy for your API.'],
];

$resource_categories = ['All', 'Productivity', 'Development', 'Security', 'Business'];

$solutions = [
    ['icon' => 'bolt',     'title' => 'E-commerce',  'desc' => 'Power storefronts that convert, with real-time inventory and checkout at scale.'],
    ['icon' => 'layers',   'title' => 'SaaS Products','desc' => 'Ship features faster with infrastructure that scales alongside your users.'],
    ['icon' => 'shield',   'title' => 'Finance',      'desc' => 'Compliance-ready tooling built for the security demands of fintech.'],
    ['icon' => 'shieldck', 'title' => 'Healthcare',   'desc' => 'HIPAA-aligned workflows that keep patient data protected end to end.'],
    ['icon' => 'userplus', 'title' => 'Education',    'desc' => 'Tools that help schools and platforms manage learners at any scale.'],
    ['icon' => 'puzzle',   'title' => 'Agencies',     'desc' => 'Manage multiple client workspaces from a single, unified dashboard.'],
];

$team = [
    ['initials' => 'AK', 'name' => 'Alex Kim',       'role' => 'CEO & Co-Founder'],
    ['initials' => 'RP', 'name' => 'Riya Patel',     'role' => 'CTO & Co-Founder'],
    ['initials' => 'DL', 'name' => 'David Lee',      'role' => 'Head of Design'],
    ['initials' => 'NM', 'name' => 'Nadia Moreau',   'role' => 'Head of Engineering'],
];

$values = [
    ['title' => 'Customer First',   'desc' => 'Every decision starts with the question: does this help our customers succeed?'],
    ['title' => 'Move Fast',        'desc' => 'We ship early, iterate often, and treat feedback as a gift.'],
    ['title' => 'Radical Transparency', 'desc' => 'Open roadmaps, honest pricing, and clear communication — always.'],
    ['title' => 'Build to Last',    'desc' => 'We optimize for reliability and long-term trust over short-term wins.'],
];

$footer_cols = [
    'Product'   => ['Features' => 'features.php', 'Solutions' => 'solutions.php', 'Pricing' => 'pricing.php', 'Integrations' => 'features.php'],
    'Resources' => ['Blog' => 'resources.php', 'Documentation' => 'resources.php', 'Guides' => 'resources.php', 'Help Center' => 'contact.php', 'Community' => 'resources.php'],
    'Company'   => ['About Us' => 'company.php', 'Careers' => 'company.php', 'Press' => 'company.php', 'Contact Us' => 'contact.php', 'Partners' => 'company.php'],
];

function icon(string $name): string {
    $icons = [
        'cloud'    => '<path d="M6 18a4 4 0 0 1-.4-7.98A5.5 5.5 0 0 1 16.2 8.1 4.5 4.5 0 0 1 18 17H6Z"/><path d="M12 12v4"/><path d="m9.5 13.5 2.5-2.5 2.5 2.5"/>',
        'shield'   => '<path d="M12 3 4 6v6c0 5 3.4 8.4 8 9 4.6-.6 8-4 8-9V6l-8-3Z"/><path d="M9.5 12.2l1.8 1.8 3.2-3.6"/>',
        'bars'     => '<path d="M4 20V13"/><path d="M10 20V8"/><path d="M16 20v-5"/><path d="M20 20V4"/>',
        'puzzle'   => '<path d="M8 4h4a1 1 0 0 1 1 1v2.2a1.8 1.8 0 1 0 0 3.6V13a1 1 0 0 1-1 1H9.8a1.8 1.8 0 1 1-3.6 0H4a1 1 0 0 1-1-1V9a1.8 1.8 0 1 0 0-3.6V4a1 1 0 0 1 1-1h2.2A1.8 1.8 0 1 1 8 4Z"/>',
        'users'    => '<circle cx="9" cy="8" r="3"/><path d="M2.5 19c.6-3.4 3.2-5.5 6.5-5.5s5.9 2.1 6.5 5.5"/><circle cx="17" cy="8" r="2.4"/><path d="M15.5 13.6c2.5.4 4.4 2.3 4.9 5"/>',
        'smile'    => '<circle cx="12" cy="12" r="9"/><path d="M8.5 10.5h.01M15.5 10.5h.01"/><path d="M8 14.5c1 1.2 2.4 1.8 4 1.8s3-.6 4-1.8"/>',
        'bolt'     => '<path d="M12 2 4 14h6l-1 8 9-13h-6l0-7Z"/>',
        'shieldck' => '<path d="M12 3 4 6v6c0 5 3.4 8.4 8 9 4.6-.6 8-4 8-9V6l-8-3Z"/><path d="M9 12l2 2 4-4.5"/>',
        'userplus' => '<circle cx="9" cy="8" r="3.2"/><path d="M3.5 19c.6-3.3 2.9-5.2 5.5-5.2s4.9 1.9 5.5 5.2"/><path d="M18.5 8v5M16 10.5h5"/>',
        'layers'   => '<path d="m12 3 8 4.4-8 4.4-8-4.4L12 3Z"/><path d="m4 12.4 8 4.4 8-4.4"/><path d="m4 16.8 8 4.4 8-4.4"/>',
        'rocket'   => '<path d="M13.5 3.5c3 0 5.6 2.4 6 6.3-2.7 1-5 2.9-6.6 6.2L9 16l.2-4c3-1.7 4.9-4.1 4.3-8.5Z"/><path d="m9 16-3 1 1-3"/><circle cx="14.5" cy="9.5" r="1.4"/><path d="M8 15s-2.5.3-3.5 1.5S3 20 3 20s1.8-.5 2.5-1.5S6 16 6 16"/>',
        'mail'     => '<rect x="3" y="5" width="18" height="14" rx="2"/><path d="m4 7 8 6 8-6"/>',
        'pin'      => '<path d="M12 21s7-6.5 7-12a7 7 0 0 0-14 0c0 5.5 7 12 7 12Z"/><circle cx="12" cy="9" r="2.5"/>',
        'phone'    => '<path d="M5 4h3l2 5-2.5 1.5a11 11 0 0 0 5 5L14 13l5 2v3a2 2 0 0 1-2 2c-8 0-14-6-14-14a2 2 0 0 1 2-2Z"/>',
    ];
    return $icons[$name] ?? '';
}

function money_fmt($amount): string {
    return $amount === null ? 'Custom' : '$' . $amount;
}
