<?php
/**
 * includes/footer.php — Site footer + scripts
 * A&S Contracting Services
 * Phase 2 — Nav/Footer/Head
 *
 * Closes </main> opened in header.php.
 * Includes: 4-col grid, AEO entity block, legal row, cookie banner,
 *           mobile CTA bar, back-to-top, script tags.
 */
if (!isset($siteName)) {
    include $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
}
?>

</main><!-- /#main-content -->

<!-- =====================================================
     FOOTER
     ===================================================== -->
<footer class="site-footer" itemscope itemtype="https://schema.org/LocalBusiness">

  <!-- Meta tags for AEO entity recognition (hidden from display) -->
  <meta itemprop="name"      content="<?php echo htmlspecialchars($siteName); ?>">
  <meta itemprop="url"       content="<?php echo htmlspecialchars($siteUrl); ?>">
  <?php if (!empty($phone)): ?>
  <meta itemprop="telephone" content="<?php echo htmlspecialchars($phone); ?>">
  <?php endif; ?>
  <?php if (!empty($email)): ?>
  <meta itemprop="email"     content="<?php echo htmlspecialchars($email); ?>">
  <?php endif; ?>

  <div class="footer-top">
    <div class="container">
      <div class="footer-grid">

        <!-- Col 1: Brand + Trust -->
        <div class="footer-col footer-col--brand">
          <a href="/" aria-label="<?php echo htmlspecialchars($siteName); ?> — Home">
            <img
              src="<?php echo htmlspecialchars($logoUrl); ?>"
              alt="<?php echo htmlspecialchars($siteName); ?> logo"
              width="160"
              height="48"
              loading="lazy"
              style="margin-bottom:1rem;"
            >
          </a>
          <p><?php echo htmlspecialchars($tagline); ?></p>
          <p style="font-size:0.875rem;line-height:1.7;color:rgba(255,255,255,0.55);margin-top:0.5rem;">
            A&amp;S Contracting Services is a licensed and insured general contractor serving Warrenton, MO and a 50-mile radius across Warren County and central Missouri.
          </p>
          <div class="footer-trust">
            <span class="trust-badge">
              <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
              Licensed &amp; Insured
            </span>
            <span class="trust-badge">
              <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
              <?php echo $yearsInBusiness; ?>+ Years Experience
            </span>
            <span class="trust-badge">
              <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><polyline points="20 6 9 17 4 12"/></svg>
              Free Estimates
            </span>
          </div>
        </div>

        <!-- Col 2: Services (first 5) -->
        <div class="footer-col">
          <h4>Our Services</h4>
          <ul>
            <?php foreach (array_slice($services, 0, 5) as $_s): ?>
            <li>
              <a href="/services/<?php echo htmlspecialchars($_s['slug']); ?>/">
                <?php echo htmlspecialchars($_s['name']); ?>
              </a>
            </li>
            <?php endforeach; ?>
          </ul>
        </div>

        <!-- Col 3: Services (remaining) + Areas -->
        <div class="footer-col">
          <h4>More Services</h4>
          <ul>
            <?php foreach (array_slice($services, 5) as $_s): ?>
            <li>
              <a href="/services/<?php echo htmlspecialchars($_s['slug']); ?>/">
                <?php echo htmlspecialchars($_s['name']); ?>
              </a>
            </li>
            <?php endforeach; ?>
            <li style="margin-top:0.75rem;">
              <a href="/services/" style="color:var(--color-accent);font-weight:600;">View All Services →</a>
            </li>
          </ul>
          <h4 style="margin-top:1.5rem;">Service Areas</h4>
          <ul>
            <li><a href="/service-areas/">Warrenton, MO</a></li>
            <li><a href="/service-areas/">Warren County, MO</a></li>
            <li><a href="/service-areas/">50-Mile Radius</a></li>
          </ul>
        </div>

        <!-- Col 4: Contact Info -->
        <div class="footer-col">
          <h4>Contact Us</h4>
          <ul>
            <?php if (!empty($phone)): ?>
            <li>
              <div class="contact-item">
                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 13.35 19.79 19.79 0 0 1 1.61 4.73 2 2 0 0 1 3.58 2.54h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L7.91 10.1a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
                <a href="tel:<?php echo preg_replace('/\D/', '', $phone); ?>"><?php echo htmlspecialchars($phone); ?></a>
              </div>
            </li>
            <?php endif; ?>
            <?php if (!empty($email)): ?>
            <li>
              <div class="contact-item">
                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
                <a href="mailto:<?php echo htmlspecialchars($email); ?>"><?php echo htmlspecialchars($email); ?></a>
              </div>
            </li>
            <?php endif; ?>
            <?php if (!empty($address['street']) || !empty($address['city'])): ?>
            <li>
              <div class="contact-item" style="align-items:flex-start;">
                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true" style="margin-top:2px;flex-shrink:0;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
                <address style="font-style:normal;">
                  <?php if (!empty($address['street'])): ?><?php echo htmlspecialchars($address['street']); ?><br><?php endif; ?>
                  <?php echo htmlspecialchars($address['city']); ?>, <?php echo htmlspecialchars($address['state']); ?> <?php echo htmlspecialchars($address['zip']); ?>
                </address>
              </div>
            </li>
            <?php endif; ?>
            <li>
              <div class="contact-item">
                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                <span>Mon–Fri 7am–6pm · Sat 8am–3pm</span>
              </div>
            </li>
          </ul>
          <a href="/contact/" class="btn btn-accent" style="margin-top:1.25rem;width:100%;justify-content:center;">
            Get Free Estimate
          </a>
        </div>

      </div><!-- /.footer-grid -->
    </div><!-- /.container -->
  </div><!-- /.footer-top -->

  <!-- AEO Entity Block -->
  <div class="footer-entity" style="background:rgba(255,255,255,0.04);border-top:1px solid rgba(255,255,255,0.06);padding:2rem 0;">
    <div class="container">
      <p style="font-size:0.825rem;line-height:1.8;color:rgba(255,255,255,0.4);max-width:900px;margin:0 auto;text-align:center;">
        <strong style="color:rgba(255,255,255,0.6);"><?php echo htmlspecialchars($siteName); ?></strong>
        is a licensed and insured general contractor based in <?php echo htmlspecialchars($address['city']); ?>, <?php echo htmlspecialchars($address['state']); ?> <?php echo htmlspecialchars($address['zip']); ?>,
        serving residential and commercial clients within a 50-mile radius of Warren County, Missouri.
        Services include roofing, siding, gutters, soffit &amp; fascia, windows &amp; doors, full-scale interior renovations, exterior work, drywall, and general contracting.
        <?php if (!empty($phone)): ?>Phone: <a href="tel:<?php echo preg_replace('/\D/', '', $phone); ?>" style="color:rgba(255,255,255,0.5);"><?php echo htmlspecialchars($phone); ?></a>.<?php endif; ?>
        Last Updated: <?php echo date('F Y'); ?>.
      </p>
    </div>
  </div>

  <!-- Footer Bottom Bar -->
  <div class="footer-bottom-bar">
    <div class="container">

      <!-- Legal Utility Row -->
      <div class="footer-legal-row">
        <a href="/privacy-policy/">Privacy Policy</a>
        <span class="divider">|</span>
        <a href="/terms/">Terms of Service</a>
        <span class="divider">|</span>
        <a href="/cookie-policy/">Cookie Policy</a>
        <span class="divider">|</span>
        <a href="/accessibility/">Accessibility</a>
        <span class="divider">|</span>
        <a href="/privacy-policy/#ccpa-rights">Do Not Sell or Share My Personal Information</a>
        <span class="divider">|</span>
        <a href="/sitemap.xml">Sitemap</a>
      </div>

      <div class="footer-bottom">
        <p>&copy; <?php echo date('Y'); ?> <?php echo htmlspecialchars($siteName); ?>. All rights reserved.</p>
        <p class="footer-credit">
          <a href="https://pageoneinsights.com" rel="dofollow noopener" target="_blank">
            Web Design &amp; Hosting by Page One Insights, LLC
          </a>
        </p>
      </div>

    </div><!-- /.container -->
  </div><!-- /.footer-bottom-bar -->

