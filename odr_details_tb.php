<?php
try{
    $conn = new PDO ("mysql:host=localhost; dbname=sql_prac", "root", "");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "CREATE TABLE orderdetails (
        odid int NOT NULL AUTO_INCREMENT PRIMARY KEY,
        orderid int,
        pid int,
        quantity int
    )";

    $conn->exec($sql);
    echo "Table created successfully";
} catch (PDOException $e) {
    echo $sql ."<br>". $e->getMessage();
}

$conn = null;
?>