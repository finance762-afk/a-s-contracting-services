<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
// ─── Page-level setup ───────────────────────────────────────────────────────
$serviceSlug     = 'soffit';
$pageType        = 'service';
$currentPage     = 'services';
$svcName         = 'Soffit';
$pageTitle       = 'Soffit Repair & Replacement in Warrenton, MO';
$pageDescription = 'Soffit installation and repair in Warrenton, MO for attic ventilation and to block pests and moisture. Licensed & insured. Written estimate: (636) 359-7204.';
$canonicalUrl    = $siteUrl . '/services/soffit/';

// ─── Hero + recent-work photos (image manifest) ─────────────────────────────
$heroImage    = '1779985210676-rimzkx-29-Dec_24__2025_18-22-23-xd3W';
$heroImageAlt = 'Crew member working at the porch roofline of a tan wood-sided house';
$heroPreload  = [
    'srcset' => "/assets/images/{$heroImage}-480.avif 480w, /assets/images/{$heroImage}-960.avif 960w",
    'sizes'  => '100vw',
];
$workPhotos = [
    ['1779984974072-agw64u-4-Aug_06__2025_13-45-27-DRwn', 'Single-story home with light siding and a tall evergreen at the corner'],
    ['1779985049352-yx87w1-20-Mar_12__2025_18-21-31-DDFM', 'Front of a home with dark siding, a dormer and house wrap on one wall during exterior work'],
    ['1779985485739-cy4u83-81-Dec_05__2024_18-25-35-1ywp', 'Red metal-sided barn with a white metal roof'],
];

// ─── FAQ (service-specific) ─────────────────────────────────────────────────
$faqs = [
    [
        'question' => 'How much does soffit repair cost in Warrenton, MO?',
        'answer'   => 'Soffit repair cost depends on the length of eave involved, the material selected, the condition of the framing above the panels and the scope. A&S Contracting Services has no published prices; it looks at the eaves on site and gives a written, itemized estimate, and the quoted price is the final price.',
    ],
    [
        'question' => 'Does soffit affect attic ventilation?',
        'answer'   => 'Yes. Vented soffit is where outside air enters the attic, and that air leaves through vents higher on the roof. A&S Contracting Services includes attic ventilation in its soffit work and checks the intake at the eaves during the visit.',
    ],
    [
        'question' => 'Can soffit keep birds and insects out?',
        'answer'   => 'Intact soffit closes the underside of the roof overhang, which blocks pests and moisture from reaching the eave framing and the attic. A&S Contracting Services repairs or replaces the open, loose or damaged sections that animals use as entry points.',
    ],
    [
        'question' => 'Will new soffit match my house?',
        'answer'   => 'A&S Contracting Services matches soffit to the roofline. When only part of the eave is repaired, the estimate notes how closely the new panels will match the existing ones.',
    ],
    [
        'question' => 'Do soffit and fascia get replaced together?',
        'answer'   => 'Not always. Soffit and fascia meet at the roof edge and can be damaged by the same leak, but each can be repaired separately. A&S Contracting Services does both, checks both during the visit and itemizes them separately in the estimate.',
    ],
    [
        'question' => 'How do I get a soffit estimate?',
        'answer'   => 'Call (636) 359-7204 or send the form on this page. A&S Contracting Services schedules an on-site visit within days of first contact, then sends a written estimate with a start window. The visit and the estimate cost nothing and carry no obligation.',
    ],
];

// ─── Other-services cards (page-local copy) ─────────────────────────────────
$otherCards = [
    'fascia' => ['icon' => 'ruler', 'desc' => 'Fascia installation and replacement, including rotted boards at the roof edge.'],
    'gutters' => ['icon' => 'droplets', 'desc' => 'Seamless aluminum gutter systems: installation, repair, replacement and cleaning.'],
    'roofing' => ['icon' => 'home', 'desc' => 'Roof installation, repair, tear-off and full replacement, plus storm and hail damage repair.'],
];

