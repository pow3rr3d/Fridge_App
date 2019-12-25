
<html>
    <header>
        <title>
            INDEX : App Frigo
        </title>
        <link rel="stylesheet" type="text/css" href="Style.css">
    </header>
    <body>
    
    <a href = "Index.php"> retour </a>

    <section class="Title">
        <h1> Inscription </h1>
    </section>

    <section class="Corpus">
<?php

$dns = 'mysql:dbname=training;host=127.0.0.1';
$user = 'root';
$password = '';

try 
{
 $bdd = new PDO($dns, $user, $password);
 $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} 
catch (Exception $e) 
{
 echo 'Échec lors de la connexion : ' . $e->getMessage();
}

echo '<form action="Add_user.php" method="post" name="Modify_form">';
echo '<label>';
echo 'Nom: ';
echo '</label>';
echo '<input class="User_input" type="text" value="" name="Name_user" required/> <br>';
echo '<label>';
echo 'Prénom: ';
echo '</label>';
echo '<input class="User_input" type="text" value="" name="Surname_user" required/> <br>';
echo '<label>';
echo 'Email: ';
echo '</label>';
echo '<input class="User_input" type="email" value="" name="Email_user" required/> <br>';
echo '<label>';
echo 'Mot de Passe: ';
echo '</label>';
echo '<input class="User_input" type="password" value="" name="Password"/> <br>';
echo '<label>';
echo 'Confirmation Mot de Passe: ';
echo '</label>';
echo '<input class="User_input" type="password" value="" name="Confirm_password"/> <br>';
echo '<input class="Send_user_submit" type="submit" value="Envoyer" name="Send_submit">';
echo '</form>';



?>
    </section>

    </body>
</html>