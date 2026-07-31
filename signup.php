<?php
require __DIR__ . '/includes/data.php';
$page_title = 'Get Started';
$active = '';
require __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero" style="padding-bottom:20px;border-bottom:none;">
    <div class="hero-bg"></div>
    <div class="wrap">
      <div class="eyebrow" style="text-align:center;">Get Started</div>
      <h1>Create your <span class="grad-text">free account</span></h1>
      <p>Start your 14-day free trial. No credit card required.</p>
    </div>
  </section>

  <section style="padding-top:20px;">
    <div class="wrap">
      <div class="form-shell">
        <form onsubmit="event.preventDefault(); alert('Welcome to Nexora! Check your email to confirm your account.');">
          <div class="form-grid-2">
            <div class="form-row">
              <label for="s-first">First Name</label>
              <input type="text" id="s-first" placeholder="Jane" required>
            </div>
            <div class="form-row">
              <label for="s-last">Last Name</label>
              <input type="text" id="s-last" placeholder="Doe" required>
            </div>
          </div>
          <div class="form-row">
            <label for="s-email">Work Email</label>
            <input type="email" id="s-email" placeholder="jane@company.com" required>
          </div>
          <div class="form-row">
            <label for="s-password">Password</label>
            <input type="password" id="s-password" placeholder="At least 8 characters" required>
          </div>
          <div class="form-row">
            <label for="s-plan">Plan</label>
            <select id="s-plan">
              <?php foreach ($plans as $p): ?>
                <option><?= htmlspecialchars($p['name']) ?></option>
              <?php endforeach; ?>
            </select>
          </div>
          <button type="submit" class="btn btn-primary btn-block">Create Account →</button>
        </form>
        <div class="auth-switch">Already have an account? <a href="#">Log in</a></div>
      </div>
    </div>
  </section>
</main>

<?php require __DIR__ . '/includes/footer.php'; ?>
