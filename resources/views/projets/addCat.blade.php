@extends('layouts.app')

@section('content')

    <div class="container mt-5 mb-5">
        <div class="row justify-content-center">
            <div class="col-md-12">
                
                <div class="card">

                    <header class="card-header">
                        <h5 class="card-title">Création d'un projet</h5>
                    </header>

                    <div class="card-body">
                        <form action="{{ route('category.store') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label class="label">Nom de la catégorie</label>
                                <div class="control">
                                    <input class="form-control @error('name') border-danger @enderror" type="text" name="name" value="{{ old('name') }}" placeholder="Nom catégorie" required>
                                </div>
                                @error('name')
                                    <p class="alert text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <div class="control">
                                <button class="btn btn-primary">Envoyer</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection