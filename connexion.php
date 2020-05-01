<?php
session_start();
$titre="Connexion";
include("menu.php");
echo '<p><i>Vous êtes ici</i> : <a href="session.php">mon compte</a>';
?>
<?php
echo '<h1>Connexion</h1>';

    $message='';
    if (empty($_POST['pseudo']) || empty($_POST['pass']) ) //Oublie d'un champ
    {
        $message = '<p>une erreur s\'est produite pendant votre identification.
	Vous devez remplir tous les champs</p>
	<p>Cliquez <a href="formdeconnexion.php">ici</a> pour revenir</p>';
    }
    else //On check le mot de passe
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
	    $message = '<p>Bienvenue '.$data['pseudo'].', 
			vous êtes maintenant connecté!</p>
			<p>Cliquez <a href="Acceuil.php">ici</a> 
			pour revenir à la page d accueil</p>';  
	}
	else // Acces pas OK !
	{
	    $message = '<p>Une erreur s\'est produite 
	    pendant votre identification.<br /> Le mot de passe ou le pseudo 
            entré n\'est pas correcte.</p><p>Cliquez <a href="formdeconnexion.php">ici</a> 
	    pour revenir à la page précédente
	    <br /><br />Cliquez <a href="Acceuil.php">ici</a> 
	    pour revenir à la page d accueil</p>';
	}
    $query->CloseCursor();
    }
    echo $message.'
             </div>
        </body>
    </html>';

?>
