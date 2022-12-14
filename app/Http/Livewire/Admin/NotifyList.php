<?php

namespace App\Http\Livewire\Admin;
use App\Models\Notification;
use Livewire\WithPagination;
use Livewire\Component;

class NotifyList extends Component
{
        use WithPagination;

        protected $paginationTheme = "bootstrap";

        public $search;

        public function updatingSearch(){
            $this->resetPage();
        }


    public function render()
    {
        $notificaciones = Notification::where('user_id', auth()->user()->id)
        ->where('title', 'LIKE', '%' . $this->search . '%')
        ->latest('id')
        ->paginate();

        return view('livewire.admin.notify-list', compact('notificaciones'));
    }
}
