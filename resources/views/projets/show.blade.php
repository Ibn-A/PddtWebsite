@extends('layouts.app')

@section('content')

<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" />

    <section class="section mt-5 mb-5">
        <div class="container">
            <div class="card">
                <header class="card-header">
                    <p class="card-header-title">Ecrit par : {{ $projet->author }}</p>
                </header>
                <div class="card-content">
                    <div class="content">
                        <p>Titre : {{ $projet->title }}</p>
                        <p>Sous-titre : {{ $projet->sub_title }}</p>
                        <hr>
                        <p>Premier article : <br/>{{ $projet->article }}</p>
                        <p>Deuxième article : <br/>{{ $projet->sub_article }}</p>
                        <hr>
                        <p>Ecrit le : {{ $projet->created_at }}</p>
                        <p>Modifié le : {{ $projet->updated_at }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection