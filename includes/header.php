<?php
/**
 * includes/header.php — Site navigation + <main> open
 * A&S Contracting Services
 * Phase 2 — Nav/Footer/Head
 *
 * Expects $currentPage to be set by each page before including.
 * Expects config.php + functions.php already included via head.php.
 */

$pageTitle = $pageTitle ?? '';
$pageDescription = $pageDescription ?? '';
$canonicalUrl = $canonicalUrl ?? '';

if (!isset($currentPage)) $currentPage = '';

// Helper: aria-current on active page link
function _navActive(string $page, string $current): string {
    return $page === $current ? ' aria-current="page"' : '';
}
?>
<!-- Skip to Content (accessibility) -->
<a href="#main-content" class="skip-link">Skip to main content</a>

<header class="site-header" data-header>
  <nav class="navbar" aria-label="Main navigation">
    <div class="navbar-inner container">

      <!-- Logo -->
      <a href="/" class="navbar-logo" aria-label="<?php echo htmlspecialchars($siteName); ?> — Home">
        <img
          src="<?php echo htmlspecialchars($logoUrl); ?>"
          alt="<?php echo htmlspecialchars($siteName); ?> logo"
          width="720"
          height="216"
        >
        <div class="logo-text-wrap" aria-hidden="true">
          <span class="logo-mark">A&amp;S</span>
          <span class="logo-text">Contracting Services</span>
        </div>
      </a>

      <!-- Desktop Nav -->
      <ul class="navbar-links" role="list">

        <li>
          <a href="/"<?php echo _navActive('home', $currentPage); ?>>Home</a>
        </li>

        <!-- Services Dropdown -->
        <li class="has-dropdown">
          <a href="/services/"<?php echo _navActive('services', $currentPage); ?> aria-haspopup="true">
            Services
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M6 9l6 6 6-6"/></svg>
          </a>
          <ul class="dropdown" role="menu" style="display:none">
            <?php foreach ($services as $_s): ?>
            <li role="none">
              <a href="/services/<?php echo htmlspecialchars($_s['slug']); ?>/" role="menuitem"
                 <?php echo _navActive($_s['slug'], $currentPage); ?>>
                <?php echo htmlspecialchars($_s['name']); ?>
              </a>
            </li>
            <?php endforeach; ?>
            <li role="none" style="border-top:1px solid #e5e7eb; margin-top:4px; padding-top:4px;">
              <a href="/services/" role="menuitem" style="font-weight:700; color:var(--color-accent);">View All Services →</a>
            </li>
          </ul>
        </li>

        <li>
          <a href="/service-areas/"<?php echo _navActive('service-areas', $currentPage); ?>>Service Area</a>
        </li>

        <li>
          <a href="/about/"<?php echo _navActive('about', $currentPage); ?>>About</a>
        </li>

        <li>
          <a href="/contact/"<?php echo _navActive('contact', $currentPage); ?>>Contact</a>
        </li>

      </ul>

      <!-- Desktop CTA -->
      <div class="navbar-cta">
        <?php if (!empty($phone)): ?>
        <a href="tel:<?php echo preg_replace('/\D/', '', $phone); ?>" class="nav-phone" aria-label="Call <?php echo htmlspecialchars($phone); ?>">
          <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 13.35 19.79 19.79 0 0 1 1.61 4.73 2 2 0 0 1 3.58 2.54h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L7.91 10.1a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
          <?php echo htmlspecialchars($phone); ?>
        </a>
        <?php endif; ?>
        <a href="/contact/" class="btn btn-accent btn-sm">Free Estimate</a>
      </div>

      <!-- Mobile Hamburger -->
      <button
        class="hamburger"
        id="hamburger-btn"
        aria-label="Open navigation menu"
        aria-expanded="false"
        aria-controls="mobile-menu"
      >
        <span class="hamburger-line" aria-hidden="true"></span>
        <span class="hamburger-line" aria-hidden="true"></span>
        <span class="hamburger-line" aria-hidden="true"></span>
      </button>

    </div><!-- /.navbar-inner -->
  </nav>
</header>

<!-- Mobile Full-Screen Menu -->
<div id="mobile-menu" class="mobile-menu" role="dialog" aria-modal="true" aria-label="Navigation menu">

  <div class="mobile-menu-logo">
    <img src="<?php echo htmlspecialchars($logoUrl); ?>" alt="<?php echo htmlspecialchars($siteName); ?>" height="168" width="504">
  </div>

  <button class="mobile-menu-close" id="mobile-menu-close" aria-label="Close navigation menu">
    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg>
  </button>

  <ul class="mobile-menu-nav" role="list">
    <li>
      <a href="/"<?php echo _navActive('home', $currentPage); ?>>Home</a>
    </li>
    <li>
      <a href="/services/"<?php echo _navActive('services', $currentPage); ?>>Services</a>
      <ul class="mobile-menu-subnav" aria-label="Services submenu">
        <?php foreach ($services as $_s): ?>
        <li>
          <a href="/services/<?php echo htmlspecialchars($_s['slug']); ?>/"<?php echo _navActive($_s['slug'], $currentPage); ?>>
            <?php echo htmlspecialchars($_s['name']); ?>
          </a>
        </li>
        <?php endforeach; ?>
      </ul>
    </li>
    <li>
      <a href="/service-areas/"<?php echo _navActive('service-areas', $currentPage); ?>>Service Area</a>
    </li>
    <li>
      <a href="/about/"<?php echo _navActive('about', $currentPage); ?>>About</a>
    </li>
    <li>
      <a href="/contact/"<?php echo _navActive('contact', $currentPage); ?>>Contact</a>
    </li>
  </ul>

  <div class="mobile-menu-cta">
    <?php if (!empty($phone)): ?>
    <a href="tel:<?php echo preg_replace('/\D/', '', $phone); ?>" class="btn btn-accent">
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 13.35 19.79 19.79 0 0 1 1.61 4.73 2 2 0 0 1 3.58 2.54h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L7.91 10.1a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
      Call Now
    </a>
    <?php else: ?>
    <a href="/contact/" class="btn btn-accent">Call Now</a>
    <?php endif; ?>
    <a href="/contact/" class="btn btn-outline-white">Free Estimate</a>
  </div>

</div><!-- /#mobile-menu -->

<main id="main-content">
