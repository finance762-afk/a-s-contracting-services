<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
// ─── Page Setup ────────────────────────────────────────────
$thisSlug        = 'roofing';
$pageTitle       = "Roofing Contractor in Warrenton, MO | A&S Contracting Services";
$pageDescription = "Licensed roofing contractor in Warrenton, MO. Roof replacement, repair & installation for Warren County homes. Free estimates — A&S Contracting Services.";
$canonicalUrl    = $siteUrl . '/services/roofing/';
$currentPage     = 'roofing';
$cssVersion      = '2.1';

$pb              = 'https://db.pageone.cloud/storage/v1/object/public/client-assets/a-s-contracting-services/photos/';
$heroPhoto       = $pb . '1779984864659-a47kou-52-Aug_08__2025_00-31-27-YHMr.jpg';
$bodyPhoto1      = $pb . '1779984851004-bey4ix-53-Aug_08__2025_00-54-39-zixD.jpg';
$bodyPhoto2      = $pb . '1779985049692-2gmyz6-31-Mar_13__2025_16-36-11-MGgp.jpg';
$bodyPhoto3      = $pb . '1779985050122-4csoe0-32-Mar_13__2025_16-36-41-NptX.jpg';
$heroImagePreload = $heroPhoto;
$ogImage         = $heroPhoto;

// Find current service
$currentService = null;
foreach ($services as $svc) {
    if ($svc['slug'] === $thisSlug) { $currentService = $svc; break; }
}

// Related services (first 3 that aren't roofing)
$svcPhotos = [
    'siding'                   => $pb . '1779984869042-6cwzvd-59-Aug_09__2025_12-39-54-JQC9.jpg',
    'gutters'                  => $pb . '1779984936314-5pnhuy-43-Aug_06__2025_23-34-36-CJqa.jpg',
    'fascia'                   => $pb . '1779984953000-ootb3h-20-Aug_06__2025_14-16-18-XFFu.jpg',
];
$svcIcons = ['siding' => 'building-2', 'gutters' => 'droplets', 'fascia' => 'ruler'];
$svcBulletsRel = [
    'siding'  => ['Vinyl, fiber cement & wood','Storm & moisture damage repair','Boosts curb appeal immediately'],
    'gutters' => ['Seamless gutter installation','Protects foundation & landscaping','Cleaning & maintenance included'],
    'fascia'  => ['Premium long-term materials','Protects roof edge from rot','Pairs with gutter installation'],
];

// FAQs
$faqs = [
    [
        'question' => 'How much does a roof replacement cost in Warrenton, MO?',
        'answer'   => 'A full roof replacement in Warrenton typically ranges from $6,000 to $18,000 depending on roof size, pitch, and the material selected — asphalt shingles, architectural shingles, or metal. A&S Contracting Services provides a free on-site written estimate with no obligation.',
    ],
    [
        'question' => 'How long does a roof replacement take near Warren County?',
        'answer'   => 'Most residential roof replacements in the Warren County area take 1 to 3 days. A small single-story home can often be completed in one full day, while larger or steeper roofs may take 2 to 3 days. We provide a project timeline with every estimate.',
    ],
    [
        'question' => 'Does A&S handle storm damage roofing repairs in Warrenton?',
        'answer'   => 'Yes. Storm damage repair is one of our most common roofing calls in Warrenton and across Warren County. We assess hail, wind, and water damage, help document the damage for insurance purposes, and complete repairs quickly to stop further water intrusion.',
    ],
    [
        'question' => 'What roofing materials do you install in Missouri?',
        'answer'   => 'We install 3-tab asphalt shingles, dimensional (architectural) asphalt shingles, and metal roofing panels on residential and commercial properties throughout central Missouri. We recommend materials based on your roof pitch, home style, and budget.',
    ],
    [
        'question' => 'Are you licensed and insured for roofing work in Missouri?',
        'answer'   => 'Yes. A&S Contracting Services is fully licensed and carries general liability insurance covering all roofing projects in Missouri. We can provide proof of license and insurance before any work begins — just ask at estimate time.',
    ],
    [
        'question' => 'Do you offer free roofing estimates near me in Warrenton?',
        'answer'   => 'Absolutely. Every roofing project starts with a free, no-pressure on-site estimate. We assess your roof in person, measure square footage, identify problem areas, and deliver a written quote — no phone estimates, no surprise line items.',
    ],
];

