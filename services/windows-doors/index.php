<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
// ─── Page-level setup ───────────────────────────────────────────────────────
$serviceSlug     = 'windows-doors';
$pageType        = 'service';
$currentPage     = 'services';
$svcName         = 'Windows & Doors';
$pageTitle       = 'Window & Door Replacement in Warrenton, MO';
$pageDescription = 'Window and door replacement in Warrenton, MO: energy-efficient windows, patio and entry doors, weather sealing. Licensed & insured. Call (636) 359-7204.';
$canonicalUrl    = $siteUrl . '/services/windows-doors/';

// ─── Hero + recent-work photos (image manifest) ─────────────────────────────
$heroImage    = '1779984949713-arsxr0-25-Aug_06__2025_14-36-12-a7GW';
$heroImageAlt = 'A-frame house with weathered shingles and a gray-sided dormer before roof work';
$heroPreload  = [
    'srcset' => "/assets/images/{$heroImage}-480.avif 480w, /assets/images/{$heroImage}-960.avif 960w",
    'sizes'  => '100vw',
];
$workPhotos = [
    ['1779984869042-6cwzvd-59-Aug_09__2025_12-39-54-JQC9', 'Two-story wall with house wrap and partial blue siding, with ladders set up'],
    ['1779984864659-a47kou-52-Aug_08__2025_00-31-27-YHMr', 'Crew working on a deck beside a blue-sided house with house wrap'],
    ['1779985123343-qeqtag-24-Mar_19__2026_16-22-42-uQvT', 'Roof decking with boards removed to expose the rafters'],
];

// ─── FAQ (service-specific) ─────────────────────────────────────────────────
$faqs = [
    [
        'question' => 'How much do replacement windows cost in Warrenton?',
        'answer'   => 'A&S Contracting Services does not publish window prices. Cost depends on how many openings are involved, the units selected, the condition of the existing frames and the scope of any siding or trim repair. A&S measures on site and provides a free written, itemized estimate; the quoted price is the final price.',
    ],
    [
        'question' => 'Does A&S replace doors as well as windows?',
        'answer'   => 'Yes. A&S Contracting Services replaces patio doors and entry doors along with windows, and weather-seals each one. Doors and windows can be combined on one written estimate.',
    ],
    [
        'question' => 'Who repairs the siding and trim around a new window?',
        'answer'   => 'A&S Contracting Services does. The company installs and repairs vinyl, fiber cement and wood siding and also does interior drywall, trim and painting, so the wall around a new window or door is finished by A&S on both faces. It does not use subcontractors.',
    ],
    [
        'question' => 'How long does window replacement take?',
        'answer'   => 'A&S Contracting Services gives the timeline for a window or door project in writing with the estimate, along with a start window. Duration depends on the number of openings and on whether frames, siding or trim need repair once the old units are out.',
    ],
    [
        'question' => 'What makes a replacement window energy efficient?',
        'answer'   => 'A&S Contracting Services installs energy-efficient replacement windows, and two things decide how a window performs: the glass unit itself and how well the frame is sealed to the wall. The estimate covers the choice of unit; weather sealing at the opening is part of every installation.',
    ],
    [
        'question' => 'Does A&S install windows and doors in commercial buildings?',
        'answer'   => 'Yes. A&S Contracting Services works for residential and commercial clients within 50 miles of Warrenton, including Jonesburg, Wright City, Foristell, Wentzville, Troy and Washington.',
    ],
];

