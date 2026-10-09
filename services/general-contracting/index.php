<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
// ─── Page-level setup ───────────────────────────────────────────────────────
$serviceSlug     = 'general-contracting';
$pageType        = 'service';
$currentPage     = 'services';
$svcName         = 'General Contracting';
$pageTitle       = 'General Contractor Services in Warrenton, MO';
$pageDescription = 'General contractor in Warrenton, MO for residential and commercial projects, managed from planning to completion. Licensed & insured. (636) 359-7204.';
$canonicalUrl    = $siteUrl . '/services/general-contracting/';

// ─── Hero + recent-work photos (image manifest) ─────────────────────────────
$heroImage    = '1779985082241-xuoxbh-11-Feb_09__2026_15-26-29-L2wD';
$heroImageAlt = 'A&S crew laying underlayment along a roof ridge on a wooded lot';
$heroPreload  = [
    'srcset' => "/assets/images/{$heroImage}-480.avif 480w, /assets/images/{$heroImage}-960.avif 960w",
    'sizes'  => '100vw',
];
$workPhotos = [
    ['1779985138888-d41ths-3-Nov_20__2024_22-50-31-ZRts', 'Gray-sided house with house wrap around the porch end during siding work'],
    ['1779985209297-ld8mti-1-Dec_23__2025_13-34-30-gKpa', 'Tan wood-sided house on a wooded lot with shingle bundles delivered'],
    ['1779985127211-6wrwx6-41-Mar_19__2026_17-08-38-89QF', 'Crew member on a ladder working at the eave above a brick entry'],
];

// ─── FAQ (service-specific) ─────────────────────────────────────────────────
$faqs = [
    [
        'question' => 'What kinds of projects does A&S take on as general contractor?',
        'answer'   => 'A&S Contracting Services manages residential and commercial projects from planning to completion. A project can combine any of its trades: roofing, siding, gutters, soffit, fascia, windows and doors, drywall and full interior work including room additions.',
    ],
    [
        'question' => 'How does the written estimate work?',
        'answer'   => 'A&S Contracting Services visits the property first; estimate visits are scheduled within days of first contact. A detailed estimate itemized by trade follows. The visit and the estimate are free and carry no obligation, and the start window and timeline are put in writing as well.',
    ],
    [
        'question' => 'What does it mean that the quoted price is the final price?',
        'answer'   => 'A&S Contracting Services bills the figure on its written estimate for the scope that estimate describes. The estimate is itemized so each part of the project can be checked, and A&S adds no hidden fees and does not upsell once work is under way.',
    ],
    [
        'question' => 'Who does the work on a project A&S manages?',
        'answer'   => 'A&S Contracting Services does the work itself. The crew that starts a project stays on it to the final walkthrough, and the company is answerable for every trade in the contract.',
    ],
    [
        'question' => 'How far from Warrenton does A&S work?',
        'answer'   => 'A&S Contracting Services takes projects within 50 miles of Warrenton, the Warren County seat on Interstate 70. That includes Jonesburg, Wright City, Foristell and Wentzville along the interstate, plus Troy in Lincoln County and Washington in Franklin County.',
    ],
    [
        'question' => 'When can a project start?',
        'answer'   => 'A&S Contracting Services gives every project a start window in writing as part of the estimate, and exterior phases are scheduled weather permitting. Business hours are Monday to Friday 7am to 6pm and Saturday 8am to 3pm.',
    ],
];

