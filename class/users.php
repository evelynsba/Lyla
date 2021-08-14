<!-- This file creates all the functions to be able to login, and register users -->
<?php


Class Users
{   
    private $pdo;
    public $msgError = "";

    // method to connect to the db
    public function connection($dbname, $host, $user, $password)
    {
        global $pdo;
        global $msgError;
        try {
            $pdo = new PDO("mysql:dbname=".$dbname.";host=".$host,$user,$password);
        } catch (PDOException $e) {
            $msgError = $e->getMessage();
        }
        
    }

    public function register($patient_email_address,$patient_password, $patient_first_name, $patient_last_name, $patient_phone_no)
    {
        //check if the user is already registered
        global $pdo;
        $sql = $pdo->prepare("SELECT patient_id FROM patient_table WHERE patient_email_address = :e");
        $sql->bindValue(":e", $patient_email_address);
        $sql->execute();
        if($sql->rowCount() > 0){
            return false; // the person is already registered
        }

        //if it returns true we need to register this person
        $sql = $pdo->prepare("INSERT INTO patient_table (patient_email_address, patient_password, patient_first_name, patient_last_name, patient_phone_no) VALUES (:em, :p, :fn, :ln, :pn)");
        $sql->bindValue(":em", $patient_email_address);
        $sql->bindValue(":p", $patient_password);
        $sql->bindValue(":fn", $patient_first_name);
        $sql->bindValue(":ln", $patient_last_name);
        $sql->bindValue(":pn", $patient_phone_no);
        $sql->execute();
        return true;
    }

    public function login($patient_email_address, $patient_password)
    {
        global $pdo;

        //check if the email is in the db if true do the login 
        $sql = $pdo->prepare("SELECT patient_id FROM patient_table WHERE patient_email_address = :e AND patient_password = :s");
        $sql->bindValue(":e", $patient_email_address);
        $sql->bindValue(":s", $patient_password);
        $sql->execute();
        if($sql->rowCount() > 0)
        {
            //login into the system 
            // the fetch command makes the data that came from the database and make it into an array
            $data = $sql->fetch();
            session_start();
            $_SESSION['patient_id'] = $data['patient_id'];
            return true; // person registerd, success login

        }
        else
        {
            return false; // login failed
        }

        
    }

    public function getProfessionalSessions($professionalId, $sessionDate){
        global $pdo;

        //check the time available for a professional at a especific date
        $sql = $pdo->prepare("SELECT * FROM professionals_sessions WHERE professional_id = :pd AND session_date = :sd");
        // $sql = $pdo->prepare("SELECT * FROM professionals_sessions");
        $sql->bindValue(":pd", $professionalId);
        $sql->bindValue(":sd", $sessionDate);
        $sql->execute();
        if($sql->rowCount() > 0)
        {
           
            $data = $sql->fetchAll(PDO::FETCH_ASSOC);
            return $data; 

        }
        else
        {
            return false; 
        }

        
    }
    public function checkIfEmailIsRegistered($patient_email_address){
            //check if the user is already registered
            global $pdo;
            $sql = $pdo->prepare("SELECT patient_id FROM patient_table WHERE patient_email_address = :e");
            $sql->bindValue(":e", $patient_email_address);
            $sql->execute();
            if($sql->rowCount() > 0){
        
            $data = $sql->fetch(PDO::FETCH_ASSOC);
            return $data['patient_id']; // person registerd, it will continue the booking process
            }else{
                return false; 
            }

    }
    // this function will return all the professionals registered
    public function getAllProfessionals(){
        global $pdo;
        $sql = $pdo->prepare("SELECT * FROM professional_table");
        $sql->execute();
        if($sql->rowCount() > 0){
            $data = $sql->fetchAll(PDO::FETCH_ASSOC);
            return $data; 
        }else{
            return false;
        }

    }
    // this function will book a slot at a especific time chosen by the patient. And it will also update the table sessions where the professionals sessions can be ) for open( available) or 1 for closed(unavailable)
    public function booking($patient_id, $professional_session_id){
        global $pdo;
        
        $sql = $pdo->prepare("INSERT INTO booking (patient_id, professional_session_id, booking_status)VALUES(:pd, :ps, :bs) ");
        $sql->bindValue(":pd", $patient_id);
        $sql->bindValue(":ps", $professional_session_id);
        $sql->bindValue(":bs", "Booked");
        $sql->execute();

        $sql2 = $pdo->prepare("UPDATE `professionals_sessions` SET `status`= '1' WHERE `professional_session_id`= :ps");
        $sql2->bindValue(":ps", $professional_session_id);
        $sql2->execute();
        return true;
    }
    // this function will cancel a specific booking 

    public function bookingCanceled($bookingId, $professional_session_id){
    global $pdo;
    $sql = $pdo->prepare("UPDATE `booking` SET booking_status ='Canceled' WHERE booking_id = :bs");
    $sql->bindValue(":bs", $bookingId);
    $sql->execute();
   

    $sql2 = $pdo->prepare("UPDATE `professionals_sessions` SET status = '0' WHERE professional_session_id = :ps");
    $sql2->bindValue(":ps", $professional_session_id);
    $sql2->execute();
    return true;
    }

    // this function gets a pacient by their id
    public function getPatient($patientId){
    global $pdo;
    $sql = $pdo->prepare("SELECT * FROM `patient_table`  WHERE `patient_id` =:ppd");
    $sql->bindValue(":ppd", $patientId);
    $sql->execute();
    if($sql->rowCount() > 0)
    {
       
        $data = $sql->fetch(PDO::FETCH_ASSOC);
        return $data; 

    }
    else
    {
        return false; 
    }
    }
    // this function returns all the bookings information by a patient id 
    public function getAllBookingsPatients($patientId){
    global $pdo;
    $sql = $pdo->prepare("SELECT DISTINCT booking.*, booking.booking_id, patient_table.patient_first_name, patient_table.patient_last_name FROM `booking` LEFT OUTER JOIN `patient_table` ON patient_table.patient_id = booking.patient_id WHERE patient_table.patient_id = 5");
    $sql->bindValue(":ppd", $patientId);
    $sql->execute();
    if($sql->rowCount() > 0)
    {
       
        $data = $sql->fetchAll(PDO::FETCH_ASSOC);
        return $data; 

    }
    else
    {
        return false; 
    }
    }
    // this function gets a professional by their id
    public function getProfessional($professionalId){
    global $pdo;
    $sql = $pdo->prepare("SELECT * FROM `professional_table`  WHERE `professional_id` =:pfd");
    $sql->bindValue(":pfd", $professionalId);
    $sql->execute();
    if($sql->rowCount() > 0)
    {
       
        $data = $sql->fetch(PDO::FETCH_ASSOC);
        return $data; 

    }
    else
    {
        return false; 
    }
    }
    public function getSession($sessionId){
        global $pdo;
        $sql = $pdo->prepare("SELECT * FROM `professionals_sessions`  WHERE `professional_session_id` =:ppd");
        $sql->bindValue(":ppd", $sessionId);
        $sql->execute();
        if($sql->rowCount() > 0)
        {
           
            $data = $sql->fetch(PDO::FETCH_ASSOC);
            return $data; 
    
        }
        else
        {
            return false; 
        }
        }
        public function getAllBookingsProfessional($professionalId){
            global $pdo;
            $sql = $pdo->prepare("SELECT DISTINCT booking.*, booking.booking_id, patient_table.patient_first_name, patient_table.patient_last_name FROM `booking` LEFT OUTER JOIN `patient_table` ON patient_table.patient_id = booking.patient_id WHERE patient_table.patient_id = 5");
            $sql->bindValue(":ppd", $patientId);
            $sql->execute();
            if($sql->rowCount() > 0)
            {
               
                $data = $sql->fetchAll(PDO::FETCH_ASSOC);
                return $data; 
        
            }
            else
            {
                return false; 
            }
            }

}


?>