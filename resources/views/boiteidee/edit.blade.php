@extends('layouts.master')

@section ('header')

    <header>
        <h1>Boite A Idee BDE</h1>
    </header>

@endsection

@section ('content')

    <h1>Edit Task</h1>
    <hr>
    <form action="{{url('boiteidee', [$idee->id])}}" method="POST">
        <input type="hidden" name="_method" value="PUT" >
        {{ csrf_field() }}
        <div class="form-group">
            <label for="title">Task Title</label>
            <input type="text" value="{{$idee->titre}}" class="form-control" id="titre"  name="titre" >
        </div>
        <div class="form-group">
            <label for="description">Task Description</label>
            <input type="text" value="{{$idee->description}}" class="form-control" id="description" name="description" >
        </div>

        @include('layouts.errors')

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>



@endsection