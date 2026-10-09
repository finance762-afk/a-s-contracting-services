<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
// ─── Page-level setup ───────────────────────────────────────────────────────
$serviceSlug     = 'roofing';
$pageType        = 'service';
$currentPage     = 'services';
$svcName         = 'Roofing';
$pageTitle       = 'Roofing Company in Warrenton, MO | Repair & Hail Claims';
$pageDescription = 'Roof repair, tear-off and replacement in Warrenton, MO, with hail claim photos and adjuster meetings. Licensed & insured. Written estimate: (636) 359-7204.';
$canonicalUrl    = $siteUrl . '/services/roofing/';

// ─── Hero + recent-work photos (image manifest) ─────────────────────────────
$heroImage    = '1779985211708-fd9gws-39-Dec_24__2025_22-36-50-nmCB';
$heroImageAlt = 'Finished asphalt shingle roof with a vent pipe on a wooded lot';
$heroPreload  = [
    'srcset' => "/assets/images/{$heroImage}-480.avif 480w, /assets/images/{$heroImage}-960.avif 960w",
    'sizes'  => '100vw',
];
$workPhotos = [
    ['1779985083337-zk34j0-26-Feb_09__2026_17-30-49-9vp8', 'Crew member at a chimney on bare roof decking during a tear-off'],
    ['1779985212271-1prbgz-42-Dec_24__2025_22-37-49-p62h', 'New architectural shingles meeting at a roof valley'],
    ['1779985122105-liao15-14-Mar_19__2026_13-58-09-spf4', 'Crew member in a hi-visibility shirt tearing off old shingles at a roof edge'],
];

// ─── FAQ (service-specific) ─────────────────────────────────────────────────
$faqs = [
    [
        'question' => 'How much does a new roof cost in Warrenton, MO?',
        'answer'   => 'Roof cost in Warrenton depends on square footage, the material selected, the condition of the existing structure and the scope of the job. A&amp;S Contracting Services publishes no price list; every roof is priced from an on-site visit and a written, itemized estimate, and the quoted price is the final price. The <a href="/blog/roof-replacement-cost-guide-missouri/">roof replacement cost guide</a> explains each cost driver.',
    ],
    [
        'question' => 'Do you handle hail and storm damage insurance claims?',
        'answer'   => 'Yes. A&amp;S Contracting Services photographs storm and hail damage, writes a detailed itemized estimate, meets your insurance adjuster on site and helps you through the claim. The <a href="/blog/hail-damage-roof-insurance-claim-missouri/">hail damage insurance claim guide</a> walks through each step.',
    ],
    [
        'question' => 'How long does a roof replacement take?',
        'answer'   => 'Most single-family roof replacements take one to three days, weather permitting. A&amp;S Contracting Services gives the start window and the timeline in writing with the estimate, and the A&amp;S crew does both the tear-off and the installation.',
    ],
    [
        'question' => 'Should I repair or fully replace my roof?',
        'answer'   => 'It depends on how much of the roof is damaged. Isolated damage on an otherwise sound roof is usually a repair; damage or leaks across several slopes point toward replacement. A&amp;S Contracting Services does both, looks at the whole roof during the on-site visit and puts its recommendation in the written estimate. The <a href="/blog/roof-leak-repair-missouri/">roof leak repair guide</a> covers how a leak is traced.',
    ],
    [
        'question' => 'What roofing materials do you install?',
        'answer'   => 'A&amp;S Contracting Services installs architectural asphalt shingles, impact-resistant shingles and metal roofing on residential and commercial buildings. The written estimate can price more than one material so you can compare them.',
    ],
    [
        'question' => 'How does the written roofing estimate work?',
        'answer'   => 'A&amp;S Contracting Services schedules an on-site visit within days of first contact, at no charge and with no obligation. You then receive a detailed, itemized estimate with the start window and the timeline in writing. There are no hidden fees and no upselling.',
    ],
];

// ─── Other-services cards (page-local copy) ─────────────────────────────────
$otherCards = [
    'siding' => ['icon' => 'layers', 'desc' => 'Siding installation and repair in vinyl, fiber cement and wood.'],
    'gutters' => ['icon' => 'droplets', 'desc' => 'Seamless aluminum gutter systems: installation, repair, replacement and cleaning.'],
    'general-contracting' => ['icon' => 'hard-hat', 'desc' => 'Residential and commercial projects managed from planning to completion.'],
];

