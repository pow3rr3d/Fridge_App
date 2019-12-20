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
            App frigo - liste de courses
        </title>
        <link rel="stylesheet" type="text/css" href="Style.css">
    </header>
    <body>
    
    <a href = "Main_menu.php"> retour </a>

    <section class="Title">
        <h1> Liste de courses  </h1>
    </section>

    <section>
<?php

$dns = 'mysql:dbname=training;host=127.0.0.1';
$user = 'root';
$password = '';
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
  $PRODUIT_STOCK_REEL_reel = $donnees['PRODUIT_STOCK_REEL'];
  $PRODUIT_STOCK_OPTIMAL = $donnees['PRODUIT_STOCK_OPTIMAL'];
  $qt_buy = $PRODUIT_STOCK_OPTIMAL - $PRODUIT_STOCK_REEL_reel; 
  $echo_qt= '<input class="Nb_input" type="number" min="0" values=" '.$qt_buy.' " name="inputed_nb">';
  $validate = '<input class="Validate_Input" type="submit" value="" name="Validate"/>'; 

  $tab[] = [
      $id,
      $produit,
      $qt_buy,
      $echo_qt
  ];

 }

    echo '<table>';
    echo '<tr>';
    echo '<td>';
    echo 'ID';
    echo '</td>';
    echo '<td>';
    echo 'Produits';
    echo '</td>';
    echo '<td>';
    echo 'Quantité Manquante';
    echo '</td>';
    echo '<td>';
    echo 'Quantité Achetée';
    echo '</td>';
    echo '<td>';
    echo 'Validation';
    echo '</td>';
    echo '</tr>';

 foreach($tab as $t) 
 {
    echo '<tr>';
    echo '<form action="List_Action.php" method="post" name="List_form">';
     foreach($t as$t1)
     {
        $hidden_id = '<input class="button" type="hidden" value="'.$t[0].'" name="id"/>';
        $qt_t = $t[2];
        if($qt_t !== 0)
        {
        echo '<td>';
        echo $t1;
        echo '</td>';
        }
     }
     if($qt_t !== 0)
     {
     echo '<td>';
     echo $validate;
     echo $hidden_id;
     echo '</td>'; 
    }
     echo '</form>'; 
     echo '</tr>';
}
    echo '<table>';

    $requete->closeCursor();
?>




    </section>

    </body>
</html>