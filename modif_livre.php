<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="css/css-page.css">
	</head>
	<body>
	<?php include (menu.php)?>	
	<?php
		try{
	$bdd = new PDO('mysql:host=localhost;dbname=id12582666_bibliotheque;charset=utf8', 'id12582666_root', 'eAprbk/0g1sDoyS-');
	}catch(Exception $e){
        die('Erreur : '.$e->getMessage());
	}

	$reponse = $bdd->query('INSERT INTO Livre (titre,editeur,annee,genre,langue) VALUES ('nom','editeur','annee','genre','langue'');

	while ($donnees = $reponse->fetch())
	{
		echo ("modification éffectuer dans la base de donnée.");
	}

	$reponse->closeCursor();

	?>
	</p>
</body> 
</html>