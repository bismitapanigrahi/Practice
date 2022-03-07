<?php
$conn = mysqli_connect("localhost", "root", "", "sql_prac");

if(!$conn) {
    die("Connect Failed: ".mysqli_connect_error());
}

$sql="SELECT COUNT(odid) AS NumberOfOrderDetails ,orderid FROM orderdetails 
GROUP BY orderid HAVING COUNT(odid) >= 2";

$res=mysqli_query($conn, $sql);

if(mysqli_num_rows($res)>0) {
    echo "<table><tr><th>NumberOfOrderDetails</th><th>OrderID</th></tr>";
    while($row=mysqli_fetch_assoc($res)) {
        echo "<tr><td>".$row["NumberOfOrderDetails"]."</td><td>".$row["orderid"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();

?>