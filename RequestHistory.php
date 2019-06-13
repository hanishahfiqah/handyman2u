<?php
session_start();
 
//connect to database
$db=mysqli_connect("localhost","root","","authentication");
 
 ?> 

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Source of House Services</title>
        <link rel="stylesheet" type="text/css" href="style.css"/>
        <meta name="description" content="GARO is a real-estate template">
        <meta name="author" content="Kimarotec">
        <meta name="keyword" content="html5, css, bootstrap, property, real-estate theme , bootstrap template">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700,800' rel='stylesheet' type='text/css'>

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
        <link rel="icon" href="favicon.ico" type="image/x-icon">
        <link rel="stylesheet" type="text/css" href="style.css"/>
        <link rel="stylesheet" href="assets/css/normalize.css">
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/fontello.css">
        <link href="assets/fonts/icon-7-stroke/css/pe-icon-7-stroke.css" rel="stylesheet">
        <link href="assets/fonts/icon-7-stroke/css/helper.css" rel="stylesheet">
        <link href="assets/css/animate.css" rel="stylesheet" media="screen">
        <link rel="stylesheet" href="assets/css/bootstrap-select.min.css"> 
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/icheck.min_all.css">
        <link rel="stylesheet" href="assets/css/price-range.css">
        <link rel="stylesheet" href="assets/css/owl.carousel.css">  
        <link rel="stylesheet" href="assets/css/owl.theme.css">
        <link rel="stylesheet" href="assets/css/owl.transitions.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/responsive.css">
    </head>
    <body>

        <div id="preloader">
            <div id="status">&nbsp;</div>
        </div>
        <!-- Body content -->
       
        <!--End top header -->

        <nav class="navbar navbar-default ">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navigation">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php"><img src="assets/img/001.png" alt=""></a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse yamm" id="navigation">
                    <div class="button navbar-right">
                        <button class="navbar-btn nav-button wow bounceInRight login" onclick=" window.open('http://localhost/h2u/home.php')" data-wow-delay="0.45s">Home</button>
                        <button class="navbar-btn nav-button wow fadeInRight" onclick=" window.open('http://localhost/h2u/RequestHistory.php')" data-wow-delay="0.48s">Request History</button>
                    </div>
                    <ul class="main-nav nav navbar-nav navbar-right">
                        <li class="dropdown ymm-sw " data-wow-delay="0.1s">
                            <!-- <a href="index.php" class="dropdown-toggle active" data-toggle="dropdown" data-hover="dropdown" data-delay="200">Home <b class="caret"></b></a>
                            <ul class="dropdown-menu navbar-nav">
                                <li>
                                    <a href="index-2.php">Home Style 2</a>
                                </li>
                                <li>
                                    <a href="index-3.php">Home Style 3</a>
                                </li>
                                <li>
                                    <a href="index-4.php">Home Style 4</a>
                                </li>
                                <li>
                                    <a href="index-5.php">Home Style 5</a>
                                </li>

                            </ul> -->
                        </li>

                        <li class="dropdown yamm-fw" data-wow-delay="0.4s">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="200">Services <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li>
                                    <div class="yamm-content">
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <h5>Home General Services</h5>
                                                <ul>
                                                    <li>
                                                        <a href="index-4.php">General Contracting / Handyman</a>
                                                    </li>
                                                    <li>
                                                        <a href="index-4.php">Flooring Repair</a>
                                                    </li>
                                                    <li>
                                                        <a href="index-4.php">Lock Installation</a>
                                                    </li>
                                                    <li>
                                                        <a href="plumbservices.php">Plumbing Services</a>
                                                    </li>
                                                    <li>
                                                        <a href="index-4.php">Roofing Repair</a>
                                                    </li>
                                                    <li>
                                                        <a href="index-4.php">Wiring / Power Point</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-sm-3">
                                                <h5>APPLIANCES SERVICES</h5>
                                                <ul>
                                                     <li>
                                                        <a href="ACservices.php">Aircond Services</a>
                                                    </li>
                                                    <li>
                                                        <a href="index-4.php">Fan Installation</a>
                                                    </li>
                                                    <li>
                                                        <a href="index-2.php">Lighting Installation</a>
                                                    </li>
                                                    <li>
                                                        <a href="index-4.php">Lighting Repair</a>
                                                    </li>
                                                    <li>
                                                        <a href="index-4.php">Refridgerator Repair</a>
                                                    </li>
                                                    <li>
                                                        <a href="index-4.php">TV Repair</a>
                                                    </li>
                                                    <li>
                                                        <a href="index-4.php">Washer / Dryer Repair</a>
                                                    </li>
                                                    <li>
                                                        <a href="index-4.php">Water Heater Installation</a>
                                                    </li> 
                                                    <li>
                                                        <a href="index-4.php">Water Heater Repair</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-sm-3">
                                                <h5>Home Renovation & Improvement</h5>
                                                <ul>
                                                    <li>
                                                        <a href="index-4.php">Cabinetry</a>
                                                    </li>
                                                    <li>
                                                        <a href="index-4.php">Interior Design Consultancy</a>
                                                    </li>
                                                    <li>
                                                        <a href="index-4.php">Painting</a>
                                                    </li>
                                                    <li>
                                                        <a href="index-4.php">Pest Control Service</a>
                                                    </li>
                                                </ul>
                                            
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>

                        <!-- <li class="wow fadeInDown" data-wow-delay="0.5s"><a href="contact.html">Contact</a></li> -->
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
        <!-- End of nav bar -->  

        <div class="page-head"> 
            <div class="container">
                <div class="row">
                    <div class="page-head-content">
                        <h1 class="page-title">Request History</h1>               
                    </div>
                </div>
            </div>
        </div>
        <!-- End page header -->


        <!-- AC area -->
        <div class="content-area recent-property" style="background-color: #FFF;">
            <div class="container">   
                <div class="row">
                    <div class="col-md-9 pr-30 padding-top-40 properties-page user-properties">
                        <div class="section"> 
                            <div id="list-type" class="proerty-th-list">
                        <div class="col-md-4 p0">
                                    <div class="box-two proerty-item">
                            <div class="row comment">
                                <div class="col-sm-3 col-md-2 text-center-xs">
                                    <p>
                                        <!--<img src="assets/img/unnamed.png" class="img-responsive img-circle" alt=""-->
                                    </p>
                                </div>
                                <div class="col-sm-9 col-md-10">
                                    <h5><a href="reqForm1.php"> Aircond Chemical Service </a></h5>
                                    <p class="posted"><i class="fa fa-clock-o"></i> December 30, 2017 at 12:00 am</p>
                                    <p>STATUS: Waiting for quotes</p>
                                    <!-- <div class="dealer-action pull-left">      
                                                    <a href="property-1.html" class="button">View</a>      
                                                    <a href="#" class="button delete_user_car">Delete</a>
                                                </div> -->
                                    </div>
                                </div>  
                            </div>
                        </div>                                                                                   
                    </div>
                     <div id="list-type" class="proerty-th-list">
                        <div class="col-md-4 p0">
                                    <div class="box-two proerty-item">
                            <div class="row comment">
                                <div class="col-sm-3 col-md-2 text-center-xs">
                                    <p>
                                        <!--<img src="assets/img/unnamed.png" class="img-responsive img-circle" alt=""-->
                                    </p>
                                </div>
                                <div class="col-sm-9 col-md-10">
                                    <h5><a href="reqForm2.php"> Plumbing Repair </a></h5>
                                    <p class="posted"><i class="fa fa-clock-o"></i> December 23, 2017 at 12:00 am</p>
                                    <p>STATUS: Quotes recieved</p>
                                    <!-- <div class="dealer-action pull-left">      
                                                    <a href="property-1.html" class="button">View</a>      
                                                    <a href="#" class="button delete_user_car">Delete</a>
                                                </div> -->
                                    </div>
                                </div>  
                            </div>
                        </div>                                                                                   
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

 <!-- Footer area-->
        <div class="footer-area">

            <div class=" footer">
                <div class="container">
                    <div class="row">

                        <div class="col-md-3 col-sm-6 wow fadeInRight animated">
                            <div class="single-footer">
                                <h4>About us </h4>
                                <div class="footer-title-line"></div>
                                <p>Handyman2you aim in connecting users with trusted and vetted service providers through a web platform - in just seconds a consumer can request quotes from a service provider. </p>
                                
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 wow fadeInRight animated">
                            <div class="single-footer">
                                <h4>Quick links </h4>
                                <div class="footer-title-line"></div>
                                <ul class="footer-menu">
                                    <li><a href="faq.html">Faq</a>  </li> 
                                    <li><a href="faq.html">Terms </a>  </li> 
                                </ul>
                            </div>
                        </div>
                        
                        <div class="col-md-3 col-sm-6 wow fadeInRight animated">
                            <div class="single-footer news-letter">
                                <h4>Contact </h4>
                                <div class="footer-title-line"></div>
                               <ul class="footer-adress">
                                    <li><i class="pe-7s-map-marker strong"> </i> H2Y Tower, KL Sentral, KL, Malaysia</li>
                                    <li><i class="pe-7s-mail strong"> </i> info@h2y.com</li>
                                    <li><i class="pe-7s-call strong"> </i> +1 908 967 5906</li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="footer-copy text-center">
                <div class="container">
                    <div class="row">
                        <div class="pull-left">
                           <span> -C- <a href="http://www.KimaroTec.com">HANDYMAN2YOU</a> , All rights reserved 2017  </span> 
                        </div> 
                        <div class="bottom-menu pull-right"> 
                            <ul> 
                                <li><a class="wow fadeInUp animated" href="#" data-wow-delay="0.2s">Home</a></li>
                                <li><a class="wow fadeInUp animated" href="#" data-wow-delay="0.3s">Property</a></li>
                                <li><a class="wow fadeInUp animated" href="#" data-wow-delay="0.4s">Faq</a></li>
                                <li><a class="wow fadeInUp animated" href="#" data-wow-delay="0.6s">Contact</a></li>
                            </ul> 
                        </div>
                    </div>
                </div>
            </div>

        </div>
          

        <script src="assets/js/vendor/modernizr-2.6.2.min.js"></script>
        <script src="assets/js//jquery-1.10.2.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/bootstrap-select.min.js"></script>
        <script src="assets/js/bootstrap-hover-dropdown.js"></script>
        <script src="assets/js/easypiechart.min.js"></script>
        <script src="assets/js/jquery.easypiechart.min.js"></script>
        <script src="assets/js/owl.carousel.min.js"></script>
        <script src="assets/js/wow.js"></script>
        <script src="assets/js/icheck.min.js"></script>

        <script src="assets/js/price-range.js"></script> 
        <script src="assets/js/jquery.bootstrap.wizard.js" type="text/javascript"></script>
        <script src="assets/js/jquery.validate.min.js"></script>
        <script src="assets/js/wizard.js"></script>

        <script src="assets/js/main.js"></script>
</body>
</html>