// ─── Schema (Service + FAQPage + BreadcrumbList) ─────────────────────────────
$serviceSchema = [
    '@context'    => 'https://schema.org',
    '@type'       => 'Service',
    '@id'         => $canonicalUrl . '#service-' . $serviceSlug,
    'name'        => 'Roofing',
    'serviceType' => 'Roofing contractor',
    'description' => 'Residential and commercial roof installation, repair, tear-off and full replacement in Warrenton, MO and Warren County, including storm and hail damage repair and insurance claim documentation.',
    'provider'    => ['@id' => $siteUrl . '/#organization'],
    'areaServed'  => [
        '@type' => 'GeoCircle',
        'geoMidpoint' => ['@type' => 'GeoCoordinates', 'latitude' => '38.8098', 'longitude' => '-91.1401'],
        'geoRadius'   => $serviceRadius . ' miles',
    ],
    'url'         => $canonicalUrl,
];
$breadcrumbSchema = [
    '@context'        => 'https://schema.org',
    '@type'           => 'BreadcrumbList',
    'itemListElement' => [
        ['@type' => 'ListItem', 'position' => 1, 'name' => 'Home',     'item' => $siteUrl . '/'],
        ['@type' => 'ListItem', 'position' => 2, 'name' => 'Services', 'item' => $siteUrl . '/services/'],
        ['@type' => 'ListItem', 'position' => 3, 'name' => $svcName,   'item' => $canonicalUrl],
    ],
];
$schema  = '<script type="application/ld+json">' . json_encode($serviceSchema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) . '</script>' . "\n";
$schema .= generateFAQSchema($faqs) . "\n";
$schema .= '<script type="application/ld+json">' . json_encode($breadcrumbSchema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) . '</script>';

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
?>

<style>
/* ── Service page composition (token-only) ── */
.sp-signs { display: grid; grid-template-columns: repeat(4, 1fr); gap: 1rem; margin-top: 1.75rem; }
.sp-sign { background: var(--color-surface); border: 1px solid var(--color-line); border-radius: var(--radius-lg); padding: 1.25rem; display: grid; gap: .5rem; box-shadow: var(--shadow-sm); }
.sp-sign__icon { width: 42px; height: 42px; border-radius: 10px; display: grid; place-items: center; color: var(--color-primary); background: color-mix(in srgb, var(--color-primary) 12%, white); }
.sp-sign h3 { font-size: 1.02rem; }
.sp-sign p { margin: 0; font-size: .9rem; color: var(--color-ink-2); }
.sp-problem { display: grid; grid-template-columns: minmax(0, 1fr) minmax(0, 1fr); gap: clamp(2rem, 5vw, 4rem); align-items: center; }
@media (max-width: 900px) { .sp-problem { grid-template-columns: 1fr; } .sp-signs { grid-template-columns: 1fr 1fr; } }
@media (max-width: 480px) { .sp-signs { grid-template-columns: 1fr; } }

/* Expert positioning — big stat + evidence */
.sp-position { display: grid; grid-template-columns: .8fr 1.2fr; gap: clamp(2rem, 5vw, 4rem); align-items: center; }
.sp-position__stat { font-family: var(--font-accent); font-size: clamp(3.4rem, 9vw, 5.5rem); line-height: .9; color: var(--color-primary); letter-spacing: .01em; }
.sp-position__stat span { display: block; font-family: var(--font-heading); font-size: 1.05rem; font-weight: 700; letter-spacing: 0; color: var(--color-ink-2); margin-top: .6rem; max-width: 22ch; }
.sp-evidence { display: grid; gap: 1rem; margin: 1.25rem 0 0; padding: 0; list-style: none; }
.sp-evidence li { display: grid; grid-template-columns: 28px 1fr; gap: .8rem; align-items: start; }
.sp-evidence li svg { color: var(--color-accent-dark); margin-top: 3px; }
.sp-evidence b { display: block; }
@media (max-width: 800px) { .sp-position { grid-template-columns: 1fr; } }

/* What's included + timeline */
.sp-included { display: grid; grid-template-columns: 1fr 1fr; gap: clamp(2rem, 5vw, 3.5rem); align-items: start; }
.sp-checklist { display: grid; gap: .65rem; margin: 1rem 0 0; padding: 0; list-style: none; }
.sp-checklist li { display: grid; grid-template-columns: 24px 1fr; gap: .6rem; align-items: start; font-size: .96rem; }
.sp-checklist li svg { color: var(--color-primary); margin-top: 3px; }
@media (max-width: 800px) { .sp-included { grid-template-columns: 1fr; } }

