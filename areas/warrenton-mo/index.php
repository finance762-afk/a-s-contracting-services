<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
$cityName        = 'Warrenton';
$stateAbbr       = 'MO';
$countyName      = 'Warren County';
$citySlug        = 'warrenton-mo';
$pageTitle       = "General Contractor in Warrenton, MO | A&S Contracting Services";
$pageDescription = "A&S Contracting Services is a licensed general contractor in Warrenton, MO. Roofing, siding, gutters, windows, drywall & interior renovations for Warren County homes. Free estimates.";
$canonicalUrl    = $siteUrl . '/areas/warrenton-mo/';
$currentPage     = 'service-areas';
$cssVersion      = '2.0';

$pb         = 'https://db.pageone.cloud/storage/v1/object/public/client-assets/a-s-contracting-services/photos/';
$heroPhoto  = $pb . '1779985049352-yx87w1-20-Mar_12__2025_18-21-31-DDFM.jpg';
$bodyPhoto1 = $pb . '1779985126277-1f29tk-36-Mar_19__2026_16-46-08-BKn5.jpg';
$bodyPhoto2 = $pb . '1779985050543-4vablu-34-Mar_13__2025_16-37-22-A7P5.jpg';
$heroImagePreload = $heroPhoto;
$ogImage    = $heroPhoto;

