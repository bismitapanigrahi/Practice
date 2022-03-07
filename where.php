<?php
try{
    $conn=new PDO ("mysql:host=localhost; dbname=sql_prac", "root", "");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $conn->prepare("SELECT * FROM customers WHERE country='France'");
    $stmt->execute();

    $res=$stmt->setFetchMode(PDO::FETCH_ASSOC);

    while($row=$stmt->fetch($res)) {
        echo "<b>CustomerID:</b> ".$row["cid"]."<b> CustomerName:</b> ".$row["cus_name"]."<b> ContactName:
        </b>  ".$row["contactname"]." <b>Address:</b> ".$row["address"]." <b>City:</b> ".$row["city"].
        " <b>PostalCode:</b> ".$row["postalcode"]." <b>Country:</b> ".$row["country"]."<br><br>";
    }
} catch (PDOException $e) {
    echo $e->getMessage();
}

$conn = null;

?>