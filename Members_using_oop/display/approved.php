<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Approved</title>
    <link rel="stylesheet" href="http://localhost:8080/practice/programs_prac/Members_using_oop/styles/approveStyle.css">
</head>
<body>
    <h2>Approved Members: </h2><br>
    <button><a href="allMembers.php">Back</a></button><br><br>
    <?php 
        include '../actions/connection.php'; 

        class approved extends dbconn {
            public function approvedMembers() {
                $sql="SELECT * FROM requests WHERE status='approved'";
                $result=$this->conn->query($sql);
                $sql1="SELECT TIMESTAMPDIFF(YEAR, dob, CURRENT_DATE()) AS age FROM requests WHERE status='approved'";
                $result1=$this->conn->query($sql1);

                if($result->num_rows > 0) { 
                    echo "<table><tr><th>ID</th><th>Name</th><th>Email</th><th>Date of Birth</th><th>Age</th>
                    <th>Gender</th><th>Status</th></tr>";
                    while($row=$result->fetch_assoc()) {
                        $age=$result1->fetch_assoc();
                        echo '<tr><td>'.$row["id"].'</td><td>'.$row["fname"]. " " . $row["lname"].'</td><td>'
                        .$row["email"].'</td><td>'.$row["dob"].'</td><td>'.$age["age"].'</td>
                        <td>'.$row["gender"].'</td><td>'.$row["status"].'</td></tr>';
                    }
                    echo "</table>";
                } else {
                    echo "<table><tr><th>ID</th><th>Name</th><th>Email</th><th>Date of Birth</th><th>Age</th>
                    <th>Gender</th><th>Status</th></tr><br>";
                    echo "<tr><td colspan='7'>No Result Found</td></tr>";
                    echo "</table>";
                }
            }
        }
        $obj=new approved();
        $obj->approvedMembers();
    ?>
</body>
</html>