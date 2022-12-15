<div class="form-group">
	{!! Form::label('title', 'titulo') !!}
	{!! Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'ingrese un titulo']) !!}

	@error('title')
	<small class="text-danger">{{$message}}</small>
	@enderror
</div>

<div class="form-group">
	{!! Form::label('description', 'descripcion') !!}
	{!! Form::textarea('description', null,['class' => 'form-control', 'placeholder' => 'ingrese una descripcion']) !!}

	@error('description')
	<small class="text-danger">{{$message}}</small>
	@enderror
</div>


<div class="form-group">
    <p class="font-weight-bold">Estado</p>

    <label>
    {!! Form::radio('status', 1) !!}
        estado 1
    </label>
    
    <label>
        {!! Form::radio('status', 2) !!}
            estado 2
    </label>

    <label >
    	{!! Form::radio('status', 3)!!}
    	estado 3
    </label>


        {{-- MENSAJE DE ERROR --}}
  @error('status')
        <br>
        <small class="text-danger">{{$message}}</small>
    @enderror
</div>
 

<div class="form-group">
	{!! Form::label('link', 'enlace') !!}
	{!! Form::text('link', null, ['class' => 'form-control', 'placeholder' => 'enlace externo']) !!}

	@error('link')
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