<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
    <style>
        body {text-align: center;}
        form {margin:4em 16em; padding: 7em; border: solid;}
        label {position: absolute; right: 43em;}
        input {position: absolute; left: 45em;}
    </style>
</head>
<body>
    <h1>Edit Details: </h1>
    <form action="" method="POST">
        @csrf
        @method('PUT')
        <label for="name">Name: </label>
        <input type="text" name="name" id="name" value="{{$member->name}}"><br>
        <span style="color: red">@error('name'){{$message}}@enderror</span><br>
        <label for="email">Email: </label>
        <input type="email" name="email" id="email" value="{{$member->email}}"><br>
        <span style="color: red">@error('email'){{$message}}@enderror</span><br>
        <label for="phno">Mobile No.: </label>
        <input type="tel" name="phno" id="phno"  value="{{$member->phno}}"><br>
        <span style="color: red">@error('phno'){{$message}}@enderror</span><br>
        <button type="submit">Update</button>
    </form>
</body>
</html>