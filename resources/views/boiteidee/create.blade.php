@extends('layouts.master')

@section ('header')

    <header>
        <div class="header_img">
            <img src="/img/HeaderFond.png" alt="Image fond" >
            <h1>Boite à idée</h1>
        </div>
    </header>

@endsection

@section ('content')

    <div id="ajout_idee">
        <h3>Ajout d'une idée à la boite</h3>
        <form method="POST" action="/boiteidee" >
            {{csrf_field()}}
            <div class="form-group">
                <label for="titre">Titre de l'idée</label>
                <input type="text" class="form-control" id="ideeTitre" name="titre">
            </div>
            <div class="form-group">
                <label for="description">Description de l'idée</label>
                <textarea class="form-control" id="ideeDescription" name="description"></textarea>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Valider</button>
            </div>

            @include('layouts.errors')

        </form>
    </div>

@endsection