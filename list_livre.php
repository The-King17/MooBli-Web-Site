<?php
session_start(); 
?>
<!DOCTYPE html>
<html>
 <head>
  <meta charset = "utf-8">
   <title>Nos Livres</title>
    <link rel="stylesheet" type="text/css" href="css/css-page.css">
     </head>
       <body>
         <?php include ("menu.php"); ?>
                        </div></center>
<?php
try{
$bdd = new PDO('mysql:host=localhost;dbname=id12582666_bibliotheque;charset=utf8', 'id12582666_root', 'eAprbk/0g1sDoyS-');
}catch(Exception $e){
        die('Erreur : '.$e->getMessage());
}

$reponse = $bdd->query('SELECT titre, annee, isbn, nbpages, prix FROM Livre');

while ($donnees = $reponse->fetch())
{
           echo'<center>
              <h1>Les Livres</h1>
              <h2>Cliquez sur un livre pour en découvrir plus !</h2>
         <div class="bouton-aligne">
        <div><a href="detail_livre.php"><img src="./miniature/min_096573840x.jpg" /></a>
                            <p><h2><center></p>'.$donnees['titre'].'</center></h2><p>
		<p><h2><center></p>'.$donnees['annee'].'</center></h2><p></div>
    
        </div>';
}
            $reponse->closeCursor();
?>
<HR>
     <!--bouton de retour en haut-->
        <center><a href="#">Haut de page</a></center>
<HR>
        </body>
</html>
