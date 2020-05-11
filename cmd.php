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
<!--Commande en cour-->
<?php
try{
$bdd = new PDO('mysql:host=localhost;dbname=id12582666_bibliotheque;charset=utf8', 'id12582666_root', 'eAprbk/0g1sDoyS-');
}catch(Exception $e){
        die('Erreur : '.$e->getMessage());
}

$reponse = $bdd->query('SELECT numcom, titre, isbn, quantite, prix, date_achat FROM `commande` WHERE `date_achat` >= CURRENT_DATE');

while ($donnees = $reponse->fetch())
{
    echo '<p><h2><center> Numéro de commande : </p>' .$donnees['numcom']. '</h2></center><p>';
    echo '<p><h2><center> Date de la commande : </p>'.$donnees['date_achat']. '</h2></center><p>';
                echo '<p><h2><center> Titre : </p>' .$donnees['titre']. '</h2></center><p>';
                echo '<p><h2><center> ISBN : </p>'.$donnees['isbn']. '</h2></center><p>';
                echo '<p><h2><center> Quantite : </p>' .$donnees['quantite']. '</h2></center><p>';
                echo '<p><h2><center> Prix total de la commande : </p>'.$donnees['prix']. '€</h2></center><p>';
}

$reponse->closeCursor();

?>
<!--Commande passé-->
<Hr>
    <br>
    	<center><h1>Commande passée</h1></center>
    <br>
<?php
try{
$bdd = new PDO('mysql:host=localhost;dbname=id12582666_bibliotheque;charset=utf8', 'id12582666_root', 'eAprbk/0g1sDoyS-');
}catch(Exception $e){
        die('Erreur : '.$e->getMessage());
}

$reponse = $bdd->query('SELECT numcom, titre, isbn, quantite, prix, date_achat FROM `commande` WHERE `date_achat` < CURRENT_DATE');

while ($donnees = $reponse->fetch())
{
    echo '<p><h2><center> Numéro de commande : </p>' .$donnees['numcom']. '</h2></center><p>';
     echo '<p><h2><center> Date de la commande : </p>'.$donnees['date_achat']. '</h2></center><p>';
                echo '<p><h2><center> Titre : </p>' .$donnees['titre']. '</h2></center><p>';
                echo '<p><h2><center> ISBN : </p>'.$donnees['isbn']. '</h2></center><p>';
                echo '<p><h2><center> Quantite : </p>' .$donnees['quantite']. '</h2></center><p>';
                echo '<p><h2><center> Prix total de la commande: </p>'.$donnees['prix']. '€</h2></center><p>';
}

$reponse->closeCursor();

?>
    <HR>
     <!--bouton de retour en haut-->
        <center><a href="#">Haut de page</a></center>
    <HR>
	</center>
 </body>
</html>
</center>
 </body>
</html>