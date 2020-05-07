<html>
<head>
<title>Formulaire d'identification</title>
<link rel="stylesheet" href="css/cc-recherche.css">
<meta charset="utf-8">
<?php
include ("menu.php");
?>
</head>
<body>
	<br>
<center>
    <HR>
<form action="login.php" method="post">
<h1>Pseudo : </h1><input type="text" name="login">
<br />
<h1>Mot de passe : </h1><input type="password" name="pwd"><br />
<br>
<input type="submit" value="Connexion">
</form>
<br>
<div class="bouton-aligne">
	<a href="inscription.php" class="bouton">Pas encore inscrit ?</a>
	</div><div class="bouton-aligne">
	<a href="mailto:admin.test@test.net" class="bouton">Mot de passe oublier ?</a>
	</div>
<HR>
</center>
</body>
</html>