
<?php
 session_start();
?> 
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="Bootstrap, Landing page, Template, Registration, Landing">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="author" content="Grayrids">
    <link rel="shortcut icon" href="img/favicon-lyla.ico" type="image/x-icon">
    <title>Lyla Beauty Clinic</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/line-icons.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.css">
    <link rel="stylesheet" href="css/nivo-lightbox.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/menu_sideslide.css">
    <link rel="stylesheet" href="css/main.css">    
    <link rel="stylesheet" href="css/responsive.css">

  </head>
  
  <body>
    <!-- Header Section Start -->
    <header id="slider-area">  
      <nav class="navbar navbar-expand-md fixed-top scrolling-navbar bg-white">
        <div class="container">          
          <a class="navbar-brand" href="index.php">Lyla Beauty Clinic</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          </button>
          <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto w-100 justify-content-end">
              <li class="nav-item">
                <a class="nav-link page-scroll" href="index.php">Home</a>
              </li>
              <!-- <li class="nav-item">
                <a class="nav-link page-scroll" href="#services">Services</a>
              </li>  
              <li class="nav-item">
                <a class="nav-link page-scroll" href="#features">About us</a>
              </li>                            
       
              <li class="nav-item">
                <a class="nav-link page-scroll" href="#pricing">Pricing</a>
              </li> -->
              <?php 
              
              if(!isset($_SESSION['patient_id']))
                {

                
              ?>  
                <li class="nav-item">
                <a class="nav-link page-scroll" href="#services">Services</a>
              </li>  
              <li class="nav-item">
                <a class="nav-link page-scroll" href="#features">About us</a>
              </li>                            
       
              <li class="nav-item">
                <a class="nav-link page-scroll" href="#pricing">Pricing</a>
              </li>
              <li class="nav-item">
                <a class="nav-link page-scroll" href="login.php">Login</a>
              </li> 
              <?php } else {

                ?>
                <li class="nav-item">
                <a class="nav-link page-scroll" href="booking.php">Book</a>
                <li class="nav-item">
                <a class="nav-link page-scroll" href="patientAppointments.php">My Bookings</a>
              </li>
              <li class="nav-item align-items">
                <a class="nav-link page-scroll" href="logout.php">logout</a>
              </li>  <?php } ?>
            </ul>              
          </div>
        </div>
      </nav> 
    </header>
    <!-- Header Section End --> 
</body>
</html>