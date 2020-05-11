<!DOCTYPE html>
	<html>
		<head>
			<title>Validation</title>
			<meta charset="utf-8">
		</head>
		<body>       
         <center>
         <h1>Validation de votre commande</h1>
	<br>
	 <!--creation d'un faut sytème de paiement-->
	<button onclick="document.getElementById('num_resa').innerHTML = getRndInteger(1000,100000)">Valider ma commande</button>
<h2>Numéro de réservation :</h2>
<p id="num_resa"></p>
<h2>A bientôt sur MooBli</h2>
<a href="index.php">Revenir à l'acceuil</a>
<HR>
    <h1>Vous désirez nous régler par chèque pas de problème !</h1>
    <br>
    <h2>Envoyer nous votre chèque à l'ordre de "MooBli" avec votre numéro de réservation au dos.</h2>
    <br>
    <h2>Adresse : 145, boulevard Neyp, Quartier des Grandes-Carrières, Paris 75018</h2>
    <br>
    <p>L'envoie de votre commande s'effectuera dès réception de votre chèque.</p>
    <HR>
<script>
function getRndInteger(min, max) {
  return Math.floor(Math.random() * (max - min)) + min;
}
</script>
</center>
	<?php
		try{
	$bdd = new PDO('mysql:host=localhost;dbname=id12582666_bibliotheque;charset=utf8', 'id12582666_root', 'eAprbk/0g1sDoyS-');
	}catch(Exception $e){
        die('Erreur : '.$e->getMessage());
	}

	$reponse = $bdd->query('INSERT INTO `commandevalid`(`id`, `prenom`, `addresselivraison`, `addressefactur`, `moyen`, `numcarte`, `datexp`, `crypto`, `nom`) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?);');

?>
	    </body>
</html>



