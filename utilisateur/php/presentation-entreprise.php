<?php
    /* <!-- DEBUT DE LA REQUÊTE DES COOKIES --> */
    if (isset($_GET['accepte-cookie'])) {
        setcookie('accepte-cookie', 'true', time() + 365 * 24 * 3600);
        header('location:presentation-entreprise.php');
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
    <title>Présentation de l'entreprise</title>
</head>
<link rel="stylesheet" href="../../general_css/index-style.css">
<link rel="stylesheet" href="../css-utilisateur/style.css">
<link rel="stylesheet" href="../../general_css/cookie-style.css">

<body>
<!-- DEBUT DU HEADER -->
<div class="header_logo">
    <a href = "../../index.php"><img class="container-logo" src="../../general_img/logo.png">
</div>

<div class="header_menu">
    <a href="presentation-entreprise.php">Présentation entreprise</a>
    <a href="nos-services.php" class="container-menu"> Nos services</a>
    <a href="nous-contactez.php" class="container-menu"> Nous contactez</a>
    <a href="../../authentification/deconnexion.php" class="header_menu" onclick="alert('Vous allez être déconnectée')" <button>Se déconnecter</button></a><br>
</div>

<!-- DEBUT DU BODY -->

<h3> Présentation de l’entreprise : </h3>

<p>Les pensions « La mise au vert » est un groupement de 11 pensions pour chiens et chats reparties sur le territoire de la France métropole : <p>

<p> - 65 rue jean Jaures 59130 Lambertsart (tél. 03.20.00.11.22)
<p>- 03 rue Faie Felix, 94300 Vincennes (tél. 01.05.01.21.22)
<p>- 1707 ch Rosarges, 01700 Les Echets (tél. 04.54.12.25.78)
<p>- Za Des Sables De Sary 53 all Georges Charpak, 45770 Saran (tél. 04.56.62.84.55)
<p>- Les Basses Fontaines, 45130 Coulmiers (tél. 05.77.44.51.84)
<p>- 7 r Sources, 21490 Norges la ville (tél. 07.63.22.25.74)
<p>- Le Plessix Coudray, 35360 Landujan (tél. 02.95.72.85.86)
<p>- rte de Dormans RD 980, 51370 Ormes (tél. 09.47.21.25.66)
<p>- rte de Ravel, 63190 Lezoux (tél. 05.54.63.77.15)
<p>- 11 r Montcamp, 12400 Vabres l’Abbaye (tél. 04.56.28.36.58)
<p>- 590 chem Saint Vaast, 80470 Saint Sauveur (tél. 03.10.12.57.38)

<br>Avec nos pensions pour chiens et chats, partez tranquille !
<br><br>

<center><p> Depuis 1976, nous accueillons votre compagnon dans nos pensions pour chiens et chats dans un environnement agréable
    à la campagne. Nous sommes situés à proximité de Lille, Paris, Lyon, Orléans, Bordeaux, Dijon, Rennes, Reims, Clermont Ferrand, Millau, Amiens.
    Pour de court et longs séjours, votre animal sera hébergé dans les meilleures conditions. Notre expérience et notre histoire, c’est avant tout
    le partage de notre passion, nos prestations sont de qualités afin d’assurer le bien-être de nos chers chiens et chats. </p></center>

<br><br>

<p> Les pensions « La mise au vert » est une Scop SARL dont les parts sont réparties comme suit entre les salariés associés : </p>

<p> - 10% Mme Lali Masse, instigatrice des pensions, Lambertsart, élue dirigeante</p>
<p> - 9% Mme Cary Bou, Vincennes</p>
<p> - 9% Mme Cathy Greu, Les echets</p>
<p> - 9% M. Filippo Potame, Coulmiers</p>
<p> - 9% M. Salah Mandre, Norges la ville</p>
<p> - 9% Mme Claudia Bleu de Tasmasnie, Saran</p>
<p> - 9% M. Odin Don, Landujan</p>
<p> - 9% Mme Lucie Ole, Ormes</p>
<p> - 9% M. Camel Eon, Lezoux</p>
<p> - 9% M. Bernard Val, Vabres l’abbaye</p>
<p> - 9% Mme Lou Treux De Mer, Saint sauveur</p>
<p> Il est tout à fait possible que d’autres pensions viennent rejoindre la scop.</p>
<p> L’entreprise est soumise à la TVA.</p>


<br><br>
    <p>Plus d’information sur les Scop SARL : <a href="https://www.creerentreprise.fr/statut-scop-definition-creation/">Statut Scop</a>
<br><br>
    <p>Les pensions "La mise au vert" sont affiliées au Syndicat National des professions du chien et du chat (SNPCC) et sont soumis au code rural concernant leur activité :  <a href "https://www.snpcc.com/pension">La SNPCC - Pension</a></p>
    <p>Les pensions "La mise au vert" sont partenaires SPA : <a href="https://www.la-spa.fr">La SPA</a></p>
</div>
<br><br><br><br>
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