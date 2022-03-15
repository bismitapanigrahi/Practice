<?php
    include 'connect.php';
    if(isset($_GET['id'])) {
        $id=$_GET['id'];

        $sql1="SELECT TIMESTAMPDIFF(YEAR, dob, CURRENT_DATE()) AS age, gender FROM requests WHERE id=$id";
        $result1=$conn->query($sql1);
        $row=$result1->fetch_assoc();
        if($row['gender']=='Male'){
            if($row['age']<22 || $row['age']>38) {
                $sql="UPDATE requests SET status = 'declined' WHERE id=$id";
                $result=$conn->query($sql);
                if($result){
                    echo "<script>alert('Declined');";
                    echo "window.location.href='http://localhost:8080/practice/programs_prac/request_app/display/allMembers.php';";
                    echo "</script>";
                    //include '../display/allMembers.php';
                    //echo '<meta http-equiv="refresh" content="0; url=http://localhost:8080/practice/programs_prac/request_app/display/allMembers.php">';
                    //header("location:http://localhost:8080/practice/programs_prac/request_app/display/allMembers.php");
                }
            } else {
                echo "<script>alert('Please check the selection process');";
                echo "window.location.href='http://localhost:8080/practice/programs_prac/request_app/display/allMembers.php';";
                echo "</script>";
                //include '../display/allMembers.php';
                //echo '<meta http-equiv="refresh" content="0; url=http://localhost:8080/practice/programs_prac/request_app/display/allMembers.php">';
                //header("location:http://localhost:8080/practice/programs_prac/request_app/display/allMembers.php");
            }
        }
        else {
            if($row['age']<26 || $row['age']>34) {
                $sql="UPDATE requests SET status = 'declined' WHERE id=$id";
                $result=$conn->query($sql);
                if($result){
                    echo "<script>alert('Declined');";
                    echo "window.location.href='http://localhost:8080/practice/programs_prac/request_app/display/allMembers.php';";
                    echo "</script>";
                    //include '../display/allMembers.php';
                    //echo '<meta http-equiv="refresh" content="0; url=http://localhost:8080/practice/programs_prac/request_app/display/allMembers.php">';
                    //header("location:http://localhost:8080/practice/programs_prac/request_app/display/allMembers.php");
                }
            } else {
                echo "<script>alert('Please check the selection process');";
                echo "window.location.href='http://localhost:8080/practice/programs_prac/request_app/display/allMembers.php';";
                echo "</script>";
                //include '../display/allMembers.php';
                //echo '<meta http-equiv="refresh" content="0; url=http://localhost:8080/practice/programs_prac/request_app/display/allMembers.php">';
                //header("location:http://localhost:8080/practice/programs_prac/request_app/display/allMembers.php");
            }
        }
    }

?>