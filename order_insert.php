<?php
$conn = new mysqli ("localhost", "root", "", "sql_prac");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$stmt = $conn->prepare("INSERT INTO orders (orderid, cid, empid, orderdate, shipperid) VALUES (?, ?, ?, ?, ?)");
$stmt->bind_param("iiisi", $oid, $cid, $eid, $od, $sid);

$oid = 10248;
$cid = 3;
$eid = 1;
$od = "1996-07-04";
$sid = 3;
$stmt->execute();

$oid = 10249;
$cid = 5;
$eid = 2;
$od = "1996-07-05";
$sid = 2;
$stmt->execute();

$oid = 10250;
$cid = 7;
$eid = 3;
$od = "1996-07-06";
$sid = 1;
$stmt->execute();

$oid = 10251;
$cid = 2;
$eid = 4;
$od = "1996-07-07";
$sid = 3;
$stmt->execute();

$oid = 10252;
$cid = 1;
$eid = 5;
$od = "1996-07-08";
$sid = 1;
$stmt->execute();

$oid = 10253;
$cid = 4;
$eid = 6;
$od = "1996-07-08";
$sid = 2;
$stmt->execute();

$oid = 10254;
$cid = 6;
$eid = 7;
$od = "1996-07-09";
$sid = 2;
$stmt->execute();

echo "New records created successfully";

$stmt->close();
$conn->close();

?>