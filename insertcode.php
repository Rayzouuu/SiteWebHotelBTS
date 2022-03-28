<?php

$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection, 'sitewebhotel');

if(isset($_POST['insertdata']))
{
    $Nom = $_POST['Nom'];
    $Prenom = $_POST['Prenom'];
    $Telephone = $_POST['Telephone'];
    $Mail = $_POST['Mail'];

    $query = "INSERT INTO listedupersonnel (`Nom`,`Prenom`,`Telephone`,`Mail`) VALUES ('$Nom','$Prenom','$Telephone','$Mail')";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        echo '<script> alert("Data Saved"); </script>';
        header('Location: index.php');
    }
    else
    {
        echo '<script> alert("Data Not Saved"); </script>';
    }
}

?>