@extends('layouts.master')

@section ('header')

    <header>
        <div class="header_img">
            <img src="/img/headerFond.png" alt="Image fond" >
            <h1>Mon Panier</h1>
        </div>
    </header>

@endsection

@section ('content')

    <div id="boutonBoutique">
        <a href="/boutique" class="fa fa-arrow-left"></a>
    </div>


    <h2>Votre commande porte le numéro : {{$commande->id}}</h2>

    <p>Votre commande est composée de :</p>
    @foreach($nomProduits as $nomProduit)
        <li>{{$nomProduit->titre}} au nombre de {{$nomProduit->quantite}}</li>
    @endforeach


    <form action="/boutique/panier/passer" method="POST">
        {{csrf_field()}}
        <input type="hidden" name="id_commande" value="{{ $commande->id }}">
        <button type="submit" class="btn btn-danger" value="Passer Commande">Passer Commande</button>
    </form>

@endsection