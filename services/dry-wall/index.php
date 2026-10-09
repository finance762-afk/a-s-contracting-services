<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
// ─── Page-level setup ───────────────────────────────────────────────────────
$serviceSlug     = 'dry-wall';
$pageType        = 'service';
$currentPage     = 'services';
$svcName         = 'Dry Wall';
$pageTitle       = 'Drywall Installation & Repair in Warrenton, MO';
$pageDescription = 'Drywall installation, finishing and repair in Warrenton, MO by A&S Contracting Services. Licensed & insured. Free on-site written estimate: (636) 359-7204.';
$canonicalUrl    = $siteUrl . '/services/dry-wall/';

// ─── Hero + recent-work photos (image manifest) ─────────────────────────────
$heroImage    = '1779984936314-5pnhuy-43-Aug_06__2025_23-34-36-CJqa';
$heroImageAlt = 'Blue-sided house with house wrap and a new deck frame during an exterior renovation';
$heroPreload  = [
    'srcset' => "/assets/images/{$heroImage}-480.avif 480w, /assets/images/{$heroImage}-960.avif 960w",
    'sizes'  => '100vw',
];
$workPhotos = [
    ['1779985083901-6czd8y-29-Feb_09__2026_17-31-13-2hYG', 'Bare roof decking and underlayment during a tear-off on a wooded lot'],
    ['1779985357413-bd2qlx-35-Aug_06__2025_18-05-09-sh7A', 'House wrap, a ladder and deck boards at a wall being rebuilt'],
    ['1779985124323-t7sz4h-25-Mar_19__2026_16-22-48-7m7y', 'Roof decking stripped back to the rafters along an eave'],
];

// ─── FAQ (service-specific) ─────────────────────────────────────────────────
$faqs = [
    [
        'question' => 'How much does drywall installation or repair cost in Warrenton?',
        'answer'   => 'A&S Contracting Services does not publish drywall prices, because cost depends on square footage, the condition of the existing wall or framing, materials and scope. A&S measures the job on site and gives a written, itemized estimate at no charge. The quoted price is the final price, with no hidden fees or upselling.',
    ],
    [
        'question' => 'Should water-damaged drywall be repaired or replaced?',
        'answer'   => 'A&S Contracting Services replaces drywall that has gone soft, sagged or crumbled, and repairs board that is stained but still firm once it is dry. Either way the source of the water is dealt with first. Because A&S also does roofing, a leak from above and the ceiling below it can be handled by one company.',
    ],
    [
        'question' => 'How long does a drywall job take?',
        'answer'   => 'A&S Contracting Services sets the drywall timeline by scope, so a single patch and a full addition are scheduled very differently. Joint compound has to dry between coats, and humid Missouri summers slow that down. The start window and timeline are given in writing with the estimate.',
    ],
    [
        'question' => 'Does A&S Contracting Services do commercial drywall?',
        'answer'   => 'Yes. A&S Contracting Services installs, finishes and repairs drywall for commercial clients as well as homeowners, anywhere within 50 miles of Warrenton. That covers Warren County and nearby towns including Wright City, Wentzville, Troy and Washington.',
    ],
    [
        'question' => 'Can A&S paint and trim the room after the drywall is finished?',
        'answer'   => 'Yes. Painting, trim and flooring are part of the full scale interior work A&S Contracting Services offers, so a room can be boarded, finished, painted and trimmed under one estimate. Ask for both on the same visit and the estimate will itemize them separately.',
    ],
    [
        'question' => 'What happens on a drywall estimate visit?',
        'answer'   => 'A&S Contracting Services schedules drywall estimate visits within days of first contact. The visit covers the walls, ceilings or framing in person, and the written estimate that follows itemizes the work. Both the visit and the estimate are free and carry no obligation.',
    ],
];

