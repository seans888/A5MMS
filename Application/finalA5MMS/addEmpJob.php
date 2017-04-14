<?php
    require_once 'core.php';

    $getClient = mysql_query("SELECT * FROM client");

    $addempjob = $_GET['addempjob'];
    $row = mysql_query("SELECT * FROM employee where emp_id = '$addempjob'");
    $get_id = mysql_fetch_array($row);

    if(isset($_POST['addBtn'])) {
        //employment
        $client = $_POST['client'];
        $job = $_POST['job'];
        $empid = $_POST['empid'];
        $startDate = $_POST['startDate'];
        $endDate = $_POST['endDate'];

    $addquery = "INSERT INTO job_history 
    (client_id,job_id,emp_id,startDate,endDate) values 
    ('$client','$job','$empid','$startDate','$endDate')";

        if(mysql_query($addquery)){
                header('location: viewEmp.php');            
        }
        else{
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
  
    <div class="col-lg-7 col-lg-offset-3" id="title">
        <p>Add Employment Details of Employee</p>
    </div>

<form class="form-horizontal" action="addEmpJob.php" method="POST">
    <div class="col-lg-6 col-lg-offset-3">
        <fieldset style="background-color:lightblue;">
            <legend>Personal Details</legend>

                <div class="form-group">   
                    <label class="col-sm-3 col-sm-offset-1 control-label">Employee ID</label>
                        <div class="col-sm-2">
                            <label class="form-control"><?php echo $get_id['emp_id']?></label>
                        </div>
                </div>

                <div class="form-group">   
                    <label class="col-sm-2 col-sm-offset-2 control-label">Last Name</label>
                        <div class="col-sm-6">
                            <label class="form-control" name="lname"><?php echo $get_id['emp_lname']?></label>
                        </div>
                </div>

                <div class="form-group">   
                    <label class="col-sm-2 col-sm-offset-2 control-label">First Name</label>
                        <div class="col-sm-6">
                            <label class="form-control" name="fname"><?php echo $get_id['emp_fname']?></label>
                        </div>
                </div>

                <div class="form-group">   
                    <label class="col-sm-4 control-label">Middle Name</label>
                        <div class="col-sm-6">
                            <label class="form-control" name="mname"><?php echo $get_id['emp_mname']?></label>
                        </div>
                </div>

                <div class="form-group">   
                    <label class="col-sm-2 col-sm-offset-2 control-label">Nick Name</label>
                        <div class="col-sm-6">
                            <label class="form-control" name="nick"><?php echo $get_id['emp_nickname']?></label>
                        </div>
                </div>

                <div class="form-group">   
                    <label class="col-sm-2 col-sm-offset-2 control-label">Address</label>
                        <div class="col-sm-6">
                            <label class="form-control" name="address"><?php echo $get_id['emp_address']?></label>
                        </div>
                </div>

                <div class="form-group">   
                    <label class="col-sm-4 control-label">Provincial Address</label>
                        <div class="col-sm-6">
                            <label class="form-control" name="prov"><?php echo $get_id['emp_provAddress']?></label>
                        </div>
                </div>

                <div class="form-group">   
                    <label class="col-sm-2 col-sm-offset-2 control-label">Birth Date</label>
                        <div class="col-sm-6">
                            <label class="form-control" name="bdate"><?php echo $get_id['emp_birthDate']?></label>
                        </div>
                </div>

                <div class="form-group">   
                    <label class="col-sm-2 col-sm-offset-2 control-label">Birth Place</label>
                        <div class="col-sm-6">
                            <label class="form-control" name="bplace"><?php echo $get_id['emp_birthPlace']?></label>
                        </div>
                </div>

                <div class="form-group">   
                    <label class="col-sm-2 col-sm-offset-2 control-label">Contact No</label>
                        <div class="col-sm-6">
                            <label class="form-control" name="contact"><?php echo $get_id['emp_contactNo']?></label>
                        </div>
                </div>

                <div class="form-group">   
                    <label class="col-sm-2 col-sm-offset-2 control-label">Email</label>
                        <div class="col-sm-6">
                            <label class="form-control" name="email"><?php echo $get_id['emp_email']?></label>
                        </div>
                </div>

                <div class="form-group">   
                    <label class="col-sm-2 col-sm-offset-2 control-label">Civil Status</label>
                        <div class="col-sm-6">
                            <label class="form-control" name="civil"><?php echo $get_id['emp_civilStatus']?></label>
                        </div>
                </div>

                <div class="form-group">   
                    <label class="col-sm-2 col-sm-offset-2 control-label">Employment Status</label>
                        <div class="col-sm-6">
                            <label class="form-control" name="empstatus"><?php echo $get_id['emp_status']?></label>
                        </div>
                </div>
        </fieldset>
    </div>

    <div class="col-lg-2">
            <img src="images/<?php echo $get_id['emp_image']?>" 
            style="background-color:white;margin-top:15px;"width="200" height="200"> 
    </div>

    <div class="col-lg-6 col-lg-offset-3">
                <fieldset style="background-color:lightblue;">
                    <legend>Employment Details</legend>

                    <div class="form-group"> 
                        <div class="col-sm-8 col-sm-offset-2"> 
                            <select class="form-control" id="client" onChange="changeClient()" 
                            name="client" required="true">
                                <option value="">Select Client</option>
                                <?php while($row = mysql_fetch_assoc($getClient)){
                                    ?> 
                                        <option value="<?php echo $row["client_id"];?>">
                                            <?php echo $row["client_name"];?></option>
                                        <?php } ?>
                            </select> 
                        </div>
                    </div>

                    <div class="form-group"> 
                        <div class="col-sm-8 col-sm-offset-2"> 
                            <select class="form-control" id="job" name="job" required="true">
                                <option value="">Select Job</option>
                            </select> 
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="startdate" class="col-sm-2 col-sm-offset-2 control-label">Start Date</label> 
                            <div class="col-sm-6"> 
                                 <input type="date" class="form-control" name="startDate" required="true">
                            </div>
                    </div>

                    <div class="form-group">
                        <label for="enddate" class="col-sm-2 col-sm-offset-2 control-label">Assuming End Date</label> 
                            <div class="col-sm-6"> 
                                 <input type="date" class="form-control" name="endDate" required="true">
                            </div>
                    </div>

                </fieldset>
    </div>

<script type="text/javascript">
    function changeClient(){
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.open("GET","fetchData.php?client="+document.getElementById("client").value,false);
        xmlhttp.send(null);
        document.getElementById("job").innerHTML=xmlhttp.responseText;

    }
</script>

        <input type="hidden" name="empid" value="<?php echo $get_id['emp_id']?>">
                
        <div class="col-lg-12">
            <br/>
            <button type="submit" class="btn btn-primary col-lg-offset-5" name="addBtn">
            <span class="glyphicon glyphicon-plus-sign"></span> Add Employment Details</button>
        </div>
</form>

</body>
</html>





