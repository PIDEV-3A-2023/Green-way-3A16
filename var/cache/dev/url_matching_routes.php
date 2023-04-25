<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/blog' => [
            [['_route' => 'app_blog', '_controller' => 'App\\Controller\\BlogController::index'], null, null, null, false, false, null],
            [['_route' => 'blog', '_controller' => 'App\\Controller\\BlogController::index'], null, null, null, false, false, null],
        ],
        '/blog-single' => [
            [['_route' => 'app_blog_singel', '_controller' => 'App\\Controller\\BlogSingelController::index'], null, null, null, false, false, null],
            [['_route' => 'blog-single', '_controller' => 'App\\Controller\\BlogSingelController::index'], null, null, null, false, false, null],
        ],
        '/cart' => [
            [['_route' => 'app_cart', '_controller' => 'App\\Controller\\CartController::index'], null, null, null, false, false, null],
            [['_route' => 'cart', '_controller' => 'App\\Controller\\CartController::index'], null, null, null, false, false, null],
        ],
        '/categorie' => [[['_route' => 'app_categorie_index', '_controller' => 'App\\Controller\\CategorieController::index'], null, ['GET' => 0], null, true, false, null]],
        '/categorie/new' => [[['_route' => 'app_categorie_new', '_controller' => 'App\\Controller\\CategorieController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/checkout' => [
            [['_route' => 'app_checkout', '_controller' => 'App\\Controller\\CheckoutController::index'], null, null, null, false, false, null],
            [['_route' => 'checkout', '_controller' => 'App\\Controller\\CheckoutController::index'], null, null, null, false, false, null],
        ],
        '/contact' => [
            [['_route' => 'app_contact', '_controller' => 'App\\Controller\\ContactController::index'], null, null, null, false, false, null],
            [['_route' => 'contact', '_controller' => 'App\\Controller\\ContactController::index'], null, null, null, false, false, null],
        ],
        '/event' => [[['_route' => 'app_event_index', '_controller' => 'App\\Controller\\EventController::index'], null, ['GET' => 0], null, true, false, null]],
        '/event/new' => [[['_route' => 'app_event_new', '_controller' => 'App\\Controller\\EventController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/front' => [[['_route' => 'app_front', '_controller' => 'App\\Controller\\FrontController::index'], null, null, null, false, false, null]],
        '/index' => [[['_route' => 'app_index', '_controller' => 'App\\Controller\\IndexController::index'], null, null, null, false, false, null]],
        '/login' => [
            [['_route' => 'app_login', '_controller' => 'App\\Controller\\LoginController::index'], null, null, null, false, false, null],
            [['_route' => 'login', '_controller' => 'App\\Controller\\LoginController::index'], null, null, null, false, false, null],
        ],
        '/notFound' => [
            [['_route' => 'app_not_found', '_controller' => 'App\\Controller\\NotFoundController::index'], null, null, null, false, false, null],
            [['_route' => 'notFound', '_controller' => 'App\\Controller\\NotFoundController::index'], null, null, null, false, false, null],
        ],
        '/prod' => [[['_route' => 'app_prod_index', '_controller' => 'App\\Controller\\ProdController::index'], null, ['GET' => 0], null, true, false, null]],
        '/prod/new' => [[['_route' => 'app_prod_new', '_controller' => 'App\\Controller\\ProdController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/product' => [
            [['_route' => 'app_product', '_controller' => 'App\\Controller\\ProductController::index'], null, null, null, false, false, null],
            [['_route' => 'product', '_controller' => 'App\\Controller\\ProductController::index'], null, null, null, false, false, null],
        ],
        '/product-details' => [
            [['_route' => 'app_product_details', '_controller' => 'App\\Controller\\ProductDetailsController::index'], null, null, null, false, false, null],
            [['_route' => 'product-details', '_controller' => 'App\\Controller\\ProductDetailsController::index'], null, null, null, false, false, null],
        ],
        '/productfk' => [[['_route' => 'app_productfk_index', '_controller' => 'App\\Controller\\ProductfkController::index'], null, ['GET' => 0], null, true, false, null]],
        '/productfk/new' => [[['_route' => 'app_productfk_new', '_controller' => 'App\\Controller\\ProductfkController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'index', '_controller' => 'App\\Controller\\IndexController::index'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/categorie/([^/]++)(?'
                    .'|(*:29)'
                    .'|/edit(*:41)'
                    .'|(*:48)'
                .')'
                .'|/event/([^/]++)(?'
                    .'|(*:74)'
                    .'|/edit(*:86)'
                    .'|(*:93)'
                .')'
                .'|/prod(?'
                    .'|/([^/]++)(?'
                        .'|(*:121)'
                        .'|/edit(*:134)'
                        .'|(*:142)'
                    .')'
                    .'|uctfk/([^/]++)(?'
                        .'|(*:168)'
                        .'|/edit(*:181)'
                        .'|(*:189)'
                    .')'
                .')'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:230)'
                    .'|wdt/([^/]++)(*:250)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:296)'
                            .'|router(*:310)'
                            .'|exception(?'
                                .'|(*:330)'
                                .'|\\.css(*:343)'
                            .')'
                        .')'
                        .'|(*:353)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        29 => [[['_route' => 'app_categorie_show', '_controller' => 'App\\Controller\\CategorieController::show'], ['idcategorie_id'], ['GET' => 0], null, false, true, null]],
        41 => [[['_route' => 'app_categorie_edit', '_controller' => 'App\\Controller\\CategorieController::edit'], ['idcategorie_id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        48 => [[['_route' => 'app_categorie_delete', '_controller' => 'App\\Controller\\CategorieController::delete'], ['idcategorie_id'], ['POST' => 0], null, false, true, null]],
        74 => [[['_route' => 'app_event_show', '_controller' => 'App\\Controller\\EventController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        86 => [[['_route' => 'app_event_edit', '_controller' => 'App\\Controller\\EventController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        93 => [[['_route' => 'app_event_delete', '_controller' => 'App\\Controller\\EventController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        121 => [[['_route' => 'app_prod_show', '_controller' => 'App\\Controller\\ProdController::show'], ['id_Product'], ['GET' => 0], null, false, true, null]],
        134 => [[['_route' => 'app_prod_edit', '_controller' => 'App\\Controller\\ProdController::edit'], ['id_Product'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        142 => [[['_route' => 'app_prod_delete', '_controller' => 'App\\Controller\\ProdController::delete'], ['idProduct'], ['POST' => 0], null, false, true, null]],
        168 => [[['_route' => 'app_productfk_show', '_controller' => 'App\\Controller\\ProductfkController::show'], ['id_Product'], ['GET' => 0], null, false, true, null]],
        181 => [[['_route' => 'app_productfk_edit', '_controller' => 'App\\Controller\\ProductfkController::edit'], ['id_Product'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        189 => [[['_route' => 'app_productfk_delete', '_controller' => 'App\\Controller\\ProductfkController::delete'], ['id_Product'], ['POST' => 0], null, false, true, null]],
        230 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        250 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        296 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        310 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        330 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        343 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        353 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
