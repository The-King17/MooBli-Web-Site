<?php
session_start();
session_destroy();
$titre="Déconnexion";
include("menu.php");

echo '<p><center>Vous êtes à présent déconnecté <br />
Cliquez <a href="form_de_connexion.php">ici</a> 
pour vous connecter.<br />
Cliquez <a href="index.php">ici</a> pour revenir à la page principale</center></p>';
echo '</div></body></html>';
?>
