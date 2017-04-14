<?php
    require_once 'core.php';

    $updateid = $_GET['updateid'];
    $row = mysql_query("SELECT * FROM client where client_id = '$updateid'");
    $get_id = mysql_fetch_array($row);

    if(isset($_POST['editBtn'])) {
        $ecid = $_POST['ecid'];
        $ename = $_POST['ename'];
        $econtactper = $_POST['econtactper'];
        $econtact = $_POST['econtact'];
        $ezip = $_POST['ezip'];
        $estreet = $_POST['estreet'];
        $ecity = $_POST['ecity'];
        $elicense = $_POST['elicense'];
        $econtract = $_POST['econtract'];

    $editquery = "UPDATE client SET client_name='$ename', 
    client_contactPerson='$econtactper',client_contactNo='$econtact',
    client_zipCode='$ezip', client_street='$estreet', client_city='$ecity',
    client_licenseNo='$elicense',client_dateContract='$econtract' 
    WHERE client_id='$ecid' ";

        if(mysql_query($editquery)){
            header("location: viewClient.php"); 
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
        <p>UPDATE CLIENT</p>
    </div>
<div class="col-lg-5 col-lg-offset-4">
    

        <form class="form-horizontal" action="updateClient.php" method="POST">

            <div class="form-group"> 
                <label for="ename" class="col-sm-3 control-label">Client Name</label>
                    <div class="col-sm-9"> 
                        <input type="text" class="form-control" name="ename" 
                        value="<?php echo $get_id['client_name']?>"
                        placeholder="Client Name" required="true"/>
                    </div>
            </div>

            <div class="form-group">
                <label for="econtactper" class="col-sm-3 control-label">Contact Person</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="econtactper"
                        value="<?php echo $get_id['client_contactPerson']?>" 
                        placeholder="Contact Person" required="true"/>
                    </div>
            </div>

            <div class="form-group">
                <label for="econtact" class="col-sm-3 control-label">Contact Number</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="econtact"
                        value="<?php echo $get_id['client_contactNo']?>" 
                        placeholder="Contact Number" required="true"/>
                    </div>
            </div>

            <div class="form-group">
                <label for="ezip" class="col-sm-3 control-label">Zip Code</label>
                    <div class="col-sm-9">
                        <input type="number" class="form-control" name="ezip"
                        value="<?php echo $get_id['client_zipCode']?>" 
                        placeholder="Zip Code" required="true"/>
                    </div>
            </div>

            <div class="form-group">
                <label for="estreet" class="col-sm-3 control-label">Street</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="estreet"
                        value="<?php echo $get_id['client_street']?>" 
                        placeholder="Street" required="true"/>
                    </div>
            </div>

            <div class="form-group">
                <label for="ecity" class="col-sm-3 control-label">City</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="ecity"
                        value="<?php echo $get_id['client_city']?>" 
                        placeholder="City" required="true"/>
                    </div>
            </div>

            <div class="form-group">
                <label for="elicense" class="col-sm-3 control-label">License No</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="elicense"
                        value="<?php echo $get_id['client_licenseNo']?>" 
                        placeholder="License No" required="true"/>
                    </div>
            </div>

            <div class="form-group">
                <label for="econtract" class="col-sm-3 control-label">Date Contract</label>
                    <div class="col-sm-9">
                        <input type="date" class="form-control" name="econtract"
                        value="<?php echo $get_id['client_dateContract']?>" 
                        placeholder="Date Contract" required="true"/>
                    </div>
            </div>

            <input type="hidden" name="ecid" value="<?php echo $get_id['client_id']?>"> 

            <button type="submit" class="btn btn-primary col-lg-offset-6" name="editBtn">
            <span class="glyphicon glyphicon-edit"></span> Update Client</button>

        </form>
    </div>

    <?php
        mysql_close();
    ?>


</body>
</html>
