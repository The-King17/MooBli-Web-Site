<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="css/css-page.css">
	</head>
	<body>
	<?php include ("menu.php")?>	
	<center><h1>Modification de votre livre !</h1></center>
	<br>
	<center><h1>Vous verez prochainement votre modification dans notre sélection.</h1></center>
	<?php
		try{
	$bdd = new PDO('mysql:host=localhost;dbname=id12582666_bibliotheque;charset=utf8', 'id12582666_root', 'eAprbk/0g1sDoyS-');
	
	}catch(Exception $e){
        die('Erreur : '.$e->getMessage());
	}
		$reponse = $bdd->query('UPDATE `Livre_modif` SET `isbn`= ?,`titre`= ?,`editeur`= ?,`annee`= ?,`genre`= ?,`langue`= ?,`nbpages`= ?,`prix`= ?,`date_parution`= ? WHERE `isbn`;');
?>
    	</p>
    </body> 
</html>