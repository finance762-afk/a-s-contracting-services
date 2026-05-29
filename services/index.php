<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
// ─── Page Setup ────────────────────────────────────────────────────────────
$pageTitle       = "All Services | A&S Contracting Services | Warrenton, MO";
$pageDescription = "A&S Contracting Services offers roofing, siding, gutters, soffit, fascia, windows, doors, interior renovations, exterior work, drywall & general contracting in Warrenton, MO. Free estimates.";
$canonicalUrl    = $siteUrl . '/services/';
$currentPage     = 'services';
$cssVersion      = '2.1';
$ogImage         = 'https://db.pageone.cloud/storage/v1/object/public/client-assets/a-s-contracting-services/photos/1779984864659-a47kou-52-Aug_08__2025_00-31-27-YHMr.jpg';

// Service card photos (all 10 services)
$pb = 'https://db.pageone.cloud/storage/v1/object/public/client-assets/a-s-contracting-services/photos/';
$svcPhotos = [
    'roofing'                  => $pb . '1779984864659-a47kou-52-Aug_08__2025_00-31-27-YHMr.jpg',
    'siding'                   => $pb . '1779984869042-6cwzvd-59-Aug_09__2025_12-39-54-JQC9.jpg',
    'gutters'                  => $pb . '1779984936314-5pnhuy-43-Aug_06__2025_23-34-36-CJqa.jpg',
    'soffit'                   => $pb . '1779984949713-arsxr0-25-Aug_06__2025_14-36-12-a7GW.jpg',
    'fascia'                   => $pb . '1779984953000-ootb3h-20-Aug_06__2025_14-16-18-XFFu.jpg',
    'windows-doors'            => $pb . '1779984974072-agw64u-4-Aug_06__2025_13-45-27-DRwn.jpg',
    'full-scale-interior-work' => $pb . '1779984974577-v2hb5z-49-Aug_08__2025_00-08-39-mFui.jpg',
    'exterior-work'            => $pb . '1779985048829-yoqujz-14-Mar_11__2025_23-54-47-qHie.jpg',
    'dry-wall'                 => $pb . '1779985049352-yx87w1-20-Mar_12__2025_18-21-31-DDFM.jpg',
    'general-contracting'      => $pb . '1779985140268-74twlt-8-Jan_17__2025_14-47-01-2JGp.jpg',
];

$svcIcons = [
    'roofing'                  => 'home',
    'siding'                   => 'building-2',
    'gutters'                  => 'droplets',
    'soffit'                   => 'hard-hat',
    'fascia'                   => 'ruler',
    'windows-doors'            => 'door-open',
    'full-scale-interior-work' => 'hammer',
    'exterior-work'            => 'wrench',
    'dry-wall'                 => 'layers',
    'general-contracting'      => 'clipboard-list',
];

$svcBullets = [
    'roofing'                  => ['Full replacements or spot repairs','Licensed for residential & commercial','Insurance claim documentation help'],
    'siding'                   => ['Vinyl, fiber cement & wood options','Boosts curb appeal immediately','Storm & moisture damage repair'],
    'gutters'                  => ['Seamless gutter installation available','Protects foundation and landscaping','Cleaning & maintenance included'],
    'soffit'                   => ['Improves attic ventilation','Resists moisture and pests','Matched to existing roofline'],
    'fascia'                   => ['Premium materials, long-term hold','Protects roof edge from rot','Pairs with gutter installation'],
    'windows-doors'            => ['Energy-efficient replacement options','Drafty window & door upgrades','Curb appeal + comfort gains'],
    'full-scale-interior-work' => ['Full room remodels and builds','Drywall, flooring, trim, painting','Residential and commercial scopes'],
    'exterior-work'            => ['Complete exterior renovation packages','Siding, roofing, trim combined','Protect and refresh your home'],
    'dry-wall'                 => ['Smooth seamless finish guaranteed','Repair, patch, or full install','Residential & commercial projects'],
    'general-contracting'      => ['Single point of contact, full scope','Residential & commercial builds','From planning through completion'],
];

