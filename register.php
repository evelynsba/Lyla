<?php
// Report all PHP errors
error_reporting(E_ALL);

?>

<?php
require_once 'class/users.php';
$u = new Users;
?>
<?php
include_once 'header.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>

    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">    
</head>
<body>

<!-- this form register a user into the DB -->

    <div id= "register-form" class="section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5 col-md-12 col-xs-12">
                <div class="form-wrapper">
                    <div class="sub-title text-center">
                    <h3>Register</h3>
                    </div>
                    <form method="POST" action="">
                        <div class="row">
                            <div class="col-12 form-line">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="patient_first_name" placeholder=" first name">
                                </div>
                            </div>
                            <div class="col-12 form-line">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="patient_last_name" placeholder=" last name">
                                </div>
                            </div>
                            <div class="col-12 form-line">
                                <div class="form-group">
                                    <input type="email" class="form-control" name="patient_email_address" placeholder="email address">
                                </div>
                            </div>
                            <div class="col-12 form-line">
                                <div class="form-group">
                                    <input type="phone" class="form-control" name="patient_phone_no" placeholder="phone number">
                                </div>
                                </div>
                            <div class="col-12 form-line">
                                <div class="form-group">
                                    <input type="password" class="form-control" name="patient_password" placeholder="password">
                                </div>
                            </div>
                            <div class="col-12 text-center">
                        <div class="form-submit">
                            <button type="submit" class="btn btn-common btn-effect">Submit</button>
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
//check if the button was clicked, to avoid hackers we use addslaches
if(isset($_POST['patient_first_name']))
{   
    $patient_email_address = addslashes($_POST['patient_email_address']);
    $patient_password  = addslashes($_POST['patient_password']);
    $patient_first_name = addslashes($_POST['patient_first_name']);
    $patient_last_name = addslashes($_POST['patient_last_name']);
    $patient_phone_no = addslashes($_POST['patient_phone_no']);
    

    //check if the form is filled
    if(!empty($patient_email_address) && !empty($patient_password) && !empty($patient_first_name) && !empty($patient_last_name) && !empty($patient_phone_no))
    {
        $u->connection("lyla_beauty", "localhost", "root", "");
        if($u->msgError == "")
        {
           if($u->register($patient_email_address, $patient_password, $patient_first_name, $patient_last_name, $patient_phone_no))
           {
                ?>
                <div id="msg-success">
                "Successufuly registered"</div>
                <?php
           }
           else
           {
            ?>
            <div id="msg-error">
             "Email already registered"
            </div>
            <?php
           }
        }
        else
        {   ?>
            <div id="msg-error">
            <?php echo "Erro: ".$u->msgError ?>
            </div>
            <?php
        }
    }
    else
    {    ?>
        <div id="msg-error">
        "Please fill up all the gaps"
        </div>
        <?php
    }
}
?>
<?php
include_once 'footer.php';

?>
</body>
</html>