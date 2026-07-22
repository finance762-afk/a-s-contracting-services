<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
$cityName        = 'Foristell';
$stateAbbr       = 'MO';
$countyName      = 'Warren County';
$citySlug        = 'foristell-mo';
$pageTitle       = "Contractor in Foristell, MO | A&S Contracting Services | Warren County";
$pageDescription = "Licensed general contractor serving Foristell, MO near Exit 214 on I-70. Roofing, siding, gutters, windows & interior work for Warren and St. Charles county homes. Free estimates.";
$canonicalUrl    = $siteUrl . '/areas/foristell-mo/';
$currentPage     = 'service-areas';
$cssVersion      = '5';

$pb         = 'https://db.pageone.cloud/storage/v1/object/public/client-assets/a-s-contracting-services/photos/';
$heroPhoto  = $pb . '1779985052606-0c7fr0-64-Jun_03__2025_18-42-44-7JBx.jpg';
$bodyPhoto1 = $pb . '1779984974577-v2hb5z-49-Aug_08__2025_00-08-39-mFui.jpg';
$bodyPhoto2 = $pb . '1779985122105-liao15-14-Mar_19__2026_13-58-09-spf4.jpg';
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
                ['@type' => 'ListItem', 'position' => 3, 'name' => 'Foristell, MO'],
            ],
        ],
        [
            '@type'       => 'Service',
            'name'        => 'General Contractor in Foristell, MO',
            'description' => 'Licensed general contractor based in Warrenton, MO serving Foristell and the Warren/St. Charles county line area with roofing, siding, gutters, windows, drywall, and interior renovations.',
            'provider'    => ['@id' => $siteUrl . '/#organization'],
            'areaServed'  => [
                '@type'            => 'City',
                'name'             => 'Foristell',
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
   /areas/foristell-mo/ — Premium Area Page — A&S Contracting
   Signature technique: geometric corner bracket accent — modern growth-corridor aesthetic
   ============================================================ */

.city-hero {
  position: relative; min-height: 82vh; display: flex; align-items: center;
  background-image: url('<?php echo $heroPhoto; ?>');
  background-size: cover; background-position: center 38%;
  padding: calc(var(--nav-height,72px) + var(--space-3xl)) 0 var(--space-3xl);
  overflow: hidden;
}
.city-hero::before {
  content: ''; position: absolute; inset: 0;
  background: linear-gradient(112deg, rgba(var(--color-primary-rgb),0.96) 0%, rgba(var(--color-primary-rgb),0.74) 50%, rgba(var(--color-primary-rgb),0.14) 100%);
  z-index: 1;
}
.city-hero::after {
  content: ''; position: absolute; inset: 0;
  background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 200 200' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.85' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='0.025'/%3E%3C/svg%3E");
  background-size: 200px; opacity: 0.05; z-index: 2; pointer-events: none;
}
/* Signature: corner bracket geometric accents — growth corridor modern feel */
.city-hero .hero-bracket-tl {
  position: absolute; top: calc(var(--nav-height,72px) + 20px); right: 8%;
  width: 120px; height: 120px; z-index: 3; pointer-events: none;
  border-top: 2px solid rgba(var(--color-accent-rgb),0.35);
  border-left: 2px solid rgba(var(--color-accent-rgb),0.35);
}
.city-hero .hero-bracket-br {
  position: absolute; bottom: 60px; right: 12%;
  width: 80px; height: 80px; z-index: 3; pointer-events: none;
  border-bottom: 2px solid rgba(var(--color-accent-rgb),0.2);
  border-right: 2px solid rgba(var(--color-accent-rgb),0.2);
}
.city-hero .hero-bracket-tl::before {
  content: '';
  position: absolute;
  top: 24px;
  left: 24px;
  right: -24px;
  bottom: -24px;
  border-top: 1px solid rgba(var(--color-accent-rgb),0.12);
  border-left: 1px solid rgba(var(--color-accent-rgb),0.12);
}
.city-hero-inner {
  position: relative; z-index: 3; max-width: var(--max-width,1280px); margin: 0 auto;
  padding: 0 var(--space-lg); display: grid; grid-template-columns: 1fr 380px;
  gap: var(--space-2xl); align-items: center; width: 100%;
}
.hero-breadcrumb {
  display: flex; align-items: center; gap: var(--space-xs);
  font-size: 0.8rem; color: rgba(255,255,255,0.48); margin-bottom: var(--space-md);
}
.hero-breadcrumb a { color: rgba(255,255,255,0.48); transition: color 0.2s; }
.hero-breadcrumb a:hover { color: var(--color-accent); }
.hero-breadcrumb span { color: rgba(255,255,255,0.28); }
.hero-eyebrow-badge {
  display: inline-flex; align-items: center; gap: var(--space-xs);
  background: rgba(var(--color-accent-rgb),0.15); border: 1px solid rgba(var(--color-accent-rgb),0.45);
  color: var(--color-accent); font-size: 0.76rem; font-weight: 700;
  letter-spacing: 0.12em; text-transform: uppercase; padding: 5px 12px;
  border-radius: var(--radius-sm); margin-bottom: var(--space-md);
}
.city-hero h1 {
  font-family: var(--font-heading,'Unbounded',sans-serif);
  font-size: clamp(2rem,4vw,3.2rem); font-weight: 800; line-height: 1.08;
  text-wrap: balance; color: var(--color-secondary); margin: 0 0 var(--space-md);
}
.city-hero h1 .accent { color: var(--color-accent); }
.hero-answer {
  font-size: 1.05rem; line-height: 1.78; color: rgba(255,255,255,0.76);
  max-width: 52ch; margin: 0 0 var(--space-xl);
}
.hero-trust-row { display: flex; gap: var(--space-md); flex-wrap: wrap; margin-bottom: var(--space-xl); }
.trust-pill {
  display: inline-flex; align-items: center; gap: 6px;
  background: rgba(255,255,255,0.1); border: 1px solid rgba(255,255,255,0.18);
  color: rgba(255,255,255,0.88); font-size: 0.82rem; font-weight: 600;
  padding: 6px 14px; border-radius: 100px;
}
.trust-pill svg { width: 13px; height: 13px; color: var(--color-accent); }
.hero-cta-row { display: flex; gap: var(--space-md); flex-wrap: wrap; }
.btn-primary-city {
  display: inline-flex; align-items: center; gap: 8px;
  background: var(--color-accent); color: var(--color-primary);
  font-family: var(--font-heading,'Unbounded',sans-serif); font-size: 0.82rem;
  font-weight: 800; padding: 14px 28px; border-radius: var(--radius);
  border: 2px solid var(--color-accent); transition: all 0.2s;
  text-transform: uppercase; letter-spacing: 0.04em;
}
.btn-primary-city:hover {
  background: #ffbb00; border-color: #ffbb00; transform: translateY(-2px);
  box-shadow: 0 6px 20px rgba(var(--color-accent-rgb),0.4);
}
.btn-ghost-city {
  display: inline-flex; align-items: center; gap: 8px;
  background: transparent; color: var(--color-secondary);
  font-family: var(--font-heading,'Unbounded',sans-serif); font-size: 0.82rem;
  font-weight: 700; padding: 14px 28px; border-radius: var(--radius);
  border: 2px solid rgba(255,255,255,0.3); transition: all 0.2s;
  text-transform: uppercase; letter-spacing: 0.04em;
}
.btn-ghost-city:hover { border-color: rgba(255,255,255,0.7); background: rgba(255,255,255,0.08); }
.hero-form-card {
  background: rgba(255,255,255,0.97); border-radius: var(--radius-lg);
  padding: var(--space-xl); box-shadow: 0 24px 64px rgba(0,0,0,0.35);
}
.form-card-title {
  font-family: var(--font-heading,'Unbounded',sans-serif); font-size: 1rem;
  font-weight: 800; color: var(--color-primary); margin: 0 0 var(--space-sm);
}
.form-card-subtitle {
  font-size: 0.82rem; color: var(--color-text-light);
  margin: 0 0 var(--space-md); line-height: 1.5;
}
.city-form { display: flex; flex-direction: column; gap: var(--space-sm); }
.city-form .fg { display: flex; flex-direction: column; gap: 4px; }
.city-form .fg label {
  font-size: 0.76rem; font-weight: 600; color: var(--color-text-light);
  text-transform: uppercase; letter-spacing: 0.06em;
}
.city-form .fg input,
.city-form .fg select {
  width: 100%; padding: 10px 14px; border: 1.5px solid var(--color-border,#e2e2e2);
  border-radius: var(--radius-sm); font-size: 0.9rem; color: var(--color-text);
  background: var(--color-bg,#fff); transition: border-color 0.2s;
  font-family: var(--font-body,'Inter',sans-serif);
}
.city-form .fg input:focus,
.city-form .fg select:focus { outline: none; border-color: var(--color-accent); }
.city-form-consent {
  border: none; padding: 0; margin: 0;
  display: flex; flex-direction: column; gap: 6px;
}
.city-form-consent legend {
  font-size: 0.74rem; font-weight: 700; color: var(--color-text-light);
  text-transform: uppercase; letter-spacing: 0.06em; margin-bottom: 4px;
}
.consent-row { display: flex; gap: 8px; align-items: flex-start; cursor: pointer; }
.consent-row input[type="checkbox"] {
  width: 15px; height: 15px; flex-shrink: 0; margin-top: 2px;
  accent-color: var(--color-accent);
}
.consent-row span { font-size: 0.76rem; line-height: 1.5; color: var(--color-text-light); }
.consent-row span a { color: var(--color-accent); }
.required-star { color: #c00; font-weight: 700; }
.btn-city-submit {
  width: 100%; background: var(--color-primary); color: var(--color-secondary);
  font-family: var(--font-heading,'Unbounded',sans-serif); font-size: 0.82rem;
  font-weight: 800; padding: 14px; border: none; border-radius: var(--radius);
  cursor: pointer; transition: all 0.2s; letter-spacing: 0.04em; text-transform: uppercase;
}
.btn-city-submit:hover { background: var(--color-accent); color: var(--color-primary); transform: translateY(-1px); }
.div-wave { display: block; width: 100%; overflow: hidden; line-height: 0; }
.div-wave svg { display: block; width: 100%; }
.div-angle { display: block; width: 100%; overflow: hidden; line-height: 0; }
.div-angle svg { display: block; width: 100%; }
.div-curve { display: block; width: 100%; overflow: hidden; line-height: 0; }
.div-curve svg { display: block; width: 100%; }
.ctr { max-width: var(--max-width,1280px); margin: 0 auto; padding: 0 var(--space-lg); }
.eyebrow {
  display: inline-block; font-size: 0.74rem; font-weight: 700;
  letter-spacing: 0.14em; text-transform: uppercase; color: var(--color-accent);
  margin-bottom: var(--space-sm);
}
.sec-h2 {
  font-family: var(--font-heading,'Unbounded',sans-serif);
  font-size: clamp(1.6rem,3vw,2.4rem); font-weight: 800; color: var(--color-primary);
  text-wrap: balance; margin: 0 0 var(--space-sm); line-height: 1.15;
}
.sec-h2-light {
  font-family: var(--font-heading,'Unbounded',sans-serif);
  font-size: clamp(1.6rem,3vw,2.4rem); font-weight: 800; color: var(--color-secondary);
  text-wrap: balance; margin: 0 0 var(--space-sm); line-height: 1.15;
}
.identity-section { padding: var(--space-3xl) 0; background: var(--color-bg-alt,#f8f8f6); }
.identity-grid { display: grid; grid-template-columns: 1fr 1fr; gap: var(--space-3xl); align-items: center; }
.identity-img-wrap {
  position: relative; border-radius: var(--radius-lg);
  overflow: hidden; box-shadow: var(--shadow-lg);
}
.identity-img-wrap img {
  width: 100%; height: 420px; object-fit: cover; display: block; transition: transform 0.5s;
}
.identity-img-wrap:hover img { transform: scale(1.03); }
.identity-img-badge {
  position: absolute; bottom: var(--space-md); left: var(--space-md);
  background: var(--color-primary); color: var(--color-secondary);
  border-radius: var(--radius); padding: var(--space-sm) var(--space-md);
  font-size: 0.82rem; font-weight: 700; display: flex; align-items: center; gap: 6px;
}
.identity-img-badge span { color: var(--color-accent); font-family: var(--font-heading,'Unbounded',sans-serif); }
.answer-block {
  font-size: 1rem; line-height: 1.78; color: var(--color-text);
  border-left: 3px solid var(--color-accent);
  background: rgba(var(--color-accent-rgb),0.06);
  padding: var(--space-sm) var(--space-md);
  border-radius: 0 var(--radius-sm) var(--radius-sm) 0;
  margin: 0 0 var(--space-lg); max-width: 64ch;
}
.prose-block { font-size: 0.98rem; line-height: 1.78; color: var(--color-text); max-width: 60ch; margin: 0 0 var(--space-md); }
.stat-row { display: flex; gap: var(--space-xl); margin: var(--space-xl) 0 0; }
.stat-item { display: flex; flex-direction: column; gap: 4px; }
.stat-num {
  font-family: var(--font-heading,'Unbounded',sans-serif); font-size: 2.4rem;
  font-weight: 800; color: var(--color-accent); line-height: 1;
}
.stat-lbl { font-size: 0.78rem; color: var(--color-text-light); text-transform: uppercase; letter-spacing: 0.08em; }
.local-section { padding: var(--space-3xl) 0; background: var(--color-bg); }
.local-grid { display: grid; grid-template-columns: 1.3fr 1fr; gap: var(--space-3xl); align-items: start; }
.local-detail-list {
  display: flex; flex-direction: column; gap: var(--space-sm);
  list-style: none; padding: 0; margin: var(--space-lg) 0 0;
}
.local-detail-list li {
  display: flex; gap: var(--space-sm); align-items: flex-start;
  font-size: 0.95rem; line-height: 1.65; color: var(--color-text);
}
.ck-icon {
  width: 20px; height: 20px; border-radius: 50%; background: var(--color-accent);
  display: flex; align-items: center; justify-content: center; flex-shrink: 0; margin-top: 2px;
}
.ck-icon svg { width: 11px; height: 11px; color: var(--color-primary); }
.local-sidebar { display: flex; flex-direction: column; gap: var(--space-md); }
.landmark-card {
  background: var(--color-bg-alt,#f8f8f6); border-radius: var(--radius);
  padding: var(--space-md) var(--space-lg); border-left: 3px solid var(--color-accent);
  position: relative; overflow: hidden;
}
.landmark-card::before {
  content: ''; position: absolute; top: 0; right: 0; width: 60px; height: 100%;
  background: linear-gradient(90deg,transparent,rgba(var(--color-accent-rgb),0.05));
}
.landmark-name {
  font-family: var(--font-heading,'Unbounded',sans-serif); font-size: 0.9rem;
  font-weight: 700; color: var(--color-primary); margin: 0 0 4px;
}
.landmark-desc { font-size: 0.85rem; color: var(--color-text-light); line-height: 1.55; margin: 0; }
.services-area-section { padding: var(--space-3xl) 0; background: var(--color-bg-alt,#f8f8f6); }
.services-strip {
  display: grid; grid-template-columns: repeat(5,1fr); gap: var(--space-sm); margin-top: var(--space-2xl);
}
.svc-strip-card {
  background: #fff; border-radius: var(--radius); padding: var(--space-md); text-align: center;
  border: 1px solid rgba(0,0,0,0.06); box-shadow: var(--shadow-sm);
  transition: transform 0.2s,box-shadow 0.2s;
  display: flex; flex-direction: column; align-items: center; gap: var(--space-sm);
}
.svc-strip-card:hover { transform: translateY(-3px); box-shadow: var(--shadow-md); }
.svc-strip-card a { display: contents; color: inherit; }
.svc-strip-icon {
  width: 44px; height: 44px; border-radius: 50%;
  background: rgba(var(--color-accent-rgb),0.1);
  display: flex; align-items: center; justify-content: center; color: var(--color-accent);
}
.svc-strip-icon svg, .svc-strip-icon i { width: 20px; height: 20px; }
.svc-strip-name {
  font-family: var(--font-heading,'Unbounded',sans-serif); font-size: 0.76rem;
  font-weight: 700; color: var(--color-primary); line-height: 1.3;
}
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
.why-item-title {
  font-family: var(--font-heading,'Unbounded',sans-serif); font-size: 0.9rem;
  font-weight: 700; color: var(--color-secondary); margin: 0 0 4px;
}
.why-item-desc { font-size: 0.88rem; line-height: 1.65; color: rgba(255,255,255,0.62); margin: 0; }
.why-img-wrap {
  border-radius: var(--radius-lg); overflow: hidden;
  box-shadow: 0 24px 64px rgba(0,0,0,0.4); position: relative;
}
.why-img-wrap img { width: 100%; height: 460px; object-fit: cover; display: block; }
.why-img-overlay {
  position: absolute; inset: 0;
  background: linear-gradient(to top,rgba(var(--color-primary-rgb),0.5) 0%,transparent 60%);
}
.cta-section { padding: var(--space-3xl) 0; background: var(--color-bg); text-align: center; }
.cta-icon-ring {
  width: 72px; height: 72px; border-radius: 50%; background: var(--color-primary);
  display: flex; align-items: center; justify-content: center; margin: 0 auto var(--space-lg);
  color: var(--color-accent);
}
.cta-icon-ring svg { width: 30px; height: 30px; }
.cta-subtitle {
  font-size: 1rem; line-height: 1.78; color: var(--color-text-light);
  max-width: 48ch; margin: 0 auto var(--space-2xl);
}
.cta-btn-group { display: flex; gap: var(--space-md); justify-content: center; flex-wrap: wrap; }
.btn-accent-lg {
  display: inline-flex; align-items: center; gap: 8px;
  background: var(--color-accent); color: var(--color-primary);
  font-family: var(--font-heading,'Unbounded',sans-serif); font-size: 0.85rem;
  font-weight: 800; padding: 16px 32px; border-radius: var(--radius);
  border: 2px solid var(--color-accent); transition: all 0.2s;
  text-transform: uppercase; letter-spacing: 0.04em;
}
.btn-accent-lg:hover {
  background: #ffbb00; border-color: #ffbb00; transform: translateY(-2px);
  box-shadow: 0 6px 24px rgba(var(--color-accent-rgb),0.4);
}
.btn-outline-lg {
  display: inline-flex; align-items: center; gap: 8px;
  background: transparent; color: var(--color-primary);
  font-family: var(--font-heading,'Unbounded',sans-serif); font-size: 0.85rem;
  font-weight: 700; padding: 16px 32px; border-radius: var(--radius);
  border: 2px solid rgba(0,0,0,0.2); transition: all 0.2s;
  text-transform: uppercase; letter-spacing: 0.04em;
}
.btn-outline-lg:hover { border-color: var(--color-primary); background: rgba(0,0,0,0.05); }
@media (max-width:1100px) {
  .city-hero-inner { grid-template-columns: 1fr; }
  .hero-form-card { display: none; }
  .identity-grid { grid-template-columns: 1fr; }
  .local-grid { grid-template-columns: 1fr; }
  .why-grid { grid-template-columns: 1fr; }
  .city-hero .hero-bracket-tl,
  .city-hero .hero-bracket-br { display: none; }
}
@media (max-width:900px) { .services-strip { grid-template-columns: repeat(3,1fr); } }
@media (max-width:600px) {
  .services-strip { grid-template-columns: repeat(2,1fr); }
  .stat-row { flex-wrap: wrap; }
  .city-hero { min-height: 70vh; }
  .hero-cta-row { flex-direction: column; }
}
</style>

<!-- HERO -->
<section class="city-hero" aria-label="General contractor services in Foristell, MO">
  <div class="hero-bracket-tl" aria-hidden="true"></div>
  <div class="hero-bracket-br" aria-hidden="true"></div>
  <div class="city-hero-inner">
    <div>
      <nav class="hero-breadcrumb" aria-label="Breadcrumb">
        <a href="/">Home</a><span>›</span>
        <a href="/service-areas/">Service Areas</a><span>›</span>
        <span aria-current="page">Foristell, MO</span>
      </nav>
      <span class="hero-eyebrow-badge">Warren County — I-70 Exit 214</span>
      <h1>General Contractor in <span class="accent">Foristell, MO</span> — Warren County's Local Licensed GC</h1>
      <p class="hero-answer">A&S Contracting Services serves Foristell, MO from our Warrenton headquarters — Exit 214 on I-70, just 15 minutes east. Foristell and Truesdale homeowners get roofing, siding, gutters, windows, drywall, and full interior renovations from a licensed Warren County contractor who knows the area. Free written estimates always.</p>
      <div class="hero-trust-row">
        <span class="trust-pill"><i data-lucide="shield-check"></i> Licensed &amp; Insured</span>
        <span class="trust-pill"><i data-lucide="clock"></i> Same-Week Estimates</span>
        <span class="trust-pill"><i data-lucide="map-pin"></i> Warren County</span>
      </div>
      <div class="hero-cta-row">
        <a href="/contact/" class="btn-primary-city"><i data-lucide="clipboard-list"></i> Get a Free Estimate</a>
        <a href="tel:+16364336240" class="btn-ghost-city"><i data-lucide="phone"></i> (636) 433-6240</a>
      </div>
    </div>
    <!-- HERO FORM -->
    <div class="hero-form-card">
      <p class="form-card-title">Free Estimate in Foristell, MO</p>
      <p class="form-card-subtitle">Tell us about your project — we respond within one business day.</p>
      <form class="city-form" action="<?php echo htmlspecialchars($formAction); ?>" method="POST">
        <input type="text" name="_honey" style="display:none !important" tabindex="-1" autocomplete="off" aria-hidden="true">
        <input type="hidden" name="_next" value="/thank-you">
        <input type="hidden" name="_consent_version" value="v2.1">
        <input type="hidden" name="_consent_page" value="<?php echo htmlspecialchars($_SERVER['REQUEST_URI']); ?>">
        <div class="fg"><label for="fo-name">Your Name</label><input type="text" id="fo-name" name="name" required placeholder="Jane Smith"></div>
        <div class="fg"><label for="fo-phone">Phone Number</label><input type="tel" id="fo-phone" name="phone" required placeholder="(636) 555-0100"></div>
        <div class="fg"><label for="fo-email">Email Address</label><input type="email" id="fo-email" name="email" required placeholder="jane@example.com"></div>
        <div class="fg">
          <label for="fo-service">Service Needed</label>
          <select id="fo-service" name="service">
            <option value="">Select a service…</option>
            <?php foreach($services as $s): ?><option value="<?php echo htmlspecialchars($s['slug']); ?>"><?php echo htmlspecialchars($s['name']); ?></option><?php endforeach; ?>
          </select>
        </div>
        <fieldset class="city-form-consent">
          <legend>Consent</legend>
          <label class="consent-row"><input type="checkbox" name="email_opt_in" value="yes"><span>Email updates (optional) — promotions &amp; project news.</span></label>
          <label class="consent-row"><input type="checkbox" name="sms_opt_in" value="yes"><span>SMS/Text updates (optional) — msg &amp; data rates apply. Reply STOP to opt out. Consent is not a condition of purchase.</span></label>
          <label class="consent-row"><input type="checkbox" name="terms_accepted" value="yes" required><span>I agree to the <a href="/privacy-policy/">Privacy Policy</a> &amp; <a href="/terms/">Terms</a>. <span class="required-star">*</span></span></label>
        </fieldset>
        <!-- spam shield: signed render timestamp + JS interaction signal -->
        <?php $__ft_ts = (string) time(); ?>
        <input type="hidden" name="_ft" value="<?php echo $__ft_ts . '.' . hash_hmac('sha256', $__ft_ts, $leadsFormSecret); ?>">
        <input type="hidden" name="_js" value="" class="js-shield-field">
        <?php if (empty($GLOBALS['__js_shield'])) { $GLOBALS['__js_shield'] = 1; ?>
        <script>(function(){var d=document,f=function(){var i,e=d.querySelectorAll('.js-shield-field');for(i=0;i<e.length;i++)e[i].value='1';d.removeEventListener('pointerdown',f);d.removeEventListener('keydown',f);};d.addEventListener('pointerdown',f);d.addEventListener('keydown',f);})();</script>
        <?php } ?>
        <button type="submit" class="btn-city-submit">Send My Request →</button>
      </form>
    </div>
  </div>
</section>

<!-- WAVE DIVIDER: hero → identity -->
<div class="div-wave" aria-hidden="true">
  <svg viewBox="0 0 1440 54" fill="none" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none">
    <path d="M0 0 C360 54 1080 54 1440 0 L1440 54 L0 54 Z" fill="#f8f8f6"/>
  </svg>
</div>

<!-- IDENTITY SECTION -->
<section class="identity-section" aria-labelledby="id-heading-for">
  <div class="ctr">
    <div class="identity-grid">
      <div class="identity-img-wrap reveal-left">
        <img src="<?php echo $bodyPhoto1; ?>" alt="A&S Contracting crew working on a home near Foristell, MO" width="720" height="420" loading="lazy">
        <div class="identity-img-badge"><i data-lucide="map-pin"></i> Foristell, MO — <span>Warren County</span></div>
      </div>
      <div class="reveal-right">
        <span class="eyebrow">Who We Are in Foristell</span>
        <h2 class="sec-h2" id="id-heading-for">Do you serve <span style="color:var(--color-accent)">Foristell, MO</span> for roofing and home repairs?</h2>
        <div class="answer-block">
          Yes — A&S Contracting Services is a licensed Missouri general contractor based in Warrenton that serves Foristell, Truesdale, and the Warren/St. Charles county border area along Exit 214. As a Warren County-based contractor, Foristell jobs are home territory — fast response, no long-haul travel markup, written estimates within 48 hours.
        </div>
        <p class="prose-block">Foristell sits at the eastern edge of Warren County, straddling the St. Charles County line near I-70 Exit 214. The area has seen significant residential growth over the last 15–20 years as St. Charles County expansion pushed outward, creating a mix of newer builder-grade subdivision homes from the 2005–2015 era and older rural properties that predate the growth wave. Both property types come with specific maintenance needs.</p>
        <p class="prose-block">Newer Foristell and Truesdale homes often need gutter upgrades (builder-grade systems under-perform for Missouri storm volumes), window seal replacements (common around year 10–15 in vinyl windows), and siding repairs from hail events that track through the I-70 storm corridor in spring and early summer.</p>
        <div class="stat-row">
          <div class="stat-item"><div class="stat-num" data-target="10">0</div><div class="stat-lbl">Services Offered</div></div>
          <div class="stat-item"><div class="stat-num" data-target="15">0</div><div class="stat-lbl">Miles from Warrenton</div></div>
          <div class="stat-item"><div class="stat-num" data-target="100">0</div><div class="stat-lbl">% Written Estimates</div></div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ANGLE DIVIDER: identity → local -->
<div class="div-angle" aria-hidden="true">
  <svg viewBox="0 0 1440 48" fill="none" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none">
    <polygon points="0,0 1440,48 1440,48 0,48" fill="#ffffff"/>
  </svg>
</div>

<!-- LOCAL SECTION -->
<section class="local-section" aria-labelledby="local-heading-for">
  <div class="ctr">
    <div class="local-grid">
      <div>
        <span class="eyebrow">Local Knowledge — Foristell, MO</span>
        <h2 class="sec-h2" id="local-heading-for">Foristell's housing stock and <span style="color:var(--color-accent)">what we see most</span></h2>
        <p class="prose-block">Foristell, MO is a small incorporated community — about 500 residents in the town proper — but the surrounding Exit 214 corridor serves a much broader population of rural Warren County and outlying St. Charles County homeowners. A&S Contracting works across this entire area, from the highway-adjacent commercial corridor to rural routes stretching north toward Wright City and south toward Warrenton.</p>
        <p class="prose-block">The I-70 storm corridor that runs through Warren County is particularly active in spring — hail events in April and May regularly impact siding and roofing systems in the Foristell and Truesdale area. After major storm seasons, we typically see significant demand for hail damage assessments, siding replacement, and insurance-supported roofing work in this corridor.</p>
        <ul class="local-detail-list">
          <li>
            <div class="ck-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg></div>
            <span><strong>Foristell subdivision homes (2005–2015 era):</strong> Builder-grade vinyl siding, asphalt shingles, and aluminum gutters reaching the end of their first service cycle — good candidates for gutter replacement, window upgrades, and siding restoration.</span>
          </li>
          <li>
            <div class="ck-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg></div>
            <span><strong>Truesdale area homes:</strong> The Truesdale community adjacent to Foristell has older housing stock — 1970s–1990s builds that need full exterior assessment, often including roofing, soffit, fascia, and window work as a package.</span>
          </li>
          <li>
            <div class="ck-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg></div>
            <span><strong>Rural Warren County east of Wright City:</strong> Farmsteads and rural properties on county routes between Foristell and Wright City — roofing on outbuildings, full exterior renovation on primary residences, drywall and interior work during off-season months.</span>
          </li>
          <li>
            <div class="ck-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg></div>
            <span><strong>I-70 hail corridor properties:</strong> Spring hail storms in Warren County track east-northeast along I-70 — properties near Exit 214 are in the primary path and we see consistent storm-damage repair requests after April/May weather events.</span>
          </li>
        </ul>
      </div>
      <div class="local-sidebar reveal-right">
        <div class="landmark-card">
          <p class="landmark-name">I-70 Exit 214</p>
          <p class="landmark-desc">Foristell's primary access point and the eastern edge of A&S Contracting's Warren County service area — 15 minutes from our Warrenton office, with no long-haul travel cost for Foristell homeowners.</p>
        </div>
        <div class="landmark-card">
          <p class="landmark-name">Truesdale, MO</p>
          <p class="landmark-desc">Small community directly adjacent to Foristell — older residential housing that benefits from comprehensive exterior renovation, particularly roofing, soffit/fascia, and siding work.</p>
        </div>
        <div class="landmark-card">
          <p class="landmark-name">Warren / St. Charles County Line</p>
          <p class="landmark-desc">Foristell sits on the county boundary — A&S serves both sides. St. Charles County homeowners near Exit 214 receive the same service quality and pricing as Warren County neighbors.</p>
        </div>
        <div class="landmark-card">
          <p class="landmark-name">I-70 Spring Storm Corridor</p>
          <p class="landmark-desc">Missouri's major spring storm track follows I-70 from Kansas City toward St. Louis — Exit 214-area properties see above-average hail frequency, making roofing and siding durability a priority.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- WAVE DIVIDER reversed: local → services -->
<div class="div-wave" aria-hidden="true">
  <svg viewBox="0 0 1440 54" fill="none" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none">
    <path d="M0 54 C360 0 1080 0 1440 54 L1440 54 L0 54 Z" fill="#f8f8f6"/>
  </svg>
</div>

<!-- SERVICES SECTION -->
<section class="services-area-section" aria-labelledby="svc-heading-for">
  <div class="ctr">
    <div class="reveal-up">
      <span class="eyebrow">What We Offer in Foristell, MO</span>
      <h2 class="sec-h2" id="svc-heading-for">Full-scope contractor services — near me in <span style="color:var(--color-accent)">Foristell, MO</span></h2>
      <p class="prose-block">Every service A&S Contracting provides in Warrenton is available to Foristell, Truesdale, and the Exit 214 corridor at the same pricing and quality standard.</p>
    </div>
    <div class="services-strip">
      <div class="svc-strip-card reveal-up reveal-delay-1"><a href="/services/roofing/"><div class="svc-strip-icon"><i data-lucide="home"></i></div><div class="svc-strip-name">Roofing</div></a></div>
      <div class="svc-strip-card reveal-up reveal-delay-2"><a href="/services/siding/"><div class="svc-strip-icon"><i data-lucide="layers"></i></div><div class="svc-strip-name">Siding</div></a></div>
      <div class="svc-strip-card reveal-up reveal-delay-3"><a href="/services/gutters/"><div class="svc-strip-icon"><i data-lucide="droplets"></i></div><div class="svc-strip-name">Gutters</div></a></div>
      <div class="svc-strip-card reveal-up reveal-delay-4"><a href="/services/soffit/"><div class="svc-strip-icon"><i data-lucide="minus-square"></i></div><div class="svc-strip-name">Soffit</div></a></div>
      <div class="svc-strip-card reveal-up reveal-delay-1"><a href="/services/fascia/"><div class="svc-strip-icon"><i data-lucide="align-justify"></i></div><div class="svc-strip-name">Fascia</div></a></div>
      <div class="svc-strip-card reveal-up reveal-delay-2"><a href="/services/windows-doors/"><div class="svc-strip-icon"><i data-lucide="square"></i></div><div class="svc-strip-name">Windows &amp; Doors</div></a></div>
      <div class="svc-strip-card reveal-up reveal-delay-3"><a href="/services/full-scale-interior-work/"><div class="svc-strip-icon"><i data-lucide="layout"></i></div><div class="svc-strip-name">Interior Work</div></a></div>
      <div class="svc-strip-card reveal-up reveal-delay-4"><a href="/services/exterior-work/"><div class="svc-strip-icon"><i data-lucide="building-2"></i></div><div class="svc-strip-name">Exterior Work</div></a></div>
      <div class="svc-strip-card reveal-up reveal-delay-1"><a href="/services/dry-wall/"><div class="svc-strip-icon"><i data-lucide="grid"></i></div><div class="svc-strip-name">Dry Wall</div></a></div>
      <div class="svc-strip-card reveal-up reveal-delay-2"><a href="/services/general-contracting/"><div class="svc-strip-icon"><i data-lucide="hard-hat"></i></div><div class="svc-strip-name">General Contracting</div></a></div>
    </div>
  </div>
</section>

<!-- CURVE DIVIDER: services → why -->
<div class="div-curve" aria-hidden="true">
  <svg viewBox="0 0 1440 60" fill="none" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none">
    <path d="M0 60 Q720 0 1440 60 L1440 60 L0 60 Z" fill="#000000"/>
  </svg>
</div>

<!-- WHY A&S SECTION -->
<section class="why-section" aria-labelledby="why-heading-for">
  <div class="ctr">
    <div class="why-grid">
      <div>
        <span class="eyebrow" style="color:rgba(230,168,0,0.8)">Why A&S in Foristell</span>
        <h2 class="sec-h2-light" id="why-heading-for">Why Foristell homeowners choose <span style="color:var(--color-accent)">A&S Contracting</span></h2>
        <ul class="why-list">
          <li class="why-item reveal-left">
            <div class="why-icon"><i data-lucide="map-pin"></i></div>
            <div><p class="why-item-title">Home county — no travel markup</p><p class="why-item-desc">Foristell is in Warren County — A&S's home base. No long-haul surcharges, no scheduling around distant crew locations. Your job gets prioritized like a neighbor's, not a distant call.</p></div>
          </li>
          <li class="why-item reveal-left reveal-delay-1">
            <div class="why-icon"><i data-lucide="cloud-lightning"></i></div>
            <div><p class="why-item-title">Storm damage response</p><p class="why-item-desc">After spring hail events, we prioritize the I-70 corridor. Foristell and Truesdale homeowners with storm damage get fast assessment and written estimates within days, not weeks.</p></div>
          </li>
          <li class="why-item reveal-left reveal-delay-2">
            <div class="why-icon"><i data-lucide="file-text"></i></div>
            <div><p class="why-item-title">Written estimates before every job</p><p class="why-item-desc">Flat-rate written estimate for every project. Material specs, scope, and timeline included. No surprises during or after the job — a standard we hold to on every Foristell project.</p></div>
          </li>
          <li class="why-item reveal-left reveal-delay-3">
            <div class="why-icon"><i data-lucide="shield"></i></div>
            <div><p class="why-item-title">Licensed Missouri contractor</p><p class="why-item-desc">Fully licensed and insured in Missouri. Documentation available upfront so Foristell homeowners aren't waiting on credentials while the estimate is being written.</p></div>
          </li>
        </ul>
      </div>
      <div class="why-img-wrap reveal-right">
        <img src="<?php echo $bodyPhoto2; ?>" alt="Completed roofing project by A&S Contracting near Foristell, MO" width="720" height="460" loading="lazy">
        <div class="why-img-overlay"></div>
      </div>
    </div>
  </div>
</section>

<!-- ANGLE DIVIDER: why → cta -->
<div class="div-angle" aria-hidden="true">
  <svg viewBox="0 0 1440 48" fill="none" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none">
    <polygon points="0,48 1440,0 1440,48" fill="#000000"/>
  </svg>
</div>

<!-- CTA SECTION -->
<section class="cta-section" aria-labelledby="cta-heading-for">
  <div class="ctr">
    <div class="reveal-scale">
      <div class="cta-icon-ring"><i data-lucide="clipboard-list"></i></div>
      <h2 class="sec-h2" id="cta-heading-for">Get a Free Estimate in <span style="color:var(--color-accent)">Foristell, MO</span></h2>
      <p class="cta-subtitle">A&S Contracting Services serves Foristell, Truesdale, and Exit 214-area homes year-round. Call now or submit your project — written estimate within 48 hours.</p>
      <div class="cta-btn-group">
        <a href="/contact/" class="btn-accent-lg"><i data-lucide="clipboard-list"></i> Request a Free Estimate</a>
        <a href="tel:+16364336240" class="btn-outline-lg"><i data-lucide="phone"></i> (636) 433-6240</a>
      </div>
      <p style="font-size:0.82rem;color:var(--color-text-light);margin-top:var(--space-lg)">Last Updated: <?php echo date('F Y'); ?> &nbsp;|&nbsp; Serving Foristell, MO — Warren County</p>
    </div>
  </div>
</section>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
