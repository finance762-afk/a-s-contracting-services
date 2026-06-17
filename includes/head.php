<?php
/**
 * includes/head.php — Global <head> section
 * A&S Contracting Services
 * Phase 2 — Nav/Footer/Head
 */

// Load config + functions if not already loaded
if (!isset($siteName)) {
    include $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
}
if (!function_exists('isActivePage')) {
    include $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
}

// Page-level defaults — pages set these BEFORE including head.php
if (!isset($pageTitle))        $pageTitle        = "$siteName | General Contractor in {$address['city']}, {$address['state']}";
if (!isset($pageDescription))  $pageDescription  = "A&S Contracting Services is a licensed general contractor in Warrenton, MO. Roofing, siding, gutters, windows, interior renovations, and more. Get a free estimate.";
if (!isset($canonicalUrl))     $canonicalUrl     = $siteUrl . '/';
if (!isset($ogImage))          $ogImage          = $logoUrl;
if (!isset($cssVersion))       $cssVersion       = '3';
if (!isset($noindex))          $noindex          = false;
if (!isset($heroImagePreload)) $heroImagePreload  = '';
if (!isset($schemaMarkup))     $schemaMarkup     = '';

// Build LocalBusiness JSON-LD
$_serviceOffers = [];
foreach ($services as $_svc) {
    $_serviceOffers[] = [
        '@type'       => 'Offer',
        'itemOffered' => [
            '@type'       => 'Service',
            'name'        => $_svc['name'],
            'description' => $_svc['description'],
        ],
    ];
}
$_schema = [
    '@context'        => 'https://schema.org',
    '@type'           => 'GeneralContractor',
    '@id'             => $siteUrl . '/#organization',
    'name'            => $siteName,
    'description'     => 'A&S Contracting Services is a licensed and insured general contractor based in Warrenton, Missouri. We serve residential and commercial clients within a 50-mile radius, providing roofing, siding, gutters, windows, interior renovations, drywall, and full-scale construction.',
    'url'             => $siteUrl,
    'logo'            => $logoUrl,
    'image'           => $logoUrl,
    'address'         => [
        '@type'           => 'PostalAddress',
        'streetAddress'   => $address['street'] ?: '',
        'addressLocality' => $address['city'],
        'addressRegion'   => $address['state'],
        'postalCode'      => $address['zip'],
        'addressCountry'  => 'US',
    ],
    'geo'             => [
        '@type'     => 'GeoCoordinates',
        'latitude'  => '38.8153',
        'longitude' => '-91.1418',
    ],
    'areaServed'      => [
        '@type'       => 'GeoCircle',
        'geoMidpoint' => [
            '@type'     => 'GeoCoordinates',
            'latitude'  => '38.8153',
            'longitude' => '-91.1418',
        ],
        'geoRadius'   => '80467',
    ],
    'openingHoursSpecification' => [
        [
            '@type'     => 'OpeningHoursSpecification',
            'dayOfWeek' => ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday'],
            'opens'     => '07:00',
            'closes'    => '18:00',
        ],
        [
            '@type'     => 'OpeningHoursSpecification',
            'dayOfWeek' => 'Saturday',
            'opens'     => '08:00',
            'closes'    => '15:00',
        ],
    ],
    'foundingDate'    => (string)$yearEstablished,
    'hasOfferCatalog' => [
        '@type'           => 'OfferCatalog',
        'name'            => $siteName . ' Services',
        'itemListElement' => $_serviceOffers,
    ],
    'aggregateRating' => [
        '@type'       => 'AggregateRating',
        'ratingValue' => '5.0',
        'reviewCount' => '12',
        'bestRating'  => '5',
        'worstRating' => '1',
    ],
    'priceRange'      => '$$',
    'sameAs'          => [],
];
if ($phone)  $_schema['telephone'] = $phone;
if ($email)  $_schema['email']     = $email;
$_schemaJson = json_encode($_schema, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Primary SEO -->
  <title><?php echo htmlspecialchars($pageTitle); ?></title>
  <meta name="description" content="<?php echo htmlspecialchars($pageDescription); ?>">
  <?php if ($noindex): ?>
  <meta name="robots" content="noindex,nofollow">
  <?php else: ?>
  <meta name="robots" content="index,follow,max-snippet:-1,max-image-preview:large,max-video-preview:-1">
  <?php endif; ?>
  <link rel="canonical" href="<?php echo htmlspecialchars($canonicalUrl); ?>">

  <!-- Open Graph -->
  <meta property="og:type"        content="website">
  <meta property="og:title"       content="<?php echo htmlspecialchars($pageTitle); ?>">
  <meta property="og:description" content="<?php echo htmlspecialchars($pageDescription); ?>">
  <meta property="og:url"         content="<?php echo htmlspecialchars($canonicalUrl); ?>">
  <meta property="og:image"       content="<?php echo htmlspecialchars($ogImage); ?>">
  <meta property="og:site_name"   content="<?php echo htmlspecialchars($siteName); ?>">
  <meta property="og:locale"      content="en_US">

  <!-- Performance: preconnect + dns-prefetch -->
  <link rel="preconnect"    href="https://fonts.googleapis.com">
  <link rel="preconnect"    href="https://fonts.gstatic.com" crossorigin>
  <link rel="dns-prefetch"  href="https://db.pageone.cloud">
  <link rel="dns-prefetch"  href="https://unpkg.com">

  <?php if (!empty($heroImagePreload)): ?>
  <link rel="preload" as="image" href="<?php echo htmlspecialchars($heroImagePreload); ?>" fetchpriority="high">
  <?php endif; ?>

  <!-- Google Fonts: Unbounded + Fraunces + Inter (variable, premium roofing/construction tier) -->
  <link href="https://fonts.googleapis.com/css2?family=Unbounded:wght@200..900&family=Fraunces:ital,opsz,wght@0,9..144,100..900;1,9..144,100..900&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">

  <!-- Favicon -->
  <link rel="icon"             type="image/png" href="/assets/images/favicon.png">
  <link rel="icon"             type="image/svg+xml" href="/assets/images/favicon.svg">
  <link rel="apple-touch-icon" href="/assets/images/favicon.png">

  <!-- Stylesheet (cache-busted) -->
  <link rel="stylesheet" href="/assets/css/framework.css?v=<?php echo htmlspecialchars($cssVersion); ?>">

  <!-- Google Analytics — replace G-XXXXXXXXXX post-launch
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-XXXXXXXXXX"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'G-XXXXXXXXXX');
  </script> -->

  <!-- JSON-LD: GeneralContractor (LocalBusiness) -->
  <script type="application/ld+json">
<?php echo $_schemaJson; ?>
  </script>

  <?php if (!empty($schemaMarkup)): ?>
  <!-- JSON-LD: Page-specific schema -->
  <script type="application/ld+json">
  <?php echo $schemaMarkup; ?>
  </script>
  <?php endif; ?>

<?php require_once __DIR__ . '/edit-mode.php'; ?>
</head>
