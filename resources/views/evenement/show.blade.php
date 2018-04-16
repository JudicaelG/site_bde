@extends('layouts.master')

@section ('header')

    <header>
        <h1>{{ $evenements->titre }}</h1>
    </header>

@endsection

@section ('content')


    <h1> {{ $evenements->titre }}</h1>
	
	
    <div id="boutons">
	@bde
        <form action="{{url('evenement', [$evenements->id])}}/edit" method="GET">
            <input type="submit" class="btn btn-danger" value="Edit"/>
        </form>

        <form action="{{url('evenement', [$evenements->id])}}" method="POST">
            <input type="hidden" name="_method" value="DELETE">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="submit" class="btn btn-danger" value="Delete"/>
        </form>
	@endbde
	@salarie
		<form action="{{url('evenement', [$evenements->id])}}" method="POST">
            <input type="hidden" name="_method" value="DELETE">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="submit" class="btn btn-danger" value="Cette évenement peut nuire à l'image de l'école"/>
        </form>
	@endsalarie
        <form action="{{url('images/create')}}" method="GET">
            <input type="hidden" name="_method" value="Ajout Image">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="submit" class="btn btn-danger" value="Ajout Image"/>
        </form>
    </div>
		
	
    <div class="jumbotron text-center">
        <p>
            <strong>Titre de l'événement:</strong> {{ $evenements->titre }}<br>
            <strong>Description:</strong> {{ $evenements->description }}<br>
            <strong>Date:</strong> {{ $evenements->date_evenement }}<br>
            <strong>Prix:</strong> {{ $evenements->prix }}<br>
            <strong>Récurrence:</strong> {{ $evenements->recurrence }}<br>
        </p>
    </div>

    @if(is_null($imageActive)===false)
        <div id="album">
            <h3>Album photo de l'événement :</h3>
                <div class="container">

                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel" data-slide-to="1"></li>
                            <li data-target="#myCarousel" data-slide-to="2"></li>
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">

                            <div class="item active">
                                <a href="/images/{{$imageActive->id}}"><img src="{{ $imageActive->lien }}" alt="{{ $imageActive->alt }}"   class="photo_album"></a>
                            </div>
                            @foreach($images as $image)
                            <div class="item ">
                                <a href="/images/{{$image->id}}"><img src="{{ $image->lien }}" alt="{{ $image->alt }}"  class="photo_album"></a>
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
    @endif
	
	@auth
    <div class="jumbotron text-center">
        <h3>Espace commentaire</h3>
        @foreach($commentaires as $commentaire)
            <strong>Commentaire:</strong> {{ $commentaire->contenu }}<br>
		@salarie
			<form action="{{url('evenement', [$evenements])}}" method="POST">
            	<input type="hidden" name="_method" value="DELETE">
            	<input type="hidden" name="_token" value="{{ csrf_token() }}">
            	<input type="submit" class="btn btn-danger" value="Ce commentaire peut nuire à l'image de l'école"/>
        	</form>
	@endsalarie
        @endforeach
    </div>
    
    <div class="card">
        <div class="card-block">
            <form method="POST" action="/evenement/{{$evenements}}">
                {{csrf_field()}}
                <div class="form-group">
                    <textarea name="contenu" placeholder="ajoutez un commentaire!" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Commenter</button>
                </div>
            </form>
        </div>
    </div>
	@endauth


    <a href="../participe/create" class="btn btn-primary">Participer à l'événement !!</a><hr>


@endsection