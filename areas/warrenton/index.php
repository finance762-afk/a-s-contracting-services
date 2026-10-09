<?php
/**
 * Warrenton, MO service area page (v8 rewrite, 2026-10-09)
 *
 * Local facts source: https://en.wikipedia.org/wiki/Warrenton,_Missouri (fetched 2026-10-09; census figures as cited there).
 * Company facts: includes/config.php and llms.txt only. No drive times, review counts or past-job claims.
 */

require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';

$pageType = 'city';
$citySlug = 'warrenton';
$pageTitle = 'General Contractor & Roofer in Warrenton, MO';
$pageDescription = 'A&S Contracting Services is a general contractor and roofer based in Warrenton, MO 63383: roofing, siding, gutters and remodeling by one crew. (636) 359-7204.';
$canonicalUrl = $siteUrl . '/areas/warrenton/';
$currentPage = 'service-areas';

// Schema: BreadcrumbList + organization reference with areaServed
$schema = <<<SCHEMA
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "BreadcrumbList",
      "itemListElement": [
        { "@type": "ListItem", "position": 1, "name": "Home", "item": "{$siteUrl}/" },
        { "@type": "ListItem", "position": 2, "name": "Service Areas", "item": "{$siteUrl}/service-areas/" },
        { "@type": "ListItem", "position": 3, "name": "Warrenton, MO", "item": "{$canonicalUrl}" }
      ]
    },
    {
      "@type": "GeneralContractor",
      "name": "{$siteName}",
      "@id": "{$siteUrl}/#organization",
      "areaServed": {
        "@type": "City",
        "name": "Warrenton",
        "containedInPlace": { "@type": "State", "name": "Missouri" }
      }
    }
  ]
}
</script>
SCHEMA;

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>

<style>
/* Area Page Styles */
.hero--area {
  background: linear-gradient(135deg, var(--color-primary) 0%, rgba(0,0,0,0.85) 100%);
  padding: calc(var(--nav-height) + 60px) 0 80px;
  position: relative;
  overflow: hidden;
}

.hero--area::before {
  content: '';
  position: absolute;
  inset: 0;
  background: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23ffffff' fill-opacity='0.02'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
  opacity: 0.4;
}

.hero--area .container {
  position: relative;
  z-index: 1;
  max-width: 900px;
}

.breadcrumb {
  display: flex;
  align-items: center;
  gap: 8px;
  margin-bottom: 16px;
  font-size: 0.875rem;
  color: rgba(255,255,255,0.7);
}

.breadcrumb a {
  color: var(--color-accent);
  text-decoration: none;
  transition: color 0.2s;
}

.breadcrumb a:hover {
  color: #fff;
}

.breadcrumb-sep {
  color: rgba(255,255,255,0.4);
}

.eyebrow {
  font-family: var(--font-accent);
  font-size: 0.875rem;
  font-weight: 600;
  letter-spacing: 0.1em;
  text-transform: uppercase;
  color: var(--color-accent);
  margin-bottom: 16px;
}

.hero--area h1 {
  font-size: clamp(2rem, 5vw, 2.75rem);
  font-weight: 700;
  color: #fff;
  margin-bottom: 20px;
  line-height: 1.2;
}

.hero-answer {
  font-size: 1.125rem;
  line-height: 1.6;
  color: rgba(255,255,255,0.9);
  margin-bottom: 32px;
}

.hero-chips {
  display: flex;
  gap: 12px;
  flex-wrap: wrap;
  margin-bottom: 32px;
}

.hero-chip {
  display: inline-flex;
  align-items: center;
  gap: 8px;
  padding: 8px 16px;
  background: rgba(255,255,255,0.1);
  backdrop-filter: blur(8px);
  border-radius: 24px;
  font-size: 0.875rem;
  color: #fff;
  border: 1px solid rgba(255,255,255,0.2);
}

.section-light {
  background: #fff;
  padding: 80px 0;
}

.section-dark {
  background: var(--color-primary);
  color: #fff;
  padding: 80px 0;
}

.section-title {
  font-size: clamp(1.75rem, 4vw, 2.25rem);
  margin-bottom: 16px;
  font-weight: 700;
}

.section-subtitle {
  font-size: 1.125rem;
  color: var(--color-text-light);
  margin-bottom: 48px;
  max-width: 700px;
}

.section-dark .section-subtitle {
  color: rgba(255,255,255,0.8);
}

.split-grid {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 60px;
  align-items: center;
}

.prose p {
  margin-bottom: 20px;
  line-height: 1.7;
}

.prose strong {
  font-weight: 600;
  color: var(--color-primary);
}

.section-dark .prose strong {
  color: var(--color-accent);
}

.services-list {
  display: grid;
  grid-template-columns: repeat(2, 1fr);
  gap: 16px;
  margin-top: 32px;
}

.service-item {
  display: flex;
  align-items: center;
  gap: 12px;
  padding: 16px;
  background: rgba(255,255,255,0.05);
  border-radius: 8px;
  border: 1px solid rgba(255,255,255,0.1);
}

.service-item svg {
  flex-shrink: 0;
  color: var(--color-accent);
}

.cta-band {
  background: linear-gradient(135deg, var(--color-accent) 0%, #a5a7a9 100%);
  padding: 80px 0;
  text-align: center;
  color: var(--color-primary);
}

.cta-band h2 {
  font-size: clamp(1.75rem, 4vw, 2.25rem);
  margin-bottom: 16px;
}

.cta-band p {
  font-size: 1.125rem;
  margin-bottom: 32px;
  opacity: 0.9;
}

.btn-group {
  display: flex;
  gap: 16px;
  justify-content: center;
  flex-wrap: wrap;
}

@media (max-width: 768px) {
  .split-grid {
    grid-template-columns: 1fr;
    gap: 32px;
  }

  .services-list {
    grid-template-columns: 1fr;
  }

  .section-light,
  .section-dark {
    padding: 60px 0;
  }
}
.hero--area .container { max-width: 1200px; }
.hero--area .hero-grid--form { align-items: start; }
.hero--area .hero-copy .btn-group { margin-bottom: 0; }
@media (max-width: 900px) { .hero--area .hero-grid--form { grid-template-columns: 1fr; } .hero--area .hero-form-card { display: none; } }
/* SEO pass 2026-09-24: readable heading on the dark band + in-list service links */
.section-dark .section-title { color: inherit; }
.service-item a { color: inherit; text-decoration: underline; text-decoration-color: var(--color-accent); text-underline-offset: 3px; }
.service-item a:hover { color: var(--color-accent); }
.prose a { text-decoration: underline; text-underline-offset: 3px; }

/* v8 2026-10-09: at-a-glance table, process list, lead-service list (token-only) */
.area-article h2 { text-wrap: balance; }
.area-glance { width: 100%; border-collapse: collapse; margin-top: var(--space-4); font-size: var(--fs-small); background: var(--color-surface); border: 1px solid var(--color-line); border-radius: var(--radius); overflow: hidden; }
.area-glance caption { text-align: left; font-family: var(--font-heading); font-weight: 700; padding-bottom: var(--space-2); color: var(--color-primary); }
.area-glance th, .area-glance td { text-align: left; padding: var(--space-2) var(--space-3); border-bottom: 1px solid var(--color-line); vertical-align: top; }
.area-glance th { width: 42%; font-weight: 600; color: var(--color-muted); }
.area-glance tr:last-child th, .area-glance tr:last-child td { border-bottom: 0; }
.area-source { margin-top: var(--space-2); font-size: var(--fs-small); color: var(--color-muted); }
.area-leads { list-style: none; display: grid; grid-template-columns: repeat(3, 1fr); gap: var(--space-4); margin-top: var(--space-6); padding: 0; }
.area-leads li { padding: var(--space-5); border: 1px solid rgba(var(--color-secondary-rgb), .14); border-radius: var(--radius); background: rgba(var(--color-secondary-rgb), .05); }
.area-answer { max-width: 760px; font-size: var(--fs-lead); line-height: 1.65; color: rgba(var(--color-secondary-rgb), .88); }
.area-leads h3 { font-size: var(--fs-h3); margin-bottom: var(--space-2); color: var(--color-white); }
.area-leads h3 a { color: inherit; text-decoration: underline; text-decoration-color: var(--color-accent); text-underline-offset: 3px; }
.area-leads p { line-height: 1.6; }
.area-leads p a { color: var(--color-accent); text-decoration: underline; }
.area-more { margin-top: var(--space-6); }
.area-more a { color: var(--color-accent); text-decoration: underline; }
.area-steps { margin: var(--space-5) 0 0; padding-left: 1.25em; display: grid; gap: var(--space-3); line-height: 1.65; }
.area-steps li::marker { font-weight: 700; color: var(--color-primary); }
.section-alt { background: var(--color-bg-alt); padding: 80px 0; }
.area-narrow { max-width: 820px; }
.cta-band .area-near { margin-top: var(--space-5); font-size: var(--fs-small); }
.cta-band .area-near a { text-decoration: underline; text-underline-offset: 3px; }
@media (max-width: 768px) { .hero--area { padding-top: calc(var(--nav-height) + var(--space-6)); } .hero--area .hero-copy { display: flex; flex-direction: column; } .hero--area .hero-answer { margin-bottom: var(--space-4); font-size: var(--fs-body); } .hero--area .hero-copy .btn-group { order: 3; justify-content: flex-start; margin-bottom: var(--space-4); } .hero--area .hero-chips { order: 4; margin-bottom: 0; } }
@media (max-width: 900px) { .area-leads { grid-template-columns: 1fr; } .section-alt { padding: 60px 0; } }
</style>

<article class="area-article">

<!-- Hero -->
<section class="hero--area">
  <div class="container">
    <div class="hero-grid hero-grid--form">
      <div class="hero-copy">
        <nav class="breadcrumb" aria-label="Breadcrumb">
          <a href="/">Home</a>
          <span class="breadcrumb-sep" aria-hidden="true">/</span>
          <a href="/service-areas/">Service Areas</a>
          <span class="breadcrumb-sep" aria-hidden="true">/</span>
          <span>Warrenton</span>
        </nav>

        <div class="eyebrow">Home base &middot; Warren County seat</div>
        <h1>General Contractor &amp; Roofer in <span class="text-accent">Warrenton, MO</span></h1>
        <p class="hero-answer">A&amp;S Contracting Services is a licensed and insured general contractor based in Warrenton, Missouri. Owner Blake Alger&rsquo;s crew repairs and replaces roofs, hangs siding and gutters, sets windows and doors, and remodels interiors for Warrenton homes and businesses.</p>

        <ul class="hero-chips">
          <li class="hero-chip"><?php echo icon('map-pin', 16); ?> Based in Warrenton, 63383</li>
          <li class="hero-chip"><?php echo icon('calendar-check', 16); ?> Founded in 2023</li>
          <li class="hero-chip"><?php echo icon('clock', 16); ?> Mon&ndash;Fri 7am&ndash;6pm, Sat 8am&ndash;3pm</li>
        </ul>

        <div class="btn-group">
          <a href="/contact/" class="btn-primary" data-open-estimate>Request an estimate</a>
          <a href="tel:<?php echo $phoneTel; ?>" class="btn-secondary">
            <?php echo icon('phone', 20); ?>
            <?php echo $phone; ?>
          </a>
        </div>
      </div>
      <?php $heroFormTitle = 'Estimate for a Warrenton address'; $heroFormId = 'hero'; include $_SERVER['DOCUMENT_ROOT'] . '/includes/hero-form.php'; ?>
    </div>
  </div>
</section>

<!-- The place -->
<section class="section-light">
  <div class="container">
    <div class="split-grid">
      <div class="prose">
        <h2 class="section-title">Is A&amp;S Contracting Services a local Warrenton contractor?</h2>
        <p>A&amp;S Contracting Services is a Warrenton contractor: the company is based in the Warren County seat and has worked from here since Blake Alger founded it in 2023. Warrenton is the centre of the 50-mile area the crew covers, so a job in town starts with a short drive, not a travel schedule.</p>
          <p>Warrenton began in the 1830s as a planned community and had 8,429 residents and 3,514 housing units at the 2020 census. It sits on Interstate 70 at State Route 47, and that crossing is how the A&amp;S crew reaches the rest of its territory: I-70 east to <a href="/areas/wright-city/">Wright City</a> and west to <a href="/areas/jonesburg/">Jonesburg</a>, Route 47 north to <a href="/areas/troy/">Troy</a> and south to <a href="/areas/washington/">Washington</a>.</p>
          <p>The town stands at 827 feet and averages 41.47 inches of precipitation a year (1991&ndash;2020 normals), with a record high of 114&deg;F and a record low of &minus;22&deg;F. An exterior here has to shed a lot of water and survive a wide temperature swing, which is why A&amp;S looks at the roof, the gutters and the boards behind them together instead of pricing one piece in isolation.</p>
      </div>
      <aside aria-label="Warrenton at a glance">
        <table class="area-glance">
          <caption>Warrenton, Missouri at a glance</caption>
          <tbody>
            <tr><th scope="row">County</th><td>Warren County (county seat)</td></tr>
            <tr><th scope="row">ZIP code</th><td>63383</td></tr>
            <tr><th scope="row">Main roads</th><td>Interstate 70, State Route 47</td></tr>
            <tr><th scope="row">Elevation</th><td>about 827 ft</td></tr>
            <tr><th scope="row">Population (2020)</th><td>8,429</td></tr>
            <tr><th scope="row">Housing units</th><td>3,514 (2020 census)</td></tr>
          </tbody>
        </table>
        <p class="area-source">Figures: U.S. Census Bureau and USGS data as published in the Warrenton entry on Wikipedia.</p>
      </aside>
    </div>
  </div>
</section>

<!-- The work -->
<section class="section-dark">
  <div class="container">
    <h2 class="section-title">What work does A&amp;S take on for Warrenton homes and businesses?</h2>
    <p class="area-answer">A&amp;S Contracting Services takes on roofing, siding, gutters, soffit, fascia, windows and doors, drywall and full interior remodels in Warrenton, for residential and commercial owners alike. The company began with roofing and exterior work and added the interior trades, so one contract can cover a project from shingles to finished walls.</p>
    <ul class="area-leads">
        <li>
          <h3><a href="/services/roofing/">Roof repair and replacement</a></h3>
          <p>Tear-off and replacement in architectural asphalt shingles, impact-resistant shingles or metal. Most single-family roof replacements take one to three days, weather permitting, and storm or hail damage is photographed for the insurance claim.</p>
        </li>
        <li>
          <h3><a href="/services/gutters/">Seamless aluminum gutters</a></h3>
          <p>New gutter systems, repairs and cleaning. With more than 41 inches of rain a year landing on a Warrenton roof, where the downspouts send that water matters as much as the gutter itself.</p>
        </li>
        <li>
          <h3><a href="/services/general-contracting/">General contracting</a></h3>
          <p>Larger residential and commercial jobs managed from planning to completion, with A&amp;S doing the trades itself. One written scope, one crew, one person to call.</p>
        </li>
    </ul>
    <p class="area-more">The full list, from soffit to drywall, is on the <a href="/services/">A&amp;S services page</a>.</p>
  </div>
</section>

<!-- Local question -->
<section class="section-light">
  <div class="container area-narrow">
    <div class="prose">
      <h2 class="section-title">Who do I talk to at A&amp;S, and when is the Warrenton office open?</h2>
      <p>You talk to owner Blake Alger at (636) 359-7204 or blake@ascontractingservices.com. A&amp;S Contracting Services answers Warrenton calls Monday through Friday from 7am to 6pm and Saturday from 8am to 3pm, and estimate visits are scheduled within days of first contact.</p>
      <p>Because the company is owner-run, the person who walks your roof or measures your kitchen wall is connected to the crew that will do the work. A&amp;S does not hand jobs to subcontractors, so the scope written on the estimate is carried out by the same people from the first day to the final walkthrough.</p>
    </div>
  </div>
</section>

<!-- Estimate process -->
<section class="section-alt">
  <div class="container area-narrow">
    <div class="prose">
      <h2 class="section-title">How does an A&amp;S estimate work at a Warrenton address?</h2>
      <p>An A&amp;S estimate at a Warrenton address is an on-site visit followed by a written, itemized price, and both are free with no obligation. A Warrenton estimate usually needs the least planning of any town A&amp;S serves, because the crew starts its day here. The price depends on square footage, the materials you choose, the condition of what is there now and the scope.</p>
      <ol class="area-steps">
        <li><strong>Call or send the form.</strong> Reach Blake Alger at <a href="tel:<?php echo $phoneTel; ?>"><?php echo $phone; ?></a> or use the <a href="/contact/">estimate request form</a>. Visits are scheduled within days of first contact.</li>
        <li><strong>On-site visit.</strong> A&amp;S measures, looks at the existing structure and talks through materials with you at the property.</li>
        <li><strong>Written estimate.</strong> You receive an itemized scope and price. The quoted price is the final price, with the start window and timeline in writing.</li>
        <li><strong>The work.</strong> The A&amp;S crew does the job itself, start to finish, and cleans the site every day.</li>
        <li><strong>Final walkthrough.</strong> You walk the finished work with A&amp;S before the job is closed.</li>
      </ol>
    </div>
  </div>
</section>

</article>

<!-- Final CTA -->
<section class="cta-band">
  <div class="container">
    <h2>Ready for a written estimate in Warrenton?</h2>
    <p>Tell A&amp;S Contracting Services what the building needs and where it is. Hours are <?php echo htmlspecialchars($businessHours); ?>.</p>
    <div class="btn-group">
      <a href="/contact/" class="btn-primary">Request an estimate</a>
      <a href="tel:<?php echo $phoneTel; ?>" class="btn-secondary">
        <?php echo icon('phone', 20); ?>
        Call <?php echo $phone; ?>
      </a>
    </div>
    <p class="area-near">Nearby: <a href="/areas/wright-city/">Wright City</a>, <a href="/areas/jonesburg/">Jonesburg</a>, <a href="/areas/troy/">Troy</a>. See <a href="/service-areas/">every town A&amp;S serves</a>.</p>
  </div>
</section>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
