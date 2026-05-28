<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
$pageTitle       = "Contact A&S Contracting Services | Free Estimate — Warrenton, MO";
$pageDescription = "Contact A&S Contracting Services for a free written estimate. Serving Warrenton, MO and a 50-mile radius. Roofing, siding, gutters, interior renovations, and more.";
$canonicalUrl    = $siteUrl . '/contact/';
$currentPage     = 'contact';
$cssVersion      = '2.0';
$pb              = 'https://db.pageone.cloud/storage/v1/object/public/client-assets/a-s-contracting-services/photos/';
$heroPhoto       = $pb . '1779985083901-6czd8y-29-Feb_09__2026_17-31-13-2hYG.jpg';
$heroImagePreload = $heroPhoto;
$ogImage         = $heroPhoto;

$schemaData = ['@context'=>'https://schema.org','@graph'=>[
    ['@type'=>'BreadcrumbList','itemListElement'=>[
        ['@type'=>'ListItem','position'=>1,'name'=>'Home','item'=>$siteUrl.'/'],
        ['@type'=>'ListItem','position'=>2,'name'=>'Contact'],
    ]],
    ['@type'=>'ContactPage','@id'=>$canonicalUrl.'#webpage','name'=>$pageTitle,'description'=>$pageDescription,'url'=>$canonicalUrl,'about'=>['@id'=>$siteUrl.'/#organization']],
]];
$schemaMarkup = json_encode($schemaData,JSON_PRETTY_PRINT|JSON_UNESCAPED_SLASHES|JSON_UNESCAPED_UNICODE);
include $_SERVER['DOCUMENT_ROOT'].'/includes/head.php';
?>
<body>
<?php include $_SERVER['DOCUMENT_ROOT'].'/includes/header.php'; ?>

<style>
/* ═══════════════════════════════════════════════════════════════
   /contact/ — Page-specific styles — Premium tier ≥400L
   Signature: split hero — dark left with form, image right with gold overlay bar
   ═══════════════════════════════════════════════════════════════ */
