<?php
error_reporting(E_ALL);
require_once 'class/users.php';
$u = new Users;
$u->connection("lyla_beauty", "localhost", "root", "");
$allProfessionals = $u->getAllProfessionals();
?>
<?php include 'header.php'
?>
<div id="login-form" class="section">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-5 col-md-12 col-xs-12">
            <div class="login-form">
              <div class="form-wrapper">
                <div class="sub-title text-center"> 
                <h2 >Booking</h2>
                </div>
          <div class="row">          
            <div class="col-lg-9 col-md-9 col-xs-12">
              <div class="booking-block">
                <form method="GET" id="" action="newappointment.php">
                  <div class="row">
                  </div>
                  <div class="col-12 form-line">
                      <div class="form-group">
                      <label>Email</label>
                        <input type="text" placeholder="email" name="email"                       
                        id="email" class="form-control" required data-error="Please enter your email">
                        <div class="help-block with-errors"></div>
                      </div>
                    </div>
                    <div class="col-12 form-line">
                      <div class="form-group">
                      <p>
                        <label>Date of the service:</label>
                        <input class="form-control" type="date" name="date" >
                        <br><span class="error"><?php echo isset($errors['date']) ? $errors['date'] : '';?></span>
                    </p>
                        <div class="help-block with-errors"></div>
                      </div>
                    </div>
                    <div class="col-12 form-line">
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