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

        <img src="http://www.cointe.be/bailogo.png" id="imgBoiteidee">

        @foreach($idees as $idee)
            <div class="blog-post">

                    <h2 class="blog-post-title"><a href="/boiteidee/<?php echo $idee->id?>" >{{$idee->titre}}</a></h2>

                <p>{{$idee->description}}</p>
            </div>
        @endforeach


        <div id="encre_idee">
            <a href="boiteidee/create"> Ajouter une idée</a>
        </div>
        <div id="idee">
            <? //include("displayIdee");?>
        </div>



    </div>



@endsection