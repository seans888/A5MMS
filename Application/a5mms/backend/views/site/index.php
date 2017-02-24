<?php

/* @var $this yii\web\View */

$this->title = 'Admin Page';
?>



<style>
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

    #client{
        position: absolute;
        margin-top: 60px;
        margin-left: 103px;
    }

    #bclient{
        position: absolute;
        margin-top: 155px;
        margin-left: 95px;
        color: #ffffff;
        font-size: 25px;
    }
    #job{
        position: absolute;
        margin-top: 60px;
        margin-left: 370px;
    }
    #bjob{
        position: absolute;
        margin-top: 155px;
        margin-left: 370px;
        color: #ffffff;
        font-size: 25px;
    }
    #emp{
        position: absolute;
        margin-top: 60px;
        margin-left: 635px;
    }
    #bemp{
        position: absolute;
        margin-top: 155px;
        margin-left: 635px;
        color: #ffffff;
        font-size: 25px;
    }
    #announ{
        position: absolute;
        margin-top: 60px;
        margin-left: 900px;
    }
    #bannoun{
        position: absolute;
        margin-top: 155px;
        margin-left: 880px;
        color: #ffffff;
        font-size: 25px;
    }
    #payroll{
        position: absolute;
        margin-left: 370px;
        margin-top: 260px;
    }
    #bpayroll   {
        position: absolute;
        margin-left: 370px;
        margin-top: 355px;
        color: #ffffff;
        font-size: 25px;
    }

    a{
        text-decoration: none;
        color: #d9b289;
    }


     @media screen and (max-width: 400px){
        #img{
            height:80px;
            width:100%;
        }

        #username{
        font-size:20px;
        margin-top:50px;
        }

        #username img{
        margin-bottom: 15px;
        }

    }

    @media screen and (max-width: 600px){
        #img{
            height:80px;
            width:100%;
        }
    }

</style>


<div class="site-index">
    <div class="col-lg-12 col-xs-12" id="header">
        <img src="img/a5mmslogo.png" id="img"></img>
            <div id="username">
                <img src="img/adminicon.png" class="img-circle">
                    <?php echo 'Welcome '.strtoupper(Yii::$app->user->identity->username) .'';?>
                </img>
            </div>
    </div>

    <div class="container" id="select">SELECT A MODULE
    </div>


    <div id="client" class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
        <a href="" name="client">
            <img border="0" src="img/client.png" width="100" height="100">
        </a>
    </div>
    <div id="bclient" class="col-lg-4 col-md-4 col-sm-4 col-xs-12">CLIENTS</div>
    
    <div id="job" class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
        <a href="">
            <img border="0" src="img/jobs.png" width="100" height="100">
        </a>
    </div>
    <div id="bjob" class="col-lg-4 col-md-4 col-sm-4 col-xs-12">JOBS</div>
    
    <div id="emp" class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
        <a href="">
            <img border="0" src="img/employee.png" width="100" height="100">
        </a>
    </div>
    <div id="bemp" class="col-lg-4 col-md-4 col-sm-4 col-xs-12">EMPLOYEES</div>
    
    <div id="announ" class="col-lg-6 col-md-6 col-sm-4 col-xs-12">
        <a href="">
            <img border="0" src="img/announcement.png" width="100" height="100">
        </a>
    </div>
    <div id="bannoun" class="col-lg-6 col-md-6 col-sm-4 col-xs-12">ANNOUNCEMENTS</div>
    
    <div id="payroll" class="col-lg-6 col-md-6 col-sm-4 col-xs-12">
        <a href="">
            <img border="0" src="img/payroll.png" width="100" height="100">
        </a>
    </div>
    <div id="bpayroll" class="col-lg-6 col-md-6 col-sm-6 col-xs-12">PAYROLL</div>
</div>
