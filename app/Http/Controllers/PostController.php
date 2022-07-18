<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\Cache;


class PostController extends Controller
{
  
    public function index()
    {
       
           $posts = Post::latest('id')->paginate(9);
           Cache::put('posts', $posts);

          
        
     
        return view('posts.index', compact('posts'));
    }



    public function show(Post $post)
    {
        $similares = Post::where('category_id', $post->category_id)
        ->where('id', '!=', $post->id)
        ->latest('id')
        ->take(3)
        ->get();
        
        return view('posts.show', compact('post', 'similares'));
    }


    public function category(category $category)
    {
        $posts = Post::where('category_id', $category->id)
        ->latest('id')
        ->paginate(4);
        return view('posts.categorias', compact('posts', 'category'));
    }




}
