<?php
if(isset($_GET['accepte-cookie'])){
    setcookie('accepte-cookie', 'true', time() + 365*24*3600);
    header('location:inscription.php');
}
?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inscription</title>
</head>
<link rel="stylesheet" href="../../../general_css/index-style.css">
<link rel="stylesheet" href="../../general_css/cookie-style.css">
<link rel="stylesheet" href="style_log.css">


<body>

<!--- HEADER --->
<div class="header_logo">
    <a href = "../index.php"><img class="container-logo" src="../general_img/logo.png">
</div>
<div class="header_menu">
    <a href="connexion.php" class="container-menu">Connexion</a>
    <a href="inscription.php" class="container-menu"> Inscription</a>
</div>
<!--- FIN DU HEADER --->

<!-- Formulaire d'inscription -->
<div class="inscription">
    <form method="post" action="requete_sql/requete_inscription.php" enctype="multipart/form-data">
        <h2>Inscription</h2>
        <input type="text" id="login" name="identifiant" placeholder="Identifiant" required><br><br>
        <input type="text" id="nom" name="nom" placeholder="Nom" required><br><br>
        <input type="text" id="prenom"  name="prenom" placeholder="Prenom" required><br><br>
        <input type="email" id="email" name="email" placeholder="nom@votredomaine.com" required><br><br>
        <input type="password" id="password" name="mdp" placeholder="Mot de passe" required><br><br>
            <a href = connexion.php><h4>Vous avez un compte ? Connecter vous</h4></a>

        <input type="submit"  name="valider" value="Vous inscrire">
    </form>
</div>
<!-- Fin formulaire d'inscription -->

<!-- Rubrique Cookie-->
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
<!-- Fin de la rubrique cookie-->

</body>
</html>