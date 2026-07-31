<?php
require __DIR__ . '/includes/data.php';
$page_title = 'Features';
$active = 'Features';
require __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="hero-bg"></div>
    <div class="wrap">
      <div class="eyebrow" style="text-align:center;">Why Nexora?</div>
      <h1>Powerful <span class="grad-text">features</span> for limitless possibilities</h1>
      <p>Everything you need to build, launch, and scale your digital products — all in one place.</p>
    </div>
  </section>

  <section>
    <div class="wrap">
      <div class="feature-grid" style="grid-template-columns:repeat(4,1fr);">
        <?php foreach ($features_full as $f): ?>
          <div class="card">
            <div class="feature-icon"><svg viewBox="0 0 24 24"><?= icon($f['icon']) ?></svg></div>
            <h3><?= htmlspecialchars($f['title']) ?></h3>
            <p><?= htmlspecialchars($f['desc']) ?></p>
          </div>
        <?php endforeach; ?>
      </div>

      <div class="stat-grid" style="margin-top:20px;">
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

  <section style="padding-top:0;">
    <div class="wrap">
      <div class="card" style="text-align:center;padding:50px 30px;background:linear-gradient(160deg,#1a1230,#12101d);border-color:#3d2a63;">
        <h2 style="font-size:26px;margin-bottom:12px;">Ready to see it in action?</h2>
        <p style="color:var(--muted);margin-bottom:24px;">Start your free 14-day trial — no credit card required.</p>
        <a href="signup.php" class="btn btn-primary">Get Started →</a>
      </div>
    </div>
  </section>
</main>

<?php require __DIR__ . '/includes/footer.php'; ?>
