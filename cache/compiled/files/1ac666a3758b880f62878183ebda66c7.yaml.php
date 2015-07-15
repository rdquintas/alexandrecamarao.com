<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'user/config/site.yaml',
    'modified' => 1436818668,
    'data' => [
        'title' => 'Alexandre Camarão',
        'author' => [
            'name' => 'Ricardo Quintas',
            'email' => 'rqcenter-web@yahoo.com',
            'copyright' => '©2015 Ricardo Quintas',
            'url' => 'http://www.ricardoquintas.com',
            'url_name' => 'ricardoquintas.com'
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
        ]
    ]
];
