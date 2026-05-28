<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
$pageTitle       = "Page Not Found | A&S Contracting Services";
$pageDescription = "The page you were looking for doesn't exist. Browse A&S Contracting Services — general contractor in Warrenton, MO.";
$canonicalUrl    = $siteUrl . '/404';
$currentPage     = '';
$cssVersion      = '2.0';
$noindex         = true;

http_response_code(404);
include $_SERVER['DOCUMENT_ROOT'].'/includes/head.php';
?>
<body>
<?php include $_SERVER['DOCUMENT_ROOT'].'/includes/header.php'; ?>

<style>
/* ═══════════════════════════════════════════════════════════════
   /404.php — Not Found page (noindex)
   ═══════════════════════════════════════════════════════════════ */
.not-found-page { min-height:80vh; display:flex; align-items:center; justify-content:center; padding:calc(var(--nav-height,72px) + var(--space-3xl)) var(--space-lg) var(--space-3xl); background:var(--color-primary); position:relative; overflow:hidden; }
.not-found-page::before { content:''; position:absolute; left:50%; top:50%; transform:translate(-50%,-50%); width:800px; height:800px; background:radial-gradient(circle,rgba(var(--color-accent-rgb),0.07) 0%,transparent 65%); pointer-events:none; }
.not-found-404 { font-family:var(--font-heading,'Unbounded',sans-serif); font-size:clamp(6rem,18vw,14rem); font-weight:800; color:rgba(var(--color-accent-rgb),0.12); line-height:1; position:absolute; left:50%; top:50%; transform:translate(-50%,-50%); user-select:none; white-space:nowrap; pointer-events:none; }
.not-found-card { max-width:560px; width:100%; text-align:center; position:relative; z-index:1; }
.not-found-label { font-size:0.74rem; font-weight:700; letter-spacing:0.14em; text-transform:uppercase; color:var(--color-accent); margin-bottom:var(--space-md); display:block; }
.not-found-heading { font-family:var(--font-heading,'Unbounded',sans-serif); font-size:clamp(1.8rem,4vw,3rem); font-weight:800; color:var(--color-secondary); text-wrap:balance; margin:0 0 var(--space-md); line-height:1.1; }
.not-found-heading span { color:var(--color-accent); }
.not-found-body { font-size:1rem; line-height:1.78; color:rgba(255,255,255,0.6); max-width:44ch; margin:0 auto var(--space-2xl); }
.not-found-actions { display:flex; gap:var(--space-md); justify-content:center; flex-wrap:wrap; }
.btn-accent-lg { display:inline-flex; align-items:center; gap:8px; background:var(--color-accent); color:var(--color-primary); font-family:var(--font-heading,'Unbounded',sans-serif); font-size:0.82rem; font-weight:800; padding:14px 28px; border-radius:var(--radius); border:2px solid var(--color-accent); transition:all 0.2s; text-transform:uppercase; letter-spacing:0.04em; }
.btn-accent-lg:hover { background:#ffbb00; border-color:#ffbb00; transform:translateY(-2px); }
.btn-ghost-lg { display:inline-flex; align-items:center; gap:8px; background:transparent; color:var(--color-secondary); font-family:var(--font-heading,'Unbounded',sans-serif); font-size:0.82rem; font-weight:700; padding:14px 28px; border-radius:var(--radius); border:2px solid rgba(255,255,255,0.25); transition:all 0.2s; text-transform:uppercase; letter-spacing:0.04em; }
.btn-ghost-lg:hover { border-color:rgba(255,255,255,0.6); background:rgba(255,255,255,0.07); }
.not-found-links { margin-top:var(--space-2xl); display:flex; gap:var(--space-lg); justify-content:center; flex-wrap:wrap; }
.not-found-link { font-size:0.85rem; color:rgba(255,255,255,0.45); transition:color 0.2s; }
.not-found-link:hover { color:var(--color-accent); }
</style>

<div class="not-found-page">
  <span class="not-found-404" aria-hidden="true">404</span>
  <div class="not-found-card">
    <span class="not-found-label">Page Not Found</span>
    <h1 class="not-found-heading">This page <span>doesn't exist</span> — but we do.</h1>
    <p class="not-found-body">The URL you followed may have changed, expired, or been mistyped. A&amp;S Contracting Services is based in Warrenton, MO — here's where to go from here.</p>
    <div class="not-found-actions">
      <a href="/" class="btn-accent-lg">Go to Homepage</a>
      <a href="/contact/" class="btn-ghost-lg">Contact Us</a>
    </div>
    <div class="not-found-links">
      <a href="/services/" class="not-found-link">Services</a>
      <a href="/service-areas/" class="not-found-link">Service Area</a>
      <a href="/about/" class="not-found-link">About</a>
      <a href="/faq/" class="not-found-link">FAQ</a>
    </div>
  </div>
</div>

<?php include $_SERVER['DOCUMENT_ROOT'].'/includes/footer.php'; ?>
</body>
</html>
