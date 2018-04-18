@extends('layouts.master')

@section ('header')

    <header>
        <h1>Boite à idée BDE</h1>
    </header>

@endsection

@section ('content')
<form action="{{url('tasks', [$task->id])}}" method="POST">
    <input type="hidden" name="_method" value="DELETE">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <input type="submit" class="btn btn-danger" value="Delete"/>
</form>

@endsection