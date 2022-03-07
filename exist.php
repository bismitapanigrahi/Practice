<?php
$conn = mysqli_connect("localhost", "root", "", "sql_prac");

if(!$conn) {
    die("Connect Failed: ".mysqli_connect_error());
}

$sql="SELECT sname FROM suppliers
WHERE EXISTS (SELECT pname FROM products WHERE products.sid = suppliers.sid AND Price > 20);";

$res=mysqli_query($conn, $sql);

if(mysqli_num_rows($res)>0) {
    echo "<table><tr><th>SupplierName</th></tr>";
    while($row=mysqli_fetch_assoc($res)) {
        echo "<tr><td>".$row["sname"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();

?>