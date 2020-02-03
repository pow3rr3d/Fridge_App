<?php
require '../vendor/autoload.php';

use \App\Classes\Product;
use \App\Classes\Bdd;
use \App\Classes\User;



require_once '../Classes/Bdd.php';
require_once '../Classes/Product.php';
require_once '../Classes/User.php';
require_once '../includes/connexion.php';

// envoie du template twig 
$load = new Twig_Loader_Filesystem('../templates');
$twig = new Twig_Environment($load, [
    'cache' => false
]);



echo $twig->render('404.twig');