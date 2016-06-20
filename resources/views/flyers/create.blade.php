@extends('app')
@section('content')
	<h1>Selling Your Home?</h1>

	<hr>
	<div class="row">
		{!! Form::open(['url'=>'flyers', 'enctype'=>'multipart/form-data']) !!}
			@include('flyers._form')
		{!! Form::close() !!}
	</div>

	@include('partial.error')
@stop
