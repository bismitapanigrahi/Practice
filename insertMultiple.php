<?php
//MySqli Procedural 

$conn=mysqli_connect("localhost","root","","mydb");
if(!$conn){
    die("Connection Failed: ".mysqli_connect_error());
}

$sql="INSERT INTO guests (name, email) VALUES ('Karan','karan@mail.com');";
$sql.="INSERT INTO guests (name, email) VALUES ('Abhijeet','abhi@mail.com');";
$sql.="INSERT INTO guests (name, email) VALUES ('Rakesh','rakesh@mail.com');";

if(mysqli_multi_query($conn,$sql)){
    echo "Multiple Values Inserted Successfully";
} else {
    echo "Error Occured: ".mysqli_error($conn);
}

mysqli_close($conn);


?>