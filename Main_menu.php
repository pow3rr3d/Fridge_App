<?php
session_start();
if(!isset($_SESSION['nom']))

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

    <section class="Head">
        <a href="User_Account.php"> Mon compte</a> <br>
    </section>

    <section class="Summary">
        <h2> Sommaire </h2>
        <ul>
            <li> <a href="Stock.php"> Produits </a> </li> 
            <li> <a href="Conso.php"> Enlèvement </a> </li>
            <li> <a href="List.php"> Liste de course </a> </li> 
        </ul>
    </section>

    </body>
</html>