<?php

session_start();
if(!isset($_SESSION['id'])  && $_SESSION['id'] != 'Admin' )

{
    echo'pas de session';
    header("Location: http://fridge.local/Index.php");
}

$dns = 'mysql:dbname=training;host=127.0.0.1';
$user = 'root';
$password = '';
$id= $_POST['id'];
$avatar = $_POST['Avatar'];
$email = $_POST['Email'];
try 
{
 $bdd = new PDO($dns, $user, $password);
 $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 $requete = $bdd->query('SELECT * FROM produit');
} 
catch (Exception $e) 
{
 echo 'Échec lors de la connexion : ' . $e->getMessage();
}
if(isset($_POST['Delete']))
{
    $req_delete = $bdd->prepare('DELETE FROM user WHERE ID = :id');
    $req_delete->execute(array(
       'id' => $id,
    ));
    header("Location: http://fridge.local/Admin_user.php");
    exit;
}
elseif(isset($_POST['Save']))
{
    $req_modify_injec = $bdd->prepare('UPDATE user SET EMAIL = :email, AVATAR = :avatar WHERE ID = :id');
    $req_modify_injec->execute(array(
       'id' => $id,
       'email' => $email,
       'avatar' => $avatar
    ));
    header("Location: http://fridge.local/Admin_user.php");
    exit;
}

?>
