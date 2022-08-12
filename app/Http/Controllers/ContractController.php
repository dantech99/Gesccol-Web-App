<?php

namespace App\Http\Controllers;
use App\Models\Contract;
use App\Models\Order;
use Illuminate\Http\Request;
class ContractController extends Controller
{
     public function index()
    {
        
        return view('contratos.index');
    }

    public function contracts(){
     $contratos = Contract::latest('id')->paginate(20);
        $statusone = Contract::where('status', 'invitacion')->latest('id')->paginate(20);
        $statustwo = Contract::where('status', 'ejecucion')->latest('id')->paginate(20);
        $statusthree = Contract::where('status', 'celebrado')->latest('id')->paginate(20);
        
        return view('contratos.contratos', compact('contratos', 'statusone', 'statustwo', 'statusthree'));   
    }

    public function ordenes(){
        $ordenes = Order::latest('id')->paginate(20);
        return view('contratos.ordenes', compact('ordenes'));
    }


  
}
