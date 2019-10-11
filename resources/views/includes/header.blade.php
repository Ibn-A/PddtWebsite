<button onclick="topFunction()" id="toTop" title="Go to top"><i class="fas fa-angle-up"></i></button>
    
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
    <hr class="first-hr">
    <nav class="navbar navbar-expand-md navbar-light" id="nav">
            
        <a class="navbar-brand" href="{{ url('/') }}">
            <img src="/img/pddtLogo.png" style="height: 4.5rem;" class="d-inline-block align-top" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav navbar-center mr-auto mainnav">
                <li class="nav-item mr-3">
                    <a class="nav-link" href="{{ url('/') }}">{{ __('ACCUEIL') }}</a>
                </li>
                <li class="nav-item mr-3">
                    <a class="nav-link" href="">{{ __('QUI SOMMES-NOUS') }}</a>
                </li>
                <li class="nav-item mr-3">
                    <a class="nav-link" href="{{ url('/projets') }}">{{ __('NOS ACTIONS') }}</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="">{{ __('NOS PARTENAIRES') }}</a>
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
                        <a style="color:white;" class="nav-link btn btn-success mr-2" href="">{{ __('FAIRE UN DON') }}</a>
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