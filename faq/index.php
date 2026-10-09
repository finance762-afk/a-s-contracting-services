<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
// ─── Page-level setup ───────────────────────────────────────────────────────
$pageType        = 'faq';
$currentPage     = 'faq';
$pageTitle       = 'Roofing, Siding & Remodeling FAQ';
$pageDescription = 'Answers on estimates, pricing, timelines, insurance claims and service area from A&S Contracting Services, a general contractor in Warrenton, MO. (636) 359-7204';
$canonicalUrl    = $siteUrl . '/faq/';

// FAQ data. Every answer traces to the client fact ledger (config.php / intake). Order matters:
// the first six render before the mid-page estimate form, the rest after it.
$faqs = [
    [
        'question' => 'Is A&S Contracting Services licensed and insured in Missouri?',
        'answer'   => 'A&S Contracting Services is a licensed Missouri general contractor and is fully insured. That covers the roofing, siding, gutter, drywall, window, and interior projects the company takes on in Warrenton and Warren County, from the first on-site visit through the final walkthrough.',
    ],
    [
        'question' => 'Who does the work on an A&S Contracting Services project?',
        'answer'   => 'A&S Contracting Services does its own work with no subcontractors. The same crew stays on a project from the first day to the final walkthrough, so one accountable team handles roofing, siding, gutters, drywall, windows, or interior work instead of passing the job between companies.',
    ],
    [
        'question' => 'What does an A&S Contracting Services estimate include?',
        'answer'   => 'An A&S Contracting Services estimate includes an on-site visit and a detailed, itemized written price. The visit and the estimate are free and carry no obligation. The company states there are no hidden fees or upselling, and the quoted price is the final price for the work described.',
    ],
    [
        'question' => 'How quickly can A&S Contracting Services schedule an estimate?',
        'answer'   => 'A&S Contracting Services schedules on-site estimates within days of first contact. You can call (636) 359-7204 Monday through Friday from 7am to 6pm or Saturday from 8am to 3pm, or send the form on this page. Start windows for the work are given in writing.',
    ],
    [
        'question' => 'How much does a roof or siding job cost with A&S Contracting Services?',
        'answer'   => 'A&S Contracting Services publishes no fixed prices because each job is priced from its own on-site estimate. The price depends on square footage, the materials you select, the condition of the existing structure, and the scope of work. The written estimate shows the full amount before any work begins.',
    ],
    [
        'question' => 'How long does a roof replacement or siding project take?',
        'answer'   => 'Most single-family roof replacements by A&S Contracting Services take one to three days, weather permitting. Siding time varies with square footage and home size, and interior work depends on scope. Timelines and start windows are given in writing during the estimate, before the project begins.',
    ],
    [
        'question' => 'What services does A&S Contracting Services offer?',
        'answer'   => 'A&S Contracting Services offers roofing, siding, gutters, soffit, fascia, windows and doors, full-scale interior work, exterior work, drywall, and general contracting. Residential and commercial clients can request any of them, and each service has its own page with the specific work it covers.',
    ],
    [
        'question' => 'What roofing work does A&S Contracting Services do?',
        'answer'   => 'A&S Contracting Services installs, repairs, and fully replaces roofs, including tear-off, and repairs storm and hail damage. Materials on file include architectural asphalt shingles, impact-resistant shingles, and metal roofing. The company works on residential and commercial roofs and documents damage for insurance claims.',
    ],
    [
        'question' => 'Can A&S Contracting Services help with a storm or hail insurance claim?',
        'answer'   => 'A&S Contracting Services helps homeowners with storm and hail insurance claims by documenting the damage with photos and writing a detailed, itemized estimate. The company also meets the insurance adjuster on site and helps the homeowner through the claim process from inspection to installation.',
    ],
    [
        'question' => 'Does A&S Contracting Services take commercial projects?',
        'answer'   => 'A&S Contracting Services takes both residential and commercial projects. Roofing, drywall, and general contracting are all listed for commercial clients, and general contracting projects are managed from planning to completion. Commercial estimates follow the same on-site, written process as residential ones.',
    ],
    [
        'question' => 'Does A&S Contracting Services clean up the job site?',
        'answer'   => 'A&S Contracting Services maintains a clean job site every day of a project, so debris does not pile up around your home or business. Each project then ends with a final walkthrough, where the finished work is walked through with the homeowner before the job is considered complete.',
    ],
    [
        'question' => 'What areas around Warrenton does A&S Contracting Services serve?',
        'answer'   => 'A&S Contracting Services is based in Warrenton, Missouri, and works within 50 miles. Named towns are Warrenton, Wright City, Foristell, Wentzville, Troy, Jonesburg, and Washington, plus the rest of Warren County and central Missouri. Each town has its own page on the site.',
    ],
];
$faqsBefore = array_slice($faqs, 0, 6);
$faqsAfter  = array_slice($faqs, 6);

