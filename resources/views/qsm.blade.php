@extends('layouts.app')

@section('content')

    <!-- Style CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/qsm.css') }}" />

    <!-- QSM Section -->
    <section class="qsm bg-light">
        <div class="container">
            <h2 class="font-weight-light text-center text-lg-left">Présentation de l’association PDDT</h2>
            <hr class="mt-2 mb-5">

            <!-- Partenaire list -->
            <div class="qsm-content">
                <p>L’association « Partenariats pour le Développement Durable au Tchad » (P.D.D.T) a été créée en 
                    Septembre 2009 à Strasbourg. Son but est d’intervenir au Tchad pour aider matériellement la population 
                    à améliorer ses conditions de vie.
                </p>
                <div class="text-center">
                    <iframe class="video" src="https://www.youtube.com/embed/VFzt6l9V_2o" allowfullscreen></iframe>
                </div>
                <p>En effet, les besoins sociaux dans ce pays sont immenses, du fait de son passé marqué par plus de 30 
                    années des troubles politiques.  Aujourd’hui le Tchad fait partie de 50 pays les moins avancés et sollicite 
                    le soutien de divers partenaires internationaux dans ses efforts de lutte contre la pauvreté. Le PDDT a signé 
                    en ce sens un protocole d’accord de coopération avec le Tchad.
                    <br/><br/>
                    Les projets réalisés ou portés par le PDDT s’inscrivent tous dans les 4 domaines suivants : l’Accès à l’eau, 
                    l’Hygiène/Assainissement, la Santé et l’Éducation.
                </p>
            </div>
        </div>

        <div class="equipe text-center">
            <div class="container">
                <h2>Le bureau du PDDT</h2>
                <div class="row">
                    <div class="col-6">
                        <i class="fas fa-user-tie fa-5x"></i>
                        <h6>Président</h6>
                        <p>Philippe FREY</p>
                    </div>
                    <div class="col-6">
                        <i class="fal fa-user-tie fa-5x"></i>
                        <h6>Vice-président</h6>
                        <p>Mahamat Saleh Ali</p>
                    </div>
                    <div class="col-6">
                        <i class="fas fa-user-tie fa-5x"></i>
                        <h6>Trésorier, chargé de projet</h6>
                        <p>Nour  AHMAT  BRAHIM</p>
                    </div>
                    <div class="col-6">
                        <i class="fal fa-user-tie fa-5x"></i>
                        <h6>Trésorier adjoint</h6>
                        <p>Tanguy THOMAS DE LA PANTIERE</p>
                    </div>
                    <div class="col-12">
                        <i class="fas fa-user-tie fa-5x"></i>
                        <h6>Secrétaire</h6>
                        <p>Aline LUDWIG</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection