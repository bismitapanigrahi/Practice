<?php 
include '../actions/connect.php'; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Requestee</title>
    <link rel="stylesheet" href="http://localhost:8080/practice/programs_prac/request_app/styles/allstyle.css">
</head>
<body>
    <h2>All Members: </h2>
    <div id=members>
        <ul>
            <li><button><u><a href="member.php">Create a Member</a></u></button></li>
            <Li><button><u><a href="approved.php">Approved Members</a></u></button></Li>
            <li><button><u><a href="declined.php">Declined Members</a></u></button></li>
        </ul>
    </div>
    <div id="note">
        <ul class="member_note">
            <li>*<u>Note</u>: Selection Process: </li>
            <li>1. Male Member age should be between 22 and 38</li>
            <li>2. Female Member age should be between 26 and 34</li>
        </ul>
    </div> 
    <br>

    <?php
        $sql="SELECT * FROM requests;";
        $result=$conn->query($sql);
        $sql1="SELECT TIMESTAMPDIFF(YEAR, dob, CURRENT_DATE()) AS age FROM requests;";
        $result1=$conn->query($sql1);

        if($result->num_rows > 0) { 
            echo "<table><tr><th>ID</th><th>Name</th><th>Email</th><th>Date of Birth</th><th>Age</th><th>Gender</th><th>Action</th></tr>";
            while($row=$result->fetch_assoc()) {
                $age=$result1->fetch_assoc();
                echo '<tr><td>'.$row["id"].'</td><td>'.$row["fname"]. " " . $row["lname"].'</td><td>'
                .$row["email"].'</td><td>'.$row["dob"].'</td><td>'.$age["age"].'</td><td>'.$row["gender"].'</td><td>';
                if($row['status']=='approved') {
                    echo '<button id="approve1">Approve</button>
                    <button name="decline" id="decline" onclick="return confirmDecline()">
                    <a id="d" href="http://localhost:8080/practice/programs_prac/request_app/actions/declineinsert.php?id='.$row["id"].'">
                    Decline</a></button></td></tr>';
                }
                elseif($row['status']=='declined') {
                    echo '<button name="approve" id="approve" onclick="return confirmApprove()">
                    <a id="a" href="http://localhost:8080/practice/programs_prac/request_app/actions/approveinsert.php?id='.$row["id"].'">
                    Approve</a></button>
                    <button id="decline1">Decline</button></td></tr>';
                } 
                else { 
                    echo '<button id="approve" onclick="return confirmApprove()">
                    <a id="a" href="http://localhost:8080/practice/programs_prac/request_app/actions/approveinsert.php?id='.$row["id"].'">
                    Approve</a></button>
                    <button id="decline" onclick="return confirmDecline()">
                    <a id="d" href="http://localhost:8080/practice/programs_prac/request_app/actions/declineinsert.php?id='.$row["id"].'">
                    Decline</a></button></td></tr>';
                }

            }
            echo "</table>";
        } else {
            echo "No Request Found";
        }
    ?>
    <script>
        function confirmApprove() {
            return confirm("Are you sure you want to Approve this member?");
        }
        function confirmDecline() {
            return confirm("Are you sure you want to Decline this member?");
        }
    </script>
</body>
</html>