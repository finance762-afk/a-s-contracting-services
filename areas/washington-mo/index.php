<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
$cityName        = 'Washington';
$stateAbbr       = 'MO';
$countyName      = 'Franklin County';
$citySlug        = 'washington-mo';
$pageTitle       = "Contractor in Washington, MO | A&S Contracting Services | Franklin County";
$pageDescription = "Licensed general contractor serving Washington, MO and Franklin County. Roofing, siding, gutters, windows & interior renovations for riverfront and historic-district homes. Free estimates.";
$canonicalUrl    = $siteUrl . '/areas/washington-mo/';
$currentPage     = 'service-areas';
$cssVersion      = '2.0';

$pb         = 'https://db.pageone.cloud/storage/v1/object/public/client-assets/a-s-contracting-services/photos/';
$heroPhoto  = $pb . '1779985051444-qjmrub-49-Apr_21__2025_15-15-08-wZNr.jpg';
$bodyPhoto1 = $pb . '1779984936314-5pnhuy-43-Aug_06__2025_23-34-36-CJqa.jpg';
$bodyPhoto2 = $pb . '1779985083337-zk34j0-26-Feb_09__2026_17-30-49-9vp8.jpg';
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
                ['@type' => 'ListItem', 'position' => 3, 'name' => 'Washington, MO'],
            ],
        ],
        [
            '@type'       => 'Service',
            'name'        => 'General Contractor in Washington, MO',
            'description' => 'Licensed general contractor based in Warrenton, MO serving Washington and Franklin County with roofing, siding, gutters, windows, drywall, and interior renovations.',
            'provider'    => ['@id' => $siteUrl . '/#organization'],
            'areaServed'  => [
                '@type'            => 'City',
                'name'             => 'Washington',
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
   /areas/washington-mo/ — Premium Area Page — A&S Contracting
   Signature technique: Missouri River diagonal water-ripple stripes
   ============================================================ */

.city-hero {
  position: relative; min-height: 82vh; display: flex; align-items: center;
  background-image: url('<?php echo $heroPhoto; ?>');
  background-size: cover; background-position: center 40%;
  padding: calc(var(--nav-height,72px) + var(--space-3xl)) 0 var(--space-3xl);
  overflow: hidden;
}
.city-hero::before {
  content: ''; position: absolute; inset: 0;
  background: linear-gradient(110deg, rgba(var(--color-primary-rgb),0.96) 0%, rgba(var(--color-primary-rgb),0.75) 50%, rgba(var(--color-primary-rgb),0.18) 100%);
  z-index: 1;
}
.city-hero::after {
  content: ''; position: absolute; inset: 0;
  background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 200 200' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.85' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='0.025'/%3E%3C/svg%3E");
  background-size: 200px; opacity: 0.05; z-index: 2; pointer-events: none;
}
/* Signature: Missouri River diagonal ripple stripes on right half */
.city-hero .hero-river-ripple {
  position: absolute;
  right: 0;
  top: 0;
  width: 45%;
  height: 100%;
  z-index: 2;
  pointer-events: none;
  overflow: hidden;
}
.city-hero .hero-river-ripple::before {
  content: '';
  position: absolute;
  inset: -20% -10%;
  background: repeating-linear-gradient(
    125deg,
    transparent 0px,
    transparent 18px,
    rgba(var(--color-accent-rgb),0.04) 18px,
    rgba(var(--color-accent-rgb),0.04) 20px,
    transparent 20px,
    transparent 44px,
    rgba(var(--color-accent-rgb),0.025) 44px,
    rgba(var(--color-accent-rgb),0.025) 46px
  );
}
.city-hero .hero-river-ripple::after {
  content: '';
  position: absolute;
  left: 0;
  top: 0;
  width: 60px;
  height: 100%;
  background: linear-gradient(90deg, rgba(var(--color-primary-rgb),0.6), transparent);
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
  .city-hero .hero-river-ripple { width: 30%; }
}
@media (max-width:900px) { .services-strip { grid-template-columns: repeat(3,1fr); } }
@media (max-width:600px) {
  .services-strip { grid-template-columns: repeat(2,1fr); }
  .stat-row { flex-wrap: wrap; }
  .city-hero { min-height: 70vh; }
  .hero-cta-row { flex-direction: column; }
  .city-hero .hero-river-ripple { display: none; }
}
</style>

<!-- HERO -->
<section class="city-hero" aria-label="General contractor services in Washington, MO">
  <div class="hero-river-ripple" aria-hidden="true"></div>
  <div class="city-hero-inner">
    <div>
      <nav class="hero-breadcrumb" aria-label="Breadcrumb">
        <a href="/">Home</a><span>›</span>
        <a href="/service-areas/">Service Areas</a><span>›</span>
        <span aria-current="page">Washington, MO</span>
      </nav>
      <span class="hero-eyebrow-badge">Franklin County — Missouri River</span>
      <h1>General Contractor in <span class="accent">Washington, MO</span> — Franklin County's Licensed GC</h1>
      <p class="hero-answer">A&S Contracting Services drives to Washington, MO from our Warrenton home base — roughly 30 miles southeast on Route 100. We serve historic-district homeowners and newer-construction neighborhoods alike with roofing, siding, gutters, windows, drywall, and full interior renovations. Free written estimates for Washington and Franklin County.</p>
      <div class="hero-trust-row">
        <span class="trust-pill"><i data-lucide="shield-check"></i> Licensed & Insured</span>
        <span class="trust-pill"><i data-lucide="clock"></i> Same-Week Estimates</span>
        <span class="trust-pill"><i data-lucide="map-pin"></i> Franklin County</span>
      </div>
      <div class="hero-cta-row">
        <a href="/contact/" class="btn-primary-city"><i data-lucide="clipboard-list"></i> Get a Free Estimate</a>
        <a href="tel:+16364336240" class="btn-ghost-city"><i data-lucide="phone"></i> (636) 433-6240</a>
      </div>
    </div>
    <!-- HERO FORM -->
    <div class="hero-form-card">
      <p class="form-card-title">Free Estimate in Washington, MO</p>
      <p class="form-card-subtitle">Tell us about your project — we'll respond within one business day.</p>
      <form class="city-form" action="<?php echo htmlspecialchars($formAction); ?>" method="POST">
        <input type="text" name="_honey" style="display:none !important" tabindex="-1" autocomplete="off" aria-hidden="true">
        <input type="hidden" name="_next" value="/thank-you">
        <input type="hidden" name="_consent_version" value="v2.1">
        <input type="hidden" name="_consent_page" value="<?php echo htmlspecialchars($_SERVER['REQUEST_URI']); ?>">
        <div class="fg"><label for="wn-name">Your Name</label><input type="text" id="wn-name" name="name" required placeholder="Jane Smith"></div>
        <div class="fg"><label for="wn-phone">Phone Number</label><input type="tel" id="wn-phone" name="phone" required placeholder="(636) 555-0100"></div>
        <div class="fg"><label for="wn-email">Email Address</label><input type="email" id="wn-email" name="email" required placeholder="jane@example.com"></div>
        <div class="fg">
          <label for="wn-service">Service Needed</label>
          <select id="wn-service" name="service">
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
<section class="identity-section" aria-labelledby="id-heading-wash">
  <div class="ctr">
    <div class="identity-grid">
      <div class="identity-img-wrap reveal-left">
        <img src="<?php echo $bodyPhoto1; ?>" alt="A&S Contracting crew installing roofing on a Washington, MO home" width="720" height="420" loading="lazy">
        <div class="identity-img-badge"><i data-lucide="map-pin"></i> Washington, MO — <span>Franklin County</span></div>
      </div>
      <div class="reveal-right">
        <span class="eyebrow">Who We Are in Washington</span>
        <h2 class="sec-h2" id="id-heading-wash">Do you serve <span style="color:var(--color-accent)">Washington, MO</span> for roofing and home repairs?</h2>
        <div class="answer-block">
          Yes — A&S Contracting Services is a licensed Missouri general contractor based in Warrenton that regularly serves Washington, MO and the broader Franklin County area. Washington homeowners get the same crew, the same materials, and the same flat-rate written estimates as our Warren County neighbors.
        </div>
        <p class="prose-block">Washington's housing stock ranges from century-old Victorian and Craftsman homes in the Historic Washington District near the Missouri River waterfront to 1970s–1990s ranch houses and newer construction along Route 100 and Route 47 corridors. Each era brings its own repair profile — older homes often need soffit, fascia, and window replacement alongside roofing; newer neighborhoods frequently need gutter upgrades and siding restoration after storm seasons.</p>
        <p class="prose-block">We serve Washington year-round, scheduling work around I-44 and Route 100 traffic to keep trip times efficient. Same-week estimates available for most Washington-area projects.</p>
        <div class="stat-row">
          <div class="stat-item"><div class="stat-num" data-target="10">0</div><div class="stat-lbl">Services Offered</div></div>
          <div class="stat-item"><div class="stat-num" data-target="30">0</div><div class="stat-lbl">Miles from Warrenton</div></div>
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
<section class="local-section" aria-labelledby="local-heading-wash">
  <div class="ctr">
    <div class="local-grid">
      <div>
        <span class="eyebrow">Local Knowledge — Washington, MO</span>
        <h2 class="sec-h2" id="local-heading-wash">Washington's neighborhoods and <span style="color:var(--color-accent)">what they need</span> from a contractor</h2>
        <p class="prose-block">Washington, MO sits along the Missouri River in the heart of Franklin County — a city of roughly 14,000 with some of the most architecturally varied housing in the region. A&S Contracting Services has worked across Washington's distinct neighborhoods, from the riverfront Historic District to the Route 100 commercial corridor and the suburban growth east toward Gray Summit.</p>
        <p class="prose-block">Washington's Germanic heritage is visible in its masonry-heavy older homes — stone foundations, brick veneer, wood-frame upper stories — all of which require specific knowledge when replacing siding, windows, or roofing. We measure accurately, use correct flashing techniques around masonry transitions, and communicate clearly about what's code-compliant for older structures.</p>
        <ul class="local-detail-list">
          <li>
            <div class="ck-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg></div>
            <span><strong>Historic Washington District:</strong> Victorian, Craftsman, and German colonial homes near the Missouri River waterfront — wood window replacement, roofing around dormers, soffit and fascia restoration.</span>
          </li>
          <li>
            <div class="ck-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg></div>
            <span><strong>Route 100 / Route 47 corridor:</strong> Post-WWII ranch neighborhoods and 1990s subdivisions — storm-damaged siding, gutter replacements, window upgrades for efficiency, interior renovation work.</span>
          </li>
          <li>
            <div class="ck-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg></div>
            <span><strong>Washington R-II district homes:</strong> Established family neighborhoods near Washington High School — full-scope interior renovations, drywall, insulation upgrades, bathroom and kitchen remodels.</span>
          </li>
          <li>
            <div class="ck-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg></div>
            <span><strong>Franklin County rural properties:</strong> Agricultural land parcels, rural homes near New Haven and Union — roofing on pole barns and outbuildings, full exterior restoration for older farmhouses.</span>
          </li>
        </ul>
      </div>
      <div class="local-sidebar reveal-right">
        <div class="landmark-card">
          <p class="landmark-name">Missouri River Waterfront</p>
          <p class="landmark-desc">Washington's defining geographic feature — river humidity and freeze-thaw cycles accelerate wood decay on historic homes near the levee, making proper flashing and drainage critical.</p>
        </div>
        <div class="landmark-card">
          <p class="landmark-name">Washington Historic District</p>
          <p class="landmark-desc">Cobblestone streets, Fischer's Tavern, and 19th-century German architecture. Homes here demand contractor experience with period-appropriate materials and preservation-friendly methods.</p>
        </div>
        <div class="landmark-card">
          <p class="landmark-name">Route 100 Corridor</p>
          <p class="landmark-desc">The primary commercial and residential spine of modern Washington, running from the river north toward I-44 — where most post-1970 subdivisions are located.</p>
        </div>
        <div class="landmark-card">
          <p class="landmark-name">Franklin County Wine Country</p>
          <p class="landmark-desc">The Hermann/Washington wine trail puts tourism traffic through the area year-round — local homeowners increasingly invest in exterior renovation and curb appeal improvements.</p>
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
<section class="services-area-section" aria-labelledby="svc-heading-wash">
  <div class="ctr">
    <div class="reveal-up">
      <span class="eyebrow">What We Offer in Washington, MO</span>
      <h2 class="sec-h2" id="svc-heading-wash">Full-scope contractor services — near me in <span style="color:var(--color-accent)">Washington, MO</span></h2>
      <p class="prose-block">Every service A&S Contracting provides in Warrenton is available to Washington and Franklin County homeowners at the same pricing and quality standard.</p>
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
<section class="why-section" aria-labelledby="why-heading-wash">
  <div class="ctr">
    <div class="why-grid">
      <div>
        <span class="eyebrow" style="color:rgba(230,168,0,0.8)">Why A&S in Washington</span>
        <h2 class="sec-h2-light" id="why-heading-wash">Why Washington homeowners call <span style="color:var(--color-accent)">A&S Contracting</span></h2>
        <ul class="why-list">
          <li class="why-item reveal-left">
            <div class="why-icon"><i data-lucide="file-text"></i></div>
            <div><p class="why-item-title">Flat-rate written estimates</p><p class="why-item-desc">No verbal guesses. Every estimate for Washington-area work is delivered in writing before we schedule anything — you see material specs, scope, and cost before signing.</p></div>
          </li>
          <li class="why-item reveal-left reveal-delay-1">
            <div class="why-icon"><i data-lucide="wrench"></i></div>
            <div><p class="why-item-title">Historic-district experience</p><p class="why-item-desc">We understand the challenges of older Washington homes — masonry transitions, period window frames, steep-pitch roofs on Victorian-era properties. We don't guess.</p></div>
          </li>
          <li class="why-item reveal-left reveal-delay-2">
            <div class="why-icon"><i data-lucide="shield"></i></div>
            <div><p class="why-item-title">Licensed Missouri contractor</p><p class="why-item-desc">Fully licensed and insured for Missouri residential and commercial work. Documentation provided upfront — no chasing certificates after the job's done.</p></div>
          </li>
          <li class="why-item reveal-left reveal-delay-3">
            <div class="why-icon"><i data-lucide="calendar-check"></i></div>
            <div><p class="why-item-title">Reliable scheduling for Franklin County</p><p class="why-item-desc">We plan Washington-area trips efficiently to keep costs down and schedules tight. When we say we'll be there Wednesday at 8am, we're there Wednesday at 8am.</p></div>
          </li>
        </ul>
      </div>
      <div class="why-img-wrap reveal-right">
        <img src="<?php echo $bodyPhoto2; ?>" alt="A&S Contracting completed roofing project in Washington, MO" width="720" height="460" loading="lazy">
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
<section class="cta-section" aria-labelledby="cta-heading-wash">
  <div class="ctr">
    <div class="reveal-scale">
      <div class="cta-icon-ring"><i data-lucide="clipboard-list"></i></div>
      <h2 class="sec-h2" id="cta-heading-wash">Get a Free Estimate in <span style="color:var(--color-accent)">Washington, MO</span></h2>
      <p class="cta-subtitle">A&S Contracting Services serves Washington and Franklin County year-round. Call now or submit your project details — we'll follow up within one business day with a written estimate.</p>
      <div class="cta-btn-group">
        <a href="/contact/" class="btn-accent-lg"><i data-lucide="clipboard-list"></i> Request a Free Estimate</a>
        <a href="tel:+16364336240" class="btn-outline-lg"><i data-lucide="phone"></i> (636) 433-6240</a>
      </div>
      <p style="font-size:0.82rem;color:var(--color-text-light);margin-top:var(--space-lg)">Last Updated: <?php echo date('F Y'); ?> &nbsp;|&nbsp; Serving Washington, MO and Franklin County</p>
    </div>
  </div>
</section>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
</body>
</html>
