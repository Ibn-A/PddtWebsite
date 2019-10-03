<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Le PDDT') }}</title>
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <script src="https://kit.fontawesome.com/2828f7885a.js" integrity="sha384-WAsFbnLEQcpCk8lM1UTWesAf5rGTCvb2Y+8LvyjAAcxK1c3s5c0L+SYOgxvc6PWG" crossorigin="anonymous"></script>

    <!-- Style CSS navbar -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/navbar.css') }}" />
    
    
</head>
<body>

    <!-- Begin Scroll Up Button -->
    <form action="#home">
      <button id="toTop" title="Go to top">
        <i class="fas fa-angle-up"></i>
      </button>
    </form>
    <!-- End Scroll Up Button -->

    <div class="nav-top">
        <ul class="list-menu">
            <li>
                <a class="nav-link" href="https://www.facebook.com/PDDT-Partenariats-pour-le-D%C3%A9veloppement-Durable-au-Tchad-1729896993954990/?view_public_for=1729896993954990" alt="facebook link" target="_blank">
                <img src="/img/facebook_circle.svg" width="20" height="16">
                </a>
            </li>
            <li>
                <a class="nav-link" href="https://www.youtube.com/channel/UC1dLyQ7z3Mx59M5ZK0WseMA" alt="youtube link" target="_blank">
                    <img src="/img/youtube.svg" width="20" height="16">
                </a>
            </li>
            <li>
                <a class="nav-link" href="" alt="twitter link" target="_blank">
                    <img src="/img/twitter.svg" width="20" height="16">
                </a>
            </li>
            <li>
                <a class="nav-link" href="" alt="instagram link" target="_blank">
                    <img src="/img/instagram.svg" width="20" height="16">
                </a>
            </li>
        </ul>
        <a class="nav-link" href="{{ route('login') }}">{{ __('ESPACE PARTENAIRES') }}</a>
        
    </div>
    <hr>
    <nav class="navbar navbar-expand-md navbar-light" id="nav">
            
        <a class="navbar-brand" href="#">
            <img src="/img/pddtLogo.png" style="height: 4.5rem;" class="d-inline-block align-top" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav navbar-center mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Accueil <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="">{{ __('Qui sommes-nous ?') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/projets') }}">{{ __('Nos projets') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="">{{ __('Nos partenaires') }}</a>
                </li>
            </ul>
            <ul class="navbar-nav navbar-right">
                <!-- Authentication Links -->
                @guest
                    <li class="nav-item">
                        <a class="nav-link btn btn-outline-success mr-2" href="{{ route('register') }}">{{ __('DEVENIR PARTENAIRE') }}</a>
                    </li>

                @if (Route::has('register'))
                    <li class="nav-item">
                        <a style="font color:white;" class="nav-link btn btn-success mr-2" href="">{{ __('FAIRE UN DON') }}</a>
                    </li>
                @endif

                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                {{ __('se deconnecter') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </nav>

    <main>
        @yield('content')
    </main>

    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link href="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css" rel="stylesheet">
    <script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js"></script>
    <script>
      AOS.init({
        easing: "ease-out",
        duration: 800,
      });
    </script>

    <script src="{{ asset('js/scroll.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>

</body>
</html>
