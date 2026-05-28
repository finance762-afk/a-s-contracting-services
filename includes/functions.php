<?php
/**
 * includes/functions.php — Shared helper functions
 * A&S Contracting Services
 * Phase 2 — Nav/Footer/Head
 */


/**
 * Check if the given $page key matches the current page ($currentPage global).
 * Returns true when the strings match exactly.
 */
function isActivePage(string $page): bool {
    global $currentPage;
    return isset($currentPage) && $currentPage === $page;
}

/**
 * Format a raw phone number for display.
 * Input:  "5735551234" or "573-555-1234" or "(573) 555-1234"
 * Output: "(573) 555-1234"
 * Falls back gracefully if the number isn't exactly 10 digits.
 */
function formatPhone(string $phone): string {
    $digits = preg_replace('/\D/', '', $phone);
    if (strlen($digits) === 10) {
        return '(' . substr($digits, 0, 3) . ') ' . substr($digits, 3, 3) . '-' . substr($digits, 6);
    }
    if (strlen($digits) === 11 && $digits[0] === '1') {
        $digits = substr($digits, 1);
        return '(' . substr($digits, 0, 3) . ') ' . substr($digits, 3, 3) . '-' . substr($digits, 6);
    }
    return $phone; // return original if we can't parse it
}

/**
 * Convert a service name to a URL-safe slug.
 * "Windows & Doors" → "windows-doors"
 */
function getServiceSlug(string $name): string {
    global $services;
    // Look up in the $services array first — slugs are canonical
    if (isset($services) && is_array($services)) {
        foreach ($services as $svc) {
            if (strtolower($svc['name']) === strtolower($name)) {
                return $svc['slug'];
            }
        }
    }
    // Fallback: generate slug from the name
    $slug = strtolower(trim($name));
    $slug = preg_replace('/[^a-z0-9\s-]/', '', $slug); // remove special chars
    $slug = preg_replace('/[\s_]+/', '-', $slug);       // spaces → hyphens
    $slug = preg_replace('/-+/', '-', $slug);           // collapse multiple hyphens
    return trim($slug, '-');
}

/**
 * Convert a city name to a URL-safe slug.
 * "St. Charles" → "st-charles"
 */
function getAreaSlug(string $city): string {
    global $serviceAreas;
    // Look up in serviceAreas array first
    if (isset($serviceAreas) && is_array($serviceAreas)) {
        foreach ($serviceAreas as $area) {
            if (strtolower($area['city']) === strtolower($city)) {
                return $area['slug'];
            }
        }
    }
    // Fallback: generate slug
    $slug = strtolower(trim($city));
    $slug = preg_replace('/[^a-z0-9\s-]/', '', $slug);
    $slug = preg_replace('/[\s_]+/', '-', $slug);
    $slug = preg_replace('/-+/', '-', $slug);
    return trim($slug, '-');
}

/**
 * Generate a Service schema JSON-LD block for an individual service page.
 *
 * @param array  $service  One entry from the global $services array.
 * @param string $pageUrl  Canonical URL for this service page.
 * @return string          JSON-LD string (ready to embed in <script> tag).
 */
function generateServiceSchema(array $service, string $pageUrl = ''): string {
    global $siteUrl, $siteName, $phone, $address;

    $schema = [
        '@context'    => 'https://schema.org',
        '@graph'      => [
            [
                '@type'       => 'Service',
                'name'        => $service['name'],
                'description' => $service['description'],
                'provider'    => ['@id' => $siteUrl . '/#organization'],
                'areaServed'  => [
                    '@type'           => 'GeoCircle',
                    'geoMidpoint'     => ['@type' => 'GeoCoordinates', 'latitude' => '38.8153', 'longitude' => '-91.1418'],
                    'geoRadius'       => '80467',
                ],
                'url'         => $pageUrl ?: ($siteUrl . '/services/' . $service['slug'] . '/'),
            ],
            [
                '@type'  => 'BreadcrumbList',
                'itemListElement' => [
                    ['@type' => 'ListItem', 'position' => 1, 'name' => 'Home',     'item' => $siteUrl . '/'],
                    ['@type' => 'ListItem', 'position' => 2, 'name' => 'Services', 'item' => $siteUrl . '/services/'],
                    ['@type' => 'ListItem', 'position' => 3, 'name' => $service['name']],
                ],
            ],
        ],
    ];

    return json_encode($schema, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
}

/**
 * Generate an FAQPage schema JSON-LD block.
 *
 * @param array $faqs  Array of ['question' => '...', 'answer' => '...'] pairs.
 * @return string      JSON-LD string.
 */
function generateFAQSchema(array $faqs): string {
    $items = [];
    foreach ($faqs as $faq) {
        $items[] = [
            '@type'          => 'Question',
            'name'           => $faq['question'],
            'acceptedAnswer' => [
                '@type' => 'Answer',
                'text'  => $faq['answer'],
            ],
        ];
    }

    $schema = [
        '@context'   => 'https://schema.org',
        '@type'      => 'FAQPage',
        'mainEntity' => $items,
    ];

    return json_encode($schema, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
}

/**
 * Generate Open Graph + canonical meta tag HTML for a given page.
 * Pages that set variables before including head.php don't need this —
 * use it for dynamically built pages or partial includes.
 *
 * @param string $title       Page title.
 * @param string $description Meta description (150-160 chars).
 * @param string $canonical   Full canonical URL.
 * @param string $ogImage     OG image URL (optional).
 * @return string             Raw HTML string.
 */
function generateMetaTags(string $title, string $description, string $canonical, string $ogImage = ''): string {
    global $siteName, $logoUrl;
    $image = $ogImage ?: $logoUrl;
    $html  = '<title>' . htmlspecialchars($title) . '</title>' . "\n";
    $html .= '<meta name="description" content="' . htmlspecialchars($description) . '">' . "\n";
    $html .= '<link rel="canonical" href="' . htmlspecialchars($canonical) . '">' . "\n";
    $html .= '<meta property="og:title" content="' . htmlspecialchars($title) . '">' . "\n";
    $html .= '<meta property="og:description" content="' . htmlspecialchars($description) . '">' . "\n";
    $html .= '<meta property="og:url" content="' . htmlspecialchars($canonical) . '">' . "\n";
    $html .= '<meta property="og:image" content="' . htmlspecialchars($image) . '">' . "\n";
    $html .= '<meta property="og:site_name" content="' . htmlspecialchars($siteName) . '">' . "\n";
    return $html;
}
