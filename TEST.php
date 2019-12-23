<?php

$dns = 'mysql:dbname=training;host=127.0.0.1';
$user = 'root';
$password = '';
$id='2';


echo '<form enctype="multipart/form-data" action="" method="post">';
echo '<input type="hidden" name="MAX_FILE_SIZE" value="300000" />';

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
            $extensions_agree = array('jpg', 'jpeg', 'png');
                if (in_array($extension_upload, $extensions_agree))
                {
                        // On peut valider le fichier et le stocker définitivement
                        move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile);
                        exit;
                }
                echo 'Type de fichier non accepté! Merci de choisir un fichier de type jpg, jpeg ou png.';
                echo '<a href = "New_Account.php"> retour </a>';
                exit;
        }
        echo 'Le fichier est trop lourd!';
        echo '<a href = "New_Account.php"> retour </a>';
        exit;
}

?>
