<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'user/config/site.yaml',
    'modified' => 1435765099,
    'data' => [
        'title' => 'Alexandre Camarao',
        'author' => [
            'name' => 'Ricardo Quintas',
            'email' => 'rqcenter-web@yahoo.com',
            'copyright' => '©2015 Ricardo Quintas',
            'url' => 'http://www.ricardoquintas.com',
            'url_name' => 'ricardoquintas.com'
        ],
        'othermenu' => [
            0 => [
                'text' => 'About',
                'url' => 'about'
            ],
            1 => [
                'text' => 'Privacy Policy',
                'url' => '#'
            ],
            2 => [
                'text' => 'Contact',
                'url' => 'contact'
            ]
        ],
        'taxonomies' => [
            0 => 'category',
            1 => 'tag'
        ],
        'blog' => [
            'route' => '/blog'
        ],
        'metadata' => [
            'description' => 'My Deliver Site'
        ],
        'summary' => [
            'size' => 300
        ],
        'routes' => [
            '/artwork' => '/artwork/drawings',
            '/exhibitions' => '/exhibitions/solo'
        ],
        'header_options' => [
            'arrows' => 'true',
            'autoslide' => 'false',
            'autoslideHoverStop' => 'false',
            'interval' => '2000',
            'loop' => 'false',
            'transition' => 'zoom',
            'itemsForSlide' => '0',
            'touch' => 'true',
            'swipe' => 'true'
        ],
        'footer' => [
            'description' => 'Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Cras mattis consectetur purus sit amet fermentum. Curabitur blandit tempus porttitor. Cras justo odio, dapibus ac facilisis in, egestas eget quam.',
            'contact_title' => 'Contact Info',
            'links_title' => 'Quick Links',
            'newsletter_title' => 'Newsletter',
            'newsletter_description' => 'Etiam porta sem malesuada magna mollis euismod.',
            'copyright_text' => 'Copyright 2013 Deliver. All Rights Reserved.',
            'feedburner' => ''
        ]
    ]
];
