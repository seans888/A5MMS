<?php
    require_once 'core.php';

    $deleteid = $_GET['deleteid'];
    $row = mysql_query("SELECT * FROM applicant where app_id = '$deleteid'");
    $get_id = mysql_fetch_array($row);

    $deletequery = "DELETE FROM applicant WHERE app_id='$deleteid' ";

        if(mysql_query($deletequery)){
            header ('location: viewApp.php');          
        }else{  
            echo "<script>alert('Error Deleting')</script>".mysql_error();
        }   
?>

