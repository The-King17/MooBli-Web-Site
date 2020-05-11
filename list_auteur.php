<!DOCTYPE html>
<html>
    <head>
        <meta charset = "utf-8">
            <title>Les Auteurs</title>
            <link rel="stylesheet" type="text/css" href="css/css-page.css">
    </head>
                <body>
<?php include ("menu.php"); ?>
                        <center>
                        <h1>Les Auteurs</h1>
                        <h2>Retrouvez tous nos auteurs par ordre alphabétique !</h2>
                        <div class="bouton-aligne">
    <HR>
                        </div>
<?php
try{
$bdd = new PDO('mysql:host=localhost;dbname=id12582666_bibliotheque;charset=utf8', 'id12582666_root', 'eAprbk/0g1sDoyS-');
}catch(Exception $Erreur){
        die('Erreur : '.$Erreur->getMessage());
}
echo'<h1>A:</h1>';

$reponse = $bdd->query('SELECT nom, prenom, id FROM Personne WHERE nom LIKE "A%" ORDER BY nom ASC');

while ($donnees = $reponse->fetch())
{
    $auteur = $donnees['prenom'] . " " .$donnees['nom'];
                echo '<a href="detail_livreauteur.php?auteur=' .$auteur.'"><p><h2><center></p>' .$donnees['nom'].'     ' .$donnees['prenom'].'</h2></center><p></a>"';
}

echo'<center><h1>B:</h1></center>';
$reponse = $bdd->query('SELECT nom, prenom, id FROM Personne WHERE nom LIKE "B%" ORDER BY nom ASC');


while ($donnees = $reponse->fetch())
{
                    $auteur = $donnees['prenom'] . " " .$donnees['nom'];
                    echo '<a href="detail_livreauteur.php?auteur=' .$auteur.'"><p><h2><center></p>' .$donnees['nom'].'     ' .$donnees['prenom'].'</h2></center><p></a>"';
}
echo'<center><h1>C:</h1></center>';
$reponse = $bdd->query('SELECT nom, prenom, id FROM Personne WHERE nom LIKE "C%" ORDER BY nom ASC');


while ($donnees = $reponse->fetch())
{
                $auteur = $donnees['prenom'] . " " .$donnees['nom'];
                echo '<a href="detail_livreauteur.php?auteur=' .$auteur.'"><p><h2><center></p>' .$donnees['nom'].'     ' .$donnees['prenom'].'</h2></center><p></a>"';
}
echo'<center><h1>D:</h1></center>';
$reponse = $bdd->query('SELECT nom, prenom, id FROM Personne WHERE nom LIKE "D%" ORDER BY nom ASC');


while ($donnees = $reponse->fetch())
{
                $auteur = $donnees['prenom'] . " " .$donnees['nom'];
                echo '<a href="detail_livreauteur.php?auteur=' .$auteur.'"><p><h2><center></p>' .$donnees['nom'].'     ' .$donnees['prenom'].'</h2></center><p></a>"';
}

echo'<center><h1>F:</h1></center>';
$reponse = $bdd->query('SELECT nom, prenom, id FROM Personne WHERE nom LIKE "F%" ORDER BY nom ASC');


while ($donnees = $reponse->fetch())
{
                $auteur = $donnees['prenom'] . " " .$donnees['nom'];
                echo '<a href="detail_livreauteur.php?auteur=' .$auteur.'"><p><h2><center></p>' .$donnees['nom'].'     ' .$donnees['prenom'].'</h2></center><p></a>"';
}
echo'<center><h1>G:</h1></center>';
$reponse = $bdd->query('SELECT nom, prenom, id FROM Personne WHERE nom LIKE "G%" ORDER BY nom ASC');


while ($donnees = $reponse->fetch())
{
                $auteur = $donnees['prenom'] . " " .$donnees['nom'];
                echo '<a href="detail_livreauteur.php?auteur=' .$auteur.'"><p><h2><center></p>' .$donnees['nom'].'     ' .$donnees['prenom'].'</h2></center><p></a>"';
}
echo'<center><h1>H:</h1></center>';
$reponse = $bdd->query('SELECT nom, prenom, id FROM Personne WHERE nom LIKE "H%" ORDER BY nom ASC');


while ($donnees = $reponse->fetch())
{
                $auteur = $donnees['prenom'] . " " .$donnees['nom'];
                echo '<a href="detail_livreauteur.php?auteur=' .$auteur.'"><p><h2><center></p>' .$donnees['nom'].'     ' .$donnees['prenom'].'</h2></center><p></a>"';
}
echo'<center><h1>J:</h1></center>';
$reponse = $bdd->query('SELECT nom, prenom, id FROM Personne WHERE nom LIKE "J%" ORDER BY nom ASC');


while ($donnees = $reponse->fetch())
{
                $auteur = $donnees['prenom'] . " " .$donnees['nom'];
                echo '<a href="detail_livreauteur.php?auteur=' .$auteur.'"><p><h2><center></p>' .$donnees['nom'].'     ' .$donnees['prenom'].'</h2></center><p></a>"';
}
echo'<center><h1>M:</h1></center>';
$reponse = $bdd->query('SELECT nom, prenom, id FROM Personne WHERE nom LIKE "M%" ORDER BY nom ASC');


while ($donnees = $reponse->fetch())
{
                $auteur = $donnees['prenom'] . " " .$donnees['nom'];
                echo '<a href="detail_livreauteur.php?auteur=' .$auteur.'"><p><h2><center></p>' .$donnees['nom'].'     ' .$donnees['prenom'].'</h2></center><p></a>"';
}
echo'<center><h1>N:</h1></center>';

$reponse = $bdd->query('SELECT nom, prenom, id FROM Personne WHERE nom LIKE "N%" ORDER BY nom ASC');


while ($donnees = $reponse->fetch())
{
                $auteur = $donnees['prenom'] . " " .$donnees['nom'];
                echo '<a href="detail_livreauteur.php?auteur=' .$auteur.'"><p><h2><center></p>' .$donnees['nom'].'     ' .$donnees['prenom'].'</h2></center><p></a>"';
}
echo'<center><h1>T:</h1></center>';
$reponse = $bdd->query('SELECT nom, prenom, id FROM Personne WHERE nom LIKE "T%" ORDER BY nom ASC');


while ($donnees = $reponse->fetch())
{
                $auteur = $donnees['prenom'] . " " .$donnees['nom'];
                echo '<a href="detail_livreauteur.php?auteur=' .$auteur.'"><p><h2><center></p>' .$donnees['nom'].'     ' .$donnees['prenom'].'</h2></center><p></a>"';
}
// fin
$reponse->closeCursor();
?>
</center>
<center>
<div class="bouton-aligne">
<HR>
     <!--bouton de retour en haut-->
        <center><a href="#">Haut de page</a></center>
<HR>
    </div>
    </center>
</body>
</html>