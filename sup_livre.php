<?php
session_start(); // On démarre la session AVANT toute chose
?>
<!DOCTYPE html>
<html>
<head>
	<title>Modifier un livre</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/css-page.css">
</head>
<body>
<?php include ("menu.php"); ?>
<HR>
<h1>Résultat de votre requête</h1>
<?php
try{
$bdd = new PDO('mysql:host=localhost;dbname=id12582666_bibliotheque;charset=utf8', 'id12582666_root', 'eAprbk/0g1sDoyS-', 
	array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

}catch(Exception $e){
   die('Erreur : '.$e->getMessage());
}

$reponse = $bdd->prepare('DELETE FROM Livre WHERE isbn = 'isbn'');

while ($donnees = $reponse->fetch())
{
	echo "La supression du livre a été réaliser avec succès.";
}
$reponse->closeCursor();
?>
</body>
</html>