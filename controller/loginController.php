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
    'cache' => false
]);

if (!empty($_POST['email']) && !empty($_POST['password'])) {
    $bdd = new Bdd($dns, $user, $password);
    $requete = $bdd->connexion();
    $requete->execute(array(
        'email' =>  $_POST['email']
    ));
    while ($donnees = $requete->fetch()) {
        $id = $donnees['id'];
        $name = $donnees['name'];
        $surname = $donnees['surname'];
        $email = $donnees['email'];
        $password = $donnees['password'];
    }
    if (password_verify($_POST['password'], $password)) {
        session_start();
        $_SESSION['id'] =  $id;
        $_SESSION['prenom'] =  $surname;
        $_SESSION['nom'] = $name;
        $_SESSION['email'] = $email;
        header("Location: /home");
    } else {
        $resultat = 'Les informations fournies ne sont pas correct veuillez recommencer';
    }
} else {
    $resultat = '';
}

echo $twig->render('connexion.twig', [
    'resultat' => $resultat
]);