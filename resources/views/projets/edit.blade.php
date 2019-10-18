@extends('layouts.app')

@section('content')
<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" />

    <div class="container  mt-5 mb-5">
        <div class="card">
            <header class="card-header">
                <p class="card-header-title">Modification d'un projet</p>
            </header>
            <div class="card-content">
                <div class="content">
                    <form action="{{ route('projets.update', $projet->id) }}" method="POST">
                        @csrf
                        @method('put')
                        <div class="form-group">
                            <label class="label">Author</label>
                            <div class="control">
                            <input class="form-control @error('author') is-danger @enderror" type="text" name="author" value="{{ old('author', $projet->author) }}" placeholder="Autheur du projet">
                            </div>
                            @error('author')
                                <p class="help is-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label class="label">Titre</label>
                            <div class="control">
                            <input class="form-control @error('title') is-danger @enderror" type="text" name="title" value="{{ old('title', $projet->title) }}" placeholder="Titre du projet">
                            </div>
                            @error('title')
                                <p class="help is-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label class="label">Sous-titre</label>
                            <div class="control">
                            <input class="form-control @error('sub_title') is-danger @enderror" type="text" name="sub_title" value="{{ old('sub_title', $projet->sub_title) }}" placeholder="Sous-titre du projet">
                            </div>
                            @error('sub_title')
                                <p class="help is-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label class="label">Article 1</label>
                            <div class="control">
                                <textarea class="form-control" name="article" placeholder="Article n-1 du projet">{{ old('article', $projet->article) }}</textarea>
                            </div>
                            @error('article')
                                <p class="help is-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label class="label">Article 2</label>
                            <div class="control">
                                <textarea class="form-control" name="sub_article" placeholder="Article n-1 du projet">{{ old('sub_article', $projet->sub_article) }}</textarea>
                            </div>
                            @error('sub_article')
                                <p class="help is-danger">{{ $message }}</p>
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
@endsection