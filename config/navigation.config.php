<?php

return [
    'navigation' => [
        'sidebar' => [
            'bazaar-membership' => [],
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
                    'products' => [
                        'label' => "Manage Products",
                        'route' => "catalog/product",
                        'icon'  => "fa fa-gears",
                    ],
                    'brands' => [
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