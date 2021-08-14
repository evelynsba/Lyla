<?php
error_reporting(E_ALL);
require_once 'class/users.php';
$u = new Users;
$u->connection("lyla_beauty", "localhost", "root", "");
$allProfessionals = $u->getAllProfessionals();
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
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/menu_sideslide.css">
    <link rel="stylesheet" href="css/main.css">    
    <link rel="stylesheet" href="css/responsive.css">

  </head>
  
  <body>
   <?php
    include('header.php');
    ?>
      <!-- Main Carousel Section -->
      <div id="carousel-area">
        <div id="carousel-slider" class="carousel slide carousel-fade" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carousel-slider" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-slider" data-slide-to="1"></li>
          </ol>
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
              <img src="img/slider/banner.jpg" alt="">
              <div class="carousel-caption text-left">
                <h2 class="wow fadeInRight" data-wow-delay="0.2s">The best beauty clinic of Dublin</h2>  
                <h4 class="wow fadeInRight" data-wow-delay="0.6s">Get your slot now</h4>
                <a href="login.php" class="btn btn-lg btn-common btn-effect wow fadeInRight" data-wow-delay="0.9s">Book here</a>
              </div>
            </div>
            <div class="carousel-item">
              <img src="img/slider/banner5.jpg" alt="">
              <div class="carousel-caption text-center">
                <h3 class="wow fadeInDown" data-wow-delay="0.3s">We care for you</h3>
                <h2 class="wow bounceIn" data-wow-delay="0.6s">Get to know our services</h2> 
                <a href="#services" class="btn btn-lg btn-common btn-effect wow fadeInUp" data-wow-delay="1.2s">View Services</a>
              </div>
            </div>
          </div>
          <a class="carousel-control-prev" href="#carousel-slider" role="button" data-slide="prev">
            <span class="carousel-control" aria-hidden="true"><i class="lni-chevron-left"></i></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carousel-slider" role="button" data-slide="next">
            <span class="carousel-control" aria-hidden="true"><i class="lni-chevron-right"></i></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>  

    <!-- Header Section End --> 

    <!-- Services Section Start -->
    <section id="services" class="section">
      <div class="container">
        <div class="section-header">          
          <h2 class="section-title">Our Services</h2>
          <span>Services</span>
          <p class="section-subtitle">We look after your skin and body.<br> All services are done by using the best cosmetics and technics. We have a range of beauty procedures for your skin and body.</p>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-6 col-xs-12">
            <div class="item-boxes services-item wow fadeInDown" data-wow-delay="0.2s">
              <div class="icon color-1">
                <img src="img/labios.png" alt="" style="width: 80px;">
              </div>
              <h4>Lip Blushing</h4>
              <p>The tattoo is a simple wash of sheer color across the entire lip. Duration: a year.</p>
              <p> Price: 450 &euro;</p>
              <p>Professional: Leandro Parker</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-xs-12">
            <div class="item-boxes services-item wow fadeInDown" data-wow-delay="0.4s">
              <div class="icon color-2">
                <img src="img/rimel-para-os-olhos.png" alt="" style="width: 80px;">
              </div>
              <h4>Microblanding</h4>
              <p> It is a eyebrown tatoo. Duration: 12 to 18 months.</p>
              <p> Price: 400 &euro;</p>
              <p>Professional: Joelma Phil</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-xs-12">
            <div class="item-boxes services-item wow fadeInDown" data-wow-delay="0.6s">
              <div class="icon color-3">
                <img src="img/tratamento-facial.png" alt="" style="width: 80px;">
              </div>
              <h4>Deep Cleansing</h4>
              <p>Deep skin clening with esfolation. Duration: 1 month.
              </p>
              <p> Price: 65 &euro;</p>
              <p>Professional: Lizy Murphy</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-xs-12">
            <div class="item-boxes services-item wow fadeInDown" data-wow-delay="0.8s">
              <div class="icon color-4">
                <img src="img/dieta.png" alt="" style="width: 80px;">
              </div>
              <h4>Body massage drainage</h4>
              <p>a massage that improves the movimentation of the fluids around the body.
              </p>
              <p> Price: 55 &euro;</p>
              <p>Professional: Peter Nelson</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-xs-12">
            <div class="item-boxes services-item wow fadeInDown" data-wow-delay="1s">
              <div class="icon color-5">
                <img src="img/ame-seu-corpo.png" alt="" style="width: 80px;">
              </div>
              <h4>Thai massage.</h4>
              <p>Thai massage is focused on improving the flow of energy throughout your body.
              </p>
              <p> Price: 65 &euro;</p>
              <p>Professional: Peter Nelson</p>
            </div>
          </div>
    </section>
    <!-- Services Section End -->

    <!-- Why choose us Section Start -->
    <section id="why" class="section">
      <div class="container">
        <div class="section-header">          
          <h2 class="section-title">Why Choose Us</h2>
          <p class="section-subtitle">We are the best clinic in the city, we can offer to you the best products and also the professionals.
          </p>
        </div>
        </div>
      </div>
    </section>

    </section>
    <!-- Why chose us Section Ends --> 

    <!-- Start Pricing Table Section -->
    <div id="pricing" class="section pricing-section"> 
      <div class="container">
        <div class="section-header">          
          <h2 class="section-title">Packages prices</h2>
        </div>

        <div class="row pricing-tables">
          <div class="col-lg-4 col-md-4 col-xs-12">
            <div class="pricing-table">
              <div class="pricing-details">
                <h2>Deep Cleansing Package</h2>
                <div class="price">200 &euro; <span>/mo</span></div>
                <ul>
                  <li>  4 sessions of deep Cleansing.
                  </li>
                  <li>Each week a new mask</li>
                  <li>Each week a new treatment for your skin</li>
                </ul>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-4 col-xs-12">
            <div class="pricing-table pricing-big">
              <div class="pricing-details">
                <h2>Body massage drainage package</h2>
                <div class="price">190 &euro; <span>/mo</span></div>
                <ul>
                  <li>4 sessions of body massage.</li>
                  <li>Each week a new treatment to help your body to regenerate</li>
                </ul>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-4 col-xs-12">
            <div class="pricing-table">
              <div class="pricing-details">
                <h2>Thai massage package</h2>
                <div class="price">210 &euro; <span>/mo</span></div>
                <ul>
                  <li>Get your body on the flow every week</li>
                  <li>the best products to soft your skin</li>
                  <li>The best price</li>
                </ul>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div> 
    <!-- End Pricing Table Section -->

    <!--Booking Section Start -->
    <section id="booking" class="section">      
      <div class="booking-form">
        <div class="container">
          <div class="section-header">          
            <h2 class="section-title">Booking form</h2>
          </div>
          <div class="row">          
            <div class="col-lg-9 col-md-9 col-xs-12">
              <div class="booking-block">
                <form method="GET" id="" action="newappointment.php">
                  <div class="row">
                  </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <input type="text" placeholder="email" name="email" 
                        
                        
                        id="email" class="form-control" required data-error="Please enter your email">
                        <div class="help-block with-errors"></div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group"> 
                      <p>
                        <!-- <label>Date of the service:</label> -->
                        <input class="form-control" type="date" name="date" >
                        <br><span class="error"><?php echo isset($errors['date']) ? $errors['date'] : '';?></span>
                    </p>
                        <div class="help-block with-errors"></div>
                      </div>
                    </div>
                    <div class=" col-md-6">
                      <div class="form-group"> 
                      <p>
                        <label>Professional</label>
                        <select  class= "form-control" name="professional" id="professional">            
                        <?php foreach($allProfessionals as $professional){
                    
                    
                    ?>
                    
                    <option value="<?php echo $professional['professional_id']?>"><?php echo $professional["professional_name"]?> </option>
                    <?php }
                    
                
                      ?>
                        </select>
                    </p>
                        <div class="help-block with-errors"></div>
                      </div>
                    </div>
                    <div class="col-md-12 align-items-center justify-content-center">
                      <div class="submit-button">
                        <button class="btn btn-common btn-effect" id="submit" type="submit">Submit</button>
                        <div id="msgSubmit" class="h3 hidden"></div> 
                        <div class="clearfix"></div> 
                    </div>
                  </div>            
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>            
    </section>
    <!-- Booking Section End -->

    <!-- Footer Area Start -->
    
    <?php
    include('footer.php');
    ?>

    <!-- Footer Section End --> 

    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="js/jquery-min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/classie.js"></script>
    <script src="js/owl.carousel.js"></script>    
    <script src="js/jquery.stellar.min.js"></script>    
    <script src="js/jquery.nav.js"></script>    
    <script src="js/scrolling-nav.js"></script>    
    <script src="js/jquery.easing.min.js"></script>     
    <script src="js/jquery.vide.js"></script>
    <script src="js/jquery.counterup.min.js"></script>    
    <script src="js/jquery.magnific-popup.min.js"></script>    
    <script src="js/waypoints.min.js"></script>    
    <script src="js/contact-form-script.js"></script>   
    <script src="js/main.js"></script>    
  </body>
</html>