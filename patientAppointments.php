<?php
error_reporting(E_ALL);

// if logeged in shows the content of the page, if not go to home page
session_start();
if (!isset($_SESSION['patient_id'])){
	header("location: register.php");
}
else{


require_once 'class/users.php';
$u = new Users;
$u->connection("lyla_beauty", "localhost", "root", "");
$allBookings = $u->getAllBookingsPatients($_SESSION['patient_id']);
// this function gets all the bookings by the patient_id, but the variable a;;Bookings was created to allow the system to do a foreach, to check in the whole table if there is any bookig for the patient_id given
?>
<?php include 'header.php'
?>



<div class="container-fluid">

	<br />
	<div class="card">
		<div class="card-header"><h4>My bookings</h4></div>
			<div class="card-body">
				<div class="table-responsive">
		      		<table class="table table-striped table-bordered" id="appointment_list_table">
		      			<thead>

							<tr>
			      				<th>Booking Number</th>
								<th>Professional Name</th>
								<th>Booking Date</th>
			      				<th>Booking Time</th>							  
			      				<th>Status</th>
                                <th>Action</th>
			      			</tr>
			      		</thead>
			      		<tbody>
							  			      			

								<?php foreach($allBookings as $patientBookings){
                    
					?>
					<tr>
					  <td><span> <?php echo $patientBookings['booking_id']?></span></td>
					  <?php $session = $u->getSession($patientBookings['professional_session_id'])?>
					  <?php $professional = $u->getProfessional($session['professional_id'])?>
					<td><span> <?php echo $professional['professional_name']?></span></td>
					<?php $bookingDate = $session['session_date']?>
					  <td><span> <?php echo $bookingDate?></span></td>
					<?php $bookingTime = $session['session_time']?>
					  <td><span> <?php echo $bookingTime?></span></td>							  
					  <td><span> <?php echo $patientBookings['booking_status']?></span></td>
					<td><a href="appointmentCancelation.php?booking_id=<?php echo $patientBookings['booking_id']?>&professional_session_id=<?php echo $patientBookings['professional_session_id']?>">Cancel</a></td>
					</tr>
					<?php }
	
	
					?>
						  </tbody>
			      	</table>
			    </div>
			</div>
		</div>
	</div>

</div>
<?php
}
?>