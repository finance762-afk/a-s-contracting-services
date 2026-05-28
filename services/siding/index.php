<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
$thisSlug        = 'siding';
$pageTitle       = "Siding Contractor in Warrenton, MO | A&S Contracting Services";
$pageDescription = "Licensed siding contractor in Warrenton, MO. Vinyl, fiber cement & wood siding installation and repair for Warren County homes. Free estimates — A&S Contracting.";
$canonicalUrl    = $siteUrl . '/services/siding/';
$currentPage     = 'siding';
$cssVersion      = '2.0';
$pb              = 'https://db.pageone.cloud/storage/v1/object/public/client-assets/a-s-contracting-services/photos/';
$heroPhoto       = $pb . '1779984869042-6cwzvd-59-Aug_09__2025_12-39-54-JQC9.jpg';
$bodyPhoto1      = $pb . '1779985050543-4vablu-34-Mar_13__2025_16-37-22-A7P5.jpg';
$bodyPhoto2      = $pb . '1779985050970-aiyol1-48-Apr_21__2025_15-15-03-LmdP.jpg';
$bodyPhoto3      = $pb . '1779985051444-qjmrub-49-Apr_21__2025_15-15-08-wZNr.jpg';
$heroImagePreload = $heroPhoto;
$ogImage         = $heroPhoto;

$currentService = null;
foreach ($services as $svc) { if ($svc['slug'] === $thisSlug) { $currentService = $svc; break; } }

$svcPhotosRel = [
    'roofing'   => $pb . '1779984864659-a47kou-52-Aug_08__2025_00-31-27-YHMr.jpg',
    'gutters'   => $pb . '1779984936314-5pnhuy-43-Aug_06__2025_23-34-36-CJqa.jpg',
    'exterior-work' => $pb . '1779985048829-yoqujz-14-Mar_11__2025_23-54-47-qHie.jpg',
];
$svcIconsRel  = ['roofing' => 'home', 'gutters' => 'droplets', 'exterior-work' => 'wrench'];
$svcBulletsRel = [
    'roofing'      => ['Full replacements or repairs','Licensed residential & commercial','Insurance claim support'],
    'gutters'      => ['Seamless gutter install','Protects foundation & landscape','Cleaning & maintenance'],
    'exterior-work' => ['Complete exterior renovations','Siding, roofing, trim combined','Protect and refresh your home'],
];

$faqs = [
    [
        'question' => 'How much does siding installation cost in Warrenton, MO?',
        'answer'   => 'Siding installation costs in Warrenton typically range from $5,000 to $20,000 depending on home size, material selected, and whether existing siding needs removal. Vinyl siding is the most affordable option; fiber cement runs higher. A&S provides free on-site estimates with no obligation.',
    ],
    [
        'question' => 'What siding materials does A&S Contracting install near Warren County?',
        'answer'   => 'We install vinyl siding, fiber cement siding (such as HardiePlank), and wood siding on residential and commercial properties throughout Warren County, MO. During your free estimate, we walk through the pros, cons, and cost of each material for your specific home.',
    ],
    [
        'question' => 'How long does siding replacement take on a Warrenton home?',
        'answer'   => 'Most full siding replacements on Warrenton-area homes take 2 to 5 days depending on home size and material. Fiber cement takes longer to install than vinyl. We provide a project timeline with every written estimate so there are no scheduling surprises.',
    ],
    [
        'question' => 'Can A&S repair storm or hail damage to siding in Warren County?',
        'answer'   => 'Yes. Hail and wind damage to siding is common after Missouri storms, and we handle partial and full siding repairs across Warren County. We can assess the damage, document it for insurance purposes if needed, and match existing material as closely as possible.',
    ],
    [
        'question' => 'Will new siding improve my home\'s energy efficiency?',
        'answer'   => 'New siding, especially when installed with foam-backed insulation or house wrap, can meaningfully reduce air infiltration and improve thermal performance. Fiber cement and insulated vinyl options provide the best thermal benefit. We discuss insulation options during every siding estimate.',
    ],
    [
        'question' => 'Is A&S Contracting licensed for siding work in Missouri?',
        'answer'   => 'Yes. A&S Contracting Services is licensed and carries general liability insurance for all siding projects in Missouri. We operate within a 50-mile radius of Warrenton and can provide proof of licensing and insurance upon request before any work begins.',
    ],
];

