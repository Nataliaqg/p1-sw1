{{-- Esta plantilla es la base que ven todos los usuarios una vez logeados --}}
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Title -->
    <title>@yield('title', 'PhotoFiesta')</title>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <!-- Styles -->
    <link href={{ asset('assets/css/styles.css') }} rel="stylesheet" />
    @yield('css')
    <!-- Assets -->
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.png" />
     <!-- Scripts -->
    <script data-search-pseudo-elements defer src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/js/all.min.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.29.0/feather.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src={{ asset('js/scripts.js') }}></script>
    <script src={{ asset('js/app.js') }} defer></script>
    @yield('js')
</head>

<body class="nav-fixed">
    {{-- Navbar --}}
    @include('layouts.dashboard.navbar')
    <div>
        @yield('content')
    </div>
</body>

</html>
