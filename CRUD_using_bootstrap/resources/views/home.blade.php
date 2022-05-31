<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body class="bg-dark">
    <div class="d-flex justify-content-center m-5 p-5">
        <div class="card m-5" style="width:400px">
            <div class="card-header bg-info p-4"><h2>Welcome to Dashboard</h2></div>
            <div class="card-body">
                <div class="row pt-2 m-2">
                    <div class="ps-4 col">
                        <a class="btn btn-primary" href="/listUsers">List Users</a>
                    </div>
                    <div class="ps-5 col">
                        <a class="btn btn-primary" href="/create">Create User</a>
                    </div>
                </div>
            </div> 
        </div>
    </div>
</body>
</html>