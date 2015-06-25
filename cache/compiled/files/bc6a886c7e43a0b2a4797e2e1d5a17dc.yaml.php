<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'user/plugins/jscomments/blueprints.yaml',
    'modified' => 1435226654,
    'data' => [
        'name' => 'JSComments',
        'version' => '1.1.1',
        'description' => 'Add comments in your site with Disqus, IntenseDebate, Facebook, and Muut comment system.',
        'icon' => 'comments-o',
        'author' => [
            'name' => 'NunoPress LLC',
            'email' => 'hello@nunopress.com',
            'url' => 'http://nunopress.com'
        ],
        'homepage' => 'https://github.com/nunopress/grav-plugin-jscomments',
        'demo' => 'http://grav-demo.nunopress.com/',
        'keywords' => 'jscomments, plugin, comments, services, disqus, intensedebate, facebook, muut',
        'bugs' => 'https://github.com/nunopress/grav-plugin-jscomments/issues',
        'license' => 'MIT',
        'form' => [
            'fields' => [
                'enabled' => [
                    'type' => 'toggle',
                    'label' => 'Plugin status',
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
