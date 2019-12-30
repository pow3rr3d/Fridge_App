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
        <h1> Gestion Utilsateurs </h1>
    </section>

    <section class="Admin_Corpus">

<?php

echo '<a class="Nw_productlink" href="/New_Account.php">';
echo 'Créer un utilisateur';
echo '</a>';


include_once 'includes/connexion.php';
$user_id = $_SESSION['id'];

try
{
$bdd = new PDO($dns, $user, $password);
$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
echo "";
$requete = $bdd->query('SELECT * FROM user');

}
catch (Exception $e)
{
echo 'Échec lors de la connexion : ' . $e->getMessage();

}
$id = '';
$nom = '';
$prenom ='';
$email ='';
$avatar = '';
$type ='';
$tab = [];
while ($donnees = $requete->fetch())
{
$id = $donnees['ID'];
$nom = $donnees['NOM'];
$prenom = $donnees['PRENOM'];
$email = $donnees['EMAIL'];
$email_input = '<input class="User_input" type="text" value="'.$email.'" name="Email" required/>';
$avatar = $donnees['AVATAR'];
$avatar_input = '<input class="User_input" type="text" value="'.$avatar.'" name="Avatar" />';
$apercu = '<div id="product_div_admin" style="background-image:url('.$avatar.')"></div>';
$type = $donnees['TYPE'];

$tab[] = [
    $id,
    $nom,
    $prenom,
    $type,
    $email_input,
    $avatar_input,
    $apercu
];

}


echo '<table class="table_admin_user">';
echo '<tr>';
echo '<td class="td_table_admin_user">ID</td>';
echo '<td class="td_table_admin_user">NOM</td>';
echo '<td class="td_table_admin_user">PRÉNOM</td>';
echo '<td class="td_table_admin_user">PRIVILEGE</td>';
echo '<td class="td_table_admin_user">EMAIL</td>';
echo '<td class="td_table_admin_user">LIEN AVATAR</td>';
echo '<td class="td_table_admin_user"> APERÇU </td>';
echo '<td class="td_table_admin_user">ACTIONS</td';
echo '</tr>';
foreach($tab as $t) {
    echo '<tr>';
    echo '<form action="Admin_User_Action.php" method="post" name="products_form">';
    foreach($t as $t1) {
        echo '<td class="td_table_admin_user">' . $t1 . '</td>';
    }
    echo '<td class="td_table_admin_user">';
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
