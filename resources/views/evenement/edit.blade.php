@extends('layouts.master')

@section ('header')

    <header>
        <h1>{{ $evenements->titre }}</h1>
    </header>

@endsection

@section ('content')

    <h1>Edit Task</h1>
    <hr>
    <form action="{{url('evenement', [$evenements->id])}}" method="POST">
        <input type="hidden" name="_method" value="PUT" >
        {{ csrf_field() }}
        <div class="form-group">
            <label for="title">Task Title</label>
            <input type="text" value="{{$evenements->titre}}" class="form-control" id="titre"  name="titre" required>
        </div>
        <div class="form-group">
            <label for="description">Task Description</label>
            <input type="text" value="{{$evenements->description}}" class="form-control" id="description" name="description" required>
        </div>
        <div class="form-group">
            <label for="titre">Date de l'événement</label>
            <input type="text" value="{{$evenements->date_evenement}}" class="form-control" id="date_evenement" name="date_evenement" required>
        </div>
        <div class="form-group">
            <label for="titre">Prix de l'événement</label>
            <input type="text" value="{{$evenements->prix}}" class="form-control" id="prix" name="prix" required>
        </div>
        <div class="form-group">
            <label for="titre">Récurrence de l'événement</label>
            <input type="text" value="{{$evenements->recurrence}}" class="form-control" id="recurrence" name="recurrence" required>
        </div>
        @include('layouts.errors')

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>



@endsection