@extends('layouts.master')

@section ('head')

    <title>Ajouter un évènement</title>

@endsection

@section ('header')

    <header>
        <div class="header_img">
            <img src="/img/headerFond.png" alt="Image fond" >
            <h1>Évènement</h1>
        </div>
    </header>

@endsection

@section ('content')

    <div id="ajout_idee">
        <h3>Ajout d'un évènement</h3>
        <form method="POST" action="/evenement" >
            {{csrf_field()}}
            <div class="form-group">
                <label for="titre">Titre de l'évènement</label>
                <input type="text" class="form-control" id="titre" name="titre">
            </div>
            <div class="form-group">
                <label for="description">Description de l'évènement</label>
                <textarea class="form-control" id="description" name="description"></textarea>
            </div>
            <div class="form-group">
                <label for="titre">Date de l'évènement</label>
                <input type="text" class="form-control" id="date_evenement" name="date_evenement">
            </div>
            <div class="form-group">
                <label for="titre">Prix de l'événement</label>
                <input type="text" class="form-control" id="prix" name="prix">
            </div>
            <div class="form-group">
                <label for="titre">Récurrence de l'événement</label>
                <input type="text" class="form-control" id="recurrence" name="recurrence">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Valider</button>
            </div>

            @include('layouts.errors')

        </form>
    </div>

@endsection