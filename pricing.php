<?php
require __DIR__ . '/includes/data.php';
$page_title = 'Pricing';
$active = 'Pricing';
require __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="hero-bg"></div>
    <div class="wrap">
      <div class="eyebrow" style="text-align:center;">Pricing</div>
      <h1>Simple, transparent <span class="grad-text">&amp; fair pricing</span></h1>
      <p>Choose the perfect plan for your business. Upgrade or downgrade anytime.</p>
    </div>
  </section>

  <section>
    <div class="wrap center-head">
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

  <section style="padding-top:0;">
    <div class="wrap center-head">
      <div class="eyebrow" style="text-align:center;">FAQ</div>
      <h2 style="margin-bottom:40px;">Frequently asked questions</h2>
    </div>
    <div class="wrap">
      <div class="faq-list">
        <?php foreach ($faqs as $faq): ?>
          <div class="faq-item">
            <div class="faq-q"><?= htmlspecialchars($faq['q']) ?> <span class="chevron">▾</span></div>
            <div class="faq-a"><?= htmlspecialchars($faq['a']) ?></div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>
</main>

<?php require __DIR__ . '/includes/footer.php'; ?>
