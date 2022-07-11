<?php

namespace App\Http\Controllers;

use App\Models\Contract;

use Illuminate\Http\Request;

class ContractController extends Controller
{
     public function index()
    {
        $contratos = Contract::latest('id')->paginate(20);
        $statusone = Contract::where('status', 1)->latest('id')->paginate(20);
        $statustwo = Contract::where('status', 2)->latest('id')->paginate(20);
        $statusthree = Contract::where('status', 3)->latest('id')->paginate(20);
        
        return view('contratos.index', compact('contratos', 'statusone', 'statustwo', 'statusthree'));
        // return $contratos;
    }

  
}
