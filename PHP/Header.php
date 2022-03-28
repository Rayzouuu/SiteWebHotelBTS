<?php
// Variable qui nous donnes le nom du fichier php dans le quel nous somme
$nompage = basename($_SERVER['PHP_SELF']);




?>

<title>NextBedroom</title>
<link rel="icon" type="image/x-icon" href="../images/logohotel.png">

<link rel="stylesheet" href="../CSS/style_menu_du_haut_accueil.css" media="screen" type="text/css" />
<link rel="stylesheet" href="../CSS/style_bouton.css" media="screen" type="text/css" />
<link rel="stylesheet" href="../CSS/style_tableau.css" media="screen" type="text/css" />


<nav>

    <ul class="snip1143">

        <?php
        // si le nom du fichier php correspond a la pages voulue on affiche avec la classe current
        if ($nompage == "testmenu.php") {
        ?>
            <li class="current"><a href="testmenu" data-hover="Accueil">Accueil</a></li>
        <?php
            // sinon on affiche le lien normalement
        } else {
        ?>
            <li><a href="testmenu" data-hover="Accueil">Accueil</a></li>
        <?php
        }


        if ($nompage == "Liste_du_personnel.php") {
        ?>
            <li class="current"><a href="Liste_du_personnel" data-hover="Liste du personnel">Liste du personnel</a></li>
        <?php
        } else {
        ?>

            <li><a href="Liste_du_personnel" data-hover="Liste du personneleil">Liste du personnel </a></li>
        <?php
        }


        if ($nompage == "Liste_de_la_clientele.php") {
        ?>
            <li class="current"><a href="Liste_de_la_clientele" data-hover="Liste de la clientele">Liste de la clientele</a></li>

        <?php
        } else {
        ?>
            <li><a href="Liste_de_la_clientele" data-hover="Liste de la clientele">Liste de la clientele</a></li>
        <?php
        }


        if ($nompage == "Plan_Hotel.php") {
        ?>
            <li class="current">
                <a href="Plan_Hotel" data-hover="Plan de l'hotel">Plan de l'hotel</a>
            </li>
        <?php
        } else {
        ?>
            <li><a href="Plan_Hotel" data-hover="Plan de l'hotel">Plan de l'hotel</a></li>
        <?php
        }
        ?>




        <li><a href="Page_connexion.php?deconnexion=true" data-hover="Déconnexion">Déconnexion</a></li>
        <?php
        session_start();
        if (isset($_GET['deconnexion'])) {
            if ($_GET['deconnexion'] == true) {
                session_unset();
                header("location:Page_connexion.php");
            }
        }
        ?>
    </ul>
</nav>