$schemaData = [
    '@context' => 'https://schema.org',
    '@graph'   => [
        [
            '@type'           => 'BreadcrumbList',
            'itemListElement' => [
                ['@type' => 'ListItem', 'position' => 1, 'name' => 'Home',          'item' => $siteUrl . '/'],
                ['@type' => 'ListItem', 'position' => 2, 'name' => 'Service Areas', 'item' => $siteUrl . '/service-areas/'],
                ['@type' => 'ListItem', 'position' => 3, 'name' => 'Warrenton, MO'],
            ],
        ],
        [
            '@type'       => 'Service',
            'name'        => 'General Contractor in Warrenton, MO',
            'description' => 'Licensed and insured general contractor based in Warrenton, MO serving Warren County with roofing, siding, gutters, windows, drywall, and full-scale interior renovations.',
            'provider'    => ['@id' => $siteUrl . '/#organization'],
            'areaServed'  => [
                '@type'            => 'City',
                'name'             => 'Warrenton',
                'containedInPlace' => ['@type' => 'State', 'name' => 'Missouri'],
            ],
            'url' => $canonicalUrl,
        ],
    ],
];
$schemaMarkup = json_encode($schemaData, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
?>
<body>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'; ?>

<style>
/* ============================================================
   /areas/warrenton-mo/ — Premium Area Page — A&S Contracting
   Signature technique: diagonal split hero + accolade ticker
   ============================================================ */

/* — Hero — */
.city-hero {
  position: relative;
  min-height: 82vh;
  display: flex;
  align-items: center;
  background-image: url('<?php echo $heroPhoto; ?>');
  background-size: cover;
  background-position: center 35%;
  padding: calc(var(--nav-height, 72px) + var(--space-3xl)) 0 var(--space-3xl);
  overflow: hidden;
}
.city-hero::before {
  content: '';
  position: absolute;
  inset: 0;
  background: linear-gradient(120deg, rgba(var(--color-primary-rgb), 0.96) 0%, rgba(var(--color-primary-rgb), 0.82) 50%, rgba(var(--color-primary-rgb), 0.3) 100%);
  z-index: 1;
}
.city-hero::after {
  content: '';
  position: absolute;
  inset: 0;
  background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 200 200' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.85' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='0.03'/%3E%3C/svg%3E");
  background-size: 200px;
  opacity: 0.05;
  z-index: 2;
  pointer-events: none;
}
.city-hero-inner {
  position: relative;
  z-index: 3;
  max-width: var(--max-width, 1280px);
  margin: 0 auto;
  padding: 0 var(--space-lg);
  display: grid;
  grid-template-columns: 1fr 380px;
  gap: var(--space-2xl);
  align-items: center;
  width: 100%;
}
/* Floating accent ring — signature for Warrenton */
.city-hero .hero-accent-ring {
  position: absolute;
  right: 5%;
  top: 10%;
  width: 340px;
  height: 340px;
  border: 1px solid rgba(var(--color-accent-rgb), 0.18);
  border-radius: 50%;
  z-index: 2;
  pointer-events: none;
}
.city-hero .hero-accent-ring::before {
  content: '';
  position: absolute;
  inset: 24px;
  border: 1px solid rgba(var(--color-accent-rgb), 0.1);
  border-radius: 50%;
}
.hero-breadcrumb {
  display: flex;
  align-items: center;
  gap: var(--space-xs);
  font-size: 0.8rem;
  color: rgba(255, 255, 255, 0.48);
  margin-bottom: var(--space-md);
}
.hero-breadcrumb a {
  color: rgba(255, 255, 255, 0.48);
  transition: color 0.2s;
}
.hero-breadcrumb a:hover {
  color: var(--color-accent);
}
.hero-breadcrumb span {
  color: rgba(255, 255, 255, 0.28);
}
.hero-eyebrow-badge {
  display: inline-flex;
  align-items: center;
  gap: var(--space-xs);
  background: rgba(var(--color-accent-rgb), 0.15);
  border: 1px solid rgba(var(--color-accent-rgb), 0.45);
  color: var(--color-accent);
  font-size: 0.76rem;
  font-weight: 700;
  letter-spacing: 0.12em;
  text-transform: uppercase;
  padding: 5px 12px;
  border-radius: var(--radius-sm);
  margin-bottom: var(--space-md);
}
.city-hero h1 {
  font-family: var(--font-heading, 'Unbounded', sans-serif);
  font-size: clamp(2rem, 4vw, 3.2rem);
  font-weight: 800;
  line-height: 1.08;
  text-wrap: balance;
  color: var(--color-secondary);
  margin: 0 0 var(--space-md);
}
.city-hero h1 .accent {
  color: var(--color-accent);
}
.hero-answer {
  font-size: 1.05rem;
  line-height: 1.78;
  color: rgba(255, 255, 255, 0.76);
  max-width: 52ch;
  margin: 0 0 var(--space-xl);
}
.hero-trust-row {
  display: flex;
  gap: var(--space-md);
  flex-wrap: wrap;
  margin-bottom: var(--space-xl);
}
.trust-pill {
  display: inline-flex;
  align-items: center;
  gap: 6px;
  background: rgba(255, 255, 255, 0.1);
  border: 1px solid rgba(255, 255, 255, 0.18);
  color: rgba(255, 255, 255, 0.88);
  font-size: 0.82rem;
  font-weight: 600;
  padding: 6px 14px;
  border-radius: 100px;
}
.trust-pill svg {
  width: 13px;
  height: 13px;
  color: var(--color-accent);
}
.hero-cta-row {
  display: flex;
  gap: var(--space-md);
  flex-wrap: wrap;
}
.btn-primary-city {
  display: inline-flex;
  align-items: center;
  gap: 8px;
  background: var(--color-accent);
  color: var(--color-primary);
  font-family: var(--font-heading, 'Unbounded', sans-serif);
  font-size: 0.82rem;
  font-weight: 800;
  padding: 14px 28px;
  border-radius: var(--radius);
  border: 2px solid var(--color-accent);
  transition: all 0.2s;
  text-transform: uppercase;
  letter-spacing: 0.04em;
}
.btn-primary-city:hover {
  background: #ffbb00;
  border-color: #ffbb00;
  transform: translateY(-2px);
  box-shadow: 0 6px 20px rgba(var(--color-accent-rgb), 0.4);
}
.btn-ghost-city {
  display: inline-flex;
  align-items: center;
  gap: 8px;
  background: transparent;
  color: var(--color-secondary);
  font-family: var(--font-heading, 'Unbounded', sans-serif);
  font-size: 0.82rem;
  font-weight: 700;
  padding: 14px 28px;
  border-radius: var(--radius);
  border: 2px solid rgba(255, 255, 255, 0.3);
  transition: all 0.2s;
  text-transform: uppercase;
  letter-spacing: 0.04em;
}
.btn-ghost-city:hover {
  border-color: rgba(255, 255, 255, 0.7);
  background: rgba(255, 255, 255, 0.08);
}
/* Hero form card */
.hero-form-card {
  background: rgba(255, 255, 255, 0.97);
  border-radius: var(--radius-lg);
  padding: var(--space-xl);
  box-shadow: 0 24px 64px rgba(0, 0, 0, 0.35);
}
.form-card-title {
  font-family: var(--font-heading, 'Unbounded', sans-serif);
  font-size: 1rem;
  font-weight: 800;
  color: var(--color-primary);
  margin: 0 0 var(--space-sm);
}
.form-card-subtitle {
  font-size: 0.82rem;
  color: var(--color-text-light);
  margin: 0 0 var(--space-md);
  line-height: 1.5;
}
.city-form {
  display: flex;
  flex-direction: column;
  gap: var(--space-sm);
}
.city-form .fg {
  display: flex;
  flex-direction: column;
  gap: 4px;
}
.city-form .fg label {
  font-size: 0.76rem;
  font-weight: 600;
  color: var(--color-text-light);
  text-transform: uppercase;
  letter-spacing: 0.06em;
}
.city-form .fg input,
.city-form .fg select {
  width: 100%;
  padding: 10px 14px;
  border: 1.5px solid var(--color-border, #e2e2e2);
  border-radius: var(--radius-sm);
  font-size: 0.9rem;
  color: var(--color-text);
  background: var(--color-bg, #fff);
  transition: border-color 0.2s;
  font-family: var(--font-body, 'Inter', sans-serif);
}
.city-form .fg input:focus,
.city-form .fg select:focus {
  outline: none;
  border-color: var(--color-accent);
}
.city-form-consent {
  border: none;
  padding: 0;
  margin: 0;
  display: flex;
  flex-direction: column;
  gap: 6px;
}
.city-form-consent legend {
  font-size: 0.74rem;
  font-weight: 700;
  color: var(--color-text-light);
  text-transform: uppercase;
  letter-spacing: 0.06em;
  margin-bottom: 4px;
}
.consent-row {
  display: flex;
  gap: 8px;
  align-items: flex-start;
  cursor: pointer;
}
.consent-row input[type="checkbox"] {
  width: 15px;
  height: 15px;
  flex-shrink: 0;
  margin-top: 2px;
  accent-color: var(--color-accent);
}
.consent-row span {
  font-size: 0.76rem;
  line-height: 1.5;
  color: var(--color-text-light);
}
.consent-row span a {
  color: var(--color-accent);
}
.required-star {
  color: #c00;
  font-weight: 700;
}
.btn-city-submit {
  width: 100%;
  background: var(--color-primary);
  color: var(--color-secondary);
  font-family: var(--font-heading, 'Unbounded', sans-serif);
  font-size: 0.82rem;
  font-weight: 800;
  padding: 14px;
  border: none;
  border-radius: var(--radius);
  cursor: pointer;
  transition: all 0.2s;
  letter-spacing: 0.04em;
  text-transform: uppercase;
}
.btn-city-submit:hover {
  background: var(--color-accent);
  color: var(--color-primary);
  transform: translateY(-1px);
}
/* Dividers */
.div-wave {
  display: block;
  width: 100%;
  overflow: hidden;
  line-height: 0;
}
.div-wave svg,
.div-angle svg,
.div-curve svg {
  display: block;
  width: 100%;
}
.div-angle {
  display: block;
  width: 100%;
  overflow: hidden;
  line-height: 0;
}
.div-curve {
  display: block;
  width: 100%;
  overflow: hidden;
  line-height: 0;
}
/* Container */
.ctr {
  max-width: var(--max-width, 1280px);
  margin: 0 auto;
  padding: 0 var(--space-lg);
}
.eyebrow {
  display: inline-block;
  font-size: 0.74rem;
  font-weight: 700;
  letter-spacing: 0.14em;
  text-transform: uppercase;
  color: var(--color-accent);
  margin-bottom: var(--space-sm);
}
.sec-h2 {
  font-family: var(--font-heading, 'Unbounded', sans-serif);
  font-size: clamp(1.6rem, 3vw, 2.4rem);
  font-weight: 800;
  color: var(--color-primary);
  text-wrap: balance;
  margin: 0 0 var(--space-sm);
  line-height: 1.15;
}
.sec-h2-light {
  font-family: var(--font-heading, 'Unbounded', sans-serif);
  font-size: clamp(1.6rem, 3vw, 2.4rem);
  font-weight: 800;
  color: var(--color-secondary);
  text-wrap: balance;
  margin: 0 0 var(--space-sm);
  line-height: 1.15;
}
/* Identity / answer section */
.identity-section {
  padding: var(--space-3xl) 0;
  background: var(--color-bg-alt, #f8f8f6);
}
.identity-grid {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: var(--space-3xl);
  align-items: center;
}
.identity-img-wrap {
  position: relative;
  border-radius: var(--radius-lg);
  overflow: hidden;
  box-shadow: var(--shadow-lg);
}
.identity-img-wrap img {
  width: 100%;
  height: 420px;
  object-fit: cover;
  display: block;
  transition: transform 0.5s;
}
.identity-img-wrap:hover img {
  transform: scale(1.03);
}
.identity-img-badge {
  position: absolute;
  bottom: var(--space-md);
  left: var(--space-md);
  background: var(--color-primary);
  color: var(--color-secondary);
  border-radius: var(--radius);
  padding: var(--space-sm) var(--space-md);
  font-size: 0.82rem;
  font-weight: 700;
  display: flex;
  align-items: center;
  gap: 6px;
}
.identity-img-badge span {
  color: var(--color-accent);
  font-family: var(--font-heading, 'Unbounded', sans-serif);
}
.answer-block {
  font-size: 1rem;
  line-height: 1.78;
  color: var(--color-text);
  border-left: 3px solid var(--color-accent);
  background: rgba(var(--color-accent-rgb), 0.06);
  padding: var(--space-sm) var(--space-md);
  border-radius: 0 var(--radius-sm) var(--radius-sm) 0;
  margin: 0 0 var(--space-lg);
  max-width: 64ch;
}
.prose-block {
  font-size: 0.98rem;
  line-height: 1.78;
  color: var(--color-text);
  max-width: 60ch;
  margin: 0 0 var(--space-md);
}
.stat-row {
  display: flex;
  gap: var(--space-xl);
  margin: var(--space-xl) 0 0;
}
.stat-item {
  display: flex;
  flex-direction: column;
  gap: 4px;
}
.stat-num {
  font-family: var(--font-heading, 'Unbounded', sans-serif);
  font-size: 2.4rem;
  font-weight: 800;
  color: var(--color-accent);
  line-height: 1;
}
.stat-lbl {
  font-size: 0.78rem;
  color: var(--color-text-light);
  text-transform: uppercase;
  letter-spacing: 0.08em;
}
/* Local section */
.local-section {
  padding: var(--space-3xl) 0;
  background: var(--color-bg);
}
.local-grid {
  display: grid;
  grid-template-columns: 1.3fr 1fr;
  gap: var(--space-3xl);
  align-items: start;
}
.local-detail-list {
  display: flex;
  flex-direction: column;
  gap: var(--space-sm);
  list-style: none;
  padding: 0;
  margin: var(--space-lg) 0 0;
}
.local-detail-list li {
  display: flex;
  gap: var(--space-sm);
  align-items: flex-start;
  font-size: 0.95rem;
  line-height: 1.65;
  color: var(--color-text);
}
.ck-icon {
  width: 20px;
  height: 20px;
  border-radius: 50%;
  background: var(--color-accent);
  display: flex;
  align-items: center;
  justify-content: center;
  flex-shrink: 0;
  margin-top: 2px;
}
.ck-icon svg {
  width: 11px;
  height: 11px;
  color: var(--color-primary);
}
.local-sidebar {
  display: flex;
  flex-direction: column;
  gap: var(--space-md);
}
.landmark-card {
  background: var(--color-bg-alt, #f8f8f6);
  border-radius: var(--radius);
  padding: var(--space-md) var(--space-lg);
  border-left: 3px solid var(--color-accent);
  position: relative;
  overflow: hidden;
}
.landmark-card::before {
  content: '';
  position: absolute;
  top: 0;
  right: 0;
  width: 60px;
  height: 100%;
  background: linear-gradient(90deg, transparent, rgba(var(--color-accent-rgb), 0.05));
}
.landmark-name {
  font-family: var(--font-heading, 'Unbounded', sans-serif);
  font-size: 0.9rem;
  font-weight: 700;
  color: var(--color-primary);
  margin: 0 0 4px;
}
.landmark-desc {
  font-size: 0.85rem;
  color: var(--color-text-light);
  line-height: 1.55;
  margin: 0;
}
/* Services strip */
.services-area-section {
  padding: var(--space-3xl) 0;
  background: var(--color-bg-alt, #f8f8f6);
}
.services-strip {
  display: grid;
  grid-template-columns: repeat(5, 1fr);
  gap: var(--space-sm);
  margin-top: var(--space-2xl);
}
.svc-strip-card {
  background: #fff;
  border-radius: var(--radius);
  padding: var(--space-md);
  text-align: center;
  border: 1px solid rgba(0, 0, 0, 0.06);
  box-shadow: var(--shadow-sm);
  transition: transform 0.2s, box-shadow 0.2s;
  display: flex;
  flex-direction: column;
  align-items: center;
  gap: var(--space-sm);
}
.svc-strip-card:hover {
  transform: translateY(-3px);
  box-shadow: var(--shadow-md);
}
.svc-strip-card a {
  display: contents;
  color: inherit;
}
.svc-strip-icon {
  width: 44px;
  height: 44px;
  border-radius: 50%;
  background: rgba(var(--color-accent-rgb), 0.1);
  display: flex;
  align-items: center;
  justify-content: center;
  color: var(--color-accent);
}
.svc-strip-icon svg,
.svc-strip-icon i {
  width: 20px;
  height: 20px;
}
.svc-strip-name {
  font-family: var(--font-heading, 'Unbounded', sans-serif);
  font-size: 0.76rem;
  font-weight: 700;
  color: var(--color-primary);
  line-height: 1.3;
}
/* Why Us — dark section */
.why-section {
  padding: var(--space-3xl) 0;
  background: var(--color-primary);
}
.why-grid {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: var(--space-3xl);
  align-items: center;
}
.why-list {
  display: flex;
  flex-direction: column;
  gap: var(--space-md);
  list-style: none;
  padding: 0;
  margin: var(--space-lg) 0 0;
}
.why-item {
  display: flex;
  gap: var(--space-md);
  align-items: flex-start;
}
.why-icon {
  width: 44px;
  height: 44px;
  border-radius: var(--radius-sm);
  background: rgba(var(--color-accent-rgb), 0.15);
  border: 1px solid rgba(var(--color-accent-rgb), 0.3);
  display: flex;
  align-items: center;
  justify-content: center;
  flex-shrink: 0;
  color: var(--color-accent);
}
.why-icon svg {
  width: 20px;
  height: 20px;
}
.why-item-title {
  font-family: var(--font-heading, 'Unbounded', sans-serif);
  font-size: 0.9rem;
  font-weight: 700;
  color: var(--color-secondary);
  margin: 0 0 4px;
}
.why-item-desc {
  font-size: 0.88rem;
  line-height: 1.65;
  color: rgba(255, 255, 255, 0.62);
  margin: 0;
}
.why-img-wrap {
  border-radius: var(--radius-lg);
  overflow: hidden;
  box-shadow: 0 24px 64px rgba(0, 0, 0, 0.4);
  position: relative;
}
.why-img-wrap img {
  width: 100%;
  height: 460px;
  object-fit: cover;
  display: block;
}
.why-img-overlay {
  position: absolute;
  inset: 0;
  background: linear-gradient(to top, rgba(var(--color-primary-rgb), 0.5) 0%, transparent 60%);
}
/* CTA section */
.cta-section {
  padding: var(--space-3xl) 0;
  background: var(--color-bg);
  text-align: center;
}
.cta-icon-ring {
  width: 72px;
  height: 72px;
  border-radius: 50%;
  background: var(--color-primary);
  display: flex;
  align-items: center;
  justify-content: center;
  margin: 0 auto var(--space-lg);
  color: var(--color-accent);
}
.cta-icon-ring svg {
  width: 30px;
  height: 30px;
}
.cta-subtitle {
  font-size: 1rem;
  line-height: 1.78;
  color: var(--color-text-light);
  max-width: 48ch;
  margin: 0 auto var(--space-2xl);
}
.cta-btn-group {
  display: flex;
  gap: var(--space-md);
  justify-content: center;
  flex-wrap: wrap;
}
.btn-accent-lg {
  display: inline-flex;
  align-items: center;
  gap: 8px;
  background: var(--color-accent);
  color: var(--color-primary);
  font-family: var(--font-heading, 'Unbounded', sans-serif);
  font-size: 0.85rem;
  font-weight: 800;
  padding: 16px 32px;
  border-radius: var(--radius);
  border: 2px solid var(--color-accent);
  transition: all 0.2s;
  text-transform: uppercase;
  letter-spacing: 0.04em;
}
.btn-accent-lg:hover {
  background: #ffbb00;
  border-color: #ffbb00;
  transform: translateY(-2px);
  box-shadow: 0 6px 24px rgba(var(--color-accent-rgb), 0.4);
}
.btn-outline-lg {
  display: inline-flex;
  align-items: center;
  gap: 8px;
  background: transparent;
  color: var(--color-primary);
  font-family: var(--font-heading, 'Unbounded', sans-serif);
  font-size: 0.85rem;
  font-weight: 700;
  padding: 16px 32px;
  border-radius: var(--radius);
  border: 2px solid rgba(0, 0, 0, 0.2);
  transition: all 0.2s;
  text-transform: uppercase;
  letter-spacing: 0.04em;
}
.btn-outline-lg:hover {
  border-color: var(--color-primary);
  background: rgba(0, 0, 0, 0.05);
}
/* Responsive */
@media (max-width: 1100px) {
  .city-hero-inner { grid-template-columns: 1fr; }
  .hero-form-card { display: none; }
  .identity-grid { grid-template-columns: 1fr; }
  .local-grid { grid-template-columns: 1fr; }
  .why-grid { grid-template-columns: 1fr; }
}
@media (max-width: 900px) {
  .services-strip { grid-template-columns: repeat(3, 1fr); }
}
@media (max-width: 600px) {
  .services-strip { grid-template-columns: repeat(2, 1fr); }
  .stat-row { flex-wrap: wrap; }
  .city-hero { min-height: 70vh; }
  .hero-cta-row { flex-direction: column; }
}
</style>

<!-- HERO -->
<section class="city-hero" aria-label="General contractor services in Warrenton, MO">
  <div class="hero-accent-ring" aria-hidden="true"></div>
  <div class="city-hero-inner">
    <div>
      <nav class="hero-breadcrumb" aria-label="Breadcrumb">
        <a href="/">Home</a><span>›</span>
        <a href="/service-areas/">Service Areas</a><span>›</span>
        <span aria-current="page">Warrenton, MO</span>
      </nav>
      <span class="hero-eyebrow-badge">Primary Service Area — Warren County</span>
      <h1>General Contractor in <span class="accent">Warrenton, MO</span> — Local, Licensed & Ready</h1>
      <p class="hero-answer">A&S Contracting Services is based in Warrenton, Missouri — this is our home base. We serve Warren County homeowners with roofing, siding, gutters, windows, drywall, and full interior renovations. Free written estimates for every project near you.</p>
      <div class="hero-trust-row">
        <span class="trust-pill">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
          Licensed &amp; Insured
        </span>
        <span class="trust-pill">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
          Warrenton Based
        </span>
        <span class="trust-pill">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><polyline points="20 6 9 17 4 12"/></svg>
          Free Estimates
        </span>
      </div>
      <div class="hero-cta-row">
        <a href="/contact/" class="btn-primary-city">Get a Free Estimate in Warrenton</a>
        <a href="/services/" class="btn-ghost-city">View All Services</a>
      </div>
    </div>
    <aside class="hero-form-card" aria-label="Quick estimate form">
      <p class="form-card-title">Free Estimate — Warrenton, MO</p>
      <p class="form-card-subtitle">Tell us what you need and we'll schedule a time to come out.</p>
      <form class="city-form" action="<?php echo htmlspecialchars($formAction); ?>" method="POST">
        <input type="text"   name="_honey"            style="display:none !important" tabindex="-1" autocomplete="off" aria-hidden="true">
        <input type="hidden" name="_next"              value="/thank-you">
        <input type="hidden" name="_consent_version"  value="v2.1">
        <input type="hidden" name="_consent_page"     value="<?php echo htmlspecialchars($_SERVER['REQUEST_URI']); ?>">
        <div class="fg"><label for="wt-name">Your Name</label><input type="text" id="wt-name" name="name" placeholder="Jane Smith" required></div>
        <div class="fg"><label for="wt-phone">Phone</label><input type="tel" id="wt-phone" name="phone" placeholder="(573) 555-0100" required></div>
        <div class="fg"><label for="wt-email">Email</label><input type="email" id="wt-email" name="email" placeholder="you@email.com" required></div>
        <div class="fg">
          <label for="wt-service">Service Needed</label>
          <select id="wt-service" name="service">
            <option value="">Select a service</option>
            <?php foreach ($services as $s): ?>
            <option value="<?php echo htmlspecialchars($s['name']); ?>"><?php echo htmlspecialchars($s['name']); ?></option>
            <?php endforeach; ?>
          </select>
        </div>
        <fieldset class="city-form-consent">
          <legend>Communication Consent</legend>
          <label class="consent-row"><input type="checkbox" name="email_opt_in" value="yes"><span><strong>Email (optional):</strong> Receive emails about my inquiry.</span></label>
          <label class="consent-row"><input type="checkbox" name="sms_opt_in" value="yes"><span><strong>SMS (optional):</strong> Receive texts. Msg &amp; data rates apply. Reply STOP to opt out.</span></label>
          <label class="consent-row"><input type="checkbox" name="terms_accepted" value="yes" required><span>I agree to the <a href="/privacy-policy/">Privacy Policy</a> &amp; <a href="/terms/">Terms</a>. <span class="required-star">*</span></span></label>
        </fieldset>
        <button type="submit" class="btn-city-submit">Request My Free Estimate →</button>
      </form>
    </aside>
  </div>
</section>

<div class="div-wave" aria-hidden="true"><svg viewBox="0 0 1440 54" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg"><path d="M0,0 L0,27 Q360,54 720,27 Q1080,0 1440,27 L1440,54 L0,54 Z" fill="#f8f8f6"/></svg></div>

<!-- IDENTITY / ANSWER -->
<section class="identity-section" aria-label="About A&S Contracting in Warrenton">
  <div class="ctr">
    <div class="identity-grid">
      <div class="reveal-scale">
        <div class="identity-img-wrap">
          <img src="<?php echo $bodyPhoto1; ?>" alt="A&S Contracting Services crew working on a Warrenton, MO home" width="760" height="420" loading="lazy">
          <div class="identity-img-badge">
            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
            <span>Based in</span> Warrenton, MO
          </div>
        </div>
      </div>
      <div class="reveal-right">
        <span class="eyebrow">Local Since 2023</span>
        <h2 class="sec-h2">What does it mean to hire a <span style="color:var(--color-accent);">Warrenton-based contractor?</span></h2>
        <div class="answer-block">
          A&S Contracting Services is a licensed and insured general contractor rooted in Warrenton, Missouri. We serve residential and commercial clients throughout Warren County, responding to projects from Old Town Warrenton to the Hawk's Crest and Westwood Hills subdivisions. Same-day or next-day estimates for most Warren County locations.
        </div>
        <p class="prose-block">When you hire A&S for roofing, siding, gutters, or a full interior renovation near Warrenton, you're working with a crew that knows the local building codes, the common weather patterns off I-70, and the materials that hold up to Missouri's freeze-thaw cycle year after year.</p>
        <p class="prose-block">We've completed projects along the Route 47 corridor, in the neighborhoods east of Exit 188, and in the rural properties throughout the Warren County countryside. If you're searching for a contractor near me in Warrenton, MO, A&S is your closest option.</p>
        <div class="stat-row">
          <div class="stat-item">
            <span class="stat-num" data-target="3">0</span>
            <span class="stat-lbl">Years Local</span>
          </div>
          <div class="stat-item">
            <span class="stat-num" data-target="10">0</span>
            <span class="stat-lbl">Services Offered</span>
          </div>
          <div class="stat-item">
            <span class="stat-num" data-target="50">0</span>
            <span class="stat-lbl">Mile Radius</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<div class="div-angle" aria-hidden="true"><svg viewBox="0 0 1440 40" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg"><polygon points="0,40 1440,0 1440,40" fill="#ffffff"/></svg></div>

<!-- LOCAL DETAIL -->
<section class="local-section" aria-label="Warrenton, MO neighborhoods and service details">
  <div class="ctr">
    <div class="local-grid">
      <div class="reveal-left">
        <span class="eyebrow">Warren County Knowledge</span>
        <h2 class="sec-h2">Projects throughout <span style="color:var(--color-accent);">Warrenton's neighborhoods</span></h2>
        <p class="prose-block">Warrenton is the Warren County seat, home to roughly 8,600 residents and a mix of historic in-town properties and newer suburban subdivisions. We work across all of these areas regularly — from the older homes near the Warren County Courthouse to the newer builds in Tara Heights and east of I-70.</p>
        <p class="prose-block">Missouri's climate hits Warren County hard — ice storms in winter, heavy rain and hail in spring, and summer heat that stresses roofing materials and wood trim. We select materials rated for the Midwest's temperature extremes and install them to the manufacturer's specs so they last the full rated life.</p>
        <ul class="local-detail-list">
          <li>
            <span class="ck-icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" aria-hidden="true"><polyline points="20 6 9 17 4 12"/></svg></span>
            Old Town Warrenton historic properties and older homes
          </li>
          <li>
            <span class="ck-icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" aria-hidden="true"><polyline points="20 6 9 17 4 12"/></svg></span>
            Hawk's Crest, Tara Heights, and Westwood Hills subdivisions
          </li>
          <li>
            <span class="ck-icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" aria-hidden="true"><polyline points="20 6 9 17 4 12"/></svg></span>
            Route 47 corridor residential and light commercial
          </li>
          <li>
            <span class="ck-icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" aria-hidden="true"><polyline points="20 6 9 17 4 12"/></svg></span>
            I-70 Exit 188 area properties and rural Warren County homes
          </li>
          <li>
            <span class="ck-icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" aria-hidden="true"><polyline points="20 6 9 17 4 12"/></svg></span>
            Warrenton R-III School District families and homeowners
          </li>
        </ul>
      </div>
      <div class="local-sidebar reveal-right">
        <div class="landmark-card">
          <p class="landmark-name">Warren County Courthouse Area</p>
          <p class="landmark-desc">Older in-town homes near the courthouse often need roofing, window, and exterior upgrades. We handle permit pulls for Warrenton city proper.</p>
        </div>
        <div class="landmark-card">
          <p class="landmark-name">Warren County Fairgrounds</p>
          <p class="landmark-desc">We've worked on properties throughout the surrounding neighborhoods — many homes in this area have wood siding and fascia due for replacement.</p>
        </div>
        <div class="landmark-card">
          <p class="landmark-name">I-70 Corridor (Exit 188)</p>
          <p class="landmark-desc">Newer developments east of I-70 feature newer construction that still needs gutters, siding touch-ups, and window seal repairs as homes settle.</p>
        </div>
        <div class="landmark-card">
          <p class="landmark-name">Warrenton R-III Service Area</p>
          <p class="landmark-desc">Many of our clients are families in the Warrenton school district — we understand the local community and take referrals seriously.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<div class="div-wave" aria-hidden="true"><svg viewBox="0 0 1440 54" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" style="transform:rotate(180deg);"><path d="M0,0 L0,27 Q360,54 720,27 Q1080,0 1440,27 L1440,54 L0,54 Z" fill="#f8f8f6"/></svg></div>

<!-- SERVICES STRIP -->
<section class="services-area-section" aria-label="Services available in Warrenton, MO">
  <div class="ctr">
    <div style="text-align:center;margin-bottom:var(--space-sm);">
      <span class="eyebrow">What We Do in Warrenton</span>
      <h2 class="sec-h2">Every service, available near you in <span style="color:var(--color-accent);">Warrenton, MO</span></h2>
      <div class="answer-block" style="margin:var(--space-md) auto;text-align:left;max-width:64ch;">All ten of A&S Contracting's services are available to Warrenton homeowners — roofing, siding, gutters, soffit, fascia, windows &amp; doors, drywall, interior renovations, exterior work, and full general contracting. No service is region-limited within our territory.</div>
    </div>
    <div class="services-strip">
      <?php
      $icons = ['roofing'=>'home','siding'=>'layers','gutters'=>'droplets','soffit'=>'grid','fascia'=>'ruler','windows-doors'=>'square','full-scale-interior-work'=>'layout-panel-left','exterior-work'=>'hammer','dry-wall'=>'wall-2','general-contracting'=>'hard-hat'];
      foreach ($services as $i => $s):
        $icon = $icons[$s['slug']] ?? 'tool';
      ?>
      <div class="svc-strip-card reveal-up reveal-delay-<?php echo ($i % 4) + 1; ?>">
        <a href="/services/<?php echo htmlspecialchars($s['slug']); ?>/">
          <div class="svc-strip-icon"><i data-lucide="<?php echo $icon; ?>"></i></div>
          <span class="svc-strip-name"><?php echo htmlspecialchars($s['name']); ?></span>
        </a>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<div class="div-curve" aria-hidden="true"><svg viewBox="0 0 1440 54" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg"><path d="M0,54 Q720,0 1440,54 L1440,54 L0,54 Z" fill="var(--color-primary)"/></svg></div>

<!-- WHY A&S IN WARRENTON -->
<section class="why-section" aria-label="Why choose A&S Contracting in Warrenton">
  <div class="ctr">
    <div class="why-grid">
      <div class="reveal-left">
        <span class="eyebrow" style="color:var(--color-accent);">Why A&S in Warren County</span>
        <h2 class="sec-h2-light">Why Warrenton homeowners choose <span style="color:var(--color-accent);">A&S Contracting</span></h2>
        <ul class="why-list">
          <li class="why-item">
            <span class="why-icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg></span>
            <div>
              <p class="why-item-title">Home Base Advantage</p>
              <p class="why-item-desc">We're headquartered in Warrenton — our crew drives less than any competitor, which means faster scheduling, lower overhead, and more availability for follow-up visits if something needs attention post-project.</p>
            </div>
          </li>
          <li class="why-item">
            <span class="why-icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></span>
            <div>
              <p class="why-item-title">Licensed General Contractor — Missouri</p>
              <p class="why-item-desc">Full Missouri GC license with general liability insurance. We pull permits in Warren County and Warrenton city proper — you won't be chasing paperwork after the job is done.</p>
            </div>
          </li>
          <li class="why-item">
            <span class="why-icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><polyline points="20 6 9 17 4 12"/></svg></span>
            <div>
              <p class="why-item-title">Free Written Estimates — No Phone Quotes</p>
              <p class="why-item-desc">Every estimate comes in person after a proper site visit. We measure, inspect, and deliver a written breakdown — no guessing, no vague ranges, no phone estimates that change at job start.</p>
            </div>
          </li>
          <li class="why-item">
            <span class="why-icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg></span>
            <div>
              <p class="why-item-title">3+ Years Serving Warren County</p>
              <p class="why-item-desc">Since 2023, we've built a reputation in Warren County on showing up when promised, finishing on schedule, and standing behind our work. Ask about our projects in your neighborhood.</p>
            </div>
          </li>
        </ul>
      </div>
      <div class="why-img-wrap reveal-right">
        <img src="<?php echo $bodyPhoto2; ?>" alt="A&S Contracting Services completing a project in Warrenton, MO" width="640" height="460" loading="lazy">
        <div class="why-img-overlay"></div>
      </div>
    </div>
  </div>
</section>

<div class="div-angle" aria-hidden="true"><svg viewBox="0 0 1440 40" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg"><polygon points="0,0 1440,40 1440,0" fill="var(--color-primary)"/></svg></div>

<!-- CTA -->
<section class="cta-section" aria-label="Get a free estimate in Warrenton, MO">
  <div class="ctr">
    <div class="cta-icon-ring" aria-hidden="true">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/></svg>
    </div>
    <span class="eyebrow">Warrenton, MO Homeowners</span>
    <h2 class="sec-h2" style="max-width:560px;margin:var(--space-sm) auto var(--space-md);">Get a Free Estimate in <span style="color:var(--color-accent);">Warrenton, MO</span></h2>
    <p class="cta-subtitle">A&S Contracting Services provides free written estimates for all projects in Warrenton and across Warren County. We'll come out, assess the scope, and hand you a written quote — no obligation to move forward.</p>
    <div class="cta-btn-group">
      <a href="/contact/" class="btn-accent-lg">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/></svg>
        Get My Free Estimate
      </a>
      <a href="/service-areas/" class="btn-outline-lg">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
        All Service Areas
      </a>
    </div>
    <p style="margin-top:var(--space-lg);font-size:0.85rem;color:var(--color-text-light);">Last Updated: <?php echo date('F Y'); ?> — Serving Warrenton, MO and all of Warren County.</p>
  </div>
</section>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
</body>
</html>
