<?php
// On démarre la session
session_start();

$_SESSION['prenom'] = 'Flavie';
$_SESSION['nom'] = 'Tonon';
$_SESSION['age'] = 24;
?>
<?php setcookie('pseudo', 'Flavie', time() + 365*24*3600, null, null, false, true); ?>
<!DOCTYPE html>
	<html>
		<head>
<!--page d'acceuil principal-->	
			<title>Mon Compte</title>
			<meta charset="utf-8">
			<link rel="stylesheet" href="css/cc-recherche.css">
		</head>
		<body>
<!-- Lien d'accès au menu qui est général à toutes les pages -->	
		<?php include ("menu.php");?>
<!--Barre de recherche intégré, permettant de chercher plus facilement dans le site-->
		<center>
    <body>
        <div class="bouton-aligne">
    <h1>
        Bienvenue à  toi <?php echo $_SESSION['prenom']; ?> heureux de te voir parmis nous !<br />
        Tu es sur ton espace personnel !
        Tu peux retrouvez tes commandes précedentes ou bien voir tes commandes en cours.
    </h1></div><div class="bouton-aligne"><h1>
        <a href="cmdencours.php" class="bouton">Mes commandes en cours</a><br />
        <a href="cmdpasse.php" class="bouton">Mes commandes précédentes</a><br />
        <a href="deconnexion.php" class="bouton">Déconnexion</a>
    </h1></div>
    <div class="bouton-aligne">
    <HR>
    </div>
    <h1>Mon Panier de réservation</h1>
    <br>
   <!--php pour afficher les livre réserver par tonon-->
    </body>
</html>
