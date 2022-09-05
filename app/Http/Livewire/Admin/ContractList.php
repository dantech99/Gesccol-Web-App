<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Contract;
class ContractList extends Component
{
    use WithPagination;
    
    protected $paginationTheme = "bootstrap";

    public $search;

    public function updatingSearch(){
        $this->resetPage();
    }

    public function render()
    {
        $contratos = Contract::where('user_id', auth()->user()->id)
        ->where('tipo', 'LIKE', '%' . $this->search . '%')
        ->latest('id')
        ->paginate();

        return view('livewire.admin.contract-list', compact('contratos'));
    }
}
