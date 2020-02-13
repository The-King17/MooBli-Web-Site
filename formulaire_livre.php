<!DOCTYPE html>
<html>
 <head>
  <meta charset = "utf-8">
  <title>Action sur les livres</title>
  <link rel="stylesheet" type="text/css" href="css/css-page.css">
 </head>
 <body>
 	<?php include ("menu.php"); ?>
 	<center>
 	<h1>Ajouter un livre</h1>
    <form method="post" action="ajouter_livre.php">
      <br>
      <HR>
      <br>
      <div class="texte2">
      <label>Nom du livre :</label> <input type="text" name="nom" id="nom">
      <br>
      <br>
      <label>Nombre de Page :</label><input type="number" name="nbpages" id="nbPages">
      <br>
      <br>
      <label>Auteur : </label><input type="text" name="auteur" id="aut">
      <br>
      <br>
      <label>Editeur :</label><input type="text" name="editeur" id="edit">
      <br>
      <br>
      <label>Date de parution :</label> <input type="date" name="dteparu" id="dat">
      <br>
      <br>
      <label>Langue :</label><input type="text" name="langue" id="lng">
      <br>
      <br>
      <label>Genre :</label> <input type="text" name="genre" id="gnr">
      <br>
      <HR>
      <br>
      <input type="submit" value="AJOUTER LE LIVRE" id="ajoutLivre">
     </form> 
      </div>
      <script>
          var ajoutLivre = document.getElementById("ajoutLivre");
          ajoutLivre.addEventListener("click", valider);
          function valider(){
            var nom = document.getElementById("nom");
            if(nom.value == ""){
              alert("Saisie imcomplète !");
            }else{
              nom.readOnly = true;
            }
          }
        </script>
       <HR>
      <br>
      <h1>Supression d'un livre</h1>
      <br>
      <form method="post" action="sup_livre.php">
      <div class="texte2">
     <label>Nom du livre :</label> <input type="text" name="nom" id="nom">
      <br>
      <br>
      <label>Nombre de Page :</label><input type="number" name="nbpages" id="nbPages">
      <br>
      <br>
      <label>Auteur : </label><input type="text" name="auteur" id="aut">
      <br>
      <br>
      <label>Editeur :</label><input type="text" name="editeur" id="edit">
      <br>
      <br>
      <label>Date de parution :</label> <input type="date" name="dteparu" id="dat">
      <br>
      <br>
      <label>Langue :</label><input type="text" name="langue" id="lng">
      <br>
      <br>
      <label>Genre :</label> <input type="text" name="genre" id="gnr">
      <br>
      <HR>
      <br>
      <input type="submit" value="SUPRIMER LE LIVRE" id="supLivres">
      </div>
    </form>
      <script>
          var supLivres = document.getElementById("supLivres");
          supLivres.addEventListener("click", valider);
          function valider(){
            var nom = document.getElementById("nom");
            if(nom.value == ""){
              alert("Saisie imcomplète !");
            }else{
              nom.readOnly = true;
            }
          }
        </script>
         <HR>
      <br>
      <h1>Modifier un livre</h1>
      <br>
      <form method="post" action="modif_livre.php">
      <div class="texte2">
      <label>Nom du livre :</label> <input type="text" name="nom" id="nom">
      <br>
      <br>
      <label>Nombre de Page :</label><input type="number" name="nbpages" id="nbPages">
      <br>
      <br>
      <label>Auteur : </label><input type="text" name="auteur" id="aut">
      <br>
      <br>
      <label>Editeur :</label><input type="text" name="editeur" id="edit">
      <br>
      <br>
      <label>Date de parution :</label> <input type="date" name="dteparu" id="dat">
      <br>
      <br>
      <label>Langue :</label><input type="text" name="langue" id="lng">
      <br>
      <br>
      <label>Genre :</label> <input type="text" name="genre" id="gnr">
      <br>
      <HR>
      <br>
      <input type="submit" value="MODIFIER LE LIVRE" id="modifLivre">
      <br>
      <HR>
      </div>
    </form>
      <script>
          var modifLivre = document.getElementById("modifLivre");
          modifLivre.addEventListener("click", valider);
          function valider(){
            var nom = document.getElementById("nom");
            if(nom.value == ""){
              alert("Saisie imcomplète !");
            }else{
              nom.readOnly = true;
            }
          }
        </script>
        <!--bouton de retour en haut-->
          <a href="#">Haut de page</a>
	</center>
 </body>
</html>