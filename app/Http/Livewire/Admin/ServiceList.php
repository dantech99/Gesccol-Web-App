<?php

namespace App\Http\Livewire\Admin;


use Livewire\Component;
use App\Models\Service;
use Livewire\WithPagination;

class ServiceList extends Component

{
    use WithPagination;

    protected $paginationTheme = "bootstrap";

    public $search;

    public function updatingSearch(){
        $this->resetPage();
    }

    public function render()
    {
        $servicios = Service::where('user_id', auth()->user()->id)
        ->latest('id')
        ->paginate();
        return view('livewire.admin.service-list', compact('servicios'));
    }
}
