<?php
function Top_produit()
{


include_once 'includes/connexion.php';
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
$req = $bdd->query('SELECT PRODUIT_ID, PRODUIT,COUNT(*) AS resultat FROM user_produit RIGHT JOIN produit ON user_produit.PRODUIT_ID = produit.ID GROUP BY PRODUIT_ID ORDER BY resultat DESC');

 while ($donnees = $req->fetch())
    {
        $produit = $donnees['PRODUIT'];
        $resultat = $donnees['resultat'];
        $tab[] = [
                $produit,
                $resultat
            ];
    }

    echo '<table>';
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
Top_produit();
?>
