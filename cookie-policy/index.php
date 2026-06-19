<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
$pageTitle       = "Cookie Policy | A&S Contracting Services";
$pageDescription = "Cookie Policy for A&S Contracting Services. Explains the cookies and tracking technologies used on our website and how to manage them.";
$canonicalUrl    = $siteUrl . '/cookie-policy/';
$currentPage     = 'legal';
$cssVersion      = '5';

$schemaData = [
    '@context'   => 'https://schema.org',
    '@type'      => 'WebPage',
    '@id'        => $siteUrl . '/cookie-policy/#webpage',
    'name'       => 'Cookie Policy | ' . $siteName,
    'description'=> 'Cookie Policy for ' . $siteName . ' — what cookies we use and how to control them.',
    'url'        => $siteUrl . '/cookie-policy/',
    'publisher'  => ['@type' => 'Organization', 'name' => $siteName, '@id' => $siteUrl . '/#organization'],
    'breadcrumb' => [
        '@type'           => 'BreadcrumbList',
        'itemListElement' => [
            ['@type' => 'ListItem', 'position' => 1, 'name' => 'Home',          'item' => $siteUrl . '/'],
            ['@type' => 'ListItem', 'position' => 2, 'name' => 'Cookie Policy', 'item' => $siteUrl . '/cookie-policy/'],
        ],
    ],
];
$schemaMarkup = json_encode($schemaData, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
include $_SERVER['DOCUMENT_ROOT'].'/includes/head.php';
?>
<body>
<?php include $_SERVER['DOCUMENT_ROOT'].'/includes/header.php'; ?>

<style>
.legal-hero { background:var(--color-primary); padding:calc(var(--nav-height,72px) + var(--space-3xl)) 0 var(--space-2xl); }
.legal-hero-inner { max-width:var(--max-width,1280px); margin:0 auto; padding:0 var(--space-lg); }
.hero-breadcrumb { display:flex; align-items:center; gap:var(--space-xs); font-size:0.8rem; color:rgba(255,255,255,0.45); margin-bottom:var(--space-md); }
.hero-breadcrumb a { color:rgba(255,255,255,0.45); transition:color 0.2s; }
.hero-breadcrumb a:hover { color:var(--color-accent); }
.hero-breadcrumb span { color:rgba(255,255,255,0.25); }
.legal-hero-tag { display:inline-block; font-size:0.72rem; font-weight:700; letter-spacing:0.12em; text-transform:uppercase; color:var(--color-accent); border:1px solid rgba(var(--color-accent-rgb),0.4); padding:4px 10px; border-radius:var(--radius-sm); margin-bottom:var(--space-md); }
.legal-hero h1 { font-family:var(--font-heading,'Unbounded',sans-serif); font-size:clamp(1.8rem,3.5vw,2.8rem); font-weight:800; color:var(--color-secondary); margin:0 0 var(--space-md); line-height:1.1; }
.legal-effective { font-size:0.82rem; color:rgba(255,255,255,0.45); }
.legal-body { padding:var(--space-3xl) 0; background:var(--color-bg); }
.legal-container { max-width:760px; margin:0 auto; padding:0 var(--space-lg); }
.legal-prose h2 { font-family:var(--font-heading,'Unbounded',sans-serif); font-size:1.15rem; font-weight:800; color:var(--color-primary); margin:var(--space-2xl) 0 var(--space-md); padding-top:var(--space-lg); border-top:1px solid rgba(0,0,0,0.07); }
.legal-prose h2:first-child { border-top:none; margin-top:0; }
.legal-prose h3 { font-family:var(--font-heading,'Unbounded',sans-serif); font-size:0.9rem; font-weight:700; color:var(--color-primary); margin:var(--space-lg) 0 var(--space-sm); }
.legal-prose p { font-size:0.95rem; line-height:1.82; color:var(--color-text); margin:0 0 var(--space-md); }
.legal-prose ul { margin:0 0 var(--space-md) var(--space-lg); display:flex; flex-direction:column; gap:var(--space-xs); }
.legal-prose li { font-size:0.95rem; line-height:1.75; color:var(--color-text); }
.legal-prose a { color:var(--color-accent); }
.legal-prose strong { color:var(--color-primary); }
.legal-prose table { width:100%; border-collapse:collapse; margin:var(--space-md) 0; font-size:0.88rem; }
.legal-prose th { background:var(--color-bg-alt,#f8f8f6); padding:var(--space-sm) var(--space-md); text-align:left; font-family:var(--font-heading,'Unbounded',sans-serif); font-size:0.72rem; font-weight:700; letter-spacing:0.08em; text-transform:uppercase; color:var(--color-primary); border-bottom:2px solid rgba(0,0,0,0.08); }
.legal-prose td { padding:var(--space-sm) var(--space-md); border-bottom:1px solid rgba(0,0,0,0.06); color:var(--color-text); line-height:1.65; vertical-align:top; }
.legal-prose td:first-child { font-weight:600; color:var(--color-primary); white-space:nowrap; }
.legal-prose .disclaimer { font-size:0.82rem; line-height:1.65; color:var(--color-text-light); font-style:italic; border-top:1px solid rgba(0,0,0,0.07); margin-top:var(--space-2xl); padding-top:var(--space-lg); }
.legal-updated { font-size:0.8rem; color:var(--color-text-light); margin-top:var(--space-2xl); padding-top:var(--space-lg); border-top:1px solid rgba(0,0,0,0.07); }
</style>

<section class="legal-hero" aria-label="Cookie Policy">
  <div class="legal-hero-inner">
    <nav class="hero-breadcrumb" aria-label="Breadcrumb"><a href="/">Home</a><span>›</span><span aria-current="page">Cookie Policy</span></nav>
    <span class="legal-hero-tag">Legal</span>
    <h1>Cookie Policy</h1>
    <p class="legal-effective">Effective Date: <?php echo date('F j, Y'); ?></p>
  </div>
</section>

<section class="legal-body">
  <div class="legal-container">
    <div class="legal-prose">

      <h2>1. What Are Cookies?</h2>
      <p>Cookies are small text files placed on your device when you visit a website. They enable the website to remember your preferences or actions across sessions. Cookies can be "session" cookies (deleted when you close your browser) or "persistent" cookies (stored until expiration or manual deletion).</p>
      <p>We also use similar technologies such as web beacons and local storage. This Cookie Policy covers all such technologies on <?php echo htmlspecialchars($siteUrl); ?>.</p>

      <h2>2. Cookies We Use</h2>
      <table aria-label="Cookie inventory">
        <thead>
          <tr>
            <th>Cookie / Technology</th>
            <th>Provider</th>
            <th>Purpose</th>
            <th>Type</th>
            <th>Duration</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>_ga, _ga_*</td>
            <td>Google Analytics 4</td>
            <td>Analytics — tracks page views, sessions, user behavior to help us understand Site usage</td>
            <td>Analytics</td>
            <td>Up to 2 years</td>
          </tr>
          <tr>
            <td>Google Fonts requests</td>
            <td>Google LLC</td>
            <td>Loads typography (Unbounded, Fraunces, Inter fonts) from Google's CDN</td>
            <td>Functional</td>
            <td>Session</td>
          </tr>
          <tr>
            <td>cookie-consent-as-contracting</td>
            <td>A&S Contracting Services (localStorage)</td>
            <td>Stores your cookie banner dismissal preference so the banner is not shown on repeat visits</td>
            <td>Preference</td>
            <td>Until cleared</td>
          </tr>
          <tr>
            <td>Lucide Icons CDN requests</td>
            <td>unpkg.com / Lucide</td>
            <td>Loads icon library from CDN for visual icons on the Site</td>
            <td>Functional</td>
            <td>Session</td>
          </tr>
        </tbody>
      </table>

      <h2>3. Why We Use Cookies</h2>
      <h3>Functional Cookies</h3>
      <p>Functional cookies are necessary for the Site to work as intended. The cookie banner preference cookie (localStorage) is functional — without it, the consent banner would appear on every page load. We do not request consent for strictly functional cookies because they do not track or profile users.</p>
      <h3>Analytics Cookies</h3>
      <p>We use Google Analytics 4 to understand how visitors interact with our Site — which pages are viewed, how long sessions last, and how users navigate. This data is aggregated and does not identify you personally. It helps us improve the Site over time.</p>
      <h3>Third-Party CDN Requests</h3>
      <p>Google Fonts and the Lucide icon library are loaded from third-party CDNs. When your browser loads these resources, the CDN provider (Google, unpkg.com) may log your IP address and request details per their own privacy policies. We use these services because they provide reliable, globally-distributed delivery of fonts and icons.</p>

      <h2>4. Managing Cookies</h2>
      <p>You can manage or block cookies through your browser settings. Most browsers allow you to:</p>
      <ul>
        <li>View and delete cookies stored on your device</li>
        <li>Block cookies from specific sites or all sites</li>
        <li>Set your browser to notify you when a cookie is set</li>
      </ul>
      <p>Note that blocking all cookies may prevent some Site features from functioning correctly.</p>
      <p><strong>Google Analytics opt-out:</strong> Install the <a href="https://tools.google.com/dlpage/gaoptout" rel="noopener">Google Analytics Opt-Out Browser Add-On</a> to prevent your data from being sent to Google Analytics across all sites you visit.</p>
      <p><strong>Google Fonts opt-out:</strong> If you prefer not to have Google log your font requests, you may disable font loading in your browser or use a browser extension that blocks third-party requests.</p>

      <h2>5. Do Not Track</h2>
      <p>Some browsers offer a "Do Not Track" (DNT) signal. Our Site does not currently alter its data collection practices based on DNT signals. If we add DNT support in the future, we will update this Cookie Policy.</p>

      <h2>6. Changes to This Policy</h2>
      <p>We may update this Cookie Policy when we add or change the technologies we use. When we do, we will update the "Effective Date" above.</p>

      <h2>7. Contact</h2>
      <p>Questions about our use of cookies can be directed through our <a href="/contact/">Contact page</a>.</p>

      <p class="disclaimer">This Cookie Policy is provided as a general template. We recommend reviewing this document with a licensed Missouri attorney before publication.</p>
      <p class="legal-updated">Last Updated: <?php echo date('F Y'); ?></p>

    </div>
  </div>
</section>

<?php include $_SERVER['DOCUMENT_ROOT'].'/includes/footer.php'; ?>
