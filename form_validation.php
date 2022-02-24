<?php include "validation.php"; ?>
<html>
    <head>
        <style>
            span {
                color: red;
            }
        </style>
    </head>
    <body>
        <h2>Form Validation:</h2>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>" method="post">
            Name: <input type="text" name="name"><span><?php echo $nameErr; ?></span><br><br>
            Email: <input type="email" name="email"><span><?php echo $emailErr; ?></span><br><br>
            Gender: 
            <input type="radio" name="gender" value="female">Female
            <input type="radio" name="gender" value="male">Male
            <input type="radio" name="gender" value="other">Other
            <span><?php echo $genderErr; ?></span><br><br>
            <input type="submit" name="submit" value="Submit">
        </form>
        <?php
            echo "$name <br> $email <br> $gender";

        ?>
    </body>
</html>