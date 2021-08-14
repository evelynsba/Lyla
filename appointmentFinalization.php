<?php
error_reporting(E_ALL);
require_once 'class/users.php';
$u = new Users;
$u->connection("lyla_beauty", "localhost", "root", "");
$professionalSessionId = $_GET['professional_session_id'];
$patientId = $_GET['patient_id'];
$booking_id = $u->booking($patientId, $professionalSessionId);
$bookingId = $u->getAllBookingsPatients($patientId);
$patient = $u->getPatient($patientId);
?>
<?php include 'header.php'
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Document</title>
</head>
<body>

<!-- This page save the appointment info into the database, and mark the session as occupied -->
    <div class="appoitment-form" class="session ">
        <div class="container">
            <div class="section-header" id="confirmation-box">          
                <div class="row justify-content-center">
                    <div class="appointment-form">
                        <div class="form-wrapper">
                                <div class="item-boxes services-item wow fadeInDown" data-wow-delay="0.2s">
                                    <h4 style="color:pink">Booking number: <?php echo $bookingId[0]['booking_id']?></h4>
                                    <p>Congratulations</p> <h3><?php echo $patient['patient_first_name']. " ".$patient['patient_last_name']?></h3>
                                </div>
                                <div class="col-12 text-center pt-3">
                                    <div class="form-register ">
                                        <p><a href="index.php">Back</a></p>
                                        </div>
                                </div>  
                            </div>
                        </div>      
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php include 'footer.php'
?>
</body>
</html>