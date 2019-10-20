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

                    <header class="card-header">
                        <h5 class="card-title">Création d'un projet</h5>
                    </header>

                    <div class="card-body">
                        <form action="{{ route('projets.store') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label class="label">Choisir une catégorie</label>
                                <div class="d-flex">
                                    <select class="form-control col-md-2" name="category_id">
                                        <option value="0">All category</option>
                                        @foreach($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                    <a class="btn btn-info ml-4" href="{{ route('category.create') }}">+ ADD catégorie</a>
                                </div>
                                <!-- @error('category')
                                    <p class="alert text-danger">{{ $message }}</p>
                                @enderror -->
                            </div>
                            <div class="form-group mt-5">
                                <label class="label">Author</label>
                                <div class="control">
                                    <input class="form-control @error('author') border-danger @enderror" type="text" name="author" value="{{ old('author') }}" placeholder="Autheur du projet">
                                </div>
                                @error('author')
                                    <p class="alert text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="label">Titre</label>
                                <div class="control">
                                    <input class="form-control @error('title') border-danger @enderror" type="text" name="title" value="{{ old('title') }}" placeholder="Titre du projet">
                                </div>
                                @error('title')
                                    <p class="alert text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="label">Sous-titre</label>
                                <div class="control">
                                    <input class="form-control @error('sub_title') border-danger @enderror" type="text" name="sub_title" value="{{ old('sub_title') }}" placeholder="Sous-titre du projet">
                                </div>
                                @error('sub_title')
                                    <p class="alert text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="label">Article 1</label>
                                <div class="control">
                                    <textarea rows="10" class="form-control" name="article" placeholder="Article n-1 du projet">{{ old('article') }}</textarea>
                                </div>
                                @error('article')
                                    <p class="alert text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="label">Article 2</label>
                                <div class="control">
                                    <textarea rows="10" class="form-control" name="sub_article" placeholder="Article n-1 du projet">{{ old('sub_article') }}</textarea>
                                </div>
                                @error('sub_article')
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