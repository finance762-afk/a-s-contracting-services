<?php
/**
 * Wentzville, MO service area page (v8 rewrite, 2026-10-09)
 *
 * Local facts source: https://en.wikipedia.org/wiki/Wentzville,_Missouri (fetched 2026-10-09; census figures as cited there).
 * Company facts: includes/config.php and llms.txt only. No drive times, review counts or past-job claims.
 */

require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';

$pageType = 'city';
$citySlug = 'wentzville';
$pageTitle = 'Wentzville, MO Roofing & Exterior Contractor';
$pageDescription = 'Roof replacement, siding, windows and gutters in Wentzville, MO 63385 from A&S Contracting Services of Warrenton. One crew, written estimate. (636) 359-7204.';
$canonicalUrl = $siteUrl . '/areas/wentzville/';
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
        { "@type": "ListItem", "position": 3, "name": "Wentzville, MO", "item": "{$canonicalUrl}" }
      ]
    },
    {
      "@type": "GeneralContractor",
      "name": "{$siteName}",
      "@id": "{$siteUrl}/#organization",
      "areaServed": {
        "@type": "City",
        "name": "Wentzville",
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
          <span>Wentzville</span>
        </nav>

        <div class="eyebrow">Western St. Charles County</div>
        <h1>Roofing &amp; Exterior Contractor in <span class="text-accent">Wentzville, MO</span></h1>
        <p class="hero-answer">A&amp;S Contracting Services is a licensed and insured general contractor from Warrenton that serves Wentzville in western St. Charles County. The A&amp;S crew replaces roofs, siding, windows and gutters on Wentzville homes and writes the estimate after an on-site visit.</p>

        <ul class="hero-chips">
          <li class="hero-chip"><?php echo icon('map-pin', 16); ?> Wentzville, 63385</li>
          <li class="hero-chip"><?php echo icon('home', 16); ?> 15,316 housing units (2020)</li>
          <li class="hero-chip"><?php echo icon('users', 16); ?> One A&amp;S crew per job</li>
        </ul>

        <div class="btn-group">
          <a href="/contact/" class="btn-primary" data-open-estimate>Request an estimate</a>
          <a href="tel:<?php echo $phoneTel; ?>" class="btn-secondary">
            <?php echo icon('phone', 20); ?>
            <?php echo $phone; ?>
          </a>
        </div>
      </div>
      <?php $heroFormTitle = 'Estimate for a Wentzville address'; $heroFormId = 'hero'; include $_SERVER['DOCUMENT_ROOT'] . '/includes/hero-form.php'; ?>
    </div>
  </div>
</section>

<!-- The place -->
<section class="section-light">
  <div class="container">
    <div class="split-grid">
      <div class="prose">
        <h2 class="section-title">Does A&amp;S Contracting Services serve Wentzville?</h2>
        <p>A&amp;S Contracting Services serves Wentzville from its base in Warrenton, west along Interstate 70. Wentzville is the largest community in the A&amp;S service area, with 44,372 residents and 15,316 housing units at the 2020 census, and it lies well inside the 50-mile radius the crew covers.</p>
          <p>Wentzville was laid out in 1855 and named for Erasmus Livingston Wentz, an engineer on the North Missouri Railroad, but most of the city is far younger than that. Its population grew 52.6 percent between 2010 and 2020, and it was Missouri&rsquo;s fastest-growing city by percentage from 2000 to 2020.</p>
          <p>For a contractor that history has a plain consequence. A house built in the first wave of that growth is now roughly 15 to 25 years old, which is when the original roof, the builder-installed windows and the factory finish on the siding start to show their age at the same time. A&amp;S can price those items together, so you can decide what to do now and what can wait.</p>
      </div>
      <aside aria-label="Wentzville at a glance">
        <table class="area-glance">
          <caption>Wentzville, Missouri at a glance</caption>
          <tbody>
            <tr><th scope="row">County</th><td>St. Charles County</td></tr>
            <tr><th scope="row">ZIP code</th><td>63385</td></tr>
            <tr><th scope="row">Main roads</th><td>Interstate 70</td></tr>
            <tr><th scope="row">Elevation</th><td>about 620 ft</td></tr>
            <tr><th scope="row">Population (2020)</th><td>44,372</td></tr>
            <tr><th scope="row">Housing units</th><td>15,316 (2020 census)</td></tr>
          </tbody>
        </table>
        <p class="area-source">Figures: U.S. Census Bureau and USGS data as published in the Wentzville entry on Wikipedia.</p>
      </aside>
    </div>
  </div>
</section>

<!-- The work -->
<section class="section-dark">
  <div class="container">
    <h2 class="section-title">Which exterior jobs does A&amp;S do in Wentzville?</h2>
    <p class="area-answer">A&amp;S Contracting Services does roof replacement, window and door replacement, siding, gutters, soffit and fascia in Wentzville, along with interior remodeling. On a subdivision house these jobs tend to arrive together, so A&amp;S sequences them: roof first, then windows, then siding and gutters.</p>
    <ul class="area-leads">
        <li>
          <h3><a href="/services/roofing/">Roof replacement</a></h3>
          <p>Tear-off and replacement in architectural asphalt or impact-resistant shingles. Most single-family roofs take one to three days, weather permitting, which keeps the disruption on a close-set street short.</p>
        </li>
        <li>
          <h3><a href="/services/windows-doors/">Replacement windows and doors</a></h3>
          <p>Energy-efficient replacement windows, patio doors and entry doors, set and weather sealed by the same crew that will do the siding around them.</p>
        </li>
        <li>
          <h3><a href="/services/siding/">Siding replacement</a></h3>
          <p>Vinyl, fiber cement or wood. If only one elevation is failing, A&amp;S will say so in the estimate instead of quoting the whole house.</p>
        </li>
    </ul>
    <p class="area-more">The full list, from soffit to drywall, is on the <a href="/services/">A&amp;S services page</a>.</p>
  </div>
</section>

<!-- Local question -->
<section class="section-light">
  <div class="container area-narrow">
    <div class="prose">
      <h2 class="section-title">Why do so many Wentzville roofs need work at the same time?</h2>
      <p>Many Wentzville roofs need work at the same time because whole streets were built in the same few years. When a neighbourhood&rsquo;s roofs are the same age and the same material, they wear out together, and one hail storm marks all of them on the same afternoon.</p>
      <p>That is also when out-of-area crews go door to door. A&amp;S Contracting Services is a fixed business in Warrenton with a published phone number and hours, and it documents storm damage with photos and an itemized estimate before meeting your adjuster. If your HOA has rules on shingle colour or siding material, bring them to the estimate so the written scope matches.</p>
    </div>
  </div>
</section>

<!-- Estimate process -->
<section class="section-alt">
  <div class="container area-narrow">
    <div class="prose">
      <h2 class="section-title">How does an A&amp;S estimate work at a Wentzville address?</h2>
      <p>An A&amp;S estimate at a Wentzville address is an on-site visit followed by a written, itemized price, and both are free with no obligation. For a Wentzville address in a subdivision, have any HOA exterior guidelines to hand at the visit. The price depends on square footage, the materials you choose, the condition of what is there now and the scope.</p>
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
    <h2>Ready for a written estimate in Wentzville?</h2>
    <p>Tell A&amp;S Contracting Services what the building needs and where it is. Hours are <?php echo htmlspecialchars($businessHours); ?>.</p>
    <div class="btn-group">
      <a href="/contact/" class="btn-primary">Request an estimate</a>
      <a href="tel:<?php echo $phoneTel; ?>" class="btn-secondary">
        <?php echo icon('phone', 20); ?>
        Call <?php echo $phone; ?>
      </a>
    </div>
    <p class="area-near">Nearby: <a href="/areas/foristell/">Foristell</a>, <a href="/areas/wright-city/">Wright City</a>, <a href="/areas/troy/">Troy</a>. See <a href="/service-areas/">every town A&amp;S serves</a>.</p>
  </div>
</section>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
