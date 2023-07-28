<?php

namespace App\Http\Livewire\Menu;

use App\Models\Menu;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('livewire.menu.index', [
            'items' => Menu::where('is_top_level', 1)->whereNull('parent_id')->orderBy('order', 'ASC')->get(),
        ]);
    }
}
