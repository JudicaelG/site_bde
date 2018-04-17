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
</div>


@endsection