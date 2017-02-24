<?php

/* @var $this yii\web\View */

$this->title = 'A5MMS';
?>
 <style>

     body{
         position:relative;
      }

     #carousel {height:350px;width:100%;padding:0px;}

     .carousel-inner > .item > img,
     .carousel-inner > .item > a > img {
        height:300px; 
        width: 100%;
        margin: auto;
     }
     </style>

<div class="site-index">

<div class="container-fluid" id="carousel">
   <br/>
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
            <img src="img.jpg" id="img1"/>
            <div class="carousel-caption">
            </div>
         </div>

         <div class="item">
            <img src="img_chania2.jpg" id="img2"/>
            <div class="carousel-caption">
            </div>
         </div>

         <div class="item">
            <img src="img_flower.jpg" id="img3"/>
            <div class="carousel-caption">
         </div>
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

</div>

    <div class="body-content">
        <div class="row">
            <div class="col-lg-8 col-xs-12">
                <div class="panel panel-default">
                    <div class="panel-heading"  style="background-color:lightblue;">
                        <h3 style="text-align:center;">Job Vacancies</h3>
                    </div>

                <div class="panel panel-body">

                    <div class="col-lg-4 col-xs-12">
                    <div class="well">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                        dolore magna aliqua. </div ></div>

                    <div class="col-lg-4 col-xs-12">
                    <div class="well">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                        dolore magna aliqua.</div ></div >

                    <div class="col-lg-4 col-xs-12">
                    <div class="well">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                        dolore magna aliqua.</div ></div >

                    <a href = ""> <p style="text-align:center;">DOWNLOAD APPLICATION FORM</p></a>

                    </div>


                </div>
            </div>


            <div class="col-lg-4 col-xs-12">
                <div class="panel panel-default">
                    <div class="panel-heading"  style="background-color:lightgreen;">
                        <h3 style="text-align:center;">Contact Us</h3>
                    </div>

                    <div class="panel panel-body">
                        Villamor Air Base, Pasay City
                    </div>
                </div>

            </div>



            <div class="col-lg-4 col-xs-12">
                <div class="panel panel-default">
                    <div class="panel-heading"  style="background-color:yellow;">
                        <h3 style="text-align:center;">Announcements</h3>
                    </div>

                    <div class="panel panel-body">
                        Announcement 1<br/>
                        Announcement 2<br/>
                        Announcement 3
                    </div>
                </div>

            </div>


    </div>
</div>