<?php
session_start();

$_SESSION['prenom'] = 'Flavie';
$_SESSION['nom'] = 'Tonon';
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
        <h1>
        Bienvenue à  toi <?php echo $_SESSION['prenom']; ?> heureux de te voir parmis nous !<br />
        Tu es sur ton espace personnel !
        Tu peux retrouvez tes commandes précedentes ou bien voir tes commandes en cours et surtout ton panier !</h1>
        <h1>Bonne visite</h1>
    </h1></div><div class="bouton-aligne">
        <HR>
    </div>
    <div class="bouton-aligne"><h1>
        <a href="panier.php" class="bouton">Mon panier</a><br />
        <a href="cmdencours.php" class="bouton">Mes commandes en cours</a><br />
        <a href="cmdpasse.php" class="bouton">Mes commandes précédentes</a><br />
        <a href="deconnexion.php" class="bouton">Déconnexion</a>
        </div><div class="bouton-aligne">
        <h1>Vous avez remarquer une erreur et vous souhaitez modifier notre base de donnée ?</h1>
	    	<a href="formulaire_livre.php" input type="button" class="retour">Envoyer une demande de modification</a>
	    	</div><div class="bouton-aligne">
            <HR>
        </div>
        </center>
    </h1>
    </div>
    </body>
</html>
