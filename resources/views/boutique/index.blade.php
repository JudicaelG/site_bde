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
			@foreach($meilleursproduits as $meilleurvente)
					<div class="produits">
						<h4>{{ $meilleurvente->titre }}</h4>
					</div>
			@endforeach
			
        </div>
    </div>

    <div id="meilleursArticlesBDE">
        <p>Meilleurs Produits BDE</p>
        <div class="imgMeilleuresVentes">
			@foreach($produits as $produit)
            <div class="produits">
				<h2 class="blog-post"><a href="/boutique/<?php echo $produit->id_produit?>">{{ $produit->titre }}</a></h2>
				
				<h4>{{ $produit->description }}</h4>
				<img src="{{$produit->lien}}" alt="{{ $produit->alt}}">
				<h4>Prix : {{ $produit->prix }} €</h4>
			</div>
			@endforeach
        </div>
    </div>

@endsection