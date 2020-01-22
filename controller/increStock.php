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

if (isset($_POST['qtBuyed']) && isset($_POST['id'])) {
    var_dump($_POST);
    $bdd = new Bdd($dns, $user, $password);
    $requete = $bdd->query('SELECT produit_stock_reel FROM user_produit WHERE produit_id = ' . $_POST['id'] . ' AND user_id = ' . $_SESSION['id'] . '');
    while ($donnees = $requete->fetch()) {
        $nwStock = $_POST['qtBuyed'] + $donnees['produit_stock_reel'];
    }
    var_dump($nwStock);
    $bdd = new Bdd($dns, $user, $password);
    $req = $bdd->query('UPDATE user_produit SET produit_stock_reel = ' . $nwStock . ' WHERE produit_id = ' . $_POST['id'] . ' AND user_id = ' . $_SESSION['id'] . '');
    header('location: /shoppingList');
    exit;
} else {
}
