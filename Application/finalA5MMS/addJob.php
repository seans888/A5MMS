<?php
    require_once 'core.php';

    if(isset($_POST['addBtn'])) {
        $jname = $_POST['jname'];
        $jstatus = $_POST['jstatus'];
        $jslots  = $_POST['jslots'];

    $addquery = "INSERT INTO job (job_name,job_status,job_slots) 
    values ('$jname','$jstatus', '$jslots')";

        if(mysql_query($addquery)){
            echo "<script>alert('Successfully Added')</script>";            
        }else{
            echo "<script>alert('Error Adding')</script>".mysql_error();
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
        <p>ADD NEW JOB</p>
    </div>

    <div class="col-lg-6 col-lg-offset-5">

        <form class="form-horizontal" action="addJob.php" method="POST">

            <div class="form-group">
                <label for="jname" class="col-sm-2 control-label">Job Name</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="jname" placeholder="Job Name" required="true"/>
                    </div>
            </div>

            <div class="form-group"> 
                <label for="jstatus" class="col-sm-2 control-label">Job Status</label>
                    <div class="col-sm-3">   
                        <select class="form-control" name="jstatus" required="true">
                            <option value="">SELECT</option>
                            <option>Available</option>
                            <option>Not Available</option>
                        </select> 
                    </div>
            </div>

            <div class="form-group">
                <label for="jname" class="col-sm-2 control-label">Job Slots</label>
                    <div class="col-sm-6">
                        <input type="number" class="form-control" name="jslots" placeholder="Job Slots" required="true"/>
                    </div>
            </div>

            <br/><br/>

            <button type="submit" class="btn btn-success col-lg-offset-2" name="addBtn"><span class="glyphicon glyphicon-plus-sign">
            </span> Add New Job</button>

        </form>
    </div>

</body>
</html>
