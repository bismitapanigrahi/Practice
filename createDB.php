<?php

//MySqli Procedural 

$conn=mysqli_connect("localhost","root","");
if(!$conn){
    die("Connection Failed: ".mysqli_connect_error());
}

$sql="CREATE DATABASE mydb";
if(mysqli_query($conn,$sql)){
    echo "Database Created Successfully";
} else {
    echo "Error Occured: ".mysqli_error($conn);
}

mysqli_close($conn);

?>