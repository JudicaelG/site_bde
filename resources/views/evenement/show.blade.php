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
            <strong>Description:</strong> {{ $evenements->description }}
        </p>
    </div>


@endsection