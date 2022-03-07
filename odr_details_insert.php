<?php
$conn = new mysqli ("localhost", "root", "", "sql_prac");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$stmt = $conn->prepare("INSERT INTO orderdetails (orderid, pid, quantity) VALUES (?, ?, ?)");
$stmt->bind_param("iii", $oid, $pid, $quan);

$oid = 10248;
$pid = 3;
$quan = 12;
$stmt->execute();

$oid = 10248;
$pid = 2;
$quan = 15;
$stmt->execute();

$oid = 10248;
$pid = 3;
$quan = 7;
$stmt->execute();

$oid = 10249;
$pid = 4;
$quan = 23;
$stmt->execute();

$oid = 10249;
$pid = 5;
$quan = 5;
$stmt->execute();

$oid = 10250;
$pid = 2;
$quan = 17;
$stmt->execute();

$oid = 10252;
$pid = 6;
$quan = 20;
$stmt->execute();

$oid = 10254;
$pid = 2;
$quan = 10;
$stmt->execute();

$oid = 10251;
$pid = 6;
$quan = 4;
$stmt->execute();

$oid = 10253;
$pid = 5;
$quan = 25;
$stmt->execute();

echo "New records created successfully";

$stmt->close();
$conn->close();

?>