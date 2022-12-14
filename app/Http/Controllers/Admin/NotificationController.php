<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Notification;
use Illuminate\Support\Facades\Storage;

class NotificationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.notificaciones.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.notificaciones.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $notification = Notification::create($request->all());
        if ($request->file('file')) {
            $url = Storage::put('docsnotify', $request->file('file'));
            $notification->files()->create(['url' => $url]);
        }

        return redirect()->route('admin.notificaciones.edit', compact('notification'));
    }

  

 
    public function edit(Notification $notification)
    {
        return view('admin.notificaciones.edit', compact('notification'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Notification $notification)
    {
        $notification->update($request->all());

        if ($request->file('files')) {
            $url = Storage::put('docsnotify', $request->file('file'));
            if ($notification->files) {
                Storage::delete($notification->files->url);
                
                $notification->files->update([
                'url' => $url]);
            } else {
            $notification->files()->create(['url' => $url]);
            }
    }

        return redirect()->route('admin.notificaciones.index', $notification)->with('info', 'Actualizacion Exitosa');
    }

    
    public function destroy(Notification $notification)
    {
        $notification->delete();
        return redirect()->route('admin.notificaciones.index')->with('info', 'Registro eliminado con exito');
    }
}