$schemaData = [
    '@context' => 'https://schema.org',
    '@graph'   => [
        ['@type' => 'Service', '@id' => $siteUrl . '/services/siding/#service', 'name' => 'Siding', 'description' => $currentService['description'] ?? '', 'provider' => ['@id' => $siteUrl . '/#organization'], 'areaServed' => ['@type' => 'GeoCircle', 'geoMidpoint' => ['@type' => 'GeoCoordinates', 'latitude' => '38.8153', 'longitude' => '-91.1418'], 'geoRadius' => '80467'], 'url' => $canonicalUrl],
        ['@type' => 'BreadcrumbList', 'itemListElement' => [['@type' => 'ListItem', 'position' => 1, 'name' => 'Home', 'item' => $siteUrl . '/'], ['@type' => 'ListItem', 'position' => 2, 'name' => 'Services', 'item' => $siteUrl . '/services/'], ['@type' => 'ListItem', 'position' => 3, 'name' => 'Siding']]],
        ['@type' => 'FAQPage', 'mainEntity' => array_map(fn($f) => ['@type' => 'Question', 'name' => $f['question'], 'acceptedAnswer' => ['@type' => 'Answer', 'text' => $f['answer']]], $faqs)],
    ],
];
$schemaMarkup = json_encode($schemaData, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
?>
<body>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'; ?>

<style>
/* ═══════════════════════════════════════════════════════════════
   /services/siding/ — Page-specific styles — Premium tier ≥400L
   ═══════════════════════════════════════════════════════════════ */
.svc-hero {
  position: relative; min-height: 85vh; display: flex; align-items: center;
  background-image: url('<?php echo $heroPhoto; ?>');
  background-size: cover; background-position: center 40%;
  padding: calc(var(--nav-height, 72px) + var(--space-3xl)) 0 var(--space-3xl);
  overflow: hidden;
}
.svc-hero::before {
  content: ''; position: absolute; inset: 0;
  background: linear-gradient(108deg, rgba(var(--color-primary-rgb),0.91) 0%, rgba(var(--color-primary-rgb),0.70) 45%, rgba(var(--color-primary-rgb),0.25) 100%);
  z-index: 1;
}
.svc-hero::after {
  content: ''; position: absolute; inset: 0;
  background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 200 200' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.85' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='0.025'/%3E%3C/svg%3E");
  background-size: 220px; opacity: 0.04; z-index: 2; pointer-events: none;
}
.svc-hero-inner {
  position: relative; z-index: 3; max-width: var(--max-width, 1280px);
  margin: 0 auto; padding: 0 var(--space-lg);
  display: grid; grid-template-columns: 1fr 400px; gap: var(--space-2xl); align-items: center; width: 100%;
}
.hero-breadcrumb { display: flex; align-items: center; gap: var(--space-xs); font-size: 0.8rem; color: rgba(255,255,255,0.48); margin-bottom: var(--space-md); }
.hero-breadcrumb a { color: rgba(255,255,255,0.48); transition: color 0.2s; }
.hero-breadcrumb a:hover { color: var(--color-accent); }
.hero-breadcrumb span { color: rgba(255,255,255,0.28); }
.hero-eyebrow { display: inline-flex; align-items: center; gap: var(--space-xs); background: rgba(var(--color-accent-rgb),0.15); border: 1px solid rgba(var(--color-accent-rgb),0.45); color: var(--color-accent); font-size: 0.76rem; font-weight: 700; letter-spacing: 0.12em; text-transform: uppercase; padding: 5px 12px; border-radius: var(--radius-sm); margin-bottom: var(--space-md); }
.svc-hero h1 { font-family: var(--font-heading, 'Unbounded', sans-serif); font-size: clamp(2.2rem, 4.2vw, 3.6rem); font-weight: 800; line-height: 1.07; text-wrap: balance; color: var(--color-secondary); margin: 0 0 var(--space-md); }
.svc-hero h1 .accent { color: var(--color-accent); }
.hero-answer { font-size: 1.05rem; line-height: 1.78; color: rgba(255,255,255,0.76); max-width: 52ch; margin: 0 0 var(--space-xl); }
.hero-trust-row { display: flex; gap: var(--space-lg); flex-wrap: wrap; margin-bottom: var(--space-xl); }
.trust-pill { display: inline-flex; align-items: center; gap: 6px; background: rgba(255,255,255,0.1); border: 1px solid rgba(255,255,255,0.18); color: rgba(255,255,255,0.88); font-size: 0.82rem; font-weight: 600; padding: 6px 14px; border-radius: 100px; }
.trust-pill svg { width: 13px; height: 13px; color: var(--color-accent); }
.hero-cta-group { display: flex; gap: var(--space-md); flex-wrap: wrap; }
.btn-primary-svc { display: inline-flex; align-items: center; gap: 8px; background: var(--color-accent); color: var(--color-primary); font-family: var(--font-heading, 'Unbounded', sans-serif); font-size: 0.82rem; font-weight: 800; padding: 14px 28px; border-radius: var(--radius); border: 2px solid var(--color-accent); transition: all 0.2s ease; text-transform: uppercase; letter-spacing: 0.04em; }
.btn-primary-svc:hover { background: #ffbb00; border-color: #ffbb00; transform: translateY(-2px); box-shadow: 0 6px 20px rgba(var(--color-accent-rgb),0.4); }
.btn-ghost-svc { display: inline-flex; align-items: center; gap: 8px; background: transparent; color: var(--color-secondary); font-family: var(--font-heading, 'Unbounded', sans-serif); font-size: 0.82rem; font-weight: 700; padding: 14px 28px; border-radius: var(--radius); border: 2px solid rgba(255,255,255,0.3); transition: all 0.2s ease; text-transform: uppercase; letter-spacing: 0.04em; }
.btn-ghost-svc:hover { border-color: rgba(255,255,255,0.7); background: rgba(255,255,255,0.08); }

/* Hero aside form */
.hero-aside-card { background: rgba(255,255,255,0.97); border-radius: var(--radius-lg); padding: var(--space-xl); box-shadow: 0 24px 64px rgba(0,0,0,0.35); }
.aside-card-title { font-family: var(--font-heading, 'Unbounded', sans-serif); font-size: 1rem; font-weight: 800; color: var(--color-primary); margin: 0 0 var(--space-sm); }
.aside-form { display: flex; flex-direction: column; gap: var(--space-sm); }
.form-group { display: flex; flex-direction: column; gap: 4px; }
.form-group label { font-size: 0.78rem; font-weight: 600; color: var(--color-text-light); text-transform: uppercase; letter-spacing: 0.06em; }
.form-group input, .form-group select, .form-group textarea { width: 100%; padding: 10px 14px; border: 1.5px solid var(--color-border, #e2e2e2); border-radius: var(--radius-sm); font-size: 0.9rem; color: var(--color-text); background: var(--color-bg, #fff); transition: border-color 0.2s; font-family: var(--font-body, 'Inter', sans-serif); }
.form-group input:focus, .form-group select:focus, .form-group textarea:focus { outline: none; border-color: var(--color-accent); }
.form-consent-fieldset { border: none; padding: 0; margin: 0; display: flex; flex-direction: column; gap: var(--space-xs); }
.form-consent-legend { font-size: 0.78rem; font-weight: 700; color: var(--color-text-light); text-transform: uppercase; letter-spacing: 0.06em; margin-bottom: 6px; }
.form-consent-item { display: flex; gap: 8px; align-items: flex-start; cursor: pointer; }
.form-consent-item input[type="checkbox"] { width: 16px; height: 16px; flex-shrink: 0; margin-top: 2px; accent-color: var(--color-accent); }
.consent-label { font-size: 0.78rem; line-height: 1.55; color: var(--color-text-light); }
.consent-label a { color: var(--color-accent); }
.required-star { color: #c00; font-weight: 700; }
.btn-form-submit { width: 100%; background: var(--color-primary); color: var(--color-secondary); font-family: var(--font-heading, 'Unbounded', sans-serif); font-size: 0.82rem; font-weight: 800; padding: 14px; border: none; border-radius: var(--radius); cursor: pointer; transition: all 0.2s; letter-spacing: 0.04em; text-transform: uppercase; }
.btn-form-submit:hover { background: var(--color-accent); color: var(--color-primary); transform: translateY(-1px); }

/* Section structure */
.divider-wave { display: block; width: 100%; overflow: hidden; line-height: 0; }
.divider-wave svg { display: block; width: 100%; }
.divider-angle { display: block; width: 100%; overflow: hidden; line-height: 0; }
.divider-angle svg { display: block; width: 100%; }
.divider-curve { display: block; width: 100%; overflow: hidden; line-height: 0; }
.divider-curve svg { display: block; width: 100%; }
.container-svc { max-width: var(--max-width, 1280px); margin: 0 auto; padding: 0 var(--space-lg); }
.eyebrow-label { display: inline-block; font-size: 0.74rem; font-weight: 700; letter-spacing: 0.14em; text-transform: uppercase; color: var(--color-accent); margin-bottom: var(--space-sm); }
.section-h2 { font-family: var(--font-heading, 'Unbounded', sans-serif); font-size: clamp(1.6rem, 3vw, 2.4rem); font-weight: 800; color: var(--color-primary); text-wrap: balance; margin: 0 0 var(--space-sm); line-height: 1.15; }
.section-h2-light { font-family: var(--font-heading, 'Unbounded', sans-serif); font-size: clamp(1.6rem, 3vw, 2.4rem); font-weight: 800; color: var(--color-secondary); text-wrap: balance; margin: 0 0 var(--space-sm); line-height: 1.15; }
.answer-block { font-size: 1rem; line-height: 1.78; color: var(--color-text); border-left: 3px solid var(--color-accent); background: rgba(var(--color-accent-rgb), 0.06); padding: var(--space-sm) var(--space-md); border-radius: 0 var(--radius-sm) var(--radius-sm) 0; margin: 0 0 var(--space-md); max-width: 66ch; }

/* Problem statement */
.problem-section { padding: var(--space-3xl) 0; background: var(--color-bg-alt, #f8f8f6); }
.problem-pullquote { font-family: var(--font-accent, 'Fraunces', serif); font-size: clamp(1.6rem, 3.5vw, 2.8rem); font-weight: 700; font-style: italic; color: var(--color-primary); text-wrap: balance; max-width: 700px; margin: 0 auto var(--space-2xl); text-align: center; line-height: 1.3; }
.problem-pullquote em { color: var(--color-accent); font-style: normal; }
.bento-grid { display: grid; grid-template-columns: repeat(4, 1fr); gap: var(--space-md); }
@media (max-width: 900px) { .bento-grid { grid-template-columns: repeat(2, 1fr); } }
@media (max-width: 520px)  { .bento-grid { grid-template-columns: 1fr; } }
.bento-card { background: #fff; border-radius: var(--radius-lg); padding: var(--space-lg); border: 1px solid rgba(0,0,0,0.06); box-shadow: var(--shadow-sm); display: flex; flex-direction: column; gap: var(--space-sm); transition: transform 0.25s, box-shadow 0.25s; }
.bento-card:hover { transform: translateY(-4px); box-shadow: var(--shadow-md); }
.bento-icon { width: 48px; height: 48px; border-radius: var(--radius); background: rgba(var(--color-accent-rgb),0.1); display: flex; align-items: center; justify-content: center; color: var(--color-accent); }
.bento-icon svg { width: 22px; height: 22px; }
.bento-card h3 { font-family: var(--font-heading, 'Unbounded', sans-serif); font-size: 0.95rem; font-weight: 700; color: var(--color-primary); margin: 0; line-height: 1.3; }
.bento-card p { font-size: 0.875rem; line-height: 1.65; color: var(--color-text-light); margin: 0; }

/* Expert section */
.expert-section { padding: var(--space-3xl) 0; background: var(--color-bg); }
.expert-grid { display: grid; grid-template-columns: 1fr 1.6fr; gap: var(--space-3xl); align-items: center; }
.big-stat-num { font-family: var(--font-heading, 'Unbounded', sans-serif); font-size: clamp(3.5rem, 8vw, 6rem); font-weight: 800; color: var(--color-accent); line-height: 1; }
.big-stat-label { font-size: 0.82rem; color: var(--color-text-light); letter-spacing: 0.08em; text-transform: uppercase; }
.differentiator-list { display: flex; flex-direction: column; gap: var(--space-md); list-style: none; padding: 0; margin: var(--space-xl) 0 0; }
.differentiator-list li { display: flex; gap: var(--space-sm); align-items: flex-start; }
.diff-check { width: 22px; height: 22px; border-radius: 50%; background: var(--color-accent); display: flex; align-items: center; justify-content: center; flex-shrink: 0; margin-top: 2px; }
.diff-check svg { width: 12px; height: 12px; color: var(--color-primary); }
.diff-text { font-size: 0.95rem; line-height: 1.65; color: var(--color-text); }
.diff-text strong { color: var(--color-primary); font-weight: 700; }
.expert-image-wrap { position: relative; border-radius: var(--radius-lg); overflow: hidden; box-shadow: var(--shadow-lg); }
.expert-image-wrap img { width: 100%; height: 420px; object-fit: cover; display: block; }
.expert-image-badge { position: absolute; bottom: var(--space-md); left: var(--space-md); background: var(--color-primary); color: var(--color-secondary); border-radius: var(--radius); padding: var(--space-sm) var(--space-md); font-size: 0.82rem; font-weight: 700; display: flex; align-items: center; gap: 6px; }
.expert-image-badge span { color: var(--color-accent); }

/* Service breakdown */
.breakdown-section { padding: var(--space-3xl) 0; background: var(--color-bg-alt); }
.breakdown-grid { display: grid; grid-template-columns: 1fr 1fr; gap: var(--space-3xl); align-items: start; }
.breakdown-image { border-radius: var(--radius-lg); overflow: hidden; box-shadow: var(--shadow-lg); position: relative; }
.breakdown-image img { width: 100%; object-fit: cover; display: block; min-height: 360px; }
.breakdown-image-tag { position: absolute; top: var(--space-md); right: var(--space-md); background: var(--color-accent); color: var(--color-primary); font-size: 0.76rem; font-weight: 800; padding: 5px 12px; border-radius: var(--radius-sm); text-transform: uppercase; letter-spacing: 0.08em; }
.process-steps { display: flex; flex-direction: column; gap: 0; margin-top: var(--space-xl); position: relative; }
.process-steps::before { content: ''; position: absolute; left: 19px; top: 24px; bottom: 24px; width: 2px; background: linear-gradient(to bottom, var(--color-accent), rgba(var(--color-accent-rgb),0.1)); }
.process-step { display: flex; gap: var(--space-md); align-items: flex-start; padding: 0 0 var(--space-lg); position: relative; }
.step-num { width: 40px; height: 40px; border-radius: 50%; background: var(--color-primary); color: var(--color-accent); font-family: var(--font-heading, 'Unbounded', sans-serif); font-size: 0.82rem; font-weight: 800; display: flex; align-items: center; justify-content: center; flex-shrink: 0; z-index: 1; border: 3px solid var(--color-accent); }
.step-title { font-family: var(--font-heading, 'Unbounded', sans-serif); font-size: 0.9rem; font-weight: 700; color: var(--color-primary); margin: 0 0 4px; }
.step-desc { font-size: 0.88rem; line-height: 1.65; color: var(--color-text-light); margin: 0; }

/* Comparison */
.comparison-section { padding: var(--space-3xl) 0; background: var(--color-primary); }
.comparison-intro { text-align: center; margin-bottom: var(--space-2xl); }
.comparison-table { display: grid; grid-template-columns: 2fr 1fr 1fr; border-radius: var(--radius-lg); overflow: hidden; border: 1px solid rgba(255,255,255,0.1); }
.comp-header { background: rgba(255,255,255,0.06); padding: var(--space-md) var(--space-lg); font-family: var(--font-heading, 'Unbounded', sans-serif); font-size: 0.78rem; font-weight: 700; text-transform: uppercase; letter-spacing: 0.1em; color: rgba(255,255,255,0.5); }
.comp-header.ours { background: rgba(var(--color-accent-rgb),0.15); color: var(--color-accent); }
.comp-cell { padding: var(--space-md) var(--space-lg); font-size: 0.9rem; color: rgba(255,255,255,0.75); border-top: 1px solid rgba(255,255,255,0.06); display: flex; align-items: center; gap: var(--space-xs); }
.comp-cell.feature { font-weight: 600; color: rgba(255,255,255,0.9); }
.comp-cell.ours { background: rgba(var(--color-accent-rgb),0.06); }
.comp-cell.check { color: var(--color-accent); font-weight: 700; }
.comp-cell.cross { color: rgba(255,255,255,0.35); }

/* FAQ */
.faq-section { padding: var(--space-3xl) 0; background: var(--color-bg); }
.faq-grid { display: grid; grid-template-columns: 1fr 1fr; gap: var(--space-3xl); align-items: start; }
.faq-sidebar-img { border-radius: var(--radius-lg); overflow: hidden; margin-bottom: var(--space-md); }
.faq-sidebar-img img { width: 100%; height: 260px; object-fit: cover; display: block; }
.faq-sidebar-note { background: rgba(var(--color-accent-rgb),0.08); border: 1px solid rgba(var(--color-accent-rgb),0.2); border-radius: var(--radius); padding: var(--space-md); font-size: 0.88rem; line-height: 1.65; color: var(--color-text); }
.faq-list { display: flex; flex-direction: column; gap: var(--space-sm); }
.faq-item { border: 1px solid rgba(0,0,0,0.08); border-radius: var(--radius); overflow: hidden; }
.faq-question { width: 100%; text-align: left; background: none; border: none; padding: var(--space-md) var(--space-lg); font-family: var(--font-heading, 'Unbounded', sans-serif); font-size: 0.88rem; font-weight: 700; color: var(--color-primary); cursor: pointer; display: flex; justify-content: space-between; align-items: center; gap: var(--space-md); line-height: 1.4; transition: color 0.2s; }
.faq-question:hover { color: var(--color-accent); }
.faq-icon { width: 18px; height: 18px; flex-shrink: 0; transition: transform 0.3s; }
.faq-item.open .faq-icon { transform: rotate(45deg); }
.faq-answer { display: none; padding: 0 var(--space-lg) var(--space-md); font-size: 0.9rem; line-height: 1.78; color: var(--color-text-light); border-top: 1px solid rgba(0,0,0,0.06); }
.faq-item.open .faq-answer { display: block; }

/* Final CTA */
.final-cta-section { padding: var(--space-3xl) 0; background: var(--color-bg-alt); text-align: center; }
.final-cta-icon { width: 64px; height: 64px; border-radius: 50%; background: var(--color-primary); display: flex; align-items: center; justify-content: center; margin: 0 auto var(--space-lg); color: var(--color-accent); }
.final-cta-icon svg { width: 28px; height: 28px; }
.final-cta-section h2 { font-family: var(--font-heading, 'Unbounded', sans-serif); font-size: clamp(1.6rem, 3vw, 2.4rem); font-weight: 800; color: var(--color-primary); text-wrap: balance; margin: 0 0 var(--space-sm); }
.cta-btn-group { display: flex; gap: var(--space-md); justify-content: center; flex-wrap: wrap; }
.btn-accent-lg { display: inline-flex; align-items: center; gap: 8px; background: var(--color-accent); color: var(--color-primary); font-family: var(--font-heading, 'Unbounded', sans-serif); font-size: 0.85rem; font-weight: 800; padding: 16px 32px; border-radius: var(--radius); border: 2px solid var(--color-accent); transition: all 0.2s; text-transform: uppercase; letter-spacing: 0.04em; }
.btn-accent-lg:hover { background: #ffbb00; border-color: #ffbb00; transform: translateY(-2px); box-shadow: 0 6px 24px rgba(var(--color-accent-rgb),0.4); }
.btn-dark-outline { display: inline-flex; align-items: center; gap: 8px; background: transparent; color: var(--color-primary); font-family: var(--font-heading, 'Unbounded', sans-serif); font-size: 0.85rem; font-weight: 700; padding: 16px 32px; border-radius: var(--radius); border: 2px solid rgba(0,0,0,0.2); transition: all 0.2s; text-transform: uppercase; letter-spacing: 0.04em; }
.btn-dark-outline:hover { border-color: var(--color-primary); background: rgba(0,0,0,0.05); }

/* Related services */
.related-section { padding: var(--space-3xl) 0; background: var(--color-bg); }
.related-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: var(--space-md); margin-top: var(--space-2xl); }
.service-card-with-image { border-radius: var(--radius-md); overflow: hidden; display: flex; flex-direction: column; transition: transform 0.25s ease, box-shadow 0.25s ease; }
.service-card-with-image:hover { transform: translateY(-5px); box-shadow: var(--shadow-lg); }
.service-card__image { position: relative; aspect-ratio: 5 / 3; overflow: hidden; }
.service-card__image img { width: 100%; height: 100%; object-fit: cover; display: block; transition: transform 0.45s ease; }
.service-card-with-image:hover .service-card__image img { transform: scale(1.05); }
.service-card__body { padding: var(--space-lg) var(--space-md) var(--space-md); text-align: center; display: flex; flex-direction: column; align-items: center; gap: var(--space-sm); position: relative; flex: 1; }
.service-card__icon { width: 56px; height: 56px; border-radius: 50%; background: #fff; box-shadow: var(--shadow-md); display: flex; align-items: center; justify-content: center; margin-top: -44px; margin-bottom: var(--space-xs); color: var(--color-accent); }
.service-card__icon i, .service-card__icon svg { width: 26px; height: 26px; }
.service-card-with-image h3 { font-family: var(--font-heading, 'Unbounded', sans-serif); color: var(--color-primary); margin: 0; font-size: 1.1rem; line-height: 1.2; }
.service-card__desc { color: var(--color-text); margin: 0; font-size: 0.9rem; line-height: 1.55; }
.service-card-with-image ul { list-style: none; padding: 0; margin: var(--space-xs) 0 0; width: 100%; text-align: left; display: flex; flex-direction: column; gap: var(--space-xs); border-top: 1px solid rgba(0,0,0,0.06); padding-top: var(--space-md); }
.service-card-with-image ul li { font-size: 0.875rem; color: var(--color-text); padding-left: 1.25rem; position: relative; }
.service-card-with-image ul li::before { content: "•"; color: var(--color-accent); font-weight: 700; position: absolute; left: 0.25rem; top: 0; }
.service-card__cta { margin-top: auto; color: var(--color-accent); font-weight: 600; text-decoration: none; font-size: 0.9rem; border-top: 1px solid rgba(0,0,0,0.06); width: 100%; text-align: center; padding: var(--space-sm) 0 0; transition: color 0.2s; }
.service-card__cta::after { content: " →"; display: inline-block; transition: transform 0.2s; }
.service-card__cta:hover { color: var(--color-primary); }
.service-card__cta:hover::after { transform: translateX(3px); }
.card-tint-1 { background: rgba(var(--color-primary-rgb), 0.04); }
.card-tint-2 { background: rgba(var(--color-accent-rgb), 0.06); }
.card-tint-3 { background: rgba(var(--color-primary-rgb), 0.07); }

/* Responsive */
@media (max-width: 1100px) { .svc-hero-inner { grid-template-columns: 1fr; } .hero-aside-card { display: none; } .expert-grid { grid-template-columns: 1fr; } .breakdown-grid { grid-template-columns: 1fr; } .faq-grid { grid-template-columns: 1fr; } .faq-sidebar { display: none; } .comparison-table { grid-template-columns: 1.5fr 1fr 1fr; } }
@media (max-width: 900px) { .related-grid { grid-template-columns: 1fr 1fr; } }
@media (max-width: 520px) { .related-grid { grid-template-columns: 1fr; } .svc-hero { min-height: 70vh; } .comparison-table { grid-template-columns: 1fr; } .comp-header:nth-child(2), .comp-cell:nth-child(3n) { display: none; } }
</style>

<!-- HERO -->
<section class="svc-hero" aria-label="Siding contractor in Warrenton, MO">
  <div class="svc-hero-inner">
    <div class="svc-hero-text">
      <nav class="hero-breadcrumb" aria-label="Breadcrumb">
        <a href="/">Home</a><span>›</span><a href="/services/">Services</a><span>›</span><span aria-current="page">Siding</span>
      </nav>
      <span class="hero-eyebrow">Warrenton, MO — Warren County</span>
      <h1><span class="accent">Siding</span> Contractor<br>in Warrenton, Missouri</h1>
      <p class="hero-answer">A&amp;S Contracting Services is a licensed siding contractor based in Warrenton, MO, installing and repairing vinyl, fiber cement, and wood siding on homes and commercial properties across Warren County and a 50-mile radius of central Missouri. Free written estimates on every project.</p>
      <div class="hero-trust-row">
        <span class="trust-pill"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>Licensed &amp; Insured</span>
        <span class="trust-pill"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><polyline points="20 6 9 17 4 12"/></svg>Free Written Estimates</span>
        <span class="trust-pill"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>3+ Years in Missouri</span>
      </div>
      <div class="hero-cta-group">
        <a href="/contact/" class="btn-primary-svc">Get a Free Siding Estimate</a>
        <a href="#siding-process" class="btn-ghost-svc">How It Works</a>
      </div>
    </div>
    <aside class="hero-aside-card" aria-label="Quick estimate">
      <p class="aside-card-title">Request a Free Siding Estimate</p>
      <form class="aside-form" action="<?php echo htmlspecialchars($formAction); ?>" method="POST">
        <input type="text"   name="_honey"          style="display:none !important" tabindex="-1" autocomplete="off" aria-hidden="true">
        <input type="hidden" name="_next"            value="/thank-you">
        <input type="hidden" name="_consent_version" value="v2.1">
        <input type="hidden" name="_consent_page"   value="<?php echo htmlspecialchars($_SERVER['REQUEST_URI']); ?>">
        <input type="hidden" name="service"          value="Siding">
        <div class="form-group"><label for="s-name">Your Name</label><input type="text" id="s-name" name="name" placeholder="Jane Smith" required></div>
        <div class="form-group"><label for="s-phone">Phone</label><input type="tel" id="s-phone" name="phone" placeholder="(573) 555-0100" required></div>
        <div class="form-group"><label for="s-email">Email</label><input type="email" id="s-email" name="email" placeholder="you@email.com" required></div>
        <div class="form-group"><label for="s-msg">Brief Description</label><textarea id="s-msg" name="message" rows="2" placeholder="New install, repair, storm damage…"></textarea></div>
        <fieldset class="form-consent-fieldset">
          <legend class="form-consent-legend">Communication Consent</legend>
          <label class="form-consent-item"><input type="checkbox" name="email_opt_in" value="yes"><span class="consent-label"><strong>Email (optional):</strong> Receive emails about my inquiry.</span></label>
          <label class="form-consent-item"><input type="checkbox" name="sms_opt_in" value="yes"><span class="consent-label"><strong>SMS (optional):</strong> Receive texts. Msg &amp; data rates apply. Reply STOP to opt out.</span></label>
          <label class="form-consent-item"><input type="checkbox" name="terms_accepted" value="yes" required><span class="consent-label">I agree to the <a href="/privacy-policy/">Privacy Policy</a> &amp; <a href="/terms/">Terms</a>. <span class="required-star">*</span></span></label>
        </fieldset>
        <button type="submit" class="btn-form-submit">Send Estimate Request →</button>
      </form>
    </aside>
  </div>
</section>

<div class="divider-wave" aria-hidden="true"><svg viewBox="0 0 1440 54" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg"><path d="M0,0 L0,27 Q360,54 720,27 Q1080,0 1440,27 L1440,54 L0,54 Z" fill="#f8f8f6"/></svg></div>

<!-- PROBLEM STATEMENT -->
<section class="problem-section" aria-label="Signs you need siding work">
  <div class="container-svc">
    <p class="problem-pullquote">Faded, cracked, or buckling siding doesn't just look bad — it's letting <em>moisture into your walls</em> every rain cycle.</p>
    <div class="bento-grid">
      <div class="bento-card reveal-up reveal-delay-1">
        <div class="bento-icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg></div>
        <h3>Cracked or warped panels</h3>
        <p>Cracked vinyl or warped wood siding allows water to penetrate the sheathing behind. Missouri's freeze-thaw cycles accelerate this damage season by season.</p>
      </div>
      <div class="bento-card reveal-up reveal-delay-2">
        <div class="bento-icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M12 22s-8-4.5-8-10.8C4 6.1 7.8 2 12 2s8 4.1 8 9.2C20 17.5 12 22 12 22z"/></svg></div>
        <h3>Mold or mildew streaks</h3>
        <p>Dark vertical streaks or fuzzy growth on your siding surface signals moisture is trapped behind the panel, often feeding into the wall cavity.</p>
      </div>
      <div class="bento-card reveal-up reveal-delay-3">
        <div class="bento-icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><circle cx="12" cy="12" r="10"/><line x1="12" y1="8" x2="12" y2="16"/><line x1="8" y1="12" x2="16" y2="12"/></svg></div>
        <h3>Hail denting or pitting</h3>
        <p>Missouri hailstorms can dent vinyl and dimple aluminum siding. Even small impacts compromise the panel's weather seal. We document and repair storm-damaged siding across Warren County.</p>
      </div>
      <div class="bento-card reveal-up reveal-delay-4">
        <div class="bento-icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M3 3h7v7H3z"/><path d="M14 3h7v7h-7z"/><path d="M14 14h7v7h-7z"/><path d="M3 14h7v7H3z"/></svg></div>
        <h3>Higher heating and cooling bills</h3>
        <p>Older siding with no insulation backing lets conditioned air escape. Insulated vinyl or fiber cement with house wrap can cut air infiltration and reduce utility costs year-round.</p>
      </div>
    </div>
  </div>
</section>

<div class="divider-angle" aria-hidden="true"><svg viewBox="0 0 1440 40" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg"><polygon points="0,0 1440,40 1440,0" fill="#ffffff"/></svg></div>

<!-- EXPERT POSITIONING -->
<section class="expert-section" aria-label="Why A&S for siding">
  <div class="container-svc">
    <div class="expert-grid">
      <div class="reveal-left">
        <div class="big-stat"><span class="big-stat-num">50<span style="font-size:0.5em;color:var(--color-text-light);">mi</span></span><span class="big-stat-label">Radius from Warrenton, MO</span></div>
        <ul class="differentiator-list">
          <li><div class="diff-check"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" aria-hidden="true"><polyline points="20 6 9 17 4 12"/></svg></div><span class="diff-text"><strong>Material selection guidance.</strong> We'll walk through vinyl, fiber cement, and wood options with honest cost and durability comparisons for your specific home in Warrenton.</span></li>
          <li><div class="diff-check"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" aria-hidden="true"><polyline points="20 6 9 17 4 12"/></svg></div><span class="diff-text"><strong>Color and texture matching.</strong> If you need a partial repair, we'll find the closest match to your existing siding so the repair blends naturally with the rest of your home.</span></li>
          <li><div class="diff-check"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" aria-hidden="true"><polyline points="20 6 9 17 4 12"/></svg></div><span class="diff-text"><strong>Storm damage documentation.</strong> When hail or wind damages your siding, we assess, photograph, and help you understand the scope before you contact your insurance carrier.</span></li>
        </ul>
      </div>
      <div class="expert-image-wrap reveal-right">
        <img src="<?php echo $bodyPhoto1; ?>" alt="A&S Contracting Services siding installation on Warrenton, MO home" width="720" height="420" loading="lazy">
        <div class="expert-image-badge"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>Licensed — <span>Warren County, MO</span></div>
      </div>
    </div>
  </div>
</section>

<div class="divider-curve" aria-hidden="true"><svg viewBox="0 0 1440 60" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg"><path d="M0,0 Q720,60 1440,0 L1440,60 L0,60 Z" fill="#f8f8f6"/></svg></div>

<!-- SERVICE BREAKDOWN -->
<section id="siding-process" class="breakdown-section" aria-label="Siding process and what is included">
  <div class="container-svc">
    <div class="breakdown-grid">
      <div class="breakdown-image reveal-left">
        <img src="<?php echo $bodyPhoto2; ?>" alt="Siding installation in progress on Warren County, Missouri home" width="640" height="480" loading="lazy">
        <span class="breakdown-image-tag">Our Work</span>
      </div>
      <div class="reveal-right">
        <span class="eyebrow-label">The Process</span>
        <h2 class="section-h2">What's included in your siding project with A&amp;S?</h2>
        <p class="answer-block">Every siding project with A&amp;S Contracting Services includes a free on-site inspection, written quote, material selection walkthrough, licensed installation, and final cleanup. Estimates are free and there is no obligation to proceed after receiving your quote.</p>
        <div class="process-steps">
          <div class="process-step"><div class="step-num">1</div><div><p class="step-title">Free On-Site Inspection</p><p class="step-desc">We assess your existing siding, look for moisture damage behind panels, and measure the home's total square footage for accurate material estimates.</p></div></div>
          <div class="process-step"><div class="step-num">2</div><div><p class="step-title">Written Quote &amp; Material Selection</p><p class="step-desc">You receive a full line-itemized quote. We'll walk you through vinyl, fiber cement, and wood options with pricing and expected service life for each.</p></div></div>
          <div class="process-step"><div class="step-num">3</div><div><p class="step-title">Old Siding Removal</p><p class="step-desc">We remove existing panels, inspect the sheathing underneath for moisture damage or rot, and replace any compromised sections before new siding goes on.</p></div></div>
          <div class="process-step"><div class="step-num">4</div><div><p class="step-title">New Siding Installation</p><p class="step-desc">We install house wrap or insulation backer, then hang and finish new panels with all trim, corners, and J-channel properly sealed against Missouri weather.</p></div></div>
          <div class="process-step"><div class="step-num">5</div><div><p class="step-title">Cleanup &amp; Walkthrough</p><p class="step-desc">We haul all old material, clean the site, and do a full perimeter walkthrough with you to confirm the finish meets your expectations before payment.</p></div></div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- PROOF -->
<section style="padding:var(--space-3xl) 0;background:var(--color-bg);" aria-label="Recent siding work">
  <div class="container-svc">
    <div style="text-align:center;margin-bottom:var(--space-2xl);" class="reveal-up">
      <span class="eyebrow-label">Recent Work</span>
      <h2 class="section-h2" style="max-width:600px;margin:0 auto var(--space-sm);">What does completed siding work look like in Warrenton?</h2>
      <p class="answer-block" style="max-width:56ch;margin:0 auto;">Below is a sample of recent siding projects from A&amp;S Contracting Services in Warrenton and surrounding Warren County communities.</p>
    </div>
    <div style="display:grid;grid-template-columns:repeat(3,1fr);gap:var(--space-md);" class="reveal-up">
      <div style="border-radius:var(--radius-lg);overflow:hidden;box-shadow:var(--shadow);aspect-ratio:4/3;"><img src="<?php echo $bodyPhoto3; ?>" alt="Completed siding installation on Warrenton, MO home" width="480" height="360" loading="lazy" style="width:100%;height:100%;object-fit:cover;display:block;"></div>
      <div style="border-radius:var(--radius-lg);overflow:hidden;box-shadow:var(--shadow);aspect-ratio:4/3;"><img src="<?php echo $bodyPhoto1; ?>" alt="New vinyl siding on Warren County residential property" width="480" height="360" loading="lazy" style="width:100%;height:100%;object-fit:cover;display:block;"></div>
      <div style="border-radius:var(--radius-lg);overflow:hidden;box-shadow:var(--shadow);aspect-ratio:4/3;background:rgba(var(--color-accent-rgb),0.08);display:flex;flex-direction:column;align-items:center;justify-content:center;gap:var(--space-md);padding:var(--space-xl);"><svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" style="color:var(--color-accent);" aria-hidden="true"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg><p style="text-align:center;font-size:0.9rem;line-height:1.65;color:var(--color-text);">More project photos available — <a href="/contact/" style="color:var(--color-accent);font-weight:600;">ask at estimate time</a>.</p></div>
    </div>
  </div>
</section>

<div class="divider-wave" aria-hidden="true"><svg viewBox="0 0 1440 54" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg"><path d="M0,54 Q360,0 720,27 Q1080,54 1440,0 L1440,54 Z" fill="#000000"/></svg></div>

<!-- COMPARISON -->
<section class="comparison-section" aria-label="A&S vs other siding contractors">
  <div class="container-svc">
    <div class="comparison-intro reveal-up">
      <span class="eyebrow-label" style="color:var(--color-accent);">Why A&amp;S?</span>
      <h2 class="section-h2-light">How does A&amp;S compare to other <span style="color:var(--color-accent);">siding contractors</span> in Warrenton?</h2>
      <p style="color:rgba(255,255,255,0.6);max-width:54ch;margin:var(--space-sm) auto 0;font-size:0.95rem;line-height:1.75;">A&amp;S Contracting Services provides written estimates, licensed installation, storm documentation support, and a full walkthrough on every siding project in Warren County, MO.</p>
    </div>
    <div class="comparison-table reveal-up" role="table">
      <div class="comp-header" role="columnheader">What we offer</div>
      <div class="comp-header ours" role="columnheader">A&amp;S Contracting</div>
      <div class="comp-header" role="columnheader">Other Siders</div>
      <div class="comp-cell feature">Written estimate before work</div><div class="comp-cell ours check">✓ Always</div><div class="comp-cell cross">Often verbal</div>
      <div class="comp-cell feature">Licensed &amp; insured in MO</div><div class="comp-cell ours check">✓ Verified</div><div class="comp-cell cross">Varies</div>
      <div class="comp-cell feature">Storm damage documentation</div><div class="comp-cell ours check">✓ Included</div><div class="comp-cell cross">Not always</div>
      <div class="comp-cell feature">Material selection guidance</div><div class="comp-cell ours check">✓ Every estimate</div><div class="comp-cell cross">Not standard</div>
      <div class="comp-cell feature">Free on-site estimate</div><div class="comp-cell ours check">✓ No charge</div><div class="comp-cell cross">Some charge fees</div>
    </div>
  </div>
</section>

<div class="divider-angle" aria-hidden="true"><svg viewBox="0 0 1440 40" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg"><polygon points="0,40 1440,0 1440,40" fill="#ffffff"/></svg></div>

<!-- FAQ -->
<section class="faq-section" aria-label="Siding FAQ">
  <div class="container-svc">
    <div class="faq-grid">
      <div class="faq-sidebar reveal-left">
        <div class="faq-sidebar-img"><img src="<?php echo $heroPhoto; ?>" alt="Siding on Warren County, Missouri home" width="560" height="260" loading="lazy"></div>
        <div class="faq-sidebar-note"><strong>Question not listed?</strong><br>Contact us — we respond to all Warrenton-area siding inquiries within one business day.</div>
      </div>
      <div class="faq-content reveal-right">
        <span class="eyebrow-label">Common Questions</span>
        <h2 class="section-h2">What do Warrenton homeowners ask about siding?</h2>
        <p class="answer-block" style="margin:var(--space-sm) 0 var(--space-xl);">These are the most common siding questions from homeowners in Warrenton, MO and across Warren County before their free estimate.</p>
        <div class="faq-list">
          <?php foreach ($faqs as $faq): ?>
          <div class="faq-item">
            <button class="faq-question" aria-expanded="false"><?php echo htmlspecialchars($faq['question']); ?><svg class="faq-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg></button>
            <div class="faq-answer"><p><?php echo htmlspecialchars($faq['answer']); ?></p></div>
          </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- FINAL CTA -->
<section class="final-cta-section" aria-label="Get your free siding estimate">
  <div class="container-svc" style="text-align:center;">
    <div style="max-width:680px;margin:0 auto;" class="reveal-up">
      <div class="final-cta-icon" aria-hidden="true"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg></div>
      <span class="eyebrow-label" style="color:var(--color-accent);">Free estimate — no pressure</span>
      <h2>Ready to replace or repair your siding in Warrenton?</h2>
      <p class="answer-block" style="max-width:56ch;margin:var(--space-sm) auto var(--space-xl);">A&amp;S Contracting Services provides free on-site siding estimates — written, line-itemized, and delivered after a real inspection. We serve Warrenton, MO and a 50-mile radius across Warren County. Same-week appointments often available.</p>
      <div class="cta-btn-group">
        <a href="/contact/" class="btn-accent-lg">Get My Free Siding Estimate</a>
        <a href="/services/" class="btn-dark-outline">View All Services</a>
      </div>
    </div>
  </div>
</section>

<!-- RELATED SERVICES -->
<section class="related-section" aria-label="Other services">
  <div class="container-svc">
    <div style="text-align:center;margin-bottom:var(--space-2xl);" class="reveal-up">
      <span class="eyebrow-label">Also Available</span>
      <h2 class="section-h2">Other services you may need from A&amp;S Contracting</h2>
    </div>
    <div class="related-grid">
      <?php
      $ri = 0;
      foreach (['roofing','gutters','exterior-work'] as $rslug):
        $rsvc = null;
        foreach ($services as $s) { if ($s['slug'] === $rslug) { $rsvc = $s; break; } }
        if (!$rsvc) continue;
        $tints = ['card-tint-1','card-tint-2','card-tint-3'];
      ?>
      <article class="service-card-with-image <?php echo $tints[$ri % 3]; ?> reveal-up reveal-delay-<?php echo $ri+1; ?>">
        <div class="service-card__image"><img src="<?php echo htmlspecialchars($svcPhotosRel[$rslug]); ?>" alt="<?php echo htmlspecialchars($rsvc['name']); ?> in Warrenton, MO" width="480" height="288" loading="lazy"></div>
        <div class="service-card__body">
          <div class="service-card__icon"><i data-lucide="<?php echo $svcIconsRel[$rslug]; ?>"></i></div>
          <h3><?php echo htmlspecialchars($rsvc['name']); ?></h3>
          <p class="service-card__desc"><?php $d=$rsvc['description'];$p=strpos($d,'. ');echo htmlspecialchars($p!==false?substr($d,0,$p+1):$d); ?></p>
          <ul><?php foreach ($svcBulletsRel[$rslug] as $b): ?><li><?php echo htmlspecialchars($b); ?></li><?php endforeach; ?></ul>
          <a href="/services/<?php echo $rslug; ?>/" class="service-card__cta">Learn more</a>
        </div>
      </article>
      <?php $ri++; endforeach; ?>
    </div>
  </div>
</section>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
