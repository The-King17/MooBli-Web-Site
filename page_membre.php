<?php
session_start ();
include ("menu.php");
?>
<?php
if (isset($_SESSION['login']) && isset($_SESSION['pwd'])) {

	// On teste pour voir si nos variables ont bien été enregistrées
	echo '<html>';
	echo '<head>';
	echo '<center><title>Bienvenue</title></center>';
	echo '</head>';

	echo '<body>';
	echo '<br>';
	echo '<div class="bouton-aligne"><center><h1> Bonjour '.$_SESSION['login'].', Heureux de te revoir ! </h1></center>
	</div><div class="bouton-aligne">
	<center>
	<a href="logout.php" class="bouton">Déconnexion</a>
	</center>
	</div>
	<HR>
	<br />
	<center><a href="panier.php" class="bouton">Mon panier</a>
	<br>
	<br>
        <a href="cmd.php" class="bouton">Mes commandes</a><br />
			<div class="bouton-aligne">
	<HR>
	</div>
	<br />
        <h1>Vous avez remarqué une erreur et vous souhaitez modifier notre base de donnée ?</h1>
	    	<a href="formulaire_livre.php" input type="button" class="retour">Envoyer une demande de modification</a>
	    	<center>
	    	<br />
	<div class="bouton-aligne">
	<HR>
	</div>
	<br />
            <h1>Une question, un doute ?</h1>
	         <a href="contact.php" input type="button" class="bouton">Lancer le chat avec notre équipe !</a>
	         </center>
	        </div>
	        </div>
        </div></center>';
}
else {
	echo '<center><h1>Une erreur est survenue ...  Connectez-vous pour accéder à votre espace personel !</h1></center>';
	echo '<br>';
	echo '<center><a href="log.php" input type="button" class="bouton">Se Connecter</a></center>';
}
?>