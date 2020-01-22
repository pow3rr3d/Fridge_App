<?php
require '../vendor/autoload.php';

$router = new AltoRouter();

$router->map('GET', '/', 'home', 'home');
$router->map('POST', '/login', 'loginController');
$router->map('GET', '/dislog', 'dislogController');
$router->map('GET', '/home', 'mainMenuController');
$router->map('GET', '/list', 'listController');
$router->map('GET', '/addProduct', 'productUserController');
$router->map('POST', '/addProductSub', 'productUserController');
$router->map('GET', '/deleteProduct/[i:id]', 'productDeleteController');
$router->map('GET', '/modifyProduct/[i:id]', 'productModifyController');
$router->map('POST', '/modifyProductSub/[i:id]', 'productModifyController');
$router->map('GET', '/shoppingList', 'shoppingListController');
$router->map('POST', '/addProductQt/[i:id]', 'increStock');
$router->map('GET', '/contact', 'contactController');
$router->map('GET', '/conso', 'consoController');
$router->map('POST', '/consoSub/[i:id]', 'consoController');
$router->map('GET', '/account', 'userController');
$router->map('POST', '/updateUser', 'userController');
$router->map('GET', '/test', function() {
    echo 'test';
});

$match = $router->match();
if (is_array($match)) {
    if (is_callable($match['target'])) {
        call_user_func_array($match['target'], $match['params']);
    } else {
        require "../controller/{$match['target']}.php";
    }
} else {
    require "../controller/404.php";
}
