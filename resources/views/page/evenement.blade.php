@extends('layouts.master')

@section ('header')

    <header>
        <h1>Evenement du BDE</h1>
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
    </div>

@endsection