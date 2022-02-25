<?php
    include '../actions/connect.php'; 
    include '../actions/update.php'; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
    <link rel="stylesheet" href="http://localhost:8080/practice/programs_prac/demo/styles/register_style.css">
</head>
<body>
    <form method="post">
        <h2>Registration</h2>
        <label for="name">Name: </label>
        <input type="text" name="name" id="name" value="<?php echo $name; ?>"><br><br>
        <label for="age">Age: </label>
        <input type="number" name="age" id="age" min="21" max="65" 
        title="Age should be between 21 and 65" value="<?php echo $age; ?>">
        <br><br>
        <label for="email">Email: </label>
        <input type="email" name="email" id="email" value="<?php echo $email; ?>"><br><br>
        <label for="phno">Mobile No.: </label>
        <input type="tel" name="phno" id="phno" pattern="[0-9]{10}" 
        title="Should be 10 digit" value="<?php echo $phno; ?>"><br><br>
        <button type="submit" name="submit">Update</button><br>
    </form>
</body>
</html>