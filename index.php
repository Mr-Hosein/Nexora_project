<?php
require __DIR__ . '/includes/data.php';
$page_title = 'The Future of Digital Innovation';
$active = 'Home';
require __DIR__ . '/includes/header.php';
?>

<main>
  <section class="hero">
    <div class="hero-bg"></div>
    <div class="wrap hero-grid">
      <div>
        <span class="badge-pill"><span class="dot"></span> Next Generation Platform</span>
        <h1>The Future of<br>Digital <span class="grad-text">Innovation</span></h1>
        <p>Nexora is a next-gen platform that empowers businesses to build, scale, and grow faster than ever.</p>
        <div class="hero-ctas">
          <a href="signup.php" class="btn btn-primary">Get Started →</a>
          <a href="features.php" class="btn btn-outline">Explore Features ▸</a>
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

  <section id="features">
    <div class="wrap">
      <div class="section-head">
        <div>
          <div class="eyebrow">Why Nexora?</div>
          <h2>Powerful <span class="grad-text">features</span> for limitless possibilities</h2>
        </div>
        <div class="right">
          <p>Everything you need to build, launch, and scale your digital products — all in one place.</p>
          <a href="features.php" class="btn btn-outline">See All Features →</a>
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
            <?php if ($p['price'] === null): ?>
              <div class="plan-price" style="font-size:30px;">Custom</div>
              <div class="plan-spacer"></div>
            <?php else: ?>
              <div class="plan-price"><?= money_fmt($p['price']) ?> <small>/month</small></div>
            <?php endif; ?>
            <ul class="plan-features">
              <?php foreach ($p['features'] as $feat): ?>
                <li><svg viewBox="0 0 24 24"><polyline points="4 12 9 17 20 6"/></svg> <?= htmlspecialchars($feat) ?></li>
              <?php endforeach; ?>
            </ul>
            <a href="<?= htmlspecialchars($p['link']) ?>" class="btn <?= $p['highlight'] ? 'btn-primary' : 'btn-outline' ?> btn-block">
              <?= htmlspecialchars($p['cta']) ?>
            </a>
          </div>
        <?php endforeach; ?>
      </div>

      <div class="pricing-note">🛡️ All plans include a 14-day free trial. No credit card required.</div>
    </div>
  </section>

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

  <section id="blog">
    <div class="wrap">
      <div class="section-head">
        <div>
          <div class="eyebrow">From The Blog</div>
          <h2>Latest insights &amp; resources</h2>
        </div>
        <a href="resources.php" class="btn btn-outline">View All Articles →</a>
      </div>
      <div class="blog-grid">
        <?php foreach (array_slice($blog_posts, 0, 3) as $i => $post): ?>
          <div class="blog-card">
            <div class="blog-thumb b<?= $i + 1 ?>">
              <span class="blog-tag"><?= htmlspecialchars($post['tag']) ?></span>
            </div>
            <div class="blog-body">
              <div class="blog-date"><?= htmlspecialchars($post['date']) ?></div>
              <div class="blog-title"><?= htmlspecialchars($post['title']) ?></div>
              <a href="resources.php" class="blog-link">Read More →</a>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>
</main>

<?php require __DIR__ . '/includes/footer.php'; ?>
