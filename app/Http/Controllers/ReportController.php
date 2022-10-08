<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Report;

class ReportController extends Controller
{
   
    public function index()
    {
        $reports = Report::latest('id')->paginate(30);
        return view('reportes.index', compact('reports'));
    }

}
