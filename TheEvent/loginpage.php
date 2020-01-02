  <?php
  session_start();

  if(isset($_SESSION['eid'])){
    header('location: ./dashboard.php');
  }

  ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>TheEvent - Bootstrap Event Template</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">
  

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <script src="https://kit.fontawesome.com/a08b218cf6.js" crossorigin="anonymous"></script>
  <link href="lib/venobox/venobox.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">

  <!-- =======================================================
    Theme Name: TheEvent
    Theme URL: https://bootstrapmade.com/theevent-conference-event-bootstrap-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
  <style>
    .submit{
      color: #fff;
    background: #f82249;
    padding: 7px 22px;
    border-radius: 50px;
    border: 2px solid #f82249;
    transition: all ease-in-out 0.3s;
    font-weight: 500;
    /*margin-left: 80px;
    margin-top: 2px;*/
    margin: auto;
    line-height: 1;
    font-size: 13px;
    }
  .submit:hover {
    background: white;
    color: black;
    border: 2px solid #f82249;
    font-weight: 500;
    font-size: 20px;
  }
  
  </style>
</head>

<body>

  <!--==========================
    Header
  ============================-->
  <header id="header" class="header-fixed">
    <div class="container">

      <div id="logo" class="pull-left">
        <!-- Uncomment below if you prefer to use a text logo -->
        <!-- <h1><a href="#main">C<span>o</span>nf</a></h1>-->
        <a href="index.html#intro" class="scrollto"><img src="img/el.png" alt="" title=""></a>
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="#intro">Home</a></li>
          <li><a href="index.html#about">About</a></li>
          <li><a href="index.html#speakers">Events</a></li>
          
          <li><a href="index.html#gallery">Gallery</a></li>
          <li><a href="index.html#supporters">sponsers</a></li>
          <li><a href="index.html#contact">Contact</a></li>
          <li class="buy-tickets"><a href="index.html#buy-tickets">Buy Tickets</a></li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

  <main id="main" class="main-page">

    <!--==========================
      Speaker Details Section
    ============================-->
    <section id="speakers-details" class="wow fadeIn">
      <div class="container">
        <div class="section-header">
          <h2>LOGIN HERE</h2>
          <!--<p>Praesentium ut qui possimus sapiente nulla.</p>-->
        </div>

        
          <section class="calender-area section-gap" id="speaker" tabindex="-1">
            <div class="container jumbotron" style="background-color: rgba(6, 12, 34, 0.98);;">
              
              
    <div class="bd-example">
       <ul class="list-group text-center">
          <center><strong>
    <li class="list-group-item active" style="background-color: #f82249;border: #f82249;">Please enter the authorisation key</li>
    </strong></center>
          <li class="list-group-item ">
         
          <form action="dashboard.php"method="POST">
             <br>
             <div class="input-group mb-3">
                
                <input required="" type="password" class="form-control" name="key" aria-describedby="basic-addon1" style="margin: auto; display: block; max-width: 400px;">
             </div>
             
    
    
             <div class="input-group mb-3">
             
              <button type="submit"  class="btn btn-primary submit">Login</button>
             </div>
             </form>
          </li>
       </ul>
    </div>
    
    
    
    
            
          </section>
          <!-- End speaker Area -->
    
          
        </div>
      </div>

    </section>
    

  </main>


  <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">


          <div class="col-lg-12">
            <center>
            <div class="social-links">
              <a href="https://www.facebook.com/msitprakriti/" class="facebook"><i class="fa fa-facebook"></i></a>
              <a href="https://www.instagram.com/prakriti_msit/" class="instagram"><i class="fa fa-instagram"></i></a>
              <a href="https://in.linkedin.com/company/prakriti-msit/" class="linkedin"><i class="fa fa-linkedin"></i></a>
            </div>
            </center>
            <div class="copyright">
              <strong>Copyright © 2020|Made with <i class="fas fa-heart" style="color:#f82249"></i> by team prakriti</strong><br>
            </div>
          </div>
            

          

        </div>
      </div>
    </div>

    
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/venobox/venobox.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>

  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>
</body>

</html>

