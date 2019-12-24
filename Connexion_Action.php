<?php

if(!empty($_POST['Email']) && !empty($_POST['Password']))
{

    $dns = 'mysql:dbname=training;host=127.0.0.1';
    $user = 'root';
    $password = '';
    $input_password = password_hash($_POST['Password'], PASSWORD_ARGON2I);
    $connexion_admin = $_POST['Connexion_submit_admin'];
    $connexion_user = $_POST['Connexion_submit'];

    try 
    {
     $bdd = new PDO($dns, $user, $password);
     $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     $requete = $bdd->prepare('SELECT * FROM user WHERE EMAIL = :Email');
     $requete -> execute(array(
        'Email' =>  $_POST['Email']
     ));
    } 
    catch (Exception $e) 
    {
     echo 'Échec lors de la connexion : ' . $e->getMessage();
    }
    while ($donnees = $requete->fetch())
    {
        $id_user = $donnees['ID'];
        $name_user = $donnees['NOM'];
        $surname_user = $donnees['PRENOM'];
        $email_user = $donnees['EMAIL'];
        $pass_user = $donnees['PASSWORD'];
        $email_confirm = $donnees['EMAIL_CONFIRM'];
        $type_user = $donnees['TYPE'];
    }

    if(password_verify($_POST['Password'],$pass_user))
    {
        if($type_user == 'User')
        {
            session_start();
            $_SESSION['id'] = $id_user;
            $_SESSION['prenom'] = $surname_user;
            $_SESSION['nom'] = $name_user;
            $_SESSION['email'] = $email_user;
            $_SESSION['type'] = $type_user;
            echo 'connexion ok' ;
            header("Location: http://fridge.local/Main_menu.php");
            exit;
        }
        elseif($type_user == 'Admin' && $connexion_admin == 'Connexion_admin')
        {
            session_start();
            $_SESSION['id'] = $id_user;
            $_SESSION['prenom'] = $surname_user;
            $_SESSION['nom'] = $name_user;
            $_SESSION['email'] = $email_user;
            $_SESSION['type'] = $type_user;
            echo 'connexion ok' ;
            header("Location: http://fridge.local/Dashboard.php");
            exit; 
        }
        elseif($type_user == 'Admin' && $connexion_user == 'Connexion')
        {
            session_start();
            $_SESSION['id'] = $id_user;
            $_SESSION['prenom'] = $surname_user;
            $_SESSION['nom'] = $name_user;
            $_SESSION['email'] = $email_user;
            $_SESSION['type'] = $type_user;
            echo 'connexion ok' ;
            header("Location: http://fridge.local/Main_menu.php");
            exit; 
        }
        else 
        {
            header("Location: http://fridge.local/Index.php");
            exit;     
        }
        
    }
        echo 'Les informations de connexion saisie sont incorrects! <br>';
        echo '<a href ="Index.php"> retour </a>';

        exit;

}

echo 'Merci de bien vouloir remplir tous les champs demandés! <br>';
echo '<a href ="Index.php"> retour </a>';

?>