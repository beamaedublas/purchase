<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MONGOSH FINAL</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <style>
    body {
        font-family: 'Times New Roman', Times, serif;
        background-color: rgb(218, 201, 201);
        margin: 0;
        padding: 0;
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    h1 {
        margin: 15px;
        font-weight: bolder;
    }
    nav{
        background-color: rgba(250, 235, 215, 0.164);
        padding: 50px;
        text-align: center;
        width: 99.9%;
    }
    .nav-link {
        color: white;
    }

    .nav-link.active {
        font-weight: bold;
        color: #f8f9fa;
    }
    .nav-pills .nav-link {
    color: #000000;
    }

    .container {
        background-color: rgba(202, 155, 111, 0.233);
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 0 24px rgb(202, 184, 19);
        margin-top: 15px;
    }
    /* .table-hover{

    } */
</style>
    
</head>
<body>
    {{-- <nav class="navbar navbar-light">
        <h1>Online Book Rental</h1>
        <ul class="nav justify-content-end nav-pills">
            <li class="nav-item">
                <a class="nav-link {{Route::is('/') ? 'active' : '' }}" href="{{ url('/') }}">HOME</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{Route::is('users') ? 'active' : '' }}" href="{{ url('/user') }}">USERS</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{Route::is('books') ? 'active' : '' }}" href="{{ url('/book') }}">BOOKS</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{Route::is('rentals') ? 'active' : '' }}" href="{{ url('/rental') }}">RENTALS</a>
            </li>
        </ul>
    </nav>

    <div class="container mt-5">
        @yield('content')
    </div> --}}
</body>
</html>
