<?php
$conn = mysqli_connect("localhost", "root", "", "sql_prac");

if(!$conn) {
    die("Connect Failed: ".mysqli_connect_error());
}

$sql="SELECT cus_name, postalcode, country FROM customers limit 5";
$res=mysqli_query($conn, $sql);

if(mysqli_num_rows($res)>0) {
    echo "<table><tr><th>CustomerName</th><th>PostalCode</th><th>Country</th></tr>";
    while($row=mysqli_fetch_assoc($res)) {
        echo "<tr><td>".$row["cus_name"]."</td><td>".$row["postalcode"]."</td><td>".$row["country"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();

?>