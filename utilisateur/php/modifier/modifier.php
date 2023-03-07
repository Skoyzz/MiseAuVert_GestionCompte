<?php
// Démarrer la session
session_start();

// Vérifier si l'utilisateur est connecté ou non
if ($_SESSION['connecte'] != "oui") {
    // Rediriger vers la page de connexion si l'utilisateur n'est pas connecté
    header("Location: ../../authentification/connexion.php");
    // Arrêter l'exécution du code
    exit();
}

// Connexion à la base de données
$user = "root";
$pass = "root";
$pdo = 'mysql:dbname=mise_au_vert;host=localhost;charset=utf8';
$bdd = new PDO($pdo, $user, $pass);

// Vérifier si l'ID de la pension à modifier est présent dans l'URL
if (!isset($_GET['id']) || empty($_GET['id'])) {
    // Afficher un message d'erreur si l'ID n'existe pas ou est vide
    echo "ID non valide";
    exit();
}

// Récupérer l'ID de la pension à modifier depuis l'URL
$id = $_GET['id'];

// Requête pour récupérer les informations de tarification avec le type de gardiennage correspondant
$requete1 = "SELECT * FROM tarification 
        INNER JOIN pension 
            ON tarification.id_pension = pension.id 
        INNER JOIN typegardiennage 
            ON tarification.id_typegardinnage = typegardiennage.id
        WHERE pension.id = $id";

// Exécution de la requête et récupération des informations de tarification avec le type de gardiennage correspondant
$tarif = $bdd->query($requete1)->fetchAll();

// Récupération de tous les types de gardiennage disponibles
$type_gardiennage = $bdd->query("SELECT * FROM typegardiennage")->fetchAll();

// Vérifier si l'ID de la pension à modifier est présent dans l'URL
if (isset($_GET['id']) && !empty($_GET['id'])) {
    // Récupérer l'ID de la pension à modifier depuis l'URL
    $id = $_GET['id'];
    // Requête pour récupérer les informations de la pension à modifier
    $requete2 = "SELECT * FROM pension WHERE id = $id";
    // Exécution de la requête et récupération des informations de la pension à modifier
    $pension = $bdd->query($requete2)->fetch();
} else {
    // Afficher un message d'erreur si l'ID n'existe pas ou est vide
    echo "ID non valide";
    exit();
}

// Requête SQL pour récupérer le tarif correspondant à cette pension
$requete3 = $bdd->prepare('SELECT tarification.tarif FROM tarification 
INNER JOIN pension ON tarification.id_pension = pension.id 
WHERE pension.id = ? AND tarification.id_typegardinnage = ?');

$requete3->execute(array($id, $pension['tarification.tarif']));

// Si un tarif est trouvé pour cette pension, le stocker dans $tarif_pension
if ($requete3->rowCount() > 0) {
    $tarif_pension = $requete3->fetch(PDO::FETCH_ASSOC);
} 
// Sinon, stocker un message d'erreur dans $tarif_pension
else {
    $tarif_pension = array('tarif' => "Aucun tarif n'a été ajouté");
}
?>


    
    <!-- Affichage du formulaire de modification de la pension -->
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier</title>
</head>
<body>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Modifier</title>
</head>
<link rel="stylesheet" href="../../../general_css/index-style.css">
<link rel="stylesheet" href="../../../general_css/cookie-style.css">
<link rel="stylesheet" href="../../css-utilisateur/style.css">
<!-- DEBUT DU HEADER -->
<div class="header_logo">
    <a href = "../bienvenue.php"><img class="container-logo" src="../../../general_img/logo.png">
</div>
<div class="header_menu">
    <a href="../presentation-entreprise.php">Présentation entreprise</a>
    <a href="../nos-services.php" class="container-menu"> Nos services</a>
    <a href="nous-contactez.php" class="container-menu"> Nous contactez</a>
    <a href="../../../authentification/deconnexion.php" class="header_menu" onclick="alert('Vous allez être déconnectée')" <button>Se déconnecter</button></a><br>
</div>
    <body>
        <form method="POST" action="requete/traitement_modification.php">
            <!-- Champ caché contenant l'id de la pension à modifier -->
            <input type="hidden" name="id" value="<?= $pension['id'] ?>">
            <label for="types_gardiennage">Type de gardiennage :</label>
            <select name="types_gardiennage" id="types_gardiennage">

                <?php foreach ($type_gardiennage as $type): ?>
                    <!-- On crée une option pour chaque type de gardiennage disponible -->
                    <!-- La valeur de l'option correspond à l'identifiant du type de gardiennage -->
                    <!-- Le texte affiché dans l'option correspond au libellé du type de gardiennage -->
                    <option value="<?= $type['id'] ?>" <?= ($type['id'] == $pension['id']) ? 'selected' : '' ?>><?= $type['libelle'] ?></option>
                <?php endforeach; ?>
            </select>
            <br><br>
            <label for="prix">Prix :</label>
            <input type="text" name="tarif" id="tarif" value="<?= isset($tarif_pension['tarif']) ? $tarif_pension['tarif'] : '' ?>"><br><br><br>
            <input type="submit" value="Enregistrer les modifications">
        </form>
    </body>
    </html>