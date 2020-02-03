<?php


namespace App\Controller;

session_start();
if ($_SESSION['id'] === null) {
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
    $u->setid($donnees['id']);
    $u->setName($donnees['name']);
    $u->setSurname($donnees['surname']);
    $u->setEmail($donnees['email']);
    $u->setAvatar($donnees['avatar']);
    $u->setPrivileges($donnees['privileges']);
}
// requete bdd top produit
$req = $bdd->query('SELECT produit_id, produit, COUNT(*) AS resultat FROM user_produit INNER JOIN produit ON user_produit.produit_id = produit.id GROUP BY user_produit.produit_id ORDER BY resultat DESC LIMIT 3');
while ($donnees = $req->fetch()) {
    $id = $donnees['produit_id'];
    $produit = $donnees['produit'];
    $resultat = $donnees['resultat'];
    $tab[] = [
        'id' => $id,
        'produit' => $produit,
        'liens' => $resultat
    ];
}
//requete bdd less produit
$req = $bdd->query('SELECT produit_id, produit, COUNT(*) AS resultat FROM user_produit INNER JOIN produit ON user_produit.produit_id = produit.id GROUP BY user_produit.produit_id ORDER BY resultat ASC LIMIT 3'); 
while ($donnees = $req->fetch()) {
    $id = $donnees['produit_id'];
    $produit = $donnees['produit'];
    $resultat = $donnees['resultat'];
    $tab2[] = [
        'id' => $id,
        'produit' => $produit,
        'liens' => $resultat
    ];
}
//requete bdd unsued produit
$req = $bdd->query('SELECT id, produit FROM produit WHERE id NOT IN (SELECT produit_id FROM user_produit) ORDER BY id'); 
while ($donnees = $req->fetch()) {
    $id = $donnees['id'];
    $produit = $donnees['produit'];
    $tab3[] = [
        'id' => $id,
        'produit' => $produit,
    ];
}
$countUnsued = count( $tab3 );

//requete bdd all user
$req = $bdd->query('SELECT * FROM user');
while ($donnees = $req->fetch()) {
    $users = new User();
    $users->setid($donnees['id']);
    $users->setName($donnees['name']);
    $users->setSurname($donnees['surname']);
    $users->setEmail($donnees['email']);
    $users->setAvatar($donnees['avatar']);
    $users->setPrivileges($donnees['privileges']);

    $tabUser [] =[$users];
}

$countUsers = count( $tabUser );

echo $twig->render('dashboard.twig', [
    'user' => $u,
    'tabUsers' => $tabUser,
    'totalUser' => $countUsers,
    'totalUnused' => $countUnsued,
    'tab' => $tab,
    'tab2' => $tab2,
    'tab3' => $tab3
]);
