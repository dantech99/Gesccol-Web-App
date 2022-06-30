<div class="card">
    <div class="card-header">
        <input wire:model="search" type="text" class="form-control" placeholder="ingrese registro a buscar">
    </div>

    @if ($posts->count())
    <div class="card-body">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Titulo</th>
                    <th colspan="1">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                 <tr>
                    <td>{{$post->id}}</td>
                    <td>{{$post->title}}</td>
                    <td>
                        <a href="{{route('admin.posts.edit', $post)}}" class="btn btn-primary">Editar</a>
                    </td>
                    <td width="10px">
                        <form action="{{route('admin.posts.destroy', $post)}}" method="POST">
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
        {{$posts->links()}}
    </div>
    @else
    <div class="card-body">
        <strong class="p-3">
            no hay registros para mostrar
        </strong>
    </div>
   @endif
</div>
