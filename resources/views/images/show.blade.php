@extends('layouts.master')

@section ('header')

    <header>
        <h1>Images</h1>
    </header>

@endsection

@section ('content')

    <h1>{{ $images->alt }}</h1>

    <img src="{{ $images->lien }}" alt="{{$images->alt}}">

    <div class="jumbotron text-center">
        <h3>Espace commentaire</h3>
        @foreach($commentaires as $commentaire)
            <strong>Commentaire:</strong> {{ $commentaire->contenu }}<br>
        @endforeach
    </div>

    <div class="card">
        <div class="card-block">
            <form method="POST" action="/images/{{$images->id}}">
                {{csrf_field()}}
                <div class="form-group">
                    <textarea name="contenu" placeholder="ajoutez un commentaire!" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Commenter</button>
                </div>
            </form>
        </div>
    </div>

@endsection