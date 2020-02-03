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

// envoie du template twig 
$load = new FilesystemLoader('../templates');
$twig = new Environment($load, [
    'cache' => false,
    'debug' => true
]);

if (isset($_POST['produit']) && isset($_POST['stockOptimal'])) {
   
            var_dump($_POST);
            $bdd = new Bdd($dns, $user, $password);
            $req = $bdd->query('SELECT COUNT(*) AS TOTAL FROM user_produit WHERE user_id = \'' . $_SESSION['id'] . '\' AND produit_id = \'' .$_POST['produit'][0] . '\'');

            while ($donnees = $req->fetch()) {
                $total = $donnees['TOTAL'];
            }

            if ($total > 0) {

            }
            $bdd = new PDO($dns, $user, $password);
            $req1 = $bdd->prepare('INSERT INTO user_produit (joined_id, user_id, produit_id, produit_stock_reel, produit_stock_opti, produit_img) 
VALUES (NULL, :user_id, :product_id, :stock_reel, :stock_optimal, :image)');
            $req1->execute(array(
                'user_id' => $_SESSION['id'],
                'product_id' => $_POST['produit'][0],
                'stock_reel' => $_POST['stockReel'][0],
                'stock_optimal' => $_POST['stockOptimal'][0],
                'image' => '',
            ));
            if(isset($_POST['produit'][1]))
            {
            $bdd = new Bdd($dns, $user, $password);
            $req = $bdd->query('SELECT COUNT(*) AS TOTAL FROM user_produit WHERE user_id = \'' . $_SESSION['id'] . '\' AND produit_id = \'' .$_POST['produit'][1] . '\'');

            while ($donnees = $req->fetch()) {
                $total = $donnees['TOTAL'];
            }

            if ($total > 0) {

            }
            $bdd = new PDO($dns, $user, $password);
            $req1 = $bdd->prepare('INSERT INTO user_produit (joined_id, user_id, produit_id, produit_stock_reel, produit_stock_opti, produit_img) 
VALUES (NULL, :user_id, :product_id, :stock_reel, :stock_optimal, :image)');
            $req1->execute(array(
                'user_id' => $_SESSION['id'],
                'product_id' => $_POST['produit'][1],
                'stock_reel' => $_POST['stockReel'][1],
                'stock_optimal' => $_POST['stockOptimal'][1],
                'image' => '',
            ));
            //var_dump($_POST);
            }
            header("Location: /list");
            exit;
    
} else {
    // requete bdd produit
    $bdd = new Bdd($dns, $user, $password);
    $requete = $bdd->queryAll('produit');

    while ($donnees = $requete->fetch()) {
        $p = new Product();
        $p->setId($donnees['id']);
        $p->setName($donnees['produit']);
        $p->setImage($donnees['image']);

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

    echo $twig->render('addProduct.twig', [
        'user' => $u,
        'produits' => $produits
    ]);
}
