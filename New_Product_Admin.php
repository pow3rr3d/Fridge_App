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
            <h1> Nouveau Produit </h1>
        </section>
<?php

echo '<form enctype="multipart/form-data" action="Add_product_admin.php" method="post" name="Add_form">';
echo '<label>';
echo 'Produit: ';
echo '</label>';
echo '<input class="Product_input" type="text" value="" name="Name"/> <br>';
echo '<label>';
echo 'Image: ';
echo '</label>';
echo '<input type="hidden" name="MAX_FILE_SIZE" value="30000000" />';
echo '<input name="userfile" type="file" /> <br>';
echo '<input class="Modify_submit" type="submit" value="Envoyer" name="Modify_submit">';
echo '</form>';

?>
        <section>
        </section>
    </body>
 </html>