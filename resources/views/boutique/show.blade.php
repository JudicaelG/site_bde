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

@section ('content')

<div id="boutique">
	<div class="retourFa">
		<a href="/boutique" class="fa fa-arrow-left"></a>
	</div>
	@if(\Auth::check())
		<form action="/boutique/panier/" method="POST">
			{{csrf_field()}}
			<button type="submit" class="boutonBoutique" value="Mon Panier"><a class="fa fa-cart-plus" style="font-size: 34px;"></a></button>
		</form>
	@endif
</div>

<div class="jumbotron text-center">
		<h3>{{ $produits->titre }}</h3>
		<br>
		<strong>Description : </strong>{{ $produits->description}}<br>
		<img src="{{ $images->lien }}" alt="{{ $images->alt }}">
		<h5><strong>Prix : </strong>{{ $produits->prix }}</h5>

	<form action="/boutique" method="post">
		{{csrf_field()}}
		<input type="number" name="quantite" value="0" min="0">
		<input type="hidden" name="id_produit" value="{{ $produits->id }}">
		<button type="submit" class="btn btn-default">Ajouter au panier</button>
	</form>
</div>


@endsection