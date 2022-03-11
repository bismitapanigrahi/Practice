<?php
    include 'connect.php';
    if(isset($_GET['id'])) {
        $id=$_GET['id'];

        $sql="UPDATE requests SET status = 'approved' WHERE id=$id";

        $result=$conn->query($sql);
        if($result){
            header("location:http://localhost:8080/practice/programs_prac/request_app/display/allMembers.php");
        } else {
            echo "Failed to insert the records";
        }
    }

?>