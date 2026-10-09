<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
// ─── Page-level setup ───────────────────────────────────────────────────────
$pageType        = 'about';
$currentPage     = 'about';
$pageTitle       = 'About A&S Contracting Services';
$pageDescription = 'A&S Contracting Services is a general contractor in Warrenton, MO, founded in 2023 by Blake Alger. See how the company works and where it serves. (636) 359-7204';
$canonicalUrl    = $siteUrl . '/about/';

// BreadcrumbList schema
$schemaGraph = [
    '@context' => 'https://schema.org',
    '@graph' => [
        [
            '@type' => 'WebPage',
            '@id' => $canonicalUrl . '#webpage',
            'url' => $canonicalUrl,
            'name' => $pageTitle,
            'description' => $pageDescription,
        ],
        [
            '@type' => 'BreadcrumbList',
            'itemListElement' => [
                [
                    '@type' => 'ListItem',
                    'position' => 1,
                    'name' => 'Home',
                    'item' => $siteUrl . '/',
                ],
                [
                    '@type' => 'ListItem',
                    'position' => 2,
                    'name' => 'About',
                    'item' => $canonicalUrl,
                ],
            ],
        ],
    ],
];
$schema = '<script type="application/ld+json">' . json_encode($schemaGraph, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) . '</script>';

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
?>

