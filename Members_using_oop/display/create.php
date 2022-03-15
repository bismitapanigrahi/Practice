<?php
    //include '../actions/memberinsert.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create a Member</title>
    <link rel="stylesheet" href="http://localhost:8080/practice/programs_prac/Members_using_oop/styles/createStyle.css">
</head>
<body>
    <br>
    <h1>Member Creation</h1>
    <br><br>
    <form action="create.php" method="post">
        <label for="fname">*First Name: </label>
        <input type="text" name="fname" id="fname"><br><br>
        <label for="lname">Last Name: </label>
        <input type="text" name="lname" id="lname"><br><br>
        <label for="email">*Email: </label>
        <input type="email" name="email" id="email"><br><br>
        <label for="dob">*Date of Birth: </label>
        <input type="date" name="dob" id="dob"><br><br>
        <label for="gender">*Gender: </label>
        <input type="radio" name="gender" id="male" value="Male">Male 
        <input type="radio" name="gender" id="female" value="Female">Female <br><br>
        <button>Back</button>
        <button type="reset">Reset</button>
        <button type="submit" name="submit">Submit</button>
    </form>
</body>
</html>