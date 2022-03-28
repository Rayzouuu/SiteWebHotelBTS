<!DOCTYPE html>
<html>

<head>

    <link href='https://fonts.googleapis.com/css?family=Rock+Salt' rel='stylesheet' type='text/css'>

    <meta name="viewport" content="width=device-width, initial-scale=1">



    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>



<body>

    <?php
    require('Header.php');
    ?>


    <?php
    try {
        $bdd = new PDO('mysql:host=localhost;dbname=sitewebhotel', 'root', '');
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }
    $req = $bdd->prepare('SELECT * FROM listedelaclientele');
    $req->execute(array());
    ?>

    <table class="orders_details" width="100%" border="2" cellspacing="0" cellpadding="5" style="text-align:center">
        <tr>
            <th>Identifiant</th>
            <th>Prenom</th>
            <th>Nom</th>
            <th>Adresse E-mail</th>
            <th>Telephone</th>
            <th>Numero de chambre </th>
        </tr>
        <?php
        while ($donnees = $req->fetch()) { ?>
            <tr>
                <td><?php echo $donnees['id'] ?></td>
                <td><?php echo $donnees['Prenom'] ?></td>
                <td><?php echo $donnees['Nom'] ?></td>
                <td><?php echo $donnees['Mail'] ?></td>
                <td><?php echo $donnees['Telephone'] ?></td>
                <td><?php echo $donnees['numchambre'] ?></td>
            </tr>
        <?php } ?>
    </table>

    <?php

    $req->closeCursor();

    ?>
    <div class="container" align="center">
        <button type="button" onclick=window.location.href='Liste_de_la_clientele_modif.php'>Modifier</button>
        <button type="button" onclick=window.location.href='Liste_de_la_clientele_ajout.php'>Ajouter</button>
        <button type="button" onclick=window.location.href='Liste_de_la_clientele_supp.php'>Supprimer</button>
    </div>


</body>

</html>























</body>

</html>