// Build FAQPage schema from all FAQs
$faqSchema = generateFAQSchema($faqs);

// BreadcrumbList schema
$schemaGraph = [
    '@context' => 'https://schema.org',
    '@graph' => [
        [
            '@type' => 'WebPage',
            '@id' => $canonicalUrl . '#webpage',
            'url' => $canonicalUrl,
            'name' => $pageTitle,
            'description' => $pageDescription,
        ],
        [
            '@type' => 'BreadcrumbList',
            'itemListElement' => [
                [
                    '@type' => 'ListItem',
                    'position' => 1,
                    'name' => 'Home',
                    'item' => $siteUrl . '/',
                ],
                [
                    '@type' => 'ListItem',
                    'position' => 2,
                    'name' => 'FAQ',
                    'item' => $canonicalUrl,
                ],
            ],
        ],
    ],
];
$schema = '<script type="application/ld+json">' . json_encode($schemaGraph, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) . '</script>';
$schema .= "\n" . $faqSchema;

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
?>

<!-- Page-specific composition -->
<style>
.faq-hero { background: linear-gradient(135deg, var(--color-primary) 0%, var(--color-secondary) 100%); padding: calc(var(--nav-height) + var(--space-2xl)) var(--space-xl) var(--space-2xl); }
.faq-hero .container { max-width: var(--max-width); margin: 0 auto; text-align: center; }
.faq-hero h1 { color: #fff; margin-bottom: var(--space-sm); }
.faq-hero p { color: rgba(255,255,255,0.9); font-size: 1.1rem; max-width: 60ch; margin: 0 auto; }

.faq-content { max-width: var(--max-width); margin: 0 auto; padding: var(--space-3xl) var(--space-xl); }
.faq-content h2 { font-size: 1.5rem; color: var(--color-primary); margin-bottom: var(--space-md); padding-bottom: var(--space-sm); border-bottom: 3px solid var(--color-accent); }
.faq-intro { max-width: 70ch; line-height: 1.7; margin-bottom: var(--space-xl); }
.faq-intro a, .faq-more a { color: var(--color-primary); text-decoration: underline; }
.faq-more { max-width: 70ch; line-height: 1.7; margin-top: var(--space-xl); }

details.faq-item { margin-bottom: var(--space-md); background: var(--color-bg-alt); border: 2px solid var(--color-border); border-radius: var(--radius); padding: 0; }
details.faq-item summary { padding: var(--space-md) var(--space-lg); font-family: var(--font-heading); font-size: 1.1rem; font-weight: 600; color: var(--color-primary); cursor: pointer; }
details.faq-item summary:hover { background: var(--color-bg); }
details.faq-item[open] { border-color: var(--color-primary); }
details.faq-item .faq-answer { max-height: none; overflow: visible; padding: 0 var(--space-lg) var(--space-lg); }
details.faq-item .faq-answer p { margin: 0; line-height: 1.7; color: var(--color-text); max-width: 65ch; }

.faq-band-wrap { padding: 0 var(--space-xl); }
.faq-band-wrap .cta-band.post-cta { max-width: var(--max-width); margin: var(--space-2xl) auto; text-align: left; padding: 40px 32px; }
.faq-band-wrap .cta-band h3 { margin-bottom: 10px; }
.faq-band-wrap .cta-band p { margin-bottom: 20px; }

.faq-cta { background: var(--color-bg-dark); color: #fff; padding: var(--space-4xl) var(--space-xl); text-align: center; }
.faq-cta h2 { color: #fff; margin-bottom: var(--space-md); }
.faq-cta p { color: rgba(255,255,255,0.9); max-width: 60ch; margin: 0 auto var(--space-xl); font-size: 1.1rem; }
.cta-buttons { display: flex; gap: var(--space-md); justify-content: center; flex-wrap: wrap; }
</style>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'; ?>

<!-- Hero -->
<section class="faq-hero" aria-label="Frequently Asked Questions">
  <div class="container">
    <h1>Frequently Asked Questions</h1>
    <p>
      Answers about estimates, pricing, timelines, insurance claims, and service area for A&amp;S Contracting
      Services in Warrenton, MO.
    </p>
  </div>
</section>

<!-- Breadcrumb -->
<nav class="breadcrumb" aria-label="Breadcrumb">
  <div class="container">
    <ol>
      <li><a href="/">Home</a></li>
      <li class="breadcrumb-sep" aria-hidden="true">›</li>
      <li aria-current="page">FAQ</li>
    </ol>
  </div>
</nav>

<!-- FAQ, part 1 -->
<section class="faq-content">
  <h2>What should you know before requesting an estimate from A&amp;S Contracting Services?</h2>
  <p class="faq-intro">
    A&amp;S Contracting Services is a general contractor in Warrenton, Missouri, founded in <?php echo $yearEstablished; ?>.
    It publishes no fixed prices, so every project starts with an on-site visit and a written estimate. The first
    answers below cover credentials, who does the work, what the estimate includes, and timelines.
  </p>
  <?php foreach ($faqsBefore as $i => $faq): ?>
  <details class="faq-item">
    <summary class="faq-question"><?php echo htmlspecialchars($faq['question']); ?></summary>
    <div class="faq-answer" id="faq-a-<?php echo $i + 1; ?>">
      <p><?php echo htmlspecialchars($faq['answer']); ?></p>
    </div>
  </details>
  <?php endforeach; ?>
</section>

<!-- Mid-page estimate form -->
<div class="faq-band-wrap">
  <section class="cta-band post-cta" id="estimate">
    <div class="post-cta-grid">
      <div>
        <h3>Want a price for your own project?</h3>
        <p>
          Send your name and number and A&amp;S Contracting Services will be in touch to set up the on-site visit.
          The visit and the written, itemized estimate cost nothing and carry no obligation.
        </p>
        <a href="tel:<?php echo $phoneTel; ?>" class="btn btn-primary">Call <?php echo $phone; ?></a>
      </div>
      <?php $heroFormTitle = 'Request an estimate'; $heroFormId = 'cta-band'; include $_SERVER['DOCUMENT_ROOT'] . '/includes/hero-form.php'; ?>
    </div>
  </section>
</div>

<!-- FAQ, part 2 -->
<section class="faq-content">
  <h2>What work does A&amp;S Contracting Services cover, and where?</h2>
  <p class="faq-intro">
    A&amp;S Contracting Services covers roofing, siding, gutters, soffit, fascia, windows and doors, drywall, and
    interior and exterior work within <?php echo $serviceRadius; ?> miles of Warrenton. The remaining answers explain the scope of each
    service, insurance claims, commercial work, job-site cleanup, and the towns served.
  </p>
  <?php foreach ($faqsAfter as $i => $faq): ?>
  <details class="faq-item">
    <summary class="faq-question"><?php echo htmlspecialchars($faq['question']); ?></summary>
    <div class="faq-answer" id="faq-a-<?php echo $i + 7; ?>">
      <p><?php echo htmlspecialchars($faq['answer']); ?></p>
    </div>
  </details>
  <?php endforeach; ?>
  <p class="faq-more">
    For the full list of trades, see the <a href="/services/">A&amp;S services overview</a>, the
    <a href="/services/roofing/">roofing page</a> for replacement and storm repair, or the
    <a href="/service-areas/">service areas page</a> for each town.
  </p>
</section>

<!-- CTA -->
<section class="faq-cta">
  <div class="container">
    <h2>Still have a question about your project?</h2>
    <p>
      Call or send a message and A&amp;S Contracting Services will answer questions specific to your roof, siding,
      or remodel.
    </p>
    <div class="cta-buttons">
      <a href="/contact/" class="btn-primary">Request an estimate</a>
      <a href="tel:<?php echo $phoneTel; ?>" class="btn-secondary">
        <?php echo icon('phone', 20); ?>
        Call <?php echo $phone; ?>
      </a>
    </div>
  </div>
</section>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
