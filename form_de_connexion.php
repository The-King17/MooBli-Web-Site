<?php
session_start(); // On démarre la session AVANT toute chose
?>
<!DOCTYPE html>
	<html>
		<head>
<!--page d'acceuil principal-->	
			<title>Connexion</title>
			<meta charset="utf-8">
			<link rel="stylesheet" href="css/cc-recherche.css">
		</head>
		<body>
<!-- Lien d'accès au menu qui est général à toutes les pages -->	
		<?php include ("menu.php");?>
<!--Barre de recherche intégré, permettant de chercher plus facilement dans le site-->
		<center>
<?php
if (!isset($_POST['pseudo'])) //On est dans la page de formulaire
{
	echo '<form method="post" action="connexion.php">
<p>
	
	<label for="id">Identifiant : </label><input name="identifiant" type="text" id="id" /><br />

	<label for="password">Mot de Passe : </label><input type="password" name="password" id="pass" />
	
</p>
	
	<p><input type="submit" value="Connexion" /></p></form>

	<a href="inscription.php" class="bouton">Pas encore inscrit ?</a>
	<a href="mailto:admin.test@test.net" class="bouton">Mot de passe oublier ?</a>
	 
	    </div>
	</body>
</html>';
}
?>
