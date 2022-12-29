<?php

namespace App\Http\Livewire\Menu;

use App\Models\Menu;
use Livewire\Component;
use Illuminate\Support\Facades\Log;

class Delete extends Component
{
    public $menu, $modal;

    public function mount(Menu $item)
    {
        $this->menu = $item;
    }

    public function delete()
    {
        try {

            if (Menu::where('parent_id', $this->menu->id)->exists()) {
                foreach (Menu::where('parent_id', $this->menu->id)->get() as $child) {
                    $child->delete();
                }
            }

            $this->menu->delete();
            session()->flash('flash.banner', 'Item successfully deleted!');
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
        return view('livewire.menu.delete');
    }
}
