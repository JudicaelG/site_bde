@extends('layouts.master')

@section ('head')

    <title>Images</title>

@endsection

@section ('header')

    <header>
        <div class="header_img">
            <img src="/img/headerFond.png" alt="Image fond" >
            <h1>BDE eXia.Cesi Strasbourg</h1>
        </div>
    </header>

@endsection

@section ('content')

    <div class="eventImg">
        <img  class="test" src="{{ $images->lien }}" alt="{{$images->alt}}">
    </div>

    @bde
    <form action="{{url('images', [$images->id])}}" method="POST">
        <input type="hidden" name="_method" value="DELETE">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="submit" class="btn btn-danger" value="Supprimer l'image"/>
    </form>
    @endbde
		@salarie
            <form action="{{url('image/contact', [$images-> id])}}" method="POST">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="submit" class="btn btn-danger" value="Cette image peut nuire à l'image de l'école"/>
            </form>
		@endsalarie





    @if(\Auth::check())

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
                <form action="" method="POST">
                    <input type="hidden" name="_method" value="DELETE">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="submit" class="btn btn-danger" value="Ce commentaire peut nuire à l'image de l'école"/>
                </form>
                @endsalarie
            @endforeach
        </div>

        <div class="card">
            <div class="card-block">
                <form method="POST" action="/images/{{$images->id}}">
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

        @if(is_null($aimeImage)===false)
            <form action="/images/aime/{{$images->id}}" method="POST">
                <input type="hidden" name="_method" value="DELETE">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="submit" class="btn btn-danger" value="Je n'aime pas cette image"/>
            </form>

        @endif

        @if(is_null($aimeImage)===true)
            <form method="POST" action="/images/{{$images->id}}/aime">
                {{csrf_field()}}
                <div class="form-group">
                    <button type="submit" class="btn btn-primary" value="Aime">J'aime cette image</button>
                </div>
            </form>
        @endif

    @endif

@endsection