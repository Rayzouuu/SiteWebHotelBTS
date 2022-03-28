<!DOCTYPE html>
<html>

<head>


</head>

<body>


    <?php
    require('Header.php');
    ?>

    <!-- Recuperation des données de la BDD -->
    <?php
    try {
        $bdd = new PDO('mysql:host=localhost;dbname=sitewebhotel', 'root', '');
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }
    $req = $bdd->prepare('SELECT * FROM listedupersonnel');
    $req->execute(array());
    ?>

    <table class="orders_details" width="100%" border="2" cellspacing="0" cellpadding="5" style="text-align:center">
        <tr>
            <th>Identifiant</th>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Adresse E-mail</th>
            <th>Telephone</th>
            <th>Numero Salaries</th>
        </tr>
        <?php
        while ($donnees = $req->fetch()) { ?>
            <tr>
                
                <td><?php echo $donnees['id'] ?></td>
                <td><?php echo $donnees['Prenom'] ?></td>
                <td><?php echo $donnees['Nom'] ?></td>
                <td><?php echo $donnees['Mail'] ?></td>
                <td><?php echo $donnees['Telephone'] ?></td>
                <td><?php echo $donnees['numsalaries'] ?></td>
            </tr>
        <?php } ?>
    </table>

    <?php

    $req->closeCursor();

    ?>

    <div class="container" align="center">
        <button type="button" onclick=window.location.href='Liste_du_personnel_modif.php'>Modifier</button>
        <button type="button" onclick=window.location.href='Liste_du_personnel_ajout.php'>Ajouter</button>
        <button type="button" onclick=window.location.href='Liste_du_personnel_supp.php'>Supprimer</button>
    </div>


</body>

</html>





</body>

</html>