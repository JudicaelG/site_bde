@extends('layouts.master')

@section ('header')

    <header>
        <h1>Boutique</h1>
    </header>

@endsection

@section ('content')

<div class="jumbotron text-center">
	<p>
		<h3>{{ $produits->titre }}</h3>
		<br>
		<strong>Description : </strong>{{ $produits->description}}<br>
		<img src="{{ $images->lien }}" alt="{{ $images->alt }}">
		<h5><strong>Prix : </strong>{{ $produits->prix }}</h5>
	</p>
	<form action="" method="post">
		
		<input type="hidden" name="id" value="{{ $produits->id }}">
		<input type="hidden" name="titre" value="{{ $produits->titre }}">
		<input type="hidden" name="prix" value="{{ $produits->prix }}">
		<button type="submit" class="btn btn-default">Ajouter au panier</button>
	</form>
</div>


@endsection