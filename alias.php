<?php
$conn = mysqli_connect("localhost", "root", "", "sql_prac");

if(!$conn) {
    die("Connect Failed: ".mysqli_connect_error());
}

$sql="SELECT p.pname, s.sname, s.country
FROM Products AS p, Suppliers AS s
WHERE p.sid=s.sid";

$res=mysqli_query($conn, $sql);

if(mysqli_num_rows($res)>0) {
    echo "<table><tr><th>ProductName</th><th>SupplierName</th><th>Country</th></tr>";
    while($row=mysqli_fetch_assoc($res)) {
        echo "<tr><td>".$row["pname"]."</td><td>".$row["sname"]."</td><td>".$row["country"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();

?>