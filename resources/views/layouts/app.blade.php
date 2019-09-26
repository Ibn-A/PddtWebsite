<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Le Pddt') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm" style="padding:0rem 1rem">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="https://www.facebook.com/PDDT-Partenariats-pour-le-D%C3%A9veloppement-Durable-au-Tchad-1729896993954990/?view_public_for=1729896993954990" alt="facebook link" target="_blank">
                        <img src="/img/facebook_circle.svg" width="20" height="16">
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://www.youtube.com/channel/UC1dLyQ7z3Mx59M5ZK0WseMA" alt="youtube link" target="_blank">
                            <img src="/img/youtube.svg" width="20" height="16">
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="" alt="twitter link" target="_blank">
                            <img src="/img/twitter.svg" width="20" height="16">
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="" alt="instagram link" target="_blank">
                            <img src="/img/instagram.svg" width="20" height="16">
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href=""> </a>
                    </li>
                    <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('ESPACE PARTENAIRES') }}</a>
                    </li>
                </ul> 
            </div>
        </nav>
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <div><img src="/img/pddtLogo.png" style="height:42px ;" alt="Logo du Pddt"></div>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="">{{ __('Qui sommes-nous ?') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="">{{ __('Nos projets') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="">{{ __('Nos partenaires') }}</a>
                        </li>

                    </ul> 

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto" >
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
            </div>
        </nav>

        <main>
            @yield('content')
        </main>
    </div>
</body>
</html>
