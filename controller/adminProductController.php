<?php


namespace App\Controller;

session_start();
if($_SESSION['id'] === null)
{
    header('location: /dislog');
}
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

$bdd = new Bdd($dns, $user, $password);
$req = $bdd->query('SELECT * FROM produit ORDER BY id');
while($donnees = $req->fetch())
{
    $p = new Product; 
    $p->setId($donnees['id']);
    $p->setName($donnees['produit']);
    $p->setImage($donnees['image']);

    $produits[]= $p;
}


// render Template
echo $twig->render('adminList.twig', [
    'produits' => $produits,
]);