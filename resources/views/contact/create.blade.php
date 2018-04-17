@extends('layouts.master')

@section ('header')

    <header>
        <h1>Envoyer un mail au BDE</h1>
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
	
