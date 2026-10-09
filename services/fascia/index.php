<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
// ─── Page-level setup ───────────────────────────────────────────────────────
$serviceSlug     = 'fascia';
$pageType        = 'service';
$currentPage     = 'services';
$svcName         = 'Fascia';
$pageTitle       = 'Fascia Board Repair & Replacement in Warrenton, MO';
$pageDescription = 'Fascia installation and rotted fascia board replacement in Warrenton, MO, with a matched finish at the roof edge. Licensed & insured. Call (636) 359-7204.';
$canonicalUrl    = $siteUrl . '/services/fascia/';

// ─── Hero + recent-work photos (image manifest) ─────────────────────────────
$heroImage    = '1779985248885-m9g42k-12-Nov_19__2025_22-17-31-YgPM';
$heroImageAlt = 'A-frame house with new shingles and scalloped trim along the roof edge';
$heroPreload  = [
    'srcset' => "/assets/images/{$heroImage}-480.avif 480w, /assets/images/{$heroImage}-960.avif 960w",
    'sizes'  => '100vw',
];
$workPhotos = [
    ['1779985494227-6oaw4y-83-Dec_05__2024_18-24-59-UUGS', 'Cream-sided home with a dark shingle roof and straight roof-edge lines'],
    ['1779985188297-sg808o-38-Jul_17__2024_23-21-26-ioE1-c1', 'Roof edge and gutter seen from the shingles, above a rural yard'],
    ['1779985246560-93e73b-1-Aug_26__2025_18-27-18-V6oZ', 'A-frame house with weathered shingles and gray panel siding before roof work'],
];

// ─── FAQ (service-specific) ─────────────────────────────────────────────────
$faqs = [
    [
        'question' => 'How much does fascia replacement cost in Warrenton, MO?',
        'answer'   => 'Fascia replacement cost depends on the length of board being replaced, the material selected, the condition of the rafter ends behind it and the scope. A&S Contracting Services publishes no prices. The roof edge is examined on site and priced in a written, itemized estimate, and the quoted price is the final price.',
    ],
    [
        'question' => 'What causes fascia boards to rot?',
        'answer'   => 'Fascia rots when water reaches the wood repeatedly, for example from a gutter that overflows or leaks behind itself, or from paint that has failed. Replacing the board without fixing the water source leaves the new board exposed to the same problem, so A&S Contracting Services checks the gutter and the roof edge at the same visit.',
    ],
    [
        'question' => 'Do the gutters have to come down to replace fascia?',
        'answer'   => 'Where a gutter is fastened to a board being replaced, yes. A&S Contracting Services also installs and repairs gutters, so the same employees remove the gutter, replace the board and hang the gutter again.',
    ],
    [
        'question' => 'Will the new fascia match the rest of my trim?',
        'answer'   => 'A&S Contracting Services matches the finish of new fascia to the house. When only some boards are replaced, the estimate says how the new sections will be finished to blend with the old.',
    ],
    [
        'question' => 'How long does fascia replacement take?',
        'answer'   => 'It depends on how many boards are involved and what is found behind them. A&S Contracting Services gives a start window and a timeline in writing with the estimate rather than quoting a standard duration.',
    ],
    [
        'question' => 'Can fascia be replaced during a roof replacement?',
        'answer'   => 'Yes. A&S Contracting Services does roofing, fascia, soffit and gutters, so rotted fascia found during a roof project can be priced and replaced as part of that project.',
    ],
];

// ─── Other-services cards (page-local copy) ─────────────────────────────────
$otherCards = [
    'soffit' => ['icon' => 'wind', 'desc' => 'Soffit installation and repair, including attic ventilation at the eaves.'],
    'gutters' => ['icon' => 'droplets', 'desc' => 'Seamless aluminum gutter systems: installation, repair, replacement and cleaning.'],
    'roofing' => ['icon' => 'home', 'desc' => 'Roof installation, repair, tear-off and full replacement, plus storm and hail damage repair.'],
];

