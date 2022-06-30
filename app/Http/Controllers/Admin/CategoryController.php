<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
 
    
    public function index()
    {
        $categorias = Category::all();
        return view('admin.categorias.index', compact('categorias'));
    }

   
    public function create()
    {
        return view('admin.categorias.create');
    }

  
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'slug' => 'required | unique:categories'
        ]);

        $category = Category::create($request->all());
        return redirect()->route('admin.categorias.index', $category)->with('info', 'categoria creada con exito');
    }

  
    public function show(Category $category)
    {
        return view('admin.categorias.edit', compact('category'));
    }

    
    public function edit(Category $category)
    {
        return view('admin.categorias.edit', compact('category'));
    }

   
    public function update(Request $request, Category $category)
    {
         $request->validate([
            'name' => 'required',
            'slug' => "required | unique:categories,slug,$category->id"
        ]);

        $category->update($request->all());
        return redirect()->route('admin.categorias.index', $category)->with('info', 'categoria actualizada con extio');
    }

    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->route('admin.categorias.index')->with('info', 'categoria eliminada con exito');
    }
}
