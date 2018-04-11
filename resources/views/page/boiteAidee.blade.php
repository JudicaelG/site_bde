@extends('layouts.master')

@section ('header')

    <header>
        <h1>Boite A Idee BDE</h1>
    </header>

@endsection

@section ('content')

<div id="corps">


    <div id="encre_idee">
        <a href="#ajout_idee"> Ajouter une idée</a>
    </div>
    <div id="idee">
        <? //include("displayIdee");?>
    </div>

    <div id="ajout_idee">
        <h3>Boite à idée</h3>
        <form action="">
            <label class="titre">Titre: </label><input class="tireInput" type="text" name="titreIdee"><br>
            <label class="description">Description: </label><textarea name="descriptionIdee" cols="30" rows="10" value="Ajouter une description à votre événement"></textarea>
            <input type="submit" value="Valider">

        </form>
    </div>

</div>



@endsection