<?php
session_start();
?>
<!DOCTYPE html>
	<html>
		<head>
			<title>Inscription</title>
			<meta charset="utf-8">
			<link rel="stylesheet" href="css/cc-recherche.css">
		</head>
		<body>
<!-- Lien d'accès au menu qui est général à toutes les pages -->	
		<?php include ("menu.php");?>
<!--Barre de recherche intégré, permettant de chercher plus facilement dans le site-->
		<center>
<?php
if (!isset($_POST['pseudo']))
{
    echo '<HR>';
	echo '<form action="inscription_bdd.php" method="post">
<h1>Identifiant : </h1><input type="name" name="id" id="id"><br />
<br>
<h1>Nom : </h1><input type="text" name="pseudo" id="pseudo">
<br />
<h1>Prénom : </h1><input name="prénom" type="text" id="id"><br />
<br>
<h1>E-mail : </h1><input name="email" type="text" id="email"><br />
<br>
<h1>Mot de passe : </h1><input type="password" name="password" id="password"><br />
<br>
<h1>Date : </h1><input type="date" name="date_inscription" id="date_inscription"><br />
<br>
<input type="submit" value="Inscription">
</form>
<br>
<br>
	<a href="log.php" class="bouton">Déja inscrit ?</a>
	  <HR>
	    </div>
	</body>
</html>';
}
?>