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
    'admin_account_index' => [[], ['_controller' => 'App\\Controller\\admin\\adminAccountController::index'], [], [['text', '/admin/account']], [], []],
    'category_index' => [[], ['_controller' => 'App\\Controller\\admin\\adminCategoryController::index'], [], [['text', '/admin/category/']], [], []],
    'category_new' => [[], ['_controller' => 'App\\Controller\\admin\\adminCategoryController::new'], [], [['text', '/admin/category/new']], [], []],
    'category_show' => [['id'], ['_controller' => 'App\\Controller\\admin\\adminCategoryController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/category']], [], []],
    'category_edit' => [['id'], ['_controller' => 'App\\Controller\\admin\\adminCategoryController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/category']], [], []],
    'category_delete' => [['id'], ['_controller' => 'App\\Controller\\admin\\adminCategoryController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/category']], [], []],
    'content_index' => [[], ['_controller' => 'App\\Controller\\admin\\adminContentController::index'], [], [['text', '/admin/news/']], [], []],
    'content_new' => [[], ['_controller' => 'App\\Controller\\admin\\adminContentController::new'], [], [['text', '/admin/news/new']], [], []],
    'content_show' => [['id'], ['_controller' => 'App\\Controller\\admin\\adminContentController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/news']], [], []],
    'content_edit' => [['id'], ['_controller' => 'App\\Controller\\admin\\adminContentController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/news']], [], []],
    'content_delete' => [['id'], ['_controller' => 'App\\Controller\\admin\\adminContentController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/news/delete']], [], []],
    'admin_dashboard_index' => [[], ['_controller' => 'App\\Controller\\admin\\adminDashboardController::index'], [], [['text', '/admin/dashboard']], [], []],
    'admin_import_categoriesadmin_import_categories_index' => [[], ['_controller' => 'App\\Controller\\admin\\adminImportProductsController::index'], [], [['text', '/admin/import/products/']], [], []],
    'admin_page_index' => [[], ['_controller' => 'App\\Controller\\admin\\adminPageController::index'], [], [['text', '/admin/page/']], [], []],
    'admin_page_new' => [[], ['_controller' => 'App\\Controller\\admin\\adminPageController::new'], [], [['text', '/admin/page/new']], [], []],
    'admin_page_show' => [['id'], ['_controller' => 'App\\Controller\\admin\\adminPageController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/page']], [], []],
    'admin_page_edit' => [['id'], ['_controller' => 'App\\Controller\\admin\\adminPageController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/page']], [], []],
    'admin_page_delete' => [['id'], ['_controller' => 'App\\Controller\\admin\\adminPageController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/page']], [], []],
    'admin_product_index' => [[], ['_controller' => 'App\\Controller\\admin\\adminProductController::index'], [], [['text', '/admin/product']], [], []],
    'admin_product_new' => [[], ['_controller' => 'App\\Controller\\admin\\adminProductController::new'], [], [['text', '/admin/product/create']], [], []],
    'admin_product_edit' => [['id'], ['_controller' => 'App\\Controller\\admin\\adminProductController::edit'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/product/edit']], [], []],
    'admin_product_delete' => [['id'], ['_controller' => 'App\\Controller\\admin\\adminProductController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/product/delete']], [], []],
    'admin_section_index' => [[], ['_controller' => 'App\\Controller\\admin\\adminSectionController::index'], [], [['text', '/admin/section/']], [], []],
    'admin_section_new' => [[], ['_controller' => 'App\\Controller\\admin\\adminSectionController::new'], [], [['text', '/admin/section/new']], [], []],
    'admin_section_show' => [['id'], ['_controller' => 'App\\Controller\\admin\\adminSectionController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/section']], [], []],
    'admin_section_edit' => [['id'], ['_controller' => 'App\\Controller\\admin\\adminSectionController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/section']], [], []],
    'admin_section_delete' => [['id'], ['_controller' => 'App\\Controller\\admin\\adminSectionController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/section']], [], []],
    'admin_slider_index' => [[], ['_controller' => 'App\\Controller\\admin\\adminSliderController::index'], [], [['text', '/admin/slider/']], [], []],
    'admin_slider_new' => [[], ['_controller' => 'App\\Controller\\admin\\adminSliderController::new'], [], [['text', '/admin/slider/new']], [], []],
    'admin_slider_show' => [['id'], ['_controller' => 'App\\Controller\\admin\\adminSliderController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/slider']], [], []],
    'admin_slider_edit' => [['id'], ['_controller' => 'App\\Controller\\admin\\adminSliderController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/slider']], [], []],
    'admin_slider_delete' => [['id'], ['_controller' => 'App\\Controller\\admin\\adminSliderController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/slider']], [], []],
    'user_index' => [[], ['_controller' => 'App\\Controller\\admin\\adminUserController::index'], [], [['text', '/admin/user/']], [], []],
    'user_new' => [[], ['_controller' => 'App\\Controller\\admin\\adminUserController::new'], [], [['text', '/admin/user/new']], [], []],
    'user_show' => [['id'], ['_controller' => 'App\\Controller\\admin\\adminUserController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/user']], [], []],
    'user_edit' => [['id'], ['_controller' => 'App\\Controller\\admin\\adminUserController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/user']], [], []],
    'user_delete' => [['id'], ['_controller' => 'App\\Controller\\admin\\adminUserController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/user']], [], []],
    'user_admin' => [['id'], ['_controller' => 'App\\Controller\\admin\\adminUserController::admin'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/user/admin']], [], []],
    'contact' => [[], ['_controller' => 'App\\Controller\\contactController::show'], [], [['text', '/contact']], [], []],
    'front' => [[], ['_controller' => 'App\\Controller\\homeController::index'], [], [['text', '/']], [], []],
    'front_slug' => [['slug'], ['slug' => null, '_controller' => 'App\\Controller\\homeController::index'], ['slug' => '[a-z]+'], [['variable', '/', '[a-z]+', 'slug', true]], [], []],
    'user_account_index' => [[], ['_controller' => 'App\\Controller\\user\\userAccountController::index'], [], [['text', '/user/account']], [], []],
    'user_conso_index' => [[], ['_controller' => 'App\\Controller\\user\\userConsumptionController::index'], [], [['text', '/user/conso']], [], []],
    'user_conso_update' => [['id'], ['_controller' => 'App\\Controller\\user\\userConsumptionController::edit'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/user/conso/update']], [], []],
    'user_dashboard_index' => [[], ['_controller' => 'App\\Controller\\user\\userDashboardController::index'], [], [['text', '/user/dashboard']], [], []],
    'user_dashboard_memo' => [[], ['_controller' => 'App\\Controller\\user\\userDashboardController::memo'], [], [['text', '/user/memo']], [], []],
    'user_product_index' => [[], ['_controller' => 'App\\Controller\\user\\userProductController::index'], [], [['text', '/user/product']], [], []],
    'userProduct_new' => [[], ['_controller' => 'App\\Controller\\user\\userProductController::new'], [], [['text', '/user/product/new']], [], []],
    'app_user_userproduct_edit' => [['id'], ['_controller' => 'App\\Controller\\user\\userProductController::edit'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/user/product/edit']], [], []],
    'user.product.delete' => [['id'], ['_controller' => 'App\\Controller\\user\\userProductController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/user/product/delete']], [], []],
    'user_list_index' => [[], ['_controller' => 'App\\Controller\\user\\userShoppingListController::index'], [], [['text', '/user/list']], [], []],
    'user_list_update' => [['id'], ['_controller' => 'App\\Controller\\user\\userShoppingListController::edit'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/user/list/update']], [], []],
    'liip_imagine_filter_runtime' => [['filter', 'hash', 'path'], ['_controller' => 'Liip\\ImagineBundle\\Controller\\ImagineController::filterRuntimeAction'], ['filter' => '[A-z0-9_-]*', 'path' => '.+'], [['variable', '/', '.+', 'path', true], ['variable', '/', '[^/]++', 'hash', true], ['text', '/rc'], ['variable', '/', '[A-z0-9_-]*', 'filter', true], ['text', '/media/cache/resolve']], [], []],
    'liip_imagine_filter' => [['filter', 'path'], ['_controller' => 'Liip\\ImagineBundle\\Controller\\ImagineController::filterAction'], ['filter' => '[A-z0-9_-]*', 'path' => '.+'], [['variable', '/', '.+', 'path', true], ['variable', '/', '[A-z0-9_-]*', 'filter', true], ['text', '/media/cache/resolve']], [], []],
    'logout' => [[], [], [], [['text', '/logout']], [], []],
];
