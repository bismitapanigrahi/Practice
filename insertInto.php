<?php
try{
    $conn=new PDO ("mysql:host=localhost; dbname=sql_prac", "root", "");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt=$conn->prepare("INSERT INTO customers (cus_name, city, country) 
    SELECT sname, city, country FROM suppliers WHERE country='USA'");
    $stmt->execute();

    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);

    echo "New Records Added Successfully";
} catch (PDOException $e) {
    echo $e->getMessage();
}

?>