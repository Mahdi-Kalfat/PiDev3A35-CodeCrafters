<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/show' => [[['_route' => 'app_show_commande', '_controller' => 'App\\Controller\\CommandeController::show1'], null, null, null, false, false, null]],
        '/commande' => [[['_route' => 'app_commande', '_controller' => 'App\\Controller\\CommandeController::index'], null, null, null, false, false, null]],
        '/ajoutercommande' => [[['_route' => 'app_addcommande', '_controller' => 'App\\Controller\\CommandeController::ajouterproduit'], null, null, null, false, false, null]],
        '/backcommande' => [[['_route' => 'app_backc', '_controller' => 'App\\Controller\\CommandeController::show2'], null, null, null, false, false, null]],
        '/panier' => [[['_route' => 'app_panier', '_controller' => 'App\\Controller\\PanierController::index'], null, null, null, false, false, null]],
        '/panier/deleteAll' => [[['_route' => 'cartDelete', '_controller' => 'App\\Controller\\PanierController::deleteALL'], null, null, null, false, false, null]],
        '/produit' => [[['_route' => 'app_produit', '_controller' => 'App\\Controller\\ProduitController::show'], null, null, null, false, false, null]],
        '/afficherproduit' => [[['_route' => 'app_afficherproduit', '_controller' => 'App\\Controller\\ProduitController::show1'], null, null, null, false, false, null]],
        '/home' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\ProduitController::index2'], null, null, null, false, false, null]],
        '/magasin' => [[['_route' => 'app_magasin', '_controller' => 'App\\Controller\\ProduitController::index3'], null, null, null, false, false, null]],
        '/homme' => [[['_route' => 'app_homme', '_controller' => 'App\\Controller\\ProduitController::index4'], null, null, null, false, false, null]],
        '/femme' => [[['_route' => 'app_femme', '_controller' => 'App\\Controller\\ProduitController::index5'], null, null, null, false, false, null]],
        '/enfant' => [[['_route' => 'app_enfant', '_controller' => 'App\\Controller\\ProduitController::index6'], null, null, null, false, false, null]],
        '/panierr' => [[['_route' => 'app_panierr', '_controller' => 'App\\Controller\\ProduitController::index7'], null, null, null, false, false, null]],
        '/ajouterproduit' => [[['_route' => 'app_addproduit', '_controller' => 'App\\Controller\\ProduitController::ajouterproduit'], null, null, null, false, false, null]],
        '/back' => [[['_route' => 'app_back', '_controller' => 'App\\Controller\\ProduitController::show2'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/(?'
                        .'|font/([^/\\.]++)\\.woff2(*:98)'
                        .'|([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:134)'
                                .'|router(*:148)'
                                .'|exception(?'
                                    .'|(*:168)'
                                    .'|\\.css(*:181)'
                                .')'
                            .')'
                            .'|(*:191)'
                        .')'
                    .')'
                .')'
                .'|/commande/(?'
                    .'|edit/([^/]++)(*:228)'
                    .'|delete/([^/]++)(*:251)'
                .')'
                .'|/p(?'
                    .'|anier/(?'
                        .'|add/([^/]++)(*:286)'
                        .'|delete(?'
                            .'|/([^/]++)(*:312)'
                            .'|All/([^/]++)(*:332)'
                        .')'
                    .')'
                    .'|roduit/(?'
                        .'|edit/([^/]++)(*:365)'
                        .'|delete/([^/]++)(*:388)'
                    .')'
                .')'
                .'|/detailsproduit/([^/]++)(*:422)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        98 => [[['_route' => '_profiler_font', '_controller' => 'web_profiler.controller.profiler::fontAction'], ['fontName'], null, null, false, false, null]],
        134 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        148 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        168 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        181 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        191 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        228 => [[['_route' => 'app_commande_edit', '_controller' => 'App\\Controller\\CommandeController::editproduitForm'], ['id'], null, null, false, true, null]],
        251 => [[['_route' => 'app_commande_delete', '_controller' => 'App\\Controller\\CommandeController::deleteproduit'], ['id'], null, null, false, true, null]],
        286 => [[['_route' => 'cartAdd', '_controller' => 'App\\Controller\\PanierController::addToCart'], ['id'], null, null, false, true, null]],
        312 => [[['_route' => 'cartDeletep', '_controller' => 'App\\Controller\\PanierController::deleteFromCart'], ['id'], null, null, false, true, null]],
        332 => [[['_route' => 'cartDeleteAll', '_controller' => 'App\\Controller\\PanierController::deleteALLToCart'], ['id'], null, null, false, true, null]],
        365 => [[['_route' => 'app_produit_edit', '_controller' => 'App\\Controller\\ProduitController::editproduitForm'], ['id'], null, null, false, true, null]],
        388 => [[['_route' => 'app_produit_delete', '_controller' => 'App\\Controller\\ProduitController::deleteproduit'], ['id'], null, null, false, true, null]],
        422 => [
            [['_route' => 'app_details_produit', '_controller' => 'App\\Controller\\ProduitController::detailsProduit'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
