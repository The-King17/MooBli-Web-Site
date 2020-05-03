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
 <h1>Résultat de votre recherche :</h1>
 <?php
try{
$bdd = new PDO('mysql:host=localhost;dbname=id12582666_bibliotheque;charset=utf8', 'id12582666_root', 'eAprbk/0g1sDoyS-');
}catch(Exception $e){
        die('Erreur : '.$e->getMessage());
}

$reponse = $bdd->prepare('SELECT titre, annee, isbn, nbpages FROM livre');

while ($donnees = $reponse->fetch())
{
	echo '<p>'.$donnees['titre'] ; $donnees['annee'] ; $donnees['isbn'] .$donnees['nbpages'] .'<p>';
}

$reponse->closeCursor();

?>
</center>
 </body>
</html>