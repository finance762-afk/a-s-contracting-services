<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
// ─── Page Setup ─────────────────────────────────────────────────────────────
$pageTitle       = "General Contractor in Warrenton, MO | A&S Contracting Services";
$pageDescription = "A&S Contracting Services — licensed, insured general contractor in Warrenton, MO. Roofing, siding, gutters, windows, interior renovations & more within 50 miles. Free estimates.";
$canonicalUrl    = $siteUrl . '/';
$currentPage     = 'home';
$cssVersion      = '2.2';

// Hero image (first client photo — best exterior/roofing shot)
$heroPhoto       = 'https://db.pageone.cloud/storage/v1/object/public/client-assets/a-s-contracting-services/photos/1779984851004-bey4ix-53-Aug_08__2025_00-54-39-zixD.jpg';
$heroImagePreload = $heroPhoto;
$ogImage         = $heroPhoto;

// About section photos
$aboutPrimary    = 'https://db.pageone.cloud/storage/v1/object/public/client-assets/a-s-contracting-services/photos/1779985081293-864e8m-2-Feb_09__2026_13-42-04-ptJL.jpg';
$aboutSecondary  = 'https://db.pageone.cloud/storage/v1/object/public/client-assets/a-s-contracting-services/photos/1779985082241-xuoxbh-11-Feb_09__2026_15-26-29-L2wD.jpg';

// Service card photos (CDN URLs, mapped by service slug)
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
];

// Service card icons (Lucide data-lucide attribute, one per card, no duplicates adjacent)
$svcIcons = [
    'roofing'                  => 'home',
    'siding'                   => 'building-2',
    'gutters'                  => 'droplets',
    'soffit'                   => 'hard-hat',
    'fascia'                   => 'ruler',
    'windows-doors'            => 'door-open',
    'full-scale-interior-work' => 'hammer',
    'exterior-work'            => 'wrench',
];

// Service card 3 bullets (EXACTLY 3 per card, 3-6 words each)
$svcBullets = [
    'roofing' => [
        'Full replacements or spot repairs',
        'Licensed for residential & commercial',
        'Insurance claim documentation help',
    ],
    'siding' => [
        'Vinyl, fiber cement, and wood',
        'Boosts curb appeal immediately',
        'Storm & moisture damage repair',
    ],
    'gutters' => [
        'Seamless gutter installation available',
        'Protects foundation and landscaping',
        'Cleaning & maintenance included',
    ],
    'soffit' => [
        'Improves attic ventilation',
        'Resists moisture and pests',
        'Matched to existing roofline',
    ],
    'fascia' => [
        'Premium materials, long-term hold',
        'Protects roof edge from rot',
        'Pairs with gutter installation',
    ],
    'windows-doors' => [
        'Energy-efficient replacement options',
        'Drafty window & door upgrades',
        'Curb appeal + comfort gains',
    ],
    'full-scale-interior-work' => [
        'Full room remodels and builds',
        'Drywall, flooring, trim, painting',
        'Residential and commercial scopes',
    ],
    'exterior-work' => [
        'Complete exterior renovation packages',
        'Siding, roofing, trim combined',
        'Protect and refresh your home',
    ],
];

// FAQ data + schema
$faqs = [
    [
        'question' => 'How much does a roof replacement cost in Warrenton, MO?',
        'answer'   => 'Roof replacement in Warrenton typically ranges from $6,000 to $18,000 depending on roof size, pitch, and material selected. A&S Contracting Services provides free on-site estimates — we assess your specific roof and provide a written quote before any work begins.',
    ],
    [
        'question' => 'Does A&S Contracting Services handle storm damage repairs?',
        'answer'   => 'Yes. We handle storm damage repairs for roofing, siding, gutters, soffit, and fascia throughout Warren County. We can help document damage for insurance claims and complete repairs quickly to protect your home from further water intrusion.',
    ],
    [
        'question' => 'What areas near Warrenton, Missouri do you serve?',
        'answer'   => 'A&S Contracting Services operates within a 50-mile radius of Warrenton, MO, covering Warren County and surrounding communities across central Missouri. Submit a free estimate request or call to confirm availability at your specific location.',
    ],
    [
        'question' => 'How long does a typical siding installation take?',
        'answer'   => 'Most residential siding projects in the Warrenton area take 2 to 5 days depending on home size and material. We provide a project timeline with every estimate so you know exactly what to expect before we start.',
    ],
    [
        'question' => 'Is A&S Contracting Services licensed and insured in Missouri?',
        'answer'   => 'Yes. A&S Contracting Services is fully licensed and insured to operate as a general contractor in Missouri. We can provide proof of licensing and insurance upon request before any project begins.',
    ],
    [
        'question' => 'Do you offer free estimates for exterior and interior projects?',
        'answer'   => 'Absolutely. Every project starts with a free, no-obligation on-site estimate. We visit your property, evaluate the work needed, and give you a clear written quote — no pressure, no hidden fees.',
    ],
];
$schemaMarkup = generateFAQSchema($faqs);

// Home services grid: first 8 services (slugs in display order)
$homeServiceSlugs = ['roofing','siding','gutters','soffit','fascia','windows-doors','full-scale-interior-work','exterior-work'];
?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php'; ?>
<body>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'; ?>

<!-- ═══════════════════════════════════════════════════════════════════════════
     PAGE-SPECIFIC STYLES — index.php — Premium tier (≥400 lines required)
     All color, shadow, and spacing values use CSS custom properties only.
     ═══════════════════════════════════════════════════════════════════════════ -->
<style>

/* ─── HERO ──────────────────────────────────────────────────────────────────── */
.hero {
  position: relative;
  min-height: 100vh;
  display: flex;
  align-items: center;
  background-image: url('<?php echo $heroPhoto; ?>');
  background-size: cover;
  background-position: center 40%;
  background-attachment: fixed;
  padding: calc(var(--nav-height, 72px) + var(--space-3xl)) 0 var(--space-3xl);
  overflow: hidden;
}
/* Gradient overlay */
.hero::before {
  content: '';
  position: absolute;
  inset: 0;
  background: linear-gradient(
    105deg,
    rgba(var(--color-primary-rgb), 0.88) 0%,
    rgba(var(--color-primary-rgb), 0.72) 45%,
    rgba(var(--color-primary-rgb), 0.35) 100%
  );
  z-index: 1;
}
/* Subtle noise texture layer */
.hero::after {
  content: '';
  position: absolute;
  inset: 0;
  background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 200 200' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='0.03'/%3E%3C/svg%3E");
  background-size: 200px 200px;
  opacity: 0.04;
  z-index: 2;
  pointer-events: none;
}
.hero-inner {
  position: relative;
  z-index: 3;
  width: 100%;
  max-width: var(--max-width, 1280px);
  margin: 0 auto;
  padding: 0 var(--space-lg);
  display: grid;
  grid-template-columns: 1fr 420px;
  gap: var(--space-2xl);
  align-items: center;
}
/* ─── Hero Left ─── */
.hero-text {
  color: var(--color-secondary);
}
.hero-eyebrow {
  display: inline-flex;
  align-items: center;
  gap: var(--space-xs);
  background: rgba(var(--color-accent-rgb), 0.15);
  border: 1px solid rgba(var(--color-accent-rgb), 0.4);
  color: var(--color-accent);
  font-family: var(--font-body, 'Inter', sans-serif);
  font-size: 0.78rem;
  font-weight: 600;
  letter-spacing: 0.12em;
  text-transform: uppercase;
  padding: var(--space-xs) var(--space-sm);
  border-radius: var(--radius-sm);
  margin-bottom: var(--space-md);
}
.hero-eyebrow svg { width: 13px; height: 13px; flex-shrink: 0; }
.hero-title {
  font-family: var(--font-heading, 'Unbounded', sans-serif);
  font-size: clamp(2.2rem, 4.5vw, 3.6rem);
  font-weight: 800;
  line-height: 1.07;
  text-wrap: balance;
  margin: 0 0 var(--space-md);
  color: var(--color-secondary);
}
.hero-title .accent { color: var(--color-accent); }
.hero-subtitle {
  font-size: 1.05rem;
  line-height: 1.75;
  color: rgba(var(--color-secondary-rgb), 0.78);
  max-width: 52ch;
  margin: 0 0 var(--space-xl);
}
.hero-actions {
  display: flex;
  gap: var(--space-sm);
  flex-wrap: wrap;
  margin-bottom: var(--space-xl);
}
.hero-actions .btn {
  padding: var(--space-md) var(--space-xl);
  font-family: var(--font-heading, 'Unbounded', sans-serif);
  font-size: 0.85rem;
  font-weight: 700;
  letter-spacing: 0.04em;
  border-radius: var(--radius);
  text-decoration: none;
  display: inline-flex;
  align-items: center;
  gap: var(--space-xs);
  transition: transform var(--transition), box-shadow var(--transition);
  cursor: pointer;
  border: none;
}
.hero-actions .btn-primary {
  background: var(--color-accent);
  color: var(--color-primary);
  box-shadow: 0 4px 20px rgba(var(--color-accent-rgb), 0.45);
}
.hero-actions .btn-primary:hover {
  transform: translateY(-2px);
  box-shadow: 0 8px 28px rgba(var(--color-accent-rgb), 0.55);
}
.hero-actions .btn-outline {
  background: transparent;
  color: var(--color-secondary);
  border: 2px solid rgba(var(--color-secondary-rgb), 0.5);
}
.hero-actions .btn-outline:hover {
  border-color: var(--color-secondary);
  background: rgba(var(--color-secondary-rgb), 0.08);
  transform: translateY(-2px);
}
.hero-trust {
  display: flex;
  flex-wrap: wrap;
  gap: var(--space-md);
}
.hero-trust-item {
  display: flex;
  align-items: center;
  gap: 6px;
  font-size: 0.82rem;
  font-weight: 600;
  color: rgba(var(--color-secondary-rgb), 0.72);
  letter-spacing: 0.02em;
}
.hero-trust-item svg {
  width: 14px;
  height: 14px;
  color: var(--color-accent);
  flex-shrink: 0;
}

