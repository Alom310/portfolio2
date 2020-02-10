<?php 
    $result = "";
    $error  = "";
if(isset($_POST['submit']))
{
    require 'phpmailer/PHPMailerAutoload.php';
    $mail = new PHPMailer;
    //smtp settings
    $mail->isSMTP(); // send as HTML
    $mail->Host = "smtp.gmail.com"; // SMTP servers
    $mail->SMTPAuth = true; // turn on SMTP authentication
    $mail->Username = "alomrelay@gmail.com"; // Your mail
    $mail->Password = 'Relay1234$'; // Your password mail
    $mail->Port = 587; //specify SMTP Port
    $mail->SMTPSecure = 'tls';
    $mail->setFrom($_POST['email'],$_POST['name']);
    $mail->addAddress('alomrelay@gmail.com');
    $mail->addReplyTo($_POST['email'],$_POST['name']);
    $mail->isHTML(true);
    $mail->Subject='Form Submission:' .$_POST['subject'];
    $mail->Body='<h3>Name :'.$_POST['name'].'<br> Email: '.$_POST['email'].'<br>Message: '.$_POST['message'].'</h3>';
    if(!$mail->send())
    {
        $error = "Something went worng. Please try again.";
    }
    else 
    {
        $result="Thanks\t" .$_POST['name']. " for contacting us.";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Alomgir Hossain's Portfolio</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,700" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
    <div class="KW_progressContainer">
      <div class="KW_progressBar">

      </div>
    </div>
    <div class="page">
    <nav id="colorlib-main-nav" role="navigation">
      <a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle active"><i></i></a>
      <div class="js-fullheight colorlib-table">
      	<div class="img" style="background-image: url(images/alom.jpg);"></div>
        <div class="colorlib-table-cell js-fullheight">
          <div class="row no-gutters">
            <div class="col-md-12 text-center">
              <h1 class="mb-4"><a href="index.html" class="logo">Alomgir Hossain</a></h1>
              <ul>
                <li><a href="index.html"><span><small>01</small>Home</span></a></li>
                <li><a href="about.html"><span><small>02</small>Resume</span></a></li>
                <li><a href="portfolio.html"><span><small>03</small>Portfolio</span></a></li>
                <li class="active"><a href="contact.html"><span><small>04</small>Contact</span></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </nav>
    
    <div id="colorlib-page">
      <header>
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="colorlib-navbar-brand">
                <a class="colorlib-logo" href="index.html"><span class="logo-img" style="background-image: url(images/alom.jpg);"></span>Alomgir Hossain</a>
              </div>
              <a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle"><i></i></a>
            </div>
          </div>
        </div>
      </header>

      <section class="ftco-section contact-section">
        <div class="container mt-5">
          <div class="row d-flex mb-5 contact-info">
            <div class="col-md-12 mb-4">
              <h2 class="h4">Get In Contact With Me!</h2>
            </div>
            <!-- <div class="w-100"></div>
            <div class="col-md-3">
              <p><span>Address:</span> 198 West 21th Street, Suite 721 New York NY 10016</p>
            </div>
            <div class="col-md-3">
              <p><span>Phone:</span> <a href="tel://1234567920">+ 1235 2355 98</a></p>
            </div>
            <div class="col-md-3">
              <p><span>Email:</span> <a href="mailto:info@yoursite.com">info@yoursite.com</a></p>
            </div>
            <div class="col-md-3">
              <p><span>Website:</span> <a href="#">yoursite.com</a></p>
            </div> -->
          </div>
          <div class="row block-9">
            <div class="col-md-6 pr-md-5">
              <form action="" method="post" id="contact-form">
                <div class="form-group">
                  <input type="text" name="name" class="form-control" placeholder="Your Name">
                </div>
                <div class="form-group">
                  <input type="text" name="email" class="form-control" placeholder="Your Email">
                </div>
                <div class="form-group">
                  <input type="text" name="subject" class="form-control" placeholder="Subject">
                </div>
                <div class="form-group">
                  <textarea name="message" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
                </div>
                <div class="form-group">
                  <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
                </div>
              </form>
            
            </div>
            <!-- <div class="col-md-6" id="map"></div> -->
            <iframe width="450" height="350" frameborder="0" style="border:0"src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJIQBpAG2ahYAR_6128GcTUEo&key=AIzaSyAVi2f6ymqCncDvu6tMlbsFGPq-kVK5WGE" allowfullscreen></iframe>
          </div>
        </div>
      </section>
      
      <footer class="ftco-footer ftco-bg-dark ftco-section">
        <div class="container">
          <div class="row mb-5 justify-content-center">
            <div class="col-md-5 text-center">
              <div class="ftco-footer-widget mb-5">
                <ul class="ftco-footer-social list-unstyled">
                  <li class="ftco-animate"><a href="http://www.linkedin.com/in/alomgir-hossain/" target="_blank"><span class="icon-linkedin"></span></a></li>
                  <li class="ftco-animate"><a href="http://www.github.com/alom310/" target="_blank"><span class="icon-github"></span></a></li>
                  <!-- <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li> -->
                </ul>
              </div>
              <div class="ftco-footer-widget">
                <!-- <h2 class="mb-3">Contact Me!</h2> -->
                <p class="h3 email"><a href="contact.html">Contant Me!</a></p>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 text-center">

              <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
      <!-- Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true" style="color: red;"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a> -->
      <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
            </div>
          </div>
        </div>
      </footer>

      <!-- loader -->
      <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>

      </div>

    </div>


    <script src="js/jquery.min.js"></script>
    <script src="js/jquery-migrate-3.0.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>
    <script src="js/scrollax.min.js"></script>
    <script src="js/bootstrap-datepicker.js"></script>
    <script src="js/jquery.timepicker.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="js/google-map.js"></script>
    <script src="js/main.js"></script>
    
  </body>
</html>