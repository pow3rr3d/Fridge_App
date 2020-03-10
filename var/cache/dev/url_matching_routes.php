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
        '/admin/account' => [[['_route' => 'admin.account.index', '_controller' => 'App\\Controller\\admin\\adminAccountController::index'], null, null, null, false, false, null]],
        '/admin/category' => [[['_route' => 'category_index', '_controller' => 'App\\Controller\\admin\\adminCategoryController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/category/new' => [[['_route' => 'category_new', '_controller' => 'App\\Controller\\admin\\adminCategoryController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/news' => [[['_route' => 'content_index', '_controller' => 'App\\Controller\\admin\\adminContentController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/news/new' => [[['_route' => 'content_new', '_controller' => 'App\\Controller\\admin\\adminContentController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/dashboard' => [[['_route' => 'admin.dashboard.index', '_controller' => 'App\\Controller\\admin\\adminDashboardController::index'], null, null, null, false, false, null]],
        '/admin/page' => [[['_route' => 'admin_page_index', '_controller' => 'App\\Controller\\admin\\adminPageController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/page/new' => [[['_route' => 'admin_page_new', '_controller' => 'App\\Controller\\admin\\adminPageController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/product' => [[['_route' => 'admin.product.index', '_controller' => 'App\\Controller\\admin\\adminProductController::index'], null, null, null, false, false, null]],
        '/admin/product/create' => [[['_route' => 'admin.product.new', '_controller' => 'App\\Controller\\admin\\adminProductController::new'], null, null, null, false, false, null]],
        '/admin/section' => [[['_route' => 'admin_section_index', '_controller' => 'App\\Controller\\admin\\adminSectionController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/section/new' => [[['_route' => 'admin_section_new', '_controller' => 'App\\Controller\\admin\\adminSectionController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/user' => [[['_route' => 'user_index', '_controller' => 'App\\Controller\\admin\\adminUserController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/user/new' => [[['_route' => 'user_new', '_controller' => 'App\\Controller\\admin\\adminUserController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/contact' => [[['_route' => 'contact', '_controller' => 'App\\Controller\\contactController::show'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\homeController::index'], null, null, null, false, false, null]],
        '/user/account' => [[['_route' => 'user.account.index', '_controller' => 'App\\Controller\\user\\userAccountController::index'], null, null, null, false, false, null]],
        '/user/conso' => [[['_route' => 'user.conso.index', '_controller' => 'App\\Controller\\user\\userConsumptionController::index'], null, null, null, false, false, null]],
        '/user/dashboard' => [[['_route' => 'user.dashboard.index', '_controller' => 'App\\Controller\\user\\userDashboardController::index'], null, null, null, false, false, null]],
        '/user/memo' => [[['_route' => 'user.dashboard.memo', '_controller' => 'App\\Controller\\user\\userDashboardController::memo'], null, null, null, false, false, null]],
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
                    .'|news/(?'
                        .'|([^/]++)(?'
                            .'|(*:248)'
                            .'|/edit(*:261)'
                        .')'
                        .'|delete/([^/]++)(*:285)'
                    .')'
                    .'|p(?'
                        .'|age/([^/]++)(?'
                            .'|(*:313)'
                            .'|/edit(*:326)'
                            .'|(*:334)'
                        .')'
                        .'|roduct/(?'
                            .'|edit/([^/]++)(*:366)'
                            .'|delete/([^/]++)(*:389)'
                        .')'
                    .')'
                    .'|section/([^/]++)(?'
                        .'|(*:418)'
                        .'|/edit(*:431)'
                        .'|(*:439)'
                    .')'
                    .'|user/(?'
                        .'|([^/]++)(?'
                            .'|(*:467)'
                            .'|/edit(*:480)'
                            .'|(*:488)'
                        .')'
                        .'|admin/([^/]++)(*:511)'
                    .')'
                .')'
                .'|/user/(?'
                    .'|conso/update/([^/]++)(*:551)'
                    .'|product/(?'
                        .'|edit/([^/]++)(*:583)'
                        .'|delete/([^/]++)(*:606)'
                    .')'
                    .'|list/update/([^/]++)(*:635)'
                .')'
                .'|/media/cache/resolve/(?'
                    .'|([A-z0-9_-]*)/rc/([^/]++)/(.+)(*:698)'
                    .'|([A-z0-9_-]*)/(.+)(*:724)'
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
        248 => [[['_route' => 'content_show', '_controller' => 'App\\Controller\\admin\\adminContentController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        261 => [[['_route' => 'content_edit', '_controller' => 'App\\Controller\\admin\\adminContentController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        285 => [[['_route' => 'content_delete', '_controller' => 'App\\Controller\\admin\\adminContentController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        313 => [[['_route' => 'admin_page_show', '_controller' => 'App\\Controller\\admin\\adminPageController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        326 => [[['_route' => 'admin_page_edit', '_controller' => 'App\\Controller\\admin\\adminPageController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        334 => [[['_route' => 'admin_page_delete', '_controller' => 'App\\Controller\\admin\\adminPageController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        366 => [[['_route' => 'admin.product.edit', '_controller' => 'App\\Controller\\admin\\adminProductController::edit'], ['id'], null, null, false, true, null]],
        389 => [[['_route' => 'admin.product.delete', '_controller' => 'App\\Controller\\admin\\adminProductController::delete'], ['id'], null, null, false, true, null]],
        418 => [[['_route' => 'admin_section_show', '_controller' => 'App\\Controller\\admin\\adminSectionController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        431 => [[['_route' => 'admin_section_edit', '_controller' => 'App\\Controller\\admin\\adminSectionController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        439 => [[['_route' => 'admin_section_delete', '_controller' => 'App\\Controller\\admin\\adminSectionController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        467 => [[['_route' => 'user_show', '_controller' => 'App\\Controller\\admin\\adminUserController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        480 => [[['_route' => 'user_edit', '_controller' => 'App\\Controller\\admin\\adminUserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        488 => [[['_route' => 'user_delete', '_controller' => 'App\\Controller\\admin\\adminUserController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        511 => [[['_route' => 'user_admin', '_controller' => 'App\\Controller\\admin\\adminUserController::admin'], ['id'], null, null, false, true, null]],
        551 => [[['_route' => 'user.conso.update', '_controller' => 'App\\Controller\\user\\userConsumptionController::edit'], ['id'], null, null, false, true, null]],
        583 => [[['_route' => 'app_user_userproduct_edit', '_controller' => 'App\\Controller\\user\\userProductController::edit'], ['id'], null, null, false, true, null]],
        606 => [[['_route' => 'user.product.delete', '_controller' => 'App\\Controller\\user\\userProductController::delete'], ['id'], null, null, false, true, null]],
        635 => [[['_route' => 'user.list.update', '_controller' => 'App\\Controller\\user\\userShoppingListController::edit'], ['id'], null, null, false, true, null]],
        698 => [[['_route' => 'liip_imagine_filter_runtime', '_controller' => 'Liip\\ImagineBundle\\Controller\\ImagineController::filterRuntimeAction'], ['filter', 'hash', 'path'], ['GET' => 0], null, false, true, null]],
        724 => [
            [['_route' => 'liip_imagine_filter', '_controller' => 'Liip\\ImagineBundle\\Controller\\ImagineController::filterAction'], ['filter', 'path'], ['GET' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
