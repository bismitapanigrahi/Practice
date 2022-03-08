<?php
try{
    $conn=new PDO ("mysql:host=localhost; dbname=sql_prac", "root", "");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $conn->prepare("SELECT orderid, quantity, 
    CASE 
        WHEN quantity > 20 THEN 'greater than 20'
        WHEN quantity = 20 THEN 'equals to 20'
        ELSE 'less than 20'
    END AS Comments
    FROM orderdetails");
    $stmt->execute();

    $res=$stmt->setFetchMode(PDO::FETCH_ASSOC);
    echo "<table><tr><th>OrderID</th><th>Quantity</th><th>Comments</th></tr>";
    while($row=$stmt->fetch($res)) {
        echo "<tr><td>".$row["orderid"]."</td><td>".$row["quantity"]."</td><td>".$row["Comments"]."</td></tr>";
    }
} catch (PDOException $e) {
    echo $e->getMessage();
}

$conn = null;

?>