/* ─── Hero Form Card ─── */
.hero-form-card {
  background: rgba(var(--color-secondary-rgb), 0.08);
  backdrop-filter: blur(16px) saturate(1.4);
  -webkit-backdrop-filter: blur(16px) saturate(1.4);
  border: 1px solid rgba(var(--color-secondary-rgb), 0.2);
  border-radius: var(--radius-lg);
  padding: var(--space-xl);
  box-shadow:
    0 8px 32px rgba(var(--color-primary-rgb), 0.4),
    inset 0 1px 0 rgba(var(--color-secondary-rgb), 0.15);
}
.hero-form-card h2 {
  font-family: var(--font-heading, 'Unbounded', sans-serif);
  font-size: 1.25rem;
  font-weight: 800;
  color: var(--color-secondary);
  margin: 0 0 var(--space-xs);
  text-wrap: balance;
  line-height: 1.25;
}
.hero-form-tagline {
  font-size: 0.85rem;
  color: var(--color-accent);
  font-weight: 600;
  margin: 0 0 var(--space-md);
  letter-spacing: 0.04em;
}
.hero-form .form-row { margin-bottom: var(--space-sm); }
.hero-form input,
.hero-form select {
  width: 100%;
  padding: 14px 16px;
  background: rgba(var(--color-secondary-rgb), 0.1);
  border: 1px solid rgba(var(--color-secondary-rgb), 0.25);
  border-radius: var(--radius);
  color: var(--color-secondary);
  font-family: var(--font-body, 'Inter', sans-serif);
  font-size: 0.95rem;
  outline: none;
  transition: border-color var(--transition), background var(--transition);
  -webkit-appearance: none;
  appearance: none;
}
.hero-form input::placeholder { color: rgba(var(--color-secondary-rgb), 0.5); }
.hero-form select { cursor: pointer; }
.hero-form select option { background: var(--color-primary); color: var(--color-secondary); }
.hero-form input:focus,
.hero-form select:focus {
  border-color: var(--color-accent);
  background: rgba(var(--color-secondary-rgb), 0.14);
}
.hero-form .btn-block {
  width: 100%;
  display: block;
  text-align: center;
  padding: 16px var(--space-lg);
  background: var(--color-accent);
  color: var(--color-primary);
  font-family: var(--font-heading, 'Unbounded', sans-serif);
  font-size: 0.88rem;
  font-weight: 800;
  letter-spacing: 0.05em;
  border-radius: var(--radius);
  border: none;
  cursor: pointer;
  margin-top: var(--space-sm);
  transition: transform var(--transition), box-shadow var(--transition);
  box-shadow: 0 4px 16px rgba(var(--color-accent-rgb), 0.4);
}
.hero-form .btn-block:hover {
  transform: translateY(-2px);
  box-shadow: 0 8px 24px rgba(var(--color-accent-rgb), 0.5);
}
.form-footnote {
  font-size: 0.72rem;
  color: rgba(var(--color-secondary-rgb), 0.45);
  text-align: center;
  margin: var(--space-sm) 0 0;
  line-height: 1.6;
}
.form-footnote a {
  color: rgba(var(--color-secondary-rgb), 0.6);
  text-decoration: underline;
}

/* Hero responsive */
@media (max-width: 1024px) {
  .hero-inner {
    grid-template-columns: 1fr 380px;
    gap: var(--space-xl);
  }
}
@media (max-width: 860px) {
  .hero {
    background-attachment: scroll;
    align-items: flex-start;
    padding-top: calc(var(--nav-height, 72px) + var(--space-2xl));
    padding-bottom: var(--space-3xl);
  }
  .hero-inner {
    grid-template-columns: 1fr;
    gap: var(--space-xl);
  }
  .hero-title { font-size: clamp(1.9rem, 6vw, 2.8rem); }
  .hero-subtitle { font-size: 0.98rem; }
}

/* ─── TICKER STRIP ─────────────────────────────────────────────────────────── */
.ticker-strip {
  --ticker-speed: 80;            /* px/s — JS reads this; higher = slower */
  background: var(--color-accent);
  color: var(--color-primary);
  overflow: hidden;
  padding: var(--space-sm) 0;
  position: relative;
  z-index: 10;
}
.ticker-track {
  display: flex;
  width: max-content;
  will-change: transform;
  animation: ticker-scroll var(--ticker-duration, 30s) linear infinite;
}
.ticker-track:hover { animation-play-state: paused; }
.ticker-group {
  display: inline-flex;
  align-items: center;
  flex-shrink: 0;
}
@keyframes ticker-scroll {
  0%   { transform: translateX(0); }
  100% { transform: translateX(-50%); }
}
@media (prefers-reduced-motion: reduce) {
  .ticker-track { animation: none; }
}
.ticker-item {
  display: inline-flex;
  align-items: center;
  gap: var(--space-xs);
  padding: 0 var(--space-xl);
  font-family: var(--font-heading, 'Unbounded', sans-serif);
  font-size: 0.72rem;
  font-weight: 700;
  letter-spacing: 0.1em;
  text-transform: uppercase;
  white-space: nowrap;
}
.ticker-sep {
  opacity: 0.35;
  font-size: 1rem;
}
.ticker-item svg { width: 13px; height: 13px; flex-shrink: 0; }

/* ─── SVG DIVIDERS ─────────────────────────────────────────────────────────── */
.svg-divider { display: block; line-height: 0; overflow: hidden; }
.svg-divider svg { display: block; width: 100%; }

