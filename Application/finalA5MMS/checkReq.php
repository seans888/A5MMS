<?php require_once 'core.php'; 

    $checkid = $_GET['checkid'];
    $row = mysql_query("SELECT * FROM applicant where app_id = '$checkid'");
    $get_id = mysql_fetch_array($row);

    $req = mysql_query("SELECT * FROM requirement where app_id = '$checkid'");
    $get_req = mysql_fetch_array($req);

    /*$jobs = mysql_query("SELECT * FROM client LEFT JOIN job ON 
    client.client_id = job.client_id LEFT JOIN job_history ON job.job_id = job_history.job_id
    where emp_id = '$viewid'");*/   

    if(isset($_POST['addBtn'])) {
        $mandReq = $_POST['mandReq'];
        $interview = $_POST['interview'];
        $orient = $_POST['orient'];
        $training = $_POST['training'];
        $appid = $_POST['appid'];

        $addquery = "INSERT INTO requirement(mandRequire,interview,orientation,
        training,app_id) VALUES ('$mandReq','$interview','$orient','$training','$appid')";

        if(mysql_query($addquery)){
           header("location: viewApp.php");              
        }else{
            echo "<script>alert('Error Adding')</script>".mysql_error();
        }
    }

    if(isset($_POST['editBtn'])) {
        $mandReq = $_POST['mandReq'];
        $interview = $_POST['interview'];
        $orient = $_POST['orient'];
        $training = $_POST['training'];
        $appid = $_POST['appid'];

        $editquery = "UPDATE requirement SET mandRequire='$mandReq',interview='$interview',orientation='$orient',
        training='$training' where app_id='$appid'";

        if(mysql_query($editquery)){
            header("location: viewApp.php");              
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
        <p>Check Requirements</p>
    </div>

<div class="col-lg-5 col-lg-offset-4">
    
    <form class="form-horizontal" action="checkReq.php" method="POST">
         
        <div class="form-group">
                <label class="col-sm-3 col-sm-offset-1 control-label">App ID</label> 
                    <div class="col-sm-4"> 
                        <label class="form-control"><?php echo $get_id['app_id']?></label>
                    </div>
            </div>

            <div class="form-group"> 
                <label class="col-sm-3 col-sm-offset-1 control-label">Last Name</label> 
                    <div class="col-sm-6"> 
                        <label class="form-control"><?php echo $get_id['app_lname']?></label>
                    </div>
            </div>

            <div class="form-group"> 
                <label class="col-sm-3 col-sm-offset-1 control-label">First Name</label> 
                    <div class="col-sm-6"> 
                        <label class="form-control"><?php echo $get_id['app_fname']?></label>
                    </div>
            </div>

            <input type="hidden" name="appid" value="<?php echo $get_id['app_id']?>">

        <fieldset style="background-color:lightblue;">
            <legend>CHECKLIST</legend>

                <div class="form-group">
                    <label class="col-sm-5 col-sm-offset-1 control-label">Mandatory Requirements</label> 
                        <div class="col-sm-4"> 
                            <select class="form-control" name="mandReq" required="true">
                                <option><?php echo $get_req['mandRequire']?></option>
                                <option value="">Select</option>
                                <option>Complete</option>
                                <option>Incomplete</option>
                                <option>Nothing Submitted</option>
                            </select>
                        </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-5 col-sm-offset-1 control-label">Interview</label> 
                        <div class="col-sm-4"> 
                            <select class="form-control" name="interview" required="true">
                                <option><?php echo $get_req['interview']?></option>
                                <option value="">Select</option>
                                <option>Finished</option>
                                <option>Not Finished</option>
                            </select>
                        </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-5 col-sm-offset-1 control-label">Orientation</label> 
                        <div class="col-sm-4"> 
                            <select class="form-control" name="orient" required="true">
                                <option><?php echo $get_req['orientation']?></option>
                                <option value="">Select</option>
                                <option>Finished</option>
                                <option>Not Finished</option>
                            </select>
                        </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-5 col-sm-offset-1 control-label">Training</label> 
                        <div class="col-sm-4"> 
                            <select class="form-control" name="training" required="true">
                                <option><?php echo $get_req['training']?></option>
                                <option value="">Select</option>
                                <option>Finished</option>
                                <option>Not Finished</option>
                            </select>
                        </div>
                </div>
        </fieldset>

    <input type="hidden" name="appid" value="<?php echo $get_id['app_id']?>">

    
    <div class="col-xs-12">
        <br/>
        <button type="submit" class="btn btn-success col-lg-4 col-xs-12" name="addBtn">
        <span class="glyphicon glyphicon-plus-sign"></span> Submit</button>

        <button type="submit" class="btn btn-primary col-lg-4 col-lg-offset-4 col-xs-12" name="editBtn">
        <span class="glyphicon glyphicon-edit"></span> Update</button>

    </div>

      

</form>

</body>
</html>     
</div>