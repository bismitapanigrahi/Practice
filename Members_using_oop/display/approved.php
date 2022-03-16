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
        include '../actions/approveBack.php'; 
    ?>
</body>
</html>