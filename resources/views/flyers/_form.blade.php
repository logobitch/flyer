<div class="row">
	<div class="col-md-6">
		<!--- Street Field --->
		<div class="form-group">
			{!! Form::label('street', 'Street:') !!}
			{!! Form::text('street', null, ['class' => 'form-control']) !!}
		</div>
		<!--- City Field --->
		<div class="form-group">
			{!! Form::label('city', 'City:') !!}
			{!! Form::text('city', null,['class' => 'form-control']) !!}
		</div>
		<!--- Zip Field --->
		<div class="form-group">
			{!! Form::label('zip', 'Zip/Postal Code:') !!}
			{!! Form::text('zip', null, ['class' => 'form-control']) !!}
		</div>
		<!--- Country Field --->
		<div class="form-group">
			{!! Form::label('country', 'Country:') !!}
			{!! Form::select('country', $countries, null, ['class' => 'form-control']) !!}
		</div>
		<!--- State Field --->
		<div class="form-group">
			{!! Form::label('state', 'State:') !!}
			{!! Form::text('state', null, ['class' => 'form-control']) !!}
		</div>
	</div>
	<div class="col-md-6">
		<!--- Price Field --->
		<div class="form-group">
			{!! Form::label('price', 'Price:') !!}
			{!! Form::text('price', null, ['class' => 'form-control']) !!}
		</div>
		<!--- Description Field --->
		<div class="form-group">
			{!! Form::label('description', 'Description:') !!}
			{!! Form::textarea('description', null, ['class' => 'form-control', 'rows'=>'10']) !!}
		</div>
		<!--- Photos Field --->
		<div class="form-group">
		    {!! Form::label('photos', 'Photos:') !!}
		    {!! Form::file('photos', ['class' => 'form-control']) !!}
		</div>
	</div>

	<div class="col-md-6">
		<hr>
		<div class="form-group">
			{!! Form::submit('Create Flyer',['class'=>'btn btn-primary radius']) !!}
		</div>
	</div>
</div>