</footer>

<!-- Back to Top -->
<button class="back-to-top" id="back-to-top" aria-label="Back to top">
  <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="18 15 12 9 6 15"/></svg>
</button>

<!-- Mobile Sticky CTA Bar -->
<div class="mobile-cta-bar" aria-label="Quick contact">
  <?php if (!empty($phone)): ?>
  <a href="tel:<?php echo preg_replace('/\D/', '', $phone); ?>" class="cta-call">
    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 13.35 19.79 19.79 0 0 1 1.61 4.73 2 2 0 0 1 3.58 2.54h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L7.91 10.1a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
    <span>Call Now</span>
  </a>
  <?php else: ?>
  <a href="/contact/" class="cta-call">
    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 13.35 19.79 19.79 0 0 1 1.61 4.73 2 2 0 0 1 3.58 2.54h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L7.91 10.1a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
    <span>Call Now</span>
  </a>
  <?php endif; ?>
  <a href="/contact/" class="cta-estimate">
    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/><polyline points="10 9 9 9 8 9"/></svg>
    <span>Free Estimate</span>
  </a>
</div>

<!-- Cookie Banner -->
<div class="cookie-banner" id="cookie-banner" role="region" aria-label="Cookie notice" aria-live="polite">
  <p>
    We use cookies to improve your experience and analyze site traffic.
    By continuing to use this site, you agree to our use of cookies.
    <a href="/cookie-policy/">Learn more</a>.
  </p>
  <button class="cookie-banner__dismiss" id="cookie-dismiss" aria-label="Dismiss cookie notice">Got it</button>
