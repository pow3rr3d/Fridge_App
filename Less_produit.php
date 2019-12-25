<?php
function Less_produit()
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
$req = $bdd->query('SELECT PRODUIT_ID, PRODUIT,COUNT(*) AS resultat FROM user_produit RIGHT JOIN produit ON user_produit.PRODUIT_ID = produit.ID GROUP BY PRODUIT_ID ORDER BY resultat ASC LIMIT 3');

 while ($donnees = $req->fetch())
    {
        $produit = $donnees['PRODUIT'];
        $resultat = $donnees['resultat'];
        $tab[] = [
                $produit,
                $resultat
            ];
    } 

    echo '<table class="table_top">';
    echo '<caption>LESS PRODUIT</caption>';
    echo '<tr>';
    echo '<td>PRODUIT</td>';
    echo '<td>NB D\'UTILISATION</td>';
    echo '</tr>';
    foreach($tab as $t) {
        echo '<tr>';
        foreach($t as $t1) {
            echo '<td>' . $t1 . '</td>';
        }
        echo '</tr>';
        
    }
    echo '</table>';
}
?> 