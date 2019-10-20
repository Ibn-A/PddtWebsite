@extends('layouts.app')

@section('content')

    <div class="container mt-5 mb-5">
        <div class="row justify-content-center">
            @if(session()->has('info'))
                <div class="alert alert-success col-md-8 text-center">
                    {{ session('info') }}
                </div>
            @endif
            <div class="col-md-12">
                <div class="card">
                    <header class="card-header d-flex">
                        <h5 class="card-title">Projets</h5>
                        
                        <select class="ml-auto mr-3" onchange="window.location.href = this.value">
                            <option value="{{ route('projets.index') }}" @unless($slug) selected @endunless>Toutes catégories</option>
                            @foreach($categories as $category)
                                <option value="{{ route('projets.category', $category->slug) }}" {{ $slug == $category->slug ? 'selected' : '' }}>{{ $category->name }}</option>
                            @endforeach
                        </select>
                        
                        <a class="btn btn-primary" href="{{ route('projets.create') }}">Créer un projet</a>
                    </header>

                    <div class="text-center mt-3">
                        <h3>Liste des Projets</h3>
                    </div>

                    <div class="card-body">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Titre</th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($projets as $projet)
                                    <tr @if($projet->deleted_at) class="has-background-grey-lighter" @endif>
                                        <td><strong>{{ $projet->title }}</strong></td>
                                            <td>
                                                @if($projet->deleted_at)
                                                    <form action="{{ route('projets.restore', $projet->id) }}" method="post">
                                                        @csrf
                                                        @method('PUT')
                                                        <button class="btn btn-primary" type="submit">Restaurer</button>
                                                    </form>
                                                @else
                                                    <a class="btn btn-primary" href="{{ route('projets.show', $projet->id) }}">Voir</a>
                                                @endif
                                            </td>
                                            <td>
                                                @if($projet->deleted_at)
                                                @else
                                                    <a class="btn btn-warning" href="{{ route('projets.edit', $projet->id) }}">Modifier</a>
                                                @endif
                                            </td>
                                        <td>
                                            <form action="{{ route($projet->deleted_at? 'projets.force.destroy' : 'projets.destroy', $projet->id) }}" method="post">
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
                    <footer class="card-footer">
                        {{ $projets->links() }}
                    </footer>
                    </div>
            </div>
        </div>
    </div>

@endsection