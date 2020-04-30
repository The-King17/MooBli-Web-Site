<?php
session_start(); // On démarre la session AVANT toute chose
?>
<!DOCTYPE html>
	<html>
		<head>
<!--page d'acceuil principal-->	
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
if (!isset($_POST['pseudo'])) //On est dans la page de formulaire
{
	echo '<form method="post" action="connexion.php">

	<p>

	<label for="pseudo">Nom : </label><input name="pseudo" type="text" id="pseudo" /><br />
	
	<label for="id">Identifiant : </label><input name="identifiant" type="text" id="id" /><br />
	
	<label for="email">email : </label><input name="email" type="text" id="email" /><br />

	<label for="password">Mot de Passe : </label><input type="password" name="password" id="pass" />
	
	</p>
	
	<p><input type="submit" value="Inscription" /></p></form>

	<a href="formdeconnexion.php" class="bouton">Déja inscrit ?</a>
	 
	</div>
	</body>
	</html>';
}
?>
<?php 
// Vérification de la validité des informations
try{
$bdd = new PDO('mysql:host=localhost;dbname=id12582666_bibliotheque;charset=utf8', 'id12582666_root', 'eAprbk/0g1sDoyS-');

// Hachage du mot de passe
$pass_hache = password_hash($_POST['pass'], PASSWORD_DEFAULT);

// Insertion
$req = $bdd->prepare('INSERT INTO membres(pseudo, pass, email, date_inscription) VALUES(:pseudo, :pass, :email, CURDATE())');
$req->execute(array(
    'pseudo' => $pseudo,
    'pass' => $pass_hache,
    'email' => $email));
