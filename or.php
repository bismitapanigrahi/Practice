<?php
$conn = mysqli_connect("localhost", "root", "", "sql_prac");

if(!$conn) {
    die("Connect Failed: ".mysqli_connect_error());
}

$sql="SELECT contactname, city, country FROM customers WHERE city='London' OR city='Bern'";
$res=mysqli_query($conn, $sql);

if(mysqli_num_rows($res)>0) {
    echo "<table><tr><th>ContactName</th><th>City</th><th>Country</th></tr>";
    while($row=mysqli_fetch_assoc($res)) {
        echo "<tr><td>".$row["contactname"]."</td><td>".$row["city"]."</td><td>".$row["country"]."</td></tr>";
    }
} else {
    echo "0 results";
}

$conn->close();

?>