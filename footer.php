<footer>
  <div class="wrap">
    <div class="foot-top">
      <div class="foot-about">
        <a href="index.php" class="logo"><span class="mark">✦</span> <?= htmlspecialchars($brand) ?></a>
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
            <?php foreach ($links as $label => $file): ?>
              <li><a href="<?= htmlspecialchars($file) ?>"><?= htmlspecialchars($label) ?></a></li>
            <?php endforeach; ?>
          </ul>
        </div>
      <?php endforeach; ?>
    </div>
    <div class="foot-bottom">
      <span>© <?= date('Y') ?> <?= htmlspecialchars($brand) ?>. All rights reserved.</span>
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
  const themeBtn = document.getElementById('themeToggle');
  if (themeBtn) {
    themeBtn.addEventListener('click', function () {
      document.body.classList.toggle('light');
      this.textContent = document.body.classList.contains('light') ? '☀️' : '🌙';
    });
  }

  // Mobile menu
  const burgerBtn = document.getElementById('burgerBtn');
  if (burgerBtn) {
    burgerBtn.addEventListener('click', function () {
      const links = document.querySelector('.nav-links');
      const open = links.style.display === 'flex';
      links.style.display = open ? 'none' : 'flex';
      links.style.position = 'absolute';
      links.style.top = '74px';
      links.style.left = '0';
      links.style.right = '0';
      links.style.flexDirection = 'column';
      links.style.gap = '18px';
      links.style.background = '#0c0c17';
      links.style.padding = '20px 24px';
      links.style.borderBottom = '1px solid #1a1a24';
    });
  }

  // Pricing toggle (monthly/yearly) — present on index.php and pricing.php
  const priceButtons = document.querySelectorAll('.price-toggle button');
  if (priceButtons.length) {
    const basePrices = {};
    document.querySelectorAll('.plan').forEach(plan => {
      const priceEl = plan.querySelector('.plan-price');
      const name = plan.querySelector('.plan-name').textContent;
      const match = priceEl ? priceEl.textContent.match(/\$(\d+)/) : null;
      if (match) basePrices[name] = parseInt(match[1], 10);
    });
    priceButtons.forEach(btn => {
      btn.addEventListener('click', () => {
        priceButtons.forEach(b => b.classList.remove('active'));
        btn.classList.add('active');
        const isYearly = btn.dataset.period === 'yearly';
        document.querySelectorAll('.plan').forEach(plan => {
          const priceEl = plan.querySelector('.plan-price');
          const name = plan.querySelector('.plan-name').textContent;
          if (basePrices[name] === undefined || !priceEl) return;
          const shown = isYearly ? Math.round(basePrices[name] * 0.8) : basePrices[name];
          priceEl.innerHTML = '$' + shown + ' <small>/month</small>';
        });
      });
    });
  }

  // Testimonial dots
  document.querySelectorAll('.dots span').forEach(d => {
    d.addEventListener('click', () => {
      d.parentElement.querySelectorAll('span').forEach(x => x.classList.remove('active'));
      d.classList.add('active');
    });
  });

  // FAQ accordion — present on pricing.php
  document.querySelectorAll('.faq-item').forEach(item => {
    item.addEventListener('click', () => item.classList.toggle('open'));
  });

  // Blog category filter — present on resources.php
  const filterBtns = document.querySelectorAll('.filter-row button');
  if (filterBtns.length) {
    filterBtns.forEach(btn => {
      btn.addEventListener('click', () => {
        filterBtns.forEach(b => b.classList.remove('active'));
        btn.classList.add('active');
        const cat = btn.dataset.cat;
        document.querySelectorAll('.blog-card').forEach(card => {
          card.style.display = (cat === 'All' || card.dataset.cat === cat) ? '' : 'none';
        });
      });
    });
  }
</script>
</body>
</html>
