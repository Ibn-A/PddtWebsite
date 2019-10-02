@extends('layouts.app')

@section('content')

<!-- Styles -->
<link href="{{ asset('css/style.css') }}" rel="stylesheet">

<div class="bd-example">
  <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
      <img src="https://ps.w.org/wp-carousel-free/assets/banner-1544x500.png?rev=2000936" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>First slide label</h5>
          <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="https://ps.w.org/wp-carousel-free/assets/banner-1544x500.png?rev=2000936" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Second slide label</h5>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="https://ps.w.org/wp-carousel-free/assets/banner-1544x500.png?rev=2000936" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Third slide label</h5>
          <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

    <section class="container">

        <div class="bloc-1">
            <div class="article-1">
                <h2 class="titre">Vidéo de présentation</h2>
                <p>
                    Eodem tempore etiam Hymetii praeclarae indolis viri negotium est actitatum, cuius hunc novimus esse textum. 
                    cum Africam pro consule regeret Carthaginiensibus victus inopia iam lassatis, ex horreis Romano.
                </p>
            </div>

            <div>
                <iframe class="video" src="https://www.youtube.com/embed/F9Bo89m2f6g" allowfullscreen></iframe>
            </div>
        </div>
        
        <div class="bloc-2">
            <h2 class="titre">Nos projets</h2>

            <div class="projet">
                
                <div class="box">
                    <div class="imgBx">
                        <img src="{{ asset('img/img1.jpg') }}">
                    </div>
                    <div class="content">
                        <div>
                            <h2>Image Title</h2>
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
                        <img src="{{ asset('img/img2.jpg') }}">
                    </div>
                    <div class="content">
                        <div>
                            <h2>Image Title</h2>
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
                        <img src="{{ asset('img/img3.jpg') }}">
                    </div>
                    <div class="content">
                        <div>
                            <h2>Image Title</h2>
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
                        <img src="{{ asset('img/img4.jpg') }}">
                    </div>
                    <div class="content">
                        <div>
                            <h2>Image Title</h2>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur pariatur 
                                nesciunt adipisci quam molestiae quasi quibusdam accusamus ullam quod ex modi 
                                repudiandae, provident impedit ab amet culpa rerum aspernatur aut?
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-center mt-3">
                <a class="lien_projet" href="#">voir plus...</a>
            </div>

        </div>

    </section>

@endsection
