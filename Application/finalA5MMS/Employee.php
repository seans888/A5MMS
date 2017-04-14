<?php
	require_once('coreEmp.php');

	$session_emp = $_SESSION['emp_id'];

	$sql = mysql_query("SELECT emp_uname FROM employee WHERE emp_id='$session_emp'");
	$row = mysql_fetch_assoc($sql);
	$log_session = $row['emp_uname'];
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<title> Emp Log
</title>

<style>

     body{
         position:relative;
      }

    #navBar img {
        height: 50px;
        width: 500px;
        margin-top: 5px;
        margin-bottom: 5px;
        margin-left:-10px;

     }

     #adminTitle{
        margin-top: 200px;
     }

    @media screen and (max-width: 300px){
        #navBar img{
            height:50px;
            width:95%;
            margin-left:7px;
        }

        #adminTitle{
            margin-top: 130px;
        }
    }

</style>

</head>

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
              <li><a href="myProfile.php"><span class="glyphicon glyphicon-user"></span> <label>My Profile</label></a></li>
             <li><a href="#"><span class="glyphicon glyphicon-list-alt"></span> <label>Pay Slips</label></a></li>
             <li><a data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-log-out"></span> <label>
             	<?php echo 'Logout '. ' ('.$log_session.')'?></label></a></li>
            </ul>
        </div>    
   </div>
</nav>

<!-- Modal -->
        <div class="modal fade" id="myModal" role="dialog">
          <div class="modal-dialog modal-xs">
            <div class="modal-content">

              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Logout</h4>
              </div>

              <div class="modal-body">
                <p>Are you sure to logout?</p>
              </div>

              <div class="modal-footer">
                <a class="btn btn-primary" href="logoutEmp.php" >Logout</a>
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
              </div>

            </div>
          </div>
        </div>

</html>
</body>