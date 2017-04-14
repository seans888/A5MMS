<?php
    require_once 'core.php';

    $viewid = $_GET['viewid'];
    $row = mysql_query("SELECT * FROM client where client_id = '$viewid'");
    $get_id = mysql_fetch_array($row);

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
        <p>CLIENT DETAILS</p>
    </div>
<div class="col-lg-5 col-lg-offset-4">
    

        <form class="form-horizontal" method="POST">

            <div class="form-group"> 
                <label for="ename" class="col-sm-3 control-label">Client Name</label>
                    <div class="col-sm-9"> 
                        <label class="form-control"><?php echo $get_id['client_name']?></label>
                    </div>
            </div>

            <div class="form-group">
                <label for="econtactper" class="col-sm-3 control-label">Contact Person</label>
                    <div class="col-sm-9">
                        <label class="form-control"><?php echo $get_id['client_contactPerson']?></label>
                    </div>
            </div>

            <div class="form-group">
                <label for="econtact" class="col-sm-3 control-label">Contact Number</label>
                    <div class="col-sm-9">
                        <label class="form-control"><?php echo $get_id['client_contactNo']?></label>
                    </div>
            </div>

            <div class="form-group">
                <label for="ezip" class="col-sm-3 control-label">Zip Code</label>
                    <div class="col-sm-9">
                        <label class="form-control"><?php echo $get_id['client_zipCode']?></label>
                    </div>
            </div>

            <div class="form-group">
                <label for="estreet" class="col-sm-3 control-label">Street</label>
                    <div class="col-sm-9">
                        <label class="form-control"><?php echo $get_id['client_city']?></label>
                    </div>
            </div>

            <div class="form-group">
                <label for="ecity" class="col-sm-3 control-label">City</label>
                    <div class="col-sm-9">
                        <label class="form-control"><?php echo $get_id['client_street']?></label>
                    </div>
            </div>

            <div class="form-group">
                <label for="elicense" class="col-sm-3 control-label">License No</label>
                    <div class="col-sm-9">
                        <label class="form-control"><?php echo $get_id['client_licenseNo']?></label>
                    </div>
            </div>

            <div class="form-group">
                <label for="econtract" class="col-sm-3 control-label">Date Contract</label>
                    <div class="col-sm-9">
                        <label class="form-control"><?php echo $get_id['client_dateContract']?></label>
                    </div>
            </div>

        </form>
    </div>

    <?php
        mysql_close();
    ?>


</body>
</html>
