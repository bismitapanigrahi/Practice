<?php
$conn = mysqli_connect("localhost", "root", "", "sql_prac");

if(!$conn) {
    die("Connect Failed: ".mysqli_connect_error());
}

$sql="SELECT pname FROM Products
WHERE pid = ANY (SELECT pid FROM orderdetails WHERE Quantity >= 20)";

$res=mysqli_query($conn, $sql);

if(mysqli_num_rows($res)>0) {
    echo "<table><tr><th>ProductName</th></tr>";
    while($row=mysqli_fetch_assoc($res)) {
        echo "<tr><td>".$row["pname"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();

?>