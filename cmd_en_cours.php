<?php
session_start(); // On démarre la session AVANT toute chose
?>
<!DOCTYPE html>
<html>
 <head>
  <meta charset = "utf-8">
  <title>Commandes en cours</title>
  <link rel="stylesheet" type="text/css" href="css/css-page.css">
 </head>
 <body>
 	<?php include ("menu.php"); ?>
<center>
	<h1>Commande en cours</h1>
 	 	 <?php
try{
$bdd = new PDO('mysql:host=localhost;dbname=id12582666_bibliotheque;charset=utf8', 'id12582666_root', 'eAprbk/0g1sDoyS-');
}catch(Exception $e){
        die('Erreur : '.$e->getMessage());
}

$reponse = $bdd->prepare('SELECT * FROM `commande` WHERE `date_achat` >= CURRENT_DATE');

while ($donnees = $reponse->fetch())
{
	echo '<p>'.$donnees['titre'] ; $donnees['isbn'] ; $donnees['quantite'] .$donnees['prix'] .'<p>';
}

$reponse->closeCursor();

?>
    <HR>
     <!--bouton de retour en haut-->
        <a href="#">Haut de page</a>
    <HR>
        
	</center>
 </body>
</html>