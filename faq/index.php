<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
$pageTitle       = "FAQ | A&S Contracting Services | General Contractor Warrenton, MO";
$pageDescription = "Frequently asked questions about A&S Contracting Services — pricing, licensing, service areas, timelines, permits, and what to expect from a general contractor in Warrenton, MO.";
$canonicalUrl    = $siteUrl . '/faq/';
$currentPage     = 'faq';
$cssVersion      = '2.2';
$pb              = 'https://db.pageone.cloud/storage/v1/object/public/client-assets/a-s-contracting-services/photos/';
$heroPhoto       = $pb . '1779984864659-a47kou-52-Aug_08__2025_00-31-27-YHMr.jpg';
$heroImagePreload = $heroPhoto;
$ogImage         = $heroPhoto;

$faqs = [
    'General' => [
        ['q'=>'What is a general contractor and why does it matter?','a'=>'A general contractor (GC) is a licensed professional who manages construction projects from planning to completion — coordinating materials, permits, inspections, and trade crews under one contract. For homeowners in Warrenton, MO, hiring a licensed GC means one accountable point of contact instead of juggling four separate specialty trades. A&S Contracting Services is a licensed and insured Missouri GC serving a 50-mile radius.'],
        ['q'=>'Is A&S Contracting Services licensed and insured in Missouri?','a'=>'Yes. A&S Contracting Services is a licensed and insured general contractor in the state of Missouri. We carry general liability insurance and can provide proof of coverage before any project begins. Licensing in Missouri means we are authorized to pull permits, oversee structural work, and take legal responsibility for the projects we manage.'],
        ['q'=>'How do I get a free estimate from A&S Contracting Services?','a'=>'Submit a request through our contact form at a-s-contracting-services.pageone.cloud/contact/ or call us directly. We\'ll confirm receipt within one business day and schedule an on-site estimate visit typically within 3–7 days for most of our service area. The estimate is written, detailed, and yours to keep — no pressure to proceed.'],
        ['q'=>'What areas does A&S Contracting Services serve?','a'=>'We serve Warrenton, MO and a 50-mile radius across central Missouri. This includes Warren County (our primary territory), St. Charles County (Wentzville, Foristell), Lincoln County (Troy), Montgomery County (Jonesburg), Franklin County (Washington), and parts of Audrain County. If you\'re unsure whether your address is in our coverage zone, contact us — we\'ll confirm.'],
    ],
    'Pricing & Contracts' => [
        ['q'=>'How does A&S Contracting Services price projects?','a'=>'We provide fixed-price written estimates for clearly defined scopes — full roof replacements, siding projects, window installations, etc. For larger renovation projects with unknown conditions (like full interior remodels or projects involving demo), we use a detailed allowance-based contract that spells out what\'s included, what\'s a variable, and what triggers a change order. You will always know your exposure before we start.'],
        ['q'=>'Do you require a deposit before starting work?','a'=>'Yes. Most projects require a deposit of 30–50% upon contract signing to cover materials and scheduling. The remaining balance is due upon project completion and your walkthrough sign-off. We do not ask for full payment upfront — if a contractor demands full payment before starting any work, that is a warning sign.'],
        ['q'=>'What triggers a change order?','a'=>'A change order is issued any time the project scope changes from what was originally estimated. Common triggers include hidden rot or structural damage discovered during demo, homeowner-requested material upgrades, permit-required code upgrades not visible before opening walls, or changes to the original project plan. We never do additional work without a signed change order — you will always know the cost before we proceed.'],
        ['q'=>'Do you provide written contracts?','a'=>'Yes, every project starts with a written contract that outlines scope of work, materials, timeline, payment schedule, warranty terms, and change-order process. We do not do verbal-only agreements. If a contractor wants to start without a written contract, that\'s a significant risk for you as a homeowner.'],
    ],
    'Permits & Inspections' => [
        ['q'=>'Do you pull permits for projects in Warrenton and Warren County?','a'=>'Yes. As a licensed Missouri general contractor, A&S Contracting Services handles the full permit process — application, scheduling of inspections, and final approval. In Warren County, most structural projects (roofing, framing, windows, electrical, plumbing) require a permit. We manage this so you don\'t have to, and we will not start permit-required work without the permit in hand.'],
        ['q'=>'What projects require a permit in Warren County, MO?','a'=>'In Warren County, permits are typically required for: new roofing on structures over a certain size, structural framing changes, additions, electrical upgrades, plumbing changes, HVAC installation, window replacement in load-bearing structures, and any work visible from the street. Minor repairs, painting, and cosmetic work generally do not require permits. We assess this during the estimate and let you know what\'s required before the project starts.'],
        ['q'=>'Can you pull permits in other counties and cities in your service area?','a'=>'Yes. As a Missouri-licensed GC, we can pull permits in any municipality within our 50-mile service area, including Wentzville (St. Charles County), Troy (Lincoln County), and Washington (Franklin County). Municipal requirements vary, and we navigate those differences for each project.'],
    ],
    'Timelines & Scheduling' => [
        ['q'=>'How long does a typical roofing replacement take in Warrenton?','a'=>'A standard residential roof replacement in the Warrenton area takes 1–2 days for most homes. Larger roofs, steep pitches, or complex roofline geometry may extend that to 3–4 days. Material lead times depend on current supply — we order materials as soon as the contract is signed so there\'s no unnecessary delay between approval and start.'],
        ['q'=>'How long does a siding replacement take?','a'=>'A typical full siding replacement on a Warrenton-area home takes 3–7 days depending on square footage, trim complexity, and whether the job includes soffit, fascia, and window wrapping. We sequence work to minimize the amount of time your home is open to weather.'],
        ['q'=>'How do you handle storm damage repairs — can you fast-track them?','a'=>'Yes. After a significant weather event in Warren County or surrounding areas, we prioritize storm damage assessments. We can typically schedule an on-site visit within 1–3 days of a storm and move quickly to tarping or emergency repairs to prevent further water infiltration. Document the damage with photos as soon as it\'s safe to do so, and contact us immediately — insurance adjusters often move faster when a licensed contractor has already assessed and documented the damage.'],
        ['q'=>'What time of year is best for exterior projects in central Missouri?','a'=>'The optimal window for exterior work in central Missouri is April through October, when temperatures stay above freezing consistently and roofing materials (shingles, caulks, adhesives) cure properly. However, we work year-round — winter projects are feasible for many exterior repairs with the right material selection and conditions. Interior work (drywall, flooring, painting) can proceed any time of year regardless of temperature.'],
    ],
    'Services' => [
        ['q'=>'Can A&S handle both the exterior and interior of a full home renovation?','a'=>'Yes. That is our core capability as a general contractor. We self-perform roofing, siding, gutters, soffit, fascia, windows, doors, drywall, and interior finish work. A full home renovation — from new roof to finished interior — can be managed entirely under one A&S contract, one timeline, and one crew. This eliminates the scheduling conflicts and trade gaps that plague multi-contractor renovation projects.'],
        ['q'=>'Do you work on commercial properties?','a'=>'Yes. A&S Contracting Services accepts light commercial projects including small office buildings, retail spaces, warehouses, and mixed-use properties within our service area. Contact us with your project details for a scope review — we\'ll confirm whether it fits our current capacity and capabilities before scheduling an estimate.'],
        ['q'=>'Do you do insurance claim work for storm damage?','a'=>'Yes. We assist homeowners through the insurance claim process for storm-related damage, including hail damage to roofing and siding, wind damage to fascia and gutters, and water infiltration from failed roofing systems. We provide documented assessments that help insurance adjusters determine the full scope of damage. We do not charge for storm assessments — the cost of the assessment is built into the project if you choose to move forward.'],
    ],
];

