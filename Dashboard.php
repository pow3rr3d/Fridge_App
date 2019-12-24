<?php

session_start();
if($_SESSION['type'] != "Admin" )
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

    <a href="Disconnection.php"> Déconnexion</a> <br>

    <section class="Title">
        <h1> Mon App Frigo</h1>
    </section>

    <section class="Graph">
        <h2> Statistiques </h2>

    </section>

    <section class="Summary">
        <h2> Sommaire </h2>
        <ul>
            <li> <a href="Admin_product.php"> Gestion Produits </a> </li> 
            <li> <a href="#"> Gestion Utilisateurs </a> </li>
            <li> <a href="#"> ### </a> </li> 
        </ul>
    </section>

    </body>
</html>