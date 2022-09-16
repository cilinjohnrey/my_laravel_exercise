<!DOCTYPE html>
<html>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
<meta http-equiv="x-ua-compatible" content="ie=edge" />
<title>{{ $app_title }}</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" />
<link rel="stylesheet" href="{{ asset('css/mdb.min.css') }}" />
<link rel="stylesheet" href="{{ asset('css/all.min.css') }}" />
<style>
    *,
    body {
        margin: 0;
        padding: 0;
    }


    @media (max-width: 425px) {
        #nav {
            padding: 0;
        }
    }
</style>
</head>

<body>
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg bg-light navbar-light" id="nav" style="padding: 1% 15%;">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{ route('welcome') }}">{{ $app_title_nav }}</a>
                <button class="navbar-toggler" type="button" data-mdb-toggle="collapse"
                    data-mdb-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        {{-- @guest --}}
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('signin') }}">Sign In</a>
                        </li>
                        <span class="mx-2"></span>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('signup') }}">Sign Up</a>
                        </li>
                        {{-- @else --}}
                        <span class="mx-4"></span>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('dashboard') }}">Dashboard</a>
                        </li>
                        {{-- <span class="mx-4"></span>
                        <li class="nav-item">
                            <div class="dropdown">
                                <button class="btn btn-primary btn-rounded" type="button" id="dropdownMenuButton"
                                    data-mdb-toggle="dropdown" aria-expanded="false">
                                    <i class="fas fa-plus"></i>
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <li><a class="dropdown-item" href="{{ route('post') }}">Create Post</a></li>
                                </ul>
                            </div>
                        </li> --}}
                        <span class="mx-4"></span>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-mdb-toggle="dropdown" aria-expanded="false">
                                <i class="fas fa-user"></i>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li>
                                    <a class="dropdown-item" href="#">Profile</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">Settings</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">Log Out</a>
                                </li>
                            </ul>
                        </li>
                        {{-- @endguest --}}
                    </ul>
                </div>
            </div>
        </nav>
        <br>
    </div>
    @yield('content')

    <script type="text/javascript" src="{{ asset('js/mdb.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/all.min.js') }}"></script>
</body>

</html>
