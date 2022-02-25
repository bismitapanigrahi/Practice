<?php 
include '../actions/connect.php'; 
include '../actions/show.php'; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users</title>
    <link rel="stylesheet" href="http://localhost:8080/practice/programs_prac/demo/styles/display_style.css">
</head>
<body>
    <h2>List of Users: </h2>
    <button id="register"><a id="r" href="register.php" target="_blank">Register</a></button>
    <br><br><br>
    <?php
        if($result->num_rows > 0) {
            echo "<table><tr><th>ID</th><th>Name</th><th>Age</th><th>Email</th><th>Mobile No.</th>
            <th>Action</th></tr>";
            while($row=$result->fetch_assoc()) {
                echo '<tr><td>'.$row["id"].'</td><td>'.$row["name"].'</td><td>'
                .$row["age"].'</td><td>'.$row["email"].
                '</td><td>'.$row["phno"].'</td><td>
                <button id="update"><a id="u" href="edit.php?updateid='.$row["id"].'">Edit</a></button>
                <button id="delete" onclick="return confrm()">
                <a id="d" href="delete.php?deleteid='.$row["id"].'">Delete</a></button></td></tr>';
            }
            echo "</table>";
        } else {
            echo "No Records Found";
        }
    ?>
    <script>
        function confrm() {
            return confirm("Are you sure you want to delete?");
        }
    </script>
</body>
</html>