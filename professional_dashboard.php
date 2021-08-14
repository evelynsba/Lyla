<?php
error_reporting(E_ALL);

// if logeged in shows the content of the page, if not go to home page
session_start();
if (!isset($_SESSION['professional_id'])){
	header("location: index.php");
}
else{


require_once 'class/users.php';
$u = new Users;
$u->connection("lyla_beauty", "localhost", "root", "");
$allBookingsProfessional = $u->getAllBookingsPatients($_SESSION['patient_id']);


include 'header.php'
?>


<div class="container-fluid">

	<div class="card">
		<div class="card-header"><h4>Professional Schedule List</h4></div>
			<div class="card-body">
				<div class="table-responsive">
		      		<table class="table table-striped table-bordered" id="appointment_list_table">
		      			<thead>
			      			<tr>
			      				<th>Booking Number</th>
			      				<th>Booking Date</th>
			      				<th>Booking Time</th>
			      				<th>Status</th>
			      				<th>Action</th>
			      			</tr>
			      		</thead>
			      		<tbody>
							  
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

<?php

include('footer.php');

?>




