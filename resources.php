<?php
require __DIR__ . '/includes/data.php';
$page_title = 'Resources';
$active = 'Resources';
require __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="hero-bg"></div>
    <div class="wrap">
      <div class="eyebrow" style="text-align:center;">From The Blog</div>
      <h1>Latest <span class="grad-text">insights &amp; resources</span></h1>
      <p>Guides, tips, and deep dives to help you get the most out of Nexora.</p>
    </div>
  </section>

  <section>
    <div class="wrap">
      <div class="filter-row">
        <?php foreach ($resource_categories as $i => $cat): ?>
          <button class="<?= $i === 0 ? 'active' : '' ?>" data-cat="<?= htmlspecialchars($cat) ?>"><?= htmlspecialchars($cat) ?></button>
        <?php endforeach; ?>
      </div>

      <div class="blog-grid">
        <?php foreach ($blog_posts as $i => $post): ?>
          <div class="blog-card" data-cat="<?= htmlspecialchars($post['tag']) ?>">
            <div class="blog-thumb b<?= $i + 1 ?>">
              <span class="blog-tag"><?= htmlspecialchars($post['tag']) ?></span>
            </div>
            <div class="blog-body">
              <div class="blog-date"><?= htmlspecialchars($post['date']) ?></div>
              <div class="blog-title"><?= htmlspecialchars($post['title']) ?></div>
              <p class="blog-excerpt"><?= htmlspecialchars($post['excerpt']) ?></p>
              <a href="#" class="blog-link">Read More →</a>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>
</main>

<?php require __DIR__ . '/includes/footer.php'; ?>
