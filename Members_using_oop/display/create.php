<?php
    include '../actions/insert.php';
    $validate=new validator;
    $validate->create($_POST);
    $_POST['gender']="";
    if(isset($_POST['submit'])) {
        $errors= $validate->validateform();
        $validate->insert();
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
        <input type="text" name="fname" id="fname" value="<?php echo ($_POST['fname'] ?? ''); ?>">
        <span><?php echo ($errors['fname'] ?? ''); ?></span><br><br>
        <label for="lname">Last Name: </label>
        <input type="text" name="lname" id="lname" value="<?php echo ($_POST['lname'] ?? ''); ?>"><br><br>
        <label for="email">*Email: </label>
        <input type="email" name="email" id="email" value="<?php echo ($_POST['email'] ?? ''); ?>">
        <span><?php echo ($errors['email'] ?? ''); ?></span><br><br>
        <label for="dob">*Date of Birth: </label>
        <input type="date" name="dob" id="dob" value="<?php echo ($_POST['dob'] ?? ''); ?>">
        <span><?php echo ($errors['dob'] ?? ''); ?></span><br><br>
        <label for="gender">*Gender: </label>
        <input type="hidden" name="gender" value="">
        <input type="radio" name="gender" id="male" value="Male" <?php echo ($validate->validategenderMale() ?? ''); ?>>Male 
        <input type="radio" name="gender" id="female" value="Female" <?php echo ($validate->validategenderFemale() ?? ''); ?>>Female 
        <span><?php echo ($errors['gender'] ?? '');?></span><br><br>
        <button><a href="allMembers.php">Back</a></button>
        <button type="reset"><a href="create.php">Reset</a></button>
        <button type="submit" name="submit">Submit</button>
    </form>
</body>
</html>