// ─── Schema (Service + FAQPage + BreadcrumbList) ─────────────────────────────
$serviceSchema = [
    '@context'    => 'https://schema.org',
    '@type'       => 'Service',
    '@id'         => $canonicalUrl . '#service-' . $serviceSlug,
    'name'        => 'General Contracting',
    'serviceType' => 'General contractor',
    'description' => 'General contracting for residential and commercial projects, managed from planning to completion, within 50 miles of Warrenton, MO.',
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
        <span class="eyebrow">General Contracting &middot; Warrenton &amp; Warren County</span>
        <h1>General Contracting in <span class="text-accent">Warrenton, MO</span> — one team, planning to punch list</h1>
        <p class="hero-answer">A&amp;S Contracting Services is a licensed Missouri general contractor, fully insured and based in Warrenton, that manages residential and commercial projects from planning to completion within 50 miles.</p>
        <div class="hero-actions">
          <a href="#estimate" class="btn btn-primary btn-lg hero-form-open">Get a written project estimate</a>
          <a class="link-call" href="tel:<?php echo $phoneTel; ?>"><?php echo icon('phone', 18); ?> or call <?php echo $phone; ?></a>
        </div>
        <ul class="hero-chips">
          <li><?php echo icon('users', 16); ?> Owner: Blake Alger</li>
          <li><?php echo icon('calendar-check', 16); ?> Start window &amp; timeline in writing</li>
          <li><?php echo icon('badge-check', 16); ?> Quoted price is the final price</li>
        </ul>
      </div>

      <aside class="hero-form-card" id="hero-form">
        <h2>Request a project estimate</h2>
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
        <h2>When does your Warren County project need a general contractor?</h2>
        <p class="answer-block">A project needs a general contractor when it involves several trades, a commercial property, or work that has to happen in a fixed order. An addition, a storm repair that reaches indoors, and a build-out for a business all fit. A&amp;S Contracting Services takes those projects across Warren County under one contract.</p>
        <p class="pull-quote">One contract, one schedule, one company answerable for the result.</p>
      </div>
      <div class="sp-signs reveal-right">
        <div class="sp-sign">
          <div class="sp-sign__icon"><?php echo icon('waypoints', 22); ?></div>
          <h3>Several trades</h3>
          <p>The job crosses roofing, siding, drywall or finishes, and someone has to set the order of work.</p>
        </div>
        <div class="sp-sign">
          <div class="sp-sign__icon"><?php echo icon('building-2', 22); ?></div>
          <h3>Commercial property</h3>
          <p>A shop, office or other commercial building needs construction or repair.</p>
        </div>
        <div class="sp-sign">
          <div class="sp-sign__icon"><?php echo icon('house', 22); ?></div>
          <h3>New space</h3>
          <p>An addition needs a roof, siding and a finished interior that all meet the existing building.</p>
        </div>
        <div class="sp-sign">
          <div class="sp-sign__icon"><?php echo icon('cloud-snow', 22); ?></div>
          <h3>Storm damage inside and out</h3>
          <p>Hail or wind opened the roof and water reached the ceilings and walls below.</p>
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
        <div class="sp-position__stat">10<span>trades A&amp;S self-performs, from roofing to interior finish, under one contract</span></div>
      </div>
      <div class="reveal-right">
        <span class="eyebrow-label">Accountability</span>
        <h2>What makes A&amp;S accountable from start to finish?</h2>
        <p class="answer-block">A&amp;S Contracting Services is accountable from start to finish because it does the work it manages. The company that writes the estimate also does the roofing, siding, drywall and finishes, so there is no subcontractor to point to. Blake Alger founded A&amp;S in Warrenton in 2023 on roofing and exterior work and has added the interior trades since.</p>
        <ul class="sp-evidence">
          <li><?php echo icon('clipboard-list', 22); ?><span><b>Planning.</b> Scope, start window and timeline are written down before any work begins.</span></li>
          <li><?php echo icon('hard-hat', 22); ?><span><b>Building.</b> The A&amp;S crew carries the project through each trade in turn and cleans the site daily.</span></li>
          <li><?php echo icon('check-circle', 22); ?><span><b>Completion.</b> Every project closes with a final walkthrough, whatever its size.</span></li>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- ═══════════════════ SERVICE BREAKDOWN ═══════════════════ -->
<section class="section section--light">
  <div class="container">
    <span class="eyebrow-label">The Work</span>
    <h2>What&rsquo;s included when A&amp;S manages your project?</h2>
    <p class="answer-block">When A&amp;S manages your project, the price includes planning, the construction itself and closeout, all by one company. Managed work can draw on any of the <a href="/services/">ten trades listed on the A&amp;S services page</a>, from tear-off roofing to interior trim, and the written estimate itemizes each one so the whole project is visible before it starts.</p>
    <div class="sp-included">
      <div class="reveal-up">
        <h3>Included in the scope</h3>
        <ul class="sp-checklist">
          <li><?php echo icon('check', 20); ?> On-site visit and a written, itemized estimate</li>
          <li><?php echo icon('check', 20); ?> Start window and timeline in writing</li>
          <li><?php echo icon('check', 20); ?> Roofing, siding, gutters, soffit and fascia</li>
          <li><?php echo icon('check', 20); ?> Windows, doors and weather sealing</li>
          <li><?php echo icon('check', 20); ?> Drywall, flooring, painting, trim and custom finishes</li>
          <li><?php echo icon('check', 20); ?> Residential and commercial projects</li>
          <li><?php echo icon('check', 20); ?> Daily cleanup and a final walkthrough</li>
        </ul>
      </div>
      <div class="reveal-right">
        <h3>How the project runs</h3>
        <ol class="process-steps">
          <li><b>Planning visit</b><span>A&amp;S sees the property and goes through what the project has to achieve.</span></li>
          <li><b>Estimate</b><span>Written and itemized by trade. No hidden fees; the quoted price is the final price.</span></li>
          <li><b>Schedule</b><span>A start window and timeline are issued in writing.</span></li>
          <li><b>Construction</b><span>One crew works through the trades in order, cleaning the site each day.</span></li>
          <li><b>Completion</b><span>A final walkthrough closes the project.</span></li>
        </ol>
      </div>
    </div>
  </div>
</section>

<!-- ═══════════════════ COMPARISON ═══════════════════ -->
<section class="section">
  <div class="container">
    <span class="eyebrow-label">Two Arrangements</span>
    <h2>How does hiring A&amp;S compare with managing separate trades yourself?</h2>
    <p class="answer-block">Hiring A&amp;S Contracting Services as general contractor replaces several trade agreements with one. Managing separate trades yourself means comparing bids, ordering the work and settling where one trade ends and the next begins. The table sets the two arrangements side by side using only what A&amp;S commits to in writing.</p>
    <div class="sp-table-wrap reveal-up">
      <table class="sp-table">
        <caption>A&amp;S Contracting Services as general contractor compared with hiring each trade separately</caption>
        <thead>
          <tr>
            <th scope="col">Attribute</th>
            <th scope="col">A&amp;S as general contractor</th>
            <th scope="col">Hiring each trade yourself</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">Contracts</th>
            <td>One</td>
            <td>One per trade</td>
          </tr>
          <tr>
            <th scope="row">Who does the work</th>
            <td>The A&amp;S crew</td>
            <td>A different company for each trade</td>
          </tr>
          <tr>
            <th scope="row">Price</th>
            <td>One itemized estimate; the quoted price is the final price</td>
            <td>A separate quote from each company</td>
          </tr>
          <tr>
            <th scope="row">Schedule</th>
            <td>One written start window and timeline</td>
            <td>You coordinate the order and the dates</td>
          </tr>
          <tr>
            <th scope="row">Cleanup and closeout</th>
            <td>Site cleaned daily; one final walkthrough</td>
            <td>Arranged with each company</td>
          </tr>
        </tbody>
      </table>
    </div>
    <p class="sp-after">Projects that stay outdoors are scoped as <a href="/services/exterior-work/">full exterior renovations</a>, and those that stay indoors as <a href="/services/full-scale-interior-work/">interior remodels and room additions</a>. General contracting is for work that crosses both, and for commercial clients in any of the <a href="/service-areas/">towns A&amp;S serves around Warrenton</a>.</p>
  </div>
</section>

<!-- ═══════════════════ FAQ ═══════════════════ -->
<section class="section section--light" aria-label="General contracting questions, answered">
  <div class="container-narrow">
    <div class="section-title reveal-up">
      <span class="eyebrow-label">Good Questions</span>
      <h2>General contracting questions, answered</h2>
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
      <h2>What do A&amp;S general contracting job sites look like?</h2>
      <p class="answer-block">These photos are from A&amp;S Contracting Services job sites on larger builds. They show a house partly wrapped ahead of siding, an elevated home under construction on a wooded lot, and a crew member finishing a roof overhang from a ladder. Each caption states only what its frame shows.</p>
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
      <h2>Which trades can A&amp;S self-perform on your project?</h2>
      <p class="hero-answer">A&amp;S Contracting Services can self-perform every trade on its services list, and three of them carry most of the load on a managed project. Interior work covers finishes and additions, exterior work covers the shell of the building, and roofing is the trade the company was founded on in 2023.</p>
    </div>
    <div class="sp-other">
      <?php
      $otherSlugs = ['full-scale-interior-work', 'exterior-work', 'roofing'];
      $otherDesc  = [
          'full-scale-interior-work' => 'Drywall, flooring, painting, trim, custom finishes, room additions and full remodels.',
          'exterior-work' => 'Roofing, siding and gutters integrated into one exterior renovation.',
          'roofing' => 'Roof installation, repair, tear-off and replacement, plus storm and hail damage repair.',
      ];
      $tintCycle  = [1, 2, 3];
      $otherIcons = ['full-scale-interior-work' => 'paint-bucket', 'exterior-work' => 'hammer', 'roofing' => 'home'];
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
<section class="section section--light" id="estimate" aria-label="Request a project estimate">
  <div class="container">
    <div class="estimate">
      <div class="card reveal-up" style="padding: clamp(1.5rem, 4vw, 2.5rem); border:1px solid var(--color-line); border-radius: var(--radius-lg); background: var(--color-surface);">
        <span class="eyebrow-label">Written Estimate</span>
        <h2>Ready to hand your project to one team?</h2>
        <p class="lead" style="margin-bottom: 1.25rem;">Outline the project and where it is. A&amp;S Contracting Services schedules an on-site planning visit within days of first contact.</p>

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
        <h2>What happens after you send your <span class="text-accent">project details</span>?</h2>
        <p class="answer-block">After you send your project details, A&amp;S Contracting Services arranges to see the property, since a project is estimated on site and not from a form. Visits are scheduled within days of first contact. A written estimate follows, covering every trade involved, and it costs nothing and commits you to nothing.</p>
        <ol class="next-steps">
          <li><strong>The site is visited.</strong> A&amp;S looks at the property and the full extent of the project.</li>
          <li><strong>The plan is priced.</strong> One itemized estimate covers all trades; the quoted price is the final price.</li>
          <li><strong>Dates are committed.</strong> Start window and timeline are written down, and the project ends with a walkthrough.</li>
        </ol>
        <div class="nap">
          <div><?php echo icon('phone', 18); ?> <a href="tel:<?php echo $phoneTel; ?>"><?php echo $phone; ?></a></div>
          <div><?php echo icon('mail', 18); ?> <a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a></div>
          <div><?php echo icon('map-pin', 18); ?> <span><?php echo $addressCity; ?>, <?php echo $addressState; ?> <?php echo $addressZip; ?></span></div>
          <div><?php echo icon('clock', 18); ?> <span><?php echo htmlspecialchars($businessHours); ?></span></div>
        </div>
        <p style="margin-top:1rem; color: var(--color-muted); font-size: .95rem;">General contracting across <a href="/areas/warrenton/">Warrenton</a>, <a href="/areas/wright-city/">Wright City</a>, <a href="/areas/foristell/">Foristell</a>, <a href="/areas/wentzville/">Wentzville</a>, <a href="/areas/troy/">Troy</a>, <a href="/areas/jonesburg/">Jonesburg</a>, <a href="/areas/washington/">Washington</a> and everywhere within <?php echo $serviceRadius; ?> miles.</p>
      </div>
    </div>
  </div>
</section>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