/* Comparison table */
.sp-table-wrap { overflow-x: auto; margin-top: 1.5rem; border: 1px solid var(--color-line); border-radius: var(--radius-lg); background: var(--color-surface); box-shadow: var(--shadow-sm); }
.sp-table { width: 100%; min-width: 560px; border-collapse: collapse; font-size: .94rem; }
.sp-table caption { caption-side: top; text-align: left; padding: 1rem 1.25rem .75rem; font-family: var(--font-heading); font-weight: 700; color: var(--color-ink); }
.sp-table th, .sp-table td { padding: .85rem 1.25rem; text-align: left; vertical-align: top; border-top: 1px solid var(--color-line); color: var(--color-ink-2); }
.sp-table thead th { font-family: var(--font-heading); color: var(--color-ink); background: color-mix(in srgb, var(--color-primary) 8%, var(--color-surface)); }
.sp-table tbody th { color: var(--color-ink); font-weight: 700; width: 22%; }
.sp-table td a, .sp-checklist a, .sp-evidence a { text-decoration: underline; text-decoration-thickness: 1px; text-underline-offset: 3px; }
.sp-table-note { margin-top: 1rem; }
.sp-position__stat--word { font-size: clamp(2.6rem, 7vw, 4.2rem); }

/* Other services */
.sp-other { display: grid; grid-template-columns: repeat(3, 1fr); gap: 1rem; margin-top: 1.5rem; }
@media (max-width: 800px) { .sp-other { grid-template-columns: 1fr; } }
/* Photo hero: let the <picture> fill the .hero-bg layer */
.hero--photo .hero-bg picture { display: block; width: 100%; height: 100%; }
.hero--photo .hero-bg img { width: 100%; height: 100%; object-fit: cover; object-position: 50% 45%; }
.hero--photo .breadcrumb, .hero--photo .breadcrumb a { color: rgba(255,255,255,.82); }
/* v8 before/after pairs */
.sp-ba-grid { display: grid; grid-template-columns: repeat(2, 1fr); gap: var(--space-6); margin-top: var(--space-6); }
@media (max-width: 800px) { .sp-ba-grid { grid-template-columns: 1fr; } }
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
        <li><a href="/services/">Services</a></li>
        <li class="breadcrumb-sep" aria-hidden="true">/</li>
        <li aria-current="page"><?php echo $svcName; ?></li>
      </ol>
    </nav>
    <div class="hero-grid hero-grid--form">
      <div class="hero-copy">
        <span class="eyebrow">Roofing &middot; Warrenton &amp; Warren County</span>
        <h1>Roofing company in <span class="text-accent">Warrenton, MO</span> — repair, replacement &amp; hail claims</h1>
        <p class="hero-answer">A&amp;S Contracting Services is a licensed, fully insured Warrenton general contractor that repairs and replaces roofs with its own crew. The on-site visit and the written estimate are free.</p>
        <div class="hero-actions">
          <a href="#estimate" class="btn btn-primary btn-lg hero-form-open">Get a written roofing estimate</a>
          <a class="link-call" href="tel:<?php echo $phoneTel; ?>"><?php echo icon('phone', 18); ?> or call <?php echo $phone; ?></a>
        </div>
        <ul class="hero-chips">
          <li><?php echo icon('clipboard-list', 16); ?> Written, itemized estimate</li>
          <li><?php echo icon('cloud-snow', 16); ?> Hail &amp; storm claim documentation</li>
          <li><?php echo icon('home', 16); ?> Warrenton-based, 50-mile radius</li>
        </ul>
      </div>

      <aside class="hero-form-card" id="hero-form">
        <h2>Request a roofing estimate</h2>
        <p class="hero-form-tagline">On-site visit, itemized in writing. No obligation.</p>
        <form action="<?php echo htmlspecialchars($formAction); ?>" method="POST" class="hero-form">
          <input type="hidden" name="_next" value="<?php echo htmlspecialchars($siteUrl); ?>/thank-you">
          <input type="text" name="_honey" style="display:none !important" tabindex="-1" autocomplete="off" aria-hidden="true">
          <?php echo p1_attribution_fields('hero'); ?>
          <input type="hidden" name="consent_version" value="v2.1">
          <input type="hidden" name="consent_page" value="<?php echo htmlspecialchars($_SERVER['REQUEST_URI']); ?>">
          <div class="form-row"><label class="sr-only" for="hero-name">Name</label><input id="hero-name" type="text" name="name" placeholder="Name" autocomplete="name" required></div>
          <div class="form-row"><label class="sr-only" for="hero-phone">Phone</label><input id="hero-phone" type="tel" name="phone" placeholder="Phone" autocomplete="tel" required></div>
          <div class="form-row"><label class="sr-only" for="hero-email">Email</label><input id="hero-email" type="email" name="email" placeholder="Email" autocomplete="email" required></div>
          <div class="form-row"><label class="sr-only" for="hero-service">Service</label>
            <select id="hero-service" name="service">
              <?php foreach ($services as $heroSvc): ?>
              <option value="<?php echo htmlspecialchars($heroSvc['name']); ?>"<?php echo $heroSvc['slug'] === $serviceSlug ? ' selected' : ''; ?>><?php echo htmlspecialchars($heroSvc['name']); ?></option>
              <?php endforeach; ?>
            </select>
          </div>
          <label class="consent"><input type="checkbox" name="terms_accepted" value="yes" required><span>I agree to the <a href="/terms/" target="_blank" rel="noopener">Terms</a> and <a href="/privacy-policy/" target="_blank" rel="noopener">Privacy Policy</a> and consent to be contacted. *</span></label>
          <!-- spam shield: signed render timestamp + JS interaction signal -->
          <?php $__ft_ts = (string) time(); ?>
          <input type="hidden" name="_ft" value="<?php echo $__ft_ts . '.' . hash_hmac('sha256', $__ft_ts, $leadsFormSecret); ?>">
          <input type="hidden" name="_js" value="" class="js-shield-field">
          <?php if (empty($GLOBALS['__js_shield'])) { $GLOBALS['__js_shield'] = 1; ?>
          <script>(function(){var d=document,f=function(){var i,e=d.querySelectorAll('.js-shield-field');for(i=0;i<e.length;i++)e[i].value='1';d.removeEventListener('pointerdown',f);d.removeEventListener('keydown',f);};d.addEventListener('pointerdown',f);d.addEventListener('keydown',f);})();</script>
          <?php } ?>
          <button type="submit" class="btn btn-primary btn-block">Request my estimate</button>
        </form>
      </aside>
    </div>
  </div>
