<?php
$conn = mysqli_connect("localhost", "root", "", "sql_prac");

if(!$conn) {
    die("Connect Failed: ".mysqli_connect_error());
}

$sql="SELECT cid, contactname, city, country FROM customers 
WHERE country='France' AND (city='Nantes' OR city='Marseille') OR country='Germany' AND NOT city='Berlin'";
$res=mysqli_query($conn, $sql);

if(mysqli_num_rows($res)>0) {
    echo "<table><tr><th>CustomerID</th><th>ContactName</th><th>City</th><th>Country</th></tr>";
    while($row=mysqli_fetch_assoc($res)) {
        echo "<tr><td>".$row["cid"]."</td><td>".$row["contactname"]."</td><td>".$row["city"].
        "</td><td>".$row["country"]."</td></tr>";
    }
} else {
    echo "0 results";
}

$conn->close();

?>