<?php
    require_once 'core.php';

    if(isset($_POST['addBtn'])) {
        $name = $_POST['name'];
        $contactPer = $_POST['contactPer'];
        $contact = $_POST['contact'];
        $zip = $_POST['zip'];
        $street = $_POST['street'];
        $city = $_POST['city'];
        $license = $_POST['license'];
        $contract = $_POST['contract'];

    $addquery = "INSERT INTO client (client_name,client_contactPerson,
    client_contactNo,client_zipCode,client_city,client_street,client_licenseNo,
    client_dateContract) 
    values ('$name','$contactPer','$contact','$zip','$city','$street','$license',
    '$contract')";

    $check_name = "select * from client where client_name = '$name' ";
                            
    $run = mysql_query($check_name);
                            
        if(mysql_num_rows($run)>0){
            echo "<script>alert('$name already exists in the database.')</script>";
        }
        else if(mysql_query($addquery)){
                echo "<script>alert('Successfully Added')</script>";            
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
  
    <div class="col-lg-4 col-lg-offset-5" id="title">
        <p>ADD NEW CLIENT</p>
    </div>

    <div class="col-lg-5 col-lg-offset-4">

        <form class="form-horizontal" action="addClient.php" method="POST">

            <div class="form-group"> 
                    <div class="col-sm-9 col-sm-offset-2"> 
                        <input type="text" class="form-control" name="name" placeholder="Client Name" required="true"/>
                    </div>
            </div>

            <div class="form-group"> 
                    <div class="col-sm-9 col-sm-offset-2"> 
                        <input type="text" class="form-control" name="contactPer" placeholder="Contact Person" required="true"/>
                    </div>
            </div>

            <div class="form-group">
                    <div class="col-sm-9 col-sm-offset-2">
                        <input type="text" class="form-control" name="contact" placeholder="Contact Number" required="true"/>
                    </div>
            </div>

            <div class="form-group">
                    <div class="col-sm-9 col-sm-offset-2">
                        <input type="number" class="form-control" name="zip" placeholder="Zip Code" required="true"/>
                    </div> 
            </div>

            <div class="form-group">
                    <div class="col-sm-9 col-sm-offset-2">
                        <input type="text" class="form-control" name="street" placeholder="Street" required="true"/>
                    </div>
            </div>

            <div class="form-group">
                    <div class="col-sm-9 col-sm-offset-2">
                        <input type="text" class="form-control" name="city" placeholder="City" required="true"/>
                    </div>
            </div>

            <div class="form-group">
                    <div class="col-sm-9 col-sm-offset-2">
                        <input type="text" class="form-control" name="license" placeholder="License No" required="true"/>
                    </div>
            </div>

            <div class="form-group">
                <label for="contract" class="col-sm-3 col-sm-offset-2 control-label">Date Contract</label>
                    <div class="col-sm-6">
                        <input type="date" class="form-control" name="contract" placeholder="Date Contract" required="true"/>
                    </div>
            </div>

            <br/><br/>

            <button type="submit" class="btn btn-success col-lg-offset-5" name="addBtn"><span class="glyphicon glyphicon-plus-sign">
            </span> Add New Client</button>

        </form>
    </div>

</body>
</html>
