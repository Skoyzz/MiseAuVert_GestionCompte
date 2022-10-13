<?php
$dbname = "mise_au_vert";
$dbuser = "root";
$dbhost = "localhost";
$dbpassword = "";
try{
    $conn = new PDO("mysql:host=$dbhost;dbname=$dbname",
        $dbuser ,$dbpassword);
} catch(PDOException $e) {
    echo "Erreur de connexion : " . $e->getMessage();
    die();
}
?>