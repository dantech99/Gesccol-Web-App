<div class="card">
    <div class="card-header">
        <input wire:model="search" type="text" class="form-control" placeholder="ingrese registro a buscar">
    </div>

    @if ($glosario->count())
    <div class="card-body">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Titulo</th>
                    <th>descripcion</th>
                    <th>Abecedario</th>
                    <th colspan="1">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($glosario as $glosary)
                 <tr>
                    <td>{{$glosary->id}}</td>
                    <td>{{$glosary->titulo }}</td>
                    <th>{!! $glosary->description !!}</th>
                    <th>{{$glosary->abecedario}}</th>
                    <td>
                        {{-- la variable $glosary es equivalente a la variable $glosario que llega por la url, pero otra vista recoge su  verdadero nombre => $glosario --}}
                        <a href="{{route('admin.glosario.edit', $glosary)}}" class="btn btn-primary">Editar</a>
                    </td>
                    <td width="10px">
                        <form action="{{route('admin.glosario.destroy', $glosary)}}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button class="btn btn-danger" type="submit">
                                eliminar
                            </button>
                        </form>
                    </td>
                </tr>   
                @endforeach
                
            </tbody>
        </table>
    </div>

    <div class="card-footer">
        {{$glosario->links()}}
    </div>
    @else
    <div class="card-body">
        <strong class="p-3">
            no hay registros para mostrar
        </strong>
    </div>
   @endif
</div>
