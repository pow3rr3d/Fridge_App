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
            App Frigo - Stock
        </title>
        <link rel="stylesheet" type="text/css" href="Style.css">
    </header>
    <body>
    
    <a href = "Admin_product.php"> retour </a>

        <section class="Title">
            <h1> Nouvel utilisateur </h1>
        </section>
        <section class="corpus">
<?php

echo '<form enctype="multipart/form-data" action="Add_user_admin.php" method="post" name="Add_form">';
echo '<label>';
echo 'Nom: ';
echo '</label>';
echo '<input class="Product_input" type="text" value="" name="Name" required/> <br>';
echo '<label>';
echo 'Prénom: ';
echo '</label>';
echo '<input class="Product_input" type="text" value="" name="Surname"/> <br>';
echo '<label>';
echo 'Email: ';
echo '</label>';
echo '<input class="Product_input" type="email" value="" name="Email" required/> <br>';
echo '<label>';
echo 'Confirmer Email: ';
echo '</label>';
echo '<input class="Product_input" type="email" value="" name="Confirm_Email" required/> <br>';
echo '<label>';
echo 'Mot de Passe: ';
echo '</label>';
echo '<input class="Product_input" type="password" value="" name="Password" required/> <br>';
echo '<label>';
echo 'Confirmer Mot de Passe: ';
echo '</label>';
echo '<input class="Product_input" type="password" value="" name="Confirm_Password" required/> <br>';
echo '<label>';
echo 'Avatar: ';
echo '</label>';
echo '<input type="hidden" name="MAX_FILE_SIZE" value="30000000" />';
echo '<input name="userfile" type="file" /> <br>';
echo '<input class="Modify_submit" type="submit" value="Envoyer" name="Modify_submit">';
echo '</form>';

?>

        </section>
    </body>
 </html>