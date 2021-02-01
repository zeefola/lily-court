<?php
/**
 * @see https://github.com/artesaos/seotools
 */

return [
    'meta' => [
        /*
         * The default configurations to be used by the meta generator.
         */
        'defaults'       => [
            'title'        => config('app.name'), // set false to total remove
            'titleBefore'  => false, // Put defaults.title before page title, like 'It's Over 9000! - Dashboard'
            'description'  => 'Real Comfort and Elegance', // set false to total remove
            'separator'    => ' - ',
            'keywords'     => ['Lily Court, Affordable house in Lagos, Affordable housing in Lagos, Affordable houses in Lagos, Affordable house, Affordable housing around Lagos, a house in Lagos affordable, Lilly court, affordable house inside Lagos,Real Estate in Lagos, Property Development in Lagos, Property Development in Nigeria, Property Financing in lagos, Real Estate Agent in Lagos, Real Estate Companies in Lagos, Real Estate in Nigeria, Real Estate, Apartments in lagos, Apartment n Lagos, 2 Bedroom apartment in Lagos, 3 Bedroom apartment in Lagos, 2 Bedroom apartment, 2 Bedroom apartment,Affordable Housing, Affordable housing in Lagos'],
            'canonical'    => false, // Set null for using Url::current(), set false to total remove
            'robots'       => 'index,follow', // Set to 'all', 'none' or any combination of index/noindex and follow/nofollow
        ],
        /*
         * Webmaster tags are always added.
         */
        'webmaster_tags' => [
            'google'    => null,
            'bing'      => 'C9E40CE04FC37ADEA608C2742EBD138C',
            'alexa'     => null,
            'pinterest' => null,
            'yandex'    => '621418d925d3735a',
            'norton'    => null,
        ],

        'add_notranslate_class' => false,
    ],
    'opengraph' => [
        /*
         * The default configurations to be used by the opengraph generator.
         */
        'defaults' => [
            'title'       => config('app.name'), // set false to total remove
            'description' => 'Real Comfort and Elegance', // set false to total remove
            'url'         => false, // Set null for using Url::current(), set false to total remove
            'type'        => 'Website',
            'site_name'   => config('app.name'),
            'images'      => [],
        ],
    ],
    'twitter' => [
        /*
         * The default values to be used by the twitter cards generator.
         */
        'defaults' => [
            'card'        => 'summary',
            //'site'        => '@LuizVinicius73',
        ],
    ],
    'json-ld' => [
        /*
         * The default configurations to be used by the json-ld generator.
         */
        'defaults' => [
            'title'       => config('app.name'), // set false to total remove
            'description' => 'Real Comfort and Elegance', // set false to total remove
            'url'         => false, // Set null for using Url::current(), set false to total remove
            'type'        => 'WebPage',
            'images'      => [],
        ],
    ],
];