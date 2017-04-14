<?php
    require_once 'core.php';
    
    $getClient = mysql_query("SELECT * from client");

    $updateid = $_GET['updateid'];
    $row = mysql_query("SELECT * FROM job where job_id = '$updateid'");
    $get_id = mysql_fetch_array($row);

    if(isset($_POST['editBtn'])) {
        $ejname = $_POST['ejname'];
        $ejstatus = $_POST['ejstatus'];
        $ejslots = $_POST['ejslots'];
        $ejid = $_POST['ejid'];

    $editquery = "UPDATE job SET job_name='$ejname', job_status='$ejstatus',
    job_slots='$ejslots' WHERE job_id='$ejid' ";

        if(mysql_query($editquery)){
            header("location: viewJob.php"); 
        }else{  
            echo "<script>alert('Error Updating')</script>".mysql_error();
        }

    }   
?>

<!DOCTYPE html >
<html>
<head>
    <title>ADMIN</title>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/custom/css/manageClient.css">
    <!-- jquery plugin -->
    <script type="text/javascript" src="assets/jquery/jquery.min.js"></script>
    <!-- bootstrap js -->
    <script type="text/javascript" src="assets/bootstrap/js/bootstrap.min.js"></script>
</head>

<body>
<?php require_once 'adminPanel.php';?>
  
    <div class="col-lg-4 col-lg-offset-5" id="title">
        <p>UPDATE JOB</p>
    </div>

    <div class="col-lg-6 col-lg-offset-4">

        <form class="form-horizontal" action="updateJob.php" method="POST">

            <div class="form-group">
                <label for="ejname" class="col-sm-2 control-label">Job Name</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="ejname" placeholder="Job Name" 
                        value="<?php echo $get_id['job_name']?>" required="true"/>
                    </div>
            </div>

            <div class="form-group"> 
                <label for="ejstatus" class="col-sm-2 control-label">   Job Status</label>
                    <div class="col-sm-3">
                        <input type="text" disabled class="form-control" value="<?php echo $get_id['job_status']?>">
                    </div>

                    <div class="col-sm-3">

                        <select class="form-control" name="ejstatus" required="true">
                            <option value="">SELECT</option>
                            <option>Available</option>
                            <option>Not Available</option>                                
                        </select> 
                    </div>
            </div>

            <div class="form-group">
                <label for="ejslots" class="col-sm-2 control-label">Job Slots</label>
                    <div class="col-sm-6">
                        <input type="number" class="form-control" name="ejslots" placeholder="Job Slots" 
                        value="<?php echo $get_id['job_slots']?>" required="true"/>
                    </div>
            </div>

            <input type="hidden" name="ejid" value="<?php echo $get_id['job_id']?>"> 

            <br/><br/>

            <button type="submit" class="btn btn-primary col-lg-offset-4" name="editBtn">
            <span class="glyphicon glyphicon-edit"></span> Update Job</button>

        </form>
    </div>

    <?php
        mysql_close();
    ?>


</body>
</html>
