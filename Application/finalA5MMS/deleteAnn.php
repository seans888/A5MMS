<?php
    require_once 'core.php';

    $deleteid = $_GET['deleteid'];
    $row = mysql_query("SELECT * FROM announcement where ann_id = '$deleteid'");
    $get_id = mysql_fetch_array($row);

    $deletequery = "DELETE FROM announcement WHERE ann_id='$deleteid' ";

        if(mysql_query($deletequery)){
            header ('location: viewAnnounce.php');          
        }else{  
            echo "<script>alert('Error Deleting')</script>".mysql_error();
        }   
?>

