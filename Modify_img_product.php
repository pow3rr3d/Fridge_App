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
$user_id = $_SESSION['id'];

?>
<html>
    <header>
        <title>
            INDEX : App Frigo
        </title>
        <link rel="stylesheet" type="text/css" href="Style.css">
    </header>
    <body>
    
    <a href = "Stock.php"> retour </a>

    <section class="Title">
        <h1> Mon Avatar </h1>
    </section>

    <section class="Corpus">
<?php



try 
{
 $bdd = new PDO($dns, $user, $password);
 $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 $requete = $bdd->query('SELECT * FROM user_produit WHERE USER_ID ='.$user_id.' AND PRODUIT_ID ='.$id.'');
} 
catch (Exception $e) 
{
 echo 'Échec lors de la connexion : ' . $e->getMessage();
}
while ($donnees = $requete->fetch())
{
    $product_img = $donnees['PRODUIT_IMG'];

}
if(empty($product_img))
    {
        $req_img = $bdd->query('SELECT * FROM produit WHERE ID ='.$id.'');

 while ($donnees = $req_img->fetch())
        {
        $product_img = $donnees['IMAGE'];
        $produit = $donnees['PRODUIT'];
        }   

    }
echo '<div id="cercle" style="background-image:url('.$product_img.')"></div><br>';
echo '<form enctype="multipart/form-data" action="Modify_img_action.php" method="post">';
echo '<input type="hidden" name="MAX_FILE_SIZE" value="3000000" />';
echo '<input class="button" type="hidden" value="'.$id.'" name="id">';
echo '<input name="userfile" type="file" /> <br>';
echo '<input type="submit" value="Envoyer le fichier" />';
echo '</form>';





?>

</section>

</body>
</html>