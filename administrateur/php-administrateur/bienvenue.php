<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bienvenue</title>
</head>
<link rel="stylesheet" href="../css-admin/style.css">
<link rel="stylesheet" href="../../general_css/index-style.css">
<link rel="stylesheet" href="../../general_css/cookie-style.css">

<body>

<!-- DEBUT DU HEADER -->
<div class="header_logo">
    <a href = "bienvenue.php"><img class="container-logo" src="../../general_img/logo.png">
</div>
<div class="header_menu">
    <a href="../../authentification/deconnexion.php" class="header_menu" onclick="alert('Vous allez être déconnectée')" <button>Se déconnecter</button></a><br>
</div>
<!-- FIN DU HEADER -->

<!-- DEBUT DU BODY -->

<center><h1>Bienvenue Administateur !</h1></center>
   <br><br>
   <center> <img src="../img-admin/construction_website.jpg"></center>
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