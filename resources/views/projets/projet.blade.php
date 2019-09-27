<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>PDDT</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.5/css/bulma.min.css"
      integrity="sha256-vK3UTo/8wHbaUn+dTQD0X6dzidqc5l7gczvH+Bnowwk="
      crossorigin="anonymous"
    />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/projet.css') }}" />
    <script
      src="https://kit.fontawesome.com/2828f7885a.js"
      integrity="sha384-WAsFbnLEQcpCk8lM1UTWesAf5rGTCvb2Y+8LvyjAAcxK1c3s5c0L+SYOgxvc6PWG"
      crossorigin="anonymous"
    ></script>
  </head>

  <body>

    <!-- Begin Scroll Up Button -->
    <form action="#home">
      <button id="toTop" title="Go to top">
        <i class="fas fa-angle-up"></i>
      </button>
    </form>
    <!-- End Scroll Up Button -->

    <!-- Begin Header -->
    <div class="header-wrapper" id="home">
      <!-- Begin Hero -->
      <section class="hero is-large">
        <!-- Begin Mobile Nav -->
        <nav class="navbar is-transparent is-hidden-desktop">
          <!-- Begin Burger Menu -->
          <div class="navbar-brand">
            <div class="navbar-burger burger" data-target="mobile-nav">
              <span></span>
              <span></span>
              <span></span>
            </div>
          </div>
          <!-- End Burger Menu -->
          <div id="mobile-nav" class="navbar-menu">
            <div class="navbar-end">
              <div class="navbar-item">
                <a class="navbar-item" href="#home">
                  Accueil
                </a>
              </div>
              <div class="navbar-item">
                <a class="navbar-item" href="#about-me">
                  A propos du projet
                </a>
              </div>
              <div class="navbar-item">
                <a class="navbar-item" href="#services">
                  Gallery
                </a>
              </div>
              <div class="navbar-item">
                <a class="navbar-item" href="#skills">
                  Lorem
                </a>
              </div>
              <div class="navbar-item">
                <a class="navbar-item" href="#my-work">
                  Lorem
                </a>
              </div>
              <div class="navbar-item">
                <a class="navbar-item" href="#contact">
                  Lorem
                </a>
              </div>
            </div>
          </div>
        </nav>
        <!-- End Mobile Nav -->
        <!-- Begin Hero Content-->
        <div class="hero-body">
          <div class="container has-text-centered">
            <h1 class="subtitle">Association Humanitaire</h1>
            <h2 class="title">PDDT-TCHAD</h2>
            <h1 class="subtitle profession">Partenariats pour le Développement Durable au Tchad</h1>
          </div>
        </div>
        <!-- End Hero Content-->
        <!-- Begin Hero Menu -->
        <div class="hero-foot ">
          <div class="hero-foot--wrapper">
            <div class="columns">
              <div class="column is-12 hero-menu-desktop has-text-centered">
                <ul>
                  <li class="is-active">
                    <a href="#home">Accueil</a>
                  </li>
                  <li>
                    <a href="#about-me">A propos du projet</a>
                  </li>
                  <li>
                    <a href="#services">Gallery</a>
                  </li>
                  <li>
                    <a href="#skills">Lorem</a>
                  </li>
                  <li>
                    <a href="#my-work">Lorem</a>
                  </li>
                  <li>
                    <a href="#contact">Lorem</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <!-- End Hero Menu -->
      </section>
      <!-- End Hero -->
    </div>
    <!-- End Header -->

    <!-- Begin Main Content -->
    <div class="main-content">
      <!-- Begin About Me Section -->
      <div class="section-light about-me" id="about-me">
        <div class="container">
          <div class="column is-12 about-me">
            <h1 class="title has-text-centered section-title">Construction de 2 blocs de latrines et d’un forage d’eau …</h1>
          </div>
          <div class="columns is-multiline">
            <div
              class="column is-6 has-vertically-aligned-content"
              data-aos="fade-right"
            >
              <p class="is-larger">
                &emsp;&emsp;<strong
                  >… à l’école primaire d’application de N’djamena</strong
                >
              </p>
              <br />
              <p>
                Au Tchad, le taux de couverture en services d’assainissement est extraordinairement bas. 
                Cette situation explique en partie les taux élevés de morbidité et de mortalité infantile au Tchad.
                <br><br>
                Pour faire face à ce problème de santé publique, le Tchad a adopté en 2013 une Stratégie Nationale d’Assainissement 
                et cherche à mobiliser ses différents partenaires au développement, y compris les ONG nationales et internationales, 
                afin d’obtenir des progrès en matière d’hygiène et d’Assainissement.
                L’ONG tchadienne « Ecole saine, Ménage sain », impliquée dans la mise en œuvre de l’Assainissement Total Piloté par la 
                Communauté (ATPC) et l’hygiène dans les écoles, a sollicité tous ses partenaires, dont l’Association PDDT, pour la construction 
                des latrines dans les écoles primaires et les marchés hebdomadaires.
              </p>

            </div>
            <div class="column is-6 right-image " data-aos="fade-left">
              <img
                class="is-rounded"
                src="http://pddt-tchad.org/wp-content/gallery/Latrines_Inauguration/IMG_0102.jpg"
                alt=""
              />
            </div>
          </div>
        </div>
      </div>
      <!-- End About Me Content -->

      <!-- Begin Work Content -->
      <div class="section-dark my-work" id="my-work">
        <div class="container">
          <div
            class="columns is-multiline"
            data-aos="fade-in"
            data-aos-easing="linear"
          >
            <div class="column is-12">
              <h1 class="title has-text-centered section-title">Gallery</h1>
            </div>
            <div class="column is-3">
              <a href="#">
                <figure
                  class="image is-2by1 work-item"
                  style="background-image: url('http://pddt-tchad.org/wp-content/gallery/Latrines_Travaux/20160223_102541.jpg');"
                ></figure>
              </a>
            </div>
            <div class="column is-3">
              <a href="#">
                <figure
                  class="image is-2by1 work-item"
                  style="background-image: url('http://pddt-tchad.org/wp-content/gallery/Latrines_Travaux/20160229_101726.jpg');"
                ></figure>
              </a>
            </div>
            <div class="column is-3">
              <a href="#">
                <figure
                  class="image is-2by1 work-item"
                  style="background-image: url('http://pddt-tchad.org/wp-content/gallery/Latrines_Travaux/20160229_101939.jpg');"
                ></figure>
              </a>
            </div>
            <div class="column is-3">
              <a href="#">
                <figure
                  class="image is-2by1 work-item"
                  style="background-image: url('http://pddt-tchad.org/wp-content/gallery/Latrines_Travaux/20160307_161021.jpg');"
                ></figure>
              </a>
            </div>
            <div class="column is-3">
              <a href="#">
                <figure
                  class="image is-2by1 work-item"
                  style="background-image: url('http://pddt-tchad.org/wp-content/gallery/Latrines_Travaux/DSC_0121.jpg');"
                ></figure>
              </a>
            </div>
            <div class="column is-3">
              <a href="#">
                <figure
                  class="image is-2by1 work-item"
                  style="background-image: url('http://pddt-tchad.org/wp-content/gallery/Latrines_Travaux/DSC_0148.jpg');"
                ></figure>
              </a>
            </div>
            <div class="column is-3">
              <a href="#">
                <figure
                  class="image is-2by1 work-item"
                  style="background-image: url('http://pddt-tchad.org/wp-content/gallery/Latrines_Travaux/DSC_0086.jpg');"
                ></figure>
              </a>
            </div>
            <div class="column is-3">
              <a href="#">
                <figure
                  class="image is-2by1 work-item"
                  style="background-image: url('http://pddt-tchad.org/wp-content/gallery/Latrines_Travaux/20160307_161135.jpg');"
                ></figure>
              </a>
            </div>
          </div>
        </div>
      </div>
      <!-- End Work Content -->
      
    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="{{ asset('js/projet.js') }}"></script>
    <link href="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css" rel="stylesheet">
    <script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js"></script>
    <script>
      AOS.init({
        easing: "ease-out",
        duration: 800,
      });
    </script>

  </body>
</html>