<!-- DEBUT DE LA REQUÊTE SI CONNECTER OU NON -->
<?php
session_start();
if ($_SESSION['connecte'] != "oui") {
    header("Location: ../../authentification/connexion.php");
    /* <!-- FIN DE LA REQUÊTE SI CONNECTER OU NON --> */
    /* <!-- DEBUT DE LA REQUÊTE DES COOKIES --> */
    if (isset($_GET['accepte-cookie'])) {
        setcookie('accepte-cookie', 'true', time() + 365 * 24 * 3600);
        header('location:hotel-canin.php');
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
    <title>Nos Formules</title>
</head>
<link rel="stylesheet" href="../../general_css/cookie-style.css">
<link rel="stylesheet" href="../../general_css/index-style.css">
<link rel="stylesheet" href="../css-utilisateur/style.css">
<body>
<!-- DEBUT DU HEADER -->
<div class="header_logo">
    <a href = "bienvenue.php"><img class="container-logo" src="../../general_img/logo.png"></a>
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

<!-- IMAGE -->
<br><br>
<div class="img-formules">
    <img class="saintsaveur" src="../../general_img/formule_saintsaveur.png"></a>
    <img class="norgeslaville"  src="../../general_img/formules_norgeslaville.png"></a>
</div>
<!-- FIN DES IMAGES -->

<!-- DEBUT DU BODY -->
<br><br>
<h3 class="formules">Nos formules : </h3>
    Hôtel canin : L’hôtel canin, c’est la solution confort pour votre chien ! Il pourra évoluer à sa convenance dans son espace intérieur et sa cour privative. </h3>
<p> Cet hébergement a été étudié pour convenir à tous types de chien. </p>
<p> Le box intérieur chauffé et son parcours extérieur de 15 à 25 m2. </p>
<p> Cet hébergement est idéal en hiver et pour les séjours court ou longue durée afin de leur permettre de s’abriter après une longue partie de jeu, et se reposer dans un espace « comme à la maison ».</p>

<h3 class="inclus"> INCLUS : </h3>
<p>• Box individuel & chauffé </p>
<p>• Aménagement au goût du propriétaire</p>
<p>• Parcours extérieur</p>
<p>• Alimentation Royal Canin</p>
</body>
<!-- FIN DU BODY -->

<!-- DEBUT DE LA RUBRIQUE COOKIE -->
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
<!-- FIN DE LA RUBRIQUE COOKIE -->

</html>