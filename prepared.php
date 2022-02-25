<?php
$conn= new mysqli("localhost","root","","mydb");

if($conn->connect_error) {
    die("Connection Failed: ".$conn->connect_error);
}

//prepare and bind
$stmt=$conn->prepare("INSERT INTO guests (name, email) VALUES (?,?)");
$stmt->bind_param("ss", $name, $email);

//set parameters and execute 
$name="Mary";
$email="mary@mail.com";
$stmt->execute();

$name="Kelvin";
$email="kelvin@mail.com";
$stmt->execute();

echo "New Records Inserted Successfully";

$stmt->close();
$conn->close();

?>