<x-header />
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List of Users</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="container mt-3 pt-2 text-center">
        <h3>Registered users</h3>
        <br>
        @if (session()->has('status'))
            <div style="text-align: center; color: #009688">
                <h5>"{{session('status')}}"</h5>
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
                    <td> {{$member->firstname}} </td>
                    <td> {{$member->lastname}} </td>
                    <td> {{$member->email}} </td>
                    <td> {{$member->phno}} </td>
                    <td> {{$member->gender}} </td>
                    <td> {{$member->dob}} </td>
                    <td> {{$member->address}} {{$member->city}} {{$member->state}} {{$member->zip}} </td>
                    <td> {{$member->qualification}} </td>
                    <td> {{$member->profession}} </td>
                    <td style="width:160px">
                        <a class="btn btn-primary" href="{{url('/edit', $member->id)}}">Edit</a>
                        <a class="btn btn-primary" name="action" id="action" onclick="return confirm('Are you sure?')" href="{{url('/delete', $member->id)}}">Delete</a>
                    </td>
                </tr>
                @else
                <tr>
                    <td class="text-muted"> {{$member->id}} </td>
                    <td class="text-muted"> {{$member->firstname}} </td>
                    <td class="text-muted"> {{$member->lastname}} </td>
                    <td class="text-muted"> {{$member->email}} </td>
                    <td class="text-muted"> {{$member->phno}} </td>
                    <td class="text-muted"> {{$member->gender}} </td>
                    <td class="text-muted"> {{$member->dob}} </td>
                    <td class="text-muted"> {{$member->address}} {{$member->city}} {{$member->state}} {{$member->zip}} </td>
                    <td class="text-muted"> {{$member->qualification}} </td>
                    <td class="text-muted"> {{$member->profession}} </td>
                    <td style="width:160px">
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
        <span> {{$members -> links("pagination::bootstrap-4")}} </span>
        <style>
            .w-5 {
                width: 25px;
            }
        </style>
    </div>
</body>
</html>