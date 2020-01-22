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




$bdd = new PDO($dns, $user, $password);
$req = $bdd->prepare('DELETE FROM user_produit WHERE user_id = :id AND produit_id = :product_id');
$req->execute(array(
    'id' => $_SESSION['id'],
    'product_id' => $match['params']['id']
));

header("Location: /list");
exit;
