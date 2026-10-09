<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
// ─── Page-level setup ───────────────────────────────────────────────────────
$serviceSlug     = 'exterior-work';
$pageType        = 'service';
$currentPage     = 'services';
$svcName         = 'Exterior Work';
$pageTitle       = 'Exterior Home Renovation in Warrenton, MO';
$pageDescription = 'Exterior renovation in Warrenton, MO: roofing, siding and gutters planned as one project by one crew. Licensed & insured. Call A&S at (636) 359-7204.';
$canonicalUrl    = $siteUrl . '/services/exterior-work/';

// ─── Hero + recent-work photos (image manifest) ─────────────────────────────
$heroImage    = '1779985052217-p5psyo-62-Apr_25__2025_19-50-40-dTeE-c1';
$heroImageAlt = 'Rear of a two-story home with tan siding, a bay window and patio doors';
$heroPreload  = [
    'srcset' => "/assets/images/{$heroImage}-480.avif 480w, /assets/images/{$heroImage}-960.avif 960w",
    'sizes'  => '100vw',
];
$workPhotos = [
    ['1779985210285-ttua89-27-Dec_24__2025_18-22-19-ZYKB', 'Crew member on a ladder at the roof edge of a tan wood-sided house'],
    ['1779985451171-aalfod-54-Oct_14__2024_15-18-28-f4YZ', 'Roof deck being re-sheathed with shingle bundles staged, on a rural property with a red barn'],
    ['1779985051813-6hdkvp-61-Apr_25__2025_19-50-31-B2oU-c1', 'Bay window wall with new tan siding and white trim'],
];

// ─── FAQ (service-specific) ─────────────────────────────────────────────────
$faqs = [
    [
        'question' => 'Does A&S help with insurance claims for storm damage?',
        'answer'   => 'Yes. A&S Contracting Services documents storm and hail damage with photos, writes a detailed itemized estimate, and meets the insurance adjuster on site. On an exterior claim that estimate can cover roofing, siding and gutters together, and A&S helps the homeowner through the claim.',
    ],
    [
        'question' => 'How long does an exterior renovation take?',
        'answer'   => 'A&S Contracting Services finishes most single-family roof replacements in 1 to 3 days, weather permitting. Siding time varies by square footage and home size, so a combined exterior project gets its own timeline. The start window and timeline are given in writing.',
    ],
    [
        'question' => 'What roofing and siding materials does A&S offer?',
        'answer'   => 'A&S Contracting Services installs architectural asphalt shingles, impact-resistant shingles and metal roofing, and vinyl, fiber cement and wood siding. Gutters are seamless aluminum. The materials selected are one of the main factors in the price, so they are itemized on the estimate.',
    ],
    [
        'question' => 'Can I have only part of the exterior done?',
        'answer'   => 'Yes. A&S Contracting Services offers roofing, siding, gutters, soffit and fascia as individual services as well as a combined exterior renovation. The on-site estimate covers whatever the property needs, and there is no upselling.',
    ],
    [
        'question' => 'How is exterior work priced?',
        'answer'   => 'A&S Contracting Services publishes no price list for exterior work. Cost depends on square footage, the materials selected, the condition of the existing structure and scope. Estimates are free, written and made on site, and the quoted price is the final price.',
    ],
    [
        'question' => 'Does A&S do exterior work on commercial buildings?',
        'answer'   => 'Yes. A&S Contracting Services does residential and commercial roofing and takes commercial clients for exterior work across Warren County and the surrounding area, including Wright City, Foristell, Wentzville, Troy, Jonesburg and Washington.',
    ],
];

