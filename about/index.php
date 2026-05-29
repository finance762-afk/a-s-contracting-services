<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
$pageTitle       = "About A&S Contracting Services | General Contractor in Warrenton, MO";
$pageDescription = "A&S Contracting Services is a licensed, insured general contractor based in Warrenton, MO. Learn about our team, our approach, and why Warren County homeowners trust us.";
$canonicalUrl    = $siteUrl . '/about/';
$currentPage     = 'about';
$cssVersion      = '2.2';
$pb              = 'https://db.pageone.cloud/storage/v1/object/public/client-assets/a-s-contracting-services/photos/';
$heroPhoto       = $pb . '1779985209297-ld8mti-1-Dec_23__2025_13-34-30-gKpa.jpg';
$bodyPhoto1      = $pb . '1779985209827-r3nhd0-16-Dec_24__2025_16-17-16-CNcM.jpg';
$bodyPhoto2      = $pb . '1779985138123-1k3z1f-1-Nov_20__2024_22-51-03-koQG.jpg';
$bodyPhoto3      = $pb . '1779985053030-6d3zxh-65-Jun_03__2025_18-42-52-Tdqj.jpg';
$heroImagePreload = $heroPhoto;
$ogImage         = $heroPhoto;

$schemaData = ['@context'=>'https://schema.org','@graph'=>[
    ['@type'=>'BreadcrumbList','itemListElement'=>[
        ['@type'=>'ListItem','position'=>1,'name'=>'Home','item'=>$siteUrl.'/'],
        ['@type'=>'ListItem','position'=>2,'name'=>'About'],
    ]],
    ['@type'=>'AboutPage','@id'=>$canonicalUrl.'#webpage','name'=>$pageTitle,'description'=>$pageDescription,'url'=>$canonicalUrl,'about'=>['@id'=>$siteUrl.'/#organization']],
]];
$schemaMarkup = json_encode($schemaData,JSON_PRETTY_PRINT|JSON_UNESCAPED_SLASHES|JSON_UNESCAPED_UNICODE);
include $_SERVER['DOCUMENT_ROOT'].'/includes/head.php';
?>
<body>
<?php include $_SERVER['DOCUMENT_ROOT'].'/includes/header.php'; ?>

<style>
/* ═══════════════════════════════════════════════════════════════
   /about/ — Page-specific styles — Premium tier ≥400L
   Signature: diagonal gold slash behind hero heading block
   ═══════════════════════════════════════════════════════════════ */
