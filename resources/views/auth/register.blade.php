@extends('app')
@section('content')
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<h1>Register</h1>
			{!! Form::open(['url'=>'auth/register']) !!}
				<!--- Name Field --->
				<div class="form-group">
				    {!! Form::label('name', 'Name:') !!}
				    {!! Form::text('name', null, ['class' => 'form-control']) !!}
				</div>
				<!--- Email Field --->
				<div class="form-group">
					{!! Form::label('email', 'Email:') !!}
					{!! Form::email('email', null, ['class' => 'form-control']) !!}
				</div>
				<!--- Password Field --->
				<div class="form-group">
					{!! Form::label('password', 'Password:') !!}
					{!! Form::password('password', ['class' => 'form-control']) !!}
				</div>
				<!--- PasswordConfirm Field --->
				<div class="form-group">
					{!! Form::label('password_confirmation', 'PasswordConfirm:') !!}
					{!! Form::password('password_confirmation', ['class' => 'form-control']) !!}
				</div>
				<div class="form-group">
					{!! Form::submit('注册',['class'=>'btn btn-primary radius']) !!}
				</div>
			{!! Form::close() !!}
			@include('partial.error')
		</div>
	</div>
@stop