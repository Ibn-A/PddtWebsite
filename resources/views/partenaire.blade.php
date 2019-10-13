@extends('layouts.app')

@section('content')

    <!-- Style CSS partenaire -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/partenaire.css') }}" />

    <!-- Partenaire Section -->
    <section class="partenanire-section bg-light">
    <div class="container">
        <h2 class="font-weight-light text-center text-lg-left mt-4 mb-0">Lorem ipsum</h2>
        <hr class="mt-2 mb-5">

        <!-- Partenaire list -->
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
@endsection