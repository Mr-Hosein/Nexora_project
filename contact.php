<?php
require __DIR__ . '/includes/data.php';
$page_title = 'Contact Us';
$active = '';
require __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="hero-bg"></div>
    <div class="wrap">
      <div class="eyebrow" style="text-align:center;">Contact</div>
      <h1>Let's talk about <span class="grad-text">your business</span></h1>
      <p>Have a question or want a custom Enterprise quote? Our team will get back to you within one business day.</p>
    </div>
  </section>

  <section>
    <div class="wrap">
      <div class="contact-info">
        <div class="card">
          <div class="feature-icon"><svg viewBox="0 0 24 24"><?= icon('mail') ?></svg></div>
          <h3>Email Us</h3>
          <p>hello@nexora.com</p>
        </div>
        <div class="card">
          <div class="feature-icon"><svg viewBox="0 0 24 24"><?= icon('phone') ?></svg></div>
          <h3>Call Us</h3>
          <p>+1 (555) 010-2030</p>
        </div>
        <div class="card">
          <div class="feature-icon"><svg viewBox="0 0 24 24"><?= icon('pin') ?></svg></div>
          <h3>Visit Us</h3>
          <p>123 Innovation Ave, San Francisco, CA</p>
        </div>
      </div>

      <div class="form-shell">
        <h2 style="font-size:22px;margin-bottom:24px;">Send us a message</h2>
        <form onsubmit="event.preventDefault(); alert('Thanks! We will be in touch shortly.');">
          <div class="form-grid-2">
            <div class="form-row">
              <label for="c-name">Full Name</label>
              <input type="text" id="c-name" placeholder="Jane Doe" required>
            </div>
            <div class="form-row">
              <label for="c-email">Email</label>
              <input type="email" id="c-email" placeholder="jane@company.com" required>
            </div>
          </div>
          <div class="form-row">
            <label for="c-company">Company</label>
            <input type="text" id="c-company" placeholder="Your company name">
          </div>
          <div class="form-row">
            <label for="c-message">Message</label>
            <textarea id="c-message" rows="5" placeholder="How can we help?" required></textarea>
          </div>
          <button type="submit" class="btn btn-primary btn-block">Send Message →</button>
        </form>
      </div>
    </div>
  </section>
</main>

<?php require __DIR__ . '/includes/footer.php'; ?>
