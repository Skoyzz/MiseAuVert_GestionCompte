<!-- DEBUT DE LA REQUÊTE SI CONNECTER OU NON-->
<?php
session_start();
if ($_SESSION['connecte'] != "oui") {
    header("Location: ../../authentification/connexion.php");
    /* <!-- FIN DE LA REQUÊTE SI CONNECTER OU NON -->*/
    /* <!-- DEBUT DE LA REQUÊTE DES COOKIES --> */
    if (isset($_GET['accepte-cookie'])) {
        setcookie('accepte-cookie', 'true', time() + 365 * 24 * 3600);
        header('location:nous-contactez.php');
    }
}
?>
<!-- FIN DE LA REQUÊTE DES COOKIES -->
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nous contactez</title>
</head>
<link rel="stylesheet" href="../../general_css/index-style.css">
<link rel="stylesheet" href="../css-utilisateur/style.css">
<link rel="stylesheet" href="../../general_css/cookie-style.css">

<body>

<!-- DEBUT DU HEADER -->
<div class="header_logo">
    <a href = "bienvenue.php"><img class="container-logo" src="../../general_img/logo.png">
</div>
<div class="header_menu">
    <a href="presentation-entreprise.php" class="container-menu"> Présentation de l'entreprise</a><br>
    <a href="nos-services.php" class="container-menu"> Nos services</a><br>
    <a href="hotel-canin.php" class="container-menu">Hôtel Canin</a><br>
    <a href="camping-canin.php" class="container-menu"> Le camping Canin</a><br>
    <a href="pension-feline.php" class="container-menu"> Pension féline</a><br>
    <a href="nous-contactez.php" class="container-menu"> Nous contactez</a><br>
    <a href="../../authentification/deconnexion.php" class="header_menu" onclick="alert('Vous allez être déconnectée')" <button>Se déconnecter</button></a><br>
</div>


<!-- FIN DU HEADER -->

<!-- DEBUT DU BODY -->
</body>
<!-- FIN DU BODY -->

<!-- DEBUT DE LA RUBRIQUE COOKIE-->
<?php
if(!isset($_COOKIE['accepte-cookie'])){
?>
<div class="banniere">
    <div class="text-cookie">
        <p>Notre site internet utilise les cookies pour une meilleure experience utilisateur</p>
    </div>
    <div class="bouton-cookie">
        <button><a href="?accepte-cookie">Ok j'accepte</a></button>
    </div>
    <?php
    }
    ?>
<!-- FIN DE LA RUBRIQUE COOKIE-->

</html>