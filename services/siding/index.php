<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
// ─── Page-level setup ───────────────────────────────────────────────────────
$serviceSlug     = 'siding';
$pageType        = 'service';
$currentPage     = 'services';
$svcName         = 'Siding';
$pageTitle       = 'Siding Installation & Repair in Warrenton, MO';
$pageDescription = 'Vinyl, fiber cement and wood siding installed and repaired in Warrenton, MO by the A&S crew. Licensed & insured. Written on-site estimate: (636) 359-7204.';
$canonicalUrl    = $siteUrl . '/services/siding/';

// ─── Hero + recent-work photos (image manifest) ─────────────────────────────
$heroImage    = '1779985053030-6d3zxh-65-Jun_03__2025_18-42-52-Tdqj';
$heroImageAlt = 'Front entry of a home with tan board siding, brick and red shutters';
$heroPreload  = [
    'srcset' => "/assets/images/{$heroImage}-480.avif 480w, /assets/images/{$heroImage}-960.avif 960w",
    'sizes'  => '100vw',
];
$workPhotos = [
    ['1779985140268-74twlt-8-Jan_17__2025_14-47-01-2JGp', 'One-story home with gray lap siding and a white door, with snow on the ground'],
    ['1779985138888-d41ths-3-Nov_20__2024_22-50-31-ZRts', 'Gray-sided house with house wrap around the porch end during siding work'],
    ['1779985138123-1k3z1f-1-Nov_20__2024_22-51-03-koQG', 'Gable end with new gray lap siding, with trim offcuts and a ladder on the lawn'],
];

// ─── FAQ (service-specific) ─────────────────────────────────────────────────
$faqs = [
    [
        'question' => 'How much does new siding cost in Warrenton, MO?',
        'answer'   => 'Siding cost depends on the square footage of wall, the material selected, the condition of the structure under the old siding and the scope. A&S Contracting Services publishes no price list. Each job is priced from an on-site measurement and a written, itemized estimate, and the quoted price is the final price.',
    ],
    [
        'question' => 'Which siding materials does A&S install?',
        'answer'   => 'A&S Contracting Services installs and repairs vinyl, fiber cement and wood siding. Vinyl needs washing but no paint, fiber cement carries a painted finish, and wood needs its paint or stain kept up. The estimate can price more than one material for the same house.',
    ],
    [
        'question' => 'Can you repair one section instead of re-siding the house?',
        'answer'   => 'Yes. Siding repair is a listed A&S service alongside full installation. Whether a repair will blend in depends on whether a matching profile and color can still be sourced, which A&S checks before quoting. If no match exists, the estimate says so and prices the alternatives.',
    ],
    [
        'question' => 'Do you handle storm and hail damage claims on siding?',
        'answer'   => 'A&S Contracting Services photographs storm and hail damage, provides a detailed itemized estimate, meets the insurance adjuster on site and helps the homeowner through the claim. When the roof and gutters were hit in the same storm, one estimate can cover all three.',
    ],
    [
        'question' => 'How long does a siding job take?',
        'answer'   => 'Siding timelines vary by square footage and home size, so A&S Contracting Services does not quote a standard number of days. The start window and the expected duration for your house are given in writing with the estimate.',
    ],
    [
        'question' => 'What does the siding estimate visit involve?',
        'answer'   => 'A&S visits the property, measures the walls, looks at the condition of the existing siding and talks through material. Visits are scheduled within days of first contact and cost nothing. The written estimate that follows carries no obligation, no hidden fees and no upselling.',
    ],
];

// ─── Other-services cards (page-local copy) ─────────────────────────────────
$otherCards = [
    'gutters' => ['icon' => 'droplets', 'desc' => 'Seamless aluminum gutter systems: installation, repair, replacement and cleaning.'],
    'soffit' => ['icon' => 'wind', 'desc' => 'Soffit installation and repair, including attic ventilation at the eaves.'],
    'exterior-work' => ['icon' => 'home', 'desc' => 'Siding, roofing and gutter work combined into one exterior renovation.'],
];

