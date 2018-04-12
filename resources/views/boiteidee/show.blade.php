@extends('layouts.master')

@section ('header')

    <header>
        <h1>Boite Idee</h1>
    </header>

@endsection

@section ('content')
    <h1> {{ $idee->titre }}</h1>

    <a href="/boiteidee/<?php echo $idee->id_boite_idee;?>/edit"> <button type="button" class="btn btn-primary" >Edit</button></a>

    <div class="jumbotron text-center">
        <p>
            <strong>Titre de l'idée:</strong> {{ $idee->titre }}<br>
            <strong>Description:</strong> {{ $idee->description }}
        </p>
    </div>


@endsection