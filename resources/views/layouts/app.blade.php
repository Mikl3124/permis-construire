<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
      <!-- Favicon -->
      <link rel="shortcut icon" href="./favicon.ico">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="./assets/vendor/hs-toggle-password/dist/js/hs-toggle-password.js"></script>
      <!-- JS Global Compulsory  -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/aos/dist/aos.css') }}">
    <script src="./assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

    <!-- JS Implementing Plugins -->
    <script src="./assets/vendor/hs-header/dist/hs-header.min.js"></script>
    <script src="./assets/vendor/hs-mega-menu/dist/hs-mega-menu.min.js"></script>
    <script src="./assets/vendor/hs-show-animation/dist/hs-show-animation.min.js"></script>
    <script src="./assets/vendor/hs-go-to/dist/hs-go-to.min.js"></script>
    <script src="./assets/vendor/aos/dist/aos.js"></script>
    <script src="./assets/vendor/typed.js/lib/typed.min.js"></script>
    <script src="./assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="./assets/vendor/hs-toggle-password/dist/js/hs-toggle-password.js"></script>
  

    <!-- JS Front -->
    <script src="./assets/js/theme.min.js"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" rel="stylesheet">
      <!-- CSS Implementing Plugins -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap-icons/font/bootstrap-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/hs-mega-menu/dist/hs-mega-menu.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/aos/dist/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/quill/dist/quill.snow.css') }}">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/theme.min.css') }}" rel="stylesheet">
</head>
<body>

  @yield('content')
</body>

</html>
