<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Glosary;
use Livewire\WithPagination;

class GlosaryList extends Component
{
    use WithPagination;
    protected $paginationTheme = "bootstrap";

    public $search;

    public function updatingSearch(){
        $this->resetPage();
    }

    public function render()
    {
        $glosario = Glosary::where('user_id', auth()->user()->id)
        ->where('titulo', 'LIKE', '%' . $this->search . '%')
        ->latest('id')
        ->paginate();

        return view('livewire.admin.glosary-list', compact('glosario'));
    }
}
