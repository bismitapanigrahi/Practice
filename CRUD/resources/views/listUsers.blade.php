<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registered</title>
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
    </style>
</head>
<body>
    <h1>Registered Members</h1>
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
            
            @foreach ($members as $member)
            <tr>
                <td> {{$member->id}} </td>
                <td> {{$member->name}} </td>
                <td> {{$member->email}} </td>
                <td> {{$member->phno}} </td>
                <td>
                    <button><a href="{{url('/edit', $member->id)}}">Edit</a></button>
                    <button><a href="{{url('/delete', $member->id)}}">Delete</a></button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>