<div class="form-group">
	{!! Form::label('numeroprocesos', 'numero del proceso') !!}
	{!! Form::number('numeroprocesos', null, ['class' => 'form-control']) !!}

	@error('numeroprocesos')
	<small class="text-danger">{{$message}}</small>
	@enderror
</div>

<div class="form-group">
	{!! Form::label('tipo', 'tipo de proceso') !!}
	{!! Form::text('tipo', null,['class' => 'form-control', 'placeholder' => 'ingrese el tipo de proceso']) !!}

	@error('tipo')
	<small class="text-danger">{{$message}}</small>
	@enderror
</div>
 
<div class="form-group">
	{!! Form::label('estado', 'estado') !!}
	{!! Form::text('estado', null, ['class' => 'form-control', 'placeholder' => 'ingrese el estado del proceso']) !!}

	@error('estado')
	<small class="text-danger">{{$message}}</small>
	@enderror
</div>
<div class="form-group">
	{!! Form::label('entidad', 'entidad') !!}
	{!! Form::text('entidad', null, ['class' => 'form-control', 'placeholder' => 'ingrese la entidad']) !!}

	@error('entidad')
	<small class="text-danger">{{$message}}</small>
	@enderror
</div>
<div class="form-group">
	{!! Form::label('objetivo', 'objetivo') !!}
	{!! Form::textarea('objetivo', null, ['class' => 'form-control', 'placeholder' => 'ingrese la entidad']) !!}

	@error('objetivo')
	<small class="text-danger">{{$message}}</small>
	@enderror
</div>


<div class="form-group">
    <p class="font-weight-bold">Estado</p>

    <label>
    {!! Form::radio('status', 1) !!}
        Invitacion
    </label>
    
    <label>
        {!! Form::radio('status', 2) !!}
            En Proceso
    </label>

    <label >
    	{!! Form::radio('status', 3)!!}
    	Ejecutados y Celebrados
    </label>


        {{-- MENSAJE DE ERROR --}}
  @error('status')
        <br>
        <small class="text-danger">{{$message}}</small>
    @enderror
</div>




<div class="form-group">
	{!! Form::label('valor', 'cuantia') !!}
	{!! Form::text('valor',  null,['class' => 'form-control']) !!}

	@error('valor')
	<small class="text-danger">{{$message}}</small>
	@enderror
</div>

<div class="form-group">
	{!! Form::label('documentos', 'Documento que se mostrara en el proyecto') !!}
    {!! Form::file('file', ['class' => 'form-control-file']) !!}

	@error('documentos')
	<small class="text-danger">{{$message}}</small>
	@enderror
</div>