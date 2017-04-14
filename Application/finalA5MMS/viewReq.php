<?php require_once 'core.php'; 

    $viewreqid = $_GET['viewreqid'];
    $row = mysql_query("SELECT * FROM applicant where app_id = '$viewreqid'");
    $get_id = mysql_fetch_array($row);

    $req = mysql_query("SELECT * FROM requirement where app_id = '$viewreqid'");
    $get_req = mysql_fetch_array($req);

    /*if($get_req['mandRequire'] == 'Complete' && $get_req['interview'] == 'Finished' && 
    $get_req['orientation'] == 'Finished' && $get_req['training'] == 'Finished'){

        $editquery = "UPDATE applicant SET app_status='Ready For Deployment'
        WHERE app_id='$appid'";

        if(mysql_query($editquery)){
            header("location: viewApp.php");              
        }else{
            echo "<script>alert('Error Adding')</script>".mysql_error();
        }
    }*/

    /*$jobs = mysql_query("SELECT * FROM client LEFT JOIN job ON 
    client.client_id = job.client_id LEFT JOIN job_history ON job.job_id = job_history.job_id
    where emp_id = '$viewid'");*/

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
  
    <div class="col-lg-7 col-lg-offset-5" id="title">
        <p>View Requirements</p>
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

            <div >
                <div class="form-group">
                    <label class="col-lg-6 col-lg-offset-2">Mandatory Requirement</label>
                    <label><?php echo $get_req['mandRequire']?></label>
                </div>

                <div class="form-group">
                    <label class="col-lg-6 col-lg-offset-2">Interview</label>
                    <label><?php echo $get_req['interview']?></label>
                </div>

                <div class="form-group">
                    <label class="col-lg-6 col-lg-offset-2">Orientation</label>
                    <label><?php echo $get_req['orientation']?></label>
                </div>

                <div class="form-group">
                    <label class="col-lg-6 col-lg-offset-2">Training</label>
                    <label><?php echo $get_req['training']?></label>
                </div>
                    
                <input type="hidden" name="appid" value="<?php echo $get_id['app_id']?>">
            </div>
        </fieldset>
</form>

</body>
</html>     
</div>