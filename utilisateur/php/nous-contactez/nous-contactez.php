<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
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
<link rel="stylesheet" href="../../../general_css/index-style.css">
<link rel="stylesheet" href="../../../general_css/cookie-style.css">
<link rel="stylesheet" href="../../css-utilisateur/style.css">
<body>

<!-- DEBUT DU HEADER -->
<div class="header_logo">
    <a href = "../bienvenue.php"><img class="container-logo" src="../../../general_img/logo.png">
</div>
<div class="header_menu">
    <a href="presentation-entreprise.php">Présentation entreprise</a>
    <a href="../nos-services.php" class="container-menu"> Nos services</a>
    <a href="nous-contactez.php" class="container-menu"> Nous contactez</a>
    <a href="../../../authentification/deconnexion.php" class="header_menu" onclick="alert('Vous allez être déconnectée')" <button>Se déconnecter</button></a><br>
</div>

    <!-- Contenu de la page -->
    <h1>Nous contacter</h1>
    <form method="post" action="requete-ticket.php" enctype="multipart/form-data">
        <input type="text" id="title" name="title" placeholder="Titre de la demande" required><br><br>
        <input type="date" id="dateticket" name="dateticket"><br><br>
        <textarea id="demande" name="demande" rows="10" cols="53" placeholder="Indiquer votre demande"></textarea><br><br>
        <textarea id="commentaire" name="commentaire" rows="3" cols="40" placeholder="Commentaire facultatif"></textarea><br><br>
        <input type="file" id="file" name="file" accept="image/png, image/jpeg"><br><br>
        <input type="submit" value="Envoyer votre demande">
    </form>
    <!-- Fin du contenu de la page -->

    <!-- Bannière de cookies -->
    <?php
    if(!isset($_COOKIE['accepte-cookie'])) {
    ?>
        <div class="banniere">
            <div class="text-cookie">
                <p>Notre site utilise des cookies pour améliorer votre expérience utilisateur.</p>
            </div>
            <div class="bouton-cookie noactive">
                <button class="cookie"><a href="?accepte-cookie">J'accepte</a></button>
                <button class="cookie"><a href="">Je refuse</a></button>
            </div>
        </div>
    <?php
    }
    ?>
    <!-- Fin de la bannière de cookies -->
</body>
</html>
