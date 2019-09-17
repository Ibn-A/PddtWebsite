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
      <img style="width:100%;" src="https://ps.w.org/wp-carousel-free/assets/banner-1544x500.png?rev=2000936" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>First slide label</h5>
          <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img style="width:100%;" src="https://ps.w.org/wp-carousel-free/assets/banner-1544x500.png?rev=2000936" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Second slide label</h5>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img style="width:100%;" src="https://ps.w.org/wp-carousel-free/assets/banner-1544x500.png?rev=2000936" alt="...">
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

<div class="bloc-1">
        <div class="container">
            <div class="article-1">
                    <p>
                        Eodem tempore etiam Hymetii praeclarae indolis viri negotium est actitatum, cuius hunc 
                        novimus esse textum. cum Africam pro consule regeret Carthaginiensibus victus inopia iam 
                        lassatis, ex horreis Romano.
                        <hr>
                        Itaque tum Scaevola cum in eam ipsam mentionem incidisset, exposuit nobis sermonem Laeli de amicitia 
                        habitum ab illo secum et cum altero genero, C. Fannio Marci filio, paucis diebus post mortem Africani. 
                        Eius disputationis sententias memoriae mandavi, quas hoc libro exposui arbitratu meo; quasi enim ipsos 
                        induxi loquentes, ne 'inquam' et 'inquit' saepius interponeretur, atque ut tamquam a praesentibus coram.
                    </p>
            </div>
        </div>
    </div>

    <div class="bloc-2">
        <iframe class="video" src="https://www.youtube.com/embed/F9Bo89m2f6g" allowfullscreen></iframe>
    </div>

    <div class="bloc-3">

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

    <div class="bloc-4">

        <div class="row justify-content-center">
            <div class="col-12 col-md-8 col-lg-6 pb-5">

                <form action="mail.php" method="post">
                    <div class="card border-primary rounded-0">
                        <div class="card-header p-0">
                            <div class="bg-info text-white text-center py-2">
                                <h3><i class="fa fa-envelope"></i> Nous contacter</h3>
                                <p class="m-0">Pour toute demande</p>
                            </div>
                        </div>
                        <div class="card-body p-3">

                            <!--Body-->
                            <div class="form-group">
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fa fa-user text-info"></i></div>
                                    </div>
                                    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nom" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fa fa-envelope text-info"></i></div>
                                    </div>
                                    <input type="email" class="form-control" id="nombre" name="email" placeholder="example@mail.com" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fa fa-comment text-info"></i></div>
                                    </div>
                                    <textarea class="form-control" placeholder="Message" required></textarea>
                                </div>
                            </div>

                            <div class="text-center">
                                
                                <input type="submit" value="Envoyer" class="btn btn-info btn-block rounded-0 py-2">
                            </div>
                        </div>

                    </div>
                </form>
                
            </div>
        </div>

    </div>

@endsection
