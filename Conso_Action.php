<?php

session_start();
if(!isset($_SESSION['nom']))

{
    echo'pas de session';
    header("Location: http://fridge.local/Index.php");
}

include_once 'includes/connexion.php';
$id = '';
$produit = '';
$stock_reel = '';
$stock_optimal = '';
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
 $requete = $bdd->query('SELECT * FROM user_produit RIGHT JOIN produit ON user_produit.PRODUIT_ID = produit.ID WHERE USER_ID = '.$user_id.' AND PRODUIT_ID = '.$_POST['id'].'');
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
    $action_id = $donnees['JOINED_ID'];

}

if(isset($_POST['add']))
{
    $stock_bdd = "";
    $incre = "";
    $form_id=$_POST['id'];
    $inputed_nb = abs($_POST['inputed_nb']);


    $req_stock = $bdd->prepare('SELECT PRODUIT_STOCK_REEL FROM user_produit WHERE JOINED_ID = :id');
    $req_stock->execute(array(
        'id' => $action_id,
        ));
    while ($donnees_bdd = $req_stock->fetch())
     {
    $stock_bdd = $donnees_bdd['PRODUIT_STOCK_REEL'];
     }

function increment ($stock_bdd, $inputed_nb )
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

}
elseif(isset($_POST['sub']))
{
    $stock_bdd = "";
    $decre = "";
    $form_id=$_POST['id'];
    $inputed_nb = abs($_POST['inputed_nb']);


    $req_stock = $bdd->prepare('SELECT * FROM user_produit WHERE JOINED_ID = :id');
    $req_stock->execute(array(
        'id' => $action_id,
        ));
    while ($donnees_bdd = $req_stock->fetch())
     {
    $stock_bdd = $donnees_bdd['PRODUIT_STOCK_REEL'];
     }

function decrement ($stock_bdd, $inputed_nb )
{
    $decre = $stock_bdd - $inputed_nb ;
    return $decre;
}

    $decre = decrement ($stock_bdd,$inputed_nb);

    $req = $bdd->prepare('UPDATE user_produit SET PRODUIT_STOCK_REEL = :decre  WHERE JOINED_ID = :id');
    $req->execute(array(
        'id' => $action_id,
        'decre' => $decre
        ));

}
else
{
    echo "Une erreur s'est poduite!";

}

header("Location: http://fridge.local/Conso.php");
exit;

?>
