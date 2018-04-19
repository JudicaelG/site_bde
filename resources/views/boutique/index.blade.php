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
                <button type="submit" class="boutonBoutique" value="Mon Panier"><i class="fa fa-cart-plus" style="font-size:34px;"></i></button>
            </form>
        @endif
        @bde
            <form action="/boutique/validationcommande" method="POST">
                {{csrf_field()}}
                <button type="submit" class="validerCommande" value="Validation Commandes">Validation Commande</button>
            </form>
            <form action="boutique/create">
                <button type="submit" class="ajoutProduit"> Ajouter un produit</button>
            </form>

        @endbde
    </div>

    <div id="meilleuresVentes">
        <p>Meilleures Ventes</p>
        <div class="imgMeilleuresVentes">
                        <div id="album">
                            <div class="container">

                                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                    <!-- Wrapper for slides -->
                                    <div class="carousel-inner">

                                        <div class="item active">
                                            <a href="/boutique/{{$imageActive->id}}"><img src="{{ $imageActive->lien }}" alt="{{ $imageActive->titre }}"   class="photo_album"></a>
                                        </div>
                                        @foreach($meilleursproduits as $meilleurvente)
                                            <div class="item ">
                                                <a href="/boutique/{{$meilleurvente->id}}"><img src="{{ $meilleurvente->lien }}" alt="{{ $meilleurvente->titre }}"  class="photo_album"></a>
                                            </div>
                                        @endforeach


                                    </div>

                                    <!-- Left and right controls -->
                                    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                                        <span class="glyphicon glyphicon-chevron-left"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="right carousel-control" href="#myCarousel" data-slide="next">
                                        <span class="glyphicon glyphicon-chevron-right"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>
                            </div>
                        </div>


			
            
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