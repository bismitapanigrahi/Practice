<?php
    include 'connection.php';
    
    class displayRecord extends dbconn {
        public function display() {
            $sql="SELECT * FROM requests;";
            $result=$this->conn->query($sql);
            $sql1="SELECT TIMESTAMPDIFF(YEAR, dob, CURRENT_DATE()) AS age FROM requests;";
            $result1=$this->conn->query($sql1);

            if($result->num_rows > 0) { 
                while($row=$result->fetch_assoc()) {
                    $age=$result1->fetch_assoc();
                    echo '<tr><td>'.$row["id"].'</td><td>'.$row["fname"]. " " . $row["lname"].'</td><td>'
                    .$row["email"].'</td><td>'.$row["dob"].'</td><td>'.$age["age"].'</td><td>'.$row["gender"].'</td><td>';
                    if($row['status']=='approved') {
                        echo '<button id="approve1">Approve</button>
                        <button name="decline" id="decline" onclick="return confirmDecline()">
                        <a id="d" href="http://localhost:8080/practice/programs_prac/Members_using_oop/actions/declineinsert.php?declineid='.$row["id"].'">
                        Decline</a></button></td></tr>';
                    }
                    elseif($row['status']=='declined') {
                        echo '<button name="approve" id="approve" onclick="return confirmApprove()">
                        <a id="a" href="http://localhost:8080/practice/programs_prac/Members_using_oop/actions/approveinsert.php?approveid='.$row["id"].'">
                        Approve</a></button>
                        <button id="decline1">Decline</button></td></tr>';
                    } 
                    else { 
                        echo '<button id="approve" onclick="return confirmApprove()">
                        <a id="a" href="http://localhost:8080/practice/programs_prac/Members_using_oop/actions/approveinsert.php?approveid='.$row["id"].'">
                        Approve</a></button>
                        <button id="decline" onclick="return confirmDecline()">
                        <a id="d" href="http://localhost:8080/practice/programs_prac/Members_using_oop/actions/declineinsert.php?declineid='.$row["id"].'">
                        Decline</a></button></td></tr>';  
                    }
                }
            } else {
                    echo "<tr><td colspan='7'>No Result Found</td></tr>";
            }
        }
    }
?>