<?php

return [
    'navigation' => [
        // Admin Manager settings
        'admin'     => [
            'bazaar-catalog'   => [
                'label' => 'Manage Catalog',
                'route' =>  "catalog",
                'icon'  => "fa fa-book",
                'pages' => [
                    'dashboard' => [
                        'label' => "Dashboard",
                        'route' => "catalog",
                        'icon'  => "fa fa-book",
                    ],
                    'products'  => [
                        'label' => "Manage Products",
                        'route' => "catalog/product",
                        'icon'  => "fa fa-book",
                    ],
                    'brands'    => [
                        'label' => "Manage Brands",
                        'route' => "catalog/brand",
                        'icon'  => "fa fa-book",
                    ],
                    'categories'    => [
                        'label' => "Manage Categories",
                        'route' => "catalog/categories",
                        'icon'  => "fa fa-book",
                    ],
                ]
            ]
        ],
        // Front-end settings
        'sidebar'   => [
            'bazaar-catalog'    => [
                'label' => 'My Catalog',
                'route' =>  "#",
                'icon'  => "fa fa-book",
                'pages' => [
                    'dashboard' => [
                        'label' => "Dashboard",
                        'route' => "catalog",
                        'icon'  => "fa fa-dashboard",
                    ],
                    'products'  => [
                        'label' => "Manage Products",
                        'route' => "catalog/product",
                        'icon'  => "fa fa-gears",
                    ],
                    'brands'    => [
                        'label' => "Manage Brands",
                        'route' => "catalog/brand",
                        'icon'  => "fa fa-gears",
                    ],
                    // Append Here
                ]
            ]
        ]
    ]
];