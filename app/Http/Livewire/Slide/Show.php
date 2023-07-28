<?php

namespace App\Http\Livewire\Slide;

use App\Models\Slide;
use Livewire\Component;

class Show extends Component
{
    public function render()
    {
        return view('livewire.slide.show', [
            'slides' => Slide::where('is_enabled', 1)->get()
        ]);
    }
}