.about-hero { position:relative; min-height:72vh; display:flex; align-items:center; background-image:url('<?php echo $heroPhoto; ?>'); background-size:cover; background-position:center 35%; padding:calc(var(--nav-height,72px) + var(--space-3xl)) 0 var(--space-3xl); overflow:hidden; }
.about-hero::before { content:''; position:absolute; inset:0; background:linear-gradient(120deg,rgba(var(--color-primary-rgb),0.96) 0%,rgba(var(--color-primary-rgb),0.8) 45%,rgba(var(--color-primary-rgb),0.28) 100%); z-index:1; }
.about-hero::after { content:''; position:absolute; inset:0; background-image:url("data:image/svg+xml,%3Csvg viewBox='0 0 200 200' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.85' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='0.025'/%3E%3C/svg%3E"); background-size:220px; opacity:0.04; z-index:2; pointer-events:none; }
/* Signature: diagonal gold slash on hero left */
.about-hero .diag-slash { position:absolute; left:-60px; top:0; bottom:0; width:180px; background:linear-gradient(135deg,rgba(var(--color-accent-rgb),0.18) 0%,transparent 60%); z-index:2; transform:skewX(-8deg); pointer-events:none; }
.about-hero-inner { position:relative; z-index:3; max-width:var(--max-width,1280px); margin:0 auto; padding:0 var(--space-lg); width:100%; }
.hero-breadcrumb { display:flex; align-items:center; gap:var(--space-xs); font-size:0.8rem; color:rgba(255,255,255,0.48); margin-bottom:var(--space-md); }
.hero-breadcrumb a { color:rgba(255,255,255,0.48); transition:color 0.2s; }
.hero-breadcrumb a:hover { color:var(--color-accent); }
.hero-breadcrumb span { color:rgba(255,255,255,0.28); }
.hero-eyebrow { display:inline-flex; align-items:center; gap:var(--space-xs); background:rgba(var(--color-accent-rgb),0.15); border:1px solid rgba(var(--color-accent-rgb),0.45); color:var(--color-accent); font-size:0.76rem; font-weight:700; letter-spacing:0.12em; text-transform:uppercase; padding:5px 12px; border-radius:var(--radius-sm); margin-bottom:var(--space-md); }
.about-hero h1 { font-family:var(--font-heading,'Unbounded',sans-serif); font-size:clamp(2.4rem,4.5vw,4rem); font-weight:800; line-height:1.05; text-wrap:balance; color:var(--color-secondary); margin:0 0 var(--space-lg); max-width:700px; }
.about-hero h1 .accent { color:var(--color-accent); }
.hero-intro { font-size:1.1rem; line-height:1.78; color:rgba(255,255,255,0.78); max-width:58ch; margin:0 0 var(--space-2xl); }
.hero-stat-row { display:flex; gap:var(--space-2xl); flex-wrap:wrap; }
.hero-stat { display:flex; flex-direction:column; gap:4px; }
.hero-stat-num { font-family:var(--font-heading,'Unbounded',sans-serif); font-size:2.4rem; font-weight:800; color:var(--color-accent); line-height:1; }
.hero-stat-label { font-size:0.78rem; color:rgba(255,255,255,0.55); text-transform:uppercase; letter-spacing:0.08em; }
.divider-wave { display:block; width:100%; overflow:hidden; line-height:0; }
.divider-wave svg { display:block; width:100%; }
.divider-angle { display:block; width:100%; overflow:hidden; line-height:0; }
.divider-angle svg { display:block; width:100%; }
.divider-curve { display:block; width:100%; overflow:hidden; line-height:0; }
.divider-curve svg { display:block; width:100%; }
.container-ab { max-width:var(--max-width,1280px); margin:0 auto; padding:0 var(--space-lg); }
.eyebrow-label { display:inline-block; font-size:0.74rem; font-weight:700; letter-spacing:0.14em; text-transform:uppercase; color:var(--color-accent); margin-bottom:var(--space-sm); }
.section-h2 { font-family:var(--font-heading,'Unbounded',sans-serif); font-size:clamp(1.6rem,3vw,2.4rem); font-weight:800; color:var(--color-primary); text-wrap:balance; margin:0 0 var(--space-sm); line-height:1.15; }
.section-h2-light { font-family:var(--font-heading,'Unbounded',sans-serif); font-size:clamp(1.6rem,3vw,2.4rem); font-weight:800; color:var(--color-secondary); text-wrap:balance; margin:0 0 var(--space-sm); line-height:1.15; }
.answer-block { font-size:1rem; line-height:1.78; color:var(--color-text); border-left:3px solid var(--color-accent); background:rgba(var(--color-accent-rgb),0.06); padding:var(--space-sm) var(--space-md); border-radius:0 var(--radius-sm) var(--radius-sm) 0; margin:0 0 var(--space-md); max-width:66ch; }
/* Story section */
.story-section { padding:var(--space-3xl) 0; background:var(--color-bg-alt,#f8f8f6); }
.story-grid { display:grid; grid-template-columns:1fr 1fr; gap:var(--space-3xl); align-items:center; }
.story-image-wrap { position:relative; }
.story-image-primary { border-radius:var(--radius-lg); overflow:hidden; box-shadow:var(--shadow-lg); }
.story-image-primary img { width:100%; height:460px; object-fit:cover; display:block; }
.story-image-accent { position:absolute; bottom:-var(--space-lg); right:-var(--space-lg); width:200px; border-radius:var(--radius); overflow:hidden; box-shadow:var(--shadow-lg); border:4px solid #fff; }
.story-image-accent img { width:100%; height:140px; object-fit:cover; display:block; }
.story-pullquote { font-family:var(--font-accent,'Fraunces',serif); font-size:clamp(1.4rem,2.8vw,2.1rem); font-weight:700; font-style:italic; color:var(--color-primary); line-height:1.35; margin:0 0 var(--space-lg); text-wrap:balance; }
.story-pullquote em { color:var(--color-accent); font-style:normal; }
.story-body { font-size:0.975rem; line-height:1.82; color:var(--color-text); margin:0 0 var(--space-md); }
/* Values section */
.values-section { padding:var(--space-3xl) 0; background:var(--color-bg); }
.values-grid { display:grid; grid-template-columns:repeat(3,1fr); gap:var(--space-md); margin-top:var(--space-2xl); }
.value-card { background:var(--color-bg-alt,#f8f8f6); border-radius:var(--radius-lg); padding:var(--space-xl); border:1px solid rgba(0,0,0,0.05); position:relative; overflow:hidden; }
.value-card::before { content:''; position:absolute; top:0; left:0; right:0; height:4px; background:var(--color-accent); }
.value-num { font-family:var(--font-heading,'Unbounded',sans-serif); font-size:3.5rem; font-weight:800; color:rgba(var(--color-primary-rgb),0.06); position:absolute; top:var(--space-md); right:var(--space-md); line-height:1; }
.value-icon { width:52px; height:52px; border-radius:var(--radius); background:rgba(var(--color-accent-rgb),0.12); display:flex; align-items:center; justify-content:center; color:var(--color-accent); margin-bottom:var(--space-md); }
.value-icon svg { width:24px; height:24px; }
.value-title { font-family:var(--font-heading,'Unbounded',sans-serif); font-size:1rem; font-weight:800; color:var(--color-primary); margin:0 0 var(--space-sm); }
.value-desc { font-size:0.9rem; line-height:1.72; color:var(--color-text-light); margin:0; }
/* Photo proof section */
.proof-section { padding:var(--space-3xl) 0; background:var(--color-primary); }
.proof-photo-row { display:grid; grid-template-columns:1.6fr 1fr 1fr; gap:var(--space-md); margin-top:var(--space-2xl); }
.proof-photo { border-radius:var(--radius-lg); overflow:hidden; position:relative; }
.proof-photo img { width:100%; height:300px; object-fit:cover; display:block; }
.proof-photo:first-child img { height:400px; }
.proof-photo-caption { position:absolute; bottom:0; left:0; right:0; background:linear-gradient(to top,rgba(0,0,0,0.75) 0%,transparent 100%); padding:var(--space-md); font-size:0.8rem; font-weight:600; color:#fff; }
/* What we're not section */
.honest-section { padding:var(--space-3xl) 0; background:var(--color-bg-alt); }
.honest-grid { display:grid; grid-template-columns:1fr 1fr; gap:var(--space-3xl); align-items:center; }
.honest-list { display:flex; flex-direction:column; gap:var(--space-md); list-style:none; padding:0; margin:var(--space-lg) 0 0; }
.honest-item { display:flex; gap:var(--space-md); align-items:flex-start; }
.honest-icon { width:40px; height:40px; border-radius:50%; display:flex; align-items:center; justify-content:center; flex-shrink:0; }
.honest-icon.yes { background:rgba(var(--color-accent-rgb),0.12); color:var(--color-accent); }
.honest-icon.no { background:rgba(200,0,0,0.07); color:#c00; }
.honest-icon svg { width:18px; height:18px; }
.honest-item-text { font-size:0.95rem; line-height:1.65; color:var(--color-text); }
.honest-item-text strong { color:var(--color-primary); }
.honest-image { border-radius:var(--radius-lg); overflow:hidden; box-shadow:var(--shadow-lg); }
.honest-image img { width:100%; height:400px; object-fit:cover; display:block; }
/* CTA section */
.about-cta-section { padding:var(--space-3xl) 0; background:var(--color-bg); text-align:center; }
.btn-accent-lg { display:inline-flex; align-items:center; gap:8px; background:var(--color-accent); color:var(--color-primary); font-family:var(--font-heading,'Unbounded',sans-serif); font-size:0.85rem; font-weight:800; padding:16px 32px; border-radius:var(--radius); border:2px solid var(--color-accent); transition:all 0.2s; text-transform:uppercase; letter-spacing:0.04em; }
.btn-accent-lg:hover { background:#ffbb00; border-color:#ffbb00; transform:translateY(-2px); box-shadow:0 6px 24px rgba(var(--color-accent-rgb),0.4); }
.btn-dark-outline { display:inline-flex; align-items:center; gap:8px; background:transparent; color:var(--color-primary); font-family:var(--font-heading,'Unbounded',sans-serif); font-size:0.85rem; font-weight:700; padding:16px 32px; border-radius:var(--radius); border:2px solid rgba(0,0,0,0.2); transition:all 0.2s; text-transform:uppercase; letter-spacing:0.04em; }
.btn-dark-outline:hover { border-color:var(--color-primary); background:rgba(0,0,0,0.05); }
.cta-btn-group { display:flex; gap:var(--space-md); justify-content:center; flex-wrap:wrap; }
@media (max-width:1100px) { .story-grid { grid-template-columns:1fr; } .honest-grid { grid-template-columns:1fr; } .story-image-accent { display:none; } }
@media (max-width:900px) { .values-grid { grid-template-columns:1fr 1fr; } .proof-photo-row { grid-template-columns:1fr 1fr; } .proof-photo:last-child { display:none; } }
@media (max-width:600px) { .values-grid { grid-template-columns:1fr; } .proof-photo-row { grid-template-columns:1fr; } .hero-stat-row { gap:var(--space-lg); } .about-hero { min-height:65vh; } }
</style>

<!-- HERO -->
<section class="about-hero" aria-label="About A&S Contracting Services">
  <div class="diag-slash" aria-hidden="true"></div>
  <div class="about-hero-inner">
    <nav class="hero-breadcrumb" aria-label="Breadcrumb"><a href="/">Home</a><span>›</span><span aria-current="page">About</span></nav>
    <span class="hero-eyebrow">Based in Warrenton, MO — Warren County</span>
    <h1>A&amp;S Contracting:<br><span class="accent">Built on Honest Work</span><br>in Central Missouri</h1>
    <p class="hero-intro">A&amp;S Contracting Services is a licensed and insured general contractor serving residential and commercial clients within 50 miles of Warrenton, MO. We self-perform roofing, siding, gutters, drywall, windows, and full-scale renovations — no trade gaps, no subcontracted surprises.</p>
    <div class="hero-stat-row">
      <div class="hero-stat">
        <span class="hero-stat-num" data-target="3">0</span>
        <span class="hero-stat-label">Years in Warren County</span>
      </div>
      <div class="hero-stat">
        <span class="hero-stat-num">10+</span>
        <span class="hero-stat-label">Self-Performed Services</span>
      </div>
      <div class="hero-stat">
        <span class="hero-stat-num">50mi</span>
        <span class="hero-stat-label">Service Radius</span>
      </div>
    </div>
  </div>
</section>

<div class="divider-wave" aria-hidden="true"><svg viewBox="0 0 1440 54" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg"><path d="M0,0 L0,27 Q360,54 720,27 Q1080,0 1440,27 L1440,54 L0,54 Z" fill="#f8f8f6"/></svg></div>

<!-- STORY -->
<section class="story-section" aria-label="Our story">
  <div class="container-ab">
    <div class="story-grid">
      <div class="story-image-wrap reveal-scale">
        <div class="story-image-primary">
          <img src="<?php echo $bodyPhoto1; ?>" alt="A&S Contracting Services team on a residential project in Warren County, MO" width="640" height="460" loading="lazy">
        </div>
        <div class="story-image-accent">
          <img src="<?php echo $bodyPhoto2; ?>" alt="A&S Contracting exterior work in Warrenton, MO" width="200" height="140" loading="lazy">
        </div>
      </div>
      <div class="reveal-right">
        <span class="eyebrow-label">Our Background</span>
        <h2 class="section-h2">Who is A&amp;S Contracting<br><span style="color:var(--color-accent);">Services?</span></h2>
        <div class="answer-block">A&amp;S Contracting Services is a licensed and insured Missouri general contractor headquartered in Warrenton. We started with a focus on roofing and exterior work and expanded to offer a full range of residential construction services — from gutters and siding to complete interior renovations — under one licensed roof.</div>
        <p class="story-body">Most contractors specialize in one trade and refer everything else out. When your roofer doesn't talk to your siding crew, and neither one talks to your drywall installer, you end up coordinating four separate timelines, four separate warranty claims, and four separate trucks showing up whenever they feel like it.</p>
        <p class="story-body">A&amp;S was built to eliminate that problem. As a general contractor, we manage every phase of a project — planning, permits, scheduling, execution, and final walkthrough — so homeowners across Warren County and central Missouri get consistent quality from a single accountable team.</p>
        <p class="story-pullquote">"We don't chase every job in St. Louis — we focus on being <em>genuinely excellent</em> in the 50-mile circle we know well."</p>
        <a href="/services/" class="btn-accent-lg" style="margin-top:var(--space-md);">See What We Do</a>
      </div>
    </div>
  </div>
</section>

<div class="divider-angle" aria-hidden="true"><svg viewBox="0 0 1440 40" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg"><polygon points="0,40 1440,0 1440,40" fill="#ffffff"/></svg></div>

<!-- VALUES -->
<section class="values-section" aria-label="Our core values">
  <div class="container-ab">
    <div style="text-align:center;max-width:600px;margin:0 auto var(--space-sm);">
      <span class="eyebrow-label">How We Work</span>
      <h2 class="section-h2">What does A&amp;S Contracting<br><span style="color:var(--color-accent);">actually stand for?</span></h2>
      <div class="answer-block" style="text-align:left;margin:var(--space-md) auto;">Three things separate contractors who do good work from contractors who leave you relieved it's over: honesty about scope, reliability on schedule, and results that look right under any light. These aren't marketing promises — they're the operational standards we hold every job to.</div>
    </div>
    <div class="values-grid">
      <div class="value-card reveal-up reveal-delay-1">
        <span class="value-num" aria-hidden="true">01</span>
        <div class="value-icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div>
        <h3 class="value-title">Honest Scoping</h3>
        <p class="value-desc">We give you a written estimate that reflects the real project — no low bids that balloon after the first week. If something changes after demo, we tell you immediately and get written approval before continuing.</p>
      </div>
      <div class="value-card reveal-up reveal-delay-2">
        <span class="value-num" aria-hidden="true">02</span>
        <div class="value-icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg></div>
        <h3 class="value-title">Schedule Accountability</h3>
        <p class="value-desc">We set project timelines and hold to them. If weather or material delays shift a start date, we contact you before you have to call us — not the other way around. Warrenton area homeowners should never be left wondering what's happening with their job.</p>
      </div>
      <div class="value-card reveal-up reveal-delay-3">
        <span class="value-num" aria-hidden="true">03</span>
        <div class="value-icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><polyline points="20 6 9 17 4 12"/></svg></div>
        <h3 class="value-title">Finish-Quality Work</h3>
        <p class="value-desc">Our crews work to the same standard whether it's a $1,400 gutter job or a $60,000 full interior renovation. The final walkthrough isn't over until you've looked at every edge, seam, and surface — and signed off on it.</p>
      </div>
    </div>
  </div>
</section>

<div class="divider-wave" aria-hidden="true"><svg viewBox="0 0 1440 54" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" style="transform:rotate(180deg);"><path d="M0,0 L0,27 Q360,54 720,27 Q1080,0 1440,27 L1440,54 L0,54 Z" fill="#000000"/></svg></div>

<!-- PHOTO PROOF -->
<section class="proof-section" aria-label="Project photos">
  <div class="container-ab">
    <div style="text-align:center;margin-bottom:var(--space-xl);">
      <span class="eyebrow-label" style="color:var(--color-accent);">Our Work</span>
      <h2 class="section-h2-light">Projects across Warren County<br>and <span style="color:var(--color-accent);">central Missouri</span></h2>
    </div>
    <div class="proof-photo-row">
      <div class="proof-photo reveal-left">
        <img src="<?php echo $bodyPhoto3; ?>" alt="A&S Contracting Services residential roofing project in Warrenton, MO" width="760" height="400" loading="lazy">
        <div class="proof-photo-caption">Warrenton — Soffit &amp; roofline repair, Warren County</div>
      </div>
      <div class="proof-photo reveal-up reveal-delay-2">
        <img src="<?php echo $heroPhoto; ?>" alt="A&S Contracting Services general contracting work in Warren County" width="400" height="300" loading="lazy">
        <div class="proof-photo-caption">Warren County — General contracting</div>
      </div>
      <div class="proof-photo reveal-right">
        <img src="<?php echo $bodyPhoto2; ?>" alt="A&S Contracting exterior renovation in central Missouri" width="400" height="300" loading="lazy">
        <div class="proof-photo-caption">Central Missouri — Exterior renovation</div>
      </div>
    </div>
  </div>
</section>

<div class="divider-curve" aria-hidden="true"><svg viewBox="0 0 1440 54" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg"><path d="M0,54 Q720,0 1440,54 L1440,54 L0,54 Z" fill="#f8f8f6"/></svg></div>

<!-- WHAT WE'RE NOT -->
<section class="honest-section" aria-label="What makes A&S different">
  <div class="container-ab">
    <div class="honest-grid">
      <div class="reveal-left">
        <span class="eyebrow-label">Straight Talk</span>
        <h2 class="section-h2">What kind of contractor<br><span style="color:var(--color-accent);">is A&amp;S — and what aren't we?</span></h2>
        <div class="answer-block">A&amp;S Contracting Services is a full-service general contractor that self-performs the majority of the work we take on. We're not a sales company that subcontracts every trade. We're a working crew with a GC license — which means one point of contact, one set of expectations, and one team accountable for the finished result.</div>
        <ul class="honest-list">
          <li class="honest-item">
            <span class="honest-icon yes"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" aria-hidden="true"><polyline points="20 6 9 17 4 12"/></svg></span>
            <span class="honest-item-text"><strong>We are:</strong> A licensed Missouri general contractor who manages projects start to finish and holds our own crew accountable to the same standards on every job.</span>
          </li>
          <li class="honest-item">
            <span class="honest-icon no"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" aria-hidden="true"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg></span>
            <span class="honest-item-text"><strong>We're not:</strong> A national franchise with a call center in another state. Your project is managed locally, by the same people you met at the estimate.</span>
          </li>
          <li class="honest-item">
            <span class="honest-icon yes"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" aria-hidden="true"><polyline points="20 6 9 17 4 12"/></svg></span>
            <span class="honest-item-text"><strong>We do:</strong> Provide written estimates, written contracts, proper permits, and documented material selections before any work begins.</span>
          </li>
          <li class="honest-item">
            <span class="honest-icon no"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" aria-hidden="true"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg></span>
            <span class="honest-item-text"><strong>We don't:</strong> Start work with a handshake and a vague price range. If a contractor can't give you a written number, that's a warning sign — not standard practice.</span>
          </li>
          <li class="honest-item">
            <span class="honest-icon yes"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" aria-hidden="true"><polyline points="20 6 9 17 4 12"/></svg></span>
            <span class="honest-item-text"><strong>We serve:</strong> Warrenton, Warren County, and a 50-mile radius across central Missouri — and we know this territory's building codes, weather patterns, and material demands specifically.</span>
          </li>
        </ul>
      </div>
      <div class="honest-image reveal-right">
        <img src="<?php echo $pb . '1779985082763-4jkctu-24-Feb_09__2026_17-30-39-wcsM.jpg'; ?>" alt="A&S Contracting Services licensed crew performing exterior work in Warren County" width="600" height="400" loading="lazy">
      </div>
    </div>
  </div>
</section>

<div class="divider-angle" aria-hidden="true"><svg viewBox="0 0 1440 40" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg"><polygon points="0,0 1440,40 1440,0" fill="#ffffff"/></svg></div>

<!-- FINAL CTA -->
<section class="about-cta-section" aria-label="Work with A&S Contracting Services">
  <div class="container-ab">
    <span class="eyebrow-label">Ready to Talk?</span>
    <h2 class="section-h2" style="max-width:560px;margin:var(--space-sm) auto var(--space-md);">Get a free, written estimate<br>for your <span style="color:var(--color-accent);">Warrenton-area project</span></h2>
    <p style="font-size:1rem;line-height:1.78;color:var(--color-text-light);max-width:50ch;margin:0 auto var(--space-2xl);">No sales calls, no pressure. A free estimate means we come out, assess the project, and give you a written number you can compare, hold us to, and say no to if it doesn't fit. That's how it should work.</p>
    <div class="cta-btn-group">
      <a href="/contact/" class="btn-accent-lg">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/></svg>
        Request a Free Estimate
      </a>
      <a href="/services/" class="btn-dark-outline">See All Services</a>
    </div>
  </div>
</section>

<?php include $_SERVER['DOCUMENT_ROOT'].'/includes/footer.php'; ?>
