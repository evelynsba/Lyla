<?php
// Report all PHP errors
error_reporting(E_ALL);

?>
<?php
require_once 'class/users.php';
$u = new Users;
?>

				<!-- verify if the person clicked to log in -->
<?php
if(isset($_POST['patient_email_address']))
{
		$patient_email_address = addslashes($_POST['patient_email_address']);
		$patient_password = addslashes($_POST['patient_password']);

    echo $patient_email_address;
    echo $patient_password;

		if(!empty($patient_email_address) && !empty($patient_password))
		{
			$u->connection("lyla_beauty", "localhost", "root", "");
			if($u->msgError == "")
			{
			  if($u->login($patient_email_address, $patient_password))
			  {
				  header("location: patientAppointments.php");

			  }
			  else
			  {
				  echo "Error, incorrect email or passowrd";
			  }
			}
			else
      {
				echo "Error: ".$u->msgError;
			}
						
    }else
    {
		  echo "Error, incorrect email or passowrd";
		}
}
?>

<?php



include('header.php');


?>

<!-- this piece of code just checks what the system is bringing out from the database -->
<!-- <?php print_r($_POST); ?> -->

<div id="login-form" class="section">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-5 col-md-12 col-xs-12">
            <div class="login-form">
              <div class="form-wrapper">
                <div class="sub-title text-center">
                  <h3>Login</h3>
                </div>
                <form method="POST" id="patient_login_form" action="">
                  <div class="row">
                    <div class="col-12 form-line">
                      <div class="form-group">
                        <input type="text" class="form-control" name="patient_email_address" placeholder="email">
                      </div>
                    </div>
                    <div class="col-md-12 form-line">
                      <div class="form-group">
                        <input type="password" class="form-control" name="patient_password" placeholder="password" minlength="8" required>
                      </div>
                    </div>
                    </div>
                    <div class="col-12 text-center">
                      <div class="form-submit">
                        <button type="submit" class="btn btn-common btn-effect">Login</button>
                      </div>
                      <div class="col-12 text-center pt-3">
                      <div class="form-register ">
                      <p><a href="register.php">Register</a></p>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
    </div>
</div>
<?php
include('footer.php')
?>