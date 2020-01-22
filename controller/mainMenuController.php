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

echo $twig->render('mainMenu.twig', [
    'user' => $u
]);
