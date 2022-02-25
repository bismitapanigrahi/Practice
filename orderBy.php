<?php

//MySqli Object-Oriented

$conn=new mysqli("localhost", "root", "", "mydb");

if($conn->connect_error) {
    die("Connection Failed: ".$conn->connect_error);
}

$sql="SELECT * FROM guests ORDER BY name ";
$result=$conn->query($sql);

if($result->num_rows > 0) {
    echo "<table><tr><th>ID</th><th>Name</th><th>Email</th><th>Registered Date</th></tr>";
    while($row=$result->fetch_assoc()){
        echo "<tr><td>".$row["id"]."</td><td>".$row["name"]."</td><td>".$row["email"]."</td><td>".$row["reg_date"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 Results";
}
$conn->close();

?>