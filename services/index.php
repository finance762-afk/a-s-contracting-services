<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
// ─── Page-level setup ───────────────────────────────────────────────────────
$pageType        = 'other';
$currentPage     = 'services';
$pageTitle       = 'Roofing, Siding & Remodeling Services in Warrenton, MO';
$pageDescription = 'Roofing, siding, gutters, soffit, fascia, windows, drywall and remodeling in Warrenton, MO from one crew. Licensed & insured. Call (636) 359-7204.';
$canonicalUrl    = $siteUrl . '/services/';

// Hero photo (image manifest — services index hero)
$heroImage    = '1779985120292-f16f8x-3-Mar_19__2026_12-17-52-Ujpj';
$heroImageAlt = 'Overhead view of shingle bundles laid out on a residential roof at sunset at an A&S Contracting Services job site';
$heroPreload  = [
    'srcset' => "/assets/images/{$heroImage}-480.avif 480w, /assets/images/{$heroImage}-960.avif 960w",
    'sizes'  => '100vw',
];

// Card photo per service (image manifest — each service's own hero photo)
$serviceCardPhoto = [
    'roofing'                  => '1779985211708-fd9gws-39-Dec_24__2025_22-36-50-nmCB',
    'siding'                   => '1779985053030-6d3zxh-65-Jun_03__2025_18-42-52-Tdqj',
    'gutters'                  => '1779985084434-7wvwuf-46-Feb_10__2026_22-02-29-uWM1',
    'soffit'                   => '1779985210676-rimzkx-29-Dec_24__2025_18-22-23-xd3W',
    'fascia'                   => '1779985248885-m9g42k-12-Nov_19__2025_22-17-31-YgPM',
    'windows-doors'            => '1779984953000-ootb3h-20-Aug_06__2025_14-16-18-XFFu',
    'full-scale-interior-work' => '1779985458116-w0hrmz-55-Oct_14__2024_15-18-30-xZXr',
    'exterior-work'            => '1779985052217-p5psyo-62-Apr_25__2025_19-50-40-dTeE-c1',
    'dry-wall'                 => '1779984936314-5pnhuy-43-Aug_06__2025_23-34-36-CJqa',
    'general-contracting'      => '1779985082241-xuoxbh-11-Feb_09__2026_15-26-29-L2wD',
];
$serviceCardAlt = [
    'roofing'                  => 'Finished asphalt shingle roof with a vent pipe on a wooded lot',
    'siding'                   => 'Front entry of a home with tan board siding, brick and red shutters',
    'gutters'                  => 'New dark shingle roof with the crew working below on a wooded property',
    'soffit'                   => 'Crew member working at the porch roofline of a tan wood-sided house',
    'fascia'                   => 'A-frame house with new shingles and scalloped trim along the roof edge',
    'windows-doors'            => 'New patio door frame set and flashed in a wall opening',
    'full-scale-interior-work' => 'Bare roof decking with chalk lines during a tear-off on a rural property',
    'exterior-work'            => 'Rear of a two-story home with tan siding, a bay window and patio doors',
    'dry-wall'                 => 'Blue-sided house with house wrap and a new deck frame during an exterior renovation',
    'general-contracting'      => 'A&S crew laying underlayment along a roof ridge on a wooded lot',
];

// Icons + one-line descriptions per service card
$serviceIcons = [
    'roofing'                  => 'home',
    'siding'                   => 'layers',
    'gutters'                  => 'droplets',
    'soffit'                   => 'wind',
    'fascia'                   => 'ruler',
    'windows-doors'            => 'building',
    'full-scale-interior-work' => 'paint-bucket',
    'exterior-work'            => 'hammer',
    'dry-wall'                 => 'pencil-ruler',
    'general-contracting'      => 'hard-hat',
];
$serviceCardDesc = [
    'roofing'                  => 'Roof installation, repair, tear-off and replacement, plus storm and hail damage repair.',
    'siding'                   => 'Vinyl, fiber cement and wood siding, installed and repaired.',
    'gutters'                  => 'Seamless aluminum gutters installed, repaired, replaced, cleaned and maintained.',
    'soffit'                   => 'Soffit installation and repair that ventilates the attic and blocks pests and moisture.',
    'fascia'                   => 'Fascia installation and rotted board replacement to protect the roof edge.',
    'windows-doors'            => 'Energy-efficient replacement windows, patio doors and entry doors, weather-sealed.',
    'full-scale-interior-work' => 'Drywall, flooring, painting, trim, custom finishes, room additions and full remodels.',
    'exterior-work'            => 'Roofing, siding and gutters integrated into one exterior renovation.',
    'dry-wall'                 => 'Drywall installation, finishing and repair for homes and commercial spaces.',
    'general-contracting'      => 'Residential and commercial projects managed from planning to completion.',
];

