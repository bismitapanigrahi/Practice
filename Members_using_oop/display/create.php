<?php
    include '../actions/insert.php';

    if(isset($_POST['submit'])) {
        $validate=new validator($_POST);
        $errors= $validate->validateform();
        //$db=new insertRecord();
        //$db->insert($_POST);
    }
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
        <input type="text" name="fname" id="fname" value="<?php //echo $fname; ?>">
        <span><?php //echo $fnamerr; ?></span><br><br>
        <label for="lname">Last Name: </label>
        <input type="text" name="lname" id="lname" value="<?php //echo $lname; ?>"><br><br>
        <label for="email">*Email: </label>
        <input type="email" name="email" id="email" value="<?php //echo $email; ?>">
        <span><?php //echo $emailerr; ?></span><br><br>
        <label for="dob">*Date of Birth: </label>
        <input type="date" name="dob" id="dob" value="<?php //echo $dob; ?>">
        <span><?php //echo $doberr; ?></span><br><br>
        <label for="gender">*Gender: </label>
        <input type="radio" name="gender" id="male" value="Male" <?php //echo $male; ?>>Male 
        <input type="radio" name="gender" id="female" value="Female" <?php //echo $female; ?>>Female 
        <span><?php //echo $gendererr; ?></span><br><br>
        <button><a href="allMembers.php">Back</a></button>
        <button type="reset"><a href="create.php">Reset</a></button>
        <button type="submit" name="submit">Submit</button>
    </form>
</body>
</html>