<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Le PDDT') }}</title>
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" 
        crossorigin="anonymous"
    >

    <!-- Font Awesome CSS -->
    <script src="https://kit.fontawesome.com/2828f7885a.js" 
        integrity="sha384-WAsFbnLEQcpCk8lM1UTWesAf5rGTCvb2Y+8LvyjAAcxK1c3s5c0L+SYOgxvc6PWG" 
        crossorigin="anonymous"
    ></script>

    <!-- Style CSS navbar -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/navbar.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/footer.css') }}" />    
</head>
<body>

    <header>
        @include('includes.header')
    </header>

    <main>
        @yield('content')
    </main>

    <footer id="footer" class="footer-1">
        @include('includes.footer')
    </footer>
    
    <!-- Scripts -->
    <script src="{{ asset('js/scroll.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>

</body>
</html>
