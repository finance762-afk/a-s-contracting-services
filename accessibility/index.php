<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
$pageTitle       = "Accessibility Statement | A&S Contracting Services";
$pageDescription = "Accessibility Statement for A&S Contracting Services. Our commitment to WCAG 2.1 AA accessibility and how to request accommodations.";
$canonicalUrl    = $siteUrl . '/accessibility/';
$currentPage     = 'legal';
$cssVersion      = '2.0';

$schemaData = ['@context'=>'https://schema.org','@graph'=>[
    ['@type'=>'BreadcrumbList','itemListElement'=>[
        ['@type'=>'ListItem','position'=>1,'name'=>'Home','item'=>$siteUrl.'/'],
        ['@type'=>'ListItem','position'=>2,'name'=>'Accessibility'],
    ]],
]];
$schemaMarkup = json_encode($schemaData,JSON_PRETTY_PRINT|JSON_UNESCAPED_SLASHES|JSON_UNESCAPED_UNICODE);
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
.legal-prose .highlight-box { background:rgba(var(--color-accent-rgb),0.06); border-left:3px solid var(--color-accent); border-radius:0 var(--radius-sm) var(--radius-sm) 0; padding:var(--space-md) var(--space-lg); margin:var(--space-md) 0; }
.legal-prose .highlight-box p { margin:0; font-size:0.9rem; }
.legal-prose .disclaimer { font-size:0.82rem; line-height:1.65; color:var(--color-text-light); font-style:italic; border-top:1px solid rgba(0,0,0,0.07); margin-top:var(--space-2xl); padding-top:var(--space-lg); }
.legal-updated { font-size:0.8rem; color:var(--color-text-light); margin-top:var(--space-2xl); padding-top:var(--space-lg); border-top:1px solid rgba(0,0,0,0.07); }
</style>

<section class="legal-hero" aria-label="Accessibility Statement">
  <div class="legal-hero-inner">
    <nav class="hero-breadcrumb" aria-label="Breadcrumb"><a href="/">Home</a><span>›</span><span aria-current="page">Accessibility</span></nav>
    <span class="legal-hero-tag">Accessibility</span>
    <h1>Accessibility Statement</h1>
    <p class="legal-effective">Effective Date: <?php echo date('F j, Y'); ?></p>
  </div>
</section>

