@extends('layouts.master')

@section ('header')

    <header>
        <h1>Evenement du BDE</h1>
    </header>

@endsection

@section ('content')

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
	
	@bde
    <div id="ajout_evenement">
        <a href="evenement/create"> Ajouter un évènement</a>
    </div>
	@endbde

@endsection