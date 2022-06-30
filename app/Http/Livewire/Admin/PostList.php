<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Post;
use Livewire\WithPagination;

class PostList extends Component
{
    use WithPagination;


    protected $paginationTheme = "bootstrap";

    public $search;

    public function updatingSearch(){
        $this->resetPage();
    }

    public function render()
    {
        $posts = Post::where('user_id', auth()->user()->id)
        ->where('title', 'LIKE', '%' . $this->search . '%')
        ->latest('id')
        ->paginate();

        return view('livewire.admin.post-list', compact('posts'));
    }
}
