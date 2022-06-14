<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::latest('id')->paginate(20);

        return view('posts.index', compact('posts'));
    }

 

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        $relations = Post::where('category_id',
        $post->category_id)
        ->where('id', '!=', $post->id)
        ->latest('id')
        ->take(4)
        ->get();
        
        return view('posts.show', compact('post', 'relations'));
    }


    public function category(Category $category)
    {
        return view('posts.categorias');
    }




}