</section>

<article>
<!-- ═══════════════════ PROBLEM STATEMENT ═══════════════════ -->
<section class="section section--light">
  <div class="container">
    <div class="sp-problem">
      <div class="reveal-left">
        <span class="eyebrow-label">Know The Signs</span>
        <h2>How do you know a Warrenton roof needs repair?</h2>
        <p class="answer-block">A roof needs repair when shingle granules collect in the gutters, tabs lift or go missing after wind, or a brown stain appears on a ceiling. Warrenton sits at 827 feet on the Interstate 70 corridor, where spring hail and winter freeze-thaw both work on shingles. A&amp;S Contracting Services checks each slope and reports its findings in writing.</p>
        <p class="pull-quote">Dented gutters and downspouts after a hail storm are a reason to have the shingles above them looked at.</p>
      </div>
      <div class="sp-signs reveal-right">
        <div class="sp-sign">
          <div class="sp-sign__icon"><?php echo icon('droplets', 22); ?></div>
          <h3>Ceiling or attic stains</h3>
          <p>A brown ring on drywall means water has already passed the shingles and the layer beneath them.</p>
        </div>
        <div class="sp-sign">
          <div class="sp-sign__icon"><?php echo icon('cloud-snow', 22); ?></div>
          <h3>Hail bruising</h3>
          <p>Dark, soft spots where hail knocked granules loose leave the asphalt open to sun and rain.</p>
        </div>
        <div class="sp-sign">
          <div class="sp-sign__icon"><?php echo icon('wind', 22); ?></div>
          <h3>Lifted or missing tabs</h3>
          <p>Shingles creased or torn by wind stop shedding water onto the course below.</p>
        </div>
        <div class="sp-sign">
          <div class="sp-sign__icon"><?php echo icon('layers', 22); ?></div>
          <h3>Granules in the gutters</h3>
          <p>Grit washing into the downspouts shows the shingle surface is wearing away.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ═══════════════════ EXPERT POSITIONING ═══════════════════ -->
<section class="section">
  <div class="container">
    <div class="sp-position">
      <div class="reveal-up">
        <div class="sp-position__stat">1–3<span>days for most single-family roof replacements, weather permitting</span></div>
      </div>
      <div class="reveal-right">
        <span class="eyebrow-label">Who Is On The Roof</span>
        <h2>Who does the work on an A&amp;S roof?</h2>
        <p class="answer-block">The work on every A&amp;S roof is done by the A&amp;S Contracting Services crew, with no subcontractors. Blake Alger founded the company in Warrenton in 2023 around roofing and exterior work, so the people who tear off the old shingles are the people who install the new ones and walk the finished roof with the owner.</p>
        <ul class="sp-evidence">
          <li><?php echo icon('users', 22); ?><span><b>One team, ridge to gutter line.</b> The roofing crew also installs <a href="/services/gutters/">seamless aluminum gutter systems</a>, soffit and fascia, so the roof edge is not split between companies.</span></li>
          <li><?php echo icon('clipboard-list', 22); ?><span><b>Dates on paper.</b> The start window and the timeline are written into the estimate before a shingle comes off.</span></li>
          <li><?php echo icon('check-circle', 22); ?><span><b>Cleaned up every day.</b> The site is cleaned daily, and each project ends with a walkthrough of the finished roof.</span></li>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- ═══════════════════ SERVICE BREAKDOWN ═══════════════════ -->
