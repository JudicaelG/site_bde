@extends('layouts.master')

@section ('head')

    <title>Panier</title>

@endsection

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

    <h2>Va acheter nos Produits</h2>


@endsection