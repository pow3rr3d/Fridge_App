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

    <a href = "Main_menu.php"> retour </a>

    <section class="Title">
        <h1> Mes Produits </h1>
    </section>

    <section class="PRODUIT_STOCK_REEL_Array">
<?php

    echo '<a class="Nw_productlink" href="New_Product.php">';
    echo 'Ajouter un produit';
    echo '</a>';


include_once 'includes/connexion.php';
$user_id = $_SESSION['id'];

try
{
  $bdd = new PDO($dns, $user, $password);
  $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "";
  $requete = $bdd->query('SELECT * FROM user_produit RIGHT JOIN produit ON user_produit.PRODUIT_ID = produit.ID WHERE USER_ID = '.$user_id.' ');

}
catch (Exception $e)
{
  echo 'Échec lors de la connexion : ' . $e->getMessage();

}
  $id = '';
  $produit = '';
  $Stock_reel = '';
  $PRODUIT_STOCK_OPTIMAL = '';
  $level = '';
  $tab = [];
  while ($donnees = $requete->fetch())
  {
    if($donnees['PRODUIT_STOCK_REEL'] < $donnees['PRODUIT_STOCK_OPTIMAL'])

    {
            $level = "Critique";
    }

    else

    {
            $level = "OK";
    }

    $id = $donnees['ID'];
    $produit = $donnees['PRODUIT'];
    $Stock_reel = $donnees['PRODUIT_STOCK_REEL'];
    $PRODUIT_STOCK_OPTIMAL = $donnees['PRODUIT_STOCK_OPTIMAL'];

    $tab[] = [
        $id,
        $produit,
        $Stock_reel,
        $PRODUIT_STOCK_OPTIMAL,
        $level
    ];

   }


    echo '<table>';
    echo '<tr>';
    echo '<td>ID</td>';
    echo '<td>PRODUIT</td>';
    echo '<td>STOCK REEL</td>';
    echo '<td>STOCK OPTIMAL</td>';
    echo '<td>ETAT</td>';
    echo '<td>ACTIONS</td';
    echo '</tr>';
    foreach($tab as $t) {
        echo '<tr>';
        echo '<form action="Product.php" method="post" name="products_form">';
        foreach($t as $t1) {
            echo '<td>' . $t1 . '</td>';
        }
        echo '<td>';
        echo '<input class="button" type="hidden" value="'.$t[0].'" name="id"/>';
        echo '<input class="Delete_Input" type="submit" value="" name="Delete"/>';
        echo '<input class="Modify_Input" type="submit" value="" name="Modify"/>';

        echo '</td>';
        echo '</form>';
        echo '</tr>';

    }
    echo '</table>';


    $requete->closeCursor();

?>


    </section>

    </body>
</html>
