@extends('layouts.master')

@section ('header')

    <header>
        <h1>Boite Idee</h1>
    </header>

@endsection

@section ('content')
    <h1> {{ $idee->titre }}</h1>

    <form action="{{url('boiteidee', [$idee->id])}}/edit" method="GET">
        <input type="submit" class="btn btn-danger" value="Edit"/>
    </form>

    <form action="{{url('boiteidee', [$idee->id])}}" method="POST">
        <input type="hidden" name="_method" value="DELETE">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="submit" class="btn btn-danger" value="Delete"/>
    </form>


    <div class="jumbotron text-center">
        <p>
            <strong>Titre de l'idée:</strong> {{ $idee->titre }}<br>
            <strong>Description:</strong> {{ $idee->description }}
        </p>
    </div>






@endsection