<?php 
$id = isset($_POST['id']) ? $_POST['id'] : NULL;
$pseudo = isset($_POST['pseudo']) ? $_POST['pseudo'] : NULL;
$pass = isset($_POST['pass']) ? $_POST['pass'] : NULL;
$email = isset($_POST['email']) ? $_POST['email'] : NULL;
// Vérification de la validité des informations

$bdd = new PDO('mysql:host=localhost;dbname=id12582666_bibliotheque;charset=utf8', 'id12582666_root', 'eAprbk/0g1sDoyS-');

// Insertion
$req = $bdd->prepare('INSERT INTO membres(id, pseudo, pass, email, date_inscription) VALUES(:id, pseudo, :pass, :email, CURDATE())');
$req->execute(array(
    'id' => $id,
    'pseudo' => $pseudo,
    'pass' => $pass,
    'email' => $email));
?>