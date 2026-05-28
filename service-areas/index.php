<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
$pageTitle       = "Service Areas | A&S Contracting Services | Warrenton, MO & 50-Mile Radius";
$pageDescription = "A&S Contracting Services serves Warrenton, MO and a 50-mile radius across Warren County and central Missouri. Roofing, siding, gutters, interior renovations — free estimates.";
$canonicalUrl    = $siteUrl . '/service-areas/';
$currentPage     = 'service-areas';
$cssVersion      = '2.0';
$pb              = 'https://db.pageone.cloud/storage/v1/object/public/client-assets/a-s-contracting-services/photos/';
$heroPhoto       = $pb . '1779985210285-ttua89-27-Dec_24__2025_18-22-19-ZYKB.jpg';
$bodyPhoto1      = $pb . '1779985126277-1f29tk-36-Mar_19__2026_16-46-08-BKn5.jpg';
$bodyPhoto2      = $pb . '1779985049352-yx87w1-20-Mar_12__2025_18-21-31-DDFM.jpg';
$heroImagePreload = $heroPhoto;
$ogImage         = $heroPhoto;

$schemaData = ['@context'=>'https://schema.org','@graph'=>[
    ['@type'=>'BreadcrumbList','itemListElement'=>[
        ['@type'=>'ListItem','position'=>1,'name'=>'Home','item'=>$siteUrl.'/'],
        ['@type'=>'ListItem','position'=>2,'name'=>'Service Areas'],
    ]],
    ['@type'=>'WebPage','@id'=>$canonicalUrl.'#webpage','name'=>$pageTitle,'description'=>$pageDescription,'url'=>$canonicalUrl,'provider'=>['@id'=>$siteUrl.'/#organization']],
]];
$schemaMarkup = json_encode($schemaData,JSON_PRETTY_PRINT|JSON_UNESCAPED_SLASHES|JSON_UNESCAPED_UNICODE);
include $_SERVER['DOCUMENT_ROOT'].'/includes/head.php';
?>
<body>
<?php include $_SERVER['DOCUMENT_ROOT'].'/includes/header.php'; ?>

<style>
/* ═══════════════════════════════════════════════════════════════
   /service-areas/ — Page-specific styles — Premium tier ≥400L
   Signature: map-pin radial cluster accent on hero right column
   ═══════════════════════════════════════════════════════════════ */