<!-- Page-specific composition -->
<style>
.about-hero { background: linear-gradient(135deg, var(--color-primary) 0%, var(--color-secondary) 100%); padding: calc(var(--nav-height) + var(--space-3xl)) var(--space-xl) var(--space-3xl); position: relative; overflow: hidden; }
.about-hero .container { max-width: var(--max-width); margin: 0 auto; position: relative; z-index: 1; }
.about-hero h1 { color: #fff; margin-bottom: var(--space-md); }
.about-hero .hero-answer { color: rgba(255,255,255,0.9); max-width: 65ch; margin-bottom: var(--space-xl); font-size: 1.15rem; line-height: 1.6; }
.about-hero .hero-chips { display: flex; flex-wrap: wrap; gap: var(--space-sm); }
.about-hero .chip { background: rgba(255,255,255,0.15); backdrop-filter: blur(8px); color: #fff; padding: var(--space-xs) var(--space-md); border-radius: 24px; font-size: 0.92rem; border: 1px solid rgba(255,255,255,0.2); }

.about-section { padding: var(--space-3xl) var(--space-xl); background: var(--color-bg); }
.about-section--alt { background: var(--color-bg-alt); }
.about-section h2 { margin-bottom: var(--space-md); }
.about-section p { margin-bottom: var(--space-md); line-height: 1.7; }
.about-section p:last-child { margin-bottom: 0; }
.about-section a { color: var(--color-primary); text-decoration: underline; }
.about-steps { margin: 0 0 var(--space-md); padding-left: var(--space-xl); display: grid; gap: var(--space-sm); line-height: 1.65; }
.about-steps li::marker { color: var(--color-accent-dark, var(--color-primary)); font-weight: 700; }
.about-areas { list-style: none; margin: var(--space-md) 0; padding: 0; display: grid; grid-template-columns: repeat(auto-fit, minmax(180px, 1fr)); gap: var(--space-sm); }
.about-areas li { padding: var(--space-sm) var(--space-md); background: var(--color-bg); border: 1px solid var(--color-border); border-radius: var(--radius); display: flex; align-items: center; gap: var(--space-sm); }
.about-areas svg { color: var(--color-accent); flex-shrink: 0; }

.about-band-wrap { padding: 0 var(--space-xl); }
.about-band-wrap .cta-band.post-cta { max-width: var(--max-width); margin: var(--space-2xl) auto; text-align: left; padding: 40px 32px; }
.about-band-wrap .cta-band h3 { margin-bottom: 10px; }
.about-band-wrap .cta-band p { margin-bottom: 20px; }

.cta-about { background: linear-gradient(135deg, var(--color-primary) 0%, var(--color-secondary) 100%); color: #fff; padding: var(--space-4xl) var(--space-xl); text-align: center; }
.cta-about h2 { color: #fff; margin-bottom: var(--space-md); }
.cta-about p { color: rgba(255,255,255,0.9); max-width: 60ch; margin: 0 auto var(--space-xl); font-size: 1.1rem; }
.cta-buttons { display: flex; gap: var(--space-md); justify-content: center; flex-wrap: wrap; }
</style>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'; ?>

<!-- Hero -->
<section class="about-hero" aria-label="About A&S Contracting Services">
  <div class="container">
    <h1>About A&S Contracting Services</h1>
    <p class="hero-answer">
      A&S Contracting Services is a licensed and insured general contractor in Warrenton, Missouri. Owner
      Blake Alger founded it in <?php echo $yearEstablished; ?> to do roofing and exterior work, and the company
      now self-performs ten services for residential and commercial clients within <?php echo $serviceRadius; ?> miles.
    </p>
    <div class="hero-chips">
      <span class="chip">Founded <?php echo $yearEstablished; ?></span>
      <span class="chip">Owner: <?php echo htmlspecialchars($ownerName); ?></span>
      <span class="chip">Warrenton, MO <?php echo $addressZip; ?></span>
      <span class="chip">Residential &amp; commercial</span>
    </div>
  </div>
</section>

<!-- Breadcrumb -->
<nav class="breadcrumb" aria-label="Breadcrumb">
  <div class="container">
    <ol>
      <li><a href="/">Home</a></li>
      <li class="breadcrumb-sep" aria-hidden="true">›</li>
      <li aria-current="page">About</li>
    </ol>
  </div>
</nav>

<!-- Who is behind the company -->
<section class="about-section">
  <div class="container-narrow">
    <h2>Who is behind A&amp;S Contracting Services?</h2>
    <p>
      Blake Alger owns A&amp;S Contracting Services, a general contractor in Warrenton, Missouri, founded in
      <?php echo $yearEstablished; ?>. The company began with roofing and exterior work and expanded into the full
      list of services it offers today, from siding and gutters to interior remodels, for residential and
      commercial projects.
    </p>
    <p>
      The roofing start still shapes the work. Tear-off and replacement, storm and hail repair, and insurance
      claim documentation sit next to the siding, gutter, soffit, and fascia work that finishes a roofline. The
      interior side, which covers drywall, flooring, painting, trim, and room additions, grew out of that
      exterior base. The full list is on the <a href="/services/">A&amp;S services page</a>.
    </p>
  </div>
</section>

<!-- Mid-page estimate form -->
<div class="about-band-wrap">
  <section class="cta-band post-cta" id="estimate">
    <div class="post-cta-grid">
      <div>
        <h3>Have a project in mind?</h3>
        <p>
          A&amp;S Contracting Services schedules estimates within days of first contact. The on-site visit and the
          written, itemized estimate cost nothing and carry no obligation.
        </p>
        <a href="tel:<?php echo $phoneTel; ?>" class="btn btn-primary">Call <?php echo $phone; ?></a>
      </div>
      <?php $heroFormTitle = 'Request an estimate'; $heroFormId = 'cta-band'; include $_SERVER['DOCUMENT_ROOT'] . '/includes/hero-form.php'; ?>
    </div>
  </section>
</div>

<!-- Process -->
<section class="about-section about-section--alt">
  <div class="container-narrow">
    <h2>How does A&amp;S Contracting Services run a project from estimate to walkthrough?</h2>
    <p>
      A&amp;S Contracting Services starts each project with an on-site visit and a written, itemized estimate,
      then gives a start window in writing. Work is cleaned up at the end of every day, and every project closes
      with a final walkthrough with the homeowner.
    </p>
    <ol class="about-steps">
      <li><strong>On-site visit.</strong> The team looks at the roof, siding, or room in person before any number is written.</li>
      <li><strong>Written, itemized estimate.</strong> Price depends on square footage, the materials selected, the condition of the existing structure, and scope. There are no hidden fees or upselling, and the quoted price is the final price.</li>
      <li><strong>Written start window.</strong> The schedule is put on paper before work begins.</li>
      <li><strong>Daily cleanup.</strong> The job site is kept clean every day the crew is on it.</li>
      <li><strong>Final walkthrough.</strong> Every project ends with one, whether it is a roof, a siding job, or a remodeled room.</li>
    </ol>
  </div>
</section>

<!-- Self-performed -->
<section class="about-section">
  <div class="container-narrow">
    <h2>Why does A&amp;S Contracting Services do its own work instead of hiring subcontractors?</h2>
    <p>
      A&amp;S Contracting Services performs its own work with no subcontractors, so one accountable crew stays on the
      job from the first day to the final walkthrough. Roofing, siding, gutters, drywall, windows, and interior work
      all come from the same company, which leaves nobody to pass blame to.
    </p>
    <p>
      On a roofline job, the team that tears off the shingles also handles the soffit, fascia, and gutters. When a
      leak has reached the ceiling, drywall repair is already on the list of services. The
      <a href="/services/roofing/">roofing page</a> shows how that fits together for replacement and storm repair.
    </p>
  </div>
</section>

<!-- Insurance claims -->
<section class="about-section about-section--alt">
  <div class="container-narrow">
    <h2>How does A&amp;S Contracting Services help with storm and hail insurance claims?</h2>
    <p>
      A&amp;S Contracting Services documents storm and hail damage with photos, writes a detailed itemized estimate,
      meets the insurance adjuster on site, and helps the homeowner through the claim. The goal is a clear record
      of what was damaged, so the move from inspection to installation is straightforward.
    </p>
  </div>
</section>

<!-- Service area -->
<section class="about-section">
  <div class="container-narrow">
    <h2>Where does A&amp;S Contracting Services work?</h2>
    <p>
      A&amp;S Contracting Services is based in Warrenton, the Warren County seat, and works within
      <?php echo $serviceRadius; ?> miles of it. Warrenton sits on Interstate 70 at the State Route 47 interchange,
      and Wright City, Foristell, Wentzville, and Jonesburg are also I-70 towns. Troy and Washington complete the
      list of named towns, and the <a href="/service-areas/">service areas page</a> has a page for each.
    </p>
    <ul class="about-areas">
      <?php foreach ($serviceAreas as $aboutArea): ?>
      <li>
        <?php echo icon('map-pin', 18); ?>
        <a href="/areas/<?php echo strtolower(str_replace(' ', '-', $aboutArea['city'])); ?>/"><?php echo htmlspecialchars($aboutArea['city']); ?>, <?php echo $aboutArea['state']; ?></a>
      </li>
      <?php endforeach; ?>
    </ul>
  </div>
</section>

<!-- CTA -->
<section class="cta-about">
  <div class="container">
    <h2>Ready to talk through your project?</h2>
    <p>
      Call Blake Alger's team at <?php echo $phone; ?>, or send the details and A&amp;S Contracting Services will
      be in touch to set up the on-site visit.
    </p>
    <div class="cta-buttons">
      <a href="/contact/" class="btn-primary">Request an estimate</a>
      <a href="tel:<?php echo $phoneTel; ?>" class="btn-secondary">
        <?php echo icon('phone', 20); ?>
        Call <?php echo $phone; ?>
      </a>
    </div>
  </div>
</section>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
