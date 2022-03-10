<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Declined</title>
    <link rel="stylesheet" href="http://localhost:8080/practice/programs_prac/request_app/styles/approvestyle.css">
</head>
<body>
    <h2>Approved Members: </h2><br>
    <button><a href="allMembers.php">Back</a></button>
    <?php 
        include '../actions/connect.php';

        $sql="SELECT * FROM declined;";
        $result=$conn->query($sql);

        if($result->num_rows > 0) { 
            echo "<table><tr><th>ID</th><th>Name</th><th>Email</th><th>Date of Birth</th><th>Age</th><th>Gender</th></tr>";
            while($row=$result->fetch_assoc()) {
                echo '<tr><td>'.$row["id"].'</td><td>'.$row["fname"]. " " . $row["lname"].'</td><td>'
                .$row["email"].'</td><td>'.$row["dob"].'</td><td>'.$row["age"].'</td><td>'.$row["gender"].'</td></tr>';
            }
            echo "</table>";
        } else {
            echo "No Result Found";
        }
    ?>
</body>
</html>