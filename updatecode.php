<?php
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection, 'sitewebhotel');

    if(isset($_POST['updatedata']))
    {   
        $id = $_POST['update_id'];
        
        $Nom = $_POST['Nom'];
        $Prenom = $_POST['Prenom'];
        $Telephone = $_POST['Telephone'];
        $Mail = $_POST['Mail'];

        $query = "UPDATE listedupersonnel SET Prenom='$Prenom', Nom='$Nom', Telephone='$Telephone', Mail='$Mail' WHERE id='$id'  ";
        $query_run = mysqli_query($connection, $query);

        if($query_run)
        {
            echo '<script> alert("Data Updated"); </script>';
            header("Location:index.php");
        }
        else
        {
            echo '<script> alert("Data Not Updated"); </script>';
        }
    }
