<div class="card">
    <div class="card-header">
        buscador
    </div>

   <div class="card-body">
       <table class="table table-striped">
           <thead>
               <tr>
                   <th>id</th>
                   <th>title</th>
                   <th colspan="1">Acciones</th>
               </tr>
           </thead>
           <tbody>
               @foreach ($servicios as $service)
               <tr>
                   <td>{{$service->id}}</td>
                   <td>{{$service->title}}</td>
                   <td>
                       <a href="{{route('admin.servicios.edit', $service)}}" class="btn btn-primary">Editar</a>
                   </td>
                   <td>
                       <form action="{{route('admin.servicios.destroy', $service)}}" method="POST">
                           @method('DELETE')
                           @csrf
                           <button class="btn btn-danger" type="submit">Eliminar</button>
                       </form>
                   </td>
               </tr>
               @endforeach
           </tbody>
       </table>
   </div>
   
</div>