// ─── Schema (BreadcrumbList) ─────────────────────────────────────────────────
$breadcrumbSchema = [
    '@context'        => 'https://schema.org',
    '@type'           => 'BreadcrumbList',
    'itemListElement' => [
        ['@type' => 'ListItem', 'position' => 1, 'name' => 'Home',     'item' => $siteUrl . '/'],
        ['@type' => 'ListItem', 'position' => 2, 'name' => 'Services', 'item' => $canonicalUrl],
    ],
];
$schema = '<script type="application/ld+json">' . json_encode($breadcrumbSchema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) . '</script>';

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
?>

<style>
.svc-index-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 1rem; margin-top: 2rem; }
@media (max-width: 900px) { .svc-index-grid { grid-template-columns: 1fr 1fr; } }
@media (max-width: 560px) { .svc-index-grid { grid-template-columns: 1fr; } }
.svc-fit { max-width: 70ch; margin-inline: auto; }
.svc-fit p { margin-top: 1rem; color: var(--color-ink-2); }
.svc-fit a { color: var(--color-primary); text-decoration: underline; text-underline-offset: 2px; }
.svc-cta-band { display: grid; grid-template-columns: minmax(0, 1fr) auto; gap: 2rem; align-items: center; }
@media (max-width: 800px) { .svc-cta-band { grid-template-columns: 1fr; } }
/* Photo hero: let the <picture> fill the .hero-bg layer */
.hero--photo .hero-bg picture { display: block; width: 100%; height: 100%; }
.hero--photo .hero-bg img { width: 100%; height: 100%; object-fit: cover; object-position: 50% 45%; }
.hero--photo .breadcrumb, .hero--photo .breadcrumb a { color: rgba(255,255,255,.82); }
</style>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'; ?>

<!-- ═══════════════════ HERO (interior) ═══════════════════ -->
<section class="hero hero--photo">
  <div class="hero-bg">
    <?php echo p1_picture($heroImage, $heroImageAlt, ['sizes' => '100vw', 'width' => 1600, 'height' => 1000, 'loading' => 'eager', 'fetchpriority' => 'high']); ?>
  </div>
  <div class="hero-overlay"></div>
  <span class="grain" aria-hidden="true"></span>
  <div class="container">
    <nav class="breadcrumb" aria-label="Breadcrumb">
      <ol>
        <li><a href="/">Home</a></li>
        <li class="breadcrumb-sep" aria-hidden="true">/</li>
        <li aria-current="page">Services</li>
      </ol>
    </nav>
    <div class="hero-copy">
      <span class="eyebrow">Warrenton, MO &middot; Warren County</span>
      <h1>Everything A&amp;S Contracting Services <span class="text-accent">builds and repairs</span></h1>
      <p class="hero-answer">A&amp;S Contracting Services is a licensed Missouri general contractor, fully insured, that self-performs ten trades from Warrenton: roofing, siding, gutters, soffit, fascia, windows and doors, drywall, interior and exterior renovation, and general contracting.</p>
      <div class="hero-actions">
        <a href="/contact/" class="btn btn-primary btn-lg">Request a written estimate</a>
        <a class="link-call" href="tel:<?php echo $phoneTel; ?>"><?php echo icon('phone', 18); ?> or call <?php echo $phone; ?></a>
      </div>
    </div>
  </div>
</section>

