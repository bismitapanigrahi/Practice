<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create</title>
    <style>
        body {text-align: center;}
        form {margin:4em 16em; padding: 7em; border: solid;}
        label {position: absolute; right: 43em;}
        input {position: absolute; left: 45em;}
    </style>
</head>
<body>
    <h1>Details: </h1>
    <form action="" method="POST">
        @csrf
        <label for="name">Name: </label>
        <input type="text" name="name" id="name"><br><br>
        <label for="email">Email: </label>
        <input type="email" name="email" id="email"><br><br>
        <label for="phno">Mobile No.: </label>
        <input type="tel" name="phno" id="phno">
        <br><br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>