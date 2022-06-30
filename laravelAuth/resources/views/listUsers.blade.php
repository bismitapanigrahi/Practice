<x-header />
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="{{asset('bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
       
    <!-- Bootstrap Bundle with Popper -->
    <script src="{{asset('bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <title>List of Users</title>
</head>
<body>
    <div class="min-h-screen flex flex-col sm:justify-center items-center bg-gray-100">
        <div class="px-3 py-3 bg-white shadow-md sm:rounded-lg">
            <h3 style="text-align: center;">Registered users</h3>
            <br>
            @if (session()->has('status'))
                <div style="text-align: center; color: #009688">
                    <h5>{{session('status')}}</h5>
                </div>
            @endif
            <table class="table" style="text-align: center">
                <thead class="table-secondary">
                    <tr>
                        <th>ID</th>
                        <th>Firstname</th>
                        <th>Lastname</th>
                        <th>Email</th>
                        <th>Mobile No.</th>
                        <th>Gender</th>
                        <th>DOB</th>
                        <th>Address</th>
                        <th>Qualification</th>
                        <th>Profession</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                @if (!$members->isEmpty())
                    @foreach ($members as $member)
                    @if($member->is_deleted == 0)
                    <tr>
                        <td> {{$member->id}} </td>
                        <td><div style="width: 90px; word-wrap: break-word"> {{$member->firstname}} </div></td>
                        <td><div style="width: 90px; word-wrap: break-word"> {{$member->lastname}} </div></td>
                        <td><div style="width: 100px; word-wrap: break-word"> {{$member->email}} </div></td>
                        <td> {{$member->phno}} </td>
                        <td> {{$member->gender}} </td>
                        <td><div style="width: 85px;"> {{$member->dob}} </div></td>
                        <td><div style="width: 90px; word-wrap: break-word"> {{$member->address}} {{$member->city}} {{$member->state}} {{$member->zip}} </div></td>
                        <td><div style="width: 90px; word-wrap: break-word"> {{$member->qualification}} </div></td>
                        <td><div style="width: 90px; word-wrap: break-word"> {{$member->profession}} </div></td>
                        <td>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal{{$member->id}}">
                                View
                            </button>
                            <!-- The Modal -->
                            <div class="modal fade" id="myModal{{$member->id}}">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">

                                        <!-- Modal Header -->
                                        <div class="modal-header">
                                            <h5 class="modal-title">User Details</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                        </div>

                                        <!-- Modal body -->
                                        <div class="modal-body">
                                            <form method="GET">
                                                @csrf
                                                <div class="row">
                                                    <div class="col">
                                                        <x-label for="firstname" :value="__('Firstname')" />
                                                        <x-input type="text" class="form-control" name="firstname" id="firstname" :value="$member->firstname" disabled/>
                                                    </div>
                                                    <div class="col">
                                                        <x-label for="lastname" :value="__('Lastname')" />
                                                        <x-input type="text" class="form-control" name="lastname" id="lastname" :value="$member->lastname" disabled/>
                                                    </div>
                                                </div>

                                                <div class="mt-4">
                                                    <div class="row">
                                                        <div class="form-group col">
                                                            <x-label for="email" :value="__('Email')" />
                                                            <x-input id="email" class="form-control" type="email" name="email" :value="$member->email" disabled />
                                                        </div>
                                                        <div class="form-group col">
                                                            <x-label for="mobile" :value="__('Mobile')" />
                                                            <x-input id="mobile" class="form-control" type="tel" name="mobile" :value="$member->phno" disabled />
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="mt-4">
                                                    <div class="row">
                                                        <div class="form-group col">
                                                            <x-label for="gender" :value="__('Gender')" />
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" id="male" name="gender" disabled value="Male" @if($member->gender == 'Male') checked @endif>Male
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" id="female" name="gender" disabled value="Female" @if($member->gender == 'Female') checked @endif>Female
                                                            </div>
                                                        </div>
                                                        <div class="form-group col">
                                                            <x-label for="dob" :value="__('DOB')" />
                                                            <x-input id="dob" class="form-control" type="date" name="dob" :value="$member->dob" disabled />
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="mt-4">
                                                    <x-label for="address" :value="__('Address')" />
                                                    <x-input id="address" class="form-control" type="text" name="address" :value="$member->address" disabled />
                                                </div>

                                                <div class="mt-4">
                                                    <div class="row">
                                                        <div class="form-group col-md-5">
                                                            <x-label for="city" :value="__('City')" />
                                                            <x-input type="text" class="form-control" name="city" id="city" :value="$member->city" disabled />
                                                        </div>
                                                        <div class="form-group col-md-4">
                                                            <x-label for="state" :value="__('State')" />
                                                            <x-input type="text" class="form-control" name="state" id="state" :value="$member->state" disabled />
                                                        </div>
                                                        <div class="form-group col-md-3">
                                                            <x-label for="zip" :value="__('Zip')" />
                                                            <x-input type="text" class="form-control" name="zip" id="zip" :value="$member->zip" disabled />
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="mt-4">
                                                    <div class="row">
                                                        <div class="form-group col">
                                                            <x-label for="qual" :value="__('Highest qualification')" />
                                                            <select class="form-control form-select-inline block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" 
                                                                id="qualification" name="qualification" disabled>
                                                                <option value="{{NULL}}" @if('{{NULL}}' == $member->qualification) selected @endif>Select</option>
                                                                    <option value="SSC/Matriculation" @if('SSC/Matriculation' == $member->qualification) selected @endif>SSC/Matriculation</option>
                                                                    <option value="Intermediate" @if('Intermediate' == $member->qualification) selected @endif>Intermediate</option>
                                                                    <option value="Graduation" @if('Graduation' == $member->qualification) selected @endif>Graduation</option>
                                                                    <option value="Post graduation" @if('Post graduation' == $member->qualification) selected @endif>Post graduation</option>
                                                            </select>    
                                                        </div>
                                                        <div class="form-group col">
                                                            <x-label for="professiom" :value="__('Profession')" />
                                                            <x-input id="profession" class="form-control" type="text" name="profession" :value="$member->profession" disabled/>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>

                                        <!-- Modal footer -->
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <a class="btn btn-primary" href="{{url('/edit', $member->id)}}">Edit</a>
                            <a class="btn btn-primary" name="action" id="action" onclick="return confirm('Are you sure?')" href="{{url('/delete', $member->id)}}">Delete</a>
                        </td>
                    </tr>
                    @else
                    <tr>
                        <td class="text-muted"> {{$member->id}} </td>
                        <td class="text-muted"><div style="width: 90px; word-wrap: break-word"> {{$member->firstname}} </div></td>
                        <td class="text-muted"><div style="width: 90px; word-wrap: break-word"> {{$member->lastname}} </div></td>
                        <td class="text-muted"><div style="width: 100px; word-wrap: break-word"> {{$member->email}} </div></td>
                        <td class="text-muted"> {{$member->phno}} </td>
                        <td class="text-muted"> {{$member->gender}} </td>
                        <td class="text-muted"><div style="width: 85px;"> {{$member->dob}} </div></td>
                        <td class="text-muted"><div style="width: 90px; word-wrap: break-word"> {{$member->address}} {{$member->city}} {{$member->state}} {{$member->zip}} </div></td>
                        <td class="text-muted"><div style="width: 90px; word-wrap: break-word"> {{$member->qualification}} </div></td>
                        <td class="text-muted"><div style="width: 90px; word-wrap: break-word"> {{$member->profession}} </div></td>
                        <td>
                            <button type="button" class="btn btn-secondary disabled" data-bs-toggle="modal" data-bs-target="#myModal{{$member->id}}">
                                View
                            </button>
                            <a class="btn btn-secondary disabled" href="{{url('/edit', $member->id)}}">Edit</a>
                            <a class="btn btn-primary" name="action" id="action" onclick="return confirm('Are you sure?')" href="{{url('/delete', $member->id)}}">Undo</a>
                        </td>
                    </tr>
                    @endif
                    @endforeach
                @else 
                    <tr>
                        <td colspan="11" style="text-align: center">No Records</td>
                    </tr>
                @endif
                </tbody>
            </table>
            <div class="d-flex justify-content-center">
                {{$members -> links("pagination::bootstrap-4")}} 
            </div>
            <style>
                .w-5 {
                    width: 25px;
                }
            </style>
        </div>
    </div>
</body>
</html>