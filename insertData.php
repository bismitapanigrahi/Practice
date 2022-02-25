<?php

//PDO
try {
    $conn=new PDO("mysql:host=localhost;dbname=mydb","root","");

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql="INSERT INTO guests (name, email) VALUES ('Varun Kumar', 'varun@mail.com')";

    $conn->exec($sql);
    echo "Values Inserted Successfully";
} catch (PDOException $e) {
    echo $sql."<br>".$e->getMessage();
}

$conn=null;

?>