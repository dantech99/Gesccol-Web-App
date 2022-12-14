<div class="card">
    <div class="card-header">
        <input wire:model="search" type="text" class="form-control" placeholder="ingrese registro a buscar">
    </div>

    @if ($notificaciones->count())
    <div class="card-body w-100">
        <table class="table table-sm table-striped">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>titulo</th>
                    <th>descripcion</th>
                    <th>estado</th>
                    <th>Link/enlace</th>
                    <th>documento</th>
                    <th>fecha</th>
                    <th colspan="1">Acciones</th>
                </tr>
            </thead>
            <tbody class="">
                @foreach ($notificaciones as $notify)
                 <tr>
                    <td>{{$notify->id}}</td>
                    <td>{{$notify->title}}</td>
                    <td>{{$notify->description}}</td>
                    <td>{{$notify->status}}</td>
                    <td>{{$notify->link}}</td>
                    <td> <a href="{{Storage::url($notify->files->url)}}" target="_blank">Ver PDF</a></td>
                    <td>{{$notify->created_at}}</td>
                    <td>
                        <a href="{{route('admin.notificaciones.edit', $notify)}}" class="btn btn-primary">Editar</a>
                    </td>
                    <td width="10px">
                        <form action="{{route('admin.notificaciones.destroy', $notify)}}" method="POST">
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
        {{$notificaciones->links()}}
    </div>
    @else
    <div class="card-body">
        <strong class="p-3">
            no hay registros para mostrar
        </strong>
    </div>
   @endif
</div>

