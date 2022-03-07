<?php
$conn = mysqli_connect("localhost", "root", "", "sql_prac");

if(!$conn) {
    die("Connect Failed: ".mysqli_connect_error());
}

$sql="SELECT orders.orderid, orders.orderdate, shippers.shipper_name FROM shippers
RIGHT JOIN orders ON orders.shipperid = shippers.shipperid";

$res=mysqli_query($conn, $sql);

if(mysqli_num_rows($res)>0) {
    echo "<table><tr><th>OrderID</th><th>ShipperName</th><th>OrderDate</th></tr>";
    while($row=mysqli_fetch_assoc($res)) {
        echo "<tr><td>".$row["orderid"]."</td><td>".$row["shipper_name"]."</td><td>".$row["orderdate"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();

?>