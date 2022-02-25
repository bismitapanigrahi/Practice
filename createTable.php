<?php

//PDO 
try {
    $conn=new PDO("mysql:host=localhost;dbname=mydb","root","");

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql="CREATE TABLE guests 
    (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(30) NOT NULL,
        email VARCHAR(50),
        reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )";

    $conn->exec($sql);
    echo "Table Created Successfully";
} catch (PDOException $e) {
    echo $sql."<br>".$e->getMessage();
}

$conn=null;

?>