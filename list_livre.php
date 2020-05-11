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
     </div>
    </center>
<center><h1>Les Livres</h1>
<h2>Cliquez sur un livre pour en découvrir plus !</h2></center>
<center><div class="bouton-aligne">
<HR>
</div>
</center>
<?php
try{
$bdd = new PDO('mysql:host=localhost;dbname=id12582666_bibliotheque;charset=utf8', 'id12582666_root', 'eAprbk/0g1sDoyS-');
}catch(Exception $e){
        die('Erreur : '.$e->getMessage());
}
echo'<center><a href="detail_livre.php"><img src="./miniature/min_096573840x.jpg" /></a></center>';

$reponse = $bdd->query('SELECT titre, auteur, genre FROM Livre WHERE isbn ="096573840x"');

while ($donnees = $reponse->fetch())
{
                echo '<p><h2><center></p>' .$donnees['titre'].'  <p>  </p>   ' .$donnees['auteur'].'   <p>  </p>  ' .$donnees['genre'].'</h2></center><p>';
}
echo'
<center><div class="bouton-aligne">
<HR>
</div></center>';
echo'<center><a href="detail_livre.php"><img src="./miniature/min_203585573x.jpg" /></a></center>';
$reponse = $bdd->query('SELECT titre, auteur, genre FROM Livre WHERE isbn ="203585573x"');


while ($donnees = $reponse->fetch())
{
                     echo '<p><h2><center></p>' .$donnees['titre'].'   <p>  </p>  ' .$donnees['auteur'].'   <p>  </p>  ' .$donnees['genre'].'</h2></center><p>';
}
echo'
<center><div class="bouton-aligne">
<HR>
</div></center>';
echo'<center><a href="detail_livre.php"><img src="./miniature/min_208127857x.jpg" /></a></center>';
$reponse = $bdd->query('SELECT titre, auteur, genre FROM Livre WHERE isbn ="208127857x"');


while ($donnees = $reponse->fetch())
{
                       echo '<p><h2><center></p>' .$donnees['titre'].'  <p>  </p>   ' .$donnees['auteur'].'  <p>  </p>   ' .$donnees['genre'].'</h2></center><p>';
}
echo'
<center><div class="bouton-aligne">
<HR>
</div></center>';
echo'<center><a href="detail_livre.php"><img src="./miniature/min_2035867916.jpg" /></a></center>';
$reponse = $bdd->query('SELECT titre, auteur, genre FROM Livre WHERE isbn ="2035867916"');


while ($donnees = $reponse->fetch())
{
                        echo '<p><h2><center></p>' .$donnees['titre'].'  <p>  </p>   ' .$donnees['auteur'].'  <p>  </p>   ' .$donnees['genre'].'</h2></center><p>';
}
echo'
<center><div class="bouton-aligne">
<HR>
</div></center>';
echo'<center><a href="detail_livre.php"><img src="./miniature/min_2070373096.jpg" /></a></center>';
$reponse = $bdd->query('SELECT titre, auteur, genre FROM Livre WHERE isbn ="2070373096"');


while ($donnees = $reponse->fetch())
{
                       echo '<p><h2><center></p>' .$donnees['titre'].'   <p>  </p>  ' .$donnees['auteur'].'   <p>  </p>  ' .$donnees['genre'].'</h2></center><p>';
}
echo'
<center><div class="bouton-aligne">
<HR>
</div></center>';
echo'<center><a href="detail_livre.php"><img src="./miniature/min_2081219972.jpg" /></a></center>';
$reponse = $bdd->query('SELECT titre, auteur, genre FROM Livre WHERE isbn ="2081219972"');


while ($donnees = $reponse->fetch())
{
                     echo '<p><h2><center></p>' .$donnees['titre'].'   <p>  </p>  ' .$donnees['auteur'].'  <p>  </p>   ' .$donnees['genre'].'</h2></center><p>';
}
echo'
<center><div class="bouton-aligne">
<HR>
</div></center>';
echo'<center><a href="detail_livre.php"><img src="./miniature/min_2253037923.jpg" /></a></center>';
$reponse = $bdd->query('SELECT titre, auteur, genre FROM Livre WHERE isbn ="2253037923"');


while ($donnees = $reponse->fetch())
{
               echo '<p><h2><center></p>' .$donnees['titre'].'   <p>  </p>  ' .$donnees['auteur'].'  <p>  </p>   ' .$donnees['genre'].'</h2></center><p>';
}
echo'
<center><div class="bouton-aligne">
<HR>
</div></center>';
echo'<center><a href="detail_livre.php"><img src="./miniature/min_2253038741.jpg" /></a></center>';
$reponse = $bdd->query('SELECT titre, auteur, genre FROM Livre WHERE isbn ="2253038741"');


while ($donnees = $reponse->fetch())
{
                      echo '<p><h2><center></p>' .$donnees['titre'].'   <p>  </p>  ' .$donnees['auteur'].'  <p>  </p>   ' .$donnees['genre'].'</h2></center><p>';
}
echo'
<center><div class="bouton-aligne">
<HR>
</div></center>';
echo'<center><a href="detail_livre.php"><img src="./miniature/min_2264069112.jpg" /></a></center>';
$reponse = $bdd->query('SELECT titre, auteur, genre FROM Livre WHERE isbn ="2264069112"');


while ($donnees = $reponse->fetch())
{
                    echo '<p><h2><center></p>' .$donnees['titre'].'  <p>  </p>   ' .$donnees['auteur'].'  <p>  </p>   ' .$donnees['genre'].'</h2></center><p>';
}
echo'
<center><div class="bouton-aligne">
<HR>
</div></center>';
echo'<center><a href="detail_livre.php"><img src="./miniature/min_2266152181.jpg" /></a></center>';
$reponse = $bdd->query('SELECT titre, auteur, genre FROM Livre WHERE isbn ="2266152181"');
while ($donnees = $reponse->fetch())
{
                    echo '<p><h2><center></p>' .$donnees['titre'].'  <p>  </p>   ' .$donnees['auteur'].'  <p>  </p>   ' .$donnees['genre'].'</h2></center><p>';
}

            $reponse->closeCursor();
?>
<center>
<div class="bouton-aligne">
     <!--bouton de retour en haut-->
        <center><a href="#">Haut de page</a></center>
<HR>
    </div>
    </center>
        </body>
</html>