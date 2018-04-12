@extends('layouts.master')

@section ('header')

    <header>
        <h1>Boite Idee</h1>
    </header>

@endsection

@section ('content')
    <h1> {{ $idee->titre }}</h1>

    <div class="jumbotron text-center">
        <p>
            <strong>Idee Titre:</strong> {{ $idee->titre }}<br>
            <strong>Description:</strong> {{ $idee->description }}
        </p>
    </div>


@endsection