$svcAlts = [
    'roofing'                  => 'A&S Contracting Services roofing installation on Warrenton, MO home',
    'siding'                   => 'New siding installation on Missouri home by A&S Contracting Services',
    'gutters'                  => 'Gutter installation and repair in Warrenton, MO',
    'soffit'                   => 'Soffit installation and repair on residential home in Warren County',
    'fascia'                   => 'Fascia board replacement and installation in Warrenton, MO',
    'windows-doors'            => 'Window and door installation by A&S Contracting Services',
    'full-scale-interior-work' => 'Full interior renovation and remodeling in Warrenton, MO',
    'exterior-work'            => 'Exterior home renovation and construction by A&S Contracting Services',
    'dry-wall'                 => 'Professional drywall installation and finishing in Warrenton, MO',
    'general-contracting'      => 'General contracting services for residential and commercial projects in Missouri',
];

// Schema: BreadcrumbList only for listing page
$schemaData = [
    '@context' => 'https://schema.org',
    '@type'    => 'BreadcrumbList',
    'itemListElement' => [
        ['@type' => 'ListItem', 'position' => 1, 'name' => 'Home',     'item' => $siteUrl . '/'],
        ['@type' => 'ListItem', 'position' => 2, 'name' => 'Services'],
    ],
];
$schemaMarkup = json_encode($schemaData, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
?>
<body>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'; ?>

<!-- ═══════════════════════════════════════════════════════════
     PAGE-SPECIFIC STYLES — /services/ — Premium tier
     ═══════════════════════════════════════════════════════════ -->
<style>

/* ─── HERO (Services Listing) ─────────────────────────────── */
.services-listing-hero {
  position: relative;
  min-height: 42vh;
  display: flex;
  align-items: center;
  background: var(--color-primary);
  padding: calc(var(--nav-height, 72px) + var(--space-2xl)) 0 var(--space-2xl);
  overflow: hidden;
}
.services-listing-hero::before {
  content: '';
  position: absolute;
  inset: 0;
  background: linear-gradient(135deg,
    rgba(var(--color-accent-rgb), 0.12) 0%,
    transparent 60%
  );
  z-index: 1;
}
.services-listing-hero::after {
  content: '';
  position: absolute;
  right: -80px;
  top: -80px;
  width: 500px;
  height: 500px;
  border-radius: 50%;
  background: radial-gradient(circle, rgba(var(--color-accent-rgb), 0.08) 0%, transparent 70%);
  z-index: 1;
}
.services-listing-hero .hero-inner {
  position: relative;
  z-index: 2;
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  max-width: var(--max-width, 1280px);
  margin: 0 auto;
  padding: 0 var(--space-lg);
}
.hero-breadcrumb {
  display: flex;
  align-items: center;
  gap: var(--space-xs);
  font-size: 0.82rem;
  color: rgba(255,255,255,0.5);
  margin-bottom: var(--space-md);
}
.hero-breadcrumb a { color: rgba(255,255,255,0.5); transition: color 0.2s; }
.hero-breadcrumb a:hover { color: var(--color-accent); }
.hero-breadcrumb span { color: rgba(255,255,255,0.3); }
.services-listing-hero h1 {
  font-family: var(--font-heading, 'Unbounded', sans-serif);
  font-size: clamp(2rem, 4vw, 3.2rem);
  font-weight: 800;
  color: var(--color-secondary);
  line-height: 1.1;
  text-wrap: balance;
  margin: 0 0 var(--space-md);
}
.services-listing-hero h1 .accent { color: var(--color-accent); }
.services-listing-hero .hero-answer {
  font-size: 1.05rem;
  line-height: 1.75;
  color: rgba(255,255,255,0.72);
  max-width: 58ch;
  margin: 0 0 var(--space-xl);
}
.hero-stats-row {
  display: flex;
  gap: var(--space-xl);
  flex-wrap: wrap;
}
.hero-stat {
  display: flex;
  flex-direction: column;
  gap: 2px;
}
.hero-stat-num {
  font-family: var(--font-heading, 'Unbounded', sans-serif);
  font-size: 2rem;
  font-weight: 800;
  color: var(--color-accent);
  line-height: 1;
}
.hero-stat-label {
  font-size: 0.78rem;
  color: rgba(255,255,255,0.5);
  letter-spacing: 0.06em;
  text-transform: uppercase;
}

/* ─── SVG DIVIDER ─────────────────────────────────────────── */
.divider-wave {
  display: block;
  width: 100%;
  overflow: hidden;
  line-height: 0;
  margin-bottom: -2px;
}
.divider-wave svg { display: block; width: 100%; }
.divider-angle {
  display: block;
  width: 100%;
  overflow: hidden;
  line-height: 0;
}
.divider-angle svg { display: block; width: 100%; }

/* ─── INTRO SECTION ───────────────────────────────────────── */
.services-intro {
  padding: var(--space-2xl) 0 var(--space-lg);
  background: var(--color-bg-alt, #f8f8f6);
}
.services-intro .container {
  max-width: var(--max-width, 1280px);
  margin: 0 auto;
  padding: 0 var(--space-lg);
}
.services-intro-grid {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: var(--space-2xl);
  align-items: center;
}
.services-intro-text h2 {
  font-family: var(--font-heading, 'Unbounded', sans-serif);
  font-size: clamp(1.5rem, 2.8vw, 2.2rem);
  font-weight: 700;
  color: var(--color-primary);
  line-height: 1.2;
  text-wrap: balance;
  margin: 0 0 var(--space-sm);
}
.services-intro-text .answer-block {
  font-size: 1rem;
  line-height: 1.75;
  color: var(--color-text);
  margin: 0 0 var(--space-md);
  padding: var(--space-sm) var(--space-md);
  border-left: 3px solid var(--color-accent);
  background: rgba(var(--color-accent-rgb), 0.06);
  border-radius: 0 var(--radius-sm) var(--radius-sm) 0;
}
.services-intro-text p {
  font-size: 0.97rem;
  line-height: 1.8;
  color: var(--color-text-light);
  margin: 0;
}
.services-intro-badges {
  display: flex;
  flex-wrap: wrap;
  gap: var(--space-sm);
  margin-top: var(--space-md);
}
.intro-badge {
  display: inline-flex;
  align-items: center;
  gap: var(--space-xs);
  background: var(--color-primary);
  color: var(--color-secondary);
  font-size: 0.82rem;
  font-weight: 600;
  padding: 6px 14px;
  border-radius: var(--radius);
}
.intro-badge svg { width: 13px; height: 13px; color: var(--color-accent); }
.services-intro-visual {
  position: relative;
}
.intro-image-main {
  border-radius: var(--radius-lg);
  overflow: hidden;
  box-shadow: var(--shadow-lg);
}
.intro-image-main img {
  width: 100%;
  height: 360px;
  object-fit: cover;
  display: block;
}
.intro-image-accent {
  position: absolute;
  bottom: -20px;
  right: -20px;
  width: 180px;
  height: 180px;
  border-radius: var(--radius-lg);
  overflow: hidden;
  border: 4px solid var(--color-bg-alt);
  box-shadow: var(--shadow-lg);
}
.intro-image-accent img {
  width: 100%;
  height: 100%;
  object-fit: cover;
}

/* ─── SERVICES GRID SECTION ───────────────────────────────── */
.services-listing-section {
  padding: var(--space-3xl) 0;
  background: var(--color-bg, #fff);
}
.services-listing-section .container {
  max-width: var(--max-width, 1280px);
  margin: 0 auto;
  padding: 0 var(--space-lg);
}
.section-header {
  text-align: center;
  margin-bottom: var(--space-2xl);
}
.eyebrow-label {
  display: inline-block;
  font-family: var(--font-body, 'Inter', sans-serif);
  font-size: 0.75rem;
  font-weight: 700;
  letter-spacing: 0.14em;
  text-transform: uppercase;
  color: var(--color-accent);
  margin-bottom: var(--space-sm);
}
.section-header h2 {
  font-family: var(--font-heading, 'Unbounded', sans-serif);
  font-size: clamp(1.6rem, 3vw, 2.4rem);
  font-weight: 800;
  color: var(--color-primary);
  text-wrap: balance;
  margin: 0 0 var(--space-sm);
}
.section-header .section-subtitle {
  font-family: var(--font-accent, 'Fraunces', serif);
  font-size: 1.25rem;
  color: var(--color-text-light);
  font-style: italic;
}
.section-header .answer-block {
  max-width: 58ch;
  margin: var(--space-sm) auto 0;
  font-size: 1rem;
  line-height: 1.75;
  color: var(--color-text-light);
}
.services-grid {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: var(--space-md);
}
@media (max-width: 1199px) {
  .services-grid { grid-template-columns: repeat(2, 1fr); }
}
@media (max-width: 600px) {
  .services-grid { grid-template-columns: 1fr; }
}
.service-card-with-image {
  border-radius: var(--radius-md);
  overflow: hidden;
  display: flex;
  flex-direction: column;
  transition: transform 0.25s ease, box-shadow 0.25s ease;
}
.service-card-with-image:hover {
  transform: translateY(-5px);
  box-shadow: var(--shadow-lg);
}
.service-card__image {
  position: relative;
  aspect-ratio: 5 / 3;
  overflow: hidden;
}
.service-card__image img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  display: block;
  transition: transform 0.45s ease;
}
.service-card-with-image:hover .service-card__image img {
  transform: scale(1.05);
}
.service-card__body {
  padding: var(--space-lg) var(--space-md) var(--space-md);
  text-align: center;
  display: flex;
  flex-direction: column;
  align-items: center;
  gap: var(--space-sm);
  position: relative;
  flex: 1;
}
.service-card__icon {
  width: 56px;
  height: 56px;
  border-radius: 50%;
  background: #fff;
  box-shadow: var(--shadow-md);
  display: flex;
  align-items: center;
  justify-content: center;
  margin-top: -44px;
  margin-bottom: var(--space-xs);
  color: var(--color-accent);
}
.service-card__icon i,
.service-card__icon svg { width: 26px; height: 26px; }
.service-card-with-image h3 {
  font-family: var(--font-heading, 'Unbounded', sans-serif);
  color: var(--color-primary);
  margin: 0;
  font-size: 1.1rem;
  line-height: 1.2;
}
.service-card__desc {
  color: var(--color-text);
  margin: 0;
  font-size: 0.9rem;
  line-height: 1.55;
}
.service-card-with-image ul {
  list-style: none;
  padding: 0;
  margin: var(--space-xs) 0 0;
  width: 100%;
  text-align: left;
  display: flex;
  flex-direction: column;
  gap: var(--space-xs);
  border-top: 1px solid rgba(0,0,0,0.06);
  padding-top: var(--space-md);
}
.service-card-with-image ul li {
  font-size: 0.875rem;
  color: var(--color-text);
  padding-left: 1.25rem;
  position: relative;
}
.service-card-with-image ul li::before {
  content: "•";
  color: var(--color-accent);
  font-weight: 700;
  position: absolute;
  left: 0.25rem;
  top: 0;
}
.service-card__cta {
  margin-top: auto;
  color: var(--color-accent);
  font-weight: 600;
  text-decoration: none;
  font-size: 0.9rem;
  border-top: 1px solid rgba(0,0,0,0.06);
  width: 100%;
  text-align: center;
  padding: var(--space-sm) 0 0;
  transition: color 0.2s;
}
.service-card__cta::after {
  content: " →";
  display: inline-block;
  transition: transform 0.2s;
}
.service-card__cta:hover { color: var(--color-primary); }
.service-card__cta:hover::after { transform: translateX(3px); }
.card-tint-1 { background: rgba(var(--color-primary-rgb), 0.04); }
.card-tint-2 { background: rgba(var(--color-accent-rgb), 0.06); }
.card-tint-3 { background: rgba(var(--color-primary-rgb), 0.07); }

/* ─── CTA BANNER ──────────────────────────────────────────── */
.cta-banner-section {
  padding: var(--space-3xl) 0;
  background: var(--color-primary);
  position: relative;
  overflow: hidden;
}
.cta-banner-section::before {
  content: '';
  position: absolute;
  inset: 0;
  background: linear-gradient(135deg, rgba(var(--color-accent-rgb),0.1) 0%, transparent 60%);
}
.cta-banner-section .container {
  max-width: var(--max-width, 1280px);
  margin: 0 auto;
  padding: 0 var(--space-lg);
  position: relative;
  z-index: 1;
  text-align: center;
}
.cta-banner-section h2 {
  font-family: var(--font-heading, 'Unbounded', sans-serif);
  font-size: clamp(1.6rem, 3vw, 2.4rem);
  font-weight: 800;
  color: var(--color-secondary);
  text-wrap: balance;
  margin: 0 0 var(--space-sm);
}
.cta-banner-section .answer-block {
  font-size: 1rem;
  line-height: 1.75;
  color: rgba(255,255,255,0.72);
  max-width: 50ch;
  margin: 0 auto var(--space-xl);
}
.cta-btn-group {
  display: flex;
  gap: var(--space-md);
  justify-content: center;
  flex-wrap: wrap;
}
.btn-accent {
  display: inline-flex;
  align-items: center;
  gap: var(--space-xs);
  background: var(--color-accent);
  color: var(--color-primary);
  font-family: var(--font-heading, 'Unbounded', sans-serif);
  font-size: 0.85rem;
  font-weight: 700;
  padding: 14px 28px;
  border-radius: var(--radius);
  transition: all 0.2s ease;
  border: 2px solid var(--color-accent);
}
.btn-accent:hover {
  background: #ffbb00;
  border-color: #ffbb00;
  transform: translateY(-2px);
  box-shadow: 0 6px 20px rgba(var(--color-accent-rgb),0.4);
}
.btn-outline-white {
  display: inline-flex;
  align-items: center;
  gap: var(--space-xs);
  background: transparent;
  color: var(--color-secondary);
  font-family: var(--font-heading, 'Unbounded', sans-serif);
  font-size: 0.85rem;
  font-weight: 700;
  padding: 14px 28px;
  border-radius: var(--radius);
  border: 2px solid rgba(255,255,255,0.35);
  transition: all 0.2s ease;
}
.btn-outline-white:hover {
  background: rgba(255,255,255,0.1);
  border-color: rgba(255,255,255,0.7);
}

/* ─── RESPONSIVE ──────────────────────────────────────────── */
@media (max-width: 900px) {
  .services-intro-grid { grid-template-columns: 1fr; }
  .intro-image-accent { display: none; }
  .hero-stats-row { gap: var(--space-lg); }
}
@media (max-width: 600px) {
  .services-listing-hero { min-height: 38vh; }
  .services-listing-hero h1 { font-size: 1.75rem; }
  .services-listing-hero .hero-answer { font-size: 0.95rem; }
  .hero-stat-num { font-size: 1.5rem; }
  .cta-btn-group { flex-direction: column; align-items: center; }
}

</style>

<!-- ─── HERO ─────────────────────────────────────────────────── -->
<section class="services-listing-hero" aria-label="Services overview">
  <div class="hero-inner">
    <nav class="hero-breadcrumb" aria-label="Breadcrumb">
      <a href="/">Home</a>
      <span aria-hidden="true">›</span>
      <span aria-current="page">Services</span>
    </nav>
    <h1>What <span class="accent">Services</span> Does A&amp;S Contracting Offer?</h1>
    <p class="hero-answer">
      A&amp;S Contracting Services is a licensed and insured general contractor based in Warrenton, Missouri, offering 10 core construction and renovation services to residential and commercial clients within a 50-mile radius of Warren County. From roofing and siding to full interior renovations, every project is handled by our own crew — no subcontractors, no surprises.
    </p>
    <div class="hero-stats-row">
      <div class="hero-stat">
        <span class="hero-stat-num">10</span>
        <span class="hero-stat-label">Core Services</span>
      </div>
      <div class="hero-stat">
        <span class="hero-stat-num">50mi</span>
        <span class="hero-stat-label">Service Radius</span>
      </div>
      <div class="hero-stat">
        <span class="hero-stat-num">3+</span>
        <span class="hero-stat-label">Years Serving MO</span>
      </div>
      <div class="hero-stat">
        <span class="hero-stat-num">$0</span>
        <span class="hero-stat-label">Estimate Cost</span>
      </div>
    </div>
  </div>
</section>

<!-- SVG Divider: Hero → Intro -->
<div class="divider-wave" aria-hidden="true">
  <svg viewBox="0 0 1440 54" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M0,0 L0,27 Q360,54 720,27 Q1080,0 1440,27 L1440,0 Z" fill="#000000"/>
  </svg>
</div>

<!-- ─── INTRO ─────────────────────────────────────────────── -->
<section class="services-intro" aria-label="About our services">
  <div class="container">
    <div class="services-intro-grid">
      <div class="services-intro-text reveal-left">
        <span class="eyebrow-label">Warrenton, MO — Warren County</span>
        <h2>What makes A&amp;S Contracting the right choice for your project?</h2>
        <p class="answer-block">
          A&amp;S Contracting Services is a licensed Missouri general contractor based in Warrenton, MO, serving residential and commercial clients across Warren County and a 50-mile radius. We handle roofing, siding, gutters, and full interior renovations with the same crew from estimate to completion.
        </p>
        <p>
          Whether you need a single shingle replaced or a complete home exterior overhaul, A&amp;S provides on-site written estimates at no cost. Every project is backed by our licensing, general liability insurance, and a commitment to finishing on schedule.
        </p>
        <div class="services-intro-badges">
          <span class="intro-badge">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
            Licensed &amp; Insured
          </span>
          <span class="intro-badge">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><polyline points="20 6 9 17 4 12"/></svg>
            Free Written Estimates
          </span>
          <span class="intro-badge">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
            Our Own Crew
          </span>
          <span class="intro-badge">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
            On-Time Delivery
          </span>
        </div>
      </div>
      <div class="services-intro-visual reveal-right">
        <div class="intro-image-main">
          <img
            src="https://db.pageone.cloud/storage/v1/object/public/client-assets/a-s-contracting-services/photos/1779985081293-864e8m-2-Feb_09__2026_13-42-04-ptJL.jpg"
            alt="A&S Contracting Services crew working on a Warrenton, MO home exterior"
            width="640"
            height="360"
            loading="lazy"
          >
        </div>
        <div class="intro-image-accent">
          <img
            src="https://db.pageone.cloud/storage/v1/object/public/client-assets/a-s-contracting-services/photos/1779985082241-xuoxbh-11-Feb_09__2026_15-26-29-L2wD.jpg"
            alt="A&S Contracting Services completed project in Warren County, Missouri"
            width="180"
            height="180"
            loading="lazy"
          >
        </div>
      </div>
    </div>
  </div>
</section>

<!-- SVG Divider: Intro → Grid -->
<div class="divider-angle" aria-hidden="true">
  <svg viewBox="0 0 1440 40" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
    <polygon points="0,40 1440,0 1440,40" fill="#ffffff"/>
  </svg>
</div>

<!-- ─── ALL SERVICES GRID ─────────────────────────────────── -->
<section class="services-listing-section" aria-label="All services">
  <div class="container">
    <div class="section-header reveal-up">
      <span class="eyebrow-label">What We Do</span>
      <h2>Which <span style="color:var(--color-accent)">construction services</span> does A&amp;S offer near Warrenton?</h2>
      <p class="answer-block">
        A&amp;S Contracting Services offers 10 residential and commercial construction services throughout Warren County and central Missouri. Every service includes a free on-site estimate, licensed and insured crew, and a written project scope before work begins.
      </p>
      <span class="section-subtitle">From roofline to renovation — handled by one contractor.</span>
    </div>

    <div class="services-grid">
      <?php
      $tints = ['card-tint-1','card-tint-2','card-tint-3'];
      $delays = ['reveal-delay-1','reveal-delay-2','reveal-delay-3'];
      foreach ($services as $i => $svc):
        $slug  = $svc['slug'];
        $tint  = $tints[$i % 3];
        $delay = $delays[$i % 3];
        $photo = $svcPhotos[$slug] ?? '';
        $icon  = $svcIcons[$slug]  ?? 'wrench';
        $bullets = $svcBullets[$slug] ?? [];
        $alt   = $svcAlts[$slug]   ?? $svc['name'] . ' in Warrenton, MO';
      ?>
      <article class="service-card-with-image <?php echo $tint; ?> reveal-up <?php echo $delay; ?>">
        <div class="service-card__image">
          <img
            src="<?php echo htmlspecialchars($photo); ?>"
            alt="<?php echo htmlspecialchars($alt); ?>"
            width="600"
            height="360"
            loading="lazy"
          >
        </div>
        <div class="service-card__body">
          <div class="service-card__icon">
            <i data-lucide="<?php echo htmlspecialchars($icon); ?>"></i>
          </div>
          <h3><?php echo htmlspecialchars($svc['name']); ?></h3>
          <p class="service-card__desc"><?php
            // First sentence of description only
            $desc = $svc['description'];
            $pos = strpos($desc, '. ');
            echo htmlspecialchars($pos !== false ? substr($desc, 0, $pos + 1) : $desc);
          ?></p>
          <ul>
            <?php foreach (array_slice($bullets, 0, 3) as $bullet): ?>
            <li><?php echo htmlspecialchars($bullet); ?></li>
            <?php endforeach; ?>
          </ul>
          <a href="/services/<?php echo htmlspecialchars($slug); ?>/" class="service-card__cta">
            Learn more
          </a>
        </div>
      </article>
      <?php endforeach; ?>
    </div>

  </div>
</section>

<!-- SVG Divider: Grid → CTA -->
<div class="divider-wave" aria-hidden="true">
  <svg viewBox="0 0 1440 54" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M0,54 L0,27 Q360,0 720,27 Q1080,54 1440,27 L1440,54 Z" fill="#000000"/>
  </svg>
</div>

<!-- ─── CTA BANNER ─────────────────────────────────────────── -->
<section class="cta-banner-section" aria-label="Get a free estimate">
  <div class="container">
    <span class="eyebrow-label" style="color:var(--color-accent);">No obligation — no pressure</span>
    <h2>Ready to get a <span style="color:var(--color-accent);">free estimate</span> in Warrenton?</h2>
    <p class="answer-block">
      Every project starts with a free on-site assessment. We come to your property, assess the work, and give you a clear written quote — no phone estimates, no surprise charges. Serving Warrenton, MO and a 50-mile radius across Warren County.
    </p>
    <div class="cta-btn-group">
      <a href="/contact/" class="btn-accent">
        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/></svg>
        Request Free Estimate
      </a>
      <a href="/about/" class="btn-outline-white">
        About A&amp;S Contracting
      </a>
    </div>
  </div>
</section>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
