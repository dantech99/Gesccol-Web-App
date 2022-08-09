<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Order;
use Livewire\WithPagination;

class OrderList extends Component
{
    use WithPagination;
    protected $paginationTheme = "bootstrap";

    public $search;

    public function updatingSearch(){
        $this->resetPage();
    }

    public function render()
    {
        $order = Order::where('user_id', auth()->user()->id)
        ->where('numerorden', 'LIKE', '%'. $this->search . '%')
        ->latest('id')
        ->paginate();
        return view('livewire.admin.order-list', compact('order'));
    }
}
