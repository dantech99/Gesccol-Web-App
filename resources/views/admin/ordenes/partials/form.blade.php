<div class="form-group">
	{!! Form::label('numerorden', 'numero de la orden') !!}
	{!! Form::number('numerorden', null, ['class' => 'form-control']) !!}

	@error('numerorden')
	<small class="text-danger">{{$message}}</small>
	@enderror
</div>


<div class="form-group">
	{!! Form::label('valor', 'valor') !!}
	{!! Form::text('valor',  null,['class' => 'form-control']) !!}

	@error('valor')
	<small class="text-danger">{{$message}}</small>
	@enderror
</div>

<div class="form-group">
	{!! Form::label('objeto', 'objeto') !!}
	{!! Form::textarea('objeto', null, ['class' => 'form-control', 'placeholder' => 'ingrese el objeto']) !!}

	@error('objeto')
	<small class="text-danger">{{$message}}</small>
	@enderror
</div>


<div class="form-group">
	{!! Form::label('descripcion', 'descripcion') !!}
	{!! Form::textarea('descripcion', null, ['class' => 'form-control', 'placeholder' => 'ingrese la descripcion']) !!}

	@error('descripcion')
	<small class="text-danger">{{$message}}</small>
	@enderror
</div>