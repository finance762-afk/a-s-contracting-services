<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
$cityName        = 'Troy';
$stateAbbr       = 'MO';
$countyName      = 'Lincoln County';
$citySlug        = 'troy-mo';
$pageTitle       = "Contractor in Troy, MO | A&S Contracting Services | Lincoln County";
$pageDescription = "Licensed general contractor serving Troy, MO and Lincoln County. Roofing, siding, gutters, windows & interior work for rural and in-town homes. Free estimates — A&S Contracting.";
$canonicalUrl    = $siteUrl . '/areas/troy-mo/';
$currentPage     = 'service-areas';
$cssVersion      = '2.1';

$pb         = 'https://db.pageone.cloud/storage/v1/object/public/client-assets/a-s-contracting-services/photos/';
$heroPhoto  = $pb . '1779985082241-xuoxbh-11-Feb_09__2026_15-26-29-L2wD.jpg';
$bodyPhoto1 = $pb . '1779984869042-6cwzvd-59-Aug_09__2025_12-39-54-JQC9.jpg';
$bodyPhoto2 = $pb . '1779985048829-yoqujz-14-Mar_11__2025_23-54-47-qHie.jpg';
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
                ['@type' => 'ListItem', 'position' => 3, 'name' => 'Troy, MO'],
            ],
        ],
        [
            '@type'       => 'Service',
            'name'        => 'General Contractor in Troy, MO',
            'description' => 'Licensed general contractor based in Warrenton, MO serving Troy and Lincoln County with roofing, siding, gutters, windows, drywall, and interior renovations.',
            'provider'    => ['@id' => $siteUrl . '/#organization'],
            'areaServed'  => [
                '@type'            => 'City',
                'name'             => 'Troy',
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
   /areas/troy-mo/ — Premium Area Page — A&S Contracting
   Signature technique: Lincoln County rural horizon gradient fade
   ============================================================ */

.city-hero {
  position: relative; min-height: 82vh; display: flex; align-items: center;
  background-image: url('<?php echo $heroPhoto; ?>');
  background-size: cover; background-position: center 35%;
  padding: calc(var(--nav-height,72px) + var(--space-3xl)) 0 var(--space-3xl);
  overflow: hidden;
}
.city-hero::before {
  content: ''; position: absolute; inset: 0;
  background: linear-gradient(105deg, rgba(var(--color-primary-rgb),0.97) 0%, rgba(var(--color-primary-rgb),0.78) 48%, rgba(var(--color-primary-rgb),0.22) 100%);
  z-index: 1;
}
.city-hero::after {
  content: ''; position: absolute; inset: 0;
  background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 200 200' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.85' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='0.025'/%3E%3C/svg%3E");
  background-size: 200px; opacity: 0.05; z-index: 2; pointer-events: none;
}
/* Signature: horizon glow for rural Lincoln County feel */
.city-hero .hero-horizon {
  position: absolute; left: 0; right: 0; bottom: 0; height: 40%;
  background: linear-gradient(to top, rgba(var(--color-accent-rgb),0.06) 0%, transparent 100%);
  z-index: 2; pointer-events: none;
}
.city-hero-inner {
  position: relative; z-index: 3; max-width: var(--max-width,1280px); margin: 0 auto;
  padding: 0 var(--space-lg); display: grid; grid-template-columns: 1fr 380px;
  gap: var(--space-2xl); align-items: center; width: 100%;
}
.hero-breadcrumb { display: flex; align-items: center; gap: var(--space-xs); font-size: 0.8rem; color: rgba(255,255,255,0.48); margin-bottom: var(--space-md); }
.hero-breadcrumb a { color: rgba(255,255,255,0.48); transition: color 0.2s; }
.hero-breadcrumb a:hover { color: var(--color-accent); }
.hero-breadcrumb span { color: rgba(255,255,255,0.28); }
.hero-eyebrow-badge { display: inline-flex; align-items: center; gap: var(--space-xs); background: rgba(var(--color-accent-rgb),0.15); border: 1px solid rgba(var(--color-accent-rgb),0.45); color: var(--color-accent); font-size: 0.76rem; font-weight: 700; letter-spacing: 0.12em; text-transform: uppercase; padding: 5px 12px; border-radius: var(--radius-sm); margin-bottom: var(--space-md); }
.city-hero h1 { font-family: var(--font-heading,'Unbounded',sans-serif); font-size: clamp(2rem,4vw,3.2rem); font-weight: 800; line-height: 1.08; text-wrap: balance; color: var(--color-secondary); margin: 0 0 var(--space-md); }
.city-hero h1 .accent { color: var(--color-accent); }
.hero-answer { font-size: 1.05rem; line-height: 1.78; color: rgba(255,255,255,0.76); max-width: 52ch; margin: 0 0 var(--space-xl); }
.hero-trust-row { display: flex; gap: var(--space-md); flex-wrap: wrap; margin-bottom: var(--space-xl); }
.trust-pill { display: inline-flex; align-items: center; gap: 6px; background: rgba(255,255,255,0.1); border: 1px solid rgba(255,255,255,0.18); color: rgba(255,255,255,0.88); font-size: 0.82rem; font-weight: 600; padding: 6px 14px; border-radius: 100px; }
.trust-pill svg { width: 13px; height: 13px; color: var(--color-accent); }
.hero-cta-row { display: flex; gap: var(--space-md); flex-wrap: wrap; }
.btn-primary-city { display: inline-flex; align-items: center; gap: 8px; background: var(--color-accent); color: var(--color-primary); font-family: var(--font-heading,'Unbounded',sans-serif); font-size: 0.82rem; font-weight: 800; padding: 14px 28px; border-radius: var(--radius); border: 2px solid var(--color-accent); transition: all 0.2s; text-transform: uppercase; letter-spacing: 0.04em; }
.btn-primary-city:hover { background: #ffbb00; border-color: #ffbb00; transform: translateY(-2px); box-shadow: 0 6px 20px rgba(var(--color-accent-rgb),0.4); }
.btn-ghost-city { display: inline-flex; align-items: center; gap: 8px; background: transparent; color: var(--color-secondary); font-family: var(--font-heading,'Unbounded',sans-serif); font-size: 0.82rem; font-weight: 700; padding: 14px 28px; border-radius: var(--radius); border: 2px solid rgba(255,255,255,0.3); transition: all 0.2s; text-transform: uppercase; letter-spacing: 0.04em; }
.btn-ghost-city:hover { border-color: rgba(255,255,255,0.7); background: rgba(255,255,255,0.08); }
.hero-form-card { background: rgba(255,255,255,0.97); border-radius: var(--radius-lg); padding: var(--space-xl); box-shadow: 0 24px 64px rgba(0,0,0,0.35); }
.form-card-title { font-family: var(--font-heading,'Unbounded',sans-serif); font-size: 1rem; font-weight: 800; color: var(--color-primary); margin: 0 0 var(--space-sm); }
.form-card-subtitle { font-size: 0.82rem; color: var(--color-text-light); margin: 0 0 var(--space-md); line-height: 1.5; }
.city-form { display: flex; flex-direction: column; gap: var(--space-sm); }
.city-form .fg { display: flex; flex-direction: column; gap: 4px; }
.city-form .fg label { font-size: 0.76rem; font-weight: 600; color: var(--color-text-light); text-transform: uppercase; letter-spacing: 0.06em; }
.city-form .fg input, .city-form .fg select { width: 100%; padding: 10px 14px; border: 1.5px solid var(--color-border,#e2e2e2); border-radius: var(--radius-sm); font-size: 0.9rem; color: var(--color-text); background: var(--color-bg,#fff); transition: border-color 0.2s; font-family: var(--font-body,'Inter',sans-serif); }
.city-form .fg input:focus, .city-form .fg select:focus { outline: none; border-color: var(--color-accent); }
.city-form-consent { border: none; padding: 0; margin: 0; display: flex; flex-direction: column; gap: 6px; }
.city-form-consent legend { font-size: 0.74rem; font-weight: 700; color: var(--color-text-light); text-transform: uppercase; letter-spacing: 0.06em; margin-bottom: 4px; }
.consent-row { display: flex; gap: 8px; align-items: flex-start; cursor: pointer; }
.consent-row input[type="checkbox"] { width: 15px; height: 15px; flex-shrink: 0; margin-top: 2px; accent-color: var(--color-accent); }
.consent-row span { font-size: 0.76rem; line-height: 1.5; color: var(--color-text-light); }
.consent-row span a { color: var(--color-accent); }
.required-star { color: #c00; font-weight: 700; }
.btn-city-submit { width: 100%; background: var(--color-primary); color: var(--color-secondary); font-family: var(--font-heading,'Unbounded',sans-serif); font-size: 0.82rem; font-weight: 800; padding: 14px; border: none; border-radius: var(--radius); cursor: pointer; transition: all 0.2s; letter-spacing: 0.04em; text-transform: uppercase; }
.btn-city-submit:hover { background: var(--color-accent); color: var(--color-primary); transform: translateY(-1px); }
.div-wave { display: block; width: 100%; overflow: hidden; line-height: 0; }
.div-wave svg, .div-angle svg, .div-curve svg { display: block; width: 100%; }
.div-angle { display: block; width: 100%; overflow: hidden; line-height: 0; }
.div-curve { display: block; width: 100%; overflow: hidden; line-height: 0; }
.ctr { max-width: var(--max-width,1280px); margin: 0 auto; padding: 0 var(--space-lg); }
.eyebrow { display: inline-block; font-size: 0.74rem; font-weight: 700; letter-spacing: 0.14em; text-transform: uppercase; color: var(--color-accent); margin-bottom: var(--space-sm); }
.sec-h2 { font-family: var(--font-heading,'Unbounded',sans-serif); font-size: clamp(1.6rem,3vw,2.4rem); font-weight: 800; color: var(--color-primary); text-wrap: balance; margin: 0 0 var(--space-sm); line-height: 1.15; }
.sec-h2-light { font-family: var(--font-heading,'Unbounded',sans-serif); font-size: clamp(1.6rem,3vw,2.4rem); font-weight: 800; color: var(--color-secondary); text-wrap: balance; margin: 0 0 var(--space-sm); line-height: 1.15; }
.identity-section { padding: var(--space-3xl) 0; background: var(--color-bg-alt,#f8f8f6); }
.identity-grid { display: grid; grid-template-columns: 1fr 1fr; gap: var(--space-3xl); align-items: center; }
.identity-img-wrap { position: relative; border-radius: var(--radius-lg); overflow: hidden; box-shadow: var(--shadow-lg); }
.identity-img-wrap img { width: 100%; height: 420px; object-fit: cover; display: block; transition: transform 0.5s; }
.identity-img-wrap:hover img { transform: scale(1.03); }
.identity-img-badge { position: absolute; bottom: var(--space-md); left: var(--space-md); background: var(--color-primary); color: var(--color-secondary); border-radius: var(--radius); padding: var(--space-sm) var(--space-md); font-size: 0.82rem; font-weight: 700; display: flex; align-items: center; gap: 6px; }
.identity-img-badge span { color: var(--color-accent); font-family: var(--font-heading,'Unbounded',sans-serif); }
.answer-block { font-size: 1rem; line-height: 1.78; color: var(--color-text); border-left: 3px solid var(--color-accent); background: rgba(var(--color-accent-rgb),0.06); padding: var(--space-sm) var(--space-md); border-radius: 0 var(--radius-sm) var(--radius-sm) 0; margin: 0 0 var(--space-lg); max-width: 64ch; }
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
.landmark-card { background: var(--color-bg-alt,#f8f8f6); border-radius: var(--radius); padding: var(--space-md) var(--space-lg); border-left: 3px solid var(--color-accent); position: relative; overflow: hidden; }
.landmark-card::before { content: ''; position: absolute; top: 0; right: 0; width: 60px; height: 100%; background: linear-gradient(90deg,transparent,rgba(var(--color-accent-rgb),0.05)); }
.landmark-name { font-family: var(--font-heading,'Unbounded',sans-serif); font-size: 0.9rem; font-weight: 700; color: var(--color-primary); margin: 0 0 4px; }
.landmark-desc { font-size: 0.85rem; color: var(--color-text-light); line-height: 1.55; margin: 0; }
.services-area-section { padding: var(--space-3xl) 0; background: var(--color-bg-alt,#f8f8f6); }
.services-strip { display: grid; grid-template-columns: repeat(5,1fr); gap: var(--space-sm); margin-top: var(--space-2xl); }
.svc-strip-card { background: #fff; border-radius: var(--radius); padding: var(--space-md); text-align: center; border: 1px solid rgba(0,0,0,0.06); box-shadow: var(--shadow-sm); transition: transform 0.2s,box-shadow 0.2s; display: flex; flex-direction: column; align-items: center; gap: var(--space-sm); }
.svc-strip-card:hover { transform: translateY(-3px); box-shadow: var(--shadow-md); }
.svc-strip-card a { display: contents; color: inherit; }
.svc-strip-icon { width: 44px; height: 44px; border-radius: 50%; background: rgba(var(--color-accent-rgb),0.1); display: flex; align-items: center; justify-content: center; color: var(--color-accent); }
.svc-strip-icon svg, .svc-strip-icon i { width: 20px; height: 20px; }
.svc-strip-name { font-family: var(--font-heading,'Unbounded',sans-serif); font-size: 0.76rem; font-weight: 700; color: var(--color-primary); line-height: 1.3; }
.why-section { padding: var(--space-3xl) 0; background: var(--color-primary); }
.why-grid { display: grid; grid-template-columns: 1fr 1fr; gap: var(--space-3xl); align-items: center; }
.why-list { display: flex; flex-direction: column; gap: var(--space-md); list-style: none; padding: 0; margin: var(--space-lg) 0 0; }
.why-item { display: flex; gap: var(--space-md); align-items: flex-start; }
.why-icon { width: 44px; height: 44px; border-radius: var(--radius-sm); background: rgba(var(--color-accent-rgb),0.15); border: 1px solid rgba(var(--color-accent-rgb),0.3); display: flex; align-items: center; justify-content: center; flex-shrink: 0; color: var(--color-accent); }
.why-icon svg { width: 20px; height: 20px; }
.why-item-title { font-family: var(--font-heading,'Unbounded',sans-serif); font-size: 0.9rem; font-weight: 700; color: var(--color-secondary); margin: 0 0 4px; }
.why-item-desc { font-size: 0.88rem; line-height: 1.65; color: rgba(255,255,255,0.62); margin: 0; }
.why-img-wrap { border-radius: var(--radius-lg); overflow: hidden; box-shadow: 0 24px 64px rgba(0,0,0,0.4); position: relative; }
.why-img-wrap img { width: 100%; height: 460px; object-fit: cover; display: block; }
.why-img-overlay { position: absolute; inset: 0; background: linear-gradient(to top,rgba(var(--color-primary-rgb),0.5) 0%,transparent 60%); }
.cta-section { padding: var(--space-3xl) 0; background: var(--color-bg); text-align: center; }
.cta-icon-ring { width: 72px; height: 72px; border-radius: 50%; background: var(--color-primary); display: flex; align-items: center; justify-content: center; margin: 0 auto var(--space-lg); color: var(--color-accent); }
.cta-icon-ring svg { width: 30px; height: 30px; }
.cta-subtitle { font-size: 1rem; line-height: 1.78; color: var(--color-text-light); max-width: 48ch; margin: 0 auto var(--space-2xl); }
.cta-btn-group { display: flex; gap: var(--space-md); justify-content: center; flex-wrap: wrap; }
.btn-accent-lg { display: inline-flex; align-items: center; gap: 8px; background: var(--color-accent); color: var(--color-primary); font-family: var(--font-heading,'Unbounded',sans-serif); font-size: 0.85rem; font-weight: 800; padding: 16px 32px; border-radius: var(--radius); border: 2px solid var(--color-accent); transition: all 0.2s; text-transform: uppercase; letter-spacing: 0.04em; }
.btn-accent-lg:hover { background: #ffbb00; border-color: #ffbb00; transform: translateY(-2px); box-shadow: 0 6px 24px rgba(var(--color-accent-rgb),0.4); }
.btn-outline-lg { display: inline-flex; align-items: center; gap: 8px; background: transparent; color: var(--color-primary); font-family: var(--font-heading,'Unbounded',sans-serif); font-size: 0.85rem; font-weight: 700; padding: 16px 32px; border-radius: var(--radius); border: 2px solid rgba(0,0,0,0.2); transition: all 0.2s; text-transform: uppercase; letter-spacing: 0.04em; }
.btn-outline-lg:hover { border-color: var(--color-primary); background: rgba(0,0,0,0.05); }
@media (max-width:1100px) { .city-hero-inner { grid-template-columns: 1fr; } .hero-form-card { display: none; } .identity-grid { grid-template-columns: 1fr; } .local-grid { grid-template-columns: 1fr; } .why-grid { grid-template-columns: 1fr; } }
@media (max-width:900px) { .services-strip { grid-template-columns: repeat(3,1fr); } }
@media (max-width:600px) { .services-strip { grid-template-columns: repeat(2,1fr); } .stat-row { flex-wrap: wrap; } .city-hero { min-height: 70vh; } .hero-cta-row { flex-direction: column; } }
</style>

<!-- HERO -->
<section class="city-hero" aria-label="General contractor services in Troy, MO">
  <div class="hero-horizon" aria-hidden="true"></div>
  <div class="city-hero-inner">
    <div>
      <nav class="hero-breadcrumb" aria-label="Breadcrumb">
        <a href="/">Home</a><span>›</span>
        <a href="/service-areas/">Service Areas</a><span>›</span>
        <span aria-current="page">Troy, MO</span>
      </nav>
      <span class="hero-eyebrow-badge">Lincoln County Seat — North of Warren County</span>
      <h1>General Contractor in <span class="accent">Troy, MO</span> — Lincoln County's Licensed GC</h1>
      <p class="hero-answer">A&S Contracting Services serves Troy, MO from our Warrenton base — 25 miles north. We handle roofing, siding, gutters, windows, drywall, and full interior renovations for Lincoln County homeowners in Troy and the surrounding rural communities. Free written estimates.</p>
      <div class="hero-trust-row">
        <span class="trust-pill">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
          Licensed &amp; Insured
        </span>
        <span class="trust-pill">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
          Lincoln County Coverage
        </span>
        <span class="trust-pill">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><polyline points="20 6 9 17 4 12"/></svg>
          Free Estimates
        </span>
      </div>
      <div class="hero-cta-row">
        <a href="/contact/" class="btn-primary-city">Get a Free Estimate in Troy</a>
        <a href="/services/" class="btn-ghost-city">View All Services</a>
      </div>
    </div>
    <aside class="hero-form-card" aria-label="Quick estimate form">
      <p class="form-card-title">Free Estimate — Troy, MO</p>
      <p class="form-card-subtitle">Lincoln County and surrounding areas — we come to you.</p>
      <form class="city-form" action="<?php echo htmlspecialchars($formAction); ?>" method="POST">
        <input type="text"   name="_honey"            style="display:none !important" tabindex="-1" autocomplete="off" aria-hidden="true">
        <input type="hidden" name="_next"              value="/thank-you">
        <input type="hidden" name="_consent_version"  value="v2.1">
        <input type="hidden" name="_consent_page"     value="<?php echo htmlspecialchars($_SERVER['REQUEST_URI']); ?>">
        <div class="fg"><label for="tr-name">Your Name</label><input type="text" id="tr-name" name="name" placeholder="Jane Smith" required></div>
        <div class="fg"><label for="tr-phone">Phone</label><input type="tel" id="tr-phone" name="phone" placeholder="(636) 555-0100" required></div>
        <div class="fg"><label for="tr-email">Email</label><input type="email" id="tr-email" name="email" placeholder="you@email.com" required></div>
        <div class="fg">
          <label for="tr-service">Service Needed</label>
          <select id="tr-service" name="service">
            <option value="">Select a service</option>
            <?php foreach ($services as $s): ?>
            <option value="<?php echo htmlspecialchars($s['name']); ?>"><?php echo htmlspecialchars($s['name']); ?></option>
            <?php endforeach; ?>
          </select>
        </div>
        <fieldset class="city-form-consent">
          <legend>Communication Consent</legend>
          <label class="consent-row"><input type="checkbox" name="email_opt_in" value="yes"><span><strong>Email (optional):</strong> Receive emails about my inquiry.</span></label>
          <label class="consent-row"><input type="checkbox" name="sms_opt_in" value="yes"><span><strong>SMS (optional):</strong> Texts. Msg &amp; data rates apply. Reply STOP.</span></label>
          <label class="consent-row"><input type="checkbox" name="terms_accepted" value="yes" required><span>I agree to the <a href="/privacy-policy/">Privacy Policy</a> &amp; <a href="/terms/">Terms</a>. <span class="required-star">*</span></span></label>
        </fieldset>
        <button type="submit" class="btn-city-submit">Request My Free Estimate →</button>
      </form>
    </aside>
  </div>
</section>

<div class="div-wave" aria-hidden="true"><svg viewBox="0 0 1440 54" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg"><path d="M0,0 L0,27 Q360,54 720,27 Q1080,0 1440,27 L1440,54 L0,54 Z" fill="#f8f8f6"/></svg></div>

<!-- IDENTITY / ANSWER -->
<section class="identity-section" aria-label="About A&S Contracting in Troy, MO">
  <div class="ctr">
    <div class="identity-grid">
      <div class="reveal-scale">
        <div class="identity-img-wrap">
          <img src="<?php echo $bodyPhoto1; ?>" alt="A&S Contracting Services crew working on a Troy, MO home" width="760" height="420" loading="lazy">
          <div class="identity-img-badge">
            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
            <span>Lincoln County,</span> MO
          </div>
        </div>
      </div>
      <div class="reveal-right">
        <span class="eyebrow">Troy, MO — Lincoln County</span>
        <h2 class="sec-h2">What does it mean to hire a licensed GC in <span style="color:var(--color-accent);">Troy and Lincoln County?</span></h2>
        <div class="answer-block">
          A&S Contracting Services is a licensed and insured general contractor based in Warrenton, MO — 25 miles south of Troy on Route 61. We serve Troy and Lincoln County homeowners with roofing, siding, gutters, soffit, fascia, windows, drywall, and full-scale interior renovations. Estimate windows of 4–6 business days for Troy projects.
        </div>
        <p class="prose-block">Troy is the Lincoln County seat — a mix of historic downtown properties, established residential neighborhoods along Route 61, and rural acreage homes throughout the county. We work across all of these: aging rooflines on 1970s–1990s builds in-town, outbuildings and accessory structures on rural properties, and window replacements in the newer subdivisions that have grown east of downtown.</p>
        <p class="prose-block">Lincoln County's climate is similar to Warren County — cold winters with ice and snow loading on roofs, spring hail, and summer heat. We specify materials rated for Missouri's climate and install them correctly from the start. If you're looking for a contractor near me in Troy, MO, A&S is your closest licensed GC.</p>
        <div class="stat-row">
          <div class="stat-item">
            <span class="stat-num" data-target="25">0</span>
            <span class="stat-lbl">Miles from Base</span>
          </div>
          <div class="stat-item">
            <span class="stat-num" data-target="10">0</span>
            <span class="stat-lbl">Services Available</span>
          </div>
          <div class="stat-item">
            <span class="stat-num" data-target="4">0</span>
            <span class="stat-lbl">Day Estimate Window</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<div class="div-angle" aria-hidden="true"><svg viewBox="0 0 1440 40" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg"><polygon points="0,40 1440,0 1440,40" fill="#ffffff"/></svg></div>

<!-- LOCAL DETAIL -->
<section class="local-section" aria-label="Troy, MO neighborhoods and local details">
  <div class="ctr">
    <div class="local-grid">
      <div class="reveal-left">
        <span class="eyebrow">Troy, Lincoln County</span>
        <h2 class="sec-h2">Projects throughout <span style="color:var(--color-accent);">Troy's neighborhoods and Lincoln County</span></h2>
        <p class="prose-block">Troy sits at the heart of Lincoln County, connected by Route 61 running north-south and Boone's Lick Road running east toward the river communities. The county has a mix of dense in-town residential, newer subdivisions east of downtown Troy, and rural agricultural properties spread across the county's rolling terrain.</p>
        <p class="prose-block">Rural properties in Lincoln County often have roofing and exterior systems that have been deferred for years — we see a lot of first-time full replacements on farm homes that have outgrown patchwork repairs. Our crew handles everything from simple gutter installs to multi-week full exterior renovations.</p>
        <ul class="local-detail-list">
          <li><span class="ck-icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" aria-hidden="true"><polyline points="20 6 9 17 4 12"/></svg></span>Historic downtown Troy and Route 61 corridor homes</li>
          <li><span class="ck-icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" aria-hidden="true"><polyline points="20 6 9 17 4 12"/></svg></span>Boone's Lick Road and rural Lincoln County acreage properties</li>
          <li><span class="ck-icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" aria-hidden="true"><polyline points="20 6 9 17 4 12"/></svg></span>Troy R-3 School District family neighborhoods</li>
          <li><span class="ck-icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" aria-hidden="true"><polyline points="20 6 9 17 4 12"/></svg></span>Moscow Mills, Elsberry, and Old Monroe area properties</li>
          <li><span class="ck-icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" aria-hidden="true"><polyline points="20 6 9 17 4 12"/></svg></span>Farm homes and outbuildings — roofing and exterior work</li>
        </ul>
      </div>
      <div class="local-sidebar reveal-right">
        <div class="landmark-card">
          <p class="landmark-name">Lincoln County Courthouse Area</p>
          <p class="landmark-desc">Older in-town Troy homes near the courthouse often have original roofing and wood fascia systems that are overdue for full replacement.</p>
        </div>
        <div class="landmark-card">
          <p class="landmark-name">Route 61 North Corridor</p>
          <p class="landmark-desc">The primary arterial through Troy — homes and properties along Route 61 from Troy north toward Elsberry are within our service zone.</p>
        </div>
        <div class="landmark-card">
          <p class="landmark-name">Rural Acreage Properties</p>
          <p class="landmark-desc">Large-lot properties throughout Lincoln County — we handle full exterior and interior renovation projects on rural homes, including outbuilding roofing.</p>
        </div>
        <div class="landmark-card">
          <p class="landmark-name">Moscow Mills & Old Monroe</p>
          <p class="landmark-desc">Smaller Lincoln County communities within our territory — same pricing, same crew, same quality as our primary Warren County projects.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<div class="div-wave" aria-hidden="true"><svg viewBox="0 0 1440 54" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" style="transform:rotate(180deg);"><path d="M0,0 L0,27 Q360,54 720,27 Q1080,0 1440,27 L1440,54 L0,54 Z" fill="#f8f8f6"/></svg></div>

<!-- SERVICES STRIP -->
<section class="services-area-section" aria-label="Services available in Troy, MO">
  <div class="ctr">
    <div style="text-align:center;margin-bottom:var(--space-sm);">
      <span class="eyebrow">Available in Troy, MO</span>
      <h2 class="sec-h2">All 10 A&S services in <span style="color:var(--color-accent);">Troy, MO and Lincoln County</span></h2>
      <div class="answer-block" style="margin:var(--space-md) auto;text-align:left;max-width:64ch;">Every A&S Contracting service is available in Troy and throughout Lincoln County — roofing, siding, gutters, soffit, fascia, windows &amp; doors, drywall, interior renovations, exterior work, and general contracting. Same pricing structure as our Warren County primary territory.</div>
    </div>
    <div class="services-strip">
      <?php
      $icons = ['roofing'=>'home','siding'=>'layers','gutters'=>'droplets','soffit'=>'grid','fascia'=>'ruler','windows-doors'=>'square','full-scale-interior-work'=>'layout-panel-left','exterior-work'=>'hammer','dry-wall'=>'wall-2','general-contracting'=>'hard-hat'];
      foreach ($services as $i => $s): $icon = $icons[$s['slug']] ?? 'tool'; ?>
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
<section class="why-section" aria-label="Why choose A&S Contracting in Troy, MO">
  <div class="ctr">
    <div class="why-grid">
      <div class="reveal-left">
        <span class="eyebrow" style="color:var(--color-accent);">Why A&S for Troy</span>
        <h2 class="sec-h2-light">Why Lincoln County homeowners choose <span style="color:var(--color-accent);">A&S Contracting</span></h2>
        <ul class="why-list">
          <li class="why-item">
            <span class="why-icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></span>
            <div>
              <p class="why-item-title">Missouri Licensed — Lincoln County Permit Pulls</p>
              <p class="why-item-desc">We're licensed as a Missouri general contractor and handle permit applications for Troy and Lincoln County projects. You don't need to coordinate with the county — we do it for you.</p>
            </div>
          </li>
          <li class="why-item">
            <span class="why-icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg></span>
            <div>
              <p class="why-item-title">Rural Property Experience</p>
              <p class="why-item-desc">Lincoln County has a lot of rural acreage homes and farm properties. We've worked on these — main homes, outbuildings, accessory structures — and understand the scope that comes with larger rural renovation projects.</p>
            </div>
          </li>
          <li class="why-item">
            <span class="why-icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/></svg></span>
            <div>
              <p class="why-item-title">Written Estimates — No Phone Guesses</p>
              <p class="why-item-desc">Every Troy estimate is in-person and written. We visit your property — whether it's in downtown Troy or on a rural Route 61 acreage — and deliver a complete scope and pricing breakdown.</p>
            </div>
          </li>
          <li class="why-item">
            <span class="why-icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg></span>
            <div>
              <p class="why-item-title">No Upcharge for Lincoln County Distance</p>
              <p class="why-item-desc">Troy falls within our standard 50-mile service territory. There's no travel fee or distance surcharge for projects in Troy — the same pricing structure applies as for our Warren County projects.</p>
            </div>
          </li>
        </ul>
      </div>
      <div class="why-img-wrap reveal-right">
        <img src="<?php echo $bodyPhoto2; ?>" alt="A&S Contracting Services working on a Lincoln County, MO property" width="640" height="460" loading="lazy">
        <div class="why-img-overlay"></div>
      </div>
    </div>
  </div>
</section>

<div class="div-angle" aria-hidden="true"><svg viewBox="0 0 1440 40" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg"><polygon points="0,0 1440,40 1440,0" fill="var(--color-primary)"/></svg></div>

<!-- CTA -->
<section class="cta-section" aria-label="Get a free estimate in Troy, MO">
  <div class="ctr">
    <div class="cta-icon-ring" aria-hidden="true">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/></svg>
    </div>
    <span class="eyebrow">Troy, MO Homeowners</span>
    <h2 class="sec-h2" style="max-width:560px;margin:var(--space-sm) auto var(--space-md);">Get a Free Estimate in <span style="color:var(--color-accent);">Troy, MO</span></h2>
    <p class="cta-subtitle">A&S Contracting Services covers Troy and all of Lincoln County. Submit your request and we'll confirm coverage, schedule an on-site estimate, and deliver a written quote — no obligation.</p>
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
    <p style="margin-top:var(--space-lg);font-size:0.85rem;color:var(--color-text-light);">Last Updated: <?php echo date('F Y'); ?> — Serving Troy, MO and Lincoln County.</p>
  </div>
</section>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
</body>
</html>
