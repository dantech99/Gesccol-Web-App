<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;

class OrderController extends Controller
{
   
    public function index()
    {
        return view('admin.ordenes.index');
    }

 
    public function create()
    {
        return view('admin.ordenes.create');
    }

   
    public function store(Request $request)
    {
        $order = Order::create($request->all());
        return redirect()->route('admin.ordenes.edit', compact('order'));
    }

    
    public function show($order)
    {
         
    }

  
    public function edit(Order $order)
    {
        return view('admin.ordenes.edit', compact('order'));
    }

   
    public function update(Request $request, Order $order)
    {
        $order->update($request->all());

        return redirect()->route('admin.ordenes.index', $order)->with('info', 'Actualizacion Exitosa');
    }

   
    public function destroy(Order $order)
    {
        // $this->authorize('author', $order)
        $order->delete();
        return redirect()->route('admin.ordenes.index')->with('info', 'Registro eliminado con exito');
    }
}
