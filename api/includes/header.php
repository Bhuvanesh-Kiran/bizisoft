<?php
require_once __DIR__ . '/config.php';
$pageTitle = isset($pageTitle) ? $pageTitle . ' — ' . SITE_NAME : SITE_NAME . ' — Restaurant Management Software';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="<?= isset($metaDesc) ? clean($metaDesc) : 'Bizisoft — All-in-one restaurant POS software for restaurants, tiffin centres and food businesses in India.' ?>" />
<title><?= $pageTitle ?></title>
<link rel="preconnect" href="https://fonts.googleapis.com" />
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300&display=swap" rel="stylesheet" />
<link rel="stylesheet" href="assets/css/main.css?v=1.10" />
<?= isset($extraCss) ? $extraCss : '' ?>
</head>
<body>

<div class="mob-overlay" id="mobOverlay" onclick="closeMob()"></div>
<nav class="mob-nav" id="mobNav">
  <button class="mob-close" onclick="closeMob()">&#x2715;</button>

  <div class="mob-logo">
    <a href="index.php" onclick="closeMob()">
      <img src="assets/img/bizi.png" alt="Bizisoft Logo" class="site-logo">
    </a>
  </div>

  <div class="mob-controls" style="display: flex; gap: 12px; margin-bottom: 24px; padding: 0 16px;">
      <button class="theme-toggle" aria-label="Toggle theme" style="width: 48px; height: 48px; display: flex; align-items: center; justify-content: center; border-radius: 8px; background: transparent; border: 1px solid var(--border); color: var(--muted2);">
        <span class="theme-icon theme-icon-dark">🌙</span>
        <span class="theme-icon theme-icon-light">☀️</span>
      </button>
      <button class="hdr-login" style="flex: 1; background: var(--red); color: var(--text); border: 1px solid var(--border); border-radius: 8px; font-weight: 700; text-transform: uppercase; font-size: 0.85rem;">Login</button>
  </div>

  <ul>
    <li><a href="index.php"    class="<?= activePage('home') ?>"     onclick="closeMob()">Home</a></li>
    <li><a href="features.php" class="<?= activePage('features') ?>" onclick="closeMob()">Features</a></li>
    <li><a href="pricing.php"  class="<?= activePage('pricing') ?>"  onclick="closeMob()">Pricing</a></li>
    <li><a href="contact.php"  class="<?= activePage('contact') ?>"  onclick="closeMob()">Contact</a></li>
  </ul>
  <button class="mob-cta" onclick="closeMob()">Get Started &#x2192;</button>
</nav>

<header id="siteHeader">
  <div class="hdr-inner">
    <a class="logo" href="index.php">
      <img src="assets/img/bizi.png" alt="Bizisoft Logo" style="height: 42px; width: auto; display: block; object-fit: contain;">
    </a>

    <nav class="desk-nav">
      <a href="index.php"    class="<?= activePage('home') ?>">Home</a>
      <a href="features.php" class="<?= activePage('features') ?>">Features</a>
      <a href="pricing.php"  class="<?= activePage('pricing') ?>">Pricing</a>
      <a href="contact.php"  class="<?= activePage('contact') ?>">Contact</a>
    </nav>

    <div class="hdr-right-group">
      <button class="theme-toggle" id="themeToggle" aria-label="Toggle theme">
        <span class="theme-icon theme-icon-dark">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"/></svg>
        </span>
        <span class="theme-icon theme-icon-light">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="5"/><line x1="12" y1="1" x2="12" y2="3"/><line x1="12" y1="21" x2="12" y2="23"/><line x1="4.22" y1="4.22" x2="5.64" y2="5.64"/><line x1="18.36" y1="18.36" x2="19.78" y2="19.78"/><line x1="1" y1="12" x2="3" y2="12"/><line x1="21" y1="12" x2="23" y2="12"/><line x1="4.22" y1="19.78" x2="5.64" y2="18.36"/><line x1="18.36" y1="5.64" x2="19.78" y2="4.22"/></svg>
        </span>
      </button>
      <button class="hdr-login">Login</button>
      <button class="hdr-cta">Get Started</button>
    </div>

    <button class="hamburger" id="hamburger" onclick="openMob()">
      <span></span><span></span><span></span>
    </button>
  </div>
</header>
<main>