<html>

<head>

    <meta charset="utf-8">
    <!-- importer le fichier de style -->
    <link rel="stylesheet" href="/CSS/style_page_connexion.css" media="screen" type="text/css" />
    <link rel="stylesheet" href="../CSS/style_menu_du_haut_accueil.css" media="screen" type="text/css" />
    <style>

    </style>




</head>

<body>
    <label>
        <div id="container">
            <!-- zone de connexion -->

            <form action="verification.php" method="POST">

                <h1>Connexion</h1>

                <label><b>Nom d'utilisateur</b></label>
                <input type="text" placeholder="Entrer le nom d'utilisateur" name="username" required>


                <div id="label2">
                    <b>Mot de passe</b>
                    <input type="password" placeholder="Entrer le mot de passe" name="password" required>

                    <div class="password-icon">
                        <i data-feather="eye"></i>
                        <i data-feather="eye-off"></i>
                    </div>

                    <script src="https://unpkg.com/feather-icons"></script>
                    <script>
                        feather.replace();
                    </script>




                    <br><br>

                    <input type="submit" id='submit' value='LOGIN'>
                    <?php
                    if (isset($_GET['erreur'])) {
                        $err = $_GET['erreur'];
                        if ($err == 1 || $err == 2)
                            echo "<p style='color:red'>Utilisateur ou mot de passe incorrect</p>";
                    }
                    ?>
                </div>
            </form>
        </div>

    </label>
</body>

<footer>
    <script src="/PHP/../JavaScript/script.js"></script>
</footer>




</html>