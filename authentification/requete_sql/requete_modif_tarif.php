<! debut du body -->
<body>
<div>
        <?php
        include("dbconnexion.php");
        $reponse = $conn->query('SELECT * FROM tarif WHERE id='.$_GET['id']);
        $donnees = $reponse->fetch();

        echo '<form action="requete_tarif_reussi.php" method="post">
        
             <input type="text" name="hotelcanin" value="' . $donnees['hotelcanin'] . '"/>

            <input type="text" name="campingcanin"  value="' . $donnees['campingcanin'] . '"/>

           <input type="text" name="pensionfeline"  value="' . $donnees['pensionfeline'] . '"/>

           <input type="hidden" name="id" value="' . $donnees['id'] . '"/>
        <input type="submit" value="Modifier le stock"/>';

        ?>
    </div>
    <! fin du body -->
