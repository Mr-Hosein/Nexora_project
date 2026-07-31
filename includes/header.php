<?php
// Expects: $brand, $nav_links (from data.php), $page_title, $active (nav key), optional $page_description
$page_description = $page_description ?? 'Nexora is a next-gen platform that empowers businesses to build, scale, and grow faster than ever.';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?= htmlspecialchars($page_title) ?> — <?= htmlspecialchars($brand) ?></title>
<meta name="description" content="<?= htmlspecialchars($page_description) ?>">
<link rel="stylesheet" href="assets/style.css">
</head>
<body>

<header>
  <nav class="wrap">
    <a href="index.php" class="logo">
      <span class="mark">✦</span> <?= htmlspecialchars($brand) ?>
    </a>
    <div class="nav-links">
      <?php foreach ($nav_links as $label => $file): ?>
        <a href="<?= htmlspecialchars($file) ?>" class="<?= $active === $label ? 'active' : '' ?>"><?= htmlspecialchars($label) ?></a>
      <?php endforeach; ?>
    </div>
    <div class="nav-right">
      <button class="icon-btn" id="themeToggle" aria-label="Toggle theme">🌙</button>
      <a href="signup.php" class="btn btn-primary">Get Started →</a>
      <button class="burger" id="burgerBtn" aria-label="Menu">☰</button>
    </div>
  </nav>
</header>
