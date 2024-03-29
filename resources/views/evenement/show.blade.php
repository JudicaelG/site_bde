@extends('layouts.master')

@section ('head')

    <title>Évènement</title>

@endsection

@section ('header')

    <header>
        <div class="header_img">
            <img src="/img/headerFond.png" alt="Image fond" >
            <h1>{{ $evenements->titre }}</h1>
        </div>
    </header>

@endsection

@section ('content')
	
	
    <div id="boutons">
	@bde
        <form action="{{url('evenement', [$evenements->id])}}/edit" method="GET">
            <input type="submit" class="btn btn-danger" value="Modifier"/>
        </form>

        <form action="{{url('evenement', [$evenements->id])}}" method="POST">
            <input type="hidden" name="_method" value="DELETE">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="submit" class="btn btn-danger" value="Supprimer"/>
        </form>

        <form action="{{url('evenement', [$evenements->id])}}/pdf" method="GET">
            <input type="hidden" name="_method" value="Recuperer la liste des partipants en pdf">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="submit" class="btn btn-danger" value="Récupérer la liste des partipants en pdf"/>
        </form>

        <form action="{{url('evenement', [$evenements->id])}}/csv" method="GET">
            <input type="hidden" name="_method" value="Recuperer la liste des partipants en csv">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="submit" class="btn btn-danger" value="Récupérer la liste des partipants en csv"/>
        </form>
	@endbde
	@salarie
        <form action="{{url('evenement/contact', [$evenements-> id])}}" method="POST">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="submit" class="btn btn-danger" value="Cet évènement peut nuire à l'image de l'école"/>
        </form>
	@endsalarie
        @if(\Auth::check())
            @if(is_null($participes)===false)
                <form action="{{url('images/create', [$evenements->id])}}" method="GET">
                    <input type="hidden" name="_method" value="Ajout Image">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="submit" class="btn btn-danger" value="Ajout Image"/>
                </form>
            @endif
        @endif
    </div>
		
	
    <div class="jumbotron text-center">
        <p>
            <strong>Titre de l'évènement:</strong> {{ $evenements->titre }}<br>
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
                @bde
                    <form action="{{url('commentaire', [$commentaire->id])}}" method="POST">
                        <input type="hidden" name="_method" value="DELETE">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="submit" class="btn btn-danger" value="Supprimer"/>
                    </form>
                @endbde
                @salarie
                    <form action="{{url('commentaire/contact', [$commentaire-> id])}}" method="POST">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="submit" class="btn btn-danger" value="Ce commentaire peut nuire à l'image de l'école"/>
                    </form>
                @endsalarie
        @endforeach
    </div>
    
    <div class="card">
        <div class="card-block">
            <form method="POST" action="/evenement/{{$evenements-> id}}">
                {{csrf_field()}}
                <div class="form-group">
                    <textarea name="contenu" placeholder="Ajoutez un commentaire!" class="form-control" required></textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Commenter</button>
                </div>

                @include('layouts.errors')

            </form>
        </div>
    </div>
	@endauth

    @if(\Auth::check())
        @if($evenements->date_evenement >= $date)
            @if(is_null($participes)===false)
                <form action="/evenement/participe/{{$evenements->id}}" method="POST">
                    <input type="hidden" name="_method" value="DELETE">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="submit" class="btn btn-danger" value="Je ne participe plus"/>
                </form>

            @endif

            @if(is_null($participes)===true)
                <form method="POST" action="/evenement/{{$evenements->id}}/participe">
                    {{csrf_field()}}
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary" value="Participe">Je participe</button>
                    </div>
                </form>
            @endif
        @endif

        @if(is_null($aimeEvenement)===false)
            <form action="/evenement/aime/{{$evenements->id}}" method="POST">
                <input type="hidden" name="_method" value="DELETE">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="submit" class="btn btn-danger" value="Je n'aime pas cet évènement"/>
            </form>

        @endif

        @if(is_null($aimeEvenement)===true)
            <form method="POST" action="/evenement/{{$evenements->id}}/aime">
                {{csrf_field()}}
                <div class="form-group">
                    <button type="submit" class="btn btn-primary" value="Aime">J'aime cet évènement</button>
                </div>
            </form>
        @endif

    @endif

@endsection