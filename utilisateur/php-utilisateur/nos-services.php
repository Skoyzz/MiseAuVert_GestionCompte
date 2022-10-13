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
<br>

<div class="service">
    <p class="bain">Bain : Nous lavons votre chien avant son départ</p>
    <p class="promenade">Promenade : Une heure de balade dans un parc de détente</p>
    <p class="transport">Transport : Nous transportons votre compagnon de votre domicile à la pension</p>
</div>
<br><br>


<p>Lors de l’arrivé de votre animal chez nous, son carnet de santé est vérifié... plus de soucis à ce faire,
    retard dans les vaccins ou vaccination à venir notre partenaire vétérinaire passera dans la journée afin d’y remédier,
    il en sera de même pour ses rappels. Ses traitements antiparasitaires sont trop anciens ou à renouveler, il sera traité dès son accueil.</p>

<p>En cas, de problème médical de votre compagnon à quatre pattes, nous nous chargeons d’y remédier dans les plus brefs délais et de lui administrer son traitement suite au passage de notre partenaire vétérinaire.</p>
<p>Les frais médicaux seront à régler directement à notre partenaire.</p>

<h3>Visites de nos pensions :</h3>

<p>Sans rendez-vous de 8h30 à 12h et de 14h30 à 19h</p>
<p>Tous les jours sauf mardi après-midi, dimanche et jours fériés</p>

<h3>Accueil :</h3>

<p>Les dépôts et enlèvements de vos animaux de compagnies se font uniquement sur rendez-vous afin de personnaliser au mieux leur arrivé et d’y procéder dans les meilleurs conditions limitant ainsi le stress du changement d’environnement.</p>

<div class="tarif">
<h3>Tarifs TTC Euros / jour :</h3>

    <center><table border="1">
        <tr>
            <th></th>
            <td>Hôtel Canin</td>
            <td>Camping Canin</td>
            <td>Pension féline</td>
        </tr>
        <tr>
            <th>Lambertsart</th>
            <td>26</td>
            <td>12</td>
            <td>11</td>
        </tr>
        <tr>
            <th>Vincennes</th>
            <td>22</td>
            <td>11</td>
            <td>12</td>
        </tr>
        <tr>
            <th>Les Echets</th>
            <td>20</td>
            <td>10</td>
            <td>10</td>
        </tr>
        <tr>
            <th>Saran</th>
            <td>37</td>
            <td>14</td>
            <td>15</td>
        </tr>
        <tr>
            <th>Coulmiers</th>
            <td>28</td>
            <td>13</td>
            <td>13</td>
        <tr>
            <th>Norges la ville</th>
            <td>25</td>
            <td>10</td>
            <td>12</td>
        </tr>
        <tr>
            <th>Landujan</th>
            <td>25</td>
            <td>12</td>
            <td>12</td>
        </tr>
        <tr>
            <th>Ormes</th>
            <td>26</td>
            <td>12</td>
            <td>11</td>
        </tr>
        <tr>
            <th>Lezoux</th>
            <td>30</td>
            <td>14</td>
            <td>18</td>
        </tr>
        <tr>
            <th>Vabres l'Abbaye</th>
            <td>35</td>
            <td>12</td>
            <td>10</td>
        </tr>
        <tr>
            <th>Saint Saveur</th>
            <td>40</td>
            <td>15</td>
            <td>11</td>
        </tr>
        </tr>
    </table>
    <p>La grille générale des tarifs n’est pas directement accessible les tarifs sont consultables une fois une pension choisie.
        Les tarifs sont susceptibles d’évoluer, chaque pension gère ses propres tarifs.</p>
</div> <center>

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