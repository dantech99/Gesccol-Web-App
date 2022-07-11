<div class="form-group">
	{!! Form::label('title', 'nombre') !!}
	{!! Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'ingrese el nombre del post']) !!}

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
	{!! Form::label('category_id', 'categorias') !!}
	{!! Form::select('category_id', $categorias, null, ['class' => 
	'form-control']) !!}

	@error('category_id')
	<small class="text-danger">{{$message}}</small>
	@enderror
</div>

<div class="form-group">
	{!! Form::label('author', 'author') !!}
	{!! Form::text('author', 'Gesccol E.I.C.E', ['class' => 'form-control', 'readonly']) !!}

	@error('slug')
	<small class="text-danger">{{$message}}</small>
	@enderror
</div>


<div class="row">
	<div class="col mb-3">
		<div class="image-wrapper">
			@isset($post->image)
			<img src="{{Storage::url($post->image->url)}}" alt="imagen-del-post">
			@else
			<img src="https://th.bing.com/th/id/OIP.1RERMPCW2-x0N1a2nLsi-QHaC_?w=343&h=141&c=7&r=0&o=5&pid=1.7" alt="imagen-post" id="picture">
			@endisset
		</div>
	</div>
	<div class="col">
		<div class="form-group">
			{!! Form::label('file', 'imagen del post') !!}
			{!! Form::file('file', ['class' => 'form-control-file', 'accept' => 'image/*']) !!}
		</div>
		@error('file')
		<span class="text-danger">{{$message}}</span>
		@enderror
	</div>
</div>

<div class="form-group">
		{!! Form::label('content', 'contenido') !!}
		{!! Form::textarea('content', null, ['class' => 'form-control']) !!}
		@error('content')
		<small class="text-danger">{{$message}}</small>
		@enderror
	</div>