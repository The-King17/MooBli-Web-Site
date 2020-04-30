<?php
session_start(); // On démarre la session AVANT toute chose
?>
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
$bdd = new PDO('mysql:host=localhost;dbname=id12582666_bibliotheque;charset=utf8', 'id12582666_root', 'eAprbk/0g1sDoyS-');
}catch(Exception $Erreur){
        die('Erreur : '.$Erreur->getMessage());

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