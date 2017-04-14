<?php

    require_once 'function/connectDB.php';

    session_start();

    if(isset($_SESSION['emp_id'])) {
        //header('location: ./login.php'); 
    } 

    $error = array();

    if($_POST){
                                
        $uname = $_POST['uname'];
        $pass = $_POST['pass'];
                            
        $sql = "SELECT * FROM employee WHERE emp_uname = '$uname'";
        $result = $connect->query($sql);

        if($result->num_rows == 1) {
            $password = md5($password);
            // exists
            $mainSql = "SELECT * FROM employee WHERE emp_uname = '$uname' AND emp_pass = '$pass'";
            $mainResult = $connect->query($mainSql);

            if($mainResult->num_rows == 1) {
                $value = $mainResult->fetch_assoc();
                $user_id = $value['emp_id'];

                // set session
                $_SESSION['emp_id'] = $user_id;

                header('location: employee.php');  
            } else{
                
                $error[] = "Incorrect log combination";
            } 
        } else {        
            $error[] = "Username doesn't exist";      
        }
    } 
                    
?>


<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="assets/custom/css/adminLogin.css">
<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
<!-- jQuery library -->
<script src="assets/jquery/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<title> EMPLOYEE</title>

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
              <li><a href="home.php"><span class="glyphicon glyphicon-home"></span> <label>Home</label></a></li>
            </ul>
        </div>    
    </div>
</nav>

    <div class="container col-lg-4 col-lg-offset-4 col-xs-12" id="adminTitle">
         LOGIN<br/>
            <img src="assets/images/adminicon.png" class="img-circle">

                <form action="" method="post">
                    <fieldset>
                <div class="form-group" style="margin-top:50px;">
                    <input type="text" class="form-control required" name="uname" placeholder="USERNAME" 
                    required="true">
                </div>

                <div class="form-group">
                    <input type="password" class="form-control" name="pass" placeholder="PASSWORD" 
                    required="true">
                </div>
                    <div id="message">
                            <?php
                                if($error) {
                                    foreach ($error as $key => $value) {
                                    echo '<h4 class="alert alert-danger" role="alert">
                                    '.$value.'</h4>';                                      
                                    }
                                  }  
                            ?>
                    </div>

                <input type="submit" class="btn btn-primary btn-block" value="Submit" id="blogin" name="login">
                </input>

            </form>
        </fieldset>
    </div>

</body>
</html>
