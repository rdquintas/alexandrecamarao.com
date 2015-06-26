<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'user/plugins/simple_form/blueprints.yaml',
    'modified' => 1435313987,
    'data' => [
        'name' => 'Simple Form',
        'version' => '1.2.1',
        'description' => 'This plugin add simple form working with webservice [Simple Form](http://getsimpleform.com) and sending email from your **Grav site**.',
        'icon' => 'envelope-o',
        'author' => [
            'name' => 'NunoPress LLC',
            'email' => 'hello@nunopress.com',
            'url' => 'http://nunopress.com'
        ],
        'homepage' => 'https://github.com/nunopress/grav-plugin-simple_form',
        'demo' => 'http://grav-demo.nunopress.com/',
        'keywords' => 'getsimpleform, form, contact, plugin, jquery, ajax',
        'bugs' => 'https://github.com/nunopress/grav-plugin-simple_form/issues',
        'license' => 'MIT',
        'form' => [
            'validation' => 'strict',
            'fields' => [
                'enabled' => [
                    'type' => 'toggle',
                    'label' => 'Plugin status',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'Enabled',
                        0 => 'Disabled'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'token' => [
                    'type' => 'text',
                    'label' => 'SimpleForm.com Token',
                    'placeholder' => 'Insert your API key here.',
                    'help' => 'API key from https://simpleform.com site.'
                ],
                'template_file' => [
                    'type' => 'text',
                    'label' => 'Template filename',
                    'placeholder' => 'Default template filename'
                ],
                'messages' => [
                    'type' => 'array',
                    'label' => 'Form messages'
                ]
            ]
        ]
    ]
];
