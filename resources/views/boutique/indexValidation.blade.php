@extends('layouts.master')

@section ('header')
    <header>
        <div class="header_img">
            <img src="/img/headerFond.png" alt="Image fond" >
            <h1>Commandes</h1>
        </div>
    </header>

@endsection

@section ('content')

    <div id="boutonBoutique">
        <a href="/boutique" class="fa fa-arrow-left"></a>
    </div>

    @foreach($commandes as $commande)

        <li>Commande N :{{$commande->id}} Son état : {{$commande->etat_commande}}</li>
        <form action="/boutique/panier/valider" method="POST">
            {{csrf_field()}}
            <input type="hidden" name="id_commande" value="{{ $commande->id }}">
            <button type="submit" class="btn btn-danger" value="Valider Commande">Valider Commande</button>
        </form>

    @endforeach


@endsection