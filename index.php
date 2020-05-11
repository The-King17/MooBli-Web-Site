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
		    <div class="bouton-aligne">
			<h1>Vous recherchez un livre à prix malin pour vos vacances ? </h1>
		<div class="texte">
   			<a href="requete_index.php" class="bouton">C'est par ici !</a>
  			</div>
  			</div>
        <div class="bouton-aligne">
            <HR>
                <h1>Dernières actualités de votre bibliothèque préférée</h1>
           <small class="smalla"><h2>Les réservations en ligne sont ouvertes !</h2></small>
            <p>
            <small class="small">Venez chercher votre commande au Drive Piéton de votre bibliothèque MooBli !</small>
            </p>
        </div>
		<div class="bouton-aligne">
		    <HR>
		    <h1>Rejoignez-nous et profitez de plus d'avantage !</h1>
		    </div>
		<div class="bouton-aligne">
        	<h2>J'ai un compte, je me connecte ! </h2>
        	    <div class="bouton-aligne-sigin">
        	    <a href="log.php">S'identifier</a>
        	    </div>
        	</div><div class="bouton-aligne">
            <h2>Pas encore de compte ?</h2>	
                <div class="bouton-aligne-sigin">
                <a href="inscription.php">S'inscrire</a>
                </div>
            </div>
            <div class="bouton-aligne">
			<HR>
			    </div>
            
        	<div class="bouton-aligne">
		<a href="a_propos.php"input type="button" class="retour">En savoir plus sur la bibliothèque</a>
		    </div>
	    	</center>
	    </footer>	
    </body>
</html>