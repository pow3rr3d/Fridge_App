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
use PDO;
use Twig\Loader\FilesystemLoader;
use Twig\Environment;


require_once '../Classes/Bdd.php';
require_once '../Classes/Product.php';
require_once '../Classes/User.php';
require_once '../includes/connexion.php';




$bdd = new Bdd($dns, $user, $password);
$req = $bdd->query('DELETE FROM user_produit WHERE produit_id = '.$match['params']['id'].'');
$req = $bdd->query('DELETE FROM produit WHERE id = '.$match['params']['id'].'');

header("Location: /admin/product");
exit;
