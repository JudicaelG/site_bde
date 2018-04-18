@extends('layouts.master')



@section ('header')

    <header>
        <div class="header_img">
            <img src="../img/1440.png" alt="Smiley face" >
            <h1>Bienvenue sur le site du BDE</h1>
        </div>

    </header>

@endsection

@section ('content')

    <div class="texte_acceuil">
        <h2>Bienvenue sur le site du BDE de l'eXia.Cesi Strasbourg</h2>
        <p>Vous pourrez consulter nos divers évènements. N'hésitez pas à lacher un pouce bleu et interagir à nos évènements.
            Nous sommes à votre écoute, n'hésitez pas à nous soumettre des idées d'évènements ou bien des idées qu'on pourra mettre en place!
            Pensez à acheter des articles du BDE afin de soutenir et porter fièrement les couleurs de notre école!</p>
        <hr>
    </div>
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