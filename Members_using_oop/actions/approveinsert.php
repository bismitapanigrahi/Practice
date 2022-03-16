<?php
    include 'connection.php';
    if(isset($_GET['approveid'])) {
        $approveid=$_GET['approveid'];
        
        class insertapprove extends dbconn {
            public function approve($approveid) {
                $sql1="SELECT TIMESTAMPDIFF(YEAR, dob, CURRENT_DATE()) AS age, gender FROM requests WHERE id=$approveid";
                $result1=$this->conn->query($sql1);
                $row=$result1->fetch_assoc();
                if($row['gender']=='Male'){
                    if($row['age']>=22 && $row['age']<=38) {
                        $sql="UPDATE requests SET status = 'approved' WHERE id=$approveid";
                        $result=$this->conn->query($sql);
                        if($result){
                            echo "<script>alert('Approved');";
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
                    if($row['age']>=26 && $row['age']<=34) {
                        $sql="UPDATE requests SET status = 'approved' WHERE id=$approveid";
                        $result=$this->conn->query($sql);
                        if($result){
                            echo "<script>alert('Approved');";
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
        $obj->approve($approveid);
    }
?>