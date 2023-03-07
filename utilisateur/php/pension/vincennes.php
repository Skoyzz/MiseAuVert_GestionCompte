<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nos services</title>
</head>
<link rel="stylesheet" href="../../../../general_css/index-style.css">
<link rel="stylesheet" href="../.././general_css/cookie-style.css">
<link rel="stylesheet" href="../../css-utilisateur/style.css">
<body>

<!-- DEBUT DU HEADER -->
<div class="header_logo">
    <a href = "../bienvenue.php"><img class="container-logo" src="../../../general_img/logo.png">
</div>
<div class="header_menu">
    <a href="../presentation-entreprise.php">Présentation entreprise</a>
    <a href="../nos-services.php" class="container-menu"> Nos services</a>
    <a href="../nous-contactez.php" class="container-menu"> Nous contactez</a>
    <a href="../../../authentification/deconnexion.php" class="header_menu" onclick="alert('Vous allez être déconnectée')" <button>Se déconnecter</button></a><br>
</div>
<!-- FIN DU HEADER -->
<h3>Pension Vincennes</h3>
<?php
// Connexion à la base de données
$user = "root";
$pass = "root";
$pdo = 'mysql:dbname=mise_au_vert;host=localhost;charset=utf8';
$bdd = new PDO($pdo, $user, $pass);

$requete1 = "SELECT * FROM tarification 
        INNER JOIN pension 
            ON tarification.id_pension = pension.id 
        INNER JOIN typegardiennage 
            ON tarification.id_typegardinnage = typegardiennage.id
        WHERE pension.Ville = 'Vincennes'";


$resultat = $bdd->prepare($requete1);
$resultat->execute();

// Parcourir les résultats et afficher les valeurs liées à l'id
while ($donnees = $resultat->fetch()) {
    echo "Ville : " . $donnees['Ville'] . "<br>";
    echo "Type : " . $donnees['libelle'] . "<br>";
    echo "Tarif : " .$donnees['tarif']."€". "<br>" . "<br>";
}



// Vérifier le nombre de résultats
$nbreResult = $resultat->rowCount();
if ($nbreResult == 0) {
    echo "Aucun résultat trouvé.";
}

// Fermer la connexion à la base de données
$bdd = null;
?>


    </table>
    </ul>
    <?php
$resultat->closeCursor();
?>
        
<br><br>
<?php
session_start(); // démarre la session pour récupérer l'identité de l'utilisateur actuel
    ?>
</body>
</html>