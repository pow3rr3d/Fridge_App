<?php

session_start();
if(!isset($_SESSION['id'])  && $_SESSION['id'] != 'Admin' )

{
    echo'pas de session';
    header("Location: http://fridge.local/Index.php");
}

?>
<html>
    <header>
        <title>
            INDEX : App Frigo
        </title>
        <link rel="stylesheet" type="text/css" href="Style.css">
    </header>
    <body>
    
    <a href = "Dashboard.php"> retour </a>

    <section class="Title">
        <h1> Gestion Produits </h1>
    </section>

    <section class="Admin_Corpus">

<?php

echo '<a class="Nw_productlink" href="New_Product_Admin.php">';
echo 'Créer produit';
echo '</a>';


$dns = 'mysql:dbname=training;host=127.0.0.1';
$user = 'root';
$password = '';
$user_id = $_SESSION['id'];

try 
{
$bdd = new PDO($dns, $user, $password);
$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
echo "";
$requete = $bdd->query('SELECT * FROM produit');

} 
catch (Exception $e) 
{
echo 'Échec lors de la connexion : ' . $e->getMessage();

}
$id = '';
$produit = '';
$image ='';
$tab = [];
while ($donnees = $requete->fetch())
{
$id = $donnees['ID'];
$produit = $donnees['PRODUIT'];
$produit_input = '<input class="User_input" type="text" value="'.$produit.'" name="Name" required/>';
$image = $donnees['IMAGE'];
$image_input = '<input class="User_input" type="text" value="'.$image.'" name="Img" />';
$apercu = '<div id="product_div_admin" style="background-image:url('.$image.')"></div>';

$tab[] = [
    $id,
    $produit_input,
    $image_input,
    $apercu
];

}   


echo '<table>';
echo '<tr>';
echo '<td>ID</td>';
echo '<td>PRODUIT</td>';
echo '<td> LIEN IMAGE</td>';
echo '<td> APERÇU </td>';
echo '<td>ACTIONS</td';
echo '</tr>';
foreach($tab as $t) {
    echo '<tr>';
    echo '<form action="Product_admin.php" method="post" name="products_form">';
    foreach($t as $t1) {
        echo '<td>' . $t1 . '</td>';
    }
    echo '<td>';
    echo '<input class="button" type="hidden" value="'.$t[0].'" name="id"/>';
    echo '<input class="Delete_Input" type="submit" value="" name="Delete"/>';
    echo '<input class="Save_Input" type="submit" value="" name="Save"/>';
    
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