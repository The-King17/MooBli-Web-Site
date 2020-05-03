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
 	    <div class="bouton-aligne">
 	<h1>Ajouter un livre</h1>
    <form method="post" action="ajouter_livre.php">
      <br>
      <br>
      <div class="texte2">
      <label>Nom du livre </label> <input type="text" class="input-livre" name="nom" id="nom">
      <br>
      <br>
      <label>Nombre de Page </label><input type="number" class="input-livre" name="nbpages" id="nbPages">
      <br>
      <br>
      <label>Auteur </label><input type="text" name="auteur" class="input-livre" id="aut">
      <br>
      <br>
      <label>Editeur </label><input type="text" name="editeur" class="input-livre" id="edit">
      <br>
      <br>
      <label>Date de parution </label> <input type="date" class="input-livre" name="dteparu" id="dat">
      <br>
      <br>
      <label>Langue </label><input type="text" name="langue" class="input-livre" id="lng">
      <br>
      <br>
      <label>Genre </label> <input type="text" name="genre" class="input-livre" id="gnr">
      <br>
       <div class="bouton-aligne">
                       
                  <br>
        <input type="submit" value="Ajouter" class="bouton-livre" id="ajoutLivre">
      <br>
                        <HR>
                   </div>
     
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

      </div><div class="bouton-aligne">
      <h1>Modifier un livre</h1>
      <br>
      <form method="post" action="modif_livre.php">
      <div class="texte2">
      <label>Nom du livre </label> <input type="text" class="input-livre" name="nom" id="nom">
      <br>
      <br>
      <label>Nombre de Page </label><input type="number" class="input-livre" name="nbpages" id="nbPages">
      <br>
      <br>
      <label>Auteur </label><input type="text" name="auteur" class="input-livre" id="aut">
      <br>
      <br>
      <label>Editeur </label><input type="text" name="editeur" class="input-livre" id="edit">
      <br>
      <br>
      <label>Date de parution </label> <input type="date" class="input-livre" name="dteparu" id="dat">
      <br>
      <br>
      <label>Langue </label><input type="text" name="langue" class="input-livre" id="lng">
      <br>
      <br>
      <label>Genre </label> <input type="text" name="genre" class="input-livre" id="gnr">
      <br>
       <div class="bouton-aligne">
                       
                  <br>
      <input type="submit" value="Modifier" class="bouton-livre" id="modifLivre">
      <br>
                     <HR>    
                   </div>
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
        </div>
        <div class="bouton-aligne">
      <h1>Supression d'un livre</h1>
      <br>
      <form method="post" action="sup_livre.php">
      <div class="texte2">
     <label>ISBN </label> <input type="text" class="input-livre" name="isbn" id="isbn">
      <br>
      <br>
      <div class="bouton-aligne">
                       
                  <br>
      <input type="submit" value="Suprimer" class="bouton-livre" id="supLivres">
      <br>
                        <HR>
                   </div>

      </div>
    </form>
      <script>
          var supLivres = document.getElementById("supLivres");
          supLivres.addEventListener("click", valider);
          function valider(){
            var nom = document.getElementById("isbn");
            if(nom.value == ""){
              alert("Saisie imcomplète !");
            }else{
              nom.readOnly = true;
            }
          }
        </script>
         <div class="bouton-aligne">
                      
                   <!--bouton de retour en haut-->
                   <a href="#">Haut de page</a>
                        <HR>
                   </div>
	</center>
 </body>
</html>