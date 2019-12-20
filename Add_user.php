<?php
$dns = 'mysql:dbname=training;host=127.0.0.1';
$user = 'root';
$password = '';
$nw_name_user = $_POST['Name_user'];
$nw_surname_user = $_POST['Surname_user'];
$nw_email_user = $_POST['Email_user'];
$nw_password = $_POST['Password'];
$nw_confirm_password = $_POST['Confirm_password'];

try 
{
 $bdd = new PDO($dns, $user, $password);
 $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} 
catch (Exception $e) 
{
 echo 'Échec lors de la connexion : ' . $e->getMessage();
}
$requete = $bdd->query('SELECT COUNT(*) AS TOTAL FROM user WHERE EMAIL = \''.$nw_email_user.'\'');

while($donnees = $requete->fetch())
{
    $total = $donnees['TOTAL'];
}

if($total > 0 )
{
    echo 'Cette email existe déjà!';
    echo '<a href = "New_Account.php"> retour </a>';
    exit;
}
if(isset($_POST['Name_user']) && isset($_POST['Surname_user']) && isset($_POST['Email_user']) && $nw_password == $nw_confirm_password)
{  
        $req_add = $bdd->prepare('INSERT INTO user (ID, NOM, PRENOM, EMAIL, EMAIL_CONFIRM,PASSWORD, AVATAR) 
        VALUES (NULL, :Nom, :Prenom, :Email, :Email_Confirm, :Password, :Avatar)');
        
        $req_add->execute(array(
            'Nom' => $nw_name_user,
            'Prenom' => $nw_surname_user,
            'Email' => $nw_email_user,
            'Email_Confirm' => 'Yes',
            'Password' => password_hash($_POST['Password'], PASSWORD_ARGON2I),
            'Avatar' => '',
        ));
        header("Location: http://training.local/Index.php");
        exit;


}

    echo "Merci de bien vouloir saisir toutes champs comme demandés <br>";
    echo '<a href = "New_Account.php"> retour </a>';



?>
