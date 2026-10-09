<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
// ─── Page-level setup ───────────────────────────────────────────────────────
$serviceSlug     = 'full-scale-interior-work';
$pageType        = 'service';
$currentPage     = 'services';
$svcName         = 'Full Scale Interior Work';
$pageTitle       = 'Interior Remodeling Contractor in Warrenton, MO';
$pageDescription = 'Interior remodeling in Warrenton, MO: drywall, flooring, painting, trim, room additions and full remodels by one crew. Licensed & insured. (636) 359-7204.';
$canonicalUrl    = $siteUrl . '/services/full-scale-interior-work/';

// ─── Hero + recent-work photos (image manifest) ─────────────────────────────
$heroImage    = '1779985458116-w0hrmz-55-Oct_14__2024_15-18-30-xZXr';
$heroImageAlt = 'Bare roof decking with chalk lines during a tear-off on a rural property';
$heroPreload  = [
    'srcset' => "/assets/images/{$heroImage}-480.avif 480w, /assets/images/{$heroImage}-960.avif 960w",
    'sizes'  => '100vw',
];
$workPhotos = [
    ['1779985125335-8uyfgw-27-Mar_19__2026_16-26-33-BBWG', 'Roof decking with shingle bundles staged at the ridge'],
    ['1779985139581-wvg3mc-4-Jan_16__2025_20-17-47-EJSE', 'Small tan-sided house with a covered entry porch'],
    ['1779985486320-tdgb3u-82-Dec_05__2024_18-26-12-Ea5d', 'Red metal building with a white roof in a rural setting'],
];

// ─── FAQ (service-specific) ─────────────────────────────────────────────────
$faqs = [
    [
        'question' => 'How much does an interior remodel cost in Warrenton?',
        'answer'   => 'A&S Contracting Services prices interior remodels from an on-site visit, because cost depends on square footage, the materials selected, the condition of the existing structure and scope. The written estimate is itemized and free. It carries no hidden fees or upselling, and the quoted price is the final price.',
    ],
    [
        'question' => 'How long does an interior remodel take?',
        'answer'   => 'A&S Contracting Services does not quote a standard duration for interior work, because the timeline depends on scope. A paint-and-trim job and a room addition are different projects. The start window and the timeline are written into the estimate before any work begins.',
    ],
    [
        'question' => 'Does a room addition include the roof and siding?',
        'answer'   => 'Yes. A&S Contracting Services was founded in 2023 with a focus on roofing and exterior work, and still does both. On a room addition the roofing, siding and gutters over the new space are done by A&S along with the drywall, flooring, paint and trim inside it.',
    ],
    [
        'question' => 'What does "the quoted price is the final price" mean?',
        'answer'   => 'A&S Contracting Services means that the figure on the written estimate is what is billed for the scope the estimate describes. Estimates are itemized, and A&S does not add hidden fees or upsell during the job.',
    ],
    [
        'question' => 'Will the house be kept clean during the remodel?',
        'answer'   => 'A&S Contracting Services cleans the job site every working day. Interior work takes place in rooms that are lived in, so daily cleanup is part of every project, and the remodel ends with a final walkthrough of the finished rooms.',
    ],
    [
        'question' => 'Does A&S remodel commercial interiors?',
        'answer'   => 'Yes. A&S Contracting Services takes residential and commercial clients within 50 miles of Warrenton, including Wright City, Foristell, Wentzville, Troy, Jonesburg and Washington. Commercial interior work is estimated the same way: on site, in writing and itemized.',
    ],
];

