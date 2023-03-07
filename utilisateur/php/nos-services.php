<!-- DEBUT DE LA REQUÊTE SI CONNECTER OU NON-->
<?php
session_start();
if ($_SESSION['connecte'] != "oui") {
    header("Location: ../../authentification/connexion.php");
    /* <!-- FIN DE LA REQUÊTE SI CONNECTER OU NON -->*/
   /* <!-- DEBUT DE LA REQUÊTE DES COOKIES --> */
    if (isset($_GET['accepte-cookie'])) {
        setcookie('accepte-cookie', 'true', time() + 365 * 24 * 3600);
        header('location:nos-services.php');
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
    <title>Nos services</title>
</head>
<link rel="stylesheet" href="../../general_css/index-style.css">
<link rel="stylesheet" href="../../general_css/cookie-style.css">
<link rel="stylesheet" href="../css-utilisateur/style.css">
<body>

<!-- DEBUT DU HEADER -->
<div class="header_logo">
    <a href = "bienvenue.php"><img class="container-logo" src="../../general_img/logo.png">
</div>
<div class="header_menu">
    <a href="presentation-entreprise.php">Présentation entreprise</a>
    <a href="nos-services.php" class="container-menu">Pension</a>
    <a href="nous-contactez/nous-contactez.php" class="container-menu"> Nous contactez</a>
    <a href="../../authentification/deconnexion.php" class="header_menu" onclick="alert('Vous allez être déconnectée')" <button>Se déconnecter</button></a><br>
</div>
<!-- FIN DU HEADER -->

<!-- DEBUT DU BODY -->
<br>
<button onclick="window.location.href = 'pension/lambertsart.php';"> Lambertsart </button>
<button onclick="window.location.href = 'pension/vincennes.php';"> Vincennes </button>
<button onclick="window.location.href = 'pension/les_echets.php';"> Les echets </button>
<button onclick="window.location.href = 'pension/saran.php';"> Saran</button>
<button onclick="window.location.href = 'pension/coulmiers.php';"> Coulmiers </button>
<button onclick="window.location.href = 'pension/norges_la_ville.php';"> Norges la ville </button>
<button onclick="window.location.href = 'pension/landujan.php';"> Landujan </button>
<button onclick="window.location.href = 'pension/ormes.php';"> Ormes </button>
<button onclick="window.location.href = 'pension/lezoux.php';"> Lezoux </button>
<button onclick="window.location.href = 'pension/vabres_labbaye.php';"> Vabres l’Abbaye </button>
<button onclick="window.location.href = 'pension/saint_sauveur.php';"> Saint Sauveur </button>

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
    <div class="bouton-cookie noactive">

        <button class="cookie"><a href="?accepte-cookie">Ok j'accepte</a></button>
		<button class="cookie"><a href="">Je refuse</a></button>

    </div>
    <?php
    }
	
    ?>
<!-- FIN DE LA RUBRIQUE COOKIE -->
</html>