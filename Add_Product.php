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
$id= $_POST['Product_id'];
$nwproduct = '';
$nw_stock_optimal = $_POST['Stock_Optimal'];
if(!empty($_POST['Stock_Reel']))
{
    $nw_stock_reel = $_POST['Stock_Reel'];
} 
else{
    $nw_stock_reel = "0";
};
$user_id = $_SESSION['id'];

try 
{
 $bdd = new PDO($dns, $user, $password);
 $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} 
catch (Exception $e) 
{
 echo 'Échec lors de la connexion : ' . $e->getMessage();
}

$req = $bdd->query('SELECT COUNT(*) AS TOTAL FROM user_produit WHERE USER_ID = \''.$user_id.'\' AND PRODUIT_ID = \''.$id.'\'');

while($donnees = $req->fetch())
{
    $total = $donnees['TOTAL'];
}

if($total > 0)
{
    header("Location: http://fridge.local/Stock.php");
    exit;
}

$requete = $bdd->prepare('INSERT INTO user_produit (JOINED_ID, USER_ID, PRODUIT_ID, PRODUIT_STOCK_REEL, PRODUIT_STOCK_OPTIMAL, PRODUIT_IMG) 
VALUES (NULL, :user_id, :product_id, :stock_reel, :stock_optimal, :image)');
$requete->execute(array(
    'user_id' => $user_id,
    'product_id' => $id,
    'stock_reel' => $nw_stock_reel,
    'stock_optimal' =>$nw_stock_optimal,
    'image' => '',
    ));

    header("Location: http://fridge.local/Stock.php");
    exit;


?>