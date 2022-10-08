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
        //
    }

  
    public function store(Request $request)
    {
        //
    }


    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

  
    public function destroy($id)
    {
        //
    }
}
