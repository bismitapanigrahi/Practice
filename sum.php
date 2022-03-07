<?php
$conn = mysqli_connect("localhost", "root", "", "sql_prac");

if(!$conn) {
    die("Connect Failed: ".mysqli_connect_error());
}

$sql="SELECT SUM(Quantity) FROM OrderDetails";
$res=mysqli_query($conn, $sql);

$row=mysqli_fetch_assoc($res);
echo "Sum of Quantities: ".$row['SUM(Quantity)'];

$conn->close();

?>