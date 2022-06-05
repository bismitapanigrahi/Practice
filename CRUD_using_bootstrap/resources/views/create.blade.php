<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="container mt-3 pt-2">
        <h1 style="text-align:center">Enter User Details: </h1><br>
        <a style="position:absolute; right:465px" class="btn btn-info" href="/listUsers">All Users</a>
        <br><br>
        @if (session()->has('status'))
            <div style="text-align: center">
                <h5>"{{session('status')}}"</h5>
            </div>
        @endif
        <div class="d-flex justify-content-center">
            <form action="" method="POST" class="p-3 bg-dark">
                @csrf
                <div class="pt-2 m-2">
                    <div class="input-group p-1">
                    <span class="input-group-text">Name: </span>
                        <input type="text" style="height:50px" class="form-control" placeholder="*First name" name="firstname" id="firstname" value="{{old('firstname')}}" required>
                        <input type="text" style="height:50px" class="form-control" placeholder="Last name" name="lastname" id="lastname" value="{{old('lastname')}}">
                    </div>
                    <span style="color: red">@error('firstname'){{$message}}@enderror</span><br>
                </div>
                <div class="pt-2 m-2">
                    <div class="input-group p-1">
                        <span class="input-group-text">*Email: </span>
                        <input type="email" style="height:50px" class="form-control" name="email" id="email" value="{{old('email')}}" required>
                        <span class="input-group-text">*Mobile: </span>
                        <input type="tel" style="height:50px" class="form-control" name="mobile" id="mobile" value="{{old('mobile')}}" required>
                    </div>
                    <span style="color: red">@error('email'){{$message}}@enderror @error('mobile'){{$message}}@enderror</span><br>                        
                </div>
                <div class="row">
                    <div class="input-group col m-2">
                        <div class="d-flex flex-row" style="height:45px">
                            <span class="input-group-text">*Gender: </span>
                            <div class="input-group-text form-check">
                                <input type="radio" class="form-check-input" id="male" name="gender" value="Male">Male
                                <label class="form-check-label" for="male"></label>
                            </div>
                            <div class="input-group-text form-check">
                                <input type="radio" class="form-check-input" id="female" name="gender" value="Female">Female
                                <label class="form-check-label" for="female"></label>
                            </div>
                        </div>
                        <span style="color: red">@error('gender'){{$message}}@enderror</span><br>
                    </div>
                    <div class="col pt-2">
                        <div class="form-floating p-1">
                            <input type="date" style="height:45px" class="form-control" placeholder="Enter dob" name="dob" id="dob" value="{{old('dob')}}" required>
                            <label for="name">*DOB: </label>
                            <span style="color: red">@error('dob'){{$message}}@enderror</span><br>
                        </div>
                    </div>
                    <div class="col pt-2">
                        <div class="form-floating p-1">
                            <textarea class="form-control" style="height:45px" id="address" name="address" placeholder="Enter Address" title="Enter your country, state and city" required>{{old('address')}}</textarea>
                            <label for="comment">*Address: </label>
                            <span style="color: red">@error('address'){{$message}}@enderror</span><br>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-4">
                    <div class="form-floating p-1">
                        <div class="d-flex flex-row" style="height:45px">
                        <span class="input-group-text">Highest Qualification:</span>
                        <select class="form-select" id="qualification" name="qualification">
                            <option value="{{NULL}}">Select</option>
                            <option value="SSC/Matriculation">SSC/Matriculation</option>
                            <option value="Intermediate">Intermediate</option>
                            <option value="Graduation">Graduation</option>
                            <option value="Post Graduation">Post Graduation</option>
                        </select>
                        </div>
                    </div>
                    <div class="form-floating p-1 ms-5">
                        <input type="text" style="height:45px" class="form-control" placeholder="Enter Profession" name="profession" id="profession" value="{{old('profession')}}">
                        <label for="name">Profession: </label>
                    </div>
                </div>
                <div class="row mb-2 text-center">
                    <div class="col">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                    <div class="col">
                        <button type="reset" class="btn btn-secondary">Clear</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
</html>