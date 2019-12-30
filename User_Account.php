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
            INDEX : App Frigo
        </title>
        <link rel="stylesheet" type="text/css" href="Style.css">
    </header>
    <body>

    <a href = "Main_menu.php"> retour </a>

    <section class="Title">
        <h1> Mon Compte Utilisateur </h1>
    </section>

    <section class="Corpus">
<?php

include_once 'includes/connexion.php';
$id = $_SESSION['id'];

try
{
 $bdd = new PDO($dns, $user, $password);
 $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 $requete = $bdd->query('SELECT * FROM user WHERE id LIKE '.$id.'');
}
catch (Exception $e)
{
 echo 'Échec lors de la connexion : ' . $e->getMessage();
}
while ($donnees = $requete->fetch())
{
    $id_user = $donnees['ID'];
    $name_user = $donnees['NOM'];
    $surname_user = $donnees['PRENOM'];
    $email_user = $donnees['EMAIL'];
    $avatar_user = $donnees['AVATAR'];

}
echo '<div id="cercle" style="background-image:url('.$avatar_user.')"></div><br>';
echo '<a href="Modify_avatar.php"> Modifier Avatar';
echo '</a>';
echo '<form enctype="multipart/form-data" action="Modify_user.php" method="post" name="Modify_form">';
echo '<label>';
echo 'ID: ';
echo '</label>';
echo $id_user .'<br>';
echo '<label>';
echo 'Nom: ';
echo '</label>';
echo '<input class="User_input" type="text" value="'.$name_user.'" name="Name_user" required/> <br>';
echo '<label>';
echo 'Prénom: ';
echo '</label>';
echo '<input class="User_input" type="text" value="'.$surname_user.'" name="Surname_user" required/> <br>';
echo '<label>';
echo 'Email: ';
echo '</label>';
echo '<input class="User_input" type="text" value="'.$email_user.'" name="Email_user" required/> <br>';
echo '<input class="button" type="hidden" value="'.$id_user.'" name="id">';
echo '<label>';
echo 'Mot de Passe: ';
echo '</label>';
echo '<input class="User_input" type="password" value="" name="Password"/> <br>';
echo '<label>';
echo 'Confirmation Mot de Passe: ';
echo '</label>';
echo '<input class="User_input" type="password" value="" name="Confirm_password"/> <br>';
echo '<input class="Modify_user_submit" type="submit" value="Modifier" name="Modify_submit">';
echo '</form>';



?>
    </section>

    </body>
</html>