<section class="section section--light">
  <div class="container">
    <span class="eyebrow-label">The Work</span>
    <h2>What does an A&amp;S roof replacement include?</h2>
    <p class="answer-block">An A&amp;S roof replacement includes tearing off the old roofing, installing the new roof in the material chosen, daily cleanup and a final walkthrough. A&amp;S Contracting Services prices it from an on-site visit, and the written figure depends on four things: square footage, the material selected, the condition of the existing structure and the scope.</p>
    <div class="sp-included">
      <div class="reveal-up">
        <h3>What the written scope can cover</h3>
        <ul class="sp-checklist">
          <li><?php echo icon('check', 20); ?> <span>Tear-off of the existing roofing and full replacement</span></li>
          <li><?php echo icon('check', 20); ?> <span>Roof repair where a full replacement is not needed</span></li>
          <li><?php echo icon('check', 20); ?> <span>Storm and hail damage repair</span></li>
          <li><?php echo icon('check', 20); ?> <span>Architectural asphalt shingles, <a href="/blog/class-4-impact-resistant-shingles-in-missouri-worth-it/">Class 4 impact-resistant shingles</a> or metal roofing</span></li>
          <li><?php echo icon('check', 20); ?> <span>Photo documentation for an insurance claim</span></li>
          <li><?php echo icon('check', 20); ?> <span>Residential and commercial roofs</span></li>
          <li><?php echo icon('check', 20); ?> <span>Job site cleaned at the end of each day</span></li>
        </ul>
      </div>
      <div class="reveal-right">
        <h3>How a roof project runs</h3>
        <ol class="process-steps">
          <li><b>On-site visit</b><span>A&amp;S looks at the roof in person. Visits are scheduled within days of first contact.</span></li>
          <li><b>Written estimate</b><span>An itemized price with no hidden fees. The quoted price is the final price.</span></li>
          <li><b>Start window in writing</b><span>You get the start window and the timeline on paper before work is booked.</span></li>
          <li><b>Tear-off, install, walkthrough</b><span>The A&amp;S crew removes the old roof, installs the new one and walks it with you.</span></li>
        </ol>
      </div>
    </div>
  </div>
</section>

<!-- ═══════════════════ HAIL DAMAGE & INSURANCE CLAIMS ═══════════════════ -->
<section class="section" id="hail-claims" aria-label="Hail damage and insurance claims">
  <div class="container">
    <span class="eyebrow-label">Storm Season</span>
    <h2>How does A&amp;S handle a hail damage insurance claim?</h2>
    <p class="answer-block">A&amp;S Contracting Services handles a hail damage claim in four steps, from photographs of the damage to the adjuster meeting. It documents the roof with photos, writes a detailed itemized estimate, meets the insurance adjuster on site and helps the homeowner through the claim. The Warrenton crew then repairs or replaces the roof.</p>
    <div class="sp-included">
      <div class="reveal-up">
        <h3>The claim, step by step</h3>
        <ol class="process-steps">
          <li><b>Roof inspection</b><span>A&amp;S examines the roof and the metal around it for storm and hail damage.</span></li>
          <li><b>Photo documentation</b><span>The damage is photographed so the claim file shows what was found.</span></li>
          <li><b>Itemized estimate</b><span>You receive a detailed, itemized estimate to hand to your insurer.</span></li>
          <li><b>Adjuster meeting</b><span>A&amp;S meets the insurance adjuster at the house, then schedules the repair or replacement.</span></li>
        </ol>
      </div>
      <div class="reveal-right">
        <h3>Before you call your insurer</h3>
        <ul class="sp-checklist">
          <li><?php echo icon('check', 20); ?> <span>Photograph dented gutters, downspouts and vents from the ground, and stay off a damaged roof</span></li>
          <li><?php echo icon('check', 20); ?> <span>Write down the date of the storm</span></li>
          <li><?php echo icon('check', 20); ?> <span>Keep your policy number and the adjuster’s contact details in one place</span></li>
          <li><?php echo icon('check', 20); ?> <span>Ask A&amp;S for the photo set and the itemized estimate before the adjuster’s visit</span></li>
        </ul>
        <p class="sp-table-note">The full sequence is in the A&amp;S guide to <a href="/blog/hail-damage-roof-insurance-claim-missouri/">hail damage roof inspections and insurance claims in Missouri</a>.</p>
      </div>
    </div>
  </div>
</section>

