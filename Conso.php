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
            App Frigo - Consommation
        </title>
        <link rel="stylesheet" type="text/css" href="Style.css">
    </header>
    <body>
    
    <a href = "Main_menu.php"> retour </a>

    <section class="Title">
        <h1> Ma Consommation </h1>
    </section>
    
    <section class="Conso_Array">
<?php

// Déclaration Variables
    $dns = 'mysql:dbname=training;host=127.0.0.1';
    $user = 'root';
    $password = '';
    $id = '';
    $produit = '';
    $stock_reel = '';
    $stock_optimal = '';
    $level = '';
    $ajout = '';
    $deduct = '';
    $PRODUIT_STOCK_REEL_incre = '';
    $i= '';
    $tab_PRODUIT_STOCK_REEL = [];
    $inputed_nb ='';
    $user_id = $_SESSION['id'];

    try 
    {
     $bdd = new PDO($dns, $user, $password);
     $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
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

        $id = $donnees['ID'] ;
        $produit = $donnees['PRODUIT'] ;
        $stock_reel = $donnees['PRODUIT_STOCK_REEL'] ;
        $stock_optimal = $donnees['PRODUIT_STOCK_OPTIMAL'];
        $user_img = $donnees['PRODUIT_IMG'];
        
        if(empty($user_img))
        {
            $req_img = $bdd->query('SELECT * FROM produit WHERE ID ='.$id.'');
    
     while ($donnees = $req_img->fetch())
        {
        $user_img = $donnees['IMAGE'];
        }   
    
        }


        echo '<div id="product_div" style="background-image:url('.$user_img.')">';
        echo '<h2>';
        echo $produit.' ('.$stock_reel.')';
        echo '</h2>';
        echo '<div id="increment_div">';
        echo '<form action="Conso_Action.php" method="post" name="form_'.$donnees['ID'].'">';
        echo '<input class="button" type="hidden" value="'.$donnees['ID'].'" name="id">';
        echo '<input class="button" type="submit" value="+" name="add">';
        echo '</div>';
        echo '<div id="div_Ajout">';
        echo '<input class="Nb_input" type="number" min="0"  name="inputed_nb">';
        echo '</div>';
        echo '<div id="decrement_div">' ;
        echo '<input class="button_deduct" type="submit" value="-" name="sub">';
        echo '</form>'; 
        echo '</div>';
        echo '</div>';

   }
 
    $requete->closeCursor();
?>


    </section>

    </body>
</html>