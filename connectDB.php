<?php

//MySqli Object-Oriented
$server="localhost";
$user="root";
$password="";

$conn=new mysqli($server, $user, $password);

if($conn->connect_error) {
    die("Connection Failed: ".$conn->connect_error);
}

echo "Connected Successfully";

?>