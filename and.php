<?php
try{
    $conn=new PDO ("mysql:host=localhost; dbname=sql_prac", "root", "");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $conn->prepare("SELECT cus_name, address, city, country FROM customers 
    WHERE country='Germany' AND city='Berlin'");
    $stmt->execute();

    $res=$stmt->setFetchMode(PDO::FETCH_ASSOC);

    while($row=$stmt->fetch($res)) {
        echo "<b> CustomerName:</b> ".$row["cus_name"]." <b>Address:</b> ".$row["address"].
        " <b>City:</b> ".$row["city"]." <b>Country:</b> ".$row["country"]."<br><br>";
    }
} catch (PDOException $e) {
    echo $e->getMessage();
}

$conn = null;

?>