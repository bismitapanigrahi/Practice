<?php

    $name= $age= $email= $phno= $namerr= $emailerr= '';
    if(isset($_POST['submit'])){
    if(empty($_POST["name"]) /*|| empty($_POST["email"])*/) {
        $namerr= "Please enter your name";
    }
    elseif(empty($_POST["email"])){
        $name=$_POST["name"];
        $emailerr= "Please enter your email";
        if($_POST["age"] >= 21 && $_POST["age"] <= 65) {
            $age=$_POST["age"];
        }
        $phno=$_POST["phno"];
    }
    else{
        $name=$_POST["name"];
        if($_POST["age"] >= 21 && $_POST["age"] <= 65) {
            $age=$_POST["age"];
        }
        $email=$_POST["email"];
        $phno=$_POST["phno"];

        $sql="INSERT INTO users (name, age, email, phno) VALUES ('".$name."', '".$age."', '".$email."', '".$phno."')";
        $result=$conn->query($sql);
        if($result) {
            header("location:display.php");
        }
        else {
            echo "Failed";
        }
    }
    }

?>