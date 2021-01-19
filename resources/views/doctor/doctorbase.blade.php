<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>All India Institute of Medical Sciences, Delhi @yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-success">
        <a href="" class=""><img src="logo.png" alt="" width="75px" height="50px"></a>
        <div class="container">
            <a href="" class="navbar-brand text-danger">All India Institute of Medical Sciences, Delhi</a>

            <ul class="navbar-nav ms-auto">

                <li class="nav-item"><a href="{{ route('home') }}" class="btn btn-light btn-sm me-2">Home</a></li>

                <form action="{{route('logout')}}" method="POST">
                @csrf
                <input type="submit" class="btn btn-dark btn-sm text-white" value="logout">
                </form>

            </ul>
        </div>
    </nav>

    @yield('content')

</body>

</html>
