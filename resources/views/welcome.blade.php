@extends('layouts.app')

@section('content')

    <!-- Styles -->
    <link href="{{ asset('css/welcome.css') }}" rel="stylesheet">

    <header>
        <div id="carouselIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselIndicators" data-slide-to="1"></li>
                <li data-target="#carouselIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <!-- Slide One - Set the background image for this slide in the line below -->
                <div class="carousel-item active" style="background-image: url('img/projet/eau.jpg')">
                    <div class="carousel-caption d-none d-md-block">
                        <h2 class="display-4"> L'Eau </h2>
                        <p class="lead">Un accès a l'eau potable pour tous</p>
                    </div>
                </div>
                <!-- Slide Two - Set the background image for this slide in the line below -->
                <div class="carousel-item" style="background-image: url('img/projet/education.jpg')">
                    <div class="carousel-caption d-none d-md-block">
                        <h2 class="display-4">L'Education</h2>
                        <p class="lead">Une meilleur éducation pour un meilleur future</p>
                    </div>
                </div>
                <!-- Slide Three - Set the background image for this slide in the line below -->
                <div class="carousel-item" style="background-image: url('img/projet/sante.jpg')">
                    <div class="carousel-caption d-none d-md-block">
                        <h2 class="display-4">La santé </h2>
                        <p class="lead">Un meilleur accès a la santé</p>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </header>

    <section>
    
        <div class="bloc-1">
            <div class ="container">
                <div class="article-1">
                    <h2 class="font-weight-light text-center text-lg-left mt-4 mb-0">Nos valeurs</h2>
                    <hr class="mt-2 mb-4">
                    <p>
                    Eodem tempore etiam Hymetii praeclarae indolis viri negotium est actitatum, cuius hunc novimus esse textum. 
                    cum Africam pro consule regeret Carthaginiensibus victus inopia iam lassatis, ex horreis Romano.
                    </p>
                </div>
                <div class="text-center">
                    <iframe class="video" src="https://www.youtube.com/embed/VFzt6l9V_2o" allowfullscreen></iframe>
                </div>
            </div>
        </div>
        
        <div class="bloc-2">
            <div class ="container">
                <h1 class="font-weight-light text-center">Nos Projets</h1>
                <div class="projet text-center justify-content-center">
                    <div class="box">
                        <div class="imgBx">
                            <img src="{{ asset('img/projet/laitrine.jpg') }}">
                        </div>
                        <div class="content">
                            <div>
                                <h2>Construction de laitrine</h2>
                                <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur pariatur 
                                nesciunt adipisci quam molestiae quasi quibusdam accusamus ullam quod ex modi 
                                repudiandae, provident impedit ab amet culpa rerum aspernatur aut?
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="box">
                        <div class="imgBx">
                            <img src="{{ asset('img/projet/lits.jpg') }}">
                        </div>
                        <div class="content">
                            <div>
                                <h2>Remise de 20 lits</h2>
                                <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur pariatur 
                                nesciunt adipisci quam molestiae quasi quibusdam accusamus ullam quod ex modi 
                                repudiandae, provident impedit ab amet culpa rerum aspernatur aut?
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="box">
                        <div class="imgBx">
                            <img src="{{ asset('img/projet/sensibilisation.jpg') }}">
                        </div>
                        <div class="content">
                            <div>
                                <h2>Sensibilisation</h2>
                                <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur pariatur 
                                nesciunt adipisci quam molestiae quasi quibusdam accusamus ullam quod ex modi 
                                repudiandae, provident impedit ab amet culpa rerum aspernatur aut?
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="box">
                        <div class="imgBx">
                            <img src="{{ asset('img/projet/forage.jpg') }}">
                        </div>
                        <div class="content">
                            <div>
                                <h2>Forage de puits</h2>
                                <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur pariatur 
                                nesciunt adipisci quam molestiae quasi quibusdam accusamus ullam quod ex modi 
                                repudiandae, provident impedit ab amet culpa rerum aspernatur aut?
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center mt-4">
                    <a class="lien_projet" href="#">PLUS DE PROJETS</a>
                </div>
            </div>
        </div>

        <div class="bloc-3">
            <div class="container">
                <h1 class="font-weight-light text-center text-lg-left mt-4 mb-0">Nos partenaires</h1>
                <hr class="mt-2 mb-5">

                <div class="partenaire justify-content-between">
                    <div>
                        <img src="http://pddt-tchad.org/wp-content/uploads/2016/04/logo_aerm.jpg" class="md:hover:bigger">
                    </div>
                    <div>
                        <img src="http://pddt-tchad.org/wp-content/uploads/2016/02/Logo_la_guilde.gif">
                    </div>
                    <div>
                        <img src="http://pddt-tchad.org/wp-content/uploads/2016/02/Logo_entraide_solidarity.jpg">
                    </div>
                    <div>
                        <img src="http://pddt-tchad.org/wp-content/uploads/2016/02/Logo_ps_eau-300x300.png">
                    </div>
                </div>
                <div class="partenaire justify-content-between pt-5">
                    <div>
                        <img src="http://pddt-tchad.org/wp-content/uploads/2016/02/Logo_strasbourg-300x80.png">
                    </div>
                    <div>
                        <img src="http://pddt-tchad.org/wp-content/uploads/2016/04/HUMANIS.png">
                    </div>
                    <div>
                        <img src="http://pddt-tchad.org/wp-content/uploads/2016/02/Logo_BSF-300x82.jpg">
                    </div>
                    <div>
                        <img src="http://pddt-tchad.org/wp-content/uploads/2016/04/ecole_menage.png">
                    </div>
                </div>
            </div>
            
        </div>

    </section>

@endsection
