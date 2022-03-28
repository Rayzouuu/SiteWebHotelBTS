<?php
try {
          $bdd = new PDO('mysql:host=localhost;dbname=sitewebhotel', 'root', '');
        } catch (Exception $e) {
          die('Erreur : ' . $e->getMessage());
        }

        $req = $bdd->prepare("SELECT * FROM chambre WHERE IDChambre= '1'");
        $req->execute(array());
        ?>