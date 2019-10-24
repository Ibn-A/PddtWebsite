<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Grid Gallery</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css" />

        <link rel="stylesheet" type="text/css" href="{{ asset('css/gallery.css') }}" />    </head>
    <body>
        <section class="gallery-block grid-gallery">
            <div class="container">
                <div class="heading">
                    <h2>Grid Gallery</h2>
                </div>
                <div class="row">
                    <div class="col-md-6 col-lg-4 item">
                        <a class="lightbox" href="{{ asset('img/projet/img1.jpg') }}">
                            <img class="img-fluid image scale-on-hover" src="{{ asset('img/projet/img1.jpg') }}">
                        </a>
                    </div>
                    <div class="col-md-6 col-lg-4 item">
                        <a class="lightbox" href="{{ asset('img/projet/img2.jpg') }}">
                            <img class="img-fluid image scale-on-hover" src="{{ asset('img/projet/img2.jpg') }}">
                        </a>
                    </div>
                    <div class="col-md-6 col-lg-4 item">
                        <a class="lightbox" href="{{ asset('img/projet/img3.jpg') }}">
                            <img class="img-fluid image scale-on-hover" src="{{ asset('img/projet/img3.jpg') }}">
                        </a>
                    </div>
                    <div class="col-md-6 col-lg-4 item">
                        <a class="lightbox" href="{{ asset('img/projet/img4.jpg') }}">
                            <img class="img-fluid image scale-on-hover" src="{{ asset('img/projet/img4.jpg') }}">
                        </a>
                    </div>
                    <div class="col-md-6 col-lg-4 item">
                        <a class="lightbox" href="{{ asset('img/projet/img5.jpg') }}">
                            <img class="img-fluid image scale-on-hover" src="{{ asset('img/projet/img5.jpg') }}">
                        </a>
                    </div>
                    <div class="col-md-6 col-lg-4 item">
                        <a class="lightbox" href="{{ asset('img/projet/img6.jpg') }}">
                            <img class="img-fluid image scale-on-hover" src="{{ asset('img/projet/img6.jpg') }}">
                        </a>
                    </div>
                    <div class="col-md-6 col-lg-4 item">
                        <a class="lightbox" href="{{ asset('img/projet/img7.jpg') }}">
                            <img class="img-fluid image scale-on-hover" src="{{ asset('img/projet/img7.jpg') }}">
                        </a>
                    </div>
                    <div class="col-md-6 col-lg-4 item">
                        <a class="lightbox" href="{{ asset('img/projet/img8.jpg') }}">
                            <img class="img-fluid image scale-on-hover" src="{{ asset('img/projet/img8.jpg') }}">
                        </a>
                    </div>
                    <div class="col-md-6 col-lg-4 item">
                        <a class="lightbox" href="{{ asset('img/projet/img9.jpg') }}">
                            <img class="img-fluid image scale-on-hover" src="{{ asset('img/projet/img9.jpg') }}">
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
        <script>
            baguetteBox.run('.grid-gallery', { animation: 'slideIn'});
        </script>
    </body>
</html>