<!DOCTYPE html>
<html>
<head>
	<title>Détail du Livre</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="css/css-page.css">
	<?php include ("menu.php") ?>
</head>
<body>
	<h1>Detail livre</h1>
<?php
try{
$bdd = new PDO('mysql:host=localhost;dbname=id12582666_bibliotheque;charset=utf8', 'id12582666_root', 'eAprbk/0g1sDoyS-');
catch(Exception $e){
        die('Erreur : '.$e->getMessage());
}

$detail = $bdd->query('SELECT * FROM livre Join genre On livre.genre = genre.id Join langue On livre.langue = langue.id');

while ($donnees = $detail->fetch())
{
	echo $donnees['isbn'] $donnees['titre'] $donnees['annee'] $donnees['editeur'] $donnees['genre'] $donnees['langue'];
}

$reponse->closeCursor();
?>
</body>
</html>