// ─── Schema (Service + FAQPage + BreadcrumbList) ─────────────────────────────
$serviceSchema = [
    '@context'    => 'https://schema.org',
    '@type'       => 'Service',
    '@id'         => $canonicalUrl . '#service-' . $serviceSlug,
    'name'        => 'Soffit',
    'serviceType' => 'Soffit contractor',
    'description' => 'Soffit installation and repair in Warrenton, MO and Warren County: attic ventilation at the eaves, pest and moisture protection, and soffit matched to the roofline.',
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
        <span class="eyebrow">Soffit &middot; Warrenton &amp; Warren County</span>
        <h1>Soffit in <span class="text-accent">Warrenton, MO</span>: installation, repair &amp; attic ventilation</h1>
        <p class="hero-answer">A&amp;S Contracting Services installs and repairs soffit in Warrenton, MO to ventilate the attic and keep pests and moisture out of the eaves. A&amp;S is licensed and fully insured; the written estimate is free.</p>
        <div class="hero-actions">
          <a href="#estimate" class="btn btn-primary btn-lg hero-form-open">Get a written soffit estimate</a>
          <a class="link-call" href="tel:<?php echo $phoneTel; ?>"><?php echo icon('phone', 18); ?> or call <?php echo $phone; ?></a>
        </div>
        <ul class="hero-chips">
          <li><?php echo icon('clipboard-list', 16); ?> Written, itemized estimate</li>
          <li><?php echo icon('home', 16); ?> Warrenton-based, 50-mile radius</li>
          <li><?php echo icon('ruler', 16); ?> Matched to the roofline</li>
        </ul>
      </div>

      <aside class="hero-form-card" id="hero-form">
        <h2>Request a soffit estimate</h2>
        <p class="hero-form-tagline">Eaves inspected in person. No obligation.</p>
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
        <h2>How do you spot soffit damage from the ground?</h2>
        <p class="answer-block">Soffit damage shows from the ground as sagging or missing panels, peeling paint, dark stains under the eave, or birds and wasps going in and out of a gap. Missouri’s humid summers make attic airflow matter, and the soffit is where that air enters. A&amp;S Contracting Services inspects the eaves on site before quoting any repair.</p>
        <p class="pull-quote">The soffit is the underside of the roof overhang, and it is the intake side of attic ventilation.</p>
      </div>
      <div class="sp-signs reveal-right">
        <div class="sp-sign">
          <div class="sp-sign__icon"><?php echo icon('layers', 22); ?></div>
          <h3>Sagging or missing panels</h3>
          <p>A panel that has dropped leaves the rafter tails and the attic open to weather.</p>
        </div>
        <div class="sp-sign">
          <div class="sp-sign__icon"><?php echo icon('droplets', 22); ?></div>
          <h3>Stains under the eave</h3>
          <p>Dark streaks point to water coming from the roof edge or a gutter above.</p>
        </div>
        <div class="sp-sign">
          <div class="sp-sign__icon"><?php echo icon('home', 22); ?></div>
          <h3>Nests in the overhang</h3>
          <p>Birds, squirrels and wasps use any opening in the eave as a way in.</p>
        </div>
        <div class="sp-sign">
          <div class="sp-sign__icon"><?php echo icon('wind', 22); ?></div>
          <h3>Blocked or painted-over vents</h3>
          <p>Vents that cannot pass air leave the attic without intake.</p>
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
        <div class="sp-position__stat sp-position__stat--word">Intake<span>is the soffit’s part in attic ventilation: outside air enters at the eave</span></div>
      </div>
      <div class="reveal-right">
        <span class="eyebrow-label">Part Of The Roof</span>
        <h2>How does soffit connect to the rest of the roof?</h2>
        <p class="answer-block">Soffit connects to the rest of the roof as the intake for attic ventilation: air enters through vented panels at the eave and leaves near the ridge. A&amp;S Contracting Services is a roofing and exterior contractor, so its crew, with no subcontractors involved, treats soffit, <a href="/services/roofing/">roof repair and replacement</a> and the fascia board as one assembly.</p>
        <ul class="sp-evidence">
          <li><?php echo icon('wind', 22); ?><span><b>Ventilation checked, not assumed.</b> The visit looks at whether the eave vents can pass air, a subject the A&amp;S post on <a href="/blog/roof-ventilation-in-missouri-ridge-vents-soffit-intake-attic-heat/">ridge vents and soffit intake in Missouri</a> explains.</span></li>
          <li><?php echo icon('ruler', 22); ?><span><b>Matched to the roofline.</b> New soffit is chosen to match the existing eave so a repaired section does not stand out.</span></li>
          <li><?php echo icon('check-circle', 22); ?><span><b>Fascia handled alongside.</b> If the <a href="/services/fascia/">fascia board at the roof edge</a> is rotted where the soffit meets it, one estimate covers both.</span></li>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- ═══════════════════ SERVICE BREAKDOWN ═══════════════════ -->
<section class="section section--light">
  <div class="container">
    <span class="eyebrow-label">The Work</span>
    <h2>What does A&amp;S do on a soffit job?</h2>
    <p class="answer-block">On a soffit job, A&amp;S installs soffit or repairs damaged sections, checks attic ventilation at the eave, and closes the gaps that let pests and moisture in. A&amp;S Contracting Services prices the work from an on-site look; the written figure depends on the length of eave, the material, the state of the framing and the scope.</p>
    <div class="sp-included">
      <div class="reveal-up">
        <h3>Soffit work on the list</h3>
        <ul class="sp-checklist">
          <li><?php echo icon('check', 20); ?> <span>New soffit installation</span></li>
          <li><?php echo icon('check', 20); ?> <span>Repair of loose, sagging or damaged soffit</span></li>
          <li><?php echo icon('check', 20); ?> <span>Attic ventilation at the eaves</span></li>
          <li><?php echo icon('check', 20); ?> <span>Openings closed against birds, insects and rodents</span></li>
          <li><?php echo icon('check', 20); ?> <span>Moisture kept out from under the overhang</span></li>
          <li><?php echo icon('check', 20); ?> <span>Soffit matched to the existing roofline</span></li>
          <li><?php echo icon('check', 20); ?> <span>Fascia or gutter work added to the estimate when needed</span></li>
        </ul>
      </div>
      <div class="reveal-right">
        <h3>Steps from visit to walkthrough</h3>
        <ol class="process-steps">
          <li><b>Eave inspection</b><span>A&amp;S examines the overhangs around the whole house, not only the visible damage.</span></li>
          <li><b>Estimate on paper</b><span>An itemized price for the lengths to be repaired or replaced; the number quoted is the number charged.</span></li>
          <li><b>Dates confirmed</b><span>A start window and a timeline are written down before materials are ordered.</span></li>
          <li><b>Work and walkthrough</b><span>The crew completes the soffit, removes debris each day and shows you the finished eaves.</span></li>
        </ol>
      </div>
    </div>
  </div>
</section>

<!-- ═══════════════════ COMPARISON ═══════════════════ -->
<section class="section">
  <div class="container">
    <span class="eyebrow-label">Vented Or Solid</span>
    <h2>What is the difference between vented and solid soffit?</h2>
    <p class="answer-block">The difference between vented and solid soffit is airflow: vented panels are perforated so outside air can enter the attic, and solid panels are closed. A&amp;S Contracting Services decides which goes where during the on-site visit, based on how the attic above each section is ventilated. The table lays out the general distinction.</p>
    <div class="sp-table-wrap reveal-up">
      <table class="sp-table">
        <caption>Vented and solid soffit panels compared</caption>
        <thead>
          <tr>
            <th scope="col">Attribute</th>
            <th scope="col">Vented soffit</th>
            <th scope="col">Solid soffit</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">Airflow</th>
            <td>Perforated to let outside air into the attic</td>
            <td>Closed; passes no air</td>
          </tr>
          <tr>
            <th scope="row">Where it is used</th>
            <td>Eaves that supply intake air to an attic</td>
            <td>Overhangs and porch ceilings with no attic space to ventilate</td>
          </tr>
          <tr>
            <th scope="row">Pests</th>
            <td>Openings too small for birds and rodents</td>
            <td>A continuous closed surface</td>
          </tr>
          <tr>
            <th scope="row">How A&amp;S specifies it</th>
            <td>Where the attic needs intake</td>
            <td>Where no intake is needed, matched to the vented panels</td>
          </tr>
        </tbody>
      </table>
    </div>
    <p class="sp-table-note">Unsure whether to patch the eave or redo it? See the A&amp;S guide to <a href="/blog/soffit-fascia-repair-vs-replacement/">soffit and fascia repair versus replacement</a>.</p>
  </div>
</section>

<!-- ═══════════════════ FAQ ═══════════════════ -->
<section class="section section--light" aria-label="Soffit FAQ">
  <div class="container-narrow">
    <div class="section-title reveal-up">
      <span class="eyebrow-label">Good Questions</span>
      <h2>What do people ask about soffit repair?</h2>
      <p>People ask about soffit repair cost, ventilation, pests, matching and whether the fascia has to come off too. A&amp;S Contracting Services gives the general answers below. For a particular house in Warrenton, Foristell or Wentzville, the answer comes from looking at the eaves and writing it into an estimate.</p>
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
<section class="section sp-gallery" aria-label="Soffit job-site photos">
  <div class="container-wide">
    <div class="section-title reveal-up">
      <span class="eyebrow-label">Job-Site Photos</span>
      <h2>What do A&amp;S eave and trim projects look like?</h2>
      <p class="answer-block">A&amp;S eave and trim projects look like the three below: a single-story house with finished soffit, an addition with dormers under construction, and a metal barn with completed trim. A&amp;S Contracting Services shot these photos on its own job sites; the captions describe the buildings and do not name locations.</p>
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
      <h2>What work sits next to soffit on an estimate?</h2>
      <p class="hero-answer">Fascia, gutters and roofing sit next to soffit on an estimate because all four meet at the roof overhang. A&amp;S Contracting Services, based in the Warren County seat of Warrenton, carries each of them on its <a href="/services/">list of contracting services</a>, and can price them as separate line items in one document.</p>
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
<section class="section section--light" id="estimate" aria-label="Request a soffit estimate">
  <div class="container">
    <div class="estimate">
      <div class="card reveal-up" style="padding: clamp(1.5rem, 4vw, 2.5rem); border:1px solid var(--color-line); border-radius: var(--radius-lg); background: var(--color-surface);">
        <span class="eyebrow-label">Written Estimate</span>
        <h2>Ready to have the eaves checked?</h2>
        <p class="lead" style="margin-bottom: 1.25rem;">Describe what you are seeing under the roofline and A&amp;S Contracting Services will set up an on-site visit within days of first contact.</p>

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
        <p>After an estimate request, A&amp;S Contracting Services replies to arrange an on-site look at the eaves, scheduled within days of first contact. The written estimate comes next, itemizing the soffit lengths to be repaired or replaced and stating a start window. There is no obligation to go ahead once you have it.</p>
        <ol class="next-steps">
          <li><strong>A&amp;S inspects the overhangs.</strong> All sides of the house, during business hours Monday through Saturday.</li>
          <li><strong>The estimate is itemized.</strong> Soffit, plus fascia or gutter work if needed, each on its own line.</li>
          <li><strong>The eaves are finished.</strong> Installation, daily cleanup and a walkthrough with you at the end.</li>
        </ol>
        <div class="nap">
          <div><?php echo icon('phone', 18); ?> <a href="tel:<?php echo $phoneTel; ?>"><?php echo $phone; ?></a></div>
          <div><?php echo icon('mail', 18); ?> <a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a></div>
          <div><?php echo icon('map-pin', 18); ?> <span><?php echo $addressCity; ?>, <?php echo $addressState; ?> <?php echo $addressZip; ?></span></div>
          <div><?php echo icon('clock', 18); ?> <span><?php echo htmlspecialchars($businessHours); ?></span></div>
        </div>
        <p style="margin-top:1rem; color: var(--color-muted); font-size: .95rem;">Soffit across <a href="/areas/warrenton/">Warrenton</a>, <a href="/areas/wright-city/">Wright City</a>, <a href="/areas/foristell/">Foristell</a>, <a href="/areas/wentzville/">Wentzville</a>, <a href="/areas/troy/">Troy</a>, <a href="/areas/jonesburg/">Jonesburg</a>, <a href="/areas/washington/">Washington</a> and everywhere within <?php echo $serviceRadius; ?> miles.</p>
      </div>
    </div>
  </div>
</section>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
