@extends('layouts.master')

@section ('head')

    <title>Boutique</title>

@endsection

@section ('header')
    <header>
        <div class="header_img">
            <img src="/img/headerFond.png" alt="Image fond" >
            <h1>Boutique</h1>
        </div>
    </header>

@endsection

@section ('barre_recherche')

	            <form class="form-inline my-2 my-md-0" action="/boutique/recherche" method="post">
					{{csrf_field()}}
                <select name="recherche" class="selectpicker" data-live-search="true">
					@foreach($produits as $produit)
					<option  value="{{$produit->id}}">{{ $produit->titre}}</option>
					@endforeach
				</select>

            </form>

@endsection

@section ('content')

    <div id="boutonBoutique">
        @if(\Auth::check())
            <form action="/boutique/panier/" method="POST">
                {{csrf_field()}}
                <button type="submit" class="boutonBoutique" value="Mon Panier"><i class="fa fa-cart-plus"></i></button>
            </form>
        @endif
        @bde
            <form action="/boutique/validationcommande" method="POST">
                {{csrf_field()}}
                <button type="submit" class="boutonBoutique" value="Validation Commandes">Validation Commande</button>
            </form>
            <a href="boutique/create">Ajouter un produit</a>
        @endbde
    </div>

    <div id="meilleuresVentes">
        <p>Meilleures Ventes</p>
        <div class="imgMeilleuresVentes">
			@foreach($meilleursproduits as $meilleurvente)
				@if($meilleurvente->produit_count > 1)
					<div class="produits">
						<a href="/boutique/{{$meilleurvente->id}}">{{ $meilleurvente->titre }}</a>
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