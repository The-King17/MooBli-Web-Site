<?php
session_start ();
include ("menu.php");
$login_valide = "Flavie";
$pwd_valide = "Gdgudf18@";

if (isset($_POST['login']) && isset($_POST['pwd'])) {
	if ($login_valide == $_POST['login'] && $pwd_valide == $_POST['pwd']) {
		$_SESSION['login'] = $_POST['login'];
		$_SESSION['pwd'] = $_POST['pwd'];
			echo '<center><h1>Vous êtes enfin parmis nous !</h1>';
				echo '<br>';
		echo '<center><a href="page_membre.php" class="bouton">Accéder à mon compte</a></center>';
			echo '<br>';
		echo '<center><a href="index.php" class="bouton">Acceuil</a></center>';
	}
	else {
		echo '<body onLoad="alert(\'Membre non reconnu...\')">';
		echo '<meta http-equiv="refresh" content="0;URL=log.php">';
	}
}
else {
	echo 'Les variables du formulaire ne sont pas déclarées.';
}
?>