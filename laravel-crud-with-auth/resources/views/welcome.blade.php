<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
<meta http-equiv="x-ua-compatible" content="ie=edge" />
<title>Welcome Page</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" />
<link rel="stylesheet" href="{{ asset('css/mdb.min.css') }}" />
</head>

<body>
    <div class="container">
        <div class="d-flex justify-content-center align-items-center" style="height: 100vh">
            <div class="text-center">
                {{-- <img class="mb-4" src="https://mdbootstrap.com/img/logo/mdb-transparent-250px.png"
                    style="width: 250px; height: 90px" /> --}}
                <h5 class="mb-3">Welcome to my Website</h5>
                <p class="mb-3">Anggi</p>
                <a class="btn btn-primary btn-lg" href="{{ route('dashboard') }}" role="button">Get Started</a>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="{{ asset('js/mdb.min.js') }}"></script>
    <script type="text/javascript"></script>
</body>

</html>
