<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    'app_register' => [[], ['_controller' => 'App\\Controller\\RegistrationController::register'], [], [['text', '/register']], [], []],
    'app_login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/login']], [], []],
    'app_logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/logout']], [], []],
    'category_index' => [[], ['_controller' => 'App\\Controller\\admin\\adminCategoryController::index'], [], [['text', '/admin/category/']], [], []],
    'category_new' => [[], ['_controller' => 'App\\Controller\\admin\\adminCategoryController::new'], [], [['text', '/admin/category/new']], [], []],
    'category_show' => [['id'], ['_controller' => 'App\\Controller\\admin\\adminCategoryController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/category']], [], []],
    'category_edit' => [['id'], ['_controller' => 'App\\Controller\\admin\\adminCategoryController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/category']], [], []],
    'category_delete' => [['id'], ['_controller' => 'App\\Controller\\admin\\adminCategoryController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/category']], [], []],
    'admin.dashboard.index' => [[], ['_controller' => 'App\\Controller\\admin\\adminDashboardController::index'], [], [['text', '/admin/dashboard']], [], []],
    'admin.product.index' => [[], ['_controller' => 'App\\Controller\\admin\\adminProductController::index'], [], [['text', '/admin/product']], [], []],
    'admin.product.new' => [[], ['_controller' => 'App\\Controller\\admin\\adminProductController::new'], [], [['text', '/admin/product/create']], [], []],
    'admin.product.edit' => [['id'], ['_controller' => 'App\\Controller\\admin\\adminProductController::edit'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/product/edit']], [], []],
    'admin.product.delete' => [['id'], ['_controller' => 'App\\Controller\\admin\\adminProductController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/product/delete']], [], []],
    'user_index' => [[], ['_controller' => 'App\\Controller\\admin\\adminUserController::index'], [], [['text', '/admin/user/']], [], []],
    'user_new' => [[], ['_controller' => 'App\\Controller\\admin\\adminUserController::new'], [], [['text', '/admin/user/new']], [], []],
    'user_show' => [['id'], ['_controller' => 'App\\Controller\\admin\\adminUserController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/user']], [], []],
    'user_edit' => [['id'], ['_controller' => 'App\\Controller\\admin\\adminUserController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/user']], [], []],
    'user_delete' => [['id'], ['_controller' => 'App\\Controller\\admin\\adminUserController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/user']], [], []],
    'contact' => [[], ['_controller' => 'App\\Controller\\contactController::show'], [], [['text', '/contact']], [], []],
    'home' => [[], ['_controller' => 'App\\Controller\\homeController::index'], [], [['text', '/']], [], []],
    'user.account.index' => [[], ['_controller' => 'App\\Controller\\user\\userAccountController::index'], [], [['text', '/user/account']], [], []],
    'user.conso.index' => [[], ['_controller' => 'App\\Controller\\user\\userConsumptionController::index'], [], [['text', '/user/conso']], [], []],
    'user.dashboard.index' => [[], ['_controller' => 'App\\Controller\\user\\userDashboardController::index'], [], [['text', '/user/dashboard']], [], []],
    'user.product.index' => [[], ['_controller' => 'App\\Controller\\user\\userProductController::index'], [], [['text', '/user/product']], [], []],
    'userProduct_new' => [[], ['_controller' => 'App\\Controller\\user\\userProductController::new'], [], [['text', '/user/product/new']], [], []],
    'app_user_userproduct_edit' => [['id'], ['_controller' => 'App\\Controller\\user\\userProductController::edit'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/user/product/edit']], [], []],
    'user.product.delete' => [['id'], ['_controller' => 'App\\Controller\\user\\userProductController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/user/product/delete']], [], []],
    'user.list.index' => [[], ['_controller' => 'App\\Controller\\user\\userShoppingListController::index'], [], [['text', '/user/list']], [], []],
    'user.conso.update' => [['id'], ['_controller' => 'App\\Controller\\user\\userShoppingListController::edit'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/user/list/update']], [], []],
    'logout' => [[], [], [], [['text', '/logout']], [], []],
];
