@extends('layouts.master')

@section ('header')

    <header>
        <h1>Bienvenue sur le site du BDE</h1>
    </header>

@endsection

@section ('content')

    <div id="evenement">

        <div class="future">
            <h3>Futures événements:</h3>
            <?php //include("displayEventFuture"); ?>
        </div>
        <div class="passer">
            <h3>Evénements passé:</h3>
            <?php //include("displayEventPasser"); ?>
        </div>
        <div class="boite_idee">
            <h3>Boite à idée:</h3>
            <?php //include("displayIdee"); ?>
        </div>
    </div>

@endsection