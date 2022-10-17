<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;

class ServiceController extends Controller
{
   
    public function index()
    {
        return view('admin.servicios.index');
    }

   
    public function create()
    {
      return view('admin.servicios.create');
    }

   
    public function store(Request $request)
    {
        $service = Service::create($request->all());

        return redirect()->route('admin.servicios.edit', compact('service'))->with('info', 'servicio creado correctamente');
    }

   
  
    public function edit(Service $service)
    {
        return view('admin.servicios.edit', compact('service'));
    }

    

    public function update(Request $request, Service $service)
    {
        $service->update($request->all());

        return redirect()->route('admin.servicios.index', $service)->with('info', 'servicio actualizado con exito');
    }

    
    public function destroy(Service $service)
    {
        $service->delete();
        return redirect()->route('admin.servicios.index')->with('info', 'servicio eliminado con exito');
    }
}
