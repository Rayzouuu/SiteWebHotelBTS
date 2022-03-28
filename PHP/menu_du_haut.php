<html>

<head>
    <link rel="stylesheet" href="/CSS/style_page_menu.css" media="screen" type="text/css" />
</head>

<body>
    <div class="topnav">
        <a class="active" href="#home">Acceuil</a>
        <a href="Liste_du_personnel">Liste du Personnel</a>
        <a href="#contact">Liste de la Clientele </a>
        <a href="#search">Plan de l'hôtel</a>
        <div class="topnav-right">


            <a href='Page_connexion.php?deconnexion=true'><span>Déconnexion</span></a>
            <!-- tester si l'utilisateur est connecté -->
            <?php
            session_start();
            if (isset($_GET['deconnexion'])) {
                if ($_GET['deconnexion'] == true) {
                    session_unset();
                    header("location:Page_connexion.php");
                }
            }


            ?>



        </div>
    </div>
</body>

</html>