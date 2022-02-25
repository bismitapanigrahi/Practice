<?php

$conn=new mysqli("localhost", "root", "", "mydb");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "UPDATE guests set name='Kajol Agarwal' WHERE id=2";

if ($conn->query($sql) === TRUE) {
    echo "Record update successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();

?>