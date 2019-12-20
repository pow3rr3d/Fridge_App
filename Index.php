<html>
    <header>
        <title>
            INDEX : App Frigo
        </title>
        <link rel="stylesheet" type="text/css" href="Style.css">
    </header>
    <body>
 
    <section class="Title">
        <h1> Mon App Frigo </h1>
    </section>

    <section class="Head">
        <a href="New_Account.php"> Inscription </a>
    </section>

    <section class="Connexion">
        <h2> Connexion </h2>

    <form action="Connexion_Action.php" method="post" name="Modify_form">
        <label>
            Email
        </label>
        <input class="Connexion_id_input" type="email" value="" name="Email" />
        <br>
        <label>
            Mot de Passe
        </label>
        <input class="Connexion_id_input" type="password" value="" name="Password"/>
        <br>
        <input class="Connexion_submit" type="submit" value="Connexion" name="Connexion_submit">
    </form>

    </section>

    </body>
</html>