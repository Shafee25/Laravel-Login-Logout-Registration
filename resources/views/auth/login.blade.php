<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <title>Custom Authentication</title>
</head>

<body style="background-image: url({{ asset('images/Image.png') }}); background-size: cover;">
    <nav class="navbar navbar-expand bg-dark">
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
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-light" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
    <br><br><br><br>
    <div class="container">
        <div class="row">
            <div class="col-3">

            </div>
            <div class="col-6">
                <div class="card">
                    <div class="card-header h4 text-white text-center bg-dark">
                        Login Form
                    </div>
                    <div class="card-body">
                        <form action="{{ route('login-user') }}" method="post">
                            @if (Session::has('success'))
                                <div class="alert alert-success"> {{ Session::get('success') }} </div>
                            @endif
                            @if (Session::has('fail'))
                                <div class="alert alert-danger"> {{ Session::get('fail') }} </div>
                            @endif
                            @csrf
                            <div class="form-group">
                                <label for="email">Email : </label>
                                <input type="text" name="email" class="form-control" placeholder="Enter Email"
                                    value="{{ old('email') }}">
                                <span class="text-danger">
                                    @error('email')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <div class="form-group">
                                <label for="Password">Password : </label>
                                <input type="password" name="password" class="form-control"
                                    placeholder="Enter Password">
                                <span class="text-danger">
                                    @error('password')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-block bg-dark-subtle mt-2">Login</button>
                            </div>
                        </form>

                        <hr>

                        Don't Have an Account <a href="registration"> Click Here</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
</script>

</html>
