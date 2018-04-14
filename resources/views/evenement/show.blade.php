@extends('layouts.master')

@section ('header')

    <header>
        <h1>{{ $evenements->titre }}</h1>
    </header>

@endsection

@section ('content')


    <h1> {{ $evenements->titre }}</h1>

    <div id="boutons">

        <form action="{{url('evenement', [$evenements->id])}}/edit" method="GET">
            <input type="submit" class="btn btn-danger" value="Edit"/>
        </form>

        <form action="{{url('evenement', [$evenements->id])}}" method="POST">
            <input type="hidden" name="_method" value="DELETE">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="submit" class="btn btn-danger" value="Delete"/>
        </form>
    </div>


    <div class="jumbotron text-center">
        <p>
            <strong>Titre de l'événement:</strong> {{ $evenements->titre }}<br>
            <strong>Description:</strong> {{ $evenements->description }}<br>
            <strong>Date:</strong> {{ $evenements->date_evenement }}<br>
            <strong>Prix:</strong> {{ $evenements->prix }}<br>
            <strong>Récurrence:</strong> {{ $evenements->recurrence }}<br>
        </p>
    </div>


    <div class="jumbotron text-center">
        @foreach($commentaires as $commentaire)
            <strong>Commentaire:</strong> {{ $commentaire->contenu }}<br>
        @endforeach

    </div>




@endsection