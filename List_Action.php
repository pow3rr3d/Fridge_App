<?php

session_start();
if(!isset($_SESSION['nom']))

{
    echo'pas de session';
    header("Location: http://training.local/Index.php");
}

$dns = 'mysql:dbname=training;host=127.0.0.1';
$user = 'root';
$password = '';
$id = '';
$produit = '';
$stock_reel = '';
$PRODUIT_STOCK_OPTIMAL = '';
$level = '';
$ajout = '';
$deduct = '';
$stock_incre = '';
$i= '';
$tab_stock = [];
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
    $produit = $donnees['PRODUIT_ID'] ;
    $stock_reel = $donnees['PRODUIT_STOCK_REEL'] ;
    $PRODUIT_STOCK_OPTIMAL = $donnees['PRODUIT_STOCK_OPTIMAL'];

}

if(!empty($_POST['inputed_nb']))
{
    $stock_bdd = "";
    $incre = "";
    $form_id=$_POST['id'];
    $inputed_nb = abs($_POST['inputed_nb']);

    
    $req_stock = $bdd->prepare('SELECT * FROM user_produit RIGHT JOIN produit ON user_produit.PRODUIT_ID = produit.ID WHERE USER_ID = '.$user_id.' AND PRODUIT_ID = :id');
    $req_stock->execute(array(
        'id' => $form_id,
        ));
    while ($donnees_bdd = $req_stock->fetch())
     {
    $stock_bdd = $donnees_bdd['PRODUIT_STOCK_REEL'];
    $action_id = $donnees_bdd['JOINED_ID'];
     }

function increment($stock_bdd, $inputed_nb )
{
    $incre = $stock_bdd + $inputed_nb ;
    return $incre;
}

    $incre = increment ($stock_bdd,$inputed_nb);

    $req = $bdd->prepare('UPDATE user_produit SET PRODUIT_STOCK_REEL = :incre  WHERE JOINED_ID = :id');
    $req->execute(array(
        'id' => $action_id,
        'incre' => $incre
        ));

        header("Location: http://training.local/List.php");
    
    
}
elseif(empty($_POST['inputed_nb']))
{   
    echo "Veuillez saisir une quantité <br>";
    echo '<a href = "List.php"> retour </a>';

}
else 
{
    echo "Une erreur s'est produite!";
}
exit;

?>
