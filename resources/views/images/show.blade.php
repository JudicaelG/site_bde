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

@endsection