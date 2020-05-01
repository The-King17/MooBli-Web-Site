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
			<h2>Vous recherchez un livre en particulier ?</h2>
		<div class="texte">
			<form action="recherche_bar.php" method="post">
   					<input type="search" name="terme" id="txt">
   					<input class="go" type="submit" name="s" value="GO" id="go">
  			</div></form>
  			</div><div class="bouton-aligne">
  			    <div class="texte3">
  			<h1>Un doute, une question, un courriel !</h1>
	                	<a href="mailto:admin.test@test.net" input type="button" class="bouton">Envoyer nous un courriel</a>
	                	</div>
	                </div>
  			<script>
          var go = document.getElementById("go");
          go.addEventListener("click", valider);
          function valider(){
            var txt = document.getElementById("txt");
            if(txt.value == ""){
              alert("Saisie imcomplète !");
            }else{
              txt.readOnly = true;
            }
          }
        </script>
        <div class="bouton-aligne">
            <HR>
                <h1>Dernières actualité de votre bibliothèque préférée</h1>
           <small class="smalla">Les réservations sont ouvertes !</small>
            <p>
            <small class="small">Profitez-en un livre loué = -50% sur le deuxième livre loué</small>
            </p>
        </div>
		<div class="bouton-aligne">
		    <HR>
		    <h1>Rejoignez-nous et profitez de plus d'avantage !</h1>
		    </div>
		<div class="bouton-aligne">
        	<h2>J'ai un compte, je me connecte ! </h2>
        	    <div class="bouton-aligne-sigin">
        	    <a href="formdeconnexion.php">S'identifier</a>
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
		<a href="app.php"input type="button" class="retour">En savoir plus sur la bibliothèque</a>
		    </div>
	    	</center>
	    </footer>	
    </body>
</html>