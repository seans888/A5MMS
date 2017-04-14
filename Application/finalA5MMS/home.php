<?php 
require_once 'function/connectDB.php';

/*$jobs = mysql_query("SELECT * FROM client INNER JOIN job ON client.client_id = job.client_id
    WHERE job_status IN ('Available') ORDER BY job_name ");*/

$jobs = mysql_query("SELECT * FROM job WHERE job_status IN ('Available')
    ORDER BY job_name ");

$ann = mysql_query("SELECT * FROM announcement ORDER BY ann_dateTimePosted desc LIMIT 5");


?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
<!-- jQuery library -->
<script src="assets/jquery/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<title> A5MMS
</title>
</head>

<style>

     body{
         position:relative;
      }

     #carousel {height:350px;width:95%;padding:0px;margin-top: 100px;}

     .carousel-inner > .item > img,
     .carousel-inner > .item > a > img {
        height:300px;
        width: 100%;
        margin:auto; 
     }

    #navBar img {
        height: 50px;
        width: 500px;
        margin-top: 5px;
        margin-bottom: 5px;
        margin-left:-10px;

     }

    @media screen and (max-width: 300px){
        #navBar img{
            height:50px;
            width:95%;
            margin-left:7px;
        }

        #carousel {height:350px;width:95%;padding:0px;margin-top: 150px;}

        .carousel-inner > .item > img,
        .carousel-inner > .item > a > img {
            height:300px;
            width: 100%;
            margin:auto;             
        }   
    }

</style>

<body>

<nav class="navbar navbar-inverse navbar-fixed-top" id="navBar">
  <div class="container-fluid">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
         </button>
      <img src="assets/images/a5mmslogo.png">
    </div>

        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="apply.php"><span class="glyphicon glyphicon-user"></span> <label>Apply</label></a></li>
              <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> <label>Login</label></a></li>
            </ul>
        </div>    
    </div>
</nav>

<div class="container-fluid" id="carousel">
   <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

      <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
        <div class="item active">
            <img src="assets/images/img1.jpg" id="img1"/>
        </div>

         <div class="item">
            <img src="assets/images/img2.jpg" id="img2"/> 
        </div>

        <div class="item">
            <img src="assets/images/img3.jpg" id="img3"/>
        </div>
    </div>

      <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>

        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>

        <div class="container col-lg-8 col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading" style="background-color:lightblue;">
                    <h3 style="text-align:center;">Services Offered</h3>
                </div>

                <div class="panel panel-body">

                    <?php while($row = mysql_fetch_array($jobs)){

                        echo "<div class='well col-lg-4 col-lg-offset-1'>".'<label>Job:</label> '. $row['job_name'].
                        '<br/><label>Job Slots:</label> '. $row['job_slots']."</div>";         
                    }
                    ?>

                </div>
            </div>
        </div>

        <div class="col-lg-4 col-xs-12">
                <div class="panel panel-default">
                    <div class="panel-heading"  style="background-color:lightgreen;">
                        <h3 style="text-align:center;">Contact Us</h3>
                    </div>

                    <div class="panel panel-body">

                        <p><b>Address:</b> 6th St. Cor. 3rd DCB Bldg. 2nd Flr., Brgy. Villamor, Pasay City</p>
                        <p><b>Email Address:</b> <a href="../area5_manpower@yahoo.com.ph">area5_manpower@yahoo.com.ph</a></p>
                        <p><b>Telephone No.:</b> (02)880-007-00</p>

                    </div>
                </div>

        </div>

        <div class="col-lg-4 col-xs-12">
                <div class="panel panel-default">
                    <div class="panel-heading"  style="background-color:blue;">
                        <h3 style="text-align:center;">Mandatory Requirements</h3>
                    </div>
                    <div class="panel panel-body">
                        <ul>
                            <li>BIO DATA / RESUME</li>
                            <li>BIRTH CERTIFICATE</li>
                            <li>BARANGAY CLEARANCE</li>
                            <li>DIPLOMA / COLLEGE TRANSCRIPT</li>
                            <li>NBI CLEARANCE</li>
                            <li>POLICE CLEARANCE</li>
                            <li>SSS/PHILHEALTH/TIN/PAG-IBIG NO.</li>
                            <li>EMPLOYMENT CERTICATE</li>
                            <li>RESIDENCE CERTIFICATE</li>
                            <li>2X2 ID PICTURE(2PCS - Colored w/ white background)</li>
                            <li>1X1 ID PICTURE(2PCS - Colored w/ white background)</li>
                            <li>Marriage Contract</li>
                            <li>CHILDREN'S BIRTH CERTIFICATE</li>
                            <li>2PCS LONG FOLDER w/ FASTENER</li>
                        </ul>
                    </div>
                </div>
        </div>

        <div class="col-lg-4 col-lg-offset-8 col-xs-12">
                <div class="panel panel-default">
                    <div class="panel-heading"  style="background-color:yellow;">
                        <h3 style="text-align:center;">Announcements</h3>
                    </div>

                    <div class="panel panel-body">

                        <?php while($rows = mysql_fetch_array($ann)){

                            echo "<div class='container col-lg-12'><ul><li><label>WHAT:</label> ".
                            $rows['ann_desc']."<br/><label>DATE:</label> ".
                            $rows['ann_startDate']."<br/><label>TIME:</label> ".
                            $rows['ann_startTime'].
                            "<br/><label>WHERE:</label> ".
                            $rows['ann_location']."</li></ul></div>";         
                            }
                        ?>

                    </div>
                </div>

        </div>
</body>
</html>