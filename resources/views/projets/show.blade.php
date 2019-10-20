@extends('layouts.app')

@section('content')

    <div class="container mt-5 mb-5">
        <div class="row justify-content-center">
            <div class="col-md-10">

                <div class="card">
                    <header class="card-header">
                        <p class="card-title">Ecrit par : {{ $projet->author }}</p>
                        <p>Catégorie : {{ $category }}</p>
                    </header>
                    <div class="card-body">
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

    <div class="container mt-5 mb-5">
        <div class="row justify-content-center">
            <div class="col-md-10">

                <div class="card">
                    <header class="card-header">
                        <p class="card-title">Commentaires</p>
                    </header>
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif
                        <form id="comment-form" method="POST" action="{{ route('comments.store') }}" >
                            {{ csrf_field() }}
                            <input type="hidden" name="user_id" value="{{ Auth::user()->id }}" >
                            <div>
                                <div class="form-group">
                                    <textarea rows="4" class="form-control" name="comment" placeholder="Ici votre commentaire !"></textarea>
                                </div>
                            </div>
                            <div>
                                <div class="form-group">
                                    <input type="submit" class="btn btn-primary btn-lg" style="width: 100%" name="submit">
                                </div>
                            </div>
                        </form>
                    </div>

                    <footer class="card-footer">
                            <div class="panel-body comment-container" >
                            
                            @foreach($comments as $comment)
                                <div class="well">
                                    <i><b> {{ $comment->name }} </b></i>&nbsp;&nbsp;
                                    <span> {{ $comment->comment }} </span>
                                    <div style="margin-left:10px;">
                                        <a style="cursor: pointer;" cid="{{ $comment->id }}" name_a="{{ Auth::user()->name }}" token="{{ csrf_token() }}" class="reply">Reply</a>&nbsp;
                                        <a style="cursor: pointer;"  class="delete-comment" token="{{ csrf_token() }}" comment-did="{{ $comment->id }}" >Delete</a>
                                        <div class="reply-form">
                                            
                                            <!-- Dynamic Reply form -->
                                            
                                        </div>
                                        @foreach($comment->replies as $rep)
                                            @if($comment->id === $rep->comment_id)
                                                <div class="well">
                                                    <i><b> {{ $rep->name }} </b></i>&nbsp;&nbsp;
                                                    <span> {{ $rep->reply }} </span>
                                                    <div style="margin-left:10px;">
                                                        <a rname="{{ Auth::user()->name }}" rid="{{ $comment->id }}" style="cursor: pointer;" class="reply-to-reply" token="{{ csrf_token() }}">Reply</a>&nbsp;<a did="{{ $rep->id }}" class="delete-reply" token="{{ csrf_token() }}" >Delete</a>
                                                    </div>
                                                    <div class="reply-to-reply-form">
                                            
                                                        <!-- Dynamic Reply form -->
                                                        
                                                    </div>
                                                    
                                                </div>
                                            @endif 
                                        @endforeach
                                        
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </footer>

                </div>
            </div>
        </div>
    </div>

@endsection

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript" src="{{ asset('/js/main.js') }}"></script>