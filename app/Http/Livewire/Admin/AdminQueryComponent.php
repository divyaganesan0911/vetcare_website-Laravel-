<?php

namespace App\Http\Livewire\Admin;

use App\Models\Query;
use Livewire\Component;

class AdminQueryComponent extends Component
{
    public function render()
    {
        $queries = Query::paginate(12);
        return view('livewire.admin.admin-query-component',['queries'=>$queries]);
    }
}
