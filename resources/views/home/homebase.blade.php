<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>All India Institute of Medical Sciences, Delhi @yield('title')</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@300&display=swap" rel="stylesheet">
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
            <li class="nav-item">
                <a href="" class="nav-link active small"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
                    <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                  </svg> Phone : (+91) 9572620274</a>
            </li>
            <li class="nav-item">

                <a href="" class="nav-link active small"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                    <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2zm13 2.383l-4.758 2.855L15 11.114v-5.73zm-.034 6.878L9.271 8.82 8 9.583 6.728 8.82l-5.694 3.44A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.739zM1 11.114l4.758-2.876L1 5.383v5.73z"/>
                  </svg> Email : mdfaiyyajalam54918@gmail.com</a>
            </li>
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
                    <input type="text" name="search" class="form-control" placeholder="Search Doctor and Diseases" size="40">
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
