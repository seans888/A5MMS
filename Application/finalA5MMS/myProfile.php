<?php 
    require_once('coreEmp.php');
    $session_emp = $_SESSION['emp_id'];

    $sql = mysql_query("SELECT * FROM employee WHERE emp_id='$session_emp'");
    $rows = mysql_fetch_array($sql);

    $sql1 = mysql_query("SELECT * FROM client LEFT JOIN job ON 
    client.client_id = job.client_id LEFT JOIN job_history ON job.job_id = job_history.job_id
    where emp_id = '$session_emp'");

?>

<!DOCTYPE html >
<html>
<head>
    <title>My Profile</title>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/custom/css/viewClient.css">
    <!-- jquery plugin -->
    <script type="text/javascript" src="assets/jquery/jquery.min.js"></script>
    <!-- bootstrap js -->
    <script type="text/javascript" src="assets/bootstrap/js/bootstrap.min.js"></script>
</head>

<body>
<?php require_once 'Employee.php';?>

<br/><br/><br/>

<div class="col-lg-6 col-lg-offset-3">
    <fieldset style="background-color:lightblue;">
        <legend>Personal Details</legend>

            <div class="form-group">   
                <label class="col-sm-4 col-sm-offset-2 control-label">Employee ID</label>
                    <div class="col-sm-2">
                        <label class="form-control" name="empid"><?php echo $rows['emp_id']?></label>
                    </div>
            </div>  

            <div class="form-group">   
                <label class="col-sm-4 col-sm-offset-2 control-label">Last Name</label>
                    <div class="col-sm-6">
                        <label class="form-control" name="lname"><?php echo $rows['emp_lname']?></label>
                    </div>
            </div>

            <div class="form-group">   
                <label class="col-sm-4 col-sm-offset-2 control-label">First Name</label>
                    <div class="col-sm-6">
                        <label class="form-control" name="fname"><?php echo $rows['emp_fname']?></label>
                    </div>
            </div>

            <div class="form-group">   
                <label class="col-sm-4 col-sm-offset-2 control-label">Middle Name</label>
                    <div class="col-sm-6">
                        <label class="form-control" name="mname"><?php echo $rows['emp_mname']?></label>
                    </div>
            </div>

            <div class="form-group">   
                <label class="col-sm-4 col-sm-offset-2 control-label">Nick Name</label>
                    <div class="col-sm-6">
                        <label class="form-control" name="nick"><?php echo $rows['emp_nickname']?></label>
                    </div>
            </div>

            <div class="form-group">   
                <label class="col-sm-4 col-sm-offset-2 control-label">Address</label>
                    <div class="col-sm-6">
                        <label class="form-control" name="address"><?php echo $rows['emp_address']?></label>
                    </div>
            </div>

            <div class="form-group">   
                <label class="col-sm-4 col-sm-offset-2 control-label">Provincial Address</label>
                    <div class="col-sm-6">
                        <label class="form-control" name="prov"><?php echo $rows['emp_provAddress']?></label>
                    </div>
            </div>

            <div class="form-group">   
                <label class="col-sm-4 col-sm-offset-2 control-label">Birth Date</label>
                    <div class="col-sm-6">
                        <label class="form-control" name="bdate"><?php echo $rows['emp_birthDate']?></label>
                    </div>
            </div>

            <div class="form-group">   
                <label class="col-sm-4 col-sm-offset-2 control-label">Birth Place</label>
                    <div class="col-sm-6">
                        <label class="form-control" name="bplace"><?php echo $rows['emp_birthPlace']?></label>
                    </div>
            </div>

            <div class="form-group">   
                <label class="col-sm-4 col-sm-offset-2 control-label">Contact No</label>
                    <div class="col-sm-6">
                        <label class="form-control" name="contact"><?php echo $rows['emp_contactNo']?></label>
                    </div>
            </div>

            <div class="form-group">   
                <label class="col-sm-4 col-sm-offset-2 control-label">Email</label>
                    <div class="col-sm-6">
                        <label class="form-control" name="email"><?php echo $rows['emp_email']?></label>
                    </div>
            </div>

            <div class="form-group">   
                <label class="col-sm-4 col-sm-offset-2 control-label">Civil Status</label>
                    <div class="col-sm-6">
                        <label class="form-control" name="civil"><?php echo $rows['emp_civilStatus']?></label>
                    </div>
            </div>

            <div class="form-group">   
                <label class="col-sm-4 col-sm-offset-2 control-label">Employment Status</label>
                    <div class="col-sm-6">
                        <label class="form-control" name="empstatus"><?php echo $rows['emp_status']?></label>
                    </div>
            </div>
</div>

<div class="col-lg-2">
        <img src="images/<?php echo $rows['emp_image']?>" 
        style="background-color:white;margin-top:15px;"width="200" height="200"> 
</div>



<div class="col-lg-6 col-lg-offset-3">
    <fieldset style="background-color:lightblue;">
        <legend>Person In Case of Emergency</legend>

            <div class="form-group">   
                <label class="col-sm-4 col-sm-offset-2 control-label">Name</label>
                    <div class="col-sm-6">
                        <label class="form-control" name="picename"><?php echo $rows['emp_piceName']?></label>
                    </div>
            </div>

            <div class="form-group">   
                <label class="col-sm-4 col-sm-offset-2 control-label">Relationship</label>
                    <div class="col-sm-6">
                        <label class="form-control" name="picerelationship"><?php echo $rows['emp_piceRelationship']?></label>
                    </div>
            </div>

            <div class="form-group">   
                <label class="col-sm-4 col-sm-offset-2 control-label">Address</label>
                    <div class="col-sm-6">
                        <label class="form-control" name="piceaddress"><?php echo $rows['emp_piceAddress']?></label>
                    </div>
            </div>

            <div class="form-group">   
                <label class="col-sm-4 col-sm-offset-2 control-label">Contact No</label>
                    <div class="col-sm-6">
                        <label class="form-control" name="picecontact"><?php echo $rows['emp_piceContactNo']?></label>
                    </div>
            </div>
</div>

<div class="col-lg-6 col-lg-offset-3">
    <fieldset style="background-color:lightblue;">
        <legend>Government Related</legend>

            <div class="form-group">   
                <label class="col-sm-4 col-sm-offset-2 control-label">SSS</label>
                    <div class="col-sm-6">
                        <label class="form-control" name="sss"><?php echo $rows['emp_SSS']?></label>
                    </div>
            </div>

            <div class="form-group">   
                <label class="col-sm-4 col-sm-offset-2 control-label">TIN</label>
                    <div class="col-sm-6">
                        <label class="form-control" name="tin"><?php echo $rows['emp_TIN']?></label>
                    </div>
            </div>

            <div class="form-group">   
                <label class="col-sm-4 col-sm-offset-2 control-label">PAG-IBIG</label>
                    <div class="col-sm-6">
                        <label class="form-control" name="pagibig"><?php echo $rows['emp_PAGIBIG']?></label>
                    </div>
            </div>

            <div class="form-group">   
                <label class="col-sm-4 col-sm-offset-2 control-label">PHILHEALTH</label>
                    <div class="col-sm-6">
                        <label class="form-control" name="philhealth"><?php echo $rows['emp_PHILHEALTH']?></label>
                    </div>
            </div>
</div>

<div class="col-lg-6 col-lg-offset-3">
    <fieldset style="background-color:lightblue;">
        <legend>Account</legend>

            <div class="form-group"> 
                <label class="col-sm-4 col-sm-offset-2 control-label">Username</label>
                    <div class="col-sm-6">
                        <label class="form-control" name="uname"><?php echo $rows['emp_uname']?></label>
                    </div>
            </div>

            <div class="form-group"> 
                <label class="col-sm-4 col-sm-offset-2 control-label">Password</label>
                    <div class="col-sm-6">
                        <label class="form-control" name="uname"><?php echo $rows['emp_pass']?></label>
                    </div>
            </div>

    </fieldset>
</div>

<div class="col-lg-6 col-lg-offset-3">
    <fieldset style="background-color:lightblue;">
        <legend>Job History</legend>

            <?php while($search = mysql_fetch_array($sql1)){

                    echo "<div class='well col-lg-10 col-lg-offset-1'>".'<label>Job:</label>'
                    .$search['job_name'].'<br/><label>Client :</label>'.$search['client_name'].
                    '<br/><label>Start Date :</label>'.$search['startDate'].
                    '<br/><label>End Date :</label>'.$search['endDate']."</div>";         
                }
            ?>
</div>

 
</body>
</html>
