<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    
    public function index()
    {
        $service = Service::latest('id')->paginate(20);
        
        return view('servicios.index');
    }

    public function show($id)
    {
        return view('servicios.show');
    }

 

}
