<?php


namespace App\Controller;

use \App\Classes\Product;
use \App\Classes\Bdd;
use \App\Classes\User;
use PDO;
use Twig\Loader\FilesystemLoader;
use Twig\Environment;


require_once '../Classes/Bdd.php';
require_once '../Classes/Product.php';
require_once '../Classes/User.php';
require_once '../includes/connexion.php';

// envoie du template twig 
$load = new FilesystemLoader('../templates');
$twig = new Environment($load, [
    'cache' => false,
    'debug' => true
]);

    // requete bdd produit
    $bdd = new Bdd($dns, $user, $password);
    $req = $bdd->queryProduct('produit', $match['params']['id']);
    while ($donnees = $req->fetch()) {
        $p = new Product;
        $p->setId($donnees['id']);
        $p->setName($donnees['produit']);
        $p->setImage($donnees['image']);
    }

echo $twig->render('adminProductCard.twig', [
    'produit' => $p
]);