<!-- ═══════════════════ INTRO + SERVICE GRID ═══════════════════ -->
<section class="section section--light">
  <div class="container-wide">
    <div class="section-title reveal-up">
      <span class="eyebrow-label">Ten Trades, One Company</span>
      <h2>Which A&amp;S service does your project need?</h2>
      <p class="answer-block">The service your project needs depends on where the problem starts: at the roofline, on the walls, at an opening or indoors. A&amp;S Contracting Services, founded in Warrenton in 2023 as a roofing and exterior company, now covers all four with its own crew, and each card below links to the page for one trade.</p>
    </div>

    <div class="svc-index-grid">
      <?php
      $tintCycle = [1, 2, 3];
      foreach ($services as $i => $svc):
        $slug  = $svc['slug'];
        $photo = $serviceCardPhoto[$slug] ?? null;
      ?>
      <article class="service-card-with-image card-tint-<?php echo $tintCycle[$i % 3]; ?> reveal-up reveal-delay-<?php echo ($i % 3) + 1; ?>">
        <?php if ($photo): ?>
        <div class="service-card__image">
          <?php echo p1_picture($photo, $serviceCardAlt[$slug] ?? ($svc['name'] . ' by A&S Contracting Services in Warrenton, MO'), [
              'sizes'  => '(max-width: 560px) 100vw, (max-width: 900px) 50vw, 33vw',
              'width'  => 600,
              'height' => 360,
              'decoding' => 'async',
          ]); ?>
        </div>
        <?php endif; ?>
        <div class="service-card__body">
          <div class="service-card__icon"><?php echo icon($serviceIcons[$slug] ?? 'check-circle', 22); ?></div>
          <h3><?php echo htmlspecialchars($svc['name']); ?></h3>
          <p class="service-card__desc"><?php echo htmlspecialchars($serviceCardDesc[$slug] ?? $svc['description']); ?></p>
          <a href="/services/<?php echo $slug; ?>/" class="service-card__cta"><?php echo htmlspecialchars($serviceAnchor[$slug] ?? $svc['name']); ?></a>
        </div>
      </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ═══════════════════ HOW THE SERVICES FIT TOGETHER ═══════════════════ -->
<section class="section">
  <div class="container">
    <div class="svc-fit reveal-up">
      <span class="eyebrow-label">How They Connect</span>
      <h2>How do the ten A&amp;S services fit together?</h2>
      <p class="answer-block">The ten A&amp;S services fit together as three groups that meet at the roof edge and at every opening in the wall. Above the walls, <a href="/services/roofing/">roof repair, tear-off and replacement</a> sheds water into <a href="/services/gutters/">seamless aluminum gutters</a>, which hang on the <a href="/services/fascia/">fascia boards</a> beside the <a href="/services/soffit/">soffit that ventilates the attic</a>.</p>
      <p>On the walls, <a href="/services/siding/">vinyl, fiber cement and wood siding</a> meets <a href="/services/windows-doors/">replacement windows, patio doors and entry doors</a>, and a <a href="/services/exterior-work/">full exterior renovation</a> combines those with the roof and gutters in one sequence. Indoors, <a href="/services/dry-wall/">drywall installation, finishing and repair</a> is the base for <a href="/services/full-scale-interior-work/">interior remodels and room additions</a>. When a project crosses those groups or involves a commercial property, A&amp;S Contracting Services runs it as <a href="/services/general-contracting/">general contracting from planning to completion</a>.</p>
      <p>Every service starts the same way: an on-site visit and a written, itemized estimate at no charge, then a start window in writing, daily cleanup and a final walkthrough. A&amp;S works within 50 miles of Warrenton, the Warren County seat on Interstate 70; the <a href="/service-areas/">service area page</a> lists the towns.</p>
    </div>
  </div>
</section>

<!-- ═══════════════════ CTA BANNER ═══════════════════ -->
<section class="cta-banner texture-grain edge-curve-top" aria-label="Request a written estimate">
  <span class="grain-layer" aria-hidden="true"></span>
  <div class="container">
    <div class="reveal-up">
      <span class="eyebrow">One accountable team</span>
      <h2>Not sure which service you need? Just ask.</h2>
      <p>Describe the project and A&amp;S Contracting Services will tell you which service covers it, then schedule an on-site visit and a free written estimate.</p>
    </div>
    <div class="actions">
      <a href="/contact/" class="btn btn-accent btn-lg">Get my written estimate</a>
      <a href="tel:<?php echo $phoneTel; ?>" class="btn btn-outline-white btn-lg"><?php echo icon('phone', 18); ?> <?php echo $phone; ?></a>
    </div>
  </div>
</section>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