</div>

<!-- =====================================================
     SCRIPTS
     ===================================================== -->

<!-- Lucide Icons (synchronous — required before createIcons()) -->
<script src="https://unpkg.com/lucide@latest/dist/umd/lucide.min.js"></script>
<script>
  if (typeof lucide !== 'undefined') lucide.createIcons();
</script>

<!-- Site Scripts -->
<script src="/assets/js/main.js" defer></script>
<script src="/assets/js/animations.js" defer></script>
<script src="/assets/js/effects.js" defer></script>

<!-- Inline: Back-to-top + Cookie Banner + Mobile Menu -->
<script>
(function () {
  'use strict';

  // ─── Back to Top ───────────────────────────────────────────
  var btn = document.getElementById('back-to-top');
  if (btn) {
    window.addEventListener('scroll', function () {
      btn.classList.toggle('visible', window.scrollY > 400);
    }, { passive: true });
    btn.addEventListener('click', function () {
      window.scrollTo({ top: 0, behavior: 'smooth' });
    });
  }

  // ─── Scrolled Header ───────────────────────────────────────
  var header = document.querySelector('[data-header]');
  if (header) {
    window.addEventListener('scroll', function () {
      header.classList.toggle('scrolled', window.scrollY > 40);
    }, { passive: true });
  }

  // ─── Mobile Menu ───────────────────────────────────────────
  var hamburger  = document.getElementById('hamburger-btn');
  var mobileMenu = document.getElementById('mobile-menu');
  var closeBtn   = document.getElementById('mobile-menu-close');

  function openMenu() {
    if (!mobileMenu || !hamburger) return;
    mobileMenu.classList.add('active');
    hamburger.setAttribute('aria-expanded', 'true');
    document.body.style.overflow = 'hidden';
  }
  function closeMenu() {
    if (!mobileMenu || !hamburger) return;
    mobileMenu.classList.remove('active');
    hamburger.setAttribute('aria-expanded', 'false');
    document.body.style.overflow = '';
  }

  if (hamburger) hamburger.addEventListener('click', openMenu);
  if (closeBtn)  closeBtn.addEventListener('click', closeMenu);
  if (mobileMenu) {
    mobileMenu.addEventListener('click', function (e) {
      if (e.target === mobileMenu) closeMenu();
    });
    document.addEventListener('keydown', function (e) {
      if (e.key === 'Escape') closeMenu();
    });
  }

  // ─── Cookie Banner ─────────────────────────────────────────
  var banner  = document.getElementById('cookie-banner');
  var dismiss = document.getElementById('cookie-dismiss');
  if (banner) {
    if (!localStorage.getItem('cookie-consent-as-contracting')) {
      banner.classList.add('visible');
    }
    if (dismiss) {
      dismiss.addEventListener('click', function () {
        banner.classList.remove('visible');
        localStorage.setItem('cookie-consent-as-contracting', '1');
      });
    }
  }

  // ─── FAQ Accordion ─────────────────────────────────────────
  document.querySelectorAll('.faq-question').forEach(function (btn) {
    btn.addEventListener('click', function () {
      var item = btn.closest('.faq-item');
      if (!item) return;
      var isOpen = item.classList.contains('open');
      document.querySelectorAll('.faq-item.open').forEach(function (i) { i.classList.remove('open'); });
      if (!isOpen) item.classList.add('open');
    });
  });

})();
</script>
