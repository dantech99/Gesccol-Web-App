<?php

namespace App\Http\Controllers;
use App\Models\Glosary;
use Illuminate\Http\Request;

class GlosaryController extends Controller
{
    public function index()
    {
        $glosaries = Glosary::all();
        
        // return $glosario;
        return view('glosario.index', compact('glosaries'));
    }
}
