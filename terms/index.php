<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
$pageTitle       = "Terms of Service | A&S Contracting Services";
$pageDescription = "Terms of Service for A&S Contracting Services. Governs your use of the A&S Contracting Services website and the services provided.";
$canonicalUrl    = $siteUrl . '/terms/';
$currentPage     = 'legal';
$cssVersion      = '2.2';

$schemaData = [
    '@context'   => 'https://schema.org',
    '@type'      => 'WebPage',
    '@id'        => $siteUrl . '/terms/#webpage',
    'name'       => 'Terms of Service | ' . $siteName,
    'description'=> 'Terms of Service for ' . $siteName . ' — governs your use of the website and services provided.',
    'url'        => $siteUrl . '/terms/',
    'publisher'  => ['@type' => 'Organization', 'name' => $siteName, '@id' => $siteUrl . '/#organization'],
    'breadcrumb' => [
        '@type'           => 'BreadcrumbList',
        'itemListElement' => [
            ['@type' => 'ListItem', 'position' => 1, 'name' => 'Home',             'item' => $siteUrl . '/'],
            ['@type' => 'ListItem', 'position' => 2, 'name' => 'Terms of Service', 'item' => $siteUrl . '/terms/'],
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
.legal-prose .disclaimer { font-size:0.82rem; line-height:1.65; color:var(--color-text-light); font-style:italic; border-top:1px solid rgba(0,0,0,0.07); margin-top:var(--space-2xl); padding-top:var(--space-lg); }
.legal-updated { font-size:0.8rem; color:var(--color-text-light); margin-top:var(--space-2xl); padding-top:var(--space-lg); border-top:1px solid rgba(0,0,0,0.07); }
</style>

<section class="legal-hero" aria-label="Terms of Service">
  <div class="legal-hero-inner">
    <nav class="hero-breadcrumb" aria-label="Breadcrumb"><a href="/">Home</a><span>›</span><span aria-current="page">Terms of Service</span></nav>
    <span class="legal-hero-tag">Legal</span>
    <h1>Terms of Service</h1>
    <p class="legal-effective">Effective Date: <?php echo date('F j, Y'); ?></p>
  </div>
</section>

<section class="legal-body">
  <div class="legal-container">
    <div class="legal-prose">

      <h2>1. Agreement to Terms</h2>
      <p>By accessing or using the website at <?php echo htmlspecialchars($siteUrl); ?> (the "Site"), you agree to be bound by these Terms of Service ("Terms"). If you do not agree to these Terms, do not use the Site. These Terms govern your use of the Site only — they are separate from any project contract or service agreement between you and A&S Contracting Services for construction services.</p>

      <h2>2. Who We Are</h2>
      <p>A&S Contracting Services ("Company," "we," "us," "our") is a licensed and insured general contractor based in Warrenton, Missouri. We operate the Site to provide information about our services and to accept estimate requests from prospective clients.</p>

      <h2>3. Use of the Site</h2>
      <p>You may use the Site for lawful purposes only. You agree not to:</p>
      <ul>
        <li>Use the Site in any way that violates applicable federal, state, or local laws</li>
        <li>Attempt to gain unauthorized access to any portion of the Site or its underlying systems</li>
        <li>Submit false, misleading, or fraudulent information through contact or estimate forms</li>
        <li>Use automated tools, bots, or scrapers to extract data from the Site without our written permission</li>
        <li>Interfere with the proper functioning of the Site or any related systems</li>
      </ul>

      <h2>4. Estimate Requests and No Contract Formation</h2>
      <p>Submitting an estimate request form on this Site does not create a contract, commitment, or obligation by either party. Estimate requests are an expression of interest only. A binding contract for construction services is formed only upon: (a) issuance of a written proposal by A&S Contracting Services; (b) acceptance of that proposal by the client in writing; and (c) execution of a separate written project contract signed by both parties.</p>
      <p>We reserve the right to decline any estimate request or project inquiry at our sole discretion.</p>

      <h2>5. Accuracy of Information</h2>
      <p>We strive to keep the information on this Site accurate and current. However, we make no warranty that the Site content — including service descriptions, pricing ranges, timelines, and coverage areas — is complete, accurate, or up to date. Pricing ranges displayed on service pages are general estimates only and do not constitute a quote or offer. Actual project pricing is determined through on-site assessment and written proposal.</p>

      <h2>6. Intellectual Property</h2>
      <p>All content on this Site — including text, images, graphics, design, and code — is the property of A&S Contracting Services or its licensors and is protected by applicable copyright and trademark law. You may not reproduce, distribute, or create derivative works from Site content without our written permission.</p>

      <h2>7. Disclaimer of Warranties</h2>
      <p>THE SITE IS PROVIDED "AS IS" AND "AS AVAILABLE" WITHOUT WARRANTIES OF ANY KIND, EXPRESS OR IMPLIED. TO THE FULLEST EXTENT PERMITTED BY LAW, A&S CONTRACTING SERVICES DISCLAIMS ALL WARRANTIES INCLUDING IMPLIED WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE, AND NON-INFRINGEMENT. We do not warrant that the Site will be uninterrupted, error-free, or free of viruses or other harmful components.</p>

      <h2>8. Limitation of Liability</h2>
      <p>TO THE FULLEST EXTENT PERMITTED BY APPLICABLE LAW, A&S CONTRACTING SERVICES SHALL NOT BE LIABLE FOR ANY INDIRECT, INCIDENTAL, SPECIAL, CONSEQUENTIAL, OR PUNITIVE DAMAGES ARISING FROM YOUR USE OF OR INABILITY TO USE THE SITE, EVEN IF WE HAVE BEEN ADVISED OF THE POSSIBILITY OF SUCH DAMAGES. Our total liability to you for any claim arising from your use of the Site shall not exceed one hundred dollars ($100).</p>

      <h2>9. Third-Party Links</h2>
      <p>The Site may contain links to third-party websites. These links are provided for your convenience only. We have no control over the content, privacy practices, or terms of third-party sites and are not responsible for them. Linking to a third-party site does not constitute our endorsement.</p>

      <h2>10. Privacy</h2>
      <p>Your use of the Site is also governed by our <a href="/privacy-policy/">Privacy Policy</a>, which is incorporated into these Terms by reference. Please review our Privacy Policy to understand our practices regarding the collection and use of your personal information.</p>

      <h2>11. TCPA Consent and Communications</h2>
      <p>If you submitted a contact form and provided a phone number or opted into SMS communications, you acknowledge that you consented to be contacted by A&S Contracting Services as described in the form at the time of submission and in our <a href="/privacy-policy/">Privacy Policy</a>. To opt out of SMS communications, reply STOP to any text message. To opt out of email communications, use the unsubscribe link in any marketing email.</p>

      <h2>12. Governing Law</h2>
      <p>These Terms shall be governed by and construed in accordance with the laws of the State of Missouri, without regard to its conflict-of-law provisions. Any legal action arising under these Terms shall be brought exclusively in the state or federal courts located in Warren County, Missouri, and you consent to personal jurisdiction in those courts.</p>

      <h2>13. Changes to These Terms</h2>
      <p>We may update these Terms at any time. When we do, we will update the "Effective Date" at the top of this page. Your continued use of the Site after any changes constitutes your acceptance of the revised Terms.</p>

      <h2>14. Contact</h2>
      <p>For questions about these Terms, contact A&S Contracting Services through our <a href="/contact/">Contact page</a> or by mail at: A&S Contracting Services, Warrenton, MO 63383.</p>

      <p class="disclaimer">This Terms of Service document is provided as a general template. We recommend reviewing this document with a licensed Missouri attorney before publication.</p>
      <p class="legal-updated">Last Updated: <?php echo date('F Y'); ?></p>

    </div>
  </div>
</section>

<?php include $_SERVER['DOCUMENT_ROOT'].'/includes/footer.php'; ?>
</body>
</html>
