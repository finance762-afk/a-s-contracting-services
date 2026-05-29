<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
$pageTitle       = "Thank You — We'll Be in Touch | A&S Contracting Services";
$pageDescription = "Thank you for contacting A&S Contracting Services. We'll respond within one business day and schedule your free estimate.";
$canonicalUrl    = $siteUrl . '/thank-you/';
$currentPage     = '';
$cssVersion      = '2.1';
$noindex         = true;

include $_SERVER['DOCUMENT_ROOT'].'/includes/head.php';
?>
<body>
<?php include $_SERVER['DOCUMENT_ROOT'].'/includes/header.php'; ?>

<style>
/* ═══════════════════════════════════════════════════════════════
   /thank-you/ — Confirmation page (noindex)
   ═══════════════════════════════════════════════════════════════ */
.ty-page { min-height:80vh; display:flex; align-items:center; justify-content:center; padding:calc(var(--nav-height,72px) + var(--space-3xl)) var(--space-lg) var(--space-3xl); background:var(--color-bg-alt,#f8f8f6); position:relative; overflow:hidden; }
.ty-page::before { content:''; position:absolute; top:-100px; right:-100px; width:600px; height:600px; background:radial-gradient(circle,rgba(var(--color-accent-rgb),0.06) 0%,transparent 65%); pointer-events:none; }
.ty-card { background:#fff; border-radius:var(--radius-lg); padding:var(--space-3xl) var(--space-2xl); max-width:580px; width:100%; text-align:center; box-shadow:var(--shadow-lg); border:1px solid rgba(0,0,0,0.06); position:relative; z-index:1; }
.ty-icon { width:80px; height:80px; border-radius:50%; background:rgba(var(--color-accent-rgb),0.1); display:flex; align-items:center; justify-content:center; margin:0 auto var(--space-xl); color:var(--color-accent); }
.ty-icon svg { width:36px; height:36px; }
.ty-label { font-size:0.74rem; font-weight:700; letter-spacing:0.14em; text-transform:uppercase; color:var(--color-accent); margin-bottom:var(--space-sm); display:block; }
.ty-heading { font-family:var(--font-heading,'Unbounded',sans-serif); font-size:clamp(1.6rem,3vw,2.4rem); font-weight:800; color:var(--color-primary); text-wrap:balance; margin:0 0 var(--space-md); line-height:1.15; }
.ty-body { font-size:1rem; line-height:1.78; color:var(--color-text-light); max-width:44ch; margin:0 auto var(--space-xl); }
.ty-next-steps { background:var(--color-bg-alt,#f8f8f6); border-radius:var(--radius); padding:var(--space-lg); margin:0 0 var(--space-xl); text-align:left; }
.ty-next-steps h3 { font-family:var(--font-heading,'Unbounded',sans-serif); font-size:0.82rem; font-weight:800; color:var(--color-primary); margin:0 0 var(--space-md); text-transform:uppercase; letter-spacing:0.06em; }
.ty-steps { display:flex; flex-direction:column; gap:var(--space-sm); list-style:none; padding:0; margin:0; }
.ty-step { display:flex; gap:var(--space-sm); align-items:flex-start; font-size:0.9rem; line-height:1.65; color:var(--color-text); }
.ty-step-num { width:24px; height:24px; border-radius:50%; background:var(--color-primary); color:var(--color-accent); font-family:var(--font-heading,'Unbounded',sans-serif); font-size:0.72rem; font-weight:800; display:flex; align-items:center; justify-content:center; flex-shrink:0; }
.ty-actions { display:flex; gap:var(--space-md); justify-content:center; flex-wrap:wrap; }
.btn-accent-lg { display:inline-flex; align-items:center; gap:8px; background:var(--color-accent); color:var(--color-primary); font-family:var(--font-heading,'Unbounded',sans-serif); font-size:0.82rem; font-weight:800; padding:14px 28px; border-radius:var(--radius); border:2px solid var(--color-accent); transition:all 0.2s; text-transform:uppercase; letter-spacing:0.04em; }
.btn-accent-lg:hover { background:#ffbb00; border-color:#ffbb00; transform:translateY(-2px); }
.btn-dark-outline { display:inline-flex; align-items:center; gap:8px; background:transparent; color:var(--color-primary); font-family:var(--font-heading,'Unbounded',sans-serif); font-size:0.82rem; font-weight:700; padding:14px 28px; border-radius:var(--radius); border:2px solid rgba(0,0,0,0.2); transition:all 0.2s; text-transform:uppercase; letter-spacing:0.04em; }
.btn-dark-outline:hover { border-color:var(--color-primary); background:rgba(0,0,0,0.04); }
</style>

<div class="ty-page">
  <div class="ty-card">
    <div class="ty-icon">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
    </div>
    <span class="ty-label">Request Received</span>
    <h1 class="ty-heading">We've got your request — thank you.</h1>
    <p class="ty-body">Your estimate request has been sent to A&amp;S Contracting Services. A member of our team will follow up with you within one business day to confirm details and schedule your on-site estimate.</p>

    <div class="ty-next-steps">
      <h3>What happens next</h3>
      <ul class="ty-steps">
        <li class="ty-step"><span class="ty-step-num">1</span> We review your request and confirm we serve your area (usually same day)</li>
        <li class="ty-step"><span class="ty-step-num">2</span> We contact you to schedule an on-site estimate visit — typically within 3–7 days</li>
        <li class="ty-step"><span class="ty-step-num">3</span> We come out, assess your project, and provide a written estimate — no cost, no obligation</li>
        <li class="ty-step"><span class="ty-step-num">4</span> You decide whether to move forward — no pressure either way</li>
      </ul>
    </div>

    <div class="ty-actions">
      <a href="/" class="btn-accent-lg">Back to Home</a>
      <a href="/services/" class="btn-dark-outline">Browse Services</a>
    </div>
  </div>
</div>

<?php include $_SERVER['DOCUMENT_ROOT'].'/includes/footer.php'; ?>
</body>
</html>
