@extends('app')
@section('content')
	<div class="jumbotron">
		<h1>This Is My Example</h1>
		<p>This is a template showcasing the optional theme stylesheet included in Bootstrap. Use it as a starting point to create something more unique by building on or modifying it.</p>
		@if($signedin)
			<a href="flyers/create" class="btn btn-primary">Create a Flyer</a>
		@else
			<a href="auth/login" class="btn btn-primary">Sign In</a>
			<a href="auth/register" class="btn btn-default">Sign Up</a>
		@endif
	</div>

@stop