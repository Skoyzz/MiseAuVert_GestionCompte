<?php
include "dbconnexion.php" ;

$Ahotelcanin=$_POST['hotelcanin'];
$Acampingcanin=$_POST['campingcanin'];
$Apensionfeline=$_POST['pensionfeline'];



$id = $_POST['id'];
if(isset($_POST["hotelcanin"]) && isset($_POST["campingcanin"]) && isset($_POST["pensionfeline"])) {
    $sql = $conn->prepare("UPDATE tarif SET 
    
    hotelcanin = '$Ahotelcanin',
    campingcanin = '$Acampingcanin',
    pensionfeline = '$Apensionfeline'
    
             
    WHERE id = '$id'  ");
    $sql->execute();
}


header("location: ../../../../utilisateur/php-utilisateur/nos-services.php");

?>
