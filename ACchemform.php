<?php
session_start();

//connect to database
$db=mysqli_connect("localhost","root","","authentication");
if(isset($_POST['btn']))
{


    if(empty($_POST['acquantity'])|| empty($_POST['landmark']) || empty($_POST['serviceplace']) || empty($_POST['property'])|| empty($_POST['prefertime'])|| empty($_POST['servicedate']) || empty($_POST['emailform'])){
      $Error="<p class=\"err\">Fill the Required Fields</p>";
    } else {
 
	$acquantity = mysqli_real_escape_string($db, $_POST['acquantity']);
  $landmark=mysqli_real_escape_string($db,$_POST['landmark']);
  $serviceplace=mysqli_real_escape_string($db,$_POST['serviceplace']);
  $property=mysqli_real_escape_string($db,$_POST['property']);
  $prefertime=mysqli_real_escape_string($db,$_POST['prefertime']);
  $servicedate=mysqli_real_escape_string($db,$_POST['servicedate']);
  $emailform=mysqli_real_escape_string($db,$_POST['emailform']);
  $moredetails=mysqli_real_escape_string($db,$_POST['moredetails']);
  $sql="INSERT INTO acchemform(acquantity,landmark,serviceplace,property,prefertime,servicedate,emailform,moredetails) VALUES('$acquantity', '$landmark' , '$serviceplace' , '$property','$prefertime','$servicedate','$emailform','$moredetails')";
            mysqli_query($db,$sql);
            $_SESSION['message']="You are now logged in"; 
            $_SESSION['landmark']=$landmark;
            $_SESSION['serviceplace']=$serviceplace;
             $_SESSION['acquantity']=$acquantity;
              $_SESSION['property']=$property;
               $_SESSION['prefertime']=$prefertime;
                $_SESSION['servicedate']=$servicedate;
                $_SESSION['emailform']=$emailform;
                 $_SESSION['moredetails']=$moredetails;
            header("location:ACchemconfirm.php"); 
            
    }


}
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
                

               <center><h1>Submit Request</h1></center> 
            </div>

  <style>
    .err{
      color: #F00;
    }
    .success{
      color: #0F0;
    }
  </style>
</head>
<body>
        <table width="900" >
          <tr>
            <td>&nbsp;</td>
            <td>
              <?php
              if (isset($_POST['btn'])){
                if(isset($Error)){
                  echo $Error;
                } else {
                  echo $Success;
                }
              } else {
                echo " * Required Field ";
              }
              ?>
            </td>
          </tr>
        </table width="300">
        <!-- <form action="ACchemform.php" method="post"> -->
          <form method="post" action="ACchemform.php"> 
         <center>
          <table>
          <tr>
            <td><center> Units of wall mounted aircond you need for servicing? * </center></td>
            <td><input type="number" name="acquantity" placeholder="Enter value between 1 to 10" min="1" max="10"></td>
          </tr>
          <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
          <tr>
            <td><center> Landmark of service take place? * </center></td>
            <td><input type="text" name="landmark" placeholder="Type in your landmark area"></td>
          </tr>
          <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
          <tr>
            <td><center> Where do you need the service? * </center></td>
            <td><input type="text" name="serviceplace" placeholder="Type in your address"></td>
          </tr>
          <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
          <tr>
            <td><center> What type of property will the service be done at? * </center></td>
            <td> 
              <input type="radio" name="property" value="Landed"/>Landed
              <input type="radio" name="property" value="Highrise"/>Highrise
            </td>
          </tr>
          <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
          <tr>
          <td><center> What time do you prefer to have the service done? * </center></td>
          <td>
              <input type="radio" name="prefertime" value="Morning (Before 12PM)"/>Morning (Before 12PM)
              <input type="radio" name="prefertime" value="Afternoon (After 12PM)"/>Afternoon (After 12PM)
              <input type="radio" name="prefertime" value="Anytime"/>Anytime
            </td>
          </tr>
           <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
          <tr>
          <td><center> When do you need it? * </center></td>
          <td>
            <input type="date" name="servicedate" min="2017-12-28" max="2018-01-31">
            </td>
          </tr>
          <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
          <tr>
            <td><center> Email Address * </center></td>
            <td><input type="email" name="emailform" placeholder="Your email address"></td>
          </tr>
           <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
          <tr>
            <td><center> If above questions aren't enough in describing your job 
              <br>request, describe more in space provided </center></td>
            <td><input type="text" name="moredetails" placeholder="Describe more details here"></td>
          </tr>
          <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
          <tr>
            <td>&nbsp;</td>
            <td><input type="submit" name="btn" value="Submit"/>
          </td>
        </tr>
      </table>
      </center>
</form>

 <!-- Footer area-->
        <div class="footer-area">

            <div class=" footer">
                <div class="container">
                    <div class="row">

                        <div class="col-md-3 col-sm-6 wow fadeInRight animated">
                            <div class="single-footer">
                                <h4>About us </h4>
                                <div class="footer-title-line"></div>
                                <p>Handyman2you aim in connecting users with trusted and vetted service providers through a web platform - in just seconds a consumer can request quotes from a service provider.</p>
                                
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
                                <h4>Contact</h4>
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
