<?php
session_start();
include_once("fonctions-panier.php");
include ("menu.php");
$erreur = false;

$action = (isset($_POST['action'])? $_POST['action']:  (isset($_GET['action'])? $_GET['action']:null )) ;
if($action !== null)
{
   if(!in_array($action,array('ajout', 'suppression', 'refresh')))
   $erreur=true;

   //récupération des variables en POST ou GET
   $l = (isset($_POST['l'])? $_POST['l']:  (isset($_GET['l'])? $_GET['l']:null )) ;
   $p = (isset($_POST['p'])? $_POST['p']:  (isset($_GET['p'])? $_GET['p']:null )) ;
   $q = (isset($_POST['q'])? $_POST['q']:  (isset($_GET['q'])? $_GET['q']:null )) ;

   //Suppression des espaces verticaux
   $l = preg_replace('#\v#', '',$l);
   //On vérifie que $p est un float
   $p = floatval($p);

   //On traite $q qui peut être un entier simple ou un tableau d'entiers
    
   if (is_array($q)){
      $QteArticle = array();
      $i=0;
      foreach ($q as $contenu){
         $QteArticle[$i++] = intval($contenu);
      }
   }
   else
   $q = intval($q);
    
}

if (!$erreur){
   switch($action){
      Case "ajout":
         ajouterArticle($l,$q,$p);
         break;

      Case "suppression":
         supprimerArticle($l);
         break;

      Case "refresh" :
         for ($i = 0 ; $i < count($QteArticle) ; $i++)
         {
            modifierQTeArticle($_SESSION['panier']['libelleProduit'][$i],round($QteArticle[$i]));
         }
         break;

      Default:
         break;
   }
}

echo '<?xml version="1.0" encoding="utf-8"?>';?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr">
<head>
    <center>
<h1>Votre panier</h1>
</head>
<body>

<form method="post" action="panier.php">
<table style="width: 400px">
    <tr>
      
    </tr>
    <tr>
        <td>Quantité</td>
        <td>Prix Unitaire</td>
        <td>Action</td>
    </tr>


    <?php
    if (creationPanier())
    {
       $nbArticles=count($_SESSION['panier']['libelleProduit']);
       if ($nbArticles <= 0)
       echo "<tr><td>Panier vide</ td></tr>";
       else
       {
          for ($i=0 ;$i < $nbArticles ; $i++)
          {
             echo "<tr>";
             echo "<tr>";
             echo "<h1><td><input type=\"text\" size=\"4\" name=\"q[]\" value=\"".htmlspecialchars($_SESSION['panier']['qteProduit'][$i])."\"/></td></h1>";
             echo "<h1><td>".htmlspecialchars($_SESSION['panier']['prixProduit'][$i])."€</td></h1>";
             echo "<h1><td><a href=\"".htmlspecialchars("panier.php?action=suppression&l=".rawurlencode($_SESSION['panier']['libelleProduit'][$i]))."\">Suprimer le livre</a></td></h1>";
             echo "</tr>";
          }

          echo "<tr><td colspan=\"2\"> </td>";
          echo "<td colspan=\"2\">";
          echo "Total : ".MontantGlobal()."€";
          echo "</td></tr>";

          echo "<tr><td colspan=\"4\">";
          echo "<input type=\"submit\" value=\"Actualiser\"/>";
          echo "<input type=\"hidden\" name=\"action\" value=\"refresh\"/>";
          echo "<br>";
        echo "<br>";

          echo "</td></tr>";
         
       }
    }
    ?>
             </center>
         </table>
        </form>
    
       <center>
           <br>
           <img src="img/cb.jpg"></img>
           <br>
           <div class="bouton-aligne">
            <HR>
                      <center>
</div>
           <br>
              <h1>Moyen de paiement accepté</h1>
              <br>
              <h2>Par CB (en ligne)</h2>
              <br>
                <h2>Par Chèque (Par envoie postal, rallonge le délais de livraison)</h2>
                <br>
                 <form method="post" action="valid.php">
      <br>
          <div class="bouton-aligne">
                <HR>
              </div>
          <br>
      <h1>Quelles que Informations sur vous </h1>
      <br>
      <div class="texte2">
            <label>Identifiant client </label> <input type="number" class="input-livre" name="id" id="id">
      <br>
      <br>
        <label>Nom </label> <input type="text" class="input-livre" name="nom" id="nom">
      <br>
      <br>Prénom</label><input type="text" class="input-livre" name="prenom" id="prenom">
      <br>
      <br>
      <label>Adresse de livraison</label><input type="text" name="addresselivraison" class="input-livre" id="addresselivraison">
      <br>
      <br>
      <label>Adresse de facturation</label> <input type="text" class="input-livre" name="adressefacturation" id="addressefactur">
      <br>
      <br>
      <label>Moyen de paiement (si chèque remplir comme indiquez et valider)</label><input type="text" name="moyen" class="input-livre" id="moyen">
      <br>
      <br>
      <label>Numéro de carte bleue (si chèque : 0000000000)</label> <input type="text" name="numcarte" class="input-livre" id="numcarte">
       <br>
      <br>
      <label>Date d'expiration (si chèque, date actuel)</label> <input type="date" name="dateexp" class="input-livre" id="datexp">
       <br>
      <br>
      <label>Cryptogramme (si chèque : 000)</label> <input type="number" name="crypto" class="input-livre" id="crypto">
      <br>
       <div class="bouton-aligne">
                       
                  <br>
        <input type="submit" value="Valider mes informations" class="bouton-livre" id="valid">
      <br>
                        <HR>
                   </div>
     
     </form> 
    </center>

    </body>
</html>