// ─── Schema (Service + FAQPage + BreadcrumbList) ─────────────────────────────
$serviceSchema = [
    '@context'    => 'https://schema.org',
    '@type'       => 'Service',
    '@id'         => $canonicalUrl . '#service-' . $serviceSlug,
    'name'        => 'Exterior Work',
    'serviceType' => 'Exterior renovation',
    'description' => 'Full exterior renovation integrating roofing, siding and gutters for properties within 50 miles of Warrenton, MO.',
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
.sp-table { width: 100%; min-width: 620px; border-collapse: collapse; font-size: .93rem; }
.sp-table caption { caption-side: top; text-align: left; padding: 1rem 1.25rem; font-family: var(--font-heading); font-weight: 700; color: var(--color-ink); }
.sp-table th, .sp-table td { padding: .8rem 1.25rem; text-align: left; vertical-align: top; border-top: 1px solid var(--color-line); color: var(--color-ink-2); }
.sp-table thead th { background: color-mix(in srgb, var(--color-primary) 8%, var(--color-surface)); color: var(--color-ink); font-size: .82rem; text-transform: uppercase; letter-spacing: .04em; }
.sp-table tbody th { color: var(--color-ink); font-weight: 700; }
.sp-after { margin-top: 1.25rem; max-width: 65ch; color: var(--color-ink-2); }

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
        <span class="eyebrow">Exterior Work &middot; Warrenton &amp; Warren County</span>
        <h1>Exterior Work in <span class="text-accent">Warrenton, MO</span>: siding, roofing &amp; gutters, one crew</h1>
        <p class="hero-answer">A&amp;S Contracting Services, a licensed and fully insured Missouri general contractor, renovates whole exteriors, integrating roofing, siding and gutters into one project for properties within 50 miles of Warrenton.</p>
        <div class="hero-actions">
          <a href="#estimate" class="btn btn-primary btn-lg hero-form-open">Get a written exterior estimate</a>
          <a class="link-call" href="tel:<?php echo $phoneTel; ?>"><?php echo icon('phone', 18); ?> or call <?php echo $phone; ?></a>
        </div>
        <ul class="hero-chips">
          <li><?php echo icon('search', 16); ?> Storm damage documented with photos</li>
          <li><?php echo icon('handshake', 16); ?> Insurance adjuster met on site</li>
          <li><?php echo icon('landmark', 16); ?> Founded on roofing &amp; exterior work</li>
        </ul>
      </div>

      <aside class="hero-form-card" id="hero-form">
        <h2>Request an exterior estimate</h2>
        <p class="hero-form-tagline">The on-site visit and the written estimate are free. No obligation.</p>
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
        <h2>When does a Warrenton home need more than one exterior trade?</h2>
        <p class="answer-block">A home needs more than one exterior trade when damage or age crosses the line between roof, wall and drainage. Hail and wind hit shingles, siding and gutters in the same storm, and a rotted fascia board fails the gutter hung on it. A&amp;S Contracting Services assesses those parts together on one visit.</p>
        <p class="pull-quote">Water leaves a house in order: roof, gutter, downspout, ground. A gap anywhere sends it into the wall.</p>
      </div>
      <div class="sp-signs reveal-right">
        <div class="sp-sign">
          <div class="sp-sign__icon"><?php echo icon('cloud-snow', 22); ?></div>
          <h3>One storm, several surfaces</h3>
          <p>Spring hail and wind rarely stop at the shingles; siding and gutters take the same hits.</p>
        </div>
        <div class="sp-sign">
          <div class="sp-sign__icon"><?php echo icon('droplets', 22); ?></div>
          <h3>Water behind the gutter</h3>
          <p>Staining on fascia or siding below the roof edge means runoff is missing the gutter.</p>
        </div>
        <div class="sp-sign">
          <div class="sp-sign__icon"><?php echo icon('snowflake', 22); ?></div>
          <h3>Freeze-thaw wear</h3>
          <p>Missouri winters work water into small gaps in siding and trim and widen them.</p>
        </div>
        <div class="sp-sign">
          <div class="sp-sign__icon"><?php echo icon('layers', 22); ?></div>
          <h3>Mismatched repairs</h3>
          <p>Separate patches over time leave roof, trim and siding at different ages and colors.</p>
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
        <div class="sp-position__stat">50<span>miles: the radius around Warrenton in which A&amp;S takes exterior projects</span></div>
      </div>
      <div class="reveal-right">
        <span class="eyebrow-label">One System</span>
        <h2>Why treat the roof, siding and gutters as one exterior project?</h2>
        <p class="answer-block">Roof, siding and gutters work as one system for moving water off a building, so the joints between them matter as much as the materials. A&amp;S Contracting Services began in 2023 as a roofing and exterior company. Its crew does every one of those trades, which removes the handoffs between separate companies.</p>
        <ul class="sp-evidence">
          <li><?php echo icon('home', 22); ?><span><b>Roofing.</b> Architectural asphalt shingles, impact-resistant shingles and metal roofing, installed, repaired or torn off and replaced. Details are on the <a href="/services/roofing/">roof repair and replacement page</a>.</span></li>
          <li><?php echo icon('layers', 22); ?><span><b>Siding.</b> Vinyl, fiber cement and wood, installed or repaired. See <a href="/services/siding/">siding materials and repair</a>.</span></li>
          <li><?php echo icon('droplets', 22); ?><span><b>Roofline and drainage.</b> Seamless aluminum gutters, plus soffit and fascia matched to the roofline.</span></li>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- ═══════════════════ SERVICE BREAKDOWN ═══════════════════ -->
<section class="section section--light">
  <div class="container">
    <span class="eyebrow-label">The Work</span>
    <h2>What does a full exterior renovation by A&amp;S include?</h2>
    <p class="answer-block">A full exterior renovation by A&amp;S Contracting Services includes roofing, siding and gutters, planned as one sequence with soffit and fascia where they are needed. Each is also listed separately among <a href="/services/">all A&amp;S services</a>, so the estimate can cover the whole exterior or only the parts that have failed.</p>
    <div class="sp-included">
      <div class="reveal-up">
        <h3>Included in the scope</h3>
        <ul class="sp-checklist">
          <li><?php echo icon('check', 20); ?> Roof installation, repair, tear-off and replacement</li>
          <li><?php echo icon('check', 20); ?> Storm and hail damage repair</li>
          <li><?php echo icon('check', 20); ?> Siding installation and repair</li>
          <li><?php echo icon('check', 20); ?> Seamless aluminum gutter systems</li>
          <li><?php echo icon('check', 20); ?> Soffit and fascia repair or replacement</li>
          <li><?php echo icon('check', 20); ?> Insurance claim documentation with photos</li>
          <li><?php echo icon('check', 20); ?> Daily cleanup and a final walkthrough</li>
        </ul>
      </div>
      <div class="reveal-right">
        <h3>How the project runs</h3>
        <ol class="process-steps">
          <li><b>Assess the whole exterior</b><span>Roof, walls, roofline and gutters are checked on one visit and photographed where there is damage.</span></li>
          <li><b>One itemized estimate</b><span>Each trade is listed with its own scope. If an insurance claim is involved, A&amp;S meets the adjuster on site.</span></li>
          <li><b>Written schedule</b><span>Most single-family roof replacements take 1–3 days, weather permitting; siding time varies with square footage.</span></li>
          <li><b>Work in sequence</b><span>The crew moves from one part of the exterior to the next and cleans the site daily.</span></li>
          <li><b>Final walkthrough</b><span>You walk the finished exterior with the crew.</span></li>
        </ol>
      </div>
    </div>
  </div>
</section>

<!-- ═══════════════════ COMPARISON ═══════════════════ -->
<section class="section">
  <div class="container">
    <span class="eyebrow-label">Component By Component</span>
    <h2>How do the parts of an exterior renovation compare?</h2>
    <p class="answer-block">The parts of an exterior renovation compare on material choice, on what A&amp;S Contracting Services inspects, and on how long each takes. The table covers the four that are most often combined. Only roofing has a typical duration; for the rest, the timeline is set in the written estimate.</p>
    <div class="sp-table-wrap reveal-up">
      <table class="sp-table">
        <caption>Exterior components A&amp;S Contracting Services installs and repairs</caption>
        <thead>
          <tr>
            <th scope="col">Component</th>
            <th scope="col">Options offered</th>
            <th scope="col">What is inspected</th>
            <th scope="col">Duration</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">Roofing</th>
            <td>Architectural asphalt shingles, impact-resistant shingles, metal</td>
            <td>Roof surface, storm and hail damage</td>
            <td>1–3 days for most single-family replacements, weather permitting</td>
          </tr>
          <tr>
            <th scope="row">Siding</th>
            <td>Vinyl, fiber cement, wood</td>
            <td>Cracked, loose or damaged boards and panels</td>
            <td>Varies by square footage and home size</td>
          </tr>
          <tr>
            <th scope="row">Gutters</th>
            <td>Seamless aluminum</td>
            <td>Each run, its attachment to the fascia, and where the water leaves</td>
            <td>Set in the written estimate</td>
          </tr>
          <tr>
            <th scope="row">Soffit and fascia</th>
            <td>Finish matched to the roofline</td>
            <td>Rotted boards, attic ventilation, gaps open to pests and moisture</td>
            <td>Set in the written estimate</td>
          </tr>
        </tbody>
      </table>
    </div>
    <p class="sp-after">Storm claims often involve more than one of these, and A&amp;S explains the process in its post on <a href="/blog/hail-damage-roof-insurance-claim-missouri/">hail damage inspections and insurance claims in Missouri</a>. Work that also reaches indoors is handled as <a href="/services/general-contracting/">general contracting for residential and commercial projects</a>.</p>
  </div>
</section>

<!-- ═══════════════════ FAQ ═══════════════════ -->
<section class="section section--light" aria-label="Exterior renovation questions, answered">
  <div class="container-narrow">
    <div class="section-title reveal-up">
      <span class="eyebrow-label">Good Questions</span>
      <h2>Exterior renovation questions, answered</h2>
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
<section class="section sp-gallery" aria-label="Photos from A&amp;S job sites">
  <div class="container-wide">
    <div class="section-title reveal-up">
      <span class="eyebrow-label">From The Job Site</span>
      <h2>What do A&amp;S exterior job sites look like?</h2>
      <p class="answer-block">These photos are from A&amp;S Contracting Services exterior job sites. They show the roofline being worked from the eaves, a roof in progress on a rural property, and a finished wall with siding and trimmed windows, which together cover the three surfaces an exterior renovation ties into one.</p>
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
      <h2>Which exterior trades does A&amp;S also offer on their own?</h2>
      <p class="hero-answer">Each exterior trade is available on its own when the rest of the building is sound. A&amp;S Contracting Services offers siding, roofing and gutters as separate services with their own pages, and the on-site visit can be widened to the whole exterior whenever you ask for it.</p>
    </div>
    <div class="sp-other">
      <?php
      $otherSlugs = ['siding', 'roofing', 'gutters'];
      $otherDesc  = [
          'siding' => 'Vinyl, fiber cement and wood siding, installed and repaired.',
          'roofing' => 'Roof installation, repair, tear-off and replacement, plus storm and hail damage repair.',
          'gutters' => 'Seamless aluminum gutters installed, repaired, replaced, cleaned and maintained.',
      ];
      $tintCycle  = [1, 2, 3];
      $otherIcons = ['siding' => 'layers', 'roofing' => 'home', 'gutters' => 'droplets'];
      foreach ($otherSlugs as $oi => $os):
        $osvc = null; foreach ($services as $s) { if ($s['slug'] === $os) { $osvc = $s; break; } }
        if (!$osvc) continue;
      ?>
      <article class="service-card-with-image card-tint-<?php echo $tintCycle[$oi % 3]; ?> reveal-up reveal-delay-<?php echo ($oi % 3) + 1; ?>">
        <div class="service-card__body">
          <div class="service-card__icon"><?php echo icon($otherIcons[$os] ?? 'check-circle', 22); ?></div>
          <h3><?php echo htmlspecialchars($osvc['name']); ?></h3>
          <p class="service-card__desc"><?php echo htmlspecialchars($otherDesc[$os] ?? $osvc['name']); ?></p>
          <a href="/services/<?php echo $os; ?>/" class="service-card__cta"><?php echo htmlspecialchars($serviceAnchor[$os] ?? $osvc['name']); ?></a>
        </div>
      </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

</article>

<!-- ═══════════════════ FINAL CTA / ESTIMATE ═══════════════════ -->
<section class="section section--light" id="estimate" aria-label="Request an exterior estimate">
  <div class="container">
    <div class="estimate">
      <div class="card reveal-up" style="padding: clamp(1.5rem, 4vw, 2.5rem); border:1px solid var(--color-line); border-radius: var(--radius-lg); background: var(--color-surface);">
        <span class="eyebrow-label">Written Estimate</span>
        <h2>Ready for one estimate on your whole exterior?</h2>
        <p class="lead" style="margin-bottom: 1.25rem;">List what you have noticed on the roof, walls or gutters. A&amp;S Contracting Services schedules an on-site exterior assessment within days of first contact.</p>

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
        <h2>What happens after you send your <span class="text-accent">exterior details</span>?</h2>
        <p class="answer-block">After you send your exterior details, A&amp;S Contracting Services books a visit to look at the roof, siding and gutters together. Visits are scheduled within days of first contact and are free. Damage is photographed, and the written estimate separates each trade so it can be read by you or by an insurer.</p>
        <ol class="next-steps">
          <li><strong>The exterior is assessed.</strong> One visit covers roof, walls, roofline and drainage.</li>
          <li><strong>The estimate is itemized.</strong> Written, with no obligation; the quoted price is the final price.</li>
          <li><strong>The schedule is put in writing.</strong> You get a start window and timeline, and a final walkthrough when the work is done.</li>
        </ol>
        <div class="nap">
          <div><?php echo icon('phone', 18); ?> <a href="tel:<?php echo $phoneTel; ?>"><?php echo $phone; ?></a></div>
          <div><?php echo icon('mail', 18); ?> <a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a></div>
          <div><?php echo icon('map-pin', 18); ?> <span><?php echo $addressCity; ?>, <?php echo $addressState; ?> <?php echo $addressZip; ?></span></div>
          <div><?php echo icon('clock', 18); ?> <span><?php echo htmlspecialchars($businessHours); ?></span></div>
        </div>
        <p style="margin-top:1rem; color: var(--color-muted); font-size: .95rem;">Exterior work across <a href="/areas/warrenton/">Warrenton</a>, <a href="/areas/wright-city/">Wright City</a>, <a href="/areas/foristell/">Foristell</a>, <a href="/areas/wentzville/">Wentzville</a>, <a href="/areas/troy/">Troy</a>, <a href="/areas/jonesburg/">Jonesburg</a>, <a href="/areas/washington/">Washington</a> and everywhere within <?php echo $serviceRadius; ?> miles.</p>
      </div>
    </div>
  </div>
</section>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
