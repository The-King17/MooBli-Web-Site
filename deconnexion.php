<?php
session_start();
session_destroy();
$titre="Déconnexion";
include("menu.php");

echo '<p><center>Vous êtes à présent déconnecté <br />
Cliquez <a href="formdeconnexion.php">ici</a> 
pour vous connecter.<br />
Cliquez <a href="Acceuil.php">ici</a> pour revenir à la page principale</center></p>';
echo '</div></body></html>';
?>
