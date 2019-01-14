<?php
return [
    'backend' => [
        'frontName' => 'ppm_admin'
    ],
    'db' => [
        'connection' => [
            'indexer' => [
                'host' => '127.0.01',
                'dbname' => 'ppm226',
                'username' => 'root',
                'password' => '',
                'active' => '1',
                'persistent' => NULL
            ],
            'default' => [
                'host' => '127.0.01',
                'dbname' => 'ppm226',
                'username' => 'root',
                'password' => '',
                'active' => '1'
            ]
        ],
        'table_prefix' => ''
    ],
    'crypt' => [
        'key' => '589d9ccba130303aaba14b1a0e430c4f'
    ],
    'resource' => [
        'default_setup' => [
            'connection' => 'default'
        ]
    ],
    'x-frame-options' => 'SAMEORIGIN',
    'MAGE_MODE' => 'developer',
    'session' => [
        'save' => 'files'
    ],
    'cache_types' => [
        'config' => 1,
        'layout' => 1,
        'block_html' => 1,
        'collections' => 1,
        'reflection' => 1,
        'db_ddl' => 1,
        'eav' => 1,
        'customer_notification' => 1,
        'full_page' => 1,
        'config_integration' => 1,
        'config_integration_api' => 1,
        'target_rule' => 1,
        'config_webservice' => 1,
        'translate' => 1,
        'compiled_config' => 1
    ],
    'install' => [
        'date' => 'Fri, 04 Jan 2019 01:59:42 +0000'
    ]
];
