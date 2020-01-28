<?php


namespace App\Controller;

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
if (isset($_POST['envoyer'])) {
    var_dump($_POST);
    $bdd = new PDO($dns, $user, $password);
    $req = $bdd->prepare('UPDATE produit SET produit = :name WHERE id = :id');
    $req->execute(array(
        'name' => $_POST['name'],
        'id' => $_POST['id']
    ));
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
            $uploadfile .= ".";
            $uploadfile .= $infosfichier['extension'];
            $extensions_agree = array('jpg', 'jpeg', 'png', 'PNG', 'JPEG', 'JPG');
            if (in_array($extension_upload, $extensions_agree)) {
                // On peut valider le fichier et le stocker définitivement
                move_uploaded_file($_FILES['image']['tmp_name'], $uploadfile);
                $bdd = new PDO($dns, $user, $password);
                $req = $bdd->prepare('UPDATE produit SET image = :img WHERE id = :id');
                $req->execute(array(
                    'img' => $uploadfile,
                    'id' => $_POST['id']
                ));
                header("Location: /admin/product");
                exit;
            }
            echo 'Type de fichier non accepté! Merci de choisir un fichier de type jpg, jpeg ou png.';
            exit;
        }
        echo 'Le fichier est trop lourd!';
        exit;
    }
    header("Location: /admin/product");
} else {
    // requete bdd produit
    $bdd = new Bdd($dns, $user, $password);
    $req = $bdd->queryProduct('produit', $match['params']['id']);
    while ($donnees = $req->fetch()) {
        $p = new Product;
        $p->setId($donnees['id']);
        $p->setName($donnees['produit']);
        $p->setImage($donnees['image']);
    }
    $produits[] = $p;


    echo $twig->render('adminModifyProduct.twig', [
        'produits' => $produits
    ]);
}
