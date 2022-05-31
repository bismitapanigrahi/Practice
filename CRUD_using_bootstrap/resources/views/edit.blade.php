<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="container mt-3 pt-2 text-center">
    <h1>Edit Details: </h1><br>
        <div class="d-flex justify-content-center">
            <form action="" method="POST" class="border p-3 bg-dark">
                @csrf
                @method('PUT')
                <div class="pt-2 m-2">
                    <div class="form-floating p-1" style="width:300px">
                        <input type="text" style="height:50px" class="form-control" placeholder="Enter name" name="name" id="name" value="{{$member->name}}">
                        <label for="name">Name: </label>
                        <span style="color: red">@error('name'){{$message}}@enderror</span><br>
                    </div>
                </div>
                <div class="pt-2 m-2">
                    <div class="form-floating p-1">
                        <input type="email" style="height:50px" class="form-control" placeholder="Enter email" name="email" id="email" value="{{$member->email}}">
                        <label for="email">Email: </label>
                        <span style="color: red">@error('email'){{$message}}@enderror</span><br>
                    </div>
                </div>
                <div class="pt-2 m-2">
                    <div class="form-floating p-1">
                        <input type="tel" style="height:50px" class="form-control" placeholder="Enter mobile" name="mobile" id="mobile" value="{{$member->phno}}">
                        <label for="phno">Mobile No.: </label>
                        <span style="color: red">@error('mobile'){{$message}}@enderror</span><br>
                    </div>
                </div>
                <div class="row text-center">
                    <div class="col mb-3">
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                    <div class="col">
                        <a class="btn btn-secondary" href="listUsers">Back</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
</html>