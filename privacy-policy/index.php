<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
$pageTitle       = "Privacy Policy | A&S Contracting Services";
$pageDescription = "Privacy Policy for A&S Contracting Services. Explains how we collect, use, and protect your personal information. Includes CCPA/CPRA rights and SMS consent terms.";
$canonicalUrl    = $siteUrl . '/privacy-policy/';
$currentPage     = 'legal';
$cssVersion      = '2.0';

$schemaData = ['@context'=>'https://schema.org','@graph'=>[
    ['@type'=>'BreadcrumbList','itemListElement'=>[
        ['@type'=>'ListItem','position'=>1,'name'=>'Home','item'=>$siteUrl.'/'],
        ['@type'=>'ListItem','position'=>2,'name'=>'Privacy Policy'],
    ]],
]];
$schemaMarkup = json_encode($schemaData,JSON_PRETTY_PRINT|JSON_UNESCAPED_SLASHES|JSON_UNESCAPED_UNICODE);
include $_SERVER['DOCUMENT_ROOT'].'/includes/head.php';
?>
<body>
<?php include $_SERVER['DOCUMENT_ROOT'].'/includes/header.php'; ?>

<style>
/* ═══════════════════════════════════════════════════════════════
   Legal pages — shared styles + privacy-policy specific
   ═══════════════════════════════════════════════════════════════ */
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

<!-- HERO -->
<section class="legal-hero" aria-label="Privacy Policy">
  <div class="legal-hero-inner">
    <nav class="hero-breadcrumb" aria-label="Breadcrumb"><a href="/">Home</a><span>›</span><span aria-current="page">Privacy Policy</span></nav>
    <span class="legal-hero-tag">Legal</span>
    <h1>Privacy Policy</h1>
    <p class="legal-effective">Effective Date: <?php echo date('F j, Y'); ?></p>
  </div>
</section>

