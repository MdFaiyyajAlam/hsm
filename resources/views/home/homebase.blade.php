<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>All India Institute of Medical Sciences, Delhi @yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .has-search .form-control {
            padding-left: 2.375rem;
        }

        .has-search .form-control-feedback {
            position: absolute;
            z-index: 2;
            display: block;
            width: 2.375rem;
            height: 2.375rem;
            line-height: 2.375rem;
            text-align: center;
            pointer-events: none;
            color: #aaa;
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark py-0">
        <ul class="navbar-nav">
            <li class="nav-item"><a href="" class="nav-link active small">Phone : (+91) 9572620274</a></li>
            <li class="nav-item"><a href="" class="nav-link active small">Email : mdfaiyyajalam54918@gmail.com</a></li>
        </ul>
    </nav>
    <nav class="navbar navbar-expand-lg navbar-dark bg-success">
        <a href="" class="navbar-brand me-2"><img src="logo.png" alt="" width="75px" height="50px"></a>
        <div class="container">
            <a href="" class="navbar-brand text-danger">All India Institute of Medical Sciences, Delhi</a>

            <form action="" method="GET" class="d-flex">
                <!--<input type="text" name="search" class="form-control" placeholder="Search Doctor & Deases" size="50">
                <input type="submit" name="send" class="btn btn-danger" value="Search">-->
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search Doctor and Diseases" size="40">
                    <div class="input-group-append">
                        <button class="btn btn-secondary" type="button">
                            <i class="fa fa-search"></i>
                        </button>
                    </div>
                </div>
            </form>

            <ul class="navbar-nav ms-auto">
                @auth

                    <li class="nav-item"><a href="{{ route('home') }}"
                            class="btn btn-light btn-sm  me-2">Home</a></li>
                    <li class="nav-item"><a href="{{ route('drprofile') }}"
                            class="btn btn-light btn-sm  me-2">My Profile</a></li>

                    <div class="btn-group">
                        <button type="button" class="btn btn-light btn-sm me-2 dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                            More
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a href="{{ route('applyDoctor') }}" class="dropdown-item ">Apply
                                    Doctor</a></li>
                            <li><button class="dropdown-item" type="button">Details</button></li>

                        </ul>
                    </div>


                    <form action="{{ route('logout') }}" method="post">
                        @csrf
                        <input type="submit" class="btn btn-dark text-white btn-sm  me-2" value="Logout">
                    </form>


                @endauth
                @guest
                    <li class="nav-item"><a href="{{ route('login') }}"
                            class="btn btn-light btn-sm me-2">Login</a></li>

                    <li class="nav-item"><a href="{{ route('register') }}"
                            class="btn btn-light btn-sm "> Register</a></li>
                @endguest

            </ul>
        </div>
    </nav>

    @yield('content')
      <!-- JavaScript Bundle with Popper -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous">
  </script>

</body>

</html>
