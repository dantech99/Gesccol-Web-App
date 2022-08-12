<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Glosary;


class GlosaryController extends Controller
{
    
    
    public function index()
    {
       return view('admin.glosario.index');
    }

   
    public function create()
    {
        return view('admin.glosario.create');
    }

    
    public function store(Request $request)
    {
        $glosario = Glosary::create($request->all());
        return redirect()->route('admin.glosario.index', compact('glosario'));
    }



  
    public function edit(Glosary $glosario)
    {
        return view('admin.glosario.edit', compact('glosario'));
    }

  
    public function update(Request $request, Glosary $glosario)
    {
        $glosario->update($request->all());

        return redirect()->route('admin.glosario.index', $glosario)->with('info', 'Actualizacion Exitosa');
    }

  
    public function destroy(Glosary $glosario)
    {
        $glosario->delete();
        return redirect()->route('admin.glosario.index')->with('info', 'Registro eliminado con exito');
    }
}
