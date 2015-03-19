<?php

return [
    'console'   => [], //routing configuration for CLI modules
    'router'    => [
        'routes' => [
            'catalog'    => [
                'type'      => 'Literal',
                'options'   => [
                    'route'     => '/catalog',
                    'defaults'  => [
                        'controller'    => 'BazaarCatalog\Controller\Index',
                        'action'        => 'index'
                    ]
                ],
                'may_terminate' => true,
                'child_routes'  => [      
                    // IndexController
                    'product'   => [
                        'type'      => "Literal",
                        'options'   => [
                            'route'     => '/product',
                            'defaults'  => [
                                'controller'=> 'BazaarCatalog\Controller\Product',
                                'action'    => 'index'
                            ]
                        ],
                        'may_terminate' => true,
                        'child_routes'  => [
                            'create'    => [
                                'type'      => "Literal",
                                'options'   => [
                                    'route'     => '/create',
                                    'defaults'  => [
                                        'action'    => 'create'
                                    ]
                                ]
                            ]
                        ]
                    ],
                    'brand'     => [
                        'type'      => "Literal",
                        'options'   => [
                            'route'     => '/brand',
                            'defaults'  => [
                                'controller'=> 'BazaarCatalog\Controller\Brand',
                                'action'  => 'index'
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];