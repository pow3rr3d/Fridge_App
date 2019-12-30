<?php

session_start();
if(!isset($_SESSION['nom']))

{
    echo'pas de session';
    header("Location: http://fridge.local/Index.php");
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
            <h1> Nouveau Produit </h1>
        </section>
<?php
include_once 'includes/connexion.php';
$user_id = $_SESSION['id'];

try
{
  $bdd = new PDO($dns, $user, $password);
  $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "";
  $requete = $bdd->query('SELECT PRODUIT, ID FROM produit');

}
catch (Exception $e)
{
  echo 'Échec lors de la connexion : ' . $e->getMessage();

}
while($donnees = $requete->fetch())
{
   $choice =  $donnees['PRODUIT'];
   $id_product = $donnees['ID'];

   $tab[]=[
       $id_product,
       $choice
   ];
}


echo '<form action="Add_Product.php" method="post" name="Add_form">';
echo '<label>';
echo 'Produit: ';
echo '</label>';
echo '<select name="Product_id">';
foreach($tab as $t) {
    echo '<option name="Product_choice" value="'.$t[0].'">';
    foreach($t as $t1) {
        echo  $t[1];
        echo '</option>';
    }

}
echo'</select> <br>';
echo '<label>';
echo 'Stock Réel: ';
echo '</label>';
echo '<input class="Product_input" type="number" value="" name="Stock_Reel"/> <br>';
echo '<label>';
echo 'Stock Optimal: ';
echo '</label>';
echo '<input class="Product_input" type="number" value="" name="Stock_Optimal" required/> <br>';
echo '<input class="Modify_submit" type="submit" value="Envoyer" name="Modify_submit">';
echo '</form>';

var_dump($t)

?>
        <section>
        </section>
    </body>
 </html>
