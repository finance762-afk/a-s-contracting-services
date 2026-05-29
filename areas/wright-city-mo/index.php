<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
$cityName        = 'Wright City';
$stateAbbr       = 'MO';
$countyName      = 'Warren County';
$citySlug        = 'wright-city-mo';
$pageTitle       = "Contractor in Wright City, MO | A&S Contracting Services | Warren County";
$pageDescription = "Licensed general contractor serving Wright City, MO. Roofing, siding, gutters, windows & interior renovations for Warren County homeowners. Free estimates — A&S Contracting.";
$canonicalUrl    = $siteUrl . '/areas/wright-city-mo/';
$currentPage     = 'service-areas';
$cssVersion      = '2.2';

$pb         = 'https://db.pageone.cloud/storage/v1/object/public/client-assets/a-s-contracting-services/photos/';
$heroPhoto  = $pb . '1779984864659-a47kou-52-Aug_08__2025_00-31-27-YHMr.jpg';
$bodyPhoto1 = $pb . '1779984851004-bey4ix-53-Aug_08__2025_00-54-39-zixD.jpg';
$bodyPhoto2 = $pb . '1779985050122-4csoe0-32-Mar_13__2025_16-36-41-NptX.jpg';
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
                ['@type' => 'ListItem', 'position' => 3, 'name' => 'Wright City, MO'],
            ],
        ],
        [
            '@type'       => 'Service',
            'name'        => 'General Contractor in Wright City, MO',
            'description' => 'Licensed and insured general contractor based in Warrenton, MO serving Wright City and Warren County with roofing, siding, gutters, windows, drywall, and interior renovations.',
            'provider'    => ['@id' => $siteUrl . '/#organization'],
            'areaServed'  => [
                '@type'            => 'City',
                'name'             => 'Wright City',
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
   /areas/wright-city-mo/ — Premium Area Page — A&S Contracting
   Signature technique: I-70 corridor stripe accent + radial glow
   ============================================================ */

.city-hero {
  position: relative;
  min-height: 82vh;
  display: flex;
  align-items: center;
  background-image: url('<?php echo $heroPhoto; ?>');
  background-size: cover;
  background-position: center 40%;
  padding: calc(var(--nav-height, 72px) + var(--space-3xl)) 0 var(--space-3xl);
  overflow: hidden;
}
.city-hero::before {
  content: '';
  position: absolute;
  inset: 0;
  background: linear-gradient(110deg, rgba(var(--color-primary-rgb), 0.95) 0%, rgba(var(--color-primary-rgb), 0.75) 55%, rgba(var(--color-primary-rgb), 0.25) 100%);
  z-index: 1;
}
.city-hero::after {
  content: '';
  position: absolute;
  inset: 0;
  background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 200 200' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.82' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='0.025'/%3E%3C/svg%3E");
  background-size: 200px;
  opacity: 0.05;
  z-index: 2;
  pointer-events: none;
}
/* Signature: I-70 stripe accent */
.city-hero .hero-stripe {
  position: absolute;
  left: 0;
  right: 0;
  bottom: 30%;
  height: 2px;
  background: linear-gradient(90deg, transparent, rgba(var(--color-accent-rgb), 0.4), transparent);
  z-index: 2;
  pointer-events: none;
}
.city-hero .hero-radial {
  position: absolute;
  right: 10%;
  top: 15%;
  width: 380px;
  height: 380px;
  background: radial-gradient(circle, rgba(var(--color-accent-rgb), 0.12) 0%, transparent 70%);
  border-radius: 50%;
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
.hero-breadcrumb {
  display: flex;
  align-items: center;
  gap: var(--space-xs);
  font-size: 0.8rem;
  color: rgba(255, 255, 255, 0.48);
  margin-bottom: var(--space-md);
}
.hero-breadcrumb a { color: rgba(255, 255, 255, 0.48); transition: color 0.2s; }
.hero-breadcrumb a:hover { color: var(--color-accent); }
.hero-breadcrumb span { color: rgba(255, 255, 255, 0.28); }
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
.city-hero h1 .accent { color: var(--color-accent); }
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
.trust-pill svg { width: 13px; height: 13px; color: var(--color-accent); }
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
.btn-ghost-city:hover { border-color: rgba(255,255,255,0.7); background: rgba(255,255,255,0.08); }
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
.city-form .fg { display: flex; flex-direction: column; gap: 4px; }
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
.city-form .fg select:focus { outline: none; border-color: var(--color-accent); }
.city-form-consent {
  border: none; padding: 0; margin: 0;
  display: flex; flex-direction: column; gap: 6px;
}
.city-form-consent legend {
  font-size: 0.74rem; font-weight: 700;
  color: var(--color-text-light); text-transform: uppercase;
  letter-spacing: 0.06em; margin-bottom: 4px;
}
.consent-row { display: flex; gap: 8px; align-items: flex-start; cursor: pointer; }
.consent-row input[type="checkbox"] { width: 15px; height: 15px; flex-shrink: 0; margin-top: 2px; accent-color: var(--color-accent); }
.consent-row span { font-size: 0.76rem; line-height: 1.5; color: var(--color-text-light); }
.consent-row span a { color: var(--color-accent); }
.required-star { color: #c00; font-weight: 700; }
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
.btn-city-submit:hover { background: var(--color-accent); color: var(--color-primary); transform: translateY(-1px); }
.div-wave { display: block; width: 100%; overflow: hidden; line-height: 0; }
.div-wave svg, .div-angle svg, .div-curve svg { display: block; width: 100%; }
.div-angle { display: block; width: 100%; overflow: hidden; line-height: 0; }
.div-curve { display: block; width: 100%; overflow: hidden; line-height: 0; }
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
.identity-section { padding: var(--space-3xl) 0; background: var(--color-bg-alt, #f8f8f6); }
.identity-grid { display: grid; grid-template-columns: 1fr 1fr; gap: var(--space-3xl); align-items: center; }
.identity-img-wrap { position: relative; border-radius: var(--radius-lg); overflow: hidden; box-shadow: var(--shadow-lg); }
.identity-img-wrap img { width: 100%; height: 420px; object-fit: cover; display: block; transition: transform 0.5s; }
.identity-img-wrap:hover img { transform: scale(1.03); }
.identity-img-badge {
  position: absolute; bottom: var(--space-md); left: var(--space-md);
  background: var(--color-primary); color: var(--color-secondary);
  border-radius: var(--radius); padding: var(--space-sm) var(--space-md);
  font-size: 0.82rem; font-weight: 700; display: flex; align-items: center; gap: 6px;
}
.identity-img-badge span { color: var(--color-accent); font-family: var(--font-heading, 'Unbounded', sans-serif); }
.answer-block {
  font-size: 1rem; line-height: 1.78; color: var(--color-text);
  border-left: 3px solid var(--color-accent);
  background: rgba(var(--color-accent-rgb), 0.06);
  padding: var(--space-sm) var(--space-md);
  border-radius: 0 var(--radius-sm) var(--radius-sm) 0;
  margin: 0 0 var(--space-lg);
  max-width: 64ch;
}
.prose-block { font-size: 0.98rem; line-height: 1.78; color: var(--color-text); max-width: 60ch; margin: 0 0 var(--space-md); }
.stat-row { display: flex; gap: var(--space-xl); margin: var(--space-xl) 0 0; }
.stat-item { display: flex; flex-direction: column; gap: 4px; }
.stat-num { font-family: var(--font-heading,'Unbounded',sans-serif); font-size: 2.4rem; font-weight: 800; color: var(--color-accent); line-height: 1; }
.stat-lbl { font-size: 0.78rem; color: var(--color-text-light); text-transform: uppercase; letter-spacing: 0.08em; }
.local-section { padding: var(--space-3xl) 0; background: var(--color-bg); }
.local-grid { display: grid; grid-template-columns: 1.3fr 1fr; gap: var(--space-3xl); align-items: start; }
.local-detail-list { display: flex; flex-direction: column; gap: var(--space-sm); list-style: none; padding: 0; margin: var(--space-lg) 0 0; }
.local-detail-list li { display: flex; gap: var(--space-sm); align-items: flex-start; font-size: 0.95rem; line-height: 1.65; color: var(--color-text); }
.ck-icon { width: 20px; height: 20px; border-radius: 50%; background: var(--color-accent); display: flex; align-items: center; justify-content: center; flex-shrink: 0; margin-top: 2px; }
.ck-icon svg { width: 11px; height: 11px; color: var(--color-primary); }
.local-sidebar { display: flex; flex-direction: column; gap: var(--space-md); }
.landmark-card {
  background: var(--color-bg-alt, #f8f8f6); border-radius: var(--radius);
  padding: var(--space-md) var(--space-lg); border-left: 3px solid var(--color-accent);
  position: relative; overflow: hidden;
}
.landmark-card::before {
  content: ''; position: absolute; top: 0; right: 0;
  width: 60px; height: 100%;
  background: linear-gradient(90deg, transparent, rgba(var(--color-accent-rgb), 0.05));
}
.landmark-name { font-family: var(--font-heading,'Unbounded',sans-serif); font-size: 0.9rem; font-weight: 700; color: var(--color-primary); margin: 0 0 4px; }
.landmark-desc { font-size: 0.85rem; color: var(--color-text-light); line-height: 1.55; margin: 0; }
.services-area-section { padding: var(--space-3xl) 0; background: var(--color-bg-alt,#f8f8f6); }
.services-strip { display: grid; grid-template-columns: repeat(5,1fr); gap: var(--space-sm); margin-top: var(--space-2xl); }
.svc-strip-card {
  background: #fff; border-radius: var(--radius); padding: var(--space-md);
  text-align: center; border: 1px solid rgba(0,0,0,0.06); box-shadow: var(--shadow-sm);
  transition: transform 0.2s, box-shadow 0.2s; display: flex; flex-direction: column; align-items: center; gap: var(--space-sm);
}
.svc-strip-card:hover { transform: translateY(-3px); box-shadow: var(--shadow-md); }
.svc-strip-card a { display: contents; color: inherit; }
.svc-strip-icon { width: 44px; height: 44px; border-radius: 50%; background: rgba(var(--color-accent-rgb),0.1); display: flex; align-items: center; justify-content: center; color: var(--color-accent); }
.svc-strip-icon svg, .svc-strip-icon i { width: 20px; height: 20px; }
.svc-strip-name { font-family: var(--font-heading,'Unbounded',sans-serif); font-size: 0.76rem; font-weight: 700; color: var(--color-primary); line-height: 1.3; }
.why-section { padding: var(--space-3xl) 0; background: var(--color-primary); }
.why-grid { display: grid; grid-template-columns: 1fr 1fr; gap: var(--space-3xl); align-items: center; }
.why-list { display: flex; flex-direction: column; gap: var(--space-md); list-style: none; padding: 0; margin: var(--space-lg) 0 0; }
.why-item { display: flex; gap: var(--space-md); align-items: flex-start; }
.why-icon {
  width: 44px; height: 44px; border-radius: var(--radius-sm);
  background: rgba(var(--color-accent-rgb),0.15); border: 1px solid rgba(var(--color-accent-rgb),0.3);
  display: flex; align-items: center; justify-content: center; flex-shrink: 0; color: var(--color-accent);
}
.why-icon svg { width: 20px; height: 20px; }
.why-item-title { font-family: var(--font-heading,'Unbounded',sans-serif); font-size: 0.9rem; font-weight: 700; color: var(--color-secondary); margin: 0 0 4px; }
.why-item-desc { font-size: 0.88rem; line-height: 1.65; color: rgba(255,255,255,0.62); margin: 0; }
.why-img-wrap { border-radius: var(--radius-lg); overflow: hidden; box-shadow: 0 24px 64px rgba(0,0,0,0.4); position: relative; }
.why-img-wrap img { width: 100%; height: 460px; object-fit: cover; display: block; }
.why-img-overlay { position: absolute; inset: 0; background: linear-gradient(to top, rgba(var(--color-primary-rgb),0.5) 0%, transparent 60%); }
.cta-section { padding: var(--space-3xl) 0; background: var(--color-bg); text-align: center; }
.cta-icon-ring { width: 72px; height: 72px; border-radius: 50%; background: var(--color-primary); display: flex; align-items: center; justify-content: center; margin: 0 auto var(--space-lg); color: var(--color-accent); }
.cta-icon-ring svg { width: 30px; height: 30px; }
.cta-subtitle { font-size: 1rem; line-height: 1.78; color: var(--color-text-light); max-width: 48ch; margin: 0 auto var(--space-2xl); }
.cta-btn-group { display: flex; gap: var(--space-md); justify-content: center; flex-wrap: wrap; }
.btn-accent-lg {
  display: inline-flex; align-items: center; gap: 8px; background: var(--color-accent);
  color: var(--color-primary); font-family: var(--font-heading,'Unbounded',sans-serif);
  font-size: 0.85rem; font-weight: 800; padding: 16px 32px; border-radius: var(--radius);
  border: 2px solid var(--color-accent); transition: all 0.2s; text-transform: uppercase; letter-spacing: 0.04em;
}
.btn-accent-lg:hover { background: #ffbb00; border-color: #ffbb00; transform: translateY(-2px); box-shadow: 0 6px 24px rgba(var(--color-accent-rgb),0.4); }
.btn-outline-lg {
  display: inline-flex; align-items: center; gap: 8px; background: transparent;
  color: var(--color-primary); font-family: var(--font-heading,'Unbounded',sans-serif);
  font-size: 0.85rem; font-weight: 700; padding: 16px 32px; border-radius: var(--radius);
  border: 2px solid rgba(0,0,0,0.2); transition: all 0.2s; text-transform: uppercase; letter-spacing: 0.04em;
}
.btn-outline-lg:hover { border-color: var(--color-primary); background: rgba(0,0,0,0.05); }
@media (max-width: 1100px) {
  .city-hero-inner { grid-template-columns: 1fr; }
  .hero-form-card { display: none; }
  .identity-grid { grid-template-columns: 1fr; }
  .local-grid { grid-template-columns: 1fr; }
  .why-grid { grid-template-columns: 1fr; }
}
@media (max-width: 900px) { .services-strip { grid-template-columns: repeat(3,1fr); } }
@media (max-width: 600px) {
  .services-strip { grid-template-columns: repeat(2,1fr); }
  .stat-row { flex-wrap: wrap; }
  .city-hero { min-height: 70vh; }
  .hero-cta-row { flex-direction: column; }
}
</style>

<!-- HERO -->
<section class="city-hero" aria-label="General contractor services in Wright City, MO">
  <div class="hero-stripe" aria-hidden="true"></div>
  <div class="hero-radial" aria-hidden="true"></div>
  <div class="city-hero-inner">
    <div>
      <nav class="hero-breadcrumb" aria-label="Breadcrumb">
        <a href="/">Home</a><span>›</span>
        <a href="/service-areas/">Service Areas</a><span>›</span>
        <span aria-current="page">Wright City, MO</span>
      </nav>
      <span class="hero-eyebrow-badge">Warren County — 10 Miles from Warrenton</span>
      <h1>General Contractor in <span class="accent">Wright City, MO</span> — Warren County's Fastest Response</h1>
      <p class="hero-answer">A&S Contracting Services serves Wright City from our Warrenton base — just 10 miles west on I-70. Roofing, siding, gutters, windows, drywall, and full interior renovations for Wright City homeowners. Free estimates for every project in Warren County.</p>
      <div class="hero-trust-row">
        <span class="trust-pill">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
          Licensed &amp; Insured
        </span>
        <span class="trust-pill">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
          10 Miles Away
        </span>
        <span class="trust-pill">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><polyline points="20 6 9 17 4 12"/></svg>
          Free Estimates
        </span>
      </div>
      <div class="hero-cta-row">
        <a href="/contact/" class="btn-primary-city">Get a Free Estimate in Wright City</a>
        <a href="/services/" class="btn-ghost-city">View All Services</a>
      </div>
    </div>
    <aside class="hero-form-card" aria-label="Quick estimate form">
      <p class="form-card-title">Free Estimate — Wright City, MO</p>
      <p class="form-card-subtitle">We're 10 miles away. Tell us your project and we'll schedule fast.</p>
      <form class="city-form" action="<?php echo htmlspecialchars($formAction); ?>" method="POST">
        <input type="text"   name="_honey"            style="display:none !important" tabindex="-1" autocomplete="off" aria-hidden="true">
        <input type="hidden" name="_next"              value="/thank-you">
        <input type="hidden" name="_consent_version"  value="v2.1">
        <input type="hidden" name="_consent_page"     value="<?php echo htmlspecialchars($_SERVER['REQUEST_URI']); ?>">
        <div class="fg"><label for="wc-name">Your Name</label><input type="text" id="wc-name" name="name" placeholder="Jane Smith" required></div>
        <div class="fg"><label for="wc-phone">Phone</label><input type="tel" id="wc-phone" name="phone" placeholder="(636) 555-0100" required></div>
        <div class="fg"><label for="wc-email">Email</label><input type="email" id="wc-email" name="email" placeholder="you@email.com" required></div>
        <div class="fg">
          <label for="wc-service">Service Needed</label>
          <select id="wc-service" name="service">
            <option value="">Select a service</option>
            <?php foreach ($services as $s): ?>
            <option value="<?php echo htmlspecialchars($s['name']); ?>"><?php echo htmlspecialchars($s['name']); ?></option>
            <?php endforeach; ?>
          </select>
        </div>
        <fieldset class="city-form-consent">
          <legend>Communication Consent</legend>
          <label class="consent-row"><input type="checkbox" name="email_opt_in" value="yes"><span><strong>Email (optional):</strong> Receive emails about my inquiry.</span></label>
          <label class="consent-row"><input type="checkbox" name="sms_opt_in" value="yes"><span><strong>SMS (optional):</strong> Receive texts. Msg &amp; data rates apply. Reply STOP.</span></label>
          <label class="consent-row"><input type="checkbox" name="terms_accepted" value="yes" required><span>I agree to the <a href="/privacy-policy/">Privacy Policy</a> &amp; <a href="/terms/">Terms</a>. <span class="required-star">*</span></span></label>
        </fieldset>
        <button type="submit" class="btn-city-submit">Request My Free Estimate →</button>
      </form>
    </aside>
  </div>
</section>

<div class="div-wave" aria-hidden="true"><svg viewBox="0 0 1440 54" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg"><path d="M0,0 L0,27 Q360,54 720,27 Q1080,0 1440,27 L1440,54 L0,54 Z" fill="#f8f8f6"/></svg></div>

<!-- IDENTITY / ANSWER -->
<section class="identity-section" aria-label="About A&S Contracting in Wright City">
  <div class="ctr">
    <div class="identity-grid">
      <div class="reveal-scale">
        <div class="identity-img-wrap">
          <img src="<?php echo $bodyPhoto1; ?>" alt="A&S Contracting Services crew working on a Wright City, MO home" width="760" height="420" loading="lazy">
          <div class="identity-img-badge">
            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
            <span>10 miles</span> from Warrenton
          </div>
        </div>
      </div>
      <div class="reveal-right">
        <span class="eyebrow">Warren County — Wright City</span>
        <h2 class="sec-h2">Why call a Warrenton GC for your <span style="color:var(--color-accent);">Wright City home?</span></h2>
        <div class="answer-block">
          A&S Contracting Services is a licensed and insured general contractor based in Warrenton, MO — 10 miles west of Wright City on I-70. We serve Wright City homeowners with roofing, siding, gutters, windows, drywall, and full interior renovations. We respond to Wright City project requests within 2–4 business days for estimates.
        </div>
        <p class="prose-block">Wright City has grown fast along the I-70 corridor, with newer subdivisions near Exit 203 and established homes south of Old Route B. We work throughout these neighborhoods — repairing hail-damaged roofs from spring storms, replacing aging vinyl siding, and installing seamless gutters on homes that have outgrown their original systems.</p>
        <p class="prose-block">As a Missouri-licensed general contractor, we handle permit pulls for Wright City projects and coordinate across all trades. One crew, one call, full scope — that's why Wright City homeowners searching for a contractor near me on I-70 call A&S first.</p>
        <div class="stat-row">
          <div class="stat-item">
            <span class="stat-num" data-target="10">0</span>
            <span class="stat-lbl">Miles Away</span>
          </div>
          <div class="stat-item">
            <span class="stat-num" data-target="10">0</span>
            <span class="stat-lbl">Services Offered</span>
          </div>
          <div class="stat-item">
            <span class="stat-num" data-target="2">0</span>
            <span class="stat-lbl">Day Estimate Window</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<div class="div-angle" aria-hidden="true"><svg viewBox="0 0 1440 40" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg"><polygon points="0,40 1440,0 1440,40" fill="#ffffff"/></svg></div>

<!-- LOCAL DETAIL -->
<section class="local-section" aria-label="Wright City, MO neighborhoods and local knowledge">
  <div class="ctr">
    <div class="local-grid">
      <div class="reveal-left">
        <span class="eyebrow">Wright City, Warren County</span>
        <h2 class="sec-h2">Local knowledge for <span style="color:var(--color-accent);">Wright City's growing neighborhoods</span></h2>
        <p class="prose-block">Wright City sits at Exit 203 on I-70, about midway between Warrenton and Wentzville. The town has seen significant residential growth over the past decade, attracting families who want Warren County's quieter pace with easy I-70 access to the St. Louis metro.</p>
        <p class="prose-block">That rapid growth means a lot of homes built in the 2010s that are now reaching the point where roofing, windows, and exterior systems need attention. We know how these builds were put together, and we know which systems are due for an upgrade.</p>
        <ul class="local-detail-list">
          <li>
            <span class="ck-icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" aria-hidden="true"><polyline points="20 6 9 17 4 12"/></svg></span>
            Exit 203 corridor and I-70 frontage road properties
          </li>
          <li>
            <span class="ck-icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" aria-hidden="true"><polyline points="20 6 9 17 4 12"/></svg></span>
            Subdivisions along Old Route B and Pinckney Road
          </li>
          <li>
            <span class="ck-icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" aria-hidden="true"><polyline points="20 6 9 17 4 12"/></svg></span>
            Wright City R-II School District family homes
          </li>
          <li>
            <span class="ck-icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" aria-hidden="true"><polyline points="20 6 9 17 4 12"/></svg></span>
            Rural Warren County properties north and south of Wright City
          </li>
          <li>
            <span class="ck-icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" aria-hidden="true"><polyline points="20 6 9 17 4 12"/></svg></span>
            Hail and storm damage repair throughout the area (spring priority)
          </li>
        </ul>
      </div>
      <div class="local-sidebar reveal-right">
        <div class="landmark-card">
          <p class="landmark-name">Exit 203 / I-70 Corridor</p>
          <p class="landmark-desc">The most active residential growth zone in Wright City. Newer homes here often need gutter upgrades and siding attention as warranties expire.</p>
        </div>
        <div class="landmark-card">
          <p class="landmark-name">Old Route B Neighborhoods</p>
          <p class="landmark-desc">Established homes south of downtown Wright City. Many have original roofing systems and wood fascia that benefit from our exterior renovation packages.</p>
        </div>
        <div class="landmark-card">
          <p class="landmark-name">Wright City R-II Schools Area</p>
          <p class="landmark-desc">Family-focused neighborhood around the school campus — we've completed multiple roofing and siding jobs for local families in this part of town.</p>
        </div>
        <div class="landmark-card">
          <p class="landmark-name">Rural Warren County Properties</p>
          <p class="landmark-desc">Acreage homes and rural properties north and south of Wright City — we handle larger-scale exterior and roofing work on outbuildings and main residences.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<div class="div-wave" aria-hidden="true"><svg viewBox="0 0 1440 54" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" style="transform:rotate(180deg);"><path d="M0,0 L0,27 Q360,54 720,27 Q1080,0 1440,27 L1440,54 L0,54 Z" fill="#f8f8f6"/></svg></div>

<!-- SERVICES STRIP -->
<section class="services-area-section" aria-label="Services available in Wright City, MO">
  <div class="ctr">
    <div style="text-align:center;margin-bottom:var(--space-sm);">
      <span class="eyebrow">Available in Wright City</span>
      <h2 class="sec-h2">All 10 services available to <span style="color:var(--color-accent);">Wright City, MO homeowners</span></h2>
      <div class="answer-block" style="margin:var(--space-md) auto;text-align:left;max-width:64ch;">Every A&S Contracting service is available in Wright City — roofing, siding, gutters, soffit, fascia, windows &amp; doors, drywall, interior renovations, exterior work, and general contracting. Distance from Warrenton doesn't change pricing or availability.</div>
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

<!-- WHY A&S -->
<section class="why-section" aria-label="Why choose A&S Contracting in Wright City">
  <div class="ctr">
    <div class="why-grid">
      <div class="reveal-left">
        <span class="eyebrow" style="color:var(--color-accent);">Why A&S for Wright City</span>
        <h2 class="sec-h2-light">What sets A&S apart for <span style="color:var(--color-accent);">Wright City projects?</span></h2>
        <ul class="why-list">
          <li class="why-item">
            <span class="why-icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg></span>
            <div>
              <p class="why-item-title">10-Mile Proximity — Fast Scheduling</p>
              <p class="why-item-desc">At 10 miles from our Warrenton shop, Wright City is one of our closest service areas. We can often schedule estimates within 2–3 days and start work faster than contractors driving in from St. Charles County.</p>
            </div>
          </li>
          <li class="why-item">
            <span class="why-icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></span>
            <div>
              <p class="why-item-title">Missouri Licensed — Warren County Codes</p>
              <p class="why-item-desc">We're licensed as a Missouri general contractor and familiar with Warren County permit requirements. We handle permit pulls for Wright City projects so you don't need to coordinate with the county yourself.</p>
            </div>
          </li>
          <li class="why-item">
            <span class="why-icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/></svg></span>
            <div>
              <p class="why-item-title">Written Estimates — No Phone Guesses</p>
              <p class="why-item-desc">Every estimate is in-person and written. We visit your Wright City property, measure the scope, identify what needs attention, and hand you a detailed breakdown before you make any decision.</p>
            </div>
          </li>
          <li class="why-item">
            <span class="why-icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg></span>
            <div>
              <p class="why-item-title">Storm Damage Priority</p>
              <p class="why-item-desc">Warren County sees serious spring hail and wind storms. When storm damage hits Wright City, we prioritize the area for rapid assessment — temporary waterproofing same or next day for active leaks.</p>
            </div>
          </li>
        </ul>
      </div>
      <div class="why-img-wrap reveal-right">
        <img src="<?php echo $bodyPhoto2; ?>" alt="A&S Contracting Services crew on a Wright City, MO project" width="640" height="460" loading="lazy">
        <div class="why-img-overlay"></div>
      </div>
    </div>
  </div>
</section>

<div class="div-angle" aria-hidden="true"><svg viewBox="0 0 1440 40" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg"><polygon points="0,0 1440,40 1440,0" fill="var(--color-primary)"/></svg></div>

<!-- CTA -->
<section class="cta-section" aria-label="Get a free estimate in Wright City, MO">
  <div class="ctr">
    <div class="cta-icon-ring" aria-hidden="true">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/></svg>
    </div>
    <span class="eyebrow">Wright City, MO Homeowners</span>
    <h2 class="sec-h2" style="max-width:560px;margin:var(--space-sm) auto var(--space-md);">Get a Free Estimate in <span style="color:var(--color-accent);">Wright City, MO</span></h2>
    <p class="cta-subtitle">A&S Contracting is 10 miles away in Warrenton. Submit your request and we'll confirm your project scope, schedule an on-site estimate, and deliver a written quote — no obligation.</p>
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
    <p style="margin-top:var(--space-lg);font-size:0.85rem;color:var(--color-text-light);">Last Updated: <?php echo date('F Y'); ?> — Serving Wright City, MO and Warren County.</p>
  </div>
</section>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
</body>
</html>
