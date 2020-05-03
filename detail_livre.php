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
</center>
<?php
try{
$bdd = new PDO('mysql:host=localhost;dbname=id12582666_bibliotheque;charset=utf8', 'id12582666_root', 'eAprbk/0g1sDoyS-');

$detail = $bdd->query('SELECT * FROM Livre JOIN Auteur ON Livre.isbn = Auteur.idRole JOIN Editeur ON Auteur.idRole = Editeur.id JOIN Genre ON Editeur.id = Genre.id JOIN Langue ON Genre.id = Langue.id JOIN Personne ON Langue.id = Personne.id WHERE isbn = "096573840x");

while ($donnees = $detail->fetch())
{
	echo $donnees['isbn']." ".$donnees['titre']." ".$donnees['annee']." ". $donnees['editeur']." ". $donnees['genre']." ". $donnees['langue'];
}

$reponse->closeCursor();
?>
<br>
<br>
<a href="panier.php?action=ajout&amp;l=LIBELLEPRODUIT&amp;q=QUANTITEPRODUIT&amp;p=PRIXPRODUIT" onclick="window.open(this.href, '', 
'toolbar=no, location=no, directories=no, status=yes, scrollbars=yes, resizable=yes, copyhistory=no, width=600, height=350'); return false;">Ajouter au panier</a>
</body>
</html>