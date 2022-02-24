<?php
$id=$_GET['updateid'];

$sql="SELECT * FROM users WHERE id=$id";
$result=$conn->query($sql);

$row=$result->fetch_assoc();
$name=$row["name"];
$age=$row["age"];
$email=$row["email"];
$phno=$row["phno"];


if(isset($_POST['submit'])) {
    if(empty($_POST["name"])){
        echo "Name required";
    } else {
        $name=$_POST["name"];
    }
    
    if($_POST["age"] >= 21 && $_POST["age"] <= 65) {
        $age=$_POST["age"];
    }

    if(empty($_POST["email"])){
        echo "Email required";
    } else {
        $email=$_POST["email"];
    }
    
    $phno=$_POST["phno"];

    $sql="UPDATE users SET name='$name', age='$age', email='$email', phno='$phno' WHERE id=$id";
    $result=$conn->query($sql);
    if($result) {
        header("location:display.php");
    }
    else {
        echo "Failed";
    }
}

?>