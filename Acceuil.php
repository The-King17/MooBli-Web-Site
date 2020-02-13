<!DOCTYPE html>
	<html>
		<head>
<!--page d'acceuil principal d'accès-->	
			<title>Acceuil</title>
			<meta charset="utf-8">
			<link rel="stylesheet" href="css/cc-recherche.css">
		</head>
		<body>
<!-- Lien d'accès au menu qui est général à toutes les pages -->	
		<?php include ("menu.php");?>
<!--Barre de recherche intégré, permettant de chercher plus facilement dans le site-->
		<center>
		<HR>
			<H1>Ma recherche:</H1>
		<div class="texte">
			<p>Effectuer une recherche un livre</p>
		</div>
			<form action="recherche_bar.php" method="post"> <!--Get = transit via URL/méthode de formulaire-->
   				<label>Nom du livre :</label><input type="search" name="terme">
   				<input type="submit" name="s" value="GO" >
  			</form>
			<HR>
		</center>
	</body>
</html>
<!--Maxime Rocheteau et Kirusanth Rajadurai-->