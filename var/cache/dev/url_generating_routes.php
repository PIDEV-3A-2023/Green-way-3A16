<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    'app_blog' => [[], ['_controller' => 'App\\Controller\\BlogController::index'], [], [['text', '/blog']], [], [], []],
    'app_blog_singel' => [[], ['_controller' => 'App\\Controller\\BlogSingelController::index'], [], [['text', '/blog-single']], [], [], []],
    'app_cart' => [[], ['_controller' => 'App\\Controller\\CartController::index'], [], [['text', '/cart']], [], [], []],
    'app_categorie_index' => [[], ['_controller' => 'App\\Controller\\CategorieController::index'], [], [['text', '/categorie/']], [], [], []],
    'app_categorie_new' => [[], ['_controller' => 'App\\Controller\\CategorieController::new'], [], [['text', '/categorie/new']], [], [], []],
    'app_categorie_show' => [['idcategorie_id'], ['_controller' => 'App\\Controller\\CategorieController::show'], [], [['variable', '/', '[^/]++', 'idcategorie_id', true], ['text', '/categorie']], [], [], []],
    'app_categorie_edit' => [['idcategorie_id'], ['_controller' => 'App\\Controller\\CategorieController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'idcategorie_id', true], ['text', '/categorie']], [], [], []],
    'app_categorie_delete' => [['idcategorie_id'], ['_controller' => 'App\\Controller\\CategorieController::delete'], [], [['variable', '/', '[^/]++', 'idcategorie_id', true], ['text', '/categorie']], [], [], []],
    'app_checkout' => [[], ['_controller' => 'App\\Controller\\CheckoutController::index'], [], [['text', '/checkout']], [], [], []],
    'app_contact' => [[], ['_controller' => 'App\\Controller\\ContactController::index'], [], [['text', '/contact']], [], [], []],
    'app_event_index' => [[], ['_controller' => 'App\\Controller\\EventController::index'], [], [['text', '/event/']], [], [], []],
    'app_event_new' => [[], ['_controller' => 'App\\Controller\\EventController::new'], [], [['text', '/event/new']], [], [], []],
    'app_event_show' => [['id'], ['_controller' => 'App\\Controller\\EventController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/event']], [], [], []],
    'app_event_edit' => [['id'], ['_controller' => 'App\\Controller\\EventController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/event']], [], [], []],
    'app_event_delete' => [['id'], ['_controller' => 'App\\Controller\\EventController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/event']], [], [], []],
    'app_front' => [[], ['_controller' => 'App\\Controller\\FrontController::index'], [], [['text', '/front']], [], [], []],
    'app_index' => [[], ['_controller' => 'App\\Controller\\IndexController::index'], [], [['text', '/index']], [], [], []],
    'app_login' => [[], ['_controller' => 'App\\Controller\\LoginController::index'], [], [['text', '/login']], [], [], []],
    'app_materiaux_index' => [[], ['_controller' => 'App\\Controller\\MateriauxController::index'], [], [['text', '/materiaux/']], [], [], []],
    'ajouter_materiaux' => [[], ['_controller' => 'App\\Controller\\MateriauxController::new'], [], [['text', '/materiaux/new']], [], [], []],
    'app_materiaux_statistics' => [[], ['_controller' => 'App\\Controller\\MateriauxController::statistics'], [], [['text', '/materiaux/statistics']], [], [], []],
    'app_materiaux_show' => [['idmateriaux'], ['_controller' => 'App\\Controller\\MateriauxController::show'], [], [['variable', '/', '[^/]++', 'idmateriaux', true], ['text', '/materiaux']], [], [], []],
    'app_materiaux_edit' => [['idmateriaux'], ['_controller' => 'App\\Controller\\MateriauxController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'idmateriaux', true], ['text', '/materiaux']], [], [], []],
    'app_materiaux_delete' => [['idmateriaux'], ['_controller' => 'App\\Controller\\MateriauxController::delete'], [], [['variable', '/', '[^/]++', 'idmateriaux', true], ['text', '/materiaux']], [], [], []],
    'listp' => [[], ['_controller' => 'App\\Controller\\MateriauxController::listp'], [], [['text', '/materiaux/listp']], [], [], []],
    'app_not_found' => [[], ['_controller' => 'App\\Controller\\NotFoundController::index'], [], [['text', '/notFound']], [], [], []],
    'app_prod_index' => [[], ['_controller' => 'App\\Controller\\ProdController::index'], [], [['text', '/prod/']], [], [], []],
    'app_prod_new' => [[], ['_controller' => 'App\\Controller\\ProdController::new'], [], [['text', '/prod/new']], [], [], []],
    'app_prod_show' => [['id_Product'], ['_controller' => 'App\\Controller\\ProdController::show'], [], [['variable', '/', '[^/]++', 'id_Product', true], ['text', '/prod']], [], [], []],
    'app_prod_edit' => [['id_Product'], ['_controller' => 'App\\Controller\\ProdController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id_Product', true], ['text', '/prod']], [], [], []],
    'app_prod_delete' => [['idProduct'], ['_controller' => 'App\\Controller\\ProdController::delete'], [], [['variable', '/', '[^/]++', 'idProduct', true], ['text', '/prod']], [], [], []],
    'app_product' => [[], ['_controller' => 'App\\Controller\\ProductController::index'], [], [['text', '/product']], [], [], []],
    'app_product_details' => [[], ['_controller' => 'App\\Controller\\ProductDetailsController::index'], [], [['text', '/product-details']], [], [], []],
    'app_productfk_index' => [[], ['_controller' => 'App\\Controller\\ProductfkController::index'], [], [['text', '/productfk/']], [], [], []],
    'app_productfk_new' => [[], ['_controller' => 'App\\Controller\\ProductfkController::new'], [], [['text', '/productfk/new']], [], [], []],
    'app_productfk_show' => [['id_Product'], ['_controller' => 'App\\Controller\\ProductfkController::show'], [], [['variable', '/', '[^/]++', 'id_Product', true], ['text', '/productfk']], [], [], []],
    'app_productfk_edit' => [['id_Product'], ['_controller' => 'App\\Controller\\ProductfkController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id_Product', true], ['text', '/productfk']], [], [], []],
    'app_productfk_delete' => [['id_Product'], ['_controller' => 'App\\Controller\\ProductfkController::delete'], [], [['variable', '/', '[^/]++', 'id_Product', true], ['text', '/productfk']], [], [], []],
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    'index' => [[], ['_controller' => 'App\\Controller\\IndexController::index'], [], [['text', '/']], [], [], []],
    'cart' => [[], ['_controller' => 'App\\Controller\\CartController::index'], [], [['text', '/cart']], [], [], []],
    'product' => [[], ['_controller' => 'App\\Controller\\ProductController::index'], [], [['text', '/product']], [], [], []],
    'product-details' => [[], ['_controller' => 'App\\Controller\\ProductDetailsController::index'], [], [['text', '/product-details']], [], [], []],
    'contact' => [[], ['_controller' => 'App\\Controller\\ContactController::index'], [], [['text', '/contact']], [], [], []],
    'blog-single' => [[], ['_controller' => 'App\\Controller\\BlogSingelController::index'], [], [['text', '/blog-single']], [], [], []],
    'blog' => [[], ['_controller' => 'App\\Controller\\BlogController::index'], [], [['text', '/blog']], [], [], []],
    'login' => [[], ['_controller' => 'App\\Controller\\LoginController::index'], [], [['text', '/login']], [], [], []],
    'checkout' => [[], ['_controller' => 'App\\Controller\\CheckoutController::index'], [], [['text', '/checkout']], [], [], []],
    'notFound' => [[], ['_controller' => 'App\\Controller\\NotFoundController::index'], [], [['text', '/notFound']], [], [], []],
];
