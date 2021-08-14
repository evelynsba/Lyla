
<!-- This page checks if the user is logged in and if they are the cancellation goes through and the user is redirected to My bookings page
if theuser is not they are redirected to the index -->

<?php
// check if the user is logged in 
session_start();
if (isset($_SESSION['patient_id'])){
    
    error_reporting(E_ALL);
    require_once 'class/users.php';
    $u = new Users;
    $u->connection("lyla_beauty", "localhost", "root", "");
    $bookingId = $_GET["booking_id"];
    $professional_session_id = $_GET["professional_session_id"];
    $bookingCanceled = $u->bookingCanceled($bookingId, $professional_session_id);
    header("location: patientAppointments.php");
}
else{

    header("location: index.php");
}
?>