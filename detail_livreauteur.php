<?php
session_start();
?>
<html>
<head>
	<title>Détail du Livre</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="css/css-page.css">
	<?php include ("menu.php") ?>
</head>
<body>
    <center>
	<h1>A découvrir...</h1>
	<br>
</center>
              <?php
try{
$bdd = new PDO('mysql:host=localhost;dbname=id12582666_bibliotheque;charset=utf8', 'id12582666_root', 'eAprbk/0g1sDoyS-');
}catch(Exception $e){
        die('Erreur : '.$e->getMessage());
}
$auteur=$_GET["auteur"];
$reponse = $bdd->query('SELECT isbn, titre, auteur, annee, genre, description, prix, editeur FROM Livre where auteur ="'.$auteur.'"');


while ($donnees = $reponse->fetch())
{
echo '<p><h2><center>Titre :</p></h2><center>'.$donnees['titre'].'</center><p>';
    echo '<p><h2><center>Auteur :</p></h2><center>'.$donnees['auteur'].'</center><p>';
		echo '<p><h2><center>Année :</p></h2><center>'.$donnees['annee'].'</center><p>';
	    	echo '<p><h2><center>Description :</p></h2><center>'.$donnees['description'].'</center><p>';
		    	echo '<p><h2><center>ISBN :</p></h2><center>'.$donnees['isbn'].'</center><p>';
			    	echo '<p><h2><center>Genre :</p></h2><center>'.$donnees['genre'].'</center><p>';
			    	    echo '<p><h2><center>Editeur :</p></h2><center>'.$donnees['editeur'].'</center><p>';
	                  echo '<p><h2><center>Prix :</p></h2><center>'.$donnees['prix'].'€ </center><p>';
	                       echo '<center><a href="panier.php?action=ajout&amp;l='.$donnees['isbn'].'&amp;q=1&amp;p='.$donnees['prix'].'">Ajouter au panier</center></a>';
	                             echo'<HR>';
}

$reponse->closeCursor();

?>
  <!--bouton de retour en haut-->
        <center><a href="#">Haut de page</a></center>
    <HR>
<br>
<br>
</body>
</html>