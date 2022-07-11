<div class="form-group">
	{!! Form::label('title', 'nombre') !!}
	{!! Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'ingrese el nombre del servicio']) !!}

	@error('name')
	<small class="text-danger">{{$message}}</small>
	@enderror
</div>

<div class="form-group">
	{!! Form::label('slug', 'slug') !!}
	{!! Form::text('slug', null, ['class' => 'form-control', 'placeholder' => 'ingrese el nombre del slug', 'readonly']) !!}

	@error('slug')
	<small class="text-danger">{{$message}}</small>
	@enderror
</div>

<div class="form-group">
		{!! Form::label('description', 'descripcion') !!}
		{!! Form::textarea('description', null, ['class' => 'form-control']) !!}
		@error('description')
		<small class="text-danger">{{$message}}</small>
		@enderror
</div>


<div class="form-group">
		{!! Form::label('content', 'contenido') !!}
		{!! Form::textarea('content', null, ['class' => 'form-control']) !!}
		@error('content')
		<small class="text-danger">{{$message}}</small>
		@enderror
</div>