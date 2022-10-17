<div class="form-group">
	{!! Form::label('numero radicado', 'Numero radicado') !!}
	{!! Form::number('n_radicado', null, ['class' => 'form-control', 'placeholder' => 'ingrese el numero de radicado']) !!}

	@error('n_radicado')
	<small class="text-danger">{{$message}}</small>
	@enderror
</div>

<div class="form-group">
	{!! Form::label('tipo de mutacion', 'tipo de mutacion') !!}
	{!! Form::text('tipo_mutacion', null, ['class' => 'form-control', 'placeholder' => 'ingrese el tipo de radicado o mutacion']) !!}

	@error('tipo_mutacion')
	<small class="text-danger">{{$message}}</small>
	@enderror
</div>

<div class="form-group">
    <p class="font-weight-bold">Estado</p>

    <label>
    {!! Form::radio('status', 'incompleto') !!}
        Incompleto
    </label>
    
    <label>
        {!! Form::radio('status', 'completo') !!}
            Completo
    </label>


        {{-- MENSAJE DE ERROR --}}
  @error('status')
        <br>
        <small class="text-danger">{{$message}}</small>
    @enderror
</div>

<div class="form-group">
	{!! Form::label('notificacion', 'notificacion') !!}
	{!! Form::textarea('notificacion', null, ['class' => 'form-control']) !!}

	@error('notificacion')
	<small class="text-danger">{{$message}}</small>
	@enderror
</div>

<div class="form-group">
		{!! Form::label('observaciones', 'observaciones') !!}
		{!! Form::textarea('observaciones', null, ['class' => 'form-control']) !!}
		@error('observaciones')
		<small class="text-danger">{{$message}}</small>
		@enderror
</div>

