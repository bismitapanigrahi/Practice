<?php
$conn = mysqli_connect("localhost", "root", "", "sql_prac");

if(!$conn) {
    die("Connect Failed: ".mysqli_connect_error());
}

$sql="SELECT DISTINCT country FROM customers ORDER BY country";
$res=mysqli_query($conn, $sql);

if(mysqli_num_rows($res)>0) {
    echo "<b>Country:</b><br>";
    while($row=mysqli_fetch_assoc($res)) {
        echo $row["country"]."<br>";
    }
} else {
    echo "0 results";
}

$conn->close();

?>