@extends('app')
@section('content')


	<div class="container">

	{!! Form::open(['route'=>['add_photo_article'], 'class'=>'dropzone', 'id'=>'addPhotosForm']) !!}
	{!! Form::close() !!}


	{!! Form::open(['url'=>'articles','class'=>'form-horizontal', 'style'=>'margin-top:40px;']) !!}

	<!--- Starttime Field --->
		<div class="form-group">
			{!! Form::label('starttime', 'Starttime:', ['class'=>'col-sm-1']) !!}
			<div class="col-md-4">
				{!! Form::input('date', 'starttime', null, ['class' => 'form-control col-ms-4']) !!}
			</div>
			<div class="col-md-1"></div>
			<!--- Endtime Field --->
			{!! Form::label('endtime', 'Endtime:', ['class'=>'col-sm-1']) !!}
			<div class="col-md-4">
				{!! Form::input('date', 'endtime', null, ['class' => 'form-control col-ms-4']) !!}
			</div>
		</div>


		<!--- Costs Field --->
		<div class="form-group">
			{!! Form::label('cost', 'Costs:', ['class'=>'col-sm-1']) !!}
			<div class="col-md-4">
				{!! Form::text('cost', null, ['class' => 'form-control col-ms-4']) !!}
			</div>
			<div class="col-md-1"></div>
			<!--- Endtime Field --->
			{!! Form::label('destination', 'Destination:', ['class'=>'col-sm-1']) !!}

			<div class="col-md-2">
				{!! Form::select('destination', [], null, ['class' => 'form-control col-ms-2']) !!}
			</div>
			<div class="col-md-2">
				{!! Form::select('destination', [], null, ['class' => 'form-control col-ms-2']) !!}
			</div>
		</div>


		<!--- Title Field --->
		<div class="form-group">
			{!! Form::label('title', 'Title:', ['class'=>'col-sm-1']) !!}
			<div class="col-md-4">
				{!! Form::text('title', null, ['class' => 'form-control col-ms-4']) !!}
			</div>

			<div class="col-md-1"></div>
			{!! Form::label('category', 'Category:', ['class'=>'col-sm-1']) !!}
			<div class="col-md-4">
				{!! Form::select('category', [], null,['class' => 'form-control col-ms-4']) !!}
			</div>



		</div>
		<!--- Category Field --->
		<div class="form-group">

		</div>
		<!--- Content Field --->
		<div class="form-group">
			{!! Form::label('content', 'Content:') !!}
			{!! Form::textarea('content', null, ['class' => 'col-ms-5', 'style'=>'height:300px;']) !!}
		</div>




		{!! Form::close() !!}
	</div>

	@include('partial.error')
@stop


@section('script.footer')
	<script src="/libs/ueditor/ueditor.config.js"></script>
	<script src="/libs/ueditor/ueditor.all.js"></script>
	<script>
		var ue = UE.getEditor('content');
	</script>



	<script src="/js/libs/dropzone.js"></script>
	<script>
		Dropzone.options.addPhotosForm = {
			paramName: 'photo',
			maxFilesize: 3,
			maxFiles: 1,
			acceptedFiles: '.jpg,.jpeg,.gif,.png,.bmp',
			success: function(){
				alert('1111');
			},
			error: function(){
				swal({
					title: "文件上传失败!",
					type: "error",
					confirmButtonText: 'Okay'
				});
			}
		};
	</script>
@stop