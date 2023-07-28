<?php

namespace App\Http\Livewire\Menu;

use App\Models\Menu;
use Livewire\Component;

class Reorder extends Component
{
    public $modal, $links;

    public function mount()
    {
        $this->links = Menu::where('is_top_level', 1)->whereNull('parent_id')->orderBy('order', 'ASC')->get();
    }

    public function updateMenuItems($orderedIds)
    {
        foreach ($orderedIds as $item) {
            Menu::findOrFail($item['value'])->update(['order' => $item['order']]);
        }
        $this->mount();
    }

    public function refresh()
    {
        return redirect()->route('admin.menu');
    }

    public function render()
    {
        return view('livewire.menu.reorder');
    }
}