.area-hero { position:relative; min-height:78vh; display:flex; align-items:center; background-image:url('<?php echo $heroPhoto; ?>'); background-size:cover; background-position:center 40%; padding:calc(var(--nav-height,72px) + var(--space-3xl)) 0 var(--space-3xl); overflow:hidden; }
.area-hero::before { content:''; position:absolute; inset:0; background:linear-gradient(115deg,rgba(var(--color-primary-rgb),0.95) 0%,rgba(var(--color-primary-rgb),0.78) 45%,rgba(var(--color-primary-rgb),0.3) 100%); z-index:1; }
.area-hero::after { content:''; position:absolute; inset:0; background-image:url("data:image/svg+xml,%3Csvg viewBox='0 0 200 200' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.85' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='0.025'/%3E%3C/svg%3E"); background-size:220px; opacity:0.04; z-index:2; pointer-events:none; }
/* Signature: map-pin radial glow cluster in hero right */
.area-hero .map-pin-glow { position:absolute; right:8%; top:20%; width:420px; height:420px; background:radial-gradient(circle,rgba(var(--color-accent-rgb),0.13) 0%,rgba(var(--color-accent-rgb),0.04) 45%,transparent 70%); border-radius:50%; z-index:2; pointer-events:none; }
.area-hero-inner { position:relative; z-index:3; max-width:var(--max-width,1280px); margin:0 auto; padding:0 var(--space-lg); display:grid; grid-template-columns:1fr 400px; gap:var(--space-2xl); align-items:center; width:100%; }
.hero-breadcrumb { display:flex; align-items:center; gap:var(--space-xs); font-size:0.8rem; color:rgba(255,255,255,0.48); margin-bottom:var(--space-md); }
.hero-breadcrumb a { color:rgba(255,255,255,0.48); transition:color 0.2s; }
.hero-breadcrumb a:hover { color:var(--color-accent); }
.hero-breadcrumb span { color:rgba(255,255,255,0.28); }
.hero-eyebrow { display:inline-flex; align-items:center; gap:var(--space-xs); background:rgba(var(--color-accent-rgb),0.15); border:1px solid rgba(var(--color-accent-rgb),0.45); color:var(--color-accent); font-size:0.76rem; font-weight:700; letter-spacing:0.12em; text-transform:uppercase; padding:5px 12px; border-radius:var(--radius-sm); margin-bottom:var(--space-md); }
.area-hero h1 { font-family:var(--font-heading,'Unbounded',sans-serif); font-size:clamp(2.2rem,4.2vw,3.4rem); font-weight:800; line-height:1.07; text-wrap:balance; color:var(--color-secondary); margin:0 0 var(--space-md); }
.area-hero h1 .accent { color:var(--color-accent); }
.hero-answer { font-size:1.05rem; line-height:1.78; color:rgba(255,255,255,0.76); max-width:52ch; margin:0 0 var(--space-xl); }
.hero-trust-row { display:flex; gap:var(--space-lg); flex-wrap:wrap; margin-bottom:var(--space-xl); }
.trust-pill { display:inline-flex; align-items:center; gap:6px; background:rgba(255,255,255,0.1); border:1px solid rgba(255,255,255,0.18); color:rgba(255,255,255,0.88); font-size:0.82rem; font-weight:600; padding:6px 14px; border-radius:100px; }
.trust-pill svg { width:13px; height:13px; color:var(--color-accent); }
.hero-cta-group { display:flex; gap:var(--space-md); flex-wrap:wrap; }
.btn-primary-svc { display:inline-flex; align-items:center; gap:8px; background:var(--color-accent); color:var(--color-primary); font-family:var(--font-heading,'Unbounded',sans-serif); font-size:0.82rem; font-weight:800; padding:14px 28px; border-radius:var(--radius); border:2px solid var(--color-accent); transition:all 0.2s; text-transform:uppercase; letter-spacing:0.04em; }
.btn-primary-svc:hover { background:#ffbb00; border-color:#ffbb00; transform:translateY(-2px); box-shadow:0 6px 20px rgba(var(--color-accent-rgb),0.4); }
.btn-ghost-svc { display:inline-flex; align-items:center; gap:8px; background:transparent; color:var(--color-secondary); font-family:var(--font-heading,'Unbounded',sans-serif); font-size:0.82rem; font-weight:700; padding:14px 28px; border-radius:var(--radius); border:2px solid rgba(255,255,255,0.3); transition:all 0.2s; text-transform:uppercase; letter-spacing:0.04em; }
.btn-ghost-svc:hover { border-color:rgba(255,255,255,0.7); background:rgba(255,255,255,0.08); }
.hero-aside-card { background:rgba(255,255,255,0.97); border-radius:var(--radius-lg); padding:var(--space-xl); box-shadow:0 24px 64px rgba(0,0,0,0.35); }
.aside-card-title { font-family:var(--font-heading,'Unbounded',sans-serif); font-size:1rem; font-weight:800; color:var(--color-primary); margin:0 0 var(--space-sm); }
.aside-form { display:flex; flex-direction:column; gap:var(--space-sm); }
.form-group { display:flex; flex-direction:column; gap:4px; }
.form-group label { font-size:0.78rem; font-weight:600; color:var(--color-text-light); text-transform:uppercase; letter-spacing:0.06em; }
.form-group input,.form-group select,.form-group textarea { width:100%; padding:10px 14px; border:1.5px solid var(--color-border,#e2e2e2); border-radius:var(--radius-sm); font-size:0.9rem; color:var(--color-text); background:var(--color-bg,#fff); transition:border-color 0.2s; font-family:var(--font-body,'Inter',sans-serif); }
.form-group input:focus,.form-group select:focus,.form-group textarea:focus { outline:none; border-color:var(--color-accent); }
.form-consent-fieldset { border:none; padding:0; margin:0; display:flex; flex-direction:column; gap:var(--space-xs); }
.form-consent-legend { font-size:0.78rem; font-weight:700; color:var(--color-text-light); text-transform:uppercase; letter-spacing:0.06em; margin-bottom:6px; }
.form-consent-item { display:flex; gap:8px; align-items:flex-start; cursor:pointer; }
.form-consent-item input[type="checkbox"] { width:16px; height:16px; flex-shrink:0; margin-top:2px; accent-color:var(--color-accent); }
.consent-label { font-size:0.78rem; line-height:1.55; color:var(--color-text-light); }
.consent-label a { color:var(--color-accent); }
.required-star { color:#c00; font-weight:700; }
.btn-form-submit { width:100%; background:var(--color-primary); color:var(--color-secondary); font-family:var(--font-heading,'Unbounded',sans-serif); font-size:0.82rem; font-weight:800; padding:14px; border:none; border-radius:var(--radius); cursor:pointer; transition:all 0.2s; letter-spacing:0.04em; text-transform:uppercase; }
.btn-form-submit:hover { background:var(--color-accent); color:var(--color-primary); transform:translateY(-1px); }
.divider-wave { display:block; width:100%; overflow:hidden; line-height:0; }
.divider-wave svg { display:block; width:100%; }
.divider-angle { display:block; width:100%; overflow:hidden; line-height:0; }
.divider-angle svg { display:block; width:100%; }
.divider-curve { display:block; width:100%; overflow:hidden; line-height:0; }
.divider-curve svg { display:block; width:100%; }
.container-sa { max-width:var(--max-width,1280px); margin:0 auto; padding:0 var(--space-lg); }
.eyebrow-label { display:inline-block; font-size:0.74rem; font-weight:700; letter-spacing:0.14em; text-transform:uppercase; color:var(--color-accent); margin-bottom:var(--space-sm); }
.section-h2 { font-family:var(--font-heading,'Unbounded',sans-serif); font-size:clamp(1.6rem,3vw,2.4rem); font-weight:800; color:var(--color-primary); text-wrap:balance; margin:0 0 var(--space-sm); line-height:1.15; }
.section-h2-light { font-family:var(--font-heading,'Unbounded',sans-serif); font-size:clamp(1.6rem,3vw,2.4rem); font-weight:800; color:var(--color-secondary); text-wrap:balance; margin:0 0 var(--space-sm); line-height:1.15; }
.answer-block { font-size:1rem; line-height:1.78; color:var(--color-text); border-left:3px solid var(--color-accent); background:rgba(var(--color-accent-rgb),0.06); padding:var(--space-sm) var(--space-md); border-radius:0 var(--radius-sm) var(--radius-sm) 0; margin:0 0 var(--space-md); max-width:66ch; }
/* Radius section */
.radius-section { padding:var(--space-3xl) 0; background:var(--color-bg-alt,#f8f8f6); }
.radius-pullquote { font-family:var(--font-accent,'Fraunces',serif); font-size:clamp(1.6rem,3.5vw,2.6rem); font-weight:700; font-style:italic; color:var(--color-primary); text-wrap:balance; max-width:720px; margin:0 auto var(--space-2xl); text-align:center; line-height:1.3; }
.radius-pullquote em { color:var(--color-accent); font-style:normal; }
.city-grid { display:grid; grid-template-columns:repeat(4,1fr); gap:var(--space-md); }
.city-card { background:#fff; border-radius:var(--radius-lg); padding:var(--space-lg); border:1px solid rgba(0,0,0,0.06); box-shadow:var(--shadow-sm); transition:transform 0.25s,box-shadow 0.25s; position:relative; overflow:hidden; }
.city-card::after { content:''; position:absolute; top:0; left:0; right:0; height:3px; background:var(--color-accent); transform:scaleX(0); transform-origin:left; transition:transform 0.3s; }
.city-card:hover { transform:translateY(-4px); box-shadow:var(--shadow-md); }
.city-card:hover::after { transform:scaleX(1); }
.city-name { font-family:var(--font-heading,'Unbounded',sans-serif); font-size:1rem; font-weight:800; color:var(--color-primary); margin:0 0 var(--space-xs); }
.city-county { font-size:0.78rem; font-weight:600; color:var(--color-accent); text-transform:uppercase; letter-spacing:0.08em; margin:0 0 var(--space-sm); }
.city-desc { font-size:0.85rem; line-height:1.65; color:var(--color-text-light); margin:0; }
.city-primary-badge { display:inline-flex; align-items:center; gap:5px; background:rgba(var(--color-accent-rgb),0.12); border:1px solid rgba(var(--color-accent-rgb),0.3); color:var(--color-accent); font-size:0.72rem; font-weight:700; letter-spacing:0.08em; text-transform:uppercase; padding:3px 10px; border-radius:100px; margin-bottom:var(--space-xs); }
.city-card-link { display:inline-flex; align-items:center; gap:5px; color:var(--color-accent); font-size:0.82rem; font-weight:600; margin-top:var(--space-sm); border-top:1px solid rgba(0,0,0,0.06); padding-top:var(--space-sm); width:100%; transition:gap 0.2s; }
.city-card-link:hover { gap:8px; }
/* Coverage section */
.coverage-section { padding:var(--space-3xl) 0; background:var(--color-bg); }
.coverage-grid { display:grid; grid-template-columns:1.4fr 1fr; gap:var(--space-3xl); align-items:center; }
.coverage-image { border-radius:var(--radius-lg); overflow:hidden; box-shadow:var(--shadow-lg); position:relative; }
.coverage-image img { width:100%; height:440px; object-fit:cover; display:block; }
.coverage-badge { position:absolute; bottom:var(--space-md); left:var(--space-md); background:var(--color-primary); color:var(--color-secondary); border-radius:var(--radius); padding:var(--space-sm) var(--space-md); font-size:0.82rem; font-weight:700; display:flex; align-items:center; gap:6px; }
.coverage-badge span { color:var(--color-accent); font-family:var(--font-heading,'Unbounded',sans-serif); font-size:1.1rem; }
.coverage-stat-row { display:flex; gap:var(--space-xl); margin:var(--space-xl) 0; }
.cov-stat { display:flex; flex-direction:column; gap:4px; }
.cov-stat-num { font-family:var(--font-heading,'Unbounded',sans-serif); font-size:2.4rem; font-weight:800; color:var(--color-accent); line-height:1; }
.cov-stat-label { font-size:0.78rem; color:var(--color-text-light); text-transform:uppercase; letter-spacing:0.08em; }
.coverage-list { display:flex; flex-direction:column; gap:var(--space-sm); list-style:none; padding:0; margin:var(--space-lg) 0 0; }
.coverage-list li { display:flex; gap:var(--space-sm); align-items:flex-start; font-size:0.95rem; line-height:1.65; color:var(--color-text); }
.check-icon { width:20px; height:20px; border-radius:50%; background:var(--color-accent); display:flex; align-items:center; justify-content:center; flex-shrink:0; margin-top:2px; }
.check-icon svg { width:11px; height:11px; color:var(--color-primary); }
/* Comparison dark section */
.comparison-section { padding:var(--space-3xl) 0; background:var(--color-primary); }
.comparison-intro { text-align:center; margin-bottom:var(--space-2xl); }
.comparison-table { display:grid; grid-template-columns:2fr 1fr 1fr; border-radius:var(--radius-lg); overflow:hidden; border:1px solid rgba(255,255,255,0.1); }
.comp-header { background:rgba(255,255,255,0.06); padding:var(--space-md) var(--space-lg); font-family:var(--font-heading,'Unbounded',sans-serif); font-size:0.78rem; font-weight:700; text-transform:uppercase; letter-spacing:0.1em; color:rgba(255,255,255,0.5); }
.comp-header.ours { background:rgba(var(--color-accent-rgb),0.15); color:var(--color-accent); }
.comp-cell { padding:var(--space-md) var(--space-lg); font-size:0.9rem; color:rgba(255,255,255,0.75); border-top:1px solid rgba(255,255,255,0.06); display:flex; align-items:center; }
.comp-cell.feature { font-weight:600; color:rgba(255,255,255,0.9); }
.comp-cell.ours { background:rgba(var(--color-accent-rgb),0.06); }
.comp-cell.check { color:var(--color-accent); font-weight:700; }
.comp-cell.cross { color:rgba(255,255,255,0.3); }
/* FAQ section */
.faq-section { padding:var(--space-3xl) 0; background:var(--color-bg); }
.faq-grid { display:grid; grid-template-columns:1fr 1fr; gap:var(--space-3xl); align-items:start; }
.faq-sidebar-img { border-radius:var(--radius-lg); overflow:hidden; margin-bottom:var(--space-md); }
.faq-sidebar-img img { width:100%; height:260px; object-fit:cover; display:block; }
.faq-sidebar-note { background:rgba(var(--color-accent-rgb),0.08); border:1px solid rgba(var(--color-accent-rgb),0.2); border-radius:var(--radius); padding:var(--space-md); font-size:0.88rem; line-height:1.65; color:var(--color-text); }
.faq-list { display:flex; flex-direction:column; gap:var(--space-sm); }
.faq-item { border:1px solid rgba(0,0,0,0.08); border-radius:var(--radius); overflow:hidden; }
.faq-question { width:100%; text-align:left; background:none; border:none; padding:var(--space-md) var(--space-lg); font-family:var(--font-heading,'Unbounded',sans-serif); font-size:0.88rem; font-weight:700; color:var(--color-primary); cursor:pointer; display:flex; justify-content:space-between; align-items:center; gap:var(--space-md); line-height:1.4; transition:color 0.2s; }
.faq-question:hover { color:var(--color-accent); }
.faq-icon { width:18px; height:18px; flex-shrink:0; transition:transform 0.3s; }
.faq-item.open .faq-icon { transform:rotate(45deg); }
.faq-answer { display:none; padding:0 var(--space-lg) var(--space-md); font-size:0.9rem; line-height:1.78; color:var(--color-text-light); border-top:1px solid rgba(0,0,0,0.06); }
.faq-item.open .faq-answer { display:block; }
/* Services strip */
.services-strip-section { padding:var(--space-3xl) 0; background:var(--color-bg-alt); }
.services-strip-grid { display:grid; grid-template-columns:repeat(5,1fr); gap:var(--space-sm); margin-top:var(--space-2xl); }
.strip-card { background:#fff; border-radius:var(--radius); padding:var(--space-md); text-align:center; border:1px solid rgba(0,0,0,0.06); box-shadow:var(--shadow-sm); transition:transform 0.2s,box-shadow 0.2s; display:flex; flex-direction:column; align-items:center; gap:var(--space-sm); }
.strip-card:hover { transform:translateY(-3px); box-shadow:var(--shadow-md); }
.strip-card-icon { width:44px; height:44px; border-radius:50%; background:rgba(var(--color-accent-rgb),0.1); display:flex; align-items:center; justify-content:center; color:var(--color-accent); }
.strip-card-icon svg { width:20px; height:20px; }
.strip-card-name { font-family:var(--font-heading,'Unbounded',sans-serif); font-size:0.78rem; font-weight:700; color:var(--color-primary); line-height:1.3; }
.strip-card a { display:contents; color:inherit; }
/* Final CTA */
.final-cta-section { padding:var(--space-3xl) 0; background:var(--color-bg); text-align:center; }
.final-cta-icon { width:64px; height:64px; border-radius:50%; background:var(--color-primary); display:flex; align-items:center; justify-content:center; margin:0 auto var(--space-lg); color:var(--color-accent); }
.final-cta-icon svg { width:28px; height:28px; }
.cta-btn-group { display:flex; gap:var(--space-md); justify-content:center; flex-wrap:wrap; }
.btn-accent-lg { display:inline-flex; align-items:center; gap:8px; background:var(--color-accent); color:var(--color-primary); font-family:var(--font-heading,'Unbounded',sans-serif); font-size:0.85rem; font-weight:800; padding:16px 32px; border-radius:var(--radius); border:2px solid var(--color-accent); transition:all 0.2s; text-transform:uppercase; letter-spacing:0.04em; }
.btn-accent-lg:hover { background:#ffbb00; border-color:#ffbb00; transform:translateY(-2px); box-shadow:0 6px 24px rgba(var(--color-accent-rgb),0.4); }
.btn-dark-outline { display:inline-flex; align-items:center; gap:8px; background:transparent; color:var(--color-primary); font-family:var(--font-heading,'Unbounded',sans-serif); font-size:0.85rem; font-weight:700; padding:16px 32px; border-radius:var(--radius); border:2px solid rgba(0,0,0,0.2); transition:all 0.2s; text-transform:uppercase; letter-spacing:0.04em; }
.btn-dark-outline:hover { border-color:var(--color-primary); background:rgba(0,0,0,0.05); }
@media (max-width:1100px) { .area-hero-inner { grid-template-columns:1fr; } .hero-aside-card { display:none; } .coverage-grid { grid-template-columns:1fr; } .faq-grid { grid-template-columns:1fr; } .faq-sidebar { display:none; } }
@media (max-width:900px) { .city-grid { grid-template-columns:repeat(2,1fr); } .services-strip-grid { grid-template-columns:repeat(3,1fr); } }
@media (max-width:600px) { .city-grid { grid-template-columns:1fr 1fr; } .coverage-stat-row { flex-wrap:wrap; gap:var(--space-lg); } .comparison-table { grid-template-columns:1fr; } .comp-header:nth-child(2),.comp-cell:nth-child(3n) { display:none; } .services-strip-grid { grid-template-columns:repeat(2,1fr); } .area-hero { min-height:70vh; } }
</style>

<!-- HERO -->
<section class="area-hero" aria-label="A&S Contracting Services — service area coverage">
  <div class="map-pin-glow" aria-hidden="true"></div>
  <div class="area-hero-inner">
    <div>
      <nav class="hero-breadcrumb" aria-label="Breadcrumb"><a href="/">Home</a><span>›</span><span aria-current="page">Service Areas</span></nav>
      <span class="hero-eyebrow">Warrenton, MO — 50-Mile Radius</span>
      <h1>Where Does <span class="accent">A&amp;S Contracting</span><br>Serve in Missouri?</h1>
      <p class="hero-answer">A&amp;S Contracting Services is based in Warrenton, MO and serves residential and commercial clients within a 50-mile radius across Warren County, St. Charles County, Lincoln County, Montgomery County, and central Missouri. Roofing, siding, gutters, windows, drywall, and full-scale construction — one crew, full scope.</p>
      <div class="hero-trust-row">
        <span class="trust-pill"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>50-Mile Coverage</span>
        <span class="trust-pill"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>Licensed &amp; Insured</span>
        <span class="trust-pill"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><polyline points="20 6 9 17 4 12"/></svg>Free Written Estimates</span>
      </div>
      <div class="hero-cta-group">
        <a href="/contact/" class="btn-primary-svc">Check If We Serve Your Area</a>
        <a href="#coverage-cities" class="btn-ghost-svc">View Coverage Map</a>
      </div>
    </div>
    <aside class="hero-aside-card" aria-label="Quick estimate">
      <p class="aside-card-title">Request a Free Estimate</p>
      <form class="aside-form" action="<?php echo htmlspecialchars($formAction); ?>" method="POST">
        <input type="text"   name="_honey"          style="display:none !important" tabindex="-1" autocomplete="off" aria-hidden="true">
        <input type="hidden" name="_next"            value="/thank-you">
        <input type="hidden" name="_consent_version" value="v2.1">
        <input type="hidden" name="_consent_page"   value="<?php echo htmlspecialchars($_SERVER['REQUEST_URI']); ?>">
        <div class="form-group"><label for="sa-name">Your Name</label><input type="text" id="sa-name" name="name" placeholder="Jane Smith" required></div>
        <div class="form-group"><label for="sa-city">Your City</label><input type="text" id="sa-city" name="message" placeholder="e.g. Wright City, Wentzville…" required></div>
        <div class="form-group"><label for="sa-phone">Phone</label><input type="tel" id="sa-phone" name="phone" placeholder="(573) 555-0100" required></div>
        <div class="form-group"><label for="sa-email">Email</label><input type="email" id="sa-email" name="email" placeholder="you@email.com" required></div>
        <div class="form-group">
          <label for="sa-service">Service Needed</label>
          <select id="sa-service" name="service">
            <option value="">Select a service</option>
            <?php foreach ($services as $s): ?>
            <option value="<?php echo htmlspecialchars($s['name']); ?>"><?php echo htmlspecialchars($s['name']); ?></option>
            <?php endforeach; ?>
          </select>
        </div>
        <fieldset class="form-consent-fieldset">
          <legend class="form-consent-legend">Communication Consent</legend>
          <label class="form-consent-item"><input type="checkbox" name="email_opt_in" value="yes"><span class="consent-label"><strong>Email (optional):</strong> Receive emails about my inquiry.</span></label>
          <label class="form-consent-item"><input type="checkbox" name="sms_opt_in" value="yes"><span class="consent-label"><strong>SMS (optional):</strong> Receive texts. Msg &amp; data rates apply. Reply STOP to opt out.</span></label>
          <label class="form-consent-item"><input type="checkbox" name="terms_accepted" value="yes" required><span class="consent-label">I agree to the <a href="/privacy-policy/">Privacy Policy</a> &amp; <a href="/terms/">Terms</a>. <span class="required-star">*</span></span></label>
        </fieldset>
        <button type="submit" class="btn-form-submit">Check My Area →</button>
      </form>
    </aside>
  </div>
</section>

<div class="divider-wave" aria-hidden="true"><svg viewBox="0 0 1440 54" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg"><path d="M0,0 L0,27 Q360,54 720,27 Q1080,0 1440,27 L1440,54 L0,54 Z" fill="#f8f8f6"/></svg></div>

<!-- CITIES COVERED -->
<section class="radius-section" id="coverage-cities" aria-label="Cities A&S Contracting serves">
  <div class="container-sa">
    <p class="radius-pullquote">Most of central Missouri is within our reach — <em>50 miles</em> from Warrenton puts us in your driveway faster than a contractor who has to drive across St. Louis.</p>
    <div class="city-grid">

      <div class="city-card reveal-up reveal-delay-1">
        <span class="city-primary-badge">
          <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" aria-hidden="true"><polyline points="20 6 9 17 4 12"/></svg>
          Primary Base
        </span>
        <p class="city-name">Warrenton, MO</p>
        <p class="city-county">Warren County</p>
        <p class="city-desc">A&S is based in Warrenton. We respond fastest here and have completed projects throughout Old Town Warrenton, Route 47 corridor, and the newer subdivisions east of I-70.</p>
        <a href="/areas/warrenton-mo/" class="city-card-link">Warrenton contractor page →</a>
      </div>

      <div class="city-card reveal-up reveal-delay-2">
        <p class="city-name">Wright City, MO</p>
        <p class="city-county">Warren County</p>
        <p class="city-desc">Just 10 miles east on I-70. We regularly service roofing, siding, and gutter projects in Wright City, including homes in the subdivisions near Exit 203.</p>
        <a href="/areas/wright-city-mo/" class="city-card-link">Wright City contractor page →</a>
      </div>

      <div class="city-card reveal-up reveal-delay-3">
        <p class="city-name">Wentzville, MO</p>
        <p class="city-county">St. Charles County</p>
        <p class="city-desc">One of Missouri's fastest-growing cities. We handle exterior renovations and full interior work for homeowners across Wentzville's newer developments and established neighborhoods.</p>
        <a href="/areas/wentzville-mo/" class="city-card-link">Wentzville contractor page →</a>
      </div>

      <div class="city-card reveal-up reveal-delay-4">
        <p class="city-name">Troy, MO</p>
        <p class="city-county">Lincoln County</p>
        <p class="city-desc">We serve Lincoln County clients from Troy north. Roofing, siding, windows, and general contracting for rural properties and in-town residences throughout the area.</p>
        <a href="/areas/troy-mo/" class="city-card-link">Troy contractor page →</a>
      </div>

      <div class="city-card reveal-up reveal-delay-1">
        <p class="city-name">Washington, MO</p>
        <p class="city-county">Franklin County</p>
        <p class="city-desc">Southwest of Warren County, Washington sits within our service boundary. Full exterior and interior work for Franklin County homeowners along the Missouri River corridor.</p>
        <a href="/areas/washington-mo/" class="city-card-link">Washington contractor page →</a>
      </div>

      <div class="city-card reveal-up reveal-delay-2">
        <p class="city-name">Jonesburg, MO</p>
        <p class="city-county">Montgomery County</p>
        <p class="city-desc">Small-town Montgomery County clients just west of Warrenton. We serve rural and residential properties throughout Jonesburg and surrounding countryside.</p>
        <a href="/areas/jonesburg-mo/" class="city-card-link">Jonesburg contractor page →</a>
      </div>

      <div class="city-card reveal-up reveal-delay-3">
        <p class="city-name">Foristell, MO</p>
        <p class="city-county">Warren / St. Charles</p>
        <p class="city-desc">Right on the Warren-St. Charles county line at Exit 214. Roofing, gutters, and exterior work for homes off I-70 in Foristell and Truesdale.</p>
        <a href="/areas/foristell-mo/" class="city-card-link">Foristell contractor page →</a>
      </div>

      <div class="city-card reveal-up reveal-delay-4">
        <p class="city-name">Mexico, MO</p>
        <p class="city-county">Audrain County</p>
        <p class="city-desc">Northern edge of our 50-mile territory. General contracting and roofing for Audrain County clients in Mexico and surrounding rural communities.</p>
      </div>

    </div>
    <p style="margin-top:var(--space-xl);text-align:center;font-size:0.9rem;color:var(--color-text-light);">Don't see your city? <a href="/contact/" style="color:var(--color-accent);font-weight:600;">Contact us</a> — if you're within 50 miles of Warrenton, MO, we can almost certainly reach you.</p>
  </div>
</section>

<div class="divider-angle" aria-hidden="true"><svg viewBox="0 0 1440 40" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg"><polygon points="0,40 1440,0 1440,40" fill="#ffffff"/></svg></div>

<!-- COVERAGE DEEP DIVE -->
<section class="coverage-section" aria-label="Service coverage detail">
  <div class="container-sa">
    <div class="coverage-grid">
      <div class="coverage-image reveal-scale">
        <img src="<?php echo $bodyPhoto1; ?>" alt="A&S Contracting Services crew working on a Warren County home exterior" width="760" height="440" loading="lazy">
        <div class="coverage-badge">
          <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
          <span>50mi</span> from Warrenton, MO
        </div>
      </div>
      <div class="reveal-right">
        <span class="eyebrow-label">Coverage Details</span>
        <h2 class="section-h2">What does <span style="color:var(--color-accent);">50 miles</span> from Warrenton actually cover?</h2>
        <div class="answer-block">A 50-mile radius from Warrenton, MO spans from the eastern St. Charles County suburbs to central Missouri, from Lincoln County north to Audrain County, and from Montgomery County west to the Jefferson City approach. If your home is in that zone, A&S Contracting Services will come to you — no upcharge for distance within the territory.</div>
        <div class="coverage-stat-row">
          <div class="cov-stat">
            <span class="cov-stat-num">50</span>
            <span class="cov-stat-label">Mile radius</span>
          </div>
          <div class="cov-stat">
            <span class="cov-stat-num">5+</span>
            <span class="cov-stat-label">Counties served</span>
          </div>
          <div class="cov-stat">
            <span class="cov-stat-num">10+</span>
            <span class="cov-stat-label">Services offered</span>
          </div>
        </div>
        <ul class="coverage-list">
          <li><span class="check-icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" aria-hidden="true"><polyline points="20 6 9 17 4 12"/></svg></span>Warren County (primary territory — fastest response times)</li>
          <li><span class="check-icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" aria-hidden="true"><polyline points="20 6 9 17 4 12"/></svg></span>St. Charles County (Wentzville, Foristell, Lake Saint Louis)</li>
          <li><span class="check-icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" aria-hidden="true"><polyline points="20 6 9 17 4 12"/></svg></span>Lincoln County (Troy, Moscow Mills, Elsberry)</li>
          <li><span class="check-icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" aria-hidden="true"><polyline points="20 6 9 17 4 12"/></svg></span>Montgomery County (Jonesburg, Montgomery City)</li>
          <li><span class="check-icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" aria-hidden="true"><polyline points="20 6 9 17 4 12"/></svg></span>Franklin County (Washington, New Haven, Pacific)</li>
          <li><span class="check-icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" aria-hidden="true"><polyline points="20 6 9 17 4 12"/></svg></span>Audrain County (Mexico, Centralia edge)</li>
        </ul>
      </div>
    </div>
  </div>
</section>

<div class="divider-wave" aria-hidden="true"><svg viewBox="0 0 1440 54" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" style="transform:rotate(180deg);"><path d="M0,0 L0,27 Q360,54 720,27 Q1080,0 1440,27 L1440,54 L0,54 Z" fill="#000000"/></svg></div>

<!-- COMPARISON DARK -->
<section class="comparison-section" aria-label="Why hire local vs distant contractor">
  <div class="container-sa">
    <div class="comparison-intro">
      <span class="eyebrow-label" style="color:var(--color-accent);">Why Local Matters</span>
      <h2 class="section-h2-light">A&S vs. a contractor<br><span style="color:var(--color-accent);">outside Warren County</span></h2>
    </div>
    <div class="comparison-table" role="table" aria-label="Contractor comparison">
      <div class="comp-header" role="columnheader">What You Need</div>
      <div class="comp-header ours" role="columnheader">A&S Contracting</div>
      <div class="comp-header" role="columnheader">Distant Contractor</div>

      <div class="comp-cell feature" role="cell">Familiar with Warren County materials &amp; codes</div>
      <div class="comp-cell ours check" role="cell">&#10003; Yes — Warren County experience</div>
      <div class="comp-cell cross" role="cell">&#10005; Generic approach</div>

      <div class="comp-cell feature" role="cell">No travel fee within 50-mile territory</div>
      <div class="comp-cell ours check" role="cell">&#10003; Included — no upcharge</div>
      <div class="comp-cell cross" role="cell">&#10005; Often charged separately</div>

      <div class="comp-cell feature" role="cell">Fast scheduling in your area</div>
      <div class="comp-cell ours check" role="cell">&#10003; Typically 3–7 day estimate windows</div>
      <div class="comp-cell cross" role="cell">&#10005; 2–3 week backlogs common</div>

      <div class="comp-cell feature" role="cell">MO-licensed general contractor managing all trades</div>
      <div class="comp-cell ours check" role="cell">&#10003; One GC, full scope</div>
      <div class="comp-cell cross" role="cell">&#10005; Often subcontracts out of area</div>

      <div class="comp-cell feature" role="cell">Understands Missouri freeze-thaw and storm patterns</div>
      <div class="comp-cell ours check" role="cell">&#10003; Built for central MO climate</div>
      <div class="comp-cell cross" role="cell">&#10005; Varies</div>
    </div>
  </div>
</section>

<div class="divider-curve" aria-hidden="true"><svg viewBox="0 0 1440 54" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg"><path d="M0,54 Q720,0 1440,54 L1440,54 L0,54 Z" fill="#ffffff"/></svg></div>

<!-- SERVICES WE BRING TO YOUR AREA -->
<section class="services-strip-section" aria-label="Services available across all coverage areas">
  <div class="container-sa">
    <div style="text-align:center;margin-bottom:var(--space-sm);">
      <span class="eyebrow-label">Every Service, Every Area</span>
      <h2 class="section-h2">What services does A&amp;S bring<br><span style="color:var(--color-accent);">to your zip code?</span></h2>
      <div class="answer-block" style="margin:var(--space-md) auto;text-align:left;">Every service A&amp;S Contracting offers is available throughout the entire 50-mile coverage zone — not just in Warrenton. Roofing in Troy, drywall in Wentzville, windows in Washington — same crew, same quality, same pricing structure. Distance within the territory doesn't change what you get.</div>
    </div>
    <div class="services-strip-grid">
      <?php
      $stripIcons = ['roofing'=>'home','siding'=>'layers','gutters'=>'droplets','soffit'=>'grid','fascia'=>'ruler','windows-doors'=>'square','full-scale-interior-work'=>'layout-panel-left','exterior-work'=>'hammer','dry-wall'=>'wall-2','general-contracting'=>'hard-hat'];
      foreach ($services as $i => $s):
        $icon = $stripIcons[$s['slug']] ?? 'tool';
      ?>
      <div class="strip-card reveal-up reveal-delay-<?php echo ($i % 4) + 1; ?>">
        <a href="/services/<?php echo htmlspecialchars($s['slug']); ?>/">
          <div class="strip-card-icon"><i data-lucide="<?php echo $icon; ?>"></i></div>
          <span class="strip-card-name"><?php echo htmlspecialchars($s['name']); ?></span>
        </a>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<div class="divider-angle" aria-hidden="true"><svg viewBox="0 0 1440 40" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg"><polygon points="0,0 1440,40 1440,0" fill="#ffffff"/></svg></div>

<!-- FAQ -->
<section class="faq-section" aria-label="Service area FAQ">
  <div class="container-sa">
    <div class="faq-grid">
      <div class="faq-sidebar reveal-left">
        <div class="faq-sidebar-img">
          <img src="<?php echo $bodyPhoto2; ?>" alt="A&S Contracting Services job site in Warren County, MO" width="520" height="260" loading="lazy">
        </div>
        <div class="faq-sidebar-note">
          <strong>Not sure if we cover your address?</strong><br>
          The fastest way to confirm is to submit a request through our <a href="/contact/" style="color:var(--color-accent);">contact form</a>. Include your city or zip and we'll confirm coverage within one business day.
        </div>
      </div>
      <div class="reveal-right">
        <span class="eyebrow-label">Service Area Questions</span>
        <h2 class="section-h2">Common questions about<br><span style="color:var(--color-accent);">our coverage</span></h2>
        <div class="faq-list" role="list">

          <div class="faq-item" role="listitem">
            <button class="faq-question" aria-expanded="false">
              Do you charge extra for projects outside Warrenton?
              <svg class="faq-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg>
            </button>
            <div class="faq-answer">No travel fee applies to any location within our 50-mile service territory. If your project is at the very edge of our range or beyond, we'll let you know upfront — but for most of Warren, St. Charles, Lincoln, Franklin, and Montgomery County, no additional charge applies.</div>
          </div>

          <div class="faq-item" role="listitem">
            <button class="faq-question" aria-expanded="false">
              How quickly can A&S get to me for an estimate?
              <svg class="faq-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg>
            </button>
            <div class="faq-answer">For Warrenton and Warren County we typically schedule estimates within 2–4 business days. For outer coverage areas like Wentzville or Troy, estimate windows run 4–7 business days depending on current workload. Storm-damage situations are prioritized across the entire territory.</div>
          </div>

          <div class="faq-item" role="listitem">
            <button class="faq-question" aria-expanded="false">
              Do you work on commercial properties across the service area?
              <svg class="faq-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg>
            </button>
            <div class="faq-answer">Yes. A&S Contracting handles both residential and light commercial projects throughout the coverage area. This includes small office buildings, retail spaces, and mixed-use properties. Contact us for a scope review — we'll confirm whether the project fits our commercial capabilities before scheduling an estimate.</div>
          </div>

          <div class="faq-item" role="listitem">
            <button class="faq-question" aria-expanded="false">
              Are you licensed to pull permits in St. Charles County?
              <svg class="faq-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg>
            </button>
            <div class="faq-answer">Yes. As a Missouri-licensed general contractor, A&S can pull permits in any municipality within our service area, including St. Charles County jurisdictions like Wentzville. We manage the permit process for you — submitting applications, scheduling inspections, and ensuring final approval before closing out the job.</div>
          </div>

          <div class="faq-item" role="listitem">
            <button class="faq-question" aria-expanded="false">
              What if my project is just outside the 50-mile boundary?
              <svg class="faq-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg>
            </button>
            <div class="faq-answer">For large or complex projects just outside the standard boundary, reach out anyway. We evaluate case-by-case — a major renovation project at 60 miles may still be worth the trip, while a small repair at 55 miles might not be cost-effective for you. We'll be honest with you and recommend a local contractor if we can't serve you well.</div>
          </div>

        </div>
      </div>
    </div>
  </div>
</section>

<div class="divider-angle" aria-hidden="true"><svg viewBox="0 0 1440 40" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg"><polygon points="0,40 1440,0 1440,40" fill="#f8f8f6"/></svg></div>

<!-- FINAL CTA -->
<section class="final-cta-section" aria-label="Get a free estimate from A&S Contracting">
  <div class="container-sa">
    <div class="final-cta-icon" aria-hidden="true">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
    </div>
    <span class="eyebrow-label">Serving Your Area</span>
    <h2 class="section-h2" style="max-width:560px;margin:var(--space-sm) auto var(--space-md);">Ready to get started with a <span style="color:var(--color-accent);">free estimate?</span></h2>
    <p style="font-size:1rem;line-height:1.78;color:var(--color-text-light);max-width:48ch;margin:0 auto var(--space-2xl);">A&S Contracting Services provides free written estimates for all projects across our service territory. Submit your request and we'll confirm your area and schedule a time to come out — no obligation to move forward.</p>
    <div class="cta-btn-group">
      <a href="/contact/" class="btn-accent-lg">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/></svg>
        Get My Free Estimate
      </a>
      <a href="/services/" class="btn-dark-outline">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><line x1="8" y1="6" x2="21" y2="6"/><line x1="8" y1="12" x2="21" y2="12"/><line x1="8" y1="18" x2="21" y2="18"/><line x1="3" y1="6" x2="3.01" y2="6"/><line x1="3" y1="12" x2="3.01" y2="12"/><line x1="3" y1="18" x2="3.01" y2="18"/></svg>
        View All Services
      </a>
    </div>
  </div>
</section>

<?php include $_SERVER['DOCUMENT_ROOT'].'/includes/footer.php'; ?>
</body>
</html>
