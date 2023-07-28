<?php

namespace App\Http\Livewire\Slide;

use Carbon\Carbon;
use App\Models\Slide;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Log;

class Create extends Component
{
    use WithFileUploads;

    public $modal;
    public $title, $bg_image, $content, $btn_label, $btn_link, $start_at, $end_at;

    public function save()
    {
        $this->validate([
            'title' => 'required',
            'bg_image' => 'image|max:2048', // 2MB max upload
        ]);

        try {
            Slide::create([
                'title' => $this->title,
                'bg_image' => $this->bg_image->store('photos'),
                'content' => $this->content,
                'btn_label' => $this->btn_label,
                'btn_link' => $this->btn_link,
                'start_at' => $this->start_at,
                'end_at' => $this->end_at,
                'is_enabled' => ($this->start_at && Carbon::now()->gte($this->start_at)) ? 1 : 0,
            ]);
            // (Carbon\Carbon::now()->gte($slide->start_at) && Carbon\Carbon::now()->lte($slide->end_at)
            session()->flash('flash.banner', 'Slide successfully added!');
            session()->flash('flash.bannerStyle', 'success');
        } catch (\Throwable $th) {
            Log::error($th);
            session()->flash('flash.banner', $th->getMessage());
            session()->flash('flash.bannerStyle', 'error');
        }
        return redirect()->route('admin.slides');
    }

    public function render()
    {
        return view('livewire.slide.create');
    }
}
