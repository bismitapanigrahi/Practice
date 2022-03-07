<?php
$conn = mysqli_connect("localhost", "root", "", "sql_prac");

if(!$conn) {
    die("Connect Failed: ".mysqli_connect_error());
}

$sql="SELECT MIN(price) AS Lowest, MAX(price) AS Highest FROM products";
$res=mysqli_query($conn, $sql);

$row=mysqli_fetch_assoc($res);
echo "Minimum Price: ".$row['Lowest']."<br>";
echo "Maximum Price: ".$row['Highest'];

$conn->close();

?>