<?php
    require_once 'core.php';

    $deleteid = $_GET['deleteid'];
    $row = mysql_query("SELECT * FROM client where client_id = '$deleteid'");
    $get_id = mysql_fetch_array($row);

    $deletequery = "DELETE FROM client WHERE client_id='$deleteid' ";

        if(mysql_query($deletequery)){
            header ('location: viewClient.php');          
        }else{  
            echo "<script>alert('Error Deleting')</script>".mysql_error();
        }   
?>

