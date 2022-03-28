<html>

<head>


</head>

<body>
  <?php
  require('..\\Header_chambre.php');
  ?>


  <?php
  try {
    $bdd = new PDO('mysql:host=localhost;dbname=sitewebhotel', 'root', '');
  } catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
  }
  $req = $bdd->prepare("SELECT * FROM chambre WHERE IDChambre= '8'");
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

  <?php

  $req->closeCursor();

  ?>
  <div class="container" align="center">
    <button type="button" onclick=window.location.href='Liste_du_personnel_modif.php'>Modifier</button>
    <button type="button" onclick=window.location.href='Liste_du_personnel_supp.php'>Supprimer</button>
  </div>




</body>

</html>