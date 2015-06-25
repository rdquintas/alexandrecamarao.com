<?php
return [
    '@class' => 'Grav\\Common\\Config\\Config',
    'checksum' => '2e0e617aa7fc3d41d59ddc368790de40:be3fb9d792cd9de7118b70b55ab9d4ee',
    'files' => [
        'user/plugins' => [
            'plugins/archives' => [
                'file' => 'user/plugins/archives/blueprints.yaml',
                'modified' => 1435226652
            ],
            'plugins/breadcrumbs' => [
                'file' => 'user/plugins/breadcrumbs/blueprints.yaml',
                'modified' => 1435226652
            ],
            'plugins/error' => [
                'file' => 'user/plugins/error/blueprints.yaml',
                'modified' => 1435226653
            ],
            'plugins/feed' => [
                'file' => 'user/plugins/feed/blueprints.yaml',
                'modified' => 1435226654
            ],
            'plugins/jscomments' => [
                'file' => 'user/plugins/jscomments/blueprints.yaml',
                'modified' => 1435226654
            ],
            'plugins/problems' => [
                'file' => 'user/plugins/problems/blueprints.yaml',
                'modified' => 1435226654
            ],
            'plugins/relatedpages' => [
                'file' => 'user/plugins/relatedpages/blueprints.yaml',
                'modified' => 1435226655
            ],
            'plugins/simplesearch' => [
                'file' => 'user/plugins/simplesearch/blueprints.yaml',
                'modified' => 1435226655
            ],
            'plugins/simple_form' => [
                'file' => 'user/plugins/simple_form/blueprints.yaml',
                'modified' => 1435226655
            ],
            'plugins/taxonomylist' => [
                'file' => 'user/plugins/taxonomylist/blueprints.yaml',
                'modified' => 1435226656
            ]
        ],
        'system/blueprints/config' => [
            'media' => [
                'file' => 'system/blueprints/config/media.yaml',
                'modified' => 1435226599
            ],
            'site' => [
                'file' => 'system/blueprints/config/site.yaml',
                'modified' => 1435226599
            ],
            'streams' => [
                'file' => 'system/blueprints/config/streams.yaml',
                'modified' => 1435226599
            ],
            'system' => [
                'file' => 'system/blueprints/config/system.yaml',
                'modified' => 1435226599
            ]
        ]
    ],
    'data' => [
        'items' => [
            'plugins.archives.enabled' => [
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
                ],
                'name' => 'plugins.archives.enabled'
            ],
            'plugins.archives.built_in_css' => [
                'type' => 'toggle',
                'label' => 'Use built in CSS',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'Enabled',
                    0 => 'Disabled'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.archives.built_in_css'
            ],
            'plugins.archives.date_display_format' => [
                'type' => 'select',
                'size' => 'medium',
                'classes' => 'fancy',
                'label' => 'Date Format',
                'default' => 'jS M Y',
                'options' => [
                    'F jS Y' => 'January 1st 2014',
                    'l jS of F' => 'Monday 1st of January',
                    'D, m M Y' => 'Mon, 01 Jan 2014',
                    'd-m-y' => '01-01-14',
                    'jS M Y' => '10th Feb 2014'
                ],
                'name' => 'plugins.archives.date_display_format'
            ],
            'plugins.archives.show_count' => [
                'type' => 'toggle',
                'label' => 'Show Count',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'Enabled',
                    0 => 'Disabled'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.archives.show_count'
            ],
            'plugins.archives.limit' => [
                'type' => 'text',
                'size' => 'x-small',
                'label' => 'Count Limit',
                'validate' => [
                    'type' => 'number',
                    'min' => 1
                ],
                'name' => 'plugins.archives.limit'
            ],
            'plugins.archives.order.dir' => [
                'type' => 'toggle',
                'label' => 'Order Direction',
                'highlight' => 'asc',
                'default' => 'desc',
                'options' => [
                    'asc' => 'Ascending',
                    'desc' => 'Descending'
                ],
                'name' => 'plugins.archives.order.dir'
            ],
            'plugins.archives.order.by' => [
                'type' => 'select',
                'size' => 'medium',
                'classes' => 'fancy',
                'label' => 'Order Type',
                'options' => [
                    'default' => 'Default - based on folder name',
                    'folder' => 'Folder - based on prefix-less folder name',
                    'title' => 'Title - based on title field in header',
                    'date' => 'Date - based on date field in header'
                ],
                'name' => 'plugins.archives.order.by'
            ],
            'plugins.archives.filters' => [
                'type' => 'text',
                'label' => 'Category filter',
                'help' => 'Comma separated list of category names',
                'validate' => [
                    'type' => 'commalist'
                ],
                'name' => 'plugins.archives.filters'
            ],
            'plugins.archives.filter_combinator' => [
                'type' => 'select',
                'size' => 'medium',
                'classes' => 'fancy',
                'label' => 'Filter Combinator',
                'default' => 'and',
                'options' => [
                    'and' => 'And - Boolean &&',
                    'or' => 'Or - Boolean ||'
                ],
                'name' => 'plugins.archives.filter_combinator'
            ],
            'plugins.breadcrumbs.enabled' => [
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
                ],
                'name' => 'plugins.breadcrumbs.enabled'
            ],
            'plugins.breadcrumbs.built_in_css' => [
                'type' => 'toggle',
                'label' => 'Use built in CSS',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'Enabled',
                    0 => 'Disabled'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.breadcrumbs.built_in_css'
            ],
            'plugins.breadcrumbs.show_all' => [
                'type' => 'toggle',
                'label' => 'Show even with one item',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'Enabled',
                    0 => 'Disabled'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.breadcrumbs.show_all'
            ],
            'plugins.error.enabled' => [
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
                ],
                'name' => 'plugins.error.enabled'
            ],
            'plugins.feed.enabled' => [
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
                ],
                'name' => 'plugins.feed.enabled'
            ],
            'plugins.feed.count' => [
                'type' => 'text',
                'label' => 'Feed count',
                'validate' => [
                    'type' => 'int',
                    'min' => 10,
                    'max' => 1000
                ],
                'name' => 'plugins.feed.count'
            ],
            'plugins.feed.description' => [
                'type' => 'textarea',
                'label' => 'Description',
                'name' => 'plugins.feed.description'
            ],
            'plugins.feed.lang' => [
                'type' => 'text',
                'label' => 'Feed language code',
                'placeholder' => 'en-us',
                'validate' => [
                    'pattern' => '[a-zA-Z]{2,3}-a-zA-Z]{2,3}'
                ],
                'name' => 'plugins.feed.lang'
            ],
            'plugins.feed.length' => [
                'type' => 'text',
                'label' => 'Feed Length',
                'validate' => [
                    'type' => 'int',
                    'min' => 10,
                    'max' => 10000
                ],
                'name' => 'plugins.feed.length'
            ],
            'plugins.jscomments.enabled' => [
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
                ],
                'name' => 'plugins.jscomments.enabled'
            ],
            'plugins.problems.enabled' => [
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
                ],
                'name' => 'plugins.problems.enabled'
            ],
            'plugins.relatedpages.enabled' => [
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
                ],
                'name' => 'plugins.relatedpages.enabled'
            ],
            'plugins.simplesearch.enabled' => [
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
                ],
                'name' => 'plugins.simplesearch.enabled'
            ],
            'plugins.simplesearch.built_in_css' => [
                'type' => 'toggle',
                'label' => 'Use built in CSS',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'Enabled',
                    0 => 'Disabled'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.simplesearch.built_in_css'
            ],
            'plugins.simplesearch.filters' => [
                'type' => 'text',
                'label' => 'Category filter',
                'help' => 'Comma separated list of category names',
                'validate' => [
                    'type' => 'commalist'
                ],
                'name' => 'plugins.simplesearch.filters'
            ],
            'plugins.simplesearch.filter_combinator' => [
                'type' => 'select',
                'size' => 'medium',
                'classes' => 'fancy',
                'label' => 'Filter Combinator',
                'default' => 'and',
                'options' => [
                    'and' => 'And - Boolean &&',
                    'or' => 'Or - Boolean ||'
                ],
                'name' => 'plugins.simplesearch.filter_combinator'
            ],
            'plugins.simple_form.enabled' => [
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
                ],
                'name' => 'plugins.simple_form.enabled'
            ],
            'plugins.simple_form.token' => [
                'type' => 'text',
                'label' => 'SimpleForm.com Token',
                'placeholder' => 'Insert your API key here.',
                'help' => 'API key from https://simpleform.com site.',
                'name' => 'plugins.simple_form.token'
            ],
            'plugins.simple_form.template_file' => [
                'type' => 'text',
                'label' => 'Template filename',
                'placeholder' => 'Default template filename',
                'name' => 'plugins.simple_form.template_file'
            ],
            'plugins.simple_form.messages' => [
                'type' => 'array',
                'label' => 'Form messages',
                'name' => 'plugins.simple_form.messages'
            ],
            'plugins.taxonomylist.enabled' => [
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
                ],
                'name' => 'plugins.taxonomylist.enabled'
            ],
            'plugins.taxonomylist.route' => [
                'type' => 'text',
                'label' => 'Route to blog',
                'placeholder' => '/blog',
                'validate' => [
                    'pattern' => '/([a-z\\-_]+/?)+'
                ],
                'name' => 'plugins.taxonomylist.route'
            ],
            'site.title' => [
                'type' => 'text',
                'label' => 'Site Title',
                'size' => 'large',
                'placeholder' => 'Site wide title',
                'help' => 'Default title for your site',
                'name' => 'site.title'
            ],
            'site.author.name' => [
                'type' => 'text',
                'size' => 'large',
                'label' => 'Default Author',
                'name' => 'site.author.name'
            ],
            'site.author.email' => [
                'type' => 'text',
                'size' => 'large',
                'label' => 'Default Email',
                'validate' => [
                    'type' => 'email'
                ],
                'name' => 'site.author.email'
            ],
            'site.taxonomies' => [
                'type' => 'text',
                'size' => 'large',
                'label' => 'Taxonomy Types',
                'classes' => 'fancy',
                'validate' => [
                    'type' => 'commalist'
                ],
                'name' => 'site.taxonomies'
            ],
            'site.metadata' => [
                'type' => 'array',
                'label' => 'Metadata',
                'placeholder_key' => 'Name',
                'placeholder_value' => 'Content',
                'name' => 'site.metadata'
            ],
            'site.blog.route' => [
                'type' => 'text',
                'size' => 'large',
                'label' => 'Blog URL',
                'name' => 'site.blog.route'
            ],
            'site.summary.size' => [
                'type' => 'text',
                'size' => 'x-small',
                'label' => 'Summary Size',
                'validate' => NULL,
                'min' => 0,
                'max' => 65536,
                'name' => 'site.summary.size'
            ],
            'site.routes' => [
                'type' => 'array',
                'label' => 'Custom',
                'placeholder_key' => '/your/alias',
                'placeholder_value' => '/your/route',
                'name' => 'site.routes'
            ],
            'streams.schemes.xxx' => [
                'type' => 'array',
                'name' => 'streams.schemes.xxx'
            ],
            'system.home.alias' => [
                'type' => 'pages',
                'size' => 'medium',
                'classes' => 'fancy',
                'label' => 'Home Page',
                'show_all' => false,
                'show_modular' => false,
                'show_root' => false,
                'help' => 'The page that Grav will use as the default landing page',
                'name' => 'system.home.alias'
            ],
            'system.pages.theme' => [
                'type' => 'themeselect',
                'classes' => 'fancy',
                'size' => 'medium',
                'label' => 'Default Theme',
                'help' => 'Set the theme (defaults to \'default\')',
                'name' => 'system.pages.theme'
            ],
            'system.pages.markdown.extra' => [
                'type' => 'toggle',
                'label' => 'Markdown Extra',
                'highlight' => 1,
                'options' => [
                    1 => 'Yes',
                    0 => 'No'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.pages.markdown.extra'
            ],
            'system.pages.process' => [
                'type' => 'checkboxes',
                'label' => 'Process',
                'default' => [
                    0 => [
                        'markdown' => true
                    ],
                    1 => [
                        'twig' => true
                    ]
                ],
                'options' => [
                    'markdown' => 'Markdown',
                    'twig' => 'Twig'
                ],
                'use' => 'keys',
                'name' => 'system.pages.process'
            ],
            'system.pages.dateformat.short' => [
                'type' => 'select',
                'size' => 'medium',
                'classes' => 'fancy',
                'label' => 'Short Date Format',
                'help' => 'Set the short date format',
                'default' => 'jS M Y',
                'options' => [
                    'F jS \\\\a\\\\t g:ia' => 'January 1st at 11:59pm',
                    'l jS of F g:i A' => 'Monday 1st of January at 11:59 PM',
                    'D, m M Y G:i:s' => 'Mon, 01 Jan 2014 23:59:00',
                    'd-m-y G:i' => '01-01-14 23:59',
                    'jS M Y' => '10th Feb 2014'
                ],
                'name' => 'system.pages.dateformat.short'
            ],
            'system.pages.dateformat.long' => [
                'type' => 'select',
                'size' => 'medium',
                'classes' => 'fancy',
                'label' => 'Long Date Format',
                'help' => 'Set the long date format',
                'options' => [
                    'F jS \\a\\t g:ia' => 'January 1st at 11:59pm',
                    'l jS of F g:i A' => 'Monday 1st of January at 11:59 PM',
                    'D, m M Y G:i:s' => 'Mon, 01 Jan 2014 23:59:00',
                    'd-m-y G:i' => '01-01-14 23:59',
                    'jS M Y' => '10th Feb 2014'
                ],
                'name' => 'system.pages.dateformat.long'
            ],
            'system.pages.order.by' => [
                'type' => 'select',
                'size' => 'medium',
                'classes' => 'fancy',
                'label' => 'Default Ordering',
                'options' => [
                    'default' => 'Default - based on folder name',
                    'folder' => 'Folder - based on prefix-less folder name',
                    'title' => 'Title - based on title field in header',
                    'date' => 'Date - based on date field in header'
                ],
                'name' => 'system.pages.order.by'
            ],
            'system.pages.order.dir' => [
                'type' => 'toggle',
                'label' => 'Default Order Direction',
                'highlight' => 'asc',
                'default' => 'desc',
                'options' => [
                    'asc' => 'Ascending',
                    'desc' => 'Descending'
                ],
                'name' => 'system.pages.order.dir'
            ],
            'system.pages.list.count' => [
                'type' => 'text',
                'size' => 'x-small',
                'label' => 'Default Item Count',
                'help' => 'Default max pages count',
                'validate' => [
                    'type' => 'number',
                    'min' => 1
                ],
                'name' => 'system.pages.list.count'
            ],
            'system.pages.publish_dates' => [
                'type' => 'toggle',
                'label' => 'Date-based publishing',
                'help' => 'Automatically (un)publish posts based on their date',
                'highlight' => 1,
                'options' => [
                    1 => 'Yes',
                    0 => 'No'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.pages.publish_dates'
            ],
            'system.pages.events.page' => [
                'type' => 'toggle',
                'label' => 'Page events',
                'highlight' => 1,
                'options' => [
                    1 => 'Yes',
                    0 => 'No'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.pages.events.page'
            ],
            'system.pages.events.twig' => [
                'type' => 'toggle',
                'label' => 'Twig events',
                'highlight' => 1,
                'options' => [
                    1 => 'Yes',
                    0 => 'No'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.pages.events.twig'
            ],
            'system.cache.enabled' => [
                'type' => 'toggle',
                'label' => 'Caching',
                'highlight' => 1,
                'options' => [
                    1 => 'Yes',
                    0 => 'No'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.cache.enabled'
            ],
            'system.cache.check.method' => [
                'type' => 'select',
                'size' => 'small',
                'classes' => 'fancy',
                'label' => 'Cache Check Method',
                'options' => [
                    'file' => 'File',
                    'folder' => 'Folder',
                    'none' => 'None'
                ],
                'name' => 'system.cache.check.method'
            ],
            'system.cache.driver' => [
                'type' => 'select',
                'size' => 'small',
                'classes' => 'fancy',
                'label' => 'Cache driver',
                'options' => [
                    'auto' => 'Auto detect',
                    'file' => 'File',
                    'apc' => 'APC',
                    'xcache' => 'XCache',
                    'memcache' => 'MemCache',
                    'wincache' => 'WinCache'
                ],
                'name' => 'system.cache.driver'
            ],
            'system.cache.prefix' => [
                'type' => 'text',
                'size' => 'x-small',
                'label' => 'Cache Prefix',
                'placeholder' => 'Derived from base URL (override by entering random string)',
                'name' => 'system.cache.prefix'
            ],
            'system.cache.gzip' => [
                'type' => 'toggle',
                'label' => 'GZIP compression',
                'highlight' => 1,
                'options' => [
                    1 => 'Yes',
                    0 => 'No'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.cache.gzip'
            ],
            'system.assets.enable_asset_timestamp' => [
                'type' => 'toggle',
                'label' => 'Enable timestamps on assets',
                'highlight' => 1,
                'options' => [
                    1 => 'Yes',
                    0 => 'No'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.assets.enable_asset_timestamp'
            ],
            'system.media.enable_media_timestamp' => [
                'type' => 'toggle',
                'label' => 'Enable timestamps on media',
                'highlight' => 1,
                'options' => [
                    1 => 'Yes',
                    0 => 'No'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.media.enable_media_timestamp'
            ],
            'system.twig.cache' => [
                'type' => 'toggle',
                'label' => 'Twig caching',
                'highlight' => 1,
                'options' => [
                    1 => 'Yes',
                    0 => 'No'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.twig.cache'
            ],
            'system.twig.debug' => [
                'type' => 'toggle',
                'label' => 'Twig debug',
                'highlight' => 1,
                'options' => [
                    1 => 'Yes',
                    0 => 'No'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.twig.debug'
            ],
            'system.twig.auto_reload' => [
                'type' => 'toggle',
                'label' => 'Detect changes',
                'highlight' => 1,
                'options' => [
                    1 => 'Yes',
                    0 => 'No'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.twig.auto_reload'
            ],
            'system.twig.autoescape' => [
                'type' => 'toggle',
                'label' => 'Autoescape variables',
                'highlight' => 1,
                'options' => [
                    1 => 'Yes',
                    0 => 'No'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.twig.autoescape'
            ],
            'system.assets.css_pipeline' => [
                'type' => 'toggle',
                'label' => 'CSS Pipeline',
                'highlight' => 1,
                'options' => [
                    1 => 'Yes',
                    0 => 'No'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.assets.css_pipeline'
            ],
            'system.assets.css_minify' => [
                'type' => 'toggle',
                'label' => 'CSS Minify',
                'highlight' => 1,
                'options' => [
                    1 => 'Yes',
                    0 => 'No'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.assets.css_minify'
            ],
            'system.assets.css_minify_windows' => [
                'type' => 'toggle',
                'label' => 'CSS Minify Windows Override',
                'highlight' => 1,
                'options' => [
                    1 => 'Yes',
                    0 => 'No'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.assets.css_minify_windows'
            ],
            'system.assets.css_rewrite' => [
                'type' => 'toggle',
                'label' => 'CSS Rewrite',
                'highlight' => 1,
                'options' => [
                    1 => 'Yes',
                    0 => 'No'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.assets.css_rewrite'
            ],
            'system.assets.js_pipeline' => [
                'type' => 'toggle',
                'label' => 'JavaScript Pipeline',
                'highlight' => 1,
                'options' => [
                    1 => 'Yes',
                    0 => 'No'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.assets.js_pipeline'
            ],
            'system.assets.js_minify' => [
                'type' => 'toggle',
                'label' => 'JavaScript Minify',
                'highlight' => 1,
                'options' => [
                    1 => 'Yes',
                    0 => 'No'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.assets.js_minify'
            ],
            'system.errors.display' => [
                'type' => 'toggle',
                'label' => 'Display errors',
                'highlight' => 1,
                'options' => [
                    1 => 'Yes',
                    0 => 'No'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.errors.display'
            ],
            'system.errors.log' => [
                'type' => 'toggle',
                'label' => 'Log errors',
                'highlight' => 1,
                'options' => [
                    1 => 'Yes',
                    0 => 'No'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.errors.log'
            ],
            'system.debugger.enabled' => [
                'type' => 'toggle',
                'label' => 'Debugger',
                'highlight' => 1,
                'options' => [
                    1 => 'Yes',
                    0 => 'No'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.debugger.enabled'
            ],
            'system.debugger.mode' => [
                'type' => 'select',
                'size' => 'small',
                'classes' => 'fancy',
                'label' => 'Mode',
                'options' => [
                    'detect' => 'Auto-Detect',
                    'development' => 'Development',
                    'production' => 'Production'
                ],
                'name' => 'system.debugger.mode'
            ],
            'system.debugger.strict' => [
                'type' => 'toggle',
                'label' => 'Strict',
                'highlight' => 1,
                'options' => [
                    1 => 'Yes',
                    0 => 'No'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.debugger.strict'
            ],
            'system.debugger.max_depth' => [
                'type' => 'select',
                'size' => 'small',
                'classes' => 'fancy',
                'label' => 'Detail Level',
                'placeholder' => 'How many nested levels to display for objects or arrays',
                'options' => [
                    1 => '1 level',
                    2 => '2 levels',
                    3 => '3 levels',
                    4 => '4 levels',
                    5 => '5 levels',
                    6 => '6 levels',
                    7 => '7 levels',
                    8 => '8 levels',
                    9 => '9 levels',
                    10 => '10 levels'
                ],
                'validate' => [
                    'type' => 'number'
                ],
                'name' => 'system.debugger.max_depth'
            ],
            'system.debugger.log.enabled' => [
                'type' => 'toggle',
                'label' => 'Logging',
                'highlight' => 1,
                'options' => [
                    1 => 'Yes',
                    0 => 'No'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.debugger.log.enabled'
            ],
            'system.debugger.shutdown.close_connection' => [
                'type' => 'toggle',
                'label' => 'Shutdown Close Connection',
                'highlight' => 1,
                'options' => [
                    1 => 'Yes',
                    0 => 'No'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.debugger.shutdown.close_connection'
            ],
            'system.images.default_image_quality' => [
                'type' => 'text',
                'label' => 'Default image quality',
                'classes' => 'x-small',
                'validate' => [
                    'type' => 'number',
                    'min' => 1,
                    'max' => 100
                ],
                'name' => 'system.images.default_image_quality'
            ],
            'system.images.debug' => [
                'type' => 'toggle',
                'label' => 'Image debug watermark',
                'highlight' => 1,
                'options' => [
                    1 => 'Yes',
                    0 => 'No'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.images.debug'
            ],
            'system.media.upload_limit' => [
                'type' => 'text',
                'label' => 'File upload limit',
                'classes' => 'small',
                'validate' => [
                    'type' => 'number'
                ],
                'name' => 'system.media.upload_limit'
            ],
            'system.timezone' => [
                'type' => 'select',
                'label' => 'Timezone',
                'classes' => 'fancy',
                '@data-options' => '\\Grav\\Common\\Utils::timezones',
                'default' => '',
                'options' => [
                    '' => '- None -',
                    'Pacific/Midway' => '(UTC-11:00) Pacific/Midway',
                    'Pacific/Niue' => '(UTC-11:00) Pacific/Niue',
                    'Pacific/Pago_Pago' => '(UTC-11:00) Pacific/Pago_Pago',
                    'Pacific/Johnston' => '(UTC-10:00) Pacific/Johnston',
                    'Pacific/Tahiti' => '(UTC-10:00) Pacific/Tahiti',
                    'Pacific/Honolulu' => '(UTC-10:00) Pacific/Honolulu',
                    'Pacific/Rarotonga' => '(UTC-10:00) Pacific/Rarotonga',
                    'Pacific/Marquesas' => '(UTC-09:30) Pacific/Marquesas',
                    'Pacific/Gambier' => '(UTC-09:00) Pacific/Gambier',
                    'America/Adak' => '(UTC-09:00) America/Adak',
                    'America/Metlakatla' => '(UTC-08:00) America/Metlakatla',
                    'America/Yakutat' => '(UTC-08:00) America/Yakutat',
                    'America/Juneau' => '(UTC-08:00) America/Juneau',
                    'America/Nome' => '(UTC-08:00) America/Nome',
                    'America/Anchorage' => '(UTC-08:00) America/Anchorage',
                    'Pacific/Pitcairn' => '(UTC-08:00) Pacific/Pitcairn',
                    'America/Sitka' => '(UTC-08:00) America/Sitka',
                    'America/Tijuana' => '(UTC-07:00) America/Tijuana',
                    'America/Santa_Isabel' => '(UTC-07:00) America/Santa_Isabel',
                    'America/Hermosillo' => '(UTC-07:00) America/Hermosillo',
                    'America/Dawson_Creek' => '(UTC-07:00) America/Dawson_Creek',
                    'America/Dawson' => '(UTC-07:00) America/Dawson',
                    'America/Whitehorse' => '(UTC-07:00) America/Whitehorse',
                    'America/Los_Angeles' => '(UTC-07:00) America/Los_Angeles',
                    'America/Creston' => '(UTC-07:00) America/Creston',
                    'America/Phoenix' => '(UTC-07:00) America/Phoenix',
                    'America/Vancouver' => '(UTC-07:00) America/Vancouver',
                    'America/Guatemala' => '(UTC-06:00) America/Guatemala',
                    'America/Belize' => '(UTC-06:00) America/Belize',
                    'America/Edmonton' => '(UTC-06:00) America/Edmonton',
                    'America/Regina' => '(UTC-06:00) America/Regina',
                    'America/Denver' => '(UTC-06:00) America/Denver',
                    'America/Ojinaga' => '(UTC-06:00) America/Ojinaga',
                    'America/Yellowknife' => '(UTC-06:00) America/Yellowknife',
                    'America/Chihuahua' => '(UTC-06:00) America/Chihuahua',
                    'America/Inuvik' => '(UTC-06:00) America/Inuvik',
                    'America/Costa_Rica' => '(UTC-06:00) America/Costa_Rica',
                    'Pacific/Easter' => '(UTC-06:00) Pacific/Easter',
                    'Pacific/Galapagos' => '(UTC-06:00) Pacific/Galapagos',
                    'America/Boise' => '(UTC-06:00) America/Boise',
                    'America/Managua' => '(UTC-06:00) America/Managua',
                    'America/Swift_Current' => '(UTC-06:00) America/Swift_Current',
                    'America/Cambridge_Bay' => '(UTC-06:00) America/Cambridge_Bay',
                    'America/Tegucigalpa' => '(UTC-06:00) America/Tegucigalpa',
                    'America/Mazatlan' => '(UTC-06:00) America/Mazatlan',
                    'America/El_Salvador' => '(UTC-06:00) America/El_Salvador',
                    'America/Eirunepe' => '(UTC-05:00) America/Eirunepe',
                    'America/Jamaica' => '(UTC-05:00) America/Jamaica',
                    'America/Menominee' => '(UTC-05:00) America/Menominee',
                    'America/Cancun' => '(UTC-05:00) America/Cancun',
                    'America/Merida' => '(UTC-05:00) America/Merida',
                    'America/Cayman' => '(UTC-05:00) America/Cayman',
                    'America/Chicago' => '(UTC-05:00) America/Chicago',
                    'America/North_Dakota/Beulah' => '(UTC-05:00) America/North_Dakota/Beulah',
                    'America/Bogota' => '(UTC-05:00) America/Bogota',
                    'America/Atikokan' => '(UTC-05:00) America/Atikokan',
                    'America/Mexico_City' => '(UTC-05:00) America/Mexico_City',
                    'America/Bahia_Banderas' => '(UTC-05:00) America/Bahia_Banderas',
                    'America/Monterrey' => '(UTC-05:00) America/Monterrey',
                    'America/Rainy_River' => '(UTC-05:00) America/Rainy_River',
                    'America/North_Dakota/Center' => '(UTC-05:00) America/North_Dakota/Center',
                    'America/Rio_Branco' => '(UTC-05:00) America/Rio_Branco',
                    'America/Resolute' => '(UTC-05:00) America/Resolute',
                    'America/Indiana/Knox' => '(UTC-05:00) America/Indiana/Knox',
                    'America/Indiana/Tell_City' => '(UTC-05:00) America/Indiana/Tell_City',
                    'America/Lima' => '(UTC-05:00) America/Lima',
                    'America/Winnipeg' => '(UTC-05:00) America/Winnipeg',
                    'America/Rankin_Inlet' => '(UTC-05:00) America/Rankin_Inlet',
                    'America/Guayaquil' => '(UTC-05:00) America/Guayaquil',
                    'America/Matamoros' => '(UTC-05:00) America/Matamoros',
                    'America/Panama' => '(UTC-05:00) America/Panama',
                    'America/North_Dakota/New_Salem' => '(UTC-05:00) America/North_Dakota/New_Salem',
                    'America/Caracas' => '(UTC-04:30) America/Caracas',
                    'America/Indiana/Marengo' => '(UTC-04:00) America/Indiana/Marengo',
                    'America/Indiana/Petersburg' => '(UTC-04:00) America/Indiana/Petersburg',
                    'America/Indiana/Vincennes' => '(UTC-04:00) America/Indiana/Vincennes',
                    'America/Iqaluit' => '(UTC-04:00) America/Iqaluit',
                    'America/Indiana/Winamac' => '(UTC-04:00) America/Indiana/Winamac',
                    'America/Martinique' => '(UTC-04:00) America/Martinique',
                    'America/Indiana/Vevay' => '(UTC-04:00) America/Indiana/Vevay',
                    'America/Indiana/Indianapolis' => '(UTC-04:00) America/Indiana/Indianapolis',
                    'America/Grenada' => '(UTC-04:00) America/Grenada',
                    'America/Guadeloupe' => '(UTC-04:00) America/Guadeloupe',
                    'America/Curacao' => '(UTC-04:00) America/Curacao',
                    'America/Detroit' => '(UTC-04:00) America/Detroit',
                    'America/Grand_Turk' => '(UTC-04:00) America/Grand_Turk',
                    'America/Marigot' => '(UTC-04:00) America/Marigot',
                    'America/Havana' => '(UTC-04:00) America/Havana',
                    'America/Manaus' => '(UTC-04:00) America/Manaus',
                    'America/Guyana' => '(UTC-04:00) America/Guyana',
                    'America/Dominica' => '(UTC-04:00) America/Dominica',
                    'America/Nipigon' => '(UTC-04:00) America/Nipigon',
                    'America/St_Barthelemy' => '(UTC-04:00) America/St_Barthelemy',
                    'America/St_Kitts' => '(UTC-04:00) America/St_Kitts',
                    'America/St_Lucia' => '(UTC-04:00) America/St_Lucia',
                    'America/Kralendijk' => '(UTC-04:00) America/Kralendijk',
                    'America/Santo_Domingo' => '(UTC-04:00) America/Santo_Domingo',
                    'America/Kentucky/Monticello' => '(UTC-04:00) America/Kentucky/Monticello',
                    'America/Santiago' => '(UTC-04:00) America/Santiago',
                    'America/St_Thomas' => '(UTC-04:00) America/St_Thomas',
                    'America/St_Vincent' => '(UTC-04:00) America/St_Vincent',
                    'Antarctica/Palmer' => '(UTC-04:00) Antarctica/Palmer',
                    'America/Lower_Princes' => '(UTC-04:00) America/Lower_Princes',
                    'America/Tortola' => '(UTC-04:00) America/Tortola',
                    'America/Toronto' => '(UTC-04:00) America/Toronto',
                    'America/La_Paz' => '(UTC-04:00) America/La_Paz',
                    'America/Thunder_Bay' => '(UTC-04:00) America/Thunder_Bay',
                    'America/Kentucky/Louisville' => '(UTC-04:00) America/Kentucky/Louisville',
                    'America/Puerto_Rico' => '(UTC-04:00) America/Puerto_Rico',
                    'America/Asuncion' => '(UTC-04:00) America/Asuncion',
                    'America/Aruba' => '(UTC-04:00) America/Aruba',
                    'America/Montserrat' => '(UTC-04:00) America/Montserrat',
                    'America/Barbados' => '(UTC-04:00) America/Barbados',
                    'America/Blanc-Sablon' => '(UTC-04:00) America/Blanc-Sablon',
                    'America/Campo_Grande' => '(UTC-04:00) America/Campo_Grande',
                    'America/Boa_Vista' => '(UTC-04:00) America/Boa_Vista',
                    'America/Nassau' => '(UTC-04:00) America/Nassau',
                    'America/New_York' => '(UTC-04:00) America/New_York',
                    'America/Port_of_Spain' => '(UTC-04:00) America/Port_of_Spain',
                    'America/Porto_Velho' => '(UTC-04:00) America/Porto_Velho',
                    'America/Port-au-Prince' => '(UTC-04:00) America/Port-au-Prince',
                    'America/Pangnirtung' => '(UTC-04:00) America/Pangnirtung',
                    'America/Antigua' => '(UTC-04:00) America/Antigua',
                    'America/Anguilla' => '(UTC-04:00) America/Anguilla',
                    'America/Cuiaba' => '(UTC-04:00) America/Cuiaba',
                    'America/Montevideo' => '(UTC-03:00) America/Montevideo',
                    'Antarctica/Rothera' => '(UTC-03:00) Antarctica/Rothera',
                    'Atlantic/Bermuda' => '(UTC-03:00) Atlantic/Bermuda',
                    'Atlantic/Stanley' => '(UTC-03:00) Atlantic/Stanley',
                    'America/Thule' => '(UTC-03:00) America/Thule',
                    'America/Sao_Paulo' => '(UTC-03:00) America/Sao_Paulo',
                    'America/Recife' => '(UTC-03:00) America/Recife',
                    'America/Santarem' => '(UTC-03:00) America/Santarem',
                    'America/Moncton' => '(UTC-03:00) America/Moncton',
                    'America/Paramaribo' => '(UTC-03:00) America/Paramaribo',
                    'America/Argentina/Rio_Gallegos' => '(UTC-03:00) America/Argentina/Rio_Gallegos',
                    'America/Argentina/Mendoza' => '(UTC-03:00) America/Argentina/Mendoza',
                    'America/Argentina/Salta' => '(UTC-03:00) America/Argentina/Salta',
                    'America/Argentina/San_Juan' => '(UTC-03:00) America/Argentina/San_Juan',
                    'America/Argentina/San_Luis' => '(UTC-03:00) America/Argentina/San_Luis',
                    'America/Argentina/Jujuy' => '(UTC-03:00) America/Argentina/Jujuy',
                    'America/Argentina/Cordoba' => '(UTC-03:00) America/Argentina/Cordoba',
                    'America/Maceio' => '(UTC-03:00) America/Maceio',
                    'America/Araguaina' => '(UTC-03:00) America/Araguaina',
                    'America/Argentina/Buenos_Aires' => '(UTC-03:00) America/Argentina/Buenos_Aires',
                    'America/Argentina/Catamarca' => '(UTC-03:00) America/Argentina/Catamarca',
                    'America/Argentina/Tucuman' => '(UTC-03:00) America/Argentina/Tucuman',
                    'America/Argentina/La_Rioja' => '(UTC-03:00) America/Argentina/La_Rioja',
                    'America/Glace_Bay' => '(UTC-03:00) America/Glace_Bay',
                    'America/Goose_Bay' => '(UTC-03:00) America/Goose_Bay',
                    'America/Argentina/Ushuaia' => '(UTC-03:00) America/Argentina/Ushuaia',
                    'America/Fortaleza' => '(UTC-03:00) America/Fortaleza',
                    'America/Halifax' => '(UTC-03:00) America/Halifax',
                    'America/Belem' => '(UTC-03:00) America/Belem',
                    'America/Cayenne' => '(UTC-03:00) America/Cayenne',
                    'America/Bahia' => '(UTC-03:00) America/Bahia',
                    'America/St_Johns' => '(UTC-02:30) America/St_Johns',
                    'Atlantic/South_Georgia' => '(UTC-02:00) Atlantic/South_Georgia',
                    'America/Miquelon' => '(UTC-02:00) America/Miquelon',
                    'America/Noronha' => '(UTC-02:00) America/Noronha',
                    'America/Godthab' => '(UTC-02:00) America/Godthab',
                    'Atlantic/Cape_Verde' => '(UTC-01:00) Atlantic/Cape_Verde',
                    'Atlantic/Azores' => '(UTC+00:00) Atlantic/Azores',
                    'America/Scoresbysund' => '(UTC+00:00) America/Scoresbysund',
                    'Africa/Lome' => '(UTC+00:00) Africa/Lome',
                    'Africa/Accra' => '(UTC+00:00) Africa/Accra',
                    'Africa/Dakar' => '(UTC+00:00) Africa/Dakar',
                    'UTC' => '(UTC+00:00) UTC',
                    'Africa/El_Aaiun' => '(UTC+00:00) Africa/El_Aaiun',
                    'Africa/Bissau' => '(UTC+00:00) Africa/Bissau',
                    'Africa/Conakry' => '(UTC+00:00) Africa/Conakry',
                    'Africa/Casablanca' => '(UTC+00:00) Africa/Casablanca',
                    'Africa/Abidjan' => '(UTC+00:00) Africa/Abidjan',
                    'Atlantic/St_Helena' => '(UTC+00:00) Atlantic/St_Helena',
                    'Africa/Bamako' => '(UTC+00:00) Africa/Bamako',
                    'Africa/Sao_Tome' => '(UTC+00:00) Africa/Sao_Tome',
                    'Africa/Freetown' => '(UTC+00:00) Africa/Freetown',
                    'America/Danmarkshavn' => '(UTC+00:00) America/Danmarkshavn',
                    'Africa/Nouakchott' => '(UTC+00:00) Africa/Nouakchott',
                    'Africa/Ouagadougou' => '(UTC+00:00) Africa/Ouagadougou',
                    'Africa/Monrovia' => '(UTC+00:00) Africa/Monrovia',
                    'Africa/Banjul' => '(UTC+00:00) Africa/Banjul',
                    'Atlantic/Reykjavik' => '(UTC+00:00) Atlantic/Reykjavik',
                    'Africa/Algiers' => '(UTC+01:00) Africa/Algiers',
                    'Europe/London' => '(UTC+01:00) Europe/London',
                    'Europe/Isle_of_Man' => '(UTC+01:00) Europe/Isle_of_Man',
                    'Africa/Douala' => '(UTC+01:00) Africa/Douala',
                    'Europe/Dublin' => '(UTC+01:00) Europe/Dublin',
                    'Africa/Bangui' => '(UTC+01:00) Africa/Bangui',
                    'Europe/Jersey' => '(UTC+01:00) Europe/Jersey',
                    'Europe/Lisbon' => '(UTC+01:00) Europe/Lisbon',
                    'Africa/Brazzaville' => '(UTC+01:00) Africa/Brazzaville',
                    'Africa/Libreville' => '(UTC+01:00) Africa/Libreville',
                    'Africa/Niamey' => '(UTC+01:00) Africa/Niamey',
                    'Africa/Lagos' => '(UTC+01:00) Africa/Lagos',
                    'Africa/Malabo' => '(UTC+01:00) Africa/Malabo',
                    'Africa/Ndjamena' => '(UTC+01:00) Africa/Ndjamena',
                    'Atlantic/Madeira' => '(UTC+01:00) Atlantic/Madeira',
                    'Atlantic/Canary' => '(UTC+01:00) Atlantic/Canary',
                    'Atlantic/Faroe' => '(UTC+01:00) Atlantic/Faroe',
                    'Africa/Luanda' => '(UTC+01:00) Africa/Luanda',
                    'Africa/Porto-Novo' => '(UTC+01:00) Africa/Porto-Novo',
                    'Africa/Kinshasa' => '(UTC+01:00) Africa/Kinshasa',
                    'Europe/Guernsey' => '(UTC+01:00) Europe/Guernsey',
                    'Africa/Windhoek' => '(UTC+01:00) Africa/Windhoek',
                    'Africa/Tunis' => '(UTC+01:00) Africa/Tunis',
                    'Europe/Belgrade' => '(UTC+02:00) Europe/Belgrade',
                    'Europe/Vatican' => '(UTC+02:00) Europe/Vatican',
                    'Europe/Berlin' => '(UTC+02:00) Europe/Berlin',
                    'Europe/Andorra' => '(UTC+02:00) Europe/Andorra',
                    'Europe/Warsaw' => '(UTC+02:00) Europe/Warsaw',
                    'Europe/Zagreb' => '(UTC+02:00) Europe/Zagreb',
                    'Europe/Zurich' => '(UTC+02:00) Europe/Zurich',
                    'Europe/Amsterdam' => '(UTC+02:00) Europe/Amsterdam',
                    'Europe/Vienna' => '(UTC+02:00) Europe/Vienna',
                    'Europe/Kaliningrad' => '(UTC+02:00) Europe/Kaliningrad',
                    'Europe/Monaco' => '(UTC+02:00) Europe/Monaco',
                    'Europe/Madrid' => '(UTC+02:00) Europe/Madrid',
                    'Europe/Malta' => '(UTC+02:00) Europe/Malta',
                    'Europe/Oslo' => '(UTC+02:00) Europe/Oslo',
                    'Europe/Luxembourg' => '(UTC+02:00) Europe/Luxembourg',
                    'Europe/Podgorica' => '(UTC+02:00) Europe/Podgorica',
                    'Europe/Paris' => '(UTC+02:00) Europe/Paris',
                    'Europe/Ljubljana' => '(UTC+02:00) Europe/Ljubljana',
                    'Europe/Rome' => '(UTC+02:00) Europe/Rome',
                    'Europe/Stockholm' => '(UTC+02:00) Europe/Stockholm',
                    'Europe/Tirane' => '(UTC+02:00) Europe/Tirane',
                    'Europe/Prague' => '(UTC+02:00) Europe/Prague',
                    'Europe/Bratislava' => '(UTC+02:00) Europe/Bratislava',
                    'Europe/Skopje' => '(UTC+02:00) Europe/Skopje',
                    'Europe/San_Marino' => '(UTC+02:00) Europe/San_Marino',
                    'Europe/Sarajevo' => '(UTC+02:00) Europe/Sarajevo',
                    'Europe/Vaduz' => '(UTC+02:00) Europe/Vaduz',
                    'Europe/Copenhagen' => '(UTC+02:00) Europe/Copenhagen',
                    'Europe/Gibraltar' => '(UTC+02:00) Europe/Gibraltar',
                    'Arctic/Longyearbyen' => '(UTC+02:00) Arctic/Longyearbyen',
                    'Africa/Cairo' => '(UTC+02:00) Africa/Cairo',
                    'Africa/Kigali' => '(UTC+02:00) Africa/Kigali',
                    'Europe/Busingen' => '(UTC+02:00) Europe/Busingen',
                    'Africa/Ceuta' => '(UTC+02:00) Africa/Ceuta',
                    'Africa/Gaborone' => '(UTC+02:00) Africa/Gaborone',
                    'Africa/Harare' => '(UTC+02:00) Africa/Harare',
                    'Africa/Johannesburg' => '(UTC+02:00) Africa/Johannesburg',
                    'Africa/Blantyre' => '(UTC+02:00) Africa/Blantyre',
                    'Africa/Lubumbashi' => '(UTC+02:00) Africa/Lubumbashi',
                    'Africa/Mbabane' => '(UTC+02:00) Africa/Mbabane',
                    'Antarctica/Troll' => '(UTC+02:00) Antarctica/Troll',
                    'Africa/Tripoli' => '(UTC+02:00) Africa/Tripoli',
                    'Europe/Brussels' => '(UTC+02:00) Europe/Brussels',
                    'Europe/Budapest' => '(UTC+02:00) Europe/Budapest',
                    'Africa/Maseru' => '(UTC+02:00) Africa/Maseru',
                    'Africa/Bujumbura' => '(UTC+02:00) Africa/Bujumbura',
                    'Africa/Lusaka' => '(UTC+02:00) Africa/Lusaka',
                    'Africa/Maputo' => '(UTC+02:00) Africa/Maputo',
                    'Antarctica/Syowa' => '(UTC+03:00) Antarctica/Syowa',
                    'Europe/Riga' => '(UTC+03:00) Europe/Riga',
                    'Africa/Dar_es_Salaam' => '(UTC+03:00) Africa/Dar_es_Salaam',
                    'Africa/Kampala' => '(UTC+03:00) Africa/Kampala',
                    'Africa/Khartoum' => '(UTC+03:00) Africa/Khartoum',
                    'Africa/Addis_Ababa' => '(UTC+03:00) Africa/Addis_Ababa',
                    'Africa/Mogadishu' => '(UTC+03:00) Africa/Mogadishu',
                    'Africa/Nairobi' => '(UTC+03:00) Africa/Nairobi',
                    'Europe/Mariehamn' => '(UTC+03:00) Europe/Mariehamn',
                    'Europe/Minsk' => '(UTC+03:00) Europe/Minsk',
                    'Africa/Juba' => '(UTC+03:00) Africa/Juba',
                    'Europe/Moscow' => '(UTC+03:00) Europe/Moscow',
                    'Europe/Kiev' => '(UTC+03:00) Europe/Kiev',
                    'Africa/Djibouti' => '(UTC+03:00) Africa/Djibouti',
                    'Europe/Sofia' => '(UTC+03:00) Europe/Sofia',
                    'Indian/Antananarivo' => '(UTC+03:00) Indian/Antananarivo',
                    'Europe/Helsinki' => '(UTC+03:00) Europe/Helsinki',
                    'Europe/Istanbul' => '(UTC+03:00) Europe/Istanbul',
                    'Africa/Asmara' => '(UTC+03:00) Africa/Asmara',
                    'Asia/Beirut' => '(UTC+03:00) Asia/Beirut',
                    'Europe/Zaporozhye' => '(UTC+03:00) Europe/Zaporozhye',
                    'Asia/Damascus' => '(UTC+03:00) Asia/Damascus',
                    'Europe/Bucharest' => '(UTC+03:00) Europe/Bucharest',
                    'Asia/Gaza' => '(UTC+03:00) Asia/Gaza',
                    'Asia/Hebron' => '(UTC+03:00) Asia/Hebron',
                    'Europe/Athens' => '(UTC+03:00) Europe/Athens',
                    'Indian/Comoro' => '(UTC+03:00) Indian/Comoro',
                    'Asia/Jerusalem' => '(UTC+03:00) Asia/Jerusalem',
                    'Asia/Kuwait' => '(UTC+03:00) Asia/Kuwait',
                    'Europe/Volgograd' => '(UTC+03:00) Europe/Volgograd',
                    'Europe/Tallinn' => '(UTC+03:00) Europe/Tallinn',
                    'Asia/Aden' => '(UTC+03:00) Asia/Aden',
                    'Asia/Qatar' => '(UTC+03:00) Asia/Qatar',
                    'Indian/Mayotte' => '(UTC+03:00) Indian/Mayotte',
                    'Asia/Riyadh' => '(UTC+03:00) Asia/Riyadh',
                    'Asia/Amman' => '(UTC+03:00) Asia/Amman',
                    'Europe/Uzhgorod' => '(UTC+03:00) Europe/Uzhgorod',
                    'Asia/Bahrain' => '(UTC+03:00) Asia/Bahrain',
                    'Europe/Vilnius' => '(UTC+03:00) Europe/Vilnius',
                    'Asia/Baghdad' => '(UTC+03:00) Asia/Baghdad',
                    'Asia/Nicosia' => '(UTC+03:00) Asia/Nicosia',
                    'Europe/Chisinau' => '(UTC+03:00) Europe/Chisinau',
                    'Europe/Simferopol' => '(UTC+03:00) Europe/Simferopol',
                    'Indian/Reunion' => '(UTC+04:00) Indian/Reunion',
                    'Asia/Muscat' => '(UTC+04:00) Asia/Muscat',
                    'Indian/Mahe' => '(UTC+04:00) Indian/Mahe',
                    'Indian/Mauritius' => '(UTC+04:00) Indian/Mauritius',
                    'Asia/Dubai' => '(UTC+04:00) Asia/Dubai',
                    'Europe/Samara' => '(UTC+04:00) Europe/Samara',
                    'Asia/Yerevan' => '(UTC+04:00) Asia/Yerevan',
                    'Asia/Tbilisi' => '(UTC+04:00) Asia/Tbilisi',
                    'Asia/Kabul' => '(UTC+04:30) Asia/Kabul',
                    'Asia/Tehran' => '(UTC+04:30) Asia/Tehran',
                    'Asia/Yekaterinburg' => '(UTC+05:00) Asia/Yekaterinburg',
                    'Asia/Dushanbe' => '(UTC+05:00) Asia/Dushanbe',
                    'Asia/Baku' => '(UTC+05:00) Asia/Baku',
                    'Asia/Aqtau' => '(UTC+05:00) Asia/Aqtau',
                    'Asia/Aqtobe' => '(UTC+05:00) Asia/Aqtobe',
                    'Asia/Ashgabat' => '(UTC+05:00) Asia/Ashgabat',
                    'Indian/Maldives' => '(UTC+05:00) Indian/Maldives',
                    'Asia/Samarkand' => '(UTC+05:00) Asia/Samarkand',
                    'Asia/Karachi' => '(UTC+05:00) Asia/Karachi',
                    'Asia/Tashkent' => '(UTC+05:00) Asia/Tashkent',
                    'Asia/Oral' => '(UTC+05:00) Asia/Oral',
                    'Antarctica/Mawson' => '(UTC+05:00) Antarctica/Mawson',
                    'Indian/Kerguelen' => '(UTC+05:00) Indian/Kerguelen',
                    'Asia/Kolkata' => '(UTC+05:30) Asia/Kolkata',
                    'Asia/Colombo' => '(UTC+05:30) Asia/Colombo',
                    'Asia/Kathmandu' => '(UTC+05:45) Asia/Kathmandu',
                    'Indian/Chagos' => '(UTC+06:00) Indian/Chagos',
                    'Antarctica/Vostok' => '(UTC+06:00) Antarctica/Vostok',
                    'Asia/Novosibirsk' => '(UTC+06:00) Asia/Novosibirsk',
                    'Asia/Urumqi' => '(UTC+06:00) Asia/Urumqi',
                    'Asia/Omsk' => '(UTC+06:00) Asia/Omsk',
                    'Asia/Thimphu' => '(UTC+06:00) Asia/Thimphu',
                    'Asia/Qyzylorda' => '(UTC+06:00) Asia/Qyzylorda',
                    'Asia/Bishkek' => '(UTC+06:00) Asia/Bishkek',
                    'Asia/Dhaka' => '(UTC+06:00) Asia/Dhaka',
                    'Asia/Almaty' => '(UTC+06:00) Asia/Almaty',
                    'Asia/Rangoon' => '(UTC+06:30) Asia/Rangoon',
                    'Indian/Cocos' => '(UTC+06:30) Indian/Cocos',
                    'Asia/Hovd' => '(UTC+07:00) Asia/Hovd',
                    'Asia/Phnom_Penh' => '(UTC+07:00) Asia/Phnom_Penh',
                    'Asia/Pontianak' => '(UTC+07:00) Asia/Pontianak',
                    'Asia/Jakarta' => '(UTC+07:00) Asia/Jakarta',
                    'Antarctica/Davis' => '(UTC+07:00) Antarctica/Davis',
                    'Asia/Krasnoyarsk' => '(UTC+07:00) Asia/Krasnoyarsk',
                    'Asia/Bangkok' => '(UTC+07:00) Asia/Bangkok',
                    'Asia/Novokuznetsk' => '(UTC+07:00) Asia/Novokuznetsk',
                    'Indian/Christmas' => '(UTC+07:00) Indian/Christmas',
                    'Asia/Ho_Chi_Minh' => '(UTC+07:00) Asia/Ho_Chi_Minh',
                    'Asia/Vientiane' => '(UTC+07:00) Asia/Vientiane',
                    'Asia/Macau' => '(UTC+08:00) Asia/Macau',
                    'Asia/Makassar' => '(UTC+08:00) Asia/Makassar',
                    'Asia/Manila' => '(UTC+08:00) Asia/Manila',
                    'Asia/Kuala_Lumpur' => '(UTC+08:00) Asia/Kuala_Lumpur',
                    'Asia/Kuching' => '(UTC+08:00) Asia/Kuching',
                    'Asia/Taipei' => '(UTC+08:00) Asia/Taipei',
                    'Asia/Irkutsk' => '(UTC+08:00) Asia/Irkutsk',
                    'Asia/Choibalsan' => '(UTC+08:00) Asia/Choibalsan',
                    'Asia/Chita' => '(UTC+08:00) Asia/Chita',
                    'Asia/Brunei' => '(UTC+08:00) Asia/Brunei',
                    'Antarctica/Casey' => '(UTC+08:00) Antarctica/Casey',
                    'Asia/Ulaanbaatar' => '(UTC+08:00) Asia/Ulaanbaatar',
                    'Asia/Shanghai' => '(UTC+08:00) Asia/Shanghai',
                    'Asia/Hong_Kong' => '(UTC+08:00) Asia/Hong_Kong',
                    'Asia/Singapore' => '(UTC+08:00) Asia/Singapore',
                    'Australia/Perth' => '(UTC+08:00) Australia/Perth',
                    'Australia/Eucla' => '(UTC+08:45) Australia/Eucla',
                    'Asia/Dili' => '(UTC+09:00) Asia/Dili',
                    'Asia/Khandyga' => '(UTC+09:00) Asia/Khandyga',
                    'Pacific/Palau' => '(UTC+09:00) Pacific/Palau',
                    'Asia/Jayapura' => '(UTC+09:00) Asia/Jayapura',
                    'Asia/Yakutsk' => '(UTC+09:00) Asia/Yakutsk',
                    'Asia/Seoul' => '(UTC+09:00) Asia/Seoul',
                    'Asia/Tokyo' => '(UTC+09:00) Asia/Tokyo',
                    'Asia/Pyongyang' => '(UTC+09:00) Asia/Pyongyang',
                    'Australia/Broken_Hill' => '(UTC+09:30) Australia/Broken_Hill',
                    'Australia/Adelaide' => '(UTC+09:30) Australia/Adelaide',
                    'Australia/Darwin' => '(UTC+09:30) Australia/Darwin',
                    'Australia/Currie' => '(UTC+10:00) Australia/Currie',
                    'Australia/Brisbane' => '(UTC+10:00) Australia/Brisbane',
                    'Australia/Lindeman' => '(UTC+10:00) Australia/Lindeman',
                    'Antarctica/DumontDUrville' => '(UTC+10:00) Antarctica/DumontDUrville',
                    'Pacific/Port_Moresby' => '(UTC+10:00) Pacific/Port_Moresby',
                    'Australia/Melbourne' => '(UTC+10:00) Australia/Melbourne',
                    'Pacific/Saipan' => '(UTC+10:00) Pacific/Saipan',
                    'Australia/Hobart' => '(UTC+10:00) Australia/Hobart',
                    'Pacific/Guam' => '(UTC+10:00) Pacific/Guam',
                    'Australia/Sydney' => '(UTC+10:00) Australia/Sydney',
                    'Asia/Sakhalin' => '(UTC+10:00) Asia/Sakhalin',
                    'Asia/Ust-Nera' => '(UTC+10:00) Asia/Ust-Nera',
                    'Pacific/Chuuk' => '(UTC+10:00) Pacific/Chuuk',
                    'Asia/Vladivostok' => '(UTC+10:00) Asia/Vladivostok',
                    'Asia/Magadan' => '(UTC+10:00) Asia/Magadan',
                    'Australia/Lord_Howe' => '(UTC+10:30) Australia/Lord_Howe',
                    'Pacific/Pohnpei' => '(UTC+11:00) Pacific/Pohnpei',
                    'Antarctica/Macquarie' => '(UTC+11:00) Antarctica/Macquarie',
                    'Pacific/Kosrae' => '(UTC+11:00) Pacific/Kosrae',
                    'Pacific/Efate' => '(UTC+11:00) Pacific/Efate',
                    'Pacific/Bougainville' => '(UTC+11:00) Pacific/Bougainville',
                    'Asia/Srednekolymsk' => '(UTC+11:00) Asia/Srednekolymsk',
                    'Pacific/Guadalcanal' => '(UTC+11:00) Pacific/Guadalcanal',
                    'Pacific/Noumea' => '(UTC+11:00) Pacific/Noumea',
                    'Pacific/Norfolk' => '(UTC+11:30) Pacific/Norfolk',
                    'Pacific/Wallis' => '(UTC+12:00) Pacific/Wallis',
                    'Pacific/Tarawa' => '(UTC+12:00) Pacific/Tarawa',
                    'Pacific/Wake' => '(UTC+12:00) Pacific/Wake',
                    'Antarctica/McMurdo' => '(UTC+12:00) Antarctica/McMurdo',
                    'Asia/Anadyr' => '(UTC+12:00) Asia/Anadyr',
                    'Pacific/Nauru' => '(UTC+12:00) Pacific/Nauru',
                    'Pacific/Funafuti' => '(UTC+12:00) Pacific/Funafuti',
                    'Pacific/Fiji' => '(UTC+12:00) Pacific/Fiji',
                    'Pacific/Auckland' => '(UTC+12:00) Pacific/Auckland',
                    'Asia/Kamchatka' => '(UTC+12:00) Asia/Kamchatka',
                    'Pacific/Kwajalein' => '(UTC+12:00) Pacific/Kwajalein',
                    'Pacific/Majuro' => '(UTC+12:00) Pacific/Majuro',
                    'Pacific/Chatham' => '(UTC+12:45) Pacific/Chatham',
                    'Pacific/Enderbury' => '(UTC+13:00) Pacific/Enderbury',
                    'Pacific/Fakaofo' => '(UTC+13:00) Pacific/Fakaofo',
                    'Pacific/Tongatapu' => '(UTC+13:00) Pacific/Tongatapu',
                    'Pacific/Apia' => '(UTC+13:00) Pacific/Apia',
                    'Pacific/Kiritimati' => '(UTC+14:00) Pacific/Kiritimati'
                ],
                'name' => 'system.timezone'
            ],
            'system.param_sep' => [
                'type' => 'select',
                'label' => 'Parameter separator',
                'classes' => 'fancy',
                'default' => '',
                'options' => [
                    ':' => ': (default)',
                    ';' => '; (use this for apache on Windows)'
                ],
                'name' => 'system.param_sep'
            ]
        ],
        'rules' => [
            
        ],
        'nested' => [
            'plugins' => [
                'archives' => [
                    'enabled' => 'plugins.archives.enabled',
                    'built_in_css' => 'plugins.archives.built_in_css',
                    'date_display_format' => 'plugins.archives.date_display_format',
                    'show_count' => 'plugins.archives.show_count',
                    'limit' => 'plugins.archives.limit',
                    'order' => [
                        'dir' => 'plugins.archives.order.dir',
                        'by' => 'plugins.archives.order.by'
                    ],
                    'filters' => 'plugins.archives.filters',
                    'filter_combinator' => 'plugins.archives.filter_combinator'
                ],
                'breadcrumbs' => [
                    'enabled' => 'plugins.breadcrumbs.enabled',
                    'built_in_css' => 'plugins.breadcrumbs.built_in_css',
                    'show_all' => 'plugins.breadcrumbs.show_all'
                ],
                'error' => [
                    'enabled' => 'plugins.error.enabled'
                ],
                'feed' => [
                    'enabled' => 'plugins.feed.enabled',
                    'count' => 'plugins.feed.count',
                    'description' => 'plugins.feed.description',
                    'lang' => 'plugins.feed.lang',
                    'length' => 'plugins.feed.length'
                ],
                'jscomments' => [
                    'enabled' => 'plugins.jscomments.enabled'
                ],
                'problems' => [
                    'enabled' => 'plugins.problems.enabled'
                ],
                'relatedpages' => [
                    'enabled' => 'plugins.relatedpages.enabled'
                ],
                'simplesearch' => [
                    'enabled' => 'plugins.simplesearch.enabled',
                    'built_in_css' => 'plugins.simplesearch.built_in_css',
                    'filters' => 'plugins.simplesearch.filters',
                    'filter_combinator' => 'plugins.simplesearch.filter_combinator'
                ],
                'simple_form' => [
                    'enabled' => 'plugins.simple_form.enabled',
                    'token' => 'plugins.simple_form.token',
                    'template_file' => 'plugins.simple_form.template_file',
                    'messages' => 'plugins.simple_form.messages'
                ],
                'taxonomylist' => [
                    'enabled' => 'plugins.taxonomylist.enabled',
                    'route' => 'plugins.taxonomylist.route'
                ]
            ],
            'site' => [
                'title' => 'site.title',
                'author' => [
                    'name' => 'site.author.name',
                    'email' => 'site.author.email'
                ],
                'taxonomies' => 'site.taxonomies',
                'metadata' => 'site.metadata',
                'blog' => [
                    'route' => 'site.blog.route'
                ],
                'summary' => [
                    'size' => 'site.summary.size'
                ],
                'routes' => 'site.routes'
            ],
            'streams' => [
                'schemes' => [
                    'xxx' => 'streams.schemes.xxx'
                ]
            ],
            'system' => [
                'home' => [
                    'alias' => 'system.home.alias'
                ],
                'pages' => [
                    'theme' => 'system.pages.theme',
                    'markdown' => [
                        'extra' => 'system.pages.markdown.extra'
                    ],
                    'process' => 'system.pages.process',
                    'dateformat' => [
                        'short' => 'system.pages.dateformat.short',
                        'long' => 'system.pages.dateformat.long'
                    ],
                    'order' => [
                        'by' => 'system.pages.order.by',
                        'dir' => 'system.pages.order.dir'
                    ],
                    'list' => [
                        'count' => 'system.pages.list.count'
                    ],
                    'publish_dates' => 'system.pages.publish_dates',
                    'events' => [
                        'page' => 'system.pages.events.page',
                        'twig' => 'system.pages.events.twig'
                    ]
                ],
                'cache' => [
                    'enabled' => 'system.cache.enabled',
                    'check' => [
                        'method' => 'system.cache.check.method'
                    ],
                    'driver' => 'system.cache.driver',
                    'prefix' => 'system.cache.prefix',
                    'gzip' => 'system.cache.gzip'
                ],
                'assets' => [
                    'enable_asset_timestamp' => 'system.assets.enable_asset_timestamp',
                    'css_pipeline' => 'system.assets.css_pipeline',
                    'css_minify' => 'system.assets.css_minify',
                    'css_minify_windows' => 'system.assets.css_minify_windows',
                    'css_rewrite' => 'system.assets.css_rewrite',
                    'js_pipeline' => 'system.assets.js_pipeline',
                    'js_minify' => 'system.assets.js_minify'
                ],
                'media' => [
                    'enable_media_timestamp' => 'system.media.enable_media_timestamp',
                    'upload_limit' => 'system.media.upload_limit'
                ],
                'twig' => [
                    'cache' => 'system.twig.cache',
                    'debug' => 'system.twig.debug',
                    'auto_reload' => 'system.twig.auto_reload',
                    'autoescape' => 'system.twig.autoescape'
                ],
                'errors' => [
                    'display' => 'system.errors.display',
                    'log' => 'system.errors.log'
                ],
                'debugger' => [
                    'enabled' => 'system.debugger.enabled',
                    'mode' => 'system.debugger.mode',
                    'strict' => 'system.debugger.strict',
                    'max_depth' => 'system.debugger.max_depth',
                    'log' => [
                        'enabled' => 'system.debugger.log.enabled'
                    ],
                    'shutdown' => [
                        'close_connection' => 'system.debugger.shutdown.close_connection'
                    ]
                ],
                'images' => [
                    'default_image_quality' => 'system.images.default_image_quality',
                    'debug' => 'system.images.debug'
                ],
                'timezone' => 'system.timezone',
                'param_sep' => 'system.param_sep'
            ]
        ],
        'filter' => [
            'validation' => true
        ]
    ]
];
