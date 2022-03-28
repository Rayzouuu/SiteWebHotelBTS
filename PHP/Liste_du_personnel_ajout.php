<html>

<head>

    <link rel="stylesheet" href="/PHP/../CSS/style_form.css" media="screen" type="text/css" />
    
</head>

<body>
    
<nav>
    <?php
    require('Header_chambre.php');
    ?>
</nav>



    <form action="insertcode.php" method="post" class="form-style-7">
        <ul>
            <li>
                <label for="name">Nom</label>
                <input type="text" autocomplete="off" id="Nom" name="Nom" maxlength="30">

            </li>
            <li>
                <label for="prenom">Prénom</label>
                <input  type="text" autocomplete="off" id="Prenom" name=Prenom" maxlength="30">

            </li>
            <li>
                <label for="numero">N° de Téléphone</label>
                <input  type="text" autocomplete="off" id="Telephone"  name="Telephone" maxlength="10">

            </li>
            <li>
                <label for="mail">Adresse E-mail</E-mail></label>
                <input  type="email" autocomplete="off" id="Mail"  name="Mail" maxlength="40">

            </li>
            <li>
                <input type="submit" value="Envoyer">
            </li>
        </ul>
    </form>


</body>

</html>