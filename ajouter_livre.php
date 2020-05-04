<?php
session_start(); // On démarre la session AVANT toute chose
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Ajouter un livre</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="css/css-page.css">
	</head>
	<body>
	<?php include ("menu.php")?>
	<center><h1>Votre nouveau livre !</h1></center>
	<?php
		try{
	$bdd = new PDO('mysql:host=localhost;dbname=id12582666_bibliotheque;charset=utf8', 'id12582666_root', 'eAprbk/0g1sDoyS-');
	}catch(Exception $e){
        die('Erreur : '.$e->getMessage());
	}

	$reponse = $bdd->prepare('INSERT INTO Livre (titre,editeur,annee,genre,langue) VALUES (?, ?)');

	while ($donnees = $reponse->fetch())
	{
		echo ("Livre ajouter à la base de donnée.");
	}

	$reponse->closeCursor();

	?>
	</p>
</body> 
</html>