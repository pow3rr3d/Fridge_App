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
$nw_product = $_POST['Product_Name'];
$nw_stock_optimal = $_POST['Stock_Optimal'];

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

if(isset($_POST['id']) && isset($_POST['Product_Name']) && isset($_POST['Stock_Optimal']))
{
    $req_modify= $bdd->query('SELECT * FROM produit WHERE ID ='.$id.'');

    while ($donnees = $req_modify->fetch())
       {
       $produit = $donnees['PRODUIT'];
       $stock_reel = $donnees['STOCK'];
       $stock_optimal = $donnees['STOCK_OPTIMAL'];
       }    

       $req_modify_injec = $bdd->prepare('UPDATE produit SET PRODUIT = :produit, STOCK_OPTIMAL = :stock_optimal WHERE ID = :id');
       $req_modify_injec->execute(array(
          'id' => $id,
          'produit' => $nw_product,
          'stock_optimal' => $nw_stock_optimal
       ));
       header("Location: http://fridge.local/Stock.php");
       exit;
}
else
{
    echo "Une erreur s'est poduite!";
    echo '<a href = "Stock.php"> retour </a>';
}

?>