// ─── Schema (Service + FAQPage + BreadcrumbList) ─────────────────────────────
$serviceSchema = [
    '@context'    => 'https://schema.org',
    '@type'       => 'Service',
    '@id'         => $canonicalUrl . '#service-' . $serviceSlug,
    'name'        => 'Windows & Doors',
    'serviceType' => 'Window installation',
    'description' => 'Energy-efficient replacement windows, patio doors, entry doors and weather sealing for residential and commercial clients within 50 miles of Warrenton, MO.',
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
        <span class="eyebrow">Windows &amp; Doors &middot; Warrenton &amp; Warren County</span>
        <h1>Windows &amp; Doors in <span class="text-accent">Warrenton, MO</span> — energy-efficient replacements</h1>
        <p class="hero-answer">A&amp;S Contracting Services, a licensed and fully insured Missouri general contractor, replaces windows, patio doors and entry doors and weather-seals the openings for homes and businesses within 50 miles of Warrenton.</p>
        <div class="hero-actions">
          <a href="#estimate" class="btn btn-primary btn-lg hero-form-open">Get a written window &amp; door estimate</a>
          <a class="link-call" href="tel:<?php echo $phoneTel; ?>"><?php echo icon('phone', 18); ?> or call <?php echo $phone; ?></a>
        </div>
        <ul class="hero-chips">
          <li><?php echo icon('sun', 16); ?> Energy-efficient replacement windows</li>
          <li><?php echo icon('clipboard-list', 16); ?> Itemized written estimate</li>
          <li><?php echo icon('clock', 16); ?> Mon–Fri 7am–6pm · Sat 8am–3pm</li>
        </ul>
      </div>

      <aside class="hero-form-card" id="hero-form">
        <h2>Request a window and door estimate</h2>
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
        <h2>How do you know it&rsquo;s time to replace your windows or doors?</h2>
        <p class="answer-block">It is time to replace a window or door when it no longer seals, opens properly or keeps water out. Drafts around the frame, fogging between panes, soft wood at the sill and a door that sticks or shows daylight at the edges are the signs A&amp;S Contracting Services checks on an estimate visit.</p>
        <p class="pull-quote">Warrenton averages 41.47 inches of precipitation a year. Every opening in a wall has to shed its share.</p>
      </div>
      <div class="sp-signs reveal-right">
        <div class="sp-sign">
          <div class="sp-sign__icon"><?php echo icon('wind', 22); ?></div>
          <h3>Drafts at the frame</h3>
          <p>Moving air around a closed window or door means the seal between the unit and the wall has failed.</p>
        </div>
        <div class="sp-sign">
          <div class="sp-sign__icon"><?php echo icon('droplets', 22); ?></div>
          <h3>Fog between panes</h3>
          <p>Moisture trapped inside double-pane glass shows the seal of the glass unit has broken.</p>
        </div>
        <div class="sp-sign">
          <div class="sp-sign__icon"><?php echo icon('layers', 22); ?></div>
          <h3>Soft or stained sills</h3>
          <p>Rot or staining below an opening points to water getting past the frame.</p>
        </div>
        <div class="sp-sign">
          <div class="sp-sign__icon"><?php echo icon('wrench', 22); ?></div>
          <h3>Sticking or dragging</h3>
          <p>A sash that will not stay up or a door that rubs its frame no longer closes tight.</p>
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
        <div class="sp-position__stat">1<span>crew sets the unit, seals the opening and finishes the siding and interior trim around it</span></div>
      </div>
      <div class="reveal-right">
        <span class="eyebrow-label">Both Sides Of The Wall</span>
        <h2>Why have a general contractor replace your windows and doors?</h2>
        <p class="answer-block">A general contractor can replace a window or door and also repair what surrounds it. Every opening passes through siding outside and drywall and trim inside. A&amp;S Contracting Services does all three trades with its own crew, so rot found behind an old frame is dealt with in the same job.</p>
        <ul class="sp-evidence">
          <li><?php echo icon('umbrella', 22); ?><span><b>Sealed against weather.</b> Each new window and door is weather-sealed where it meets the wall, through Missouri freeze-thaw winters and humid summers.</span></li>
          <li><?php echo icon('layers', 22); ?><span><b>Cladding finished around the opening.</b> A&amp;S handles <a href="/services/siding/">vinyl, fiber cement and wood siding repair</a>, so the wall around a new unit is closed up by the installer.</span></li>
          <li><?php echo icon('pencil-ruler', 22); ?><span><b>Interior made good.</b> Patches, casing and paint around the opening can be added to the same estimate as <a href="/services/full-scale-interior-work/">interior drywall, trim and painting</a>.</span></li>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- ═══════════════════ SERVICE BREAKDOWN ═══════════════════ -->
<section class="section section--light">
  <div class="container">
    <span class="eyebrow-label">The Work</span>
    <h2>What is included in an A&amp;S window and door replacement?</h2>
    <p class="answer-block">An A&amp;S window and door replacement includes the on-site measure, removal of the old unit, installation of the new one and weather sealing. It is one of the <a href="/services/">exterior and interior services A&amp;S Contracting Services offers</a> around Warren County, and the written estimate is itemized so the window and door work can be read line by line.</p>
    <div class="sp-included">
      <div class="reveal-up">
        <h3>Included in the scope</h3>
        <ul class="sp-checklist">
          <li><?php echo icon('check', 20); ?> Energy-efficient replacement windows</li>
          <li><?php echo icon('check', 20); ?> Patio doors</li>
          <li><?php echo icon('check', 20); ?> Entry doors</li>
          <li><?php echo icon('check', 20); ?> Weather sealing at every opening</li>
          <li><?php echo icon('check', 20); ?> Siding and trim repair around the frame, on the same estimate</li>
          <li><?php echo icon('check', 20); ?> Site cleaned daily</li>
          <li><?php echo icon('check', 20); ?> Final walkthrough of every opening</li>
        </ul>
      </div>
      <div class="reveal-right">
        <h3>How the project runs</h3>
        <ol class="process-steps">
          <li><b>Measure on site</b><span>A&amp;S measures each opening and looks at the sill, the frame and the siding around it.</span></li>
          <li><b>Written estimate</b><span>Itemized, with no hidden fees. The quoted price is the final price.</span></li>
          <li><b>Dates in writing</b><span>The start window and timeline are confirmed before the crew arrives.</span></li>
          <li><b>Replace and seal</b><span>Old units come out, new ones are set and weather-sealed, and the site is cleaned each day.</span></li>
          <li><b>Final walkthrough</b><span>You go round every new window and door with the crew.</span></li>
        </ol>
      </div>
    </div>
  </div>
</section>

<!-- ═══════════════════ COMPARISON ═══════════════════ -->
<section class="section">
  <div class="container">
    <span class="eyebrow-label">Opening By Opening</span>
    <h2>How do window, patio door and entry door replacements compare?</h2>
    <p class="answer-block">Window, patio door and entry door replacements compare differently on what has to be checked before a price is given. A&amp;S Contracting Services looks at each opening in person, because cost depends on the materials selected, the condition of the existing structure and scope. The table lists what the estimate visit covers for each.</p>
    <div class="sp-table-wrap reveal-up">
      <table class="sp-table">
        <caption>What A&amp;S Contracting Services checks for each type of opening</caption>
        <thead>
          <tr>
            <th scope="col">Opening</th>
            <th scope="col">Checked on site</th>
            <th scope="col">What drives the cost</th>
            <th scope="col">Related work A&amp;S can add</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">Replacement windows</th>
            <td>Opening size, sill and frame condition, signs of water</td>
            <td>Number of windows and the units selected</td>
            <td>Siding and interior trim repair</td>
          </tr>
          <tr>
            <th scope="row">Patio doors</th>
            <td>Opening width, threshold and the floor it meets</td>
            <td>Door selected and the condition of the surrounding structure</td>
            <td>Flooring and drywall at the threshold</td>
          </tr>
          <tr>
            <th scope="row">Entry doors</th>
            <td>Frame, threshold and weather seal</td>
            <td>Door selected and any frame repair</td>
            <td>Interior trim and painting</td>
          </tr>
        </tbody>
      </table>
    </div>
    <p class="sp-after">For the factors behind window pricing in this state, see the A&amp;S <a href="/blog/window-replacement-cost-missouri/">guide to window replacement cost in Missouri</a>.</p>
  </div>
</section>

<!-- ═══════════════════ FAQ ═══════════════════ -->
<section class="section section--light" aria-label="Window and door questions before you book a measure">
  <div class="container-narrow">
    <div class="section-title reveal-up">
      <span class="eyebrow-label">Good Questions</span>
      <h2>Window and door questions before you book a measure</h2>
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
      <h2>What do A&amp;S window and door job sites look like?</h2>
      <p class="answer-block">These photos are from A&amp;S Contracting Services job sites where windows and doors were part of the work. They show openings at three stages: framed and empty, wrapped ahead of installation, and with the crew setting units. Captions describe what is visible and nothing more.</p>
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
      <h2>Which A&amp;S services go with new windows and doors?</h2>
      <p class="hero-answer">New windows and doors are often replaced alongside the cladding and roofline around them. A&amp;S Contracting Services offers siding, full exterior renovation and roofing as separate services, and all of them can be looked at on the same visit and listed on one itemized estimate.</p>
    </div>
    <div class="sp-other">
      <?php
      $otherSlugs = ['siding', 'exterior-work', 'roofing'];
      $otherDesc  = [
          'siding' => 'Vinyl, fiber cement and wood siding, installed and repaired.',
          'exterior-work' => 'Roofing, siding and gutters integrated into one exterior renovation.',
          'roofing' => 'Roof installation, repair, tear-off and replacement, plus storm and hail damage repair.',
      ];
      $tintCycle  = [1, 2, 3];
      $otherIcons = ['siding' => 'layers', 'exterior-work' => 'hammer', 'roofing' => 'home'];
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
<section class="section section--light" id="estimate" aria-label="Request a window and door estimate">
  <div class="container">
    <div class="estimate">
      <div class="card reveal-up" style="padding: clamp(1.5rem, 4vw, 2.5rem); border:1px solid var(--color-line); border-radius: var(--radius-lg); background: var(--color-surface);">
        <span class="eyebrow-label">Written Estimate</span>
        <h2>Ready to close the drafts for good?</h2>
        <p class="lead" style="margin-bottom: 1.25rem;">Tell A&amp;S Contracting Services how many openings you have and what is wrong with them. On-site measures are scheduled within days of first contact.</p>

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
        <h2>What happens after you <span class="text-accent">request an estimate</span>?</h2>
        <p class="answer-block">After you request an estimate, A&amp;S Contracting Services contacts you to book an on-site measure of the windows and doors involved. Visits are scheduled within days of first contact. The estimate is then written up and itemized at no charge, and you decide whether to go ahead.</p>
        <ol class="next-steps">
          <li><strong>The openings are measured.</strong> A&amp;S checks each window and door in person, including frames and sills.</li>
          <li><strong>The estimate arrives in writing.</strong> It is itemized, and the quoted price is the final price.</li>
          <li><strong>Dates are set.</strong> A start window and timeline are confirmed in writing before the crew arrives.</li>
        </ol>
        <div class="nap">
          <div><?php echo icon('phone', 18); ?> <a href="tel:<?php echo $phoneTel; ?>"><?php echo $phone; ?></a></div>
          <div><?php echo icon('mail', 18); ?> <a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a></div>
          <div><?php echo icon('map-pin', 18); ?> <span><?php echo $addressCity; ?>, <?php echo $addressState; ?> <?php echo $addressZip; ?></span></div>
          <div><?php echo icon('clock', 18); ?> <span><?php echo htmlspecialchars($businessHours); ?></span></div>
        </div>
        <p style="margin-top:1rem; color: var(--color-muted); font-size: .95rem;">Windows and doors across <a href="/areas/warrenton/">Warrenton</a>, <a href="/areas/wright-city/">Wright City</a>, <a href="/areas/foristell/">Foristell</a>, <a href="/areas/wentzville/">Wentzville</a>, <a href="/areas/troy/">Troy</a>, <a href="/areas/jonesburg/">Jonesburg</a>, <a href="/areas/washington/">Washington</a> and everywhere within <?php echo $serviceRadius; ?> miles.</p>
      </div>
    </div>
  </div>
</section>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
