<?php


namespace App\Controller;

session_start();

use \App\Classes\Product;
use \App\Classes\Bdd;
use \App\Classes\User;
use Twig\Loader\FilesystemLoader;
use Twig\Environment;
use PDO;

// envoie du template twig 
$load = new FilesystemLoader('../templates');
$twig = new Environment($load, [
    'cache' => false,
    'debug' => true
]);

require_once '../Classes/Bdd.php';
require_once '../Classes/Product.php';
require_once '../Classes/User.php';
require_once '../includes/connexion.php';

if (!empty($_POST)) {
    if ($_POST['password'] === '') {
        var_dump($_FILES);
        $bdd = new PDO($dns, $user, $password);
        $req = $bdd->prepare('UPDATE user SET name = :name, surname = :surname, email = :email WHERE id = :id');
        $req->execute(array(
            'name' => $_POST['name'],
            'surname' => $_POST['surname'],
            'email' => $_POST['email'],
            'id' => $_SESSION['id']
        ));
        if (isset($_FILES['image']) and $_FILES['image']['error'] == 0) {
            if ($_FILES['image']['size'] <= 3000000) {
                $uploaddir = 'media/uploads/';
                $infosfichier = pathinfo($_FILES['image']['name']);
                $extension_upload = $infosfichier['extension'];
                $uploadfile = $uploaddir;
                $uploadfile .= 'avatar';
                $uploadfile .= "_";
                $uploadfile .= $_SESSION['id'];
                $uploadfile .= ".";
                $uploadfile .= $infosfichier['extension'];
                $extensions_agree = array('jpg', 'jpeg', 'png', 'PNG', 'JPEG', 'JPG');
                if (in_array($extension_upload, $extensions_agree)) {
                    // On peut valider le fichier et le stocker définitivement
                    move_uploaded_file($_FILES['image']['tmp_name'], $uploadfile);
                    $bdd = new PDO($dns, $user, $password);
                    $req = $bdd->prepare('UPDATE user SET avatar = :img WHERE id = :id');
                    $req->execute(array(
                        'img' => $uploadfile,
                        'id' => $_SESSION['id'],
                    ));
                    header("Location: /account");
                    exit;
                }
                echo 'Type de fichier non accepté! Merci de choisir un fichier de type jpg, jpeg ou png.';
                exit;
            }
            echo 'Le fichier est trop lourd!';
            exit;
        } else {
            header("Location: /account");
            exit;
        }
    } elseif ($_POST['password'] === $_POST['passwordConfirm'] && $_POST['password'] !== null) {
        $nwpassword =  password_hash($_POST['password'], PASSWORD_ARGON2I);
        $bdd = new PDO($dns, $user, $password);
        $req = $bdd->prepare('UPDATE user SET name = :name, surname = :surname, email = :email, password = :password WHERE id = :id');
        $req->execute(array(
            'name' => $_POST['name'],
            'surname' => $_POST['surname'],
            'email' => $_POST['email'],
            'password' => $nwpassword,
            'id' => $_SESSION['id']
        ));
        if (isset($_FILES['image']) and $_FILES['image']['error'] == 0) {
            if ($_FILES['image']['size'] <= 3000000) {
                $uploaddir = 'media/uploads/';
                $infosfichier = pathinfo($_FILES['image']['name']);
                $extension_upload = $infosfichier['extension'];
                $uploadfile = $uploaddir;
                $uploadfile .= 'avatar';
                $uploadfile .= "_";
                $uploadfile .= $_SESSION['id'];
                $uploadfile .= ".";
                $uploadfile .= $infosfichier['extension'];
                $extensions_agree = array('jpg', 'jpeg', 'png', 'PNG', 'JPEG', 'JPG');
                if (in_array($extension_upload, $extensions_agree)) {
                    // On peut valider le fichier et le stocker définitivement
                    move_uploaded_file($_FILES['image']['tmp_name'], $uploadfile);
                    $bdd = new PDO($dns, $user, $password);
                    $req = $bdd->prepare('UPDATE user SET avatar = :img WHERE id = :id');
                    $req->execute(array(
                        'img' => $uploadfile,
                        'id' => $_SESSION['id'],
                    ));
                    header("Location: /account");
                    exit;
                }
                echo 'Type de fichier non accepté! Merci de choisir un fichier de type jpg, jpeg ou png.';
                exit;
            }
            echo 'Le fichier est trop lourd!';
            exit;
        }
            else {
                header("Location: /account");
                exit;
            }
        } 
        else {
            echo '<div class="page-wrap d-flex flex-row align-items-center row h-50">';
            echo '<div class="container">';
            echo '<div class="row justify-content-center">';
            echo '<div class="col-md-12 text-center">';
            echo 'Le mot de passe saisie est différent de sa confirmation. Veuillez recommencer. <br>';
            echo '<a href="/account" class="btn btn-link">Retour à mon compte</a>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
            echo $twig->render('erreur.twig');
        }
    }
else {

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
        $u->setPassword($donnees['password']);
        $u->setPrivileges($donnees['privileges']);
    }

    // render Template
    echo $twig->render('account.twig', [
        'user' => $u
    ]);
}
