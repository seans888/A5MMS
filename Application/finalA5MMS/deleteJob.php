<?php
    require_once 'core.php';

    $deleteid = $_GET['deleteid'];
    $row = mysql_query("SELECT * FROM job where job_id = '$deleteid'");
    $get_id = mysql_fetch_array($row);

    $deletequery = "DELETE FROM job WHERE job_id='$deleteid' ";

        if(mysql_query($deletequery)){
            header ('location: viewJob.php');          
        }else{  
            echo "<script>alert('Error Deleting')</script>".mysql_error();
        }   
?>

