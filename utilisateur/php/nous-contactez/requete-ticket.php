<?php

session_start();

if ($_SESSION['connecte'] != "oui") {
    header("Location: ../../authentification/connexion.php");
    exit(); // Arrêter l'exécution du script après la redirection
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    $title = $_POST['title'];
    $dateticket = $_POST['dateticket'];
    $demande = $_POST['demande'];
    $commentaire = $_POST['commentaire'];
    $file = $_FILES['file']['name'];
    
    try {
        $pdo = new PDO("mysql:host=localhost;dbname=mise_au_vert", "root", "root");
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        $stmt = $pdo->prepare("INSERT INTO ticket (ticket_title, ticket_dateticket, ticket_demande, ticket_commentaire, ticket_file) VALUES (?, ?, ?, ?, ?)");
        $stmt->execute([$title, $dateticket, $demande, $commentaire, $file]);
        
        header('Location: confirmation-ticket.php');
        exit(); // Arrêter l'exécution du script après la redirection
    } catch (PDOException $e) {
        echo "Erreur : " . $e->getMessage();
        exit(); // Arrêter l'exécution du script en cas d'erreur PDO
    }
}
?>