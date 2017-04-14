<?php
    require_once 'core.php';

    date_default_timezone_set("Asia/Manila");

    $updateid = $_GET['updateid'];
    $row = mysql_query("SELECT * FROM announcement where ann_id = '$updateid'");
    $get_id = mysql_fetch_array($row);

    if(isset($_POST['editBtn'])) {
        $annid = $_POST['annid'];
        $desc = $_POST['desc'];
        $location = $_POST['location'];
        $annSdate = $_POST['annSdate'];
        $annStime = $_POST['annStime'];
        $posted = $_POST['posted'];

    $editquery = "UPDATE announcement SET ann_desc='$desc', ann_location='$location',
    ann_startDate='$annSdate',ann_startTime='$annStime',
    ann_dateTimePosted='$posted'
     WHERE ann_id='$annid' ";

        if(mysql_query($editquery)){
            header("location: viewAnnounce.php"); 
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
  
    <div class="col-lg-6 col-lg-offset-5" id="title">
        <p>UPDATE ANNOUNCEMENT</p>
    </div>

    <div class="col-lg-6 col-lg-offset-4">

        <form class="form-horizontal" action="updateAnn.php" method="POST">

            <div class="form-group"> 
                <label for="desc" class="col-sm-2 control-label">Description</label>
                    <div class="col-sm-10"> 
                        <input type="text" class="form-control" name="desc" placeholder="Description"
                        value="<?php echo $get_id['ann_desc']?>" required="true"/>
                    </div>
            </div>

            <div class="form-group">
                <label for="location" class="col-sm-2 control-label">Location</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="location" placeholder="Location" 
                        value="<?php echo $get_id['ann_location']?>" required="true"/>
                    </div>
            </div>

            <div class="form-group">
                <label for="sdate" class="col-sm-2 control-label">Date</label>
                    <div class="col-sm-10" id="startDate">
                        <input type="date" class="form-control" name="annSdate" 
                        value="<?php echo $get_id['ann_startDate']?>" required="true"/>
                    </div>
            </div>

            <div class="form-group">
                <label for="stime" class="col-sm-2 control-label">Time</label>
                    <div class="col-sm-10">
                        <input type="time" class="form-control" name="annStime" 
                        value="<?php echo $get_id['ann_startTime']?>" required="true"/>
                    </div>
            </div>

            <div class="form-group">
                <input type="hidden" class="form-control" name="posted" value="<?php
                    echo date('Y/m/d h:i:s');?>"/>
            </div>

            <input type="hidden" name="annid" value="<?php echo $get_id['ann_id']?>"> 

            <br/><br/>

            <button type="submit" class="btn btn-primary col-lg-offset-4" name="editBtn">
            <span class="glyphicon glyphicon-edit"></span> Update Announcement</button>

        </form>
    </div>

    <?php
        mysql_close();
    ?>


</body>
</html>
