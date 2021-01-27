<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Panel @yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a href="" class=""><img src="{{ asset('logo.png') }}" alt="" width="75px" height="50px"></a>
        <div class="container">
            <a href="" class="navbar-brand text-danger">All India Institute of Medical Sciences, Delhi</a>
            <h4 class="text-white">Hospital Management Admin</h4>

            <ul class="navbar-nav ms-auto">
                @guest
                    <li class="nav-item"><a href="{{ route('login') }}" class="btn btn-light  text-dark btn-sm">Login</a></li>
                @endguest
                @auth
                    <li class="nav-item">
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <input type="submit" class="btn btn-light text-dark btn-sm me-2" value="Logout">
                        </form>('
                    </li>
                    <li class="nav-item"><a href="{{ route('home') }}" class="btn btn-light btn-sm text-dark">Home</a></li>
                @endauth


            </ul>
        </div>
    </nav>

    @yield('content')
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>

</html>
