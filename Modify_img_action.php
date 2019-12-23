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

    $req_img = $bdd->query('SELECT * FROM produit WHERE ID ='.$id.'');
    while ($donnees = $req_img->fetch())
           {
           $produit = $donnees['PRODUIT'];
           }   
   

if (isset($_FILES['userfile']) AND $_FILES['userfile']['error'] == 0)
{
        if ($_FILES['userfile']['size'] <= 3000000)
        {
            $uploaddir = 'Media/Uploads/';
            $infosfichier = pathinfo($_FILES['userfile']['name']);
            $extension_upload = $infosfichier['extension'];
            $uploadfile = $uploaddir;
            $uploadfile .= $produit;
            $uploadfile .= "_";
            $uploadfile .= $user_id;
            $uploadfile .= ".";
            $uploadfile .= $infosfichier['extension'] ;
            $extensions_agree = array('jpg', 'jpeg', 'png', 'PNG','JPEG','JPG' );
                if (in_array($extension_upload, $extensions_agree))
                {
                        // On peut valider le fichier et le stocker définitivement
                        move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile);
                        $req_modify_injec = $bdd->prepare('UPDATE user_produit SET PRODUIT_IMG = :img WHERE USER_ID = :user_id AND PRODUIT_ID = :id');
                        $req_modify_injec->execute(array(
                            'img' => $uploadfile,
                            'user_id' => $user_id,
                            'id' => $id
                             ));
                             header("Location: http://fridge.local/Stock.php");
                        exit;
                }
                echo 'Type de fichier non accepté! Merci de choisir un fichier de type jpg, jpeg ou png.';
                exit;
        }
        echo 'Le fichier est trop lourd!';
        exit;
}



?>