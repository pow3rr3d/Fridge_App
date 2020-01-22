<?php


namespace App\Controller;

session_start();

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
// , produit_img = '.$_POST['image'].'
// envoie du template twig 
$load = new FilesystemLoader('../templates');
$twig = new Environment($load, [
    'cache' => false,
    'debug' => true
]);

if (isset($_POST['stockOptimal']) && isset($_POST['stockReel']) && isset($_POST['envoyer'])) {
    var_dump($_POST);
    $bdd = new Bdd($dns, $user, $password);
    $requete = $bdd->query('UPDATE user_produit SET produit_stock_reel = ' . $_POST['stockReel'] . ', produit_stock_opti =' . $_POST['stockOptimal'] . ' WHERE produit_id =' . $_POST['id'] . ' AND user_id = ' . $_SESSION['id'] . ' ');
    if (isset($_FILES['image']) and $_FILES['image']['error'] == 0) {
        $req_img = $bdd->query('SELECT * FROM produit WHERE ID =' . $_POST['id'] . '');
        while ($donnees = $req_img->fetch()) {
            $produit = $donnees['produit'];
        }
        if ($_FILES['image']['size'] <= 3000000) {
            $uploaddir = 'media/uploads/';
            $infosfichier = pathinfo($_FILES['image']['name']);
            $extension_upload = $infosfichier['extension'];
            $uploadfile = $uploaddir;
            $uploadfile .= $produit;
            $uploadfile .= "_";
            $uploadfile .= $_SESSION['id'];
            $uploadfile .= ".";
            $uploadfile .= $infosfichier['extension'];
            $extensions_agree = array('jpg', 'jpeg', 'png', 'PNG', 'JPEG', 'JPG');
            if (in_array($extension_upload, $extensions_agree)) {
                // On peut valider le fichier et le stocker définitivement
                move_uploaded_file($_FILES['image']['tmp_name'], $uploadfile);
                $bdd = new PDO($dns, $user, $password);
                $req = $bdd->prepare('UPDATE user_produit SET produit_img = :img WHERE user_id = :user_id AND produit_id = :id');
                $req->execute(array(
                    'img' => $uploadfile,
                    'user_id' => $_SESSION['id'],
                    'id' => $_POST['id']
                ));
                header("Location: /list");
                exit;
            }
            echo 'Type de fichier non accepté! Merci de choisir un fichier de type jpg, jpeg ou png.';
            exit;
        }
        echo 'Le fichier est trop lourd!';
        exit;
    }
    header("Location: /list");
} else {
    // requete bdd user_produit
    $bdd = new Bdd($dns, $user, $password);
    $requete = $bdd->queryUserProduct('user_produit', $match['params']['id'], $_SESSION['id']);
    while ($donnees = $requete->fetch()) {
        $p = new Product();
        $p->setId($match['params']['id']);
        $p->setStockReel($donnees['produit_stock_reel']);
        $p->setStockOpti($donnees['produit_stock_opti']);
        $p->setImage($donnees['produit_img']);
    }


    // requete bdd produit
    $bdd = new Bdd($dns, $user, $password);
    $req = $bdd->queryProduct('produit', $match['params']['id']);
    while ($donnees = $req->fetch()) {
        $p->setName($donnees['produit']);
        if($p->getImage() === '')
        {
        $p->setImage($donnees['image']);
        }
    }
    $produits[] = $p;
    echo $twig->render('modifyProduct.twig', [
        'produits' => $produits
    ]);
}
