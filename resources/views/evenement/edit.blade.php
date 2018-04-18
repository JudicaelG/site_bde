@extends('layouts.master')

@section ('header')

    <header>
        <div class="header_img">
            <img src="/img/headerFond.png" alt="Image fond" >
            <h1>{{$evenements->titre}}</h1>
        </div>
    </header>

@endsection

@section ('content')

    <hr>
    <form action="{{url('evenement', [$evenements->id])}}" method="POST">
        <input type="hidden" name="_method" value="PUT" >
        {{ csrf_field() }}
        <div class="form-group">
            <label for="title">Titre de l'évènement</label>
            <input type="text" value="{{$evenements->titre}}" class="form-control" id="titre"  name="titre" required>
        </div>
        <div class="form-group">
            <label for="description">Description de l'évènement</label>
            <input type="text" value="{{$evenements->description}}" class="form-control" id="description" name="description" required>
        </div>
        <div class="form-group">
            <label for="titre">Date de l'évènement</label>
            <input type="text" value="{{$evenements->date_evenement}}" class="form-control" id="date_evenement" name="date_evenement" required>
        </div>
        <div class="form-group">
            <label for="titre">Prix de l'évènement</label>
            <input type="text" value="{{$evenements->prix}}" class="form-control" id="prix" name="prix" required>
        </div>
        <div class="form-group">
            <label for="titre">Récurrence de l'évènement</label>
            <input type="text" value="{{$evenements->recurrence}}" class="form-control" id="recurrence" name="recurrence" required>
        </div>
        @include('layouts.errors')

        <button type="submit" class="btn btn-primary">Valider</button>
    </form>



@endsection