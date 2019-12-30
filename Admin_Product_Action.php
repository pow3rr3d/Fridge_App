<?php

session_start();
if(!isset($_SESSION['id'])  && $_SESSION['id'] != 'Admin' )

{
    echo'pas de session';
    header("Location: http://fridge.local/Index.php");
}

include_once 'includes/connexion.php';
$id= $_POST['id'];
$image = $_POST['Img'];
$produit = $_POST['Name'];
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
    $req_delete = $bdd->prepare('DELETE FROM produit WHERE ID = :id');
    $req_delete->execute(array(
       'id' => $id,
    ));
    header("Location: http://fridge.local/Admin_product.php");
    exit;
}
elseif(isset($_POST['Save']))
{
    $req_modify_injec = $bdd->prepare('UPDATE produit SET PRODUIT = :produit, IMAGE = :image WHERE ID = :id');
    $req_modify_injec->execute(array(
       'id' => $id,
       'produit' => $produit,
       'image' => $image
    ));
    header("Location: http://fridge.local/Admin_product.php");
    exit;
}








?>
