<?php
try {
    $db = new PDO('mysql:host=localhost;dbname=sitewebhotel;charset=utf8', 'root', '');
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}


$EtaChambre = $db->prepare('SELECT `IDChambre`,`EtatChambre` FROM `chambre` ');
$EtaChambre->execute();
$Etat = $EtaChambre->fetchAll();

foreach ($Etat as $Etat) {
?>
    <p><?php echo $Etat['EtatChambre']; ?></p>
    <p><?php echo $Etat['IDChambre']; ?></p>
<?php
}

?>
<?php

if ($Etat['EtatChambre'] == 'Fait') {

    $changementcouleur = "1";
}

if ($Etat['EtatChambre'] == 'Non Fait') {

    $changementcouleur = "0";
}


?>