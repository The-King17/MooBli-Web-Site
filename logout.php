<?php
session_start ();
include ("menu.php");
?>
<?php
session_unset ();
session_destroy ();
echo '<center><h1>Vous êtes déconnecté, que faire ?</h1></center>';
echo '<center><a href="log.php" class="bouton">Reconnexion</a></center>';
echo '<br>';
echo '<center><a href="index.php" class="bouton">Acceuil du site</a></center>';
?>