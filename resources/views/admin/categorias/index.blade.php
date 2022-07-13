@extends('adminlte::page')

@section('title', 'Categorias | Gesccol')

@section('content_header')
    <h1>Listado de Categorias</h1>
@stop

@section('content')

    @if (session('info'))
        <x-adminlte-alert theme="success" title="Listo!!" dismissable>
            <strong>{{session('info')}}</strong>
        </x-adminlte-alert>
    @endif
    {{-- descripcion --}}
    <p class="container">Seccion de categorias, aqui podras encontrar todas las categorias creadas previamente y que se alojan en la base de datos, las categorias sirven para dividir las entradas y poder filtrarlas por estas mismas</p>

    <hr class="mt-5">

    <section class="card">
        <header class="my-3 card-header ">
            {{-- <input wire:model="search" type="text" class="form-control" placeholder="ingrese el nombre de una categoria a buscar"> --}}
            <h1>Listado de Categorias</h1>
            <a href="{{route('admin.categorias.create')}}" class="btn btn-primary">Agregar Categorias</a>
        </header>

        
        @if ($categorias->count())
        <main class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>nombre</th>
                        <th colspan="2">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categorias as $category)
                    <tr>
                        <th scope="row">{{$category->id}}</th>
                        <th>{{$category->name}}</th>
                        <th width="10">
                            <a href="{{ route('admin.categorias.edit', $category) }}" class="btn btn-primary">Editar</a>
                        </th>
                        <th width="10px">
                            <form action="{{ route('admin.categorias.destroy', $category) }}" method="POST">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger">
                                    Eliminar
                                </button>
                            </form>
                        </th>
                    </tr>
                    @endforeach
                    
                </tbody>
            </table>
        </main>
        @else
        <div class="card-body">
            <strong class="p-3">No hay registros para mostrar</strong>
        </div>
         @endif
    </section>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')

@stop