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
	<a href="/boutique" class="fa fa-arrow-left"></a>
	<a href="https://twitter.com/bdeexiastrg?lang=fr" class="fa fa-cart-plus"></a>
</div>

<div class="jumbotron text-center">
	<p>
		<h3>{{ $produits->titre }}</h3>
		<br>
		<strong>Description : </strong>{{ $produits->description}}<br>
		<img src="{{ $images->lien }}" alt="{{ $images->alt }}">
		<h5><strong>Prix : </strong>{{ $produits->prix }}</h5>
	</p>

	<form action="/boutique" method="post">
		{{csrf_field()}}
		<input type="number" name="quantite" value="quantite">
		<input type="hidden" name="id_produit" value="{{ $produits->id }}">
		<button type="submit" class="btn btn-default">Ajouter au panier</button>
	</form>
</div>


@endsection