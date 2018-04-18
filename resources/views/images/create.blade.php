@extends('layouts.master')

@section ('head')

    <title>Images</title>

@endsection

@section ('header')
    <header>
        <div class="header_img">
            <img src="/img/headerFond.png" alt="Image fond" >
            <h1>Upload fichier</h1>
        </div>
    </header>

@endsection

@section ('content')

    <div class="container">
        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <h3 class="jumbotron">Upload d'image</h3>
        <form method="post" action="{{URL::to('upload', [$id])}}" enctype="multipart/form-data">
            {{csrf_field()}}
            <label for="name">nom alternatif de l'image</label>
            <input type="text" name="name"><br>
            <label for="image">image:</label>
            <input type="file" name="image">
            <input type="hidden" name="_token" value="{{csrf_token()}}">

            <input type="submit" class="btn btn-primary" style="margin-top:10px"></input>

        </form>
    </div>
@endsection