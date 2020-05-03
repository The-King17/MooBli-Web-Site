<?php
session_start();
$titre="Connexion";
include("menu.php");
?>
<?php
echo '<center><h1>Connexion</h1></center>';

    $message='';
    if (empty($_POST['pseudo']) || empty($_POST['pass']) ) //Oublie d'un champ
    {
        $message = '<p><center>une erreur s\'est produite pendant votre identification.
	Vous devez remplir tous les champs</center></p>
	<p><center>Cliquez <a href="form_de_connexion.php">ici</a> pour revenir</center></p>';
    }
    else //On vérifie le mot de passe
    {
        $query=$db->prepare('SELECT pass, id, email, pseudo
        FROM membres WHERE pseudo = :pseudo');
        $query->bindValue(':pseudo',$_POST['pseudo'], PDO::PARAM_STR);
        $query->execute();
        $data=$query->fetch();
	if ($data['pass'] == md5($_POST['pass'])) // Acces OK !
	{
	    $_SESSION['pseudo'] = $data['pseudo'];
	   // $_SESSION['level'] = $data['membre_rang'];
	    $_SESSION['id'] = $data['membre_id'];
	    $message = '<p><center>Bienvenue '.$data['pseudo'].', 
			vous êtes maintenant connecté!</center></p>
			<p><center>Cliquez <a href="index.php">ici</a> 
			pour revenir à la page d accueil</center></p>';  
	}
	else // Acces pas OK !
	{
	    $message = '<p><center>Une erreur s\'est produite 
	    pendant votre identification.<br /> Le mot de passe ou le pseudo 
            entré n\'est pas correcte.</p><p>Cliquez <a href="form_de_connexion.php">ici</center></a> 
	    pour revenir à la page précédente
	    <br /><br />Cliquez <a href="index.php">ici</a> 
	    pour revenir à la page d accueil</center></p>';
	}
    $query->CloseCursor();
    }
    echo $message.'
             </div>
        </body>
    </html>';

?>
