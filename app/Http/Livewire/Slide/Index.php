<?php

namespace App\Http\Livewire\Slide;

use App\Models\Slide;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('livewire.slide.index', [
            'slides' => Slide::orderBy('created_at', 'DESC')->get(),
        ]);
    }
}
