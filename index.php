<?php
/**
 * Nexora - Landing Page
 * Single-file PHP implementation. Content is driven by PHP arrays below,
 * markup is rendered with PHP, styling is a scoped <style> block.
 */

$brand = 'NEXORA';

$nav_links = ['Home', 'Features', 'Solutions', 'Pricing', 'Resources'];

$trusted_by = [
    ['name' => 'Discord',  'icon' => 'discord'],
    ['name' => 'Notion',   'icon' => 'notion'],
    ['name' => 'OpenAI',   'icon' => 'openai'],
    ['name' => 'Webflow',  'icon' => 'webflow'],
    ['name' => 'Linear',   'icon' => 'linear'],
];

$features = [
    [
        'icon' => 'cloud',
        'title' => 'Lightning Fast',
        'desc'  => 'Optimized for speed and performance at every scale.',
    ],
    [
        'icon' => 'shield',
        'title' => 'Enterprise Secure',
        'desc'  => 'Bank-level security to keep your data safe and compliant.',
    ],
    [
        'icon' => 'bars',
        'title' => 'Highly Scalable',
        'desc'  => 'Built to grow with your business without limits.',
    ],
    [
        'icon' => 'puzzle',
        'title' => 'Easy Integration',
        'desc'  => 'Seamlessly connect with your favorite tools and workflows.',
    ],
];

$stats = [
    ['icon' => 'users',   'value' => '+1200',  'label' => 'Active Customers',      'sub' => 'in 60+ Countries'],
    ['icon' => 'smile',   'value' => '+98%',    'label' => 'Customer Satisfaction', 'sub' => 'Trusted by Thousands'],
    ['icon' => 'bolt',    'value' => '+50M',    'label' => 'Transactions Processed','sub' => 'Every Single Day'],
    ['icon' => 'shieldck','value' => '+99.9%',  'label' => 'System Uptime',         'sub' => 'Reliable & Always On'],
];

$steps = [
    ['num' => 1, 'icon' => 'userplus', 'title' => 'Create Account',       'desc' => 'Sign up in seconds and set up your workspace.'],
    ['num' => 2, 'icon' => 'layers',   'title' => 'Connect & Configure',  'desc' => 'Integrate your tools and customize everything to your needs.'],
    ['num' => 3, 'icon' => 'rocket',   'title' => 'Launch & Grow',        'desc' => 'Go live and scale your business with confidence.'],
];

$plans = [
    [
        'name' => 'Starter', 'tagline' => 'Perfect for individuals',
        'price' => '$19', 'highlight' => false,
        'features' => ['Up to 5 Projects', 'Basic Analytics', 'Community Support', '1GB Storage'],
        'cta' => 'Get Started',
    ],
    [
        'name' => 'Pro', 'tagline' => 'For growing businesses',
        'price' => '$49', 'highlight' => true, 'badge' => 'Yearly (Save 20%)',
        'features' => ['Unlimited Projects', 'Advanced Analytics', 'Priority Support', '20GB Storage', 'Custom Integrations'],
        'cta' => 'Get Started',
    ],
    [
        'name' => 'Enterprise', 'tagline' => 'For large organizations',
        'price' => 'Custom', 'highlight' => false,
        'features' => ['Everything in Pro', 'Dedicated Support', 'SLA & Uptime Guarantee', 'Custom Solutions'],
        'cta' => 'Contact Sales',
    ],
];

$testimonials = [
    [
        'quote' => 'Nexora has completely transformed the way we build and scale our products. It\'s fast, reliable, and simply amazing.',
        'name' => 'Sarah Johnson', 'role' => 'CTO, TechVision', 'initials' => 'SJ',
    ],
    [
        'quote' => 'The best platform we\'ve used so far. Incredible performance, great support, and super easy to use.',
        'name' => 'Michael Chen', 'role' => 'Founder, InnovateX', 'initials' => 'MC',
    ],
    [
        'quote' => 'From day one, Nexora helped us save time and focus on what matters most — growing our business.',
        'name' => 'Emily Rodriguez', 'role' => 'Product Manager, GrowthHub', 'initials' => 'ER',
    ],
];

$blog_posts = [
    ['tag' => 'Productivity', 'date' => 'May 12, 2024', 'title' => '10 Productivity Tips to Supercharge Your Workflow'],
    ['tag' => 'Development',  'date' => 'May 8, 2024',  'title' => 'How to Build Scalable Apps with Modern Architecture'],
    ['tag' => 'Security',     'date' => 'May 5, 2024',  'title' => 'Best Practices to Keep Your Data Secure in 2024'],
];

