<?php
session_start(); // On démarre la session AVANT toute chose
?>
<!DOCTYPE html>
	<html>
		<head>
<!--page d'acceuil principal-->	
			<title>Acceuil</title>
			<meta charset="utf-8">
			<link rel="stylesheet" href="css/cc-recherche.css">
		</head>
		<body>
<!-- Lien d'accès au menu qui est général à toutes les pages -->	
		<?php include ("menu.php");?>
<!--Barre de recherche intégré, permettant de chercher plus facilement dans le site-->
		<center>
<h1>Bienvenue dans la Jungle du livre</h1>
<br>
<p>Cette bibliothèque en ligne vous propose un large choix de livres, pour tous!</p>
<p>En passant par les classics, comme Corneille, mais aussi plus récent comme Haruki Marakami</p>
<div class="bouton-aligne">
  			    <div class="texte3">
  			<h1>Une question, un doute ?</h1>
	                	<a href="contact.php" input type="button" class="bouton">Lancer le chat avec notre équipe !</a>
	                	</div>
	                </div>
	    	<br>
<div class="bouton-aligne">
<HR>
</div>
    <br>
    <p>Ce site web, intégrant bien évidament HTML, CSS et PHP, intègre aussi du JavaScript.</p>
    <p>Cette réalisation s'est éffectué dans le cadre de notre première année de BTS SIO à l' IPSSI</p>
    <p>Nous remercions notre professeur, pour ce projet qui nous a permis de renforcer nos compétences en dévelopement Web</p>
<p>©2019-2020 Version 20200506.1410</p>
		</center>
	    </footer>	
    </body>
</html>