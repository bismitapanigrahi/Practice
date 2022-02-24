<?php
    $nameErr= $emailErr= $genderErr= "";
    $name= $email= $gender= "";

    if($_SERVER["REQUEST_METHOD"]=="POST") {
        if(empty($_POST['name'])) {
            $nameErr="Name Required";
        }else{
            $name=test($_POST['name']);
        }
        if(empty($_POST['email'])) {
            $emailErr="Email Required";
        }else{
            $email=test($_POST['email']);
        }
        if(empty($_POST['gender'])) {
            $genderErr="Gender Required";
        }else{
            $gender=test($_POST['gender']);
        }
    }

    function test($data) {
        $data=trim($data);
        $data=stripslashes($data);
        $data=htmlspecialchars($data);
        return $data;
    }
?>