// ─── Schema (Service + FAQPage + BreadcrumbList) ─────────────────────────────
$serviceSchema = [
    '@context'    => 'https://schema.org',
    '@type'       => 'Service',
    '@id'         => $canonicalUrl . '#service-' . $serviceSlug,
    'name'        => 'Dry Wall',
    'serviceType' => 'Drywall contractor',
    'description' => 'Drywall installation, finishing and repair for residential and commercial clients within 50 miles of Warrenton, MO.',
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
        <span class="eyebrow">Drywall &middot; Warrenton &amp; Warren County</span>
        <h1>Drywall in <span class="text-accent">Warrenton, MO</span> — installation, finishing &amp; repair</h1>
        <p class="hero-answer">A&amp;S Contracting Services, a licensed Missouri general contractor that is fully insured, installs, finishes and repairs drywall for homes and commercial spaces within 50 miles of Warrenton.</p>
        <div class="hero-actions">
          <a href="#estimate" class="btn btn-primary btn-lg hero-form-open">Get a written drywall estimate</a>
          <a class="link-call" href="tel:<?php echo $phoneTel; ?>"><?php echo icon('phone', 18); ?> or call <?php echo $phone; ?></a>
        </div>
        <ul class="hero-chips">
          <li><?php echo icon('landmark', 16); ?> Founded in Warrenton in 2023</li>
          <li><?php echo icon('clipboard-list', 16); ?> Written, itemized estimate</li>
          <li><?php echo icon('check-circle', 16); ?> Job site cleaned daily</li>
        </ul>
      </div>

      <aside class="hero-form-card" id="hero-form">
        <h2>Request a drywall estimate</h2>
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
        <h2>How do you know your drywall needs repair or replacement?</h2>
        <p class="answer-block">Drywall needs repair when the surface has failed but the board is still sound, and replacement when the board itself has gone soft. Cracks along a seam, fastener heads showing through paint and small holes are surface repairs. Brown water rings, sagging ceilings and crumbling edges mean the panel comes out and the leak gets traced first.</p>
        <p class="pull-quote">A stain on the ceiling is a roof or plumbing question before it is a drywall one.</p>
      </div>
      <div class="sp-signs reveal-right">
        <div class="sp-sign">
          <div class="sp-sign__icon"><?php echo icon('droplets', 22); ?></div>
          <h3>Water rings</h3>
          <p>A brown ring marks where water sat on the board. The stain is the symptom; the estimate visit looks for where the water came in.</p>
        </div>
        <div class="sp-sign">
          <div class="sp-sign__icon"><?php echo icon('waves', 22); ?></div>
          <h3>Cracks along seams</h3>
          <p>A straight crack that follows a joint means the tape or compound over it has let go.</p>
        </div>
        <div class="sp-sign">
          <div class="sp-sign__icon"><?php echo icon('hammer', 22); ?></div>
          <h3>Holes and dents</h3>
          <p>Doorknob strikes and moving-day gouges break the paper face and leave the wall open.</p>
        </div>
        <div class="sp-sign">
          <div class="sp-sign__icon"><?php echo icon('layers', 22); ?></div>
          <h3>Fasteners showing</h3>
          <p>Screw or nail heads that push through the paint leave bumps that show in angled light.</p>
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
        <div class="sp-position__stat">1<span>price: the figure on the written drywall estimate is the final price</span></div>
      </div>
      <div class="reveal-right">
        <span class="eyebrow-label">Why A&amp;S</span>
        <h2>What makes A&amp;S different from a drywall-only crew?</h2>
        <p class="answer-block">A&amp;S Contracting Services is a general contractor, so its drywall crew also handles the trades on either side of the board. When a ceiling stain traces back to the roof, the company's <a href="/services/roofing/">roof repair and replacement crew</a> deals with the leak before the panel is replaced, and paint, trim and flooring can follow under the same estimate.</p>
        <ul class="sp-evidence">
          <li><?php echo icon('clipboard-list', 22); ?><span><b>Scope in writing.</b> The estimate lists which walls and ceilings are covered, whether each is new board, a refinish or a patch, and what it costs.</span></li>
          <li><?php echo icon('users', 22); ?><span><b>Self-performed.</b> A&amp;S uses no subcontractors: the board is hung, finished and cleaned up by the company's own people.</span></li>
          <li><?php echo icon('building', 22); ?><span><b>Homes and commercial spaces.</b> Drywall installation, finishing and repair are offered to residential and commercial clients alike.</span></li>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- ═══════════════════ SERVICE BREAKDOWN ═══════════════════ -->
<section class="section section--light">
  <div class="container">
    <span class="eyebrow-label">The Work</span>
    <h2>What does an A&amp;S drywall job include?</h2>
    <p class="answer-block">An A&amp;S drywall job includes hanging the board, finishing the joints, and repairing or replacing damaged panels, with the site cleaned at the end of each day. Drywall is one of ten <a href="/services/">services A&amp;S Contracting Services offers from Warrenton</a>, which is why a wall can go from bare framing to painted without changing companies.</p>
    <div class="sp-included">
      <div class="reveal-up">
        <h3>Included in the scope</h3>
        <ul class="sp-checklist">
          <li><?php echo icon('check', 20); ?> New board hung on walls and ceilings</li>
          <li><?php echo icon('check', 20); ?> Joints taped and finished with joint compound</li>
          <li><?php echo icon('check', 20); ?> Finished surfaces sanded ready for primer</li>
          <li><?php echo icon('check', 20); ?> Damaged or water-stained panels cut out and replaced</li>
          <li><?php echo icon('check', 20); ?> Patches for holes, cracks and popped fasteners</li>
          <li><?php echo icon('check', 20); ?> Work area cleaned at the end of each day</li>
          <li><?php echo icon('check', 20); ?> Final walkthrough of every wall and ceiling in the scope</li>
        </ul>
      </div>
      <div class="reveal-right">
        <h3>How the project runs</h3>
        <ol class="process-steps">
          <li><b>On-site visit</b><span>A&amp;S looks at the framing or the damaged wall in person and asks what comes next: paint, tile or trim.</span></li>
          <li><b>Written estimate</b><span>Itemized by area and by task, with a start window and timeline in writing.</span></li>
          <li><b>Hang and finish</b><span>Board goes up, joints are taped, and compound is built up and sanded. Compound dries between coats, so drying time is part of the timeline.</span></li>
          <li><b>Daily cleanup</b><span>Dust and offcuts are cleared at the end of each working day.</span></li>
          <li><b>Final walkthrough</b><span>You and the crew check every surface in the scope before the job is closed.</span></li>
        </ol>
      </div>
    </div>
  </div>
</section>

<!-- ═══════════════════ COMPARISON ═══════════════════ -->
<section class="section">
  <div class="container">
    <span class="eyebrow-label">Three Services</span>
    <h2>Which drywall service fits your project: installation, finishing or repair?</h2>
    <p class="answer-block">The right drywall service depends on whether there is sound board on the wall already. Installation covers bare framing in additions, remodels and commercial build-outs; finishing covers board that is hung but not yet taped; repair covers damage to an otherwise good wall. The table shows how A&amp;S Contracting Services scopes each one.</p>
    <div class="sp-table-wrap reveal-up">
      <table class="sp-table">
        <caption>How A&amp;S Contracting Services scopes the three drywall services</caption>
        <thead>
          <tr>
            <th scope="col">Service</th>
            <th scope="col">Starting point</th>
            <th scope="col">What the written estimate records</th>
            <th scope="col">What follows</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">Installation</th>
            <td>Open framing in a new room, addition or commercial space</td>
            <td>Wall and ceiling area, board to be hung, finish required</td>
            <td>Finishing, then paint and trim</td>
          </tr>
          <tr>
            <th scope="row">Finishing</th>
            <td>Board is hung and the joints are still open</td>
            <td>Area to be taped and finished, and the surface the wall will receive</td>
            <td>Primer and paint</td>
          </tr>
          <tr>
            <th scope="row">Repair</th>
            <td>Cracks, holes, popped fasteners or water damage in an existing wall</td>
            <td>Panels to patch or replace, and the cause of any water staining</td>
            <td>Paint to blend the repaired area</td>
          </tr>
        </tbody>
      </table>
    </div>
    <p class="sp-after">Not sure which side of the line a stained ceiling falls on? A&amp;S covers that decision in its guide to <a href="/blog/drywall-water-damage-repair-or-replace-a-missouri-guide/">repairing or replacing water-damaged drywall in Missouri</a>.</p>
  </div>
</section>

<!-- ═══════════════════ FAQ ═══════════════════ -->
<section class="section section--light" aria-label="Drywall questions to settle before the estimate">
  <div class="container-narrow">
    <div class="section-title reveal-up">
      <span class="eyebrow-label">Good Questions</span>
      <h2>Drywall questions to settle before the estimate</h2>
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
      <h2>What do A&amp;S job sites look like before the drywall goes up?</h2>
      <p class="answer-block">These photos come from A&amp;S Contracting Services job sites and show the stage before drywall: open framing, sheathing and subfloor. Board is hung only after that structure is closed in and dry, which is easier to schedule when one contractor is responsible for the exterior shell and the interior walls.</p>
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
      <h2>Which other A&amp;S services connect to drywall?</h2>
      <p class="hero-answer">Drywall usually sits in the middle of a larger job, and A&amp;S Contracting Services offers the services on both sides of it. <a href="/services/full-scale-interior-work/">Full interior remodels and room additions</a> include the paint, trim and flooring that follow new board, and <a href="/services/windows-doors/">window and door replacement</a> often means patching the wall around the new opening.</p>
    </div>
    <div class="sp-other">
      <?php
      $otherSlugs = ['full-scale-interior-work', 'general-contracting', 'windows-doors'];
      $otherDesc  = [
          'full-scale-interior-work' => 'Drywall, flooring, painting, trim, custom finishes, room additions and full remodels.',
          'general-contracting' => 'Residential and commercial projects managed from planning to completion.',
          'windows-doors' => 'Energy-efficient replacement windows, patio doors and entry doors, weather-sealed.',
      ];
      $tintCycle  = [1, 2, 3];
      $otherIcons = ['full-scale-interior-work' => 'paint-bucket', 'general-contracting' => 'hard-hat', 'windows-doors' => 'home'];
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
<section class="section section--light" id="estimate" aria-label="Request a drywall estimate">
  <div class="container">
    <div class="estimate">
      <div class="card reveal-up" style="padding: clamp(1.5rem, 4vw, 2.5rem); border:1px solid var(--color-line); border-radius: var(--radius-lg); background: var(--color-surface);">
        <span class="eyebrow-label">Written Estimate</span>
        <h2>Ready for a smooth, paint-ready wall?</h2>
        <p class="lead" style="margin-bottom: 1.25rem;">Send the room, the damage or the plans. A&amp;S Contracting Services schedules on-site drywall estimates within days of first contact.</p>

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
        <h2>What happens after you send your <span class="text-accent">drywall details</span>?</h2>
        <p class="answer-block">After you send your drywall details, A&amp;S Contracting Services contacts you to set a time to see the walls in person. Estimates are scheduled within days of first contact, during business hours Monday through Saturday. The estimate is written after that visit, because drywall cost depends on area, condition and scope.</p>
        <ol class="next-steps">
          <li><strong>A visit is scheduled.</strong> A&amp;S sets a time to look at the walls, ceilings or framing.</li>
          <li><strong>You get an itemized estimate.</strong> It is written, free and without obligation, and the quoted price is the final price.</li>
          <li><strong>The work is scheduled in writing.</strong> You receive a start window and timeline; the job ends with a final walkthrough.</li>
        </ol>
        <div class="nap">
          <div><?php echo icon('phone', 18); ?> <a href="tel:<?php echo $phoneTel; ?>"><?php echo $phone; ?></a></div>
          <div><?php echo icon('mail', 18); ?> <a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a></div>
          <div><?php echo icon('map-pin', 18); ?> <span><?php echo $addressCity; ?>, <?php echo $addressState; ?> <?php echo $addressZip; ?></span></div>
          <div><?php echo icon('clock', 18); ?> <span><?php echo htmlspecialchars($businessHours); ?></span></div>
        </div>
        <p style="margin-top:1rem; color: var(--color-muted); font-size: .95rem;">Drywall across <a href="/areas/warrenton/">Warrenton</a>, <a href="/areas/wright-city/">Wright City</a>, <a href="/areas/foristell/">Foristell</a>, <a href="/areas/wentzville/">Wentzville</a>, <a href="/areas/troy/">Troy</a>, <a href="/areas/jonesburg/">Jonesburg</a>, <a href="/areas/washington/">Washington</a> and everywhere within <?php echo $serviceRadius; ?> miles.</p>
      </div>
    </div>
  </div>
</section>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
