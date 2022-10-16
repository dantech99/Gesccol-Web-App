<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Report;
use Illuminate\Support\Facades\DB;

class ReportController extends Controller
{
   
    public function index(Request $request)
    {
        $search = trim($request->get('busqueda'));

        if ($request->get('vertodo')) {
            $reports = Report::all()->paginate();
        }
        $reports = DB::table('reports')
        ->select('id', 'n_radicado', 'tipo_mutacion', 'status', 'notificacion', 'observaciones')
        ->where('n_radicado', 'LIKE', '%' .$search. '%')
        ->orderBy('id', 'asc')
        ->paginate(10);
        return view('reportes.index', compact('reports', 'search'));
    }

}
