<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\Category;
class Categories extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $categorias = Category::all();
        return view('components.categories', compact('categorias'));
    }
}
