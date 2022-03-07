<?php
try {
    $conn = new PDO("mysql:host=localhost; dbname=sql_prac", "root", "");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql="UPDATE Customers
    SET Cus_Name='Ana Turjillo Emparedados', City='Merida'
    WHERE cid=2";

    $stmt=$conn->prepare($sql);
    $stmt->execute();

    echo $stmt->rowCount()."Records Updated Successfully";
} catch (PDOException $e) {
    echo $e->getMessage();
}

$conn = null;


?>