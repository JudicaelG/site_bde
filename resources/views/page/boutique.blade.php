@extends('layouts.master')

@section ('header')

    <header>
        <h1>Boutique BDE</h1>
    </header>

@endsection

@section ('content')

    <div id="meilleuresVentes">
        <p>Meilleures Ventes</p>
        <div class="imgMeilleuresVentes">
            <div class="produits"><img src="http://vision.gel.ulaval.ca/~jflalonde/cours/4105/h15/tps/results/tp2/SEBEL83/images/lena.jpg"></div>
            <div class="produits"><img src="http://vision.gel.ulaval.ca/~jflalonde/cours/4105/h15/tps/results/tp2/SEBEL83/images/lamb.jpg"></div>
            <div class="produits"><img src="http://vision.gel.ulaval.ca/~jflalonde/cours/4105/h15/tps/results/tp2/SEBEL83/images/koopa.jpg"></div>
        </div>
    </div>

    <div id="meilleursArticlesBDE">
        <p>Meilleurs Produits BDE</p>
        <div class="imgMeilleuresVentes">
            <div class="produits"><img src="/img/mugBDE.png"></div>
            <div class="produits"><img src="/img/poloBDE.png"></div>
            <div class="produits"><img src="/img/casquetteBDE.png"></div>
        </div>
    </div>

@endsection