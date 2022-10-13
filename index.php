<!-- DEBUT DE LA REQUÊTE DES COOKIES -->
<?php
if(isset($_GET['accepte-cookie'])){
    setcookie('accepte-cookie', 'true', time() + 365*24*3600);
    header('location:index.php');
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
    <title>Accueil - Mise au vert</title>
</head>
<link rel="stylesheet" href="general_css/index-style.css">
<link rel="stylesheet" href="general_css/cookie-style.css">
<body>

<!-- DEBUT DU HEADER -->
<div class="header_logo">
    <a href = "index.php"><img class="container-logo" src="general_img/logo.png">
</div>
<div class="header_menu">
    <a href="authentification/connexion.php" class="container-menu">Connexion</a>
    <a href="authentification/inscription.php" class="container-menu"> Inscription</a>
</div>
<!-- FIN DU HEADER -->


<!-- DEBUT DU BODY -->
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