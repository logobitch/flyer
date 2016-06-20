@extends('app')
@section('content')
	<div class="row">
		<div class="col-md-4">
			<h1>{{ $flyer->street }}</h1>
			<h2>￥{{ $flyer->price }}</h2>
			<hr>

			<div class="description">{!! nl2br($flyer->description) !!}</div>
		</div>

		<div class="col-md-8">
			@foreach($flyer->photos->chunk(4) as $set)
			<div class="row gallary" >
				@foreach($set as $photo)
					<div class="col-md-3 gallary_image">
						<img src="/{{ $photo->thumb_path }}" alt="">
					</div>
				@endforeach
			</div>
			@endforeach
				@if(isset($user) && $user->owns($flyer))
					<hr>
					<h2>Add Your Photos</h2>
					<form action="{{ route('store_photo_path', [$flyer->zip, $flyer->street]) }}" method="post" class="dropzone" id="addPhotosForm">
						{{ csrf_field() }}
					</form>
				@endif
		</div>
	</div>




@stop
@section('script.footer')
	<script src="/js/libs/dropzone.js"></script>
	<script>
		Dropzone.options.addPhotosForm = {
			paramName: 'photo',
			maxFilesize: 3,
			acceptedFiles: '.jpg,.jpeg,.gif,.png,.bmp'
		};
	</script>
@stop