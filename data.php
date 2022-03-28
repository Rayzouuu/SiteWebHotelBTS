<?php

// getting data form database


$conn = mysqli_connect("localhost", "root", "","sitewebhotel");

//getting data from chambre table chambre
$result = mysqli_query($conn,"SELECT `IDChambre`,`EtatChambre` FROM `chambre` ");

//storring in array

$data =array();
while ($row = mysqli_fetch_assoc($result))
{
    $data[] = $row;
}

echo json_encode($data);

?>