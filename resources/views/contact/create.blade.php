@extends('layouts.master')

@section ('head')

	<title></title>

@endsection

@section ('header')

	<header>
		<div class="header_img">
			<img src="/img/1440.png" alt="Image fond" >
			<h1>Envoie mail BDE</h1>
		</div>
	</header>

@endsection

@section ('content')


	{!! Form::open(['route' => 'contact.store']) !!}

	<div class="form-group">
		{!! Form::label('name', 'Le nom de l\'évenement') !!}
		{!! Form::text('nom_evenement', null, ['class' => 'form-control']) !!}
	</div>

	<div class="form-group">
		{!! Form::label('name', 'Votre message') !!}
		{!! Form::textarea('message', null, ['class' => 'form-control']) !!}
	</div>

	{!! Form::submit('Submit', ['class' => 'btn btn-info']) !!}

	{!! Form::close() !!}
	
	
	@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
	@endif

@endsection
	
