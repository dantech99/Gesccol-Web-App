<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    
    public function index()
    {
        $services = Service::latest('id')->paginate(10);
        
        return view('servicios.index', compact('services'));
    }

    public function show(Service $service)
    {
        return view('servicios.show', compact('service'));
    }

 

}
