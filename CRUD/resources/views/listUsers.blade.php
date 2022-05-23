<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List of Users</title>
    <style>
        body {
            text-align: center;
        }
        button {
            padding: 2px 5px;
        }
        h1 {
            text-align: center;
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
        }
        table {
            margin: auto;
            border-collapse: collapse;
        }
        table, td, tr, th {
            border: solid;
        }
        th{
            padding: 15px;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        tr, td {
            padding: 8px;
        }
        a:active, a:link, a:visited, a:hover {
            text-decoration: none;
        }
        #button1 {
            position: absolute;
            left: 40px;
            padding-left: 14px;
            padding-right: 14px;
        }
        #button2 {
            position: absolute;
            left: 150px;
        }
        a {color: black;}
        #edit {
            padding-left: 14px;
            padding-right: 14px;
            background-color: #2196f3;
        }
        #delete {background-color: #d84545;}
        #status {
            color: #673ab7;
            font-size: 20px;
        }
    </style>
</head>
<body>
    <h1>Registered Members</h1>
    <button id="button1"><a href="home">Dashboard</a></button>
    <button id="button2"><a href="create">Create a member</a></button>
    <br><br>
    @if (session()->has('status'))
        <div id="status">
            {{session('status')}}
        </div>
    @endif
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Mobile No.</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        @if (!$members->isEmpty())
            @foreach ($members as $member)
            <tr>
                <td> {{$member->id}} </td>
                <td> {{$member->name}} </td>
                <td> {{$member->email}} </td>
                <td> {{$member->phno}} </td>
                <td>
                    <button id="edit"><a href="{{url('/edit', $member->id)}}">Edit</a></button>
                    <button id="delete" onclick="return confirm('Are you sure?')"><a href="{{url('/delete', $member->id)}}">Delete</a></button>
                </td>
            </tr>
            @endforeach
        @else <div>No Records</div>
        @endif
        </tbody>
    </table>
</body>
</html>