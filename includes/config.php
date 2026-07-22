<?php
// ============================================================
// includes/config.php — Site Configuration
// A&S Contracting Services
// ============================================================

// Identity
$slug            = 'a-s-contracting-services';
$siteName        = 'A&S Contracting Services';
$tagline         = 'Building, Repairing, and Improving Homes Across Warrenton and Surrounding Areas.';
$phone           = '(636) 359-7204';
$phoneSecondary  = '';
$email           = 'blake@ascontractingservices.com';
$industry        = 'general_contractor';
$yearEstablished = 2023;
$yearsInBusiness = 3;

// Address
$address = [
    'street' => '',
    'city'   => 'Warrenton',
    'state'  => 'MO',
    'zip'    => '63383',
];

// Domain / URL
// No production_domain in build-plan — using preview URL per build standards
$domain  = 'ascontractingservices.com';
$siteUrl = 'https://' . $domain;
// NOTE: $canonicalUrl is NOT set here — each page sets its own before including head.php

// Brand Colors
$colors = [
    'primary'       => '#000000',
    'primary_dark'  => '#1a1a1a',
    'primary_rgb'   => '0, 0, 0',
    'secondary'     => '#ffffff',
    'secondary_rgb' => '255, 255, 255',
    'accent'        => '#c0c2c4',
    'accent_rgb'    => '192, 194, 196',
];

// Analytics
$googleAnalyticsId = 'G-XXXXXXXXXX';

// SEO
$primaryKeyword    = 'general contractor warrenton mo';
$secondaryKeywords = [
    'roofing contractor warrenton mo',
    'siding contractor warrenton mo',
    'gutter installation warrenton mo',
    'windows and doors contractor warrenton mo',
    'roof replacement warrenton mo',
    'exterior home repair warrenton mo',
    'roofing and siding warrenton mo',
    'contractor warren county mo',
    'home remodeling warrenton mo',
    'soffit and fascia installation warrenton mo',
];

// Services
$services = [
    [
        'name'        => 'Roofing',
        'slug'        => 'roofing',
        'description' => 'Professional roofing installation, repair, and replacement services for residential and commercial properties. Our experienced team ensures quality craftsmanship and long-lasting protection for your home.',
        'keywords'    => [
            'roofing contractor Warrenton MO',
            'roof repair Warrenton',
            'residential roofing services',
            'roof installation',
            'roofing company Missouri',
        ],
    ],
    [
        'name'        => 'Siding',
        'slug'        => 'siding',
        'description' => 'High-quality siding installation and repair to enhance your home\'s curb appeal and weather protection. We offer a variety of materials and styles to match your home\'s aesthetic.',
        'keywords'    => [
            'siding contractor Warrenton MO',
            'siding installation',
            'vinyl siding Warrenton',
            'exterior siding repair',
            'home siding contractor Missouri',
        ],
    ],
    [
        'name'        => 'Gutters',
        'slug'        => 'gutters',
        'description' => 'Expert gutter installation, cleaning, and maintenance to protect your home from water damage. Our durable gutter systems keep your foundation and landscaping safe.',
        'keywords'    => [
            'gutter installation Warrenton MO',
            'gutter repair Warrenton',
            'gutter cleaning services',
            'seamless gutters Missouri',
            'residential gutters',
        ],
    ],
    [
        'name'        => 'Soffit',
        'slug'        => 'soffit',
        'description' => 'Professional soffit installation and repair to improve ventilation and protect your home\'s undercarriage. Quality soffit work enhances both functionality and appearance.',
        'keywords'    => [
            'soffit installation Warrenton MO',
            'soffit repair',
            'soffit contractor',
            'fascia and soffit Warrenton',
            'home soffit services Missouri',
        ],
    ],
    [
        'name'        => 'Fascia',
        'slug'        => 'fascia',
        'description' => 'Durable fascia installation and replacement to protect your roof edges and improve your home\'s exterior appearance. We use premium materials for long-term performance.',
        'keywords'    => [
            'fascia installation Warrenton MO',
            'fascia repair',
            'fascia replacement',
            'soffit and fascia contractor',
            'roofline repair Missouri',
        ],
    ],
    [
        'name'        => 'Windows & Doors',
        'slug'        => 'windows-doors',
        'description' => 'Custom window and door installation services that enhance energy efficiency and curb appeal. We offer quality products with professional installation for your home.',
        'keywords'    => [
            'window installation Warrenton MO',
            'door installation Warrenton',
            'replacement windows Missouri',
            'patio doors contractor',
            'home windows and doors',
        ],
    ],
    [
        'name'        => 'Full Scale Interior Work',
        'slug'        => 'full-scale-interior-work',
        'description' => 'Comprehensive interior renovation and construction services including drywall, flooring, painting, and custom finishes. Transform your home\'s interior with our expert craftsmanship.',
        'keywords'    => [
            'interior remodel Warrenton MO',
            'home renovation Warrenton',
            'interior construction services',
            'remodeling contractor Missouri',
            'full interior renovation',
        ],
    ],
    [
        'name'        => 'Exterior Work',
        'slug'        => 'exterior-work',
        'description' => 'Complete exterior construction and renovation services including siding, roofing, and landscaping integration. Protect and enhance your home\'s outdoor appearance.',
        'keywords'    => [
            'exterior work Warrenton MO',
            'exterior contractor',
            'home exterior renovation',
            'exterior construction Missouri',
            'property exterior services',
        ],
    ],
    [
        'name'        => 'Dry Wall',
        'slug'        => 'dry-wall',
        'description' => 'Professional drywall installation, finishing, and repair for smooth, flawless interior walls. Our skilled team ensures quality results for residential and commercial projects.',
        'keywords'    => [
            'drywall contractor Warrenton MO',
            'drywall installation',
            'drywall repair Warrenton',
            'drywall finishing services',
            'interior drywall Missouri',
        ],
    ],
    [
        'name'        => 'General Contracting',
        'slug'        => 'general-contracting',
        'description' => 'Full-service general contracting for residential and commercial projects of any size. From planning to completion, we manage every aspect of your construction project.',
        'keywords'    => [
            'general contractor Warrenton MO',
            'general contracting services',
            'construction contractor Missouri',
            'residential construction Warrenton',
            'home builder services',
        ],
    ],
];

// Service Areas (premium tier — city pages built in Phase 3B)
$serviceAreas = [
    [
        'city'    => 'Warrenton',
        'state'   => 'MO',
        'zip'     => '63383',
        'slug'    => 'warrenton-mo',
        'primary' => true,
    ],
];

// Social Links (populate when client provides handles)
$socialLinks = [
    // 'facebook'  => 'https://facebook.com/...',
    // 'instagram' => 'https://instagram.com/...',
];

// Lead Form Endpoint
$formAction = 'https://design.pageone.cloud/api/leads/a-s-contracting-services';

// Logo (from client asset storage)
$logoUrl = 'https://db.pageone.cloud/storage/v1/object/public/client-assets/a-s-contracting-services/logo/1779995343360-unnamed.jpg';
$leadsFormSecret = 'bac7714a8f41505ab12d75311ccbb11a6374e38b1a010d69111c84a652cfa0f3'; // spam-shield HMAC (matches leads fn LEADS_FORM_SECRET)
