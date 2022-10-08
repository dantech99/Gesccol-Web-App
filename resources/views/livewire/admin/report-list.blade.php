<div class="card">
    <div class="card-header">
        <input wire:model="search" type="text" class="form-control" placeholder="ingrese registro a buscar">
    </div>

    @if ($report->count())
    <div class="card-body w-100">
        <table class="table table-sm table-striped">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Numero de Radicado</th>
                    <th>Tipo de Mutacion</th>
                    <th>Estado</th>
                    <th>Notificacion</th>
                    <th>Observacion</th>
                    <th colspan="1">Acciones</th>
                </tr>
            </thead>
            <tbody class="">
                @foreach ($report as $reporte)
                 <tr>
                    <td>{{$reporte->id}}</td>
                    <td>{{$reporte->n_radicado}}</td>
                    <td>{{$reporte->tipo_mutacion}}</td>
                    <td>{{$reporte->status}}</td>
                    <td>{{$reporte->notificacion}}</td>
                    <td> <textarea  cols="30" rows="10" readonly>{{$reporte->observaciones}}</textarea></td>
                    <td>{{$reporte->created_at}}</td>
                    <td>
                        <a href="{{route('admin.reportes.edit', $reporte)}}" class="btn btn-primary">Editar</a>
                    </td>
                    <td width="10px">
                        <form action="{{route('admin.reportes.destroy', $reporte)}}" method="POST">
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
        {{$report->links()}}
    </div>
    @else
    <div class="card-body">
        <strong class="p-3">
            no hay registros para mostrar
        </strong>
    </div>
   @endif
</div>

