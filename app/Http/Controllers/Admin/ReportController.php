<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Report;
class ReportController extends Controller
{

    public function index()
    {
        return view('admin.reportes.index');
    }

    public function create()
    {
        return view('admin.reportes.create');
    }

  
    public function store(Request $request)
    {
        $report = Report::create($request->all());

        return redirect()->route('admin.reportes.index', compact('report'))->with('info', 'reporte creado correctamente');
    }


    public function edit(Report $reporte)
    {
        return view('admin.reportes.edit', compact('reporte'));
    }


    public function update(Request $request, Report $reporte)
    {
        $reporte->update($request->all());

        return redirect()->route('admin.reportes.index', $reporte)->with('info', 'registro eliminado con exito');
    }

  
    public function destroy(Report $reporte)
    {
        $reporte->delete();
        return redirect()->route('admin.reportes.index')->with('info', 'reporte eliminado con exito');
    }
}
