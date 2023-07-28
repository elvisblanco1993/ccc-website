<?php

namespace App\Http\Livewire\Menu;

use App\Models\Menu;
use Livewire\Component;
use Illuminate\Support\Facades\Log;

class Create extends Component
{
    public $modal;
    public $parent;
    public $topLevel = false;
    public $dropdown = false;
    public $label, $link, $is_dropdown = false;

    public function mount($parent = null)
    {
        if (!$parent) {
            $this->topLevel = true;
        } else {
            $this->parent = $parent;
        }
    }

    public function save()
    {
        if (!$this->topLevel || ($this->topLevel && !$this->is_dropdown)) {
            $this->validate(['label' => 'required', 'link' => 'required']);
        } else {
            $this->validate(['label' => 'required']);
        }

        try {
            Menu::create([
                'is_top_level' => $this->topLevel,
                'parent_id' => $this->parent,
                'is_dropdown' => $this->is_dropdown,
                'btn_label' => $this->label,
                'btn_link' => $this->link,
                'order' => (Menu::where('is_top_level', 1)->whereNull('parent_id')->count() > 0) ? Menu::where('is_top_level', 1)->whereNull('parent_id')->count() + 1 : 1
            ]);

            session()->flash('flash.banner', 'Item successfully saved!');
            session()->flash('flash.bannerStyle', 'success');
        } catch (\Throwable $th) {
            Log::error($th);
            session()->flash('flash.banner', $th->getMessage());
            session()->flash('flash.bannerStyle', 'danger');
        }
        return redirect()->route('admin.menu');
    }

    public function render()
    {
        return view('livewire.menu.create');
    }
}
