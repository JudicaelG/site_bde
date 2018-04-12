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
        <h3>Boite à idée</h3>
        <form action="/" method="post">
            {{csrf_field()}}
            <div class="form-group">
                <label for="titre">Titre de l'idee</label>
                <input type="text" class="form-control" id="ideeTitre" name="ideeTitre">
            </div>
            <div class="form-group">
                <label for="description">Description de l'idee</label>
                <input type="text" class="form-control" id="ideeDescription" name="ideeDescription">
            </div>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <button type="submit" class="btn btn-primary">Valider</button>

        </form>
    </div>

@endsection