<?php
$conn = mysqli_connect("localhost", "root", "", "sql_prac");

if(!$conn) {
    die("Connect Failed: ".mysqli_connect_error());
}

$sql="SELECT COUNT(sid) FROM suppliers";
$res=mysqli_query($conn, $sql);

$row=mysqli_fetch_assoc($res);
echo "Number of Suppliers: ".$row['COUNT(sid)'];

$conn->close();

?>