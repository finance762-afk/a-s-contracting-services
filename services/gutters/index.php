<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
// ─── Page-level setup ───────────────────────────────────────────────────────
$serviceSlug     = 'gutters';
$pageType        = 'service';
$currentPage     = 'services';
$svcName         = 'Gutters';
$pageTitle       = 'Seamless Gutter Installation in Warrenton, MO';
$pageDescription = 'Seamless aluminum gutters in Warrenton, MO: installation, repair, replacement and cleaning by A&S Contracting Services. Licensed & insured. (636) 359-7204.';
$canonicalUrl    = $siteUrl . '/services/gutters/';

// ─── Hero + recent-work photos (image manifest) ─────────────────────────────
$heroImage    = '1779985084434-7wvwuf-46-Feb_10__2026_22-02-29-uWM1';
$heroImageAlt = 'New dark shingle roof with the crew working below on a wooded property';
$heroPreload  = [
    'srcset' => "/assets/images/{$heroImage}-480.avif 480w, /assets/images/{$heroImage}-960.avif 960w",
    'sizes'  => '100vw',
];
$workPhotos = [
    ['1779985356802-y1uuhd-29-Aug_06__2025_14-39-50-VPdz', 'Crew member on a ladder beside new windows on a green-sided house'],
    ['1779985460368-i1nur1-60-Oct_14__2024_23-05-06-h2RS', 'White-sided ranch home with a dark hip roof at dusk'],
    ['1779985468766-asxmqk-65-Oct_14__2024_23-06-52-nSsb', 'Front gable and entry of a white-sided home with a dark shingle roof'],
];

// ─── FAQ (service-specific) ─────────────────────────────────────────────────
$faqs = [
    [
        'question' => 'How much do seamless gutters cost in Warrenton, MO?',
        'answer'   => 'Seamless gutter cost depends on the total length of gutter, the number of downspouts, the condition of the fascia behind the old system and the scope of the job. A&S Contracting Services publishes no per-foot price. Each house is measured on site and priced in a written, itemized estimate, and the quoted price is the final price.',
    ],
    [
        'question' => 'What size gutters does my house need?',
        'answer'   => 'Gutter size is set by the roof area that drains to each run and by how steep that roof is. A&S Contracting Services works this out during the on-site visit and lists the size and the downspout locations in the estimate.',
    ],
    [
        'question' => 'Do you repair gutters or only replace them?',
        'answer'   => 'Both. A&S Contracting Services repairs existing gutter systems, replaces them in full and installs new seamless aluminum gutters. The estimate states which approach is recommended for your house and why.',
    ],
    [
        'question' => 'Do you clean gutters?',
        'answer'   => 'Yes. Gutter cleaning and maintenance are listed A&S services. A cleaning visit is arranged like any other job: contact A&S, and a time is set during business hours, Monday through Saturday.',
    ],
    [
        'question' => 'Can gutters be replaced at the same time as the roof?',
        'answer'   => 'Yes. A&S Contracting Services does roofing, fascia, soffit and gutters with its own employees, so gutter replacement can be written into the same estimate as a roof replacement and scheduled around it.',
    ],
    [
        'question' => 'Is hail damage to gutters part of an insurance claim?',
        'answer'   => 'Dents in gutters and downspouts are part of what gets photographed after a hail storm. A&S Contracting Services documents the damage with photos, provides a detailed itemized estimate, meets the insurance adjuster on site and helps the homeowner through the claim.',
    ],
];

// ─── Other-services cards (page-local copy) ─────────────────────────────────
$otherCards = [
    'soffit' => ['icon' => 'wind', 'desc' => 'Soffit installation and repair, including attic ventilation at the eaves.'],
    'fascia' => ['icon' => 'ruler', 'desc' => 'Fascia installation and replacement, including rotted boards at the roof edge.'],
    'roofing' => ['icon' => 'home', 'desc' => 'Roof installation, repair, tear-off and full replacement, plus storm and hail damage repair.'],
];

