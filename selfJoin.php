<?php
$conn = mysqli_connect("localhost", "root", "", "sql_prac");

if(!$conn) {
    die("Connect Failed: ".mysqli_connect_error());
}

$sql="SELECT A.orderid, b.orderid, a.quantity FROM orderdetails a, orderdetails b
WHERE a.pid=b.pid AND  a.odid<>b.odid";

$res=mysqli_query($conn, $sql);

if(mysqli_num_rows($res)>0) {
    echo "<table><tr><th>OrderID</th><th>Quantity</th></tr>";
    while($row=mysqli_fetch_assoc($res)) {
        echo "<tr><td>".$row["orderid"]."</td><td>".$row["quantity"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();

?>