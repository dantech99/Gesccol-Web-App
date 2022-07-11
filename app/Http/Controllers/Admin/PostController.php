<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    
    public function index()
    {
        return view('admin.posts.index');
    }

  
    public function create()
    {
        $categorias = Category::pluck('name', 'id');
       return view('admin.posts.create', compact('categorias'));
    }

   
    public function store(Request $request)
    {

        $post = Post::create($request->all());

        if ($request->file('file')) {
            $url = Storage::put('posts', $request->file('file'));

            $post->image()->create([
                'url' => $url]);
        }

        return redirect()->route('admin.posts.edit', compact('post'));
    }

  
    public function show(Post $post)
    {
        //
    }

    public function edit(Post $post)
    {
        $this->authorize('author',  $post);
        $categorias = Category::pluck('name', 'id');

        return view('admin.posts.edit', compact('post', 'categorias'));
    }

   
    public function update(Request $request, Post $post)
    {
        $this->authorize('author',  $post);

        $post->update($request->all());

        if ($request->file('files')) {
            $url = Storage::put('posts', $request->file('file'));
       

            if ($post->image) {
                Storage::delete($post->image->url);

                $post->image->update([
                    'url' => $url]);
            }else {
                $post->image()->create([
                    'url' => $url]);
            }
        }

        return redirect()->route('admin.posts.index', $post)->with('info', 'publicacion actualizada con exito');
    }

 
    public function destroy(Post $post)
    {
        $this->authorize('author',  $post);
        $post->delete();
        return redirect()->route('admin.posts.index')->with('info', 'entrada eliminada con exito');
    }
}
