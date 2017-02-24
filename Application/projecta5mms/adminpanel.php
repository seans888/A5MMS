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
            #header{
                margin-bottom: 100px;
                width:100%;
                background-color: #2196F3;
            }
            #img{
                float:right;
                height:75px;
                width:50%;
                margin-top: 30px;
                margin-bottom: 30px;
            }

            #username{
                font-size:30px;
                margin-top:50px;
            }

            #username img{
                width: 50px;
                height: 50px;
                background-color: #fff;
            }

            #select {
                color:#fff;
                text-align: center;
                font-size: 40px;
                font-family: 'book antiqua';
                font-style: bold;
            } 

            /**#client img{
              width:200px;
              height:200px;
              margin-top:100px;
              margin-left:50px;
            }

            #emp img{
              width:200px;
              height:200px;
              margin-top:100px;
              margin-left:100px;
            }

            #job img{
              width:200px;
              height:200px;
              margin-top:80px;
              margin-left:100px;
            }

            #ann img{
              width:200px;
              height:200px;
              margin-top:80px;
              margin-left:150px;
            }

            #payroll img{
              width:200px;
              height:200px;
              margin-top:80px;
              margin-left:180px;
            }*/
            
    </style>
</head>

<body>
  <div class="col-lg-12 col-xs-12" id="header">
    <img src="assets/images/a5mmslogo.png" id="img"></img>
      <div id="username">
        <img src="assets/images/adminicon.png" class="img-circle"></img>
        <small>Welcome Admin</small>
      </div>
  </div>

    <div class="container" id="select">SELECT A MODULE</div>

    <div id="client" class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
        <a href="client.php">
            <img src="assets/images/client.png">
        </a>
    </div>

    <div id="emp" class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
        <a href="">
            <img src="assets/images/employee.png">
        </a>
    </div>

    <div id="job" class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
        <a href="">
            <img src="assets/images/jobs.png">
        </a>
    </div>

    <div id="ann" class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
        <a href="">
            <img src="assets/images/announcement.png">
        </a>
    </div>

    <div id="payroll" class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
        <a href="">
            <img src="assets/images/payroll.png">
        </a>
    </div>

</body>
</html>
