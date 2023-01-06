<?php

namespace App\Http\Livewire\ReadingPlan;

use App\Models\ReadingPlan;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('livewire.reading-plan.index', [
            'plans' => ReadingPlan::get()
        ]);
    }
}
