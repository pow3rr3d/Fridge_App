<?php

session_start();
if(!isset($_SESSION['nom']))
{
    echo'pas de session';
    header("Location: http://fridge.local/Index.php");
}

include_once 'includes/connexion.php';
$id= $_SESSION['id'];
?>
<html>
    <header>
        <title>
            INDEX : App Frigo
        </title>
        <link rel="stylesheet" type="text/css" href="Style.css">
    </header>
    <body>

    <a href = "User_Account.php"> retour </a>

    <section class="Title">
        <h1> Mon Avatar </h1>
    </section>

    <section class="Corpus">
<?php

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
echo '<form enctype="multipart/form-data" action="" method="post">';
echo '<input type="hidden" name="MAX_FILE_SIZE" value="300000" />';
echo '<input name="userfile" type="file" /> <br>';
echo '<input type="submit" value="Envoyer le fichier" />';
echo '</form>';


if (isset($_FILES['userfile']) AND $_FILES['userfile']['error'] == 0)
{
        if ($_FILES['userfile']['size'] <= 3000000)
        {
            $uploaddir = 'Media/Uploads/';
            $infosfichier = pathinfo($_FILES['userfile']['name']);
            $extension_upload = $infosfichier['extension'];
            $uploadfile = $uploaddir . "Avatar_$id." .$infosfichier['extension'] ;
            $extensions_agree = array('jpg', 'jpeg', 'png', 'PNG','JPEG','JPG' );
                if (in_array($extension_upload, $extensions_agree))
                {
                        // On peut valider le fichier et le stocker définitivement
                        move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile);
                        $req_modify_injec = $bdd->prepare('UPDATE user SET AVATAR = :avatar WHERE ID = :id');
                        $req_modify_injec->execute(array(
                            'id' => $id,
                            'avatar' => $uploadfile
                             ));
                             header("Location: http://fridge.local/User_Account.php");
                        exit;
                }
                echo 'Type de fichier non accepté! Merci de choisir un fichier de type jpg, jpeg ou png.';
                exit;
        }
        echo 'Le fichier est trop lourd!';
        exit;
}



?>

</section>

</body>
</html>