// ─── Schema (Service + FAQPage + BreadcrumbList) ─────────────────────────────
$serviceSchema = [
    '@context'    => 'https://schema.org',
    '@type'       => 'Service',
    '@id'         => $canonicalUrl . '#service-' . $serviceSlug,
    'name'        => 'Siding',
    'serviceType' => 'Siding contractor',
    'description' => 'Vinyl, fiber cement and wood siding installation and repair for homes and commercial buildings in Warrenton, MO and within 50 miles of Warren County.',
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
        <span class="eyebrow">Siding &middot; Warrenton &amp; Warren County</span>
        <h1>Siding in <span class="text-accent">Warrenton, MO</span>: installation &amp; repair in vinyl, fiber cement and wood</h1>
        <p class="hero-answer">A&amp;S Contracting Services installs and repairs vinyl, fiber cement and wood siding on homes and businesses around Warrenton, MO. The company is licensed and fully insured, and its written on-site estimate is free.</p>
        <div class="hero-actions">
          <a href="#estimate" class="btn btn-primary btn-lg hero-form-open">Get a written siding estimate</a>
          <a class="link-call" href="tel:<?php echo $phoneTel; ?>"><?php echo icon('phone', 18); ?> or call <?php echo $phone; ?></a>
        </div>
        <ul class="hero-chips">
          <li><?php echo icon('clipboard-list', 16); ?> Written, itemized estimate</li>
          <li><?php echo icon('home', 16); ?> Warrenton-based, 50-mile radius</li>
          <li><?php echo icon('check-circle', 16); ?> Daily cleanup, final walkthrough</li>
        </ul>
      </div>

      <aside class="hero-form-card" id="hero-form">
        <h2>Request a siding estimate</h2>
        <p class="hero-form-tagline">Measured at the house. No obligation.</p>
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
        <h2>How can you tell siding on a Warren County house is failing?</h2>
        <p class="answer-block">Siding is failing when panels crack, warp or pull loose, when paint on wood boards peels down to bare grain, or when a wall feels soft behind the cladding. Warren County gets freeze-thaw winters and humid summers, and both open up joints over time. A&amp;S Contracting Services inspects each wall in person before recommending repair or replacement.</p>
        <p class="pull-quote">Siding is the first layer between the weather and the wall framing, so a gap in it is worth closing early.</p>
      </div>
      <div class="sp-signs reveal-right">
        <div class="sp-sign">
          <div class="sp-sign__icon"><?php echo icon('layers', 22); ?></div>
          <h3>Cracked or warped panels</h3>
          <p>Splits and buckles give wind-driven rain a path behind the wall surface.</p>
        </div>
        <div class="sp-sign">
          <div class="sp-sign__icon"><?php echo icon('sun', 22); ?></div>
          <h3>Peeling paint on wood</h3>
          <p>Bare wood takes on water each time it rains and dries unevenly.</p>
        </div>
        <div class="sp-sign">
          <div class="sp-sign__icon"><?php echo icon('droplets', 22); ?></div>
          <h3>Soft spots</h3>
          <p>A wall that gives under hand pressure usually has moisture behind the cladding.</p>
        </div>
        <div class="sp-sign">
          <div class="sp-sign__icon"><?php echo icon('wind', 22); ?></div>
          <h3>Loose or rattling pieces</h3>
          <p>Panels that move in wind have lost their fastening and can come off in the next storm.</p>
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
        <div class="sp-position__stat">3<span>siding materials on the A&amp;S list: vinyl, fiber cement and wood</span></div>
      </div>
      <div class="reveal-right">
        <span class="eyebrow-label">Behind The Panels</span>
        <h2>Why does it matter who installs the siding?</h2>
        <p class="answer-block">Who installs the siding matters because the wall behind it is only visible once the old cladding is off. A&amp;S Contracting Services uses its own employees, never subcontractors, so the installer who uncovers a damaged section is also the person who agrees the fix with the homeowner before new siding covers the spot.</p>
        <ul class="sp-evidence">
          <li><?php echo icon('home', 22); ?><span><b>Siding tied to the trades around it.</b> A&amp;S also handles <a href="/services/windows-doors/">replacement windows, patio doors and entry doors</a> and installs gutters, so the trim lines at each opening are set by one company.</span></li>
          <li><?php echo icon('clipboard-list', 22); ?><span><b>Scope on paper.</b> The estimate names the material, the walls included and the start window before a panel is ordered.</span></li>
          <li><?php echo icon('check-circle', 22); ?><span><b>A site you can live next to.</b> Old material is cleared daily, and the job closes with a walkthrough of every wall.</span></li>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- ═══════════════════ SERVICE BREAKDOWN ═══════════════════ -->
<section class="section section--light">
  <div class="container">
    <span class="eyebrow-label">The Work</span>
    <h2>What is included in an A&amp;S siding project?</h2>
    <p class="answer-block">An A&amp;S siding project includes the installation or repair itself, the material you select, daily site cleanup and a final walkthrough. A&amp;S Contracting Services measures the house on site, and the written price reflects wall square footage, the material, the condition of the structure underneath and whether the job is one wall or the whole exterior.</p>
    <div class="sp-included">
      <div class="reveal-up">
        <h3>What can be written into the scope</h3>
        <ul class="sp-checklist">
          <li><?php echo icon('check', 20); ?> <span>New siding installation on houses and commercial buildings</span></li>
          <li><?php echo icon('check', 20); ?> <span>Repair of damaged sections on an existing wall</span></li>
          <li><?php echo icon('check', 20); ?> <span>Vinyl siding</span></li>
          <li><?php echo icon('check', 20); ?> <span>Fiber cement siding</span></li>
          <li><?php echo icon('check', 20); ?> <span>Wood siding</span></li>
          <li><?php echo icon('check', 20); ?> <span>Storm and hail damage photographed for an insurer</span></li>
          <li><?php echo icon('check', 20); ?> <span>Siding combined with roofing and gutters as a <a href="/services/exterior-work/">full exterior renovation</a></span></li>
        </ul>
      </div>
      <div class="reveal-right">
        <h3>From measurement to walkthrough</h3>
        <ol class="process-steps">
          <li><b>Wall measurement</b><span>A&amp;S measures the exterior at the house; no price is given from a phone description.</span></li>
          <li><b>Itemized estimate</b><span>Material and labor are listed line by line, and the figure quoted is the figure billed.</span></li>
          <li><b>Start window</b><span>A written start window comes with the estimate. Siding timelines vary by square footage and home size.</span></li>
          <li><b>Installation and walkthrough</b><span>A&amp;S employees hang the siding, clear debris daily and walk the finished walls with you.</span></li>
        </ol>
      </div>
    </div>
  </div>
</section>

<!-- ═══════════════════ COMPARISON ═══════════════════ -->
<section class="section">
  <div class="container">
    <span class="eyebrow-label">Materials</span>
    <h2>How do vinyl, fiber cement and wood siding compare?</h2>
    <p class="answer-block">Vinyl, fiber cement and wood siding compare mainly on upkeep and on how each one is repaired. A&amp;S Contracting Services installs and repairs all three, and can price the options side by side in one written estimate when a homeowner is undecided. The table below sets out the general differences between the materials.</p>
    <div class="sp-table-wrap reveal-up">
      <table class="sp-table">
        <caption>Siding materials installed and repaired by A&amp;S Contracting Services</caption>
        <thead>
          <tr>
            <th scope="col">Attribute</th>
            <th scope="col">Vinyl</th>
            <th scope="col">Fiber cement</th>
            <th scope="col">Wood</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">What it is</th>
            <td>Formed PVC panels</td>
            <td>Boards made from cement, sand and cellulose fiber</td>
            <td>Sawn boards, shingles or panels</td>
          </tr>
          <tr>
            <th scope="row">Upkeep</th>
            <td>Washing; no painting</td>
            <td>A painted finish that is repainted over time</td>
            <td>Paint or stain that has to be kept up</td>
          </tr>
          <tr>
            <th scope="row">How damage is repaired</th>
            <td>Damaged panels are unlocked and replaced</td>
            <td>Damaged boards are cut out and replaced</td>
            <td>Rotted or split boards are replaced and refinished</td>
          </tr>
          <tr>
            <th scope="row">A&amp;S services</th>
            <td>Installation and repair</td>
            <td>Installation and repair</td>
            <td>Installation and repair</td>
          </tr>
        </tbody>
      </table>
    </div>
    <p class="sp-table-note">Not sure the wall needs replacing at all? The A&amp;S post on <a href="/blog/when-to-replace-siding-missouri/">warning signs that siding is due for replacement</a> lists what to check first.</p>
  </div>
</section>

<!-- ═══════════════════ BEFORE / AFTER (real pair from A&S job photos) ═══════════════════ -->
<section class="section section--light" aria-label="Siding before and after">
  <div class="container-narrow">
    <div class="section-title reveal-up">
      <span class="eyebrow-label">Before &amp; After</span>
      <h2>What does a wall look like before and after A&amp;S re-sides it?</h2>
      <p class="answer-block">A wall re-sided by A&amp;S Contracting Services is stripped to the house wrap, checked, then closed in with new siding and trim. The pair below shows one bay window wall on an A&amp;S job: open to the wrap in March 2025 and finished in tan lap siding with white trim that April.</p>
    </div>
    <?php
    require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/before-after.php';
    echo p1_before_after(
        '1779985048829-yoqujz-14-Mar_11__2025_23-54-47-qHie',
        '1779985051813-6hdkvp-61-Apr_25__2025_19-50-31-B2oU-c1',
        'Bay window wall stripped to house wrap before new siding',
        'The same bay window wall with new tan siding and white trim',
        ['caption' => 'Bay window wall re-sided. Before: March 11, 2025. After: April 25, 2025.', 'id' => 'ba-siding-1']
    );
    ?>
  </div>
</section>

<!-- ═══════════════════ FAQ ═══════════════════ -->
<section class="section section--light" aria-label="Siding FAQ">
  <div class="container-narrow">
    <div class="section-title reveal-up">
      <span class="eyebrow-label">Good Questions</span>
      <h2>Which siding questions does A&amp;S hear most?</h2>
      <p>The siding questions A&amp;S hears most are about cost, material choice, repairing one section, storm claims and scheduling. A&amp;S Contracting Services answers them below in general terms; the specific answer for a given Warrenton, Wright City or Troy house comes from measuring it and writing the estimate.</p>
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
<section class="section sp-gallery" aria-label="Siding job-site photos">
  <div class="container-wide">
    <div class="section-title reveal-up">
      <span class="eyebrow-label">Job-Site Photos</span>
      <h2>What do A&amp;S siding jobs look like on site?</h2>
      <p class="answer-block">A&amp;S siding jobs look like the three photos below: a finished one-story house in gray lap siding, a gray house with house wrap still showing at the porch end, and a gable end just closed in with new lap siding. A&amp;S Contracting Services took each picture on its own job sites, and the captions say only what is visible.</p>
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
      <h2>Which other exterior trades can go on the same siding estimate?</h2>
      <p class="hero-answer">Gutters, soffit and wider exterior work can go on the same siding estimate, because A&amp;S Contracting Services is a general contractor and not a siding-only installer. All ten trades are set out on the <a href="/services/">A&amp;S services overview</a>; the three below each share an edge with the siding on a house.</p>
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
<section class="section section--light" id="estimate" aria-label="Request a siding estimate">
  <div class="container">
    <div class="estimate">
      <div class="card reveal-up" style="padding: clamp(1.5rem, 4vw, 2.5rem); border:1px solid var(--color-line); border-radius: var(--radius-lg); background: var(--color-surface);">
        <span class="eyebrow-label">Written Estimate</span>
        <h2>Ready to have your siding measured?</h2>
        <p class="lead" style="margin-bottom: 1.25rem;">Send a few details and A&amp;S Contracting Services will arrange an on-site measurement; visits are scheduled within days of first contact.</p>

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
        <p>Once you request an estimate, A&amp;S Contracting Services calls or emails to arrange a time to measure the house. Visits are booked within days of first contact, and the estimate arrives in writing with material, price and a start window listed, so there is nothing to agree to until you have read it.</p>
        <ol class="next-steps">
          <li><strong>A&amp;S measures the walls.</strong> A visit to the property, Monday through Saturday.</li>
          <li><strong>The estimate arrives in writing.</strong> Itemized by material and labor, with no hidden fees.</li>
          <li><strong>Installation, cleanup, walkthrough.</strong> A&amp;S employees install the siding, tidy the site daily and go over the result with you.</li>
        </ol>
        <div class="nap">
          <div><?php echo icon('phone', 18); ?> <a href="tel:<?php echo $phoneTel; ?>"><?php echo $phone; ?></a></div>
          <div><?php echo icon('mail', 18); ?> <a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a></div>
          <div><?php echo icon('map-pin', 18); ?> <span><?php echo $addressCity; ?>, <?php echo $addressState; ?> <?php echo $addressZip; ?></span></div>
          <div><?php echo icon('clock', 18); ?> <span><?php echo htmlspecialchars($businessHours); ?></span></div>
        </div>
        <p style="margin-top:1rem; color: var(--color-muted); font-size: .95rem;">Siding across <a href="/areas/warrenton/">Warrenton</a>, <a href="/areas/wright-city/">Wright City</a>, <a href="/areas/foristell/">Foristell</a>, <a href="/areas/wentzville/">Wentzville</a>, <a href="/areas/troy/">Troy</a>, <a href="/areas/jonesburg/">Jonesburg</a>, <a href="/areas/washington/">Washington</a> and everywhere within <?php echo $serviceRadius; ?> miles.</p>
      </div>
    </div>
  </div>
</section>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
