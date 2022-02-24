<?php
    include '../actions/connect.php';
    $sql="SELECT * FROM users;";
    $result=$conn->query($sql);
?>