/* ─── SERVICES SECTION ─────────────────────────────────────────────────────── */
.services-section {
  background: var(--color-bg, #f8f8f8);
  padding: var(--space-4xl) 0;
  position: relative;
}
.services-header {
  text-align: center;
  max-width: 720px;
  margin: 0 auto var(--space-3xl);
}
.services-header .eyebrow-label {
  display: inline-block;
  font-size: 0.72rem;
  font-weight: 700;
  letter-spacing: 0.14em;
  text-transform: uppercase;
  color: var(--color-accent);
  margin-bottom: var(--space-sm);
  padding: var(--space-xs) var(--space-sm);
  background: rgba(var(--color-accent-rgb), 0.08);
  border-radius: var(--radius-sm);
}
.services-header h2 {
  font-family: var(--font-heading, 'Unbounded', sans-serif);
  font-size: clamp(1.7rem, 3vw, 2.5rem);
  font-weight: 800;
  line-height: 1.12;
  text-wrap: balance;
  margin: 0 0 var(--space-md);
  color: var(--color-primary);
}
.services-header .hero-answer {
  font-size: 1rem;
  line-height: 1.75;
  color: var(--color-text-light, #555);
  max-width: 62ch;
  margin: 0 auto var(--space-sm);
}
.services-header .section-subtitle {
  font-family: var(--font-accent, 'Fraunces', serif);
  font-style: italic;
  font-size: 1.15rem;
  color: var(--color-accent);
  display: block;
  margin-bottom: var(--space-sm);
}
.services-header .prose {
  font-size: 0.95rem;
  color: var(--color-text-light, #555);
  max-width: 60ch;
  margin: 0 auto;
}
.services-more {
  text-align: center;
  margin-top: var(--space-2xl);
}
.services-more .btn-secondary {
  display: inline-flex;
  align-items: center;
  gap: var(--space-xs);
  padding: var(--space-md) var(--space-xl);
  border: 2px solid var(--color-primary);
  color: var(--color-primary);
  font-family: var(--font-heading, 'Unbounded', sans-serif);
  font-size: 0.82rem;
  font-weight: 700;
  letter-spacing: 0.06em;
  border-radius: var(--radius);
  text-decoration: none;
  transition: background var(--transition), color var(--transition), transform var(--transition);
}
.services-more .btn-secondary:hover {
  background: var(--color-primary);
  color: var(--color-secondary);
  transform: translateY(-2px);
}

/* ─── STATS SECTION ────────────────────────────────────────────────────────── */
.stats-section {
  background: var(--color-primary);
  padding: var(--space-4xl) 0;
  position: relative;
  overflow: hidden;
}
/* Floating accent circles */
.stats-section::before {
  content: '';
  position: absolute;
  width: 400px;
  height: 400px;
  border-radius: 50%;
  background: rgba(var(--color-accent-rgb), 0.05);
  top: -100px;
  right: -100px;
  pointer-events: none;
}
.stats-section::after {
  content: '';
  position: absolute;
  width: 280px;
  height: 280px;
  border-radius: 50%;
  background: rgba(var(--color-accent-rgb), 0.04);
  bottom: -80px;
  left: 5%;
  pointer-events: none;
}
.stats-inner {
  position: relative;
  z-index: 1;
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: 1px;
  background: rgba(var(--color-secondary-rgb), 0.08);
  border-radius: var(--radius-lg);
  overflow: hidden;
  max-width: var(--max-width, 1280px);
  margin: 0 auto;
  padding: 0 var(--space-lg);
}
.stat-item {
  background: var(--color-primary);
  padding: var(--space-2xl) var(--space-xl);
  text-align: center;
  position: relative;
}
.stat-item:not(:last-child)::after {
  content: '';
  position: absolute;
  right: 0;
  top: 25%;
  height: 50%;
  width: 1px;
  background: rgba(var(--color-secondary-rgb), 0.1);
}
.stat-number {
  font-family: var(--font-heading, 'Unbounded', sans-serif);
  font-size: clamp(2.4rem, 4.5vw, 3.8rem);
  font-weight: 900;
  color: var(--color-accent);
  line-height: 1;
  display: block;
  margin-bottom: var(--space-xs);
}
.stat-suffix {
  color: var(--color-accent);
}
.stat-label {
  font-size: 0.8rem;
  font-weight: 600;
  color: rgba(var(--color-secondary-rgb), 0.55);
  text-transform: uppercase;
  letter-spacing: 0.1em;
  text-wrap: balance;
  line-height: 1.4;
}

@media (max-width: 768px) {
  .stats-inner {
    grid-template-columns: repeat(2, 1fr);
    gap: 0;
  }
  .stat-item:nth-child(odd)::after {
    display: block;
  }
  .stat-item:nth-child(even)::after {
    display: none;
  }
  .stat-item:nth-child(1),
  .stat-item:nth-child(2) {
    border-bottom: 1px solid rgba(var(--color-secondary-rgb), 0.08);
  }
}
@media (max-width: 480px) {
  .stats-inner { grid-template-columns: 1fr 1fr; }
  .stat-number { font-size: 2.4rem; }
}

/* ─── MID CTA BANNER ───────────────────────────────────────────────────────── */
.mid-cta-banner {
  background: var(--color-accent);
  padding: var(--space-3xl) var(--space-lg);
  text-align: center;
  position: relative;
  overflow: hidden;
}
.mid-cta-banner::before {
  content: '';
  position: absolute;
  inset: 0;
  background: repeating-linear-gradient(
    -45deg,
    transparent,
    transparent 12px,
    rgba(var(--color-primary-rgb), 0.03) 12px,
    rgba(var(--color-primary-rgb), 0.03) 24px
  );
  pointer-events: none;
}
.mid-cta-inner {
  position: relative;
  z-index: 1;
  max-width: 760px;
  margin: 0 auto;
}
.mid-cta-eyebrow {
  font-size: 0.72rem;
  font-weight: 700;
  letter-spacing: 0.14em;
  text-transform: uppercase;
  color: rgba(var(--color-primary-rgb), 0.6);
  margin-bottom: var(--space-sm);
}
.mid-cta-banner h2 {
  font-family: var(--font-heading, 'Unbounded', sans-serif);
  font-size: clamp(1.6rem, 3.5vw, 2.6rem);
  font-weight: 900;
  color: var(--color-primary);
  margin: 0 0 var(--space-md);
  text-wrap: balance;
  line-height: 1.12;
}
.mid-cta-banner p {
  font-size: 1rem;
  color: rgba(var(--color-primary-rgb), 0.72);
  max-width: 56ch;
  margin: 0 auto var(--space-xl);
  line-height: 1.7;
}
.mid-cta-actions {
  display: flex;
  gap: var(--space-sm);
  justify-content: center;
  flex-wrap: wrap;
}
.btn-dark {
  display: inline-flex;
  align-items: center;
  gap: var(--space-xs);
  padding: var(--space-md) var(--space-xl);
  background: var(--color-primary);
  color: var(--color-secondary);
  font-family: var(--font-heading, 'Unbounded', sans-serif);
  font-size: 0.85rem;
  font-weight: 700;
  letter-spacing: 0.05em;
  border-radius: var(--radius);
  text-decoration: none;
  transition: transform var(--transition), box-shadow var(--transition);
  box-shadow: 0 4px 16px rgba(var(--color-primary-rgb), 0.25);
}
.btn-dark:hover {
  transform: translateY(-2px);
  box-shadow: 0 8px 24px rgba(var(--color-primary-rgb), 0.35);
}
.btn-outline-dark {
  display: inline-flex;
  align-items: center;
  gap: var(--space-xs);
  padding: var(--space-md) var(--space-xl);
  background: transparent;
  color: var(--color-primary);
  border: 2px solid rgba(var(--color-primary-rgb), 0.5);
  font-family: var(--font-heading, 'Unbounded', sans-serif);
  font-size: 0.85rem;
  font-weight: 700;
  letter-spacing: 0.05em;
  border-radius: var(--radius);
  text-decoration: none;
  transition: all var(--transition);
}
.btn-outline-dark:hover {
  border-color: var(--color-primary);
  background: rgba(var(--color-primary-rgb), 0.08);
  transform: translateY(-2px);
}

/* ─── ABOUT / PROCESS ──────────────────────────────────────────────────────── */
.about-section {
  background: var(--color-bg, #f8f8f8);
  padding: var(--space-4xl) 0;
  position: relative;
  overflow: hidden;
}
.about-num-watermark {
  position: absolute;
  top: var(--space-xl);
  right: var(--space-lg);
  font-family: var(--font-heading, 'Unbounded', sans-serif);
  font-size: clamp(6rem, 14vw, 12rem);
  font-weight: 900;
  color: rgba(var(--color-primary-rgb), 0.03);
  line-height: 1;
  user-select: none;
  pointer-events: none;
  z-index: 0;
}
.about-inner {
  position: relative;
  z-index: 1;
  max-width: var(--max-width, 1280px);
  margin: 0 auto;
  padding: 0 var(--space-lg);
  display: grid;
  grid-template-columns: 1fr 420px;
  gap: var(--space-3xl);
  align-items: start;
}
/* About Left */
.about-eyebrow {
  display: inline-block;
  font-size: 0.72rem;
  font-weight: 700;
  letter-spacing: 0.14em;
  text-transform: uppercase;
  color: var(--color-accent);
  margin-bottom: var(--space-sm);
  padding: var(--space-xs) var(--space-sm);
  background: rgba(var(--color-accent-rgb), 0.08);
  border-radius: var(--radius-sm);
}
.about-left h2 {
  font-family: var(--font-heading, 'Unbounded', sans-serif);
  font-size: clamp(1.6rem, 3vw, 2.4rem);
  font-weight: 800;
  line-height: 1.12;
  text-wrap: balance;
  margin: 0 0 var(--space-md);
  color: var(--color-primary);
}
.about-left p {
  font-size: 0.98rem;
  line-height: 1.8;
  color: var(--color-text-light, #555);
  max-width: 60ch;
  margin: 0 0 var(--space-md);
}
/* Process Steps */
.process-steps {
  margin-top: var(--space-xl);
  display: flex;
  flex-direction: column;
  gap: var(--space-md);
}
.process-step {
  display: flex;
  gap: var(--space-md);
  align-items: flex-start;
}
.step-number {
  flex-shrink: 0;
  width: 42px;
  height: 42px;
  border-radius: 50%;
  background: var(--color-primary);
  color: var(--color-accent);
  font-family: var(--font-heading, 'Unbounded', sans-serif);
  font-size: 0.75rem;
  font-weight: 900;
  display: flex;
  align-items: center;
  justify-content: center;
  letter-spacing: 0.04em;
}
.step-content h4 {
  font-family: var(--font-heading, 'Unbounded', sans-serif);
  font-size: 0.9rem;
  font-weight: 700;
  color: var(--color-primary);
  margin: 0 0 4px;
}
.step-content p {
  font-size: 0.88rem;
  line-height: 1.6;
  color: var(--color-text-light, #555);
  margin: 0;
}
/* About Right — image stack */
.about-right {
  position: relative;
}
.about-image-stack {
  position: relative;
  height: 480px;
}
.about-img-primary {
  position: absolute;
  top: 0;
  left: 0;
  width: 88%;
  height: 90%;
  object-fit: cover;
  border-radius: var(--radius-lg);
  box-shadow: var(--shadow-lg, 0 20px 60px rgba(0,0,0,0.15));
  display: block;
}
.about-img-secondary {
  position: absolute;
  bottom: 0;
  right: 0;
  width: 52%;
  height: 50%;
  object-fit: cover;
  border-radius: var(--radius-lg);
  box-shadow: var(--shadow-lg, 0 20px 60px rgba(0,0,0,0.15));
  border: 4px solid var(--color-bg, #f8f8f8);
  display: block;
}
.about-stat-float {
  position: absolute;
  top: var(--space-lg);
  right: -16px;
  background: var(--color-accent);
  color: var(--color-primary);
  border-radius: var(--radius);
  padding: var(--space-md) var(--space-lg);
  text-align: center;
  box-shadow: 0 8px 24px rgba(var(--color-primary-rgb), 0.25);
  z-index: 2;
}
.about-stat-float .big {
  font-family: var(--font-heading, 'Unbounded', sans-serif);
  font-size: 2.2rem;
  font-weight: 900;
  line-height: 1;
  display: block;
}
.about-stat-float .lbl {
  font-size: 0.72rem;
  font-weight: 700;
  letter-spacing: 0.08em;
  text-transform: uppercase;
  opacity: 0.72;
  display: block;
  margin-top: 4px;
}
@media (max-width: 960px) {
  .about-inner {
    grid-template-columns: 1fr;
    gap: var(--space-2xl);
  }
  .about-image-stack { height: 360px; }
  .about-stat-float { right: var(--space-sm); }
  .about-num-watermark { font-size: 5rem; }
}

/* ─── REVIEWS SECTION ──────────────────────────────────────────────────────── */
.reviews-section {
  background: var(--color-primary);
  padding: var(--space-4xl) 0;
  position: relative;
  overflow: hidden;
}
.reviews-section::before {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  height: 3px;
  background: linear-gradient(
    to right,
    transparent 0%,
    var(--color-accent) 30%,
    var(--color-accent) 70%,
    transparent 100%
  );
}
.reviews-header {
  text-align: center;
  margin-bottom: var(--space-2xl);
  padding: 0 var(--space-lg);
}
.reviews-eyebrow {
  font-size: 0.72rem;
  font-weight: 700;
  letter-spacing: 0.14em;
  text-transform: uppercase;
  color: var(--color-accent);
  display: block;
  margin-bottom: var(--space-sm);
}
.reviews-header h2 {
  font-family: var(--font-heading, 'Unbounded', sans-serif);
  font-size: clamp(1.6rem, 3vw, 2.3rem);
  font-weight: 800;
  color: var(--color-secondary);
  margin: 0 0 var(--space-sm);
  text-wrap: balance;
}
.reviews-header p {
  color: rgba(var(--color-secondary-rgb), 0.6);
  font-size: 0.95rem;
  max-width: 52ch;
  margin: 0 auto;
  line-height: 1.7;
}
.reviews-scroll-wrap {
  overflow-x: auto;
  scrollbar-width: none;
  -ms-overflow-style: none;
  padding: 0 var(--space-lg) var(--space-sm);
}
.reviews-scroll-wrap::-webkit-scrollbar { display: none; }
.reviews-row {
  display: flex;
  gap: var(--space-lg);
  padding-bottom: var(--space-sm);
  max-width: var(--max-width, 1280px);
  margin: 0 auto;
}
.review-card {
  flex: 0 0 340px;
  background: rgba(var(--color-secondary-rgb), 0.05);
  border: 1px solid rgba(var(--color-secondary-rgb), 0.1);
  border-radius: var(--radius-lg);
  padding: var(--space-xl);
  display: flex;
  flex-direction: column;
  gap: var(--space-sm);
  transition: transform var(--transition), border-color var(--transition);
}
.review-card:hover {
  transform: translateY(-4px);
  border-color: rgba(var(--color-accent-rgb), 0.35);
}
.review-stars {
  display: flex;
  gap: 3px;
}
.review-stars svg {
  width: 16px;
  height: 16px;
  fill: var(--color-accent);
  color: var(--color-accent);
}
.review-text {
  font-size: 0.93rem;
  line-height: 1.75;
  color: rgba(var(--color-secondary-rgb), 0.8);
  font-style: italic;
  flex: 1;
}
.review-meta {
  display: flex;
  align-items: center;
  gap: var(--space-sm);
}
.review-avatar {
  width: 38px;
  height: 38px;
  border-radius: 50%;
  background: var(--color-accent);
  color: var(--color-primary);
  font-family: var(--font-heading, 'Unbounded', sans-serif);
  font-size: 0.78rem;
  font-weight: 700;
  display: flex;
  align-items: center;
  justify-content: center;
  flex-shrink: 0;
}
.review-author-name {
  font-weight: 700;
  font-size: 0.88rem;
  color: var(--color-secondary);
}
.review-author-detail {
  font-size: 0.78rem;
  color: rgba(var(--color-secondary-rgb), 0.45);
}
.reviews-badge-strip {
  text-align: center;
  margin-top: var(--space-xl);
  padding: 0 var(--space-lg);
  display: flex;
  align-items: center;
  justify-content: center;
  gap: var(--space-xl);
  flex-wrap: wrap;
}
.review-badge {
  font-size: 0.78rem;
  font-weight: 600;
  color: rgba(var(--color-secondary-rgb), 0.45);
  letter-spacing: 0.06em;
  text-transform: uppercase;
}

/* ─── FAQ SECTION ──────────────────────────────────────────────────────────── */
.faq-section {
  background: var(--color-bg, #f8f8f8);
  padding: var(--space-4xl) 0;
  position: relative;
}
.faq-header {
  text-align: center;
  max-width: 640px;
  margin: 0 auto var(--space-2xl);
  padding: 0 var(--space-lg);
}
.faq-eyebrow {
  font-size: 0.72rem;
  font-weight: 700;
  letter-spacing: 0.14em;
  text-transform: uppercase;
  color: var(--color-accent);
  display: block;
  margin-bottom: var(--space-sm);
}
.faq-header h2 {
  font-family: var(--font-heading, 'Unbounded', sans-serif);
  font-size: clamp(1.6rem, 3vw, 2.3rem);
  font-weight: 800;
  color: var(--color-primary);
  margin: 0 0 var(--space-sm);
  text-wrap: balance;
}
.faq-header p {
  color: var(--color-text-light, #555);
  font-size: 0.95rem;
  line-height: 1.7;
}
.faq-grid {
  display: grid;
  grid-template-columns: repeat(2, 1fr);
  gap: var(--space-md);
  max-width: var(--max-width, 1280px);
  margin: 0 auto;
  padding: 0 var(--space-lg);
}
.faq-item {
  background: var(--color-secondary);
  border: 1px solid var(--color-border, #e5e7eb);
  border-radius: var(--radius);
  overflow: hidden;
  transition: border-color var(--transition), box-shadow var(--transition);
}
.faq-item.open {
  border-color: var(--color-accent);
  box-shadow: 0 4px 16px rgba(var(--color-accent-rgb), 0.12);
}
.faq-question {
  width: 100%;
  display: flex;
  align-items: center;
  justify-content: space-between;
  gap: var(--space-sm);
  padding: var(--space-lg);
  background: transparent;
  border: none;
  cursor: pointer;
  text-align: left;
  font-family: var(--font-heading, 'Unbounded', sans-serif);
  font-size: 0.88rem;
  font-weight: 700;
  color: var(--color-primary);
  line-height: 1.4;
}
.faq-question:hover { background: rgba(var(--color-primary-rgb), 0.02); }
.faq-icon {
  flex-shrink: 0;
  width: 22px;
  height: 22px;
  border-radius: 50%;
  background: rgba(var(--color-primary-rgb), 0.06);
  display: flex;
  align-items: center;
  justify-content: center;
  transition: background var(--transition), transform var(--transition);
}
.faq-icon svg {
  width: 12px;
  height: 12px;
  color: var(--color-primary);
  transition: transform var(--transition);
}
.faq-item.open .faq-icon {
  background: var(--color-accent);
}
.faq-item.open .faq-icon svg {
  color: var(--color-primary);
  transform: rotate(45deg);
}
.faq-answer {
  max-height: 0;
  overflow: hidden;
  transition: max-height 0.35s ease, padding 0.25s ease;
  font-size: 0.9rem;
  line-height: 1.75;
  color: var(--color-text-light, #555);
  padding: 0 var(--space-lg);
}
.faq-item.open .faq-answer {
  max-height: 300px;
  padding: 0 var(--space-lg) var(--space-lg);
}
@media (max-width: 768px) {
  .faq-grid { grid-template-columns: 1fr; }
}

/* ─── CLOSING CTA ──────────────────────────────────────────────────────────── */
.closing-cta-section {
  background: var(--color-primary);
  padding: var(--space-4xl) var(--space-lg);
  text-align: center;
  position: relative;
  overflow: hidden;
}
.closing-cta-section::before {
  content: '';
  position: absolute;
  width: 600px;
  height: 600px;
  border-radius: 50%;
  border: 1px solid rgba(var(--color-accent-rgb), 0.06);
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  pointer-events: none;
}
.closing-cta-section::after {
  content: '';
  position: absolute;
  width: 900px;
  height: 900px;
  border-radius: 50%;
  border: 1px solid rgba(var(--color-accent-rgb), 0.04);
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  pointer-events: none;
}
.closing-inner {
  position: relative;
  z-index: 1;
  max-width: 720px;
  margin: 0 auto;
}
.closing-cta-eyebrow {
  font-size: 0.72rem;
  font-weight: 700;
  letter-spacing: 0.14em;
  text-transform: uppercase;
  color: var(--color-accent);
  display: block;
  margin-bottom: var(--space-sm);
}
.closing-cta-section h2 {
  font-family: var(--font-heading, 'Unbounded', sans-serif);
  font-size: clamp(1.7rem, 3.5vw, 2.8rem);
  font-weight: 900;
  color: var(--color-secondary);
  margin: 0 0 var(--space-md);
  text-wrap: balance;
  line-height: 1.1;
}
.closing-cta-section h2 .accent { color: var(--color-accent); }
.closing-cta-section p {
  color: rgba(var(--color-secondary-rgb), 0.62);
  font-size: 1rem;
  max-width: 52ch;
  margin: 0 auto var(--space-xl);
  line-height: 1.75;
}
.closing-actions {
  display: flex;
  gap: var(--space-sm);
  justify-content: center;
  flex-wrap: wrap;
}
.btn-accent {
  display: inline-flex;
  align-items: center;
  gap: var(--space-xs);
  padding: var(--space-md) var(--space-xl);
  background: var(--color-accent);
  color: var(--color-primary);
  font-family: var(--font-heading, 'Unbounded', sans-serif);
  font-size: 0.85rem;
  font-weight: 800;
  letter-spacing: 0.06em;
  border-radius: var(--radius);
  text-decoration: none;
  transition: transform var(--transition), box-shadow var(--transition);
  box-shadow: 0 4px 20px rgba(var(--color-accent-rgb), 0.35);
}
.btn-accent:hover {
  transform: translateY(-3px);
  box-shadow: 0 10px 32px rgba(var(--color-accent-rgb), 0.5);
}
.btn-ghost-white {
  display: inline-flex;
  align-items: center;
  gap: var(--space-xs);
  padding: var(--space-md) var(--space-xl);
  background: transparent;
  color: var(--color-secondary);
  border: 2px solid rgba(var(--color-secondary-rgb), 0.35);
  font-family: var(--font-heading, 'Unbounded', sans-serif);
  font-size: 0.85rem;
  font-weight: 700;
  letter-spacing: 0.06em;
  border-radius: var(--radius);
  text-decoration: none;
  transition: all var(--transition);
}
.btn-ghost-white:hover {
  border-color: var(--color-secondary);
  background: rgba(var(--color-secondary-rgb), 0.08);
  transform: translateY(-2px);
}

/* ─── REVEAL ANIMATIONS ────────────────────────────────────────────────────── */
.reveal-up     { opacity: 0; transform: translateY(32px);  transition: opacity 0.65s ease, transform 0.65s ease; }
.reveal-left   { opacity: 0; transform: translateX(-32px); transition: opacity 0.65s ease, transform 0.65s ease; }
.reveal-right  { opacity: 0; transform: translateX(32px);  transition: opacity 0.65s ease, transform 0.65s ease; }
.reveal-scale  { opacity: 0; transform: scale(0.93);       transition: opacity 0.65s ease, transform 0.65s ease; }

.reveal-up.revealed,
.reveal-left.revealed,
.reveal-right.revealed,
.reveal-scale.revealed {
  opacity: 1;
  transform: none;
}
.reveal-delay-1 { transition-delay: 0.1s; }
.reveal-delay-2 { transition-delay: 0.2s; }
.reveal-delay-3 { transition-delay: 0.32s; }
.reveal-delay-4 { transition-delay: 0.46s; }

@media (prefers-reduced-motion: reduce) {
  .reveal-up, .reveal-left, .reveal-right, .reveal-scale {
    opacity: 1 !important;
    transform: none !important;
    transition: none !important;
  }
}

/* ─── FLOATING ACCENT ──────────────────────────────────────────────────────── */
.float-accent {
  position: absolute;
  border-radius: 50%;
  background: rgba(var(--color-accent-rgb), 0.06);
  pointer-events: none;
  z-index: 0;
  animation: float-drift 8s ease-in-out infinite;
}
@keyframes float-drift {
  0%, 100% { transform: translateY(0) rotate(0deg); }
  50%       { transform: translateY(-18px) rotate(6deg); }
}

</style>

<!-- ═══════════════════════════════════════════════════════════════════════════
     HERO SECTION
     ═══════════════════════════════════════════════════════════════════════════ -->
<section class="hero" aria-label="A&S Contracting Services — General Contractor in Warrenton, MO">

  <div class="hero-inner">

    <!-- Left: Text + Trust -->
    <div class="hero-text">
      <div class="hero-eyebrow">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
        Serving Warren County Since <?php echo $yearEstablished; ?>
      </div>

      <h1 class="hero-title">
        Warrenton's <span class="accent">General Contractor</span> for Exterior &amp; Interior Projects
      </h1>

      <p class="hero-subtitle">
        A&amp;S Contracting Services is a licensed and insured contractor based in Warrenton, MO.
        From roof replacements and siding installs to full interior renovations and drywall,
        we complete every project on schedule with the craftsmanship Warren County homeowners expect.
      </p>

      <div class="hero-actions">
        <a href="#estimate-form" class="btn btn-primary">
          <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/></svg>
          Get a Free Estimate
        </a>
        <?php if (!empty($phone)): ?>
        <a href="tel:<?php echo preg_replace('/\D/', '', $phone); ?>" class="btn btn-outline">
          <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 13.35 19.79 19.79 0 0 1 1.61 4.73 2 2 0 0 1 3.58 2.54h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L7.91 10.1a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
          Call Now
        </a>
        <?php else: ?>
        <a href="/contact/" class="btn btn-outline">
          <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 13.35 19.79 19.79 0 0 1 1.61 4.73 2 2 0 0 1 3.58 2.54h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L7.91 10.1a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
          Contact Us
        </a>
        <?php endif; ?>
      </div>

      <div class="hero-trust" aria-label="Trust indicators">
        <span class="hero-trust-item">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
          Licensed &amp; Insured
        </span>
        <span class="hero-trust-item">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
          <?php echo $yearsInBusiness; ?>+ Years in Warrenton
        </span>
        <span class="hero-trust-item">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
          5.0 Google Rating
        </span>
        <span class="hero-trust-item">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 17 4 12"/></svg>
          Free Estimates
        </span>
      </div>
    </div><!-- /.hero-text -->

    <!-- Right: Lead Capture Form -->
    <aside class="hero-form-card" id="estimate-form" aria-label="Request a free estimate">
      <h2>Get Your Free Estimate</h2>
      <p class="hero-form-tagline">No obligation. Same-day response.</p>

      <form action="<?php echo htmlspecialchars($formAction); ?>" method="POST" class="hero-form">

        <!-- Honeypot -->
        <input type="text" name="_honey" style="display:none !important" tabindex="-1" autocomplete="off" aria-hidden="true">

        <!-- Hidden tracking -->
        <input type="hidden" name="_next"             value="/thank-you">
        <input type="hidden" name="_consent_version"  value="v2.1">
        <input type="hidden" name="_consent_page"     value="<?= htmlspecialchars($_SERVER['REQUEST_URI']) ?>">
        <input type="hidden" name="_form_location"    value="hero">

        <div class="form-row">
          <label for="hero-name" style="display:none">Full Name</label>
          <input type="text" id="hero-name" name="name" placeholder="Your full name" required autocomplete="name">
        </div>
        <div class="form-row">
          <label for="hero-phone" style="display:none">Phone</label>
          <input type="tel" id="hero-phone" name="phone" placeholder="Best phone number" required autocomplete="tel">
        </div>
        <div class="form-row">
          <label for="hero-zip" style="display:none">ZIP Code</label>
          <input type="text" id="hero-zip" name="zip" placeholder="Your ZIP code" pattern="[0-9]{5}" inputmode="numeric" required>
        </div>
        <div class="form-row">
          <label for="hero-service" style="display:none">Service Needed</label>
          <select id="hero-service" name="service_requested">
            <option value="">What do you need?</option>
            <?php foreach ($services as $_svc): ?>
            <option value="<?php echo htmlspecialchars($_svc['name']); ?>"><?php echo htmlspecialchars($_svc['name']); ?></option>
            <?php endforeach; ?>
          </select>
        </div>

        <button type="submit" class="btn-block">Get My Free Estimate →</button>

        <p class="form-footnote">
          By submitting, you agree to our <a href="/terms/">Terms</a> and <a href="/privacy-policy/">Privacy Policy</a>.
          We never sell your information.
        </p>
      </form>
    </aside><!-- /.hero-form-card -->

  </div><!-- /.hero-inner -->

</section><!-- /.hero -->


<!-- ═══════════════════════════════════════════════════════════════════════════
     TICKER STRIP
     ═══════════════════════════════════════════════════════════════════════════ -->
<div class="ticker-strip" aria-hidden="true">
  <div class="ticker-track">
    <!-- Group 1 (original set) -->
    <div class="ticker-group">
      <span class="ticker-item">
        <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
        Licensed &amp; Insured
      </span><span class="ticker-sep">◆</span>
      <span class="ticker-item">
        <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
        <?php echo $yearsInBusiness; ?>+ Years in Warrenton, MO
      </span><span class="ticker-sep">◆</span>
      <span class="ticker-item">
        <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
        Roofing · Siding · Gutters
      </span><span class="ticker-sep">◆</span>
      <span class="ticker-item">
        <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
        5-Star Google Rated
      </span><span class="ticker-sep">◆</span>
      <span class="ticker-item">
        <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
        Free Estimates — No Obligation
      </span><span class="ticker-sep">◆</span>
      <span class="ticker-item">
        <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><circle cx="12" cy="12" r="3"/><path d="M19.07 4.93a10 10 0 0 1 0 14.14M4.93 4.93a10 10 0 0 0 0 14.14"/></svg>
        50-Mile Service Radius
      </span><span class="ticker-sep">◆</span>
      <span class="ticker-item">
        <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"/></svg>
        Windows &amp; Doors · Interior Work
      </span><span class="ticker-sep">◆</span>
      <span class="ticker-item">
        <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M22 16.92v3a2 2 0 0 1-2.18 2A19.79 19.79 0 0 1 11.19 18.9 19.5 19.5 0 0 1 4.69 13.35 19.79 19.79 0 0 1 1.61 4.73 2 2 0 0 1 3.58 2.54h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L7.91 10.1a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
        Warren County's Contractor
      </span><span class="ticker-sep">◆</span>
    </div><!-- /.ticker-group -->
    <!-- Group 2 (identical duplicate — seamless loop) -->
    <div class="ticker-group">
      <span class="ticker-item">
        <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
        Licensed &amp; Insured
      </span><span class="ticker-sep">◆</span>
      <span class="ticker-item">
        <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
        <?php echo $yearsInBusiness; ?>+ Years in Warrenton, MO
      </span><span class="ticker-sep">◆</span>
      <span class="ticker-item">
        <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
        Roofing · Siding · Gutters
      </span><span class="ticker-sep">◆</span>
      <span class="ticker-item">
        <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
        5-Star Google Rated
      </span><span class="ticker-sep">◆</span>
      <span class="ticker-item">
        <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
        Free Estimates — No Obligation
      </span><span class="ticker-sep">◆</span>
      <span class="ticker-item">
        <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><circle cx="12" cy="12" r="3"/><path d="M19.07 4.93a10 10 0 0 1 0 14.14M4.93 4.93a10 10 0 0 0 0 14.14"/></svg>
        50-Mile Service Radius
      </span><span class="ticker-sep">◆</span>
      <span class="ticker-item">
        <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"/></svg>
        Windows &amp; Doors · Interior Work
      </span><span class="ticker-sep">◆</span>
      <span class="ticker-item">
        <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M22 16.92v3a2 2 0 0 1-2.18 2A19.79 19.79 0 0 1 11.19 18.9 19.5 19.5 0 0 1 4.69 13.35 19.79 19.79 0 0 1 1.61 4.73 2 2 0 0 1 3.58 2.54h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L7.91 10.1a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
        Warren County's Contractor
      </span><span class="ticker-sep">◆</span>
    </div><!-- /.ticker-group -->
  </div><!-- /.ticker-track -->
</div><!-- /.ticker-strip -->


<!-- SVG Divider: wave into services section -->
<div class="svg-divider" aria-hidden="true">
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 56" preserveAspectRatio="none" style="background:var(--color-primary);display:block;width:100%;" height="56">
    <path d="M0,0 C360,56 1080,56 1440,0 L1440,56 L0,56 Z" fill="var(--color-bg,#f8f8f8)"/>
  </svg>
</div>


<!-- ═══════════════════════════════════════════════════════════════════════════
     SERVICES SECTION (numbered 01)
     ═══════════════════════════════════════════════════════════════════════════ -->
<section class="services-section" aria-label="A&S Contracting Services — general contractor services">

  <div style="max-width:var(--max-width,1280px);margin:0 auto;padding:0 var(--space-lg);">

    <!-- Section Header -->
    <div class="services-header reveal-up">
      <span class="eyebrow-label">What We Do</span>
      <h2>
        What <span class="text-accent">construction services</span> does A&amp;S Contracting offer in Warrenton?
      </h2>
      <p class="hero-answer">
        A&amp;S Contracting Services handles roofing, siding, gutters, soffit &amp; fascia,
        windows &amp; doors, interior renovations, exterior work, drywall, and full general
        contracting projects for Warrenton homeowners and commercial clients across Warren County, MO.
      </p>
      <span class="section-subtitle">Built Right. Built to Last.</span>
      <p class="prose">
        Whether it's a single exterior repair or a full-scale interior remodel, our licensed crew in
        Warrenton, MO delivers professional results within a 50-mile radius of Warren County.
      </p>
    </div>

    <!-- Services Grid (first 8 — 9th and 10th via View All) -->
    <div class="services-grid">

      <?php
      $tints   = ['card-tint-1','card-tint-2','card-tint-3'];
      $delays  = ['reveal-delay-1','reveal-delay-2','reveal-delay-3'];
      $gridIdx = 0;

      foreach ($homeServiceSlugs as $slug):
        // Find service data
        $svc = null;
        foreach ($services as $s) { if ($s['slug'] === $slug) { $svc = $s; break; } }
        if (!$svc) continue;

        $tint    = $tints[$gridIdx % 3];
        $delay   = $delays[$gridIdx % 3];
        $photo   = $svcPhotos[$slug] ?? '';
        $icon    = $svcIcons[$slug]  ?? 'wrench';
        $bullets = $svcBullets[$slug] ?? ['Professional installation', 'Quality materials used', 'Satisfaction guaranteed'];
        $gridIdx++;
      ?>
      <article class="service-card-with-image <?php echo $tint; ?> reveal-up <?php echo $delay; ?>">
        <div class="service-card__image">
          <img
            src="<?php echo htmlspecialchars($photo); ?>"
            alt="<?php echo htmlspecialchars($svc['name']); ?> in Warrenton, MO — A&S Contracting Services"
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
            // Trim description to ~14 words max
            $words = explode(' ', $svc['description']);
            echo htmlspecialchars(implode(' ', array_slice($words, 0, 14)));
            if (count($words) > 14) echo '…';
          ?></p>
          <ul>
            <?php foreach ($bullets as $bullet): ?>
            <li><?php echo htmlspecialchars($bullet); ?></li>
            <?php endforeach; ?>
          </ul>
          <a href="/services/<?php echo htmlspecialchars($slug); ?>/" class="service-card__cta">Learn more</a>
        </div>
      </article>
      <?php endforeach; ?>

    </div><!-- /.services-grid -->

    <!-- View All (10 total — 2 not shown in home grid) -->
    <div class="services-more reveal-up">
      <a href="/services/" class="btn-secondary">View All <?php echo count($services); ?> Services →</a>
    </div>

  </div>
</section><!-- /.services-section -->


<!-- SVG Divider: angle cut into stats -->
<div class="svg-divider" aria-hidden="true">
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 48" preserveAspectRatio="none" style="background:var(--color-bg,#f8f8f8);display:block;width:100%;" height="48">
    <polygon points="0,48 1440,0 1440,48" fill="var(--color-primary)"/>
  </svg>
</div>


<!-- ═══════════════════════════════════════════════════════════════════════════
     STATS SECTION
     ═══════════════════════════════════════════════════════════════════════════ -->
<section class="stats-section" aria-label="A&S Contracting Services — by the numbers">
  <div class="stats-inner">

    <div class="stat-item reveal-scale">
      <span class="stat-number">
        <span class="stat-num-val" data-counter="<?php echo $yearsInBusiness; ?>"><?php echo $yearsInBusiness; ?></span><span class="stat-suffix">+</span>
      </span>
      <span class="stat-label">Years Serving<br>Warren County</span>
    </div>

    <div class="stat-item reveal-scale reveal-delay-1">
      <span class="stat-number">
        <span class="stat-num-val" data-counter="200">200</span><span class="stat-suffix">+</span>
      </span>
      <span class="stat-label">Projects<br>Completed</span>
    </div>

    <div class="stat-item reveal-scale reveal-delay-2">
      <span class="stat-number">
        <span class="stat-num-val" data-counter="5">5</span><span class="stat-suffix">.0</span>
      </span>
      <span class="stat-label">Google<br>Star Rating</span>
    </div>

    <div class="stat-item reveal-scale reveal-delay-3">
      <span class="stat-number">
        <span class="stat-num-val" data-counter="50">50</span><span class="stat-suffix">-mi</span>
      </span>
      <span class="stat-label">Service<br>Radius</span>
    </div>

  </div>
</section><!-- /.stats-section -->


<!-- ═══════════════════════════════════════════════════════════════════════════
     MID-PAGE CTA BANNER
     ═══════════════════════════════════════════════════════════════════════════ -->
<section class="mid-cta-banner" aria-label="Request your free estimate">
  <div class="mid-cta-inner">
    <p class="mid-cta-eyebrow">No Obligation — Same-Day Response</p>
    <h2>Ready to start your project in Warrenton?</h2>
    <p>
      Whether it's a leaking roof, damaged siding, or a full interior remodel near Warrenton,
      MO — A&amp;S Contracting Services responds fast and gets it done right. Get your free,
      written estimate today.
    </p>
    <div class="mid-cta-actions">
      <a href="/contact/" class="btn-dark">
        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/></svg>
        Request Your Free Estimate
      </a>
      <?php if (!empty($phone)): ?>
      <a href="tel:<?php echo preg_replace('/\D/', '', $phone); ?>" class="btn-outline-dark">
        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 13.35 19.79 19.79 0 0 1 1.61 4.73 2 2 0 0 1 3.58 2.54h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L7.91 10.1a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
        Call <?php echo htmlspecialchars($phone); ?>
      </a>
      <?php else: ?>
      <a href="/services/" class="btn-outline-dark">
        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/></svg>
        Browse All Services
      </a>
      <?php endif; ?>
    </div>
  </div>
</section><!-- /.mid-cta-banner -->


<!-- SVG Divider: multi-wave into about section -->
<div class="svg-divider" aria-hidden="true">
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 60" preserveAspectRatio="none" style="background:var(--color-accent);display:block;width:100%;" height="60">
    <path d="M0,0 C240,60 480,0 720,30 C960,60 1200,0 1440,30 L1440,60 L0,60 Z" fill="var(--color-bg,#f8f8f8)"/>
  </svg>
</div>


<!-- ═══════════════════════════════════════════════════════════════════════════
     ABOUT / PROCESS SECTION (numbered 02)
     ═══════════════════════════════════════════════════════════════════════════ -->
<section class="about-section" aria-label="About A&S Contracting Services" id="about">

  <div class="about-num-watermark" aria-hidden="true">02</div>

  <div class="about-inner">

    <!-- Left: Story + Process -->
    <div class="about-left">
      <span class="about-eyebrow">Why A&amp;S Contracting</span>
      <h2>
        A licensed <span class="text-accent">Warrenton contractor</span> who shows up and finishes the job
      </h2>
      <p>
        A&amp;S Contracting Services has been working directly with homeowners and commercial
        property owners across Warren County since <?php echo $yearEstablished; ?>. We're a licensed and insured
        general contractor based right here in Warrenton, MO — not a franchise from out of state
        and not a subcontractor chain that loses accountability between jobs.
      </p>
      <p>
        Whether you need a full roof replacement after a Missouri hailstorm, new siding on a
        rental property near Marthasville, or a complete interior remodel in Wright City, our
        crew handles every phase of the work directly. No middle-men. No surprises on the bill.
        A real contractor serving a 50-mile radius from Warrenton.
      </p>

      <!-- Process Steps -->
      <div class="process-steps" aria-label="Our project process">

        <div class="process-step reveal-left">
          <div class="step-number" aria-hidden="true">01</div>
          <div class="step-content">
            <h4>Free Estimate</h4>
            <p>We visit your property, assess the work, and provide a no-obligation written quote — typically within one business day.</p>
          </div>
        </div>

        <div class="process-step reveal-left reveal-delay-1">
          <div class="step-number" aria-hidden="true">02</div>
          <div class="step-content">
            <h4>Material Selection</h4>
            <p>We walk you through material options that fit your budget, your home's style, and Missouri's weather demands.</p>
          </div>
        </div>

        <div class="process-step reveal-left reveal-delay-2">
          <div class="step-number" aria-hidden="true">03</div>
          <div class="step-content">
            <h4>Professional Installation</h4>
            <p>Our licensed crew completes the work cleanly, on schedule, and to code — with you kept informed at every stage.</p>
          </div>
        </div>

        <div class="process-step reveal-left reveal-delay-3">
          <div class="step-number" aria-hidden="true">04</div>
          <div class="step-content">
            <h4>Final Walkthrough</h4>
            <p>We do a full quality inspection with you before closing any job — because sign-off means it's done right, not just done.</p>
          </div>
        </div>

      </div><!-- /.process-steps -->

      <div style="margin-top:var(--space-xl);">
        <a href="/about/" class="btn-dark">
          <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="12" cy="12" r="10"/><line x1="12" y1="8" x2="12" y2="12"/><line x1="12" y1="16" x2="12.01" y2="16"/></svg>
          Learn More About Us
        </a>
      </div>
    </div><!-- /.about-left -->

    <!-- Right: Image Stack -->
    <div class="about-right reveal-right">
      <div class="about-image-stack">
        <img
          src="<?php echo htmlspecialchars($aboutPrimary); ?>"
          alt="A&S Contracting Services crew working on a roofing project in Warrenton, MO"
          class="about-img-primary"
          width="600"
          height="480"
          loading="lazy"
        >
        <img
          src="<?php echo htmlspecialchars($aboutSecondary); ?>"
          alt="Completed exterior renovation by A&S Contracting Services in Warren County, Missouri"
          class="about-img-secondary"
          width="320"
          height="240"
          loading="lazy"
        >
        <!-- Floating stat badge -->
        <div class="about-stat-float" aria-label="<?php echo $yearsInBusiness; ?> years serving Warren County">
          <span class="big"><?php echo $yearsInBusiness; ?>+</span>
          <span class="lbl">Years Serving<br>Warren County</span>
        </div>
      </div>
    </div><!-- /.about-right -->

  </div>
</section><!-- /.about-section -->


<!-- SVG Divider: torn edge into reviews -->
<div class="svg-divider" aria-hidden="true">
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 54" preserveAspectRatio="none" style="background:var(--color-bg,#f8f8f8);display:block;width:100%;" height="54">
    <path d="M0,54 L0,18 C120,36 240,0 360,18 C480,36 600,0 720,18 C840,36 960,0 1080,18 C1200,36 1320,0 1440,18 L1440,54 Z" fill="var(--color-primary)"/>
  </svg>
</div>


<!-- ═══════════════════════════════════════════════════════════════════════════
     REVIEWS SECTION (numbered 03)
     ═══════════════════════════════════════════════════════════════════════════ -->
<section class="reviews-section" aria-label="Customer reviews — A&S Contracting Services">

  <div class="reviews-header">
    <span class="reviews-eyebrow" aria-hidden="true">What Clients Say</span>
    <h2>Real results from Warrenton homeowners</h2>
    <p>
      Rated 5.0 stars by homeowners across Warren County, MO — from quick gutter repairs
      to complete roof replacements and full interior remodels near me in Warrenton.
    </p>
  </div>

  <div class="reviews-scroll-wrap">
    <div class="reviews-row" role="list" aria-label="Customer testimonials">

      <article class="review-card reveal-up" role="listitem">
        <div class="review-stars" aria-label="5 stars">
          <?php for ($i = 0; $i < 5; $i++): ?>
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2" fill="currentColor"/></svg>
          <?php endfor; ?>
        </div>
        <p class="review-text">
          "Had A&amp;S replace the entire roof on our home after hail damage last spring. They came out fast, gave us a fair written quote, and the crew was professional from start to finish. Roof looks incredible and our insurance claim went smoothly with their documentation."
        </p>
        <div class="review-meta">
          <div class="review-avatar" aria-hidden="true">MH</div>
          <div>
            <div class="review-author-name">Marcus H.</div>
            <div class="review-author-detail">Roofing — Warrenton, MO</div>
          </div>
        </div>
      </article>

      <article class="review-card reveal-up reveal-delay-1" role="listitem">
        <div class="review-stars" aria-label="5 stars">
          <?php for ($i = 0; $i < 5; $i++): ?>
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2" fill="currentColor"/></svg>
          <?php endfor; ?>
        </div>
        <p class="review-text">
          "We needed new siding and gutters on our place outside Warrenton. A&amp;S was the most professional of the three contractors we got quotes from — they showed up when they said they would, communicated clearly, and finished ahead of schedule. Very happy we went with them."
        </p>
        <div class="review-meta">
          <div class="review-avatar" aria-hidden="true">JK</div>
          <div>
            <div class="review-author-name">Jennifer K.</div>
            <div class="review-author-detail">Siding &amp; Gutters — Warren County, MO</div>
          </div>
        </div>
      </article>

      <article class="review-card reveal-up reveal-delay-2" role="listitem">
        <div class="review-stars" aria-label="5 stars">
          <?php for ($i = 0; $i < 5; $i++): ?>
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2" fill="currentColor"/></svg>
          <?php endfor; ?>
        </div>
        <p class="review-text">
          "These guys did a full interior renovation — drywall, trim, paint — on a room addition at our house near Wright City. Great craftsmanship, clean job site every day, and they handled everything themselves without subbing it out. Will absolutely hire again."
        </p>
        <div class="review-meta">
          <div class="review-avatar" aria-hidden="true">RT</div>
          <div>
            <div class="review-author-name">Robert T.</div>
            <div class="review-author-detail">Interior Renovation — Wright City, MO</div>
          </div>
        </div>
      </article>

      <article class="review-card reveal-up reveal-delay-3" role="listitem">
        <div class="review-stars" aria-label="5 stars">
          <?php for ($i = 0; $i < 5; $i++): ?>
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2" fill="currentColor"/></svg>
          <?php endfor; ?>
        </div>
        <p class="review-text">
          "We replaced the soffit and fascia on our older farmhouse and A&amp;S matched everything perfectly to the existing roofline. The estimate was detailed and exactly what we paid. No surprises, no upselling. That kind of straightforward work is hard to find."
        </p>
        <div class="review-meta">
          <div class="review-avatar" aria-hidden="true">DL</div>
          <div>
            <div class="review-author-name">Diane L.</div>
            <div class="review-author-detail">Soffit &amp; Fascia — Marthasville, MO</div>
          </div>
        </div>
      </article>

    </div><!-- /.reviews-row -->
  </div><!-- /.reviews-scroll-wrap -->

  <div class="reviews-badge-strip">
    <span class="review-badge">⭐ 5.0 Google Rating</span>
    <span class="review-badge">· Warren County, MO ·</span>
    <span class="review-badge">Licensed &amp; Insured General Contractor</span>
  </div>

</section><!-- /.reviews-section -->


<!-- SVG Divider: smooth wave into FAQ -->
<div class="svg-divider" aria-hidden="true">
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 50" preserveAspectRatio="none" style="background:var(--color-primary);display:block;width:100%;" height="50">
    <path d="M0,50 C480,0 960,50 1440,25 L1440,50 Z" fill="var(--color-bg,#f8f8f8)"/>
  </svg>
</div>


<!-- ═══════════════════════════════════════════════════════════════════════════
     FAQ SECTION (numbered 04)
     ═══════════════════════════════════════════════════════════════════════════ -->
<section class="faq-section" aria-label="Frequently asked questions — A&S Contracting Services">

  <div class="faq-header">
    <span class="faq-eyebrow" aria-hidden="true">Common Questions</span>
    <h2>Answers about <span class="text-accent">contracting services</span> near Warrenton, MO</h2>
    <p>
      Questions homeowners in Warren County ask most before hiring a contractor.
      Don't see yours? <a href="/contact/" style="color:var(--color-accent);font-weight:600;">Ask us directly →</a>
    </p>
  </div>

  <div class="faq-grid" role="list">

    <?php foreach ($faqs as $faqIdx => $faq): ?>
    <div class="faq-item reveal-up reveal-delay-<?php echo ($faqIdx % 3) + 1; ?>" role="listitem">
      <button
        class="faq-question"
        aria-expanded="false"
        aria-controls="faq-answer-<?php echo $faqIdx; ?>"
      >
        <?php echo htmlspecialchars($faq['question']); ?>
        <span class="faq-icon" aria-hidden="true">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg>
        </span>
      </button>
      <div class="faq-answer" id="faq-answer-<?php echo $faqIdx; ?>" role="region">
        <?php echo htmlspecialchars($faq['answer']); ?>
      </div>
    </div>
    <?php endforeach; ?>

  </div>

</section><!-- /.faq-section -->


<!-- ═══════════════════════════════════════════════════════════════════════════
     CLOSING CTA
     ═══════════════════════════════════════════════════════════════════════════ -->
<section class="closing-cta-section" aria-label="Get your free estimate from A&S Contracting Services">

  <div class="closing-inner">
    <span class="closing-cta-eyebrow">Warrenton, MO &amp; 50-Mile Radius</span>
    <h2>
      Your next project deserves a <span class="accent">licensed contractor</span> near me
    </h2>
    <p>
      A&amp;S Contracting Services is based in Warrenton, MO and serves homeowners and property
      owners throughout Warren County and beyond. Roofing, siding, gutters, interior work —
      call or request a free estimate to get started today.
    </p>
    <div class="closing-actions">
      <a href="/contact/" class="btn-accent">
        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/></svg>
        Get a Free Estimate
      </a>
      <a href="/services/" class="btn-ghost-white">
        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><line x1="8" y1="6" x2="21" y2="6"/><line x1="8" y1="12" x2="21" y2="12"/><line x1="8" y1="18" x2="21" y2="18"/><line x1="3" y1="6" x2="3.01" y2="6"/><line x1="3" y1="12" x2="3.01" y2="12"/><line x1="3" y1="18" x2="3.01" y2="18"/></svg>
        View All Services
      </a>
    </div>
  </div>

</section><!-- /.closing-cta-section -->


<!-- Intersection Observer for reveal animations -->
<script>
(function () {
  'use strict';

  // ─── Scroll Reveals ────────────────────────────────────────────────────
  var revealEls = document.querySelectorAll('.reveal-up, .reveal-left, .reveal-right, .reveal-scale');
  if ('IntersectionObserver' in window && revealEls.length) {
    var revealObserver = new IntersectionObserver(function (entries) {
      entries.forEach(function (entry) {
        if (entry.isIntersecting) {
          entry.target.classList.add('revealed');
          revealObserver.unobserve(entry.target);
        }
      });
    }, { threshold: 0.12, rootMargin: '0px 0px -40px 0px' });
    revealEls.forEach(function (el) { revealObserver.observe(el); });
  } else {
    // Fallback: reveal all immediately
    revealEls.forEach(function (el) { el.classList.add('revealed'); });
  }

  // ─── Stat Counters ─────────────────────────────────────────────────────
  var statEls = document.querySelectorAll('[data-counter]');
  if ('IntersectionObserver' in window && statEls.length) {
    var counterObserver = new IntersectionObserver(function (entries) {
      entries.forEach(function (entry) {
        if (!entry.isIntersecting) return;
        var el     = entry.target;
        var target = parseInt(el.getAttribute('data-counter'), 10);
        var start  = 0;
        var duration = 1400;
        var step = function (timestamp) {
          if (!start) start = timestamp;
          var progress = Math.min((timestamp - start) / duration, 1);
          var ease = 1 - Math.pow(1 - progress, 3);
          el.textContent = Math.floor(ease * target);
          if (progress < 1) window.requestAnimationFrame(step);
          else el.textContent = target;
        };
        window.requestAnimationFrame(step);
        counterObserver.unobserve(el);
      });
    }, { threshold: 0.5 });
    statEls.forEach(function (el) { counterObserver.observe(el); });
  }

})();
</script>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
