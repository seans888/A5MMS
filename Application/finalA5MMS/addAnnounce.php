<?php
    require_once 'core.php';

    date_default_timezone_set("Asia/Manila");

    if(isset($_POST['addBtn'])) {
        $desc = $_POST['desc'];
        $location = $_POST['location'];
        $sdate = $_POST['sdate'];
        $stime = $_POST['stime'];
        $posted = $_POST['posted'];

    $addquery = "INSERT INTO announcement (ann_desc,ann_location,ann_startDate,
    ann_startTime,ann_dateTimePosted) 
    values ('$desc','$location','$sdate','$stime','$posted')";

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
    <!-- bootstrap -->
    <link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap.min.css">
    <script type="text/javascript" src="assets/bootstrap/js/bootstrap.min.js"></script>
    <!-- custom -->
    <link rel="stylesheet" type="text/css" href="assets/custom/css/manageClient.css">
    <!-- jquery plugin -->
    <script type="text/javascript" src="assets/jquery/jquery.min.js"></script>
    <script type="text/javascript" src="assets/jquery/jquery.js"></script>
    <!-- datetime plugin -->
    <link rel="stylesheet" type="text/css" media="screen" href="assets/datetime/css/bootstrap-datetimepicker.min.css">
    <script type="text/javascript" src="assets/datetime/js/bootstrap-datetimepicker.min.js"></script>
</head>

<body>
<?php require_once 'adminPanel.php';?>
  
    <div class="col-lg-6 col-lg-offset-5" id="title">
        <p>ADD ANNOUNCEMENT</p>
    </div>

    <div class="col-lg-6 col-lg-offset-4">

        <form class="form-horizontal" action="addAnnounce.php" method="POST">

            <div class="form-group"> 
                <label for="desc" class="col-sm-2 control-label">Description</label>
                    <div class="col-sm-10"> 
                        <input type="text" class="form-control" name="desc" placeholder="Description" required="true"/>
                    </div>
            </div>

            <div class="form-group">
                <label for="location" class="col-sm-2 control-label">Location</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="location" placeholder="Location" required="true"/>
                    </div>
            </div>

            <div class="form-group">
                <label for="sdate" class="col-sm-2 control-label">Date</label>
                    <div class="col-sm-10" id="startDate">
                        <input type="date" class="form-control" name="sdate" required="true"/>
                    </div>
            </div>

            <div class="form-group">
                <label for="stime" class="col-sm-2 control-label">Time</label>
                    <div class="col-sm-10">
                        <input type="time" class="form-control" name="stime" required="true"/>
                    </div>
            </div>

            <div class="form-group">
                <input type="hidden" class="form-control" name="posted" value="<?php
                    echo date('Y/m/d h:i:s');?>"/>
                    
            </div>

            <br/><br/>

            <button type="submit" class="btn btn-success col-lg-offset-5" name="addBtn"><span class="glyphicon glyphicon-plus-sign">
            </span> Add Announcement</button>

        </form>
    </div>


</body>
</html>
