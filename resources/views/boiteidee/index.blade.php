@extends('layouts.master')

@section ('head')

    <title>Boite à idée</title>

@endsection

@section ('header')

    <header>
        <div class="header_img">
            <img src="/img/headerFond.png" alt="Image fond" >
            <h1>Boite à idée</h1>
        </div>
    </header>

@endsection

@section ('content')

    <div id="corps">

        <div class="texte_idee">
            <h2>Binevenue dans la partie boite à idée</h2>
            <p>Vous pourrez ici voir les idées que vous avez proposées. Cliquez sur les idées afin d'avoir toutes les informations relative sur celle-ci.
                Si cette idée vous plais, liker là afin que le DBE connaisse votre engouement</p>
        </div>

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