<?php
    include 'connection.php';
    if(isset($_GET['declineid'])) {
        $declineid=$_GET['declineid'];
        
        class insertapprove extends dbconn {
            public function approve($declineid) {
                $sql1="SELECT TIMESTAMPDIFF(YEAR, dob, CURRENT_DATE()) AS age, gender FROM requests WHERE id=$declineid";
                $result1=$this->conn->query($sql1);
                $row=$result1->fetch_assoc();
                if($row['gender']=='Male'){
                    if($row['age']<22 || $row['age']>38) {
                        $sql="UPDATE requests SET status = 'declined' WHERE id=$declineid";
                        $result=$this->conn->query($sql);
                        if($result){
                            echo "<script>alert('Declined');";
                            echo "window.location.href='http://localhost:8080/practice/programs_prac/Members_using_oop/display/allMembers.php';";
                            echo "</script>";
                        }
                    } else {
                        echo "<script>alert('Please check the selection process');";
                        echo "window.location.href='http://localhost:8080/practice/programs_prac/Members_using_oop/display/allMembers.php';";
                        echo "</script>";
                    }
                }
                else {
                    if($row['age']<26 || $row['age']>34) {
                        $sql="UPDATE requests SET status = 'declined' WHERE id=$declineid";
                        $result=$this->conn->query($sql);
                        if($result){
                            echo "<script>alert('Declined');";
                            echo "window.location.href='http://localhost:8080/practice/programs_prac/Members_using_oop/display/allMembers.php';";
                            echo "</script>";
                        }
                    } else {
                        echo "<script>alert('Please check the selection process');";
                        echo "window.location.href='http://localhost:8080/practice/programs_prac/Members_using_oop/display/allMembers.php';";
                        echo "</script>";
                    }
                }
            }
        }
        $obj=new insertapprove();
        $obj->approve($declineid);
    }
?>