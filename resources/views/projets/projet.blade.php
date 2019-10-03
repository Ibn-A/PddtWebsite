@extends('layouts.app')

@section('content')
      
      <!-- Style Navbar -->
      <style>
        hr {
          margin: 0 !important;
          border-top: 1px solid rgba(0,0,0,.1) !important;
        }
      </style>

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
        <!-- Begin Hero Content-->
        <div class="hero-body">
          <div class="container has-text-centered">
            <h1 class="subtitle">Association Humanitaire</h1>
            <h2 class="title">PDDT-TCHAD</h2>
            <h1 class="subtitle profession">Partenariats pour le Développement Durable au Tchad</h1>
          </div>
        </div>
        <!-- End Hero Content-->
        
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
                &emsp;&emsp;<strong>… à l’école primaire d’application de N’djamena</strong>
              </p>
              <br />
              <p>
                Au Tchad, le taux de couverture en services d’assainissement est extraordinairement bas. 
                Cette situation explique en partie les taux élevés de morbidité et de mortalité infantile au Tchad.
                <br /><br />
                Pour faire face à ce problème de santé publique, le Tchad a adopté en 2013 une Stratégie Nationale d’Assainissement 
                et cherche à mobiliser ses différents partenaires au développement, y compris les ONG nationales et internationales, 
                afin d’obtenir des progrès en matière d’hygiène et d’Assainissement.
                L’ONG tchadienne « Ecole saine, Ménage sain », impliquée dans la mise en œuvre de l’Assainissement Total Piloté par la 
                Communauté (ATPC) et l’hygiène dans les écoles, a sollicité tous ses partenaires, dont l’Association PDDT, pour la construction 
                des latrines dans les écoles primaires et les marchés hebdomadaires.
              </p>
            </div>
            <div class="column is-6 right-image" data-aos="fade-left">
              <img
                class="is-rounded"
                src="http://pddt-tchad.org/wp-content/gallery/Latrines_Inauguration/IMG_0102.jpg"
                alt=""
              />
            </div>
          </div>
          <div class="p-5"
            data-aos="fade-up"
            data-aos-duration="1000">
            <p>
              L’Association PDDT s’est ainsi inscrite dans cette initiative locale et 2 de ses bénévoles ont visité, avec l’ONG tchadienne « Ecole saine, Ménage sain », 4 écoles primaires en déficit d’équipements sanitaires pour y rencontrer les associations des parents d’élèves et les responsables administratifs.
              <br /><br />
              L’école primaire d’Application de N’djamena accueillant 613 élèves dont 231 filles a retenu l’attention de PDDT, pour 3 raisons :
              <br /><br />
              l’existence d’une organisation impliquant les élèves et leurs parents dans l’entretien des équipements collectifs ;<br />
              l’engagement écrit produit par l’école à assurer l’entretien de tout nouvel ouvrage offert ;<br />
              l’école dispose d’un bloc de latrines à 4 cabines traditionnelles, bien vétustes, et d’un seul robinet d’eau.<br /><br />
              Cette insuffisance de latrines pousse les élèves à déféquer à l’aire libre. Le problème d’hygiène est aggravé par le manque de point d’eau suffisant. Cette situation se traduit chez les élèves par des maladies diarrhéiques, de fièvre typhoïde etc.
              <br /><br />
              Par conséquent, grâce au soutien financier de l’Agence de l’Eau Rhin-Meuse, l’Association PDDT a construit 2 blocs de latrines à 3 cabines, installé 2 réservoirs d’eau (lave-mains) et réalisé un forage d’eau équipé d’une pompe à motricité humaine à l’école primaire d’Application.
              <br /><br />
              Le 11 mars 2016, une cérémonie de remise officielle de ces équipements sanitaires et hydraulique a été organisée dans l’enceinte de l’école. Plusieurs responsables de l’inspection académique de la Ville de N’djamena ont pris la parole pour saluer à l’unanimité la réalisation de ce projet et remercier chaleureusement l’Agence de l’Eau Rhin-Meuse et l’Association PDDT.
              Les responsables académiques espèrent que ces nouveaux ouvrages permettent de réduire le risque de propagation des maladies diarrhéiques, la fièvre typhoïde, le choléra au sein de l’école; de réduire le taux d’absentéisme lié à ces maladie et le taux de mortalité plus généralement.
              <br /><br />
              Les médias locaux ont largement couverts cet événement, plus particulièrement la télévision et la radio nationales (ONRTV).
            </p>
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
    

@endsection