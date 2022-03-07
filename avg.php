<?php
$conn = mysqli_connect("localhost", "root", "", "sql_prac");

if(!$conn) {
    die("Connect Failed: ".mysqli_connect_error());
}

$sql="SELECT AVG(price) FROM products";
$res=mysqli_query($conn, $sql);

$row=mysqli_fetch_assoc($res);
echo "Average Price: ".$row['AVG(price)'];

$conn->close();

?>