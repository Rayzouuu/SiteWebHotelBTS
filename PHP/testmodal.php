<html>

<head>

  <script src="/PHP/../JavaScript/script.js"></script>
  <link rel="stylesheet" href="/PHP/../CSS/style_modal.css" media="screen" type="text/css" />
  <link rel="stylesheet" href="/PHP/../CSS/style_tableau.css" media="screen" type="text/css" />

</head>

<body>
  <div class="section full-height">
    <input class="modal-btn" type="checkbox" id="modal-btn" name="modal-btn" />
    <label for="modal-btn"> Chambre 201 <i class="uil uil-expand-arrows"></i></label>
    <div class="modal" id="modal">
      <div class="modal-wrap">


        <?php
        try {
          $bdd = new PDO('mysql:host=localhost;dbname=sitewebhotel', 'root', '');
        } catch (Exception $e) {
          die('Erreur : ' . $e->getMessage());
        }

        $req = $bdd->prepare("SELECT * FROM chambre WHERE IDChambre= '201'");
        $req->execute(array());
        ?>


        <table class="orders_details" width="100%" border="2" cellspacing="0" cellpadding="5" style="text-align:center">
          <tr>
            <th>Prenom</th>
            <th>Nom</th>
            <th>Etat de la Chambre</th>
            <th>Dernier Nettoyage</th>
          </tr>
          <?php
          while ($donnees = $req->fetch()) { ?>
            <tr>

              <td><?php echo $donnees['Prenom'] ?></td>
              <td><?php echo $donnees['Nom'] ?></td>
              <td><?php echo $donnees['EtatChambre'] ?></td>
              <td><?php echo $donnees['DernierNettoyage'] ?></td>

            </tr>
          <?php } ?>
        </table>


      </div>
    </div>

    <a href="https://front.codes/" class="logo" target="_blank">

    </a>
  </div>

</body>

</html>