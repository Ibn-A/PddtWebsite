@extends('layouts.app')

@section('content')

    <!-- Style CSS partenaire -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/partenaire.css') }}" />

    <!-- Partenaire Section -->
    <section class="partenaire bg-light">
    <div class="container">
        <h2 class="font-weight-light text-center text-lg-left">Nos partenaires</h2>
        <hr class="mt-2 mb-5">

        <!-- Partenaire list -->
        <div class="text-center">
            <div class="row">
                <div class="col-md-4 col-lg-3">
                    <img class="img-fluid"  src="http://pddt-tchad.org/wp-content/uploads/2016/04/logo_aerm.jpg">
                    <h6>L'agence de l'eau</h6>
                </div>
                <div class="col-md-4 col-lg-3">
                    <img class="img-fluid"  src="http://pddt-tchad.org/wp-content/uploads/2016/02/Logo_la_guilde.gif">
                    <h6>La guilde</h6>
                </div>
                <div class="col-md-4 col-lg-3">
                    <img class="img-fluid"  src="http://pddt-tchad.org/wp-content/uploads/2016/02/Logo_entraide_solidarity.jpg">
                    <h6>L'eurométropole de Strasbourg</h6>
                </div>
                <div class="col-md-4 col-lg-3">
                    <img class="img-fluid"  src="http://pddt-tchad.org/wp-content/uploads/2016/02/Logo_ps_eau-300x300.png">
                    <h6>Entraide solidarité</h6>
                </div>
                <div class="col-md-4 col-lg-3">
                    <img class="img-fluid"  src="http://pddt-tchad.org/wp-content/uploads/2016/02/Logo_strasbourg-300x80.png">
                    <h6>ps-Eau</h6>
                </div>
                <div class="col-md-4 col-lg-3">
                    <img class="img-fluid"  src="http://pddt-tchad.org/wp-content/uploads/2016/04/HUMANIS.png">
                    <h6>Humanis </h6>
                </div>
                <div class="col-md-4 col-lg-3"> 
                    <img class="img-fluid"  src="http://pddt-tchad.org/wp-content/uploads/2016/02/Logo_BSF-300x82.jpg">
                    <h6>Bibliothèque sans frontières</h6>
                </div>
                <div class="col-md-4 col-lg-3">
                    <img class="img-fluid"  src="http://pddt-tchad.org/wp-content/uploads/2016/04/ecole_menage.png">
                    <h6>Ong "Ecole saine, Ménage sains"</h6>
                </div>
            </div>
        </div>
    </div> 
@endsection