<?php
session_start();
 
$dash=json_decode(file_get_contents('https://enva20.herokuapp.com/events/'.$_POST['key'].'/'),1);

//print_r($dash);die;

 if(empty($dash['success'])){
  header('location: ./loginpage.php?error=Wrong_Key');die;
 }
 else{
 $col=$dash['users'];
 $_SESSION['eid'] = $_POST['key'];
 }

 if(!isset($_SESSION['eid'])){
  header('location: ./loginpage.php');
}
  ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Dashboard</title>
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
  <link href="lib/venobox/venobox.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>dashb</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
     
     <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/bootstrap-table@1.15.5/dist/bootstrap-table.min.css">
    <link rel="stylesheet" type="text/css" href="dashboard.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.css">
  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">

</head>


<body>

  <!--==========================
    Header
  ============================-->
  <section>
  <header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
        <!-- Uncomment below if you prefer to use a text logo -->
        <!-- <h1><a href="#main">C<span>o</span>nf</a></h1>-->
        <a href="#intro" class="scrollto"><img src="img/logo.png" alt="" title=""></a>
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="#intro">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#speakers">Events</a></li>
          <li><a href="#schedule">Schedule</a></li>
          <li><a href="#venue">Venue</a></li>
          <li><a href="#gallery">Gallery</a></li>
          <li><a href="#supporters">Sponsors</a></li>
          <li><a href="#contact">Contact</a></li>
          <li class="buy-tickets"><a href="./logout.php">Logout</a></li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

</section>


<section class="jumbotron">
    <h1 class="text-center modelh1">Registered users for Enva</h1>
    <div class="text-center">
    <button class="btn btn-danger general">Download Spreadsheet</button>
    </div>
    <table id="dtBasicExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
  <thead>
    <tr>
      <th class="th-sm">Unique id</th>
      <th class="th-sm">Name</th>
      <th class="th-sm">Email</th>
      <th class="th-sm">Phone no
      <th class="th-sm">attendees</th>
      <th class="th-sm">Amount</th>
      <th class="th-sm">Payment Status </th>
      <th class="th-sm">Change Payment Status</th>
      
    </tr>
  </thead>
  <tbody>

    <?php 
//    print_r($col); die;

   foreach($col as $entry){
    echo '<tr>
      <td>'.$entry['_id'].'</td>
      <td>'.$entry['name'].'</td>
      <td>'.$entry['email'].'</td>
      <td>'.$entry['phone'].'</td>
      <td>'.$entry['registered'][0]['variant'].'</td>
      <td>'.$entry['registered'][0]['amount'].'</td>
      <td>'.$entry['registered'][0]['status'].'</td>
      <td>';

      
      if($entry['registered'][0]['status']!='paid_online'||$entry['registered'][0]['status']!='paid_offline'){
        echo ' <a class="btn btn-danger" href="https://enva20.herokuapp.com/changeStatus?eid='.$_SESSION['eid'].'&uid='.$entry['_id'].'&status=paid_online"</a></td>';
      } else echo '<td>-</td>';
    echo '</tr>';
  }


  // if(isset($_GET['Paid']))
  // {
  //   $resp=json_decode(file_get_contents("https://enva20.herokuapp.com/changeStatus?eid=".$keys."&uid=".$_GET['Paid']."&status=paid_online"),1);
  //   print_r($resp);
  // }
?>
    <!-- <tr>
      <td>2</td>
      <td>b</td>
      <td>b@gmail.com</td>
      <td>999999999</td>
      <td>performer</td>
      <td>-</td>
      <td>#1234</td>
      <td>Not paid</td>
    </tr>
    <tr>
      <td>3</td>
      <td>c</td>
      <td>c@gmail.com</td>
      <td>999999999</td>
      <td>performer</td>
      <td>-</td>
      <td>#1234</td>
      <td>Not paid</td>
    </tr> -->
        
   
    
  </tbody>
  
</table>
  </section>

  

  <!--==========================
    Footer
  ============================-->
 




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