<section class="legal-body">
  <div class="legal-container">
    <div class="legal-prose">

      <h2>Our Commitment</h2>
      <p>A&S Contracting Services is committed to ensuring that our website at <?php echo htmlspecialchars($siteUrl); ?> is accessible to individuals with disabilities. We strive to comply with the Web Content Accessibility Guidelines (WCAG) 2.1 at Level AA as published by the World Wide Web Consortium (W3C).</p>
      <p>We believe that all people should have equal access to information about our services — regardless of ability, assistive technology, or how they access the web.</p>

      <h2>Conformance Status</h2>
      <div class="highlight-box">
        <p><strong>Conformance Level:</strong> A&S Contracting Services is working toward substantial conformance with WCAG 2.1 Level AA. We continuously audit and improve our Site to address accessibility barriers.</p>
      </div>

      <h2>Accessibility Features We've Implemented</h2>
      <p>Our Site includes the following accessibility features:</p>
      <ul>
        <li><strong>Skip-to-content link:</strong> A "Skip to main content" link appears at the top of every page, visible on keyboard focus, allowing users to bypass the navigation bar.</li>
        <li><strong>Semantic HTML:</strong> We use proper HTML5 landmark elements — <code>&lt;header&gt;</code>, <code>&lt;nav&gt;</code>, <code>&lt;main&gt;</code>, <code>&lt;footer&gt;</code>, <code>&lt;section&gt;</code> — to define page structure for screen reader users.</li>
        <li><strong>ARIA labels:</strong> Navigation, form fields, and interactive elements include ARIA labels and attributes (aria-label, aria-current, aria-expanded) for screen reader compatibility.</li>
        <li><strong>Keyboard navigation:</strong> All interactive elements — navigation links, buttons, form fields, and FAQ accordion items — are reachable and operable via keyboard.</li>
        <li><strong>Focus indicators:</strong> Visible focus outlines appear on all interactive elements when accessed via keyboard, using high-contrast gold (#e6a800) outlines.</li>
        <li><strong>Color contrast:</strong> Body text and interactive elements are designed to meet WCAG 2.1 AA contrast ratios (minimum 4.5:1 for normal text, 3:1 for large text).</li>
        <li><strong>Image alt text:</strong> All meaningful images include descriptive alt text. Decorative images use empty alt attributes (alt="").</li>
        <li><strong>Form labels:</strong> All form inputs are associated with visible, programmatic labels.</li>
        <li><strong>Reduced motion:</strong> We respect the <code>prefers-reduced-motion</code> CSS media query — users who have requested reduced motion in their operating system settings will see all animations and transitions disabled.</li>
        <li><strong>Responsive design:</strong> The Site is fully responsive and functions correctly at all screen sizes, including mobile and tablet.</li>
        <li><strong>Font sizing:</strong> Text is sized using relative units (rem/em) and can be scaled by browser font size settings without breaking layouts.</li>
      </ul>

      <h2>Known Limitations</h2>
      <p>While we strive for full accessibility, some limitations may exist:</p>
      <ul>
        <li>Third-party content loaded from external CDNs (Google Fonts, Lucide icons via unpkg.com) is outside our direct control. We select tools with good accessibility records.</li>
        <li>Older client photos sourced from our project portfolio may have limited descriptive alt text — we are working to improve these descriptions.</li>
      </ul>

      <h2>Supported Assistive Technologies</h2>
      <p>Our Site is designed to be compatible with the following assistive technologies:</p>
      <ul>
        <li>Screen readers: NVDA (Windows), JAWS (Windows), VoiceOver (macOS/iOS), TalkBack (Android)</li>
        <li>Keyboard-only navigation</li>
        <li>Browser zoom up to 200%</li>
        <li>High contrast mode</li>
        <li>Modern browsers: Chrome, Firefox, Safari, Edge (current versions)</li>
      </ul>

      <h2>Requesting Accommodations</h2>
      <p>If you encounter a barrier on our Site that prevents you from accessing information about our services, or if you need this content in an alternative format, please contact us. We will make every reasonable effort to provide the information in an accessible way.</p>
      <p>To request an accommodation or report an accessibility issue:</p>
      <ul>
        <li>Use our <a href="/contact/">Contact page</a> to send a message describing the barrier and the page where you encountered it.</li>
        <li>We aim to respond to accessibility requests within 2 business days.</li>
      </ul>

      <h2>Feedback</h2>
      <p>We welcome feedback on the accessibility of our Site. If you find areas where we could do better, please let us know. Ongoing feedback helps us identify and fix barriers we may have missed. Send your feedback through our <a href="/contact/">Contact page</a>.</p>

      <h2>Technical Specifications</h2>
      <p>Our Site is built using HTML5, CSS3, and PHP. Accessibility features rely on the following standards:</p>
      <ul>
        <li>WCAG 2.1 (Web Content Accessibility Guidelines), W3C Recommendation</li>
        <li>WAI-ARIA 1.1 (Accessible Rich Internet Applications), W3C Recommendation</li>
        <li>HTML 5.2, W3C Recommendation</li>
      </ul>

      <p class="disclaimer">This Accessibility Statement is provided as a general template. We recommend reviewing this document with a licensed Missouri attorney before publication.</p>
      <p class="legal-updated">Last Updated: <?php echo date('F Y'); ?></p>

    </div>
  </div>
</section>

<?php include $_SERVER['DOCUMENT_ROOT'].'/includes/footer.php'; ?>
</body>
</html>
