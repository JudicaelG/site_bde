@extends('layouts.master')

@section ('header')

    <header>
        <h1>Evenement</h1>
    </header>

@endsection

@section ('content')

    <div id="ajout_idee">
        <h3></h3>
        <form method="POST" action="/evenement" >
            {{csrf_field()}}
            <div class="form-group">
                <label for="titre">Récurrence de l'événement</label>
                <input type="text" class="form-control" id="recurrence" name="recurrence">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Valider</button>
            </div>

            @include('layouts.errors')

        </form>
    </div>

@endsection