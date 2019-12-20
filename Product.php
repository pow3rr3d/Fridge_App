<?php

session_start();
if(!isset($_SESSION['nom']))

{
    echo'pas de session';
    header("Location: http://training.local/Index.php");
}
?>
<html>
    <header>
        <title>
            App Frigo - Stock
        </title>
        <link rel="stylesheet" type="text/css" href="Style.css">
    </header>
    <body>
    
    <a href = "Stock.php"> retour </a>

    <section class="Title">
        <h1> Mes Produits </h1>
    </section>
    <section class="Corpus">

<?php

$dns = 'mysql:dbname=training;host=127.0.0.1';
$user = 'root';
$password = '';
$id = $_POST['id'];
$user_id = $_SESSION['id'];

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
 $req_stock = $bdd->prepare('DELETE FROM user_produit WHERE USER_ID = :id AND PRODUIT_ID = :product_id');
 $req_stock->execute(array(
    'id' => $user_id,
    'product_id' => $id
 ));

header("Location: http://training.local/Stock.php");
exit;
}

elseif(isset($_POST['Modify']))
{

 $req_stock = $bdd->query('SELECT * FROM user_produit RIGHT JOIN produit ON user_produit.PRODUIT_ID = produit.ID WHERE USER_ID ='.$user_id.' AND PRODUIT_ID ='.$id.'');

 while ($donnees = $req_stock->fetch())
    {
  
    $produit = $donnees['PRODUIT'];
    $stock_reel = $donnees['PRODUIT_STOCK_REEL'];
    $stock_optimal = $donnees['PRODUIT_STOCK_OPTIMAL'];

    }   

    echo '<form action="Modify_Action.php" method="post" name="Modify_form">';
    echo '<label>';
    echo 'ID: ';
    echo '</label>';
    echo $id .'<br>';
    echo '<label>';
    echo 'Produit: ';
    echo '</label>';
    echo '<input class="Product_input" type="text" value="'.$produit.'" name="Product_Name" required/> <br>';
    echo '<label>';
    echo 'Stock Réel: ';
    echo '</label>';
    echo $stock_reel .'<br>';
    echo '<label>';
    echo 'Stock Optimal: ';
    echo '</label>';
    echo '<input class="Product_input" type="number" value="'.$stock_optimal.'" name="Stock_Optimal" required/> <br>';
    echo '<input class="button" type="hidden" value="'.$id.'" name="id">';
    echo '<input class="Modify_submit" type="submit" value="Modifier" name="Modify_submit">';
    echo '</form>';

}

else
{
    echo "Une erreur s'est poduite!";

}

?>
        </section>
    </body>
</html>