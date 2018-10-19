@extends('layouts.app')

@section('content')
	<h1>Contact</h1>
	{!! Form::open(['url' => 'contact/submit']) !!}
		<div class="form-group">
			{{Form::label('name', 'Name')}}
			{{Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Enter your name here', 'required'])}}
		</div>

		<div class="form-group">
			{{Form::label('email', 'e-Mail Address')}}
			{{Form::text('email', '', ['class' => 'form-control', 'placeholder' => 'Enter your e-mail here', 'required'])}}
		</div>

		<div class="form-group">
			{{Form::label('message', 'Message')}}
			{{Form::textarea('message', '', ['class' => 'form-control', 'placeholder' => 'Type your message here', 'required'])}}
		</div>
		
		<div>
			{{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
		</div>
	{!! Form::close() !!}
@endsection

@section('sidebar')
	@parent
	<p>This is appended to sidebar.</p>
@endsection