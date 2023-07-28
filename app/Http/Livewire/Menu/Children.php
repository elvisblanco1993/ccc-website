<?php

namespace App\Http\Livewire\Menu;

use App\Models\Menu;
use Livewire\Component;

class Children extends Component
{
    public $children = null;

    public function mount($parent = null)
    {
        if (Menu::exists($parent)) {
            $this->children = Menu::where('parent_id', $parent)->get();
        }
    }

    public function render()
    {
        return view('livewire.menu.children');
    }
}
