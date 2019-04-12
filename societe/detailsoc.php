<?php
try
{
	// On se connecte à MySQL
$bdd= new PDO('mysql:host=localhost;dbname=id9271623_cogip;charset=utf8', 'id9271623_ragazzadb', 'IlaCatMo');
}

catch(Exception $e)
{
	// En cas d'erreur, on affiche un message et on arrête tout
        die('Erreur : '.$e->getMessage());
}
$resultat = $bdd->prepare('SELECT * FROM societe WHERE idsociete = :idsociete ');
$resultat->execute(array(
'idsociete'=> $_GET['contact']
));
?>


<!DOCTYPE HTML>
  <html>
    <body>
      <?php
        while ($donnees = $resultat->fetch())
        { ?>
          <p>Id :<?= $donnees['idsociete']?></p>
          <p>Nom Société :<?= $donnees['nomsociete']?></p>
          <p>Pays:<?= $donnees['pays']?></p>
          <p>No TVA :<?= $donnees['tva']?></p>
          <p>Type :<?= $donnees['type']?></p>
        <?php } ?>
    </body>
  </html>
