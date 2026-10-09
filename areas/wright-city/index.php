<?php
/**
 * Wright City, MO service area page (v8 rewrite, 2026-10-09)
 *
 * Local facts source: https://en.wikipedia.org/wiki/Wright_City,_Missouri (fetched 2026-10-09; census figures as cited there).
 * Company facts: includes/config.php and llms.txt only. No drive times, review counts or past-job claims.
 */

require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';

$pageType = 'city';
$citySlug = 'wright-city';
$pageTitle = 'Wright City, MO Roofing & Siding Contractor';
$pageDescription = 'Roofing, siding, gutters and remodeling in Wright City, MO 63390 from A&S Contracting Services, a Warrenton general contractor on I-70. Call (636) 359-7204.';
$canonicalUrl = $siteUrl . '/areas/wright-city/';
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
        { "@type": "ListItem", "position": 3, "name": "Wright City, MO", "item": "{$canonicalUrl}" }
      ]
    },
    {
      "@type": "GeneralContractor",
      "name": "{$siteName}",
      "@id": "{$siteUrl}/#organization",
      "areaServed": {
        "@type": "City",
        "name": "Wright City",
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
          <span>Wright City</span>
        </nav>

        <div class="eyebrow">Warren County &middot; I-70 mile marker 200</div>
        <h1>Roofing, Siding &amp; Remodeling Contractor in <span class="text-accent">Wright City, MO</span></h1>
        <p class="hero-answer">A&amp;S Contracting Services is a licensed and insured general contractor from Warrenton that works in Wright City, the next Warren County town east on Interstate 70. The A&amp;S crew replaces roofs, re-sides houses and remodels interiors here without subcontractors.</p>

        <ul class="hero-chips">
          <li class="hero-chip"><?php echo icon('map-pin', 16); ?> Wright City, 63390</li>
          <li class="hero-chip"><?php echo icon('route', 16); ?> I-70 at mile marker 200</li>
          <li class="hero-chip"><?php echo icon('home', 16); ?> Homes and commercial buildings</li>
        </ul>

        <div class="btn-group">
          <a href="/contact/" class="btn-primary" data-open-estimate>Request an estimate</a>
          <a href="tel:<?php echo $phoneTel; ?>" class="btn-secondary">
            <?php echo icon('phone', 20); ?>
            <?php echo $phone; ?>
          </a>
        </div>
      </div>
      <?php $heroFormTitle = 'Estimate for a Wright City address'; $heroFormId = 'hero'; include $_SERVER['DOCUMENT_ROOT'] . '/includes/hero-form.php'; ?>
    </div>
  </div>
</section>

<!-- The place -->
<section class="section-light">
  <div class="container">
    <div class="split-grid">
      <div class="prose">
        <h2 class="section-title">Does A&amp;S Contracting Services serve Wright City?</h2>
        <p>A&amp;S Contracting Services serves Wright City as part of its home county: both Wright City and the A&amp;S base in Warrenton are in Warren County, on the same stretch of Interstate 70. Wright City sits at mile marker 200, so the crew and its materials arrive by one road.</p>
          <p>Wright City was laid out in 1857, got its post office a year later and incorporated in 1869. The 2020 census counted 4,881 residents and 1,901 housing units, of which only about six percent were vacant. Nearly every building in town is lived in or worked in, so most jobs here happen around people&rsquo;s daily routines, and the A&amp;S habit of cleaning the site every day is a practical matter, not a courtesy.</p>
          <p>The city also describes itself as home to light and heavy industrial businesses. A&amp;S Contracting Services takes commercial work as well as residential, so a shop roof, a metal-sided building or an office build-out in Wright City goes through the same written-estimate process as a house.</p>
      </div>
      <aside aria-label="Wright City at a glance">
        <table class="area-glance">
          <caption>Wright City, Missouri at a glance</caption>
          <tbody>
            <tr><th scope="row">County</th><td>Warren County</td></tr>
            <tr><th scope="row">ZIP code</th><td>63390</td></tr>
            <tr><th scope="row">Main roads</th><td>Interstate 70 (mile marker 200)</td></tr>
            <tr><th scope="row">Elevation</th><td>about 732 ft</td></tr>
            <tr><th scope="row">Population (2020)</th><td>4,881</td></tr>
            <tr><th scope="row">Housing units</th><td>1,901 (2020 census)</td></tr>
          </tbody>
        </table>
        <p class="area-source">Figures: U.S. Census Bureau and USGS data as published in the Wright City entry on Wikipedia.</p>
      </aside>
    </div>
  </div>
</section>

<!-- The work -->
<section class="section-dark">
  <div class="container">
    <h2 class="section-title">What does A&amp;S build and repair in Wright City?</h2>
    <p class="area-answer">A&amp;S Contracting Services builds and repairs roofs, siding, gutters, soffit, fascia, windows, doors and interiors in Wright City. Three of those trades are outlined below, and each links to a page that explains how A&amp;S handles it.</p>
    <ul class="area-leads">
        <li>
          <h3><a href="/services/siding/">Siding installation and repair</a></h3>
          <p>Vinyl, fiber cement or wood siding, replaced wall by wall or across the whole house. A&amp;S flashes and seals around windows and doors as part of the siding job, not as an extra visit.</p>
        </li>
        <li>
          <h3><a href="/services/roofing/">Roofing, including hail and storm damage</a></h3>
          <p>Repairs, tear-offs and replacements. After a storm, A&amp;S photographs the damage, writes an itemized estimate and meets your insurance adjuster on the roof. See the <a href="/services/roofing/#hail-claims">hail claim steps</a>.</p>
        </li>
        <li>
          <h3><a href="/services/dry-wall/">Drywall for homes and commercial space</a></h3>
          <p>Hanging, finishing and repair for additions, basements and tenant spaces, taken to a paint-ready surface.</p>
        </li>
    </ul>
    <p class="area-more">The full list, from soffit to drywall, is on the <a href="/services/">A&amp;S services page</a>.</p>
  </div>
</section>

<!-- Local question -->
<section class="section-light">
  <div class="container area-narrow">
    <div class="prose">
      <h2 class="section-title">Can A&amp;S handle a commercial building in Wright City?</h2>
      <p>A&amp;S Contracting Services handles commercial buildings in Wright City as well as houses. Roofing, drywall and general contracting are all offered for commercial clients, and the estimate, the written start window and the final walkthrough work the same way as on a residential job.</p>
      <p>For an occupied business the useful questions are when the crew will be on site and what will be blocked. A&amp;S puts the start window and the timeline in writing during the estimate, so you can plan deliveries, parking and staff around the work before any material arrives.</p>
    </div>
  </div>
</section>

<!-- Estimate process -->
<section class="section-alt">
  <div class="container area-narrow">
    <div class="prose">
      <h2 class="section-title">How does an A&amp;S estimate work at a Wright City address?</h2>
      <p>An A&amp;S estimate at a Wright City address is an on-site visit followed by a written, itemized price, and both are free with no obligation. For a Wright City address the visit is a short run east from Warrenton on I-70, so it is easy to fit around your work hours, including Saturdays until 3pm. The price depends on square footage, the materials you choose, the condition of what is there now and the scope.</p>
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
    <h2>Ready for a written estimate in Wright City?</h2>
    <p>Tell A&amp;S Contracting Services what the building needs and where it is. Hours are <?php echo htmlspecialchars($businessHours); ?>.</p>
    <div class="btn-group">
      <a href="/contact/" class="btn-primary">Request an estimate</a>
      <a href="tel:<?php echo $phoneTel; ?>" class="btn-secondary">
        <?php echo icon('phone', 20); ?>
        Call <?php echo $phone; ?>
      </a>
    </div>
    <p class="area-near">Nearby: <a href="/areas/warrenton/">Warrenton</a>, <a href="/areas/foristell/">Foristell</a>, <a href="/areas/wentzville/">Wentzville</a>. See <a href="/service-areas/">every town A&amp;S serves</a>.</p>
  </div>
</section>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
