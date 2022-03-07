<?php
$conn = mysqli_connect("localhost", "root", "", "sql_prac");

if(!$conn) {
    die("Connect Failed: ".mysqli_connect_error());
}

$sql="SELECT cus_name FROM customers WHERE 
cus_name NOT LIKE 'c%' /*shouldn't starts with c*/
OR cus_name LIKE '%r' /*search p in last position*/
OR cus_name LIKE '%nt%' /*search nt in any position*/
OR cus_name LIKE '_o%' /*search l in 2nd position*/
OR cus_name LIKE 'a__%' /*starts with a and have atleast 3 characters*/
OR cus_name LIKE 'b%e' /*starts with b ends with e*/
";

$res=mysqli_query($conn, $sql);


if(mysqli_num_rows($res)>0) {
    echo "<b>Customer Name:</b><br>";
    while($row=mysqli_fetch_assoc($res)) {
        echo $row["cus_name"]."<br>";
    }
} else {
    echo "0 results";
}

$conn->close();

?>