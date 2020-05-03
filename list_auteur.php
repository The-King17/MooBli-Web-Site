<!DOCTYPE html>
<html>
<head>
<meta charset = "utf-8">
<title>Les Auteurs</title>
<link rel="stylesheet" type="text/css" href="css/css-page.css">
</head>
<body>
<?php include ("menu.php"); ?>
<center>
<h1>Les Auteurs</h1>
<?php
try{
$bdd = new PDO('mysql:host=localhost;dbname=bibliotheque;charset=utf8', 'root', '');
}catch(Exception $Erreur){
        die('Erreur : '.$Erreur->getMessage());
}
$auteur = $bdd->query('SELECT nom, prenom FROM personne');

while ($donnees = $auteur->fetch())
{
	echo $donnees['nom'] . " " . $donnees['prenom'];
}
$auteur->closeCursor();
?>
</center>
</body>
</html>