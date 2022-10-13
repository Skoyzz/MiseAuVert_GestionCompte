<?php
include 'dbconnexion.php';

session_start();
$req = $conn->prepare ("INSERT INTO user(compte_identifiant, 
                      compte_nom, compte_prenom, compte_email, compte_password) 
                VALUES(?, ?, ?, ?, ?)");

$req->execute(array($_POST['identifiant'],$_POST['nom'],$_POST['prenom'],$_POST['email'],
    password_hash($_POST['mdp'], PASSWORD_DEFAULT)));

$_SESSION['connecte'] = "oui";
header("location: ../connexion.php");
?>