// Schema
$schemaData = [
    '@context' => 'https://schema.org',
    '@graph'   => [
        [
            '@type'       => 'Service',
            '@id'         => $siteUrl . '/services/roofing/#service',
            'name'        => 'Roofing',
            'description' => $currentService['description'] ?? '',
            'provider'    => ['@id' => $siteUrl . '/#organization'],
            'areaServed'  => [
                '@type'       => 'GeoCircle',
                'geoMidpoint' => ['@type' => 'GeoCoordinates', 'latitude' => '38.8153', 'longitude' => '-91.1418'],
                'geoRadius'   => '80467',
            ],
            'url'         => $canonicalUrl,
        ],
        [
            '@type'           => 'BreadcrumbList',
            'itemListElement' => [
                ['@type' => 'ListItem', 'position' => 1, 'name' => 'Home',     'item' => $siteUrl . '/'],
                ['@type' => 'ListItem', 'position' => 2, 'name' => 'Services', 'item' => $siteUrl . '/services/'],
                ['@type' => 'ListItem', 'position' => 3, 'name' => 'Roofing'],
            ],
        ],
        [
            '@type'      => 'FAQPage',
            'mainEntity' => array_map(fn($f) => [
                '@type'          => 'Question',
                'name'           => $f['question'],
                'acceptedAnswer' => ['@type' => 'Answer', 'text' => $f['answer']],
            ], $faqs),
        ],
    ],
];
$schemaMarkup = json_encode($schemaData, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
?>
<body>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'; ?>

<style>
/* ═══════════════════════════════════════════════════════════════
   /services/roofing/ — Page-specific styles — Premium tier ≥400L
   All values use CSS custom properties only.
   ═══════════════════════════════════════════════════════════════ */

/* ─── HERO ────────────────────────────────────────────────── */
.svc-hero {
  position: relative;
  min-height: 88vh;
  display: flex;
  align-items: center;
  background-image: url('<?php echo $heroPhoto; ?>');
  background-size: cover;
  background-position: center 35%;
  padding: calc(var(--nav-height, 72px) + var(--space-3xl)) 0 var(--space-3xl);
  overflow: hidden;
}
.svc-hero::before {
  content: '';
  position: absolute;
  inset: 0;
  background: linear-gradient(
    110deg,
    rgba(var(--color-primary-rgb), 0.92) 0%,
    rgba(var(--color-primary-rgb), 0.75) 42%,
    rgba(var(--color-primary-rgb), 0.28) 100%
  );
  z-index: 1;
}
.svc-hero::after {
  content: '';
  position: absolute;
  inset: 0;
  background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 200 200' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.85' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='0.025'/%3E%3C/svg%3E");
  background-size: 220px;
  opacity: 0.04;
  z-index: 2;
  pointer-events: none;
}
.svc-hero-inner {
  position: relative;
  z-index: 3;
  max-width: var(--max-width, 1280px);
  margin: 0 auto;
  padding: 0 var(--space-lg);
  display: grid;
  grid-template-columns: 1fr 400px;
  gap: var(--space-2xl);
  align-items: center;
  width: 100%;
}
.svc-hero-text {}
.hero-breadcrumb {
  display: flex;
  align-items: center;
  gap: var(--space-xs);
  font-size: 0.8rem;
  color: rgba(255,255,255,0.48);
  margin-bottom: var(--space-md);
}
.hero-breadcrumb a { color: rgba(255,255,255,0.48); transition: color 0.2s; }
.hero-breadcrumb a:hover { color: var(--color-accent); }
.hero-breadcrumb span { color: rgba(255,255,255,0.28); }
.hero-eyebrow {
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
.svc-hero h1 {
  font-family: var(--font-heading, 'Unbounded', sans-serif);
  font-size: clamp(2.2rem, 4.2vw, 3.6rem);
  font-weight: 800;
  line-height: 1.07;
  text-wrap: balance;
  color: var(--color-secondary);
  margin: 0 0 var(--space-md);
}
.svc-hero h1 .accent { color: var(--color-accent); }
.hero-answer {
  font-size: 1.05rem;
  line-height: 1.78;
  color: rgba(255,255,255,0.76);
  max-width: 52ch;
  margin: 0 0 var(--space-xl);
}
.hero-trust-row {
  display: flex;
  gap: var(--space-lg);
  flex-wrap: wrap;
  margin-bottom: var(--space-xl);
}
.trust-pill {
  display: inline-flex;
  align-items: center;
  gap: 6px;
  background: rgba(255,255,255,0.1);
  border: 1px solid rgba(255,255,255,0.18);
  color: rgba(255,255,255,0.88);
  font-size: 0.82rem;
  font-weight: 600;
  padding: 6px 14px;
  border-radius: 100px;
}
.trust-pill svg { width: 13px; height: 13px; color: var(--color-accent); }
.hero-cta-group {
  display: flex;
  gap: var(--space-md);
  flex-wrap: wrap;
}
.btn-primary-svc {
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
  transition: all 0.2s ease;
  text-transform: uppercase;
  letter-spacing: 0.04em;
}
.btn-primary-svc:hover {
  background: #ffbb00;
  border-color: #ffbb00;
  transform: translateY(-2px);
  box-shadow: 0 6px 20px rgba(var(--color-accent-rgb),0.4);
}
.btn-ghost-svc {
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
  border: 2px solid rgba(255,255,255,0.3);
  transition: all 0.2s ease;
  text-transform: uppercase;
  letter-spacing: 0.04em;
}
.btn-ghost-svc:hover {
  border-color: rgba(255,255,255,0.7);
  background: rgba(255,255,255,0.08);
}

/* ─── HERO ASIDE CARD ─────────────────────────────────────── */
.hero-aside-card {
  background: rgba(255,255,255,0.97);
  border-radius: var(--radius-lg);
  padding: var(--space-xl);
  box-shadow: 0 24px 64px rgba(0,0,0,0.35);
}
.aside-card-title {
  font-family: var(--font-heading, 'Unbounded', sans-serif);
  font-size: 1rem;
  font-weight: 800;
  color: var(--color-primary);
  margin: 0 0 var(--space-sm);
}
.aside-form { display: flex; flex-direction: column; gap: var(--space-sm); }
.form-group { display: flex; flex-direction: column; gap: 4px; }
.form-group label {
  font-size: 0.78rem;
  font-weight: 600;
  color: var(--color-text-light);
  text-transform: uppercase;
  letter-spacing: 0.06em;
}
.form-group input,
.form-group select,
.form-group textarea {
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
.form-group input:focus,
.form-group select:focus,
.form-group textarea:focus {
  outline: none;
  border-color: var(--color-accent);
}
.form-consent-fieldset {
  border: none;
  padding: 0;
  margin: 0;
  display: flex;
  flex-direction: column;
  gap: var(--space-xs);
}
.form-consent-legend {
  font-size: 0.78rem;
  font-weight: 700;
  color: var(--color-text-light);
  text-transform: uppercase;
  letter-spacing: 0.06em;
  margin-bottom: 6px;
}
.form-consent-item {
  display: flex;
  gap: 8px;
  align-items: flex-start;
  cursor: pointer;
}
.form-consent-item input[type="checkbox"] {
  width: 16px;
  height: 16px;
  flex-shrink: 0;
  margin-top: 2px;
  accent-color: var(--color-accent);
}
.consent-label {
  font-size: 0.78rem;
  line-height: 1.55;
  color: var(--color-text-light);
}
.consent-label a { color: var(--color-accent); }
.required-star { color: #c00; font-weight: 700; }
.btn-form-submit {
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
.btn-form-submit:hover {
  background: var(--color-accent);
  color: var(--color-primary);
  transform: translateY(-1px);
}

/* ─── SECTION DIVIDERS ────────────────────────────────────── */
.divider-wave { display: block; width: 100%; overflow: hidden; line-height: 0; }
.divider-wave svg { display: block; width: 100%; }
.divider-angle { display: block; width: 100%; overflow: hidden; line-height: 0; }
.divider-angle svg { display: block; width: 100%; }
.divider-curve { display: block; width: 100%; overflow: hidden; line-height: 0; }
.divider-curve svg { display: block; width: 100%; }

/* ─── SECTION BASE ────────────────────────────────────────── */
.section { padding: var(--space-3xl) 0; }
.section-alt { background: var(--color-bg-alt, #f8f8f6); }
.section-dark { background: var(--color-primary); color: var(--color-secondary); }
.container-svc {
  max-width: var(--max-width, 1280px);
  margin: 0 auto;
  padding: 0 var(--space-lg);
}
.eyebrow-label {
  display: inline-block;
  font-size: 0.74rem;
  font-weight: 700;
  letter-spacing: 0.14em;
  text-transform: uppercase;
  color: var(--color-accent);
  margin-bottom: var(--space-sm);
}
.section-h2 {
  font-family: var(--font-heading, 'Unbounded', sans-serif);
  font-size: clamp(1.6rem, 3vw, 2.4rem);
  font-weight: 800;
  color: var(--color-primary);
  text-wrap: balance;
  margin: 0 0 var(--space-sm);
  line-height: 1.15;
}
.section-h2-light {
  font-family: var(--font-heading, 'Unbounded', sans-serif);
  font-size: clamp(1.6rem, 3vw, 2.4rem);
  font-weight: 800;
  color: var(--color-secondary);
  text-wrap: balance;
  margin: 0 0 var(--space-sm);
  line-height: 1.15;
}
.answer-block {
  font-size: 1rem;
  line-height: 1.78;
  color: var(--color-text);
  border-left: 3px solid var(--color-accent);
  background: rgba(var(--color-accent-rgb), 0.06);
  padding: var(--space-sm) var(--space-md);
  border-radius: 0 var(--radius-sm) var(--radius-sm) 0;
  margin: 0 0 var(--space-md);
  max-width: 66ch;
}

/* ─── PROBLEM STATEMENT ───────────────────────────────────── */
.problem-section { padding: var(--space-3xl) 0; background: var(--color-bg-alt, #f8f8f6); }
.problem-pullquote {
  font-family: var(--font-accent, 'Fraunces', serif);
  font-size: clamp(1.6rem, 3.5vw, 2.8rem);
  font-weight: 700;
  font-style: italic;
  color: var(--color-primary);
  text-wrap: balance;
  max-width: 700px;
  margin: 0 auto var(--space-2xl);
  text-align: center;
  line-height: 1.3;
}
.problem-pullquote em { color: var(--color-accent); font-style: normal; }
.bento-grid {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: var(--space-md);
}
@media (max-width: 900px) { .bento-grid { grid-template-columns: repeat(2, 1fr); } }
@media (max-width: 520px)  { .bento-grid { grid-template-columns: 1fr; } }
.bento-card {
  background: #fff;
  border-radius: var(--radius-lg);
  padding: var(--space-lg);
  border: 1px solid rgba(0,0,0,0.06);
  box-shadow: var(--shadow-sm);
  display: flex;
  flex-direction: column;
  gap: var(--space-sm);
  transition: transform 0.25s, box-shadow 0.25s;
}
.bento-card:hover { transform: translateY(-4px); box-shadow: var(--shadow-md); }
.bento-icon {
  width: 48px;
  height: 48px;
  border-radius: var(--radius);
  background: rgba(var(--color-accent-rgb), 0.1);
  display: flex;
  align-items: center;
  justify-content: center;
  color: var(--color-accent);
}
.bento-icon svg { width: 22px; height: 22px; }
.bento-card h3 {
  font-family: var(--font-heading, 'Unbounded', sans-serif);
  font-size: 0.95rem;
  font-weight: 700;
  color: var(--color-primary);
  margin: 0;
  line-height: 1.3;
}
.bento-card p {
  font-size: 0.875rem;
  line-height: 1.65;
  color: var(--color-text-light);
  margin: 0;
}

/* ─── EXPERT POSITIONING (ASYMMETRIC) ────────────────────── */
.expert-section { padding: var(--space-3xl) 0; background: var(--color-bg); }
.expert-grid {
  display: grid;
  grid-template-columns: 1fr 1.6fr;
  gap: var(--space-3xl);
  align-items: center;
}
.expert-stat-block {
  display: flex;
  flex-direction: column;
  gap: var(--space-xl);
}
.big-stat {
  display: flex;
  flex-direction: column;
  gap: 4px;
}
.big-stat-num {
  font-family: var(--font-heading, 'Unbounded', sans-serif);
  font-size: clamp(3.5rem, 8vw, 6rem);
  font-weight: 800;
  color: var(--color-accent);
  line-height: 1;
}
.big-stat-label {
  font-size: 0.82rem;
  color: var(--color-text-light);
  letter-spacing: 0.08em;
  text-transform: uppercase;
}
.differentiator-list {
  display: flex;
  flex-direction: column;
  gap: var(--space-md);
  list-style: none;
  padding: 0;
  margin: 0;
}
.differentiator-list li {
  display: flex;
  gap: var(--space-sm);
  align-items: flex-start;
}
.diff-check {
  width: 22px;
  height: 22px;
  border-radius: 50%;
  background: var(--color-accent);
  display: flex;
  align-items: center;
  justify-content: center;
  flex-shrink: 0;
  margin-top: 2px;
}
.diff-check svg { width: 12px; height: 12px; color: var(--color-primary); }
.diff-text { font-size: 0.95rem; line-height: 1.65; color: var(--color-text); }
.diff-text strong { color: var(--color-primary); font-weight: 700; }
.expert-image-wrap {
  position: relative;
  border-radius: var(--radius-lg);
  overflow: hidden;
  box-shadow: var(--shadow-lg);
}
.expert-image-wrap img { width: 100%; height: 420px; object-fit: cover; display: block; }
.expert-image-badge {
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
.expert-image-badge span { color: var(--color-accent); }

/* ─── SERVICE BREAKDOWN ───────────────────────────────────── */
.breakdown-section { padding: var(--space-3xl) 0; background: var(--color-bg-alt); }
.breakdown-grid {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: var(--space-3xl);
  align-items: start;
}
.breakdown-image {
  border-radius: var(--radius-lg);
  overflow: hidden;
  box-shadow: var(--shadow-lg);
  position: relative;
}
.breakdown-image img { width: 100%; height: 100%; object-fit: cover; display: block; min-height: 360px; }
.breakdown-image-tag {
  position: absolute;
  top: var(--space-md);
  right: var(--space-md);
  background: var(--color-accent);
  color: var(--color-primary);
  font-size: 0.76rem;
  font-weight: 800;
  padding: 5px 12px;
  border-radius: var(--radius-sm);
  text-transform: uppercase;
  letter-spacing: 0.08em;
}
.breakdown-content {}
.process-steps {
  display: flex;
  flex-direction: column;
  gap: 0;
  margin-top: var(--space-xl);
  position: relative;
}
.process-steps::before {
  content: '';
  position: absolute;
  left: 19px;
  top: 24px;
  bottom: 24px;
  width: 2px;
  background: linear-gradient(to bottom, var(--color-accent), rgba(var(--color-accent-rgb),0.1));
}
.process-step {
  display: flex;
  gap: var(--space-md);
  align-items: flex-start;
  padding: 0 0 var(--space-lg);
  position: relative;
}
.step-num {
  width: 40px;
  height: 40px;
  border-radius: 50%;
  background: var(--color-primary);
  color: var(--color-accent);
  font-family: var(--font-heading, 'Unbounded', sans-serif);
  font-size: 0.82rem;
  font-weight: 800;
  display: flex;
  align-items: center;
  justify-content: center;
  flex-shrink: 0;
  z-index: 1;
  border: 3px solid var(--color-accent);
}
.step-body {}
.step-title {
  font-family: var(--font-heading, 'Unbounded', sans-serif);
  font-size: 0.9rem;
  font-weight: 700;
  color: var(--color-primary);
  margin: 0 0 4px;
}
.step-desc {
  font-size: 0.88rem;
  line-height: 1.65;
  color: var(--color-text-light);
  margin: 0;
}

/* ─── COMPARISON ──────────────────────────────────────────── */
.comparison-section { padding: var(--space-3xl) 0; background: var(--color-primary); }
.comparison-intro { text-align: center; margin-bottom: var(--space-2xl); }
.comparison-table {
  display: grid;
  grid-template-columns: 2fr 1fr 1fr;
  border-radius: var(--radius-lg);
  overflow: hidden;
  border: 1px solid rgba(255,255,255,0.1);
}
.comp-header {
  background: rgba(255,255,255,0.06);
  padding: var(--space-md) var(--space-lg);
  font-family: var(--font-heading, 'Unbounded', sans-serif);
  font-size: 0.78rem;
  font-weight: 700;
  text-transform: uppercase;
  letter-spacing: 0.1em;
  color: rgba(255,255,255,0.5);
}
.comp-header.ours { background: rgba(var(--color-accent-rgb),0.15); color: var(--color-accent); }
.comp-row {
  display: contents;
}
.comp-cell {
  padding: var(--space-md) var(--space-lg);
  font-size: 0.9rem;
  color: rgba(255,255,255,0.75);
  border-top: 1px solid rgba(255,255,255,0.06);
  display: flex;
  align-items: center;
  gap: var(--space-xs);
}
.comp-cell.feature { font-weight: 600; color: rgba(255,255,255,0.9); }
.comp-cell.ours { background: rgba(var(--color-accent-rgb),0.06); }
.comp-cell.check { color: var(--color-accent); font-weight: 700; }
.comp-cell.cross { color: rgba(255,255,255,0.35); }

/* ─── FAQ ─────────────────────────────────────────────────── */
.faq-section { padding: var(--space-3xl) 0; background: var(--color-bg); }
.faq-grid {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: var(--space-3xl);
  align-items: start;
}
.faq-sidebar { position: sticky; top: 100px; }
.faq-sidebar-img { border-radius: var(--radius-lg); overflow: hidden; margin-bottom: var(--space-md); }
.faq-sidebar-img img { width: 100%; height: 260px; object-fit: cover; display: block; }
.faq-sidebar-note {
  background: rgba(var(--color-accent-rgb),0.08);
  border: 1px solid rgba(var(--color-accent-rgb),0.2);
  border-radius: var(--radius);
  padding: var(--space-md);
  font-size: 0.88rem;
  line-height: 1.65;
  color: var(--color-text);
}
.faq-sidebar-note strong { color: var(--color-primary); }
.faq-list { display: flex; flex-direction: column; gap: var(--space-sm); }
.faq-item {
  border: 1px solid rgba(0,0,0,0.08);
  border-radius: var(--radius);
  overflow: hidden;
  background: var(--color-bg);
}
.faq-question {
  width: 100%;
  text-align: left;
  background: none;
  border: none;
  padding: var(--space-md) var(--space-lg);
  font-family: var(--font-heading, 'Unbounded', sans-serif);
  font-size: 0.88rem;
  font-weight: 700;
  color: var(--color-primary);
  cursor: pointer;
  display: flex;
  justify-content: space-between;
  align-items: center;
  gap: var(--space-md);
  line-height: 1.4;
  transition: color 0.2s;
}
.faq-question:hover { color: var(--color-accent); }
.faq-icon { width: 18px; height: 18px; flex-shrink: 0; transition: transform 0.3s; }
.faq-item.open .faq-icon { transform: rotate(45deg); }
.faq-answer {
  display: none;
  padding: 0 var(--space-lg) var(--space-md);
  font-size: 0.9rem;
  line-height: 1.78;
  color: var(--color-text-light);
  border-top: 1px solid rgba(0,0,0,0.06);
}
.faq-item.open .faq-answer { display: block; }

/* ─── FINAL CTA ───────────────────────────────────────────── */
.final-cta-section {
  padding: var(--space-3xl) 0;
  background: var(--color-bg-alt);
  text-align: center;
}
.final-cta-inner { max-width: 680px; margin: 0 auto; }
.final-cta-icon {
  width: 64px;
  height: 64px;
  border-radius: 50%;
  background: var(--color-primary);
  display: flex;
  align-items: center;
  justify-content: center;
  margin: 0 auto var(--space-lg);
  color: var(--color-accent);
}
.final-cta-icon svg { width: 28px; height: 28px; }
.final-cta-section h2 { font-family: var(--font-heading, 'Unbounded', sans-serif); font-size: clamp(1.6rem, 3vw, 2.4rem); font-weight: 800; color: var(--color-primary); text-wrap: balance; margin: 0 0 var(--space-sm); }
.final-cta-section .answer-block { max-width: 56ch; margin: 0 auto var(--space-xl); text-align: left; }
.cta-btn-group { display: flex; gap: var(--space-md); justify-content: center; flex-wrap: wrap; }
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
.btn-accent-lg:hover { background: #ffbb00; border-color: #ffbb00; transform: translateY(-2px); box-shadow: 0 6px 24px rgba(var(--color-accent-rgb),0.4); }
.btn-dark-outline {
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
  border: 2px solid rgba(0,0,0,0.2);
  transition: all 0.2s;
  text-transform: uppercase;
  letter-spacing: 0.04em;
}
.btn-dark-outline:hover { border-color: var(--color-primary); background: rgba(0,0,0,0.05); }

/* ─── RELATED SERVICES ────────────────────────────────────── */
.related-section { padding: var(--space-3xl) 0; background: var(--color-bg); }
.related-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: var(--space-md);
  margin-top: var(--space-2xl);
}
@media (max-width: 900px)  { .related-grid { grid-template-columns: 1fr 1fr; } }
@media (max-width: 520px)  { .related-grid { grid-template-columns: 1fr; } }

/* ─── RESPONSIVE ──────────────────────────────────────────── */
@media (max-width: 1100px) {
  .svc-hero-inner { grid-template-columns: 1fr; }
  .hero-aside-card { display: none; }
  .expert-grid { grid-template-columns: 1fr; }
  .breakdown-grid { grid-template-columns: 1fr; }
  .faq-grid { grid-template-columns: 1fr; }
  .faq-sidebar { display: none; }
  .comparison-table { grid-template-columns: 1.5fr 1fr 1fr; }
}
@media (max-width: 700px) {
  .svc-hero { min-height: 70vh; }
  .comparison-table { grid-template-columns: 1fr; }
  .comp-header:nth-child(2), .comp-cell:nth-child(3n) { display: none; }
}
</style>

<!-- ─── SECTION 1: HERO ──────────────────────────────────── -->
<section class="svc-hero" aria-label="Roofing contractor in Warrenton, MO">
  <div class="svc-hero-inner">

    <div class="svc-hero-text">
      <nav class="hero-breadcrumb" aria-label="Breadcrumb">
        <a href="/">Home</a><span aria-hidden="true">›</span>
        <a href="/services/">Services</a><span aria-hidden="true">›</span>
        <span aria-current="page">Roofing</span>
      </nav>
      <span class="hero-eyebrow">Warrenton, MO — Warren County</span>
      <h1>
        <span class="accent">Roofing</span> Contractor<br>
        in Warrenton, Missouri
      </h1>
      <p class="hero-answer">
        A&amp;S Contracting Services is a licensed and insured roofing contractor based in Warrenton, MO, providing roof replacement, repair, and installation to homeowners and businesses across Warren County and a 50-mile radius of central Missouri. Free written estimates with no pressure to commit.
      </p>
      <div class="hero-trust-row">
        <span class="trust-pill">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
          Licensed &amp; Insured
        </span>
        <span class="trust-pill">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><polyline points="20 6 9 17 4 12"/></svg>
          Free Written Estimates
        </span>
        <span class="trust-pill">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
          3+ Years in Missouri
        </span>
      </div>
      <div class="hero-cta-group">
        <a href="/contact/" class="btn-primary-svc">Get a Free Roofing Estimate</a>
        <a href="#roofing-process" class="btn-ghost-svc">See How It Works</a>
      </div>
    </div>

    <aside class="hero-aside-card" aria-label="Quick estimate request">
      <p class="aside-card-title">Request a Free Roofing Estimate</p>
      <form class="aside-form" action="<?php echo htmlspecialchars($formAction); ?>" method="POST">
        <input type="text"   name="_honey"          style="display:none !important" tabindex="-1" autocomplete="off" aria-hidden="true">
        <input type="hidden" name="_next"            value="/thank-you">
        <input type="hidden" name="_consent_version" value="v2.1">
        <input type="hidden" name="_consent_page"   value="<?php echo htmlspecialchars($_SERVER['REQUEST_URI']); ?>">
        <input type="hidden" name="service"          value="Roofing">

        <div class="form-group">
          <label for="hero-name-r">Your Name</label>
          <input type="text" id="hero-name-r" name="name" placeholder="John Smith" required>
        </div>
        <div class="form-group">
          <label for="hero-phone-r">Phone Number</label>
          <input type="tel" id="hero-phone-r" name="phone" placeholder="(573) 555-0100" required>
        </div>
        <div class="form-group">
          <label for="hero-email-r">Email Address</label>
          <input type="email" id="hero-email-r" name="email" placeholder="you@email.com" required>
        </div>
        <div class="form-group">
          <label for="hero-msg-r">Brief Description</label>
          <textarea id="hero-msg-r" name="message" rows="2" placeholder="Roof repair, full replacement, storm damage…"></textarea>
        </div>

        <fieldset class="form-consent-fieldset">
          <legend class="form-consent-legend">Communication Consent</legend>
          <label class="form-consent-item">
            <input type="checkbox" name="email_opt_in" value="yes" class="consent-checkbox">
            <span class="consent-label"><strong>Email (optional):</strong> I agree to receive emails from A&amp;S Contracting Services about my inquiry.</span>
          </label>
          <label class="form-consent-item">
            <input type="checkbox" name="sms_opt_in" value="yes" class="consent-checkbox">
            <span class="consent-label"><strong>SMS (optional):</strong> I agree to receive texts. Msg &amp; data rates may apply. Reply STOP to opt out. <strong>Not required.</strong></span>
          </label>
          <label class="form-consent-item form-consent-required">
            <input type="checkbox" name="terms_accepted" value="yes" class="consent-checkbox" required>
            <span class="consent-label">I agree to the <a href="/privacy-policy/">Privacy Policy</a> and <a href="/terms/">Terms of Service</a>. <span class="required-star">*</span></span>
          </label>
        </fieldset>

        <button type="submit" class="btn-form-submit">Send Estimate Request →</button>
      </form>
    </aside>

  </div>
</section>

<!-- SVG Divider wave -->
<div class="divider-wave" aria-hidden="true">
  <svg viewBox="0 0 1440 54" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M0,0 L0,27 Q360,54 720,27 Q1080,0 1440,27 L1440,54 L0,54 Z" fill="#f8f8f6"/>
  </svg>
</div>

<!-- ─── SECTION 2: PROBLEM STATEMENT ────────────────────── -->
<section class="problem-section" aria-label="Signs you need roofing work">
  <div class="container-svc">
    <p class="problem-pullquote">
      A compromised roof doesn't wait — <em>every rain event</em> adds to the damage inside your walls.
    </p>
    <div class="bento-grid">
      <div class="bento-card reveal-up reveal-delay-1">
        <div class="bento-icon">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
        </div>
        <h3>Missing or curling shingles</h3>
        <p>When shingles curl upward or blow off entirely, the underlayment beneath them begins absorbing moisture within hours of the next rain.</p>
      </div>
      <div class="bento-card reveal-up reveal-delay-2">
        <div class="bento-icon">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M12 22s-8-4.5-8-10.8C4 6.1 7.8 2 12 2s8 4.1 8 9.2C20 17.5 12 22 12 22z"/></svg>
        </div>
        <h3>Dark water stains on ceilings</h3>
        <p>Brown or yellow ceiling stains in Warrenton homes are almost always traced to a roof leak — not condensation. Early action prevents drywall rot.</p>
      </div>
      <div class="bento-card reveal-up reveal-delay-3">
        <div class="bento-icon">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><circle cx="12" cy="12" r="3"/><path d="M12 1v3M12 20v3M4.22 4.22l2.12 2.12M17.66 17.66l2.12 2.12M1 12h3M20 12h3M4.22 19.78l2.12-2.12M17.66 6.34l2.12-2.12"/></svg>
        </div>
        <h3>Granules in the gutters</h3>
        <p>If you're seeing dark grit collecting in your gutters after rain, your shingles are shedding — a sign they're past 75% of their service life.</p>
      </div>
      <div class="bento-card reveal-up reveal-delay-4">
        <div class="bento-icon">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M8 3H5a2 2 0 0 0-2 2v3m18 0V5a2 2 0 0 0-2-2h-3m0 18h3a2 2 0 0 0 2-2v-3M3 16v3a2 2 0 0 0 2 2h3"/></svg>
        </div>
        <h3>Sagging roof deck</h3>
        <p>A dip or sag visible from the ground means the structural sheathing underneath is waterlogged. This is an emergency — call us same day.</p>
      </div>
    </div>
  </div>
</section>

<!-- SVG Divider angle -->
<div class="divider-angle" aria-hidden="true">
  <svg viewBox="0 0 1440 40" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
    <polygon points="0,0 1440,40 1440,0" fill="#ffffff"/>
  </svg>
</div>

<!-- ─── SECTION 3: EXPERT POSITIONING ───────────────────── -->
<section class="expert-section" aria-label="Why choose A&S for roofing">
  <div class="container-svc">
    <div class="expert-grid">
      <div class="expert-stat-block reveal-left">
        <div class="big-stat">
          <span class="big-stat-num">50<span style="font-size:0.5em;color:var(--color-text-light);">mi</span></span>
          <span class="big-stat-label">Service radius from Warrenton, MO</span>
        </div>
        <ul class="differentiator-list">
          <li>
            <div class="diff-check">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" aria-hidden="true"><polyline points="20 6 9 17 4 12"/></svg>
            </div>
            <span class="diff-text"><strong>Written estimate before any work starts.</strong> No verbal agreements — you get a line-itemized quote in writing so you know exactly what you're paying for.</span>
          </li>
          <li>
            <div class="diff-check">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" aria-hidden="true"><polyline points="20 6 9 17 4 12"/></svg>
            </div>
            <span class="diff-text"><strong>Licensed and insured in Missouri.</strong> Every crew member working on your roof is covered by our general liability policy — protecting your property and ours.</span>
          </li>
          <li>
            <div class="diff-check">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" aria-hidden="true"><polyline points="20 6 9 17 4 12"/></svg>
            </div>
            <span class="diff-text"><strong>Storm damage documentation.</strong> If hail or wind caused your roofing issue, we can help identify and photograph the damage to support your insurance claim process.</span>
          </li>
        </ul>
      </div>
      <div class="expert-image-wrap reveal-right">
        <img
          src="<?php echo $bodyPhoto1; ?>"
          alt="A&S Contracting Services completing a roofing project in Warrenton, Missouri"
          width="720"
          height="420"
          loading="lazy"
        >
        <div class="expert-image-badge">
          <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
          Licensed — <span>Warren County, MO</span>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- SVG Divider wave 2 -->
<div class="divider-curve" aria-hidden="true">
  <svg viewBox="0 0 1440 60" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M0,0 Q720,60 1440,0 L1440,60 L0,60 Z" fill="#f8f8f6"/>
  </svg>
</div>

<!-- ─── SECTION 4: SERVICE BREAKDOWN + PROCESS ──────────── -->
<section id="roofing-process" class="breakdown-section" aria-label="What's included and how the process works">
  <div class="container-svc">
    <div class="breakdown-grid">
      <div class="breakdown-image reveal-left">
        <img
          src="<?php echo $bodyPhoto2; ?>"
          alt="Roofing installation process in Warrenton, MO — A&S Contracting Services"
          width="640"
          height="480"
          loading="lazy"
        >
        <span class="breakdown-image-tag">Our Work</span>
      </div>
      <div class="breakdown-content reveal-right">
        <span class="eyebrow-label">Step by step</span>
        <h2 class="section-h2">What's included in your roofing project with A&amp;S?</h2>
        <p class="answer-block">
          Every roofing project with A&amp;S Contracting Services in Warrenton includes a full initial inspection, written scope of work, material selection guidance, licensed installation, and final walkthrough. We don't charge for estimates and we don't start work until you sign off on the written quote.
        </p>
        <div class="process-steps">
          <div class="process-step">
            <div class="step-num">1</div>
            <div class="step-body">
              <p class="step-title">Free On-Site Inspection</p>
              <p class="step-desc">We come to your Warrenton-area property, walk the roof, check flashing, gutters, and attic ventilation, and photograph any problem areas.</p>
            </div>
          </div>
          <div class="process-step">
            <div class="step-num">2</div>
            <div class="step-body">
              <p class="step-title">Written Quote — No Surprises</p>
              <p class="step-desc">You receive a line-itemized quote covering materials, labor, teardown, and cleanup. Questions are welcome — we explain every line.</p>
            </div>
          </div>
          <div class="process-step">
            <div class="step-num">3</div>
            <div class="step-body">
              <p class="step-title">Material Selection</p>
              <p class="step-desc">Choose from 3-tab asphalt, architectural shingles, or metal roofing. We'll recommend the right material for your roof pitch and local Missouri weather.</p>
            </div>
          </div>
          <div class="process-step">
            <div class="step-num">4</div>
            <div class="step-body">
              <p class="step-title">Professional Installation</p>
              <p class="step-desc">Our licensed crew handles full tear-off, deck inspection, new underlayment, and shingle installation — typically 1 to 3 days for most Warrenton homes.</p>
            </div>
          </div>
          <div class="process-step">
            <div class="step-num">5</div>
            <div class="step-body">
              <p class="step-title">Cleanup &amp; Final Walkthrough</p>
              <p class="step-desc">We nail-sweep the property, remove all old material, and walk the roof with you before collecting final payment.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ─── SECTION 5: PROOF ──────────────────────────────────── -->
<section class="section" style="background:var(--color-bg);" aria-label="Recent roofing work">
  <div class="container-svc">
    <div style="text-align:center; margin-bottom:var(--space-2xl);" class="reveal-up">
      <span class="eyebrow-label">Recent Projects</span>
      <h2 class="section-h2" style="max-width:600px;margin:0 auto var(--space-sm);">What does A&amp;S roofing work look like near Warrenton?</h2>
      <p class="answer-block" style="max-width:56ch;margin:0 auto;">A&amp;S Contracting Services has completed roofing projects across Warrenton and Warren County, MO. Below is a sample of recent residential work — replacement, repair, and storm recovery.</p>
    </div>
    <div style="display:grid;grid-template-columns:repeat(3,1fr);gap:var(--space-md);" class="reveal-up">
      <div style="border-radius:var(--radius-lg);overflow:hidden;box-shadow:var(--shadow);aspect-ratio:4/3;">
        <img src="<?php echo $bodyPhoto3; ?>" alt="Completed roofing replacement on Warrenton, MO home" width="480" height="360" loading="lazy" style="width:100%;height:100%;object-fit:cover;display:block;">
      </div>
      <div style="border-radius:var(--radius-lg);overflow:hidden;box-shadow:var(--shadow);aspect-ratio:4/3;">
        <img src="<?php echo $bodyPhoto1; ?>" alt="Roofing repair and shingle installation by A&S Contracting in Warren County" width="480" height="360" loading="lazy" style="width:100%;height:100%;object-fit:cover;display:block;">
      </div>
      <div style="border-radius:var(--radius-lg);overflow:hidden;box-shadow:var(--shadow);aspect-ratio:4/3;background:rgba(var(--color-accent-rgb),0.08);display:flex;flex-direction:column;align-items:center;justify-content:center;gap:var(--space-md);padding:var(--space-xl);">
        <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" style="color:var(--color-accent);" aria-hidden="true"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
        <p style="text-align:center;font-size:0.9rem;line-height:1.65;color:var(--color-text);">More project photos available — <a href="/contact/" style="color:var(--color-accent);font-weight:600;">ask at estimate time</a>.</p>
      </div>
    </div>
  </div>
</section>

<!-- SVG Divider into dark comparison -->
<div class="divider-wave" aria-hidden="true">
  <svg viewBox="0 0 1440 54" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M0,54 Q360,0 720,27 Q1080,54 1440,0 L1440,54 Z" fill="#000000"/>
  </svg>
</div>

<!-- ─── SECTION 6: COMPARISON ─────────────────────────────── -->
<section class="comparison-section" aria-label="A&S Contracting vs other roofers">
  <div class="container-svc">
    <div class="comparison-intro reveal-up">
      <span class="eyebrow-label" style="color:var(--color-accent);">Why A&amp;S?</span>
      <h2 class="section-h2-light">How does A&amp;S compare to <span style="color:var(--color-accent);">other roofing contractors</span> in Warrenton?</h2>
      <p style="color:rgba(255,255,255,0.6);max-width:54ch;margin:0 auto;font-size:0.95rem;line-height:1.75;" class="answer-block" style="background:rgba(255,255,255,0.06);border-left-color:var(--color-accent);">A&amp;S Contracting Services is a licensed, locally-based contractor that provides written estimates, handles storm documentation, and uses our own licensed crew — not subcontractors — on every roofing project in Warrenton and Warren County.</p>
    </div>
    <div class="comparison-table reveal-up" role="table" aria-label="Contractor comparison">
      <div class="comp-header" role="columnheader">What we offer</div>
      <div class="comp-header ours" role="columnheader">A&amp;S Contracting</div>
      <div class="comp-header" role="columnheader">Other Local Roofers</div>

      <div class="comp-row" role="row">
        <div class="comp-cell feature" role="cell">Written estimate before work begins</div>
        <div class="comp-cell ours check" role="cell">✓ Always</div>
        <div class="comp-cell cross" role="cell">Often verbal only</div>
      </div>
      <div class="comp-row" role="row">
        <div class="comp-cell feature" role="cell">Licensed &amp; insured in Missouri</div>
        <div class="comp-cell ours check" role="cell">✓ Verified</div>
        <div class="comp-cell cross" role="cell">Varies — ask to confirm</div>
      </div>
      <div class="comp-row" role="row">
        <div class="comp-cell feature" role="cell">Storm damage documentation support</div>
        <div class="comp-cell ours check" role="cell">✓ Included</div>
        <div class="comp-cell cross" role="cell">Not always offered</div>
      </div>
      <div class="comp-row" role="row">
        <div class="comp-cell feature" role="cell">Own crew (no subcontractors)</div>
        <div class="comp-cell ours check" role="cell">✓ Our licensed crew</div>
        <div class="comp-cell cross" role="cell">Often subcontracted</div>
      </div>
      <div class="comp-row" role="row">
        <div class="comp-cell feature" role="cell">Free on-site estimate</div>
        <div class="comp-cell ours check" role="cell">✓ No charge</div>
        <div class="comp-cell cross" role="cell">Some charge a fee</div>
      </div>
    </div>
  </div>
</section>

<!-- SVG Divider dark → light -->
<div class="divider-angle" aria-hidden="true">
  <svg viewBox="0 0 1440 40" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
    <polygon points="0,40 1440,0 1440,40" fill="#ffffff"/>
  </svg>
</div>

<!-- ─── SECTION 7: FAQ ─────────────────────────────────────── -->
<section class="faq-section" aria-label="Roofing FAQ">
  <div class="container-svc">
    <div class="faq-grid">
      <div class="faq-sidebar reveal-left">
        <div class="faq-sidebar-img">
          <img
            src="<?php echo $heroPhoto; ?>"
            alt="Roofing contractor on Warren County, Missouri residential roof"
            width="560"
            height="260"
            loading="lazy"
          >
        </div>
        <div class="faq-sidebar-note">
          <strong>Have a question not listed here?</strong><br>
          Call or submit a contact form — we respond to every roofing inquiry from the Warrenton area within one business day.
        </div>
      </div>
      <div class="faq-content reveal-right">
        <span class="eyebrow-label">Common Questions</span>
        <h2 class="section-h2">What do Warrenton homeowners ask about roofing?</h2>
        <p style="font-size:0.95rem;color:var(--color-text-light);line-height:1.75;margin:0 0 var(--space-xl);" class="answer-block">
          These are the questions we hear most from homeowners in Warrenton, MO and across Warren County before scheduling a roofing estimate. If yours isn't here, contact us directly.
        </p>
        <div class="faq-list" id="roofing-faq">
          <?php foreach ($faqs as $faq): ?>
          <div class="faq-item" itemscope itemtype="https://schema.org/Question">
            <button class="faq-question" aria-expanded="false" itemprop="name">
              <?php echo htmlspecialchars($faq['question']); ?>
              <svg class="faq-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg>
            </button>
            <div class="faq-answer" itemscope itemtype="https://schema.org/Answer">
              <p itemprop="text"><?php echo htmlspecialchars($faq['answer']); ?></p>
            </div>
          </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ─── SECTION 8: FINAL CTA ─────────────────────────────── -->
<section class="final-cta-section" aria-label="Get your free roofing estimate">
  <div class="container-svc">
    <div class="final-cta-inner reveal-up">
      <div class="final-cta-icon" aria-hidden="true">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
      </div>
      <span class="eyebrow-label" style="color:var(--color-accent);">Free estimate — no pressure</span>
      <h2>Ready to fix your roof in Warrenton?</h2>
      <p class="answer-block" style="margin:var(--space-sm) auto var(--space-xl);">
        Every roofing estimate from A&amp;S Contracting Services is free, written, and delivered after a real on-site inspection. We serve Warrenton and a 50-mile radius — same-week appointments often available. Get your quote today.
      </p>
      <div class="cta-btn-group">
        <a href="/contact/" class="btn-accent-lg">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/></svg>
          Get My Free Roofing Estimate
        </a>
        <a href="/services/" class="btn-dark-outline">View All Services</a>
      </div>
    </div>
  </div>
</section>

<!-- ─── RELATED SERVICES ─────────────────────────────────── -->
<section class="related-section" aria-label="Other services you may need">
  <div class="container-svc">
    <div style="text-align:center;margin-bottom:var(--space-2xl);" class="reveal-up">
      <span class="eyebrow-label">Also Available</span>
      <h2 class="section-h2">Other services you may need from A&amp;S Contracting</h2>
    </div>
    <div class="related-grid">
      <?php
      $relTints  = ['card-tint-1','card-tint-2','card-tint-3'];
      $ri = 0;
      foreach (['siding','gutters','fascia'] as $rslug):
        $rsvc = null;
        foreach ($services as $s) { if ($s['slug'] === $rslug) { $rsvc = $s; break; } }
        if (!$rsvc) continue;
      ?>
      <article class="service-card-with-image <?php echo $relTints[$ri % 3]; ?> reveal-up reveal-delay-<?php echo $ri+1; ?>">
        <div class="service-card__image">
          <img src="<?php echo htmlspecialchars($svcPhotos[$rslug]); ?>" alt="<?php echo htmlspecialchars($rsvc['name']); ?> services in Warrenton, MO" width="480" height="288" loading="lazy">
        </div>
        <div class="service-card__body">
          <div class="service-card__icon"><i data-lucide="<?php echo $svcIcons[$rslug]; ?>"></i></div>
          <h3><?php echo htmlspecialchars($rsvc['name']); ?></h3>
          <p class="service-card__desc"><?php
            $desc = $rsvc['description'];
            $pos = strpos($desc, '. ');
            echo htmlspecialchars($pos !== false ? substr($desc, 0, $pos + 1) : $desc);
          ?></p>
          <ul>
            <?php foreach ($svcBulletsRel[$rslug] as $b): ?>
            <li><?php echo htmlspecialchars($b); ?></li>
            <?php endforeach; ?>
          </ul>
          <a href="/services/<?php echo htmlspecialchars($rslug); ?>/" class="service-card__cta">Learn more</a>
        </div>
      </article>
      <?php $ri++; endforeach; ?>
    </div>
  </div>
</section>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
