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

// envoie du template twig 
$load = new FilesystemLoader('../templates');
$twig = new Environment($load, [
    'cache' => false,
    'debug' => true
]);


if (isset($_POST['envoyer']) && isset($_POST['name'])) {
    if (isset($_FILES['image']) and $_FILES['image']['error'] == 0) {
        if ($_FILES['image']['size'] <= 3000000) {
            $uploaddir = 'media/';
            $infosfichier = pathinfo($_FILES['image']['name']);
            $extension_upload = $infosfichier['extension'];
            $uploadfile = $uploaddir;
            $uploadfile .= $_POST['name'];
            $uploadfile .= ".";
            $uploadfile .= $infosfichier['extension'];
            $extensions_agree = array('jpg', 'jpeg', 'png', 'PNG', 'JPEG', 'JPG');
            if (in_array($extension_upload, $extensions_agree)) {
                // On peut valider le fichier et le stocker définitivement
                move_uploaded_file($_FILES['image']['tmp_name'], $uploadfile);
                $bdd = new PDO($dns, $user, $password);
                $req = $bdd->prepare('INSERT INTO produit(id, produit, image) VALUES(NULL, :produit, :image)');
                $req->execute(array(
                    'produit' => $_POST['name'],
                    'image' => $uploadfile
                ));
                header("Location: /admin/product");
                exit;
            }
            echo 'Type de fichier non accepté! Merci de choisir un fichier de type jpg, jpeg ou png.';
            exit;
        }
        echo 'Le fichier est trop lourd!';
        exit;
    } else {
        $bdd = new PDO($dns, $user, $password);
        $req = $bdd->prepare('INSERT INTO produit(id, produit, image) VALUES(NULL, :produit, :image)');
        $req->execute(array(
            'produit' => $_POST['name'],
            'image' => ''
        ));
        var_dump($_POST);
        var_dump($_POST['name']);
        header("Location: /admin/product");
        exit;
    }
} else {
    echo $twig->render('adminAddProduct.twig');
}
