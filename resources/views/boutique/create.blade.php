@extends('layouts.master')

@section ('header')

    <header>
        <div class="header_img">
            <img src="/img/HeaderFond.png" alt="Image fond" >
            <h1>Boutique</h1>
        </div>
    </header>

@endsection

@section ('content')

    <div id="ajout_idee">
        <h3>Ajout d'un produit</h3>
        <form method="POST" action="/produit/ajout" >
            {{csrf_field()}}
            <div class="form-group">
                <label for="titre">Nom du produit</label>
                <input type="text" class="form-control" id="produitTitre" name="titre" required>
            </div>
            <div class="form-group">
                <label for="description">Description du produit</label>
                <textarea class="form-control" id="produitDescription" name="description" required></textarea>
            </div>
            <div class="form-group">
                <label for="description">Prix du produit</label>
                <input type="text" class="form-control" id="produitPrix" name="prix" required>
            </div>
            <div class="form-group">
                <label for="categorie">Catégorie du produit</label>
                <select name="categorie">
                    @foreach($categories as $categorie)
                        <option value="{{$categorie->nom}}">{{$categorie->nom}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Valider</button>
            </div>

            @include('layouts.errors')

        </form>
    </div>

@endsection