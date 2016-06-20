@extends('app')
@section('content')
	<form action="/{{ $flyer->zip }}/{{ $flyer->street }}/photos" class="dropzone" method="post" id="addFormPhotos">
		{{ csrf_field() }}
	</form>
@stop

@section('script.footer')
	<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.3.0/min/dropzone.min.js"></script>
	<script>

	</script>

@stop