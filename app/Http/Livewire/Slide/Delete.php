<?php

namespace App\Http\Livewire\Slide;

use App\Models\Slide;
use Livewire\Component;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class Delete extends Component
{
    public $modal, $slide;

    public function mount(Slide $slide)
    {
        $this->slide = $slide;
    }

    public function delete()
    {
        try {
            Storage::delete($this->slide->bg_image);
            $this->slide->delete();
            session()->flash('flash.banner', 'Slide successfully deleted!');
            session()->flash('flash.bannerStyle', 'success');
        } catch (\Throwable $th) {
            Log::error($th);
            session()->flash('flash.banner', $th->getMessage());
            session()->flash('flash.bannerStyle', 'danger');
        }
        return redirect()->route('admin.slides');
    }

    public function render()
    {
        return view('livewire.slide.delete');
    }
}
