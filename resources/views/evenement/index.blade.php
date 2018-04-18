@extends('layouts.master')

@section ('header')

    <header>
        <h1>Évènement du BDE</h1>
    </header>

@endsection

@section ('content')

    <div class="texte_evenement">
        <h2>Bienvenue dans la partie évènement</h2>
        <p>Vous pourrez ici voir nos futurs évènements ainsi que les anciens. Cliquez sur les évènements afin d'avoir toutes les informations relative sur celle-ci.
            Aussi pensez à commenter si vous le souhaiter, à liker et à participer à l'évènement si celui-ci vous interesse!</p>
        <hr>
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
	
	@bde
    <div id="ajout_evenement">
        <a href="evenement/create"> Ajouter un évènement</a>
    </div>
	@endbde

@endsection