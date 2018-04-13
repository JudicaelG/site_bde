@extends('layouts.master')



@section ('header')

    <header>
        <h1>Bienvenue sur le site du BDE</h1>
    </header>

@endsection

@section ('content')

    <div id="evenement">

        <div class="future">
            <h3>Futurs événements:</h3>

            @foreach($evenements as $evenement)
                @if($evenement->date_evenement >= $date)
                    <div class="blog-post">
                        <h2 class="blog-post-title"><a href="/evenement/<?php echo $evenement->id?>" >{{$evenement->titre}}</a></h2>
                        <p>{{$evenement->description}}</p>
                    </div>
                @endif
            @endforeach

        </div>

        <div class="passer">
            <h3>Evénements passés:</h3>

            @foreach($evenements as $evenement)
                @if($evenement->date_evenement < $date)
                    <div class="blog-post">
                        <h2 class="blog-post-title"><a href="/evenement/<?php echo $evenement->id?>" >{{$evenement->titre}}</a></h2>
                        <p>{{$evenement->description}}</p>
                    </div>
                @endif
            @endforeach
        </div>

        <div class="boite_idee">
            <h3>Boite à idée:</h3>

            @foreach($idees as $idee)
                <div class="blog-post">
                    <h2 class="blog-post-title"><a href="/boiteidee/<?php echo $idee->id?>" >{{$idee->titre}}</a></h2>
                    <p>{{$idee->description}}</p>
                </div>
            @endforeach

        </div>
    </div>

@endsection