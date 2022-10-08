<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Report;

class ReportList extends Component
{
    use WithPagination;

    protected $paginationTheme = "bootstrap";

    public $search;

    public function render()
    {
        $report = Report::where('n_radicado', 'LIKE', '%' . $this->search . '%')
        ->latest('id')
        ->paginate();

        return view('livewire.admin.report-list', compact('report'));
    }
}
