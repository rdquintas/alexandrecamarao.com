<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'user/plugins/relatedpages/blueprints.yaml',
    'modified' => 1435313987,
    'data' => [
        'name' => 'RelatedPages',
        'version' => '1.0.3',
        'description' => 'A highly sophisticated and configurable plugin that calculates related pages in relation to the current page.',
        'icon' => 'newspaper-o',
        'author' => [
            'name' => 'Team Grav',
            'email' => 'devs@getgrav.org',
            'url' => 'http://getgrav.org'
        ],
        'homepage' => 'https://github.com/getgrav/grav-plugin-relatedpages',
        'demo' => 'http://learn.getgrav.org',
        'keywords' => 'related, plugin',
        'bugs' => 'https://github.com/getgrav/grav-plugin-relatedpages/issues',
        'license' => 'MIT',
        'form' => [
            'validation' => 'strict',
            'fields' => [
                'enabled' => [
                    'type' => 'toggle',
                    'label' => 'Plugin Status',
                    'highlight' => 1,
                    'default' => 0,
                    'options' => [
                        1 => 'Enabled',
                        0 => 'Disabled'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ]
            ]
        ]
    ]
];