<!-- ═══════════════════ COMPARISON ═══════════════════ -->
<section class="section section--light">
  <div class="container">
    <span class="eyebrow-label">Materials</span>
    <h2>Which roofing material fits a Warren County home?</h2>
    <p class="answer-block">The roofing material that fits most Warren County homes is an architectural asphalt shingle, with impact-resistant shingles and metal as the two alternatives A&amp;S installs. A&amp;S Contracting Services can price each option in one written estimate so the difference shows line by line. The table gives the general distinction between the three.</p>
    <div class="sp-table-wrap reveal-up">
      <table class="sp-table">
        <caption>Roofing materials installed by A&amp;S Contracting Services</caption>
        <thead>
          <tr>
            <th scope="col">Attribute</th>
            <th scope="col">Architectural asphalt shingles</th>
            <th scope="col">Impact-resistant shingles</th>
            <th scope="col">Metal roofing</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">What it is</th>
            <td>A laminated asphalt shingle, thicker than a 3-tab shingle</td>
            <td>An asphalt shingle tested for impact under UL 2218; Class 4 is the highest rating</td>
            <td>Metal panels in place of shingles</td>
          </tr>
          <tr>
            <th scope="row">Why owners choose it</th>
            <td>A familiar look for a single-family re-roof</td>
            <td>Added resistance to spring hail</td>
            <td>A metal roof on a house, shop or commercial building</td>
          </tr>
          <tr>
            <th scope="row">Buildings</th>
            <td>Residential and commercial</td>
            <td>Residential and commercial</td>
            <td>Residential and commercial</td>
          </tr>
          <tr>
            <th scope="row">Read more</th>
            <td><a href="/blog/roof-replacement-cost-guide-missouri/">What drives roof replacement cost in Missouri</a></td>
            <td><a href="/blog/class-4-impact-resistant-shingles-in-missouri-worth-it/">Whether Class 4 shingles are worth it</a></td>
            <td><a href="/blog/metal-roof-vs-asphalt-shingles-in-missouri-cost-and-lifespan/">Metal roofing compared with asphalt shingles</a></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</section>

<!-- ═══════════════════ BEFORE / AFTER (real pairs from A&S job photos) ═══════════════════ -->
<section class="section" aria-label="Roof replacement before and after">
  <div class="container">
    <div class="section-title reveal-up">
      <span class="eyebrow-label">Before &amp; After</span>
      <h2>What does a roof look like before and after A&amp;S replaces it?</h2>
      <p class="answer-block">A roof replaced by A&amp;S Contracting Services goes from worn, stained shingles to a clean deck and then to new shingles and ridge caps. The two pairs below are A&amp;S jobs: a wooded-lot house photographed one day apart in February 2026, and an A-frame photographed in August and November 2025.</p>
    </div>
    <div class="sp-ba-grid">
      <?php
      require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/before-after.php';
      echo p1_before_after(
          '1779985081293-864e8m-2-Feb_09__2026_13-42-04-ptJL',
          '1779985084434-7wvwuf-46-Feb_10__2026_22-02-29-uWM1',
          'Weathered shingle roof with a tear-off fork on it before replacement',
          'The same property the next day with new dark architectural shingles and ridge caps',
          ['caption' => 'Wooded-lot roof replacement. Before: February 9, 2026. After: February 10, 2026.', 'id' => 'ba-roof-1']
      );
      echo p1_before_after(
          '1779985247084-5a8nou-2-Aug_26__2025_18-27-26-neFH',
          '1779985248885-m9g42k-12-Nov_19__2025_22-17-31-YgPM',
          'A-frame house with weathered, curling shingles on its steep roof before replacement',
          'The same A-frame with new shingles and scalloped trim along the roof edge',
          ['caption' => 'A-frame roof replacement. Before: August 26, 2025. After: November 19, 2025.', 'id' => 'ba-roof-2']
      );
      ?>
    </div>
  </div>
</section>

<!-- ═══════════════════ FAQ ═══════════════════ -->
<section class="section" aria-label="Roofing FAQ">
  <div class="container-narrow">
    <div class="section-title reveal-up">
      <span class="eyebrow-label">Good Questions</span>
      <h2>What do homeowners ask A&amp;S before a roofing project?</h2>
      <p>Homeowners ask A&amp;S about roofing cost, hail claims, timing, repair versus replacement, materials and how the estimate works. The six answers below describe how A&amp;S Contracting Services runs roofing jobs out of Warrenton; anything not covered here is answered during the on-site visit, before a written price is given.</p>
    </div>
    <div class="faq-grid">
      <?php foreach ($faqs as $fi => $faq): ?>
      <details class="faq"<?php echo $fi < 2 ? ' open' : ''; ?>>
        <summary><?php echo htmlspecialchars($faq['question']); ?></summary>
        <p><?php echo $faq['answer']; /* authored HTML (inline links) */ ?></p>
      </details>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ═══════════════════ RECENT WORK ═══════════════════ -->
