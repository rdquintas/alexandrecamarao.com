<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'user/plugins/simple_form/simple_form.yaml',
    'modified' => 1435226655,
    'data' => [
        'enabled' => false,
        'token' => '',
        'template_file' => 'simple_form',
        'fields' => [
            'name' => [
                'type' => 'text',
                'title' => 'Name',
                'default' => '',
                'placeholder' => 'Add your name',
                'class' => '',
                'required' => true
            ],
            'email' => [
                'type' => 'email',
                'title' => 'Email',
                'default' => '',
                'placeholder' => 'Add your email',
                'class' => '',
                'required' => true
            ],
            'message' => [
                'type' => 'textarea',
                'title' => 'Message',
                'default' => '',
                'placeholder' => 'Add your message',
                'class' => '',
                'required' => true
            ],
            'submit' => [
                'type' => 'submit',
                'title' => 'Submit',
                'default' => '',
                'class' => ''
            ]
        ],
        'messages' => [
            'success' => 'Your message has been sent.'
        ]
    ]
];
