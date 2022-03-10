<?php
    include 'connect.php';
    if(isset($_GET['id'])) {
        $id=$_GET['id'];

        $sql="INSERT INTO declined (fname, lname, email, dob, age, gender) 
        SELECT fname, lname, email, dob, age, gender 
        FROM requests WHERE id=$id AND 
        (CASE 
         	WHEN gender='male' THEN age<=22 OR age>=38
         	WHEN gender='female' THEN age<=26 OR age>=34
         END)";

        $result=$conn->query($sql);
        if($result){
            header("location:http://localhost:8080/practice/programs_prac/request_app/display/allMembers.php");
        } else {
            echo "Failed to insert the records";
        }
    }

?>