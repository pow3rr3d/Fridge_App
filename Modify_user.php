<?php

session_start();
if(!isset($_SESSION['nom']))

{
    echo'pas de session';
    header("Location: http://fridge.local/Index.php");
}

$dns = 'mysql:dbname=training;host=127.0.0.1';
$user = 'root';
$password = '';
$id= $_POST['id'];
$nw_name_user = $_POST['Name_user'];
$nw_surname_user = $_POST['Surname_user'];
$nw_email_user = $_POST['Email_user'];
$nw_password = $_POST['Password'];
$nw_confirm_password = $_POST['Confirm_password'];

try 
{
 $bdd = new PDO($dns, $user, $password);
 $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} 
catch (Exception $e) 
{
 echo 'Échec lors de la connexion : ' . $e->getMessage();
}

if(isset($_POST['id']) && $nw_password == $nw_confirm_password)
{  
    if(!empty($nw_password) or !empty($nw_confirm_password))
    {
        $req_modify_injec = $bdd->prepare('UPDATE user SET NOM = :Nom, PRENOM = :Prenom, EMAIL = :Email, PASSWORD = :password WHERE ID = :id');
        $req_modify_injec->execute(array(
           'id' => $id,
           'Nom' => $nw_name_user,
           'Prenom' => $nw_surname_user,
           'Email' => $nw_email_user,
           'password' => $nw_password
        ));
        header("Location: http://fridge.local/User_Account.php");
        exit;
    }
    else
    {
        $req_modify_injec = $bdd->prepare('UPDATE user SET NOM = :Nom, PRENOM = :Prenom, EMAIL = :Email WHERE ID = :id');
        $req_modify_injec->execute(array(
           'id' => $id,
           'Nom' => $nw_name_user,
           'Prenom' => $nw_surname_user,
           'Email' => $nw_email_user,
        ));
        header("Location: http://fridge.local/User_Account.php");
        exit;
    }

}

    echo "Mot de passe et confirmation différente, Merci de bien vouloir saisir des informations identiques <br>";
    echo '<a href = "User_Account.php"> retour </a>';


?>