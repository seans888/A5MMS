<?php

    require_once 'function/connectDB.php';

    session_start();

    if(isset($_SESSION['admin_id'])) {
        //header('location: finalA5MMS/adminPanel.php'); 
    } 

    $error = array();

    if($_POST){
                                
        $admin = $_POST['uname'];
        $pass = $_POST['pass'];
                            
        $sql = "SELECT * FROM admin WHERE admin_uname = '$admin'";
        $result = $connect->query($sql);

        if($result->num_rows == 1) {
            $password = md5($password);
            // exists
            $mainSql = "SELECT * FROM admin WHERE admin_uname = '$admin' AND admin_pass = '$pass'";
            $mainResult = $connect->query($mainSql);

            if($mainResult->num_rows == 1) {
                $value = $mainResult->fetch_assoc();
                $user_id = $value['admin_id'];

                // set session
                $_SESSION['admin_id'] = $user_id;

                header('location: adminpanel.php');  
            } else{
                
                $error[] = "Incorrect admin log combination";
            } 
        } else {        
            $error[] = "Incorrect admin username";      
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
    <link rel="stylesheet" type="text/css" href="assets/custom/css/adminLogin.css">
    <!-- jquery plugin -->
    <script type="text/javascript" src="assets/jquery/jquery.min.js"></script>
    <!-- bootstrap js -->
    <script type="text/javascript" src="assets/bootstrap/js/bootstrap.min.js"></script>
    
</head>

<body>

    <div class="col-lg-12 col-xs-12" id="header">
        <img src="assets/images/a5mmslogo.png" id="img"></img>
    </div>

    <div class="container col-lg-4 col-lg-offset-4 col-md-4 col-md-offset-4 col-xs-12" id="adminTitle">
        ADMIN LOGIN<br/>
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
