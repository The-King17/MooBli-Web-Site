<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Détail du Livre</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="css/css-page.css">
	<?php include ("menu.php") ?>
</head>
<body>
    <center>
	<h1>Detail livre</h1>
	<br>
	<h2>Prix TTC 19€</h2>
    <a href="panier.php?action=ajout&amp;l=LIBELLEPRODUIT&amp;q=QUANTITEPRODUIT&amp;p=PRIXPRODUIT" onclick="window.open(this.href, '', 
'toolbar=no, location=no, directories=no, status=yes, scrollbars=yes, resizable=yes, copyhistory=no, width=600, height=350'); return false;">Ajouter au panier</a>
</center>
<?php
try{
$bdd = new PDO('mysql:host=localhost;dbname=id12582666_bibliotheque;charset=utf8', 'id12582666_root', 'eAprbk/0g1sDoyS-');

$detail = $bdd->query('SELECT * FROM livre Join genre On livre.genre = genre.id Join langue On livre.langue = langue.id');

while ($donnees = $detail->fetch())
{
	echo $donnees['isbn']; $donnees['titre']; $donnees['annee']; $donnees['editeur']; $donnees['genre']; $donnees['langue'];
}

$reponse->closeCursor();
?>
</body>
</html>