<section class="section section--light sp-gallery" aria-label="Roofing job-site photos">
  <div class="container-wide">
    <div class="section-title reveal-up">
      <span class="eyebrow-label">Job-Site Photos</span>
      <h2>What does A&amp;S roofing work look like on site?</h2>
      <p class="answer-block">A&amp;S roofing work on site looks like the three photos below: bare decking around a chimney during a tear-off, new shingles meeting at a valley, and old shingles coming off at the roof edge. A&amp;S Contracting Services took these pictures on its own job sites, and the captions describe only what each one shows, without naming a street or a town.</p>
    </div>
    <div class="sp-gallery-grid" data-p1-dynamic>
      <?php foreach ($workPhotos as $wp): ?>
      <figure class="sp-gallery-item">
        <?php echo p1_picture($wp[0], $wp[1], ['sizes' => '(max-width: 700px) 100vw, 40vw', 'width' => 640, 'height' => 480, 'decoding' => 'async']); ?>
        <figcaption><?php echo htmlspecialchars($wp[1]); ?></figcaption>
      </figure>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ═══════════════════ OTHER SERVICES ═══════════════════ -->
<section class="section">
  <div class="container-wide">
    <div class="section-title reveal-up">
      <span class="eyebrow-label">What We Do</span>
      <h2>What else does A&amp;S handle at the roof edge?</h2>
      <p class="hero-answer">At the roof edge, A&amp;S Contracting Services also handles gutters, <a href="/services/soffit/">soffit and attic intake ventilation</a>, fascia and siding, the parts a new roof ties into. Roofing is one of ten trades on the <a href="/services/">full list of A&amp;S services</a>, so a re-roof and the exterior work around it can be written into one estimate.</p>
    </div>
    <div class="sp-other">
      <?php
      $tintCycle = [1, 2, 3];
      $oi = 0;
      foreach ($otherCards as $os => $oc):
        $osvc = null; foreach ($services as $s) { if ($s['slug'] === $os) { $osvc = $s; break; } }
        if (!$osvc) continue;
      ?>
      <article class="service-card-with-image card-tint-<?php echo $tintCycle[$oi % 3]; ?> reveal-up reveal-delay-<?php echo ($oi % 3) + 1; ?>">
        <div class="service-card__body">
          <div class="service-card__icon"><?php echo icon($oc['icon'], 22); ?></div>
          <h3><?php echo htmlspecialchars($osvc['name']); ?></h3>
          <p class="service-card__desc"><?php echo htmlspecialchars($oc['desc']); ?></p>
          <a href="/services/<?php echo $os; ?>/" class="service-card__cta"><?php echo htmlspecialchars($serviceAnchor[$os] ?? $osvc['name']); ?></a>
        </div>
      </article>
      <?php $oi++; endforeach; ?>
    </div>
  </div>
</section>
</article>

