<?php
include 'dbconnexion.php';

session_start();
$req = $conn->prepare ("INSERT INTO ticket(ticket_title, 
                      ticket_datetiket, ticket_demande, ticket_commentaire, ticket_file) 
                VALUES(?, ?, ?, ?, ?)");

$req->execute(array($_POST['title'],$_POST['dateticket'],$_POST['demande'],$_POST['commentaire'],
    ($_POST['file'])));

$_SESSION['connecte'] = "oui";
header("location: ../../../utilisateur/php-utilisateur/nous-contactez.php");
?>