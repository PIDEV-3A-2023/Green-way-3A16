<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/blog' => [[['_route' => 'app_blog', '_controller' => 'App\\Controller\\BlogController::index'], null, null, null, false, false, null]],
        '/blog-single' => [[['_route' => 'app_blog_singel', '_controller' => 'App\\Controller\\BlogSingelController::index'], null, null, null, false, false, null]],
        '/cart' => [[['_route' => 'app_cart', '_controller' => 'App\\Controller\\CartController::index'], null, null, null, false, false, null]],
        '/checkout' => [[['_route' => 'app_checkout', '_controller' => 'App\\Controller\\CheckoutController::index'], null, null, null, false, false, null]],
        '/contact' => [[['_route' => 'app_contact', '_controller' => 'App\\Controller\\ContactController::index'], null, null, null, false, false, null]],
        '/event' => [[['_route' => 'app_event_index', '_controller' => 'App\\Controller\\EventController::index'], null, ['GET' => 0], null, true, false, null]],
        '/event/new' => [[['_route' => 'app_event_new', '_controller' => 'App\\Controller\\EventController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/front' => [
            [['_route' => 'app_front', '_controller' => 'App\\Controller\\FrontController::index'], null, null, null, false, false, null],
            [['_route' => 'app_prod_index', '_controller' => 'App\\Controller\\ProductController::index'], null, ['GET' => 0], null, false, false, null],
        ],
        '/index' => [[['_route' => 'app_index', '_controller' => 'App\\Controller\\IndexController::index'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\LoginController::index'], null, null, null, false, false, null]],
        '/notFound' => [[['_route' => 'app_not_found', '_controller' => 'App\\Controller\\NotFoundController::index'], null, null, null, false, false, null]],
        '/new' => [[['_route' => 'app_prod_new', '_controller' => 'App\\Controller\\ProductController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'index', '_controller' => 'App\\Controller\\IndexController::index'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/event/([^/]++)(?'
                    .'|(*:25)'
                    .'|/edit(*:37)'
                    .'|(*:44)'
                .')'
                .'|/([^/]++)(?'
                    .'|(*:64)'
                    .'|/edit(*:76)'
                    .'|(*:83)'
                .')'
                .'|/product(?'
                    .'|\\-details(?'
                        .'|(*:114)'
                    .')'
                    .'|(*:123)'
                .')'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:163)'
                    .'|wdt/([^/]++)(*:183)'
                    .'|profiler(?'
                        .'|(*:202)'
                        .'|/([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:240)'
                                .'|router(*:254)'
                                .'|exception(?'
                                    .'|(*:274)'
                                    .'|\\.css(*:287)'
                                .')'
                            .')'
                            .'|(*:297)'
                        .')'
                    .')'
                .')'
                .'|/c(?'
                    .'|art(*:316)'
                    .'|ontact(*:330)'
                    .'|heckout(*:345)'
                .')'
                .'|/blog(?'
                    .'|\\-single(*:370)'
                    .'|(*:378)'
                .')'
                .'|/login(*:393)'
                .'|/notFound(*:410)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        25 => [[['_route' => 'app_event_show', '_controller' => 'App\\Controller\\EventController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        37 => [[['_route' => 'app_event_edit', '_controller' => 'App\\Controller\\EventController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        44 => [[['_route' => 'app_event_delete', '_controller' => 'App\\Controller\\EventController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        64 => [[['_route' => 'app_prod_show', '_controller' => 'App\\Controller\\ProductController::show'], ['id_Product'], ['GET' => 0], null, false, true, null]],
        76 => [[['_route' => 'app_prod_edit', '_controller' => 'App\\Controller\\ProductController::edit'], ['id_Product'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        83 => [[['_route' => 'app_prod_delete', '_controller' => 'App\\Controller\\ProductController::delete'], ['idProduct'], ['POST' => 0], null, false, true, null]],
        114 => [
            [['_route' => 'app_product_details', '_controller' => 'App\\Controller\\ProductDetailsController::index'], [], null, null, false, false, null],
            [['_route' => 'product-details', '_controller' => 'App\\Controller\\ProductDetailsController::index'], [], null, null, false, false, null],
        ],
        123 => [[['_route' => 'product', '_controller' => 'App\\Controller\\ProductController::index'], [], null, null, false, false, null]],
        163 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        183 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        202 => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], [], null, null, true, false, null]],
        240 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        254 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        274 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        287 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        297 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        316 => [[['_route' => 'cart', '_controller' => 'App\\Controller\\CartController::index'], [], null, null, false, false, null]],
        330 => [[['_route' => 'contact', '_controller' => 'App\\Controller\\ContactController::index'], [], null, null, false, false, null]],
        345 => [[['_route' => 'checkout', '_controller' => 'App\\Controller\\CheckoutController::index'], [], null, null, false, false, null]],
        370 => [[['_route' => 'blog-single', '_controller' => 'App\\Controller\\BlogSingelController::index'], [], null, null, false, false, null]],
        378 => [[['_route' => 'blog', '_controller' => 'App\\Controller\\BlogController::index'], [], null, null, false, false, null]],
        393 => [[['_route' => 'login', '_controller' => 'App\\Controller\\LoginController::index'], [], null, null, false, false, null]],
        410 => [
            [['_route' => 'notFound', '_controller' => 'App\\Controller\\NotFoundController::index'], [], null, null, false, false, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
