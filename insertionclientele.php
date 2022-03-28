<?php

$objetPdo = new PDO('mysql:host=localhost;dbname=sitewebhotel','root','');

$pdoStat = $objetPdo->prepare('INSERT INTO listedelaclientele VALUES (NULL, :Nom, :Prenom, :Telephone, :Mail,)');


$pdoStat->bindValue(':Nom', $_POST['name'], PDO::PARAM_STR);
$pdoStat->bindValue(':Prenom', $_POST['prenom'], PDO::PARAM_STR);
$pdoStat->bindValue(':Telephone', $_POST['numero'], PDO::PARAM_STR);
$pdoStat->bindValue(':Mail', $_POST['mail'], PDO::PARAM_STR);

$insertIsOk = $pdoStat->execute();


if($insertIsOk){

$message = "La fiche du personnel a bien été mise a jour";

}
else{

    $message = "Echec de l'insertion ";


}
?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset ="UTF-8">
    <meta bame="viewport"
    content="width=device-witdh, user-scalbale=no, initial-sclae-1.0, maximum-scale=1.0,
minimum-scale=1.0">
<meta http-equiv="X-UA-Compatible" content ="ie=edge">
<title>Next Bedrooms</title>
<link rel="stylesheet" href="/PHP/../CSS/style_menu_du_haut_accueil.css" media="screen" type="text/css" />
</head>

<Body>
<ul class="snip1143">

<FONT size=" 20"><li class="current"><a href=""  onclick="return false;" data-hover="Insertion a la liste de clientele">Insertion a la liste de clientele</a></li></FONT> 

<FONT size=" 20"><li ><a href="Liste_de_la_clientele_ajout.php"data-hover="<?php echo $message; ?>"><?php echo $message; ?></a></li></FONT> 
   
    
</ul>
</Body>











</html>