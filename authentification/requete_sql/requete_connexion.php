<?php
include 'dbconnexion.php';

$req = $conn->prepare ("SELECT * FROM user WHERE compte_identifiant = ?");

$req->execute(array($_POST['identifiant']));
$result = $req ->fetchAll();
$mdp=$result [0]["compte_password"];
if (password_verify($_POST['mdp'], $mdp)) {
    echo "Connexion réussie";
    session_start();
    $_SESSION['connecte'] = true;

    if ($result[0]['compte_identifiant'] == 'prof1234') {
        header("location: ../../../administrateur/php-administrateur/bienvenue.php");
    } else {
        header("location: ../../../utilisateur/php-utilisateur/bienvenue.php");
    }
}
else
{
header("location: ../connexion.php");
}
?>