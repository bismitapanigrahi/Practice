<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-3 pt-2">
        <h1 style="text-align:center">Edit details</h1>
        @if (session()->has('status'))
            <div style="text-align: center; color: #009688">
                <h5>"{{session('status')}}"</h5>
            </div>
        @endif
        <div class="d-flex justify-content-center">
            <div class="card" style="width:500px">
                <div class="card-body">
                    <a style="float: right" href="/listUsers">All users</a><br>
                    <form action="" method="POST" style="width: 450px;">
                        @csrf
                        @method('PUT')
                        <div class="form-row mb-3">
                            <div class="col">
                                <label for="firstname"><span style="color: red">*</span>First name</label>
                                <input type="text" class="form-control" name="firstname" id="firstname" value="{{old('firstname', $member->firstname)}}" >
                                <span style="color: red">@error('firstname'){{$message}}@enderror</span>
                            </div>
                            <div class="col">
                                <label for="lastname">Last name</label>
                                <input type="text" class="form-control" name="lastname" id="lastname" value="{{old('lastname', $member->lastname)}}">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="email"><span style="color: red">*</span>Email</label>
                                <input type="email" class="form-control" name="email" id="email" value="{{old('email', $member->email)}}" >
                                <span style="color: red">@error('email'){{$message}}@enderror</span> 
                            </div>
                            <div class="form-group col-md-6 mb-4">
                                <label for="mobile"><span style="color: red">*</span>Mobile</label>
                                <input type="tel" class="form-control" name="mobile" id="mobile" value="{{old('mobile', $member->phno)}}" >
                                <span style="color: red">@error('mobile'){{$message}}@enderror</span>  
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col">
                                <label for="gender"><span style="color: red">*</span>Gender </label>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" id="male" name="gender" value="Male" @if($member->gender == 'Male') checked @endif>Male
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" id="female" name="gender" value="Female" @if($member->gender == 'Female') checked @endif>Female
                                </div>
                                <span style="color: red">@error('gender'){{$message}}@enderror</span>
                            </div>
                            <div class="form-group col">
                                <label for="dob"><span style="color: red">*</span>DOB: </label>
                                <input type="date" style="height: 40px; width: 172px" class="form-control-inline" name="dob" id="dob" value="{{old('dob', $member->dob)}}" >
                                <span style="color: red">@error('dob'){{$message}}@enderror</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="address"><span style="color: red">*</span>Address</label>
                            <textarea class="form-control" id="address" name="address" placeholder="House no., area details" >{{old('address', $member->address)}}</textarea>
                            <span style="color: red">@error('address'){{$message}}@enderror</span>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-5">
                                <label for="city"><span style="color: red">*</span>City</label>
                                <input type="text" class="form-control" name="city" id="city" value="{{old('city', $member->city)}}">
                                <span style="color: red">@error('city'){{$message}}@enderror</span>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="state"><span style="color: red">*</span>State</label>
                                <input type="text" class="form-control" name="state" id="state" value="{{old('state', $member->state)}}">
                                <span style="color: red">@error('state'){{$message}}@enderror</span>
                            </div>
                            <div class="form-group col-md-3 mb-4">
                                <label for="zip"><span style="color: red">*</span>Zip</label>
                                <input type="text" class="form-control" name="zip" id="zip" value="{{old('zip', $member->zip)}}">
                                <span style="color: red">@error('zip'){{$message}}@enderror</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label style="width: 160px" for="qual">Highest qualification:</label>
                            <select class="form-select-inline" id="qualification" name="qualification" style="height: 40px; width: 285px">
                                <option value="{{NULL}}" @if('{{NULL}}' == $member->qualification) selected @endif>Select</option>
                                <option value="SSC/Matriculation" @if('SSC/Matriculation' == $member->qualification) selected @endif>SSC/Matriculation</option>
                                <option value="Intermediate" @if('Intermediate' == $member->qualification) selected @endif>Intermediate</option>
                                <option value="Graduation" @if('Graduation' == $member->qualification) selected @endif>Graduation</option>
                                <option value="Post graduation" @if('Post graduation' == $member->qualification) selected @endif>Post graduation</option>
                            </select>
                        </div>
                        <div class="form-group mb-5">
                            <label for="professiom">Profession</label>
                            <input type="text" class="form-control" name="profession" id="profession" value="{{old('profession', $member->profession)}}">
                        </div>
                        <div class="row text-center">
                            <div class="col">
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                            <div class="col">
                                <a class="btn btn-dark" href="/listUsers">Back</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>