<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Custom Authentication</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
</head>

<body>
    <nav class="navbar navbar-expand bg-dark bg-gradient">
        <div class="container-fluid">
            <a class="navbar-brand text-white" href="#">Laravel CA</a>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item" style="margin-left: 250px;">
                        <a class="nav-link text-white" aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item ms-4">
                        <a class="nav-link text-white" href="#">About</a>
                    </li>
                    <li class="nav-item ms-4">
                        <a class="nav-link text-white" href="#">Contact</a>
                    </li>
                    <li class="nav-item ms-4">
                        <a class="nav-link text-white" href="{{ route('loginBlade') }}">Login</a>
                    </li>
                    <li class="nav-item ms-4">
                        <a class="nav-link text-white" href="{{ route('registerBlade') }}">Register</a>
                    </li>
                </ul>
                <div class="d-flex align-items-end">
                    <a href="" class="nav-link text-white"><i class="bi bi-person-circle"></i> profile</a>
                </div>
            </div>
        </div>
    </nav>

    <br><br><br><br>
    <div class="container">
        <div class="row">
            <div class="col-3">
            </div>

            <div class="col-6">
                <div class="card-header h3 text-white text-center bg-dark bg-gradient">
                    Welcome to Dashboard , {{ $data->name }}
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Action</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{ $data->name }}</td>
                                <td>{{ $data->email }}</td>
                                <td>
                                    <button class="btn btn-primary"><a href="logout" class="text-white text-decoration-none">Logout</a></button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
</body>

</html>
