@extends('layouts.master')

@section ('header')

    <header>
        <h1>Boite Idee</h1>
    </header>

@endsection

@section ('content')
    <h1> {{ $idee->titre }}</h1>
	
	@bde
    <form action="{{url('boiteidee', [$idee->id])}}/edit" method="GET">
        <input type="submit" class="btn btn-danger" value="Editer"/>
    </form>

    <form action="{{url('boiteidee', [$idee->id])}}" method="POST">
        <input type="hidden" name="_method" value="Supprimer">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="submit" class="btn btn-danger" value="Delete"/>
    </form>

    <form method="POST" action="{{url('boiteidee', [$idee->id])}}/validation">
        {{csrf_field()}}
        <div class="form-group">
            <button type="submit" class="btn btn-primary" value="Valider">Valider cette idée</button>
        </div>
    </form>
	@endbde

    <div class="jumbotron text-center">
        <p>
            <strong>Titre de l'idée:</strong> {{ $idee->titre }}<br>
            <strong>Description:</strong> {{ $idee->description }}
        </p>
    </div>

    @if(\Auth::check())

        @if(is_null($aimeIdee)===false)
            <form action="/boiteidee/aime/{{$idee->id}}" method="POST">
                <input type="hidden" name="_method" value="DELETE">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="submit" class="btn btn-danger" value="Je n'aime pas cette idée"/>
            </form>

        @endif

        @if(is_null($aimeIdee)===true)
            <form method="POST" action="/boiteidee/{{$idee->id}}/aime">
                {{csrf_field()}}
                <div class="form-group">
                    <button type="submit" class="btn btn-primary" value="Aime">J'aime cette idée</button>
                </div>
            </form>
        @endif

    @endif

@endsection