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
    'cache' => false
]);
if (isset($_POST['add'])) {
    $bdd = new Bdd($dns, $user, $password);
    $req = $bdd->query('SELECT produit_stock_reel FROM user_produit WHERE user_id = ' . $_SESSION['id'] . ' AND produit_id = ' . $match['params']['id'] . '');
    while ($donnees = $req->fetch()) {
        $nwstock = $donnees['produit_stock_reel'] + abs($_POST['inputed_nb']);
    }
    $requete = $bdd->query('UPDATE user_produit SET produit_stock_reel = ' . $nwstock . ' WHERE user_id = ' . $_SESSION['id'] . ' AND produit_id = ' . $match['params']['id'] . '');
    echo 'ok maj';
    header('location: /conso');
}
if (isset($_POST['sub'])) {
    $bdd = new Bdd($dns, $user, $password);
    $req = $bdd->query('SELECT produit_stock_reel FROM user_produit WHERE user_id = ' . $_SESSION['id'] . ' AND produit_id = ' . $match['params']['id'] . '');
    while ($donnees = $req->fetch()) {
        $nwstock = $donnees['produit_stock_reel'] - abs($_POST['inputed_nb']);
    }
    $requete = $bdd->query('UPDATE user_produit SET produit_stock_reel = ' . $nwstock . ' WHERE user_id = ' . $_SESSION['id'] . ' AND produit_id = ' . $match['params']['id'] . '');
    echo 'ok maj';
    header('location: /conso');
} else {

    // requete bdd produit
    $bdd = new Bdd($dns, $user, $password);
    $requete = $bdd->queryAllJoinUser('user_produit', $_SESSION['id']);
    $produits = [];
    while ($donnees = $requete->fetch()) {
        $p = new Product();
        $p->setId($donnees['id']);
        $p->setName($donnees['produit']);
        $p->setImage($donnees['image']);

        $bdd1 = new Bdd($dns, $user, $password);
        $req = $bdd1->query('SELECT produit_img FROM user_produit WHERE user_id = ' . $_SESSION['id'] . ' AND produit_id = ' . $p->getId() . '');
        while ($donnees = $req->fetch()) {
            $p->setImage($donnees['produit_img']);
        }
        if ($p->getImage() === '') {
            $req = $bdd1->query('SELECT image FROM produit WHERE id = ' . $p->getId() . '');
            while ($donnees = $req->fetch()) {
                $p->setImage($donnees['image']);
            }
        }
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


    // render Template
    echo $twig->render('conso.twig', [
        'user' => $u,
        'produits' => $produits
    ]);
    exit;
}
