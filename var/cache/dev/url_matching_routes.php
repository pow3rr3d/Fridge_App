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
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [
            [['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null],
            [['_route' => 'logout'], null, null, null, false, false, null],
        ],
        '/admin/category' => [[['_route' => 'category_index', '_controller' => 'App\\Controller\\admin\\adminCategoryController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/category/new' => [[['_route' => 'category_new', '_controller' => 'App\\Controller\\admin\\adminCategoryController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/dashboard' => [[['_route' => 'admin.dashboard.index', '_controller' => 'App\\Controller\\admin\\adminDashboardController::index'], null, null, null, false, false, null]],
        '/admin/product' => [[['_route' => 'admin.product.index', '_controller' => 'App\\Controller\\admin\\adminProductController::index'], null, null, null, false, false, null]],
        '/admin/product/create' => [[['_route' => 'admin.product.new', '_controller' => 'App\\Controller\\admin\\adminProductController::new'], null, null, null, false, false, null]],
        '/admin/user' => [[['_route' => 'user_index', '_controller' => 'App\\Controller\\admin\\adminUserController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/user/new' => [[['_route' => 'user_new', '_controller' => 'App\\Controller\\admin\\adminUserController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/contact' => [[['_route' => 'contact', '_controller' => 'App\\Controller\\contactController::show'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\homeController::index'], null, null, null, false, false, null]],
        '/user/account' => [[['_route' => 'user.account.index', '_controller' => 'App\\Controller\\user\\userAccountController::index'], null, null, null, false, false, null]],
        '/user/conso' => [[['_route' => 'user.conso.index', '_controller' => 'App\\Controller\\user\\userConsumptionController::index'], null, null, null, false, false, null]],
        '/user/dashboard' => [[['_route' => 'user.dashboard.index', '_controller' => 'App\\Controller\\user\\userDashboardController::index'], null, null, null, false, false, null]],
        '/user/product' => [[['_route' => 'user.product.index', '_controller' => 'App\\Controller\\user\\userProductController::index'], null, null, null, false, false, null]],
        '/user/product/new' => [[['_route' => 'userProduct_new', '_controller' => 'App\\Controller\\user\\userProductController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/user/list' => [[['_route' => 'user.list.index', '_controller' => 'App\\Controller\\user\\userShoppingListController::index'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/admin/(?'
                    .'|category/([^/]++)(?'
                        .'|(*:199)'
                        .'|/edit(*:212)'
                        .'|(*:220)'
                    .')'
                    .'|product/(?'
                        .'|edit/([^/]++)(*:253)'
                        .'|delete/([^/]++)(*:276)'
                    .')'
                    .'|user/([^/]++)(?'
                        .'|(*:301)'
                        .'|/edit(*:314)'
                        .'|(*:322)'
                    .')'
                .')'
                .'|/user/(?'
                    .'|product/(?'
                        .'|edit/([^/]++)(*:365)'
                        .'|delete/([^/]++)(*:388)'
                    .')'
                    .'|list/update/([^/]++)(*:417)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        199 => [[['_route' => 'category_show', '_controller' => 'App\\Controller\\admin\\adminCategoryController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        212 => [[['_route' => 'category_edit', '_controller' => 'App\\Controller\\admin\\adminCategoryController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        220 => [[['_route' => 'category_delete', '_controller' => 'App\\Controller\\admin\\adminCategoryController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        253 => [[['_route' => 'admin.product.edit', '_controller' => 'App\\Controller\\admin\\adminProductController::edit'], ['id'], null, null, false, true, null]],
        276 => [[['_route' => 'admin.product.delete', '_controller' => 'App\\Controller\\admin\\adminProductController::delete'], ['id'], null, null, false, true, null]],
        301 => [[['_route' => 'user_show', '_controller' => 'App\\Controller\\admin\\adminUserController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        314 => [[['_route' => 'user_edit', '_controller' => 'App\\Controller\\admin\\adminUserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        322 => [[['_route' => 'user_delete', '_controller' => 'App\\Controller\\admin\\adminUserController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        365 => [[['_route' => 'app_user_userproduct_edit', '_controller' => 'App\\Controller\\user\\userProductController::edit'], ['id'], null, null, false, true, null]],
        388 => [[['_route' => 'user.product.delete', '_controller' => 'App\\Controller\\user\\userProductController::delete'], ['id'], null, null, false, true, null]],
        417 => [
            [['_route' => 'user.conso.update', '_controller' => 'App\\Controller\\user\\userShoppingListController::edit'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
