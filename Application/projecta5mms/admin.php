<!DOCTYPE html >
<html>
<head>
    <title>ADMIN</title>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap.min.css">
    <!-- jquery plugin -->
    <script type="text/javascript" src="assets/jquery/jquery.min.js"></script>
    <!-- bootstrap js -->
    <script type="text/javascript" src="assets/bootstrap/js/bootstrap.min.js"></script>
    <style>
        body{
            background-color: lightgray;
        }

        #adminTitle{
         font-family: book antiqua;
         font-size: 50px;
         text-align: center;
         margin-top:150px;
         background-color: #4183D7; 
         border-radius: 10px; 
        }

        #admin{
        width: 50px;
        height: 50px;
        background-color: #fff;
        }

        #adminTitle img{
        width: 120px;
        height: 120px;
        margin-top: -80px;
        margin-bottom:-100px;
        background-color: #fff;
        }

        #adminTitle p{
            font-size: 20px;
            color:#fff;
        }

        #blogin{
            margin-bottom:10px;
            padding:5px 20px;
            color: #fff;
            border-radius: 4px;
            border: none;
            border-right: 5px solid #27AE60;
            border-bottom: 5px solid #27AE60;
            background-color: #2ECC71;
        }
    </style>
</head>

<body>

    <div class="container col-lg-4 col-lg-offset-4 col-md-4 col-md-offset-4 col-xs-12" id="adminTitle">
        ADMIN LOGIN<br/>
            <img src="assets/images/adminicon.png" class="img-circle">

                    <?php
                    $db = "projecta5mms";
                        $link = mysql_connect("localhost","root");
                
                        if(!$link) die ("Couldn't connect to MySQL");
                        mysql_select_db($db,$link) or die ("Couldn't open $db:".mysql_error());
                    
                        if(isset($_POST['login'])){
                            
                            $admin = $_POST['uname'];
                            $pass = $_POST['pass'];
                            
                            $query = "select * from admin where admin_uname = '$admin' and admin_pass = '$pass' ";
                            
                            $run = mysql_query($query);
                            
                            if(mysql_num_rows($run)>0){
                                header('location:adminpanel.php');
                            }
                            else{
                                echo "";
                            }
                        }
                    
                    ?>

                <div class="form-group" style="margin-top:50px;">
                    <input type="text" class="form-control required" name="uname" placeholder="USERNAME" required="true">
                </div>

                <div class="form-group">
                    <input type="password" class="form-control" name="pass" placeholder="PASSWORD" required="true">
                </div>

                <input type="submit" class="btn btn-primary btn-block" value="Submit" id="blogin" name="login"></input>
    </div>

</body>
</html>
