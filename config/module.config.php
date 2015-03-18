<?php

return [
    'view_manager'  => [
        'display_not_found_reason'  => true,
        'display_exceptions'        => true,
        'doctype'                   => 'HTML5',
        'not_found_template'        => 'error/404',
        'exception_template'        => 'error/index',
        'template_path_stack'       => [
            'bazaar-catalog'   => __DIR__ . '/../view'
        ],
    ],
    'module_layouts' => [
        'BazaarCatalog' => 'layout/layout'
    ]
];