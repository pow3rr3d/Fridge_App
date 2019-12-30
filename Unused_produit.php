<?php
function Unused_produit()
{


$dns = 'mysql:dbname=training;host=127.0.0.1';
$user = 'root';
$password = '';
try 
{
 $bdd = new PDO($dns, $user, $password);
 $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 $requete = $bdd->query('SELECT * FROM produit');
} 
catch (Exception $e) 
{
 echo 'Échec lors de la connexion : ' . $e->getMessage();
}
$req = $bdd->query('SELECT ID, PRODUIT FROM produit WHERE ID NOT IN (SELECT PRODUIT_ID FROM user_produit) LIMIT 3');

 while ($donnees = $req->fetch())
    {
        $produit = $donnees['PRODUIT'];

        $tab[] = [
                $produit,
            ];
    } 
    echo '<div class="list">';
    echo '<p>';
    echo 'TOP PRODUIT';
    echo '</p>';
    echo '<ul>';
    foreach($tab as $t) {
        echo '<li>';
        foreach($t as $t1) {
            echo $t1;
        }
        echo '</li>';
        
    }
    echo '</ul>';
    echo '</div>';
}
?> 