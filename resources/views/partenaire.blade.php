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
                    <img class="img-fluid"  src="http://placehold.it/250">
                    <h6>L'agence de l'eau</h6>
                </div>
                <div class="col-md-4 col-lg-3">
                    <img class="img-fluid"  src="http://placehold.it/250">
                    <h6>La guilde</h6>
                </div>
                <div class="col-md-4 col-lg-3">
                    <img class="img-fluid"  src="http://placehold.it/250">
                    <h6>L'eurométropole de Strasbourg</h6>
                </div>
                <div class="col-md-4 col-lg-3">
                    <img class="img-fluid"  src="http://placehold.it/250">
                    <h6>Entraide solidarité</h6>
                </div>
                <div class="col-md-4 col-lg-3">
                    <img class="img-fluid"  src="http://placehold.it/250">
                    <h6>ps-Eau</h6>
                </div>
                <div class="col-md-4 col-lg-3">
                    <img class="img-fluid"  src="http://placehold.it/250">
                    <h6>Humanis </h6>
                </div>
                <div class="col-md-4 col-lg-3"> 
                    <img class="img-fluid"  src="http://placehold.it/250">
                    <h6>Bibliothèque sans frontières</h6>
                </div>
                <div class="col-md-4 col-lg-3">
                    <img class="img-fluid"  src="http://placehold.it/250">
                    <h6>Ong "Ecole saine, Ménage sains"</h6>
                </div>
            </div>
        </div>
    </div> 
@endsection