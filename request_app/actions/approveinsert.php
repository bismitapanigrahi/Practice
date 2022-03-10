<?php
    include 'connect.php';
    if(isset($_GET['id'])) {
        $id=$_GET['id'];

        $sql="INSERT INTO approved (fname, lname, email, dob, age, gender) 
        SELECT fname, lname, email, dob, (SELECT TIMESTAMPDIFF(YEAR, dob, CURRENT_DATE())), gender 
        FROM requests WHERE id=$id";

        $result=$conn->query($sql);
        if($result){
            header("location:allMembers.php");
        } else {
            echo "Failed to insert the records";
        }
    }

?>