// ─── Schema (Service + FAQPage + BreadcrumbList) ─────────────────────────────
$serviceSchema = [
    '@context'    => 'https://schema.org',
    '@type'       => 'Service',
    '@id'         => $canonicalUrl . '#service-' . $serviceSlug,
    'name'        => 'Gutters',
    'serviceType' => 'Gutter contractor',
    'description' => 'Seamless aluminum gutter installation, repair, full replacement, cleaning and maintenance in Warrenton, MO and Warren County.',
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
        <span class="eyebrow">Gutters &middot; Warrenton &amp; Warren County</span>
        <h1>Seamless gutters in <span class="text-accent">Warrenton, MO</span> — installation, repair &amp; cleaning</h1>
        <p class="hero-answer">A&amp;S Contracting Services installs, repairs, replaces and cleans seamless aluminum gutters in Warrenton, MO. A&amp;S is licensed and fully insured, and gives a free written estimate after an on-site visit.</p>
        <div class="hero-actions">
          <a href="#estimate" class="btn btn-primary btn-lg hero-form-open">Get a written gutter estimate</a>
          <a class="link-call" href="tel:<?php echo $phoneTel; ?>"><?php echo icon('phone', 18); ?> or call <?php echo $phone; ?></a>
        </div>
        <ul class="hero-chips">
          <li><?php echo icon('clipboard-list', 16); ?> Written, itemized estimate</li>
          <li><?php echo icon('home', 16); ?> Warrenton-based, 50-mile radius</li>
          <li><?php echo icon('droplets', 16); ?> Cleaning &amp; maintenance too</li>
        </ul>
      </div>

      <aside class="hero-form-card" id="hero-form">
        <h2>Request a gutter estimate</h2>
        <p class="hero-form-tagline">Every run checked on site. No obligation.</p>
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
        <h2>What are the signs a gutter system is failing?</h2>
        <p class="answer-block">A gutter system is failing when water spills over the front edge, runs behind the trough, drips at a joint or pools beside the foundation. Warrenton averages 41.47 inches of precipitation a year, and whatever lands on the roof has to leave through the gutters. A&amp;S Contracting Services checks each run and downspout in person.</p>
        <p class="pull-quote">A gutter has one job: carry roof water to a downspout and away from the house.</p>
      </div>
      <div class="sp-signs reveal-right">
        <div class="sp-sign">
          <div class="sp-sign__icon"><?php echo icon('droplets', 22); ?></div>
          <h3>Overflow in steady rain</h3>
          <p>Water sheeting over the lip means the trough is blocked, too small or pitched the wrong way.</p>
        </div>
        <div class="sp-sign">
          <div class="sp-sign__icon"><?php echo icon('layers', 22); ?></div>
          <h3>Sagging runs</h3>
          <p>A run that bows holds standing water and pulls on the board it hangs from.</p>
        </div>
        <div class="sp-sign">
          <div class="sp-sign__icon"><?php echo icon('home', 22); ?></div>
          <h3>Stains on fascia or siding</h3>
          <p>Streaks below the gutter show water escaping behind it or through a joint.</p>
        </div>
        <div class="sp-sign">
          <div class="sp-sign__icon"><?php echo icon('cloud-snow', 22); ?></div>
          <h3>Washed-out soil</h3>
          <p>A trench or splash line under the eave shows water is missing the downspouts.</p>
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
        <div class="sp-position__stat">41.47<span>inches of precipitation in an average Warrenton year (1991–2020 normals)</span></div>
      </div>
      <div class="reveal-right">
        <span class="eyebrow-label">Roof Water</span>
        <h2>Why have a roofing crew install the gutters?</h2>
        <p class="answer-block">A roofing crew installing the gutters means the people hanging the trough understand the roof edge it drains. A&amp;S Contracting Services began in 2023 as a roofing and exterior company, and its crew, not a subcontractor, also replaces the <a href="/services/fascia/">fascia boards that gutters fasten to</a> when those boards turn out to be rotted.</p>
        <ul class="sp-evidence">
          <li><?php echo icon('ruler', 22); ?><span><b>Sized at the house.</b> Gutter size and downspout count are set by the roof area that drains to each run, measured during the visit.</span></li>
          <li><?php echo icon('clipboard-list', 22); ?><span><b>One estimate for the eave.</b> Gutter, fascia and <a href="/services/soffit/">soffit repair under the overhang</a> can be itemized together instead of quoted by three companies.</span></li>
          <li><?php echo icon('check-circle', 22); ?><span><b>Upkeep after installation.</b> Gutter cleaning and maintenance are on the A&amp;S service list, so the installer can also be the one who keeps the system clear.</span></li>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- ═══════════════════ SERVICE BREAKDOWN ═══════════════════ -->
<section class="section section--light">
  <div class="container">
    <span class="eyebrow-label">The Work</span>
    <h2>What gutter work does A&amp;S take on?</h2>
    <p class="answer-block">A&amp;S takes on four kinds of gutter work: new seamless aluminum installation, repair of an existing system, full replacement, and cleaning and maintenance. A&amp;S Contracting Services looks at the gutters on site first, then writes an itemized estimate; the price follows the length of gutter, the condition of the boards behind it and the scope chosen.</p>
    <div class="sp-included">
      <div class="reveal-up">
        <h3>Gutter services on the list</h3>
        <ul class="sp-checklist">
          <li><?php echo icon('check', 20); ?> <span>Seamless aluminum gutter systems</span></li>
          <li><?php echo icon('check', 20); ?> <span>New installation on homes and commercial buildings</span></li>
          <li><?php echo icon('check', 20); ?> <span>Repair of leaking, loose or sagging sections</span></li>
          <li><?php echo icon('check', 20); ?> <span>Full replacement of a worn-out system</span></li>
          <li><?php echo icon('check', 20); ?> <span>Cleaning and maintenance</span></li>
          <li><?php echo icon('check', 20); ?> <span>Fascia replacement where the mounting board has rotted</span></li>
          <li><?php echo icon('check', 20); ?> <span>Debris cleared from the yard each day</span></li>
        </ul>
      </div>
      <div class="reveal-right">
        <h3>How a gutter job runs</h3>
        <ol class="process-steps">
          <li><b>Site visit</b><span>A&amp;S looks at every run, corner and downspout, and at the fascia behind them.</span></li>
          <li><b>Written price</b><span>Each item is listed separately. No hidden fees, and no upselling at the door.</span></li>
          <li><b>Scheduled start</b><span>The start window goes in writing along with the expected length of the job.</span></li>
          <li><b>Install and check</b><span>The crew hangs the system, clears the site and walks the finished gutters with you.</span></li>
        </ol>
      </div>
    </div>
  </div>
</section>

<!-- ═══════════════════ COMPARISON ═══════════════════ -->
<section class="section">
  <div class="container">
    <span class="eyebrow-label">Seamless Or Sectional</span>
    <h2>How do seamless gutters differ from sectional gutters?</h2>
    <p class="answer-block">Seamless gutters differ from sectional gutters in the number of joints: a seamless run is one continuous piece, while a sectional run is assembled from shorter lengths. A&amp;S Contracting Services installs seamless aluminum systems. The table compares the two types, and the A&amp;S guide to <a href="/blog/seamless-gutters-cost-missouri/">seamless gutter cost and sizing in Missouri</a> goes further.</p>
    <div class="sp-table-wrap reveal-up">
      <table class="sp-table">
        <caption>Sectional gutters compared with seamless aluminum gutters from A&amp;S</caption>
        <thead>
          <tr>
            <th scope="col">Attribute</th>
            <th scope="col">Sectional gutters</th>
            <th scope="col">Seamless gutters from A&amp;S</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">How a run is made</th>
            <td>Stock lengths joined end to end</td>
            <td>One continuous piece per run, cut to the measured length</td>
          </tr>
          <tr>
            <th scope="row">Where joints fall</th>
            <td>At every connection along the run, plus corners and end caps</td>
            <td>At corners, end caps and downspout outlets only</td>
          </tr>
          <tr>
            <th scope="row">Material</th>
            <td>Varies by product</td>
            <td>Aluminum</td>
          </tr>
          <tr>
            <th scope="row">How it is specified</th>
            <td>Bought by the length</td>
            <td>Measured at the house during an on-site visit and itemized in writing</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</section>

<!-- ═══════════════════ FAQ ═══════════════════ -->
<section class="section section--light" aria-label="Gutters FAQ">
  <div class="container-narrow">
    <div class="section-title reveal-up">
      <span class="eyebrow-label">Good Questions</span>
      <h2>What should you know before replacing gutters?</h2>
      <p>Before replacing gutters, know that the price, the size and the number of downspouts are all set by the house, not by a catalog. A&amp;S Contracting Services answers the common questions here in general terms and gives the house-specific answers after an on-site look, in a written estimate with no obligation attached.</p>
    </div>
    <div class="faq-grid">
      <?php foreach ($faqs as $fi => $faq): ?>
      <details class="faq"<?php echo $fi < 2 ? ' open' : ''; ?>>
        <summary><?php echo htmlspecialchars($faq['question']); ?></summary>
        <p><?php echo htmlspecialchars($faq['answer']); ?></p>
      </details>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ═══════════════════ RECENT WORK ═══════════════════ -->
<section class="section sp-gallery" aria-label="Gutters job-site photos">
  <div class="container-wide">
    <div class="section-title reveal-up">
      <span class="eyebrow-label">Job-Site Photos</span>
      <h2>What do A&amp;S gutter and eave jobs look like?</h2>
      <p class="answer-block">A&amp;S gutter and eave jobs look like the three photos below. One shows a crew member on a ladder at the eave of a gray-sided house; two show completed homes with gutters running along the roofline. A&amp;S Contracting Services took the pictures on its own job sites, and each caption is limited to what the camera recorded.</p>
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
      <h2>Which trades meet the gutters at the eave?</h2>
      <p class="hero-answer">Three trades meet the gutters at the eave: soffit beneath, fascia behind and roofing above. A&amp;S Contracting Services performs all three, which is why a gutter estimate can grow to include a rotted board or a damaged roof edge without a second contractor. Every trade A&amp;S offers appears on the <a href="/services/">services page for Warrenton and Warren County</a>.</p>
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
<section class="section section--light" id="estimate" aria-label="Request a gutters estimate">
  <div class="container">
    <div class="estimate">
      <div class="card reveal-up" style="padding: clamp(1.5rem, 4vw, 2.5rem); border:1px solid var(--color-line); border-radius: var(--radius-lg); background: var(--color-surface);">
        <span class="eyebrow-label">Written Estimate</span>
        <h2>Ready to get your gutters looked at?</h2>
        <p class="lead" style="margin-bottom: 1.25rem;">Tell A&amp;S Contracting Services what the gutters are doing, and an on-site visit will be scheduled within days of first contact.</p>

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
        <p>When you request an estimate, A&amp;S Contracting Services gets in touch to pick a time to see the gutters in person, usually a matter of days after first contact. You then receive an itemized estimate in writing, including the start window, and decide from there. Neither the visit nor the estimate commits you to anything.</p>
        <ol class="next-steps">
          <li><strong>A&amp;S comes to the house.</strong> Every run and downspout is checked.</li>
          <li><strong>You receive an itemized price.</strong> Installation, repair, replacement or cleaning, each listed separately.</li>
          <li><strong>The gutters go up.</strong> A&amp;S employees do the installation, clear the yard and finish with a walkthrough.</li>
        </ol>
        <div class="nap">
          <div><?php echo icon('phone', 18); ?> <a href="tel:<?php echo $phoneTel; ?>"><?php echo $phone; ?></a></div>
          <div><?php echo icon('mail', 18); ?> <a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a></div>
          <div><?php echo icon('map-pin', 18); ?> <span><?php echo $addressCity; ?>, <?php echo $addressState; ?> <?php echo $addressZip; ?></span></div>
          <div><?php echo icon('clock', 18); ?> <span><?php echo htmlspecialchars($businessHours); ?></span></div>
        </div>
        <p style="margin-top:1rem; color: var(--color-muted); font-size: .95rem;">Gutters across <a href="/areas/warrenton/">Warrenton</a>, <a href="/areas/wright-city/">Wright City</a>, <a href="/areas/foristell/">Foristell</a>, <a href="/areas/wentzville/">Wentzville</a>, <a href="/areas/troy/">Troy</a>, <a href="/areas/jonesburg/">Jonesburg</a>, <a href="/areas/washington/">Washington</a> and everywhere within <?php echo $serviceRadius; ?> miles.</p>
      </div>
    </div>
  </div>
</section>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
