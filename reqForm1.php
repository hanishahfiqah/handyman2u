<?php
session_start();
 
//connect to database
$db=mysqli_connect("localhost","root","","authentication");

//$ACchem_id =$_SESSION['ACchem_id'];

//read serviceplace
//$result=mysqli_query($db,"SELECT * FROM acchemform WHERE ACchem_id=$id");
 //$fetched_row=mysqli_fetch_array($result); 

 
 ?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Source of House Services</title>
  <link rel="stylesheet" type="text/css" href="style.css"/>
         <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700,800' rel='stylesheet' type='text/css'>

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
        <link rel="icon" href="favicon.ico" type="image/x-icon">

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
          <div class="header">
             <div class="container">
                          <div class="row">
                              <div class="col-md-5 col-sm-8  col-xs-12">
                                  <div class="header-half header-call">
                                      <p>
                                          <!--<span><i class="pe-7s-call"></i> +1 234 567 7890</span>
                                          <span><i class="pe-7s-mail"></i> your@company.com</span>-->
                                      </p>
                                  </div>
                              </div>
                              <div class="col-md-2 col-md-offset-5  col-sm-3 col-sm-offset-1  col-xs-12">
                                  <div class="header-half header-social">
                                      <ul class="list-inline">
                                          
                                      </ul>
                                  </div>
                              </div>
                          </div>
                      </div>
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
                

               <center><h1>Request Details</h1></center> 
            </div>	
		</div>

		<center>
			
			<center><table width="200" >
          <tr>
            <td>&nbsp;</td>
            <td>
             <h5>RequestID : 22<h5>
            </td>
          </tr>
        </table width="300">
			<div>
				<table width=500>
				<td><h5>Service place </h5></td> <td><h5><b><?php echo $_SESSION['serviceplace']; ?></b></h5> </td></tr>
				<tr> <td>
				<h5>Amount of AC to be mounted</h5></td> <td><h5><b> <?php echo $_SESSION['acquantity']; ?></b></h5></td></tr>
				<tr><td>
				<h5>Your property's type </h5></td> <td><h5><b><?php echo $_SESSION['property']; ?></b></h5></td></tr>
				<tr><td>
				<h5>Your preferred time for servicing </h5></td> <td><h5><b><?php echo $_SESSION['prefertime']; ?></b></h5></td></tr>
				<tr><td>
				<h5>Date chosen </h5></td> <td><h5><b><?php echo $_SESSION['servicedate']; ?></b></h5></td></tr>
				<tr><td>
				<h5>Your email address </h5></td> <td><h5><b><?php echo $_SESSION['emailform']; ?></b></h5></td></tr>
				<tr><td>
				<h5>Other details </h5></td> <td><h5><b><?php echo $_SESSION['moredetails']; ?></b></h5></td></tr>
				<tr><td>&nbsp;</td>
				<td><button><a href='delete.php?del=$row[ACchem_id=22]' class="button" style="vertical-align:middle"><span> Cancel Request</span></a></button></td>
          <tr><td></td></tr>
					</tr></table></div>
		<br><br>
		</center> 

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