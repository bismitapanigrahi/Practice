<?php
    include 'connection.php';
    class validator extends dbconn {
        private $data;
        private $errors = [];

        public function create($post_data) {
            if(!isset($post_data['submit'])) {
                $post_data['fname']="";
                $post_data['lname']="";
                $post_data['email']="";
                $post_data['dob']="";
                $post_data['gender']="";
            }
            
            $this->data=$post_data;
        }
        public function validateForm() {
            
            $this->validatefname();
            $this->validateemail();
            $this->validatedob();
            $this->validategenderMale();
            $this->validategenderFemale();
            return $this->errors;
        }
        private function validatefname() {
            $val=$this->data['fname'];
            if(empty($val)) {
                $this->addError('fname', 'First Name is required');
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
        public function validategenderMale() {
            $val=$this->data['gender'];
            if(empty($val)) {
                $this->addError('gender', 'Gender is required');
            }
            if(isset($val)) {
                if($val=='Male'){
                    $val="checked";
                }
                return $val;
            }
            
        }
        public function validategenderFemale() {
            $val=$this->data['gender'];
            if(empty($val)) {
                $this->addError('gender', 'Gender is required');
            }
            if(isset($val)) {
                if($val=='Female'){
                    $val="checked";
                }
                return $val;
            }
            
        }
        private function addError($key, $val) {
            $this->errors[$key]=$val;
        }
        public function insert() { 
            if(!empty($this->data['fname']) && !empty($this->data['email']) && !empty($this->data['dob']) && !empty($this->data['gender'])){
                $fname = $this->data['fname'];
                $lname = $this->data['lname'];
                $email = $this->data['email'];
                $dob = $this->data['dob'];
                $gender = $this->data['gender'];
                //echo $fname."<br>".$lname."<br>".$email."<br>".$dob."<br>".$gender;
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
    }
?>
