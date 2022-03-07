<?php
$conn = mysqli_connect("localhost", "root", "", "sql_prac");

if(!$conn) {
    die("Connect Failed: ".mysqli_connect_error());
}

$sql="SELECT shippers.shipper_name,COUNT(orders.orderid) AS NumberOfOrders FROM orders
RIGHT JOIN shippers ON orders.shipperid = shippers.shipperid
GROUP BY shipper_name";

$res=mysqli_query($conn, $sql);

if(mysqli_num_rows($res)>0) {
    echo "<table><tr><th>ShipperName</th><th>NumberOfOrders</th></tr>";
    while($row=mysqli_fetch_assoc($res)) {
        echo "<tr><td>".$row["shipper_name"]."</td><td>".$row["NumberOfOrders"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();

?>