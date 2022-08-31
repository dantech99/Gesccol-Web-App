<div class="card">
    <div class="card-header">
        <input wire:model="search" type="text" class="form-control" placeholder="ingrese registro a buscar">
    </div>

    @if ($contratos->count())
    <div class="card-body w-100">
        <table class="table table-sm table-striped">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>numero del proceso</th>
                    <th>tipo</th>
                    <th>estado</th>
                    <th>entidad</th>
                    <th>objetivo</th>
                    <th>valor</th>
                    <th>documentos</th>
                    <th>fecha</th>
                    <th colspan="1">Acciones</th>
                </tr>
            </thead>
            <tbody class="">
                @foreach ($contratos as $contract)
                 <tr>
                    <td>{{$contract->id}}</td>
                    <td>{{$contract->numeroprocesos}}</td>
                    <td>{{$contract->tipo}}</td>
                    <td>{{$contract->estado}}</td>
                    <td>{{$contract->entidad}}</td>
                    <td> <textarea  cols="30" rows="10" readonly>{{$contract->objetivo}}</textarea></td>
                    <td>{{$contract->valor}}</td>
                    <td>{{$contract->documentos}}</td>
                    <td>{{$contract->created_at}}</td>
                    <td>
                        <a href="{{route('admin.contratos.edit', $contract)}}" class="btn btn-primary">Editar</a>
                    </td>
                    <td width="10px">
                        <form action="{{route('admin.contratos.destroy', $contract)}}" method="POST">
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
        {{$contratos->links()}}
    </div>
    @else
    <div class="card-body">
        <strong class="p-3">
            no hay registros para mostrar
        </strong>
    </div>
   @endif
</div>

