@extends('layouts.master')

@section ('header')

    <header>
        <h1>Evenement du BDE</h1>
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

    </div>
	
	@bde
    <div id="ajout_evenement">
        <a href="evenement/create"> Ajouter un evenement</a>
    </div>
	@endbde

@endsection