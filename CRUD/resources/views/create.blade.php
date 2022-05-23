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
        a:active, a:link, a:visited, a:hover {
            text-decoration: none;
        }
        a {color: black;}
    </style>
</head>
<body>
    <h1>Details: </h1>
    <form action="" method="POST">
        @csrf
        <label for="name">Name: </label>
        <input type="text" name="name" id="name" value="{{old('name')}}"><br>
        <span style="color: red">@error('name'){{$message}}@enderror</span><br>
        <label for="email">Email: </label>
        <input type="email" name="email" id="email" value="{{old('email')}}"><br>
        <span style="color: red">@error('email'){{$message}}@enderror</span><br>
        <label for="phno">Mobile No.: </label>
        <input type="tel" name="mobile" id="mobile" value="{{old('mobile')}}"><br>
        <span style="color: red">@error('mobile'){{$message}}@enderror</span><br>
        <button type="submit">Submit</button>
        <button><a href="listUsers">Back</a></button>
    </form>
</body>
</html>