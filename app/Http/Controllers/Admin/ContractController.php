<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contract;
use Illuminate\Support\Facades\Storage;

class ContractController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.contratos.index');
    }

    
    public function create()
    {
        return view('admin.contratos.create');
    }

   
    public function store(Request $request)
    {
        $contract = Contract::create($request->all());
        if ($request->file('file')) {
            $url = Storage::put('documents', $request->file('file'));
            $contract->files()->create([
                'url' => $url
            ]);
        }
      

        return redirect()->route('admin.contratos.edit', compact('contract'));
       
    }

   
   

  
    public function edit(Contract $contract)
    {
        return view('admin.contratos.edit', compact('contract'));
    }

   
    public function update(Request $request, Contract $contract)
    {
        $contract->update($request->all());

        if ($request->file('files')) {
            $url = Storage::put('posts', $request->file('file'));

            if ($contract->files) {
                Storage::delete($contract->files->url);

                $contract->files->update([
                    'url' => $url]);
            }else{
                $contract->files()->create([
                    'url' => $url]);
            }
        }

         return redirect()->route('admin.contratos.index', $contract)->with('info', 'Actualizacion Exitosa');
    }

    
    public function destroy(Contract $contract)
    {
        $contract->delete();
        return redirect()->route('admin.contratos.index')->with('info', 'Registro eliminado con exito');
    }
}
