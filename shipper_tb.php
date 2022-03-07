<?php
$conn = new mysqli ("localhost", "root", "", "sql_prac");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "CREATE TABLE shippers (
    shipperid int NOT NULL AUTO_INCREMENT PRIMARY KEY, 
    shipper_name varchar(255), 
    phone varchar(255)
)";

if ($conn->query($sql) === TRUE) {
    echo "Table created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}
  
$conn->close();

?>