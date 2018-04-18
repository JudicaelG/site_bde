@extends('layouts.master')

@section ('head')

    <title>Boite à idée</title>

@endsection

@section ('header')

    <header>
        <div class="header_img">
            <img src="/img/headerFond.png" alt="Image fond" >
            <h1>Boite à idée</h1>
        </div>
    </header>

@endsection

@section ('content')
<form action="{{url('tasks', [$task->id])}}" method="POST">
    <input type="hidden" name="_method" value="DELETE">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <input type="submit" class="btn btn-danger" value="Delete"/>
</form>

@endsection