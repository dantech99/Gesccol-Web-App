<div class="card">
    <div class="card-header">
        <input wire:model="search" type="text" class="form-control" placeholder="ingrese registro a buscar">
    </div>

    @if ($order->count())
    <div class="card-body w-100">
        <table class="table table-sm table-striped">
            <thead>
                <tr>
                    <th>numero</th>
                    <th>valor</th>
                    <th>objeto</th>
                    <th>descripcion</th>
                    <th >fecha</th>
                    <th colspan="1">Acciones</th>
                </tr>
            </thead>
            <tbody class="">
                @foreach ($order as $orden)
                 <tr>
                    <td># {{$orden->numerorden}}</td>
                    <td>{{$orden->valor}}</td>
                    <td>{{$orden->objeto}}</td>
                    
                    <td> <textarea  cols="40" rows="10" readonly>{{$orden->descripcion}}</textarea></td>
                    <td>{{$orden->created_at->format('Y-m-d')}}</td>
                    <td>
                        <a href="{{route('admin.ordenes.edit', $orden)}}" class="btn btn-primary">Editar</a>
                    </td>
                    <td width="10px">
                        <form action="{{route('admin.ordenes.destroy', $orden)}}" method="POST">
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
        {{$order->links()}}
    </div>
    @else
    <div class="card-body">
        <strong class="p-3">
            no hay registros para mostrar
        </strong>
    </div>
   @endif
</div>

