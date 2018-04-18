@extends('layouts.master')



@section ('header')

    <header>
        <h1>Bienvenue sur le site du BDE</h1>
    </header>

@endsection

@section ('content')
    <div class="boite_idee">
        <h3>Boite à idée:</h3>

        @foreach($idees as $idee)
            <article class="idee-post">
                <h2 class="idee-post-title"><a href="/boiteidee/<?php echo $idee->id?>" >{{$idee->titre}}</a></h2>
                <p>{{$idee->description}}</p>
            </article>
        @endforeach

    </div>

    <div id="evenement">

        <div class="future">
            <h3>Futurs évènements:</h3>

            @foreach($evenements as $evenement)
                @if($evenement->date_evenement >= $date)
                    <article class="event-post">
                        <h2 class="event-post-title"><a href="/evenement/<?php echo $evenement->id?>" >{{$evenement->titre}}</a></h2>
                        <p>{{$evenement->description}}</p>
                    </article>
                @endif
            @endforeach

        </div>

        <div class="passer">
            <h3>Évènements passés:</h3>

            @foreach($evenements as $evenement)
                @if($evenement->date_evenement < $date)
                    <article class="event-post">
                        <h2 class="event-post-title"><a href="/evenement/<?php echo $evenement->id?>" >{{$evenement->titre}}</a></h2>
                        <p>{{$evenement->description}}</p>
                    </article>
                @endif
            @endforeach
        </div>
    </div>

@endsection