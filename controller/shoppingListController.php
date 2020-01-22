<?php


namespace App\Controller;

session_start();

use \App\Classes\Product;
use \App\Classes\Bdd;
use \App\Classes\User;
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
$requete = $bdd->query('SELECT * FROM user_produit 
                        RIGHT JOIN produit ON user_produit.produit_id = produit.id 
                        WHERE user_id = ' . $_SESSION['id'] . ' AND produit_stock_reel < produit_stock_opti');
$produits = [];
while ($donnees = $requete->fetch()) {
    $p = new Product();
    $p->setId($donnees['produit_id']);
    $p->setName($donnees['produit']);
    $p->setStockReel($donnees['produit_stock_reel']);
    $p->setStockOpti($donnees['produit_stock_opti']);
    $qt = $donnees['produit_stock_opti'] - $donnees['produit_stock_reel'];
    if ($qt < 0) {
        $qt = 0;
    }
    $p->setQtBuy($qt);
    $produits[] = $p;
}

// requete bdd user
$bdd = new Bdd($dns, $user, $password);
$req = $bdd->queryUser('user', $_SESSION['id']);
while ($donnees = $req->fetch()) {
    $u = new User();
    $u->setID($donnees['id']);
    $u->setName($donnees['name']);
    $u->setSurname($donnees['surname']);
    $u->setEmail($donnees['email']);
    $u->setAvatar($donnees['avatar']);
    $u->setPrivileges($donnees['privileges']);
}

echo $twig->render('shoppingList.twig', [
    'produits' => $produits,
    'user' => $u
]);
