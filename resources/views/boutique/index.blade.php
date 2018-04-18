@extends('layouts.master')

@section ('header')
    <header>
        <div class="header_img">
            <img src="/img/headerFond.png" alt="Image fond" >
            <h1>Boutique</h1>
        </div>
    </header>

@endsection

@section ('content')

    <div id="boutonBoutique">
        @if(\Auth::check())
            <a href="https://twitter.com/bdeexiastrg?lang=fr" class="fa fa-cart-plus"></a>
        @endif
        @bde
            <a href="boutique/create">Ajouter un produit</a>
        @endbde
    </div>

    <div id="meilleuresVentes">
        <p>Meilleures Ventes</p>
        <div class="imgMeilleuresVentes">
			@foreach($meilleursproduits as $meilleurvente)
				@if($meilleurvente->produit_count > 1)
					<div class="produits">
						<h4>{{ $meilleurvente->titre }}</h4>
						<img src="{{$meilleurvente->lien}}" alt="{{ $meilleurvente->alt}}">
					</div>
				@endif
			@endforeach
			
            
        </div>
    </div>

    <div id="meilleursArticlesBDE">
        <p>Meilleurs Produits BDE</p>
        <div class="imgMeilleuresVentes">
			@foreach($produits as $produit)
            <div class="produits">
				<h2 class="blog-post"><a href="/boutique/{{$produit->id_produit}}">{{ $produit->titre }}</a></h2>
				<h5>{{ $produit->nom }}</h5>
				<h4>{{ $produit->description }}</h4>
				<img src="{{$produit->lien}}" alt="{{ $produit->alt}}">
				<h4>Prix : {{ $produit->prix }} €</h4>
			</div>
			@endforeach
        </div>
    </div>


@endsection