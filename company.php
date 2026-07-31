<?php
require __DIR__ . '/includes/data.php';
$page_title = 'Company';
$active = 'Company';
require __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="hero-bg"></div>
    <div class="wrap">
      <div class="eyebrow" style="text-align:center;">Company</div>
      <h1>We're building the <span class="grad-text">future of software</span></h1>
      <p>Nexora started with a simple idea: businesses shouldn't need ten different tools to build one great product.</p>
    </div>
  </section>

  <section>
    <div class="wrap center-head">
      <div class="eyebrow" style="text-align:center;">Our Values</div>
      <h2 style="margin-bottom:40px;">What drives us every day</h2>
    </div>
    <div class="wrap">
      <div class="values-grid">
        <?php foreach ($values as $v): ?>
          <div class="card">
            <h3><?= htmlspecialchars($v['title']) ?></h3>
            <p><?= htmlspecialchars($v['desc']) ?></p>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <section style="padding-top:0;">
    <div class="wrap center-head">
      <div class="eyebrow" style="text-align:center;">Our Team</div>
      <h2 style="margin-bottom:40px;">The people behind Nexora</h2>
    </div>
    <div class="wrap">
      <div class="team-grid">
        <?php foreach ($team as $m): ?>
          <div class="team-card">
            <div class="avatar"><?= htmlspecialchars($m['initials']) ?></div>
            <h3><?= htmlspecialchars($m['name']) ?></h3>
            <p><?= htmlspecialchars($m['role']) ?></p>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <section style="padding-top:0;">
    <div class="wrap">
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
</main>

<?php require __DIR__ . '/includes/footer.php'; ?>
