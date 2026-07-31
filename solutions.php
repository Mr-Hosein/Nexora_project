<?php
require __DIR__ . '/includes/data.php';
$page_title = 'Solutions';
$active = 'Solutions';
require __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="hero-bg"></div>
    <div class="wrap">
      <div class="eyebrow" style="text-align:center;">Solutions</div>
      <h1>Built for <span class="grad-text">every industry</span></h1>
      <p>Whatever you're building, Nexora adapts to how your team and your customers actually work.</p>
    </div>
  </section>

  <section>
    <div class="wrap">
      <div class="solutions-grid">
        <?php foreach ($solutions as $s): ?>
          <div class="card">
            <div class="feature-icon"><svg viewBox="0 0 24 24"><?= icon($s['icon']) ?></svg></div>
            <h3><?= htmlspecialchars($s['title']) ?></h3>
            <p><?= htmlspecialchars($s['desc']) ?></p>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <section style="padding-top:0;">
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
</main>

<?php require __DIR__ . '/includes/footer.php'; ?>