$footer_cols = [
    'Product'   => ['Features', 'Solutions', 'Pricing', 'Integrations'],
    'Resources' => ['Blog', 'Documentation', 'Guides', 'Help Center', 'Community'],
    'Company'   => ['About Us', 'Careers', 'Press', 'Contact Us', 'Partners'],
];

function icon(string $name): string {
    $icons = [
        'cloud' => '<path d="M6 18a4 4 0 0 1-.4-7.98A5.5 5.5 0 0 1 16.2 8.1 4.5 4.5 0 0 1 18 17H6Z"/><path d="M12 12v4"/><path d="m9.5 13.5 2.5-2.5 2.5 2.5"/>',
        'shield' => '<path d="M12 3 4 6v6c0 5 3.4 8.4 8 9 4.6-.6 8-4 8-9V6l-8-3Z"/><path d="M9.5 12.2l1.8 1.8 3.2-3.6"/>',
        'bars' => '<path d="M4 20V13"/><path d="M10 20V8"/><path d="M16 20v-5"/><path d="M20 20V4"/>',
        'puzzle' => '<path d="M8 4h4a1 1 0 0 1 1 1v2.2a1.8 1.8 0 1 0 0 3.6V13a1 1 0 0 1-1 1H9.8a1.8 1.8 0 1 1-3.6 0H4a1 1 0 0 1-1-1V9a1.8 1.8 0 1 0 0-3.6V4a1 1 0 0 1 1-1h2.2A1.8 1.8 0 1 1 8 4Z"/>',
        'users' => '<circle cx="9" cy="8" r="3"/><path d="M2.5 19c.6-3.4 3.2-5.5 6.5-5.5s5.9 2.1 6.5 5.5"/><circle cx="17" cy="8" r="2.4"/><path d="M15.5 13.6c2.5.4 4.4 2.3 4.9 5"/>',
        'smile' => '<circle cx="12" cy="12" r="9"/><path d="M8.5 10.5h.01M15.5 10.5h.01"/><path d="M8 14.5c1 1.2 2.4 1.8 4 1.8s3-.6 4-1.8"/>',
        'bolt' => '<path d="M12 2 4 14h6l-1 8 9-13h-6l0-7Z"/>',
        'shieldck' => '<path d="M12 3 4 6v6c0 5 3.4 8.4 8 9 4.6-.6 8-4 8-9V6l-8-3Z"/><path d="M9 12l2 2 4-4.5"/>',
        'userplus' => '<circle cx="9" cy="8" r="3.2"/><path d="M3.5 19c.6-3.3 2.9-5.2 5.5-5.2s4.9 1.9 5.5 5.2"/><path d="M18.5 8v5M16 10.5h5"/>',
        'layers' => '<path d="m12 3 8 4.4-8 4.4-8-4.4L12 3Z"/><path d="m4 12.4 8 4.4 8-4.4"/><path d="m4 16.8 8 4.4 8-4.4"/>',
        'rocket' => '<path d="M13.5 3.5c3 0 5.6 2.4 6 6.3-2.7 1-5 2.9-6.6 6.2L9 16l.2-4c3-1.7 4.9-4.1 4.3-8.5Z"/><path d="m9 16-3 1 1-3"/><circle cx="14.5" cy="9.5" r="1.4"/><path d="M8 15s-2.5.3-3.5 1.5S3 20 3 20s1.8-.5 2.5-1.5S6 16 6 16"/>',
    ];
    return $icons[$name] ?? '';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?= htmlspecialchars($brand) ?> — The Future of Digital Innovation</title>
<style>
  :root{
    --bg:#07070d;
    --bg-alt:#0c0c17;
    --panel:#12121e;
    --panel-border:#23232f;
    --purple:#8b5cf6;
    --blue:#3b82f6;
    --grad: linear-gradient(135deg,#7c3aed 0%,#3b82f6 100%);
    --text:#f4f4f7;
    --muted:#9797a8;
    --muted-dim:#6c6c7d;
    --radius:16px;
    --maxw:1180px;
  }
  *{box-sizing:border-box;margin:0;padding:0;}
  html{scroll-behavior:smooth;}
  body{
    background:var(--bg);
    color:var(--text);
    font-family:'Inter',-apple-system,BlinkMacSystemFont,'Segoe UI',sans-serif;
    line-height:1.5;
    overflow-x:hidden;
  }
  a{color:inherit;text-decoration:none;}
  ul{list-style:none;}
  img{max-width:100%;display:block;}
  .wrap{max-width:var(--maxw);margin:0 auto;padding:0 24px;}
  .eyebrow{
    font-size:12px;font-weight:700;letter-spacing:.14em;text-transform:uppercase;
    color:var(--purple);margin-bottom:10px;
  }
  .btn{
    display:inline-flex;align-items:center;gap:8px;
    padding:12px 22px;border-radius:10px;font-weight:600;font-size:14px;
    border:1px solid transparent;cursor:pointer;transition:.2s ease;white-space:nowrap;
  }
  .btn-primary{background:var(--grad);color:#fff;box-shadow:0 8px 24px -8px rgba(124,58,237,.6);}
  .btn-primary:hover{filter:brightness(1.08);transform:translateY(-1px);}
  .btn-outline{background:transparent;border-color:#2c2c3a;color:var(--text);}
  .btn-outline:hover{border-color:#4c4c63;background:#15151f;}
  .btn-block{width:100%;justify-content:center;}

  /* ---------- NAV ---------- */
  header{
    position:sticky;top:0;z-index:50;
    background:rgba(7,7,13,.75);
    backdrop-filter:blur(14px);
    border-bottom:1px solid #1a1a24;
  }
  nav.wrap{display:flex;align-items:center;justify-content:space-between;height:74px;}
  .logo{display:flex;align-items:center;gap:9px;font-weight:800;font-size:18px;letter-spacing:.02em;}
  .logo .mark{
    width:30px;height:30px;border-radius:9px;background:var(--grad);
    display:flex;align-items:center;justify-content:center;font-size:14px;
  }
  .nav-links{display:flex;align-items:center;gap:34px;font-size:14.5px;color:var(--muted);}
  .nav-links a{transition:color .2s;position:relative;}
  .nav-links a:hover{color:var(--text);}
  .nav-links a.active{color:var(--text);}
  .nav-links a.active::after{
    content:'';position:absolute;left:0;right:0;bottom:-24px;height:2px;background:var(--grad);
  }
  .nav-links .caret{font-size:10px;margin-left:4px;opacity:.6;}
  .nav-right{display:flex;align-items:center;gap:16px;}
  .icon-btn{
    width:38px;height:38px;border-radius:9px;border:1px solid #23232f;
    display:flex;align-items:center;justify-content:center;background:#101019;cursor:pointer;
  }
  .burger{display:none;background:none;border:none;color:var(--text);cursor:pointer;}

  /* ---------- HERO ---------- */
  .hero{position:relative;padding:88px 0 60px;overflow:hidden;}
  .hero-bg{
    position:absolute;inset:0;z-index:0;pointer-events:none;
    background:
      radial-gradient(600px 400px at 78% 30%, rgba(124,58,237,.25), transparent 60%),
      radial-gradient(500px 350px at 60% 60%, rgba(59,130,246,.18), transparent 60%);
  }
  .hero-grid{
    position:relative;z-index:1;display:grid;grid-template-columns:1fr 1fr;gap:40px;align-items:center;
  }
  .badge-pill{
    display:inline-flex;align-items:center;gap:8px;padding:7px 14px;border-radius:999px;
    background:#15121f;border:1px solid #2a2440;font-size:12.5px;color:#c9baf5;margin-bottom:22px;
  }
  .badge-pill .dot{width:6px;height:6px;border-radius:50%;background:var(--purple);box-shadow:0 0 8px var(--purple);}
  .hero h1{font-size:52px;font-weight:800;line-height:1.12;letter-spacing:-.02em;margin-bottom:18px;}
  .hero h1 .grad-text{background:var(--grad);-webkit-background-clip:text;background-clip:text;color:transparent;}
  .hero p{color:var(--muted);font-size:16.5px;max-width:460px;margin-bottom:30px;}
  .hero-ctas{display:flex;gap:14px;}

  .cube-stage{position:relative;height:440px;display:flex;align-items:center;justify-content:center;}
  .cube-stage svg{width:100%;max-width:460px;filter:drop-shadow(0 0 40px rgba(124,58,237,.45));}
  .ring{
    position:absolute;bottom:20px;left:50%;transform:translateX(-50%);
    width:340px;height:100px;border-radius:50%;
    border:1px solid rgba(139,92,246,.35);
  }
  .ring.r2{width:420px;height:130px;bottom:0;border-color:rgba(59,130,246,.2);}

  .trust-bar{border-top:1px solid #16161f;border-bottom:1px solid #16161f;padding:26px 0;background:#08080f;}
  .trust-row{display:flex;align-items:center;justify-content:space-between;flex-wrap:wrap;gap:24px;}
  .trust-label{font-size:12.5px;color:var(--muted-dim);white-space:nowrap;}
  .trust-logos{display:flex;align-items:center;gap:38px;flex-wrap:wrap;color:#9d9db0;font-weight:600;font-size:14.5px;}
  .trust-logos span{display:flex;align-items:center;gap:8px;opacity:.75;}

  /* ---------- SECTION HEADERS ---------- */
  section{padding:90px 0;}
  .section-head{display:flex;justify-content:space-between;align-items:flex-end;gap:30px;margin-bottom:46px;flex-wrap:wrap;}
  .section-head h2{font-size:34px;font-weight:800;letter-spacing:-.01em;max-width:520px;}
  .section-head h2 .grad-text{background:var(--grad);-webkit-background-clip:text;background-clip:text;color:transparent;}
  .section-head p{color:var(--muted);font-size:15px;max-width:340px;margin-bottom:14px;}
  .section-head .right{display:flex;flex-direction:column;align-items:flex-end;}
  .center-head{text-align:center;}
  .center-head h2{margin:0 auto 12px;}
  .center-head p{margin:0 auto;}

  /* ---------- FEATURES ---------- */
  .feature-grid{display:grid;grid-template-columns:repeat(4,1fr);gap:20px;margin-bottom:20px;}
  .card{
    background:var(--panel);border:1px solid var(--panel-border);border-radius:var(--radius);
    padding:28px 24px;transition:.25s ease;
  }
  .card:hover{border-color:#39304f;transform:translateY(-4px);background:#151522;}
  .feature-icon{
    width:52px;height:52px;border-radius:12px;margin-bottom:20px;
    display:flex;align-items:center;justify-content:center;
    background:linear-gradient(150deg,rgba(124,58,237,.25),rgba(59,130,246,.12));
    border:1px solid #2a2440;
  }
  .feature-icon svg{width:24px;height:24px;stroke:#a996f7;fill:none;stroke-width:1.8;stroke-linecap:round;stroke-linejoin:round;}
  .card h3{font-size:17px;font-weight:700;margin-bottom:8px;}
  .card p{color:var(--muted);font-size:13.8px;}

  .stat-grid{display:grid;grid-template-columns:repeat(4,1fr);gap:20px;}
  .stat-card{
    background:var(--panel);border:1px solid var(--panel-border);border-radius:var(--radius);
    padding:26px 22px;text-align:center;
  }
  .stat-icon{width:34px;height:34px;margin:0 auto 12px;}
  .stat-icon svg{width:100%;height:100%;stroke:var(--purple);fill:none;stroke-width:1.8;}
  .stat-value{font-size:28px;font-weight:800;color:#fff;margin-bottom:4px;}
  .stat-label{font-size:13.5px;font-weight:600;color:var(--text);}
  .stat-sub{font-size:12px;color:var(--muted-dim);margin-top:2px;}

  /* ---------- STEPS ---------- */
  .steps-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:24px;position:relative;}
  .step-card{
    background:var(--panel);border:1px solid var(--panel-border);border-radius:var(--radius);
    padding:34px 26px;text-align:center;position:relative;
  }
  .step-num{
    width:36px;height:36px;border-radius:50%;background:var(--grad);color:#fff;font-weight:700;font-size:14px;
    display:flex;align-items:center;justify-content:center;margin:0 auto 18px;
    box-shadow:0 6px 18px -4px rgba(124,58,237,.6);
  }
  .step-icon{width:26px;height:26px;margin:0 auto 14px;}
  .step-icon svg{width:100%;height:100%;stroke:#a996f7;fill:none;stroke-width:1.7;}
  .step-card h3{font-size:16px;font-weight:700;margin-bottom:8px;}
  .step-card p{color:var(--muted);font-size:13.5px;}

  /* ---------- PRICING ---------- */
  .price-toggle{
    display:inline-flex;align-items:center;background:#12121e;border:1px solid #24243030;
    border:1px solid #262635;border-radius:999px;padding:4px;margin:0 auto 40px;
  }
  .price-toggle button{
    border:none;background:transparent;color:var(--muted);font-size:13.5px;font-weight:600;
    padding:8px 18px;border-radius:999px;cursor:pointer;display:flex;align-items:center;gap:6px;
  }
  .price-toggle button.active{background:var(--grad);color:#fff;}
  .save-tag{background:#1c1030;color:#c9baf5;font-size:10px;padding:2px 6px;border-radius:6px;}

  .pricing-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:24px;align-items:stretch;}
  .plan{
    background:var(--panel);border:1px solid var(--panel-border);border-radius:var(--radius);
    padding:32px 28px;display:flex;flex-direction:column;
  }
  .plan.highlight{
    border-color:#6d3ff0;background:linear-gradient(160deg,#1a1230,#12101d);
    box-shadow:0 20px 50px -18px rgba(124,58,237,.55);position:relative;transform:translateY(-8px);
  }
  .plan-badge{
    position:absolute;top:-13px;left:50%;transform:translateX(-50%);
    background:var(--grad);color:#fff;font-size:11px;font-weight:700;padding:5px 14px;border-radius:999px;
  }
  .plan-name{font-size:18px;font-weight:700;margin-bottom:4px;}
  .plan-tagline{font-size:13px;color:var(--muted-dim);margin-bottom:20px;}
  .plan-price{font-size:36px;font-weight:800;margin-bottom:2px;}
  .plan-price small{font-size:14px;color:var(--muted);font-weight:500;}
  .plan-spacer{height:22px;}
  .plan-features{margin:22px 0 26px;flex:1;}
  .plan-features li{
    display:flex;align-items:center;gap:10px;font-size:14px;color:#d4d4de;padding:7px 0;
  }
  .plan-features li svg{width:15px;height:15px;stroke:var(--purple);fill:none;stroke-width:2.4;flex-shrink:0;}
  .pricing-note{text-align:center;color:var(--muted-dim);font-size:13px;margin-top:32px;display:flex;align-items:center;justify-content:center;gap:8px;}

  /* ---------- TESTIMONIALS ---------- */
  .testi-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:22px;}
  .testi-card{
    background:var(--panel);border:1px solid var(--panel-border);border-radius:var(--radius);padding:30px 26px;
  }
  .testi-quote{color:var(--purple);font-size:34px;line-height:0;font-weight:800;display:block;margin-bottom:14px;}
  .testi-card p.text{color:#cfcfda;font-size:14.5px;margin-bottom:24px;}
  .testi-person{display:flex;align-items:center;gap:12px;}
  .avatar{
    width:42px;height:42px;border-radius:50%;background:var(--grad);
    display:flex;align-items:center;justify-content:center;font-size:13px;font-weight:700;color:#fff;flex-shrink:0;
  }
  .testi-name{font-size:14px;font-weight:700;}
  .testi-role{font-size:12.5px;color:var(--muted-dim);}
  .dots{display:flex;justify-content:center;gap:8px;margin-top:36px;}
  .dots span{width:7px;height:7px;border-radius:50%;background:#2c2c3a;}
  .dots span.active{background:var(--purple);width:20px;border-radius:4px;}

  /* ---------- BLOG ---------- */
  .blog-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:24px;}
  .blog-card{background:var(--panel);border:1px solid var(--panel-border);border-radius:var(--radius);overflow:hidden;transition:.25s;}
  .blog-card:hover{transform:translateY(-4px);border-color:#39304f;}
  .blog-thumb{
    height:150px;position:relative;
    background:linear-gradient(135deg,#2a1a55,#123055);
  }
  .blog-thumb.b2{background:linear-gradient(135deg,#0f2a4a,#123055);}
  .blog-thumb.b3{background:linear-gradient(135deg,#3a1030,#551a2a);}
  .blog-tag{
    position:absolute;top:14px;right:14px;background:var(--grad);color:#fff;
    font-size:11px;font-weight:700;padding:4px 11px;border-radius:999px;
  }
  .blog-body{padding:20px 22px 24px;}
  .blog-date{font-size:12px;color:var(--muted-dim);margin-bottom:8px;}
  .blog-title{font-size:15.5px;font-weight:700;line-height:1.35;margin-bottom:14px;}
  .blog-link{font-size:13.5px;color:var(--purple);font-weight:600;display:inline-flex;align-items:center;gap:5px;}

  /* ---------- NEWSLETTER / FOOTER ---------- */
  footer{background:#050509;border-top:1px solid #16161f;padding:70px 0 26px;}
  .foot-top{display:grid;grid-template-columns:1.4fr 1fr 1fr 1fr 1.2fr;gap:34px;margin-bottom:56px;}
  .foot-about p{color:var(--muted-dim);font-size:13.5px;margin:14px 0 18px;max-width:260px;}
  .foot-form{display:flex;gap:8px;}
  .foot-form input{
    background:#111119;border:1px solid #24242f;border-radius:9px;padding:11px 14px;color:var(--text);
    font-size:13px;flex:1;min-width:0;
  }
  .foot-form input::placeholder{color:var(--muted-dim);}
  .foot-col h4{font-size:14px;font-weight:700;margin-bottom:16px;}
  .foot-col li{margin-bottom:11px;}
  .foot-col a{color:var(--muted-dim);font-size:13.5px;transition:.2s;}
  .foot-col a:hover{color:var(--text);}
  .foot-bottom{
    border-top:1px solid #16161f;padding-top:24px;display:flex;justify-content:space-between;
    align-items:center;flex-wrap:wrap;gap:14px;color:var(--muted-dim);font-size:13px;
  }
  .foot-legal{display:flex;gap:20px;}
  .foot-legal a:hover{color:var(--text);}

  /* ---------- RESPONSIVE ---------- */
  @media (max-width:980px){
    .hero-grid{grid-template-columns:1fr;}
    .cube-stage{height:320px;order:-1;}
    .feature-grid,.stat-grid{grid-template-columns:repeat(2,1fr);}
    .steps-grid,.pricing-grid,.testi-grid,.blog-grid{grid-template-columns:1fr;}
    .plan.highlight{transform:none;}
    .foot-top{grid-template-columns:1fr 1fr;}
  }
  @media (max-width:720px){
    .nav-links{display:none;}
    .burger{display:block;}
    .hero h1{font-size:38px;}
    .trust-row{justify-content:center;text-align:center;}
    .section-head{flex-direction:column;align-items:flex-start;}
    .foot-top{grid-template-columns:1fr;}
  }
</style>
</head>
<body>

<header>
  <nav class="wrap">
    <a href="#" class="logo">
      <span class="mark">✦</span> <?= htmlspecialchars($brand) ?>
    </a>
    <div class="nav-links">
      <?php foreach ($nav_links as $i => $link): ?>
        <a href="#" class="<?= $i === 0 ? 'active' : '' ?>"><?= htmlspecialchars($link) ?></a>
      <?php endforeach; ?>
      <a href="#">Company <span class="caret">▾</span></a>
    </div>
    <div class="nav-right">
      <button class="icon-btn" id="themeToggle" aria-label="Toggle theme">🌙</button>
      <a href="#pricing" class="btn btn-primary">Get Started →</a>
      <button class="burger" id="burgerBtn" aria-label="Menu">☰</button>
    </div>
  </nav>
</header>

<main>
  <!-- HERO -->
  <section class="hero">
    <div class="hero-bg"></div>
    <div class="wrap hero-grid">
      <div>
        <span class="badge-pill"><span class="dot"></span> Next Generation Platform</span>
        <h1>The Future of<br>Digital <span class="grad-text">Innovation</span></h1>
        <p>Nexora is a next-gen platform that empowers businesses to build, scale, and grow faster than ever.</p>
        <div class="hero-ctas">
          <a href="#pricing" class="btn btn-primary">Get Started →</a>
          <a href="#features" class="btn btn-outline">Explore Features ▸</a>
        </div>
      </div>
      <div class="cube-stage">
        <div class="ring r2"></div>
        <div class="ring"></div>
        <svg viewBox="0 0 300 300" xmlns="http://www.w3.org/2000/svg">
          <defs>
            <linearGradient id="cubeGrad" x1="0" y1="0" x2="1" y2="1">
              <stop offset="0%" stop-color="#8b5cf6"/>
              <stop offset="100%" stop-color="#3b82f6"/>
            </linearGradient>
          </defs>
          <g fill="none" stroke="url(#cubeGrad)" stroke-width="2.2" stroke-linejoin="round">
            <path d="M150 30 L250 85 L250 195 L150 250 L50 195 L50 85 Z"/>
            <path d="M150 30 L150 140 M50 85 L150 140 L250 85 M150 140 L150 250"/>
            <path d="M80 100 L150 138 L220 100" opacity=".5"/>
          </g>
        </svg>
      </div>
    </div>
  </section>

  <!-- TRUST BAR -->
  <div class="trust-bar">
    <div class="wrap trust-row">
      <span class="trust-label">Trusted by innovative companies worldwide</span>
      <div class="trust-logos">
        <?php foreach ($trusted_by as $t): ?>
          <span><?= htmlspecialchars($t['name']) ?></span>
        <?php endforeach; ?>
      </div>
    </div>
  </div>

  <!-- FEATURES -->
  <section id="features">
    <div class="wrap">
      <div class="section-head">
        <div>
          <div class="eyebrow">Why Nexora?</div>
          <h2>Powerful <span class="grad-text">features</span> for limitless possibilities</h2>
        </div>
        <div class="right">
          <p>Everything you need to build, launch, and scale your digital products — all in one place.</p>
          <a href="#" class="btn btn-outline">See All Features →</a>
        </div>
      </div>

      <div class="feature-grid">
        <?php foreach ($features as $f): ?>
          <div class="card">
            <div class="feature-icon"><svg viewBox="0 0 24 24"><?= icon($f['icon']) ?></svg></div>
            <h3><?= htmlspecialchars($f['title']) ?></h3>
            <p><?= htmlspecialchars($f['desc']) ?></p>
          </div>
        <?php endforeach; ?>
      </div>

      <div class="stat-grid">
        <?php foreach ($stats as $s): ?>
          <div class="stat-card">
            <div class="stat-icon"><svg viewBox="0 0 24 24"><?= icon($s['icon']) ?></svg></div>
            <div class="stat-value"><?= htmlspecialchars($s['value']) ?></div>
            <div class="stat-label"><?= htmlspecialchars($s['label']) ?></div>
            <div class="stat-sub"><?= htmlspecialchars($s['sub']) ?></div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- HOW IT WORKS -->
  <section id="how-it-works">
    <div class="wrap center-head">
      <div class="eyebrow" style="text-align:center;">How It Works</div>
      <h2>Get started in <span class="grad-text">3 simple steps</span></h2>
    </div>
    <div class="wrap" style="margin-top:46px;">
      <div class="steps-grid">
        <?php foreach ($steps as $s): ?>
          <div class="step-card">
            <div class="step-num"><?= (int)$s['num'] ?></div>
            <div class="step-icon"><svg viewBox="0 0 24 24"><?= icon($s['icon']) ?></svg></div>
            <h3><?= htmlspecialchars($s['title']) ?></h3>
            <p><?= htmlspecialchars($s['desc']) ?></p>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- PRICING -->
  <section id="pricing">
    <div class="wrap center-head">
      <div class="eyebrow" style="text-align:center;">Pricing</div>
      <h2>Simple, transparent &amp; fair pricing</h2>
      <p style="margin-bottom:34px;">Choose the perfect plan for your business. Upgrade or downgrade anytime.</p>

      <div class="price-toggle">
        <button class="active" data-period="monthly">Monthly</button>
        <button data-period="yearly">Yearly <span class="save-tag">Save 20%</span></button>
      </div>

      <div class="pricing-grid">
        <?php foreach ($plans as $p): ?>
          <div class="plan <?= $p['highlight'] ? 'highlight' : '' ?>">
            <?php if (!empty($p['badge'])): ?>
              <div class="plan-badge"><?= htmlspecialchars($p['badge']) ?></div>
            <?php endif; ?>
            <div class="plan-name"><?= htmlspecialchars($p['name']) ?></div>
            <div class="plan-tagline"><?= htmlspecialchars($p['tagline']) ?></div>
            <?php if ($p['price'] === 'Custom'): ?>
              <div class="plan-price" style="font-size:30px;">Custom</div>
              <div class="plan-spacer"></div>
            <?php else: ?>
              <div class="plan-price"><?= htmlspecialchars($p['price']) ?> <small>/month</small></div>
            <?php endif; ?>
            <ul class="plan-features">
              <?php foreach ($p['features'] as $feat): ?>
                <li><svg viewBox="0 0 24 24"><polyline points="4 12 9 17 20 6"/></svg> <?= htmlspecialchars($feat) ?></li>
              <?php endforeach; ?>
            </ul>
            <a href="#" class="btn <?= $p['highlight'] ? 'btn-primary' : 'btn-outline' ?> btn-block">
              <?= htmlspecialchars($p['cta']) ?>
            </a>
          </div>
        <?php endforeach; ?>
      </div>

      <div class="pricing-note">🛡️ All plans include a 14-day free trial. No credit card required.</div>
    </div>
  </section>

  <!-- TESTIMONIALS -->
  <section id="testimonials">
    <div class="wrap center-head">
      <div class="eyebrow" style="text-align:center;">What Our Clients Say</div>
      <h2>Loved by businesses around the world</h2>
    </div>
    <div class="wrap" style="margin-top:44px;">
      <div class="testi-grid">
        <?php foreach ($testimonials as $t): ?>
          <div class="testi-card">
            <span class="testi-quote">"</span>
            <p class="text"><?= htmlspecialchars($t['quote']) ?></p>
            <div class="testi-person">
              <div class="avatar"><?= htmlspecialchars($t['initials']) ?></div>
              <div>
                <div class="testi-name"><?= htmlspecialchars($t['name']) ?></div>
                <div class="testi-role"><?= htmlspecialchars($t['role']) ?></div>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
      <div class="dots">
        <?php for ($i = 0; $i < 4; $i++): ?>
          <span class="<?= $i === 2 ? 'active' : '' ?>"></span>
        <?php endfor; ?>
      </div>
    </div>
  </section>

  <!-- BLOG -->
  <section id="blog">
    <div class="wrap">
      <div class="section-head">
        <div>
          <div class="eyebrow">From The Blog</div>
          <h2>Latest insights &amp; resources</h2>
        </div>
        <a href="#" class="btn btn-outline">View All Articles →</a>
      </div>
      <div class="blog-grid">
        <?php foreach ($blog_posts as $i => $post): ?>
          <div class="blog-card">
            <div class="blog-thumb b<?= $i + 1 ?>">
              <span class="blog-tag"><?= htmlspecialchars($post['tag']) ?></span>
            </div>
            <div class="blog-body">
              <div class="blog-date"><?= htmlspecialchars($post['date']) ?></div>
              <div class="blog-title"><?= htmlspecialchars($post['title']) ?></div>
              <a href="#" class="blog-link">Read More →</a>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>
</main>

<footer>
  <div class="wrap">
    <div class="foot-top">
      <div class="foot-about">
        <a href="#" class="logo"><span class="mark">✦</span> <?= htmlspecialchars($brand) ?></a>
        <p>Stay in the loop. Get the latest updates, tips, and resources straight to your inbox.</p>
        <form class="foot-form" onsubmit="event.preventDefault(); alert('Subscribed!');">
          <input type="email" placeholder="Enter your email" required>
          <button type="submit" class="btn btn-primary">Subscribe</button>
        </form>
      </div>
      <?php foreach ($footer_cols as $title => $links): ?>
        <div class="foot-col">
          <h4><?= htmlspecialchars($title) ?></h4>
          <ul>
            <?php foreach ($links as $l): ?>
              <li><a href="#"><?= htmlspecialchars($l) ?></a></li>
            <?php endforeach; ?>
          </ul>
        </div>
      <?php endforeach; ?>
    </div>
    <div class="foot-bottom">
      <span>© <?= date('Y') ?> Nexora. All rights reserved.</span>
      <div class="foot-legal">
        <a href="#">Privacy Policy</a>
        <a href="#">Terms of Service</a>
        <a href="#">Cookie Policy</a>
      </div>
    </div>
  </div>
</footer>

<script>
  // Theme toggle (visual only)
  document.getElementById('themeToggle').addEventListener('click', function () {
    document.body.classList.toggle('light');
    this.textContent = document.body.classList.contains('light') ? '☀️' : '🌙';
  });

  // Mobile menu (simple placeholder behavior)
  document.getElementById('burgerBtn').addEventListener('click', function () {
    const links = document.querySelector('.nav-links');
    links.style.display = links.style.display === 'flex' ? 'none' : 'flex';
    links.style.position = 'absolute';
    links.style.top = '74px';
    links.style.left = '0';
    links.style.right = '0';
    links.style.flexDirection = 'column';
    links.style.background = '#0c0c17';
    links.style.padding = '20px 24px';
    links.style.borderBottom = '1px solid #1a1a24';
  });

  // Pricing toggle
  const priceButtons = document.querySelectorAll('.price-toggle button');
  const yearlyPrices = {};
  document.querySelectorAll('.plan-price').forEach(el => {
    const match = el.textContent.match(/\$(\d+)/);
    if (match) yearlyPrices[el.closest('.plan').querySelector('.plan-name').textContent] = parseInt(match[1], 10);
  });
  priceButtons.forEach(btn => {
    btn.addEventListener('click', () => {
      priceButtons.forEach(b => b.classList.remove('active'));
      btn.classList.add('active');
      const isYearly = btn.dataset.period === 'yearly';
      document.querySelectorAll('.plan').forEach(plan => {
        const priceEl = plan.querySelector('.plan-price');
        const name = plan.querySelector('.plan-name').textContent;
        if (yearlyPrices[name] === undefined) return;
        const base = yearlyPrices[name];
        const shown = isYearly ? Math.round(base * 0.8) : base;
        priceEl.innerHTML = '$' + shown + ' <small>/month</small>';
      });
    });
  });

  // Testimonial dots (purely decorative click cycle)
  const dots = document.querySelectorAll('.dots span');
  let dotIndex = 2;
  dots.forEach((d, i) => d.addEventListener('click', () => {
    dots.forEach(x => x.classList.remove('active'));
    d.classList.add('active');
  }));
</script>

</body>
</html>