// ─── Schema (Service + FAQPage + BreadcrumbList) ─────────────────────────────
$serviceSchema = [
    '@context'    => 'https://schema.org',
    '@type'       => 'Service',
    '@id'         => $canonicalUrl . '#service-' . $serviceSlug,
    'name'        => 'Fascia',
    'serviceType' => 'Fascia contractor',
    'description' => 'Fascia installation and replacement in Warrenton, MO and Warren County, including rotted board replacement, roof edge protection and a finish matched to the house.',
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
        <span class="eyebrow">Fascia &middot; Warrenton &amp; Warren County</span>
        <h1>Fascia in <span class="text-accent">Warrenton, MO</span>: rotted board replacement &amp; new installation</h1>
        <p class="hero-answer">A&amp;S Contracting Services replaces rotted fascia boards and installs new fascia in Warrenton, MO to protect the roof edge. A&amp;S is a licensed, fully insured general contractor, and its on-site written estimate is free.</p>
        <div class="hero-actions">
          <a href="#estimate" class="btn btn-primary btn-lg hero-form-open">Get a written fascia estimate</a>
          <a class="link-call" href="tel:<?php echo $phoneTel; ?>"><?php echo icon('phone', 18); ?> or call <?php echo $phone; ?></a>
        </div>
        <ul class="hero-chips">
          <li><?php echo icon('clipboard-list', 16); ?> Written, itemized estimate</li>
          <li><?php echo icon('home', 16); ?> Warrenton-based, 50-mile radius</li>
          <li><?php echo icon('ruler', 16); ?> Finish matched to the house</li>
        </ul>
      </div>

      <aside class="hero-form-card" id="hero-form">
        <h2>Request a fascia estimate</h2>
        <p class="hero-form-tagline">Boards tested on site. No obligation.</p>
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
        <h2>When does a fascia board need replacing?</h2>
        <p class="answer-block">A fascia board needs replacing when the wood is soft or crumbling, the paint has peeled to bare timber, or the gutter fastened to it is pulling away. Rain and freeze-thaw cycles in Warren County work on any exposed board end. A&amp;S Contracting Services probes the boards during an on-site visit and lists the affected lengths.</p>
        <p class="pull-quote">Fascia is the board along the roof edge: the gutter hangs from it and the soffit meets it.</p>
      </div>
      <div class="sp-signs reveal-right">
        <div class="sp-sign">
          <div class="sp-sign__icon"><?php echo icon('droplets', 22); ?></div>
          <h3>Soft or crumbling wood</h3>
          <p>A board that dents under a screwdriver has taken on water and lost its strength.</p>
        </div>
        <div class="sp-sign">
          <div class="sp-sign__icon"><?php echo icon('sun', 22); ?></div>
          <h3>Peeling paint</h3>
          <p>Bare patches leave the wood open to the next rain.</p>
        </div>
        <div class="sp-sign">
          <div class="sp-sign__icon"><?php echo icon('ruler', 22); ?></div>
          <h3>Gutter pulling away</h3>
          <p>Fasteners lose their grip when the board behind them rots.</p>
        </div>
        <div class="sp-sign">
          <div class="sp-sign__icon"><?php echo icon('layers', 22); ?></div>
          <h3>Staining below the roof edge</h3>
          <p>Dark marks suggest water is running behind the gutter onto the board.</p>
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
        <div class="sp-position__stat sp-position__stat--word">Roof edge<span>is what fascia protects: the rafter ends, the soffit below and the gutter mounted on it</span></div>
      </div>
      <div class="reveal-right">
        <span class="eyebrow-label">Under The Shingles</span>
        <h2>Why is fascia a job for a roofing contractor?</h2>
        <p class="answer-block">Fascia is a job for a roofing contractor because the board sits directly under the edge of the shingles and carries the gutter. A&amp;S Contracting Services, founded in Warrenton in 2023 around roofing and exterior work, does fascia with its own crew and no subcontractors, and takes down and re-hangs the <a href="/services/gutters/">gutter system on that board</a> itself.</p>
        <ul class="sp-evidence">
          <li><?php echo icon('home', 22); ?><span><b>The roof edge seen as a whole.</b> Fascia, soffit, gutter and the first course of roofing are inspected together, because a failure in one tends to show in the next.</span></li>
          <li><?php echo icon('ruler', 22); ?><span><b>Matched finish.</b> Replacement boards are finished to match the trim already on the house.</span></li>
          <li><?php echo icon('clipboard-list', 22); ?><span><b>Only the rotted lengths, if that is enough.</b> The estimate separates boards that must be replaced from boards that are sound.</span></li>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- ═══════════════════ SERVICE BREAKDOWN ═══════════════════ -->
<section class="section section--light">
  <div class="container">
    <span class="eyebrow-label">The Work</span>
    <h2>What is covered in A&amp;S fascia replacement?</h2>
    <p class="answer-block">A&amp;S fascia replacement covers removing the rotted boards, installing new fascia, matching the finish to the house and leaving the site clean. A&amp;S Contracting Services writes the estimate after seeing the roof edge in person, and the price turns on the length of board, the material, what the framing behind it looks like and the scope.</p>
    <div class="sp-included">
      <div class="reveal-up">
        <h3>Fascia work on the list</h3>
        <ul class="sp-checklist">
          <li><?php echo icon('check', 20); ?> <span>New fascia installation</span></li>
          <li><?php echo icon('check', 20); ?> <span>Replacement of existing fascia</span></li>
          <li><?php echo icon('check', 20); ?> <span>Rotted board replacement</span></li>
          <li><?php echo icon('check', 20); ?> <span>Protection of the roof edge</span></li>
          <li><?php echo icon('check', 20); ?> <span>Finish matched to existing trim</span></li>
          <li><?php echo icon('check', 20); ?> <span><a href="/services/soffit/">Soffit installation and repair</a> where the soffit meets a replaced board</span></li>
          <li><?php echo icon('check', 20); ?> <span>Final walkthrough of every replaced length</span></li>
        </ul>
      </div>
      <div class="reveal-right">
        <h3>How the fascia job is run</h3>
        <ol class="process-steps">
          <li><b>Roof-edge check</b><span>A&amp;S walks the perimeter and tests the boards, including behind the gutters where it can.</span></li>
          <li><b>Itemized quote</b><span>Board lengths, material and labor in writing, with no fees added later.</span></li>
          <li><b>Written schedule</b><span>You are given a start window and an expected duration before the job is booked.</span></li>
          <li><b>Replace and walk</b><span>The crew swaps the boards, cleans up at the end of each day and goes over the result with you.</span></li>
        </ol>
      </div>
    </div>
  </div>
</section>

<!-- ═══════════════════ COMPARISON ═══════════════════ -->
<section class="section">
  <div class="container">
    <span class="eyebrow-label">Sections Or Full Run</span>
    <h2>Should fascia be replaced in sections or along the whole run?</h2>
    <p class="answer-block">Fascia can be replaced in sections when rot is confined to a few boards, and along the whole run when damage is widespread or the finish cannot be matched. A&amp;S Contracting Services makes that call on site and prices it in writing. The table compares the two approaches; the <a href="/blog/soffit-fascia-repair-vs-replacement/">soffit and fascia repair-versus-replacement guide</a> adds detail.</p>
    <div class="sp-table-wrap reveal-up">
      <table class="sp-table">
        <caption>Sectional fascia replacement compared with a full run</caption>
        <thead>
          <tr>
            <th scope="col">Attribute</th>
            <th scope="col">Replace the rotted sections</th>
            <th scope="col">Replace the full run</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">When it fits</th>
            <td>Rot limited to a few boards</td>
            <td>Damage along most of an eave, or one new finish wanted throughout</td>
          </tr>
          <tr>
            <th scope="row">Gutter</th>
            <td>Taken down only where a board is replaced</td>
            <td>Taken down along the whole eave and re-hung</td>
          </tr>
          <tr>
            <th scope="row">Finish</th>
            <td>New boards finished to match the existing trim</td>
            <td>One consistent finish on every board</td>
          </tr>
          <tr>
            <th scope="row">What sets the price</th>
            <td>Length of board replaced and the condition of the framing behind it</td>
            <td>Total eave length, the material selected and the scope</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</section>

<!-- ═══════════════════ FAQ ═══════════════════ -->
<section class="section section--light" aria-label="Fascia FAQ">
  <div class="container-narrow">
    <div class="section-title reveal-up">
      <span class="eyebrow-label">Good Questions</span>
      <h2>What are the common questions about fascia boards?</h2>
      <p>The common questions about fascia boards concern cost, rot, gutters, finish and timing. A&amp;S Contracting Services answers them here in general terms. Fascia on a house in Warrenton, Jonesburg or Washington is quoted only after the boards have been seen in person and the affected lengths written into an estimate.</p>
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
<section class="section sp-gallery" aria-label="Fascia job-site photos">
  <div class="container-wide">
    <div class="section-title reveal-up">
      <span class="eyebrow-label">Job-Site Photos</span>
      <h2>What do roof edges on A&amp;S projects look like?</h2>
      <p class="answer-block">Roof edges on A&amp;S projects look like the three photos below. They show a newly built house with straight fascia lines under a dark shingle roof, a crew member working at a roof edge, and a home with trim matched along the roofline. A&amp;S Contracting Services took all three on its own job sites.</p>
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
      <h2>What else gets repaired when fascia is replaced?</h2>
      <p class="hero-answer">Soffit, gutters and roofing are the neighbors of a fascia board, and water that rots a board has passed at least one of them first. A&amp;S Contracting Services repairs each one, and its <a href="/services/">complete list of services in the Warrenton area</a> shows the rest of what can go on one estimate.</p>
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
<section class="section section--light" id="estimate" aria-label="Request a fascia estimate">
  <div class="container">
    <div class="estimate">
      <div class="card reveal-up" style="padding: clamp(1.5rem, 4vw, 2.5rem); border:1px solid var(--color-line); border-radius: var(--radius-lg); background: var(--color-surface);">
        <span class="eyebrow-label">Written Estimate</span>
        <h2>Ready to find out how far the rot goes?</h2>
        <p class="lead" style="margin-bottom: 1.25rem;">Send a note about the roof edge and A&amp;S Contracting Services will schedule a visit to look at the boards, within days of first contact.</p>

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
        <p>After you request an estimate, A&amp;S Contracting Services contacts you to schedule a look at the roof edge, and that visit happens within days of first contact. What follows is a written estimate listing the board lengths to be replaced, the finish, the price and a start window, with no obligation to proceed.</p>
        <ol class="next-steps">
          <li><strong>A&amp;S checks the boards.</strong> The full roof edge is tested, not just the visible damage.</li>
          <li><strong>You read the estimate.</strong> Lengths, material, finish and price in writing.</li>
          <li><strong>Boards are replaced.</strong> A&amp;S employees do the work, clean up daily and close with a walkthrough.</li>
        </ol>
        <div class="nap">
          <div><?php echo icon('phone', 18); ?> <a href="tel:<?php echo $phoneTel; ?>"><?php echo $phone; ?></a></div>
          <div><?php echo icon('mail', 18); ?> <a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a></div>
          <div><?php echo icon('map-pin', 18); ?> <span><?php echo $addressCity; ?>, <?php echo $addressState; ?> <?php echo $addressZip; ?></span></div>
          <div><?php echo icon('clock', 18); ?> <span><?php echo htmlspecialchars($businessHours); ?></span></div>
        </div>
        <p style="margin-top:1rem; color: var(--color-muted); font-size: .95rem;">Fascia across <a href="/areas/warrenton/">Warrenton</a>, <a href="/areas/wright-city/">Wright City</a>, <a href="/areas/foristell/">Foristell</a>, <a href="/areas/wentzville/">Wentzville</a>, <a href="/areas/troy/">Troy</a>, <a href="/areas/jonesburg/">Jonesburg</a>, <a href="/areas/washington/">Washington</a> and everywhere within <?php echo $serviceRadius; ?> miles.</p>
      </div>
    </div>
  </div>
</section>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
