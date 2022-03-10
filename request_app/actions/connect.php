<?php
    $conn=new mysqli("localhost", "root", "", "tcts");
    if($conn->connect_error) {
        die("Connection failed: ".$conn->connect_error);
    }
?>