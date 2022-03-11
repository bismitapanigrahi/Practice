<?php 
    include 'connect.php';

    $fname= $lname= $email= $dob= $gender= $fnamerr= $emailerr= $doberr= $gendererr= $male= $female= '';
    if(isset($_POST['submit'])){
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
            
            $sql="INSERT INTO requests (fname, lname, email, dob, gender) VALUES 
            ('".$fname."', '".$lname."', '".$email."', '".$dob."', '".$gender."')";
            $result=$conn->query($sql);
            if($result) {
                header("location:allMembers.php");
            }
            else {
                echo "Failed";
            }
        }
    }
?>