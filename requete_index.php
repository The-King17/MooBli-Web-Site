<!--php-->
<!--Pasage du PHP au HTML-->
<!DOCTYPE html>
<html>
 <head>
  <meta charset = "utf-8">
  <title>Les résultats</title>
  <link rel="stylesheet" type="text/css" href="css/css-page.css">
 </head>
 <body>
 <?php include ("menu.php"); ?>
 <center>
 <h1>Nos Livres à petit prix...</h1>
             <?php
try{
$bdd = new PDO('mysql:host=localhost;dbname=id12582666_bibliotheque;charset=utf8', 'id12582666_root', 'eAprbk/0g1sDoyS-');
}catch(Exception $e){
        die('Erreur : '.$e->getMessage());
}

$reponse = $bdd->query('SELECT titre, genre, description, prix FROM Livre WHERE prix <=3');

while ($donnees = $reponse->fetch())
{
	echo '<p><h2>'.$donnees['titre'] .'</h2><p>';
	echo '<p> Genre :'.$donnees['genre'] . '<p>';
	echo '<p> Description :'.$donnees['description'] .'<p>';
	echo '<p> Prix :'.$donnees['prix'] .'€<p>';
	echo '<center><a href="detail_livre.php">En découvrir plus ...</center></a>';
}

$reponse->closeCursor();

?>
 <HR>
     <!--bouton de retour en haut-->
        <a href="#">Haut de page</a>
    <HR>
</center>
 </body>
</html>
