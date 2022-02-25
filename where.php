<?php

$conn=new mysqli("localhost", "root", "", "mydb");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  
  $sql = "SELECT id, name FROM guests WHERE id=2";
  $result = $conn->query($sql);
  
  if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      echo "ID: " . $row["id"]. " - Name: " . $row["name"]."<br>";
    }
  } else {
    echo "0 results";
  }
  $conn->close();

?>