<!-- BODY -->
<section class="legal-body">
  <div class="legal-container">
    <div class="legal-prose">

      <h2>1. Introduction</h2>
      <p>A&S Contracting Services ("Company," "we," "us," or "our") operates the website at <?php echo htmlspecialchars($siteUrl); ?> (the "Site"). This Privacy Policy explains how we collect, use, disclose, and protect your personal information when you visit our Site or submit a request for services.</p>
      <p>By using our Site or submitting a contact form, you agree to the collection and use of information as described in this Policy.</p>

      <h2>2. Information We Collect</h2>
      <h3>Information You Provide Directly</h3>
      <p>When you submit a contact or estimate request form on our Site, we collect:</p>
      <ul>
        <li>Name</li>
        <li>Email address</li>
        <li>Phone number</li>
        <li>Physical location or city/zip code</li>
        <li>Service type requested</li>
        <li>Project description and any additional details you provide</li>
        <li>Communication consent selections (email opt-in, SMS opt-in, Terms acceptance)</li>
      </ul>
      <h3>Automatically Collected Information</h3>
      <p>When you visit our Site, we automatically collect certain technical data including your IP address, browser type, device type, pages viewed, time spent on pages, referring URL, and general geographic location derived from IP address. This data is collected via cookies and analytics tools including Google Analytics 4 (GA4).</p>

      <h2>3. How We Use Your Information</h2>
      <p>We use the information we collect to:</p>
      <ul>
        <li>Respond to your estimate or service requests</li>
        <li>Schedule and coordinate on-site visits and project consultations</li>
        <li>Send transactional communications related to your inquiry or project</li>
        <li>Send marketing emails if you opted in (you may unsubscribe at any time)</li>
        <li>Send SMS messages if you opted in (reply STOP to unsubscribe)</li>
        <li>Improve our Site and services through analytics</li>
        <li>Comply with legal obligations</li>
        <li>Maintain records for legal defense in case of TCPA or other compliance inquiries</li>
      </ul>

      <h2>4. SMS / Text Message Communications</h2>
      <div class="highlight-box">
        <p><strong>SMS Consent:</strong> If you opted in to SMS communications on our contact form, you consent to receive text messages from A&S Contracting Services at the phone number you provided. Message types may include appointment reminders, estimate follow-ups, service updates, and promotional messages. Message frequency varies. Message and data rates may apply. Reply <strong>STOP</strong> to unsubscribe at any time. Reply <strong>HELP</strong> for assistance. Consent is not a condition of purchase.</p>
      </div>
      <p>We do not share your phone number with third parties for their own marketing purposes. Your SMS opt-in data is not sold or transferred to other companies.</p>

      <h2>5. Cookies and Tracking Technologies</h2>
      <p>Our Site uses cookies and similar technologies. Cookies we use include:</p>
      <ul>
        <li><strong>Google Analytics 4 (GA4):</strong> Tracks page views, session data, and user behavior to help us understand how visitors use the Site. GA4 data is retained for 14 months by default.</li>
        <li><strong>Google Fonts:</strong> Loads typography resources from Google's CDN. Google may collect limited data in accordance with their privacy policy.</li>
        <li><strong>Preference cookies:</strong> We store a cookie to remember your cookie banner dismissal preference (key: "cookie-consent-as-contracting").</li>
      </ul>
      <p>You may opt out of Google Analytics tracking by installing the <a href="https://tools.google.com/dlpage/gaoptout" rel="noopener">Google Analytics Opt-Out Browser Add-On</a>. For general cookie management, see your browser's privacy settings.</p>

      <h2>6. How We Share Your Information</h2>
      <p>We do not sell your personal information. We may share your information with:</p>
      <ul>
        <li><strong>Page One Insights, LLC:</strong> Our website provider and CRM platform (design.pageone.cloud) that processes form submissions and stores lead data on our behalf under a data processing agreement. Page One Insights receives a copy of all form submissions via the lead management endpoint.</li>
        <li><strong>Google LLC:</strong> For analytics (GA4) and font delivery. Subject to Google's privacy policy.</li>
        <li><strong>Law enforcement or government agencies:</strong> When required by law, subpoena, or court order.</li>
      </ul>

      <h2>7. Data Retention</h2>
      <p>We retain form submission data (name, email, phone, project details, consent records) for a minimum of 4 years to comply with Missouri statute of limitations requirements and to maintain TCPA consent documentation. Analytics data is retained per Google Analytics settings (default 14 months). You may request deletion of your personal data subject to our legal retention obligations (see Section 8).</p>

      <h2 id="ccpa-rights">8. Your Rights — CCPA/CPRA and Multi-State Privacy Rights</h2>
      <p>Depending on your state of residence, you may have the following rights regarding your personal information:</p>
      <ul>
        <li><strong>Right to Know:</strong> Request disclosure of personal data categories we collect, use, and share.</li>
        <li><strong>Right to Access:</strong> Request a copy of the specific personal information we hold about you.</li>
        <li><strong>Right to Delete:</strong> Request deletion of your personal information, subject to legal retention requirements.</li>
        <li><strong>Right to Correct:</strong> Request correction of inaccurate personal information.</li>
        <li><strong>Right to Opt Out of Sale/Sharing:</strong> We do not sell personal information. You may nonetheless direct us not to share your data with third parties by contacting us.</li>
        <li><strong>Right to Non-Discrimination:</strong> We will not discriminate against you for exercising your privacy rights.</li>
        <li><strong>Right to Limit Sensitive Data Use:</strong> For sensitive categories of personal information, you may request we limit use to what is necessary for service delivery.</li>
      </ul>
      <p>To exercise any of these rights, contact us via the <a href="/contact/">Contact page</a>. We will respond within 45 days of receipt of a verifiable request. We may need to verify your identity before fulfilling a deletion or access request.</p>
      <p><strong>Do Not Sell or Share My Personal Information:</strong> A&S Contracting Services does not sell personal information. To request that we do not share your data with any third-party partners, submit a written request through our <a href="/contact/">Contact page</a>.</p>

      <h2>9. Children's Privacy</h2>
      <p>Our Site is not directed at children under 13. We do not knowingly collect personal information from children under 13. If you believe we have inadvertently collected information from a child under 13, contact us immediately for prompt deletion.</p>

      <h2>10. Security</h2>
      <p>We implement industry-standard technical and organizational measures to protect your personal information from unauthorized access, loss, or disclosure. Form submissions are transmitted over HTTPS. Lead data is stored in a secured database provided by Page One Insights, LLC. No transmission method or storage system is 100% secure — we cannot guarantee absolute security.</p>

      <h2>11. Third-Party Links</h2>
      <p>Our Site may link to third-party websites (e.g., review platforms, material suppliers). We are not responsible for the privacy practices of those sites. We encourage you to review their privacy policies before providing any personal information.</p>

      <h2>12. Changes to This Policy</h2>
      <p>We may update this Privacy Policy periodically. When we do, we will update the "Effective Date" at the top of this page. Continued use of the Site after changes constitutes acceptance of the revised Policy.</p>

      <h2>13. Contact Us</h2>
      <p>For questions, requests, or concerns about this Privacy Policy, contact A&S Contracting Services through our <a href="/contact/">Contact page</a> or by mail at: A&S Contracting Services, Warrenton, MO 63383.</p>

      <p class="disclaimer">This Privacy Policy is provided as a general template. We recommend reviewing this document with a licensed Missouri attorney before publication.</p>
      <p class="legal-updated">Last Updated: <?php echo date('F Y'); ?></p>

    </div>
  </div>
</section>

<?php include $_SERVER['DOCUMENT_ROOT'].'/includes/footer.php'; ?>
</body>
</html>
