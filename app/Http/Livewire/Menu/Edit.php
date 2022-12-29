<?php

namespace App\Http\Livewire\Menu;

use App\Models\Menu;
use Livewire\Component;
use Illuminate\Support\Facades\Log;

class Edit extends Component
{
    public $modal;
    public $parent;
    public $topLevel = false;
    public $dropdown = false;
    public $menu, $label, $link, $is_dropdown;

    public function mount(Menu $item)
    {
        $this->menu = $item;
        $this->label = $this->menu->btn_label;
        $this->link = $this->menu->btn_link;
        $this->is_dropdown = $this->menu->is_dropdown;

        if (!$item->parent_id) {
            $this->topLevel = true;
        } else {
            $this->parent = $item->parent_id;
        }
    }

    public function save()
    {
        if (!$this->topLevel || ($this->topLevel && !$this->is_dropdown)) {
            $this->validate(['label' => 'required', 'link' => 'required|active_url']);
        } else {
            $this->validate(['label' => 'required']);
        }

        try {
            $this->menu->update([
                'is_dropdown' => $this->is_dropdown,
                'btn_label' => $this->label,
                'btn_link' => ($this->is_dropdown) ? null : $this->link,
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
        return view('livewire.menu.edit');
    }
}
