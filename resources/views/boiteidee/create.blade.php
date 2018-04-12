@extends('layouts.master')

@section('head')

    <link href="../public/css/app.css" rel="stylesheet">
    <link href="../public/css/styleAccueil.css" rel="stylesheet">
    <link href="../public/css/boutique.css" rel="stylesheet">

@endsection

@section ('header')

    <header>
        <h1>Boite A Idee BDE</h1>
    </header>

@endsection

@section ('content')

    <div id="ajout_idee">
        <h3>Ajout d'une idée à la Boite</h3>
        <form method="POST" action="/boiteidee" >
            {{csrf_field()}}
            <div class="form-group">
                <label for="titre">Titre de l'idee</label>
                <input type="text" class="form-control" id="ideeTitre" name="titre">
            </div>
            <div class="form-group">
                <label for="description">Description de l'idee</label>
                <textarea class="form-control" id="ideeDescription" name="description"></textarea>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Valider</button>
            </div>

            @include('layouts.errors')

        </form>
    </div>

@endsection