// ─── Schema (Service + FAQPage + BreadcrumbList) ─────────────────────────────
$serviceSchema = [
    '@context'    => 'https://schema.org',
    '@type'       => 'Service',
    '@id'         => $canonicalUrl . '#service-' . $serviceSlug,
    'name'        => 'Full Scale Interior Work',
    'serviceType' => 'Interior remodeling',
    'description' => 'Interior renovation covering drywall, flooring, painting, trim, custom finishes, room additions and full interior remodels within 50 miles of Warrenton, MO.',
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
        <span class="eyebrow">Interior Remodeling &middot; Warrenton &amp; Warren County</span>
        <h1>Full Scale Interior Work in <span class="text-accent">Warrenton, MO</span> — one crew, every stage</h1>
        <p class="hero-answer">A&amp;S Contracting Services, a licensed and fully insured Missouri general contractor, remodels interiors within 50 miles of Warrenton: drywall, flooring, painting, trim, custom finishes, room additions and full remodels.</p>
        <div class="hero-actions">
          <a href="#estimate" class="btn btn-primary btn-lg hero-form-open">Get a written remodel estimate</a>
          <a class="link-call" href="tel:<?php echo $phoneTel; ?>"><?php echo icon('phone', 18); ?> or call <?php echo $phone; ?></a>
        </div>
        <ul class="hero-chips">
          <li><?php echo icon('building', 16); ?> Residential &amp; commercial</li>
          <li><?php echo icon('calendar-check', 16); ?> Start window given in writing</li>
          <li><?php echo icon('check-circle', 16); ?> Final walkthrough on every project</li>
        </ul>
      </div>

      <aside class="hero-form-card" id="hero-form">
        <h2>Request an interior remodel estimate</h2>
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
        <h2>When does a room need a full interior renovation instead of one repair?</h2>
        <p class="answer-block">A room needs a full interior renovation when more than one finish has to change at once. New flooring disturbs the trim, moved walls mean new drywall, and fresh drywall needs paint, so the trades depend on each other. A&amp;S Contracting Services scopes those rooms as one project with one schedule, not as separate visits.</p>
        <p class="pull-quote">Flooring, trim, drywall and paint all meet at the same corner of the room.</p>
      </div>
      <div class="sp-signs reveal-right">
        <div class="sp-sign">
          <div class="sp-sign__icon"><?php echo icon('layers', 22); ?></div>
          <h3>Several finishes at once</h3>
          <p>Floors, walls and trim are all due, and doing one would mean redoing the next.</p>
        </div>
        <div class="sp-sign">
          <div class="sp-sign__icon"><?php echo icon('ruler', 22); ?></div>
          <h3>The layout has to change</h3>
          <p>A wall is moving or a room is being divided, which means new board and new trim.</p>
        </div>
        <div class="sp-sign">
          <div class="sp-sign__icon"><?php echo icon('house', 22); ?></div>
          <h3>The house needs more space</h3>
          <p>A room addition ties a new roof, siding and interior into the existing building.</p>
        </div>
        <div class="sp-sign">
          <div class="sp-sign__icon"><?php echo icon('droplets', 22); ?></div>
          <h3>Damage crossed trades</h3>
          <p>A leak reached the ceiling, the wall and the floor, so the repair is no longer a single trade.</p>
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
        <div class="sp-position__stat">0<span>subcontractors on an A&amp;S interior remodel, from the first sheet of board to the last piece of trim</span></div>
      </div>
      <div class="reveal-right">
        <span class="eyebrow-label">How It Is Run</span>
        <h2>Why does one crew matter on an interior remodel?</h2>
        <p class="answer-block">One crew matters on an interior remodel because every trade leaves the surface the next one starts from. A&amp;S Contracting Services self-performs the drywall, paint, trim and flooring, so the order of work is set by one schedule. A room addition also needs a roof and siding, which the company began with in 2023.</p>
        <ul class="sp-evidence">
          <li><?php echo icon('calendar-check', 22); ?><span><b>One written schedule.</b> The start window and timeline cover the whole interior scope, so no trade waits on another company's calendar.</span></li>
          <li><?php echo icon('house', 22); ?><span><b>Additions closed in by the same company.</b> A&amp;S was founded on roofing and exterior work, so the shell of a new room and its interior finish sit in one estimate.</span></li>
          <li><?php echo icon('check-circle', 22); ?><span><b>Cleaned daily, walked at the end.</b> The site is cleaned every working day and the project closes with a final walkthrough of each room.</span></li>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- ═══════════════════ SERVICE BREAKDOWN ═══════════════════ -->
<section class="section section--light">
  <div class="container">
    <span class="eyebrow-label">The Work</span>
    <h2>What does full scale interior work from A&amp;S include?</h2>
    <p class="answer-block">Full scale interior work from A&amp;S Contracting Services includes drywall, flooring, painting, trim, custom finishes, room additions and full interior remodels. It is the broadest of the <a href="/services/">ten services A&amp;S runs out of Warrenton</a>, and it is quoted as one itemized estimate, so each interior trade appears on its own line.</p>
    <div class="sp-included">
      <div class="reveal-up">
        <h3>Included in the scope</h3>
        <ul class="sp-checklist">
          <li><?php echo icon('check', 20); ?> Drywall hung, finished and repaired</li>
          <li><?php echo icon('check', 20); ?> Flooring</li>
          <li><?php echo icon('check', 20); ?> Interior painting</li>
          <li><?php echo icon('check', 20); ?> Trim and custom finishes</li>
          <li><?php echo icon('check', 20); ?> Room additions</li>
          <li><?php echo icon('check', 20); ?> Full interior remodels</li>
          <li><?php echo icon('check', 20); ?> Daily cleanup and a final walkthrough</li>
        </ul>
      </div>
      <div class="reveal-right">
        <h3>How the project runs</h3>
        <ol class="process-steps">
          <li><b>Walk the rooms</b><span>A&amp;S visits the property and looks at every room in the scope.</span></li>
          <li><b>Itemized estimate</b><span>Each trade is listed separately in writing. The quoted price is the final price.</span></li>
          <li><b>Written start window</b><span>The timeline depends on scope, so it is set out in writing before work begins.</span></li>
          <li><b>Build in sequence</b><span>Rough work first and finishes last, with the site cleaned each day.</span></li>
          <li><b>Final walkthrough</b><span>You go through each finished room with the crew.</span></li>
        </ol>
      </div>
    </div>
  </div>
</section>

<!-- ═══════════════════ COMPARISON ═══════════════════ -->
<section class="section">
  <div class="container">
    <span class="eyebrow-label">Project Sizes</span>
    <h2>How do a room refresh, a full remodel and a room addition differ?</h2>
    <p class="answer-block">A room refresh, a full remodel and a room addition differ in how many trades they involve and whether the outside of the house is opened. A&amp;S Contracting Services prices all three from an on-site written estimate; the table sets out what each one covers and what decides how long it takes.</p>
    <div class="sp-table-wrap reveal-up">
      <table class="sp-table">
        <caption>Three sizes of interior project A&amp;S Contracting Services takes on</caption>
        <thead>
          <tr>
            <th scope="col">Project</th>
            <th scope="col">Interior trades involved</th>
            <th scope="col">Exterior work involved</th>
            <th scope="col">What sets the timeline</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">Room refresh</th>
            <td>Paint, trim, flooring, drywall repair</td>
            <td>None</td>
            <td>Number of rooms and the finishes chosen</td>
          </tr>
          <tr>
            <th scope="row">Full interior remodel</th>
            <td>Drywall, flooring, painting, trim, custom finishes</td>
            <td>Only where windows or doors change</td>
            <td>Scope, and how much of the existing structure is kept</td>
          </tr>
          <tr>
            <th scope="row">Room addition</th>
            <td>All of the above in the new space</td>
            <td>Roofing, siding and gutters tied into the house</td>
            <td>Size of the addition, and weather while the shell is open</td>
          </tr>
        </tbody>
      </table>
    </div>
    <p class="sp-after">Jobs that are board and nothing else are scoped on the <a href="/services/dry-wall/">drywall installation and repair page</a>. Projects that mix interior and exterior work, or that involve a commercial space, are run as <a href="/services/general-contracting/">general contracting under a single contract</a>.</p>
  </div>
</section>

<!-- ═══════════════════ FAQ ═══════════════════ -->
<section class="section section--light" aria-label="Interior remodel questions, answered from the estimate">
  <div class="container-narrow">
    <div class="section-title reveal-up">
      <span class="eyebrow-label">Good Questions</span>
      <h2>Interior remodel questions, answered from the estimate</h2>
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
      <h2>What do A&amp;S addition and renovation sites look like?</h2>
      <p class="answer-block">These photos are from A&amp;S Contracting Services renovation and addition sites, and they show the exterior half of the job: sheathing, siding and finished additions. Interior finishes go in once that shell is weathertight, and having one company responsible for both halves keeps an addition on a single written schedule.</p>
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
      <h2>Which A&amp;S services overlap with interior work?</h2>
      <p class="hero-answer">Interior work overlaps with three other A&amp;S Contracting Services trades. Drywall is available on its own when that is all a room needs, new windows and doors change the trim and wall around every opening, and exterior work covers the outside of an addition.</p>
      <p class="sp-after">If a leak started the project, read A&amp;S's guide to <a href="/blog/drywall-water-damage-repair-or-replace-a-missouri-guide/">deciding between drywall repair and replacement after water damage</a> before the visit.</p>
    </div>
    <div class="sp-other">
      <?php
      $otherSlugs = ['dry-wall', 'windows-doors', 'exterior-work'];
      $otherDesc  = [
          'dry-wall' => 'Drywall installation, finishing and repair for homes and commercial spaces.',
          'windows-doors' => 'Energy-efficient replacement windows, patio doors and entry doors, weather-sealed.',
          'exterior-work' => 'Roofing, siding and gutters integrated into one exterior renovation.',
      ];
      $tintCycle  = [1, 2, 3];
      $otherIcons = ['dry-wall' => 'pencil-ruler', 'windows-doors' => 'building', 'exterior-work' => 'home'];
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
<section class="section section--light" id="estimate" aria-label="Request an interior remodel estimate">
  <div class="container">
    <div class="estimate">
      <div class="card reveal-up" style="padding: clamp(1.5rem, 4vw, 2.5rem); border:1px solid var(--color-line); border-radius: var(--radius-lg); background: var(--color-surface);">
        <span class="eyebrow-label">Written Estimate</span>
        <h2>Ready to reimagine the inside of your home?</h2>
        <p class="lead" style="margin-bottom: 1.25rem;">Describe the rooms and what has to change. A&amp;S Contracting Services schedules an on-site visit within days of first contact and follows it with a written estimate.</p>

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
        <h2>What happens after you send your <span class="text-accent">remodel details</span>?</h2>
        <p class="answer-block">After you send your remodel details, A&amp;S Contracting Services arranges a time to walk the rooms with you. That visit is scheduled within days of first contact and costs nothing. The estimate that follows is written and itemized by trade, and you are under no obligation to go ahead.</p>
        <ol class="next-steps">
          <li><strong>Walk the rooms together.</strong> A&amp;S sees the space in person and notes every finish that is changing.</li>
          <li><strong>Read the estimate.</strong> Each trade is itemized in writing, alongside the start window and timeline.</li>
          <li><strong>Decide in your own time.</strong> There is no obligation; if you proceed, the price quoted is the price charged.</li>
        </ol>
        <div class="nap">
          <div><?php echo icon('phone', 18); ?> <a href="tel:<?php echo $phoneTel; ?>"><?php echo $phone; ?></a></div>
          <div><?php echo icon('mail', 18); ?> <a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a></div>
          <div><?php echo icon('map-pin', 18); ?> <span><?php echo $addressCity; ?>, <?php echo $addressState; ?> <?php echo $addressZip; ?></span></div>
          <div><?php echo icon('clock', 18); ?> <span><?php echo htmlspecialchars($businessHours); ?></span></div>
        </div>
        <p style="margin-top:1rem; color: var(--color-muted); font-size: .95rem;">Interior renovations across <a href="/areas/warrenton/">Warrenton</a>, <a href="/areas/wright-city/">Wright City</a>, <a href="/areas/foristell/">Foristell</a>, <a href="/areas/wentzville/">Wentzville</a>, <a href="/areas/troy/">Troy</a>, <a href="/areas/jonesburg/">Jonesburg</a>, <a href="/areas/washington/">Washington</a> and everywhere within <?php echo $serviceRadius; ?> miles.</p>
      </div>
    </div>
  </div>
</section>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
