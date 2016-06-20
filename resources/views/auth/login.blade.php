@extends('app')
@section('content')
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<h1>Login</h1>
			{!! Form::open(['url'=>'auth/login']) !!}
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
			<!--- Remember Field --->
			<div class="form-group">
				{!! Form::checkbox('remember', '',['class' => 'form-control']) !!}
				{!! Form::label('remember', 'Remember me') !!}
			</div>
			<div class="form-group">
				{!! Form::submit('登录',['class'=>'btn btn-primary radius']) !!}
			</div>
			{!! Form::close() !!}
			@include('partial.error')
		</div>
	</div>
@stop