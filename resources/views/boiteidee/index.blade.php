@extends('layouts.master')

@section ('header')

    <header>
        <h1>Boite A Idee BDE</h1>
    </header>

@endsection

@section ('content')

    <div id="corps">


        @foreach($idees as $idee)
            <article class="idee-post">

                    <h2 class="idee-post-title"><a href="/boiteidee/<?php echo $idee->id?>" >{{$idee->titre}}</a></h2>

                <p>{{$idee->description}}</p>
            </article>
        @endforeach
	
        <div id="boite_idee">
            <a href="boiteidee/create"> Ajouter une idée</a>
        </div>


    </div>



@endsection