<!-- ═══════════════════ FINAL CTA / ESTIMATE ═══════════════════ -->
<section class="section section--light" id="estimate" aria-label="Request a roofing estimate">
  <div class="container">
    <div class="estimate">
      <div class="card reveal-up" style="padding: clamp(1.5rem, 4vw, 2.5rem); border:1px solid var(--color-line); border-radius: var(--radius-lg); background: var(--color-surface);">
        <span class="eyebrow-label">Written Estimate</span>
        <h2>Ready for a written price on your roof?</h2>
        <p class="lead" style="margin-bottom: 1.25rem;">Send the details and A&amp;S Contracting Services will schedule an on-site roof visit, within days of first contact.</p>

        <form action="<?php echo htmlspecialchars($formAction); ?>" method="POST" class="estimate-form">
          <input type="text" name="_honey" style="display:none !important" tabindex="-1" autocomplete="off" aria-hidden="true">
          <input type="hidden" name="_next" value="<?php echo htmlspecialchars($siteUrl); ?>/thank-you">
          <?php echo p1_attribution_fields('cta-band'); ?>
          <input type="hidden" name="consent_version" value="v2.1">
          <input type="hidden" name="consent_page" value="<?php echo htmlspecialchars($_SERVER['REQUEST_URI']); ?>">

          <div class="form-grid">
            <div class="form-field">
              <label for="est-name">Your Name</label>
              <input id="est-name" type="text" name="name" autocomplete="name" required>
            </div>
            <div class="form-field">
              <label for="est-phone">Phone</label>
              <input id="est-phone" type="tel" name="phone" autocomplete="tel" required>
            </div>
            <div class="form-field">
              <label for="est-email">Email</label>
              <input id="est-email" type="email" name="email" autocomplete="email" required>
            </div>
            <div class="form-field">
              <label for="est-service">Service Needed</label>
              <select id="est-service" name="service">
                <?php foreach ($services as $estSvc): ?>
                <option value="<?php echo htmlspecialchars($estSvc['name']); ?>"<?php echo $estSvc['slug'] === $serviceSlug ? ' selected' : ''; ?>><?php echo htmlspecialchars($estSvc['name']); ?></option>
                <?php endforeach; ?>
              </select>
            </div>
            <div class="form-field full">
              <label for="est-message">Project Details</label>
              <textarea id="est-message" name="message" rows="4"></textarea>
            </div>
          </div>

          <fieldset class="form-consent-fieldset">
            <legend class="form-consent-legend">Communication Consent</legend>
            <label class="form-consent-item">
              <input type="checkbox" name="email_opt_in" value="yes" class="consent-checkbox">
              <span class="consent-label"><strong>Email updates (optional):</strong> I agree to receive emails from <?php echo htmlspecialchars($siteName); ?> about my inquiry, services, and news. I can unsubscribe anytime or by emailing <?php echo htmlspecialchars($email); ?>. Message frequency varies.</span>
            </label>
            <label class="form-consent-item">
              <input type="checkbox" name="sms_opt_in" value="yes" class="consent-checkbox">
              <span class="consent-label"><strong>SMS/Text messages (optional):</strong> I agree to receive text messages from <?php echo htmlspecialchars($siteName); ?> at the number I provided (reminders, updates, and offers). Message frequency varies. Message and data rates may apply. Reply STOP to unsubscribe, HELP for help. <strong>Consent is not a condition of purchase.</strong></span>
            </label>
            <label class="form-consent-item form-consent-required">
              <input type="checkbox" name="terms_accepted" value="yes" class="consent-checkbox" required>
              <span class="consent-label">I have read and agree to the <a href="/privacy-policy/">Privacy Policy</a> and <a href="/terms/">Terms of Service</a>. <span class="required-star">*</span></span>
            </label>
          </fieldset>

          <!-- spam shield: signed render timestamp + JS interaction signal -->
          <?php $__ft_ts = (string) time(); ?>
          <input type="hidden" name="_ft" value="<?php echo $__ft_ts . '.' . hash_hmac('sha256', $__ft_ts, $leadsFormSecret); ?>">
          <input type="hidden" name="_js" value="" class="js-shield-field">
          <?php if (empty($GLOBALS['__js_shield'])) { $GLOBALS['__js_shield'] = 1; ?>
          <script>(function(){var d=document,f=function(){var i,e=d.querySelectorAll('.js-shield-field');for(i=0;i<e.length;i++)e[i].value='1';d.removeEventListener('pointerdown',f);d.removeEventListener('keydown',f);};d.addEventListener('pointerdown',f);d.addEventListener('keydown',f);})();</script>
          <?php } ?>
          <button type="submit" class="btn btn-primary btn-lg btn-block">Send my request</button>
        </form>
      </div>

      <div class="reveal-right">
        <span class="eyebrow-label">What Happens Next</span>
        <h2>What happens after you <span class="text-accent">request your estimate</span>?</h2>
        <p>After you request an estimate, A&amp;S Contracting Services contacts you to set an on-site roof visit, which is scheduled within days of first contact. The estimate that follows is written and itemized, and it carries the start window and the timeline, so you know the dates and the price before agreeing to anything.</p>
        <ol class="next-steps">
          <li><strong>A&amp;S sets the visit.</strong> The roof is looked at in person during business hours, Monday through Saturday.</li>
          <li><strong>You get the estimate in writing.</strong> Scope, material, timeline and price, with photos attached when storm damage is part of the job.</li>
          <li><strong>The roof is built and walked.</strong> Tear-off, installation and daily cleanup, then a final walkthrough with you.</li>
        </ol>
        <div class="nap">
          <div><?php echo icon('phone', 18); ?> <a href="tel:<?php echo $phoneTel; ?>"><?php echo $phone; ?></a></div>
          <div><?php echo icon('mail', 18); ?> <a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a></div>
          <div><?php echo icon('map-pin', 18); ?> <span><?php echo $addressCity; ?>, <?php echo $addressState; ?> <?php echo $addressZip; ?></span></div>
          <div><?php echo icon('clock', 18); ?> <span><?php echo htmlspecialchars($businessHours); ?></span></div>
        </div>
        <p style="margin-top:1rem; color: var(--color-muted); font-size: .95rem;">Roofing across <a href="/areas/warrenton/">Warrenton</a>, <a href="/areas/wright-city/">Wright City</a>, <a href="/areas/foristell/">Foristell</a>, <a href="/areas/wentzville/">Wentzville</a>, <a href="/areas/troy/">Troy</a>, <a href="/areas/jonesburg/">Jonesburg</a>, <a href="/areas/washington/">Washington</a> and everywhere within <?php echo $serviceRadius; ?> miles.</p>
      </div>
    </div>
  </div>
</section>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
