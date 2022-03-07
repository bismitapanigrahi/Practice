<?php
$conn = new mysqli ("localhost", "root", "", "sql_prac");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$stmt = $conn->prepare("INSERT INTO shippers (shipper_name, phone) VALUES (?, ?)");
$stmt->bind_param("ss", $sname, $phone);

$sname = "Speedy Express";
$phone = "(503) 555-9831";
$stmt->execute();

$sname = "United Package";
$phone = "(503) 555-3199";
$stmt->execute();

$sname = "Federal Shipping";
$phone = "(503) 555-9931";
$stmt->execute();

echo "New records created successfully";

$stmt->close();
$conn->close();

?>