// Build flat FAQPage schema from all categories
$allFaqs = [];
foreach ($faqs as $cat => $items) {
    foreach ($items as $faq) {
        $allFaqs[] = ['question'=>$faq['q'],'answer'=>$faq['a']];
    }
}
$schemaData = ['@context'=>'https://schema.org','@graph'=>[
    ['@type'=>'BreadcrumbList','itemListElement'=>[
        ['@type'=>'ListItem','position'=>1,'name'=>'Home','item'=>$siteUrl.'/'],
        ['@type'=>'ListItem','position'=>2,'name'=>'FAQ'],
    ]],
    ['@type'=>'FAQPage','mainEntity'=>array_map(fn($f)=>['@type'=>'Question','name'=>$f['question'],'acceptedAnswer'=>['@type'=>'Answer','text'=>$f['answer']]],$allFaqs)],
]];
$schemaMarkup = json_encode($schemaData,JSON_PRETTY_PRINT|JSON_UNESCAPED_SLASHES|JSON_UNESCAPED_UNICODE);
include $_SERVER['DOCUMENT_ROOT'].'/includes/head.php';
?>
<body>
<?php include $_SERVER['DOCUMENT_ROOT'].'/includes/header.php'; ?>

<style>
/* ═══════════════════════════════════════════════════════════════
   /faq/ — Page-specific styles — Premium tier ≥400L
   Signature: category tab anchors with gold underline active state
   ═══════════════════════════════════════════════════════════════ */
.faq-hero { position:relative; background:var(--color-primary); padding:calc(var(--nav-height,72px) + var(--space-3xl)) 0 var(--space-3xl); overflow:hidden; }
.faq-hero::before { content:''; position:absolute; inset:0; background-image:url('<?php echo $heroPhoto; ?>'); background-size:cover; background-position:center 30%; opacity:0.12; z-index:0; }
.faq-hero::after { content:''; position:absolute; bottom:0; left:0; right:0; height:6px; background:linear-gradient(90deg,var(--color-accent) 0%,rgba(var(--color-accent-rgb),0.3) 70%,transparent 100%); z-index:2; }
/* Signature: floating radial category indicator */
.faq-hero .hero-radial { position:absolute; right:-100px; top:-100px; width:500px; height:500px; background:radial-gradient(circle,rgba(var(--color-accent-rgb),0.08) 0%,transparent 65%); z-index:1; pointer-events:none; }
.faq-hero-inner { position:relative; z-index:2; max-width:var(--max-width,1280px); margin:0 auto; padding:0 var(--space-lg); }
.hero-breadcrumb { display:flex; align-items:center; gap:var(--space-xs); font-size:0.8rem; color:rgba(255,255,255,0.45); margin-bottom:var(--space-md); }
.hero-breadcrumb a { color:rgba(255,255,255,0.45); transition:color 0.2s; }
.hero-breadcrumb a:hover { color:var(--color-accent); }
.hero-breadcrumb span { color:rgba(255,255,255,0.25); }
.hero-eyebrow { display:inline-flex; align-items:center; gap:var(--space-xs); background:rgba(var(--color-accent-rgb),0.15); border:1px solid rgba(var(--color-accent-rgb),0.45); color:var(--color-accent); font-size:0.76rem; font-weight:700; letter-spacing:0.12em; text-transform:uppercase; padding:5px 12px; border-radius:var(--radius-sm); margin-bottom:var(--space-md); }
.faq-hero h1 { font-family:var(--font-heading,'Unbounded',sans-serif); font-size:clamp(2rem,4vw,3.4rem); font-weight:800; line-height:1.07; text-wrap:balance; color:var(--color-secondary); margin:0 0 var(--space-md); max-width:700px; }
.faq-hero h1 .accent { color:var(--color-accent); }
.faq-hero-desc { font-size:1.05rem; line-height:1.78; color:rgba(255,255,255,0.65); max-width:60ch; margin:0; }
/* Category nav tabs */
.faq-tabs-section { background:var(--color-bg-alt,#f8f8f6); border-bottom:1px solid rgba(0,0,0,0.06); padding:var(--space-lg) 0 0; position:sticky; top:calc(var(--nav-height,72px)); z-index:10; }
.faq-tabs { display:flex; gap:0; overflow-x:auto; scrollbar-width:none; padding-bottom:0; }
.faq-tabs::-webkit-scrollbar { display:none; }
.faq-tab { display:inline-flex; align-items:center; gap:6px; padding:var(--space-md) var(--space-lg); font-family:var(--font-heading,'Unbounded',sans-serif); font-size:0.72rem; font-weight:700; letter-spacing:0.08em; text-transform:uppercase; color:var(--color-text-light); text-decoration:none; border-bottom:3px solid transparent; transition:all 0.2s; white-space:nowrap; background:none; border-top:none; border-left:none; border-right:none; cursor:pointer; }
.faq-tab:hover { color:var(--color-primary); border-bottom-color:rgba(var(--color-accent-rgb),0.4); }
.faq-tab.active { color:var(--color-primary); border-bottom-color:var(--color-accent); }
/* FAQ body layout */
.faq-body { padding:var(--space-3xl) 0; background:var(--color-bg); }
.faq-layout { display:grid; grid-template-columns:240px 1fr; gap:var(--space-3xl); align-items:start; }
.container-faq { max-width:var(--max-width,1280px); margin:0 auto; padding:0 var(--space-lg); }
/* Sticky sidebar */
.faq-sidebar-nav { position:sticky; top:calc(var(--nav-height,72px) + 64px); display:flex; flex-direction:column; gap:4px; }
.faq-sidebar-link { display:flex; align-items:center; gap:10px; padding:10px 14px; border-radius:var(--radius-sm); font-size:0.82rem; font-weight:600; color:var(--color-text-light); transition:all 0.2s; border-left:3px solid transparent; }
.faq-sidebar-link:hover { background:var(--color-bg-alt,#f8f8f6); color:var(--color-primary); border-left-color:rgba(var(--color-accent-rgb),0.4); }
.faq-sidebar-link.current { background:rgba(var(--color-accent-rgb),0.08); color:var(--color-primary); border-left-color:var(--color-accent); font-weight:700; }
.faq-sidebar-link span { font-size:0.72rem; background:rgba(0,0,0,0.08); border-radius:100px; padding:1px 7px; color:var(--color-text-light); font-weight:600; }
/* FAQ category sections */
.faq-category { margin-bottom:var(--space-3xl); scroll-margin-top:calc(var(--nav-height,72px) + 80px); }
.category-label { display:inline-block; font-family:var(--font-heading,'Unbounded',sans-serif); font-size:0.72rem; font-weight:700; letter-spacing:0.14em; text-transform:uppercase; color:var(--color-accent); margin-bottom:var(--space-md); }
.category-title { font-family:var(--font-heading,'Unbounded',sans-serif); font-size:clamp(1.3rem,2.5vw,1.9rem); font-weight:800; color:var(--color-primary); text-wrap:balance; margin:0 0 var(--space-lg); line-height:1.2; border-bottom:2px solid rgba(0,0,0,0.06); padding-bottom:var(--space-md); }
.faq-list { display:flex; flex-direction:column; gap:var(--space-sm); }
.faq-item { border:1px solid rgba(0,0,0,0.08); border-radius:var(--radius); overflow:hidden; transition:box-shadow 0.2s; }
.faq-item:hover { box-shadow:var(--shadow-sm); }
.faq-question { width:100%; text-align:left; background:none; border:none; padding:var(--space-md) var(--space-lg); font-family:var(--font-heading,'Unbounded',sans-serif); font-size:0.88rem; font-weight:700; color:var(--color-primary); cursor:pointer; display:flex; justify-content:space-between; align-items:center; gap:var(--space-md); line-height:1.45; transition:color 0.2s,background 0.2s; }
.faq-question:hover { color:var(--color-accent); background:rgba(var(--color-accent-rgb),0.03); }
.faq-icon { width:18px; height:18px; flex-shrink:0; color:var(--color-accent); transition:transform 0.3s; }
.faq-item.open .faq-icon { transform:rotate(45deg); }
.faq-item.open .faq-question { background:rgba(var(--color-accent-rgb),0.04); }
.faq-answer { display:none; padding:var(--space-sm) var(--space-lg) var(--space-lg); font-size:0.92rem; line-height:1.82; color:var(--color-text-light); border-top:1px solid rgba(0,0,0,0.06); }
.faq-item.open .faq-answer { display:block; }
/* Count badges */
.q-count { font-size:0.72rem; color:var(--color-text-light); font-weight:400; background:rgba(0,0,0,0.05); border-radius:100px; padding:2px 8px; margin-left:var(--space-sm); }
/* CTA block at bottom */
.faq-cta-block { background:var(--color-primary); border-radius:var(--radius-lg); padding:var(--space-2xl); margin-top:var(--space-3xl); text-align:center; position:relative; overflow:hidden; }
.faq-cta-block::before { content:''; position:absolute; inset:0; background-image:radial-gradient(circle,rgba(var(--color-accent-rgb),0.08) 0%,transparent 70%); pointer-events:none; }
.faq-cta-block h2 { font-family:var(--font-heading,'Unbounded',sans-serif); font-size:clamp(1.4rem,2.5vw,2rem); font-weight:800; color:var(--color-secondary); text-wrap:balance; margin:0 0 var(--space-md); position:relative; z-index:1; }
.faq-cta-block h2 span { color:var(--color-accent); }
.faq-cta-block p { font-size:0.95rem; line-height:1.72; color:rgba(255,255,255,0.6); max-width:48ch; margin:0 auto var(--space-xl); position:relative; z-index:1; }
.btn-accent-lg { display:inline-flex; align-items:center; gap:8px; background:var(--color-accent); color:var(--color-primary); font-family:var(--font-heading,'Unbounded',sans-serif); font-size:0.85rem; font-weight:800; padding:16px 32px; border-radius:var(--radius); border:2px solid var(--color-accent); transition:all 0.2s; text-transform:uppercase; letter-spacing:0.04em; position:relative; z-index:1; }
.btn-accent-lg:hover { background:#ffbb00; border-color:#ffbb00; transform:translateY(-2px); box-shadow:0 6px 24px rgba(var(--color-accent-rgb),0.4); }
@media (max-width:1100px) { .faq-layout { grid-template-columns:1fr; } .faq-sidebar-nav { position:static; flex-direction:row; flex-wrap:wrap; } }
@media (max-width:768px) { .faq-tabs-section { position:static; } .faq-sidebar-nav { display:none; } .faq-hero h1 { font-size:clamp(1.7rem,6vw,2.4rem); } }
@media (max-width:520px) { .faq-question { font-size:0.82rem; padding:var(--space-md); } .faq-answer { padding:var(--space-sm) var(--space-md) var(--space-md); } }
</style>

<!-- HERO -->
<section class="faq-hero" aria-label="A&S Contracting Services FAQ">
  <div class="hero-radial" aria-hidden="true"></div>
  <div class="faq-hero-inner">
    <nav class="hero-breadcrumb" aria-label="Breadcrumb"><a href="/">Home</a><span>›</span><span aria-current="page">FAQ</span></nav>
    <span class="hero-eyebrow">Frequently Asked Questions</span>
    <h1>Answers About <span class="accent">A&amp;S Contracting</span><br>— No Runaround</h1>
    <p class="faq-hero-desc">Real answers to the questions homeowners across Warrenton, MO and Warren County ask most often — pricing, licensing, timelines, permits, and what working with a licensed general contractor actually looks like.</p>
  </div>
</section>

<!-- CATEGORY TABS (sticky) -->
<div class="faq-tabs-section" role="navigation" aria-label="FAQ categories">
  <div class="container-faq">
    <div class="faq-tabs" role="tablist">
      <?php foreach ($faqs as $cat => $items): ?>
      <a href="#cat-<?php echo urlencode(strtolower(str_replace(' ','-',$cat))); ?>" class="faq-tab" role="tab">
        <?php echo htmlspecialchars($cat); ?>
        <span><?php echo count($items); ?></span>
      </a>
      <?php endforeach; ?>
    </div>
  </div>
</div>

<!-- FAQ BODY -->
<section class="faq-body" aria-label="FAQ content">
  <div class="container-faq">
    <div class="faq-layout">

      <!-- Sticky sidebar -->
      <nav class="faq-sidebar-nav" aria-label="Jump to category">
        <?php foreach ($faqs as $cat => $items):
          $catSlug = urlencode(strtolower(str_replace(' ','-',$cat)));
        ?>
        <a href="#cat-<?php echo $catSlug; ?>" class="faq-sidebar-link">
          <?php echo htmlspecialchars($cat); ?>
          <span><?php echo count($items); ?></span>
        </a>
        <?php endforeach; ?>
      </nav>

      <!-- FAQ categories -->
      <div>
        <?php foreach ($faqs as $cat => $items):
          $catSlug = urlencode(strtolower(str_replace(' ','-',$cat)));
        ?>
        <div class="faq-category" id="cat-<?php echo $catSlug; ?>">
          <span class="category-label"><?php echo htmlspecialchars($cat); ?></span>
          <h2 class="category-title"><?php echo htmlspecialchars($cat); ?> Questions</h2>
          <div class="faq-list" role="list">
            <?php foreach ($items as $i => $faq): ?>
            <div class="faq-item" role="listitem">
              <button class="faq-question" aria-expanded="false">
                <?php echo htmlspecialchars($faq['q']); ?>
                <svg class="faq-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg>
              </button>
              <div class="faq-answer"><?php echo htmlspecialchars($faq['a']); ?></div>
            </div>
            <?php endforeach; ?>
          </div>
        </div>
        <?php endforeach; ?>

        <!-- CTA block -->
        <div class="faq-cta-block">
          <h2>Still have a question? <span>Get a free estimate.</span></h2>
          <p>The fastest way to get a straight answer about your specific project is to submit a request. We respond within one business day and schedule on-site estimates for most Warren County and surrounding area projects within 3–7 days.</p>
          <a href="/contact/" class="btn-accent-lg">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/></svg>
            Request a Free Estimate
          </a>
        </div>
      </div>

    </div>
  </div>
</section>

<?php include $_SERVER['DOCUMENT_ROOT'].'/includes/footer.php'; ?>
</body>
</html>
