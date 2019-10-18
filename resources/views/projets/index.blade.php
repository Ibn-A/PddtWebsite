@extends('layouts.app')

@section('content')

<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" />

    <section class="section mt-5 mb-5">
        <div class="container">
            @if(session()->has('info'))
                <div class="alert alert-success">
                    {{ session('info') }}
                </div>
            @endif
            <div class="card">
                <header class="card-header">
                    <p class="card-header-title">projets</p>
  
                    <select class="mr-3" onchange="window.location.href = this.value">
                        <option value="{{ route('projets.index') }}" @unless($slug) selected @endunless>Toutes catégories</option>
                        @foreach($categories as $category)
                            <option value="{{ route('projets.category', $category->slug) }}" {{ $slug == $category->slug ? 'selected' : '' }}>{{ $category->name }}</option>
                        @endforeach
                    </select>
                    
                    <a class="btn btn-primary" href="{{ route('projets.create') }}">Créer un projet</a>
                </header>
                <div class="card-content">
                    <div class="content">
                        <table class="table is-hoverable">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Titre</th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($projets as $projet)
                                    <tr>
                                        <td>{{ $projet->id }}</td>
                                        <td><strong>{{ $projet->title }}</strong></td>
                                        <td><a class="btn btn-info" href="{{ route('projets.show', $projet->id) }}">Voir</a></td>
                                        <td><a class="btn btn-warning" href="{{ route('projets.edit', $projet->id) }}">Modifier</a></td>
                                        <td>
                                            <form action="{{ route('projets.destroy', $projet->id) }}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-danger" type="submit">Supprimer</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            
        </div>
    </section>

@endsection