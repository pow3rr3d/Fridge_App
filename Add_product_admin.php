<?php

session_start();
if(!isset($_SESSION['id'])  && $_SESSION['id'] != 'Admin' )

{
    echo'pas de session';
    header("Location: http://fridge.local/Index.php");
}

$dns = 'mysql:dbname=training;host=127.0.0.1';
$user = 'root';
$password = '';
$id= $_SESSION['id'];
$produit = $_POST['Name'];
try 
{
 $bdd = new PDO($dns, $user, $password);
 $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} 
catch (Exception $e) 
{
 echo 'Échec lors de la connexion : ' . $e->getMessage();
}
if (isset($_FILES['userfile']) AND $_FILES['userfile']['error'] == 0 AND isset($_POST['Name']))
{
        if ($_FILES['userfile']['size'] <= 3000000)
        {
            $uploaddir = 'Media/';
            $infosfichier = pathinfo($_FILES['userfile']['name']);
            $extension_upload = $infosfichier['extension'];
            $uploadfile = $uploaddir . "$produit." .$infosfichier['extension'] ;
            $extensions_agree = array('jpg', 'jpeg', 'png', 'PNG','JPEG','JPG' );
                if (in_array($extension_upload, $extensions_agree))
                {
                        // On peut valider le fichier et le stocker définitivement
                        move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile);
                        $req = $bdd->prepare('INSERT INTO produit (ID, PRODUIT, IMAGE) VALUES (NULL, :produit, :image)'); //INSERT INTO `produit`(`ID`, `PRODUIT`, `IMAGE`) VALUES ([value-1],[value-2],[value-3])
                        $req->execute(array(
                            'produit' => $produit, 
                            'image' => $uploadfile
                             ));
                             header("Location: http://fridge.local/Admin_Product.php");
                        exit;
                }
                echo 'Type de fichier non accepté! Merci de choisir un fichier de type jpg, jpeg ou png.';
                exit;
        }
        echo 'Le fichier est trop lourd!';
        exit;
}


?>