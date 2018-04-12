@extends('layouts.master')

@section('head')

    <link href="../public/css/app.css" rel="stylesheet">
    <link href="../public/css/styleAccueil.css" rel="stylesheet">
    <link href="../public/css/boutique.css" rel="stylesheet">

@endsection

@section ('header')

    <header>
        <h1>Boite A Idee BDE</h1>
    </header>

@endsection

@section ('content')

    <div id="corps">

        @foreach($idees as $idee)
            <h4>{{$idee->titre}}</h4>
            <p>{{$idee->description}}</p>

        @endforeach


        <div id="encre_idee">
            <a href="boiteidee/create"> Ajouter une idée</a>
        </div>
        <div id="idee">
            <? //include("displayIdee");?>
        </div>



    </div>



@endsection