.contact-hero { position:relative; min-height:100vh; display:grid; grid-template-columns:1fr 1fr; overflow:hidden; }
.contact-hero-left { background:var(--color-primary); padding:calc(var(--nav-height,72px) + var(--space-3xl)) var(--space-2xl) var(--space-3xl); display:flex; flex-direction:column; justify-content:center; position:relative; z-index:2; }
.contact-hero-left::before { content:''; position:absolute; top:0; right:0; bottom:0; width:1px; background:linear-gradient(to bottom,transparent,rgba(var(--color-accent-rgb),0.6),transparent); }
/* Signature: floating accent dot pattern on left panel */
.contact-hero-left::after { content:''; position:absolute; inset:0; background-image:radial-gradient(circle,rgba(255,255,255,0.04) 1px,transparent 1px); background-size:32px 32px; z-index:0; pointer-events:none; }
.contact-hero-right { position:relative; background-image:url('<?php echo $heroPhoto; ?>'); background-size:cover; background-position:center; }
.contact-hero-right::before { content:''; position:absolute; inset:0; background:linear-gradient(180deg,rgba(0,0,0,0.15) 0%,rgba(0,0,0,0.4) 100%); z-index:1; }
/* Gold bar on image right side */
.contact-hero-right::after { content:''; position:absolute; right:0; top:0; bottom:0; width:6px; background:linear-gradient(to bottom,var(--color-accent),rgba(var(--color-accent-rgb),0.2)); z-index:2; }
.contact-hero-left-inner { position:relative; z-index:1; max-width:480px; }
.hero-eyebrow { display:inline-flex; align-items:center; gap:var(--space-xs); background:rgba(var(--color-accent-rgb),0.15); border:1px solid rgba(var(--color-accent-rgb),0.45); color:var(--color-accent); font-size:0.76rem; font-weight:700; letter-spacing:0.12em; text-transform:uppercase; padding:5px 12px; border-radius:var(--radius-sm); margin-bottom:var(--space-md); }
.contact-hero h1 { font-family:var(--font-heading,'Unbounded',sans-serif); font-size:clamp(2rem,3.5vw,3.2rem); font-weight:800; line-height:1.08; text-wrap:balance; color:var(--color-secondary); margin:0 0 var(--space-md); }
.contact-hero h1 .accent { color:var(--color-accent); }
.contact-hero-desc { font-size:1rem; line-height:1.78; color:rgba(255,255,255,0.65); margin:0 0 var(--space-xl); max-width:44ch; }
/* Contact info cards */
.contact-info-cards { display:flex; flex-direction:column; gap:var(--space-sm); margin-bottom:var(--space-xl); }
.info-card { display:flex; gap:var(--space-md); align-items:flex-start; background:rgba(255,255,255,0.06); border:1px solid rgba(255,255,255,0.1); border-radius:var(--radius); padding:var(--space-md); }
.info-card-icon { width:40px; height:40px; border-radius:50%; background:rgba(var(--color-accent-rgb),0.15); display:flex; align-items:center; justify-content:center; color:var(--color-accent); flex-shrink:0; }
.info-card-icon svg { width:18px; height:18px; }
.info-card-label { font-size:0.72rem; font-weight:700; letter-spacing:0.1em; text-transform:uppercase; color:rgba(255,255,255,0.4); margin:0 0 3px; }
.info-card-value { font-size:0.95rem; font-weight:600; color:var(--color-secondary); margin:0; }
.info-card-value a { color:var(--color-secondary); transition:color 0.2s; }
.info-card-value a:hover { color:var(--color-accent); }
.hours-list { display:flex; flex-direction:column; gap:4px; }
.hours-row { display:flex; justify-content:space-between; font-size:0.85rem; color:rgba(255,255,255,0.65); }
.hours-row span:first-child { color:rgba(255,255,255,0.4); }
/* Right side overlay content */
.contact-hero-right-overlay { position:absolute; bottom:var(--space-2xl); left:var(--space-xl); right:var(--space-xl); z-index:3; }
.hero-trust-strip { display:flex; gap:var(--space-md); flex-wrap:wrap; }
.trust-badge-dark { display:inline-flex; align-items:center; gap:6px; background:rgba(0,0,0,0.55); backdrop-filter:blur(8px); border:1px solid rgba(255,255,255,0.15); color:#fff; font-size:0.8rem; font-weight:600; padding:8px 14px; border-radius:100px; }
.trust-badge-dark svg { width:13px; height:13px; color:var(--color-accent); }
/* Full-width form section */
.contact-form-section { padding:var(--space-3xl) 0; background:var(--color-bg-alt,#f8f8f6); }
.contact-form-grid { display:grid; grid-template-columns:1.2fr 1fr; gap:var(--space-3xl); align-items:start; }
.container-ct { max-width:var(--max-width,1280px); margin:0 auto; padding:0 var(--space-lg); }
.eyebrow-label { display:inline-block; font-size:0.74rem; font-weight:700; letter-spacing:0.14em; text-transform:uppercase; color:var(--color-accent); margin-bottom:var(--space-sm); }
.section-h2 { font-family:var(--font-heading,'Unbounded',sans-serif); font-size:clamp(1.6rem,3vw,2.4rem); font-weight:800; color:var(--color-primary); text-wrap:balance; margin:0 0 var(--space-sm); line-height:1.15; }
.answer-block { font-size:1rem; line-height:1.78; color:var(--color-text); border-left:3px solid var(--color-accent); background:rgba(var(--color-accent-rgb),0.06); padding:var(--space-sm) var(--space-md); border-radius:0 var(--radius-sm) var(--radius-sm) 0; margin:0 0 var(--space-md); }
/* Main contact form */
.main-contact-form { background:#fff; border-radius:var(--radius-lg); padding:var(--space-2xl); box-shadow:var(--shadow-md); border:1px solid rgba(0,0,0,0.06); }
.form-title { font-family:var(--font-heading,'Unbounded',sans-serif); font-size:1.1rem; font-weight:800; color:var(--color-primary); margin:0 0 var(--space-lg); }
.form-row { display:grid; grid-template-columns:1fr 1fr; gap:var(--space-md); }
.form-group { display:flex; flex-direction:column; gap:6px; }
.form-group label { font-size:0.78rem; font-weight:700; color:var(--color-text-light); text-transform:uppercase; letter-spacing:0.06em; }
.form-group input,.form-group select,.form-group textarea { width:100%; padding:12px 16px; border:1.5px solid var(--color-border,#e2e2e2); border-radius:var(--radius-sm); font-size:0.95rem; color:var(--color-text); background:#fff; transition:border-color 0.2s,box-shadow 0.2s; font-family:var(--font-body,'Inter',sans-serif); }
.form-group input:focus,.form-group select:focus,.form-group textarea:focus { outline:none; border-color:var(--color-accent); box-shadow:0 0 0 3px rgba(var(--color-accent-rgb),0.12); }
.form-consent-fieldset { border:1px solid rgba(0,0,0,0.07); border-radius:var(--radius); padding:var(--space-md); margin:var(--space-sm) 0 0; display:flex; flex-direction:column; gap:var(--space-sm); background:var(--color-bg-alt,#f8f8f6); }
.form-consent-legend { font-size:0.78rem; font-weight:700; color:var(--color-text-light); text-transform:uppercase; letter-spacing:0.06em; padding:0 var(--space-xs); }
.form-consent-item { display:flex; gap:10px; align-items:flex-start; cursor:pointer; }
.form-consent-item input[type="checkbox"] { width:17px; height:17px; flex-shrink:0; margin-top:2px; accent-color:var(--color-accent); }
.consent-label { font-size:0.8rem; line-height:1.6; color:var(--color-text-light); }
.consent-label a { color:var(--color-accent); }
.consent-label strong { color:var(--color-text); }
.required-star { color:#c00; font-weight:700; }
.form-consent-required .consent-label { font-weight:600; color:var(--color-text); }
.btn-form-submit { width:100%; background:var(--color-primary); color:var(--color-secondary); font-family:var(--font-heading,'Unbounded',sans-serif); font-size:0.88rem; font-weight:800; padding:16px; border:2px solid var(--color-primary); border-radius:var(--radius); cursor:pointer; transition:all 0.25s; letter-spacing:0.04em; text-transform:uppercase; margin-top:var(--space-md); }
.btn-form-submit:hover { background:var(--color-accent); border-color:var(--color-accent); color:var(--color-primary); transform:translateY(-2px); box-shadow:0 6px 20px rgba(var(--color-accent-rgb),0.35); }
/* Sidebar info */
.contact-sidebar { display:flex; flex-direction:column; gap:var(--space-lg); }
.sidebar-block { background:#fff; border-radius:var(--radius-lg); padding:var(--space-xl); border:1px solid rgba(0,0,0,0.06); box-shadow:var(--shadow-sm); }
.sidebar-block-title { font-family:var(--font-heading,'Unbounded',sans-serif); font-size:0.9rem; font-weight:800; color:var(--color-primary); margin:0 0 var(--space-md); }
.sidebar-item { display:flex; gap:var(--space-sm); align-items:flex-start; margin-bottom:var(--space-sm); }
.sidebar-item:last-child { margin-bottom:0; }
.sidebar-item-icon { width:36px; height:36px; border-radius:50%; background:rgba(var(--color-accent-rgb),0.1); display:flex; align-items:center; justify-content:center; color:var(--color-accent); flex-shrink:0; }
.sidebar-item-icon svg { width:16px; height:16px; }
.sidebar-item-label { font-size:0.72rem; font-weight:700; text-transform:uppercase; letter-spacing:0.08em; color:var(--color-text-light); margin:0 0 2px; }
.sidebar-item-value { font-size:0.9rem; color:var(--color-text); margin:0; font-weight:500; }
.sidebar-item-value a { color:var(--color-text); transition:color 0.2s; }
.sidebar-item-value a:hover { color:var(--color-accent); }
.sidebar-hours { display:flex; flex-direction:column; gap:6px; }
.sidebar-hours-row { display:flex; justify-content:space-between; font-size:0.88rem; color:var(--color-text); }
.sidebar-hours-row .day { color:var(--color-text-light); font-size:0.82rem; }
.expect-list { display:flex; flex-direction:column; gap:var(--space-sm); list-style:none; padding:0; margin:0; }
.expect-item { display:flex; gap:10px; align-items:flex-start; font-size:0.88rem; line-height:1.6; color:var(--color-text); }
.expect-check { width:20px; height:20px; border-radius:50%; background:var(--color-accent); display:flex; align-items:center; justify-content:center; flex-shrink:0; margin-top:1px; }
.expect-check svg { width:10px; height:10px; color:var(--color-primary); }
/* Coverage quick strip */
.coverage-strip-section { padding:var(--space-2xl) 0; background:var(--color-primary); }
.coverage-strip-inner { display:flex; gap:var(--space-xl); align-items:center; flex-wrap:wrap; }
.coverage-strip-label { font-family:var(--font-heading,'Unbounded',sans-serif); font-size:0.72rem; font-weight:800; text-transform:uppercase; letter-spacing:0.1em; color:rgba(255,255,255,0.4); flex-shrink:0; }
.coverage-strip-cities { display:flex; gap:var(--space-md); flex-wrap:wrap; align-items:center; }
.coverage-city-tag { font-size:0.82rem; color:rgba(255,255,255,0.7); font-weight:500; display:flex; align-items:center; gap:5px; }
.coverage-city-tag::before { content:''; width:5px; height:5px; border-radius:50%; background:var(--color-accent); display:inline-block; }
@media (max-width:1100px) { .contact-hero { grid-template-columns:1fr; min-height:auto; } .contact-hero-right { min-height:320px; } .contact-form-grid { grid-template-columns:1fr; } }
@media (max-width:600px) { .form-row { grid-template-columns:1fr; } .contact-hero-left { padding:calc(var(--nav-height,72px) + var(--space-xl)) var(--space-md) var(--space-xl); } .coverage-strip-inner { flex-direction:column; align-items:flex-start; } }
</style>

<!-- HERO: Split left/right -->
<section class="contact-hero" aria-label="Contact A&S Contracting Services">
  <div class="contact-hero-left">
    <div class="contact-hero-left-inner">
      <nav aria-label="Breadcrumb" style="display:flex;align-items:center;gap:var(--space-xs);font-size:0.8rem;color:rgba(255,255,255,0.35);margin-bottom:var(--space-md);">
        <a href="/" style="color:rgba(255,255,255,0.35);transition:color 0.2s;">Home</a>
        <span style="color:rgba(255,255,255,0.2);">›</span>
        <span aria-current="page" style="color:rgba(255,255,255,0.55);">Contact</span>
      </nav>
      <span class="hero-eyebrow">Warrenton, MO — Free Estimates</span>
      <h1>Get a <span class="accent">Free Written</span><br>Estimate for Your<br>Project</h1>
      <p class="contact-hero-desc">A&amp;S Contracting Services provides free, no-obligation written estimates for all project types across Warrenton, MO and a 50-mile radius. Tell us what you need — we'll come out, assess it, and give you a number you can actually plan around.</p>
      <div class="contact-info-cards">
        <div class="info-card">
          <div class="info-card-icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg></div>
          <div>
            <p class="info-card-label">Location</p>
            <p class="info-card-value">Warrenton, MO 63383 — Serving 50-mile radius</p>
          </div>
        </div>
        <div class="info-card">
          <div class="info-card-icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg></div>
          <div>
            <p class="info-card-label">Hours</p>
            <div class="hours-list">
              <div class="hours-row"><span>Mon – Fri</span><span>7:00 AM – 6:00 PM</span></div>
              <div class="hours-row"><span>Saturday</span><span>8:00 AM – 3:00 PM</span></div>
              <div class="hours-row"><span>Sunday</span><span>Closed</span></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="contact-hero-right" role="img" aria-label="A&S Contracting Services project in Warren County, MO">
    <div class="contact-hero-right-overlay">
      <div class="hero-trust-strip">
        <span class="trust-badge-dark"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>Licensed &amp; Insured</span>
        <span class="trust-badge-dark"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><polyline points="20 6 9 17 4 12"/></svg>Free Written Estimates</span>
        <span class="trust-badge-dark"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/></svg>No Obligation</span>
      </div>
    </div>
  </div>
</section>

<!-- COVERAGE STRIP -->
<div class="coverage-strip-section" aria-label="Cities served">
  <div class="container-ct">
    <div class="coverage-strip-inner">
      <span class="coverage-strip-label">We serve:</span>
      <div class="coverage-strip-cities">
        <?php
        $cities = ['Warrenton','Wright City','Wentzville','Troy','Washington','Jonesburg','Foristell','Mexico','Montgomery City','Moscow Mills'];
        foreach ($cities as $city): ?>
        <span class="coverage-city-tag"><?php echo $city; ?>, MO</span>
        <?php endforeach; ?>
        <span class="coverage-city-tag" style="color:var(--color-accent);font-weight:700;">+ 50-mile radius →</span>
      </div>
    </div>
  </div>
</div>

<!-- FULL CONTACT FORM -->
<section class="contact-form-section" aria-label="Contact form">
  <div class="container-ct">
    <div class="contact-form-grid">

      <div class="reveal-up">
        <div class="main-contact-form">
          <p class="form-title">Send Us Your Project Details</p>
          <form action="<?php echo htmlspecialchars($formAction); ?>" method="POST" novalidate>
            <input type="text"   name="_honey"          style="display:none !important" tabindex="-1" autocomplete="off" aria-hidden="true">
            <input type="hidden" name="_next"            value="/thank-you">
            <input type="hidden" name="_consent_version" value="v2.1">
            <input type="hidden" name="_consent_page"   value="<?php echo htmlspecialchars($_SERVER['REQUEST_URI']); ?>">

            <div class="form-row">
              <div class="form-group">
                <label for="ct-name">Full Name <span class="required-star">*</span></label>
                <input type="text" id="ct-name" name="name" placeholder="Jane Smith" required autocomplete="name">
              </div>
              <div class="form-group">
                <label for="ct-phone">Phone Number <span class="required-star">*</span></label>
                <input type="tel" id="ct-phone" name="phone" placeholder="(573) 555-0100" required autocomplete="tel">
              </div>
            </div>

            <div class="form-row" style="margin-top:var(--space-md);">
              <div class="form-group">
                <label for="ct-email">Email Address <span class="required-star">*</span></label>
                <input type="email" id="ct-email" name="email" placeholder="you@email.com" required autocomplete="email">
              </div>
              <div class="form-group">
                <label for="ct-city">Your City / Zip</label>
                <input type="text" id="ct-city" name="city" placeholder="Warrenton, MO 63383" autocomplete="address-level2">
              </div>
            </div>

            <div class="form-group" style="margin-top:var(--space-md);">
              <label for="ct-service">Service Needed</label>
              <select id="ct-service" name="service">
                <option value="">Select a service (optional)</option>
                <?php foreach ($services as $s): ?>
                <option value="<?php echo htmlspecialchars($s['name']); ?>"><?php echo htmlspecialchars($s['name']); ?></option>
                <?php endforeach; ?>
                <option value="Multiple Services">Multiple Services / General Contracting</option>
                <option value="Not Sure">Not Sure — Need Assessment</option>
              </select>
            </div>

            <div class="form-group" style="margin-top:var(--space-md);">
              <label for="ct-message">Project Description</label>
              <textarea id="ct-message" name="message" rows="5" placeholder="Describe your project — approximate size, current condition, timeline, any specific concerns (storm damage, age, code requirements, etc.)"></textarea>
            </div>

            <fieldset class="form-consent-fieldset">
              <legend class="form-consent-legend">Communication Consent</legend>

              <label class="form-consent-item">
                <input type="checkbox" name="email_opt_in" value="yes" class="consent-checkbox">
                <span class="consent-label">
                  <strong>Email updates (optional):</strong> I agree to receive emails from A&amp;S Contracting Services about my inquiry, services, and promotions. I can unsubscribe anytime.
                </span>
              </label>

              <label class="form-consent-item">
                <input type="checkbox" name="sms_opt_in" value="yes" class="consent-checkbox">
                <span class="consent-label">
                  <strong>SMS/Text messages (optional):</strong> I agree to receive text messages from A&amp;S Contracting Services at the phone number I provided. Message types may include appointment reminders, estimate follow-ups, and service updates. Message frequency varies. Message and data rates may apply. Reply STOP to unsubscribe, HELP for help. <strong>Consent is not a condition of purchase.</strong>
                </span>
              </label>

              <label class="form-consent-item form-consent-required">
                <input type="checkbox" name="terms_accepted" value="yes" class="consent-checkbox" required>
                <span class="consent-label">
                  I have read and agree to the
                  <a href="/privacy-policy/">Privacy Policy</a>
                  and
                  <a href="/terms/">Terms of Service</a>. <span class="required-star">*</span>
                </span>
              </label>
            </fieldset>

            <button type="submit" class="btn-form-submit">
              Send My Project Request →
            </button>
          </form>
        </div>
      </div>

      <!-- Sidebar -->
      <div class="contact-sidebar reveal-right">

        <div class="sidebar-block">
          <p class="sidebar-block-title">Contact Information</p>
          <div class="sidebar-item">
            <div class="sidebar-item-icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg></div>
            <div>
              <p class="sidebar-item-label">Service Base</p>
              <p class="sidebar-item-value">Warrenton, MO 63383</p>
            </div>
          </div>
          <?php if (!empty($email)): ?>
          <div class="sidebar-item">
            <div class="sidebar-item-icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg></div>
            <div>
              <p class="sidebar-item-label">Email</p>
              <p class="sidebar-item-value"><a href="mailto:<?php echo htmlspecialchars($email); ?>"><?php echo htmlspecialchars($email); ?></a></p>
            </div>
          </div>
          <?php endif; ?>
          <?php if (!empty($phone)): ?>
          <div class="sidebar-item">
            <div class="sidebar-item-icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 13.35 19.79 19.79 0 0 1 1.61 4.73 2 2 0 0 1 3.58 2.54h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L7.91 10.1a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"/></svg></div>
            <div>
              <p class="sidebar-item-label">Phone</p>
              <p class="sidebar-item-value"><a href="tel:<?php echo preg_replace('/\D/','',$phone); ?>"><?php echo htmlspecialchars($phone); ?></a></p>
            </div>
          </div>
          <?php endif; ?>
          <div class="sidebar-item">
            <div class="sidebar-item-icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg></div>
            <div>
              <p class="sidebar-item-label">Hours</p>
              <div class="sidebar-hours">
                <div class="sidebar-hours-row"><span class="day">Mon – Fri</span><span>7:00 AM – 6:00 PM</span></div>
                <div class="sidebar-hours-row"><span class="day">Saturday</span><span>8:00 AM – 3:00 PM</span></div>
                <div class="sidebar-hours-row"><span class="day">Sunday</span><span>Closed</span></div>
              </div>
            </div>
          </div>
        </div>

        <div class="sidebar-block">
          <p class="sidebar-block-title">What to Expect</p>
          <ul class="expect-list">
            <li class="expect-item"><span class="expect-check"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" aria-hidden="true"><polyline points="20 6 9 17 4 12"/></svg></span>We confirm receipt of your request within one business day</li>
            <li class="expect-item"><span class="expect-check"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" aria-hidden="true"><polyline points="20 6 9 17 4 12"/></svg></span>On-site estimate scheduled within 3–7 days for most areas</li>
            <li class="expect-item"><span class="expect-check"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" aria-hidden="true"><polyline points="20 6 9 17 4 12"/></svg></span>Written estimate delivered — no verbal-only pricing</li>
            <li class="expect-item"><span class="expect-check"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" aria-hidden="true"><polyline points="20 6 9 17 4 12"/></svg></span>No pressure to proceed — the estimate is yours to keep</li>
            <li class="expect-item"><span class="expect-check"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" aria-hidden="true"><polyline points="20 6 9 17 4 12"/></svg></span>We answer questions clearly before any contract is signed</li>
          </ul>
        </div>

        <div class="sidebar-block" style="background:var(--color-primary);border-color:rgba(255,255,255,0.1);">
          <p class="sidebar-block-title" style="color:var(--color-secondary);">Service Area Reminder</p>
          <p style="font-size:0.88rem;line-height:1.72;color:rgba(255,255,255,0.6);margin:0;">A&amp;S Contracting Services operates within a 50-mile radius of Warrenton, MO — covering Warren County, St. Charles County, Lincoln County, Montgomery County, Franklin County, and parts of Audrain County. If your project is in this zone, we can reach you.</p>
          <a href="/service-areas/" style="display:inline-flex;align-items:center;gap:6px;color:var(--color-accent);font-size:0.85rem;font-weight:700;margin-top:var(--space-sm);">View full coverage area →</a>
        </div>

      </div>
    </div>
  </div>
</section>

<?php include $_SERVER['DOCUMENT_ROOT'].'/includes/footer.php'; ?>
</body>
</html>
