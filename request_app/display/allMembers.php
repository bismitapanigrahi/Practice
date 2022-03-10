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
    <h2>All Members: </h2><br>
    <div id="dropdown">
        <button id="dropbutton" onclick="document.getElementById('content').style.display='block'">Members</button><br><br>
        <div id="content">
            <ul>
                <li><a href="member.php">Create a member</a></li><br>
                <li><a href="approved.php">Approved Members</a></li><br>
                <li><a href="declined.php">Declined Members</a></li>
            </ul>
        </div>
    </div>

    <?php
        $sql="SELECT * FROM requests;";
        $result=$conn->query($sql);
        $sql1='SELECT TIMESTAMPDIFF(YEAR, dob, CURRENT_DATE()) AS age FROM requests';
        $result1=$conn->query($sql1);

        if($result->num_rows > 0) { 
            echo "<table><tr><th>ID</th><th>Name</th><th>Email</th><th>Date of Birth</th><th>Age</th><th>Gender</th><th>Action</th></tr>";
            while($row=$result->fetch_assoc()) {
                $age=$result1->fetch_assoc();
                echo '<tr><td>'.$row["id"].'</td><td>'.$row["fname"]. " " . $row["lname"].'</td><td>'
                .$row["email"].'</td><td>'.$row["dob"].'</td><td>'.$age["age"].'</td><td>'.$row["gender"].'</td><td>
                <button id="approve" onclick="return confirmApprove()">
                <a id="a" href="approveinsert.php?id='.$row["id"].'">Approve</a></button>
                <button id="decline" onclick="return confirmDecline()">
                <a id="d" href="declineinsert.php?id='.$row["id"].'">Decline</a></button></td></tr>';
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