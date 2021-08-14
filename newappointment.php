<?php
error_reporting(E_ALL);
require_once 'class/users.php';
$u = new Users;
$u->connection("lyla_beauty", "localhost", "root", "");
$professionalId = $_GET["professional"];
$date = $_GET["date"];
$allSessions = $u->getProfessionalSessions($professionalId, $date);
$patientEmail = $_GET['email'];
$patientRegistered = $u->checkIfEmailIsRegistered($patientEmail);
$patient = $u->getPatient($patientRegistered);
?>

<!-- This page is the sequence of the booking process where checks if the patient is registered if yes allows this person to see the time slot avalaible for the professional chosen -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    
    <title>Document</title>
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/menu_sideslide.css">
    <link rel="stylesheet" href="css/main.css">    
    <link rel="stylesheet" href="css/responsive.css">
</head>
<body>
<div id="appointment-form" class="section">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-5 col-md-12 col-xs-12">
            <div class="appointment-form">
              <div class="form-wrapper">
                <div class="sub-title text-center"> 
                    <h2 >Confirm your Booking</h2>
                </div>
            <?php if($patientRegistered){
                ?>        
            <form method="GET" action="appointmentFinalization.php">
                <div class="row">
                    <div class="col-12 form-line">
                      <div class="patient_name">
                        <label>Patient Name: </label><span><?php if($patient){

                            echo $patient['patient_first_name']." ".$patient['patient_last_name'];
                        }
                        ?></span>
                        </div>
                        <div class="col-12 form-line">
                            <div class="">
                                <label>Date of booking: </label><span><?php echo isset($errors['date']) ? $errors['date'] : '';?></span>
                        </div>
                    <div class="col-12 form-line">
                      <div class="form-group">
                        <select class="form-control" id="professional_id" name="professional_session_id">
                            <?php foreach($allSessions as $session){
                    
                            if($session['status']=="0"){
                            ?>
                    
                    <option  id="professional_id" value="<?php echo $session['professional_session_id']?>"><?php echo $session["session_time"]?></option>
                    <?php }
                }
                
                ?></select></div>
                <input  type="hidden" name="patient_id" type="text" value="<?php echo $patientRegistered?>">
                <div class="col-12 text-center">
                      <div class="form-submit">
                <button class="btn btn-common btn-effect" id="submit" type="submit">Submit</button>
                
            </form>
                <?php }else {?>
                    <div class="container" style="padding-top: 20px">
                <div class="">          
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="" data-wow-delay="0.2s">
                             <span class="register-button-booking"><a href="register.php">Please register yourself first</a></span></>
                            </div>
                </div>
                    <?php }
                    
                    
            ?>
        </div>


    </div>
</body>
</html>