<?php
    include 'connection.php';
    class validator {
        private $data;
        private $errors = [];
        private static $fields = ['fname', 'lname', 'email', 'dob', 'gender'];

        public function __construct($post_data) {
            $this->data=$post_data;
        }
        public function validateForm() {
            foreach(self::$fields as $field) {
                if(!array_key_exists($field, $this->data)) {
                    trigger_error("$field is required");
                    return;
                }
            }
            $this->validatefname();
            $this->validatelname();
            $this->validateemail();
            $this->validatedob();
            $this->validategender();
            return $this->errors;
        }
        private function validatefname() {
            $val=$this->data['fname'];
            if(empty($val)) {
                $this->addError('fname', 'FirstName is required');
            }
        }
        private function validatelname() {
            $val=$this->data['lname'];
            if(empty($val)) {
                $val='';
            }
        }
        private function validateemail() {
            $val=$this->data['email'];
            if(empty($val)) {
                $this->addError('email', 'Email is required');
            }
        }
        private function validatedob() {
            $val=$this->data['dob'];
            if(empty($val)) {
                $this->addError('dob', 'Date of Birth is required');
            }
        }
        private function validategender() {
            $val=$this->data['gender'];
            if(empty($val)) {
                $this->addError('gender', 'Gender is required');
            }
        }
        private function addError($key, $val) {
            $this->errors[$key]=$val;
        }
    }
    /* 
    class insertRecord extends dbconn {
        public function insert($post){
            $fname=$post["fname"];
            $lname=$post["lname"];
            $email=$post["email"];
            $dob=$post["dob"];
            $gender=$post["gender"];
            $sql="INSERT INTO requests (fname, lname, email, dob, gender) VALUES 
            ('".$fname."', '".$lname."', '".$email."', '".$dob."', '".$gender."')";
            $result=$this->conn->query($sql);
            if($result) {
                echo "<script>alert('Records Inserted Successfully');";
                echo "window.location.href='http://localhost:8080/practice/programs_prac/Members_using_oop/display/allMembers.php';";
                echo "</script>";
            }
            else {
                echo "Failed";
            }
        }
    }
    
    
    
    $fname= $lname= $email= $dob= $gender= $fnamerr= $emailerr= $doberr= $gendererr= $male= $female= '';
    if(isset($_POST['submit'])) {
        if(empty($_POST["fname"])){
            $fnamerr= "Please enter your First Name";
            $lname=$_POST["lname"];
            $email=$_POST["email"];
            $dob=$_POST["dob"];
            if(isset($_POST['gender'])){
                $gender=$_POST["gender"];
                if($gender=='Male'){
                    $male="checked";
                }if($gender=='Female'){
                    $female="checked";
                }
            }
        }
        elseif(empty($_POST["email"])){
            $fname=$_POST["fname"];
            $lname=$_POST["lname"];
            $emailerr= "Please enter your email";
            $dob=$_POST["dob"];
            if(isset($_POST['gender'])){
                $gender=$_POST["gender"];
                if($gender=='Male'){
                    $male="checked";
                }if($gender=='Female'){
                    $female="checked";
                }
            }
        }
        elseif(empty($_POST["dob"])){
            $fname=$_POST["fname"];
            $lname=$_POST["lname"];
            $email=$_POST["email"];
            $doberr= "Please enter your Date of Birth";
            if(isset($_POST['gender'])){
                $gender=$_POST["gender"];
                if($gender=='Male'){
                    $male="checked";
                }if($gender=='Female'){
                    $female="checked";
                }
            }
        }
        elseif(empty($_POST["gender"])){
            $fname=$_POST["fname"];
            $lname=$_POST["lname"];
            $email=$_POST["email"];
            $dob=$_POST["dob"];
            $gendererr= "Please enter your gender";
        }
        else{
            $fname=$_POST["fname"];
            $lname=$_POST["lname"];
            $email=$_POST["email"];
            $dob=$_POST["dob"];
            $gender=$_POST["gender"];
            if($gender=='Male'){
                $male="checked";
            }if($gender=='Female'){
                $female="checked";
            } 
            
        }
    }
    */
?>
