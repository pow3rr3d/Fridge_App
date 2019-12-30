<?php

session_start();
if($_SESSION['type'] != "Admin" )
{
    echo'pas de session';
    header("Location: http://fridge.local/Index.php");
}
include_once('Top_produit.php');
include_once('Less_produit.php');
include_once('Unused_produit.php');
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
        <h2 class='h2_graph'> Statistiques </h2>
        <div class='div_graph'>
 <?php  
 Top_produit(); 
 Less_produit();
 Unused_produit();
 ?>
        </div>
    </section>

    <section class="Summary">
        <h2> Sommaire </h2>
        <ul>
            <li> <a href="Admin_product.php"> Gestion Produits </a> </li> 
            <li> <a href="Admin_user.php"> Gestion Utilisateurs </a> </li>
            <li> <a href="#"> ### </a> </li> 
        </ul>
    </section>

    </body>
</html>