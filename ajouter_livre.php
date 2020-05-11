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
	<center><h1>Votre nouveau livre a été ajouté!</h1></center>
	<br>
	<center><h1>Vous le retrouverez bientôt dans notre classement.</h1></center>
	<?php
		try{
	$bdd = new PDO('mysql:host=localhost;dbname=id12582666_bibliotheque;charset=utf8', 'id12582666_root', 'eAprbk/0g1sDoyS-');
	}catch(Exception $e){
        die('Erreur : '.$e->getMessage());
	}

	$reponse = $bdd->query('INSERT INTO `Livre_modif`(`isbn`, `titre`, `editeur`, `annee`, `genre`, `langue`, `nbpages`, `prix`, `date_parution`) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?');

	?>
	</p>
</body> 
</html>